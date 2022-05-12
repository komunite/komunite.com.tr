<div class="bg-white flex flex-col items-center gap-y-7.5 p-7.5 md:px-4 md:py-10 rounded-lg js-partnerCard" data-category="{{$category ?? 'Mükellef'}}">
    {{$slot}}
    <div class="text-center space-y-3.5 md:space-y-5">
        <div class="font-bold text-lg md:text-xxl lg:text-2.25xl js-partnerName">
            {{$name}}
        </div>
        <div>
            {{$content}}
        </div>
        <x-atoms.body-bold content="{{$coupon}}" />
        <x-atoms.body-note content="{{$note}}" />
    </div>
</div>