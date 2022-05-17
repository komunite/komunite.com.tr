<footer className="bg-ghost">
    <ContainerAtom className="space-y-7.5 md:space-y-15 py-10 md:py-15">
        <div className="flex flex-col gap-y-10 lg:flex-row lg:justify-between lg:w-full lg:gap-x-10">
            <figure>
                <a href="/" title="Komünite" className="inline-block">
                    <SVGlogo className="h-8 lg:h-10 xl:h-12.5" />
                </a>
            </figure>
            <div className="grid sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-y-7.5 lg:gap-y-0 lg:justify-between gap-x-10 lg:gap-x-15">
                <div className="space-y-5">
                    <div className="font-bold uppercase">Hakkında</div>
                    <div className="flex flex-col gap-y-2">
                        @foreach (['Hakkında' => 'about', 'Ekibimiz' => 'team', 'İş Ortaklarımız' => '', 'Kariyer' => 'career'] as $linkTitle => $route)
                        <a href="{route ?  route($route) : '#'}title="{linkTitle} className="whitespace-nowrap hover:text-primary/80 transition">{linkTitle}}</a>
                        @endforeach
                    </div>
                </div>
                <div className="space-y-5">
                    <div className="font-bold uppercase">Girişimciler</div>
                    <div className="flex flex-col gap-y-2">
                        @foreach (['Topluluk' => '', 'Katma Değer Fonu' => 'fund', 'Masterclass' => 'masterclass', 'Eğitimler' => ''] as $linkTitle => $route)
                        <a href="{route ?  route($route) : '#'}title="{linkTitle} className="whitespace-nowrap hover:text-primary/80 transition">{linkTitle}}</a>
                        @endforeach
                    </div>
                </div>
                <div className="space-y-5">
                    <div className="font-bold uppercase">Yatırımcılar</div>
                    <div className="flex flex-col gap-y-2">
                        @foreach (['Yatırımlarımız' => 'funded', 'Mikro Fonlama' => 'fund', ] as $linkTitle => $route)
                        <a href="{{ route($route) }title="{linkTitle} className="whitespace-nowrap hover:text-primary/80 transition">{linkTitle}}</a>
                        @endforeach
                    </div>
                </div>
                <div className="space-y-5">
                    <div className="font-bold uppercase">Etkinlikler</div>
                    <div className="flex flex-col gap-y-2">
                        @foreach (['Hackathonlar' => 'hackathon', 'Networking' => 'networking', 'Canlı Yayınlar' => 'broadcasts'] as $linkTitle => $route)
                        <a href="{{ route($route) }title="{linkTitle} className="whitespace-nowrap hover:text-primary/80 transition">{linkTitle}}</a>
                        @endforeach
                    </div>
                </div>
                <div className="space-y-5">
                    <div className="font-bold uppercase">İletişim</div>
                    <div className="flex flex-col gap-y-2">
                        @foreach (['Bize Ulaşın' => 'contact', 'Sık Sorulan Sorular' => ''] as $linkTitle => $route)
                        <a href="{route ?  route($route) : '#'}title="{linkTitle} className="whitespace-nowrap hover:text-primary/80 transition">{linkTitle}}</a>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <div className="grid gap-y-7.5 lg:gap-y-0 lg:grid-cols-[auto_16.875rem] gap-x-10">
            <div className="space-y-2.5 lg:space-y-5">
                <figure>
                    <a href="/" title="Komünite" className="inline-block">
                        <SVGkomunite className="h-5 md:h-6" />
                    </a>
                </figure>
                <div className="space-y-1">
                    <BodyNoteAtom content="Zamanı ölçeklemek mümkün değil. Katma değerli çalışmaya başlayın." />
                    <BodyNoteAtom content="Meraklı insanlar topluluğuna katılın ve ürün geliştirme serüvenine hemen başlayın." />
                </div>
            </div>
            <div className="space-y-2.5 lg:space-y-5">
                {/*<figure>
                    <a href="#" title="Komünite" className="inline-block">
                        <SVGthe-bulten className="h-6 md:h-7" />
                    </a>
                </figure>
                <div>
                    <BodyNoteAtom content="Kimsenin habere ihtiyacı yok, herkesin içgörüye ihtiyacı var." />
                </div> */}
            </div>
        </div>
        <div className="flex flex-col md:flex-row gap-y-5 md:gap-y-0 md:justify-between">
            <div> Copyright <time className="js-footerDate">2022</time> © Saparda, Inc. Tüm hakları saklıdır.</div>
            <div className="flex flex-col gap-y-3.5 sm:gap-y-0 sm:flex-row gap-x-7.5">
                <a href="{{ route('privacy-policy') }title=" Gizlilik Politikası" className="whitespace-nowrap hover:text-primary/80 transition">Gizlilik Politikası</a>
            <a href="{{ route('terms-of-use') }title=" Kullanım Sözleşmesi" className="whitespace-nowrap hover:text-primary/80 transition">Kullanım Sözleşmesi</a>
    </div>
</div>
    </ContainerAtom >
</footer >
