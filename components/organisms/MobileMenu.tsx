import SVGChevron from "../svgs/Chevron"
import SVGClose from "../svgs/Close"
import SVGInstagram from "../svgs/Instagram"
import SVGKomuniteLogo from "../svgs/KomuniteLogo"

const routes = [
    { name: "Topluluk", href: "/topluluk" },
    { name: "Katma Değer Fonu", href: "/katma-deger-fonu" },
    { name: "Masterclass", href: "/masterclass" },
    { name: "Fon Süreci", href: "/fon-sureci" },
    { name: "Eğitimler", href: "/egitimler" },
]

export default function MobileMenuOrganism({ children, className = "", ...props }) {
    return (
        <aside className="py-10 px-7.5 fixed top-0 w-full z-20 bg-ghost h-screen flex flex-col -right-full transition-all duration-300 gap-y-15 js-headerAsideMenu md:hidden overflow-y-auto">
    <div className="flex justify-between">
        <a href="/" title="Komünite">
            <SVGKomuniteLogo className="h-6" />
        </a>
        <button type="button" aria-label="Hamburger Menu Button" className="js-headerAsideMenuBtn">
            <SVGClose className="w-7.5" />
        </button>
    </div>
    <div className="space-y-5 whitespace-nowrap">
        <details className="details group">
            <summary className="uppercase font-bold inline-flex gap-x-2.5 items-center">
                Girişimciler
                <SVGChevron className="w-6 rotate-90 group-open:-rotate-90" />
            </summary>

            <div className="flex flex-col items-start mt-2.5 gap-y-1.5">
                {routes.map(({ name, href }) => (<a href={href} title={href}>{name}</a>))}
            </div>
        </details>

        <details className="details group">
            <summary className="uppercase font-bold inline-flex gap-x-2.5 items-center">
                Yatırımcılar
                <SVGChevron className="w-6 rotate-90 group-open:-rotate-90" />
            </summary>

            <div className="flex flex-col items-start mt-2.5 gap-y-1.5">
                @foreach (['Yatırımlarımız' => 'funded', 'Mikro Fonlama' => 'fund'] as $linkTitle => $route)
                <a href="{{ route($route) }title="{linkTitle }}">{linkTitle }}</a>
                @endforeach
            </div>
        </details >

        <details className="details group">
            <summary className="uppercase font-bold inline-flex gap-x-2.5 items-center">
                Hakkında
                <SVGChevron className="w-6 rotate-90 group-open:-rotate-90" />
            </summary>

            <div className="flex flex-col items-start mt-2.5 gap-y-1.5">
                @foreach (['Hakkında' => 'about', 'Ekibimiz' => 'team', 'Kariyer' => 'career'] as $linkTitle => $route)
                <a href="{{ route($route) }title="{linkTitle}}">{linkTitle}}</a>
            @endforeach
        </div>
        </details >

        <details className="details group">
            <summary className="uppercase font-bold inline-flex gap-x-2.5 items-center">
                Etkinlikler
                <SVGChevron className="w-6 rotate-90 group-open:-rotate-90" />
            </summary>

            <div className="flex flex-col items-start mt-2.5 gap-y-1.5">
                @foreach (['Hackathonlar' => 'hackathon', 'Networking' => 'networking', 'Canlı Yayınlar' => 'broadcasts'] as $linkTitle => $route)
                <a href="{{ route($route) }title="{linkTitle}}">{linkTitle}}</a>
            @endforeach
        </div>
        </details >

        <details className="details group">
            <summary className="uppercase font-bold inline-flex gap-x-2.5 items-center">
                İletişim
                <SVGChevron className="w-6 rotate-90 group-open:-rotate-90" />
            </summary>

            <div className="flex flex-col items-start mt-2.5 gap-y-1.5">
                @foreach ([
                'Bize Ulaşın' => 'contact',
                'Sık Sorulan Sorular' => '',
                ]
                as $linkTitle => $route)
                <a href="{route ?  route($route) : '#' }title="{linkTitle}}">{linkTitle}}</a>
            @endforeach
        </div>
        </details >

        <div className="flex items-center gap-x-4">
            <a href="https://twitter.com/komunitecomtr" title="Komünite Twitter" target="_blank">
                <SVGtwitter className="h-6 transition-all hover:text-neptune" />
            </a>
            <a href="https://www.youtube.com/c/Kom%C3%BCnite" title="Komünite YouTube" target="_blank">
                <SVGYouTube className="h-6 transition-all hover:text-neptune" />
            </a>
            <a href="https://www.instagram.com/komunitecomtr/" title="Komünite Instagram" target="_blank">
                <SVGInstagram className="h-6 transition-all hover:text-neptune" />
            </a>
            <a href="https://tr.linkedin.com/company/komunite" title="Komünite Linkedin" target="_blank">
                <SVGLinkedin className="h-6 transition-all hover:text-neptune" />
            </a>
        </div>
    </div >

    <div className="flex flex-col gap-y-1 grow justify-end">
        <a href="{{ route('privacy-policy') }title="Gizlilik Politikası">Gizlilik Politikası</a>
        <a href="{{ route('terms-of-use') }title="Kullanım Sözleşmesi">Kullanım Sözleşmesi</a>
        < div > Copyright < time className = "js-footerDate" > 2022</time > © Saparda, Inc</div >
            <div>Tüm hakları saklıdır.</div>
    </div >
</aside >
)
}
