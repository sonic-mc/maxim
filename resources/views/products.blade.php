@extends('layouts.app')
@section('title', 'Products – Maxi Medical Zimbabwe')
@section('content')

{{-- HERO --}}
<section style="position:relative;padding:10rem 1rem 5rem;overflow:hidden;">
    <div style="position:absolute;inset:0;z-index:0;">
        <img src="/images/image2.jpg" alt="Products" style="width:100%;height:100%;object-fit:cover;object-position:center;">
        <div style="position:absolute;inset:0;background:linear-gradient(100deg,rgba(10,36,71,.88) 0%,rgba(10,36,71,.72) 50%,rgba(10,36,71,.55) 100%);"></div>
    </div>
    <div class="max-w-7xl mx-auto text-center" style="position:relative;z-index:1;">
        <span style="display:inline-block;background:#e63946;color:#fff;font-size:.72rem;font-weight:700;padding:.35rem 1rem;border-radius:9999px;letter-spacing:.12em;text-transform:uppercase;margin-bottom:1.1rem;">Our Products</span>
        <h1 style="font-family:'DM Serif Display',serif;font-size:clamp(2.2rem,5vw,3.2rem);font-weight:400;color:#fff;line-height:1.15;margin-bottom:1.1rem;">Medical Product Categories</h1>
        <p style="color:rgba(255,255,255,.8);font-size:1.05rem;max-width:38rem;margin:0 auto;line-height:1.8;">
            Browse our extensive range of quality-certified medical products — from hospital equipment to everyday healthcare accessories.
        </p>
    </div>
</section>

{{-- CATEGORIES --}}
<section class="py-20 px-4 bg-white">
    <div class="max-w-7xl mx-auto">

        {{-- Hospital Equipment --}}
        <div class="mb-16">
            <div class="flex items-center gap-4 mb-8">
                <div class="w-12 h-12 rounded-xl bg-blue-100 flex items-center justify-center" style="color:#1a5faa;">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" style="width:1.4rem;height:1.4rem;"><path stroke-linecap="round" stroke-linejoin="round" d="M2.25 21h19.5m-18-18v18m10.5-18v18m6-13.5V21M6.75 6.75h.75m-.75 3h.75m-.75 3h.75m3-6h.75m-.75 3h.75m-.75 3h.75M6.75 21v-3.375c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21M3 3h12m-.75 4.5H21"/></svg>
                </div>
                <div>
                    <h2 class="text-2xl font-bold text-blue-900">Hospital Equipment</h2>
                    <p class="text-gray-500 text-sm">Durable, certified equipment for clinical environments.</p>
                </div>
            </div>
            <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-6">
                @foreach(['ICU Beds','Oxygen Concentrators','Suction Machines','Infusion Pumps','Patient Monitors','Surgical Tables','Autoclave Sterilizers','Examination Couches'] as $p)
                <div class="bg-gray-50 rounded-2xl p-5 card-hover border border-gray-100">
                    <div class="w-10 h-10 rounded-lg bg-blue-50 flex items-center justify-center mb-3" style="color:#1a5faa;">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" style="width:1.1rem;height:1.1rem;"><path stroke-linecap="round" stroke-linejoin="round" d="M2.25 21h19.5m-18-18v18m10.5-18v18m6-13.5V21M6.75 6.75h.75m-.75 3h.75m-.75 3h.75m3-6h.75m-.75 3h.75m-.75 3h.75M6.75 21v-3.375c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21M3 3h12m-.75 4.5H21"/></svg>
                </div>
                    <h4 class="font-semibold text-blue-900 text-sm">{{ $p }}</h4>
                    <a href="{{ url('/contact') }}" class="mt-3 text-xs text-blue-600 font-medium hover:underline inline-block">Request Quote &rarr;</a>
                </div>
                @endforeach
            </div>
        </div>

        {{-- Diagnostic Tools --}}
        <div class="mb-16">
            <div class="flex items-center gap-4 mb-8">
                <div class="w-12 h-12 rounded-xl bg-red-100 flex items-center justify-center" style="color:#dc2626;">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" style="width:1.4rem;height:1.4rem;"><path stroke-linecap="round" stroke-linejoin="round" d="M9.75 3.104v5.714a2.25 2.25 0 0 1-1.857 2.22A7.502 7.502 0 0 0 3 18.375c0 .621.504 1.125 1.125 1.125h15.75c.621 0 1.125-.504 1.125-1.125a7.502 7.502 0 0 0-4.893-7.037A2.25 2.25 0 0 1 14.25 8.818V3.104m-4.5 0h4.5"/></svg>
                </div>
                <div>
                    <h2 class="text-2xl font-bold text-blue-900">Diagnostic Tools</h2>
                    <p class="text-gray-500 text-sm">Accurate instruments for clinical diagnostics and monitoring.</p>
                </div>
            </div>
            <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-6">
                @foreach(['Blood Pressure Monitors','Glucometers','Pulse Oximeters','Digital Thermometers','Stethoscopes','Otoscopes','ECG Machines','Spirometers'] as $p)
                <div class="bg-gray-50 rounded-2xl p-5 card-hover border border-gray-100">
                    <div class="w-10 h-10 rounded-lg bg-red-50 flex items-center justify-center mb-3" style="color:#dc2626;">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" style="width:1.1rem;height:1.1rem;"><path stroke-linecap="round" stroke-linejoin="round" d="M9.75 3.104v5.714a2.25 2.25 0 0 1-1.857 2.22A7.502 7.502 0 0 0 3 18.375c0 .621.504 1.125 1.125 1.125h15.75c.621 0 1.125-.504 1.125-1.125a7.502 7.502 0 0 0-4.893-7.037A2.25 2.25 0 0 1 14.25 8.818V3.104m-4.5 0h4.5"/></svg>
                </div>
                    <h4 class="font-semibold text-blue-900 text-sm">{{ $p }}</h4>
                    <a href="{{ url('/contact') }}" class="mt-3 text-xs text-blue-600 font-medium hover:underline inline-block">Request Quote &rarr;</a>
                </div>
                @endforeach
            </div>
        </div>

        {{-- Physio & Rehab --}}
        <div class="mb-16">
            <div class="flex items-center gap-4 mb-8">
                <div class="w-12 h-12 rounded-xl bg-green-100 flex items-center justify-center" style="color:#16a34a;">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" style="width:1.4rem;height:1.4rem;"><path stroke-linecap="round" stroke-linejoin="round" d="M16.023 9.348h4.992v-.001M2.985 19.644v-4.992m0 0h4.992m-4.993 0 3.181 3.183a8.25 8.25 0 0 0 13.803-3.7M4.031 9.865a8.25 8.25 0 0 1 13.803-3.7l3.181 3.182m0-4.991v4.99"/></svg>
                </div>
                <div>
                    <h2 class="text-2xl font-bold text-blue-900">Physio &amp; Rehab Gadgets</h2>
                    <p class="text-gray-500 text-sm">Rehabilitation tools for recovery and mobility support.</p>
                </div>
            </div>
            <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-6">
                @foreach(['TENS/EMS Units','Ultrasound Therapy','Hot/Cold Packs','Resistance Bands','Exercise Balls','Mobility Walkers','Traction Devices','Kinesiology Tape'] as $p)
                <div class="bg-gray-50 rounded-2xl p-5 card-hover border border-gray-100">
                    <div class="w-10 h-10 rounded-lg bg-green-50 flex items-center justify-center mb-3" style="color:#16a34a;">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" style="width:1.1rem;height:1.1rem;"><path stroke-linecap="round" stroke-linejoin="round" d="M16.023 9.348h4.992v-.001M2.985 19.644v-4.992m0 0h4.992m-4.993 0 3.181 3.183a8.25 8.25 0 0 0 13.803-3.7M4.031 9.865a8.25 8.25 0 0 1 13.803-3.7l3.181 3.182m0-4.991v4.99"/></svg>
                </div>
                    <h4 class="font-semibold text-blue-900 text-sm">{{ $p }}</h4>
                    <a href="{{ url('/contact') }}" class="mt-3 text-xs text-blue-600 font-medium hover:underline inline-block">Request Quote &rarr;</a>
                </div>
                @endforeach
            </div>
        </div>

        {{-- Medical Accessories --}}
        <div class="mb-16">
            <div class="flex items-center gap-4 mb-8">
                <div class="w-12 h-12 rounded-xl bg-yellow-100 flex items-center justify-center" style="color:#b45309;">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" style="width:1.4rem;height:1.4rem;"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12h3.75M9 15h3.75M9 18h3.75m3 .75H18a2.25 2.25 0 0 0 2.25-2.25V6.108c0-1.135-.845-2.098-1.976-2.192a48.424 48.424 0 0 0-1.123-.08m-5.801 0c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4.5a.75.75 0 0 0 .75-.75 2.25 2.25 0 0 0-.1-.664m-5.8 0A2.251 2.251 0 0 1 13.5 2.25H15c1.012 0 1.867.668 2.15 1.586m-5.8 0c-.376.023-.75.05-1.124.08C9.095 4.01 8.25 4.973 8.25 6.108V8.25m0 0H4.875c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V9.375c0-.621-.504-1.125-1.125-1.125H8.25z"/></svg>
                </div>
                <div>
                    <h2 class="text-2xl font-bold text-blue-900">Medical Accessories</h2>
                    <p class="text-gray-500 text-sm">Clinical consumables and accessories for daily healthcare needs.</p>
                </div>
            </div>
            <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-6">
                @foreach(['Surgical Gloves','Face Masks','Syringes & Needles','IV Cannulas','Catheters','Bandages & Dressings','Surgical Gowns','Antiseptics'] as $p)
                <div class="bg-gray-50 rounded-2xl p-5 card-hover border border-gray-100">
                    <div class="w-10 h-10 rounded-lg bg-yellow-50 flex items-center justify-center mb-3" style="color:#b45309;">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" style="width:1.1rem;height:1.1rem;"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12h3.75M9 15h3.75M9 18h3.75m3 .75H18a2.25 2.25 0 0 0 2.25-2.25V6.108c0-1.135-.845-2.098-1.976-2.192a48.424 48.424 0 0 0-1.123-.08m-5.801 0c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4.5a.75.75 0 0 0 .75-.75 2.25 2.25 0 0 0-.1-.664m-5.8 0A2.251 2.251 0 0 1 13.5 2.25H15c1.012 0 1.867.668 2.15 1.586m-5.8 0c-.376.023-.75.05-1.124.08C9.095 4.01 8.25 4.973 8.25 6.108V8.25m0 0H4.875c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V9.375c0-.621-.504-1.125-1.125-1.125H8.25z"/></svg>
                </div>
                    <h4 class="font-semibold text-blue-900 text-sm">{{ $p }}</h4>
                    <a href="{{ url('/contact') }}" class="mt-3 text-xs text-blue-600 font-medium hover:underline inline-block">Request Quote &rarr;</a>
                </div>
                @endforeach
            </div>
        </div>

        {{-- Medicines --}}
        <div class="mb-16">
            <div class="flex items-center gap-4 mb-8">
                <div class="w-12 h-12 rounded-xl bg-purple-100 flex items-center justify-center" style="color:#7c3aed;">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" style="width:1.4rem;height:1.4rem;"><path stroke-linecap="round" stroke-linejoin="round" d="M12 9v6m3-3H9m12 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0z"/></svg>
                </div>
                <div>
                    <h2 class="text-2xl font-bold text-blue-900">Medicines</h2>
                    <p class="text-gray-500 text-sm">OTC, prescription, and supplementary health products.</p>
                </div>
            </div>
            <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-6">
                @foreach(['OTC Medicines','Prescription Drugs','Vitamins & Supplements','First Aid Kits','Antifungals','Analgesics','Antibiotics','Antimalarials'] as $p)
                <div class="bg-gray-50 rounded-2xl p-5 card-hover border border-gray-100">
                    <div class="w-10 h-10 rounded-lg bg-purple-50 flex items-center justify-center mb-3" style="color:#7c3aed;">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" style="width:1.1rem;height:1.1rem;"><path stroke-linecap="round" stroke-linejoin="round" d="M12 9v6m3-3H9m12 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0z"/></svg>
                </div>
                    <h4 class="font-semibold text-blue-900 text-sm">{{ $p }}</h4>
                    <a href="{{ url('/contact') }}" class="mt-3 text-xs text-blue-600 font-medium hover:underline inline-block">Request Quote &rarr;</a>
                </div>
                @endforeach
            </div>
        </div>

        {{-- Emergency Support Solutions --}}
        <div class="mb-4">
            <div class="flex items-center gap-4 mb-8">
                <div class="w-12 h-12 rounded-xl bg-orange-100 flex items-center justify-center" style="color:#ea580c;">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" style="width:1.4rem;height:1.4rem;"><path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126zM12 15.75h.007v.008H12v-.008z"/></svg>
                </div>
                <div>
                    <h2 class="text-2xl font-bold text-blue-900">Emergency Support Solutions</h2>
                    <p class="text-gray-500 text-sm">Critical equipment for emergency preparedness and response.</p>
                </div>
            </div>
            <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-6">
                @foreach(['Defibrillators (AED)','Crash Carts/Kits','Trauma Bags','Emergency Oxygen Kits','Cervical Collars','Stretchers','Emergency Blankets','Blood Stop Kits'] as $p)
                <div class="bg-gray-50 rounded-2xl p-5 card-hover border border-gray-100">
                    <div class="w-10 h-10 rounded-lg bg-orange-50 flex items-center justify-center mb-3" style="color:#ea580c;">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" style="width:1.1rem;height:1.1rem;"><path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126zM12 15.75h.007v.008H12v-.008z"/></svg>
                </div>
                    <h4 class="font-semibold text-blue-900 text-sm">{{ $p }}</h4>
                    <a href="{{ url('/contact') }}" class="mt-3 text-xs text-blue-600 font-medium hover:underline inline-block">Request Quote &rarr;</a>
                </div>
                @endforeach
            </div>
        </div>

    </div>
</section>

{{-- CTA --}}
<section class="hero-gradient py-16 px-4 text-white text-center">
    <div class="max-w-2xl mx-auto">
        <h2 class="text-3xl font-extrabold mb-4">Can't find what you need?</h2>
        <p class="text-blue-100 mb-8">Contact us and we'll source it for you. We handle custom procurement for hospitals, clinics and businesses.</p>
        <a href="{{ url('/contact') }}" class="btn-red">Request a Custom Quote</a>
    </div>
</section>

@endsection
