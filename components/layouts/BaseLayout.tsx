import FloatingNewsletterOrganism from "../organisms/FloatingNewsletter"
// import HeaderOrganism from "../organisms/Header"
import TopBarOrganism from "../organisms/TopBar"

export default function BaseLayout({ children, headerBefore = (<></>) }) {
    return (
        <>
            {headerBefore}
            <TopBarOrganism />
            <FloatingNewsletterOrganism />
            {/* <HeaderOrganism /> */}
            <main role="main" className="pt-10 lg:pt-15 pb-15 lg:pb-20">
                {children}
            </main>
            {/* <FooterOrganism /> */}
        </>
    )
}
