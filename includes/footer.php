    </main>
    
    <!-- Footer -->
    <footer class="border-t border-light-gray mt-20">
        <div class="container mx-auto px-6 py-12">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <!-- Brand Column -->
                <div class="md:col-span-1">
                    <a href="index.php" class="flex items-center space-x-3 mb-6 group">
                        <div class="w-12 h-12 rounded-2xl yellow-accent flex items-center justify-center">
                            <span class="text-charcoal font-display text-xl">H</span>
                        </div>
                        <div>
                            <span class="font-display text-xl text-charcoal tracking-tight">STUDIO HUE</span>
                            <span class="block text-xs text-medium-gray tracking-wider">CREATIVE PORTFOLIO</span>
                        </div>
                    </a>
                    <p class="text-sm text-medium-gray leading-relaxed">
                        Playful designs with editorial flair. Making things that make you smile. ✨
                    </p>
                </div>
                
                <!-- Quick Links -->
                <div>
                    <h4 class="font-display text-charcoal mb-4">EXPLORE</h4>
                    <ul class="space-y-2">
                        <li><a href="index.php" class="text-sm text-medium-gray hover:text-charcoal transition-colors flex items-center">
                            <span class="w-2 h-2 rounded-full yellow-accent mr-2"></span>
                            Home
                        </a></li>
                        <li><a href="work.php" class="text-sm text-medium-gray hover:text-charcoal transition-colors flex items-center">
                            <span class="w-2 h-2 rounded-full yellow-accent mr-2"></span>
                            Work
                        </a></li>
                        <li><a href="about.php" class="text-sm text-medium-gray hover:text-charcoal transition-colors flex items-center">
                            <span class="w-2 h-2 rounded-full yellow-accent mr-2"></span>
                            About
                        </a></li>
                        <li><a href="contact.php" class="text-sm text-medium-gray hover:text-charcoal transition-colors flex items-center">
                            <span class="w-2 h-2 rounded-full yellow-accent mr-2"></span>
                            Contact
                        </a></li>
                    </ul>
                </div>
                
                <!-- Services -->
                <div>
                    <h4 class="font-display text-charcoal mb-4">SERVICES</h4>
                    <ul class="space-y-2">
                        <li><a href="work.php#branding" class="text-sm text-medium-gray hover:text-charcoal transition-colors">
                            Brand Identity
                        </a></li>
                        <li><a href="work.php#editorial" class="text-sm text-medium-gray hover:text-charcoal transition-colors">
                            Editorial Design
                        </a></li>
                        <li><a href="work.php#digital" class="text-sm text-medium-gray hover:text-charcoal transition-colors">
                            Digital Illustration
                        </a></li>
                        <li><a href="work.php#packaging" class="text-sm text-medium-gray hover:text-charcoal transition-colors">
                            Packaging Design
                        </a></li>
                    </ul>
                </div>
                
                <!-- Contact -->
                <div>
                    <h4 class="font-display text-charcoal mb-4">LET'S CHAT</h4>
                    <ul class="space-y-3">
                        <li class="text-sm text-medium-gray">hello@studiohue.design</li>
                        <li class="text-sm text-medium-gray">@studiohue on Instagram</li>
                        <li class="text-sm text-medium-gray">Available for fun projects</li>
                    </ul>
                </div>
            </div>
            
            <div class="border-t border-light-gray mt-8 pt-8">
                <div class="flex flex-col md:flex-row justify-between items-center">
                    <p class="text-xs text-medium-gray tracking-wider mb-4 md:mb-0">
                        &copy; <?php echo date('Y'); ?> Studio Hue. All designs are fun.
                    </p>
                    <div class="flex space-x-4">
                        <span class="text-xs text-medium-gray tracking-wider">Made with ☕ and 🎨</span>
                        <div class="flex space-x-3">
                            <div class="w-2 h-2 rounded-full yellow-accent"></div>
                            <div class="w-2 h-2 rounded-full yellow-accent"></div>
                            <div class="w-2 h-2 rounded-full yellow-accent"></div>
                        </div>
                    </div>
                </div>
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
        
        // Smooth Scroll
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
                    
                    if (!mobileMenu.classList.contains('hidden')) {
                        mobileMenu.classList.add('hidden');
                    }
                }
            });
        });
        
        // Playful Fade In Animation
        const fadeElements = document.querySelectorAll('.fade-in-playful');
        
        const fadeInOnScroll = () => {
            fadeElements.forEach(element => {
                const elementTop = element.getBoundingClientRect().top;
                const elementVisible = 150;
                
                if (elementTop < window.innerHeight - elementVisible) {
                    element.classList.add('visible');
                }
            });
        };
        
        fadeInOnScroll();
        window.addEventListener('scroll', fadeInOnScroll);
        
        // Random yellow shapes
        document.addEventListener('DOMContentLoaded', function() {
            const shapesContainer = document.querySelector('.random-shapes');
            if (shapesContainer) {
                const shapes = ['circle', 'square', 'triangle', 'blob'];
                for (let i = 0; i < 8; i++) {
                    const shape = document.createElement('div');
                    shape.className = 'yellow-shape';
                    shape.style.width = `${Math.random() * 60 + 20}px`;
                    shape.style.height = shape.style.width;
                    shape.style.top = `${Math.random() * 100}%`;
                    shape.style.left = `${Math.random() * 100}%`;
                    shape.style.opacity = Math.random() * 0.3 + 0.1;
                    
                    if (shapes[Math.floor(Math.random() * shapes.length)] === 'blob') {
                        shape.style.borderRadius = '50% 30% 70% 40% / 60% 40% 70% 30%';
                    } else if (shapes[Math.floor(Math.random() * shapes.length)] === 'triangle') {
                        shape.style.clipPath = 'polygon(50% 0%, 0% 100%, 100% 100%)';
                    }
                    
                    shapesContainer.appendChild(shape);
                }
            }
        });
        
        // Bounce animation for interactive elements
        document.querySelectorAll('.bounce-on-hover').forEach(element => {
            element.addEventListener('mouseenter', function() {
                this.style.transform = 'scale(1.05)';
            });
            element.addEventListener('mouseleave', function() {
                this.style.transform = 'scale(1)';
            });
        });
    </script>
    <script>
    // Mobile Menu Toggle
    const mobileMenuBtn = document.getElementById('mobileMenuBtn');
    const mobileMenu = document.getElementById('mobileMenu');
    
    if (mobileMenuBtn && mobileMenu) {
        mobileMenuBtn.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });
    }
    
    // Smooth scroll for anchor links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            const href = this.getAttribute('href');
            
            // Skip if it's just #
            if (href === '#') return;
            
            // Check if it's an external page anchor
            if (href.includes('.php#')) {
                // Let the browser handle page navigation
                return;
            }
            
            e.preventDefault();
            const targetElement = document.querySelector(href);
            if (targetElement) {
                const offsetTop = targetElement.offsetTop - 100;
                
                window.scrollTo({
                    top: offsetTop,
                    behavior: 'smooth'
                });
                
                // Close mobile menu if open
                if (mobileMenu && !mobileMenu.classList.contains('hidden')) {
                    mobileMenu.classList.add('hidden');
                }
            }
        });
    });
    
    // Fade In Animation
    const fadeElements = document.querySelectorAll('.fade-in-playful');
    
    const fadeInOnScroll = () => {
        fadeElements.forEach(element => {
            const elementTop = element.getBoundingClientRect().top;
            const elementVisible = 100;
            
            if (elementTop < window.innerHeight - elementVisible) {
                element.classList.add('visible');
            }
        });
    };
    
    fadeInOnScroll();
    window.addEventListener('scroll', fadeInOnScroll);
    
    // Bounce animation for interactive elements
    document.querySelectorAll('.bounce-on-hover').forEach(element => {
        element.addEventListener('mouseenter', function() {
            this.style.transform = 'scale(1.05)';
        });
        element.addEventListener('mouseleave', function() {
            this.style.transform = 'scale(1)';
        });
    });
    
    // Highlight active section on scroll
    const sections = document.querySelectorAll('section[id]');
    const navLinks = document.querySelectorAll('.nav-item[href^="#"]');
    
    function highlightNavOnScroll() {
        let current = '';
        const scrollPosition = window.scrollY + 200;
        
        sections.forEach(section => {
            const sectionTop = section.offsetTop;
            const sectionHeight = section.clientHeight;
            
            if (scrollPosition >= sectionTop && scrollPosition < sectionTop + sectionHeight) {
                current = section.getAttribute('id');
            }
        });
        
        navLinks.forEach(link => {
            link.classList.remove('active');
            const href = link.getAttribute('href');
            if (href === `#${current}`) {
                link.classList.add('active');
                updateNavIndicator(link);
            }
        });
    }
    
    window.addEventListener('scroll', highlightNavOnScroll);
</script>
</body>
</html>