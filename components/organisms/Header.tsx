import ContainerAtom from "../atoms/Container"
import DropdownMenuItemAtom from "../atoms/DropdownMenuItem"
import DropdownMenuMolecule from "../molecules/DropdownMenu"
import DropdownMenuWithSideMolecule from "../molecules/DropdownMenuWithSide"
import SVGHamburgerMenu from "../svgs/HamburgerMenu"
import SVGInstagram from "../svgs/Instagram"
import SVGLogo from "../svgs/Logo"
import SVGTwitter from "../svgs/Twitter"
import SVGYouTube from "../svgs/YouTube"
import MobileMenuOrganism from "./MobileMenu"

export default function HeaderOrganism({ children, className = "", location, slotDesc, title, slot, company }) {
<header>
    <ContainerAtom className="flex items-center justify-between py-7.5 xl:py-10 border-b-2 border-solid border-almost-black">
        <div className="flex items-center md:gap-x-5 lg:gap-x-10 xl:gap-x-15">
            <figure>
                <a href="/" title="Komünite">
                    <SVGLogo className="h-8 lg:h-10 xl:h-11.5" />
                </a>
            </figure>
            <nav className="hidden md:flex items-center md:gap-x-5 xl:gap-x-7.5">
                <div className="relative group">
                    <a href="{{ route('about') }" title="Hakkında" className="font-bold lg:text-lg uppercase whitespace-nowrap transition-all hover:text-almost-black/80">Hakkında</a>
                </div>
                <div className="relative group">
                    <div className="font-bold lg:text-lg uppercase whitespace-nowrap transition-all hover:text-almost-black/80">Girişimciler
                        İçin</div>
                    <DropdownMenuWithSideMolecule>
                        <a href="#" title="Topluluk" className="flex items-center gap-x-5 p-2.5 hover:bg-bright rounded-lg">
                            <figure className="bg-ghost rounded-lg p-[0.3125rem]">
                                <img src="img/dropdown-1.png" alt="Image">
                            </figure>
                            <div className="flex flex-col gap-y-0.5">
                                <div className="font-bold text-1xl flex items-center gap-x-2.5 hover:gap-x-3">
                                    Topluluk
                                </div>
                                <div>Meraklı insanlar topluluğuna katılın</div>
                            </div>
                        </a>
                        <a href="{{ route('fund') }title=" Katma Değer Fonu" className="flex items-center gap-x-5 p-2.5 hover:bg-bright rounded-lg">
                            <figure className="bg-ghost rounded-lg p-[0.3125rem]">
                                <img src="img/dropdown-2.png" alt="Image">
                            </figure>
                            <div className="flex flex-col gap-y-0.5">
                                <div className="font-bold text-1xl flex items-center gap-x-2.5 hover:gap-x-3">
                                    Katma Değer Fonu
                                </div>
                                <div>Yaratıcılar için mikro yatırım fonu</div>
                            </div>
                        </a>
                        <a href="{{ route('masterclass') }title="Masterclass" className="flex items-center gap-x-5 p-2.5 hover:bg-bright rounded-lg">
                            <figure className="bg-ghost rounded-lg p-[0.3125rem]">
                                <img src="img/dropdown-3.png" alt="Image">
                            </figure>
                            <div className="flex flex-col gap-y-0.5">
                                <div className="font-bold text-1xl flex items-center gap-x-2.5 hover:gap-x-3">
                                    Masterclass
                                </div>
                                <div>6 haftalık bir hızlandırma programı</div>
                            </div>
                        </a>
                        <a href="#" title="Eğitimler" className="flex items-center gap-x-5 p-2.5 hover:bg-bright rounded-lg">
                            <figure className="bg-ghost rounded-lg p-[0.3125rem]">
                                <img src="img/dropdown-4.png" alt="Image">
                            </figure>
                            <div className="flex flex-col gap-y-0.5">
                                <div className="font-bold text-1xl flex items-center gap-x-2.5 hover:gap-x-3">
                                    Eğitimler
                                </div>
                                <div>Yeni disiplinler öğrenin</div>
                            </div>
                        </a>
                    </DropdownMenuWithSideMolecule>
                </div>
                <div className="relative group">
                    <div className="font-bold lg:text-lg uppercase whitespace-nowrap transition-all hover:text-almost-black/80">Yatırımcılar
                        İçin</div>
                    <DropdownMenuMolecule>
                        <a href="{{ route('funded') }title="Yatırımlarımız" className="flex items-center gap-x-5 p-2.5 hover:bg-bright rounded-lg">
                            <figure className="bg-ghost rounded-lg p-[0.3125rem]">
                                <img src="img/dropdown-1.png" alt="Image">
                            </figure>
                            <div className="flex flex-col gap-y-0.5">
                                <div className="font-bold text-1xl flex items-center gap-x-2.5 hover:gap-x-3">
                                    Yatırımlarımız
                                </div>
                                <div>Meraklı insanlar topluluğuna katılın</div>
                            </div>
                        </a>
                        <a href="{{ route('fund') }title="Katma Değer Fonu" className="flex items-center gap-x-5 p-2.5 hover:bg-bright rounded-lg">
                            <figure className="bg-ghost rounded-lg p-[0.3125rem]">
                                <img src="img/dropdown-2.png" alt="Image">
                            </figure>
                            <div className="flex flex-col gap-y-0.5">
                                <div className="font-bold text-1xl flex items-center gap-x-2.5 hover:gap-x-3">
                                    Katma Değer Fonu
                                </div>
                                <div>Yaratıcılar için mikro yatırım fonu</div>
                            </div>
                        </a>
                    </DropdownMenuMolecule>
                </div>
                <div className="relative group">
                    <div className="font-bold lg:text-lg uppercase whitespace-nowrap transition-all hover:text-almost-black/80">Etkinlikler</div>
                    <DropdownMenuMolecule>
                        @foreach (['Hackathonlar' => 'hackathon', 'Networking' => 'networking', 'Canlı Yayınlar' => 'broadcasts'] as $item => $link)
                        <DropdownMenuItemAtom url="{{ route($link) }title="{item }}">
                            <x-slot name="img">
                                <img src="img/dropdown-1.png" alt="Image">
                            </x-slot>
                            <x-slot name="desc">
                                <div>Meraklı insanlar topluluğuna katılın</div>
                            </x-slot>
                        </DropdownMenuItemAtom>
                        @endforeach
                    </DropdownMenuMolecule>
                </div >
            </nav >
        </div >
        <div className="flex items-center lg:gap-x-5 xl:gap-x-7.5">
            <div className="hidden lg:flex items-center lg:gap-x-5 xl:gap-x-7.5">
                <a href="https://twitter.com/komunitecomtr" title="Komünite Twitter" target="_blank">
                    <SVGTwitter className="h-6 transition-all hover:text-neptune" />
                </a>
                <a href="https://youtube.com/komunite" title="Komünite YouTube" target="_blank">
                    <SVGYouTube className="h-6 transition-all hover:text-neptune" />
                </a>
                <a href="https://www.instagram.com/komunitecomtr/" title="Komünite Instagram" target="_blank">
                    <SVGInstagram className="h-6 transition-all hover:text-neptune" />
                </a>
                <a href="https://tr.linkedin.com/company/komunite" title="Komünite Linkedin" target="_blank">
                    <SVGLinkedin className="h-6 transition-all hover:text-neptune" />
                </a>
            </div>
            <details className="details aside-modal">
                <summary>
                    <SVGHamburgerMenu className="h-6 hover:opacity-80" />
                </summary>
                <AsideMenuOrganism />
                <MobileMenuOrganism />
            </details>
        </div>
    </ContainerAtom >
</header >
)
}
