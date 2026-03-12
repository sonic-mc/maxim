@extends('layouts.app')
@section('title', 'Medical Plans – Maxi Medical Zimbabwe')
@section('content')

{{-- HERO --}}
<section style="position:relative;padding:10rem 1rem 5rem;overflow:hidden;">
    <div style="position:absolute;inset:0;z-index:0;">
        <img src="/images/image2.jpg" alt="Medical Plans" style="width:100%;height:100%;object-fit:cover;object-position:center;">
        <div style="position:absolute;inset:0;background:linear-gradient(100deg,rgba(10,36,71,.88) 0%,rgba(10,36,71,.72) 50%,rgba(10,36,71,.55) 100%);"></div>
    </div>
    <div class="max-w-7xl mx-auto text-center" style="position:relative;z-index:1;">
        <span style="display:inline-block;background:#e63946;color:#fff;font-size:.72rem;font-weight:700;padding:.35rem 1rem;border-radius:9999px;letter-spacing:.12em;text-transform:uppercase;margin-bottom:1.1rem;">Medical Assist Plans</span>
        <h1 style="font-family:'DM Serif Display',serif;font-size:clamp(2.2rem,5vw,3.2rem);font-weight:400;color:#fff;line-height:1.15;margin-bottom:1.1rem;">Protect Yourself &amp; Your Family</h1>
        <p style="color:rgba(255,255,255,.8);font-size:1.05rem;max-width:38rem;margin:0 auto;line-height:1.8;">
            Affordable medical assist plans that give you access to emergency support, ambulance response, trauma counselling and more — every day of the year.
        </p>
    </div>
</section>

{{-- HOW IT WORKS --}}
<section class="py-16 px-4 bg-gray-50">
    <div class="max-w-7xl mx-auto text-center mb-10">
        <h2 class="section-title">How Our Plans Work</h2>
        <p class="section-sub">Simple, affordable and reliable coverage designed for Zimbabweans.</p>
    </div>
    <div class="max-w-5xl mx-auto grid sm:grid-cols-3 gap-8">
        <div class="bg-white rounded-2xl p-7 text-center border border-gray-100 card-hover">
            <div class="w-14 h-14 rounded-2xl bg-blue-50 flex items-center justify-center mx-auto mb-4" style="color:#1a5faa;">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" style="width:1.75rem;height:1.75rem;"><path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 0 0-3.375-3.375h-1.5A1.125 1.125 0 0 1 13.5 7.125v-1.5a3.375 3.375 0 0 0-3.375-3.375H8.25m0 12.75h7.5m-7.5 3H12M10.5 2.25H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 0 0-9-9z"/></svg>
            </div>
            <h3 class="font-bold text-blue-900 mb-2">Choose Your Plan</h3>
            <p class="text-gray-500 text-sm leading-relaxed">Select a Basic, Standard or Premium plan that suits your needs and budget.</p>
        </div>
        <div class="bg-white rounded-2xl p-7 text-center border border-gray-100 card-hover">
            <div class="w-14 h-14 rounded-2xl bg-red-50 flex items-center justify-center mx-auto mb-4" style="color:#e63946;">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" style="width:1.75rem;height:1.75rem;"><path stroke-linecap="round" stroke-linejoin="round" d="M2.25 8.25h19.5M2.25 9h19.5m-16.5 5.25h6m-6 2.25h3m-3.75 3h15a2.25 2.25 0 0 0 2.25-2.25V6.75A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25v10.5A2.25 2.25 0 0 0 4.5 19.5z"/></svg>
            </div>
            <h3 class="font-bold text-blue-900 mb-2">Register &amp; Pay</h3>
            <p class="text-gray-500 text-sm leading-relaxed">Complete a simple registration form and make your monthly payment.</p>
        </div>
        <div class="bg-white rounded-2xl p-7 text-center border border-gray-100 card-hover">
            <div class="w-14 h-14 rounded-2xl bg-green-50 flex items-center justify-center mx-auto mb-4" style="color:#16a34a;">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" style="width:1.75rem;height:1.75rem;"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0z"/></svg>
            </div>
            <h3 class="font-bold text-blue-900 mb-2">Activate Cover</h3>
            <p class="text-gray-500 text-sm leading-relaxed">Receive your membership card and access our services from Day 1.</p>
        </div>
    </div>
</section>

{{-- PLAN CARDS --}}
<section class="py-20 px-4 bg-blue-950 text-white">
    <div class="max-w-7xl mx-auto text-center mb-12">
        <span style="display:inline-block;background:#e63946;color:#fff;font-size:.72rem;font-weight:700;padding:.3rem .9rem;border-radius:9999px;letter-spacing:.12em;text-transform:uppercase;margin-bottom:1rem;">A First for South Africa</span>
        <h2 style="font-family:'DM Serif Display',serif;font-size:clamp(1.8rem,4vw,2.8rem);font-weight:400;margin-bottom:.75rem;">One Plan. Complete Protection.</h2>
        <p class="text-blue-200 max-w-2xl mx-auto">Spouse &amp; children receive the same cover as the main member. Choose the family size that fits your household.</p>
    </div>
    <div class="max-w-5xl mx-auto grid md:grid-cols-3 gap-8 mb-12">
        <div class="rounded-2xl p-8 bg-blue-900 border border-white border-opacity-10">
            <p class="text-xs uppercase tracking-widest text-blue-200 mb-2">Individual</p>
            <h3 class="text-2xl font-extrabold">Solo Cover</h3>
            <div class="mt-2 mb-6 flex items-end gap-1">
                <span class="text-4xl font-black">R89</span>
                <span class="text-blue-200 text-sm mb-1">/month</span>
            </div>
            <p class="text-blue-200 text-sm mb-6">Full plan benefits for the main member.</p>
            <a href="{{ url('/contact') }}" class="btn-red w-full text-center block">Get Started</a>
        </div>
        <div class="rounded-2xl p-8 bg-red-700 border border-red-300 ring-2 ring-red-400 relative">
            <div class="absolute -top-4 left-1/2 -translate-x-1/2 bg-red-500 text-white text-xs font-bold px-4 py-1 rounded-full whitespace-nowrap">Most Popular</div>
            <p class="text-xs uppercase tracking-widest text-red-200 mb-2">Family</p>
            <h3 class="text-2xl font-extrabold">Family of 5</h3>
            <div class="mt-2 mb-6 flex items-end gap-1">
                <span class="text-4xl font-black">R229</span>
                <span class="text-red-200 text-sm mb-1">/month</span>
            </div>
            <p class="text-red-200 text-sm mb-6">Main member + spouse + up to 3 children.</p>
            <a href="{{ url('/contact') }}" class="btn-red w-full text-center block" style="background:#fff;color:#c0392b;">Get Started</a>
        </div>
        <div class="rounded-2xl p-8 bg-blue-800 border border-white border-opacity-10">
            <p class="text-xs uppercase tracking-widest text-blue-200 mb-2">Large Family</p>
            <h3 class="text-2xl font-extrabold">Family of 7</h3>
            <div class="mt-2 mb-6 flex items-end gap-1">
                <span class="text-4xl font-black">R359</span>
                <span class="text-blue-200 text-sm mb-1">/month</span>
            </div>
            <p class="text-blue-200 text-sm mb-6">Main member + spouse + up to 5 children.</p>
            <a href="{{ url('/contact') }}" class="btn-red w-full text-center block">Get Started</a>
        </div>
    </div>
    {{-- Partner badges --}}
    <div class="max-w-3xl mx-auto text-center">
        <p class="text-blue-300 text-xs uppercase tracking-widest mb-4">Trusted Partners</p>
        <div class="flex flex-wrap justify-center gap-4">
            <span style="background:rgba(255,255,255,.1);border:1px solid rgba(255,255,255,.18);border-radius:.6rem;padding:.5rem 1.25rem;font-size:.82rem;color:#fff;font-weight:600;">Netcare Hospital Group — Preferred Supplier</span>
            <span style="background:rgba(255,255,255,.1);border:1px solid rgba(255,255,255,.18);border-radius:.6rem;padding:.5rem 1.25rem;font-size:.82rem;color:#fff;font-weight:600;">Africa Assist — Pre-Auth &amp; Care Management</span>
        </div>
        <p class="text-blue-400 text-xs mt-4">Charges apply for payment at certain stores. Subject to Terms &amp; Conditions.</p>
    </div>
</section>

{{-- R10 EMERGENCY EVACUATION PLAN --}}
<section class="py-20 px-4" style="background:linear-gradient(135deg,#0a2447 0%,#0f3d77 60%,#1a5faa 100%);">
    <div class="max-w-7xl mx-auto">
        <div class="grid lg:grid-cols-2 gap-14 items-center">

            {{-- Left: Pricing + CTA --}}
            <div>
                <span style="display:inline-block;background:#e63946;color:#fff;font-size:.72rem;font-weight:700;padding:.35rem 1rem;border-radius:9999px;letter-spacing:.12em;text-transform:uppercase;margin-bottom:1.25rem;">An Affordable Solution — A First for South Africa</span>
                <h2 style="font-family:'DM Serif Display',serif;font-size:clamp(2rem,4.5vw,3rem);font-weight:400;color:#fff;line-height:1.15;margin-bottom:1rem;">Emergency Evacuation<br>&amp; Assistance Plan</h2>
                <p style="color:rgba(255,255,255,.75);font-size:1.05rem;line-height:1.8;margin-bottom:2rem;">
                    Have the comfort of knowing that in an emergency, you and your family will benefit from
                    <strong style="color:#fff;">PRIVATE</strong> road or air emergency evacuation — anywhere in South Africa, anytime,
                    without reliance on public services.
                </p>

                {{-- Price badge --}}
                <div style="display:inline-flex;align-items:flex-end;gap:.5rem;background:rgba(255,255,255,.12);border:2px solid rgba(255,255,255,.25);border-radius:1rem;padding:1.25rem 2rem;margin-bottom:2rem;">
                    <span style="font-size:3.5rem;font-weight:900;color:#fff;line-height:1;">R10</span>
                    <div style="padding-bottom:.4rem;">
                        <span style="display:block;font-size:.85rem;color:rgba(255,255,255,.7);font-weight:600;">per month</span>
                        <span style="display:block;font-size:.7rem;color:rgba(255,255,255,.5);letter-spacing:.06em;text-transform:uppercase;">Debit Order Only</span>
                    </div>
                </div>

                <div class="flex flex-wrap gap-4">
                    <a href="https://www.maxisa.co.za" target="_blank" style="display:inline-flex;align-items:center;gap:.5rem;background:#e63946;color:#fff;font-weight:700;font-size:.9rem;padding:.8rem 1.75rem;border-radius:.6rem;text-decoration:none;">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" style="width:1rem;height:1rem;"><path stroke-linecap="round" stroke-linejoin="round" d="M12 21a9.004 9.004 0 0 0 8.716-6.747M12 21a9.004 9.004 0 0 1-8.716-6.747M12 21c2.485 0 4.5-4.03 4.5-9S14.485 3 12 3m0 18c-2.485 0-4.5-4.03-4.5-9S9.515 3 12 3m0 0a8.997 8.997 0 0 1 7.843 4.582M12 3a8.997 8.997 0 0 0-7.843 4.582m15.686 0A11.953 11.953 0 0 1 12 10.5c-2.998 0-5.74-1.1-7.843-2.918m15.686 0A8.959 8.959 0 0 1 21 12c0 .778-.099 1.533-.284 2.253M3 12c0 .778.099 1.533.284 2.253"/></svg>
                        Join at maxisa.co.za
                    </a>
                    <a href="tel:0861194637" style="display:inline-flex;align-items:center;gap:.5rem;background:rgba(255,255,255,.15);color:#fff;font-weight:600;font-size:.9rem;padding:.8rem 1.75rem;border-radius:.6rem;text-decoration:none;border:1.5px solid rgba(255,255,255,.3);">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" style="width:1rem;height:1rem;"><path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 0 0 2.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 0 1-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 0 0-1.091-.852H4.5A2.25 2.25 0 0 0 2.25 4.5v2.25z"/></svg>
                        086 119 4637
                    </a>
                </div>
            </div>

            {{-- Right: Benefits grid --}}
            <div class="grid sm:grid-cols-2 gap-4">
                @foreach([
                    ['FREE 24/7 Ambulance','Road or air evacuation for main member &amp; all dependants — anywhere in SA, anytime.','#16a34a'],
                    ['FREE Repatriation','Anywhere in South Africa up to R20 000, including repatriation of mortal remains.','#1a5faa'],
                    ['FREE 24/7 Medical Advice','Emergency first aid advice, poison information, stress management &amp; substance abuse support.','#7c3aed'],
                    ['FREE Trauma Counselling','Hijacking, suicide, motor accidents, school bullying — professional confidential support.','#e63946'],
                    ['Total Disability Cover','R100 000 total disability cover for the main member.','#b45309'],
                    ['Private Emergency Services','No reliance on public services. Private road or air emergency evacuation guaranteed.','#0f3d77'],
                ] as [$title, $desc, $colour])
                <div style="background:rgba(255,255,255,.08);border:1px solid rgba(255,255,255,.14);border-radius:1rem;padding:1.25rem;">
                    <div style="display:flex;align-items:center;gap:.6rem;margin-bottom:.6rem;">
                        <div style="width:2rem;height:2rem;border-radius:.5rem;background:{{ $colour }}33;display:flex;align-items:center;justify-content:center;flex-shrink:0;">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="{{ $colour }}" style="width:.9rem;height:.9rem;"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0z"/></svg>
                        </div>
                        <h4 style="font-weight:700;color:#fff;font-size:.9rem;">{{ $title }}</h4>
                    </div>
                    <p style="font-size:.8rem;color:rgba(255,255,255,.65);line-height:1.65;">{!! $desc !!}</p>
                </div>
                @endforeach
            </div>
        </div>

        {{-- Trauma counselling detail --}}
        <div style="margin-top:3rem;background:rgba(230,57,70,.12);border:1px solid rgba(230,57,70,.3);border-radius:1rem;padding:1.75rem 2rem;">
            <div style="display:flex;align-items:center;gap:.75rem;margin-bottom:1rem;">
                <div style="width:2.5rem;height:2.5rem;border-radius:.6rem;background:#e63946;display:flex;align-items:center;justify-content:center;flex-shrink:0;">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="#fff" style="width:1.25rem;height:1.25rem;"><path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z"/></svg>
                </div>
                <h3 style="font-weight:700;color:#fff;font-size:1rem;">Trauma Counselling Covers</h3>
            </div>
            <div style="display:flex;flex-wrap:wrap;gap:.6rem;">
                @foreach(['Hijacking','Suicide','Motor Accidents','School Bullying'] as $t)
                <span style="background:rgba(230,57,70,.25);border:1px solid rgba(230,57,70,.4);color:#fff;font-size:.8rem;font-weight:600;padding:.3rem .85rem;border-radius:9999px;">{{ $t }}</span>
                @endforeach
            </div>
        </div>

        {{-- Footer note --}}
        <div style="margin-top:2rem;display:flex;flex-wrap:wrap;justify-content:space-between;align-items:center;gap:1rem;border-top:1px solid rgba(255,255,255,.1);padding-top:1.5rem;">
            <p style="font-size:.82rem;color:rgba(255,255,255,.5);">
                <strong style="color:rgba(255,255,255,.8);">STRICTLY DEBIT ORDER ONLY.</strong>
                Call <a href="tel:0861194637" style="color:#93b4d4;">086 119 4637</a> for 24hr assistance.
                Durban: <a href="tel:0312620552" style="color:#93b4d4;">031 262 0552</a> |
                Email: <a href="mailto:info@maxisa.co.za" style="color:#93b4d4;">info@maxisa.co.za</a>
            </p>
            <a href="https://www.maxisa.co.za" target="_blank" style="font-size:.82rem;color:#93b4d4;text-decoration:underline;">www.maxisa.co.za</a>
        </div>
    </div>
</section>

{{-- WHAT'S INCLUDED --}}
<section class="py-20 px-4 bg-white">
    <div class="max-w-7xl mx-auto">
        <div class="text-center mb-12">
            <h2 class="section-title">Everything Included in Every Plan</h2>
            <p class="section-sub">All members — individual or family — receive identical comprehensive cover.</p>
        </div>
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6 mb-14">
            @foreach([
                ['#1a5faa','bg-blue-50','Accidental Medical Expenses','Up to R100 000 cover for accidental medical expenses.'],
                ['#c0392b','bg-red-50','Dreaded Disease Cover','Up to R150 000 for heart attack, stroke, cancer, kidney failure, organ transplant, paraplegia and blindness.'],
                ['#7c3aed','bg-purple-50','FREE Trauma Counselling','Professional trauma counselling sessions included at no extra cost.'],
                ['#16a34a','bg-green-50','FREE Grocery Coupons','Monthly grocery coupons valued at over R300 — every month.'],
                ['#b45309','bg-amber-50','Repatriation Cover','FREE repatriation anywhere in South Africa up to R20 000, including mortal remains.'],
                ['#1a5faa','bg-blue-50','Permanent Disability Benefit','R100 000 lump sum payout on permanent disability.'],
                ['#c0392b','bg-red-50','FREE Death Cover','R10 000 death cover included for all members.'],
                ['#16a34a','bg-green-50','FREE 24/7 Ambulance Services','Road or air ambulance for main member and all dependants — anywhere, anytime, no reliance on public services.'],
                ['#b45309','bg-amber-50','Emergency Room Cover','R10 000 for accidental and life-threatening emergency room services.'],
                ['#7c3aed','bg-purple-50','24/7 Medical Advice Line','Emergency first aid advice, poison information, stress management and substance abuse support — around the clock.'],
            ] as [$colour, $bg, $title, $desc])
            <div class="rounded-2xl p-6 border border-gray-100 card-hover {{ $bg }}">
                <div class="w-10 h-10 rounded-xl flex items-center justify-center mb-4" style="background:{{ $colour }}20;">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" style="width:1.15rem;height:1.15rem;color:{{ $colour }};"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0z"/></svg>
                </div>
                <h4 class="font-bold text-blue-900 mb-1 text-sm">{{ $title }}</h4>
                <p class="text-gray-600 text-sm leading-relaxed">{{ $desc }}</p>
            </div>
            @endforeach
        </div>

        {{-- Dreaded Disease Detail --}}
        <div class="rounded-2xl bg-blue-950 text-white p-8 md:p-10">
            <div class="flex items-start gap-4 mb-6">
                <div class="w-12 h-12 rounded-xl bg-red-600 flex items-center justify-center flex-shrink-0">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" style="width:1.4rem;height:1.4rem;"><path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126zM12 15.75h.007v.008H12v-.008z"/></svg>
                </div>
                <div>
                    <h3 class="text-xl font-bold mb-1">Dreaded Disease Cover — Up to R150 000</h3>
                    <p class="text-blue-200 text-sm">Medical expenses covered for the following critical conditions:</p>
                </div>
            </div>
            <div class="grid sm:grid-cols-2 md:grid-cols-4 gap-3">
                @foreach(['Heart Attack','Chronic Coronary Heart Disease','Stroke','Cancer','Kidney Failure','Major Organ Transplant (Kidney / Heart / Lung / Liver)','Paraplegia','Blindness'] as $d)
                <div class="flex items-center gap-2 bg-white bg-opacity-10 rounded-xl px-4 py-3">
                    <span class="text-red-400 font-bold text-xs">&#10003;</span>
                    <span class="text-sm text-blue-100">{{ $d }}</span>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>

{{-- FAQ --}}
<section class="py-20 px-4 bg-gray-50">
    <div class="max-w-3xl mx-auto">
        <h2 class="section-title text-center mb-10">Frequently Asked Questions</h2>
        <div class="space-y-5">
            @foreach([
                ['Who can join the Maxi Medical Assist Plan?','Any individual or family. Spouse and children receive the same comprehensive cover as the main member at no extra benefit cost — just the relevant family price tier.'],
                ['How do I activate emergency cover?','Call our 24-hour assistance line on 086 119 4637. Your membership details are all that is needed to activate immediate support.'],
                ['Which hospital network is preferred?','We are a preferred supplier of the Netcare Hospital Group, ensuring you have access to private hospital care across South Africa.'],
                ['Who manages pre-authorisation?','Pre-authorisation and medical care management is handled by Africa Assist, ensuring fast approvals and proper care coordination.'],
                ['Are payment store charges applicable?','Yes — charges may apply for payments made at certain retail payment partners. This is subject to Terms &amp; Conditions.'],
                ['Is the ambulance service really free?','Yes. FREE 24-hour ambulance services via road or air are included for the main member and all dependants, anywhere in South Africa, at any time — with no reliance on public services.'],
            ] as $faq)
            <div class="bg-white rounded-2xl p-6 border border-gray-100">
                <h4 class="font-bold text-blue-900 mb-2">{{ $faq[0] }}</h4>
                <p class="text-gray-500 text-sm leading-relaxed">{{ $faq[1] }}</p>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- CTA --}}
<section class="hero-gradient py-16 px-4 text-white text-center">
    <div class="max-w-2xl mx-auto">
        <h2 class="text-3xl font-extrabold mb-4">Ready to get covered?</h2>
        <p class="text-blue-100 mb-8">Talk to our team today and we'll help you choose the right plan for you and your family.</p>
        <a href="{{ url('/contact') }}" class="btn-red">Sign Up for a Plan</a>
    </div>
</section>

@endsection
