<x-templates.base title="Ekibimiz">
    <section className="mb-10 md:mb-15 lg:mb-20">
        <ContainerAtom className="space-y-7.5 xl:space-y-10">
            <div className="grid lg:justify-between lg:grid-cols-2 xl:grid-cols-[36.5rem_auto] gap-y-7.5 lg:gap-y-0 md:gap-x-20">
                <div className="space-y-7.5 lg:space-y-10">
                    <TitleH1Atom title="Komünite’nin rüya takımı ile tanışın" className="w-4/5" />
                    <div className="flex flex-wrap gap-y-5 gap-x-5 xl:gap-x-7.5">
                        @foreach (['Yaratıcı Ekonomisi', 'Topluluk Yönetimi', 'Girişimcilik', 'Büyük İstifa', 'Yatırımcılık', 'NFT', 'Micro-SaaS', 'Uzaktan Çalışma'] as $item)
                        <div className="font-bold text-lg md:text-1xl flex items-center justify-center py-2 md:py-3 px-4 md:px-5 xl:px-7 border-2 border-solid border-almost-black rounded-lg whitespace-nowrap transition-all hover:bg-almost-black hover:text-bright">
                            {{ $item }}</div>
                        @endforeach
                    </div>
                </div>
                <figure className="justify-self-center lg:justify-self-start">
                    <img loading="lazy" src="img/team-illustration.svg" alt="Team Illustration" className="object-cover">
                </figure>
            </div>
            <p className="text-lg md:text-1xl">
                Yeni disiplinler öğrenerek kariyerinizi ileriye götürmek, fikirlerinizi hayata geçirip büyütmek ve yaşam
                boyu arkadaşlar edinmek istiyorsanız Komünite tam size göre.
            </p>
        </ContainerAtom>
    </section>
    <section className="mb-5 md:mb-7.5 lg:mb-10">
        <ContainerAtom className="space-y-7.5 md:space-y-10">
            <div className="space-y-3.5 md:space-y-5 text-center">
                <TitleH2Atom title="Ekibimiz" />
                <p className="text-lg md:text-1xl">
                    Günde 8 saat, her gün aynı işi yapıp, yılda bir defa zam almaktan sıkılmadınız mı?
                </p>
            </div>
            <div className="grid sm:grid-cols-2 lg:grid-cols-4 gap-x-5 md:gap-x-7.5 gap-y-7.5 md:gap-y-10">
                <x-molecules.team-card imgSrc="img/FatihGuner.png" name="Fatih Güner" title="CEO @ Komünite" twitterLink="https://twitter.com/fatihguner " linkedinLink="https://www.linkedin.com/in/fatihguner" />
                <x-molecules.team-card imgSrc="img/umut-karapece.png" name="Umut Karapeçe" title="Chief Community Officer @ Komünite" linkedinLink="https://www.linkedin.com/in/umut-karapece/" />
                <x-molecules.team-card imgSrc="img/yucel-faruk-sahan.png" name="Yücel Faruk Şahan" title="Creator Relations Manager @ Komünite" twitterLink="https://twitter.com/yucelfaruksahan " linkedinLink="https://www.linkedin.com/in/yucelfaruksahan/ " />
                <x-molecules.team-card imgSrc="img/damla-karakolcu.jpeg" name="Damla Karakolcu" title="Community Coordinator @ Komünite" twitterLink="https://twitter.com/damla_karakolcu " linkedinLink="https://www.linkedin.com/in/damlakarakolcu/ " />
                <x-molecules.team-card imgSrc="img/enes-doke.jpeg" name="Enes Döke" title="Growth Product Coordinator @ Komünite" linkedinLink="https://www.linkedin.com/in/enesdoke" />
            </div>
        </ContainerAtom>
    </section>
    <section className="mb-10 md:mb-15 lg:mb-20">
        <ContainerAtom>
            <div className="bg-ghost py-7.5 lg:py-10 px-5 md:px-15 lg:px-25 rounded-lg text-center">
                <TitleH4Atom title="Türkiye’de yaratıcı ekonomisinin kalbinde yer almak ister misiniz?" className="mb-2.5" />
                <p className="text-lg md:text-1xl mb-7.5">
                    Günde 8 saat, her gün aynı işi yapıp, yılda bir defa zam almaktan sıkılmadınız mı?
                </p>
                <x-atoms.button href="#" title="Kariyer Fırsatları" className="font-bold text-xl md:text-1xl xl:text-2xl py-3 px-6 lg:py-3.5 lg:px-7.5" />
            </div>
        </ContainerAtom>
    </section>
    <section className="mb-7.5 md:mb-10 lg:mb-15">
        <ContainerAtom className="text-center">
            <div className="font-bold uppercase mb-2.5">Prensiplerimiz</div>
            <TitleH2Atom title="Güçlü büyüyen ve merkezine insanı alan bir topluluk kültürü" className="mb-7.5 md:mb-10" />
            <div className="grid sm:grid-cols-2 lg:grid-cols-3 gap-5 lg:gap-7.5">
                <x-molecules.principle-card imgSrc="img/principle-1.png" title="Şeffafız" content="Topluluk kültürümüzü oluşturan temel taşlardan biri de “açık iletişim”. Topluluğumuzun içerisindeki tüm süreçleri ve iletişimi şeffaflık ilkemizi esas alarak kurguluyoruz.
                " />
                <x-molecules.principle-card imgSrc="img/principle-2.png" title="Öğrenciyiz" content="Öğrenmek, gelişmek ve geliştirmek bizim yaşam tarzımız. Ekibimiz, öğrenmeyi hiç bırakmayan profesyonellerden oluşuyor." />
                <x-molecules.principle-card imgSrc="img/principle-3.png" title="İşimizi seviyoruz" content="Türkiye’nin en yetenekli yaratıcılarını bir araya getirmeye ve bir “üretme kültürü” oluşturmaya çalışıyoruz. Her küçük başarıdan, biz de besleniyoruz." />

                <x-molecules.principle-card imgSrc="img/principle-5.png" title="Nazik ve saygılıyız" content="Topluluğumuz içerisinde bulunan 60’dan fazla alt uzmanlık alanı, Dünya’nın dört bir yanından ve farklı profillere sahip 300’den fazla topluluk üyesi ve 18-62 yaş aralığımız ile tüm din, dil, ırk ve kişisel tercihlere karşı nazik ve saygılıyız." />
                <x-molecules.principle-card imgSrc="img/principle-6.png" title="Çeşitliliğe inanıyoruz" content="Çeşitlilik sayesinde yeni bakış açıları kazanacağımıza ve farklı geri bildirimlerle hizmetlerimizi ve danışmanlığımızı çok daha ileriye götüreceğimize inanıyoruz.
                " />
                <x-molecules.principle-card imgSrc="img/principle-4.png" title="Motivasyonumuz tam" content="Türkiye’nin yaratıcı yetenekleri ile yaratıcı ekonomiye dünya çapında etkiler yaratabileceğimizi biliyoruz." />
            </div>
        </ContainerAtom>
    </section>
    <section className="mb-10 md:mb-15 lg:mb-20">
        <ContainerAtom className="text-center">
            <TitleH4Atom title="Değerlerimiz seni heyecanlandırıyorsa, ekibimize katıl!" className="mb-2.5" />
            <p className="text-lg md:text-1xl mb-7.5">
                Türkiye’de yaratıcı ekonomisinin kalbinde yer almak ister misiniz?
            </p>
            <x-atoms.button href="{{ route('career') }}" title="Kariyer Fırsatları" className="font-bold text-xl md:text-1xl xl:text-2xl py-3 px-6 lg:py-3.5 lg:px-7.5" />
        </ContainerAtom>
    </section>
    <x-organisms.newsletter />
</x-templates.base>
