export default function TitleH4Atom({ children, className = "" }) {
    // TODO: this is a div because the original component is a div, should be a h2
    return (
        <div
            className={`font-readex text-xl md:text-2xl lg:text-3xl lg:leading-snug ${className}`}
        >
            {children}
        </div>
    );
}
