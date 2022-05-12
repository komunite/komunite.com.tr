@props([
'desc'
])

<div class="flex items-center gap-x-2.5">
    <figure>
        <x-svgs.check class="h-6 md:h-7.5" />
    </figure>
    <p class="text-lg md:text-1xl">{{$desc}}</p>
</div>