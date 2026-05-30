@extends('layouts.app')

@section('title', config('site.name') . ' — Newcastle Roofing Specialists')

@section('content')
    {{-- Hero --}}
    <section class="hero relative min-h-[34rem] overflow-hidden bg-black sm:min-h-[38rem] lg:min-h-[44rem]">
        <div class="hero__media" aria-hidden="true">
            <img
                src="{{ asset(config('site.images.hero')) }}"
                alt=""
                class="hero__image"
                loading="eager"
            >
            <div class="hero__fade hero__fade--top"></div>
            <div class="hero__fade hero__fade--left"></div>
            <div class="hero__fade hero__fade--right"></div>
            <div class="hero__fade hero__fade--bottom"></div>
            <div class="hero__fade hero__fade--vignette"></div>
        </div>

        <div class="hero__panel" aria-hidden="true">
            <div class="hero__panel-surface"></div>
        </div>

        <div class="hero__base" aria-hidden="true"></div>

        <div class="hero__content mx-auto max-w-7xl px-4 pb-28 pt-10 sm:px-6 sm:pb-32 sm:pt-14 lg:px-8 lg:pb-36 lg:pt-16">
            <div class="hero__copy max-w-2xl lg:max-w-xl">
                <a href="/" class="mb-8 inline-block sm:mb-10">
                    @include('partials.logo', ['class' => 'h-16 w-auto max-w-[14rem] sm:h-20 sm:max-w-[18rem]'])
                </a>

                <p class="type-eyebrow type-eyebrow--hero">
                    <span class="h-px w-8 bg-white/40" aria-hidden="true"></span>
                    Newcastle · 15+ Years Experience
                </p>
                <h1 class="type-h1 mt-6 text-white">
                    Quality roofing you can rely on
                </h1>
                <p class="type-lead mt-6 max-w-lg text-brand-300">
                    A trusted local roofer delivering metal roofing, re-roofs, repairs, and complete roofline solutions across Newcastle and the Hunter.
                </p>
                <div class="mt-10 flex flex-col gap-3 sm:flex-row sm:items-center sm:gap-4">
                    <a
                        href="#contact"
                        class="type-btn inline-flex items-center justify-center rounded-lg bg-white px-8 py-3.5 text-center text-brand-950 shadow-lg transition hover:bg-brand-100 sm:py-4"
                    >
                        Request a Free Quote
                    </a>
                    <a
                        href="tel:{{ preg_replace('/\s+/', '', config('site.phone')) }}"
                        class="type-btn inline-flex items-center justify-center gap-2 rounded-lg border border-white/20 px-8 py-3.5 text-white transition hover:border-white/40 hover:bg-white/5 sm:py-4"
                    >
                        <svg class="h-5 w-5 shrink-0 text-brand-300" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 0 0 2.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.72 1.072a12.042 12.042 0 0 1-7.21-7.21l1.072-.72c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 0 0-1.091-.852H4.5A2.25 2.25 0 0 0 2.25 6.75Z" />
                        </svg>
                        {{ config('site.phone') }}
                    </a>
                </div>
            </div>

            <dl class="hero__stats mt-14 grid grid-cols-2 gap-6 border-t border-white/10 pt-10 sm:mt-16 sm:grid-cols-4 sm:gap-8 lg:max-w-3xl">
                <div>
                    <dt class="type-stat-value text-white">15+</dt>
                    <dd class="type-stat-label mt-1.5 text-brand-400">Years experience</dd>
                </div>
                <div>
                    <dt class="type-stat-value text-white">100%</dt>
                    <dd class="type-stat-label mt-1.5 text-brand-400">Local & reliable</dd>
                </div>
                <div>
                    <dt class="type-stat-value text-white">5</dt>
                    <dd class="type-stat-label mt-1.5 text-brand-400">Core services</dd>
                </div>
                <div>
                    <dt class="type-stat-value text-white">NSW</dt>
                    <dd class="type-stat-label mt-1.5 text-brand-400">Hunter region</dd>
                </div>
            </dl>
        </div>

        <div class="hero__transition" aria-hidden="true"></div>
    </section>

    {{-- Services --}}
    <section id="services" class="scroll-mt-8 bg-white py-20 sm:py-28">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="max-w-2xl">
                <p class="type-eyebrow text-brand-500">What we do</p>
                <h2 class="type-h2 mt-2 text-brand-950">
                    Complete roofing services
                </h2>
                <p class="type-lead mt-4 text-brand-600">
                    From new metal roofs to storm repairs and roofline upgrades — honest advice, tidy sites, and workmanship that stands up to Newcastle weather.
                </p>
            </div>

            <div class="mt-14 grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
                @foreach (config('site.services') as $service)
                    <article class="group relative flex flex-col border border-brand-200 bg-brand-50 p-8 transition hover:border-brand-950 hover:bg-white hover:shadow-xl">
                        <div class="flex h-12 w-12 items-center justify-center rounded-lg bg-brand-950 text-white transition group-hover:bg-black">
                            @include('partials.icons', ['icon' => $service['icon'], 'class' => 'h-6 w-6'])
                        </div>
                        <h3 class="type-h3 mt-6 text-brand-950">{{ $service['title'] }}</h3>
                        <p class="type-body-sm mt-3 flex-1 text-brand-600">{{ $service['description'] }}</p>
                    </article>
                @endforeach
            </div>
        </div>
    </section>

    {{-- Process --}}
    <section id="process" class="scroll-mt-8 border-y border-brand-200 bg-brand-50 py-20 sm:py-28">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="max-w-2xl">
                <p class="type-eyebrow text-brand-500">How we work</p>
                <h2 class="type-h2 mt-2 text-brand-950">
                    Simple steps from first call to finished roof
                </h2>
                <p class="type-lead mt-4 text-brand-600">
                    No runaround — just a clear process so you know what happens next at every stage.
                </p>
            </div>

            <ol class="mt-14 grid gap-8 sm:grid-cols-2 lg:grid-cols-4 lg:gap-6">
                @foreach (config('site.process') as $step)
                    <li class="relative flex flex-col border border-brand-200 bg-white p-8">
                        <span class="type-eyebrow text-brand-400">{{ $step['step'] }}</span>
                        <h3 class="type-h3 mt-4 text-brand-950">{{ $step['title'] }}</h3>
                        <p class="type-body-sm mt-3 flex-1 text-brand-600">{{ $step['description'] }}</p>
                    </li>
                @endforeach
            </ol>
        </div>
    </section>

    {{-- About --}}
    <section id="about" class="scroll-mt-8 border-b border-brand-200 bg-white py-20 sm:py-28">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="grid items-center gap-12 lg:grid-cols-2 lg:gap-16">
                <div class="relative">
                    <div class="aspect-[4/5] overflow-hidden rounded-lg shadow-2xl ring-1 ring-brand-200 sm:aspect-[5/6]">
                        <img
                            src="{{ asset(config('site.images.about')) }}"
                            alt="BA Roofing project with skylight and roof ventilation"
                            class="h-full w-full object-cover object-center"
                            loading="lazy"
                        >
                    </div>
                    <div class="absolute -bottom-6 -right-4 max-w-[14rem] rounded-lg border border-brand-200 bg-black p-5 shadow-xl sm:-right-8 sm:max-w-xs">
                        @include('partials.logo', ['class' => 'h-10 w-auto max-w-[8rem]'])
                        <p class="type-stat-value mt-3 text-white">15+</p>
                        <p class="type-stat-label mt-1.5 text-brand-400">Years serving Newcastle</p>
                    </div>
                </div>

                <div>
                    <p class="type-eyebrow text-brand-500">About BA Roofing</p>
                    <h2 class="type-h2 mt-2 text-brand-950">
                        Built on experience, not shortcuts
                    </h2>
                    <p class="type-lead mt-6 text-brand-600">
                        BA Roofing is a reliable Newcastle based roofer with over 15 years experience. We take pride in doing the job properly — clear quotes, quality materials, and roofs finished with care.
                    </p>
                    <p class="type-body mt-4 text-brand-600">
                        Whether you need a full re-roof, metal sheeting, or a straightforward repair after heavy weather, you get straight talk, a tidy work site, and results that last.
                    </p>

                    <ul class="mt-8 space-y-4">
                        @foreach ([
                            'Licensed, insured & safety-focused on every job',
                            'Metal roofing specialists with full re-roof capability',
                            'Repairs, maintenance, guttering & roof ventilation',
                            'Servicing Newcastle, Lake Macquarie & the Hunter',
                        ] as $point)
                            <li class="type-body flex gap-3 text-brand-700">
                                <svg class="mt-0.5 h-5 w-5 shrink-0 text-brand-950" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                                </svg>
                                <span>{{ $point }}</span>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </section>

    {{-- Projects --}}
    <section id="projects" class="scroll-mt-8 bg-black py-20 text-white sm:py-28">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col gap-6 sm:flex-row sm:items-end sm:justify-between">
                <div class="max-w-2xl">
                    <p class="type-eyebrow text-brand-400">Recent work</p>
                    <h2 class="type-h2 mt-2 text-white">
                        Projects across the Hunter
                    </h2>
                    <p class="type-lead mt-4 text-brand-400">
                        A snapshot of the quality and variety of roofing work we deliver for local homes and businesses.
                    </p>
                </div>
                <a href="#contact" class="type-link inline-flex shrink-0 items-center gap-2 text-white transition hover:text-brand-300">
                    Discuss your project
                    <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" />
                    </svg>
                </a>
            </div>

            <div class="mt-12 grid gap-4 sm:grid-cols-2">
                @foreach (config('site.projects') as $project)
                    <article class="group relative overflow-hidden rounded-lg ring-1 ring-white/10">
                        <div class="aspect-[4/3] overflow-hidden">
                            <img
                                src="{{ asset($project['image']) }}"
                                alt="{{ $project['title'] }} — {{ $project['location'] }}"
                                class="h-full w-full object-cover object-center transition duration-500 group-hover:scale-105"
                                loading="lazy"
                            >
                        </div>
                        <div class="absolute inset-0 bg-gradient-to-t from-black via-black/40 to-transparent"></div>
                        <div class="absolute bottom-0 p-6">
                            <p class="type-project-location text-brand-300">{{ $project['location'] }}</p>
                            <h3 class="type-h3 mt-1.5 text-white">{{ $project['title'] }}</h3>
                        </div>
                    </article>
                @endforeach
            </div>
        </div>
    </section>

    {{-- Why choose us --}}
    <section id="why-us" class="scroll-mt-8 bg-white py-20 sm:py-28">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="rounded-lg bg-black px-6 py-14 text-center ring-1 ring-brand-800 sm:px-12 sm:py-16 lg:px-16">
                <div class="mx-auto mb-8 flex justify-center">
                    @include('partials.logo', ['class' => 'h-12 w-auto max-w-[10rem]'])
                </div>
                <h2 class="type-h2 text-white">
                    Why homeowners choose BA Roofing
                </h2>
                <p class="type-lead mx-auto mt-4 max-w-2xl text-brand-400">
                    Straightforward service from quote to completion — no surprises, no cutting corners.
                </p>
                <div class="mt-12 grid gap-6 sm:grid-cols-3 sm:gap-8">
                    @foreach ([
                        ['title' => 'Clear communication', 'text' => 'You know what\'s happening at every stage — timelines, scope, and costs explained upfront.'],
                        ['title' => 'Quality materials', 'text' => 'Trusted metal roofing products and components suited to coastal NSW conditions.'],
                        ['title' => 'Neat & respectful', 'text' => 'We protect your property, keep sites tidy, and leave your place looking better than we found it.'],
                    ] as $benefit)
                        <div class="rounded-lg border border-white/10 bg-white/5 p-6 text-left">
                            <h3 class="type-h3 text-white">{{ $benefit['title'] }}</h3>
                            <p class="type-body-sm mt-2 text-brand-400">{{ $benefit['text'] }}</p>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    {{-- Testimonials --}}
    <section id="reviews" class="scroll-mt-8 border-y border-brand-200 bg-brand-50 py-20 sm:py-28">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="max-w-2xl">
                <p class="type-eyebrow text-brand-500">Customer feedback</p>
                <h2 class="type-h2 mt-2 text-brand-950">
                    Trusted by local homeowners
                </h2>
                <p class="type-lead mt-4 text-brand-600">
                    Real jobs across Newcastle and the Hunter — quality work and communication you can count on.
                </p>
            </div>

            <div class="mt-14 grid gap-6 lg:grid-cols-3">
                @foreach (config('site.testimonials') as $testimonial)
                    <blockquote class="flex flex-col border border-brand-200 bg-white p-8">
                        <svg class="h-8 w-8 text-brand-300" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path d="M4.583 17.321C3.553 16.227 3 15 3 13.011c0-3.5 2.457-6.637 6.03-8.45l1.344 1.913c-3.304 1.764-4.61 4.455-4.861 6.86 1.293-.317 2.66-.13 3.741.57 1.154.747 1.86 2.015 1.86 3.383 0 2.233-1.816 4.037-4.057 4.037-2.281 0-4.136-1.848-4.136-4.124 0-.47.067-.926.194-1.354H4.583zm12.834 0c-1.03-1.094-1.583-2.321-1.583-4.31 0-3.5 2.457-6.637 6.03-8.45l1.344 1.913c-3.304 1.764-4.61 4.455-4.861 6.86 1.293-.317 2.66-.13 3.741.57 1.154.747 1.86 2.015 1.86 3.383 0 2.233-1.816 4.037-4.057 4.037-2.281 0-4.136-1.848-4.136-4.124 0-.47.067-.926.194-1.354h-2.194z"/>
                        </svg>
                        <p class="type-body mt-5 flex-1 text-brand-700">&ldquo;{{ $testimonial['quote'] }}&rdquo;</p>
                        <footer class="mt-6 border-t border-brand-100 pt-6">
                            <cite class="type-label not-italic text-brand-950">{{ $testimonial['name'] }}</cite>
                            <p class="type-caption mt-1 text-brand-500">{{ $testimonial['location'] }} · {{ $testimonial['service'] }}</p>
                        </footer>
                    </blockquote>
                @endforeach
            </div>
        </div>
    </section>

    {{-- Service areas --}}
    <section id="areas" class="scroll-mt-8 bg-white py-20 sm:py-28">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="grid gap-12 lg:grid-cols-2 lg:items-start lg:gap-16">
                <div>
                    <p class="type-eyebrow text-brand-500">Where we work</p>
                    <h2 class="type-h2 mt-2 text-brand-950">
                        Servicing Newcastle & the Hunter
                    </h2>
                    <p class="type-lead mt-4 text-brand-600">
                        Local knowledge matters for coastal weather, wind exposure, and council requirements — we work across the regions below and nearby suburbs.
                    </p>
                    <a
                        href="#contact"
                        class="type-btn mt-8 inline-flex items-center justify-center rounded-lg bg-brand-950 px-6 py-3.5 text-white transition hover:bg-black"
                    >
                        Check availability for your suburb
                    </a>
                </div>

                <div class="space-y-8">
                    @foreach (config('site.service_areas') as $area)
                        <div>
                            <h3 class="type-h3 text-brand-950">{{ $area['region'] }}</h3>
                            <ul class="mt-4 flex flex-wrap gap-2">
                                @foreach ($area['suburbs'] as $suburb)
                                    <li>
                                        <span class="type-body-sm inline-block rounded-full border border-brand-200 bg-brand-50 px-3 py-1.5 text-brand-700">{{ $suburb }}</span>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    {{-- FAQ --}}
    <section id="faq" class="scroll-mt-8 border-t border-brand-200 bg-brand-50 py-20 sm:py-28">
        <div class="mx-auto max-w-3xl px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <p class="type-eyebrow text-brand-500">Common questions</p>
                <h2 class="type-h2 mt-2 text-brand-950">
                    Roofing FAQs
                </h2>
                <p class="type-lead mt-4 text-brand-600">
                    Quick answers — if yours is not listed, get in touch and we will help.
                </p>
            </div>

            <div class="mt-12 space-y-3">
                @foreach (config('site.faqs') as $faq)
                    <details class="group rounded-lg border border-brand-200 bg-white">
                        <summary class="type-label flex cursor-pointer list-none items-center justify-between gap-4 px-6 py-5 text-brand-950 [&::-webkit-details-marker]:hidden">
                            {{ $faq['question'] }}
                            <svg class="h-5 w-5 shrink-0 text-brand-500 transition group-open:rotate-180" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5" />
                            </svg>
                        </summary>
                        <div class="type-body-sm border-t border-brand-100 px-6 pb-5 pt-4 text-brand-600">
                            {{ $faq['answer'] }}
                        </div>
                    </details>
                @endforeach
            </div>
        </div>
    </section>

    {{-- CTA --}}
    <section class="bg-black py-16 sm:py-20" aria-label="Call to action">
        <div class="mx-auto max-w-7xl px-4 text-center sm:px-6 lg:px-8">
            @include('partials.logo', ['class' => 'mx-auto h-11 w-auto max-w-[10rem]'])
            <h2 class="type-h2 mt-8 text-white">
                Ready for a free roofing quote?
            </h2>
            <p class="type-lead mx-auto mt-4 max-w-xl text-brand-400">
                Speak with a local roofer today — repairs, re-roofs, and full roofline solutions across Newcastle and the Hunter.
            </p>
            <div class="mt-10 flex flex-col items-center justify-center gap-4 sm:flex-row">
                <a
                    href="#contact"
                    class="type-btn inline-flex w-full items-center justify-center rounded-lg bg-white px-8 py-3.5 text-brand-950 transition hover:bg-brand-100 sm:w-auto"
                >
                    Request a Free Quote
                </a>
                <a
                    href="tel:{{ preg_replace('/\s+/', '', config('site.phone')) }}"
                    class="type-btn inline-flex w-full items-center justify-center gap-2 rounded-lg border border-white/20 px-8 py-3.5 text-white transition hover:border-white/40 hover:bg-white/5 sm:w-auto"
                >
                    <svg class="h-5 w-5 shrink-0 text-brand-300" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 0 0 2.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.72 1.072a12.042 12.042 0 0 1-7.21-7.21l1.072-.72c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 0 0-1.091-.852H4.5A2.25 2.25 0 0 0 2.25 6.75Z" />
                    </svg>
                    {{ config('site.phone') }}
                </a>
            </div>
        </div>
    </section>

    {{-- Contact --}}
    <section id="contact" class="scroll-mt-8 border-t border-brand-200 bg-brand-50 py-20 sm:py-28">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="grid gap-12 lg:grid-cols-2 lg:gap-16">
                <div>
                    <p class="type-eyebrow text-brand-500">Get in touch</p>
                    <h2 class="type-h2 mt-2 text-brand-950">
                        Request your free quote
                    </h2>
                    <p class="type-lead mt-4 text-brand-600">
                        Tell us about your roof — repairs, re-roof, or a new installation. We'll get back to you promptly with honest advice and a clear next step.
                    </p>

                    <dl class="mt-10 space-y-6">
                        <div class="flex gap-4">
                            <div class="flex h-12 w-12 shrink-0 items-center justify-center rounded-lg bg-brand-950 text-white">
                                <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 0 0 2.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.72 1.072a12.042 12.042 0 0 1-7.21-7.21l1.072-.72c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 0 0-1.091-.852H4.5A2.25 2.25 0 0 0 2.25 6.75Z" />
                                </svg>
                            </div>
                            <div>
                                <dt class="type-label text-brand-950">Phone</dt>
                                <dd class="mt-1">
                                    <a href="tel:{{ preg_replace('/\s+/', '', config('site.phone')) }}" class="type-lead font-semibold text-brand-700 hover:text-brand-950">
                                        {{ config('site.phone') }}
                                    </a>
                                </dd>
                            </div>
                        </div>
                        <div class="flex gap-4">
                            <div class="flex h-12 w-12 shrink-0 items-center justify-center rounded-lg bg-brand-950 text-white">
                                <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 0 1-2.25 2.25h-7.5a2.25 2.25 0 0 1-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25m19.5 0v.243a2.25 2.25 0 0 1-1.07 1.916l-7.5 4.615a2.25 2.25 0 0 1-2.36 0L3.32 8.91a2.25 2.25 0 0 1-1.07-1.916V6.75" />
                                </svg>
                            </div>
                            <div>
                                <dt class="type-label text-brand-950">Email</dt>
                                <dd class="mt-1">
                                    <a href="mailto:{{ config('site.email') }}" class="type-lead font-semibold text-brand-700 hover:text-brand-950">
                                        {{ config('site.email') }}
                                    </a>
                                </dd>
                            </div>
                        </div>
                        <div class="flex gap-4">
                            <div class="flex h-12 w-12 shrink-0 items-center justify-center rounded-lg bg-brand-950 text-white">
                                <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1 1 15 0Z" />
                                </svg>
                            </div>
                            <div>
                                <dt class="type-label text-brand-950">Service area</dt>
                                <dd class="type-body mt-1 text-brand-600">{{ config('site.location') }} & surrounding suburbs</dd>
                            </div>
                        </div>
                    </dl>
                </div>

                <form class="rounded-lg border border-brand-200 bg-white p-8 shadow-sm" action="#" method="post">
                    @csrf
                    <div class="grid gap-5 sm:grid-cols-2">
                        <div class="sm:col-span-1">
                            <label for="name" class="type-label block text-brand-950">Name</label>
                            <input type="text" id="name" name="name" required class="type-input mt-2 w-full rounded-lg border border-brand-200 px-4 py-3 text-brand-900 outline-none transition focus:border-brand-950 focus:ring-2 focus:ring-brand-200" placeholder="Your name">
                        </div>
                        <div class="sm:col-span-1">
                            <label for="phone" class="type-label block text-brand-950">Phone</label>
                            <input type="tel" id="phone" name="phone" required class="type-input mt-2 w-full rounded-lg border border-brand-200 px-4 py-3 text-brand-900 outline-none transition focus:border-brand-950 focus:ring-2 focus:ring-brand-200" placeholder="04XX XXX XXX">
                        </div>
                        <div class="sm:col-span-2">
                            <label for="email" class="type-label block text-brand-950">Email</label>
                            <input type="email" id="email" name="email" class="type-input mt-2 w-full rounded-lg border border-brand-200 px-4 py-3 text-brand-900 outline-none transition focus:border-brand-950 focus:ring-2 focus:ring-brand-200" placeholder="you@email.com">
                        </div>
                        <div class="sm:col-span-2">
                            <label for="service" class="type-label block text-brand-950">Service required</label>
                            <select id="service" name="service" class="type-input mt-2 w-full rounded-lg border border-brand-200 px-4 py-3 text-brand-900 outline-none transition focus:border-brand-950 focus:ring-2 focus:ring-brand-200">
                                <option value="">Select a service</option>
                                @foreach (config('site.services') as $service)
                                    <option value="{{ $service['title'] }}">{{ $service['title'] }}</option>
                                @endforeach
                                <option value="Other">Other / Not sure</option>
                            </select>
                        </div>
                        <div class="sm:col-span-2">
                            <label for="message" class="type-label block text-brand-950">Message</label>
                            <textarea id="message" name="message" rows="4" class="type-input mt-2 w-full resize-y rounded-lg border border-brand-200 px-4 py-3 text-brand-900 outline-none transition focus:border-brand-950 focus:ring-2 focus:ring-brand-200" placeholder="Tell us about your roof..."></textarea>
                        </div>
                    </div>
                    <button type="submit" class="type-btn mt-6 w-full rounded-lg bg-brand-950 px-6 py-4 text-white transition hover:bg-black sm:w-auto sm:px-10">
                        Send enquiry
                    </button>
                    <p class="type-caption mt-4 text-brand-500">Preview only — form submission is not connected on this concept site.</p>
                </form>
            </div>
        </div>
    </section>
@endsection
