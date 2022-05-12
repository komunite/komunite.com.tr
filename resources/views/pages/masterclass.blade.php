<x-templates.base title="Masterclass">
    <section class="mb-10 md:mb-15 lg:mb-20">
        <x-atoms.container class="flex flex-col items-center text-center gap-y-7.5 lg:gap-y-10">
            <x-atoms.title-h1 title="Komünite’nin aktif üyeleri için 6 haftalık özel bir program" />
            <x-atoms.title-h4 title="Masterclass ile ilgili dönemdeki en aktif 10 Komünite üyesini 6 haftalık çok özel bir hızlandırma programına alıyoruz. Yaratıcıların kişisel markalarını güçlendirmesi ve global yaratıcı ekonomisine nasıl entegre olacakları konusunda uzmanlardan aktarımlar, geri bildirimler almalarını sağlıyoruz." />
            <p class="text-lg md:text-1xl">
                Her hafta Masterclass üyeleri ile 90 dakikalık özel bir buluşma gerçekleştiriyoruz. Alanında uzman
                kişilerden aktarım almalarını sağlıyor ve topluluk içerisinde sadece Masterclass’ların görebileceği özel
                kanalına alıyoruz.
            </p>
        </x-atoms.container>
    </section>
    <section class="mb-10 md:mb-15 lg:mb-20">
        <x-atoms.container class="flex flex-col gap-y-7.5 lg:gap-y-0">
            <figure>
                <img loading="lazy" src="img/masterclass-image.png" alt="Masterclass Image" class="object-cover rounded-lg">
            </figure>
            <div class="flex flex-col lg:flex-row lg:justify-center gap-y-5 lg:gap-x-7.5 sm:-mt-[14%] sm:px-20 xl:px-25">
                <div class="flex flex-col bg-white space-y-5 lg:space-y-7.5 p-7.5 lg:p-10 rounded-lg">
                    <div class="space-y-5">
                        <div class="font-bold text-lg md:text-xxl xl:text-2.25xl xl:leading-snug">
                            Deneyimli yaratıcılar
                        </div>
                        <p class="text-lg md:text-1xl">
                            Bugün başvurun ve Türkiye’nin en yetenekli bağımsız yaratıcılarından oluşan Komünite’ye
                            katılın.
                        </p>
                    </div>
                    <div class="space-y-5 md:space-y-7.5">
                        <div class="flex gap-x-5">
                            <figure>
                                <x-svgs.check class="h-6 md:h-7.5" />
                            </figure>
                            <div class="space-y-1.5 md:space-y-2.5">
                                <x-atoms.body-bold content="Etkinliklere Katıl
                                " />
                                <x-atoms.body-note content="Yaratıcı ekosistemi ve mikro girişimciliğe dair özel içerik ve konularla oluşturduğumuz etkinliklere katıl, güncel trendleri yakala." />
                            </div>
                        </div>
                        <div class="flex gap-x-5">
                            <figure>
                                <x-svgs.check class="h-6 md:h-7.5" />
                            </figure>
                            <div class="space-y-1.5 md:space-y-2.5">
                                <x-atoms.body-bold content="Katma Değer Fonu’na Başvur
                                " />
                                <x-atoms.body-note content="Yaratıcı sektörlerde çalışan profesyoneller için oluşturduğumuz mikro yatırım fonuna başvur.
                                " />
                            </div>
                        </div>
                        <div class="flex gap-x-5">
                            <figure>
                                <x-svgs.check class="h-6 md:h-7.5" />
                            </figure>
                            <div class="space-y-1.5 md:space-y-2.5">
                                <x-atoms.body-bold content="Bağımsız Geliştirici Ol!" />
                                <x-atoms.body-note content='Yaratıcı sektörlerde bağımsız şekilde kendini gerçekleştir ve ekomonik sürdürülebilirliğini güçlendir.' />
                            </div>
                        </div>
                    </div>
                    <div class="grow flex flex-col gap-y-5 sm:gap-y-0 items-start sm:flex-row sm:items-center gap-x-5">
                        <x-atoms.button href="https://egitim.komunite.com.tr/enroll/1387007?price_id=1609717" target="_blank" title="Hemen Katılın" class="font-bold md:text-xl lg:text-1xl py-2.5 px-5 md:py-3 md:px-6" />
                        <a href="{{route('about')}}" title="Detaylı bilgi" class="font-bold flex items-center gap-x-1 hover:gap-x-2 transition-all">Detaylı bilgi
                            <span>→</span>
                        </a>
                    </div>
                </div>
                <div class="flex flex-col bg-white space-y-5 lg:space-y-7.5 p-7.5 lg:p-10 rounded-lg">
                    <div class="space-y-5">
                        <div class="font-bold text-lg md:text-xxl xl:text-2.25xl xl:leading-snug">
                            Amatör yaratıcılar
                        </div>
                        <p class="text-lg md:text-1xl">
                            Topluluğa katılın ve 1 ay içerisinde yeni hedefler, beceriler kazanın.
                        </p>
                    </div>
                    <div class="space-y-5 md:space-y-7.5">
                        <div class="flex gap-x-5">
                            <figure>
                                <x-svgs.check class="h-6 md:h-7.5" />
                            </figure>
                            <div class="space-y-1.5 md:space-y-2.5">
                                <x-atoms.body-bold content="Mentörlük Al" />
                                <x-atoms.body-note content="Kolektif problem çözme için kariyerlerinin benzer aşamalarında olan diğer kişilerle her hafta çalışmalara katılın" />
                            </div>
                        </div>
                        <div class="flex gap-x-5">
                            <figure>
                                <x-svgs.check class="h-6 md:h-7.5" />
                            </figure>
                            <div class="space-y-1.5 md:space-y-2.5">
                                <x-atoms.body-bold content="Ürününü Geliştir" />
                                <x-atoms.body-note content="Hedeflerin ve hayallerindeki ürünleri geliştirmen için gerekli bilgi ve deneyime komünite desteği ile ulaş." />
                            </div>
                        </div>
                        <div class="flex gap-x-5">
                            <figure>
                                <x-svgs.check class="h-6 md:h-7.5" />
                            </figure>
                            <div class="space-y-1.5 md:space-y-2.5">
                                <x-atoms.body-bold content="Bağımsız Geliştirici Ol!" />
                                <x-atoms.body-note content='Yaratıcı sektörlerde bağımsız şekilde kendini gerçekleştir ve ekonomik sürdürülebilirliğini güçlendir.' />
                            </div>
                        </div>
                    </div>
                    <div class="grow flex flex-col gap-y-5 sm:gap-y-0 items-start sm:flex-row sm:items-center gap-x-5">
                        <x-atoms.button href="https://egitim.komunite.com.tr/enroll/1387007?price_id=1609717" target="_blank" title="Hemen Katılın" class="font-bold md:text-xl lg:text-1xl py-2.5 px-5 md:py-3 md:px-6" />
                        <a href="{{route('about')}}" title="Detaylı bilgi" class="font-bold flex items-center gap-x-1 hover:gap-x-2 transition-all">Detaylı bilgi
                            <span>→</span>
                        </a>
                    </div>
                </div>
            </div>
        </x-atoms.container>
    </section>
    <section class="bg-ghost py-7.5 md:py-10 lg:py-15 mb-10 md:mb-15 lg:mb-20">
        <x-atoms.container class="grid sm:grid-cols-2 md:grid-cols-4 sm:gap-x-5 lg:gap-x-7.5 gap-y-7.5 lg:gap-y-10">
            <div class="space-y-5 lg:space-y-7.5 text-center sm:text-left">
                <figure>
                    <img loading="lazy" src="img/eren-dik.jpeg" alt="Eren Dik" class="object-cover w-1/2 mx-auto sm:w-full sm:mx-0 lg:h-60 rounded-lg">
                </figure>
                <div class="space-y-2.5">
                    <x-atoms.title-h4 title="Eren Dik" />
                    <x-atoms.body-note content="Founder @ Kod-suz" />
                    <blockquote>
                        “Beni Komünite'ye bağlayan şey birbirinden yetenekli ve üretken insanların bir arada olması.
                        Fikir validasyonu mu lazım? Komünite hazır. Beyin fırtınası mı gerekiyor? Komünite hazır. Bir
                        aracın nasıl kullanıldığını mı sormuştunuz? Canlı canlı anlatılır. Hatta, olası eksik kaldığınız
                        bir noktada o işi tamamlanmış bulabilirsiniz. Kısaca, Komünite yaratıcı, yetenekli, zeki,
                        üretken ve samimi bir topluluktur.
                        ”
                    </blockquote>
                    <div class="font-bold">
                        Masterclass 1. Dönem
                    </div>
                </div>
            </div>
            <div class="space-y-5 lg:space-y-7.5 text-center sm:text-left">
                <figure>
                    <img loading="lazy" src="img/seda-cakmak.jpeg" alt="Seda Çakmak" class="object-cover w-1/2 mx-auto sm:w-full sm:mx-0 lg:h-60 rounded-lg">
                </figure>
                <div class="space-y-2.5">
                    <x-atoms.title-h4 title="Seda Çakmak" />
                    <x-atoms.body-note content="Business Development Expert" />
                    <blockquote>
                        “Girişimcilik dünyasında bir servis sağlayıcı rolüyle katıldığım Komünite, bir topluluktan çok
                        daha fazlasını öğretti. Çok hızlı ilerleyen bu sektörde "fomo" endişemi bu topluluk ile
                        yenebildiğimi söyleyebilirim. Üstelik nelerin mümkün olabileceğine canlı şahitlik ettim. Farklı
                        disiplinlerdeki değerli insanlarla bağ oluşturmak ve iş birlikleri geliştirmek, bu topluluğu
                        diğerlerinden farklı kılıyor.”
                    </blockquote>
                    <div class="font-bold">
                        Masterclass 1. Dönem
                    </div>
                </div>
            </div>
            <div class="space-y-5 lg:space-y-7.5 text-center sm:text-left">
                <figure>
                    <img loading="lazy" src="img/kfk.jpeg" alt="Kadir Furkan Kiraz" class="object-cover w-1/2 mx-auto sm:w-full sm:mx-0 lg:h-60 rounded-lg">
                </figure>
                <div class="space-y-2.5">
                    <x-atoms.title-h4 title="Kadir Furkan Kiraz" />
                    <x-atoms.body-note content="Indie Maker" />
                    <blockquote>
                        “Komünite, birbirinden değerli insanları buluşturan ve içerisinde önemli bir kültüre sahip olan
                        bir topluluk. Her hafta buluştuğumuz etkinlikler ile beyin fırtınası yapmamızı, masterclass
                        eğitimleri ile ise birbirinden değerli konuklarla buluşmamızı sağlıyor. İçerideki üyelerin
                        desteği ve mahalle baskısı sayesinde ürünü tamamlamaya yönelik motivasyonumuzu artırıyor ve
                        cesaretlendiriyor. Bu güzel ortam için yoğun çaba harcayan Komünite ekibine ve üyelerine
                        teşekkürler!
                        ”
                    </blockquote>
                    <div class="font-bold">
                        Masterclass 1. Dönem
                    </div>
                </div>
            </div>
            <div class="space-y-5 lg:space-y-7.5 text-center sm:text-left">
                <figure>
                    <img loading="lazy" src="img/muhammet-calis.jpeg" alt="Muhammet Çalış" class="object-cover w-1/2 mx-auto sm:w-full sm:mx-0 lg:h-60 rounded-lg">
                </figure>
                <div class="space-y-2.5">
                    <x-atoms.title-h4 title="Muhammet Çalış" />
                    <x-atoms.body-note content="Designer" />
                    <blockquote>
                        “Komünite'ye dahil olduğum günden beri edindiğim dostluklar ve öğrendiğim bir çok yeni bilgiler
                        oldu. Bunlar benim için paha biçilemez. İnsan gerçekten bazı durumlarda doğru insanlarla
                        birlikte olmanın kişiye kattığı değeri daha iyi anlıyor. Aynı hayaller ve ürün geliştirirken o
                        heyecanı duyanlarla bir topluluk altında olmak benim için çok özel his. Bağımsız ürün
                        geliştirici olarak çok doğru yerde olduğumu anlıyorum.
                        ”
                    </blockquote>
                    <div class="font-bold">
                        Masterclass 1. Dönem
                    </div>
                </div>
            </div>
        </x-atoms.container>
    </section>
    <section class="mb-10 md:mb-15 lg:mb-20">
        <x-atoms.container class="grid gap-y-10 md:gap-y-15 lg:gap-y-0 lg:grid-cols-[auto_31.5rem] lg:gap-x-32 xl:gap-x-48">
            <div class="space-y-5 md:space-y-7.5">
                <x-atoms.body-bold content="Masterclass Süreçleri" class="uppercase" />
                <x-atoms.title-h3 title="Masterclass ile ilgili dönemdeki en aktif 10 Komünite üyesini 6 haftalık çok özel bir hızlandırma programına alıyoruz. Yaratıcıların kişisel markalarını güçlendirmesi ve global yaratıcı ekonomisine nasıl entegre olacakları konusunda uzmanlardan aktarımlar, geri bildirimler almalarını sağlıyoruz." />
                <x-atoms.body-note content="Türkiye’nin en yetenekli yaratıcılarının bir araya geldiği Komünite’ye katılın!" />
                <x-atoms.button href="https://egitim.komunite.com.tr/enroll/1387007?price_id=1609717" target="_blank" title="Hemen Katılın" class="font-bold md:text-xl lg:text-1xl py-2.5 px-5 md:py-3 md:px-6" />
            </div>
            <div class="space-y-7.5 md:space-y-10 pl-7.5 border-l-2 border-solid border-almost-black py-9">
                <div class="space-y-2.5 relative before:absolute before:h-7 before:w-7 before:lg:w-8 before:lg:h-8 before:bg-bright before:border-2 before:border-solid before:border-almost-black before:rounded-full before:-left-11.5 before:lg:-left-12">
                    <x-atoms.body-bold content="Komünite’ye Katıl" />
                    <x-atoms.body-note content="Topluluğa katıl ve toplulukta pozitif etki yarat, Masterclass’a katılmaya hak kazan." />
                </div>
                <div class="space-y-2.5 relative before:absolute before:h-7 before:w-7 before:lg:w-8 before:lg:h-8 before:bg-bright before:border-2 before:border-solid before:border-almost-black before:rounded-full before:-left-11.5 before:lg:-left-12">
                    <x-atoms.body-bold content="Masterclass’a Katıl" />
                    <x-atoms.body-note content="Topluluk içerisinde, ilgili dönemde en fazla etki yaratan geliştiricilerle birlikte ol, kendi gelişim sürecini artır." />
                </div>
                <div class="space-y-2.5 relative before:absolute before:h-7 before:w-7 before:lg:w-8 before:lg:h-8 before:bg-bright before:border-2 before:border-solid before:border-almost-black before:rounded-full before:-left-11.5 before:lg:-left-12">
                    <x-atoms.body-bold content="Keşfet" />
                    <x-atoms.body-note content='Global yaratıcı ekonomisine nasıl entegre olacakları konusunda uzmanlardan aktarımlar, geri bildirimler al.' />
                </div>
                <div class="space-y-2.5 relative before:absolute before:h-7 before:w-7 before:lg:w-8 before:lg:h-8 before:bg-bright before:border-2 before:border-solid before:border-almost-black before:rounded-full before:-left-11.5 before:lg:-left-12">
                    <x-atoms.body-bold content="Kendini Gerçekleştir" />
                    <x-atoms.body-note content="Bağımsız geliştirici olarak kişisel marka ve ürünlerin pazarlama faaliyetlerini geliştir." />
                </div>
                <div class="space-y-2.5 relative before:absolute before:h-7 before:w-7 before:lg:w-8 before:lg:h-8 before:bg-bright before:border-2 before:border-solid before:border-almost-black before:rounded-full before:-left-11.5 before:lg:-left-12">
                    <x-atoms.body-bold content="Aktar" />
                    <x-atoms.body-note content="Yeni Masterclass döneminde ve topluluk süresince, topluluktan aldığın desteği başka bir geliştiriciye aktar." />
                </div>
            </div>
        </x-atoms.container>
    </section>
    {{-- <section class="mb-10 md:mb-15 lg:mb-20">
        <x-atoms.container class=" flex flex-col items-center gap-y-7.5 md:gap-y-10 lg:gap-y-15">
            <x-atoms.title-h2 title="Program mentorları" />
            <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-x-5 md:gap-x-7.5 gap-y-7.5 md:gap-y-10">
                <x-molecules.team-card imgSrc="img/PP-AliKarabey.png" name="Ali Karabey" title="Managing Director @ 212" twitterLink="#" linkedinLink="#" />
                <x-molecules.team-card imgSrc="img/PP-FatihGuner.png" name="Fatih Güner" title="CEO @ Komünite" twitterLink="#" linkedinLink="#" />
                <x-molecules.team-card imgSrc="img/PP-AliKarabey.png" name="Ali Karabey" title="Managing Director @ 212" twitterLink="#" linkedinLink="#" />
                <x-molecules.team-card imgSrc="img/PP-ArasBilgen.png" name="Aras Bilgen" title="Advisor" twitterLink="#" linkedinLink="#" />
                <x-molecules.team-card imgSrc="img/PP-FatihGuner.png" name="Fatih Güner" title="CEO @ Komünite" twitterLink="#" linkedinLink="#" />
                <x-molecules.team-card imgSrc="img/PP-AliKarabey.png" name="Ali Karabey" title="Managing Director @ 212" twitterLink="#" linkedinLink="#" />
                <x-molecules.team-card imgSrc="img/PP-ArasBilgen.png" name="Aras Bilgen" title="Advisor" twitterLink="#" linkedinLink="#" />
                <x-molecules.team-card imgSrc="img/PP-AliKarabey.png" name="Ali Karabey" title="Managing Director @ 212" twitterLink="#" linkedinLink="#" />
            </div>
            <x-atoms.button href="https://egitim.komunite.com.tr/enroll/1387007?price_id=1609717" target="_blank" title="Hemen Katılın" class="font-bold text-xl md:text-2xl xl:text-3xl py-3.5 px-7.5 lg:py-5 lg:px-10" />
        </x-atoms.container>
    </section> --}}
    <section class="mb-10 md:mb-15 lg:mb-20">
        <x-atoms.container>
            <div class="px-5 md:px-15 lg:px-25">
                <x-atoms.title-h4 title="Ürün geliştirme yolculuğuna başlayan yaratıcılar öğrenmeye, büyümeye ve sorular sorup cevaplar almaya ihtiyaç duyar. Topluluk öğreniminin avantajlarından faydalanabileceğiniz Circle grubumuza üye olacaksınız." />
            </div>
        </x-atoms.container>
    </section>
    <section>
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
</x-templates.base>