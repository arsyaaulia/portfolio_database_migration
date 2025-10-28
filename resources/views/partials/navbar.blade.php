<nav class="bg-white shadow-lg sticky top-0 z-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-16">
            <!-- Logo -->
            <div class="shrink-0">
                <a href="{{ route('home') }}" class="text-2xl font-bold text-primary">
                    <i class="fas fa-code mr-2"></i>Portfolio
                </a>
            </div>

            <!-- Menu Desktop -->
            <div class="hidden md:block">
                <div class="ml-10 flex items-baseline space-x-8">
                    @php
                        $currentRoute = Route::currentRouteName();
                    @endphp

                    <a href="{{ route('home') }}" class="px-3 py-2 rounded-md text-sm font-medium transition duration-300 {{ $currentRoute == 'home' ? 'text-primary font-semibold' : 'text-gray-600 hover:text-primary' }}">
                        Home
                    </a>

                    
                    <a href="{{ route('about') }}" class="px-3 py-2 rounded-md text-sm font-medium transition duration-300 {{ $currentRoute == 'about' ? 'text-primary font-semibold' : 'text-gray-600 hover:text-primary' }}">
                        About
                    </a>

                    <a href="{{ route('blog') }}" class="px-3 py-2 rounded-md text-sm font-medium transition duration-300 {{ $currentRoute == 'blog' ? 'text-primary font-semibold' : 'text-gray-600 hover:text-primary' }}">
                        Blog
                    </a>

                    <a href="{{ route('contact') }}" class="px-3 py-2 rounded-md text-sm font-medium transition duration-300 {{ $currentRoute == 'contact' ? 'text-primary font-semibold' : 'text-gray-600 hover:text-primary' }}">
                        Contact
                    </a>
                </div>
            </div>

            {{-- <!-- Mobile menu button -->
            <div class="md:hidden">
                <button type="button" class="bg-primary inline-flex items-center justify-center p-2 rounded-md text-white hover:bg-blue-600 focus:outline-none transition duration-300">
                    <i class="fas fa-bars"></i>
                </button>
            </div> --}}
        </div>
    </div>
</nav>