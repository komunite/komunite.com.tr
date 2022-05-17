<x-templates.base title="Yatırım Portfolyosu">
    <section className="mb-10 md:mb-15 lg:mb-20">
        <ContainerAtom className="grid justify-between lg:grid-cols-[46rem_auto] gap-y-7.5 lg:gap-y-0 md:gap-x-7.5">
            <div className="space-y-7.5 lg:space-y-10">
                <TitleH1Atom title="Komünite’nin yatırım portfolyosu" />
                <TitleH4Atom title="Katma Değer Fonu, yaratıcı sektörlerde çalışan profesyoneller için bir mikro yatırım fonudur." />
                <div className="flex flex-col items-start gap-y-5 md:gap-y-0 md:flex-row md:gap-x-7.5">
                    <div title="Venture Building” modeli" className="bg-neptune rounded-lg text-center font-bold md:text-xl lg:text-1xl py-2.5 md:py-3 px-4 flex items-center justify-center gap-x-2.5">“Venture Building” modeli
                        <SVGarrow-right className="h-8.5 w-8.5" />
                    </div>
                    <div className="bg-ghost rounded-lg text-center font-bold md:text-xl lg:text-1xl py-2.5 md:py-3 px-4 flex items-center justify-center gap-x-2.5">“Service
                        for Equity” modeli
                        <SVGarrow-right className="h-8.5 w-8.5" />
                    </div>
                </div>
            </div>
            <figure className="justify-self-center lg:justify-self-start">
                <img loading="lazy" src="img/funded-illustration.svg" alt="Funded Image" className="w-full object-cover">
            </figure>
        </ContainerAtom>
    </section>
    <section className="mb-10 md:mb-15 lg:mb-20">
        <ContainerAtom className="space-y-7.5 md:space-y-10 lg:space-y-15">
            <div className="flex flex-col gap-y-3.5 md:gap-y-0 md:flex-row md:gap-x-7.5 md:items-center">
                <TitleH2Atom title="Venture Building" />
                {/*<a href="{{ route('venture-building') }title="Detaylı bilgi" className="md:text-xl lg:text-1xl flex items-center gap-x-1.5 md:hover:gap-x-3 transition-all">Detaylı
                bilgi
                <SVGarrow-right className="h-8" />
                </a> */}
            </div>
            <div className="grid md:grid-cols-2 gap-y-7.5 md:gap-y-10 lg:gap-y-15 md:gap-x-5 lg:gap-x-7.5">
                <div className="flex flex-col">
                    <figure className="bg-white flex items-center justify-center py-12 md:px-13 lg:py-15 lg:px-16 rounded-t-lg">
                        <img loading="lazy" src="img/omnicourse-2.png" alt="Omnicourse" className="object-cover w-64 lg:w-96">
                    </figure>
                    <div className="grow bg-bubble-gum p-5 md:p-7.5 space-y-3.5 md:space-y-5 rounded-b-lg">
                        <div className="flex items-end justify-between">
                            <TitleH4Atom title="Omnicourse, Inc." />
                            <time>Temmuz 2021</time>
                        </div>
                        <p className="md:text-xl lg:text-1xl">
                            Omnicourse, bir mobil sesli öğrenim platformudur. Komünite’nin öncülüğünde İsmail Orhan
                            Postalcıoğlu, Ali Kemal Şerbet ve Muhammed Furkan Yılmaz tarafından kurulmuştur.
                        </p>
                        <div className="space-y-1">
                            <div className="space-x-2.5">
                                <span className="font-bold">Sektör:</span>
                                <span>Audio Learning, Mobile Apps</span>
                            </div>
                            <div className="space-x-2.5">
                                <span className="font-bold">Yatırım tarihi:</span>
                                <time>Kasım 2021</time>
                            </div>
                            <div className="space-x-2.5">
                                <span className="font-bold">Kurucular:</span>
                                <span>İsmail Orhan Postalcıoğlu, Ali Kemal Şerbet, Muhammed Furkan Yılmaz</span>
                            </div>
                        </div>
                        <a href="https://www.omnicourse.io" title="omnicourse.io" target="_blank" className="font-bold flex items-center gap-x-1.5">
                            omnicourse.io
                            <SVGlink className="h-6" />
                        </a>
                    </div>
                </div>
            </div>
        </ContainerAtom>
    </section>
    <section className="mb-10 md:mb-15 lg:mb-20">
        <ContainerAtom className="space-y-7.5 md:space-y-10 lg:space-y-15">
            <div className="flex flex-col gap-y-3.5 md:gap-y-0 md:flex-row md:gap-x-7.5 md:items-center">
                <TitleH2Atom title="Service for Equity" />
                {/*<a href="{{ route('service-for-equity') }title="Detaylı
                bilgi" className="md:text-xl lg:text-1xl flex items-center gap-x-1.5 md:hover:gap-x-3 transition-all">Detaylı
                bilgi
                <SVGarrow-right className="h-8" />
                </a> */}
            </div>
            <div className="grid md:grid-cols-2 gap-y-7.5 md:gap-y-10 lg:gap-y-15 md:gap-x-5 lg:gap-x-7.5">
                <div className="flex flex-col">
                    <figure className="bg-white flex items-center justify-center py-12 md:px-13 lg:py-15 lg:px-16 rounded-t-lg">
                        <SVGupcalled className="h-12 lg:h-18" />
                    </figure>
                    <div className="grow bg-bubble-gum p-5 md:p-7.5 space-y-3.5 md:space-y-5 rounded-b-lg">
                        <div className="flex items-end justify-between">
                            <TitleH4Atom title="Upcalled" />
                            <time>Kasım 2021</time>
                        </div>
                        <p className="md:text-xl lg:text-1xl">
                            Upcalled, gelir ve dönüşüm artırmayı hedefleyen girişimler için anlık video destek altyapısı sunar.
                        </p>
                        <div className="space-y-1">
                            <div className="space-x-2.5">
                                <span className="font-bold">Sektör:</span>
                                <span>Customer Success, Video Streaming, Meeting</span>
                            </div>
                            <div className="space-x-2.5">
                                <span className="font-bold">Yatırım tarihi:</span>
                                <time>Kasım 2021</time>
                            </div>
                            <div className="space-x-2.5">
                                <span className="font-bold">Kurucular:</span>
                                <span>Kadir Furkan Kiraz, Yücel Arda Bayram</span>
                            </div>
                        </div>
                        <a href="https://www.upcalled.com" title="upcalled.com" target="_blank" className="font-bold flex items-center gap-x-1.5">
                            upcalled.com
                            <SVGlink className="h-6" />
                        </a>
                    </div>
                </div>
                <div className="flex flex-col">
                    <figure className="bg-white flex items-center justify-center py-12 md:px-13 lg:py-15 lg:px-16 rounded-t-lg">
                        <img src="img/ecommerce-checklist.svg" alt="E-Commerce Checklist" className="h-12 lg:h-18" />
                    </figure>
                    <div className="grow bg-bubble-gum p-5 md:p-7.5 space-y-3.5 md:space-y-5 rounded-b-lg">
                        <div className="flex items-end justify-between">
                            <TitleH4Atom title="E-Commerce Checklist" />
                            <time>Eylül 2021</time>
                        </div>
                        <p className="md:text-xl lg:text-1xl">
                            E-Commerce Checklist, e-ticaret alanına yeni girecek ve bu alanda bilgi birikimi edinmek isteyenler için hazırlanmış bir bilgi ürünüdür.
                        </p>
                        <div className="space-y-1">
                            <div className="space-x-2.5">
                                <span className="font-bold">Sektör:</span>
                                <span>Notion, E-Commerce, Info Product</span>
                            </div>
                            <div className="space-x-2.5">
                                <span className="font-bold">Yatırım tarihi:</span>
                                <time>Ağustos 2021</time>
                            </div>
                            <div className="space-x-2.5">
                                <span className="font-bold">Yaratıcılar:</span>
                                <span>Umut Sönmez, Yücel Faruk Şahan</span>
                            </div>
                        </div>
                        <a href="https://www.notionecommerce.com/" title="notionecommerce.com" target="_blank" className="font-bold flex items-center gap-x-1.5">
                            notionecommerce.com
                            <SVGlink className="h-6" />
                        </a>
                    </div>
                </div>
                <div className="flex flex-col">
                    <figure className="bg-white flex items-center justify-center py-12 md:px-13 lg:py-15 lg:px-16 rounded-t-lg">
                        <img src="img/ux-notion.svg" alt="UX Notion" className="h-12 lg:h-18" />
                    </figure>
                    <div className="grow bg-bubble-gum p-5 md:p-7.5 space-y-3.5 md:space-y-5 rounded-b-lg">
                        <div className="flex items-end justify-between">
                            <TitleH4Atom title="UX Notion" />
                            <time>Aralık 2021</time>
                        </div>
                        <p className="md:text-xl lg:text-1xl">
                            UX Notion, kullanıcı deneyemi, UX Design gibi tasarım alanlarında bilgi edinmek isteyenler için yüzlerce içerik arasından derlenmiş bir bilgi ürünüdür.
                        </p>
                        <div className="space-y-1">
                            <div className="space-x-2.5">
                                <span className="font-bold">Sektör:</span>
                                <span>Notion, Design, Info Product, UX</span>
                            </div>
                            <div className="space-x-2.5">
                                <span className="font-bold">Yatırım tarihi:</span>
                                <time>Aralık 2021</time>
                            </div>
                            <div className="space-x-2.5">
                                <span className="font-bold">Yaratıcı:</span>
                                <span>Yücel Arda Bayram</span>
                            </div>
                        </div>
                        <a href="https://www.uxnotion.com/" title="uxnotion.com" target="_blank" className="font-bold flex items-center gap-x-1.5">
                            uxnotion.com
                            <SVGlink className="h-6" />
                        </a>
                    </div>
                </div>
                <div className="flex flex-col">
                    <figure className="bg-white flex items-center justify-center py-12 md:px-13 lg:py-15 lg:px-16 rounded-t-lg">
                        <img src="img/podcast-cover-info.png" alt="Podcast Cover Template" className="h-12 lg:h-18" />
                    </figure>
                    <div className="grow bg-bubble-gum p-5 md:p-7.5 space-y-3.5 md:space-y-5 rounded-b-lg">
                        <div className="flex items-end justify-between">
                            <TitleH4Atom title="Podcast Cover Template" />
                            <time>Aralık 2021</time>
                        </div>
                        <p className="md:text-xl lg:text-1xl">
                            Podcast Cover Template, özgün kapak tasarımları arayanpodcast yayıncıları için Figma ve Adobe XD platformlarında hazırlanmış 101 farklı kapak tasarımından oluşan bir tasarım setidir.
                        </p>
                        <div className="space-y-1">
                            <div className="space-x-2.5">
                                <span className="font-bold">Sektör:</span>
                                <span>Figma, Design, Info Product, UX</span>
                            </div>
                            <div className="space-x-2.5">
                                <span className="font-bold">Yatırım tarihi:</span>
                                <time>Aralık 2021</time>
                            </div>
                            <div className="space-x-2.5">
                                <span className="font-bold">Yaratıcı:</span>
                                <span>Muhammet Çalış</span>
                            </div>
                        </div>
                        <a href="https://podcastcover.info/" title="podcastcover.info" target="_blank" className="font-bold flex items-center gap-x-1.5">
                            podcastcover.info
                            <SVGlink className="h-6" />
                        </a>
                    </div>
                </div>
                <div className="flex flex-col">
                    <figure className="bg-white flex items-center justify-center py-12 md:px-13 lg:py-15 lg:px-16 rounded-t-lg">
                        <img src="img/startup-recipes.svg" alt="Startup Recipes" className="h-12 lg:h-18" />
                    </figure>
                    <div className="grow bg-bubble-gum p-5 md:p-7.5 space-y-3.5 md:space-y-5 rounded-b-lg">
                        <div className="flex items-end justify-between">
                            <TitleH4Atom title="Startup Recipes" />
                            <time>Aralık 2021</time>
                        </div>
                        <p className="md:text-xl lg:text-1xl">
                            Startup Recipes, internet girişimi kurmak isteyen girişimcilere no-code araçları ile MVP tarifleri sunan bir bilgi ürünüdür.
                        </p>
                        <div className="space-y-1">
                            <div className="space-x-2.5">
                                <span className="font-bold">Sektör:</span>
                                <span>Notion, Info Product</span>
                            </div>
                            <div className="space-x-2.5">
                                <span className="font-bold">Yatırım tarihi:</span>
                                <time>Ocak 2022</time>
                            </div>
                            <div className="space-x-2.5">
                                <span className="font-bold">Yaratıcılar:</span>
                                <span>Umut Sönmez, Yücel Faruk Şahan</span>
                            </div>
                        </div>
                        <a href="https://productrecipes.com/" title="productrecipes.com" target="_blank" className="font-bold flex items-center gap-x-1.5">
                            productrecipes.com
                            <SVGlink className="h-6" />
                        </a>
                    </div>
                </div>
                <div className="flex flex-col">
                    <figure className="bg-white flex items-center justify-center py-12 md:px-13 lg:py-15 lg:px-16 rounded-t-lg">
                        <SVGBrandingKit className="h-8 lg:h-18" />
                    </figure>
                    <div className="grow bg-bubble-gum p-5 md:p-7.5 space-y-3.5 md:space-y-5 rounded-b-lg">
                        <div className="flex items-end justify-between">
                            <TitleH4Atom title="Branding Kit" />
                            <time>Aralık 2021</time>
                        </div>
                        <p className="md:text-xl lg:text-1xl">
                            Branding Kit, yeni bir marka yaratmak isteyenler için marka yaratma yol haritası sunan ve markaşalma konusunda uzmanlaşmak isteyenler için hazırlanmış bir bilgi ürünüdür.
                        </p>
                        <div className="space-y-1">
                            <div className="space-x-2.5">
                                <span className="font-bold">Sektör:</span>
                                <span>Notion, Branding</span>
                            </div>
                            <div className="space-x-2.5">
                                <span className="font-bold">Yatırım tarihi:</span>
                                <time>Ocak 2022</time>
                            </div>
                            <div className="space-x-2.5">
                                <span className="font-bold">Yaratıcı:</span>
                                <span>Fatih Güner</span>
                            </div>
                        </div>
                        <a href="https://notionbrandingkit.com/" title="notionbrandingkit.com" target="_blank" className="font-bold flex items-center gap-x-1.5">
                            notionbrandingkit.com
                            <SVGlink className="h-6" />
                        </a>
                    </div>
                </div>
                <div className="flex flex-col">
                    <figure className="bg-white flex items-center justify-center py-12 md:px-13 lg:py-15 lg:px-16 rounded-t-lg">
                        <img src="img/currency-icons.svg" alt="Currency Icons" className="h-12 lg:h-18" />
                    </figure>
                    <div className="grow bg-bubble-gum p-5 md:p-7.5 space-y-3.5 md:space-y-5 rounded-b-lg">
                        <div className="flex items-end justify-between">
                            <TitleH4Atom title="Currency Icons" />
                            <time>Şubat 2022</time>
                        </div>
                        <p className="md:text-xl lg:text-1xl">
                            Currency Icons 8700’den fazla varyasyonda kripto ve fiat para ikonunun vektörel olarak çıktı alınmasına imkan veren bir Figma ürünüdür.
                        </p>
                        <div className="space-y-1">
                            <div className="space-x-2.5">
                                <span className="font-bold">Sektör:</span>
                                <span>Figma, Design</span>
                            </div>
                            <div className="space-x-2.5">
                                <span className="font-bold">Yatırım tarihi:</span>
                                <time>Ağustos 2021</time>
                            </div>
                            <div className="space-x-2.5">
                                <span className="font-bold">Yaratıcı:</span>
                                <span>M. Enes Erdoğan</span>
                            </div>
                        </div>
                        <a href="https://currencyicons.com/" title="currencyicons.com" target="_blank" className="font-bold flex items-center gap-x-1.5">
                            currencyicons.com
                            <SVGlink className="h-6" />
                        </a>
                    </div>
                </div>
                <div className="flex flex-col">
                    <figure className="bg-white flex items-center justify-center py-12 md:px-13 lg:py-15 lg:px-16 rounded-t-lg">
                        <SVGkarma className="h-8 lg:h-18" />
                    </figure>
                    <div className="grow bg-bubble-gum p-5 md:p-7.5 space-y-3.5 md:space-y-5 rounded-b-lg">
                        <div className="flex items-end justify-between">
                            <TitleH4Atom title="Karma Wireframe Kit" />
                            <time>Mart 2022</time>
                        </div>
                        <p className="md:text-xl lg:text-1xl">
                            Karma Wireframe Kit, 900 farklı bloktan oluşan, açık ve koyu versiyonları ile birlikte Figma formatında geliştirilmiş bir web wireframe kiti ürünüdür.
                        </p>
                        <div className="space-y-1">
                            <div className="space-x-2.5">
                                <span className="font-bold">Sektör:</span>
                                <span>Figma, Design</span>
                            </div>
                            <div className="space-x-2.5">
                                <span className="font-bold">Yatırım tarihi:</span>
                                <time>Aralık 2021</time>
                            </div>
                            <div className="space-x-2.5">
                                <span className="font-bold">Yaratıcı:</span>
                                <span>Burcu Doyran</span>
                            </div>
                        </div>
                        <a href="https://karma.design/" title="karma.design" target="_blank" className="font-bold flex items-center gap-x-1.5">
                            karma.design
                            <SVGlink className="h-6" />
                        </a>
                    </div>
                </div>
                <div className="flex flex-col">
                    <figure className="bg-white flex items-center justify-center py-12 md:px-13 lg:py-15 lg:px-16 rounded-t-lg">
                        <SVGAmbient className="h-8 lg:h-18" />
                    </figure>
                    <div className="grow bg-bubble-gum p-5 md:p-7.5 space-y-3.5 md:space-y-5 rounded-b-lg">
                        <div className="flex items-end justify-between">
                            <TitleH4Atom title="Ambient Design" />
                            <time>Mart 2022</time>
                        </div>
                        <p className="md:text-xl lg:text-1xl">
                            Ambient Design, Figma ile tasarlanan mobil arayüz tasarımlarının yer aldığı ve her ay iki yeni ürünün eklendiği bir platform.
                        </p>
                        <div className="space-y-1">
                            <div className="space-x-2.5">
                                <span className="font-bold">Sektör:</span>
                                <span>Figma, Design</span>
                            </div>
                            <div className="space-x-2.5">
                                <span className="font-bold">Yatırım tarihi:</span>
                                <time>Eylül 2021</time>
                            </div>
                            <div className="space-x-2.5">
                                <span className="font-bold">Yaratıcı:</span>
                                <span>Ali Çorak</span>
                            </div>
                        </div>
                        <a href="https://ambient.design/" title="ambient.design" target="_blank" className="font-bold flex items-center gap-x-1.5">
                            ambient.design
                            <SVGlink className="h-6" />
                        </a>
                    </div>
                </div>
                <div className="flex flex-col">
                    <figure className="bg-white flex items-center justify-center py-12 md:px-13 lg:py-15 lg:px-16 rounded-t-lg">
                        <img src="img/airtable-tools.svg" alt="Currency Icons" className="h-12 lg:h-18" />
                    </figure>
                    <div className="grow bg-bubble-gum p-5 md:p-7.5 space-y-3.5 md:space-y-5 rounded-b-lg">
                        <div className="flex items-end justify-between">
                            <TitleH4Atom title="Airtable Tools" />
                            <time>Mart 2022</time>
                        </div>
                        <p className="md:text-xl lg:text-1xl">
                            Ambient Design, Figma ile tasarlanan mobil arayüz tasarımlarının yer aldığı ve her ay iki yeni ürünün eklendiği bir platform.
                        </p>
                        <div className="space-y-1">
                            <div className="space-x-2.5">
                                <span className="font-bold">Sektör:</span>
                                <span>Figma, Design</span>
                            </div>
                            <div className="space-x-2.5">
                                <span className="font-bold">Yatırım tarihi:</span>
                                <time>Aralık 2021</time>
                            </div>
                            <div className="space-x-2.5">
                                <span className="font-bold">Yaratıcı:</span>
                                <span>Ferit Tenöz</span>
                            </div>
                        </div>
                        <a href="https://airtabletools.com/" title="airtabletools.com" target="_blank" className="font-bold flex items-center gap-x-1.5">
                            airtabletools.com
                            <SVGlink className="h-6" />
                        </a>
                    </div>
                </div>
                <div className="flex flex-col">
                    <div className="grow bg-bubble-gum p-5 md:p-7.5 space-y-3.5 md:space-y-5 rounded-lg">
                        <div className="flex items-end justify-between">
                            <TitleH4Atom title="The Shakespeare Method" />
                            <time>Yakında!</time>
                        </div>
                        <p className="md:text-xl lg:text-1xl">
                            Türev içerikleri tüm detayları ile anlatan The Shakespeare Method türev içerik üretmek isteyenler için hazırlanmış bir e-kitap.
                        </p>
                        <div className="space-y-1">
                            <div className="space-x-2.5">
                                <span className="font-bold">Sektör:</span>
                                <span>Eğitim, E-book</span>
                            </div>
                            <div className="space-x-2.5">
                                <span className="font-bold">Yatırım tarihi:</span>
                                <time>Eylül 2021</time>
                            </div>
                            <div className="space-x-2.5">
                                <span className="font-bold">Yaratıcı:</span>
                                <span>İsmail Orhan Postalcıoğlu</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div className="flex flex-col">
                    <div className="grow bg-bubble-gum p-5 md:p-7.5 space-y-3.5 md:space-y-5 rounded-lg">
                        <div className="flex items-end justify-between">
                            <TitleH4Atom title="Landing Stack" />
                            <time>Yakında!</time>
                        </div>
                        <p className="md:text-xl lg:text-1xl">
                            Elementor ve Webflow altyapısı ile ayrı ayrı kodlanmış, 10 farklı landing page taslağı ve 770+ komponentten oluşan landing page taslak seti.
                        </p>
                        <div className="space-y-1">
                            <div className="space-x-2.5">
                                <span className="font-bold">Sektör:</span>
                                <span>Figma, Design</span>
                            </div>
                            <div className="space-x-2.5">
                                <span className="font-bold">Yatırım tarihi:</span>
                                <time>Aralık 2021</time>
                            </div>
                            <div className="space-x-2.5">
                                <span className="font-bold">Yaratıcı:</span>
                                <span>Halil Burak Yılmaz</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div className="flex flex-col">
                    <div className="grow bg-bubble-gum p-5 md:p-7.5 space-y-3.5 md:space-y-5 rounded-lg">
                        <div className="flex items-end justify-between">
                            <TitleH4Atom title="WADesk" />
                            <time>Yakında!</time>
                        </div>
                        <p className="md:text-xl lg:text-1xl">
                            Elementor ve Webflow altyapısı ile ayrı ayrı kodlanmış, 10 farklı landing page taslağı ve 770+ komponentten oluşan landing page taslak seti.
                        </p>
                        <div className="space-y-1">
                            <div className="space-x-2.5">
                                <span className="font-bold">Sektör:</span>
                                <span>Figma, Design</span>
                            </div>
                            <div className="space-x-2.5">
                                <span className="font-bold">Yatırım tarihi:</span>
                                <time>Aralık 2021</time>
                            </div>
                            <div className="space-x-2.5">
                                <span className="font-bold">Yaratıcı:</span>
                                <span>Halil Burak Yılmaz</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div className="flex flex-col">
                    <div className="grow bg-bubble-gum p-5 md:p-7.5 space-y-3.5 md:space-y-5 rounded-lg">
                        <div className="flex items-end justify-between">
                            <TitleH4Atom title="Web UI Kit Store" />
                            <time>Yakında!</time>
                        </div>
                        <p className="md:text-xl lg:text-1xl">
                            Figma ile tasarlanan web arayüz tasarımlarının yer aldığı ve her ay iki yeni ürünün ekleneceği bir platform.
                        </p>
                        <div className="space-y-1">
                            <div className="space-x-2.5">
                                <span className="font-bold">Sektör:</span>
                                <span>Eğitim, E-book</span>
                            </div>
                            <div className="space-x-2.5">
                                <span className="font-bold">Yatırım tarihi:</span>
                                <time>Ocak 2021</time>
                            </div>
                            <div className="space-x-2.5">
                                <span className="font-bold">Yaratıcı:</span>
                                <span>Bilal Duman</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div className="flex flex-col">
                    <div className="grow bg-bubble-gum p-5 md:p-7.5 space-y-3.5 md:space-y-5 rounded-lg">
                        <div className="flex items-end justify-between">
                            <TitleH4Atom title="Notion Powerup" />
                            <time>Yakında!</time>
                        </div>
                        <p className="md:text-xl lg:text-1xl">
                            Ürün geliştirme ve operasyonlarını Notion üzerinde yürüten b2b’ler için Notion altyapısı ile çeşitli fonksiyonlar sunan mikro saas ürünü.</p>
                        <div className="space-y-1">
                            <div className="space-x-2.5">
                                <span className="font-bold">Sektör:</span>
                                <span>notion, micro-saas, ATS</span>
                            </div>
                            <div className="space-x-2.5">
                                <span className="font-bold">Yatırım tarihi:</span>
                                <time>Ocak 2021</time>
                            </div>
                            <div className="space-x-2.5">
                                <span className="font-bold">Yaratıcı:</span>
                                <span>Kadir Furkan Kiraz</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div className="flex flex-col">
                    <div className="grow bg-bubble-gum p-5 md:p-7.5 space-y-3.5 md:space-y-5 rounded-lg">
                        <div className="flex items-end justify-between">
                            <TitleH4Atom title="Parity Hacks" />
                            <time>Yakında!</time>
                        </div>
                        <p className="md:text-xl lg:text-1xl">
                            İnternet üzerinden hizmet, ürün satan girişimler için ülke bazlı satın alma gücü paritesine göre otomatik fiyatlama yapan mikro saas platformu.</p>
                        <div className="space-y-1">
                            <div className="space-x-2.5">
                                <span className="font-bold">Sektör:</span>
                                <span>micro-saas, Finance</span>
                            </div>
                            <div className="space-x-2.5">
                                <span className="font-bold">Yatırım tarihi:</span>
                                <time>2021</time>
                            </div>
                            <div className="space-x-2.5">
                                <span className="font-bold">Yaratıcı:</span>
                                <span>Sertaç Akdoğan, Murat Ermiş</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div className="flex flex-col">
                    <div className="grow bg-bubble-gum p-5 md:p-7.5 space-y-3.5 md:space-y-5 rounded-lg">
                        <div className="flex items-end justify-between">
                            <TitleH4Atom title="UI Notion" />
                            <time>Yakında!</time>
                        </div>
                        <p className="md:text-xl lg:text-1xl">
                            UI Notion, kullanıcı deneyemi, UI Design gibi tasarım alanlarında bilgi edinmek isteyenler için UI vakalar, tasarım presipleri gibi başlıkların derlendiği bir bilgi ürünüdür.</p>
                        <div className="space-y-1">
                            <div className="space-x-2.5">
                                <span className="font-bold">Sektör:</span>
                                <span>Notion, Design, Info Product, UX</span>
                            </div>
                            <div className="space-x-2.5">
                                <span className="font-bold">Yatırım tarihi:</span>
                                <time>Şubat 2021</time>
                            </div>
                            <div className="space-x-2.5">
                                <span className="font-bold">Yaratıcı:</span>
                                <span>Yücel Arda Bayram</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div className="flex flex-col">
                    <div className="grow bg-bubble-gum p-5 md:p-7.5 space-y-3.5 md:space-y-5 rounded-lg">
                        <div className="flex items-end justify-between">
                            <TitleH4Atom title="Survinity" />
                            <time>Yakında!</time>
                        </div>
                        <p className="md:text-xl lg:text-1xl">
                            Üyeleri ile düzenli olarak anket paylaşan topluluk ve şirketler için özel olarak geliştirilen mikro-saas platformu.</p>
                        <div className="space-y-1">
                            <div className="space-x-2.5">
                                <span className="font-bold">Sektör:</span>
                                <span>productivity, mikro-saas</span>
                            </div>
                            <div className="space-x-2.5">
                                <span className="font-bold">Yatırım tarihi:</span>
                                <time>Şubat 2021</time>
                            </div>
                            <div className="space-x-2.5">
                                <span className="font-bold">Yaratıcı:</span>
                                <span>Eren Dik, Fatma Kiraz</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div className="flex flex-col">
                    <div className="grow bg-bubble-gum p-5 md:p-7.5 space-y-3.5 md:space-y-5 rounded-lg">
                        <div className="flex items-end justify-between">
                            <TitleH4Atom title="Karma UI Kit" />
                            <time>Yakında!</time>
                        </div>
                        <p className="md:text-xl lg:text-1xl">
                            Karma UI Kit, web ve mobil sayfalarda kullanımak üzere benzersiz tasarım bloklarından oluşan Figma formatında geliştirilmiş bir web tasarım (UI) kiti ürünüdür.</p>
                        <div className="space-y-1">
                            <div className="space-x-2.5">
                                <span className="font-bold">Sektör:</span>
                                <span> Figma, Design</span>
                            </div>
                            <div className="space-x-2.5">
                                <span className="font-bold">Yatırım tarihi:</span>
                                <time>Nisan 2021</time>
                            </div>
                            <div className="space-x-2.5">
                                <span className="font-bold">Yaratıcı:</span>
                                <span>Burcu Doyran</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </ContainerAtom>
    </section>
    <section className="mb-10 md:mb-15 lg:mb-20">
        <ContainerAtom className="space-y-7.5 md:space-y-10 lg:space-y-15">
            <div className="flex flex-col gap-y-3.5 md:gap-y-0 md:flex-row md:gap-x-7.5 md:items-center">
                <TitleH2Atom title="Topluluk" />
                {/*<a href="#" title="Detaylı bilgi" className="md:text-xl lg:text-1xl flex items-center gap-x-1.5 md:hover:gap-x-3 transition-all">Detaylı
                    bilgi
                    <SVGarrow-right className="h-8" />
                </a> */}
            </div>
            <div className="grid md:grid-cols-2 gap-y-7.5 md:gap-y-10 lg:gap-y-15 md:gap-x-5 lg:gap-x-7.5">
                <div>
                    <figure className="bg-white flex items-center justify-center py-12 md:px-13 lg:py-15 lg:px-16 rounded-t-lg">
                        <SVGtmlab className="h-12 lg:h-18" />
                    </figure>
                    <div className="grow bg-bubble-gum p-5 md:p-7.5 space-y-3.5 md:space-y-5 rounded-b-lg">
                        <div className="flex items-end justify-between">
                            <TitleH4Atom title="tmlab˚" />
                        </div>
                        <p className="md:text-xl lg:text-1xl">
                            tmlab, Nitelikli ve işine tutkulu tasarımcıları bir araya getiren tasarım topluluğu.‍
                        </p>
                        <a href="https://www.tmlab.studio" title="tmlab.studio" target="_blank" className="font-bold flex items-center gap-x-1.5">
                            tmlab.studio
                            <SVGlink className="h-6" />
                        </a>
                    </div>
                </div>
            </div>
        </ContainerAtom>
    </section>
    <section className="mb-10 md:mb-15 lg:mb-20">
        <ContainerAtom className="space-y-5 md:space-y-7.5 lg:space-y-10">
            <TitleH2Atom title="Siz üretin, biz fonlayalım" />
            <TitleH4Atom title="Ürün geliştirme yolculuğuna başlayan yaratıcılar öğrenmeye, büyümeye ve sorular sorup cevaplar almaya ihtiyaç duyar. Topluluk öğreniminin avantajlarından faydalanabileceğiniz Circle grubumuza üye olacaksınız." />
        </ContainerAtom>
    </section>
    <section className="mb-10 md:mb-15 lg:mb-20">
        <ContainerAtom>
            <CheckedItemMolecule title="Siz sadece üretin" desc="Join our community of over 1,000 Founders, Advisors, and Experts to take your startup to the next level." imgSrc="img/build-illustration.svg">
                <div className="space-y-4">
                    <CheckItemAtom desc="Work 1-on-1 with an Expert Komünite Advisor" />
                    <CheckItemAtom desc="Weekly check-ins and milestone development sessions" />
                    <CheckItemAtom desc="Access to daily workshops and office hours with Experts" />
                    <CheckItemAtom desc="On-demand help with everyday tasks from experts" />
                    <CheckItemAtom desc="Membership in a local network of creators" />
                </div>
            </CheckedItemMolecule>
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
    <x-organisms.newsletter />
</x-templates.base>
