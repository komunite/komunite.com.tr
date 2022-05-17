import BodyBoldAtom from "../atoms/BodyBold"
import BodyNoteAtom from "../atoms/BodyNote"

export default function PartnersMolecule({ children, className = "", name, coupon, note, content, slot }) {
    return (<div className="bg-white flex flex-col items-center gap-y-7.5 p-7.5 md:px-4 md:py-10 rounded-lg js-partnerCard">
        {children || slot}
        <div className="text-center space-y-3.5 md:space-y-5">
            <div className="font-bold text-lg md:text-xxl lg:text-2.25xl js-partnerName">
                {name}
            </div>
            <div>
                {content}
            </div>
            <BodyBoldAtom>{coupon}</BodyBoldAtom>
            <BodyNoteAtom>{note}</BodyNoteAtom>
        </div>
    </div >

    )
}
