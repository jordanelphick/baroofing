<div
    id="preview-modal"
    class="pointer-events-none invisible fixed inset-0 z-[80] flex items-center justify-center p-4 opacity-0 transition-opacity duration-300"
    role="dialog"
    aria-modal="true"
    aria-labelledby="preview-modal-title"
    aria-hidden="true"
>
    <div
        id="preview-modal-backdrop"
        class="absolute inset-0 bg-black/80 backdrop-blur-sm"
        aria-hidden="true"
    ></div>

    <div class="relative w-full max-w-md rounded-lg border border-brand-200 bg-white p-8 shadow-2xl">
        <button
            id="preview-modal-close"
            type="button"
            class="absolute right-4 top-4 inline-flex h-10 w-10 items-center justify-center rounded-lg text-brand-400 transition hover:bg-brand-100 hover:text-brand-950"
            aria-label="Close"
        >
            <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
            </svg>
        </button>

        <div class="mb-6">
            @include('partials.logo', ['class' => 'h-10 w-auto max-w-[9rem]', 'onLight' => true])
        </div>

        <p class="type-eyebrow text-brand-500">Website Preview</p>
        <h2 id="preview-modal-title" class="type-h2 mt-2 pr-8 text-brand-950">
            This page isn't available yet
        </h2>
        <p class="type-body-sm mt-4 text-brand-600">
            This is a concept website preview created for BA Roofing. Additional pages are not included in this demo.
        </p>
        <p class="type-body-sm mt-3 text-brand-500">
            Contact Elphick Digital to book a free consultation and learn more about making this site live.
        </p>
        <div class="mt-8 flex flex-col gap-3 sm:flex-row">
            <a
                href="{{ config('site.elphick.consult_url') }}"
                target="_blank"
                rel="noopener noreferrer"
                class="type-btn inline-flex flex-1 items-center justify-center rounded-lg bg-brand-950 px-5 py-3 text-white transition hover:bg-black"
            >
                Book a Free Consultation
            </a>
            <button
                type="button"
                id="preview-modal-dismiss"
                class="type-btn inline-flex flex-1 items-center justify-center rounded-lg border border-brand-200 px-5 py-3 text-brand-700 transition hover:border-brand-300 hover:bg-brand-50"
            >
                Close
            </button>
        </div>
    </div>
</div>
