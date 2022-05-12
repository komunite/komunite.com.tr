<a href="{{ $url }}" title="{{ $title }}" class="flex items-center gap-x-5 p-2.5 hover:bg-bright rounded-lg">
    <figure class="bg-ghost rounded-lg p-[0.3125rem]">
        {{$img}}
    </figure>
    <div class="flex flex-col gap-y-0.5">
        <div class="font-bold text-1xl flex items-center gap-x-2.5 hover:gap-x-3">
            {{ $title }}
        </div>
        {{$desc}}
    </div>
</a>