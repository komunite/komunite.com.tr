<x-templates.base title="Partnerlerimiz">
    <section className="mb-5 md:mb-7.5 lg:mb-10">
        <ContainerAtom className="flex flex-col gap-y-7.5">
            <TitleH1Atom title="Komünite üyesi olduğunuzda, iş ortaklarımızdan faydalanırsınız" className="text-center self-center" />
            <div className="grid md:grid-cols-2 lg:grid-cols-[auto_25rem]">
                <div className="relative">
                    <input type="text" className="bg-white md:text-lg lg:text-1xl md:placeholder:text-lg lg:md:placeholder:text-1xl placeholder:text-neptune focus-visible:outline-neptune rounded-tl-lg rounded-tr-lg md:rounded-tr-none  md:rounded-bl-lg py-5 pl-20 pr-12 w-full js-partnerSearch" placeholder="Hangi fırsatı arıyorsun?">
                    <button type="button" aria-label="Show categories" className="absolute left-10 top-1/2 tranform -translate-y-1/2">
                        <SVGsearch className="w-6 text-neptune" />
                    </button>
                </div>
                <div className="relative">
                    <select name="categories" className="bg-white text-neptune md:text-lg lg:text-1xl py-5 px-10 focus-visible:outline-neptune md:rounded-tr-lg rounded-br-lg rounded-bl-lg md:rounded-bl-none border-t  md:border-t-0 md:border-l border-solid border-neptune w-full appearance-none js-partnerCategory">
                        <option value="" selected className="text-neptune md:text-lg lg:text-1xl">Kategoriler</option>
                        <option value="Mükellef">
                            Mükellef
                        </option>
                        <option value="WWF Market">
                            WWF Market
                        </option>
                    </select>
                    <button type="button" aria-label="Show categories" className=" rotate-90 absolute right-4 top-1/2 tranform -translate-y-1/2">
                        <SVGchevron className="w-6 text-neptune" />
                    </button>
                </div>
            </div>
        </ContainerAtom>
    </section>
    <section className="mb-5 md:mb-7.5 lg:mb-10">
        <ContainerAtom className="space-y-5 md:space-y-7.5 lg:space-y-10">
            <TitleH2Atom title="En yeni fırsatlar" />
            <div className="grid md:grid-cols-3 gap-y-5 md:gap-x-5 lg:gap-x-7.5 md:gap-y-7.5 lg:gap-y-10">
                <PartnersCard name="WWF Market" category="WWF Market" content="Türkiye'nin en kapsamlı şirket kurma platformu" coupon="%20 indirim" note="Hemen şirketinizi Mükellef ile kurun ve tüm finans süreçlerinizi dijital olarak yönetin.">
                    <figure>
                        <SVGmukellef className="h-8 md:h-11 lg:h-15" />
                    </figure>
                </PartnersCard>
                <PartnersCard name="Creator Station" content="Türkiye'nin en kapsamlı şirket kurma platformu" coupon="%20 indirim" note="Hemen şirketinizi Mükellef ile kurun ve tüm finans süreçlerinizi dijital olarak yönetin.">
                    <figure>
                        <SVGmukellef className="h-8 md:h-11 lg:h-15" />
                    </figure>
                </PartnersCard>
                <PartnersCard name="Mükellef" content="Türkiye'nin en kapsamlı şirket kurma platformu" coupon="%20 indirim" note="Hemen şirketinizi Mükellef ile kurun ve tüm finans süreçlerinizi dijital olarak yönetin.">
                    <figure>
                        <SVGmukellef className="h-8 md:h-11 lg:h-15" />
                    </figure>
                </PartnersCard>

                <div className="bg-white grid gap-y-5 sm:gap-y-7.5 lg:gap-y-0 lg:grid-cols-[21.25rem_auto] xl:md:grid-cols-[23.75rem_auto] items-center lg:gap-x-10 xl:gap-x-18 py-5 px-5 lg:pr-10 rounded-lg md:col-span-3 js-partnerBanner">
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
                <PartnersCard name="Mükellef" content="Türkiye'nin en kapsamlı şirket kurma platformu" coupon="%20 indirim" note="Hemen şirketinizi Mükellef ile kurun ve tüm finans süreçlerinizi dijital olarak yönetin.">
                    <figure>
                        <SVGmukellef className="h-8 md:h-11 lg:h-15" />
                    </figure>
                </PartnersCard>
                <PartnersCard name="Mükellef" content="Türkiye'nin en kapsamlı şirket kurma platformu" coupon="%20 indirim" note="Hemen şirketinizi Mükellef ile kurun ve tüm finans süreçlerinizi dijital olarak yönetin.">
                    <figure>
                        <SVGmukellef className="h-8 md:h-11 lg:h-15" />
                    </figure>
                </PartnersCard>
                <PartnersCard name="Mükellef" content="Türkiye'nin en kapsamlı şirket kurma platformu" coupon="%20 indirim" note="Hemen şirketinizi Mükellef ile kurun ve tüm finans süreçlerinizi dijital olarak yönetin.">
                    <figure>
                        <SVGmukellef className="h-8 md:h-11 lg:h-15" />
                    </figure>
                </PartnersCard>
                <PartnersCard name="Mükellef" content="Türkiye'nin en kapsamlı şirket kurma platformu" coupon="%20 indirim" note="Hemen şirketinizi Mükellef ile kurun ve tüm finans süreçlerinizi dijital olarak yönetin.">
                    <figure>
                        <SVGmukellef className="h-8 md:h-11 lg:h-15" />
                    </figure>
                </PartnersCard>
                <PartnersCard name="Mükellef" content="Türkiye'nin en kapsamlı şirket kurma platformu" coupon="%20 indirim" note="Hemen şirketinizi Mükellef ile kurun ve tüm finans süreçlerinizi dijital olarak yönetin.">
                    <figure>
                        <SVGmukellef className="h-8 md:h-11 lg:h-15" />
                    </figure>
                </PartnersCard>
                <PartnersCard name="Mükellef" content="Türkiye'nin en kapsamlı şirket kurma platformu" coupon="%20 indirim" note="Hemen şirketinizi Mükellef ile kurun ve tüm finans süreçlerinizi dijital olarak yönetin.">
                    <figure>
                        <SVGmukellef className="h-8 md:h-11 lg:h-15" />
                    </figure>
                </PartnersCard>
                <PartnersCard name="Mükellef" content="Türkiye'nin en kapsamlı şirket kurma platformu" coupon="%20 indirim" note="Hemen şirketinizi Mükellef ile kurun ve tüm finans süreçlerinizi dijital olarak yönetin.">
                    <figure>
                        <SVGmukellef className="h-8 md:h-11 lg:h-15" />
                    </figure>
                </PartnersCard>
                <PartnersCard name="Mükellef" content="Türkiye'nin en kapsamlı şirket kurma platformu" coupon="%20 indirim" note="Hemen şirketinizi Mükellef ile kurun ve tüm finans süreçlerinizi dijital olarak yönetin.">
                    <figure>
                        <SVGmukellef className="h-8 md:h-11 lg:h-15" />
                    </figure>
                </PartnersCard>
                <PartnersCard name="Mükellef" content="Türkiye'nin en kapsamlı şirket kurma platformu" coupon="%20 indirim" note="Hemen şirketinizi Mükellef ile kurun ve tüm finans süreçlerinizi dijital olarak yönetin.">
                    <figure>
                        <SVGmukellef className="h-8 md:h-11 lg:h-15" />
                    </figure>
                </PartnersCard>
                <PartnersCard name="Mükellef" content="Türkiye'nin en kapsamlı şirket kurma platformu" coupon="%20 indirim" note="Hemen şirketinizi Mükellef ile kurun ve tüm finans süreçlerinizi dijital olarak yönetin.">
                    <figure>
                        <SVGmukellef className="h-8 md:h-11 lg:h-15" />
                    </figure>
                </PartnersCard>
                <PartnersCard name="Mükellef" content="Türkiye'nin en kapsamlı şirket kurma platformu" coupon="%20 indirim" note="Hemen şirketinizi Mükellef ile kurun ve tüm finans süreçlerinizi dijital olarak yönetin.">
                    <figure>
                        <SVGmukellef className="h-8 md:h-11 lg:h-15" />
                    </figure>
                </PartnersCard>
                <PartnersCard name="Mükellef" content="Türkiye'nin en kapsamlı şirket kurma platformu" coupon="%20 indirim" note="Hemen şirketinizi Mükellef ile kurun ve tüm finans süreçlerinizi dijital olarak yönetin.">
                    <figure>
                        <SVGmukellef className="h-8 md:h-11 lg:h-15" />
                    </figure>
                </PartnersCard>
                <PartnersCard name="Mükellef" content="Türkiye'nin en kapsamlı şirket kurma platformu" coupon="%20 indirim" note="Hemen şirketinizi Mükellef ile kurun ve tüm finans süreçlerinizi dijital olarak yönetin.">
                    <figure>
                        <SVGmukellef className="h-8 md:h-11 lg:h-15" />
                    </figure>
                </PartnersCard>
                <PartnersCard name="Mükellef" content="Türkiye'nin en kapsamlı şirket kurma platformu" coupon="%20 indirim" note="Hemen şirketinizi Mükellef ile kurun ve tüm finans süreçlerinizi dijital olarak yönetin.">
                    <figure>
                        <SVGmukellef className="h-8 md:h-11 lg:h-15" />
                    </figure>
                </PartnersCard>
                <PartnersCard name="Mükellef" content="Türkiye'nin en kapsamlı şirket kurma platformu" coupon="%20 indirim" note="Hemen şirketinizi Mükellef ile kurun ve tüm finans süreçlerinizi dijital olarak yönetin.">
                    <figure>
                        <SVGmukellef className="h-8 md:h-11 lg:h-15" />
                    </figure>
                </PartnersCard>
            </div>
        </ContainerAtom>
    </section>

    <x-organisms.newsletter />
</x-templates.base>
