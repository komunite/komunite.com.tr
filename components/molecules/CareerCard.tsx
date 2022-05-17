import BodyBoldAtom from "../atoms/BodyBold";
import SVGLocation from "../svgs/Location";

export default function CareerCardMolecule({ children, className = "", location, slotDesc, title, slot, company }) {
    return (
        <div className="bg-white space-y-5 p-5 md:p-7.5 rounded-lg">
            <div className="flex gap-x-4">
                {children || slot}
                <div className="space-y-2">
                    <BodyBoldAtom>{company}</BodyBoldAtom>
                    <div className="flex items-center gap-x-1 text-neptune">
                        <figure>
                            <SVGLocation className="h-6" />
                        </figure>
                        <span className="font-bold">{location}</span>
                    </div>
                </div>
            </div>
            <div className="font-bold text-xxl md:text-2xl lg:text-2.25xl md:leading-snug">
                {title}
            </div>
            <div className="flex gap-3 flex-wrap font-bold text-xs">
                <span className="bg-ghost py-1.5 px-2.5 rounded-lg">Tam Zamanlı</span>
                <span className="bg-bubble-gum py-1.5 px-2.5 rounded-lg">Deneyimli</span>
                <span className="bg-turquoise py-1.5 px-2.5 rounded-lg">Remote</span>
            </div>
            {slotDesc}
        </div>
    )
}
