<x-templates.base title="Yatırım Portfolyosu">
    <section class="mb-10 md:mb-15 lg:mb-20">
        <x-atoms.container class="grid justify-between lg:grid-cols-[46rem_auto] gap-y-7.5 lg:gap-y-0 md:gap-x-7.5">
            <div class="space-y-7.5 lg:space-y-10">
                <x-atoms.title-h1 title="Komünite’nin yatırım portfolyosu" />
                <x-atoms.title-h4 title="Katma Değer Fonu, yaratıcı sektörlerde çalışan profesyoneller için bir mikro yatırım fonudur." />
                <div class="flex flex-col items-start gap-y-5 md:gap-y-0 md:flex-row md:gap-x-7.5">
                    <div title="Venture Building” modeli" class="bg-neptune rounded-lg text-center font-bold md:text-xl lg:text-1xl py-2.5 md:py-3 px-4 flex items-center justify-center gap-x-2.5">“Venture Building” modeli
                        <x-svgs.arrow-right class="h-8.5 w-8.5" />
                    </div>
                    <div class="bg-ghost rounded-lg text-center font-bold md:text-xl lg:text-1xl py-2.5 md:py-3 px-4 flex items-center justify-center gap-x-2.5">“Service
                        for Equity” modeli
                        <x-svgs.arrow-right class="h-8.5 w-8.5" />
                    </div>
                </div>
            </div>
            <figure class="justify-self-center lg:justify-self-start">
                <img loading="lazy" src="img/funded-illustration.svg" alt="Funded Image" class="w-full object-cover">
            </figure>
        </x-atoms.container>
    </section>
    <section class="mb-10 md:mb-15 lg:mb-20">
        <x-atoms.container class="space-y-7.5 md:space-y-10 lg:space-y-15">
            <div class="flex flex-col gap-y-3.5 md:gap-y-0 md:flex-row md:gap-x-7.5 md:items-center">
                <x-atoms.title-h2 title="Venture Building" />
                {{-- <a href="{{ route('venture-building') }}" title="Detaylı bilgi" class="md:text-xl lg:text-1xl flex items-center gap-x-1.5 md:hover:gap-x-3 transition-all">Detaylı
                bilgi
                <x-svgs.arrow-right class="h-8" />
                </a> --}}
            </div>
            <div class="grid md:grid-cols-2 gap-y-7.5 md:gap-y-10 lg:gap-y-15 md:gap-x-5 lg:gap-x-7.5">
                <div class="flex flex-col">
                    <figure class="bg-white flex items-center justify-center py-12 md:px-13 lg:py-15 lg:px-16 rounded-t-lg">
                        <img loading="lazy" src="img/omnicourse-2.png" alt="Omnicourse" class="object-cover w-64 lg:w-96">
                    </figure>
                    <div class="grow bg-bubble-gum p-5 md:p-7.5 space-y-3.5 md:space-y-5 rounded-b-lg">
                        <div class="flex items-end justify-between">
                            <x-atoms.title-h4 title="Omnicourse, Inc." />
                            <time>Temmuz 2021</time>
                        </div>
                        <p class="md:text-xl lg:text-1xl">
                            Omnicourse, bir mobil sesli öğrenim platformudur. Komünite’nin öncülüğünde İsmail Orhan
                            Postalcıoğlu, Ali Kemal Şerbet ve Muhammed Furkan Yılmaz tarafından kurulmuştur.
                        </p>
                        <div class="space-y-1">
                            <div class="space-x-2.5">
                                <span class="font-bold">Sektör:</span>
                                <span>Audio Learning, Mobile Apps</span>
                            </div>
                            <div class="space-x-2.5">
                                <span class="font-bold">Yatırım tarihi:</span>
                                <time>Kasım 2021</time>
                            </div>
                            <div class="space-x-2.5">
                                <span class="font-bold">Kurucular:</span>
                                <span>İsmail Orhan Postalcıoğlu, Ali Kemal Şerbet, Muhammed Furkan Yılmaz</span>
                            </div>
                        </div>
                        <a href="https://www.omnicourse.io" title="omnicourse.io" target="_blank" class="font-bold flex items-center gap-x-1.5">
                            omnicourse.io
                            <x-svgs.link class="h-6" />
                        </a>
                    </div>
                </div>
            </div>
        </x-atoms.container>
    </section>
    <section class="mb-10 md:mb-15 lg:mb-20">
        <x-atoms.container class="space-y-7.5 md:space-y-10 lg:space-y-15">
            <div class="flex flex-col gap-y-3.5 md:gap-y-0 md:flex-row md:gap-x-7.5 md:items-center">
                <x-atoms.title-h2 title="Service for Equity" />
                {{-- <a href="{{ route('service-for-equity') }}" title="Detaylı
                bilgi" class="md:text-xl lg:text-1xl flex items-center gap-x-1.5 md:hover:gap-x-3 transition-all">Detaylı
                bilgi
                <x-svgs.arrow-right class="h-8" />
                </a> --}}
            </div>
            <div class="grid md:grid-cols-2 gap-y-7.5 md:gap-y-10 lg:gap-y-15 md:gap-x-5 lg:gap-x-7.5">
                <div class="flex flex-col">
                    <figure class="bg-white flex items-center justify-center py-12 md:px-13 lg:py-15 lg:px-16 rounded-t-lg">
                        <x-svgs.upcalled class="h-12 lg:h-18" />
                    </figure>
                    <div class="grow bg-bubble-gum p-5 md:p-7.5 space-y-3.5 md:space-y-5 rounded-b-lg">
                        <div class="flex items-end justify-between">
                            <x-atoms.title-h4 title="Upcalled" />
                            <time>Kasım 2021</time>
                        </div>
                        <p class="md:text-xl lg:text-1xl">
                            Upcalled, gelir ve dönüşüm artırmayı hedefleyen girişimler için anlık video destek altyapısı sunar.
                        </p>
                        <div class="space-y-1">
                            <div class="space-x-2.5">
                                <span class="font-bold">Sektör:</span>
                                <span>Customer Success, Video Streaming, Meeting</span>
                            </div>
                            <div class="space-x-2.5">
                                <span class="font-bold">Yatırım tarihi:</span>
                                <time>Kasım 2021</time>
                            </div>
                            <div class="space-x-2.5">
                                <span class="font-bold">Kurucular:</span>
                                <span>Kadir Furkan Kiraz, Yücel Arda Bayram</span>
                            </div>
                        </div>
                        <a href="https://www.upcalled.com" title="upcalled.com" target="_blank" class="font-bold flex items-center gap-x-1.5">
                            upcalled.com
                            <x-svgs.link class="h-6" />
                        </a>
                    </div>
                </div>
                <div class="flex flex-col">
                    <figure class="bg-white flex items-center justify-center py-12 md:px-13 lg:py-15 lg:px-16 rounded-t-lg">
                        <img src="img/ecommerce-checklist.svg" alt="E-Commerce Checklist" class="h-12 lg:h-18" />
                    </figure>
                    <div class="grow bg-bubble-gum p-5 md:p-7.5 space-y-3.5 md:space-y-5 rounded-b-lg">
                        <div class="flex items-end justify-between">
                            <x-atoms.title-h4 title="E-Commerce Checklist" />
                            <time>Eylül 2021</time>
                        </div>
                        <p class="md:text-xl lg:text-1xl">
                            E-Commerce Checklist, e-ticaret alanına yeni girecek ve bu alanda bilgi birikimi edinmek isteyenler için hazırlanmış bir bilgi ürünüdür.
                        </p>
                        <div class="space-y-1">
                            <div class="space-x-2.5">
                                <span class="font-bold">Sektör:</span>
                                <span>Notion, E-Commerce, Info Product</span>
                            </div>
                            <div class="space-x-2.5">
                                <span class="font-bold">Yatırım tarihi:</span>
                                <time>Ağustos 2021</time>
                            </div>
                            <div class="space-x-2.5">
                                <span class="font-bold">Yaratıcılar:</span>
                                <span>Umut Sönmez, Yücel Faruk Şahan</span>
                            </div>
                        </div>
                        <a href="https://www.notionecommerce.com/" title="notionecommerce.com" target="_blank" class="font-bold flex items-center gap-x-1.5">
                            notionecommerce.com
                            <x-svgs.link class="h-6" />
                        </a>
                    </div>
                </div>
                <div class="flex flex-col">
                    <figure class="bg-white flex items-center justify-center py-12 md:px-13 lg:py-15 lg:px-16 rounded-t-lg">
                        <img src="img/ux-notion.svg" alt="UX Notion" class="h-12 lg:h-18" />
                    </figure>
                    <div class="grow bg-bubble-gum p-5 md:p-7.5 space-y-3.5 md:space-y-5 rounded-b-lg">
                        <div class="flex items-end justify-between">
                            <x-atoms.title-h4 title="UX Notion" />
                            <time>Aralık 2021</time>
                        </div>
                        <p class="md:text-xl lg:text-1xl">
                            UX Notion, kullanıcı deneyemi, UX Design gibi tasarım alanlarında bilgi edinmek isteyenler için yüzlerce içerik arasından derlenmiş bir bilgi ürünüdür.
                        </p>
                        <div class="space-y-1">
                            <div class="space-x-2.5">
                                <span class="font-bold">Sektör:</span>
                                <span>Notion, Design, Info Product, UX</span>
                            </div>
                            <div class="space-x-2.5">
                                <span class="font-bold">Yatırım tarihi:</span>
                                <time>Aralık 2021</time>
                            </div>
                            <div class="space-x-2.5">
                                <span class="font-bold">Yaratıcı:</span>
                                <span>Yücel Arda Bayram</span>
                            </div>
                        </div>
                        <a href="https://www.uxnotion.com/" title="uxnotion.com" target="_blank" class="font-bold flex items-center gap-x-1.5">
                            uxnotion.com
                            <x-svgs.link class="h-6" />
                        </a>
                    </div>
                </div>
                <div class="flex flex-col">
                    <figure class="bg-white flex items-center justify-center py-12 md:px-13 lg:py-15 lg:px-16 rounded-t-lg">
                        <img src="img/podcast-cover-info.png" alt="Podcast Cover Template" class="h-12 lg:h-18" />
                    </figure>
                    <div class="grow bg-bubble-gum p-5 md:p-7.5 space-y-3.5 md:space-y-5 rounded-b-lg">
                        <div class="flex items-end justify-between">
                            <x-atoms.title-h4 title="Podcast Cover Template" />
                            <time>Aralık 2021</time>
                        </div>
                        <p class="md:text-xl lg:text-1xl">
                            Podcast Cover Template, özgün kapak tasarımları arayanpodcast yayıncıları için Figma ve Adobe XD platformlarında hazırlanmış 101 farklı kapak tasarımından oluşan bir tasarım setidir.
                        </p>
                        <div class="space-y-1">
                            <div class="space-x-2.5">
                                <span class="font-bold">Sektör:</span>
                                <span>Figma, Design, Info Product, UX</span>
                            </div>
                            <div class="space-x-2.5">
                                <span class="font-bold">Yatırım tarihi:</span>
                                <time>Aralık 2021</time>
                            </div>
                            <div class="space-x-2.5">
                                <span class="font-bold">Yaratıcı:</span>
                                <span>Muhammet Çalış</span>
                            </div>
                        </div>
                        <a href="https://podcastcover.info/" title="podcastcover.info" target="_blank" class="font-bold flex items-center gap-x-1.5">
                            podcastcover.info
                            <x-svgs.link class="h-6" />
                        </a>
                    </div>
                </div>
                <div class="flex flex-col">
                    <figure class="bg-white flex items-center justify-center py-12 md:px-13 lg:py-15 lg:px-16 rounded-t-lg">
                        <img src="img/startup-recipes.svg" alt="Startup Recipes" class="h-12 lg:h-18" />
                    </figure>
                    <div class="grow bg-bubble-gum p-5 md:p-7.5 space-y-3.5 md:space-y-5 rounded-b-lg">
                        <div class="flex items-end justify-between">
                            <x-atoms.title-h4 title="Startup Recipes" />
                            <time>Aralık 2021</time>
                        </div>
                        <p class="md:text-xl lg:text-1xl">
                            Startup Recipes, internet girişimi kurmak isteyen girişimcilere no-code araçları ile MVP tarifleri sunan bir bilgi ürünüdür.
                        </p>
                        <div class="space-y-1">
                            <div class="space-x-2.5">
                                <span class="font-bold">Sektör:</span>
                                <span>Notion, Info Product</span>
                            </div>
                            <div class="space-x-2.5">
                                <span class="font-bold">Yatırım tarihi:</span>
                                <time>Ocak 2022</time>
                            </div>
                            <div class="space-x-2.5">
                                <span class="font-bold">Yaratıcılar:</span>
                                <span>Umut Sönmez, Yücel Faruk Şahan</span>
                            </div>
                        </div>
                        <a href="https://productrecipes.com/" title="productrecipes.com" target="_blank" class="font-bold flex items-center gap-x-1.5">
                            productrecipes.com
                            <x-svgs.link class="h-6" />
                        </a>
                    </div>
                </div>
                <div class="flex flex-col">
                    <figure class="bg-white flex items-center justify-center py-12 md:px-13 lg:py-15 lg:px-16 rounded-t-lg">
                        <x-svgs.branding-kit class="h-8 lg:h-18" />
                    </figure>
                    <div class="grow bg-bubble-gum p-5 md:p-7.5 space-y-3.5 md:space-y-5 rounded-b-lg">
                        <div class="flex items-end justify-between">
                            <x-atoms.title-h4 title="Branding Kit" />
                            <time>Aralık 2021</time>
                        </div>
                        <p class="md:text-xl lg:text-1xl">
                            Branding Kit, yeni bir marka yaratmak isteyenler için marka yaratma yol haritası sunan ve markaşalma konusunda uzmanlaşmak isteyenler için hazırlanmış bir bilgi ürünüdür.
                        </p>
                        <div class="space-y-1">
                            <div class="space-x-2.5">
                                <span class="font-bold">Sektör:</span>
                                <span>Notion, Branding</span>
                            </div>
                            <div class="space-x-2.5">
                                <span class="font-bold">Yatırım tarihi:</span>
                                <time>Ocak 2022</time>
                            </div>
                            <div class="space-x-2.5">
                                <span class="font-bold">Yaratıcı:</span>
                                <span>Fatih Güner</span>
                            </div>
                        </div>
                        <a href="https://notionbrandingkit.com/" title="notionbrandingkit.com" target="_blank" class="font-bold flex items-center gap-x-1.5">
                            notionbrandingkit.com
                            <x-svgs.link class="h-6" />
                        </a>
                    </div>
                </div>
                <div class="flex flex-col">
                    <figure class="bg-white flex items-center justify-center py-12 md:px-13 lg:py-15 lg:px-16 rounded-t-lg">
                        <img src="img/currency-icons.svg" alt="Currency Icons" class="h-12 lg:h-18" />
                    </figure>
                    <div class="grow bg-bubble-gum p-5 md:p-7.5 space-y-3.5 md:space-y-5 rounded-b-lg">
                        <div class="flex items-end justify-between">
                            <x-atoms.title-h4 title="Currency Icons" />
                            <time>Şubat 2022</time>
                        </div>
                        <p class="md:text-xl lg:text-1xl">
                            Currency Icons 8700’den fazla varyasyonda kripto ve fiat para ikonunun vektörel olarak çıktı alınmasına imkan veren bir Figma ürünüdür.
                        </p>
                        <div class="space-y-1">
                            <div class="space-x-2.5">
                                <span class="font-bold">Sektör:</span>
                                <span>Figma, Design</span>
                            </div>
                            <div class="space-x-2.5">
                                <span class="font-bold">Yatırım tarihi:</span>
                                <time>Ağustos 2021</time>
                            </div>
                            <div class="space-x-2.5">
                                <span class="font-bold">Yaratıcı:</span>
                                <span>M. Enes Erdoğan</span>
                            </div>
                        </div>
                        <a href="https://currencyicons.com/" title="currencyicons.com" target="_blank" class="font-bold flex items-center gap-x-1.5">
                            currencyicons.com
                            <x-svgs.link class="h-6" />
                        </a>
                    </div>
                </div>
                <div class="flex flex-col">
                    <figure class="bg-white flex items-center justify-center py-12 md:px-13 lg:py-15 lg:px-16 rounded-t-lg">
                        <x-svgs.karma class="h-8 lg:h-18" />
                    </figure>
                    <div class="grow bg-bubble-gum p-5 md:p-7.5 space-y-3.5 md:space-y-5 rounded-b-lg">
                        <div class="flex items-end justify-between">
                            <x-atoms.title-h4 title="Karma Wireframe Kit" />
                            <time>Mart 2022</time>
                        </div>
                        <p class="md:text-xl lg:text-1xl">
                            Karma Wireframe Kit, 900 farklı bloktan oluşan, açık ve koyu versiyonları ile birlikte Figma formatında geliştirilmiş bir web wireframe kiti ürünüdür.
                        </p>
                        <div class="space-y-1">
                            <div class="space-x-2.5">
                                <span class="font-bold">Sektör:</span>
                                <span>Figma, Design</span>
                            </div>
                            <div class="space-x-2.5">
                                <span class="font-bold">Yatırım tarihi:</span>
                                <time>Aralık 2021</time>
                            </div>
                            <div class="space-x-2.5">
                                <span class="font-bold">Yaratıcı:</span>
                                <span>Burcu Doyran</span>
                            </div>
                        </div>
                        <a href="https://karma.design/" title="karma.design" target="_blank" class="font-bold flex items-center gap-x-1.5">
                            karma.design
                            <x-svgs.link class="h-6" />
                        </a>
                    </div>
                </div>
                <div class="flex flex-col">
                    <figure class="bg-white flex items-center justify-center py-12 md:px-13 lg:py-15 lg:px-16 rounded-t-lg">
                        <x-svgs.ambient class="h-8 lg:h-18" />
                    </figure>
                    <div class="grow bg-bubble-gum p-5 md:p-7.5 space-y-3.5 md:space-y-5 rounded-b-lg">
                        <div class="flex items-end justify-between">
                            <x-atoms.title-h4 title="Ambient Design" />
                            <time>Mart 2022</time>
                        </div>
                        <p class="md:text-xl lg:text-1xl">
                            Ambient Design, Figma ile tasarlanan mobil arayüz tasarımlarının yer aldığı ve her ay iki yeni ürünün eklendiği bir platform.
                        </p>
                        <div class="space-y-1">
                            <div class="space-x-2.5">
                                <span class="font-bold">Sektör:</span>
                                <span>Figma, Design</span>
                            </div>
                            <div class="space-x-2.5">
                                <span class="font-bold">Yatırım tarihi:</span>
                                <time>Eylül 2021</time>
                            </div>
                            <div class="space-x-2.5">
                                <span class="font-bold">Yaratıcı:</span>
                                <span>Ali Çorak</span>
                            </div>
                        </div>
                        <a href="https://ambient.design/" title="ambient.design" target="_blank" class="font-bold flex items-center gap-x-1.5">
                            ambient.design
                            <x-svgs.link class="h-6" />
                        </a>
                    </div>
                </div>
                <div class="flex flex-col">
                    <figure class="bg-white flex items-center justify-center py-12 md:px-13 lg:py-15 lg:px-16 rounded-t-lg">
                        <img src="img/airtable-tools.svg" alt="Currency Icons" class="h-12 lg:h-18" />
                    </figure>
                    <div class="grow bg-bubble-gum p-5 md:p-7.5 space-y-3.5 md:space-y-5 rounded-b-lg">
                        <div class="flex items-end justify-between">
                            <x-atoms.title-h4 title="Airtable Tools" />
                            <time>Mart 2022</time>
                        </div>
                        <p class="md:text-xl lg:text-1xl">
                            Ambient Design, Figma ile tasarlanan mobil arayüz tasarımlarının yer aldığı ve her ay iki yeni ürünün eklendiği bir platform.
                        </p>
                        <div class="space-y-1">
                            <div class="space-x-2.5">
                                <span class="font-bold">Sektör:</span>
                                <span>Figma, Design</span>
                            </div>
                            <div class="space-x-2.5">
                                <span class="font-bold">Yatırım tarihi:</span>
                                <time>Aralık 2021</time>
                            </div>
                            <div class="space-x-2.5">
                                <span class="font-bold">Yaratıcı:</span>
                                <span>Ferit Tenöz</span>
                            </div>
                        </div>
                        <a href="https://airtabletools.com/" title="airtabletools.com" target="_blank" class="font-bold flex items-center gap-x-1.5">
                            airtabletools.com
                            <x-svgs.link class="h-6" />
                        </a>
                    </div>
                </div>
                <div class="flex flex-col">
                    <div class="grow bg-bubble-gum p-5 md:p-7.5 space-y-3.5 md:space-y-5 rounded-lg">
                        <div class="flex items-end justify-between">
                            <x-atoms.title-h4 title="The Shakespeare Method" />
                            <time>Yakında!</time>
                        </div>
                        <p class="md:text-xl lg:text-1xl">
                            Türev içerikleri tüm detayları ile anlatan The Shakespeare Method türev içerik üretmek isteyenler için hazırlanmış bir e-kitap.
                        </p>
                        <div class="space-y-1">
                            <div class="space-x-2.5">
                                <span class="font-bold">Sektör:</span>
                                <span>Eğitim, E-book</span>
                            </div>
                            <div class="space-x-2.5">
                                <span class="font-bold">Yatırım tarihi:</span>
                                <time>Eylül 2021</time>
                            </div>
                            <div class="space-x-2.5">
                                <span class="font-bold">Yaratıcı:</span>
                                <span>İsmail Orhan Postalcıoğlu</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col">
                    <div class="grow bg-bubble-gum p-5 md:p-7.5 space-y-3.5 md:space-y-5 rounded-lg">
                        <div class="flex items-end justify-between">
                            <x-atoms.title-h4 title="Landing Stack" />
                            <time>Yakında!</time>
                        </div>
                        <p class="md:text-xl lg:text-1xl">
                            Elementor ve Webflow altyapısı ile ayrı ayrı kodlanmış, 10 farklı landing page taslağı ve 770+ komponentten oluşan landing page taslak seti.
                        </p>
                        <div class="space-y-1">
                            <div class="space-x-2.5">
                                <span class="font-bold">Sektör:</span>
                                <span>Figma, Design</span>
                            </div>
                            <div class="space-x-2.5">
                                <span class="font-bold">Yatırım tarihi:</span>
                                <time>Aralık 2021</time>
                            </div>
                            <div class="space-x-2.5">
                                <span class="font-bold">Yaratıcı:</span>
                                <span>Halil Burak Yılmaz</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col">
                    <div class="grow bg-bubble-gum p-5 md:p-7.5 space-y-3.5 md:space-y-5 rounded-lg">
                        <div class="flex items-end justify-between">
                            <x-atoms.title-h4 title="WADesk" />
                            <time>Yakında!</time>
                        </div>
                        <p class="md:text-xl lg:text-1xl">
                            Elementor ve Webflow altyapısı ile ayrı ayrı kodlanmış, 10 farklı landing page taslağı ve 770+ komponentten oluşan landing page taslak seti.
                        </p>
                        <div class="space-y-1">
                            <div class="space-x-2.5">
                                <span class="font-bold">Sektör:</span>
                                <span>Figma, Design</span>
                            </div>
                            <div class="space-x-2.5">
                                <span class="font-bold">Yatırım tarihi:</span>
                                <time>Aralık 2021</time>
                            </div>
                            <div class="space-x-2.5">
                                <span class="font-bold">Yaratıcı:</span>
                                <span>Halil Burak Yılmaz</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col">
                    <div class="grow bg-bubble-gum p-5 md:p-7.5 space-y-3.5 md:space-y-5 rounded-lg">
                        <div class="flex items-end justify-between">
                            <x-atoms.title-h4 title="Web UI Kit Store" />
                            <time>Yakında!</time>
                        </div>
                        <p class="md:text-xl lg:text-1xl">
                            Figma ile tasarlanan web arayüz tasarımlarının yer aldığı ve her ay iki yeni ürünün ekleneceği bir platform.
                        </p>
                        <div class="space-y-1">
                            <div class="space-x-2.5">
                                <span class="font-bold">Sektör:</span>
                                <span>Eğitim, E-book</span>
                            </div>
                            <div class="space-x-2.5">
                                <span class="font-bold">Yatırım tarihi:</span>
                                <time>Ocak 2021</time>
                            </div>
                            <div class="space-x-2.5">
                                <span class="font-bold">Yaratıcı:</span>
                                <span>Bilal Duman</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col">
                    <div class="grow bg-bubble-gum p-5 md:p-7.5 space-y-3.5 md:space-y-5 rounded-lg">
                        <div class="flex items-end justify-between">
                            <x-atoms.title-h4 title="Notion Powerup" />
                            <time>Yakında!</time>
                        </div>
                        <p class="md:text-xl lg:text-1xl">
                            Ürün geliştirme ve operasyonlarını Notion üzerinde yürüten b2b’ler için Notion altyapısı ile çeşitli fonksiyonlar sunan mikro saas ürünü.</p>
                        <div class="space-y-1">
                            <div class="space-x-2.5">
                                <span class="font-bold">Sektör:</span>
                                <span>notion, micro-saas, ATS</span>
                            </div>
                            <div class="space-x-2.5">
                                <span class="font-bold">Yatırım tarihi:</span>
                                <time>Ocak 2021</time>
                            </div>
                            <div class="space-x-2.5">
                                <span class="font-bold">Yaratıcı:</span>
                                <span>Kadir Furkan Kiraz</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col">
                    <div class="grow bg-bubble-gum p-5 md:p-7.5 space-y-3.5 md:space-y-5 rounded-lg">
                        <div class="flex items-end justify-between">
                            <x-atoms.title-h4 title="Parity Hacks" />
                            <time>Yakında!</time>
                        </div>
                        <p class="md:text-xl lg:text-1xl">
                            İnternet üzerinden hizmet, ürün satan girişimler için ülke bazlı satın alma gücü paritesine göre otomatik fiyatlama yapan mikro saas platformu.</p>
                        <div class="space-y-1">
                            <div class="space-x-2.5">
                                <span class="font-bold">Sektör:</span>
                                <span>micro-saas, Finance</span>
                            </div>
                            <div class="space-x-2.5">
                                <span class="font-bold">Yatırım tarihi:</span>
                                <time>2021</time>
                            </div>
                            <div class="space-x-2.5">
                                <span class="font-bold">Yaratıcı:</span>
                                <span>Sertaç Akdoğan, Murat Ermiş</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col">
                    <div class="grow bg-bubble-gum p-5 md:p-7.5 space-y-3.5 md:space-y-5 rounded-lg">
                        <div class="flex items-end justify-between">
                            <x-atoms.title-h4 title="UI Notion" />
                            <time>Yakında!</time>
                        </div>
                        <p class="md:text-xl lg:text-1xl">
                            UI Notion, kullanıcı deneyemi, UI Design gibi tasarım alanlarında bilgi edinmek isteyenler için UI vakalar, tasarım presipleri gibi başlıkların derlendiği bir bilgi ürünüdür.</p>
                        <div class="space-y-1">
                            <div class="space-x-2.5">
                                <span class="font-bold">Sektör:</span>
                                <span>Notion, Design, Info Product, UX</span>
                            </div>
                            <div class="space-x-2.5">
                                <span class="font-bold">Yatırım tarihi:</span>
                                <time>Şubat 2021</time>
                            </div>
                            <div class="space-x-2.5">
                                <span class="font-bold">Yaratıcı:</span>
                                <span>Yücel Arda Bayram</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col">
                    <div class="grow bg-bubble-gum p-5 md:p-7.5 space-y-3.5 md:space-y-5 rounded-lg">
                        <div class="flex items-end justify-between">
                            <x-atoms.title-h4 title="Survinity" />
                            <time>Yakında!</time>
                        </div>
                        <p class="md:text-xl lg:text-1xl">
                            Üyeleri ile düzenli olarak anket paylaşan topluluk ve şirketler için özel olarak geliştirilen mikro-saas platformu.</p>
                        <div class="space-y-1">
                            <div class="space-x-2.5">
                                <span class="font-bold">Sektör:</span>
                                <span>productivity, mikro-saas</span>
                            </div>
                            <div class="space-x-2.5">
                                <span class="font-bold">Yatırım tarihi:</span>
                                <time>Şubat 2021</time>
                            </div>
                            <div class="space-x-2.5">
                                <span class="font-bold">Yaratıcı:</span>
                                <span>Eren Dik, Fatma Kiraz</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col">
                    <div class="grow bg-bubble-gum p-5 md:p-7.5 space-y-3.5 md:space-y-5 rounded-lg">
                        <div class="flex items-end justify-between">
                            <x-atoms.title-h4 title="Karma UI Kit" />
                            <time>Yakında!</time>
                        </div>
                        <p class="md:text-xl lg:text-1xl">
                            Karma UI Kit, web ve mobil sayfalarda kullanımak üzere benzersiz tasarım bloklarından oluşan Figma formatında geliştirilmiş bir web tasarım (UI) kiti ürünüdür.</p>
                        <div class="space-y-1">
                            <div class="space-x-2.5">
                                <span class="font-bold">Sektör:</span>
                                <span> Figma, Design</span>
                            </div>
                            <div class="space-x-2.5">
                                <span class="font-bold">Yatırım tarihi:</span>
                                <time>Nisan 2021</time>
                            </div>
                            <div class="space-x-2.5">
                                <span class="font-bold">Yaratıcı:</span>
                                <span>Burcu Doyran</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </x-atoms.container>
    </section>
    <section class="mb-10 md:mb-15 lg:mb-20">
        <x-atoms.container class="space-y-7.5 md:space-y-10 lg:space-y-15">
            <div class="flex flex-col gap-y-3.5 md:gap-y-0 md:flex-row md:gap-x-7.5 md:items-center">
                <x-atoms.title-h2 title="Topluluk" />
                {{-- <a href="#" title="Detaylı bilgi" class="md:text-xl lg:text-1xl flex items-center gap-x-1.5 md:hover:gap-x-3 transition-all">Detaylı
                    bilgi
                    <x-svgs.arrow-right class="h-8" />
                </a> --}}
            </div>
            <div class="grid md:grid-cols-2 gap-y-7.5 md:gap-y-10 lg:gap-y-15 md:gap-x-5 lg:gap-x-7.5">
                <div>
                    <figure class="bg-white flex items-center justify-center py-12 md:px-13 lg:py-15 lg:px-16 rounded-t-lg">
                        <x-svgs.tmlab class="h-12 lg:h-18" />
                    </figure>
                    <div class="grow bg-bubble-gum p-5 md:p-7.5 space-y-3.5 md:space-y-5 rounded-b-lg">
                        <div class="flex items-end justify-between">
                            <x-atoms.title-h4 title="tmlab˚" />
                        </div>
                        <p class="md:text-xl lg:text-1xl">
                            tmlab, Nitelikli ve işine tutkulu tasarımcıları bir araya getiren tasarım topluluğu.‍
                        </p>
                        <a href="https://www.tmlab.studio" title="tmlab.studio" target="_blank" class="font-bold flex items-center gap-x-1.5">
                            tmlab.studio
                            <x-svgs.link class="h-6" />
                        </a>
                    </div>
                </div>
            </div>
        </x-atoms.container>
    </section>
    <section class="mb-10 md:mb-15 lg:mb-20">
        <x-atoms.container class="space-y-5 md:space-y-7.5 lg:space-y-10">
            <x-atoms.title-h2 title="Siz üretin, biz fonlayalım" />
            <x-atoms.title-h4 title="Ürün geliştirme yolculuğuna başlayan yaratıcılar öğrenmeye, büyümeye ve sorular sorup cevaplar almaya ihtiyaç duyar. Topluluk öğreniminin avantajlarından faydalanabileceğiniz Circle grubumuza üye olacaksınız." />
        </x-atoms.container>
    </section>
    <section class="mb-10 md:mb-15 lg:mb-20">
        <x-atoms.container>
            <x-molecules.checked-item title="Siz sadece üretin" desc="Join our community of over 1,000 Founders, Advisors, and Experts to take your startup to the next level." imgSrc="img/build-illustration.svg">
                <div class="space-y-4">
                    <x-atoms.check-item desc="Work 1-on-1 with an Expert Komünite Advisor" />
                    <x-atoms.check-item desc="Weekly check-ins and milestone development sessions" />
                    <x-atoms.check-item desc="Access to daily workshops and office hours with Experts" />
                    <x-atoms.check-item desc="On-demand help with everyday tasks from experts" />
                    <x-atoms.check-item desc="Membership in a local network of creators" />
                </div>
            </x-molecules.checked-item>
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
    <x-organisms.newsletter />
</x-templates.base>