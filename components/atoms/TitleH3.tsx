export default function TitleH3Atom({ children, className = "" }) {
    // TODO: this is a div because the original component is a div, should be a h2
    return (
        <div
            className={`font-readex font-bold text-2xl md:text-2.5xl lg:text-4xl ${className}`}
        >
            {children}
        </div>
    );
}
