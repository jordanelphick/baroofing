<footer class="border-t border-brand-800 bg-black text-brand-300">
    <div class="mx-auto max-w-7xl px-4 py-14 sm:px-6 lg:px-8 lg:py-16">
        <div class="grid gap-10 lg:grid-cols-12 lg:gap-8">
            <div class="lg:col-span-5">
                <a href="/" class="inline-block transition opacity-90 hover:opacity-100">
                    @include('partials.logo', ['class' => 'h-14 w-auto max-w-[14rem] sm:h-16 sm:max-w-[16rem]'])
                </a>
                <p class="type-body-sm mt-5 max-w-sm text-brand-400">
                    Trusted Newcastle roofing with over 15 years of hands-on experience — quality workmanship, clear communication, and roofs built to handle coastal weather.
                </p>
            </div>

            <div class="grid gap-8 sm:grid-cols-2 lg:col-span-7 lg:grid-cols-3">
                <div>
                    <h3 class="type-footer-title text-white">Services</h3>
                    <ul class="type-body-sm mt-4 space-y-2">
                        @foreach (config('site.services') as $service)
                            <li>
                                <a href="#services" class="transition hover:text-white">{{ $service['title'] }}</a>
                            </li>
                        @endforeach
                    </ul>
                </div>

                <div>
                    <h3 class="type-footer-title text-white">Quick Links</h3>
                    <ul class="type-body-sm mt-4 space-y-2">
                        @foreach (config('site.nav') as $item)
                            <li>
                                <a
                                    href="{{ $item['href'] === '/' ? '/' : '#' }}"
                                    @if ($item['href'] !== '/')
                                        data-preview-link
                                    @endif
                                    class="transition hover:text-white"
                                >{{ $item['label'] }}</a>
                            </li>
                        @endforeach
                    </ul>
                </div>

                <div>
                    <h3 class="type-footer-title text-white">Contact</h3>
                    <ul class="type-body-sm mt-4 space-y-3">
                        <li>
                            <a href="tel:{{ preg_replace('/\s+/', '', config('site.phone')) }}" class="type-link font-semibold text-white transition hover:text-brand-200">
                                {{ config('site.phone') }}
                            </a>
                        </li>
                        <li>
                            <a href="mailto:{{ config('site.email') }}" class="transition hover:text-white">
                                {{ config('site.email') }}
                            </a>
                        </li>
                        <li>{{ config('site.location') }}</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="type-caption mt-12 flex flex-col gap-4 border-t border-white/10 pt-8 text-brand-500 sm:flex-row sm:items-center sm:justify-between">
            <p>&copy; {{ date('Y') }} {{ config('site.name') }}. All rights reserved.</p>
            <p>Licensed & insured · Servicing Newcastle, Lake Macquarie & the Hunter</p>
        </div>
    </div>
</footer>
