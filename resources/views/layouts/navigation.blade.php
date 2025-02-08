{{-- Menu --}}
<nav class="sticky z-50 px-4 py-4 flex justify-between items-center bg-white top-0">
    {{-- Logo --}}
    <x-application-logo />

    {{-- Burger --}}
    <div class="lg:hidden">
        <button class="navbar-burger flex items-center text-blue-600 p-3">
            <svg class="block h-4 w-4 fill-current" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <title>Mobile menu</title>
                <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"></path>
            </svg>
        </button>
    </div>
    
    {{-- Menu --}}
    <ul class="hidden absolute top-1/2 left-1/2 transform -translate-y-1/2 -translate-x-1/2 lg:mx-auto lg:flex lg:items-center lg:w-auto lg:space-x-6">    
        <x-nav-link route="home" name="Home"/>

        <x-nav-link route="about" name="About Us"/>

        <x-nav-link route="services" name="Services"/>

        <x-nav-link route="contact" name="Contact" noSelect="true"/>
    </ul>
    
    {{-- Auth Button --}}
    <x-auth-link/>
</nav>
{{-- End Menu --}}

{{-- Menu Responsive --}}
<div class="navbar-menu relative z-50 hidden">
    <div class="navbar-backdrop fixed inset-0 bg-gray-800 opacity-25"></div>
    <nav class="fixed top-0 left-0 bottom-0 flex flex-col w-5/6 max-w-sm py-6 px-6 bg-white border-r overflow-y-auto">
        {{-- Logo & Close Button --}}
        <div class="flex items-center mb-8">
            {{-- Logo --}}
            <x-application-logo resposive="true"/>

            {{-- Close Button --}}
            <button class="navbar-close">
                <svg class="h-6 w-6 text-gray-400 cursor-pointer hover:text-gray-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                </svg>
            </button>
        </div>
        
        {{-- Menu --}}
        <div>
            <ul>
                <x-responsive-nav-link route="home" name="Home"/>  
                <x-responsive-nav-link route="about" name="About Us"/>
                <x-responsive-nav-link route="services" name="Services"/>
                <x-responsive-nav-link route="contact" name="Contact"/>
            </ul>
        </div>

        {{-- Auth & Copyright --}}
        <div class="mt-auto">
            {{-- Auth Button --}}
            <div class="pt-6">
                <x-auth-link resposive="true"/>
            </div>

            {{-- Copyright --}}
            <p class="my-4 text-xs text-center text-gray-400">
                <span>Copyright © 2025</span>
            </p>
        </div>
    </nav>
</div>
{{-- End Menu Responsive --}}

{{-- Script --}}
<script>
    // Burger menus
    document.addEventListener('DOMContentLoaded', function() {
        // open
        const burger = document.querySelectorAll('.navbar-burger');
        const menu = document.querySelectorAll('.navbar-menu');
    
        if (burger.length && menu.length) {
            for (var i = 0; i < burger.length; i++) {
                burger[i].addEventListener('click', function() {
                    for (var j = 0; j < menu.length; j++) {
                        menu[j].classList.toggle('hidden');
                    }
                });
            }
        }
    
        // close
        const close = document.querySelectorAll('.navbar-close');
        const backdrop = document.querySelectorAll('.navbar-backdrop');
    
        if (close.length) {
            for (var i = 0; i < close.length; i++) {
                close[i].addEventListener('click', function() {
                    for (var j = 0; j < menu.length; j++) {
                        menu[j].classList.toggle('hidden');
                    }
                });
            }
        }
    
        if (backdrop.length) {
            for (var i = 0; i < backdrop.length; i++) {
                backdrop[i].addEventListener('click', function() {
                    for (var j = 0; j < menu.length; j++) {
                        menu[j].classList.toggle('hidden');
                    }
                });
            }
        }
    });
</script>
{{-- End Script --}}