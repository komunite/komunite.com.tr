export default function ButtonAtom({
    children,
    className = "",
    href = "#",
    title = "",
    ...props
}) {
    return (
        <a
            href={href}
            title={title}
            {...props}
            className={`inline-block bg-almost-black text-bright uppercase whitespace-nowrap rounded-lg text-center ${className}`}
        >
            {title || children}
        </a>
    );
}
