<x-app-layout>
    <x-slot:title>Home</x-slot:title>

    <section class="font-poppins w-full h-full flex justify-evenly flex-wrap gap-12 lg:flex-nowrap lg:gap-0 lg:h-panel items-center bg-gradient-to-r from-color_1 via-color_2 to-color_3">
        <div class="flex flex-col gap-4 justify-center items-center text-white max-w-[500px]">
            <h1 class="text-7xl font-bold">The best landing page for your digital product.</h1>
            
            <p class="text-xl">Our cloud computing platform was built with simplicity so managing infrastructure is easy.</p>
            
            <div class="w-full flex items-center gap-4 relative">
                <a href="" class="transition ease-out duration-400 py-4 px-10 bg-color_2 text-xl font-bold rounded hover:shadow-principal_hover">
                    Leer Mas
                </a>
            </div>
        </div>

        <div class="flex justify-center items-center max-w-[500px] relative bg-transparent
                    after:content-[''] after:border-4 after:border-white after:absolute after:top-0 after:left-0 after:w-full after:h-full after:rounded-full after:z-0 after:opacity-25
                    before:content-[''] before:border-4 before:border-white before:absolute before:w-72 before:h-72 before:rounded-full before:z-0 before:opacity-25">

            <img class="z-10 object-cover w-full" src="https://quomodosoft.com/html/jupiter/jupiter/assets/images/w1.png" alt="">
        </div>
    </section>

    <section class="bg-gray-100 flex justify-center w-full py-10 h-screen">
        <div class="flex flex-col gap-4 justify-center items-center text-gray-800 max-w-[500px]">
            <h1 class="text-7xl font-bold">The best landing page for your digital product.</h1>
            
            <p class="text-xl">Our cloud computing platform was built with simplicity so managing infrastructure is easy.</p>
            
            <div class="w-full flex items-center gap-4 relative">
                <a href="" class="transition ease-out duration-400 py-4 px-10 bg-color_4 text-xl font-bold rounded hover:shadow-principal_hover">
                    Leer Mas
                </a>
            </div>
        </div>
    </section>
</x-app-layout>