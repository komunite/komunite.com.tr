<div
    class="absolute top-full -left-1/3 z-20 pt-8 transition-all hidden group-hover:block pointer-events-none group-hover:pointer-events-auto">
    <div class="relative grid grid-cols-[auto_15rem]">
        <div {{ $attributes->class('px-7.5 py-5 bg-white shadow-dropdown rounded-l-lg flex flex-col w-[27.5rem]') }}>
            {{ $slot }}
        </div>
        {{-- <div class="bg-white space-y-5 flex flex-col justify-center rounded-r-lg border-l-[0.5px] border-solid border-ghost p-7.5 w-[18.75rem]">
            <div class="font-bold text-1xl">
                Projelerimiz
            </div>
            <a href="#" title="Komünte ve NFT'ler" class="rounded-lg p-2.5 bg-navy">
                <div class="flex items-center gap-x-1 text-bright font-bold text-1xl">
                    <div>Komünite</div>
                    <x-svgs.heart class="h-7" />
                    <div>NFTler</div>
                </div>
                <figure>
                    <img loading="lazy" src="img/coins.svg" alt="Coins" class="object-cover h-9">
                </figure>
            </a>
            <div class="space-y-1">
                <p>Öğrenciler için bir burs programımız var</p>
                <a href="#" title="Detaylı bilgi" class="font-semibold flex items-center gap-x-1 hover:gap-x-2 transition-all">Detaylı bilgi
                    <span>→</span>
                </a>
            </div>
            <div class="h-[0.5px] w-full bg-ghost">
            </div>
            <a href="#" title="Yaratıcı Akademi" class="font-semibold flex items-center gap-x-1 hover:gap-x-2 transition-all">Yaratıcı Akademi
                <span>→</span>
            </a>
        </div> --}}
        <x-svgs.triangle class="h-9 w-9 absolute top-0 -translate-y-1/2 left-[14%] z-10 text-white" />
    </div>
</div>
