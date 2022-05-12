@props([
'href', 'title'
])

<a href="{{$href}}" title="{{$title}}" {{ $attributes->class('inline-block bg-almost-black text-bright uppercase whitespace-nowrap rounded-lg text-center') }}>{{$title}}</a>