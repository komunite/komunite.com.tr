import BodyBoldAtom from "../components/atoms/BodyBold";
import BodyNoteAtom from "../components/atoms/BodyNote";
import ButtonAtom from "../components/atoms/Button";
import CheckItemAtom from "../components/atoms/CheckItem";
import ContainerAtom from "../components/atoms/Container";
import LeadRegularAtom from "../components/atoms/LeadRegular";
import TitleH2Atom from "../components/atoms/TitleH2";
import TitleH3Atom from "../components/atoms/TitleH3";
import TitleH4Atom from "../components/atoms/TitleH4";
import BaseLayout from "../components/layouts/BaseLayout";
import CheckedItemMolecule from "../components/molecules/CheckedItem";
import FundProductsOrganism from "../components/organisms/FundProducts";
import HeroOrganism from "../components/organisms/Hero";
import HomeOnboardingOrganism from "../components/organisms/HomeOnboarding";
import NewsletterOrganism from "../components/organisms/Newsletter";
import SVGArrow from "../components/svgs/Arrow";
import SVGIncreasingArrow from "../components/svgs/IncreasingArrow";
import SVGPlane from "../components/svgs/Plane";


export default function Homepage() {
    return (
        <BaseLayout headerBefore={<HomeOnboardingOrganism />}>
            <HeroOrganism />
            <section className="mb-10 md:mb-15 lg:mb-20">
                <ContainerAtom>
                    <div className="bg-ghost space-y-5 lg:space-y-7.5 py-5 md:py-7.5 lg:py-10 px-7.5 md:px-10 lg:px-15 rounded-lg">
                        <TitleH2Atom>Komünite nedir?</TitleH2Atom>
                        <ul className="list-disc text-lg md:text-xxl xl:text-2.25xl xl:leading-tight space-y-2 ml-4 md:ml-7">
                            <li>
                                Yaratıcı profesyonelleri ve girişimcileri bir araya getiren ve profesyonel yönetilen <b>online
                                    ve offline bir topluluktur.</b>
                            </li>
                            <li>
                                Girişimcileri fikirden exit’e kadar destekleyen <b>operasyonel bir yatırımcıdır.</b>
                            </li>
                            <li>
                                Melek yatırımcıların ilgilenmeyeceği kadar küçük girişim fikirlerini destekleyen, büyüten ve
                                fikrin daha <b>büyük yatırımcılara erişmesini sağlayan bir rampadır.</b>
                            </li>
                        </ul>
                    </div>
                </ContainerAtom>
            </section>

            <section className="mb-7.5 lg:mb-10">
                <ContainerAtom>
                    <figure className="flex justify-center ">
                        <img loading="lazy" src="img/screenshot.png" alt="Komünite" className="rounded-lg" />
                    </figure>
                </ContainerAtom>
            </section>

            <section className="mb-10 md:mb-15 lg:mb-20">
                <ContainerAtom>
                    <div className="bg-neptune text-bright space-y-7.5 lg:space-y-10 py-5 md:py-7.5 lg:py-10 px-7.5 md:px-10 lg:px-15 rounded-lg">
                        <TitleH3Atom>Meraklı insanlar topluluğuna katılın ve ürün geliştirme serüvenine hemen başlayın.</TitleH3Atom>
                        <LeadRegularAtom>Ürün geliştirme yolculuğuna başlayan yaratıcılar öğrenmeye, büyümeye ve sorular sorup cevaplar almaya ihtiyaç duyar. Topluluk öğreniminin avantajlarından faydalanabileceğiniz Circle grubumuza üye olacaksınız.</LeadRegularAtom>
                        <div className="grid gap-y-5 lg:gap-y-0 lg:grid-cols-2 lg:gap-x-7.5">
                            <div className="space-y-2 lg:space-y-3">
                                <BodyBoldAtom>Uzmanlardan Öğrenin:</BodyBoldAtom>
                                <BodyNoteAtom>Ürün geliştirme, tasarım, kodlama ve pazarlama gibi konularda uzmanlara ulaşmak her zaman kolay değil. Toplulukta yer alan uzman yaratıcılar, düzenli ve sürekli olarak katılımcıların sorularını cevaplıyor.</BodyNoteAtom>
                            </div>
                            <div className="space-y-2 lg:space-y-3">
                                <BodyBoldAtom>Etkinliklere Katılın:</BodyBoldAtom>
                                <BodyNoteAtom>Sizinle benzer yeteneklere sahip olan diğer profesyonellerle, özel temalar etrafında workshoplar, soru-cevap etkinlikleri ve sunumlar, topluluğun sunduğu fırsatlardan biri.</BodyNoteAtom>
                            </div>
                        </div>
                    </div>
                </ContainerAtom>
            </section>


            <section className="mb-10 md:mb-15 lg:mb-20">
                <ContainerAtom className="grid gap-y-7.5 md:gap-y-0 md:grid-cols-2 md:gap-x-5 lg:gap-x-7.5">
                    <div className="bg-bubble-gum space-y-9 lg:space-y-13 py-5 px-7.5 lg:py-7.5 lg:px-10 rounded-lg">
                        <div className="flex justify-between gap-x-5 lg:gap-x-7.5">
                            <div className="text-xl lg:text-xxl">
                                Girişimciler, kendinizden başka kimseye hesap vermeyin
                            </div>
                            <figure>
                                <SVGPlane className="h-12 md:h-16" />
                            </figure>
                        </div>
                        <a href="#" className="text-xxl md:text-2xl lg:text-2.25xl md:leading-snug flex items-center gap-x-3.5 hover:gap-x-5 md:gap-x-5 md:hover:gap-x-7 transition-all">Platformu
                            Tanıyın
                            <SVGArrow className="w-12.5" />
                        </a>
                    </div>
                    <div className="bg-bubble-gum space-y-9 lg:space-y-13 py-5 px-7.5 lg:py-7.5 lg:px-10 rounded-lg">
                        <div className="flex justify-between gap-x-5 lg:gap-x-7.5">
                            <div className="text-xl lg:text-xxl">
                                Yatırımcılar, erken aşama yatırım yapın, tüm teknik süreçleri Komünite yönetsin
                            </div>
                            <figure>
                                <SVGIncreasingArrow className="h-12 md:h-16" />
                            </figure>
                        </div>
                        <a href="#" className="text-2xl md:text-2xl lg:text-2.25xl md:leading-snug flex items-center gap-x-3.5 hover:gap-x-5 md:gap-x-5 md:hover:gap-x-7 transition-all">Fırsatları
                            Öğrenin
                            <SVGArrow className="w-12.5" />
                        </a>
                    </div>
                </ContainerAtom>
            </section>


            <section className="mb-10 md:mb-15 lg:mb-20">
                <ContainerAtom className="grid gap-y-10 md:gap-y-15 lg:gap-y-0 lg:grid-cols-[auto_35.625rem] lg:gap-x-25">
                    <figure className="justify-self-center">
                        <img loading="lazy" src="img/illustration-1-img.svg" alt="Illustration" className="w-80 lg:w-full object-cover" />
                    </figure>
                    <div className="space-y-5 md:space-y-7.5">
                        <TitleH2Atom>Komünite girişimcilere neler sunuyor?</TitleH2Atom>
                        <ul className="list-disc text-lg md:text-xl lg:text-xxl space-y-2 ml-7">
                            <li>
                                Üyelere özel Circle grubuna katılırsınız
                            </li>
                            <li>
                                Onlarca farklı konuda, uzmanlar tarafından hazırlanmış eğitimlere ücretsiz erişirsiniz
                            </li>
                            <li>
                                Haftada 4 gün, çoğunluğu topluluk üyelerine özel canlı yayınlara katılırsınız
                            </li>
                            <li>
                                Katma Değer Fonu’na başvurup, fikriniz için fon alma fırsatı yakalarsınız
                            </li>
                            <li>
                                Komünite iş ortaklarının sunduğu indirim ve fırsatlara erişirsiniz
                            </li>
                            <li>
                                Komünite’nin fonladığı web3 ve NFT projelerinin erken satış ve whitelist’lerine katılırsınız
                            </li>
                        </ul>
                        <ButtonAtom href="#" className="font-bold md:text-xl lg:text-1xl py-3 px-6 md:py-3.5 md:px-7">Detaylı Bilgi</ButtonAtom>
                    </div>
                </ContainerAtom>
            </section>
            <section className="mb-10 md:mb-15 lg:mb-20">
                <ContainerAtom className="grid gap-y-10 md:gap-y-15 lg:gap-y-0 lg:grid-cols-[35.625rem_auto] gap-x-32">
                    <div className="space-y-5 md:space-y-7.5">
                        <TitleH2Atom>Komünite yatırımcılara neler sunuyor?</TitleH2Atom>
                        <ul className="list-disc text-lg md:text-xl lg:text-xxl space-y-2 ml-7">
                            <li>
                                Komünite’nin değerlendirdiği ve fonlamaya uygun gördüğü mikro girişimlere ve dijital ürünlere
                                Komünite ile birlikte yatırım yapma fırsatına sahip olursunuz
                            </li>
                            <li>
                                Komünite’nin yatırımcı listesinde yer alan isimlere özel hazırlanan haftalık bültene erişirsiniz
                            </li>
                            <li>
                                Yatırımcılara özel hazırladığımız online ve offline etkinliklere katılırsınız
                            </li>
                            <li>
                                Komünite’nin fonladığı web3 ve NFT projelerinin erken satış ve whitelist’lerine katılırsınız
                            </li>
                        </ul>
                        <ButtonAtom href="#" className="font-bold md:text-xl lg:text-1xl py-3 px-6 md:py-3.5 md:px-7">Detaylı Bilgi</ButtonAtom>
                    </div>
                    <figure className="justify-self-center">
                        <img loading="lazy" src="img/illustration-2.svg" alt="Illustration" className="w-80 lg:w-full object-cover" />
                    </figure>
                </ContainerAtom>
            </section>

            <section className="bg-white py-10 md:py-15 lg:py-20 mb-10 md:mb-15 lg:mb-20">
                <ContainerAtom className="space-y-10 md:space-y-15 lg:space-y-20">
                    <div className="flex flex-col items-center text-center gap-y-5 md:gap-y-7.5">
                        <TitleH2Atom className="sm:w-3/4">Melek yatırımlara bambaşka bir bakış: Katma Değer Fonu</TitleH2Atom>
                        <TitleH4Atom className="sm:w-2/3">Katma Değer Fonu, yaratıcı sektörlerde çalışan profesyoneller için bir mikro yatırım fonudur.</TitleH4Atom>
                    </div>
                    <CheckedItemMolecule title="Bir defa yap, hep sat!" desc="Türkiye’nin en yetenekli yaratıcılarının bir araya geldiği Komünite’ye katılın!" imgSrc="img/illustration-3-img.svg">
                        <div className="space-y-4">
                            <CheckItemAtom>$4.000 dolara kadar yatırım imkanı</CheckItemAtom
                    <CheckItemAtom>İhtiyaç duyulan dijital ürünlere ücretsiz erişim</CheckItemAtom>
                            <CheckItemAtom>Lansman ve tanıtım destekleri</CheckItemAtom>
                            <CheckItemAtom>Satış ve pazarlama süreçlerinin yürütülmesi</CheckItemAtom>
                            <CheckItemAtom>Komünite uzmanları ile haftalık ilerleme görüşmeleri</CheckItemAtom>
                            <CheckItemAtom>Uzman geri bildirimlerine erkenden erişme imkanı</CheckItemAtom>
                        </div>
                    </CheckedItemMolecule>
                    <FundProductsOrganism title="Fonladığımız ürünler" buttonTitle="Portfolyomuz" buttonLink="" />
                </ContainerAtom>
            </section>
            <NewsletterOrganism />


        </BaseLayout >
    )
}
