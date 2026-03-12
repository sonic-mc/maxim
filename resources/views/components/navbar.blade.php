{{-- ======================================================
     ENTERPRISE NAVBAR  –  Transparent → solid on scroll
====================================================== --}}
<style>
    #mainNav {
        position: fixed;
        top: 0; left: 0; right: 0;
        z-index: 50;
        background: transparent;
        border-bottom: 1px solid rgba(255,255,255,0);
        transition: background .35s ease, box-shadow .35s ease, border-color .35s ease;
    }
    #mainNav.scrolled {
        background: #fff;
        border-bottom-color: #e8eef7;
        box-shadow: 0 2px 18px rgba(26,95,170,.10);
    }

    /* Links: white when transparent, dark when scrolled */
    #mainNav .nav-link          { color: rgba(255,255,255,.88); }
    #mainNav .nav-link:hover    { color: #fff; }
    #mainNav .nav-link::after   { background: #fff; }
    #mainNav.scrolled .nav-link          { color: #374151; }
    #mainNav.scrolled .nav-link:hover    { color: #1a5faa; }
    #mainNav.scrolled .nav-link::after   { background: #1a5faa; }
    /* Active state */
    #mainNav .nav-link.active            { color: #fff; font-weight: 600; }
    #mainNav .nav-link.active::after     { width: 100%; background: #fff; }
    #mainNav.scrolled .nav-link.active   { color: #1a5faa; font-weight: 600; background: #e8f1fb; border-radius: .4rem; }
    #mainNav.scrolled .nav-link.active::after { background: transparent; }

    /* Logo text */
    #mainNav .logo-name    { color: #fff; transition: color .35s; }
    #mainNav .logo-sub     { color: rgba(255,255,255,.6); transition: color .35s; }
    #mainNav.scrolled .logo-name { color: #0f3d77; }
    #mainNav.scrolled .logo-sub  { color: #6b7280; }


    /* Hamburger icon */
    #mainNav .ham-icon          { color: #fff; }
    #mainNav .ham-btn           { border-color: rgba(255,255,255,.4); }
    #mainNav.scrolled .ham-icon { color: #0f3d77; }
    #mainNav.scrolled .ham-btn  { border-color: #dde7f5; }
</style>

<nav id="mainNav">

    {{-- Main nav row --}}
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between" style="height:8rem;">

            {{-- Logo --}}
            <a href="{{ url('/') }}" class="flex-shrink-0" style="line-height:0;">
                <img src="/images/logo-svg.svg" alt="Maxi Medical Zimbabwe" style="height:126px;width:auto;">
            </a>

            {{-- Desktop links --}}
            <div class="hidden lg:flex items-center gap-1">
                @php
                    $navItems = [
                        ['/', 'Home'],
                        ['about', 'About Us'],
                        ['products', 'Products'],
                        ['services', 'Services'],
                        ['plans', 'Medical Plans'],
                        ['contact', 'Contact'],
                    ];
                    $isActive = function(string $path): bool {
                        if ($path === '/') {
                            return request()->is('/');
                        }
                        return request()->is(ltrim($path, '/')) || request()->is(ltrim($path, '/') . '/*');
                    };
                @endphp
                @foreach($navItems as [$path, $label])
                <a href="{{ url($path) }}"
                   class="nav-link px-3 py-1 {{ $isActive($path) ? 'active' : '' }}">
                    {{ $label }}
                </a>
                @endforeach
            </div>

            {{-- Desktop CTA --}}
            <div class="hidden lg:flex items-center gap-3">
                <a href="{{ url('/contact') }}" class="btn btn-accent" style="border-radius:.5rem;font-size:.85rem;">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z" stroke-linecap="round" stroke-linejoin="round"/></svg>
                    Get a Quote
                </a>
            </div>

            {{-- Mobile hamburger --}}
            <button id="mobileMenuButton" class="ham-btn lg:hidden p-2 rounded-lg" style="border:1.5px solid;" aria-label="Open menu">
                <svg xmlns="http://www.w3.org/2000/svg" class="ham-icon w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                </svg>
            </button>
        </div>
    </div>

    {{-- Mobile drawer (always solid white) --}}
    <div id="mobileMenu" class="hidden lg:hidden" style="border-top:1px solid #e8eef7;background:#fff;">
        <div class="px-5 py-5 space-y-1">
            @foreach($navItems as [$path, $label])
            @php $mobileActive = $isActive($path); @endphp
            <a href="{{ url($path) }}"
               style="display:flex;align-items:center;gap:.6rem;padding:.6rem .75rem;border-radius:.5rem;font-size:.9rem;font-weight:{{ $mobileActive ? '600' : '500' }};color:{{ $mobileActive ? '#1a5faa' : '#374151' }};background:{{ $mobileActive ? '#e8f1fb' : 'transparent' }};text-decoration:none;"
               onmouseover="this.style.background='#e8f1fb';this.style.color='#1a5faa';"
               onmouseout="this.style.background='{{ $mobileActive ? '#e8f1fb' : '' }}';this.style.color='{{ $mobileActive ? '#1a5faa' : '#374151' }}';">@if($mobileActive)<span style="width:5px;height:5px;border-radius:50%;background:#1a5faa;flex-shrink:0;display:inline-block;"></span>@endif{{ $label }}</a>
            @endforeach
            <div style="padding-top:.75rem;border-top:1px solid #e8eef7;margin-top:.75rem;">
                <a href="{{ url('/contact') }}" class="btn btn-accent" style="width:100%;justify-content:center;border-radius:.5rem;">Get a Quote</a>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var nav = document.getElementById('mainNav');

            // Scroll: add/remove .scrolled class
            function onScroll() {
                if (window.scrollY > 10) {
                    nav.classList.add('scrolled');
                } else {
                    nav.classList.remove('scrolled');
                }
            }
            window.addEventListener('scroll', onScroll, { passive: true });
            onScroll(); // run once on load (handles non-home pages)

            // Mobile toggle
            document.getElementById('mobileMenuButton')?.addEventListener('click', function () {
                document.getElementById('mobileMenu')?.classList.toggle('hidden');
            });
        });
    </script>
</nav>

