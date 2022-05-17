import BodyBoldAtom from "../atoms/BodyBold";
import TitleH3Atom from "../atoms/TitleH3";

export default function CheckedItemMolecule({ children, className = "", imgSrc, desc, title }) {
    return (<div className="grid gap-y-15 lg:gap-y-0 lg:grid-cols-[auto_41.875rem] lg:gap-x-7.5">
        <figure className="justify-self-center">
            <img loading="lazy" src={imgSrc} alt="Item" className="w-80 lg:w-full object-cover" />
        </figure>
        <div className="space-y-5 md:space-y-7.5">
            <TitleH3Atom>{title}</TitleH3Atom>
            <BodyBoldAtom>{desc}</BodyBoldAtom>
            {children}
        </div>
    </div>
    )
}
