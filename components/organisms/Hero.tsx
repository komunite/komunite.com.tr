import ButtonAtom from "../atoms/Button";
import ContainerAtom from "../atoms/Container";
import LeadRegularAtom from "../atoms/LeadRegular";
import TitleH1Atom from "../atoms/TitleH1";
import SVGYouTube from "../svgs/YouTube";

export default function HeroOrganism() {
    return (
        <section className="mb-10 md:mb-15 lg:mb-20">
            <ContainerAtom className="space-y-7.5 xl:space-y-10">
                <div className="grid lg:justify-between lg:grid-cols-2 gap-y-7.5 lg:gap-y-0 lg:gap-x-7.5">
                    <TitleH1Atom className="lg:self-end">Potansiyelinizi performansa dönüştürün</TitleH1Atom>
                    <figure className="justify-self-center">
                        <img src="img/home-hero-illustration.svg" alt="Hero Illustration" className="w-full object-cover" />
                    </figure>
                </div>
                <LeadRegularAtom className="lg:w-5/6">Komünite, Türkiye’nin en tutkulu girişimcilerini ve yaratıcılarını erken aşamada destekleyen ve onlara eğitim, topluluk öğrenimi, teknolojiye erişim ve yatırıma erişim sağlayan bir platformdur.</LeadRegularAtom>
                <div className="flex flex-col sm:flex-row space-y-5 sm:space-y-0 sm:space-x-5">
                    <ButtonAtom href="https://egitim.komunite.com.tr/enroll/1387007?price_id=1609717" className="font-bold text-xl md:text-2xl xl:text-3xl py-3.5 px-7.5 lg:py-5 lg:px-10">Hemen Katılın</ButtonAtom>
                    <button type="button" data-url="https://www.youtube.com/embed/RPN3Awm8bTE?autoplay=1" title="Komünite YouTube" className="border-3 border-solid border-almost-black whitespace-nowrap rounded-lg text-lg md:text-xxl 2xl:text-2.25xl py-3 px-7.5 2xl:py-5 2xl:px-10 inline-flex items-center justify-center gap-x-1.5 md:gap-x-2.5 js-videoPopupBtn">
                        <SVGYouTube className="h-6 md:h-9" />
                        Tanıtımı İzleyin
                    </button>
                </div>
            </ContainerAtom>
        </section>)
}
