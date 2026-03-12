{{-- ======================================================
     CORPORATE FOOTER  –  Enterprise / ProHealth style
====================================================== --}}
<footer style="background:#0a2447;color:#fff;margin-top:0;">

    {{-- Main footer grid --}}
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8" style="padding-top:4rem;padding-bottom:3rem;">
        <div class="grid gap-12" style="grid-template-columns:repeat(auto-fit,minmax(180px,1fr));">

            {{-- Brand column --}}
            <div style="grid-column:span 1;">
                {{-- Logo --}}
                <div class="mb-5" style="line-height:0;">
                    <img src="/images/logo-svg.svg" alt="Maxi Medical Zimbabwe" style="height:114px;width:auto;">
                    <span style="display:block;font-size:.7rem;color:#93b4d4;font-weight:500;margin-top:.4rem;letter-spacing:.06em;text-transform:uppercase;">Zimbabwe</span>
                </div>
                <p style="font-size:.875rem;color:#93b4d4;line-height:1.75;margin-bottom:1.25rem;">
                    Trusted supplier of medical equipment, accessories, medicines and
                    emergency healthcare support solutions in Zimbabwe.
                </p>
                {{-- Social icons --}}
                <div class="flex gap-3">
                    @foreach([
                        ['f','#','Facebook'],
                        ['in','#','LinkedIn'],
                        ['tw','#','Twitter'],
                    ] as $s)
                    <a href="{{ $s[1] }}" title="{{ $s[2] }}"
                       style="width:2.1rem;height:2.1rem;border-radius:50%;border:1px solid rgba(255,255,255,.2);display:flex;align-items:center;justify-content:center;font-size:.7rem;font-weight:700;color:#93b4d4;transition:all .2s;"
                       onmouseover="this.style.background='#1a5faa';this.style.color='#fff';"
                       onmouseout="this.style.background='';this.style.color='#93b4d4';">{{ $s[0] }}</a>
                    @endforeach
                </div>
            </div>

            {{-- Quick Links --}}
            <div>
                <h4 style="font-size:.78rem;font-weight:700;letter-spacing:.1em;text-transform:uppercase;color:#5b9bd5;margin-bottom:1.1rem;">Quick Links</h4>
                <ul style="list-style:none;padding:0;margin:0;space-y:.6rem;">
                    @foreach([
                        ['/','Home'],
                        ['/about','About Us'],
                        ['/products','Products'],
                        ['/services','Services'],
                        ['/plans','Medical Plans'],
                        ['/contact','Contact'],
                    ] as $l)
                    <li style="margin-bottom:.55rem;">
                        <a href="{{ url($l[0]) }}"
                           style="font-size:.875rem;color:#93b4d4;text-decoration:none;display:flex;align-items:center;gap:.45rem;transition:color .15s;"
                           onmouseover="this.style.color='#fff';"
                           onmouseout="this.style.color='#93b4d4';">
                            <span style="width:5px;height:5px;border-radius:50%;background:#1a5faa;flex-shrink:0;"></span>
                            {{ $l[1] }}
                        </a>
                    </li>
                    @endforeach
                </ul>
            </div>

            {{-- Products & Services --}}
            <div>
                <h4 style="font-size:.78rem;font-weight:700;letter-spacing:.1em;text-transform:uppercase;color:#5b9bd5;margin-bottom:1.1rem;">Our Focus</h4>
                <ul style="list-style:none;padding:0;margin:0;">
                    @foreach([
                        'Hospital Equipment',
                        'Diagnostic Tools',
                        'Physio & Rehab Gadgets',
                        'Medical Accessories',
                        'Medicines',
                        'Emergency Support',
                        'Medical Assist Plans',
                    ] as $item)
                    <li style="margin-bottom:.55rem;font-size:.875rem;color:#93b4d4;display:flex;align-items:center;gap:.45rem;">
                        <span style="width:5px;height:5px;border-radius:50%;background:#1a5faa;flex-shrink:0;"></span>
                        {{ $item }}
                    </li>
                    @endforeach
                </ul>
            </div>

            {{-- Contact --}}
            <div>
                <h4 style="font-size:.78rem;font-weight:700;letter-spacing:.1em;text-transform:uppercase;color:#5b9bd5;margin-bottom:1.1rem;">Contact Us</h4>
                <div style="space-y:1rem;">
                    @foreach([
                        ['M','0 0 20 20','M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z','15th Floor, Cabs Centre,<br>Jason Moyo &amp; Second Street,<br>Harare, Zimbabwe'],
                        ['P','0 0 20 20','M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z','086 119 4637 (24hr) | 031 262 0552'],
                        ['E','0 0 20 20','M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884zM18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z','info@maxisa.com'],
                    ] as $c)
                    <div class="flex gap-3 items-start" style="margin-bottom:1rem;">
                        <div style="width:2rem;height:2rem;border-radius:.4rem;background:rgba(26,95,170,.35);display:flex;align-items:center;justify-content:center;flex-shrink:0;margin-top:.1rem;">
                            <svg fill="currentColor" viewBox="{{ $c[1] }}" style="width:.95rem;height:.95rem;color:#5b9bd5;">
                                <path d="{{ $c[2] }}"/>
                            </svg>
                        </div>
                        <p style="font-size:.855rem;color:#93b4d4;line-height:1.65;">{!! $c[3] !!}</p>
                    </div>
                    @endforeach
                    {{-- Emergency badge --}}
                    <div style="margin-top:1rem;background:#e63946;border-radius:.55rem;padding:.7rem 1rem;display:flex;align-items:center;gap:.6rem;">
                        <svg fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" style="width:1.1rem;height:1.1rem;flex-shrink:0;color:#fff;"><path d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" stroke-linecap="round" stroke-linejoin="round"/></svg>
                        <div>
                            <p style="font-size:.72rem;font-weight:700;color:#fff;letter-spacing:.05em;">EMERGENCY LINE</p>
                            <p style="font-size:.82rem;color:rgba(255,255,255,.85);">Available 24 / 7</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Bottom bar --}}
    <div style="border-top:1px solid rgba(255,255,255,.09);">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8" style="padding-top:1.1rem;padding-bottom:1.1rem;display:flex;flex-wrap:wrap;justify-content:space-between;align-items:center;gap:.75rem;">
            <p style="font-size:.8rem;color:#5b79a0;">&copy; {{ date('Y') }} Maxi Medical Zimbabwe. All rights reserved.</p>
            <div class="flex gap-5">
                @foreach(['Privacy Policy','Terms of Service','Sitemap'] as $lnk)
                <a href="#" style="font-size:.8rem;color:#5b79a0;text-decoration:none;"
                   onmouseover="this.style.color='#93b4d4';"
                   onmouseout="this.style.color='#5b79a0';">{{ $lnk }}</a>
                @endforeach
            </div>
        </div>
    </div>
</footer>
