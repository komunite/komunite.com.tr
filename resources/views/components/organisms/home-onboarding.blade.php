<section class="bg-ghost">
    <div class="py-10 md:py-25 lg:py-16 md:h-screen md:overflow-y-hidden header-bounce js-headerBounce">
        <x-atoms.container class="flex flex-col h-full space-y-10 md:space-y-36 lg:space-y-10 2xl:space-y-12">
            <div class="grow flex flex-col justify-around space-y-5 md:space-y-4 2xl:space-y-5">

                <div class="text-lg md:text-xl 2xl:text-1xl space-y-1.5 md:space-y-2.5">
                    <p>
                        Sabah 9 akşam 5 çalışmaktan sıkıldınız.
                    </p>
                    <p>
                        Uzmanlığınızı ek gelire dönüştürmekte zorluk çekiyorsunuz.
                    </p>
                    <p>
                        8 saat çalışıp 8 saatlik gelir elde etmek artık sizi tatmin etmiyor.
                    </p>
                    <p>
                        Ürünleştirme ile ilgili eğitimlere erişemiyorsunuz.
                    </p>
                    <p>
                        Projelerinize fon bulmakta güçlük çekiyorsunuz.
                    </p>
                </div>
                <div class="text-lg md:text-xl 2xl:text-1xl space-y-1.5 md:space-y-2.5 lg:w-3/4">
                    <p>
                        Eğer yukarıdaki sorunlar için siz de cevap arıyorsanız, <b>çalışma sistemini değiştirmek isteyen
                            on binlerce profesyonelden birisiniz.</b>
                    </p>
                    <p>
                        Sorularınızın cevabı burada:
                    </p>
                </div>
                <div class="font-readex font-bold text-2xl md:text-2.5xl 2xl:text-4xl">
                    Bir defa yapın, hep satın!
                </div>
                <div class="font-readex text-xl md:text-2xl 2xl:text-3xl lg:leading-snug">
                    Komünite, zamanını satan insanları ürününü satan insanlara dönüştürmek için kurulmuş bir topluluk ve mikro fonlama platformudur.
                </div>
                <div class="flex flex-col gap-y-4 sm:gap-y-0 sm:flex-row sm:gap-x-5 md:gap-x-7.5">
                    <a href="https://egitim.komunite.com.tr/enroll/1387007?price_id=1609717" title="Daha fazla bilgi" class="bg-almost-black text-bright whitespace-nowrap rounded-lg text-lg md:text-xxl 2xl:text-2.25xl py-3 px-7.5 2xl:py-5 2xl:px-10 inline-flex items-center justify-center gap-x-1">Hemen
                        Katılın
                        <x-svgs.arrow-right class="h-8" />
                    </a>
                    <button type="button" data-url="https://www.youtube.com/embed/RPN3Awm8bTE?autoplay=1" title="Komünite YouTube" target="_blank" class="border-3 border-solid border-almost-black whitespace-nowrap rounded-lg text-lg md:text-xxl 2xl:text-2.25xl py-3 px-7.5 2xl:py-5 2xl:px-10 inline-flex items-center justify-center gap-x-1.5 md:gap-x-2.5 js-videoPopupBtn">
                        <x-svgs.youtube class="h-6 md:h-9" />
                        Tanıtımı İzleyin
                    </button>
                </div>
            </div>
            <div class="flex items-center justify-between space-x-4">
                <div class="space-y-1.5 md:space-y-2.5">
                    <div class="font-readex font-bold text-2xl md:text-3xl 2xl:text-4xl">
                        Komünite
                    </div>
                    <p class="text-lg md:text-xl 2xl:text-1xl">
                        Zamanı ölçeklemek mümkün değil. Katma değerli çalışmaya başlayın.
                    </p>
                </div>
                <button type="button" aria-label="Go Down Button" class="js-bounceDownBtn">
                    <x-svgs.bottombutton class="h-14 md:h-16 lg:h-18" />
                </button>
            </div>
        </x-atoms.container>
    </div>
</section>
<div class="fixed top-0 left-0 w-full h-full flex justify-center items-center before:fixed before:top-0 before:left-0 before:w-full before:h-screen before:bg-almost-black before:opacity-20 before:z-20 before:select-none cursor-pointer hidden js-videoPopup">
    <x-atoms.container class="w-full z-30">
        <iframe class="w-full aspect-video rounded-lg" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </x-atoms.container>
</div>