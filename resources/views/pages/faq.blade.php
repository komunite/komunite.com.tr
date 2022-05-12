<x-templates.base title="Sık Sorulan Sorular">
    <section class="mb-10 md:mb-15 lg:mb-20">
        <x-atoms.container class="text-center">
            <x-atoms.title-h1 title="Sık Sorulan Sorular" />
        </x-atoms.container>
    </section>
    <section>
        <x-atoms.container class="space-y-5 md:space-y-7.5">
            @for ($i = 0; $i < 10; $i++) <details class="bg-white p-5 md:p-7.5 rounded-lg">
                <summary class="cursor-pointer text-lg md:text-xxl xl:text-2.25xl xl:leading-snug font-bold flex justify-between gap-x-2 items-center">
                    How do I get Windows 11?
                    <figure>
                        <x-svgs.plus class="h-6 md:h-8" />
                    </figure>
                </summary>
                <p class="md:text-xl lg:text-1xl mt-5">When Windows 11 is ready for your device, it will be available to download and install from the Windows Update page in Settings. Choose a time that works best for you to install the upgrade. You'll then need to restart your device and complete the installation. After that, your device will be running Windows 11.</p>
                </details>
                @endfor
        </x-atoms.container>
    </section>
</x-templates.base>