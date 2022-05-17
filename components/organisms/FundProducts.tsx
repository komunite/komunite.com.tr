import ButtonAtom from "../atoms/Button";
import TitleH2Atom from "../atoms/TitleH2";
import SVGAmbient from "../svgs/Ambient";
import SVGBrandingKit from "../svgs/BrandingKit";
import SVGKarma from "../svgs/Karma";
import SVGOmnicourse from "../svgs/Omnicourse";

export default function FundProductsOrganism({ title, buttonLink, buttonTitle }) {

    return (

        <div className="flex flex-col items-center gap-y-5 md:gap-y-7.5 lg:gap-y-10">
            <TitleH2Atom>{title}</TitleH2Atom>
            <div className="grid sm:grid-cols-2 lg:grid-cols-4 gap-y-3.5 sm:gap-y-5 sm:gap-x-7.5">
                <div>
                    <figure className="text-center flex flex-col items-center gap-y-3 md:gap-y-5 py-4 sm:py-6">
                        <a href="https://www.omnicourse.io" title="Omnicourse" target="_blank">
                            <SVGOmnicourse className="h-8 sm:h-10" />
                        </a>
                        <figcaption>
                            İçerik üreticilerinin sesli öğrenim içerikleri kaydederek yayınladıkları ve dinleme dakikaları üzerinden gelir elde ettiği, dinleyicilerin ise belirli bir ücret karşılığında tüm öğrenim içeriklerini dinleyebildiği çift taraflı mobil sesli öğrenim platformu.
                        </figcaption>
                    </figure>
                </div>
                <div title="Startup Recipes">
                    <figure className="text-center flex flex-col items-center gap-y-3 md:gap-y-5 py-4 sm:py-6">
                        <a href="https://productrecipes.com" title="Startup Recipes" target="_blank">
                            <img src="" className=" h-8 sm:h-11" />
                        </a>
                        <figcaption>
                            Girişimcilerin ve mikro girişimcilerin fikirden MVP’ye giden yolculuklarında, kodsuz geliştirme araçlarını nasıl daha aktif ve verimli kullanabileceklerini onlara gösteren ve 60’dan fazla fikir için de direkt reçete sağlayan bir bilgi ürünü.
                        </figcaption>
                    </figure>
                </div>
                <div>
                    <figure className="text-center flex flex-col items-center gap-y-3 md:gap-y-5 py-4 sm:py-6">
                        <a href="https://www.karma.design" title="Karma" target="_blank">
                            <SVGKarma className="h-8 sm:h-11" />
                        </a>
                        <figcaption>
                            Dünyanın en kapsamlı tasarım kitlerinden biri. Light ve dark temaları ile toplamda 1.800’den fazla komponente sahip olan ve deneyimden bağımsız tüm tasarımcıların ve girişimcilerin hızlıca web sitesi ve iniş sayfası tasarlamasını sağlayan detaylı şablon.
                        </figcaption>
                    </figure>
                </div>
                <div>
                    <figure className="text-center flex flex-col items-center gap-y-3 md:gap-y-5 py-4 sm:py-6">
                        <a href="https://www.upcalled.com" title="Upcalled" target="_blank">
                            <SVGupcalled className="h-8 sm:h-11" />
                        </a>
                        <figcaption>
                            Girişimlerin web sitelerine ekleyebildikleri ve müşterileri ile canlı, takvime dayalı ya da önceden belirlenmiş senaryolarda video görüşme yapmalarını sağlayan bir mikro-SaaS platformu.
                        </figcaption>
                    </figure>
                </div>
                <div>
                    <figure className="text-center flex flex-col items-center gap-y-3 md:gap-y-5 py-4 sm:py-6">
                        <a href="https://notionbrandingkit.com" title="Branding Kit" target="_blank">
                            <SVGBrandingKit className="h-5 sm:h-8" />
                        </a>
                        <figcaption>
                            Girişimci, marka ya da kişi fark etmeksizin, 12 adımda marka stratejisinden hedef kitle personası üretmeye kadar detaylı içerik ve çerçeve oluşturulmasını sağlayan bir bilgi ürünü.
                        </figcaption>
                    </figure>
                </div>
                <div>
                    <figure className="text-center flex flex-col items-center gap-y-3 md:gap-y-5 py-4 sm:py-6">
                        <a href="https://www.ambient.design" title="Ambient" target="_blank">
                            <SVGAmbient className="h-8 sm:h-11" />
                        </a>
                        <figcaption>
                            2 haftada bir yeni bir tasarım geliştirme kitinin yayınlandığı, her bir kitin ister ayrı satın alındığı, istenirse de abonelik yöntemiyle tüm kitlere sahip olunabildiği bir tek yönlü pazar yeri.
                        </figcaption>
                    </figure>
                </div>
                <div>
                    <figure className="text-center flex flex-col items-center gap-y-3 md:gap-y-5 py-4 sm:py-6">
                        <a href="https://www.notionecommerce.com" title="Ecommerce checklist" target="_blank">
                            <img src="{{asset('img/ecommerce-checklist.svg')}" className=" h-8 sm:h-11" />
                        </a>
                        <figcaption>
                            E-ticaret sitesi açmak isteyen herkesin, süreçlerinin başından sonuna kadar onlara her noktada içerik ve deneyim sağlayan, belirgin fonksiyonlar için de farklı araçlar öneren, detaylı bir bilgi ürünü.
                        </figcaption>
                    </figure>
                </div>
                <div>
                    <figure className="text-center flex flex-col items-center gap-y-3 md:gap-y-5 py-4 sm:py-6">
                        <a href="https://currencyicons.com" title="Currency Icons" target="_blank">
                            <img src="{{asset('img/currency-icons.svg')}" className=" h-8 sm:h-11" />
                        </a>
                        <figcaption>
                            2 sembol, 64 varyant ve 8.700’den fazla komponentten oluşan, ekonomisi en büyük ilk 20 ülkenin ve pazar büyüklüğü bakımından ilk 100 kripto paranın logolarının yer aldığı bir Figma şablonu.
                        </figcaption>
                    </figure>
                </div>
            </div>
            <ButtonAtom href={buttonLink} className="font-bold text-xl md:text-2xl xl:text-3xl py-3.5 px-7.5 lg:py-5 lg:px-10">{buttonTitle}</ButtonAtom>
        </div>
    )
}
