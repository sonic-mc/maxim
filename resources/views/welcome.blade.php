@extends('layouts.app')
@section('title', 'Home – Maxi Medical Zimbabwe')
@section('content')

{{-- ================================================================
     HERO  –  Full-bleed background photo + dark left overlay
     Matches ProHealth "Compassionate care, exceptional results." layout
================================================================ --}}

<style>
/* ── Hero entrance animations ── */
@keyframes heroFadeSlideUp {
    from { opacity: 0; transform: translateY(28px); }
    to   { opacity: 1; transform: translateY(0); }
}
@keyframes heroFadeIn {
    from { opacity: 0; }
    to   { opacity: 1; }
}
@keyframes heroSlideRight {
    from { opacity: 0; transform: translateX(-22px); }
    to   { opacity: 1; transform: translateX(0); }
}
.hero-anim { opacity: 0; animation-fill-mode: forwards; animation-timing-function: cubic-bezier(.22,.68,0,1.2); }
.hero-anim-smooth { opacity: 0; animation-fill-mode: forwards; animation-timing-function: ease-out; }

/* ── Floating icon animations ── */
@keyframes floatA {
    0%,100% { transform: translateY(0)    rotate(-4deg); }
    50%      { transform: translateY(-22px) rotate(4deg);  }
}
@keyframes floatB {
    0%,100% { transform: translateY(0)    rotate(6deg);  }
    50%      { transform: translateY(-18px) rotate(-6deg); }
}
@keyframes floatC {
    0%,100% { transform: translateY(0)    scale(1);    }
    50%      { transform: translateY(-26px) scale(1.06); }
}
@keyframes floatD {
    0%,100% { transform: translateY(0)    rotate(0deg);  }
    33%      { transform: translateY(-14px) rotate(8deg);  }
    66%      { transform: translateY(-8px)  rotate(-5deg); }
}
@keyframes pulseFade {
    0%,100% { opacity: .40; }
    50%      { opacity: .65; }
}
.fi { position:absolute; pointer-events:none; animation-iteration-count:infinite; animation-timing-function:ease-in-out; }
</style>

<section style="position:relative;min-height:100vh;display:flex;flex-direction:column;overflow:hidden;">

    {{-- Background photo --}}
    <div style="position:absolute;inset:0;z-index:0;">
        <img src="/images/image.jpg" alt="Medical professionals"
             style="width:100%;height:100%;object-fit:cover;object-position:center top;">
        {{-- Gradient overlay --}}
        <div style="position:absolute;inset:0;background:linear-gradient(100deg,rgba(10,36,71,.92) 0%,rgba(10,36,71,.80) 42%,rgba(10,36,71,.45) 68%,rgba(10,36,71,.1) 100%);"></div>
    </div>

    {{-- ── Floating background icons ── --}}

    {{-- Heartbeat / ECG --}}
    <div class="fi" style="right:6%;top:18%;opacity:.50;animation:floatA 7s 0s infinite;">
        <svg viewBox="0 0 80 30" fill="none" style="width:110px;" stroke="#5b9bd5" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
            <polyline points="0,15 14,15 18,25 26,2 33,28 38,15 80,15"/>
        </svg>
    </div>

    {{-- Medical Cross --}}
    <div class="fi" style="right:18%;top:55%;opacity:.50;animation:floatC 9s 1.5s infinite;">
        <svg viewBox="0 0 44 44" fill="none" style="width:54px;">
            <rect x="17" y="4"  width="10" height="36" rx="5" fill="#e63946"/>
            <rect x="4"  y="17" width="36" height="10" rx="5" fill="#e63946"/>
        </svg>
    </div>

    {{-- Ambulance --}}
    <div class="fi" style="right:30%;top:72%;opacity:.45;animation:floatB 11s 0.8s infinite;">
        <svg viewBox="0 0 64 40" fill="none" style="width:80px;" stroke="#93b4d4" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <rect x="2" y="12" width="40" height="22" rx="3" fill="rgba(147,180,212,.18)" stroke="#93b4d4"/>
            <path d="M42 22h12l6 8v4H42V22z" fill="rgba(147,180,212,.18)" stroke="#93b4d4"/>
            <circle cx="12" cy="36" r="4" fill="#93b4d4"/>
            <circle cx="50" cy="36" r="4" fill="#93b4d4"/>
            <path d="M17 20v6m-3-3h6" stroke="#e63946" stroke-width="2.2"/>
        </svg>
    </div>

    {{-- Pill / circle pulse --}}
    <div class="fi hidden md:block" style="right:8%;top:70%;animation:pulseFade 5s 0s infinite;opacity:.40;">
        <svg viewBox="0 0 60 28" fill="none" style="width:72px;">
            <rect x="1" y="1" width="58" height="26" rx="13" stroke="#5b9bd5" stroke-width="2" fill="rgba(91,155,213,.12)"/>
            <line x1="30" y1="1" x2="30" y2="27" stroke="#5b9bd5" stroke-width="1.5"/>
        </svg>
    </div>

    {{-- Heart --}}
    <div class="fi hidden lg:block" style="right:46%;top:12%;opacity:.45;animation:floatD 13s 2s infinite;">
        <svg viewBox="0 0 44 40" fill="none" style="width:46px;">
            <path d="M22 36S4 24 4 13a9 9 0 0118 0 9 9 0 0118 0c0 11-18 23-18 23z" fill="#e63946" opacity=".7"/>
        </svg>
    </div>

    {{-- Stethoscope outline --}}
    <div class="fi hidden lg:block" style="left:3%;top:30%;opacity:.42;animation:floatB 10s 3s infinite;">
        <svg viewBox="0 0 48 56" fill="none" style="width:44px;" stroke="#5b9bd5" stroke-width="2" stroke-linecap="round">
            <path d="M10 4v16a14 14 0 0028 0V4"/>
            <line x1="10" y1="4" x2="10" y2="10"/>
            <line x1="38" y1="4" x2="38" y2="10"/>
            <path d="M24 34v8a8 8 0 008 8"/>
            <circle cx="40" cy="50" r="4" fill="#5b9bd5" opacity=".5"/>
        </svg>
    </div>

    {{-- Hero content --}}
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative" style="z-index:1;flex:1;display:flex;flex-direction:column;justify-content:center;padding-top:9rem;padding-bottom:2rem;">
        <div style="max-width:620px;">

            <span class="label-upper hero-anim-smooth"
                  style="color:#5b9bd5;display:block;margin-bottom:1rem;
                         animation-name:heroSlideRight;animation-duration:.7s;animation-delay:.1s;">
                Zimbabwe's Trusted Medical Partner
            </span>

            <h1 class="heading-xl hero-anim"
                style="margin-bottom:1.5rem;
                       animation-name:heroFadeSlideUp;animation-duration:.75s;animation-delay:.35s;">
                Compassionate care,<br>exceptional results.
            </h1>

            <p class="hero-anim-smooth"
               style="font-size:1.05rem;color:rgba(255,255,255,.8);line-height:1.8;max-width:520px;margin-bottom:2.25rem;
                      animation-name:heroFadeSlideUp;animation-duration:.7s;animation-delay:.62s;animation-fill-mode:forwards;animation-timing-function:ease-out;">
                From hospital equipment and diagnostics to emergency support and medical assist plans —
                Maxi Medical delivers quality healthcare products and services across Zimbabwe.
            </p>

            <div class="flex flex-wrap gap-4 hero-anim-smooth"
                 style="animation-name:heroFadeIn;animation-duration:.65s;animation-delay:.92s;">
                <a href="{{ url('/services') }}" class="btn btn-accent">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"/><path d="M12 8v4l3 3" stroke-linecap="round"/></svg>
                    Our Services
                </a>
                <a href="{{ url('/contact') }}" class="btn btn-outline">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" stroke-linecap="round"/></svg>
                    Get a Quote
                </a>
            </div>

            {{-- Floating trust badge --}}
            <div class="hidden md:flex items-center gap-3 mt-10 hero-anim-smooth"
                 style="background:rgba(255,255,255,.12);backdrop-filter:blur(10px);border:1px solid rgba(255,255,255,.22);border-radius:.9rem;padding:.85rem 1.25rem;width:fit-content;
                        animation-name:heroFadeSlideUp;animation-duration:.65s;animation-delay:1.15s;">
                <div style="width:2.5rem;height:2.5rem;border-radius:50%;background:#e63946;display:flex;align-items:center;justify-content:center;flex-shrink:0;">
                    <svg fill="none" stroke="white" stroke-width="2" viewBox="0 0 24 24" style="width:1.1rem;height:1.1rem;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" stroke-linecap="round"/></svg>
                </div>
                <div>
                    <p style="font-size:.95rem;font-weight:700;color:#fff;">1,000+ Clients Served</p>
                    <p style="font-size:.78rem;color:rgba(255,255,255,.65);">Across Zimbabwe since founding</p>
                </div>
            </div>
        </div>
    </div>

    {{-- Stats strip — anchored to bottom of hero --}}
    <div style="position:relative;z-index:2;background:rgba(10,36,71,.75);backdrop-filter:blur(14px);border-top:1px solid rgba(255,255,255,.12);">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-2 md:grid-cols-4">
                @foreach([
                    ['20+',  'Years of Experience'],
                    ['95%',  'Customer Satisfaction'],
                    ['5,000+','Products Supplied'],
                    ['10+',  'Provinces Covered'],
                ] as $s)
                <div style="padding:1.6rem 1.5rem;text-align:center;border-right:1px solid rgba(255,255,255,.1);">
                    <p class="js-counter" style="font-size:1.9rem;font-weight:800;color:#fff;line-height:1;">{{ $s[0] }}</p>
                    <p style="font-size:.82rem;color:#93b4d4;margin-top:.35rem;font-weight:500;">{{ $s[1] }}</p>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>


{{-- ================================================================
     ABOUT US  –  Text left, image mosaic right
================================================================ --}}
<section class="section-pad" style="background:#fff;">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid md:grid-cols-2 gap-16 items-center">

            {{-- Text --}}
            <div>
                <p class="label-upper">About Us</p>
                <div class="divider"></div>
                <h2 class="heading-lg mb-5">Maxi Medical is a team of<br>experienced medical professionals</h2>
                <p class="body-muted mb-5">
                    Founded to bridge Zimbabwe's healthcare supply gap, Maxi Medical has grown into one of
                    the country's most dependable medical product and services companies. From our offices on the
                    15th Floor of CABS Centre, Harare, we serve clients across all provinces.
                </p>
                <p class="body-muted mb-8">
                    Our work spans hospital equipment, diagnostics, physio and rehab tools, medicines, medical
                    accessories and structured medical assist plans that provide emergency cover and peace of mind.
                </p>
                <div class="flex flex-wrap gap-4">
                    <a href="{{ url('/about') }}" class="btn btn-primary">Learn More About Us</a>
                    <a href="{{ url('/contact') }}" class="btn btn-accent-outline">Contact Team</a>
                </div>
            </div>

            {{-- Stats mosaic --}}
            <div class="grid grid-cols-2 gap-5">
                @foreach([
                    ['#1a5faa','20+','Years of Experience','top medical supply expertise'],
                    ['#e63946','500+','Products Available','certified and quality assured'],
                    ['#0a2447','24/7','Emergency Support','round-the-clock response'],
                    ['#16a34a','1,000+','Clients Served','across Zimbabwe'],
                ] as $stat)
                <div style="background:{{ $stat[0] }};border-radius:1rem;padding:2rem 1.5rem;color:#fff;position:relative;overflow:hidden;">
                    <div style="position:absolute;top:-1rem;right:-1rem;width:4rem;height:4rem;border-radius:50%;background:rgba(255,255,255,.1);"></div>
                    <p class="js-counter" style="font-size:2.2rem;font-weight:800;line-height:1;">{{ $stat[1] }}</p>
                    <p style="font-size:.9rem;font-weight:600;margin-top:.4rem;">{{ $stat[2] }}</p>
                    <p style="font-size:.75rem;opacity:.7;margin-top:.2rem;">{{ $stat[3] }}</p>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>


{{-- ================================================================
     OUR DEPARTMENTS / SERVICES  –  ProHealth department grid
================================================================ --}}
<section class="section-pad" style="background:#f4f7fc;">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center" style="margin-bottom:3.5rem;">
            <p class="label-upper">Our Departments</p>
            <div class="divider" style="margin:1rem auto 0;"></div>
            <h2 class="heading-lg" style="margin-top:.75rem;">For Your Health</h2>
        </div>
        <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-5">
            @foreach([
                ['M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z','Emergency Department','Rapid medical response and emergency coordination available 24/7.', true],
                ['M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2','Diagnostic Department','Blood pressure, imaging, glucometers and full diagnostic tools.', false],
                ['M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z','Physio & Rehab','TENS units, ultrasound therapy, mobility aids and rehab gadgets.', false],
                ['M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z','Equipment Supply','Hospital beds, oxygen concentrators, surgical tables and more.', false],
                ['M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z','Medical Assist Plans','Structured plans covering emergency, ambulance and counselling.', false],
                ['M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z','Medicines & Pharmacy','OTC, prescription medicines, vitamins, supplements and first-aid stock.', false],
            ] as $dept)
            <div class="dept-card {{ $dept[3] ? 'active' : '' }}">
                <div class="dept-icon" style="width:3.5rem;height:3.5rem;border-radius:.75rem;background:{{ $dept[3] ? 'rgba(255,255,255,.2)' : '#e8f1fb' }};display:flex;align-items:center;justify-content:center;margin-bottom:1.1rem;transition:background .2s;">
                    <svg fill="none" stroke="{{ $dept[3] ? 'white' : '#1a5faa' }}" stroke-width="1.8" viewBox="0 0 24 24" style="width:1.5rem;height:1.5rem;">
                        <path d="{{ $dept[0] }}" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </div>
                <h3 style="font-size:.95rem;font-weight:700;color:{{ $dept[3] ? '#fff' : '#0f3d77' }};margin-bottom:.5rem;">{{ $dept[1] }}</h3>
                <p style="font-size:.83rem;color:{{ $dept[3] ? 'rgba(255,255,255,.8)' : '#6b7280' }};line-height:1.65;">{{ $dept[2] }}</p>
            </div>
            @endforeach
        </div>
        <div class="text-center mt-10">
            <a href="{{ url('/services') }}" class="btn btn-primary">View All Services</a>
        </div>
    </div>
</section>


{{-- ================================================================
     PRODUCT CATEGORIES
================================================================ --}}
<section class="section-pad" style="background:#fff;">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center" style="margin-bottom:3.5rem;">
            <p class="label-upper">What We Supply</p>
            <div class="divider" style="margin:1rem auto 0;"></div>
            <h2 class="heading-lg" style="margin-top:.75rem;">Product Categories</h2>
        </div>
        <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach([
                ['Hospital Equipment',         '#e8f1fb', '#1a5faa', 'M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6',        'ICU beds, oxygen concentrators, surgical tables.'],
                ['Diagnostic Tools',           '#fef2f2', '#dc2626', 'M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01', 'Monitors, glucometers, pulse oximeters, ECGs.'],
                ['Physio & Rehab Gadgets',     '#f0fdf4', '#16a34a', 'M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z',                              'TENS units, ultrasound therapy, resistance bands.'],
                ['Medical Accessories',        '#fffbeb', '#d97706', 'M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z', 'Gloves, masks, syringes, bandages, disposables.'],
                ['Medicines',                  '#faf5ff', '#7c3aed', 'M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z',                                                                                                                    'OTC and prescription medicines, vitamins, first aid.'],
                ['Emergency Support Solutions','#fff7ed', '#ea580c', 'M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z',                      'AEDs, crash kits, trauma bags, cervical collars.'],
            ] as $cat)
            <div class="card" style="padding:1.75rem 1.5rem;">
                <div style="width:3rem;height:3rem;border-radius:.75rem;background:{{ $cat[1] }};display:flex;align-items:center;justify-content:center;margin-bottom:1.1rem;">
                    <svg fill="none" stroke="{{ $cat[2] }}" stroke-width="1.8" viewBox="0 0 24 24" style="width:1.35rem;height:1.35rem;">
                        <path d="{{ $cat[3] }}" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </div>
                <h3 style="font-size:.97rem;font-weight:700;color:#0f3d77;margin-bottom:.45rem;">{{ $cat[0] }}</h3>
                <p class="body-muted" style="font-size:.85rem;margin-bottom:1rem;">{{ $cat[4] }}</p>
                <a href="{{ url('/products') }}" style="font-size:.83rem;font-weight:600;color:#1a5faa;display:inline-flex;align-items:center;gap:.3rem;text-decoration:none;">
                    Browse &rarr;
                </a>
            </div>
            @endforeach
        </div>
    </div>
</section>


{{-- ================================================================
     MEDICAL PLANS  –  Dark blue band (ProHealth style)
================================================================ --}}
<section class="section-pad" style="background:#0a2447;">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center" style="margin-bottom:3.5rem;">
            <p style="font-size:.72rem;font-weight:700;letter-spacing:.14em;text-transform:uppercase;color:#5b9bd5;">Medical Assist Plans</p>
            <div style="width:3rem;height:3px;background:#e63946;border-radius:2px;margin:1rem auto 0;"></div>
            <h2 style="font-family:'DM Serif Display',serif;font-size:clamp(1.8rem,3.5vw,2.6rem);color:#fff;margin-top:.75rem;">What Our Plans Say<br>About Us</h2>
        </div>
        <div class="grid md:grid-cols-3 gap-7">
            @foreach([
                ['Basic',    '$15', '/mo', 'Individuals',     'rgba(255,255,255,.07)', false, ['Medical advice line (24/7)','2 emergency callouts/year','Basic accident cover','Trauma counselling (2 sessions)','SMS emergency alerts']],
                ['Standard', '$35', '/mo', 'Families (up to 4)','#1a5faa',            true,  ['Everything in Basic','Unlimited advice line','6 emergency callouts/year','Ambulance coordination','Dental emergency cover','Repatriation assistance']],
                ['Premium',  '$75', '/mo', 'Corporate',       'rgba(255,255,255,.07)', false, ['Everything in Standard','Unlimited callouts','Hospital admission assist','Priority response < 20 min','Dedicated case manager','Annual health screening']],
            ] as $plan)
            <div style="background:{{ $plan[4] }};border-radius:1.1rem;padding:2.25rem 2rem;border:{{ $plan[5] ? '2px solid #1a5faa' : '1px solid rgba(255,255,255,.1)' }};position:relative;overflow:hidden;">
                @if($plan[5])
                <div style="position:absolute;top:1.1rem;right:1.1rem;background:#e63946;color:#fff;font-size:.68rem;font-weight:700;letter-spacing:.08em;text-transform:uppercase;padding:.28rem .7rem;border-radius:99px;">Popular</div>
                @endif
                <p style="font-size:.72rem;font-weight:600;color:#5b9bd5;text-transform:uppercase;letter-spacing:.1em;margin-bottom:.6rem;">{{ $plan[3] }}</p>
                <h3 style="font-size:1.5rem;font-weight:700;color:#fff;margin-bottom:.35rem;">{{ $plan[0] }}</h3>
                <div style="display:flex;align-items:flex-end;gap:.25rem;margin-bottom:1.75rem;">
                    <span style="font-size:2.8rem;font-weight:800;color:#fff;line-height:1;">{{ $plan[1] }}</span>
                    <span style="font-size:.9rem;color:#93b4d4;padding-bottom:.4rem;">{{ $plan[2] }}</span>
                </div>
                <ul style="list-style:none;padding:0;margin:0 0 2rem;space-y:.6rem;">
                    @foreach($plan[6] as $f)
                    <li style="display:flex;align-items:flex-start;gap:.6rem;font-size:.86rem;color:#cbd5e1;margin-bottom:.6rem;line-height:1.55;">
                        <svg fill="none" stroke="#22c55e" stroke-width="2.5" viewBox="0 0 24 24" style="width:1rem;height:1rem;flex-shrink:0;margin-top:.18rem;"><path d="M5 13l4 4L19 7" stroke-linecap="round" stroke-linejoin="round"/></svg>
                        {{ $f }}
                    </li>
                    @endforeach
                </ul>
                <a href="{{ url('/plans') }}" class="btn btn-accent" style="width:100%;justify-content:center;border-radius:.6rem;">
                    Get Started
                </a>
            </div>
            @endforeach
        </div>
    </div>
</section>


{{-- ================================================================
     WHY CHOOSE US  –  Two column with icon list
================================================================ --}}
<section class="section-pad" style="background:#f4f7fc;">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid md:grid-cols-2 gap-16 items-center">
            <div>
                <p class="label-upper">Why Choose Us</p>
                <div class="divider"></div>
                <h2 class="heading-lg mb-5">Your trusted healthcare<br>supply partner</h2>
                <p class="body-muted mb-10">We combine clinical expertise, nationwide coverage and genuine care to deliver Zimbabwe's most reliable medical supply and support network.</p>
                <div style="display:flex;flex-direction:column;gap:1.5rem;">
                    @foreach([
                        ['M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z',   'Quality Assured',          'All products meet international healthcare standards, sourced from certified suppliers.'],
                        ['M13 10V3L4 14h7v7l9-11h-7z',                        'Fast Nationwide Delivery', 'Reliable delivery across Zimbabwe with urgent dispatch within 24 hours.'],
                        ['M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z', 'Expert Consultation', 'Qualified medical professionals advise on product selection and usage.'],
                        ['M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064', 'Nationwide Coverage', 'Emergency response covering Harare, Bulawayo and all major towns.'],
                    ] as $w)
                    <div style="display:flex;gap:1.1rem;align-items:flex-start;">
                        <div style="width:3rem;height:3rem;background:#e8f1fb;border-radius:.75rem;display:flex;align-items:center;justify-content:center;flex-shrink:0;">
                            <svg fill="none" stroke="#1a5faa" stroke-width="1.8" viewBox="0 0 24 24" style="width:1.3rem;height:1.3rem;">
                                <path d="{{ $w[0] }}" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                        <div>
                            <h4 style="font-size:.96rem;font-weight:700;color:#0f3d77;margin-bottom:.3rem;">{{ $w[1] }}</h4>
                            <p class="body-muted" style="font-size:.875rem;">{{ $w[2] }}</p>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            {{-- Awards / trust block --}}
            <div>
                <div class="card" style="padding:2rem;margin-bottom:1.5rem;">
                    <h4 style="font-size:.78rem;font-weight:700;letter-spacing:.1em;text-transform:uppercase;color:#1a5faa;margin-bottom:1.1rem;">Our Certifications</h4>
                    <div class="grid grid-cols-3 gap-4">
                        @foreach(['ISO Certified','MoHCC Registered','WHO Compliant'] as $cert)
                        <div style="background:#f4f7fc;border-radius:.75rem;padding:1rem .75rem;text-align:center;border:1px solid #dde7f5;">
                            <div style="width:2.2rem;height:2.2rem;border-radius:50%;background:#1a5faa;display:flex;align-items:center;justify-content:center;margin:0 auto .6rem;">
                                <svg fill="none" stroke="white" stroke-width="2" viewBox="0 0 24 24" style="width:1rem;height:1rem;"><path d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z" stroke-linecap="round"/></svg>
                            </div>
                            <p style="font-size:.75rem;font-weight:600;color:#0f3d77;">{{ $cert }}</p>
                        </div>
                        @endforeach
                    </div>
                </div>
                {{-- Testimonial --}}
                <div class="card" style="padding:2rem;border-left:4px solid #1a5faa;">
                    <div class="flex gap-1 mb-3">
                        @for($i=0;$i<5;$i++)
                        <svg style="width:1rem;height:1rem;color:#f59e0b;" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                        @endfor
                    </div>
                    <p style="font-size:.9rem;color:#374151;line-height:1.7;font-style:italic;margin-bottom:1rem;">"Maxi Medical has been our trusted supplier for three years. Their equipment quality and emergency response service are exceptional — we wouldn't partner with anyone else."</p>
                    <div class="flex items-center gap-3">
                        <div style="width:2.4rem;height:2.4rem;border-radius:50%;background:#e8f1fb;display:flex;align-items:center;justify-content:center;font-weight:700;color:#1a5faa;font-size:.9rem;">DR</div>
                        <div>
                            <p style="font-size:.88rem;font-weight:700;color:#0f3d77;">Dr. R. Moyo</p>
                            <p style="font-size:.78rem;color:#6b7280;">Medical Director, Harare Clinic</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


{{-- ================================================================
     CONTACT CTA BANNER
================================================================ --}}
<section style="background:linear-gradient(100deg,#0f3d77 0%,#1a5faa 100%);padding:5rem 1.5rem;text-align:center;">
    <div class="max-w-3xl mx-auto">
        <p style="font-size:.72rem;font-weight:700;letter-spacing:.14em;text-transform:uppercase;color:#5b9bd5;margin-bottom:.75rem;">Don't Let Your Health Take a Backseat</p>
        <h2 style="font-family:'DM Serif Display',serif;font-size:clamp(1.9rem,4vw,2.9rem);color:#fff;line-height:1.2;margin-bottom:1.25rem;">Ready to get exceptional<br>healthcare support?</h2>
        <p style="font-size:1rem;color:rgba(255,255,255,.75);margin-bottom:2.25rem;line-height:1.7;">Contact our team for a free quote on medical supplies, equipment, or any of our healthcare plans. We respond within one business day.</p>
        <div class="flex flex-wrap justify-center gap-4">
            <a href="{{ url('/contact') }}" class="btn btn-accent">Get a Free Quote</a>
            <a href="{{ url('/plans') }}" class="btn btn-outline">View Medical Plans</a>
        </div>
    </div>
</section>

@endsection