<header>
    <ContainerAtom className="flex items-center justify-between py-7.5 xl:py-10 border-b-2 border-solid border-almost-black">
        <div className="flex items-center md:gap-x-5 lg:gap-x-10 xl:gap-x-15">
            <figure>
                <a href="/" title="Komünite">
                    <x-svgs.logo className="h-8 lg:h-10 xl:h-11.5" />
                </a>
            </figure>
            <nav className="hidden md:flex items-center md:gap-x-5 xl:gap-x-7.5">
                <div className="relative group">
                    <a href="{{ route('about') }}" title="Hakkında" className="font-bold lg:text-lg uppercase whitespace-nowrap transition-all hover:text-almost-black/80">Hakkında</a>
                </div>
                <div className="relative group">
                    <div className="font-bold lg:text-lg uppercase whitespace-nowrap transition-all hover:text-almost-black/80">Girişimciler
                        İçin</div>
                    <x-molecules.dropdown-menu-with-side>
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
                        <a href="{{ route('fund') }}" title=" Katma Değer Fonu" className="flex items-center gap-x-5 p-2.5 hover:bg-bright rounded-lg">
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
                        <a href="{{ route('masterclass') }}" title="Masterclass" className="flex items-center gap-x-5 p-2.5 hover:bg-bright rounded-lg">
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
                    </x-molecules.dropdown-menu-with-side>
                </div>
                <div className="relative group">
                    <div className="font-bold lg:text-lg uppercase whitespace-nowrap transition-all hover:text-almost-black/80">Yatırımcılar
                        İçin</div>
                    <x-molecules.dropdown-menu>
                        <a href="{{ route('funded') }}" title="Yatırımlarımız" className="flex items-center gap-x-5 p-2.5 hover:bg-bright rounded-lg">
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
                        <a href="{{ route('fund') }}" title="Katma Değer Fonu" className="flex items-center gap-x-5 p-2.5 hover:bg-bright rounded-lg">
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
                    </x-molecules.dropdown-menu>
                </div>
                <div className="relative group">
                    <div className="font-bold lg:text-lg uppercase whitespace-nowrap transition-all hover:text-almost-black/80">Etkinlikler</div>
                    <x-molecules.dropdown-menu>
                        @foreach (['Hackathonlar' => 'hackathon', 'Networking' => 'networking', 'Canlı Yayınlar' => 'broadcasts'] as $item => $link)
                        <x-atoms.dropdown-menu-item url="{{ route($link) }}" title="{{ $item }}">
                            <x-slot name="img">
                                <img src="img/dropdown-1.png" alt="Image">
                            </x-slot>
                            <x-slot name="desc">
                                <div>Meraklı insanlar topluluğuna katılın</div>
                            </x-slot>
                        </x-atoms.dropdown-menu-item>
                        @endforeach
                    </x-molecules.dropdown-menu>
                </div>
            </nav>
        </div>
        <div className="flex items-center lg:gap-x-5 xl:gap-x-7.5">
            <div className="hidden lg:flex items-center lg:gap-x-5 xl:gap-x-7.5">
                <a href="https://twitter.com/komunitecomtr" title="Komünite Twitter" target="_blank">
                    <x-svgs.twitter className="h-6 transition-all hover:text-neptune" />
                </a>
                <a href="https://youtube.com/komunite" title="Komünite YouTube" target="_blank">
                    <x-svgs.youtube className="h-6 transition-all hover:text-neptune" />
                </a>
                <a href="https://www.instagram.com/komunitecomtr/" title="Komünite Instagram" target="_blank">
                    <x-svgs.instagram className="h-6 transition-all hover:text-neptune" />
                </a>
                <a href="https://tr.linkedin.com/company/komunite" title="Komünite Linkedin" target="_blank">
                    <x-svgs.linkedin className="h-6 transition-all hover:text-neptune" />
                </a>
            </div>
            <details className="details aside-modal">
                <summary>
                    <x-svgs.hamburger-menu className="h-6 hover:opacity-80" />
                </summary>
                <x-organisms.aside-menu />
                <x-organisms.mobile-menu />
            </details>
        </div>
    </ContainerAtom>
</header>
