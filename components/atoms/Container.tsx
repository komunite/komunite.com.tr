export default function ContainerAtom({ children, className = "" }) {
    return (<div className={`lg:max-w-6xl mx-auto px-4 xl:px-0 ${className}`}>{ children }</div>)
}
