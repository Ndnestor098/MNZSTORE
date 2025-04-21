<section class="font-poppins w-full h-full flex justify-evenly flex-wrap gap-12 lg:flex-nowrap lg:gap-0 lg:h-panel items-center bg-gradient-to-r from-color_1 via-color_2 to-color_3">
    <div class="flex flex-col gap-4 justify-center items-center text-white max-w-[510px] px-2 mt-2 sm:mt-0">
        <h1 class="text-5xl sm:text-7xl font-bold">The best landing page for your digital product.</h1>
        
        <p class="text-xl">Our cloud computing platform was built with simplicity so managing infrastructure is easy.</p>
        
        <div class="w-full flex items-center gap-4 relative justify-center sm:justify-normal">
            <a href="" class="transition ease-out duration-400 py-3 px-9 sm:py-4 sm:px-10 bg-[#084db0] sm:bg-color_2 text-xl font-bold rounded hover:shadow-principal_hover">
                Leer Mas
            </a>
        </div>
    </div>

    <div 
        id="container-hero" 
        class="flex justify-center items-center max-w-[500px] relative bg-transparent mb-5 overflow-hidden
                sm:mb-0
                after:content-[''] after:border-4 after:border-white after:absolute after:top-0 after:left-0 after:w-full after:h-full after:rounded-full after:z-0 after:opacity-25
                before:content-[''] before:border-4 before:border-white before:absolute before:w-72 before:h-72 before:rounded-full before:z-0 before:opacity-25">
        <div id="slider" class="flex transition-transform duration-500">
            <img class="z-10 object-cover w-full flex-shrink-0" src="https://quomodosoft.com/html/jupiter/jupiter/assets/images/w1.png" alt="">
            <img class="z-10 object-cover w-full flex-shrink-0" src="https://quomodosoft.com/html/jupiter/jupiter/assets/images/w1.png" alt="">
            <img class="z-10 object-cover w-full flex-shrink-0" src="https://quomodosoft.com/html/jupiter/jupiter/assets/images/w1.png" alt="">
        </div>
        <div>
            <!-- Botones de navegación -->
            <div class="absolute top-1/2 left-2 transform -translate-y-1/2 z-20">
                <button 
                    onclick="moveLeft()" 
                    class="flex justify-center items-center bg-color_1 text-white rounded-full p-2 transition duration-300 hover:bg-color_2 hover:fill-color_2"
                >
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5 8.25 12l7.5-7.5" />
                    </svg>
                </button>
            </div>
            <div class="absolute top-1/2 right-2 transform -translate-y-1/2 z-20">
                <button 
                    onclick="moveRight()" 
                    class="flex justify-center items-center bg-color_1 text-white rounded-full p-2 transition duration-300 hover:bg-color_2 hover:fill-color_2"
                >
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                    </svg>
                </button>
            </div>
        </div>
    </div>
</section>

<script>
    let position = 0;
    const slider = document.getElementById("slider");
    const totalImages = slider.children.length;
    const carouselContainerHero = document.getElementById('container-hero');

    function moveLeft() {
        // Si está en la primera imagen, saltamos a la última
        if (position === 0) {
            position = totalImages - 1;
        } else {
            position--;
        }
        updateSlider();
    }

    function moveRight() {
        // Si está en la última imagen, volvemos al inicio
        if (position === totalImages - 1) {
            position = 0;
        } else {
            position++;
        }
        updateSlider();
    }

    function updateSlider() {
        const containerWidth = carouselContainerHero.offsetWidth;
        const translateX = -position * containerWidth;
        slider.style.transform = `translateX(${translateX}px)`;

        if(position === totalImages){
            
        }
    }
    setInterval(moveRight, 5000); // Cambia la imagen cada 5 segundos
</script>