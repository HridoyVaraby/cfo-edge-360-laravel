<!-- Header -->
<header class="bg-white shadow-sm border-b border-gray-100 sticky top-0 z-50" x-data="{ mobileMenuOpen: false }">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center py-4">
            <!-- Logo -->
            <a href="{{ route('home') }}" class="flex items-center space-x-3">
                <img src="{{ asset('logo.png') }}" alt="CFO Edge 360" class="h-10">
            </a>

            <!-- Desktop Navigation -->
            <nav class="hidden md:flex space-x-8">
                <a href="{{ route('home') }}"
                    class="px-3 py-2 text-sm font-medium transition-colors duration-200 {{ request()->routeIs('home') ? 'text-amber-600 border-b-2 border-amber-600' : 'text-gray-700 hover:text-amber-600' }}">Home</a>
                <a href="{{ route('services') }}"
                    class="px-3 py-2 text-sm font-medium transition-colors duration-200 {{ request()->routeIs('services') ? 'text-amber-600 border-b-2 border-amber-600' : 'text-gray-700 hover:text-amber-600' }}">Services</a>
                <a href="{{ route('posts.index') }}"
                    class="px-3 py-2 text-sm font-medium transition-colors duration-200 {{ request()->routeIs('posts.*') ? 'text-amber-600 border-b-2 border-amber-600' : 'text-gray-700 hover:text-amber-600' }}">Tools
                    and Tips</a>
                <a href="{{ route('contact') }}"
                    class="px-3 py-2 text-sm font-medium transition-colors duration-200 {{ request()->routeIs('contact') ? 'text-amber-600 border-b-2 border-amber-600' : 'text-gray-700 hover:text-amber-600' }}">Contact</a>
            </nav>

            <!-- CTA Button -->
            <div class="hidden md:block">
                <a href="https://calendly.com/cfoedge360/30min" target="_blank" rel="noopener noreferrer"
                    class="inline-flex items-center px-6 py-3 bg-amber-500 text-white font-semibold rounded-xl hover:bg-gray-900 transition-all duration-200 shadow-md hover:shadow-lg transform hover:-translate-y-0.5">
                    Book A Consultation
                </a>
            </div>

            <!-- Mobile menu button -->
            <button @click="mobileMenuOpen = !mobileMenuOpen"
                class="md:hidden p-2 rounded-md text-gray-700 hover:text-amber-600 hover:bg-gray-100">
                <i x-show="!mobileMenuOpen" data-lucide="menu" class="h-6 w-6"></i>
                <i x-show="mobileMenuOpen" data-lucide="x" class="h-6 w-6"></i>
            </button>
        </div>

        <!-- Mobile Navigation -->
        <div x-show="mobileMenuOpen" x-transition class="md:hidden border-t border-gray-100 py-4">
            <div class="space-y-2">
                <a href="{{ route('home') }}" @click="mobileMenuOpen = false"
                    class="block px-3 py-2 text-base font-medium transition-colors duration-200 {{ request()->routeIs('home') ? 'text-amber-600 bg-amber-50 rounded-md' : 'text-gray-700 hover:text-amber-600 hover:bg-gray-50 rounded-md' }}">Home</a>
                <a href="{{ route('services') }}" @click="mobileMenuOpen = false"
                    class="block px-3 py-2 text-base font-medium transition-colors duration-200 {{ request()->routeIs('services') ? 'text-amber-600 bg-amber-50 rounded-md' : 'text-gray-700 hover:text-amber-600 hover:bg-gray-50 rounded-md' }}">Services</a>
                <a href="{{ route('posts.index') }}" @click="mobileMenuOpen = false"
                    class="block px-3 py-2 text-base font-medium transition-colors duration-200 {{ request()->routeIs('posts.*') ? 'text-amber-600 bg-amber-50 rounded-md' : 'text-gray-700 hover:text-amber-600 hover:bg-gray-50 rounded-md' }}">Tools
                    and Tips</a>
                <a href="{{ route('contact') }}" @click="mobileMenuOpen = false"
                    class="block px-3 py-2 text-base font-medium transition-colors duration-200 {{ request()->routeIs('contact') ? 'text-amber-600 bg-amber-50 rounded-md' : 'text-gray-700 hover:text-amber-600 hover:bg-gray-50 rounded-md' }}">Contact</a>
                <a href="https://calendly.com/cfoedge360/30min" target="_blank" rel="noopener noreferrer"
                    @click="mobileMenuOpen = false"
                    class="block mt-4 px-3 py-2 bg-amber-500 text-white font-semibold rounded-xl text-center hover:bg-gray-900 transition-colors duration-200">
                    Book A Consultation
                </a>
            </div>
        </div>
    </div>
</header>