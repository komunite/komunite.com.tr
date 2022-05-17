<x-templates.base title="Community">
    <section className="mb-10 md:mb-15 lg:mb-20">
        <ContainerAtom className="grid lg:justify-between lg:grid-cols-2 xl:grid-cols-[auto_41.875rem] gap-y-7.5 lg:gap-y-0 md:gap-x-5">
            <div className="space-y-7.5 lg:space-y-10">
                <TitleH1Atom title="Muhteşem bir yere denk geldiniz." className="w-4/5" />
                <TitleH4Atom title="Meraklı insanlar topluluğuna katılın ve ürün geliştirme serüvenine hemen başlayın." />
                <ButtonAtom href="https://egitim.komunite.com.tr/enroll/1387007?price_id=1609717" target="_blank" title="Hemen Katılın" className="font-bold text-xl md:text-2xl xl:text-3xl py-3.5 px-7.5 lg:py-5 lg:px-10" />
                <div className="flex flex-col gap-y-5 sm:gap-y-0 sm:flex-row sm:gap-x-5">
                    <div className="flex items-center -space-x-3">
                        <figure>
                            <img loading="lazy" src="img/FatihGuner.png" alt="Community Image" className="object-cover rounded-full h-12 w-12 border-2 border-solid border-neptune">
                        </figure>
                        <figure>
                            <img loading="lazy" src="img/FatihGuner.png" alt="Community Image" className="object-cover rounded-full h-12 w-12 border-2 border-solid border-neptune">
                        </figure>
                        <figure>
                            <img loading="lazy" src="img/FatihGuner.png" alt="Community Image" className="object-cover rounded-full h-12 w-12 border-2 border-solid border-neptune">
                        </figure>
                        <figure>
                            <img loading="lazy" src="img/FatihGuner.png" alt="Community Image" className="object-cover rounded-full h-12 w-12 border-2 border-solid border-neptune">
                        </figure>
                    </div>
                    <div className="space-y-2.5">
                        <div className="flex items-center gap-x-1">
                            <figure>
                                <SVGstar className="text-neptune w-5 h-5 lg:w-6 lg:h-6"></x-svgs.star>
                            </figure>
                            <figure>
                                <SVGstar className="text-neptune w-5 h-5 lg:w-6 lg:h-6"></x-svgs.star>
                            </figure>
                            <figure>
                                <SVGstar className="text-neptune w-5 h-5 lg:w-6 lg:h-6"></x-svgs.star>
                            </figure>
                            <figure>
                                <SVGstar className="text-neptune w-5 h-5 lg:w-6 lg:h-6"></x-svgs.star>
                            </figure>
                            <figure>
                                <SVGstar className="text-neptune w-5 h-5 lg:w-6 lg:h-6"></x-svgs.star>
                            </figure>
                        </div>
                        <div className="font-bold">
                            100+ üyemizden 5/5 oy aldık
                        </div>
                    </div>
                </div>
            </div>
            <div className="justify-self-center lg:justify-self-start relative">
                <img loading="lazy" src="img/community-image.png" alt="Community Image" className="w-full">

                <button type="button" className="js-videoPopupBtn" data-url="https://www.youtube.com/embed/GuGdTm4RXX8?autoplay=1">
                    <SVGplay className="w-16 md:w-24 absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2  -mt-8 lg:-mt-24 xl:-mt-12">
                    </x-svgs.play>
                </button>
            </div>
        </ContainerAtom>
    </section>
    <section className="mb-10 md:mb-15 lg:mb-20">
        <ContainerAtom>
            <div className="bg-neptune flex items-center justify-center gap-y-5 gap-x-15 flex-wrap px-7.5 py-5 md:py-7.5 rounded-lg">
                <a href="{{ route('masterclass') }title="Masterclass" className="font-bold text-lg md:text-1xl uppercase text-white flex items-center gap-x-2">Masterclass
                    <SVGarrow-right className="w-9 h-9" />
                </a>
                <a href="#" title="Eğitimler" className="font-bold text-lg md:text-1xl uppercase text-white flex items-center gap-x-2">Eğitimler
                    <SVGarrow-right className="w-9 h-9" />
                </a>
                <a href="{{ route('broadcasts') }title="Canlı Yayınlar" className="font-bold text-lg md:text-1xl uppercase text-white flex items-center gap-x-2">Canlı Yayınlar
                    <SVGarrow-right className="w-9 h-9" />
                </a>
                {/*<a href="#" title="Burs Programı"
                    className="font-bold text-lg md:text-1xl uppercase text-white flex items-center gap-x-2">Burs Programı
                    <SVGarrow-right className="w-9 h-9" />
                </a> */}
            </div>
        </ContainerAtom>
    </section>
    <section className="mb-10 md:mb-15 lg:mb-20">
        <ContainerAtom>
            <div className="px-5 md:px-15 lg:px-25">
                <TitleH4Atom title="Ürün geliştirme yolculuğuna başlayan yaratıcılar öğrenmeye, büyümeye ve sorular sorup cevaplar almaya ihtiyaç duyar. Topluluk öğreniminin avantajlarından faydalanabileceğiniz Circle grubumuza üye olacaksınız." />
            </div>
        </ContainerAtom>
    </section>
    <section className="mb-10 md:mb-15 lg:mb-20">
        <ContainerAtom>
            <div className="flex flex-col items-center text-center gap-y-7.5 md:gap-y-10 lg:gap-y-15 px-5 md:px-10 lg:px-25">
                <TitleH2Atom title="Türkiye’nin en yetenekli yaratıcıları bir araya geliyor!" />
                <div className="grid md:grid-cols-2 gap-x-5 md:gap-x-7.5 gap-y-7.5 md:gap-y-10">
                    <div className="flex flex-col items-center text-center gap-y-2.5">
                        <figure className="justify-self-center lg:justify-self-start">
                            <SVGcommunity-1 className="w-16 h-16" />
                        </figure>
                        <div className="font-bold text-lg md:text-xxl xl:text-2.25xl xl:leading-snug">
                            Take ownership
                        </div>
                        <p className="text-lg md:text-1xl">
                            Braintrust is controlled by you, the Talent, through the BTRST token.
                        </p>
                    </div>
                    <div className="flex flex-col items-center text-center gap-y-2.5">
                        <figure className="justify-self-center lg:justify-self-start">
                            <SVGcommunity-2 className="w-16 h-16" />
                        </figure>
                        <div className="font-bold text-lg md:text-xxl xl:text-2.25xl xl:leading-snug">
                            Make more money
                        </div>
                        <p className="text-lg md:text-1xl">
                            No talent fees and membership costs so you can keep 100% of what you earn.
                        </p>
                    </div>
                    <div className="flex flex-col items-center text-center gap-y-2.5">
                        <figure className="justify-self-center lg:justify-self-start">
                            <SVGExpecting4 className="w-16 h-16" />
                        </figure>
                        <div className="font-bold text-lg md:text-xxl xl:text-2.25xl xl:leading-snug">
                            Future-proof your career
                        </div>
                        <p className="text-lg md:text-1xl">
                            Spend less time worrying about what’s next with access to long-term jobs.
                        </p>
                    </div>
                    <div className="flex flex-col items-center text-center gap-y-2.5">
                        <figure className="justify-self-center lg:justify-self-start">
                            <SVGcommunity-3 className="w-16 h-16" />
                        </figure>
                        <div className="font-bold text-lg md:text-xxl xl:text-2.25xl xl:leading-snug">
                            Get expertly matched
                        </div>
                        <p className="text-lg md:text-1xl">
                            Experts match you to jobs based on your skillsets and interest.
                        </p>
                    </div>
                </div>
            </div>
        </ContainerAtom>
    </section>
    <section className="mb-10 md:mb-15 lg:mb-20">
        <ContainerAtom>
            <div className="grid md:grid-cols-2 gap-x-5 md:gap-x-7.5 gap-y-10 md:gap-y-15">
                <div className="space-y-10">
                    <figure className="relative before:w-full before:h-full before:bg-ghost before:absolute before:-bottom-2.5 before:-right-2.5 before:rounded-lg">
                        <img loading="lazy" src="img/designer-man.png" alt="Designer" className="object-cover rounded-lg relative w-full h-60">
                    </figure>
                    <div className="flex gap-x-2.5 md:gap-x-5">
                        <figure className="justify-self-center lg:justify-self-start">
                            <SVGlamb className="w-8 md:w-12 h-8 md:h-12" />
                        </figure>
                        <div className="space-y-2 md:space-y-3">
                            <TitleH4Atom title="Tasarımcılar" />
                            <p className="text-lg md:text-1xl">
                                Tamamı uzman yaratıcılar tarafından hazırlanmış dijital ürün geliştirme, video
                                düzenleme, dijital pazarlama ve tasarım eğitimlerinin
                            </p>
                        </div>
                    </div>
                </div>
                <div className="space-y-10">
                    <figure className="relative before:w-full before:h-full before:bg-ghost before:absolute before:-bottom-2.5 before:-right-2.5 before:rounded-lg">
                        <img loading="lazy" src="img/developer.png" alt="Developer" className="object-cover rounded-lg relative w-full h-60">
                    </figure>
                    <div className="flex gap-x-2.5 md:gap-x-5">
                        <figure className="justify-self-center lg:justify-self-start">
                            <SVGlamb className="w-8 md:w-12 h-8 md:h-12" />
                        </figure>
                        <div className="space-y-2 md:space-y-3">
                            <TitleH4Atom title="Geliştiriciler" />
                            <p className="text-lg md:text-1xl">
                                Tamamı uzman yaratıcılar tarafından hazırlanmış dijital ürün geliştirme, video
                                düzenleme, dijital pazarlama ve tasarım eğitimlerinin
                            </p>
                        </div>
                    </div>
                </div>
                <div className="space-y-10">
                    <figure className="relative before:w-full before:h-full before:bg-ghost before:absolute before:-bottom-2.5 before:-right-2.5 before:rounded-lg">
                        <img loading="lazy" src="img/developer.png" alt="Curator" className="object-cover rounded-lg relative w-full h-60">
                    </figure>
                    <div className="flex gap-x-2.5 md:gap-x-5">
                        <figure className="justify-self-center lg:justify-self-start">
                            <SVGlamb className="w-8 md:w-12 h-8 md:h-12" />
                        </figure>
                        <div className="space-y-2 md:space-y-3">
                            <TitleH4Atom title="Küratörler" />
                            <p className="text-lg md:text-1xl">
                                Tamamı uzman yaratıcılar tarafından hazırlanmış dijital ürün geliştirme, video
                                düzenleme, dijital pazarlama ve tasarım eğitimlerinin
                            </p>
                        </div>
                    </div>
                </div>
                <div className="space-y-10">
                    <figure className="relative before:w-full before:h-full before:bg-ghost before:absolute before:-bottom-2.5 before:-right-2.5 before:rounded-lg">
                        <img loading="lazy" src="img/designer-man.png" alt="Entrepreneur" className="object-cover rounded-lg relative w-full h-60">
                    </figure>
                    <div className="flex gap-x-2.5 md:gap-x-5">
                        <figure className="justify-self-center lg:justify-self-start">
                            <SVGlamb className="w-8 md:w-12 h-8 md:h-12" />
                        </figure>
                        <div className="space-y-2 md:space-y-3">
                            <TitleH4Atom title="Girişimciler" />
                            <p className="text-lg md:text-1xl">
                                Tamamı uzman yaratıcılar tarafından hazırlanmış dijital ürün geliştirme, video
                                düzenleme, dijital pazarlama ve tasarım eğitimlerinin
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </ContainerAtom>
    </section>
    <section className="mb-10 md:mb-15 lg:mb-20">
        <ContainerAtom>
            <CheckedItemMolecule title="Uzmanlardan öğrenin" desc="Join our community of over 1,000 Founders, Advisors, and Experts to take your startup to the next level." imgSrc="img/community-illustration-2.svg">
                <div className="space-y-4">
                    <CheckItemAtom desc="Work 1-on-1 with an Expert Komünite Advisor" />
                    <CheckItemAtom desc="Weekly check-ins and milestone development sessions" />
                    <CheckItemAtom desc="Access to daily workshops and office hours with Experts" />
                    <CheckItemAtom desc="On-demand help with everyday tasks from experts" />
                    <CheckItemAtom desc="Membership in a local network of creators" />
                </div>
                <ButtonAtom href="{{ route('career') }title="Kariyer Fırsatları" className="font-bold text-xl md:text-1xl xl:text-2xl py-3 px-6 lg:py-3.5 lg:px-7.5 mt-5 md:mt-7.5" />
            </CheckedItemMolecule>
        </ContainerAtom>
    </section>
    <section className="mb-10 md:mb-15 lg:mb-20">
        <ContainerAtom className="flex flex-col gap-y-5 md:gap-y-7.5">
            <div className="grid gap-y-7.5 lg:gap-y-0 sm:grid-cols-2 lg:grid-cols-4 sm:gap-x-7.5">
                <BigNumbersItemMolecule number="12" title="Online eğitim programı" content="Bağımsız yaratıcılar ve mikro girişimciler tarafından yaratılan ve fonlama fırsatı bulduğumuz dijital ürünlerin sayısı" />
                <BigNumbersItemMolecule number="100" title="Saat canlı yayın" content="Bağımsız yaratıcılar ve mikro girişimciler tarafından yaratılan ve fonlama fırsatı bulduğumuz dijital ürünlerin sayısı" />
                <BigNumbersItemMolecule number="4" title="Haftalık yayınlar" content="Bağımsız yaratıcılar ve mikro girişimciler tarafından yaratılan ve fonlama fırsatı bulduğumuz dijital ürünlerin sayısı" />
                <BigNumbersItemMolecule number="60" title="Toplam alt uzmanlıklar" content="Bağımsız yaratıcılar ve mikro girişimciler tarafından yaratılan ve fonlama fırsatı bulduğumuz dijital ürünlerin sayısı" />
            </div>
            <BodyBoldAtom content="Join our community of over 1,000 Founders, Advisors, and Experts to take your startup to the next level." className="text-center sm:w-2/3 lg:w-1/2 sm:mx-auto" />
            <ButtonAtom href="#" title="Eğitimler" className="font-bold text-xl md:text-1xl xl:text-2xl py-3 px-6 lg:py-3.5 lg:px-7.5 self-center" />
        </ContainerAtom>
    </section>
    <section className="mb-10 md:mb-15 lg:mb-20">
        <ContainerAtom className="grid md:grid-cols-3 gap-y-5 md:gap-y-0 md:gap-x-7.5">
            <div className="space-y-5 md:space-y-7.5">
                <figure>
                    <img loading="lazy" src="img/FatihGuner.png" alt="Fatih Güner" className="object-cover rounded-lg w-full lg:h-92">
                </figure>
                <div className="space-y-2.5">
                    <div className="flex flex-col gap-y-3.5 lg:gap-y-0 lg:flex-row lg:items-center gap-x-5">
                        <LeadRegularAtom content="Fatih Güner" className="font-bold" />
                        <div className="flex items-center gap-x-1">
                            <figure>
                                <SVGstar className="text-neptune w-5 h-5 lg:w-6 lg:h-6"></x-svgs.star>
                            </figure>
                            <figure>
                                <SVGstar className="text-neptune w-5 h-5 lg:w-6 lg:h-6"></x-svgs.star>
                            </figure>
                            <figure>
                                <SVGstar className="text-neptune w-5 h-5 lg:w-6 lg:h-6"></x-svgs.star>
                            </figure>
                            <figure>
                                <SVGstar className="text-neptune w-5 h-5 lg:w-6 lg:h-6"></x-svgs.star>
                            </figure>
                            <figure>
                                <SVGstar className="text-neptune w-5 h-5 lg:w-6 lg:h-6"></x-svgs.star>
                            </figure>
                        </div>
                    </div>
                    <BodyNoteAtom content="Founder & CEO at Notion Power-Up" />
                    <BodyNoteAtom content="Başkalarının hayallerini gerçekleştirmek yerine artık kendi hayallerinin peşinde koşup, kendi değerinin farkına varmak, yapabileceklerini görmek ve senin gibi düşünen insanlarla üretmek için motivasyon dolu bir ortam." />
                </div>
            </div>
            <div className="space-y-5 md:space-y-7.5">
                <figure>
                    <img loading="lazy" src="img/FatihGuner.png" alt="Fatih Güner" className="object-cover rounded-lg w-full lg:h-92">
                </figure>
                <div className="space-y-2.5">
                    <div className="flex flex-col gap-y-3.5 lg:gap-y-0 lg:flex-row lg:items-center gap-x-5">
                        <LeadRegularAtom content="Kadir Furkan" className="font-bold" />
                        <div className="flex items-center gap-x-1">
                            <figure>
                                <SVGstar className="text-neptune w-5 h-5 lg:w-6 lg:h-6"></x-svgs.star>
                            </figure>
                            <figure>
                                <SVGstar className="text-neptune w-5 h-5 lg:w-6 lg:h-6"></x-svgs.star>
                            </figure>
                            <figure>
                                <SVGstar className="text-neptune w-5 h-5 lg:w-6 lg:h-6"></x-svgs.star>
                            </figure>
                            <figure>
                                <SVGstar className="text-neptune w-5 h-5 lg:w-6 lg:h-6"></x-svgs.star>
                            </figure>
                            <figure>
                                <SVGstar className="text-neptune w-5 h-5 lg:w-6 lg:h-6"></x-svgs.star>
                            </figure>
                        </div>
                    </div>
                    <BodyNoteAtom content="Founder & CEO at Notion Power-Up" />
                    <BodyNoteAtom content="Başkalarının hayallerini gerçekleştirmek yerine artık kendi hayallerinin peşinde koşup, kendi değerinin farkına varmak, yapabileceklerini görmek ve senin gibi düşünen insanlarla üretmek için motivasyon dolu bir ortam." />
                </div>
            </div>
            <div className="space-y-5 md:space-y-7.5">
                <figure>
                    <img loading="lazy" src="img/FatihGuner.png" alt="Fatih Güner" className="object-cover rounded-lg w-full lg:h-92">
                </figure>
                <div className="space-y-2.5">
                    <div className="flex flex-col gap-y-3.5 lg:gap-y-0 lg:flex-row lg:items-center gap-x-5">
                        <LeadRegularAtom content="Eren Dik" className="font-bold" />
                        <div className="flex items-center gap-x-1">
                            <figure>
                                <SVGstar className="text-neptune w-5 h-5 lg:w-6 lg:h-6"></x-svgs.star>
                            </figure>
                            <figure>
                                <SVGstar className="text-neptune w-5 h-5 lg:w-6 lg:h-6"></x-svgs.star>
                            </figure>
                            <figure>
                                <SVGstar className="text-neptune w-5 h-5 lg:w-6 lg:h-6"></x-svgs.star>
                            </figure>
                            <figure>
                                <SVGstar className="text-neptune w-5 h-5 lg:w-6 lg:h-6"></x-svgs.star>
                            </figure>
                            <figure>
                                <SVGstar className="text-neptune w-5 h-5 lg:w-6 lg:h-6"></x-svgs.star>
                            </figure>
                        </div>
                    </div>
                    <BodyNoteAtom content="Founder & CEO at Notion Power-Up" />
                    <BodyNoteAtom content="Başkalarının hayallerini gerçekleştirmek yerine artık kendi hayallerinin peşinde koşup, kendi değerinin farkına varmak, yapabileceklerini görmek ve senin gibi düşünen insanlarla üretmek için motivasyon dolu bir ortam." />
                </div>
            </div>
        </ContainerAtom>
    </section>
    <section className="mb-10 md:mb-15 lg:mb-20">
        <ContainerAtom>
            <div className="px-5 md:px-15 lg:px-25">
                <TitleH4Atom title="Ürün geliştirme yolculuğuna başlayan yaratıcılar öğrenmeye, büyümeye ve sorular sorup cevaplar almaya ihtiyaç duyar. Topluluk öğreniminin avantajlarından faydalanabileceğiniz Circle grubumuza üye olacaksınız." />
            </div>
        </ContainerAtom>
    </section>
    <section className="mb-10 md:mb-15 lg:mb-20">
        <ContainerAtom>
            <div className="bg-white grid gap-y-5 sm:gap-y-7.5 lg:gap-y-0 lg:grid-cols-[21.25rem_auto] xl:md:grid-cols-[23.75rem_auto] items-center lg:gap-x-10 xl:gap-x-18 py-5 px-5 lg:pr-10 rounded-lg">
                <div className="bg-ghost space-y-5 lg:space-y-7.5 p-5 sm:p-7.5 lg:p-10 rounded-lg">
                    <figure>
                        <a href="/" title="Komünite">
                            <SVGlogo className="h-8 lg:h-10 xl:h-11.5" />
                        </a>
                    </figure>
                    <TitleH2Atom title="Bir defa yap,
                    hep sat!" className="mb-7.5 lg:mb-10" />
                    <div className="space-y-2.5">
                        <p className="text-lg md:text-1xl">
                            Spesifik bir uzmanlığınız varsa,
                        </p>
                        <p className="text-lg md:text-1xl">
                            Müşterileriniz için dijital ürünler üretiyorsanız,
                        </p>
                        <p className="text-lg md:text-1xl">
                            Kazancın efora bağlı olduğunu biliyorsanız,
                        </p>
                    </div>
                    <BodyBoldAtom content="Türkiye’nin en yetenekli yaratıcılarının bir araya geldiği Komünite’ye katılın!" />
                </div>
                <div className="space-y-5 lg:space-y-7.5">
                    <div className="space-y-3.5 md:space-y-5">
                        <TitleH3Atom title="Komünite’ye üye olduğunuzda:" />
                        <ul className="list-disc text-lg md:text-1xl space-y-2 ml-7">
                            <li>
                                Her ay kapsamını genişlettiğimiz eğitim içeriklerine,
                            </li>
                            <li>
                                Türkiye’nin en büyük yaratıcı topluluğuna erişime,
                            </li>
                            <li>
                                Üyelere özel gerçekleştirdiğimiz yayınlara katılma hakkına,
                            </li>
                            <li>
                                Katma Değer Fonu’na başvurma hakkına,
                            </li>
                            <li>Fatih Güner ile 30 dakika “Yaratıcı Koçluğu” görüşmesine,</li>
                        </ul>
                        <p className="text-lg md:text-1xl">
                            sahip olursunuz.
                        </p>
                    </div>
                    <ButtonAtom href="https://egitim.komunite.com.tr/enroll/1387007?price_id=1609717" target="_blank" title="Hemen Katılın" className="font-bold text-xl md:text-2xl xl:text-3xl py-3.5 px-7.5 lg:py-5 lg:px-10" />
                    <div className="space-y-3.5 lg:space-y-5">
                        <p className="font-bold text-xxl md:text-2xl lg:text-2.25xl md:leading-snug">
                            Üyelik ücreti yıllık 1000 TL olarak belirlenmiştir.
                        </p>
                        <BodyNoteAtom content="Komünite, sunduğu eğitimler, birlikte çalıştığı uzmanlar, sunduğu topluluk öğrenimi fırsatı, üyelerine sağladığı her türlü içerik ve indirimlerden dolayı sadece yıllık olarak ücretlendirilmektedir." />
                    </div>
                </div>
            </div>
        </ContainerAtom>
    </section>
    <section>
        <ContainerAtom className="space-y-7.5 lg:space-y-10">
            <TitleH3Atom title="Türkiye’nin en yetenekli yaratıcıları bir araya geliyor!" />
            <LeadRegularAtom content="Yeni disiplinler öğrenerek kariyerinizi ileriye götürmek, fikirlerinizi hayata geçirip büyütmek ve yaşam boyu arkadaşlar edinmek istiyorsanız Komünite tam size göre." />
            <div className="grid gap-y-7.5 lg:gap-y-0 lg:grid-cols-2 xl:grid-cols-[auto_41.875rem] lg:gap-x-7.5 items-center">
                <p className="text-lg md:text-1xl">
                    Dünyanın dört bir yanında tasarımcılar, eğitmenler, geliştiriciler, müzisyenler ve birçok meslek
                    grubundan profesyoneller “ürünleştirme” yöntemleri ile, eforlarını katma değerli bir şekilde satma
                    yolunu seçiyorlar. Zamanını ürünleştirmeyenler ise, aylık maaşları karşılığında zamanlarını satmaya
                    devam ediyor.
                </p>
                <div className="bg-neptune text-bright p-5 md:p-7.5 rounded-lg">
                    <BodyBoldAtom content="Türkiye’nin en yetenekli yaratıcıları bir araya gelip, fikirlerini ve kariyerlerini dünya standartlarında bir topluluğun yardımıyla bir adım ileriye götürmeye çalışıyor. Dünyayı değiştirmeye çalışmıyoruz. İnsanların kullanabileceği, faydalanabileceği, okuyabileceği, öğrenebileceği ürünler yapmaya çalışıyoruz." />
                </div>
            </div>
            <p className="text-lg md:text-1xl">
                10 saat çalışıp 10 saatlik gelir elde etmek yerine, 10 saat çalışıp 1.000 saatlik gelir elde etmeyi
                herkes ister, bunun da yolu sürekli eğitim ve topluluk öğreniminden geçiyor. Komünite, size bu konuda
                yardım ediyor.
            </p>
        </ContainerAtom>
    </section>


    <div className="fixed top-0 left-0 w-full h-full flex justify-center items-center before:fixed before:top-0 before:left-0 before:w-full before:h-screen before:bg-almost-black before:opacity-20 before:z-20 before:select-none cursor-pointer hidden js-videoPopup">
        <ContainerAtom className="w-full z-30">
            <iframe className="w-full aspect-video rounded-lg" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </ContainerAtom>
    </div>
</x-templates.base>
