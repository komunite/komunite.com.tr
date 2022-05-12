@props([
'content'
])
<div {{ $attributes->class('font-bold text-lg md:text-1xl') }}>
    {{$content}}
</div>