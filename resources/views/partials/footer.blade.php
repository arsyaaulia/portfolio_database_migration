<footer class="bg-primary mt-20">
    <div class="max-w-7xl mx-auto py-8 px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Info -->
            <div>
                <h3 class="text-lg font-semibold text-gray-800 mb-4">
                    <i class="fas fa-code mr-2"></i>Portfolio
                </h3>
                <p class="text-gray-600">
                    Membuat aplikasi web yang indah dan functional dengan teknologi terbaru.
                </p>
            </div>

            <!-- Quick Links -->
            <div>
                <h3 class="text-lg font-semibold text-gray-800 mb-4">Quick Links</h3>
                <ul class="space-y-2">
                    <li><a href="{{ route('home') }}" class="text-gray-600 hover:text-blue-600 transition duration-300">Home</a></li>
                    <li><a href="{{ route('about') }}" class="text-gray-600 hover:text-blue-600 transition duration-300">About</a></li>
                    <li><a href="{{ route('blog') }}" class="text-gray-600 hover:text-blue-600 transition duration-300">Blog</a></li>
                    <li><a href="{{ route('contact') }}" class="text-gray-600 hover:text-blue-600 transition duration-300">Contact</a></li>
                </ul>
            </div>

            <!-- Social Media -->
            <div>
                <h3 class="text-lg font-semibold text-gray-800 mb-4">Connect With Me</h3>
                <div class="flex space-x-4">
                    <a href="#" class="text-gray-600 hover:text-blue-600 transition duration-300">
                        <i class="fab fa-github text-xl"></i>
                    </a>
                    <a href="#" class="text-gray-600 hover:text-blue-600 transition duration-300">
                        <i class="fab fa-linkedin text-xl"></i>
                    </a>
                    <a href="#" class="text-gray-600 hover:text-blue-600 transition duration-300">
                        <i class="fab fa-instagram text-xl"></i>
                    </a>
                </div>
            </div>
        </div>
        
        <div class="border-t border-blue-200 mt-8 pt-6 text-center">
            <p class="text-gray-600">&copy; 2024 Portfolio. All rights reserved.</p>
        </div>
    </div>
</footer>