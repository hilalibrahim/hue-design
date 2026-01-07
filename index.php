<?php
$pageTitle = "Creative Portfolio & Design Studio";
include 'includes/header.php';
?>

<!-- Hero Section -->
<section class="relative py-20 md:py-32 overflow-hidden">
    <!-- Background pattern -->
    <div class="absolute inset-0 opacity-5">
        <div class="absolute top-10 left-10 w-32 h-32 yellow-accent rounded-full"></div>
        <div class="absolute bottom-20 right-20 w-24 h-24 yellow-accent rounded-full"></div>
        <div class="absolute top-1/2 left-1/4 w-16 h-16 yellow-accent rounded-full"></div>
    </div>
    
    <div class="relative container mx-auto px-6">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <div class="fade-in-playful">
                <div class="inline-block px-4 py-2 rounded-full yellow-accent text-charcoal font-medium mb-6 bounce-on-hover">
                    🎨 HUE DESIGN
                </div>
                <h1 class="font-display text-5xl md:text-7xl lg:text-8xl text-charcoal mb-6 leading-none">
                    MORE COLOR.<br>MORE<br><span class="yellow-highlight">CHARACTER.</span><br>MORE IMPACT.
                </h1>
                <p class="text-lg text-medium-gray mb-10 max-w-xl leading-relaxed">
                    Hue Design is a creative studio helping brands stand out through 
                    thoughtful design, striking visuals, and unforgettable storytelling.
                </p>
                <div class="flex flex-wrap gap-4">
                    <a href="#work" class="px-8 py-4 rounded-full yellow-accent text-charcoal font-medium hover:bg-mustard-dark transition-colors duration-300 text-lg bounce-on-hover">
                        EXPLORE PROJECTS →
                    </a>
                    <a href="contact.php" class="px-8 py-4 rounded-full border-2 border-charcoal text-charcoal font-medium hover:bg-charcoal hover:text-white transition-all duration-300 text-lg bounce-on-hover">
                        WORK WITH US
                    </a>
                </div>
            </div>
            
            <div class="fade-in-playful">
                <!-- Playful image collage -->
                <div class="relative">
                    <div class="card-playful overflow-hidden">
                        <div class="aspect-[4/5] relative">
                            <!-- Main image -->
                            <img src="assets/place1.jpg" alt="Creative workspace" 
                                 class="w-full h-full object-cover image-hover">
                            <!-- Overlay shapes -->
                            <div class="absolute top-4 right-4 w-16 h-16 yellow-accent rounded-full flex items-center justify-center">
                                <span class="text-charcoal font-display text-lg">H</span>
                            </div>
                            <div class="absolute bottom-4 left-4 w-12 h-12 yellow-accent rounded-lg flex items-center justify-center">
                                <span class="text-charcoal text-sm">D</span>
                            </div>
                        </div>
                    </div>
                    <!-- Floating elements -->
                    <div class="absolute -top-4 -right-4 w-20 h-20 bg-white border-2 border-charcoal rounded-2xl flex items-center justify-center">
                        <span class="font-display text-charcoal text-lg">✨</span>
                    </div>
                    <div class="absolute -bottom-4 -left-4 w-16 h-16 yellow-accent rounded-full flex items-center justify-center">
                        <span class="text-charcoal text-sm">🎨</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Featured Work -->
<section id="services" class="py-20">
    <div class="container mx-auto px-6">
        <div class="text-center mb-12 fade-in-playful">
            <h2 class="font-display text-4xl md:text-5xl text-charcoal mb-6">
                Our Creative<br><span class="yellow-highlight">Services</span>
            </h2>
            <p class="text-medium-gray text-lg max-w-2xl mx-auto">
                Comprehensive creative solutions with a playful editorial approach
            </p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-12">
            <?php 
            $services = [
                [
                    'title' => 'Design',
                    'description' => 'Visual identity, packaging, and editorial design',
                    'icon' => '🎨',
                    'link' => 'services.php#design',
                    'count' => '45 Projects'
                ],
                [
                    'title' => 'Creative',
                    'description' => 'Campaigns, strategy, and concept development',
                    'icon' => '💡',
                    'link' => 'services.php#creative',
                    'count' => '32 Projects'
                ],
                [
                    'title' => 'Digital',
                    'description' => 'Web design, social media, and digital campaigns',
                    'icon' => '💻',
                    'link' => 'services.php#digital',
                    'count' => '28 Projects'
                ],
                [
                    'title' => 'Films',
                    'description' => 'Animation, video production, and motion graphics',
                    'icon' => '🎬',
                    'link' => 'services.php#films',
                    'count' => '19 Projects'
                ]
            ];
            
            foreach ($services as $service): 
            ?>
            <a href="<?php echo $service['link']; ?>" class="fade-in-playful card-playful p-6 group hover:border-mustard transition-all duration-300">
                <div class="text-3xl mb-4"><?php echo $service['icon']; ?></div>
                <h3 class="font-display text-xl text-charcoal mb-3 group-hover:text-mustard-dark transition-colors">
                    <?php echo $service['title']; ?>
                </h3>
                <p class="text-medium-gray text-sm mb-4"><?php echo $service['description']; ?></p>
                <div class="pt-4 border-t border-light-gray flex items-center justify-between">
                    <span class="text-xs font-medium text-medium-gray"><?php echo $service['count']; ?></span>
                    <div class="w-8 h-8 rounded-full yellow-accent flex items-center justify-center group-hover:scale-110 transition-transform">
                        <span class="text-charcoal text-sm">→</span>
                    </div>
                </div>
            </a>
            <?php endforeach; ?>
        </div>
        
        <!-- Process Preview -->
        <div class="mb-12">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
                <?php 
                $process = [
                    ['step' => '01', 'title' => 'Discover', 'desc' => 'Understand your needs'],
                    ['step' => '02', 'title' => 'Design', 'desc' => 'Create concepts'],
                    ['step' => '03', 'title' => 'Develop', 'desc' => 'Build solutions'],
                    ['step' => '04', 'title' => 'Deliver', 'desc' => 'Launch & support']
                ];
                
                foreach ($process as $item): 
                ?>
                <div class="text-center fade-in-playful">
                    <div class="w-16 h-16 rounded-2xl yellow-accent flex items-center justify-center mx-auto mb-4">
                        <span class="font-display text-charcoal text-xl"><?php echo $item['step']; ?></span>
                    </div>
                    <h4 class="font-display text-charcoal mb-2"><?php echo $item['title']; ?></h4>
                    <p class="text-sm text-medium-gray"><?php echo $item['desc']; ?></p>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
        
        <!-- CTA -->
        <div class="text-center fade-in-playful">
            <div class="card-playful p-8 max-w-2xl mx-auto">
                <h3 class="font-display text-2xl text-charcoal mb-4">
                    Ready to transform your brand?
                </h3>
                <p class="text-medium-gray mb-6">
                    Explore our full range of creative services and let's create something amazing together.
                </p>
                <a href="services.php" class="inline-flex items-center px-6 py-3 rounded-full yellow-accent text-charcoal font-medium hover:bg-mustard-dark transition-colors duration-300">
                    View All Services
                    <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                    </svg>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- About Preview -->
<section class="py-20 bg-white rounded-3xl -mx-6 px-6">
    <div class="container mx-auto">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <div class="fade-in-playful">
                <!-- Grayscale portrait with yellow shapes -->
                <div class="portrait-container relative">
                    <div class="aspect-[3/4] rounded-3xl overflow-hidden relative">
                        <img src="assets/place2.jpg" alt="Designer portrait" 
                             class="w-full h-full object-cover portrait-grayscale">
                        <!-- Yellow overlay shapes -->
                        <div class="yellow-shape w-24 h-24 -top-6 -left-6"></div>
                        <div class="yellow-shape w-16 h-16 -bottom-4 -right-4"></div>
                        <div class="yellow-shape w-12 h-12 top-1/2 -right-6"></div>
                    </div>
                    <!-- Floating badge -->
                    <div class="absolute -bottom-4 -right-4 w-20 h-20 yellow-accent rounded-full flex items-center justify-center z-10">
                        <span class="font-display text-charcoal text-lg">8+</span>
                    </div>
                </div>
            </div>
            
            <div class="fade-in-playful">
                <div class="inline-block px-4 py-2 rounded-full yellow-accent text-charcoal font-medium mb-6 bounce-on-hover">
                    👋 HELLO THERE!
                </div>
                <h2 class="font-display text-4xl md:text-5xl text-charcoal mb-6">
                    I'M ALEX,<br>CREATIVE<br><span class="yellow-highlight">DESIGNER</span>
                </h2>
                <p class="text-medium-gray text-lg mb-8 leading-relaxed">
                    With 8+ years of making things look awesome. I blend editorial design 
                    with playful creativity to create work that's both beautiful and fun.
                </p>
                
                <!-- Skills Doodles -->
                <div class="flex flex-wrap gap-4 mb-8">
                    <div class="px-4 py-2 rounded-full bg-gray-100 border border-light-gray flex items-center">
                        <span class="mr-2">🎨</span>
                        <span class="text-sm">Illustration</span>
                    </div>
                    <div class="px-4 py-2 rounded-full bg-gray-100 border border-light-gray flex items-center">
                        <span class="mr-2">📐</span>
                        <span class="text-sm">Typography</span>
                    </div>
                    <div class="px-4 py-2 rounded-full bg-gray-100 border border-light-gray flex items-center">
                        <span class="mr-2">✨</span>
                        <span class="text-sm">Branding</span>
                    </div>
                    <div class="px-4 py-2 rounded-full bg-gray-100 border border-light-gray flex items-center">
                        <span class="mr-2">💻</span>
                        <span class="text-sm">Web Design</span>
                    </div>
                </div>
                
                <a href="about.php" class="px-8 py-4 rounded-full yellow-accent text-charcoal font-medium hover:bg-mustard-dark transition-colors duration-300 inline-flex items-center bounce-on-hover">
                    MORE ABOUT ME
                    <svg class="w-6 h-6 ml-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                    </svg>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Services -->
<section class="py-20">
    <div class="container mx-auto px-6">
        <div class="text-center mb-16 fade-in-playful">
            <h2 class="font-display text-4xl md:text-6xl text-charcoal mb-6">
                WHAT I<br><span class="yellow-highlight">CREATE</span>
            </h2>
            <p class="text-medium-gray text-lg max-w-2xl mx-auto">
                From editorial layouts to playful illustrations, here's what I love making.
            </p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            <?php 
            $services = [
                [
                    'title' => 'Editorial Design',
                    'description' => 'Magazines, books & publications',
                    'icon' => '📚',
                    'projects' => '24 Projects'
                ],
                [
                    'title' => 'Brand Identity',
                    'description' => 'Logos, colors & brand systems',
                    'icon' => '🎨',
                    'projects' => '18 Projects'
                ],
                [
                    'title' => 'Digital Design',
                    'description' => 'Websites, apps & interfaces',
                    'icon' => '💻',
                    'projects' => '32 Projects'
                ],
                [
                    'title' => 'Illustration',
                    'description' => 'Custom artwork & characters',
                    'icon' => '✏️',
                    'projects' => '15 Projects'
                ]
            ];
            
            foreach ($services as $service): 
            ?>
            <div class="fade-in-playful card-playful p-6">
                <div class="text-3xl mb-4"><?php echo $service['icon']; ?></div>
                <h3 class="font-display text-xl text-charcoal mb-2"><?php echo $service['title']; ?></h3>
                <p class="text-medium-gray text-sm mb-4"><?php echo $service['description']; ?></p>
                <div class="flex items-center justify-between">
                    <span class="text-xs font-medium text-charcoal"><?php echo $service['projects']; ?></span>
                    <div class="w-8 h-8 rounded-full yellow-accent flex items-center justify-center">
                        <span class="text-charcoal text-xs">→</span>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- Testimonials -->
<section class="py-20 bg-white rounded-3xl -mx-6 px-6">
    <div class="container mx-auto">
        <div class="text-center mb-16 fade-in-playful">
            <h2 class="font-display text-4xl md:text-5xl text-charcoal mb-6">
                NICE<br><span class="yellow-highlight">WORDS</span>
            </h2>
            <p class="text-medium-gray text-lg max-w-2xl mx-auto">
                What lovely people have said about working together.
            </p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <?php 
            $testimonials = [
                [
                    'text' => 'Studio Hue transformed our brand with playful energy and editorial precision. Absolutely love working with them!',
                    'name' => 'Sarah Chen',
                    'role' => 'Creative Director, Zest Mag',
                    'image' => 'assets/place1.jpg'
                ],
                [
                    'text' => 'The perfect blend of creativity and strategy. Our new identity stands out in all the right ways.',
                    'name' => 'Marcus Lee',
                    'role' => 'Founder, Bean & Brew',
                    'image' => 'assets/place2.jpg'
                ],
                [
                    'text' => 'Working with Alex was a joy from start to finish. The designs exceeded all expectations.',
                    'name' => 'Jamie Rivera',
                    'role' => 'Product Manager, Playground',
                    'image' => 'assets/place1.jpg'
                ]
            ];
            
            foreach ($testimonials as $testimonial): 
            ?>
            <div class="fade-in-playful card-playful p-6">
                <div class="text-2xl mb-4">"</div>
                <p class="text-medium-gray mb-6 leading-relaxed"><?php echo $testimonial['text']; ?></p>
                <div class="flex items-center">
                    <div class="w-12 h-12 rounded-full overflow-hidden mr-4">
                        <img src="<?php echo $testimonial['image']; ?>" 
                             alt="<?php echo $testimonial['name']; ?>"
                             class="w-full h-full object-cover">
                    </div>
                    <div>
                        <div class="font-medium text-charcoal"><?php echo $testimonial['name']; ?></div>
                        <div class="text-sm text-medium-gray"><?php echo $testimonial['role']; ?></div>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- CTA -->
<section class="py-20">
    <div class="container mx-auto px-6">
        <div class="card-playful p-8 md:p-12 text-center relative overflow-hidden">
            <!-- Background pattern -->
            <div class="absolute inset-0 opacity-5">
                <div class="absolute top-1/4 left-1/4 w-32 h-32 yellow-accent rounded-full"></div>
                <div class="absolute bottom-1/3 right-1/3 w-24 h-24 yellow-accent rounded-full"></div>
            </div>
            
            <div class="relative fade-in-playful">
                <h2 class="font-display text-4xl md:text-6xl text-charcoal mb-6">
                    READY TO MAKE<br>SOMETHING<br><span class="yellow-highlight">AWESOME?</span>
                </h2>
                <p class="text-medium-gray text-lg mb-10 max-w-2xl mx-auto">
                    Let's chat about your project and create something amazing together.
                </p>
                <a href="contact.php" class="inline-flex items-center px-8 py-4 rounded-full yellow-accent text-charcoal font-medium hover:bg-mustard-dark transition-colors duration-300 text-lg bounce-on-hover">
                    START A PROJECT
                    <svg class="w-6 h-6 ml-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                    </svg>
                </a>
            </div>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>