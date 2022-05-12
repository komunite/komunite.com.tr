<x-templates.base title="İlan Detayları">
    <section class="mb-7.5 md:mb-10 lg:mb-15">
        <x-atoms.container>
            <div class="flex flex-col items-center gap-y-7.5 lg:gap-y-10 px-5 md:px-15 lg:px-25">
                <figure>
                    <x-svgs.komunite-square class="h-42.5 w-42.5" />
                </figure>
                <x-atoms.title-h1 title="Growth Product Manager" class="text-center" />

                <div class="flex gap-x-7.5 gap-y-7.5 flex-wrap justify-center font-bold text-xxl md:text-2xl lg:text-2.25xl md:leading-snug">
                    <span class="bg-ghost py-2 px-4 rounded-lg">Tam Zamanlı</span>
                    <span class="bg-bubble-gum py-2 px-4 rounded-lg">Orta Seviye</span>
                    <span class="bg-turquoise py-2 px-4 rounded-lg">Remote</span>
                </div>
                <div class="flex items-center gap-x-2.5 text-neptune">
                    <figure>
                        <x-svgs.location class="h-7" />
                    </figure>
                    <span class="font-bold text-lg md:text-1xl">Türkiye, USA</span>
                </div>
                <div class="space-y-3.5 md:space-y-5">
                    <p class="text-lg md:text-1xl">
                        Komünite is a micro-funding platform and an indie hacker community for creators in Turkey. We help creators build and scale their micro-saas businesses, design kits, ebooks, dev kits and all kinds of creator economy products. We have more than 250 members and we offer education programs, community support, funding, marketing and sales support to our community members.
                    </p>
                    <p class="text-lg md:text-1xl">
                        Today designers, trainers, developers, musicians and professionals from many professions around the world choose to sell their efforts in a value-added way with "productization" methods and techniques. Those who don’t start their own “productization” process, continue to sell their time in return for their monthly salaries.
                    </p>
                    <p class="text-lg md:text-1xl">
                        Turkey's most talented creators come together and try to take their ideas and careers one step further with becoming a member of Komünite, in which they are treated in wordly standards. We are not trying to change the world. We are trying to make products that people can use, benefit from, read and learn.
                    </p>
                    <x-atoms.title-h3 title="Roles and Responsibilities:" />
                    <ul class="list-disc text-lg md:text-1xl space-y-2 ml-7">
                        <li>
                            Define product roadmaps, identify, prioritize and scope the right problems and opportunities to focus on next
                        </li>
                        <li>
                            The flexibility to quickly adapt and produce in a rapidly changing environment, meeting aggressive product launch schedules </li>
                        <li>
                            Research industry trends and competitive landscape to quickly act on opportunities as they come up </li>
                        <li>
                            Create and maintain clear, concise product briefs and required documents supported by market research, field input, user research and product data, and then translate them into product specifications, epics, and user stories for engineers to develop </li>
                        <li>
                            Identify and prioritize unmet user needs and translate them into product requirements </li>
                        <li>
                            Propose and implement successful optimization strategies and solutions based on data. Drive product evolution through data analysis and user feedback </li>
                        <li>
                            Analyze the market and competition, compare the product against the current industry standards and trends, and anticipate future ones </li>
                        <li>
                            Great attention to detail coupled with the knowledge to see the bigger picture, prioritize competing needs and provide extreme clarity to your team and partners </li>
                    </ul>
                    <x-atoms.title-h3 title="Preferred Qualifications:" />
                    <ul class="list-disc text-lg md:text-1xl space-y-2 ml-7">
                        <li>
                            Have a growth mindset, be innately curious, strive to learn new things and share them with others </li>
                        <li>
                            Have experience managing digital products </li>
                        <li>
                            Prone to teamwork</li>
                        <li>
                            Experience of going through a full product lifecycle, integrating customer feedback into product requirements, driving prioritization and pre/post-launch execution</li>
                        <li>
                            Have great written and verbal communication skills (both Turkish and English) to create and walk others through presentations, prototypes, and documentation</li>
                        <li>
                            Are familiar with product design and prototype tools such as Figma, Sketch, InVision, etc.</li>
                        <li>
                            Experience and working knowledge of performance metric analysis</li>
                        <li>
                            Advanced knowledge of, Google Ads, Google Data Studio, GA4, influencer marketing,...</li>
                        <li>
                            Strong understanding of SEO and web traffic metrics
                        </li>
                    </ul>
                </div>
            </div>

        </x-atoms.container>
    </section>
    <section class="mb-7.5 md:mb-10 lg:mb-15">
        <x-atoms.container class="space-y-7.5 md:space-y-10 lg:space-y-15">
            <x-atoms.title-h3 title="Güncel açık pozisyonlar" />
            <div class="grid md:grid-cols-2 md:gap-x-7.5 gap-y-10 md:gap-y-15">
                <x-molecules.career-card company="Komünite.com.tr" location="Türkiye, USA" title="Growth Product Expert">
                    <figure>
                        <x-svgs.komunite-square class="h-16 w-16 rounded" />
                    </figure>
                </x-molecules.career-card>
                <x-molecules.career-card company="Omnicourse" location="Türkiye, USA" title="Creator Relations Expert">
                    <figure>
                        <img src="img/omnicourse.png" alt="Omnicourse" class="h-16 w-16 object-cover">
                    </figure>
                </x-molecules.career-card>
            </div>
        </x-atoms.container>
    </section>
    <section class="mb-10 md:mb-15 lg:mb-20">
        <x-atoms.container class="text-center">
            <x-atoms.title-h4 title="Türkiye’de yaratıcı ekonomisinin kalbinde yer almak ister misiniz?" class="mb-2.5" />
            <p class="text-lg md:text-1xl mb-7.5">
                Günde 8 saat, her gün aynı işi yapıp, yılda bir defa zam almaktan sıkılmadınız mı?
            </p>
            <x-atoms.button href="#" title="Kariyer Fırsatları" class="font-bold text-xl md:text-1xl xl:text-2xl py-3 px-6 lg:py-3.5 lg:px-7.5" />
        </x-atoms.container>
    </section>
    <x-organisms.newsletter />
</x-templates.base>