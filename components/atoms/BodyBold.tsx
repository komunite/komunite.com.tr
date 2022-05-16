export default function BodyBoldAtom({ children, className = "" }) {
    return (
        <div
            className={`font-bold text-lg md:text-1xl ${className}`}
        >
            {children}
        </div>
    );
}
