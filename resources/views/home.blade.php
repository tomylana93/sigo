<x-layout>
    @seoTitle(__('Home'))
    <section class="relative overflow-hidden py-56" id="slider">
        <div class="absolute top-0 right-0 hidden h-auto w-1/2 md:block">
            Background
        </div>
        <div class="mx-auto max-w-7xl md:px-8">
            <div class="flex lg:items-center">
                <div class="md:w-1/2" data-aos="fade-right" data-aos-duration="2000">
                    <h1 class="mb-6 text-3xl font-semibold lg:text-4xl xl:text-5xl">We specialize in UI/UX, Web Development, Digital Marketing.</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit, atque ut laudantium dolorem libero numquam recusandae iste veniam ea autem tenetur praesentium ullam commodi, reiciendis qui. Omnis, maxime vel. Facere.</p>
                    <div class="mt-10 flex flex-row-reverse gap-7 lg:flex-row">
                        <x-splade-button type="link" href="#">{{ __('Get Started Now') }}</x-splade-button>
                        <span class="flex flex-col">
                            <Link href="#">{{ __('Call us 0812-1276-0987') }}</Link>
                            <span>{{ __('For any question') }}</span>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="features">
        <div class="mx-auto max-w-7xl md:px-8">
            Konten Fitur
        </div>
    </section>
    <x-splade-script>
        AOS.init();
    </x-splade-script>
</x-layout>
