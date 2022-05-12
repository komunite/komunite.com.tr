<div class="flex flex-col gap-y-5 md:gap-y-7.5 md:px-7.5 lg:px-0">
    <figure>
        <img loading="lazy" src="{{$imgSrc}}" alt="{{$name}}" class="object-cover lg:h-60 w-full rounded-lg">
    </figure>
    <div class="space-y-2.5">
        <div class="font-bold text-lg md:text-xxl lg:text-2.25xl">
            {{$name}}
        </div>
        <x-atoms.body-note content="{{$title}}" />
        <div class="flex items-center gap-x-5">
            @if (isset($twitterLink))
            <a href="{{$twitterLink}}" title="Twitter" target="_blank">
                <x-svgs.twitter class="h-9 transition-all hover:text-neptune" />
            </a>
            @endif
            <a href="{{$linkedinLink}}" title="Linkedin" target="_blank" class="inline-block">
                <x-svgs.linkedin class="h-9 transition-all hover:text-neptune" />
            </a>
        </div>
    </div>
</div>