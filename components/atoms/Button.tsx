export default function ButtonAtom({
    children,
    className = "",
    href = "#",
    title = "",
}) {
    return (
        <a
            href={href}
            title={title}
            className={`inline-block bg-almost-black text-bright uppercase whitespace-nowrap rounded-lg text-center ${className}`}
        >
            {title || children}
        </a>
    );
}
