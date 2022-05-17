import SVGTriangle from "../svgs/Triangle";

export default function DropdownMenuWithSideMolecule({ children, className = "" }) {
    return (<div
        className="absolute top-full -left-1/3 z-20 pt-8 transition-all hidden group-hover:block pointer-events-none group-hover:pointer-events-auto">
        <div className="relative grid grid-cols-[auto_15rem]">
            <div className={`px-7.5 py-5 bg-white shadow-dropdown rounded-l-lg flex flex-col w-[27.5rem] ${className}`}>
                {children}
            </div>
            {/* < div className="bg-white space-y-5 flex flex-col justify-center rounded-r-lg border-l-[0.5px] border-solid border-ghost p-7.5 w-[18.75rem]">
            <div className="font-bold text-1xl">
                Projelerimiz
            </div>
            <a href="#" title="Komünte ve NFT'ler" className="rounded-lg p-2.5 bg-navy">
                <div className="flex items-center gap-x-1 text-bright font-bold text-1xl">
                    <div>Komünite</div>
                    <SVGheart className="h-7" />
                    <div>NFTler</div>
                </div>
                <figure>
                    <img loading="lazy" src="img/coins.svg" alt="Coins" className="object-cover h-9">
                </figure>
            </a>
            <div className="space-y-1">
                <p>Öğrenciler için bir burs programımız var</p>
                <a href="#" title="Detaylı bilgi" className="font-semibold flex items-center gap-x-1 hover:gap-x-2 transition-all">Detaylı bilgi
                    <span>→</span>
                </a>
            </div>
            <div className="h-[0.5px] w-full bg-ghost">
            </div>
            <a href="#" title="Yaratıcı Akademi" className="font-semibold flex items-center gap-x-1 hover:gap-x-2 transition-all">Yaratıcı Akademi
                <span>→</span>
            </a>
    </div> */}
            <SVGTriangle className="h-9 w-9 absolute top-0 -translate-y-1/2 left-[14%] z-10 text-white" />
        </div >
    </div >

    )
}
