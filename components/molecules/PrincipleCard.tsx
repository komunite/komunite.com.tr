import BodyBoldAtom from "../atoms/BodyBold";
import BodyNoteAtom from "../atoms/BodyNote";

export default function PrincipleCardMolecule({ children, className = "", location, imgSrc, title, content }) {
    return (<div className="bg-ghost flex flex-col items-center text-center gap-y-5 p-5 md:p-7.5 rounded-lg">
        <figure>
            <img loading="lazy" src={imgSrc} alt="Principle Image" className="object-cover w-20 sm:w-24 h-20 sm:h-24 xl:h-35 xl:w-35" />
        </figure>
        <BodyBoldAtom>{title}</BodyBoldAtom>
        <BodyNoteAtom>{content}</BodyNoteAtom>
    </div>

    )
}
