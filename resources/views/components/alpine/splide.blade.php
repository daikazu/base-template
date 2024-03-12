<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.0.7/dist/css/splide.min.css" />
<script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.0.7/dist/js/splide.min.js"></script>

<style>
    .splide__pagination__page.is-active {
        background: #333;
    }
</style>

<div
    x-data="{
        init() {
            new Splide(this.$refs.splide, {
                perPage: 2,
                gap: '0.5rem',
                breakpoints: {
                    640: {
                        perPage: 1,
                    },
                },
            }).mount()
        },
    }"
>
    <section x-ref="splide" class="splide" aria-label="Splide/Alpine.js Carousel Example">
        <div class="splide__track">
            <ul class="splide__list">
                <li class="splide__slide flex flex-col items-center justify-center pb-8">
                    <img class="w-full" src="https://picsum.photos/800/400?random=1" alt="placeholder image" />
                </li>

                <li class="splide__slide flex flex-col items-center justify-center pb-8">
                    <img class="w-full" src="https://picsum.photos/800/400?random=2" alt="placeholder image" />
                </li>

                <li class="splide__slide flex flex-col items-center justify-center pb-8">
                    <img class="w-full" src="https://picsum.photos/800/400?random=3" alt="placeholder image" />
                </li>

                <li class="splide__slide flex flex-col items-center justify-center pb-8">
                    <img class="w-full" src="https://picsum.photos/800/400?random=4" alt="placeholder image" />
                </li>

                <li class="splide__slide flex flex-col items-center justify-center pb-8">
                    <img class="w-full" src="https://picsum.photos/800/400?random=5" alt="placeholder image" />
                </li>

                <li class="splide__slide flex flex-col items-center justify-center pb-8">
                    <img class="w-full" src="https://picsum.photos/800/400?random=6" alt="placeholder image" />
                </li>

                <li class="splide__slide flex flex-col items-center justify-center pb-8">
                    <img class="w-full" src="https://picsum.photos/800/400?random=7" alt="placeholder image" />
                </li>

                <li class="splide__slide flex flex-col items-center justify-center pb-8">
                    <img class="w-full" src="https://picsum.photos/800/400?random=8" alt="placeholder image" />
                </li>
            </ul>
        </div>
    </section>
</div>
