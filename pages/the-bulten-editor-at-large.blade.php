<x-templates.base title="İlan Detayları - the Bülten - Editor-at-Large">
    <section className="mb-7.5 md:mb-10 lg:mb-15">
        <ContainerAtom>
            <div className="flex flex-col items-center gap-y-7.5 lg:gap-y-10 px-5 md:px-15 lg:px-25">
                <figure>
                    <x-svgs.the-bulten-mini className="h-42.5 w-42.5" />
                </figure>
                <TitleH1Atom title="Editor-at-Large" className="text-center" />

                <div className="flex gap-x-7.5 gap-y-7.5 flex-wrap justify-center font-bold text-xxl md:text-2xl lg:text-2.25xl md:leading-snug">
                    <span className="bg-ghost py-2 px-4 rounded-lg">Tam Zamanlı</span>
                    <span className="bg-bubble-gum py-2 px-4 rounded-lg">Deneyimli</span>
                    <span className="bg-turquoise py-2 px-4 rounded-lg">Remote</span>
                </div>
                <div className="flex items-center gap-x-2.5 text-neptune">
                    <figure>
                        <x-svgs.location className="h-7" />
                    </figure>
                    <span className="font-bold text-lg md:text-1xl">Türkiye, USA</span>
                </div>
                <div className="space-y-3.5 md:space-y-5">
                    <p className="text-lg md:text-1xl">
                        Komünite is a micro-funding platform and an indie hacker community for creators in Turkey. We help creators build and scale their micro-saas businesses, design kits, ebooks, dev kits, and all kinds of creator economy products. We have more than 250 members, and we offer education programs, community support, funding, marketing, and sales support to our community members.
                    </p>
                    <p className="text-lg md:text-1xl">
                        Today, designers, trainers, developers, musicians, and professionals from many professions around the world choose to sell their efforts in a value-added way with "productization" methods and techniques. Those who do not productize their time and profession continue to sell their time in return for their monthly salaries.
                    </p>
                    <p className="text-lg md:text-1xl">
                        Turkey's most talented creators come together and try to take their ideas and careers one step further with the help of world-class Komünite. We are not trying to change the world. We are trying to make products that people can use, benefit from, read and learn.
                    </p>
                    <TitleH3Atom title="Roles and Responsibilities:" />
                    <ul className="list-disc text-lg md:text-1xl space-y-2 ml-7">
                        <li>
                            Manage the production and content of the publications to be delivered on time and to the highest quality level of editorial content and expertise
                        </li>
                        <li>
                            Edit a variety of content, including articles, photo essays, and news posts</li>
                        <li>
                            Set the strategic editorial policy for the site that fits the company’s overall goals
                        </li>
                        <li>
                            Meet targets for growing the reach, loyalty, and engagement of the site’s audience</li>
                        <li>
                            Research markets and topic areas to identify the latest information and industry-relevant content</li>
                        <li>
                            Apply SEO best practices at all times
                        </li>
                        <li>
                            Edit content from well-known authors</li>
                        <li>
                            Ensure the site’s work across all platforms meets the highest standards of editorial excellence and positions the site as authoritative and agenda-setting
                        </li>
                    </ul>
                    <TitleH3Atom title="Preferred Qualifications:" />
                    <ul className="list-disc text-lg md:text-1xl space-y-2 ml-7">
                        <li>
                            Experience editing or writing in a corporate blog
                        </li>
                        <li>
                            Ability to generate original ideas for creative and engaging content</li>
                        <li>
                            Excellent written and verbal communication skills
                        </li>
                        <li>
                            Strong collaborative skills, including experience in liaising with stakeholders across the company</li>
                        <li>
                            Experience in a content-focused role</li>
                        <li>
                            Ability to learn quickly
                        </li>
                        <li>
                            Impeccable editing, writing, and headline-writing abilities</li>
                        <li>
                            Solid knowledge of key-related SEO concepts
                        </li>
                        <li>
                            Excellent research and ability to access accurate information
                        </li>
                    </ul>
                    <TitleH3Atom title="Başvuru: ik@komunite.com.tr" />
                </div>
            </div>

        </ContainerAtom>
    </section>
    <section className="mb-7.5 md:mb-10 lg:mb-15">
        <ContainerAtom className="space-y-7.5 md:space-y-10 lg:space-y-15">
            <TitleH3Atom title="Güncel açık pozisyonlar" />
            <div className="grid md:grid-cols-2 md:gap-x-7.5 gap-y-10 md:gap-y-15">
                <x-molecules.career-card company="Komünite" location="Türkiye, USA" title="Social Media Manager
                ">
                    <figure>
                        <x-svgs.komunite-square className="h-16 w-16 rounded" />
                    </figure>
                    <x-slot name="slotDesc">
                        <p>
                            Komünite’nin dışa açılan tüm iletişimini yönetecek, sosyal medya stratejisini geliştirecek ve sosyal medya iletişimini yönetecek, operasyonel bir sosyal medya yöneticisi arıyoruz.
                        </p>
                        <x-atoms.button href="{{route('komunite-social-media-manager')}}" title="Başvurun" className="font-bold md:text-xl lg:text-1xl py-3 px-6 md:py-3.5 md:px-7" />
                    </x-slot>
                </x-molecules.career-card>
                <x-molecules.career-card company="Komünite" location="Türkiye, USA" title="Growth Product Manager">
                    <figure>
                        <x-svgs.komunite-square className="h-16 w-16 rounded" />
                    </figure>
                    <x-slot name="slotDesc">
                        <p>
                            Komünite’nin fonladığı ürünlerin büyümesinden sorumlu olacak ve büyüme ekibini yönetecek, operasyonel bir büyüme uzmanı arıyoruz.
                        </p>
                        <x-atoms.button href="{{route('komunite-growth-product-manager')}}" title="Başvurun" className="font-bold md:text-xl lg:text-1xl py-3 px-6 md:py-3.5 md:px-7" />
                    </x-slot>
                </x-molecules.career-card>
            </div>
        </ContainerAtom>
    </section>
    <x-organisms.newsletter />
</x-templates.base>
