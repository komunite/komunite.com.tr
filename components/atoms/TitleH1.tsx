export default function TitleH1Atom({ children, className = "" }) {
    return (
        <h1
            className={`font-readex font-bold text-4xl leading-normal md:text-5xl md:leading-tight lg:text-6.5xl ${className}`}
        >
            {children}
        </h1>
    );
}
