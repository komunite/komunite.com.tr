export default function LeadRegularAtom({ children, className = "" }) {
    return (
        <p
            className={` text-lg md:text-xxl xl:text-2.25xl xl:leading-snug ${className}`}
        >
            {children}
        </p>
    );
}
