<x-templates.base title="Kariyer">
    <section class="mb-7.5 md:mb-10 lg:mb-15">
        <x-atoms.container class="grid justify-between lg:grid-cols-[42rem_auto] gap-y-7.5 lg:gap-y-0 md:gap-x-7.5">
            <div class="space-y-7.5 lg:space-y-10">
                <x-atoms.title-h1 title="Yaratıcı ekonomisinin kalbinde yer almak ister misiniz?" />
                <p class="text-lg md:text-1xl">
                    Değerlerimiz seni heyecanlandırıyorsa, ekibimize katıl!
                </p>
                <x-atoms.button href="{{route('about')}}" title="Komünite Hakkında" class="font-bold text-xl md:text-2xl xl:text-3xl py-3.5 px-7.5 lg:py-5 lg:px-10" />
            </div>
            <figure class="justify-self-center lg:justify-self-start">
                <img loading="lazy" src="img/career-illustration.svg" alt="Career Illustration" class="h-80 lg:h-full w-full object-cover">
            </figure>
        </x-atoms.container>
    </section>
    <section class="mb-7.5 md:mb-10 lg:mb-15">
        <x-atoms.container class="space-y-7.5 md:space-y-10 lg:space-y-15">
            <x-atoms.title-h3 title="Güncel açık pozisyonlar ve kariyer fırsatları" />
            <div class="grid md:grid-cols-2 md:gap-x-7.5 gap-y-10 md:gap-y-15">
                <x-molecules.career-card company="Komünite" location="Türkiye, USA" title="Social Media Manager
                ">
                    <figure>
                        <x-svgs.komunite-square class="h-16 w-16 rounded" />
                    </figure>
                    <x-slot name="slotDesc">
                        <p>
                            Komünite’nin dışa açılan tüm iletişimini yönetecek, sosyal medya stratejisini geliştirecek ve sosyal medya iletişimini yönetecek, operasyonel bir sosyal medya yöneticisi arıyoruz.
                        </p>
                        <x-atoms.button href="{{route('komunite-social-media-manager')}}" title="Başvurun" class="font-bold md:text-xl lg:text-1xl py-3 px-6 md:py-3.5 md:px-7" />
                    </x-slot>
                </x-molecules.career-card>
                <x-molecules.career-card company="Komünite" location="Türkiye, USA" title="Growth Product Manager">
                    <figure>
                        <x-svgs.komunite-square class="h-16 w-16 rounded" />
                    </figure>
                    <x-slot name="slotDesc">
                        <p>
                            Komünite’nin fonladığı ürünlerin büyümesinden sorumlu olacak ve büyüme ekibini yönetecek, operasyonel bir büyüme uzmanı arıyoruz.
                        </p>
                        <x-atoms.button href="{{route('komunite-growth-product-manager')}}" title="Başvurun" class="font-bold md:text-xl lg:text-1xl py-3 px-6 md:py-3.5 md:px-7" />
                    </x-slot>
                </x-molecules.career-card>
                <x-molecules.career-card company="The Bülten" location="Türkiye, USA" title="Editor-at-Large">
                    <figure>
                        <x-svgs.the-bulten-mini class="h-16 w-16 rounded" />
                    </figure>
                    <x-slot name="slotDesc">
                        <p>
                            The Bülten isimli, kuruluş aşamasında olan içerik platformunun liderliğini yapacak ve editoryal dilini belirleyecek olan deneyimli bir editör arıyoruz.
                        </p>
                        <x-atoms.button href="{{route('the-bulten-editor-at-large')}}" title="Başvurun" class="font-bold md:text-xl lg:text-1xl py-3 px-6 md:py-3.5 md:px-7" />
                    </x-slot>
                </x-molecules.career-card>
            </div>
            <div class="text-xxl md:text-2xl lg:text-2.25xl md:leading-snug lg:w-3/4">
                Sayfamızdaki ilanlar, Komünite ve Komünite’nin fonladığı ya da başlattığı şirketler ve dijital ürünleri içerir. Açık pozisyonlara başvururken şirket ismini ya da proje detaylarını lütfen dikkate alın.
            </div>
        </x-atoms.container>
    </section>
    <x-organisms.newsletter />
</x-templates.base>