<header
    id="site-header"
    class="site-header relative z-10 border-b border-white/10 bg-black text-white"
>
    <div class="mx-auto flex h-[4.5rem] max-w-7xl items-center justify-between gap-4 px-4 sm:h-20 sm:px-6 lg:px-8">
        <a href="/" class="shrink-0 transition opacity-90 hover:opacity-100">
            @include('partials.logo', ['class' => 'h-11 w-auto max-w-[11rem] sm:h-12 sm:max-w-[13rem] lg:h-14 lg:max-w-[15rem]'])
        </a>

        <nav class="hidden items-center gap-1 lg:flex" aria-label="Main navigation">
            @foreach (config('site.nav') as $item)
                <a
                    href="{{ $item['href'] === '/' ? '/' : '#' }}"
                    @if ($item['href'] !== '/')
                        data-preview-link
                    @endif
                    class="type-nav rounded-lg px-3 py-2 text-brand-300 transition hover:bg-white/10 hover:text-white"
                >
                    {{ $item['label'] }}
                </a>
            @endforeach
        </nav>

        <div class="hidden items-center gap-3 lg:flex">
            <a href="tel:{{ preg_replace('/\s+/', '', config('site.phone')) }}" class="type-nav font-semibold text-brand-200 transition hover:text-white">
                {{ config('site.phone') }}
            </a>
            <a
                href="#contact"
                class="type-btn inline-flex items-center justify-center rounded-lg bg-white px-5 py-2.5 text-brand-950 shadow-sm transition hover:bg-brand-100"
            >
                Get a Quote
            </a>
        </div>

        <button
            id="menu-toggle"
            type="button"
            class="inline-flex h-11 w-11 items-center justify-center rounded-lg border border-white/15 bg-white/5 text-white transition hover:border-white/30 hover:bg-white/10 lg:hidden"
            aria-expanded="false"
            aria-controls="mobile-menu"
            aria-label="Open menu"
        >
            <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
            </svg>
        </button>
    </div>
</header>
