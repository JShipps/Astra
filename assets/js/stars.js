/* Starfield — twinkling stars with a slow drift, drawn on <canvas>.
   Falls back to a static field when prefers-reduced-motion is set. */
(function () {
    'use strict';

    var canvas = document.getElementById('starfield');
    if (!canvas) return;

    var ctx = canvas.getContext('2d');
    var reduced = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

    var stars = [];
    var STAR_COUNT = 220;

    function resize() {
        canvas.width = window.innerWidth;
        canvas.height = window.innerHeight;
        build();
    }

    function build() {
        stars = [];
        for (var i = 0; i < STAR_COUNT; i++) {
            stars.push({
                x: Math.random() * canvas.width,
                y: Math.random() * canvas.height,
                r: Math.random() * 1.3 + 0.3,          // radius
                a: Math.random(),                       // base alpha
                t: Math.random() * Math.PI * 2,         // twinkle phase
                s: Math.random() * 0.9 + 0.2,          // twinkle speed
                hue: Math.random() < 0.15 ? '200, 180, 255'  : '230, 235, 255'
            });
        }
    }

    function draw(ts) {
        ctx.clearRect(0, 0, canvas.width, canvas.height);

        for (var i = 0; i < stars.length; i++) {
            var st = stars[i];
            st.t += 0.016 * st.s;

            var alpha;
            if (reduced) {
                alpha = st.a * 0.6 + 0.2;
            } else {
                alpha = st.a * 0.55 + 0.25 + Math.sin(st.t) * 0.25;
                st.y += 0.05;                         // slow downward drift
                if (st.y > canvas.height + 2) st.y = -2;
            }

            ctx.beginPath();
            ctx.arc(st.x, st.y, st.r, 0, Math.PI * 2);
            ctx.fillStyle = 'rgba(' + st.hue + ',' + Math.max(alpha, 0.05) + ')';
            ctx.fill();
        }

        if (!reduced) requestAnimationFrame(draw);
    }

    var resizeTimer;
    window.addEventListener('resize', function () {
        clearTimeout(resizeTimer);
        resizeTimer = setTimeout(resize, 120);
    });

    resize();
    draw(0);
})();
