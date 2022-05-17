import SVGTriangle from "../svgs/Triangle";

export default function DropdownMenuMolecule({ children, className = "" }) {
    return (<div className="absolute top-full -left-1/3 z-20 pt-8 transition-all hidden group-hover:block pointer-events-none group-hover:pointer-events-auto">
        <div className="relative grid grid-cols-[auto_15rem]">
            <div className={`px-7.5 py-5 bg-white shadow-dropdown rounded-lg flex flex-col w-[27.5rem] ${className}`}>
                {children}
            </div>
            <SVGTriangle className="h-9 w-9 absolute top-0 -translate-y-1/2 left-[14%] z-10 text-white" />
        </div>
    </div>
    )
}
