@extends('layouts.app')
@section('title', 'Services – Maxi Medical Zimbabwe')
@section('content')

{{-- HERO --}}
<section style="position:relative;padding:10rem 1rem 5rem;overflow:hidden;">
    <div style="position:absolute;inset:0;z-index:0;">
        <img src="/images/image2.jpg" alt="Services" style="width:100%;height:100%;object-fit:cover;object-position:center;">
        <div style="position:absolute;inset:0;background:linear-gradient(100deg,rgba(10,36,71,.88) 0%,rgba(10,36,71,.72) 50%,rgba(10,36,71,.55) 100%);"></div>
    </div>
    <div class="max-w-7xl mx-auto text-center" style="position:relative;z-index:1;">
        <span style="display:inline-block;background:#e63946;color:#fff;font-size:.72rem;font-weight:700;padding:.35rem 1rem;border-radius:9999px;letter-spacing:.12em;text-transform:uppercase;margin-bottom:1.1rem;">Our Services</span>
        <h1 style="font-family:'DM Serif Display',serif;font-size:clamp(2.2rem,5vw,3.2rem);font-weight:400;color:#fff;line-height:1.15;margin-bottom:1.1rem;">Healthcare Services &amp; Support</h1>
        <p style="color:rgba(255,255,255,.8);font-size:1.05rem;max-width:38rem;margin:0 auto;line-height:1.8;">
            Beyond products, Maxi Medical delivers critical healthcare services — from emergency response to medical counselling and equipment procurement support.
        </p>
    </div>
</section>

{{-- SERVICES DETAIL --}}
<section class="py-20 px-4 bg-white">
    <div class="max-w-7xl mx-auto space-y-16">

        {{-- Emergency Medical Support --}}
        <div class="grid md:grid-cols-2 gap-12 items-center">
            <div class="bg-blue-50 rounded-2xl p-10 flex items-center justify-center min-h-48">
                <div class="text-center">
                    <div class="w-24 h-24 rounded-full bg-blue-100 flex items-center justify-center mx-auto" style="color:#1a5faa;">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" style="width:3rem;height:3rem;"><path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 0 0 2.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 0 1-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 0 0-1.091-.852H4.5A2.25 2.25 0 0 0 2.25 4.5v2.25z"/></svg>
                    </div>
                    <p class="mt-4 font-bold text-blue-900 text-lg">Emergency Support</p>
                </div>
            </div>
            <div>
                <span class="text-xs font-semibold text-red-600 uppercase tracking-widest">24 / 7</span>
                <h2 class="text-3xl font-extrabold text-blue-900 mt-2 mb-4">Emergency Medical Support</h2>
                <p class="text-gray-600 leading-relaxed mb-4">
                    Our emergency medical support service provides rapid, round-the-clock assistance to plan members and contracted clients.
                    With a national response network, we coordinate immediate medical help whenever and wherever it is needed.
                </p>
                <ul class="space-y-3 text-sm text-gray-600 mb-6">
                    @foreach(['24/7 emergency hotline','On-scene first response coordination','Multi-province coverage','Dispatch coordination to nearest facility','Real-time case tracking'] as $f)
                    <li class="flex items-start gap-2"><span class="text-green-600 font-bold">&#10003;</span> {{ $f }}</li>
                    @endforeach
                </ul>
                <a href="{{ url('/contact') }}" class="btn-primary">Enquire Now</a>
            </div>
        </div>

        <hr class="border-gray-100">

        {{-- Ambulance Response --}}
        <div class="grid md:grid-cols-2 gap-12 items-center">
            <div class="order-2 md:order-1">
                <span class="text-xs font-semibold text-red-600 uppercase tracking-widest">Rapid Response</span>
                <h2 class="text-3xl font-extrabold text-blue-900 mt-2 mb-4">Ambulance Response</h2>
                <p class="text-gray-600 leading-relaxed mb-4">
                    We coordinate swift ambulance dispatch through our partner network across Zimbabwe.
                    Our response team ensures patients reach the right facility in the shortest possible time.
                </p>
                <ul class="space-y-3 text-sm text-gray-600 mb-6">
                    @foreach(['Emergency ambulance dispatch','Interfacility transfers','Air evacuation coordination','Trained paramedic teams','GPS fleet tracking'] as $f)
                    <li class="flex items-start gap-2"><span class="text-green-600 font-bold">&#10003;</span> {{ $f }}</li>
                    @endforeach
                </ul>
                <a href="{{ url('/contact') }}" class="btn-primary">Enquire Now</a>
            </div>
            <div class="order-1 md:order-2 bg-red-50 rounded-2xl p-10 flex items-center justify-center min-h-48">
                <div class="text-center">
                    <div class="w-24 h-24 rounded-full bg-red-100 flex items-center justify-center mx-auto" style="color:#dc2626;">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" style="width:3rem;height:3rem;"><path stroke-linecap="round" stroke-linejoin="round" d="M8.25 18.75a1.5 1.5 0 0 1-3 0m3 0a1.5 1.5 0 0 0-3 0m3 0h6m-9 0H3.375a1.125 1.125 0 0 1-1.125-1.125V14.25m17.25 4.5a1.5 1.5 0 0 1-3 0m3 0a1.5 1.5 0 0 0-3 0m3 0h1.125c.621 0 1.129-.504 1.09-1.124a17.902 17.902 0 0 0-3.213-9.193 2.056 2.056 0 0 0-1.58-.86H14.25M16.5 18.75h-2.25m0-11.177v-.958c0-.568-.422-1.048-.987-1.106a48.554 48.554 0 0 0-10.026 0 1.106 1.106 0 0 0-.987 1.106v7.635m12-6.677v6.677m0 4.5v-4.5m0 0h-12"/></svg>
                    </div>
                    <p class="mt-4 font-bold text-blue-900 text-lg">Ambulance Response</p>
                </div>
            </div>
        </div>

        <hr class="border-gray-100">

        {{-- Medical Advice Line --}}
        <div class="grid md:grid-cols-2 gap-12 items-center">
            <div class="bg-green-50 rounded-2xl p-10 flex items-center justify-center min-h-48">
                <div class="text-center">
                    <div class="w-24 h-24 rounded-full bg-green-100 flex items-center justify-center mx-auto" style="color:#16a34a;">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" style="width:3rem;height:3rem;"><path stroke-linecap="round" stroke-linejoin="round" d="M8.625 12a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0zm0 0H8.25m4.125 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0zm0 0H12m4.125 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0zm0 0h-.375M21 12c0 4.556-4.03 8.25-9 8.25a9.764 9.764 0 0 1-2.555-.337A5.972 5.972 0 0 1 5.41 20.97a5.969 5.969 0 0 1-.474-.065 4.48 4.48 0 0 0 .978-2.025c.09-.457-.133-.901-.467-1.226C3.93 16.178 3 14.189 3 12c0-4.556 4.03-8.25 9-8.25s9 3.694 9 8.25z"/></svg>
                    </div>
                    <p class="mt-4 font-bold text-blue-900 text-lg">Advice Line</p>
                </div>
            </div>
            <div>
                <span class="text-xs font-semibold text-red-600 uppercase tracking-widest">Expert Guidance</span>
                <h2 class="text-3xl font-extrabold text-blue-900 mt-2 mb-4">Medical Advice Line</h2>
                <p class="text-gray-600 leading-relaxed mb-4">
                    Get qualified medical guidance at any hour without visiting a clinic.
                    Our registered healthcare professionals are available to triage, advise, and direct you to appropriate care.
                </p>
                <ul class="space-y-3 text-sm text-gray-600 mb-6">
                    @foreach(['Registered nurse and doctor advisors','Symptom triage and wellness guidance','Medication queries','Specialist referral advice','Available in English and Shona'] as $f)
                    <li class="flex items-start gap-2"><span class="text-green-600 font-bold">&#10003;</span> {{ $f }}</li>
                    @endforeach
                </ul>
                <a href="{{ url('/contact') }}" class="btn-primary">Enquire Now</a>
            </div>
        </div>

        <hr class="border-gray-100">

        {{-- Trauma Counselling --}}
        <div class="grid md:grid-cols-2 gap-12 items-center">
            <div class="order-2 md:order-1">
                <span class="text-xs font-semibold text-red-600 uppercase tracking-widest">Mental Wellness</span>
                <h2 class="text-3xl font-extrabold text-blue-900 mt-2 mb-4">Trauma Counselling</h2>
                <p class="text-gray-600 leading-relaxed mb-4">
                    Medical emergencies and serious health events leave emotional and psychological impacts.
                    Our qualified trauma counsellors provide compassionate, confidential support to patients and family members.
                </p>
                <ul class="space-y-3 text-sm text-gray-600 mb-6">
                    @foreach(['Post-accident trauma support','Critical incident counselling','Grief and bereavement sessions','Family counselling','Confidential and professional'] as $f)
                    <li class="flex items-start gap-2"><span class="text-green-600 font-bold">&#10003;</span> {{ $f }}</li>
                    @endforeach
                </ul>
                <a href="{{ url('/contact') }}" class="btn-primary">Enquire Now</a>
            </div>
            <div class="order-1 md:order-2 bg-purple-50 rounded-2xl p-10 flex items-center justify-center min-h-48">
                <div class="text-center">
                    <div class="w-24 h-24 rounded-full bg-purple-100 flex items-center justify-center mx-auto" style="color:#7c3aed;">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" style="width:3rem;height:3rem;"><path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z"/></svg>
                    </div>
                    <p class="mt-4 font-bold text-blue-900 text-lg">Trauma Counselling</p>
                </div>
            </div>
        </div>

        <hr class="border-gray-100">

        {{-- Equipment Supply --}}
        <div class="grid md:grid-cols-2 gap-12 items-center">
            <div class="bg-yellow-50 rounded-2xl p-10 flex items-center justify-center min-h-48">
                <div class="text-center">
                    <div class="w-24 h-24 rounded-full bg-yellow-100 flex items-center justify-center mx-auto" style="color:#b45309;">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" style="width:3rem;height:3rem;"><path stroke-linecap="round" stroke-linejoin="round" d="M21 7.5l-9-5.25L3 7.5m18 0-9 5.25m9-5.25v9l-9 5.25M3 7.5l9 5.25M3 7.5v9l9 5.25m0-9v9"/></svg>
                    </div>
                    <p class="mt-4 font-bold text-blue-900 text-lg">Equipment Supply</p>
                </div>
            </div>
            <div>
                <span class="text-xs font-semibold text-red-600 uppercase tracking-widest">Products & Procurement</span>
                <h2 class="text-3xl font-extrabold text-blue-900 mt-2 mb-4">Medical Equipment Supply</h2>
                <p class="text-gray-600 leading-relaxed mb-4">
                    We supply, deliver and support a comprehensive catalogue of hospital equipment, diagnostic tools,
                    physio gadgets, accessories and medicines — with full procurement assistance for bulk institutional orders.
                </p>
                <ul class="space-y-3 text-sm text-gray-600 mb-6">
                    @foreach(['Bulk and single-unit orders','Custom procurement','Delivery across Zimbabwe','Product quality certification','After-sale support'] as $f)
                    <li class="flex items-start gap-2"><span class="text-green-600 font-bold">&#10003;</span> {{ $f }}</li>
                    @endforeach
                </ul>
                <a href="{{ url('/products') }}" class="btn-primary">Browse Products</a>
            </div>
        </div>

    </div>
</section>

{{-- CTA --}}
<section class="hero-gradient py-16 px-4 text-white text-center">
    <div class="max-w-2xl mx-auto">
        <h2 class="text-3xl font-extrabold mb-4">Need a Service or Support Plan?</h2>
        <p class="text-blue-100 mb-8">Speak to our team about the right service package for your needs — individual, family or corporate.</p>
        <a href="{{ url('/contact') }}" class="btn-red">Get in Touch</a>
    </div>
</section>

@endsection
