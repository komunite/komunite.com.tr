<x-templates.base title="Fonlama">
    <section className="mb-10 md:mb-15 lg:mb-20">
        <ContainerAtom className="grid justify-between lg:grid-cols-[42rem_auto] gap-y-7.5 lg:gap-y-0 md:gap-x-7.5">
            <div className="space-y-7.5 lg:space-y-10">
                <TitleH1Atom title="Melek yatırımlara bambaşka bir bakış: Katma Değer Fonu" />
                <TitleH4Atom title="Katma Değer Fonu, yaratıcı sektörlerde çalışan profesyoneller için bir mikro yatırım fonudur." />
                <ButtonAtom href="https://egitim.komunite.com.tr/enroll/1387007?price_id=1609717" target="_blank" title="Hemen Katılın" className="font-bold text-xl md:text-2xl xl:text-3xl py-3.5 px-7.5 lg:py-5 lg:px-10" />
            </div>
            <figure className="justify-self-center lg:justify-self-start">
                <img loading="lazy" src="img/fund-illustration.svg" alt="Fund Illustration" className="w-full object-cover">
            </figure>
        </ContainerAtom>
    </section>
    <section className="bg-ghost py-5 md:py-7.5 lg:py-10 mb-10 md:mb-15 lg:mb-20">
        <ContainerAtom className="text-center">
            <TitleH4Atom title="Komünite, e-kitap, web şablonları, online eğitim programları gibi her türlü dijital ürünün hayata geçmesini sağlamaya çalışır. Yaratıcı profesyonelleri yatırım fonu, topluluk öğrenimi, eğitimler ve uzmanlara erişim ile beslemeye çalışır.
            " />
        </ContainerAtom>
    </section>
    <section className="mb-10 md:mb-15 lg:mb-20">
        <ContainerAtom>
            <div className="flex flex-col items-center text-center gap-y-7.5 lg:gap-y-10 px-5 md:px-15 lg:px-25">
                <TitleH2Atom title="Tanıtım videosunu izleyin" />
                <iframe className="w-full aspect-video" src="https://www.youtube.com/embed/859jM0pGlkw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </ContainerAtom>
    </section>
    <section className="mb-10 md:mb-15 lg:mb-20">
        <ContainerAtom className="space-y-7.5 md:space-y-10">
            <div className="flex flex-col items-center text-center gap-y-7.5 lg:gap-y-10 sm:px-15 lg:px-25">
                <TitleH2Atom title="Bir defa yap hep sat
                " />
                <TitleH4Atom title="Zamanını satmayı bırak, ürün satmaya başla!
                " />
            </div>
            <div className="grid lg:grid-cols-2 md:gap-x-7.5 gap-y-5 md:gap-y-7.5 sm:px-15 lg:px-25">
                <div className="flex gap-x-3.5 md:gap-x-5">
                    <figure>
                        <SVGExpecting4 className="object-cover text-neptune h-10 md:h-12" />
                    </figure>
                    <BodyBoldAtom content="Fikir aşamasında yatırım" />
                </div>
                <div className="flex gap-x-3.5 md:gap-x-5">
                    <figure>
                        <SVGExpecting4 className="object-cover text-neptune h-10 md:h-12" />
                    </figure>
                    <BodyBoldAtom content="Satılabilir ürün danışmanlığı" />
                </div>
                <div className="flex gap-x-3.5 md:gap-x-5">
                    <figure>
                        <SVGExpecting4 className="object-cover text-neptune h-10 md:h-12" />
                    </figure>
                    <BodyBoldAtom content="Yaratıcı destek paketi (İhtiyaç duyulan dijital ürünlere ücretsiz erişim)" />
                </div>
                <div className="flex gap-x-3.5 md:gap-x-5">
                    <figure>
                        <SVGExpecting4 className="object-cover text-neptune h-10 md:h-12" />
                    </figure>
                    <BodyBoldAtom content="Üretim süreci geliştirme desteği (Süreç planlama ve proje yönetimi)" />
                </div>
                <div className="flex gap-x-3.5 md:gap-x-5">
                    <figure>
                        <SVGExpecting4 className="object-cover text-neptune h-10 md:h-12" />
                    </figure>
                    <BodyBoldAtom content="Tasarım desteği (UI/UX danışmanlığı ve in-residence tasarım çözümleri)" />
                </div>
                <div className="flex gap-x-3.5 md:gap-x-5">
                    <figure>
                        <SVGExpecting4 className="object-cover text-neptune h-10 md:h-12" />
                    </figure>
                    <BodyBoldAtom content="Kodlama desteği (Front-end, back-end ve mobil in-residence geliştirme çözümleri)
                    " />
                </div>
                <div className="flex gap-x-3.5 md:gap-x-5">
                    <figure>
                        <SVGExpecting4 className="object-cover text-neptune h-10 md:h-12" />
                    </figure>
                    <BodyBoldAtom content="Yasal mevzuat danışmanlığı (Şirket kurulumu, sözleşme hazırlanması, muhasebe, v.b. çözümler)" />
                </div>
                <div className="flex gap-x-3.5 md:gap-x-5">
                    <figure>
                        <SVGExpecting4 className="object-cover text-neptune h-10 md:h-12" />
                    </figure>
                    <BodyBoldAtom content="$250 - $4.000 arası yatırım miktarları
                    " />
                </div>
            </div>
        </ContainerAtom>
    </section>
    <section className="mb-10 md:mb-15 lg:mb-20">
        <ContainerAtom>
            <x-organisms.fund-products title="Fonladığımız ürünler" buttonLink="{{ route('funded') }buttonTitle="Portfolyomuz" />
        </ContainerAtom>
    </section>
    <section className="mb-10 md:mb-15 lg:mb-20">
        <ContainerAtom className="space-y-7.5 md:space-y-10 lg:space-y-15">
            <div className="flex flex-col items-center text-center gap-y-3.5 md:gap-y-5">
                <TitleH2Atom title="Dijital ürün fonlama sürecimiz" />
                <TitleH4Atom title="Komünite fonladığı ürünlerden elde ettiği gelirlerin yüzde 70'ini ürünün yaratıcısına, yüzde 30'unu da yeni ürünlerin fonlanması için Katma Değer Fonu’na aktarır." />
            </div>
            <div className="space-y-7.5 md:space-y-10">
                <div className="bg-ghost py-5 md:py-7.5 lg:py-10 px-7.5 md:px-10 lg:px-15 rounded-lg grid text-center md:text-left gap-y-5 md:gap-y-0 md:grid-cols-[auto_auto] md:items-center md:gap-x-15 lg:gap-x-21.5">
                    <figure className="justify-self-center lg:justify-self-start relative before:absolute before:content-['1'] before:-right-10 before:-bottom-5 before:lg:-right-15 before:lg:-bottom-10 before:font-readex before:font-bold before:text-bright before:text-9xl before:lg:text-[200px] z-10 before:-z-10">
                        <img loading="lazy" src="img/fund-illustration-1.png" alt="Image" className="w-36 h-36 lg:w-42.5 lg:h-42.5 object-cover z-1oo">
                    </figure>
                    <div className="space-y-3.5 md:space-y-5">
                        <TitleH3Atom title="Fon başvurusu" />
                        <LeadRegularAtom content="Özgeçmişinize ve uzmanlıklarınıza göre, ortaya koymak istediğiniz dijital ürün tipi ile ilgili yatırım fonu başvurunuzu yaparsınız. Bu ürün tipi e-kitap, online eğitim programı, tasarım şablonu, ikon seti, web şablonu, kodlanmış setler, Figma dosyaları, mikro-SaaS ürünleri ve daha birçok farklı konuda dijital ürün olabilir.
                        " />
                    </div>
                </div>
                <div className="bg-ghost py-5 md:py-7.5 lg:py-10 px-7.5 md:px-10 lg:px-15 rounded-lg grid text-center md:text-left gap-y-5 md:gap-y-0 md:grid-cols-[auto_auto] md:items-center md:gap-x-15 lg:gap-x-21.5">
                    <div className="space-y-3.5 md:space-y-5">
                        <TitleH3Atom title="Hazırlık Dokümanı" />
                        <LeadRegularAtom content="Başvurunuz sonucunda eğer üretmek istediğiniz ürün ile profesyonel uzmanlığınız tutuyorsa, Fon’un size sağlayacağı hazırlık dökümanını doldurmanız ve üretmek istediğiniz dijital ürün ile ilgili tüm detayları sağlamanız gerekmektedir.
                        " />
                    </div>
                    <figure className="justify-self-center lg:justify-self-start relative before:absolute before:content-['2'] before:-left-10 before:-bottom-5 before:lg:-left-15 before:lg:-bottom-10 before:font-readex before:font-bold before:text-bright before:text-9xl before:lg:text-[200px] z-10 before:-z-10">
                        <img loading="lazy" src="img/fund-illustration-2.png" alt="Image" className="w-36 h-36 lg:w-42.5 lg:h-42.5 object-cover z-1oo">
                    </figure>
                </div>
                <div className="bg-ghost py-5 md:py-7.5 lg:py-10 px-7.5 md:px-10 lg:px-15 rounded-lg grid text-center md:text-left gap-y-5 md:gap-y-0 md:grid-cols-[auto_auto] md:items-center md:gap-x-15 lg:gap-x-21.5">
                    <figure className="justify-self-center lg:justify-self-start relative before:absolute before:content-['3'] before:-right-10 before:-bottom-5 before:lg:-right-15 before:lg:-bottom-10 before:font-readex before:font-bold before:text-bright before:text-9xl before:lg:text-[200px] z-10 before:-z-10">
                        <img loading="lazy" src="img/fund-illustration-1.png" alt="Image" className="w-36 h-36 lg:w-42.5 lg:h-42.5 object-cover z-1oo">
                    </figure>
                    <div className="space-y-3.5 md:space-y-5">
                        <TitleH3Atom title="Başvuru Onayı ve Sözleşme" />
                        <LeadRegularAtom content="Hazırlık dökümanınız eksiksiz ise ve başvurunuz kabul edilirse, Katma Değer Fonu’ndan, üretmek istediğiniz ürünle ilgili fon almaya hak kazanırsınız —farklı ürünlere, farklı şekillerde yatırım yapıyoruz. Ürün yatırım sözleşmesini imzaladıktan sonra ürün geliştirme süreci başlar ve yatırım miktarının yarısını ürünün %25’ini bitirdiğinizde, diğer yarısını ise üretim süreciniz bittiğinde hesabınıza yatırırız." />
                    </div>
                </div>
                <div className="bg-ghost py-5 md:py-7.5 lg:py-10 px-7.5 md:px-10 lg:px-15 rounded-lg grid text-center md:text-left gap-y-5 md:gap-y-0 md:grid-cols-[auto_auto] md:items-center md:gap-x-15 lg:gap-x-21.5">
                    <div className="space-y-3.5 md:space-y-5">
                        <TitleH3Atom title="Ürün Geliştirme Süreci" />
                        <LeadRegularAtom content="Komünite ekibi, ürün geliştirme sürecinin başlangıcından lansman tarihine kadar gerçekleşen haftalık durum değerlendirme toplantıları ile ürün geliştirme sürecine dahil olur. Dijital ürün geliştirmenin önündeki en büyük engel olan “ürünü bitirme” adımını aşma konusunda Komünite sizin yanınızda olur." />
                    </div>
                    <figure className="justify-self-center lg:justify-self-start relative before:absolute before:content-['4'] before:-left-10 before:-bottom-5 before:lg:-left-15 before:lg:-bottom-10 before:font-readex before:font-bold before:text-bright before:text-9xl before:lg:text-[200px] z-10 before:-z-10">
                        <img loading="lazy" src="img/fund-illustration-2.png" alt="Image" className="w-36 h-36 lg:w-42.5 lg:h-42.5 object-cover z-1oo">
                    </figure>
                </div>
                <div className="bg-ghost py-5 md:py-7.5 lg:py-10 px-7.5 md:px-10 lg:px-15 rounded-lg grid text-center md:text-left gap-y-5 md:gap-y-0 md:grid-cols-[auto_auto] md:items-center md:gap-x-15 lg:gap-x-21.5">
                    <figure className="justify-self-center lg:justify-self-start relative before:absolute before:content-['5'] before:-right-10 before:-bottom-5 before:lg:-right-15 before:lg:-bottom-10 before:font-readex before:font-bold before:text-bright before:text-9xl before:lg:text-[200px] z-10 before:-z-10">
                        <img loading="lazy" src="img/fund-illustration-1.png" alt="Image" className="w-36 h-36 lg:w-42.5 lg:h-42.5 object-cover z-1oo">
                    </figure>
                    <div className="space-y-3.5 md:space-y-5">
                        <TitleH3Atom title="Satış Süreci" />
                        <LeadRegularAtom content="Katma Değer Fonu, ürününüzü pazar yerlerinde ve içerik platformlarında, Facebook, Google ve Amazon reklamları gibi reklam teknolojilerini kullanarak pazarlar ve satar. Ürün fiyatının belli bir yüzdesini geçmeyecek şekilde planlanan kaldıraçlı reklamları sürekli takip eder ve performans iyileştirmesi yapar. Katma Değer Fonu ürününüz için iniş sayfaları tasarlar, tüm global ödeme altyapılarını kullanır ve satış rakamlarını yükseltmeye çalışır." />
                    </div>
                </div>
                <div className="bg-ghost py-5 md:py-7.5 lg:py-10 px-7.5 md:px-10 lg:px-15 rounded-lg grid text-center md:text-left gap-y-5 md:gap-y-0 md:grid-cols-[auto_auto] md:items-center md:gap-x-15 lg:gap-x-21.5">
                    <div className="space-y-3.5 md:space-y-5">
                        <TitleH3Atom title="Düzenli Ödemeler" />
                        <LeadRegularAtom content="Bundan sonra ise size sadece aylık satış miktarına göre Komünite tarafından hesabınıza yatırılacak olan geliri beklemek kalır. Bu esnada yeni dijital ürünler üretmek size kalmış. Ne kadar fazla dijital ürün üretirseniz, o kadar fazla fon alabilirsiniz." />
                    </div>
                    <figure className="justify-self-center lg:justify-self-start relative before:absolute before:content-['6'] before:-left-10 before:-bottom-5 before:lg:-left-15 before:lg:-bottom-10 before:font-readex before:font-bold before:text-bright before:text-9xl before:lg:text-[200px] z-10 before:-z-10">
                        <img loading="lazy" src="img/fund-illustration-2.png" alt="Image" className="w-36 h-36 lg:w-42.5 lg:h-42.5 object-cover z-1oo">
                    </figure>
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
            <CheckedItemMolecule title="Siz üretin, biz satalım" desc="Katma Değer Fonu, aynen girişim fonlarında olduğu gibi, size ve ürününüze yatırım fonu ile yatırım yapar ve bu sayede zamanınızın karşılığını henüz üretimde iken alırsınız.
            " imgSrc="img/build-illustration.svg">
                <div className="space-y-4">
                    <CheckItemAtom desc="$4.000 dolara kadar yatırım imkanı" />
                    <CheckItemAtom desc="İhtiyaç duyulan dijital ürünlere ücretsiz erişim" />
                    <CheckItemAtom desc="Lansman ve tanıtım destekleri" />
                    <CheckItemAtom desc="Satış ve pazarlama süreçlerinin yürütülmesi" />
                    <CheckItemAtom desc="Komünite uzmanları ile haftalık ilerleme görüşmeleri" />
                    <CheckItemAtom desc="Uzman geri bildirimlerine erkenden erişme imkanı" />
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
</x-templates.base>
