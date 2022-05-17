


    <section className="mb-10 md:mb-15 lg:mb-20">
        <ContainerAtom className="grid gap-y-7.5 lg:gap-y-0 lg:grid-cols-[auto_23.125rem] lg:gap-x-7.5">
            <div className="bg-navy text-bright space-y-5 md:space-y-7.5 py-9 px-7.5 md:py-11 md:px-10 rounded-lg">
                <div className="flex items-center gap-x-3.5 lg:gap-x-5">
                    <TitleH3Atom title="Komünite" />
                    <SVGheart className="w-8 lg:w-12" />
                    <TitleH3Atom title="NFTler" />
                </div>
                <p className="text-lg md:text-1xl">Komünite Türk tasarımcıları, illüstratörleri ve sanatçıları dünya NFT çevrelerine açmak ve onların isimlerini büyütmek için bir NFT destek programı hazırlıyor.</p>
                <div title="Daha fazla bilgi" className="inline-block bg-ghost text-navy uppercase whitespace-nowrap rounded-lg font-bold text-xl md:text-1xl lg:text-2xl py-2 px-4 md:py-3 md:px-6 lg:py-4 lg:px-8">Çok yakında</div>
                <figure>
                    <img loading="lazy" src="img/coins.svg" alt="Coins" className="object-cover">
                </figure>
            </div>
            <div className="bg-turquoise space-y-3.5 md:space-y-5 p-7.5 md:p-10 rounded-lg">
                <SVGthe-bulten className="h-10" />
                <BodyBoldAtom content="Kimsenin habere ihtiyacı yok, herkesin içgörüye ihtiyacı var." />
                <BodyNoteAtom content="O yüzden burada haber yok, burada içgörü var." />
                <BodyNoteAtom content="The Bülten ile girişimcilik, yaratıcı ekonomisi, yatırımlar ve uzaktan çalışma konularında bakış açısına sahip olun." />
                <div className="inline-block bg-almost-black text-bright uppercase whitespace-nowrap rounded-lg text-center font-bold md:text-xl lg:text-1xl py-2 px-4 md:py-3 md:px-6">
                    Çok yakında
                </div>
            </div>
        </ContainerAtom>
    </section>
    <section className="mb-10 md:mb-15 lg:mb-20">
        <ContainerAtom>
            <TitleH3Atom title="Komünite hakkında neler söylediler?" className="mb-7.5 lg:mb-10" />
            <div className="md:columns-2 lg:columns-3 md:gap-x-7.5 space-y-7.5">
                <x-molecules.testimonials-item imgSrc="img/PP-Baris.png" name="Barış Ünver" business="Indie Hacker" testimonial="Komünite tam da aradığım türden bir topluluk. Kendini yaratıcı olarak tanımlayan herkesin birbirine yardımcı olabileceği bu girişimin yalnız size veya bana değil, genel olarak ülkeye de faydası dokunacak." />
                <x-molecules.testimonials-item imgSrc=" img/PP-Ismail.png" name="İsmail Orhan Postalcıoğlu" business="CEO @ Omnicourse" testimonial="Omnicourse fikrinin doğduğu, ortaklarımla tanıştığım ve her zaman yanımızda desteğini hissettiğimiz bu topluluğun yeri benim için çok özel. Fatih’in burada verdiği yoğun emek umarım daha birçok güzel işe dönüşür." />
                <x-molecules.testimonials-item imgSrc="img/PP-Ugur.png" name="Uğur Kılcı" business="Indie Hacker">
                    <x-slot name="testimonial">
                        Komünite, üyelerinin mevcut potansiyelini 10 kat yükseğe fırlatan mancınık gibi. Eksilerini
                        çözen eğitimleri, mentorleri ve istediğin zaman soru sorabileceğin profesyonel topluluğu var.
                        Ve... Burada havalar güzel. :)
                    </x-slot>
                </x-molecules.testimonials-item>
                <x-molecules.testimonials-item imgSrc=" img/PP-Melih.png" name="Melih Eran" business="Indie Hacker" testimonial="Başkalarının hayallerini gerçekleştirmek yerine artık kendi hayallerinin peşinde koşup, kendi değerinin farkına varmak, yapabileceklerini görmek ve senin gibi düşünen insanlarla üretmek için motivasyon dolu bir ortam." />
                <x-molecules.testimonials-item imgSrc=" img/PP-Omur.png" name="Ömür Yanıkoğlu" business="Founder @ brain.work" testimonial="Komünite, katıldığım günde bu yana farkındalığımı arttırmakla kalmadı, bana sektörün tüm alanlarında faaliyet gösteren uzmanlarla tanışma ve birlikte nezaketle çalışma fırsatı verdi. Bize özel  oluşturulan topluluk sayfasındaki sistem, efektifk bir şekilde fikirleri irdelememize ve her etkileşimle daha derin öğrenmemize olanak sağlıyor. Bu güzel ortama dahil olduğum için çok mutluyum ve katkıda bulunan herkese çok teşekkür ederim." />
                <x-molecules.testimonials-item imgSrc="img/fatma-kiraz.jpeg" name="Fatma Kiraz" business="Indie Front-end Developer">
                    <x-slot name="testimonial">
                        Benzer amaçlar doğrultusunda çabalarken, deneyimlerimizi paylaştığımız özel insanları bir araya getiren samimi bir topluluk. Her konuda, koşulsuz ve bir beklenti içinde olmadan düşüncelerimizi destekleyen ve kişisel deneyimini paylaşmaya açık birbirinden değerli insanların olduğunu bilmek çok güzel. Ayrıca, kendi network'ünü aktif bir şekilde kullanarak topluluğu destekleyen ve kendini sürekli geliştiren dinamik bir ekip var. Topluluğu güzelleştiren ekibe ve tüm üyelere teşekkürler!
                    </x-slot>
                </x-molecules.testimonials-item>
                <x-molecules.testimonials-item imgSrc="img/seda-cakmak.jpeg" name="Seda Çakmak" business="Dijital İş Geliştirme Uzmanı">
                    <x-slot name="testimonial">
                        Girişimcilik dünyasında bir servis sağlayıcı rolüyle katıldığım Komünite, bir topluluktan çok daha fazlasını öğretti. Çok hızlı ilerleyen bu sektörde "fomo" endişemi bu topluluk ile yenebildiğimi söyleyebilirim. Üstelik nelerin mümkün olabileceğine canlı şahitlik ettim. Farklı disiplinlerdeki değerli insanlarla bağ oluşturmak ve iş birlikleri geliştirmek, bu komün'ü diğerlerinden farklı kılıyor.
                    </x-slot>
                </x-molecules.testimonials-item>
                <x-molecules.testimonials-item imgSrc="img/kfk.jpeg" name="Kadir Furkan Kiraz" business="Indie Maker">
                    <x-slot name="testimonial">
                        Komünite, birbirinden değerli insanları buluşturan ve içerisinde önemli bir kültüre sahip olan bir topluluk. Her hafta buluştuğumuz etkinlikler ile beyin fırtınası yapmamızı, masterclass eğitimleri ile ise birbirinden değerli konuklarla buluşmamızı sağlıyor. İçerideki üyelerin desteği ve mahalle baskısı sayesinde ürünü tamamlamaya yönelik motivasyonumuzu artırıyor ve cesaretlendiriyor. Bu güzel ortam için yoğun çaba harcayan Komünite ekibine ve üyelerine teşekkürler!
                    </x-slot>
                </x-molecules.testimonials-item>
                <x-molecules.testimonials-item imgSrc="img/muhammet-calis.jpeg" name="Muhammet Çalış" business="Indie Hacker">
                    <x-slot name="testimonial">
                        Tek başına dijital ürün geliştirenlerin ve 9 - 5 mesaisinin ötesine geçip kendi ürünlerini yapmak isteyenlerin mutlaka olması gereken ve bir topluluktan daha fazlası olarak görüyorum burayı.

                        Komünite'ye dahil olduğum günden beri edindiğim dostluklar ve öğrendiğim bir çok yeni bilgiler oldu. Bunlar benim için paha biçilemez. İnsan gerçekten bazı durumlarda doğru insanlarla birlikte olmanın kişiye kattığı değeri daha iyi anlıyor. Aynı hayaller ve ürün geliştirirken o heyecanı duyanlarla bir topluluk altında olmak benim için çok özel his. Bağımsız ürün geliştirici olarak çok doğru yerde olduğumu anlıyorum.
                    </x-slot>
                </x-molecules.testimonials-item>
                <x-molecules.testimonials-item imgSrc="img/eren-dik.jpeg" name="Eren Dik" business="Fonder of Kod-suz">
                    <x-slot name="testimonial">
                        Beni komünite'ye bağlayan şey birbirinden yetenekli ve üretken insanların bir arada olması. Fikir validasyonu mu lazım? Komünite hazır. Beyin fırtınası mı gerekiyor? Komünite hazır. Bir aracın nasıl kullanıldığını mı sormuştunuz? Canlı canlı anlatılır. Hatta, olası eksik kaldığınız bir noktada o işi tamamlanmış bulabilirsiniz. Kısaca, komünite yaratıcı, yetenekli, zeki, üretken ve samimi bir topluluktur.
                    </x-slot>
                </x-molecules.testimonials-item>
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
    <section className="mb-10 md:mb-15 lg:mb-20">
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
