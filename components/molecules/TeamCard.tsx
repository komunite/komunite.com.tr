<div className="flex flex-col gap-y-5 md:gap-y-7.5 md:px-7.5 lg:px-0">
    <figure>
        <img loading="lazy" src="{{$imgSrc}}" alt="{{$name}}" className="object-cover lg:h-60 w-full rounded-lg">
    </figure>
    <div className="space-y-2.5">
        <div className="font-bold text-lg md:text-xxl lg:text-2.25xl">
            {{$name}}
        </div>
        <BodyNoteAtom content="{{$title}}" />
        <div className="flex items-center gap-x-5">
            @if (isset($twitterLink))
            <a href="{{$twitterLink}}" title="Twitter" target="_blank">
                <x-svgs.twitter className="h-9 transition-all hover:text-neptune" />
            </a>
            @endif
            <a href="{{$linkedinLink}}" title="Linkedin" target="_blank" className="inline-block">
                <x-svgs.linkedin className="h-9 transition-all hover:text-neptune" />
            </a>
        </div>
    </div>
</div>
