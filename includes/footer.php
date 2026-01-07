    </main>
    
    <!-- Footer -->
    <footer class="bg-gray-50 border-t border-gray-200 mt-20">
        <div class="container mx-auto px-6 py-12">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <!-- Brand Column -->
                <div class="md:col-span-1">
                    <a href="index.php" class="flex items-center space-x-2 mb-6">
                        <div class="w-12 h-12 rounded-2xl bg-gradient-to-br from-[#88cbc0] to-[#a8d8ea] flex items-center justify-center">
                            <span class="text-white font-bold text-2xl">H</span>
                        </div>
                        <span class="font-display font-bold text-2xl text-gray-900">Hue Design</span>
                    </a>
                    <p class="text-gray-600 text-sm">
                        Crafting visual experiences that speak in every shade.
                    </p>
                </div>
                
                <!-- Quick Links -->
                <div>
                    <h4 class="font-display font-semibold text-gray-900 mb-4">Quick Links</h4>
                    <ul class="space-y-2">
                        <li><a href="index.php" class="text-gray-600 hover:text-[#88cbc0] transition-colors">Home</a></li>
                        <li><a href="services.php" class="text-gray-600 hover:text-[#88cbc0] transition-colors">Services</a></li>
                        <li><a href="about.php" class="text-gray-600 hover:text-[#88cbc0] transition-colors">About</a></li>
                        <li><a href="#contact" class="text-gray-600 hover:text-[#88cbc0] transition-colors">Get Quote</a></li>
                    </ul>
                </div>
                
                <!-- Services -->
                <div>
                    <h4 class="font-display font-semibold text-gray-900 mb-4">Services</h4>
                    <ul class="space-y-2">
                        <li><a href="services.php#signage" class="text-gray-600 hover:text-[#88cbc0] transition-colors">Signage Packages</a></li>
                        <li><a href="services.php#printing" class="text-gray-600 hover:text-[#88cbc0] transition-colors">Printing Packages</a></li>
                        <li><a href="services.php#design" class="text-gray-600 hover:text-[#88cbc0] transition-colors">Design Packages</a></li>
                    </ul>
                </div>
                
                <!-- Contact -->
                <div id="contact">
                    <h4 class="font-display font-semibold text-gray-900 mb-4">Contact</h4>
                    <ul class="space-y-2">
                        <li class="text-gray-600">hello@huedesign.studio</li>
                        <li class="text-gray-600">+1 (555) 123-4567</li>
                        <li class="text-gray-600">123 Design Street<br>Creative City, CC 10001</li>
                    </ul>
                </div>
            </div>
            
            <div class="border-t border-gray-200 mt-8 pt-8 text-center text-gray-500 text-sm">
                <p>&copy; <?php echo date('Y'); ?> Hue Design Studio. All rights reserved.</p>
            </div>
        </div>
    </footer>
    
    <script>
        // Mobile Menu Toggle
        const mobileMenuBtn = document.getElementById('mobileMenuBtn');
        const mobileMenu = document.getElementById('mobileMenu');
        
        if (mobileMenuBtn && mobileMenu) {
            mobileMenuBtn.addEventListener('click', () => {
                mobileMenu.classList.toggle('hidden');
            });
        }
        
        // Smooth Scroll for Anchor Links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const targetId = this.getAttribute('href');
                if (targetId === '#') return;
                
                const targetElement = document.querySelector(targetId);
                if (targetElement) {
                    window.scrollTo({
                        top: targetElement.offsetTop - 80,
                        behavior: 'smooth'
                    });
                    
                    // Close mobile menu if open
                    if (!mobileMenu.classList.contains('hidden')) {
                        mobileMenu.classList.add('hidden');
                    }
                }
            });
        });
        
        // Scroll Animation
        const fadeElements = document.querySelectorAll('.fade-in');
        
        const fadeInOnScroll = () => {
            fadeElements.forEach(element => {
                const elementTop = element.getBoundingClientRect().top;
                const elementVisible = 150;
                
                if (elementTop < window.innerHeight - elementVisible) {
                    element.classList.add('visible');
                }
            });
        };
        
        // Initial check and listen for scroll
        fadeInOnScroll();
        window.addEventListener('scroll', fadeInOnScroll);
        
        // Active Navigation Highlight on Scroll
        const sections = document.querySelectorAll('section[id]');
        
        const highlightNavOnScroll = () => {
            let current = '';
            
            sections.forEach(section => {
                const sectionTop = section.offsetTop;
                const sectionHeight = section.clientHeight;
                
                if (scrollY >= (sectionTop - 100)) {
                    current = section.getAttribute('id');
                }
            });
            
            document.querySelectorAll('nav a').forEach(link => {
                link.classList.remove('nav-active');
                if (link.getAttribute('href') === `#${current}`) {
                    link.classList.add('nav-active');
                }
            });
        };
        
        window.addEventListener('scroll', highlightNavOnScroll);
    </script>
</body>
</html>