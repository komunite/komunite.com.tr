import SVGCheck from "../svgs/Check";

export default function CheckItemAtom({ children, className = "" }) {
    return (
        <div className="flex items-center gap-x-2.5">
            <figure>
                <SVGCheck className="h-6 md:h-7.5" />
            </figure>
            <p className="text-lg md:text-1xl">{children}</p>
        </div>
    );
}
