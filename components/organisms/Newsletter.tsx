import BodyNoteAtom from "../atoms/BodyNote"
import ContainerAtom from "../atoms/Container"
import TitleH4Atom from "../atoms/TitleH4"
import SVGArrowRight from "../svgs/ArrowRight"

export default function NewsletterOrganism({ ...props }) {
    return (
        <section {...props}>
            <ContainerAtom>
                <div className="bg-white grid md:grid-cols-[28rem_auto] lg:grid-cols-[41.25rem_auto] md:items-center md:justify-between gap-y-7.5 md:gap-x-8 p-5 md:p-7.5 rounded-lg">
                    <div className="space-y-5 md:space-y-7.5">
                        <TitleH4Atom>Yeniliklerimizi herkesten önce öğrenmek için bültene üye olun!</TitleH4Atom>
                        <div className="space-y-1.5">
                            <div className="flex">
                                <input type="email" required placeholder="Eposta adresiniz" className="bg-bright md:text-lg lg:text-1xl w-full md:placeholder:text-lg lg:md:placeholder:text-1xl placeholder:text-neptune py-5 px-5 focus-visible:outline-neptune rounded-tl-lg rounded-bl-lg" />
                                <a data-formkit-toggle="d1e7ad420a" href="https://komunite.ck.page/d1e7ad420a" aria-label="Bültene üye ol!" className="bg-black text-white p-2 sm:p-3 rounded-tr-lg rounded-br-lg">
                                    <SVGArrowRight title="Yeniliklerimizi herkesten önce öğrenmek için bültene üye olun!" className="h-9 md:h-12 text-bright" />
                                </a>
                            </div>
                            <BodyNoteAtom>Üyelikten istediğiniz an çıkabilirsiniz. Merak etmeyin, spam yapmıyoruz.</BodyNoteAtom>
                            <a href="{{ route('privacy-policy') }" title=" Gizlilik Politikası" className="underline inline-block" target="_blank">Gizlilik politikamızı gözden geçirin.</a>
                        </div>
                    </div>
                    <figure className="justify-self-center lg:justify-self-start">
                        <img loading="lazy" src="img/newsletter-illustration.svg" alt="Newsletter Illustration" className="h-48 md:h-auto object-cover" />
                    </figure>
                </div>
            </ContainerAtom>
        </section>
    )
}
