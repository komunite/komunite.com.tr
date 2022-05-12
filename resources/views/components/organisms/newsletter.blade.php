<section {{ $attributes }}>
    <x-atoms.container>
        <div class="bg-white grid md:grid-cols-[28rem_auto] lg:grid-cols-[41.25rem_auto] md:items-center md:justify-between gap-y-7.5 md:gap-x-8 p-5 md:p-7.5 rounded-lg">
            <div class="space-y-5 md:space-y-7.5">
                <x-atoms.title-h4 title="Yeniliklerimizi herkesten önce öğrenmek için bültene üye olun!" />
                <div class="space-y-1.5">
                    <div class="flex">
                        <input type="email" required placeholder="Eposta adresiniz" class="bg-bright md:text-lg lg:text-1xl w-full md:placeholder:text-lg lg:md:placeholder:text-1xl placeholder:text-neptune py-5 px-5 focus-visible:outline-neptune rounded-tl-lg rounded-bl-lg">
                        <a data-formkit-toggle="d1e7ad420a" href="https://komunite.ck.page/d1e7ad420a" aria-label="Bültene üye ol!" class="bg-black text-white p-2 sm:p-3 rounded-tr-lg rounded-br-lg">
                            <x-svgs.arrow-right title="Yeniliklerimizi herkesten önce öğrenmek için bültene üye olun!" class="h-9 md:h-12 text-bright" />
                        </a>
                    </div>
                    <x-atoms.body-note content="Üyelikten istediğiniz an çıkabilirsiniz. Merak etmeyin, spam yapmıyoruz." />
                    <a href="{{ route('privacy-policy') }}" title="Gizlilik Politikası" class="underline inline-block" target="_blank">Gizlilik politikamızı gözden geçirin.</a>
                </div>
            </div>
            <figure class="justify-self-center lg:justify-self-start">
                <img loading="lazy" src="img/newsletter-illustration.svg" alt="Newsletter Illustration" class="h-48 md:h-auto object-cover">
            </figure>
        </div>
    </x-atoms.container>
</section>