<x-templates.base title="Community">
    <section class="mb-10 md:mb-15 lg:mb-20">
        <x-atoms.container class="grid lg:justify-between lg:grid-cols-2 xl:grid-cols-[auto_41.875rem] gap-y-7.5 lg:gap-y-0 md:gap-x-5">
            <div class="space-y-7.5 lg:space-y-10">
                <x-atoms.title-h1 title="Muhteşem bir yere denk geldiniz." class="w-4/5" />
                <x-atoms.title-h4 title="Meraklı insanlar topluluğuna katılın ve ürün geliştirme serüvenine hemen başlayın." />
                <x-atoms.button href="https://egitim.komunite.com.tr/enroll/1387007?price_id=1609717" target="_blank" title="Hemen Katılın" class="font-bold text-xl md:text-2xl xl:text-3xl py-3.5 px-7.5 lg:py-5 lg:px-10" />
                <div class="flex flex-col gap-y-5 sm:gap-y-0 sm:flex-row sm:gap-x-5">
                    <div class="flex items-center -space-x-3">
                        <figure>
                            <img loading="lazy" src="img/FatihGuner.png" alt="Community Image" class="object-cover rounded-full h-12 w-12 border-2 border-solid border-neptune">
                        </figure>
                        <figure>
                            <img loading="lazy" src="img/FatihGuner.png" alt="Community Image" class="object-cover rounded-full h-12 w-12 border-2 border-solid border-neptune">
                        </figure>
                        <figure>
                            <img loading="lazy" src="img/FatihGuner.png" alt="Community Image" class="object-cover rounded-full h-12 w-12 border-2 border-solid border-neptune">
                        </figure>
                        <figure>
                            <img loading="lazy" src="img/FatihGuner.png" alt="Community Image" class="object-cover rounded-full h-12 w-12 border-2 border-solid border-neptune">
                        </figure>
                    </div>
                    <div class="space-y-2.5">
                        <div class="flex items-center gap-x-1">
                            <figure>
                                <x-svgs.star class="text-neptune w-5 h-5 lg:w-6 lg:h-6"></x-svgs.star>
                            </figure>
                            <figure>
                                <x-svgs.star class="text-neptune w-5 h-5 lg:w-6 lg:h-6"></x-svgs.star>
                            </figure>
                            <figure>
                                <x-svgs.star class="text-neptune w-5 h-5 lg:w-6 lg:h-6"></x-svgs.star>
                            </figure>
                            <figure>
                                <x-svgs.star class="text-neptune w-5 h-5 lg:w-6 lg:h-6"></x-svgs.star>
                            </figure>
                            <figure>
                                <x-svgs.star class="text-neptune w-5 h-5 lg:w-6 lg:h-6"></x-svgs.star>
                            </figure>
                        </div>
                        <div class="font-bold">
                            100+ üyemizden 5/5 oy aldık
                        </div>
                    </div>
                </div>
            </div>
            <div class="justify-self-center lg:justify-self-start relative">
                <img loading="lazy" src="img/community-image.png" alt="Community Image" class="w-full">

                <button type="button" class="js-videoPopupBtn" data-url="https://www.youtube.com/embed/GuGdTm4RXX8?autoplay=1">
                    <x-svgs.play class="w-16 md:w-24 absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2  -mt-8 lg:-mt-24 xl:-mt-12">
                    </x-svgs.play>
                </button>
            </div>
        </x-atoms.container>
    </section>
    <section class="mb-10 md:mb-15 lg:mb-20">
        <x-atoms.container>
            <div class="bg-neptune flex items-center justify-center gap-y-5 gap-x-15 flex-wrap px-7.5 py-5 md:py-7.5 rounded-lg">
                <a href="{{ route('masterclass') }}" title="Masterclass" class="font-bold text-lg md:text-1xl uppercase text-white flex items-center gap-x-2">Masterclass
                    <x-svgs.arrow-right class="w-9 h-9" />
                </a>
                <a href="#" title="Eğitimler" class="font-bold text-lg md:text-1xl uppercase text-white flex items-center gap-x-2">Eğitimler
                    <x-svgs.arrow-right class="w-9 h-9" />
                </a>
                <a href="{{ route('broadcasts') }}" title="Canlı Yayınlar" class="font-bold text-lg md:text-1xl uppercase text-white flex items-center gap-x-2">Canlı Yayınlar
                    <x-svgs.arrow-right class="w-9 h-9" />
                </a>
                {{-- <a href="#" title="Burs Programı"
                    class="font-bold text-lg md:text-1xl uppercase text-white flex items-center gap-x-2">Burs Programı
                    <x-svgs.arrow-right class="w-9 h-9" />
                </a> --}}
            </div>
        </x-atoms.container>
    </section>
    <section class="mb-10 md:mb-15 lg:mb-20">
        <x-atoms.container>
            <div class="px-5 md:px-15 lg:px-25">
                <x-atoms.title-h4 title="Ürün geliştirme yolculuğuna başlayan yaratıcılar öğrenmeye, büyümeye ve sorular sorup cevaplar almaya ihtiyaç duyar. Topluluk öğreniminin avantajlarından faydalanabileceğiniz Circle grubumuza üye olacaksınız." />
            </div>
        </x-atoms.container>
    </section>
    <section class="mb-10 md:mb-15 lg:mb-20">
        <x-atoms.container>
            <div class="flex flex-col items-center text-center gap-y-7.5 md:gap-y-10 lg:gap-y-15 px-5 md:px-10 lg:px-25">
                <x-atoms.title-h2 title="Türkiye’nin en yetenekli yaratıcıları bir araya geliyor!" />
                <div class="grid md:grid-cols-2 gap-x-5 md:gap-x-7.5 gap-y-7.5 md:gap-y-10">
                    <div class="flex flex-col items-center text-center gap-y-2.5">
                        <figure class="justify-self-center lg:justify-self-start">
                            <x-svgs.community-1 class="w-16 h-16" />
                        </figure>
                        <div class="font-bold text-lg md:text-xxl xl:text-2.25xl xl:leading-snug">
                            Take ownership
                        </div>
                        <p class="text-lg md:text-1xl">
                            Braintrust is controlled by you, the Talent, through the BTRST token.
                        </p>
                    </div>
                    <div class="flex flex-col items-center text-center gap-y-2.5">
                        <figure class="justify-self-center lg:justify-self-start">
                            <x-svgs.community-2 class="w-16 h-16" />
                        </figure>
                        <div class="font-bold text-lg md:text-xxl xl:text-2.25xl xl:leading-snug">
                            Make more money
                        </div>
                        <p class="text-lg md:text-1xl">
                            No talent fees and membership costs so you can keep 100% of what you earn.
                        </p>
                    </div>
                    <div class="flex flex-col items-center text-center gap-y-2.5">
                        <figure class="justify-self-center lg:justify-self-start">
                            <x-svgs.expecting-4 class="w-16 h-16" />
                        </figure>
                        <div class="font-bold text-lg md:text-xxl xl:text-2.25xl xl:leading-snug">
                            Future-proof your career
                        </div>
                        <p class="text-lg md:text-1xl">
                            Spend less time worrying about what’s next with access to long-term jobs.
                        </p>
                    </div>
                    <div class="flex flex-col items-center text-center gap-y-2.5">
                        <figure class="justify-self-center lg:justify-self-start">
                            <x-svgs.community-3 class="w-16 h-16" />
                        </figure>
                        <div class="font-bold text-lg md:text-xxl xl:text-2.25xl xl:leading-snug">
                            Get expertly matched
                        </div>
                        <p class="text-lg md:text-1xl">
                            Experts match you to jobs based on your skillsets and interest.
                        </p>
                    </div>
                </div>
            </div>
        </x-atoms.container>
    </section>
    <section class="mb-10 md:mb-15 lg:mb-20">
        <x-atoms.container>
            <div class="grid md:grid-cols-2 gap-x-5 md:gap-x-7.5 gap-y-10 md:gap-y-15">
                <div class="space-y-10">
                    <figure class="relative before:w-full before:h-full before:bg-ghost before:absolute before:-bottom-2.5 before:-right-2.5 before:rounded-lg">
                        <img loading="lazy" src="img/designer-man.png" alt="Designer" class="object-cover rounded-lg relative w-full h-60">
                    </figure>
                    <div class="flex gap-x-2.5 md:gap-x-5">
                        <figure class="justify-self-center lg:justify-self-start">
                            <x-svgs.lamb class="w-8 md:w-12 h-8 md:h-12" />
                        </figure>
                        <div class="space-y-2 md:space-y-3">
                            <x-atoms.title-h4 title="Tasarımcılar" />
                            <p class="text-lg md:text-1xl">
                                Tamamı uzman yaratıcılar tarafından hazırlanmış dijital ürün geliştirme, video
                                düzenleme, dijital pazarlama ve tasarım eğitimlerinin
                            </p>
                        </div>
                    </div>
                </div>
                <div class="space-y-10">
                    <figure class="relative before:w-full before:h-full before:bg-ghost before:absolute before:-bottom-2.5 before:-right-2.5 before:rounded-lg">
                        <img loading="lazy" src="img/developer.png" alt="Developer" class="object-cover rounded-lg relative w-full h-60">
                    </figure>
                    <div class="flex gap-x-2.5 md:gap-x-5">
                        <figure class="justify-self-center lg:justify-self-start">
                            <x-svgs.lamb class="w-8 md:w-12 h-8 md:h-12" />
                        </figure>
                        <div class="space-y-2 md:space-y-3">
                            <x-atoms.title-h4 title="Geliştiriciler" />
                            <p class="text-lg md:text-1xl">
                                Tamamı uzman yaratıcılar tarafından hazırlanmış dijital ürün geliştirme, video
                                düzenleme, dijital pazarlama ve tasarım eğitimlerinin
                            </p>
                        </div>
                    </div>
                </div>
                <div class="space-y-10">
                    <figure class="relative before:w-full before:h-full before:bg-ghost before:absolute before:-bottom-2.5 before:-right-2.5 before:rounded-lg">
                        <img loading="lazy" src="img/developer.png" alt="Curator" class="object-cover rounded-lg relative w-full h-60">
                    </figure>
                    <div class="flex gap-x-2.5 md:gap-x-5">
                        <figure class="justify-self-center lg:justify-self-start">
                            <x-svgs.lamb class="w-8 md:w-12 h-8 md:h-12" />
                        </figure>
                        <div class="space-y-2 md:space-y-3">
                            <x-atoms.title-h4 title="Küratörler" />
                            <p class="text-lg md:text-1xl">
                                Tamamı uzman yaratıcılar tarafından hazırlanmış dijital ürün geliştirme, video
                                düzenleme, dijital pazarlama ve tasarım eğitimlerinin
                            </p>
                        </div>
                    </div>
                </div>
                <div class="space-y-10">
                    <figure class="relative before:w-full before:h-full before:bg-ghost before:absolute before:-bottom-2.5 before:-right-2.5 before:rounded-lg">
                        <img loading="lazy" src="img/designer-man.png" alt="Entrepreneur" class="object-cover rounded-lg relative w-full h-60">
                    </figure>
                    <div class="flex gap-x-2.5 md:gap-x-5">
                        <figure class="justify-self-center lg:justify-self-start">
                            <x-svgs.lamb class="w-8 md:w-12 h-8 md:h-12" />
                        </figure>
                        <div class="space-y-2 md:space-y-3">
                            <x-atoms.title-h4 title="Girişimciler" />
                            <p class="text-lg md:text-1xl">
                                Tamamı uzman yaratıcılar tarafından hazırlanmış dijital ürün geliştirme, video
                                düzenleme, dijital pazarlama ve tasarım eğitimlerinin
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </x-atoms.container>
    </section>
    <section class="mb-10 md:mb-15 lg:mb-20">
        <x-atoms.container>
            <x-molecules.checked-item title="Uzmanlardan öğrenin" desc="Join our community of over 1,000 Founders, Advisors, and Experts to take your startup to the next level." imgSrc="img/community-illustration-2.svg">
                <div class="space-y-4">
                    <x-atoms.check-item desc="Work 1-on-1 with an Expert Komünite Advisor" />
                    <x-atoms.check-item desc="Weekly check-ins and milestone development sessions" />
                    <x-atoms.check-item desc="Access to daily workshops and office hours with Experts" />
                    <x-atoms.check-item desc="On-demand help with everyday tasks from experts" />
                    <x-atoms.check-item desc="Membership in a local network of creators" />
                </div>
                <x-atoms.button href="{{ route('career') }}" title="Kariyer Fırsatları" class="font-bold text-xl md:text-1xl xl:text-2xl py-3 px-6 lg:py-3.5 lg:px-7.5 mt-5 md:mt-7.5" />
            </x-molecules.checked-item>
        </x-atoms.container>
    </section>
    <section class="mb-10 md:mb-15 lg:mb-20">
        <x-atoms.container class="flex flex-col gap-y-5 md:gap-y-7.5">
            <div class="grid gap-y-7.5 lg:gap-y-0 sm:grid-cols-2 lg:grid-cols-4 sm:gap-x-7.5">
                <x-molecules.big-numbers-item number="12" title="Online eğitim programı" content="Bağımsız yaratıcılar ve mikro girişimciler tarafından yaratılan ve fonlama fırsatı bulduğumuz dijital ürünlerin sayısı" />
                <x-molecules.big-numbers-item number="100" title="Saat canlı yayın" content="Bağımsız yaratıcılar ve mikro girişimciler tarafından yaratılan ve fonlama fırsatı bulduğumuz dijital ürünlerin sayısı" />
                <x-molecules.big-numbers-item number="4" title="Haftalık yayınlar" content="Bağımsız yaratıcılar ve mikro girişimciler tarafından yaratılan ve fonlama fırsatı bulduğumuz dijital ürünlerin sayısı" />
                <x-molecules.big-numbers-item number="60" title="Toplam alt uzmanlıklar" content="Bağımsız yaratıcılar ve mikro girişimciler tarafından yaratılan ve fonlama fırsatı bulduğumuz dijital ürünlerin sayısı" />
            </div>
            <x-atoms.body-bold content="Join our community of over 1,000 Founders, Advisors, and Experts to take your startup to the next level." class="text-center sm:w-2/3 lg:w-1/2 sm:mx-auto" />
            <x-atoms.button href="#" title="Eğitimler" class="font-bold text-xl md:text-1xl xl:text-2xl py-3 px-6 lg:py-3.5 lg:px-7.5 self-center" />
        </x-atoms.container>
    </section>
    <section class="mb-10 md:mb-15 lg:mb-20">
        <x-atoms.container class="grid md:grid-cols-3 gap-y-5 md:gap-y-0 md:gap-x-7.5">
            <div class="space-y-5 md:space-y-7.5">
                <figure>
                    <img loading="lazy" src="img/FatihGuner.png" alt="Fatih Güner" class="object-cover rounded-lg w-full lg:h-92">
                </figure>
                <div class="space-y-2.5">
                    <div class="flex flex-col gap-y-3.5 lg:gap-y-0 lg:flex-row lg:items-center gap-x-5">
                        <x-atoms.lead-regular content="Fatih Güner" class="font-bold" />
                        <div class="flex items-center gap-x-1">
                            <figure>
                                <x-svgs.star class="text-neptune w-5 h-5 lg:w-6 lg:h-6"></x-svgs.star>
                            </figure>
                            <figure>
                                <x-svgs.star class="text-neptune w-5 h-5 lg:w-6 lg:h-6"></x-svgs.star>
                            </figure>
                            <figure>
                                <x-svgs.star class="text-neptune w-5 h-5 lg:w-6 lg:h-6"></x-svgs.star>
                            </figure>
                            <figure>
                                <x-svgs.star class="text-neptune w-5 h-5 lg:w-6 lg:h-6"></x-svgs.star>
                            </figure>
                            <figure>
                                <x-svgs.star class="text-neptune w-5 h-5 lg:w-6 lg:h-6"></x-svgs.star>
                            </figure>
                        </div>
                    </div>
                    <x-atoms.body-note content="Founder & CEO at Notion Power-Up" />
                    <x-atoms.body-note content="Başkalarının hayallerini gerçekleştirmek yerine artık kendi hayallerinin peşinde koşup, kendi değerinin farkına varmak, yapabileceklerini görmek ve senin gibi düşünen insanlarla üretmek için motivasyon dolu bir ortam." />
                </div>
            </div>
            <div class="space-y-5 md:space-y-7.5">
                <figure>
                    <img loading="lazy" src="img/FatihGuner.png" alt="Fatih Güner" class="object-cover rounded-lg w-full lg:h-92">
                </figure>
                <div class="space-y-2.5">
                    <div class="flex flex-col gap-y-3.5 lg:gap-y-0 lg:flex-row lg:items-center gap-x-5">
                        <x-atoms.lead-regular content="Kadir Furkan" class="font-bold" />
                        <div class="flex items-center gap-x-1">
                            <figure>
                                <x-svgs.star class="text-neptune w-5 h-5 lg:w-6 lg:h-6"></x-svgs.star>
                            </figure>
                            <figure>
                                <x-svgs.star class="text-neptune w-5 h-5 lg:w-6 lg:h-6"></x-svgs.star>
                            </figure>
                            <figure>
                                <x-svgs.star class="text-neptune w-5 h-5 lg:w-6 lg:h-6"></x-svgs.star>
                            </figure>
                            <figure>
                                <x-svgs.star class="text-neptune w-5 h-5 lg:w-6 lg:h-6"></x-svgs.star>
                            </figure>
                            <figure>
                                <x-svgs.star class="text-neptune w-5 h-5 lg:w-6 lg:h-6"></x-svgs.star>
                            </figure>
                        </div>
                    </div>
                    <x-atoms.body-note content="Founder & CEO at Notion Power-Up" />
                    <x-atoms.body-note content="Başkalarının hayallerini gerçekleştirmek yerine artık kendi hayallerinin peşinde koşup, kendi değerinin farkına varmak, yapabileceklerini görmek ve senin gibi düşünen insanlarla üretmek için motivasyon dolu bir ortam." />
                </div>
            </div>
            <div class="space-y-5 md:space-y-7.5">
                <figure>
                    <img loading="lazy" src="img/FatihGuner.png" alt="Fatih Güner" class="object-cover rounded-lg w-full lg:h-92">
                </figure>
                <div class="space-y-2.5">
                    <div class="flex flex-col gap-y-3.5 lg:gap-y-0 lg:flex-row lg:items-center gap-x-5">
                        <x-atoms.lead-regular content="Eren Dik" class="font-bold" />
                        <div class="flex items-center gap-x-1">
                            <figure>
                                <x-svgs.star class="text-neptune w-5 h-5 lg:w-6 lg:h-6"></x-svgs.star>
                            </figure>
                            <figure>
                                <x-svgs.star class="text-neptune w-5 h-5 lg:w-6 lg:h-6"></x-svgs.star>
                            </figure>
                            <figure>
                                <x-svgs.star class="text-neptune w-5 h-5 lg:w-6 lg:h-6"></x-svgs.star>
                            </figure>
                            <figure>
                                <x-svgs.star class="text-neptune w-5 h-5 lg:w-6 lg:h-6"></x-svgs.star>
                            </figure>
                            <figure>
                                <x-svgs.star class="text-neptune w-5 h-5 lg:w-6 lg:h-6"></x-svgs.star>
                            </figure>
                        </div>
                    </div>
                    <x-atoms.body-note content="Founder & CEO at Notion Power-Up" />
                    <x-atoms.body-note content="Başkalarının hayallerini gerçekleştirmek yerine artık kendi hayallerinin peşinde koşup, kendi değerinin farkına varmak, yapabileceklerini görmek ve senin gibi düşünen insanlarla üretmek için motivasyon dolu bir ortam." />
                </div>
            </div>
        </x-atoms.container>
    </section>
    <section class="mb-10 md:mb-15 lg:mb-20">
        <x-atoms.container>
            <div class="px-5 md:px-15 lg:px-25">
                <x-atoms.title-h4 title="Ürün geliştirme yolculuğuna başlayan yaratıcılar öğrenmeye, büyümeye ve sorular sorup cevaplar almaya ihtiyaç duyar. Topluluk öğreniminin avantajlarından faydalanabileceğiniz Circle grubumuza üye olacaksınız." />
            </div>
        </x-atoms.container>
    </section>
    <section class="mb-10 md:mb-15 lg:mb-20">
        <x-atoms.container>
            <div class="bg-white grid gap-y-5 sm:gap-y-7.5 lg:gap-y-0 lg:grid-cols-[21.25rem_auto] xl:md:grid-cols-[23.75rem_auto] items-center lg:gap-x-10 xl:gap-x-18 py-5 px-5 lg:pr-10 rounded-lg">
                <div class="bg-ghost space-y-5 lg:space-y-7.5 p-5 sm:p-7.5 lg:p-10 rounded-lg">
                    <figure>
                        <a href="/" title="Komünite">
                            <x-svgs.logo class="h-8 lg:h-10 xl:h-11.5" />
                        </a>
                    </figure>
                    <x-atoms.title-h2 title="Bir defa yap,
                    hep sat!" class="mb-7.5 lg:mb-10" />
                    <div class="space-y-2.5">
                        <p class="text-lg md:text-1xl">
                            Spesifik bir uzmanlığınız varsa,
                        </p>
                        <p class="text-lg md:text-1xl">
                            Müşterileriniz için dijital ürünler üretiyorsanız,
                        </p>
                        <p class="text-lg md:text-1xl">
                            Kazancın efora bağlı olduğunu biliyorsanız,
                        </p>
                    </div>
                    <x-atoms.body-bold content="Türkiye’nin en yetenekli yaratıcılarının bir araya geldiği Komünite’ye katılın!" />
                </div>
                <div class="space-y-5 lg:space-y-7.5">
                    <div class="space-y-3.5 md:space-y-5">
                        <x-atoms.title-h3 title="Komünite’ye üye olduğunuzda:" />
                        <ul class="list-disc text-lg md:text-1xl space-y-2 ml-7">
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
                        <p class="text-lg md:text-1xl">
                            sahip olursunuz.
                        </p>
                    </div>
                    <x-atoms.button href="https://egitim.komunite.com.tr/enroll/1387007?price_id=1609717" target="_blank" title="Hemen Katılın" class="font-bold text-xl md:text-2xl xl:text-3xl py-3.5 px-7.5 lg:py-5 lg:px-10" />
                    <div class="space-y-3.5 lg:space-y-5">
                        <p class="font-bold text-xxl md:text-2xl lg:text-2.25xl md:leading-snug">
                            Üyelik ücreti yıllık 1000 TL olarak belirlenmiştir.
                        </p>
                        <x-atoms.body-note content="Komünite, sunduğu eğitimler, birlikte çalıştığı uzmanlar, sunduğu topluluk öğrenimi fırsatı, üyelerine sağladığı her türlü içerik ve indirimlerden dolayı sadece yıllık olarak ücretlendirilmektedir." />
                    </div>
                </div>
            </div>
        </x-atoms.container>
    </section>
    <section>
        <x-atoms.container class="space-y-7.5 lg:space-y-10">
            <x-atoms.title-h3 title="Türkiye’nin en yetenekli yaratıcıları bir araya geliyor!" />
            <x-atoms.lead-regular content="Yeni disiplinler öğrenerek kariyerinizi ileriye götürmek, fikirlerinizi hayata geçirip büyütmek ve yaşam boyu arkadaşlar edinmek istiyorsanız Komünite tam size göre." />
            <div class="grid gap-y-7.5 lg:gap-y-0 lg:grid-cols-2 xl:grid-cols-[auto_41.875rem] lg:gap-x-7.5 items-center">
                <p class="text-lg md:text-1xl">
                    Dünyanın dört bir yanında tasarımcılar, eğitmenler, geliştiriciler, müzisyenler ve birçok meslek
                    grubundan profesyoneller “ürünleştirme” yöntemleri ile, eforlarını katma değerli bir şekilde satma
                    yolunu seçiyorlar. Zamanını ürünleştirmeyenler ise, aylık maaşları karşılığında zamanlarını satmaya
                    devam ediyor.
                </p>
                <div class="bg-neptune text-bright p-5 md:p-7.5 rounded-lg">
                    <x-atoms.body-bold content="Türkiye’nin en yetenekli yaratıcıları bir araya gelip, fikirlerini ve kariyerlerini dünya standartlarında bir topluluğun yardımıyla bir adım ileriye götürmeye çalışıyor. Dünyayı değiştirmeye çalışmıyoruz. İnsanların kullanabileceği, faydalanabileceği, okuyabileceği, öğrenebileceği ürünler yapmaya çalışıyoruz." />
                </div>
            </div>
            <p class="text-lg md:text-1xl">
                10 saat çalışıp 10 saatlik gelir elde etmek yerine, 10 saat çalışıp 1.000 saatlik gelir elde etmeyi
                herkes ister, bunun da yolu sürekli eğitim ve topluluk öğreniminden geçiyor. Komünite, size bu konuda
                yardım ediyor.
            </p>
        </x-atoms.container>
    </section>


    <div class="fixed top-0 left-0 w-full h-full flex justify-center items-center before:fixed before:top-0 before:left-0 before:w-full before:h-screen before:bg-almost-black before:opacity-20 before:z-20 before:select-none cursor-pointer hidden js-videoPopup">
        <x-atoms.container class="w-full z-30">
            <iframe class="w-full aspect-video rounded-lg" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </x-atoms.container>
    </div>
</x-templates.base>