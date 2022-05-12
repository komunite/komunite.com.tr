<x-templates.base title="Bize Ulaşın">
    <section class="mb-10 md:mb-15 lg:mb-20">
        <x-atoms.container class="flex flex-col items-center text-center gap-y-5 md:gap-y-7.5 lg:gap-y-10">
            <x-atoms.title-h1 title="Bize Ulaşın" />
        </x-atoms.container>
    </section>
    <section class="grid gap-y-5 sm:gap-y-7.5 lg:grid-cols-2 lg:gap-x-20 xl:gap-x-36 mb-10 md:mb-15 lg:mb-20">
        <div class="bg-ghost flex flex-col items-center py-7.5 md:py-10 lg:py-15 lg:rounded-r-lg">
            <div class="space-y-5 md:space-y-7.5 lg:space-y-10">
                <x-atoms.title-h3 title="İletişim bilgileri" class="text-center lg:text-left" />
                <div class="flex gap-x-7.5">
                    <figure>
                        <x-svgs.contact-location class="h-6" />
                    </figure>
                    <address class="not-italic md:text-xl lg:text-1xl">112 Capitol Trail, Suite A749 <br>
                        Newark 19711 DE, USA</address>
                </div>
                <div class="flex items-center gap-x-7.5">
                    <figure>
                        <x-svgs.contact-mail class="h-6" />
                    </figure>
                    <a href="mailto:hey@komunite.com.tr" class="md:text-xl lg:text-1xl">hey@komunite.com.tr</a>
                </div>
                <div class="hidden lg:flex items-center lg:gap-x-5 xl:gap-x-7.5">
                    <a href="https://twitter.com/komunitecomtr" title="Komünite Twitter" target="_blank">
                        <x-svgs.twitter class="h-6 md:h-8" />
                    </a>
                    <a href="https://www.instagram.com/komunitecomtr/" title="Komünite Instagram" target="_blank">
                        <x-svgs.instagram class="h-6 md:h-8" />
                    </a>
                    <a href="https://tr.linkedin.com/company/komunite" title="Komünite Linkedin" target="_blank">
                        <x-svgs.linkedin class="h-6 md:h-8" />
                    </a>
                    <a href="https://www.youtube.com/c/Kom%C3%BCnite" title="Komünite YouTube" target="_blank">
                        <x-svgs.youtube class="h-6 md:h-8" />
                    </a>
                    <a href="https://opensea.io/komunite" title="Komünite OpenSea" target="_blank">
                        <x-svgs.opensea class="h-6 md:h-8" />
                    </a>
                    <a href="https://opensea.io/komunite" title="Komünite Tezos" target="_blank">
                        <x-svgs.tezos class="h-6 md:h-8" />
                    </a>
                </div>
            </div>
        </div>
        <div class="flex flex-col lg:w-5/6 xl:w-3/4 2xl:w-2/3 px-4 xl:px-0">
            <div class="space-y-5 md:space-y-7.5">
                <p class="md:text-xl lg:text-1xl">Please select a topic below related to your inquiry. If you don’t find
                    what you need, fill out our contact form.</p>
                <div class="space-y-2.5">
                    <x-atoms.body-bold content="Book a Demo" />
                    <p class="md:text-xl lg:text-1xl">Request a demo from one of our conversion specialists.</p>
                </div>
                <div class="space-y-2.5">
                    <x-atoms.body-bold content="Get Inspired" />
                    <p class="md:text-xl lg:text-1xl">Discover the many ways in which our customers use Sleeknote.</p>
                </div>
                <div class="space-y-2.5">
                    <x-atoms.body-bold content="Become a Partner" />
                    <p class="md:text-xl lg:text-1xl">Join our Partner Program and earn 25% recurring commissions.</p>
                </div>
            </div>
        </div>
    </section>
    <section class="mb-10 md:mb-15 lg:mb-20">
        <x-atoms.container>
            <div class="px-5 md:px-15 lg:px-25">
                <x-atoms.title-h4
                    title="Ürün geliştirme yolculuğuna başlayan yaratıcılar öğrenmeye, büyümeye ve sorular sorup cevaplar almaya ihtiyaç duyar. Topluluk öğreniminin avantajlarından faydalanabileceğiniz Circle grubumuza üye olacaksınız." />
            </div>
        </x-atoms.container>
    </section>
    <x-organisms.newsletter class="mb-10 md:mb-15 lg:mb-20" />
    <section>
        <x-atoms.container class="text-center">
            <x-atoms.title-h4 title="Türkiye’de yaratıcı ekonomisinin kalbinde yer almak ister misiniz?"
                class="mb-2.5" />
            <p class="text-lg md:text-1xl mb-7.5">
                Günde 8 saat, her gün aynı işi yapıp, yılda bir defa zam almaktan sıkılmadınız mı?
            </p>
            <x-atoms.button href="{{ route('career') }}" title="Kariyer Fırsatları"
                class="font-bold text-xl md:text-1xl xl:text-2xl py-3 px-6 lg:py-3.5 lg:px-7.5" />
        </x-atoms.container>
    </section>
</x-templates.base>
