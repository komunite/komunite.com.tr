export default function BodyNoteAtom({ children, className = "" }) {
    return (
        <p
            className={`text-base ${className}`}
        >
            {children}
        </p>
    );
}
