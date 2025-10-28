<!-- Mobile Menu -->
<div class="md:hidden hidden" id="mobile-menu">
    <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3 bg-white shadow-lg">
        <a href="{{ route('home') }}" class="text-primary block px-3 py-2 rounded-md text-base font-medium">
            <i class="fas fa-home mr-2"></i>Home
        </a>
        <a href="{{ route('about') }}" class="text-gray-600 hover:text-primary block px-3 py-2 rounded-md text-base font-medium">
            <i class="fas fa-user mr-2"></i>About
        </a>
        <a href="{{ route('blog') }}" class="text-gray-600 hover:text-primary block px-3 py-2 rounded-md text-base font-medium">
            <i class="fas fa-blog mr-2"></i>Blog
        </a>
        <a href="{{ route('contact') }}" class="text-gray-600 hover:text-primary block px-3 py-2 rounded-md text-base font-medium">
            <i class="fas fa-envelope mr-2"></i>Contact
        </a>
    </div>
</div>

<script>
// Simple mobile menu toggle
document.querySelector('button').addEventListener('click', function() {
    const menu = document.getElementById('mobile-menu');
    menu.classList.toggle('hidden');
});
</script>