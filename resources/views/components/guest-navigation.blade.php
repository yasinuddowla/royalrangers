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
                <x-application-logo class="block h-16 w-auto fill-current text-white transition-all duration-300 nav-logo" id="nav-logo" />
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
                <button id="mobile-menu-button" class="text-white hover:text-blue-200 mobile-menu-btn focus:outline-none focus:ring-2 focus:ring-white focus:ring-opacity-50 rounded-md p-2">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" id="menu-icon">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                    <svg class="w-6 h-6 hidden" fill="none" stroke="currentColor" viewBox="0 0 24 24" id="close-icon">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </button>
            </div>
        </div>
        
        <!-- Mobile menu -->
        <div id="mobile-menu" class="md:hidden hidden bg-black/90 backdrop-blur-md border-t border-white/20">
            <div class="px-2 pt-2 pb-3 space-y-1">
                <a href="{{ route('home') }}" class="block px-3 py-2 text-white hover:text-blue-200 hover:bg-white/20 rounded-md font-medium transition-colors duration-200 {{ request()->routeIs('home') ? 'text-blue-200 bg-white/20' : '' }}">Home</a>
                <a href="{{ route('players.index') }}" class="block px-3 py-2 text-white hover:text-purple-200 hover:bg-white/20 rounded-md font-medium transition-colors duration-200 {{ request()->routeIs('players.*') ? 'text-purple-200 bg-white/20' : '' }}">Players</a>
                <a href="{{ route('home') }}#about" class="block px-3 py-2 text-white hover:text-pink-200 hover:bg-white/20 rounded-md font-medium transition-colors duration-200">About</a>
                <a href="#" class="block px-3 py-2 text-white hover:text-green-200 hover:bg-white/20 rounded-md font-medium transition-colors duration-200">Matches</a>
            </div>
        </div>
    </div>
</nav>

<!-- Navigation Script -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const logo = document.getElementById('nav-logo');
        const navContainer = document.getElementById('nav-container');
        const mainNav = document.getElementById('main-nav');
        const mobileMenuButton = document.getElementById('mobile-menu-button');
        const mobileMenu = document.getElementById('mobile-menu');
        const menuIcon = document.getElementById('menu-icon');
        const closeIcon = document.getElementById('close-icon');
        
        // Mobile menu toggle
        if (mobileMenuButton && mobileMenu) {
            mobileMenuButton.addEventListener('click', function() {
                const isHidden = mobileMenu.classList.contains('hidden');
                
                if (isHidden) {
                    // Show mobile menu
                    mobileMenu.classList.remove('hidden');
                    menuIcon.classList.add('hidden');
                    closeIcon.classList.remove('hidden');
                } else {
                    // Hide mobile menu
                    mobileMenu.classList.add('hidden');
                    menuIcon.classList.remove('hidden');
                    closeIcon.classList.add('hidden');
                }
            });
        }
        
        // Close mobile menu when clicking on a link
        const mobileMenuLinks = mobileMenu?.querySelectorAll('a');
        mobileMenuLinks?.forEach(link => {
            link.addEventListener('click', function() {
                mobileMenu.classList.add('hidden');
                menuIcon.classList.remove('hidden');
                closeIcon.classList.add('hidden');
            });
        });
        
        // Close mobile menu when clicking outside
        document.addEventListener('click', function(event) {
            if (mobileMenu && !mobileMenuButton.contains(event.target) && !mobileMenu.contains(event.target)) {
                mobileMenu.classList.add('hidden');
                menuIcon.classList.remove('hidden');
                closeIcon.classList.add('hidden');
            }
        });
        
        // Scroll effect
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
