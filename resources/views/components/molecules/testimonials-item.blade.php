<figure class="bg-white p-5 space-y-3.5 md:space-y-5 md:break-inside-avoid rounded-lg">
    <div class="flex gap-x-3.5 md:gap-x-5 items-center">
        <img loading="lazy" src="{{$imgSrc}}" alt="{{$name}}" class="w-16 md:w-20 object-cover rounded-full">
        <figcaption class="flex flex-col">
            <span class="font-bold">{{$name}}</span>
            <span class="italic">{{$business}}</span>
        </figcaption>
    </div>
    <blockquote>
        <x-atoms.body-note :content="$testimonial" />
    </blockquote>
</figure>