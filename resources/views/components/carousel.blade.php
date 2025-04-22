<style>
    /* Ocultar scroll en todos los navegadores */
    .scrollbar-hidden {
    -ms-overflow-style: none;  /* IE y Edge */
    scrollbar-width: none;     /* Firefox */
    }

    .scrollbar-hidden::-webkit-scrollbar {
    display: none;             /* Chrome, Safari y Opera */
    }
</style>

<section class="bg-gray-100 flex flex-col gap-5 items-center w-full py-10 h-full">
    <header class="flex flex-col gap-4 items-center w-full max-w-[800px]">
        <h2 class="text-3xl font-medium">Choose Your Phone</h2>
        
        <div class="flex justify-center items-center gap-2 w-full max-w-[600px] mx-auto">
            <!-- Línea izquierda -->
            <div class="flex-grow h-[2px] bg-gray-400"></div>
            
            <!-- Texto en el medio -->
            <span 
                class="text-nowrap bg-color_3 text-white font-bold text-lg py-2 px-4 rounded-full text-center"
            >
                25% OFF
            </span>
            
            <!-- Línea derecha -->
            <div class="flex-grow h-[2px] bg-gray-400"></div>
        </div>            
    </header>

    <div class="relative w-full max-w-[830px]">
        <div id="carousel-container" class="w-full overflow-x-auto snap-x snap-mandatory scroll-smooth scrollbar-hidden">
            <section id="carousel" class="flex gap-2 h-full">
                <!-- Artículos del carrusel -->
                @php $loop = 0; @endphp	
                @while ($loop <= 5)
                    <article class="flex-shrink-0 flex flex-col items-center gap-4 w-[270px] bg-white rounded-lg shadow-sm hover:shadow-lg p-4 snap-start">
                        <a href="#">
                            <figure>
                                <img 
                                    src="https://www.euronics.it/dw/image/v2/BFPN_PRD/on/demandware.static/-/Sites-catalog_euronics_master/default/dw3c00864d/hi-res/242000298.jpg?sw=1000&q=90&strip=false" 
                                    alt="Imagen del producto"
                                    class="w-full h-auto rounded-lg shadow-lg"
                                >
                            </figure>
                        </a>
                        <h3 class="font-medium">SAMSUNG - GALAXY S24</h3>
                        <p class="text-gray-500 text-sm font-medium">(256GB | Onyx Black)</p>
                        <div class="flex justify-center gap-2 items-center w-full">
                            <span 
                                class="bg-gradient-to-r from-color_1 via-blue-800 to-blue-500 text-transparent bg-clip-text text-xl font-bold"
                            >
                                € 599,00
                            </span>
                            <span class="relative text-gray-500 text-sm font-medium">
                                € 989,00
                                <span class="absolute top-1/2 left-0 right-0 h-px bg-gray-400"></span>
                            </span>
                        </div>
                        <footer>
                            <a href="#" class="bg-color_1 text-white py-2 px-5 rounded-full font-bold hover:bg-color_2">Comprar</a>
                        </footer>
                    </article>
                    @php $loop++; @endphp
                @endwhile
                
            </section>
        </div>

        <!-- Botones de navegación -->
        <div class="absolute top-1/2 left-2 transform -translate-y-1/2">
            <button 
                id="prevButton" 
                class="flex justify-center items-center bg-color_1 text-white rounded-full p-2 transition duration-300 hover:bg-color_2 hover:fill-color_2"
            >
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5 8.25 12l7.5-7.5" />
                </svg>
            </button>
        </div>
        <div class="absolute top-1/2 right-2 transform -translate-y-1/2">
            <button 
                id="nextButton" 
                class="flex justify-center items-center bg-color_1 text-white rounded-full p-2 transition duration-300 hover:bg-color_2 hover:fill-color_2"
            >
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                </svg>
            </button>
        </div>
    </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const carouselContainer = document.getElementById('carousel-container');
    const prevButton = document.getElementById('prevButton');
    const nextButton = document.getElementById('nextButton');

    function scrollCarousel(direction) {
        const scrollAmount = carouselContainer.offsetWidth * 0.75 * direction;
        carouselContainer.scrollBy({
            left: scrollAmount,
            behavior: 'smooth'
        });
    }

    // Botón Izquierdo
    prevButton.addEventListener('click', () => {
        const scrollLeft = carouselContainer.scrollLeft;
        if (scrollLeft <= 0) {
            // Si ya está al inicio, manda al final
            carouselContainer.scrollTo({
                left: carouselContainer.scrollWidth,
                behavior: 'smooth'
            });
        } else {
            scrollCarousel(-1);
        }
    });

    // Botón Derecho
    nextButton.addEventListener('click', () => {
        const scrollLeft = carouselContainer.scrollLeft;
        const scrollWidth = carouselContainer.scrollWidth;
        const clientWidth = carouselContainer.clientWidth;

        if (scrollLeft + clientWidth >= scrollWidth - 1) {
            // Si ya está al final, manda al inicio
            carouselContainer.scrollTo({
                left: 0,
                behavior: 'smooth'
            });
        } else {
            scrollCarousel(1);
        }
    });
});

</script>
