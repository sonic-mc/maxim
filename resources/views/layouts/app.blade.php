<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Maxi Medical Zimbabwe – Trusted supplier of medical equipment, accessories, medicines and healthcare solutions.">
    <title>@yield('title', 'Maxi Medical Zimbabwe')</title>

    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Google Fonts: DM Sans + DM Serif Display (enterprise / ProHealth feel) -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@300;400;500;600;700&family=DM+Serif+Display&display=swap" rel="stylesheet">

    <!-- Favicon -->
    <link rel="icon" type="image/svg+xml" href="/images/logo-svg.svg">
    <link rel="shortcut icon" href="/images/logo-svg.svg">

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans:  ['DM Sans', 'sans-serif'],
                        serif: ['DM Serif Display', 'serif'],
                    },
                    colors: {
                        primary:  '#1a5faa',
                        'primary-dark': '#0f3d77',
                        'primary-light': '#e8f1fb',
                        accent:   '#e63946',
                        'accent-dark': '#c0392b',
                        neutral:  '#f4f7fc',
                    },
                    boxShadow: {
                        card: '0 2px 16px 0 rgba(26,95,170,0.10)',
                        'card-lg': '0 8px 40px 0 rgba(26,95,170,0.16)',
                    }
                }
            }
        }
    </script>

    <style>
        *, *::before, *::after { font-family: 'DM Sans', sans-serif; box-sizing: border-box; }
        html { scroll-behavior: smooth; }

        /* ── Page transition ── */
        body              { opacity: 0; transition: opacity .38s ease; }
        body.page-ready   { opacity: 1; }
        body.page-leaving { opacity: 0; transition: opacity .25s ease; }

        /* ── Typography helpers ── */
        .heading-xl  { font-family:'DM Serif Display',serif; font-size:clamp(2.2rem,5vw,3.5rem); line-height:1.12; color:#fff; }
        .heading-lg  { font-family:'DM Serif Display',serif; font-size:clamp(1.8rem,3.5vw,2.6rem); line-height:1.2; color:#0f3d77; }
        .heading-md  { font-size:1.5rem; font-weight:700; color:#0f3d77; }
        .label-upper { font-size:.72rem; font-weight:700; letter-spacing:.14em; text-transform:uppercase; color:#1a5faa; }
        .body-muted  { color:#6b7280; font-size:.95rem; line-height:1.7; }

        /* ── Buttons ── */
        .btn         { display:inline-flex; align-items:center; gap:.45rem; font-weight:600; font-size:.9rem; border-radius:.5rem; padding:.7rem 1.6rem; transition:all .2s ease; cursor:pointer; }
        .btn-primary { background:#1a5faa; color:#fff; }
        .btn-primary:hover { background:#0f3d77; }
        .btn-outline { background:transparent; color:#fff; border:2px solid rgba(255,255,255,.55); }
        .btn-outline:hover { background:rgba(255,255,255,.12); border-color:#fff; }
        .btn-accent  { background:#e63946; color:#fff; }
        .btn-accent:hover { background:#c0392b; }
        .btn-accent-outline { background:transparent; color:#e63946; border:2px solid #e63946; }
        .btn-accent-outline:hover { background:#e63946; color:#fff; }

        /* ── Cards ── */
        .card        { background:#fff; border-radius:1rem; border:1px solid #e8eef7; box-shadow:0 2px 16px rgba(26,95,170,.08); transition:transform .22s ease, box-shadow .22s ease; }
        .card:hover  { transform:translateY(-5px); box-shadow:0 12px 40px rgba(26,95,170,.15); }
        .dept-card   { background:#fff; border-radius:.85rem; border:1.5px solid #dde7f5; padding:1.5rem 1.25rem; display:flex; flex-direction:column; align-items:center; text-align:center; transition:all .2s; cursor:default; }
        .dept-card:hover, .dept-card.active { background:#1a5faa; border-color:#1a5faa; }
        .dept-card:hover *, .dept-card.active * { color:#fff !important; }
        .dept-card:hover .dept-icon, .dept-card.active .dept-icon { background:rgba(255,255,255,.2); }

        /* ── Stat strip ── */
        .stat-strip  { background:rgba(255,255,255,.12); backdrop-filter:blur(12px); border:1px solid rgba(255,255,255,.22); border-radius:1rem; }

        /* ── Section helpers ── */
        .section-pad { padding:5rem 1.5rem; }
        .section-sm  { padding:3.5rem 1.5rem; }
        .divider     { width:3rem; height:3px; background:#1a5faa; border-radius:2px; margin:1rem 0 1.5rem; }

        /* ── Navbar ── */
        .nav-link    { font-size:.88rem; font-weight:500; color:#374151; transition:color .15s; position:relative; padding-bottom:2px; }
        .nav-link::after { content:''; position:absolute; bottom:0; left:0; width:0; height:2px; background:#1a5faa; border-radius:2px; transition:width .2s; }
        .nav-link:hover { color:#1a5faa; }
        .nav-link:hover::after { width:100%; }
        .nav-link.active { color:#1a5faa; }
        .nav-link.active::after { width:100%; }

        /* ════════════════════════════════════════
           SCROLL REVEAL
        ════════════════════════════════════════ */
        .sr {
            opacity: 0;
            transform: translateY(40px);
            transition: opacity .65s cubic-bezier(.22,.68,0,1.05),
                        transform .65s cubic-bezier(.22,.68,0,1.05);
        }
        .sr.sr-visible    { opacity: 1; transform: translateY(0); }
        .sr-delay-1  { transition-delay: .08s; }
        .sr-delay-2  { transition-delay: .18s; }
        .sr-delay-3  { transition-delay: .28s; }
        .sr-delay-4  { transition-delay: .38s; }
        .sr-delay-5  { transition-delay: .48s; }
        .sr-delay-6  { transition-delay: .58s; }

        /* ════════════════════════════════════════
           ENHANCED CARD HOVER — icon scale
        ════════════════════════════════════════ */
        .card         { transition: transform .26s cubic-bezier(.22,.68,0,1.2), box-shadow .26s ease; }
        .card:hover   { transform: translateY(-6px); box-shadow: 0 16px 48px rgba(26,95,170,.18); }
        /* Icon wrapper inside any card scales on parent hover */
        .card svg,
        .dept-card svg { transition: transform .28s cubic-bezier(.22,.68,0,1.4); transform-origin: center; }
        .card:hover svg     { transform: scale(1.18); }
        .dept-card:hover svg { transform: scale(1.18); }

        /* ════════════════════════════════════════
           BUTTON GLOW + RIPPLE
        ════════════════════════════════════════ */
        .btn {
            position: relative;
            overflow: hidden;
            transition: background .22s ease, color .22s ease,
                        transform .18s ease, box-shadow .22s ease;
        }
        /* Radial glow overlay */
        .btn::before {
            content: '';
            position: absolute; inset: 0;
            border-radius: inherit;
            background: radial-gradient(circle at 50% 50%, rgba(255,255,255,.28) 0%, transparent 70%);
            opacity: 0;
            transition: opacity .25s;
            pointer-events: none;
        }
        .btn:hover::before { opacity: 1; }
        /* Per-style glow colours */
        .btn-accent:hover  { transform: translateY(-2px); box-shadow: 0 6px 22px rgba(230,57,70,.45); }
        .btn-primary:hover { transform: translateY(-2px); box-shadow: 0 6px 22px rgba(26,95,170,.38); }
        .btn-outline:hover { box-shadow: 0 0 18px rgba(255,255,255,.25); transform: translateY(-2px); }
        .btn-accent-outline:hover { box-shadow: 0 4px 18px rgba(230,57,70,.30); transform: translateY(-2px); }
        /* Ripple span injected by JS */
        .btn .ripple {
            position: absolute; border-radius: 50%;
            background: rgba(255,255,255,.38);
            transform: scale(0);
            animation: btnRipple .55s linear;
            pointer-events: none;
        }
        @keyframes btnRipple {
            to { transform: scale(4); opacity: 0; }
        }
    </style>
</head>
<body class="bg-white text-gray-800 antialiased">

    <x-navbar />

    <main>
        @yield('content')
        {{ $slot ?? '' }}
    </main>

    <x-footer />

    <script>
    /* ── Page transition ── */
    (function () {
        // Fade in as soon as DOM is ready
        function ready() { document.body.classList.add('page-ready'); }
        if (document.readyState === 'loading') {
            document.addEventListener('DOMContentLoaded', ready);
        } else {
            ready();
        }

        // Intercept all internal same-origin link clicks
        document.addEventListener('click', function (e) {
            const a = e.target.closest('a[href]');
            if (!a) return;
            const href = a.getAttribute('href');
            // Skip: external, anchor-only, mailto, tel, new-tab, or already active
            if (
                !href ||
                href.startsWith('#') ||
                href.startsWith('mailto') ||
                href.startsWith('tel') ||
                a.target === '_blank' ||
                e.metaKey || e.ctrlKey || e.shiftKey || e.altKey
            ) return;
            try {
                const url = new URL(href, window.location.href);
                if (url.origin !== window.location.origin) return;
                // Same page anchor — let scroll-behavior handle it
                if (url.pathname === window.location.pathname && url.hash) return;
            } catch (_) { return; }

            e.preventDefault();
            const dest = a.href;
            document.body.classList.remove('page-ready');
            document.body.classList.add('page-leaving');
            setTimeout(function () { window.location.href = dest; }, 260);
        });

        // On back/forward navigation, ensure page is visible
        window.addEventListener('pageshow', function (e) {
            if (e.persisted) {
                document.body.classList.remove('page-leaving');
                document.body.classList.add('page-ready');
            }
        });
    }());

    /* ══════════════════════════════════════════════════════
       SCROLL REVEAL  —  IntersectionObserver auto-stagger
    ══════════════════════════════════════════════════════ */
    (function () {
        // Elements to animate: cards, dept-cards, section headings/labels
        const SELECTORS = [
            '.card',
            '.dept-card',
            '.heading-lg',
            '.label-upper',
            '.section-pad > .max-w-7xl > h2',
            '.section-pad > .max-w-7xl > p',
        ];

        function isInHero(el) {
            // Skip anything already handled by the hero entrance animations
            return el.closest('section') && el.closest('section').querySelector('.hero-anim, .hero-anim-smooth');
        }

        function applyReveal() {
            SELECTORS.forEach(sel => {
                document.querySelectorAll(sel).forEach(el => {
                    if (el.classList.contains('sr') || isInHero(el)) return;

                    // Stagger: look at position among sibling cards
                    const siblings = el.parentElement
                        ? [...el.parentElement.children].filter(c => c.matches(sel))
                        : [];
                    const idx = siblings.indexOf(el);
                    el.classList.add('sr');
                    if (idx >= 0) {
                        el.classList.add(`sr-delay-${Math.min(idx + 1, 6)}`);
                    }
                });
            });

            const io = new IntersectionObserver((entries) => {
                entries.forEach(e => {
                    if (e.isIntersecting) {
                        e.target.classList.add('sr-visible');
                        io.unobserve(e.target);
                    }
                });
            }, { threshold: 0.10, rootMargin: '0px 0px -40px 0px' });

            document.querySelectorAll('.sr').forEach(el => io.observe(el));
        }

        if (document.readyState === 'loading') {
            document.addEventListener('DOMContentLoaded', applyReveal);
        } else {
            applyReveal();
        }

        /* ══════════════════════════════════════════════════
           BUTTON RIPPLE  —  click anywhere on any .btn
        ══════════════════════════════════════════════════ */
        document.addEventListener('click', function (e) {
            const btn = e.target.closest('.btn');
            if (!btn) return;
            const rect = btn.getBoundingClientRect();
            const size = Math.max(rect.width, rect.height) * 2;
            const r    = document.createElement('span');
            r.className = 'ripple';
            r.style.width  = size + 'px';
            r.style.height = size + 'px';
            r.style.left   = (e.clientX - rect.left  - size / 2) + 'px';
            r.style.top    = (e.clientY - rect.top   - size / 2) + 'px';
            btn.appendChild(r);
            r.addEventListener('animationend', () => r.remove());
        });

        /* ══════════════════════════════════════════════════
           STATISTICS COUNTER  —  .js-counter elements
           Parses text like "5,000+" → counts 0→5000 then adds "+"
           Respects "%", "+", "/7" (24/7 kept verbatim)
        ══════════════════════════════════════════════════ */
        (function () {
            const DURATION = 1800; // ms

            function easeOutExpo(t) {
                return t === 1 ? 1 : 1 - Math.pow(2, -10 * t);
            }

            function parseCounter(text) {
                // Special verbatim strings (no animation)
                if (/^\/|\//i.test(text) && !/^\d+\/$/.test(text)) {
                    return { verbatim: true, display: text.trim() };
                }
                const cleaned = text.replace(/,/g, '').trim();
                const match   = cleaned.match(/^([\d.]+)(.*)$/);
                if (!match) return { verbatim: true, display: text.trim() };
                return {
                    verbatim : false,
                    target   : parseFloat(match[1]),
                    suffix   : match[2].trim(),      // '+', '%', '/7', ''
                    decimals : (match[1].includes('.')) ? match[1].split('.')[1].length : 0,
                    // Preserve original comma-formatted number length for suffix
                    useComma : text.includes(','),
                };
            }

            function formatNumber(n, decimals, useComma) {
                const fixed = n.toFixed(decimals);
                if (!useComma) return fixed;
                // Add comma separator
                return parseFloat(fixed).toLocaleString('en-US', {
                    minimumFractionDigits: decimals,
                    maximumFractionDigits: decimals,
                });
            }

            function animateCounter(el, config) {
                if (config.verbatim) return; // already shows correct text
                const start = performance.now();
                function tick(now) {
                    const elapsed = now - start;
                    const progress = Math.min(elapsed / DURATION, 1);
                    const eased    = easeOutExpo(progress);
                    const current  = config.target * eased;
                    el.textContent = formatNumber(current, config.decimals, config.useComma) + config.suffix;
                    if (progress < 1) requestAnimationFrame(tick);
                }
                requestAnimationFrame(tick);
            }

            function initCounters() {
                const counters = document.querySelectorAll('.js-counter');
                if (!counters.length) return;

                const io = new IntersectionObserver((entries) => {
                    entries.forEach(e => {
                        if (!e.isIntersecting) return;
                        const el = e.target;
                        const config = parseCounter(el.textContent);
                        // Reset to "0" so the animation always plays from zero
                        if (!config.verbatim) el.textContent = '0' + config.suffix;
                        animateCounter(el, config);
                        io.unobserve(el);
                    });
                }, { threshold: 0.3 });

                counters.forEach(el => io.observe(el));
            }

            if (document.readyState === 'loading') {
                document.addEventListener('DOMContentLoaded', initCounters);
            } else {
                initCounters();
            }
        }());
    }());
    </script>

</body>
</html>
