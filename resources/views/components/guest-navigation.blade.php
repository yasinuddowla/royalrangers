<!-- Guest Navigation Component -->
<nav class="nav-bg backdrop-blur-md shadow-lg sticky top-0 z-50 transition-all duration-300" id="main-nav">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center transition-all duration-300" id="nav-container">
            <!-- Team Name (Left) -->
            <div class="flex items-center">
                <span class="text-2xl font-bold text-white metal-mania-regular nav-text-white">
                    Royal Rangers
                </span>
            </div>
            
            <!-- Logo (Center) -->
            <div class="flex-1 flex justify-center">
                <img src="{{ asset('images/RR_Logo.png') }}" alt="Royal Rangers Logo" class="w-16 h-16 transition-all duration-300 nav-logo" id="nav-logo">
            </div>
            
            <!-- Navigation Menu (Right) -->
            <div class="hidden md:flex space-x-8">
                <a href="{{ route('home') }}" class="text-white hover:text-blue-200 font-medium transition-colors duration-200 px-3 py-2 rounded-lg hover:bg-white/20 nav-link {{ request()->routeIs('home') ? 'text-blue-200 bg-white/20' : '' }}">Home</a>
                <a href="{{ route('players.index') }}" class="text-white hover:text-purple-200 font-medium transition-colors duration-200 px-3 py-2 rounded-lg hover:bg-white/20 nav-link {{ request()->routeIs('players.*') ? 'text-purple-200 bg-white/20' : '' }}">Players</a>
                <a href="{{ route('home') }}#about" class="text-white hover:text-pink-200 font-medium transition-colors duration-200 px-3 py-2 rounded-lg hover:bg-white/20 nav-link">About</a>
                <a href="#" class="text-white hover:text-green-200 font-medium transition-colors duration-200 px-3 py-2 rounded-lg hover:bg-white/20 nav-link">Matches</a>
            </div>
            
            <!-- Mobile menu button -->
            <div class="md:hidden ml-auto">
                <button class="text-white hover:text-blue-200 mobile-menu-btn">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
            </div>
        </div>
    </div>
</nav>

<!-- Scroll Effect Script -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const logo = document.getElementById('nav-logo');
        const navContainer = document.getElementById('nav-container');
        const mainNav = document.getElementById('main-nav');
        
        window.addEventListener('scroll', function() {
            if (window.scrollY > 50) {
                // Add scrolled class for smooth transitions
                mainNav.classList.add('nav-scrolled');
                navContainer.classList.add('nav-scrolled');
                logo.classList.add('nav-scrolled');
                logo.style.transform = 'scale(0.8)';
                
                // Update text colors for scrolled state
                const teamName = document.querySelector('.metal-mania-regular');
                const navLinks = document.querySelectorAll('.nav-link');
                const mobileButton = document.querySelector('.mobile-menu-btn');
                
                if (teamName) teamName.classList.add('nav-scrolled');
                navLinks.forEach(link => link.classList.add('nav-scrolled'));
                if (mobileButton) mobileButton.classList.add('nav-scrolled');
            } else {
                // Remove scrolled class
                mainNav.classList.remove('nav-scrolled');
                navContainer.classList.remove('nav-scrolled');
                logo.classList.remove('nav-scrolled');
                logo.style.transform = 'scale(1)';
                
                // Remove text color classes
                const teamName = document.querySelector('.metal-mania-regular');
                const navLinks = document.querySelectorAll('.nav-link');
                const mobileButton = document.querySelector('.mobile-menu-btn');
                
                if (teamName) teamName.classList.remove('nav-scrolled');
                navLinks.forEach(link => link.classList.remove('nav-scrolled'));
                if (mobileButton) mobileButton.classList.remove('nav-scrolled');
            }
        });
    });
</script>
