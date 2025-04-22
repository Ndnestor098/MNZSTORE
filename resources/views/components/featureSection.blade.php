<style>
    .slider-dot::before {
        content: '';
        position: absolute;
        top: 50%;
        left: 50%;
        width: 0.25rem;
        height: 0.25rem;
        background-color: white;
        border-radius: 9999px; /* rounded-full */
        transform: translate(-50%, -50%);
        transition: background-color 0.3s;
    }

    .slider-dot:hover::before {
        background-color: rgb(129 173 230 / var(--tw-bg-opacity, 1));
    }

</style>

<section 
  class="relative gap-5 items-center justify-around w-full py-10 h-full bg-feature-section bg-no-repeat bg-cover bg-center
         before:content-[''] before:absolute before:inset-0 before:bg-black before:opacity-70"
>
    <!-- Contenedor del slider -->
    <div id="container-feature" class="relative z-10 w-full overflow-hidden">
        <div id="slider-feature" class="flex transition-transform duration-500 ease-in-out w-[400%]">
            @php $loop = 0; @endphp	
            @while ($loop <= 3)
                <article class="w-full flex flex-col sm:flex-row gap-5 items-center justify-around px-5">
                    <div class="w-full flex justify-end">
                        <img 
                            class="w-full h-auto max-w-3xl mx-auto"
                            src="https://dlcdnwebimgs.asus.com/gain/096bd769-b48d-41ea-9eb5-7d305aa8a6fe/w800" 
                            alt="computer feature section">
                    </div>
                    <div class="w-full flex flex-col justify-center items-start gap-3">
                        <h2 class="text-5xl font-bold text-white mb-2">
                            Zenbook Pro 14 OLED (UX6404)
                        </h2>
                        <p class="text-lg text-gray-300 mb-4">
                            Display OLED da 14,5" 2,8K (2880 x 1800) 120Hz
                        </p>
                        <div class="flex justify-start gap-2 items-center w-full">
                            <span 
                                class="bg-gradient-to-r from-white via-gray-300 to-gray-400 text-transparent bg-clip-text text-xl font-bold"
                            >
                                € 599,00
                            </span>
                            <span class="relative text-gray-400 text-xs font-medium">
                                € 989,00
                                <span class="absolute top-1/2 left-0 right-0 h-px bg-gray-400"></span>
                            </span>
                        </div>
                        <a 
                            href="#"
                            class="w-36 bg-color_1 text-white py-2 px-5 rounded-full font-bold hover:bg-color_2"
                        >
                            Comprar
                        </a>
                    </div>
                </article>
                @php $loop++; @endphp
            @endwhile
        </div>

        
    </div>
    <!-- Botones -->
    <div id="button-section" class="absolute bottom-4 sm:bottom-10 left-0 right-0 flex justify-center gap-5 z-20">
    </div>
</section>
<script>
    let positionFeature = 0;
    const sliderFeature = document.getElementById("slider-feature");
    const totalImagesFeature = sliderFeature.children.length;
    const carouselContainerFeature = document.getElementById('container-feature');

    const buttonSection = document.getElementById('button-section');

    // Crear botones de navegación
    for (let index = 1; index <= totalImagesFeature; index++) {
        let button = document.createElement('button');
        let div = document.createElement('div');

        button.className = "relative";
        button.setAttribute('onclick', `moveTo(${index - 1})`);  // Le paso el índice (index - 1 porque el contador comienza en 1)

        div.className = `border-2 border-white rounded-full w-3 h-3 hover:border-color_4 ${index == 1 && 'slider-dot'}`;
        div.setAttribute('id', `index-${index - 1}`);  // Le paso el índice (index - 1 porque el contador comienza en 1)

        button.appendChild(div);
        buttonSection.appendChild(button);
    }

    // Función que mueve el slider a la imagen correspondiente según el índice
    function moveTo(index) {
        positionFeature = index; // Actualizamos la posición
        updateSliderFeature(); // Actualizamos el slider
    }

    // Función que mueve el slider hacia la derecha
    function moveRightFeature() {
        if (positionFeature === totalImagesFeature - 1) {
            positionFeature = 0;  // Si está en la última imagen, volvemos al inicio
        } else {
            positionFeature++;
        }
        
        updateSliderFeature();
    }

    // Función que actualiza el slider
    function updateSliderFeature() {
        const containerWidth = carouselContainerFeature.offsetWidth;
        const translateX = -positionFeature * containerWidth; // Desplaza el slider hacia la izquierda
        sliderFeature.style.transform = `translateX(${translateX}px)`;

        // Eliminar la clase 'slider-dot' de todos los botones
        for (let index = 0; index < totalImagesFeature; index++) {
            const button = document.getElementById(`index-${index}`); // Obtén el botón por su ID
            if (button) {
                button.classList.remove('slider-dot');  // Remover la clase 'slider-dot' de todos los botones
            }
        }

        // Agregar la clase 'slider-dot' al botón seleccionado
        const activeButton = document.getElementById(`index-${positionFeature}`);
        if (activeButton) {
            activeButton.classList.add('slider-dot');  // Agregar la clase 'slider-dot' al botón seleccionado
        }
    }

    // Auto cambio de imagen cada 10 segundos
    setInterval(moveRightFeature, 10000);
</script>