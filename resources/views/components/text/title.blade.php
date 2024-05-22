@props(['title' => 'Title', 'subtitle' => 'Subtitle'])
<div>
    <div data-aos="fade-down" {{ $attributes->merge(['class' => 'flex flex-col items-center text-primary font-semibold text-center']) }}>
        <p class="text-base uppercase">{{ $subtitle }}</p>
        <h1 class="text-3xl md:text-5xl pb-5 pt-2">{!! $title !!}</h1>
    </div>
</div>
