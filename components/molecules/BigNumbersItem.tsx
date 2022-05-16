import BodyNoteAtom from "../atoms/BodyNote";
import BodyBoldAtom from "../atoms/BodyBold";

export default function BigNumbersItem({
    children,
    className = "",
    number = 0,
    title,
}) {
    return (
        <div className="space-y-2.5">
            <div className="font-readex font-bold text-4xl md:text-6xl lg:text-8xl">
                {number}
            </div>
            <BodyBoldAtom>{title}</BodyBoldAtom>
            <BodyNoteAtom>{children}</BodyNoteAtom>
        </div>
    );
}
