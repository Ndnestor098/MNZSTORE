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

    <section class="flex gap-2 h-full justify-center flex-wrap w-full max-w-[830px]">
        @php $loop = 0; @endphp	
        @while ($loop <= 5)
            <article class="flex flex-col items-center gap-4 w-full max-w-[175px] bg-white rounded-lg shadow-sm hover:shadow-lg py-4 px-1 sm:max-w-[270px] sm:p-4">
                <a href="#">
                    <figure>
                        <img 
                            src="https://www.euronics.it/dw/image/v2/BFPN_PRD/on/demandware.static/-/Sites-catalog_euronics_master/default/dw3c00864d/hi-res/242000298.jpg?sw=1000&q=90&strip=false" 
                            alt="Imagen del producto"
                            class="w-full h-auto rounded-lg shadow-lg"
                        >
                    </figure>
                </a>
                <h3 class="font-normal text-sm sm:font-medium sm:text-base">SAMSUNG - GALAXY S24</h3>
                <p class="text-gray-500 text-sm font-medium">(256GB | Onyx Black)</p>
                <div class="flex justify-center gap-2 items-center w-full">
                    <span 
                        class="bg-gradient-to-r from-color_1 via-blue-800 to-blue-500 text-transparent bg-clip-text text-base sm:text-xl font-bold"
                    >
                        € 599,00
                    </span>
                    <span class="relative text-gray-500 text-xs font-medium">
                        € 989,00
                        <span class="absolute top-1/2 left-0 right-0 h-px bg-gray-400"></span>
                    </span>
                </div>
                <footer>
                    <a href="#" class="bg-color_1 text-white py-2 px-5 rounded-full font-bold hover:bg-color_2">
                        Comprar
                    </a>
                </footer>
            </article>
            @php $loop++; @endphp
        @endwhile
    </section>
</section>