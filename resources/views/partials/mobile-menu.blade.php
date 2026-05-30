<div
    id="mobile-menu"
    class="pointer-events-none invisible fixed inset-x-0 bottom-0 top-[var(--preview-chrome-height,6.75rem)] z-[45] opacity-0 transition-opacity duration-300 lg:hidden"
    aria-hidden="true"
>
    <div class="absolute inset-0 bg-black/70 backdrop-blur-sm" aria-hidden="true"></div>

    <div class="absolute inset-0 flex flex-col bg-black text-white">
        <div class="flex h-16 items-center justify-between border-b border-white/10 px-4 sm:h-[4.75rem] sm:px-6">
            <a href="/" class="shrink-0" data-menu-link>
                @include('partials.logo', ['class' => 'h-9 w-auto max-w-[9.5rem]'])
            </a>
            <button
                id="menu-close"
                type="button"
                class="inline-flex h-11 w-11 items-center justify-center rounded-lg border border-white/15 text-white transition hover:bg-white/10"
                aria-label="Close menu"
            >
                <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                </svg>
            </button>
        </div>

        <nav class="flex flex-1 flex-col justify-center px-6 py-8" aria-label="Mobile navigation">
            <ul class="space-y-2">
                @foreach (config('site.nav') as $index => $item)
                    <li>
                        <a
                            href="{{ $item['href'] === '/' ? '/' : '#' }}"
                            @if ($item['href'] === '/')
                                data-menu-link
                            @else
                                data-preview-link
                            @endif
                            class="type-nav-mobile block py-3 text-white/90 transition hover:text-brand-200"
                            style="transition-delay: {{ $index * 40 }}ms"
                        >
                            {{ $item['label'] }}
                        </a>
                    </li>
                @endforeach
            </ul>
        </nav>

        <div class="space-y-4 border-t border-white/10 px-6 py-8">
            <a
                href="tel:{{ preg_replace('/\s+/', '', config('site.phone')) }}"
                data-menu-link
                class="type-lead block font-semibold text-brand-200"
            >
                {{ config('site.phone') }}
            </a>
            <a
                href="#contact"
                data-menu-link
                class="type-btn flex w-full items-center justify-center rounded-xl bg-white px-6 py-4 text-center text-brand-950 transition hover:bg-brand-100"
            >
                Get a Free Quote
            </a>
        </div>
    </div>
</div>
