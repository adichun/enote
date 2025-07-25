<nav class="bg-gray-100 fixed top-0 left-0 right-0">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-16">
        <!-- Logo -->
        <div class="flex-shrink-0 text-xl font-bold text-amber-500">
            E-NOTE APP
        </div>

        <!-- Mobile menu button -->
        <div class="md:hidden">
            <button id="menu-button" class="text-gray-700 focus:outline-none focus:ring-2 focus:ring-blue-500">
            <svg class="h-6 w-6" fill="none" stroke="currentColor" stroke-width="2"
                viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M4 6h16M4 12h16M4 18h16"/>
            </svg>
            </button>
        </div>

        <!-- Menu -->
        <div id="menu" class="hidden md:flex space-x-4">
            <a href="#" class="text-gray-700 hover:text-amber-500">Beranda</a>
            <a href="#" class="text-gray-700 hover:text-amber-500">Catatan</a>
            <a href="#" class="text-gray-700 hover:text-amber-500">Profil</a>
            <a href="#" class="text-gray-700 hover:text-amber-500">Keluar</a>
        </div>
        </div>
    </div>

    <!-- Mobile Dropdown Menu -->
    <div id="mobile-menu" class="md:hidden hidden px-4 pb-4 space-y-2">
        <a href="#" class="block text-gray-700 hover:text-amber-500">Beranda</a>
        <a href="#" class="block text-gray-700 hover:text-amber-500">Catatan</a>
        <a href="#" class="block text-gray-700 hover:text-amber-500">Profil</a>
        <a href="#" class="block text-gray-700 hover:text-amber-500">Keluar</a>
    </div>
</nav>