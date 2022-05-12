<div class="bg-white space-y-5 p-5 md:p-7.5 rounded-lg">
    <div class="flex gap-x-4">
        {{ $slot }}
        <div class="space-y-2">
            <x-atoms.body-bold content="{{ $company }}" />
            <div class="flex items-center gap-x-1 text-neptune">
                <figure>
                    <x-svgs.location class="h-6" />
                </figure>
                <span class="font-bold">{{ $location }}</span>
            </div>
        </div>
    </div>
    <div class="font-bold text-xxl md:text-2xl lg:text-2.25xl md:leading-snug">
        {{ $title }}
    </div>
    <div class="flex gap-3 flex-wrap font-bold text-xs">
        <span class="bg-ghost py-1.5 px-2.5 rounded-lg">Tam Zamanlı</span>
        <span class="bg-bubble-gum py-1.5 px-2.5 rounded-lg">Deneyimli</span>
        <span class="bg-turquoise py-1.5 px-2.5 rounded-lg">Remote</span>
    </div>
    {{ $slotDesc }}
</div>