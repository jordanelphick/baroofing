@props([
    'class' => 'h-11 w-auto max-w-[11rem] sm:max-w-[12.5rem]',
    'onLight' => false,
])

@if ($onLight)
    <span {{ $attributes->merge(['class' => 'inline-flex rounded-lg bg-black px-3 py-2']) }}>
        <img
            src="{{ asset(config('site.logo')) }}"
            alt="{{ config('site.name') }}"
            class="{{ $class }}"
            width="200"
            height="80"
            decoding="async"
        >
    </span>
@else
    <img
        src="{{ asset(config('site.logo')) }}"
        alt="{{ config('site.name') }}"
        {{ $attributes->merge(['class' => $class]) }}
        width="200"
        height="80"
        decoding="async"
    >
@endif
