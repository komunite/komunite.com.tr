@props([
'content'
])

<p {{ $attributes->class('text-lg md:text-xxl xl:text-2.25xl xl:leading-snug') }}>
    {{$content}}
</p>