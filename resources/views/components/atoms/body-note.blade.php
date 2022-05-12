@props([
'content'
])

<p {{ $attributes->class('text-base') }}>
    {{$content}}
</p>