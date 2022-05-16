<aside className="hidden md:block md:fixed -right-full top-0 bg-bright transition-all duration-300 md:w-2/3 lg:w-1/2 h-screen pt-15 px-15 pb-25  overflow-y-auto z-30 md:space-y-7.5 xl:space-y-10 js-headerAsideMenu">
    <header className="flex items-center justify-between space-x-5 2xl:w-2/3">
        <a href="/" title="Komünite">
            <x-svgs.komunite-logo className="h-9" />
        </a>
        <button type="button" aria-label="Hamburger Menu Button" className="js-headerAsideMenuBtn">
            <x-svgs.close className="w-10" />
        </button>
    </header>
    <div className="md:w-3/4 xl:w-7/12 md:space-y-7.5 xl:space-y-10">
        <p className="text-lg md:text-1xl">Zamanı ölçeklemek mümkün değil. Katma değerli çalışmaya başlayın.</p>
        <div className="grid md:grid-cols-2 md:gap-7.5 lg:gap-10">
            <div className="space-y-5">
                <div className="font-bold uppercase">Girişimciler</div>
                <div className="flex flex-col gap-y-2">
                    @foreach (['Topluluk' => '', 'Katma Değer Fonu' => 'fund', 'Masterclass' => 'masterclass', 'Eğitimler' => ''] as $linkTitle => $route)
                    <a href="{{ $route ?  route($route) : '#' }}" title="{{ $linkTitle }}" className="whitespace-nowrap hover:text-primary/80 transition">{{ $linkTitle }}</a>
                    @endforeach
                </div>
            </div>
            <div className="space-y-5">
                <div className="font-bold uppercase">Yatırımcılar</div>
                <div className="flex flex-col gap-y-2">
                    @foreach (['Yatırımlarımız' => 'funded', 'Mikro Fonlama' => 'fund',] as $linkTitle => $route)
                    <a href="{{ route($route) }}" title="{{ $linkTitle }}" className="whitespace-nowrap hover:text-primary/80 transition">{{ $linkTitle }}</a>
                    @endforeach
                </div>
            </div>
            <div className="space-y-5">
                <div className="font-bold uppercase">Hakkında</div>
                <div className="flex flex-col gap-y-2">
                    @foreach (['Hakkında' => 'about', 'Ekibimiz' => 'team', 'Kariyer' => 'career'] as $linkTitle => $route)
                    <a href="{{ route($route) }}" title="{{ $linkTitle }}" className="whitespace-nowrap hover:text-primary/80 transition">{{ $linkTitle }}</a>
                    @endforeach
                </div>
            </div>
            <div className="space-y-5">
                <div className="font-bold uppercase">Etkinlikler</div>
                <div className="flex flex-col gap-y-2">
                    @foreach (['Hackathonlar' => 'hackathon', 'Networking' => 'networking', 'Canlı Yayınlar' => 'broadcasts'] as $linkTitle => $route)
                    <a href="{{ route($route) }}" title="{{ $linkTitle }}" className="whitespace-nowrap hover:text-primary/80 transition">{{ $linkTitle }}</a>
                    @endforeach
                </div>
            </div>
        </div>
        <div className="flex items-center md:gap-x-7.5 lg:gap-x-10">
            <div className="font-bold uppercase">İletişim</div>
            <a href="{{ route('contact') }}" title="Bize Ulaşın" className="whitespace-nowrap hover:text-primary/80 transition">Bize Ulaşın</a>
            <a href="#" title="Sık Sorulan Sorular" className="whitespace-nowrap hover:text-primary/80 transition">Sık
                Sorulan Sorular</a>
        </div>
        <div className="flex items-center md:gap-x-5 xl:gap-x-7.5">
            <a href="https://twitter.com/komunitecomtr" title="Komünite Twitter" target="_blank">
                <x-svgs.twitter className="h-9 transition-all hover:text-neptune" />
            </a>
            <a href="https://youtube.com/komunite" title="Komünite YouTube" target="_blank">
                <x-svgs.youtube className="h-9 transition-all hover:text-neptune" />
            </a>
            <a href="https://www.instagram.com/komunitecomtr/" title="Komünite Instagram" target="_blank">
                <x-svgs.instagram className="h-9 transition-all hover:text-neptune" />
            </a>
            <a href="https://tr.linkedin.com/company/komunite" title="Komünite Linkedin" target="_blank">
                <x-svgs.linkedin className="h-9 transition-all hover:text-neptune" />
            </a>
        </div>
        <div className="space-y-2.5">
            <div className="whitespace-nowrap hover:text-primary/80 transition class flex items-center md:gap-x-7.5 lg:gap-x-10">
                <a href="{{ route('privacy-policy') }}" title="Gizlilik Politikası">Gizlilik Politikası</a>
                <a href="{{ route('terms-of-use') }}" title="Kullanım Sözleşmesi">Kullanım Sözleşmesi</a>
            </div>
            <div> Copyright <time className="js-footerDate">2022</time> © Saparda, Inc. Tüm hakları saklıdır.</div>
        </div>
</aside>
