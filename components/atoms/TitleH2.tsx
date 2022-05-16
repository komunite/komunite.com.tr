export default function TitleH2Atom({ children, className = "" }) {
    // TODO: this is a div because the original component is a div, should be a h2
    return (
        <div
            className={`font-readex font-bold text-2.5xl md:text-3.5xl lg:text-4.5xl lg:leading-tight ${className}`}
        >
            {children}
        </div>
    );
}
