<div class="grid gap-y-15 lg:gap-y-0 lg:grid-cols-[auto_41.875rem] lg:gap-x-7.5">
    <figure class="justify-self-center">
        <img loading="lazy" src="{{$imgSrc}}" alt="Item" class="w-80 lg:w-full object-cover">
    </figure>
    <div class="space-y-5 md:space-y-7.5">
        <x-atoms.title-h3 title="{{$title}}" />
        <x-atoms.body-bold content="{{$desc}}" />
        {{$slot}}
    </div>
</div>