<div className="bg-white flex flex-col items-center gap-y-7.5 p-7.5 md:px-4 md:py-10 rounded-lg js-partnerCard" data-category="{{$category ?? 'Mükellef'}}">
    {{$slot}}
    <div className="text-center space-y-3.5 md:space-y-5">
        <div className="font-bold text-lg md:text-xxl lg:text-2.25xl js-partnerName">
            {{$name}}
        </div>
        <div>
            {{$content}}
        </div>
        <BodyBoldAtom content="{{$coupon}}" />
        <BodyNoteAtom content="{{$note}}" />
    </div>
</div>
