@extends('layouts.app')
@section('title', 'Contact Us – Maxi Medical Zimbabwe')
@section('content')

{{-- HERO --}}
<section style="position:relative;padding:10rem 1rem 5rem;overflow:hidden;">
    <div style="position:absolute;inset:0;z-index:0;">
        <img src="/images/image2.jpg" alt="Contact Us" style="width:100%;height:100%;object-fit:cover;object-position:center;">
        <div style="position:absolute;inset:0;background:linear-gradient(100deg,rgba(10,36,71,.88) 0%,rgba(10,36,71,.72) 50%,rgba(10,36,71,.55) 100%);"></div>
    </div>
    <div class="max-w-7xl mx-auto text-center" style="position:relative;z-index:1;">
        <span style="display:inline-block;background:#e63946;color:#fff;font-size:.72rem;font-weight:700;padding:.35rem 1rem;border-radius:9999px;letter-spacing:.12em;text-transform:uppercase;margin-bottom:1.1rem;">Contact Us</span>
        <h1 style="font-family:'DM Serif Display',serif;font-size:clamp(2.2rem,5vw,3.2rem);font-weight:400;color:#fff;line-height:1.15;margin-bottom:1.1rem;">Get in Touch</h1>
        <p style="color:rgba(255,255,255,.8);font-size:1.05rem;max-width:38rem;margin:0 auto;line-height:1.8;">
            Whether you need a product quote, want to sign up for a medical plan, or have an enquiry — our team is ready to help.
        </p>
    </div>
</section>

{{-- CONTACT GRID --}}
<section class="py-20 px-4 bg-white">
    <div class="max-w-7xl mx-auto grid md:grid-cols-2 gap-14">

        {{-- FORM --}}
        <div>
            <h2 class="section-title mb-2">Send a Message</h2>
            <p class="section-sub mb-8">We'll respond within 1 business day.</p>
            <form method="POST" action="#" class="space-y-5">
                @csrf
                <div class="grid sm:grid-cols-2 gap-5">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">First Name</label>
                        <input type="text" name="first_name" placeholder="John"
                               class="w-full rounded-xl border border-gray-200 px-4 py-3 text-sm focus:outline-none focus:ring-2 focus:ring-blue-500">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Last Name</label>
                        <input type="text" name="last_name" placeholder="Doe"
                               class="w-full rounded-xl border border-gray-200 px-4 py-3 text-sm focus:outline-none focus:ring-2 focus:ring-blue-500">
                    </div>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Email Address</label>
                    <input type="email" name="email" placeholder="john@example.com"
                           class="w-full rounded-xl border border-gray-200 px-4 py-3 text-sm focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Phone Number</label>
                    <input type="tel" name="phone" placeholder="+263 77 xxx xxxx"
                           class="w-full rounded-xl border border-gray-200 px-4 py-3 text-sm focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Subject</label>
                    <select name="subject" class="w-full rounded-xl border border-gray-200 px-4 py-3 text-sm focus:outline-none focus:ring-2 focus:ring-blue-500 bg-white">
                        <option value="">Select a subject</option>
                        <option>Product Enquiry</option>
                        <option>Request a Quote</option>
                        <option>Medical Plan Enquiry</option>
                        <option>Emergency Support</option>
                        <option>General Enquiry</option>
                    </select>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Message</label>
                    <textarea name="message" rows="5" placeholder="Tell us how we can help…"
                              class="w-full rounded-xl border border-gray-200 px-4 py-3 text-sm focus:outline-none focus:ring-2 focus:ring-blue-500 resize-none"></textarea>
                </div>
                <button type="submit" class="btn-primary w-full text-center" style="display:flex;align-items:center;justify-content:center;gap:.5rem;">
                    Send Message
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" style="width:1rem;height:1rem;"><path stroke-linecap="round" stroke-linejoin="round" d="M6 12 3.269 3.125A59.769 59.769 0 0 1 21.485 12 59.768 59.768 0 0 1 3.27 20.875L5.999 12zm0 0h7.5"/></svg>
                </button>
            </form>
        </div>

        {{-- INFO --}}
        <div class="space-y-8">
            <div>
                <h2 class="section-title mb-2">Contact Information</h2>
                <p class="section-sub">Visit us, call us or send an email — we are always available.</p>
            </div>

            {{-- Cards --}}
            <div class="flex gap-5 items-start bg-gray-50 rounded-2xl p-6 border border-gray-100">
                <div class="w-12 h-12 flex-shrink-0 rounded-xl bg-blue-100 flex items-center justify-center" style="color:#1a5faa;">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" style="width:1.4rem;height:1.4rem;"><path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/><path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1 1 15 0z"/></svg>
                </div>
                <div>
                    <h4 class="font-bold text-blue-900 mb-1">Our Office</h4>
                    <p class="text-gray-600 text-sm leading-relaxed">15th Floor, Cabs Centre,<br>Jason Moyo &amp; Second Street,<br>Harare, Zimbabwe</p>
                </div>
            </div>
            <div class="flex gap-5 items-start bg-gray-50 rounded-2xl p-6 border border-gray-100">
                <div class="w-12 h-12 flex-shrink-0 rounded-xl bg-green-100 flex items-center justify-center" style="color:#16a34a;">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" style="width:1.4rem;height:1.4rem;"><path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 0 0 2.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 0 1-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 0 0-1.091-.852H4.5A2.25 2.25 0 0 0 2.25 4.5v2.25z"/></svg>
                </div>
                <div>
                    <h4 class="font-bold text-blue-900 mb-1">Phone</h4>
                    <p class="text-gray-600 text-sm leading-relaxed">
                        <a href="tel:0861194637" class="text-blue-700 hover:underline font-semibold">086 119 4637</a> — 24hr Assistance<br>
                        Durban: <a href="tel:0312620552" class="text-blue-700 hover:underline">031 262 0552</a><br>
                        Pretoria: <a href="tel:0128036533" class="text-blue-700 hover:underline">012 803 6533</a>
                    </p>
                </div>
            </div>
            <div class="flex gap-5 items-start bg-gray-50 rounded-2xl p-6 border border-gray-100">
                <div class="w-12 h-12 flex-shrink-0 rounded-xl bg-purple-100 flex items-center justify-center" style="color:#7c3aed;">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" style="width:1.4rem;height:1.4rem;"><path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 0 1-2.25 2.25h-15a2.25 2.25 0 0 1-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25m19.5 0v.243a2.25 2.25 0 0 1-1.07 1.916l-7.5 4.615a2.25 2.25 0 0 1-2.36 0L3.32 8.91a2.25 2.25 0 0 1-1.07-1.916V6.75"/></svg>
                </div>
                <div>
                    <h4 class="font-bold text-blue-900 mb-1">Email</h4>
                    <p class="text-gray-600 text-sm leading-relaxed"><a href="mailto:info@maxisa.com" class="text-blue-700 hover:underline">info@maxisa.com</a></p>
                </div>
            </div>
            <div class="flex gap-5 items-start bg-gray-50 rounded-2xl p-6 border border-gray-100">
                <div class="w-12 h-12 flex-shrink-0 rounded-xl bg-amber-100 flex items-center justify-center" style="color:#b45309;">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" style="width:1.4rem;height:1.4rem;"><path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0z"/></svg>
                </div>
                <div>
                    <h4 class="font-bold text-blue-900 mb-1">Business Hours</h4>
                    <p class="text-gray-600 text-sm leading-relaxed">Monday – Friday: 8:00 AM – 5:00 PM<br>Saturday: 8:00 AM – 1:00 PM<br><span class="text-red-600 font-semibold">Emergency line: 24/7</span></p>
                </div>
            </div>

            {{-- Emergency Banner --}}
            <div class="rounded-2xl p-7 bg-red-600 text-white text-center">
                <div class="w-14 h-14 rounded-full bg-white bg-opacity-20 flex items-center justify-center mx-auto mb-4" style="color:#fff;">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" style="width:1.75rem;height:1.75rem;"><path stroke-linecap="round" stroke-linejoin="round" d="M14.857 17.082a23.848 23.848 0 0 0 5.454-1.31A8.967 8.967 0 0 1 18 9.75V9A6 6 0 0 0 6 9v.75a8.967 8.967 0 0 1-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 0 1-5.714 0m5.714 0a3 3 0 1 1-5.714 0M3.124 7.5A8.969 8.969 0 0 1 5.292 3m13.416 0a8.969 8.969 0 0 1 2.168 4.5"/></svg>
                </div>
                <h4 class="font-extrabold text-xl mb-1">Medical Emergency?</h4>
                <p class="text-red-100 text-sm mb-4">Call our 24/7 assistance line immediately.</p>
                <a href="tel:0861194637" class="inline-block bg-white text-red-600 font-bold px-6 py-3 rounded-full text-sm hover:bg-red-50 transition">
                    086 119 4637
                </a>
            </div>
        </div>

    </div>
</section>

{{-- MAP PLACEHOLDER --}}
<section class="bg-blue-50 py-12 px-4">
    <div class="max-w-7xl mx-auto">
        <div class="rounded-2xl overflow-hidden border border-gray-200 shadow-sm" style="height:350px;background:#dbeafe;display:flex;align-items:center;justify-content:center;">
            <div class="text-center text-blue-400">
                    <div class="w-16 h-16 rounded-full bg-blue-200 flex items-center justify-center mx-auto mb-3" style="color:#1a5faa;">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" style="width:2rem;height:2rem;"><path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/><path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1 1 15 0z"/></svg>
                    </div>
                <p class="font-semibold text-blue-600">15th Floor, Cabs Centre, Jason Moyo &amp; Second Street, Harare</p>
                <p class="text-sm text-blue-400 mt-1">Embed your Google Maps iframe here</p>
            </div>
        </div>
    </div>
</section>

@endsection
