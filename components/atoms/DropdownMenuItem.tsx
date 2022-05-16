export default function DropdownMenuItemAtom({
    children,
    href,
    title,
    desc,
    img,
}) {
    // TODO: this is a div because the original component is a div, should be a h2
    return (
        <a
            href={href}
            title={title}
            className="flex items-center gap-x-5 p-2.5 hover:bg-bright rounded-lg"
        >
            <figure className="bg-ghost rounded-lg p-[0.3125rem]">{img}</figure>
            <div className="flex flex-col gap-y-0.5">
                <div className="font-bold text-1xl flex items-center gap-x-2.5 hover:gap-x-3">
                    {title || children}
                </div>
                {desc}
            </div>
        </a>
    );
}
