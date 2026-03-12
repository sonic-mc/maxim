@extends('layouts.app')
@section('title', 'About Us – Maxi Medical Zimbabwe')
@section('content')

{{-- PAGE HERO --}}
<section style="position:relative;padding:10rem 1rem 5rem;overflow:hidden;">
    <div style="position:absolute;inset:0;z-index:0;">
        <img src="/images/image2.jpg" alt="About Us" style="width:100%;height:100%;object-fit:cover;object-position:center;">
        <div style="position:absolute;inset:0;background:linear-gradient(100deg,rgba(10,36,71,.88) 0%,rgba(10,36,71,.72) 50%,rgba(10,36,71,.55) 100%);"></div>
    </div>
    <div class="max-w-7xl mx-auto text-center" style="position:relative;z-index:1;">
        <span style="display:inline-block;background:#e63946;color:#fff;font-size:.72rem;font-weight:700;padding:.35rem 1rem;border-radius:9999px;letter-spacing:.12em;text-transform:uppercase;margin-bottom:1.1rem;">About Us</span>
        <h1 style="font-family:'DM Serif Display',serif;font-size:clamp(2.2rem,5vw,3.2rem);font-weight:400;color:#fff;line-height:1.15;margin-bottom:1.1rem;">Who We Are</h1>
        <p style="color:rgba(255,255,255,.8);font-size:1.05rem;max-width:38rem;margin:0 auto;line-height:1.8;">
            Maxi Medical Zimbabwe is a trusted supplier of medical equipment, accessories, medicines
            and healthcare support services — serving individuals, families and institutions across Zimbabwe.
        </p>
    </div>
</section>

{{-- MISSION / VISION --}}
<section class="py-20 px-4 bg-white">
    <div class="max-w-7xl mx-auto grid md:grid-cols-2 gap-14 items-center">
        <div>
            <h2 class="section-title mb-4">Our Story</h2>
            <p class="text-gray-600 leading-8 mb-5">
                Founded with a vision to bridge Zimbabwe's healthcare supply gap, Maxi Medical has grown into one
                of the country's most dependable medical product and services companies. From our offices on the
                15th Floor of CABS Centre in Harare, we serve clients across all provinces.
            </p>
            <p class="text-gray-600 leading-8">
                Our work spans hospital equipment, diagnostics, physio and rehab tools, medicines, medical accessories,
                and structured medical assist plans that provide emergency cover and peace of mind.
            </p>
        </div>
        <div class="grid grid-cols-2 gap-6">
            @foreach([
                ['#0d2d6b','Our Mission','Deliver quality, affordable medical supplies and support solutions that improve health outcomes across Zimbabwe.'],
                ['#c0392b','Our Vision','A Zimbabwe where every person and institution has timely access to quality healthcare products and emergency services.'],
            ] as $mv)
            <div class="col-span-2 rounded-2xl p-7 text-white" style="background:{{ $mv[0] }}">
                <h3 class="text-xl font-bold mb-3">{{ $mv[1] }}</h3>
                <p class="text-sm leading-relaxed opacity-90">{{ $mv[2] }}</p>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- VALUES --}}
<section class="py-20 px-4 bg-gray-50">
    <div class="max-w-7xl mx-auto text-center mb-12">
        <h2 class="section-title">Our Core Values</h2>
        <p class="section-sub">Everything we do is guided by these principles.</p>
    </div>
    <div class="max-w-7xl mx-auto grid sm:grid-cols-2 lg:grid-cols-4 gap-8">
        <div class="bg-white rounded-2xl p-7 card-hover border border-gray-100 text-center">
            <div class="w-14 h-14 rounded-2xl bg-blue-50 flex items-center justify-center mx-auto mb-4" style="color:#1a5faa;">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" style="width:1.75rem;height:1.75rem;"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75m-3-7.036A11.959 11.959 0 0 1 3.598 6 11.99 11.99 0 0 0 3 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285z"/></svg>
            </div>
            <h3 class="font-bold text-blue-900 mb-2">Integrity</h3>
            <p class="text-gray-500 text-sm leading-relaxed">We operate with honesty and transparency in all our supply, pricing and service commitments.</p>
        </div>
        <div class="bg-white rounded-2xl p-7 card-hover border border-gray-100 text-center">
            <div class="w-14 h-14 rounded-2xl bg-yellow-50 flex items-center justify-center mx-auto mb-4" style="color:#d97706;">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" style="width:1.75rem;height:1.75rem;"><path stroke-linecap="round" stroke-linejoin="round" d="M11.48 3.499a.562.562 0 0 1 1.04 0l2.125 5.111a.563.563 0 0 0 .475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 0 0-.182.557l1.285 5.385a.562.562 0 0 1-.84.61l-4.725-2.885a.563.563 0 0 0-.586 0L6.982 20.54a.562.562 0 0 1-.84-.61l1.285-5.386a.562.562 0 0 0-.182-.557l-4.204-3.602a.562.562 0 0 1 .321-.988l5.518-.442a.563.563 0 0 0 .475-.345L11.48 3.5z"/></svg>
            </div>
            <h3 class="font-bold text-blue-900 mb-2">Quality</h3>
            <p class="text-gray-500 text-sm leading-relaxed">Every product we supply meets or exceeds relevant healthcare quality standards.</p>
        </div>
        <div class="bg-white rounded-2xl p-7 card-hover border border-gray-100 text-center">
            <div class="w-14 h-14 rounded-2xl bg-red-50 flex items-center justify-center mx-auto mb-4" style="color:#e63946;">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" style="width:1.75rem;height:1.75rem;"><path stroke-linecap="round" stroke-linejoin="round" d="M3.75 13.5 14.25 2.25 12 10.5h8.25L9.75 21.75 12 13.5H3.75z"/></svg>
            </div>
            <h3 class="font-bold text-blue-900 mb-2">Responsiveness</h3>
            <p class="text-gray-500 text-sm leading-relaxed">We prioritise fast delivery and rapid emergency response because health cannot wait.</p>
        </div>
        <div class="bg-white rounded-2xl p-7 card-hover border border-gray-100 text-center">
            <div class="w-14 h-14 rounded-2xl bg-pink-50 flex items-center justify-center mx-auto mb-4" style="color:#e63946;">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" style="width:1.75rem;height:1.75rem;"><path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z"/></svg>
            </div>
            <h3 class="font-bold text-blue-900 mb-2">Care</h3>
            <p class="text-gray-500 text-sm leading-relaxed">We treat every client — individual or institutional — with genuine compassion and professionalism.</p>
        </div>
    </div>
</section>

{{-- TEAM --}}
<section class="py-20 px-4 bg-white">
    <div class="max-w-7xl mx-auto text-center mb-12">
        <h2 class="section-title">Our Leadership</h2>
        <p class="section-sub">Experienced professionals committed to healthcare excellence.</p>
    </div>
    <div class="max-w-4xl mx-auto grid sm:grid-cols-3 gap-8">
        @foreach([
            ['Chief Executive Officer','Leading strategy, partnerships and national operations.'],
            ['Head of Medical Supplies','Overseeing procurement, quality assurance and distribution.'],
            ['Emergency Response Manager','Coordinating ambulance, trauma and emergency plan delivery.'],
        ] as $tm)
        <div class="bg-gray-50 rounded-2xl p-7 text-center border border-gray-100 card-hover">
            <div class="w-20 h-20 rounded-full bg-blue-100 mx-auto mb-4 flex items-center justify-center" style="color:#1a5faa;">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" style="width:2.2rem;height:2.2rem;"><path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0zM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632z"/></svg>
            </div>
            <h4 class="font-bold text-blue-900 text-sm">{{ $tm[0] }}</h4>
            <p class="text-gray-400 text-xs mt-2 leading-relaxed">{{ $tm[1] }}</p>
        </div>
        @endforeach
    </div>
</section>

{{-- CTA --}}
<section class="hero-gradient py-16 px-4 text-white text-center">
    <div class="max-w-2xl mx-auto">
        <h2 class="text-3xl font-extrabold mb-4">Start a Conversation</h2>
        <p class="text-blue-100 mb-8">Learn more about our products, services or medical plans. Our team is ready to help.</p>
        <a href="{{ url('/contact') }}" class="btn-red">Contact Us Today</a>
    </div>
</section>

@endsection
