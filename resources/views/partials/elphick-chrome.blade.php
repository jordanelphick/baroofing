@php
    $position = $position ?? 'top';
    $isTop = $position === 'top';
@endphp

@if ($isTop)
    <div
        id="preview-chrome-top"
        class="ed-chrome-shell ed-chrome-shell--top"
        role="region"
        aria-label="Elphick Digital preview notice"
    >
        <div class="ed-chrome ed-chrome--compact-top">
            <div class="ed-chrome__inner ed-chrome__inner--top-compact">
                @include('partials.elphick-logo', ['class' => 'ed-logo--compact'])
                <p class="ed-chrome__top-copy">
                    <span class="sr-only">Website preview created for </span>
                    <strong class="ed-chrome__top-strong">BA Roofing</strong>
                    <span class="ed-chrome__top-sep" aria-hidden="true">·</span>
                    Complimentary concept by Elphick Digital
                    <span class="ed-chrome__top-sep ed-chrome__top-sep--hide-sm" aria-hidden="true">·</span>
                    <span class="ed-chrome__top-muted ed-chrome__top-muted--hide-sm">Not the live site below</span>
                </p>
                <div class="ed-chrome__actions ed-chrome__actions--compact">
                    <a
                        href="{{ config('site.elphick.consult_url') }}"
                        target="_blank"
                        rel="noopener noreferrer"
                        class="ed-chrome__btn ed-chrome__btn--sm ed-chrome__btn--primary"
                    >
                        Free consult
                    </a>
                    <a
                        href="{{ config('site.elphick.pricing_url') }}"
                        target="_blank"
                        rel="noopener noreferrer"
                        class="ed-chrome__btn ed-chrome__btn--sm"
                    >
                        Pricing
                    </a>
                </div>
            </div>
        </div>

        <div class="preview-site-boundary preview-site-boundary--top preview-site-boundary--compact" aria-hidden="true">
            <span class="preview-site-boundary__label">Preview site below</span>
        </div>
    </div>
@else
    <div
        id="preview-chrome-bottom"
        class="ed-chrome-shell ed-chrome-shell--bottom"
        role="region"
        aria-label="Elphick Digital next steps"
    >
        <div class="preview-site-boundary preview-site-boundary--bottom" aria-hidden="true">
            <span class="preview-site-boundary__label">End of concept website preview</span>
        </div>

        <div class="ed-chrome">
            <div class="ed-chrome__inner ed-chrome__inner--bottom">
                @include('partials.elphick-logo', ['class' => 'ed-logo--center'])
                <p class="ed-chrome__eyebrow ed-chrome__eyebrow--center">What happens next</p>
                <h2 class="ed-chrome__title ed-chrome__title--center">
                    Ready to make this live?
                </h2>
                <p class="ed-chrome__lede ed-chrome__lede--center">
                    This concept website has been created specifically for BA Roofing.
                </p>
                <p class="ed-chrome__lede ed-chrome__lede--center ed-chrome__lede--muted">
                    If you'd like to make this website live, update the content, add online bookings, improve Google visibility, or discuss a completely custom design, I'd be happy to chat.
                </p>
                <div class="ed-chrome__actions ed-chrome__actions--center">
                    <a
                        href="{{ config('site.elphick.consult_url') }}"
                        target="_blank"
                        rel="noopener noreferrer"
                        class="ed-chrome__btn ed-chrome__btn--primary"
                    >
                        Book a Free Consultation
                        <span aria-hidden="true">→</span>
                    </a>
                    <a
                        href="{{ config('site.elphick.pricing_url') }}"
                        target="_blank"
                        rel="noopener noreferrer"
                        class="ed-chrome__btn"
                    >
                        Request Pricing
                    </a>
                </div>
                <p class="ed-chrome__note ed-chrome__note--center">
                    This section is separate from the BA Roofing preview design above.
                </p>
            </div>
        </div>
    </div>
@endif
