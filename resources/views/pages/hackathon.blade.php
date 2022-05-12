<x-templates.base title="Hackathon">
    <section class="mb-10 md:mb-15 lg:mb-20">
        <x-atoms.container>
            <div class="flex flex-col items-center text-center gap-y-5 md:gap-y-7.5 lg:gap-y-10 px-5 md:px-15 lg:px-25">
                <x-atoms.title-h1 title="Micro-SaaS Hackathon" />
                <x-atoms.title-h2 title="Satılabilir bir micro-SaaS ürününü 48 saatte geliştirmek mümkün mü? Evet!" />
            </div>
        </x-atoms.container>
    </section>
    <section class="mb-10 md:mb-15 lg:mb-20">
        <x-atoms.container class="grid gap-y-7.5 lg:gap-y-0 lg:grid-cols-2 lg:gap-x-7.5">
            <div class="space-y-5 lg:space-y-7.5">
                <x-atoms.title-h3 title="Etkinlik detayları" />
                <div class="flex items-center gap-x-3">
                    <figure>
                        <x-svgs.location class="h-7 md:h-9" />
                    </figure>
                    <div class="flex items-center gap-x-2">
                        <x-atoms.lead-regular content="Yer:" class="font-bold" />
                        <x-atoms.lead-regular content="CreatorStation ― Vadistanbul" />
                    </div>
                </div>
                <div class="flex items-center gap-x-3">
                    <figure>
                        <x-svgs.calendar class="h-7 md:h-9" />
                    </figure>
                    <div class="flex items-center gap-x-2">
                        <x-atoms.lead-regular content="Başlangıç:" class="font-bold" />
                        <time class="text-lg md:text-xxl xl:text-2.25xl xl:leading-snug">28 Ocak 2022, Cuma 20:00</time>
                    </div>
                </div>
                <div class="flex items-center gap-x-3">
                    <figure>
                        <x-svgs.calendar class="h-7 md:h-9" />
                    </figure>
                    <div class="flex items-center gap-x-2">
                        <x-atoms.lead-regular content="Bitiş:" class="font-bold" />
                        <time class="text-lg md:text-xxl xl:text-2.25xl xl:leading-snug">30 Ocak 2022, Pazar 20:00</time>
                    </div>
                </div>
                <div class="flex items-center gap-x-3">
                    <figure>
                        <x-svgs.clock class="h-7 md:h-9" />
                    </figure>
                    <div class="flex items-center gap-x-2">
                        <x-atoms.lead-regular content="Yer:" class="font-bold" />
                        <time class="text-lg md:text-xxl xl:text-2.25xl xl:leading-snug">48 Saat</time>
                    </div>
                </div>
                <div class="flex items-center gap-x-3">
                    <figure>
                        <x-svgs.focus class="h-7 md:h-9" />
                    </figure>
                    <div class="flex items-center gap-x-2">
                        <x-atoms.lead-regular content="Ödül Havuzu:" class="font-bold" />
                        <time class="text-lg md:text-xxl xl:text-2.25xl xl:leading-snug">2.500$</time>
                    </div>
                </div>
                {{-- <x-atoms.button href="#" title="Hackathon'a başvurun" class="font-bold text-xl md:text-2xl xl:text-3xl py-3.5 px-7.5 lg:py-5 lg:px-10" /> --}}
            </div>
            <figure class="justify-self-center lg:justify-self-end">
                <img loading="lazy" src="img/hackathon-illustration.svg" alt="Hackathon Illustration" class="object-cover w-80 lg:w-full">
            </figure>
        </x-atoms.container>
    </section>
    <section class="mb-10 md:mb-15 lg:mb-20">
        <x-atoms.container class="space-y-5 md:space-y-7.5">
            <x-atoms.lead-regular content="Küçük bir müşteri grubu için spesifik bir problemi çözen ve abone modeli ile çalışan dijital ürünlere micro-SaaS denir." />
            <x-atoms.lead-regular content="Bir micro-SaaS ürünü yapmak için geleneksel bir SaaS ürününü alıp küçük bir işletme fikri hâline gelene kadar daraltabilirsiniz." />
            <x-atoms.lead-regular content="28 Ocak Cuma akşamı 20:00 itibariyle başlayacak Micro-SaaS Hackathon, CreatorStation’ın Vadistanbul ofisinde fiziksel olarak gerçekleşecek ve kapasite nedeni 20 kişinin katılımı ile sınırlı olacak. Birincinin Katma Değer Fonundan $1,500 yatırım alacağı Hackathon’da iki gün boyunca canlı yayın yapılacak." />
            <x-atoms.lead-regular content="Hackathon başvuranları arasından seçilecek 10 yazılımcı ve 10 tasarımcı kura yöntemi ile hackathon başlangıcında eşleştirilecek. Bir yazılımcı ve bir tasarımcıdan oluşan iki kişilik ekiplerin 48 saatte micro-SaaS ürünler geliştirmesi beklenecek." />
            {{-- <x-atoms.button href="#" title="Hackathon'a başvurun" class="font-bold text-xl md:text-2xl xl:text-3xl py-3.5 px-7.5 lg:py-5 lg:px-10" /> --}}
        </x-atoms.container>
    </section>
    <section class="mb-10 md:mb-15 lg:mb-20">
        <x-atoms.container class="space-y-7.5 md:space-y-10 lg:space-y-15">
            <div class="space-y-5 md:space-y-7.5 lg:space-y-10">
                <x-atoms.title-h3 title="Sponsorlar" />
                <div class="grid md:grid-cols-3 items-center gap-7.5 md:gap-10">
                    <figure class="justify-self-start">
                        <img loading="lazy" src="img/yemeksepeti.png" alt="Yemeksepeti" class="object-contain h-8 md:h-10 lg:h-15">
                    </figure>
                    <figure class="justify-self-start md:justify-self-center">
                        <x-svgs.mukellef class="h-8 md:h-10 lg:h-15 w-full" />
                    </figure>
                    <figure class="justify-self-start md:justify-self-end">
                        <x-svgs.creatorstation class="h-6 md:h-8 lg:h-10 w-full" />
                    </figure>
                </div>
            </div>
            <div class="space-y-5 md:space-y-7.5 lg:space-y-10">
                <div class="flex flex-col gap-y-5 md:gap-y-0 md:flex-row md:items-center md:gap-x-20">
                    <x-atoms.title-h3 title="Medya Sponsoru:" />
                    <x-atoms.title-h3 title="Destekçiler" />
                </div>
                <div class="grid md:grid-cols-3 items-center gap-7.5 md:gap-10">
                    <figure class="justify-self-start">
                        <x-svgs.swipeline class="h-7 md:h-9 lg:h-13 w-full" />
                    </figure>
                    <figure class="justify-self-start md:justify-self-center">
                        <img loading="lazy" src="img/helo.png" alt="Helo" class="object-contain h-8 md:h-10 lg:h-15">
                    </figure>
                    <figure class="justify-self-start md:justify-self-end">
                        <img loading="lazy" src="img/cloud-serverless.png" alt="Cloud Serverless" class="object-contain h-8 md:h-10 lg:h-24">
                    </figure>
                </div>
            </div>
        </x-atoms.container>
    </section>
    <section class="mb-10 md:mb-15 lg:mb-20">
        <x-atoms.container class="grid gap-y-7.5 md:gap-y-10 lg:gap-y-0 lg:grid-cols-[auto_41.875rem] lg:gap-x-25">
            <figure class="justify-self-center">
                <img loading="lazy" src="img/hackathon-illustration-2.svg" alt="Illustration" class="w-80 lg:w-full object-cover">
            </figure>
            <div class="space-y-5 md:space-y-7.5 lg:space-y-10">
                <x-atoms.title-h3 title="Katılım Şartları" />
                <ul class="list-disc text-lg md:text-xl lg:text-xxl space-y-2 ml-7">
                    <li>
                        Komünite.com.tr üyesi olmak,
                    </li>
                    <li>
                        Üyelik sonrası Komünite ekibi ile yapılan “Yaratıcı Koçluğu” görüşmesine katılmış olmak,
                    </li>
                    <li>
                        28 Ocak tarihinden 14 gün önce düzenlenmiş 2 doz Covid-19 Aşı sertifikasına sahip olmak,
                    </li>
                    <li>
                        Aşısız olan tüm üyelerinin 28 Ocak tarihinden önce en fazla 24 saat içinde yapılmış negatif PCR testini ibraz etmesi gerekmektedir,
                    </li>
                    <li>
                        Micro-SaaS Hackathon süresi boyunca sosyal mesafeye dikkat etmek ve kapalı alanlarda maske ya da siperlik takma zorunluluğunu kabul etmek,
                    </li>
                    <li>
                        28 – 30 Ocak tarihlerinde Vadistanbul’da yer alan CreatorStation’da en az 36 saat bulunabilecek olmak,
                    </li>
                    <li>
                        21 Ocak 2022, saat 13:00’a kadar başvuru formunu doldurmuş ve Product Hackathon’a davet edilmiş olmak,
                    </li>
                    <li>
                        Ürün geliştirme için kendi bilgisayarını getirebilecek olmak.
                    </li>
                </ul>
                {{-- <x-atoms.button href="#" title="Hackathon'a başvurun" class="font-bold md:text-xl lg:text-1xl py-3 px-6 md:py-3.5 md:px-7" /> --}}
            </div>
        </x-atoms.container>
    </section>
    <section class="mb-10 md:mb-15 lg:mb-20">
        <x-atoms.container class="space-y-5 md:space-y-7.5 lg:space-y-10">
            <x-atoms.title-h3 title="Kurallar" />
            <x-atoms.lead-regular content="Micro-SaaS Hackathon’a gelen başvurular arasından seçilecek 10 yazılımcı ve 10 tasarımcı üretici kura yöntemi ile hackathon başlangıcında eşleştirilecek. Bir yazılımcı ve bir tasarımcı olmak üzere iki kişilik ekiplere ayrılacak olan toplam 10 ekip, 48 saat micro-SaaS ürünler geliştirecektir." />
            <x-atoms.lead-regular content="Birinci ürüne verilecek $1,500’lık ödülü kazanmak için ekiplerin takip etmesi gereken kurallar şu şekildedir;" />
            <div class="grid gap-y-5 md:gap-y-7.5 lg:gap-y-0 lg:grid-cols-[41.875rem_auto] lg:gap-x-7.5">
                <div class="space-y-5 md:space-y-7.5 lg:space-y-10">
                    <ul class="list-disc text-lg md:text-xl lg:text-xxl space-y-2 ml-7">
                        <li>
                            Vaad edilen değer önerisini karşılayan, en az bir temel özelliği çalışan bir micro-SaaS* ürünün hackathon süresince geliştirilmesi ve en geç 30 Ocak 2022, Pazar günü saat 20.00’de teslim edilmesi gerekmektedir.
                        </li>
                        <li>
                            Üreticinin daha önce aynı ya da benzer bir fikir-ürün üzerinde çalışmamış olması gerekmektedir.
                        </li>
                        <li>
                            Hackathon açılış ve kapanış toplantılarına katılım göstermesi gerekmektedir.
                        </li>
                        <li>
                            48 saat boyunca üzerinde çalışılacak ürünün vaadini/değer önerisini 1 cümlelik açıklaması, 28 Ocak 2022 saat 23:59’a kadar Komünite ekibine bildirmiş olması gerekmektedir.
                        </li>
                        <li>
                            Micro-SaaS Hackathon’a gelen başvurular arasından seçilecek 10 yazılımcı ve 10 tasarımcı kura yöntemi işe hackathon başlangıcında birbirileri ile eşleştirilecektir.
                        </li>
                        <li>
                            Hackathon katılımcılarının yaratıcılardan, sosyal medyadan ve diğer kişilerden tavsiye ve geri bildirim almalarına izin verilecektir.
                        </li>
                        <li>
                            Bir ürün üzerindeki tüm çalışmalar hackathon süresinde yapılmalıdır.
                        </li>
                        <li>
                            Yaratıcılar, süre dolduğunda üretmeyi bırakmalıdır. Ancak, ekiplerin süre dolduktan sonra hata ayıklamalarına ve programlarında küçük düzeltmeler yapmalarına izin verilir. Büyük değişiklikler yapılır veya yeni özellikler eklenir ise değerlendirme dışı kalırlar.
                        </li>
                    </ul>
                    {{-- <x-atoms.button href="#" title="Hackathon'a başvurun" class="font-bold text-xl md:text-2xl xl:text-3xl py-3.5 px-7.5 lg:py-5 lg:px-10" /> --}}
                </div>
                <figure class="justify-self-center lg:justify-self-end">
                    <img loading="lazy" src="img/hackathon-illustration-3-img.svg" alt="Illustration" class="w-80 lg:w-full object-cover">
                </figure>
            </div>
        </x-atoms.container>
    </section>
    <section class="bg-ghost py-7.5 md:py-10 lg:py-15 mb-10 md:mb-15 lg:mb-20">
        <x-atoms.container class="space-y-5 md:space-y-7.5 lg:space-y-10">
            <x-atoms.title-h3 title="Jüri" />
            <x-atoms.lead-regular content="Micro-SaaS Hackathon başvuranları arasından seçilecek 10 yazılımcı ve 10 tasarımcı kura yöntemi ile hackathon başlangıcında eşleştirilecek. Bir yazılımcı ve bir tasarımcıdan oluşan iki kişilik ekiplerin 48 saatte micro-SaaS ürünler geliştirmesi beklenecek." />
            <x-atoms.lead-regular content="Birinciye verilecek $1,500’lık ödülü kazanmak için ekiplerin takip etmesi gereken kurallar şu şekilde;" />
            <div class="grid sm:grid-cols-2 text-center md:text-left md:grid-cols-4 sm:gap-x-5 lg:gap-x-7.5 gap-y-7.5 lg:gap-y-10">
                <div class="space-y-5">
                    <figure>
                        <img loading="lazy" src="img/umut-gokbayrak.png" alt="Umut Gökbayrak" class="object-cover w-1/2 mx-auto sm:w-full sm:mx-0 lg:h-67.5 rounded-lg">
                    </figure>
                    <div class="space-y-1 md:space-y-2.5">
                        <div class="text-lg md:text-xxl xl:text-2.25xl xl:leading-snug">Umut Gökbayrak</div>
                        <div class="text-lg md:text-1xl">
                            Yemeksepeti & Delivery Hero Tech Hub CTO
                        </div>
                    </div>
                </div>
                <div class="space-y-5">
                    <figure>
                        <img loading="lazy" src="img/serhat-can.png" alt="Serhat Can" class="object-cover w-1/2 mx-auto sm:w-full sm:mx-0 lg:h-67.5 rounded-lg">
                    </figure>
                    <div class="space-y-1 md:space-y-2.5">
                        <div class="text-lg md:text-xxl xl:text-2.25xl xl:leading-snug">Serhat Can</div>
                        <div class="text-lg md:text-1xl">
                            CEO & Co-Founder @ Resmo
                        </div>
                    </div>
                </div>
                <div class="space-y-5">
                    <figure>
                        <img loading="lazy" src="img/orhan-bayram.png" alt="Orhan Bayram" class="object-cover w-1/2 mx-auto sm:w-full sm:mx-0 lg:h-67.5 rounded-lg">
                    </figure>
                    <div class="space-y-1 md:space-y-2.5">
                        <div class="text-lg md:text-xxl xl:text-2.25xl xl:leading-snug">Orhan Bayram</div>
                        <div class="text-lg md:text-1xl">
                            CEO & Co-Founder @ helo!
                        </div>
                    </div>
                </div>
                <div class="space-y-5">
                    <figure>
                        <img loading="lazy" src="img/FatihGuner.png" alt="Fatih Güner" class="object-cover w-1/2 mx-auto sm:w-full sm:mx-0 lg:h-67.5 rounded-lg">
                    </figure>
                    <div class="space-y-1 md:space-y-2.5">
                        <div class="text-lg md:text-xxl xl:text-2.25xl xl:leading-snug">Fatih Güner</div>
                        <div class="text-lg md:text-1xl">
                            Komünite’nin Kurucusu
                        </div>
                    </div>
                </div>
            </div>
        </x-atoms.container>
    </section>
    <section class="mb-10 md:mb-15 lg:mb-20">
        <x-atoms.container class="grid gap-y-7.5 md:gap-y-10 lg:gap-y-0 lg:grid-cols-[auto_41.875rem] lg:gap-x-7.5">
            <figure class="justify-self-center">
                <img loading="lazy" src="img/hackathon-illustration-4.svg" alt="Illustration" class="w-80 lg:w-full object-cover">
            </figure>
            <div class="space-y-5 md:space-y-7.5 lg:space-y-10">
                <x-atoms.title-h3 title="Hackathon Tamamlama Kriterleri" />
                <ul class="list-disc text-lg md:text-xl lg:text-xxl space-y-2 ml-7">
                    <li>
                        48. saat itibariyle en az bir fonsiyonu çalışan bir mikro SaaS ürünü geliştirilmesi ve ürünün demosunun yapılmış olması
                    </li>
                    <li>
                        Hackathon başlangıç günü ve saati (28 Ocak 2021, 20:00) öncesinde ürün geliştirmeye başlamamış olmak
                    </li>
                    <li>
                        Micro-SaaS Hackathon’da geliştirilen ürünün sadece ekip üyeleri tarafından geliştirilmiş olması
                    </li>
                    <li>
                        Hazırlanan ürünün herkesle paylaşabilmesi için internet üzerinden erişilebilir olması
                    </li>
                    <li>
                        Ürün adı ve 1 cümlelik tanımının ürün sayfasında web sayfasında yer alması
                    </li>
                    <li>
                        1200 x 675 veya katı ebatında en az 1 adet tanıtım görseli hazırlanması
                    </li>
                    <li>
                        48 saatin sonunda ürünün canlı demosu ile birlikte iş modelini anlatan bir sunum yapılması
                    </li>
                </ul>
                {{-- <x-atoms.button href="#" title="Hackathon'a başvurun" class="font-bold md:text-xl lg:text-1xl py-3 px-6 md:py-3.5 md:px-7" /> --}}
            </div>
        </x-atoms.container>
    </section>
    <section class="mb-10 md:mb-15 lg:mb-20">
        <x-atoms.container class="grid gap-y-7.5 md:gap-y-10 lg:gap-y-0 lg:grid-cols-[41.875rem_auto] lg:gap-x-7.5">
            <div class="space-y-5 md:space-y-7.5 lg:space-y-10">
                <x-atoms.title-h3 title="Seçim Kriterleri" />
                <div class="text-lg md:text-xl lg:text-xxl space-y-3.5 md:space-y-5">
                    <p>
                        Micro-SaaS Hackathon kazananları aşağıda belirtilen kriterlere göre jürinin oyları ile belirlenecek.
                    </p>
                    <div>
                        <p>
                            Gelir Yaratma Potansiyeli: 10/50
                        </p>
                        <p>
                            Geliştirilen ürün gelir yaratabilir mi?
                        </p>
                    </div>
                    <div>
                        <p>
                            Fikrin Orijinalliği – Yenilikçi Yönü: 10/50
                        </p>
                        <p>
                            Geliştirilen ürün ne kadar yenilikçi?
                        </p>
                    </div>
                    <div>
                        <p>
                            İş Tamamlanması Zorluğu: 10/50
                        </p>
                        <p>
                            48 saatte bu ürünü ortaya çıkarmak ne kadar zor?
                        </p>
                    </div>
                    <div>
                        <p>
                            Ürünün Tamamlanması: 10/50
                        </p>
                        <p>
                            Geliştirilen ürün tamamlanmış mı, vaadini yerine getirebiliyor mu?
                        </p>
                    </div>
                    <div>
                        <p>
                            Kullanım Kolaylığı: 10/50
                        </p>
                        <p>
                            Geliştirilen ürün ne kadar kullanıcı dostu?
                        </p>
                    </div>
                </div>
                {{-- <x-atoms.button href="#" title="Hackathon'a başvurun" class="font-bold md:text-xl lg:text-1xl py-3 px-6 md:py-3.5 md:px-7" /> --}}
            </div>
            <figure class="justify-self-center">
                <img loading="lazy" src="img/hackathon-illustration-5.svg" alt="Illustration" class="w-80 lg:w-full object-cover">
            </figure>
        </x-atoms.container>
    </section>
    <section>
        <x-atoms.container class="text-lg md:text-1xl space-y-5 md:space-y-7.5">
            <p>
                **alanadi.com yada alt.alanadi.com şeklinde herhangi bir URL üzerinden ürüne ulaşılması yeterli olacaktır.
            </p>
            <p>
                *micro-SaaS: Minumum kaynak kullanarak hedeflediği niş pazarın bir sorununu çözen hizmet yazılımlarıdır. SaaS (Hizmet olarak yazılım) iş modellerinde olduğu gibi yazılım merkezi olarak tek sunucuda barınır ve abonelik modeli ile lisanslanır. SaaS iş modelleri İsteğe bağlı yazılım olarak da bilinir.
            </p>
            <p>
                *Covid-19 hastalığı geçirmemiş, aşısı bulunmayan ve negatif PCR testi sunmayan katılımcıların Micro-SaaS Hackathon başvuruları kabul edilmeyecektir.
            </p>
        </x-atoms.container>
    </section>
</x-templates.base>