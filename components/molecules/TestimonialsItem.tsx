<figure className="bg-white p-5 space-y-3.5 md:space-y-5 md:break-inside-avoid rounded-lg">
    <div className="flex gap-x-3.5 md:gap-x-5 items-center">
        <img loading="lazy" src="{{$imgSrc}}" alt="{{$name}}" className="w-16 md:w-20 object-cover rounded-full">
        <figcaption className="flex flex-col">
            <span className="font-bold">{{$name}}</span>
            <span className="italic">{{$business}}</span>
        </figcaption>
    </div>
    <blockquote>
        <BodyNoteAtom :content="$testimonial" />
    </blockquote>
</figure>
