<x-templates.base title="Partnerlerimiz">
    <section class="mb-5 md:mb-7.5 lg:mb-10">
        <x-atoms.container class="flex flex-col gap-y-7.5">
            <x-atoms.title-h1 title="Komünite üyesi olduğunuzda, iş ortaklarımızdan faydalanırsınız" class="text-center self-center" />
            <div class="grid md:grid-cols-2 lg:grid-cols-[auto_25rem]">
                <div class="relative">
                    <input type="text" class="bg-white md:text-lg lg:text-1xl md:placeholder:text-lg lg:md:placeholder:text-1xl placeholder:text-neptune focus-visible:outline-neptune rounded-tl-lg rounded-tr-lg md:rounded-tr-none  md:rounded-bl-lg py-5 pl-20 pr-12 w-full js-partnerSearch" placeholder="Hangi fırsatı arıyorsun?">
                    <button type="button" aria-label="Show categories" class="absolute left-10 top-1/2 tranform -translate-y-1/2">
                        <x-svgs.search class="w-6 text-neptune" />
                    </button>
                </div>
                <div class="relative">
                    <select name="categories" class="bg-white text-neptune md:text-lg lg:text-1xl py-5 px-10 focus-visible:outline-neptune md:rounded-tr-lg rounded-br-lg rounded-bl-lg md:rounded-bl-none border-t  md:border-t-0 md:border-l border-solid border-neptune w-full appearance-none js-partnerCategory">
                        <option value="" selected class="text-neptune md:text-lg lg:text-1xl">Kategoriler</option>
                        <option value="Mükellef">
                            Mükellef
                        </option>
                        <option value="WWF Market">
                            WWF Market
                        </option>
                    </select>
                    <button type="button" aria-label="Show categories" class=" rotate-90 absolute right-4 top-1/2 tranform -translate-y-1/2">
                        <x-svgs.chevron class="w-6 text-neptune" />
                    </button>
                </div>
            </div>
        </x-atoms.container>
    </section>
    <section class="mb-5 md:mb-7.5 lg:mb-10">
        <x-atoms.container class="space-y-5 md:space-y-7.5 lg:space-y-10">
            <x-atoms.title-h2 title="En yeni fırsatlar" />
            <div class="grid md:grid-cols-3 gap-y-5 md:gap-x-5 lg:gap-x-7.5 md:gap-y-7.5 lg:gap-y-10">
                <x-molecules.partners-card name="WWF Market" category="WWF Market" content="Türkiye'nin en kapsamlı şirket kurma platformu" coupon="%20 indirim" note="Hemen şirketinizi Mükellef ile kurun ve tüm finans süreçlerinizi dijital olarak yönetin.">
                    <figure>
                        <x-svgs.mukellef class="h-8 md:h-11 lg:h-15" />
                    </figure>
                </x-molecules.partners-card>
                <x-molecules.partners-card name="Creator Station" content="Türkiye'nin en kapsamlı şirket kurma platformu" coupon="%20 indirim" note="Hemen şirketinizi Mükellef ile kurun ve tüm finans süreçlerinizi dijital olarak yönetin.">
                    <figure>
                        <x-svgs.mukellef class="h-8 md:h-11 lg:h-15" />
                    </figure>
                </x-molecules.partners-card>
                <x-molecules.partners-card name="Mükellef" content="Türkiye'nin en kapsamlı şirket kurma platformu" coupon="%20 indirim" note="Hemen şirketinizi Mükellef ile kurun ve tüm finans süreçlerinizi dijital olarak yönetin.">
                    <figure>
                        <x-svgs.mukellef class="h-8 md:h-11 lg:h-15" />
                    </figure>
                </x-molecules.partners-card>

                <div class="bg-white grid gap-y-5 sm:gap-y-7.5 lg:gap-y-0 lg:grid-cols-[21.25rem_auto] xl:md:grid-cols-[23.75rem_auto] items-center lg:gap-x-10 xl:gap-x-18 py-5 px-5 lg:pr-10 rounded-lg md:col-span-3 js-partnerBanner">
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
                <x-molecules.partners-card name="Mükellef" content="Türkiye'nin en kapsamlı şirket kurma platformu" coupon="%20 indirim" note="Hemen şirketinizi Mükellef ile kurun ve tüm finans süreçlerinizi dijital olarak yönetin.">
                    <figure>
                        <x-svgs.mukellef class="h-8 md:h-11 lg:h-15" />
                    </figure>
                </x-molecules.partners-card>
                <x-molecules.partners-card name="Mükellef" content="Türkiye'nin en kapsamlı şirket kurma platformu" coupon="%20 indirim" note="Hemen şirketinizi Mükellef ile kurun ve tüm finans süreçlerinizi dijital olarak yönetin.">
                    <figure>
                        <x-svgs.mukellef class="h-8 md:h-11 lg:h-15" />
                    </figure>
                </x-molecules.partners-card>
                <x-molecules.partners-card name="Mükellef" content="Türkiye'nin en kapsamlı şirket kurma platformu" coupon="%20 indirim" note="Hemen şirketinizi Mükellef ile kurun ve tüm finans süreçlerinizi dijital olarak yönetin.">
                    <figure>
                        <x-svgs.mukellef class="h-8 md:h-11 lg:h-15" />
                    </figure>
                </x-molecules.partners-card>
                <x-molecules.partners-card name="Mükellef" content="Türkiye'nin en kapsamlı şirket kurma platformu" coupon="%20 indirim" note="Hemen şirketinizi Mükellef ile kurun ve tüm finans süreçlerinizi dijital olarak yönetin.">
                    <figure>
                        <x-svgs.mukellef class="h-8 md:h-11 lg:h-15" />
                    </figure>
                </x-molecules.partners-card>
                <x-molecules.partners-card name="Mükellef" content="Türkiye'nin en kapsamlı şirket kurma platformu" coupon="%20 indirim" note="Hemen şirketinizi Mükellef ile kurun ve tüm finans süreçlerinizi dijital olarak yönetin.">
                    <figure>
                        <x-svgs.mukellef class="h-8 md:h-11 lg:h-15" />
                    </figure>
                </x-molecules.partners-card>
                <x-molecules.partners-card name="Mükellef" content="Türkiye'nin en kapsamlı şirket kurma platformu" coupon="%20 indirim" note="Hemen şirketinizi Mükellef ile kurun ve tüm finans süreçlerinizi dijital olarak yönetin.">
                    <figure>
                        <x-svgs.mukellef class="h-8 md:h-11 lg:h-15" />
                    </figure>
                </x-molecules.partners-card>
                <x-molecules.partners-card name="Mükellef" content="Türkiye'nin en kapsamlı şirket kurma platformu" coupon="%20 indirim" note="Hemen şirketinizi Mükellef ile kurun ve tüm finans süreçlerinizi dijital olarak yönetin.">
                    <figure>
                        <x-svgs.mukellef class="h-8 md:h-11 lg:h-15" />
                    </figure>
                </x-molecules.partners-card>
                <x-molecules.partners-card name="Mükellef" content="Türkiye'nin en kapsamlı şirket kurma platformu" coupon="%20 indirim" note="Hemen şirketinizi Mükellef ile kurun ve tüm finans süreçlerinizi dijital olarak yönetin.">
                    <figure>
                        <x-svgs.mukellef class="h-8 md:h-11 lg:h-15" />
                    </figure>
                </x-molecules.partners-card>
                <x-molecules.partners-card name="Mükellef" content="Türkiye'nin en kapsamlı şirket kurma platformu" coupon="%20 indirim" note="Hemen şirketinizi Mükellef ile kurun ve tüm finans süreçlerinizi dijital olarak yönetin.">
                    <figure>
                        <x-svgs.mukellef class="h-8 md:h-11 lg:h-15" />
                    </figure>
                </x-molecules.partners-card>
                <x-molecules.partners-card name="Mükellef" content="Türkiye'nin en kapsamlı şirket kurma platformu" coupon="%20 indirim" note="Hemen şirketinizi Mükellef ile kurun ve tüm finans süreçlerinizi dijital olarak yönetin.">
                    <figure>
                        <x-svgs.mukellef class="h-8 md:h-11 lg:h-15" />
                    </figure>
                </x-molecules.partners-card>
                <x-molecules.partners-card name="Mükellef" content="Türkiye'nin en kapsamlı şirket kurma platformu" coupon="%20 indirim" note="Hemen şirketinizi Mükellef ile kurun ve tüm finans süreçlerinizi dijital olarak yönetin.">
                    <figure>
                        <x-svgs.mukellef class="h-8 md:h-11 lg:h-15" />
                    </figure>
                </x-molecules.partners-card>
                <x-molecules.partners-card name="Mükellef" content="Türkiye'nin en kapsamlı şirket kurma platformu" coupon="%20 indirim" note="Hemen şirketinizi Mükellef ile kurun ve tüm finans süreçlerinizi dijital olarak yönetin.">
                    <figure>
                        <x-svgs.mukellef class="h-8 md:h-11 lg:h-15" />
                    </figure>
                </x-molecules.partners-card>
                <x-molecules.partners-card name="Mükellef" content="Türkiye'nin en kapsamlı şirket kurma platformu" coupon="%20 indirim" note="Hemen şirketinizi Mükellef ile kurun ve tüm finans süreçlerinizi dijital olarak yönetin.">
                    <figure>
                        <x-svgs.mukellef class="h-8 md:h-11 lg:h-15" />
                    </figure>
                </x-molecules.partners-card>
                <x-molecules.partners-card name="Mükellef" content="Türkiye'nin en kapsamlı şirket kurma platformu" coupon="%20 indirim" note="Hemen şirketinizi Mükellef ile kurun ve tüm finans süreçlerinizi dijital olarak yönetin.">
                    <figure>
                        <x-svgs.mukellef class="h-8 md:h-11 lg:h-15" />
                    </figure>
                </x-molecules.partners-card>
                <x-molecules.partners-card name="Mükellef" content="Türkiye'nin en kapsamlı şirket kurma platformu" coupon="%20 indirim" note="Hemen şirketinizi Mükellef ile kurun ve tüm finans süreçlerinizi dijital olarak yönetin.">
                    <figure>
                        <x-svgs.mukellef class="h-8 md:h-11 lg:h-15" />
                    </figure>
                </x-molecules.partners-card>
            </div>
        </x-atoms.container>
    </section>

    <x-organisms.newsletter />
</x-templates.base>