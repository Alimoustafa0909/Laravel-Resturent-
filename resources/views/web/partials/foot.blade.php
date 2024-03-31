<script src="{{asset('assets/js/jquery.min.js')}}"></script>
<script src=" {{asset('assets/js/jquery-migrate-3.0.1.min.js')}}"></script>
<script src="{{asset('assets/js/popper.min.js')}} "></script>
<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/js/jquery.easing.1.3.js')}}"></script>
<script src="{{asset('assets/js/jquery.waypoints.min.js')}}"></script>
<script src="{{asset('assets/js/jquery.stellar.min.js')}}"></script>
<script src="{{asset('assets/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('assets/js/jquery.magnific-popup.min.js')}}"></script>
<script src="{{asset('assets/js/aos.js')}}"></script>
<script src="{{asset('assets/js/jquery.animateNumber.min.js')}}"></script>
<script src="{{asset('assets/js/bootstrap-datepicker.js')}}"></script>
<script src="{{asset('assets/js/jquery.timepicker.min.js')}}"></script>
<script src="{{asset('assets/js/scrollax.min.js')}}"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&amp;sensor=false"></script>
<script src="{{asset('assets/js/google-map.js')}}"></script>
<script src="{{asset('assets/js/main.js')}}"></script>

<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }

    gtag('js', new Date());

    gtag('config', 'UA-23581568-13');
</script>
<script nonce="c592b4a0-c7e2-4550-99ec-03c3a5cf9f38">(function (w, d) {
        !function (bg, bh, bi, bj) {
            bg[bi] = bg[bi] || {};
            bg[bi].executed = [];
            bg.zaraz = {deferred: [], listeners: []};
            bg.zaraz.q = [];
            bg.zaraz._f = function (bk) {
                return async function () {
                    var bl = Array.prototype.slice.call(arguments);
                    bg.zaraz.q.push({m: bk, a: bl})
                }
            };
            for (const bm of ["track", "set", "debug"]) bg.zaraz[bm] = bg.zaraz._f(bm);
            bg.zaraz.init = () => {
                var bn = bh.getElementsByTagName(bj)[0], bo = bh.createElement(bj),
                    bp = bh.getElementsByTagName("title")[0];
                bp && (bg[bi].t = bh.getElementsByTagName("title")[0].text);
                bg[bi].x = Math.random();
                bg[bi].w = bg.screen.width;
                bg[bi].h = bg.screen.height;
                bg[bi].j = bg.innerHeight;
                bg[bi].e = bg.innerWidth;
                bg[bi].l = bg.location.href;
                bg[bi].r = bh.referrer;
                bg[bi].k = bg.screen.colorDepth;
                bg[bi].n = bh.characterSet;
                bg[bi].o = (new Date).getTimezoneOffset();
                if (bg.dataLayer) for (const bt of Object.entries(Object.entries(dataLayer).reduce(((bu, bv) => ({...bu[1], ...bv[1]})), {}))) zaraz.set(bt[0], bt[1], {scope: "page"});
                bg[bi].q = [];
                for (; bg.zaraz.q.length;) {
                    const bw = bg.zaraz.q.shift();
                    bg[bi].q.push(bw)
                }
                bo.defer = !0;
                for (const bx of [localStorage, sessionStorage]) Object.keys(bx || {}).filter((bz => bz.startsWith("_zaraz_"))).forEach((by => {
                    try {
                        bg[bi]["z_" + by.slice(7)] = JSON.parse(bx.getItem(by))
                    } catch {
                        bg[bi]["z_" + by.slice(7)] = bx.getItem(by)
                    }
                }));
                bo.referrerPolicy = "origin";
                bo.src = "../../cdn-cgi/zaraz/sd0d9.js?z=" + btoa(encodeURIComponent(JSON.stringify(bg[bi])));
                bn.parentNode.insertBefore(bo, bn)
            };
            ["complete", "interactive"].includes(bh.readyState) ? zaraz.init() : bg.addEventListener("DOMContentLoaded", zaraz.init)
        }(w, d, "zarazData", "script");
    })(window, document);</script>

<script defer src="https://static.cloudflareinsights.com/beacon.min.js/v8b253dfea2ab4077af8c6f58422dfbfd1689876627854"
        integrity="sha512-bjgnUKX4azu3dLTVtie9u6TKqgx29RBwfj3QXYt5EKfWM/9hPSAI/4qcV5NACjwAo8UtTeWefx6Zq5PHcMm7Tg=="
        data-cf-beacon='{"rayId":"803846db3b5c12b5","version":"2023.8.0","b":1,"token":"cd0b4b3a733644fc843ef0b185f98241","si":100}'
        crossorigin="anonymous"></script>


@stack('scripts')
