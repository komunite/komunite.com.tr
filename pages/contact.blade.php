<x-templates.base title="Bize Ulaşın">
    <section className="mb-10 md:mb-15 lg:mb-20">
        <ContainerAtom className="flex flex-col items-center text-center gap-y-5 md:gap-y-7.5 lg:gap-y-10">
            <TitleH1Atom title="Bize Ulaşın" />
        </ContainerAtom>
    </section>
    <section className="grid gap-y-5 sm:gap-y-7.5 lg:grid-cols-2 lg:gap-x-20 xl:gap-x-36 mb-10 md:mb-15 lg:mb-20">
        <div className="bg-ghost flex flex-col items-center py-7.5 md:py-10 lg:py-15 lg:rounded-r-lg">
            <div className="space-y-5 md:space-y-7.5 lg:space-y-10">
                <TitleH3Atom title="İletişim bilgileri" className="text-center lg:text-left" />
                <div className="flex gap-x-7.5">
                    <figure>
                        <SVGcontact-location className="h-6" />
                    </figure>
                    <address className="not-italic md:text-xl lg:text-1xl">112 Capitol Trail, Suite A749 <br>
                        Newark 19711 DE, USA</address>
                </div>
                <div className="flex items-center gap-x-7.5">
                    <figure>
                        <SVGcontact-mail className="h-6" />
                    </figure>
                    <a href="mailto:hey@komunite.com.tr" className="md:text-xl lg:text-1xl">hey@komunite.com.tr</a>
                </div>
                <div className="hidden lg:flex items-center lg:gap-x-5 xl:gap-x-7.5">
                    <a href="https://twitter.com/komunitecomtr" title="Komünite Twitter" target="_blank">
                        <SVGtwitter className="h-6 md:h-8" />
                    </a>
                    <a href="https://www.instagram.com/komunitecomtr/" title="Komünite Instagram" target="_blank">
                        <SVGinstagram className="h-6 md:h-8" />
                    </a>
                    <a href="https://tr.linkedin.com/company/komunite" title="Komünite Linkedin" target="_blank">
                        <SVGlinkedin className="h-6 md:h-8" />
                    </a>
                    <a href="https://www.youtube.com/c/Kom%C3%BCnite" title="Komünite YouTube" target="_blank">
                        <SVGYouTube className="h-6 md:h-8" />
                    </a>
                    <a href="https://opensea.io/komunite" title="Komünite OpenSea" target="_blank">
                        <SVGopensea className="h-6 md:h-8" />
                    </a>
                    <a href="https://opensea.io/komunite" title="Komünite Tezos" target="_blank">
                        <SVGtezos className="h-6 md:h-8" />
                    </a>
                </div>
            </div>
        </div>
        <div className="flex flex-col lg:w-5/6 xl:w-3/4 2xl:w-2/3 px-4 xl:px-0">
            <div className="space-y-5 md:space-y-7.5">
                <p className="md:text-xl lg:text-1xl">Please select a topic below related to your inquiry. If you don’t find
                    what you need, fill out our contact form.</p>
                <div className="space-y-2.5">
                    <BodyBoldAtom content="Book a Demo" />
                    <p className="md:text-xl lg:text-1xl">Request a demo from one of our conversion specialists.</p>
                </div>
                <div className="space-y-2.5">
                    <BodyBoldAtom content="Get Inspired" />
                    <p className="md:text-xl lg:text-1xl">Discover the many ways in which our customers use Sleeknote.</p>
                </div>
                <div className="space-y-2.5">
                    <BodyBoldAtom content="Become a Partner" />
                    <p className="md:text-xl lg:text-1xl">Join our Partner Program and earn 25% recurring commissions.</p>
                </div>
            </div>
        </div>
    </section>
    <section className="mb-10 md:mb-15 lg:mb-20">
        <ContainerAtom>
            <div className="px-5 md:px-15 lg:px-25">
                <TitleH4Atom
                    title="Ürün geliştirme yolculuğuna başlayan yaratıcılar öğrenmeye, büyümeye ve sorular sorup cevaplar almaya ihtiyaç duyar. Topluluk öğreniminin avantajlarından faydalanabileceğiniz Circle grubumuza üye olacaksınız." />
            </div>
        </ContainerAtom>
    </section>
    <x-organisms.newsletter className="mb-10 md:mb-15 lg:mb-20" />
    <section>
        <ContainerAtom className="text-center">
            <TitleH4Atom title="Türkiye’de yaratıcı ekonomisinin kalbinde yer almak ister misiniz?"
                className="mb-2.5" />
            <p className="text-lg md:text-1xl mb-7.5">
                Günde 8 saat, her gün aynı işi yapıp, yılda bir defa zam almaktan sıkılmadınız mı?
            </p>
            <ButtonAtom href="{{ route('career') }title="Kariyer Fırsatları"
                className="font-bold text-xl md:text-1xl xl:text-2xl py-3 px-6 lg:py-3.5 lg:px-7.5" />
        </ContainerAtom>
    </section>
</x-templates.base>
