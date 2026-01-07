<?php
$pageTitle = "Creative Services";
include 'includes/header.php';
?>

<!-- Hero -->
<section class="py-20 md:py-32">
    <div class="container mx-auto px-6">
        <div class="max-w-3xl mx-auto text-center fade-in-playful">
            <div class="inline-block px-4 py-2 rounded-full yellow-accent text-charcoal font-medium mb-6 bounce-on-hover">
                🎯 WHAT WE DO
            </div>
            <h1 class="font-display text-5xl md:text-7xl lg:text-8xl text-charcoal mb-6 leading-none">
                OUR CREATIVE<br><span class="yellow-highlight">SERVICES</span>
            </h1>
            <p class="text-lg text-medium-gray leading-relaxed max-w-2xl mx-auto">
                Where playful creativity meets editorial precision. We turn ideas into vibrant visual stories.
            </p>
        </div>
    </div>
</section>

<!-- Design Services -->
<section id="design" class="py-16 md:py-24 scroll-mt-20">
    <div class="container mx-auto px-6">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center fade-in-playful">
            <div>
                <div class="inline-flex items-center px-4 py-2 rounded-full yellow-accent text-charcoal font-medium text-sm mb-6 bounce-on-hover">
                    🎨 OUR STRONG SUIT
                </div>
                <h2 class="font-display text-4xl md:text-5xl text-charcoal mb-6">
                    Design
                </h2>
                <p class="text-medium-gray text-lg mb-6 leading-relaxed">
                    This is where we flex our muscles and passionately craft work that meets our client's brief and exceeds expectations. Design is a natural process, and we always keep it as intuitive, original, and bold as possible.
                </p>
                <p class="text-medium-gray mb-8 leading-relaxed">
                    Strategy lays the foundation, and our instincts take over while bearing in mind the cultural, emotional, functional, and social nuances of what we are designing – inspired by the times, but timeless.
                </p>
                
                <div class="card-playful p-6 mb-8">
                    <h4 class="font-display text-charcoal mb-4">Design Capsule Includes</h4>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <?php 
                        $designServices = [
                            'Art Direction', 'Packaging Design', 'Graphic Design', 'Wall Graphics',
                            'Conceptual 3D', 'Digital Retouching', 'Signage Graphics', 'Illustrations',
                            'Event Design', 'Events Content Design', 'Retail Design', 'Annual Reports',
                            'Custom Typography', 'Keynote / PPT Design', 'Infographics', 'Iconography'
                        ];
                        
                        foreach ($designServices as $service): 
                        ?>
                        <div class="flex items-center">
                            <div class="w-3 h-3 rounded-full yellow-accent mr-3 bounce-on-hover"></div>
                            <span class="text-charcoal text-sm"><?php echo $service; ?></span>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
                
                <a href="contact.php" class="inline-flex items-center px-8 py-4 rounded-full yellow-accent text-charcoal font-medium hover:bg-mustard-dark transition-colors duration-300 bounce-on-hover">
                    Start Design Project
                    <svg class="w-6 h-6 ml-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                    </svg>
                </a>
            </div>
            <div>
                <div class="relative">
                    <div class="card-playful overflow-hidden">
                        <div class="aspect-[4/5] relative">
                            <!-- Image with overlay -->
                            <img src="assets/place1.jpg" alt="Design Studio" 
                                 class="w-full h-full object-cover">
                            <!-- Overlay elements -->
                            <div class="absolute top-6 right-6 w-20 h-20 yellow-accent rounded-full flex items-center justify-center">
                                <span class="text-charcoal font-display text-xl">A</span>
                            </div>
                            <div class="absolute bottom-6 left-6 w-16 h-16 bg-white rounded-xl flex items-center justify-center">
                                <span class="text-charcoal font-display text-lg">B</span>
                            </div>
                        </div>
                    </div>
                    <!-- Floating shapes -->
                    <div class="absolute -top-4 -right-4 w-12 h-12 yellow-accent rounded-lg"></div>
                    <div class="absolute -bottom-4 -left-4 w-16 h-16 yellow-accent rounded-full"></div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Creative Services -->
<section id="creative" class="py-16 md:py-24 bg-white rounded-3xl -mx-6 px-6 scroll-mt-20">
    <div class="container mx-auto">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center fade-in-playful">
            <div class="order-2 lg:order-1">
                <div class="card-playful overflow-hidden">
                    <div class="aspect-[4/3] relative">
                        <img src="assets/place2.jpg" alt="Creative Brainstorming" 
                             class="w-full h-full object-cover">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/20 to-transparent"></div>
                        <!-- Idea icon overlay -->
                        <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2">
                            <div class="w-32 h-32 yellow-accent rounded-full flex items-center justify-center">
                                <span class="text-4xl">💡</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="order-1 lg:order-2">
                <div class="inline-flex items-center px-4 py-2 rounded-full bg-yellow-50 text-charcoal font-medium text-sm mb-6">
                    💡 IDEA IS KING KONG
                </div>
                <h2 class="font-display text-4xl md:text-5xl text-charcoal mb-6">
                    Creative
                </h2>
                <p class="text-medium-gray text-lg mb-6 leading-relaxed">
                    From weaving brand stories to dishing out quick and creative key visuals, it's an art we have honed. The little grey cells have helped us create clever, clear, and conceptual pieces of communication.
                </p>
                <p class="text-medium-gray mb-8 leading-relaxed">
                    Be it static, motion, or GIFs, we punch above our weight. The vision is to produce quality work that speaks for itself.
                </p>
                
                <div class="bg-gray-50 rounded-2xl p-6 mb-8 border border-light-gray">
                    <h4 class="font-display text-charcoal mb-4">Creative Capsule Includes</h4>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <?php 
                        $creativeServices = [
                            'Brand Campaigns', 'Tactical Creative Ideas', 'Copywriting',
                            'Motion Design', 'Digital Content Development', 'Radio & TVC',
                            'Key Visuals', 'Internal Communication', 'Conceptualization',
                            'Social Media Content', 'Creative Content'
                        ];
                        
                        foreach ($creativeServices as $service): 
                        ?>
                        <div class="flex items-center">
                            <div class="w-3 h-3 rounded-full yellow-accent mr-3 bounce-on-hover"></div>
                            <span class="text-charcoal text-sm"><?php echo $service; ?></span>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
                
                <a href="contact.php" class="inline-flex items-center px-8 py-4 rounded-full border-2 border-charcoal text-charcoal font-medium hover:bg-charcoal hover:text-white transition-all duration-300 bounce-on-hover">
                    Explore Creative Work
                    <svg class="w-6 h-6 ml-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                    </svg>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Digital Services -->
<section id="digital" class="py-16 md:py-24 scroll-mt-20">
    <div class="container mx-auto px-6">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center fade-in-playful">
            <div>
                <div class="inline-flex items-center px-4 py-2 rounded-full yellow-accent text-charcoal font-medium text-sm mb-6 bounce-on-hover">
                    📱 SCROLLABLE, LIKABLE, SHARABLE
                </div>
                <h2 class="font-display text-4xl md:text-5xl text-charcoal mb-6">
                    Digital
                </h2>
                <p class="text-medium-gray text-lg mb-8 leading-relaxed">
                    Digital and its various avatars help brands connect, listen, and engage with their clique. From time specific to always-on, our creative digital content strategy is designed to aid brands acquire and retain fans, followers, and social bees.
                </p>
                
                <div class="card-playful p-6 mb-8">
                    <h4 class="font-display text-charcoal mb-4">Digital Capsule Includes</h4>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <?php 
                        $digitalServices = [
                            'Social Campaigns', 'Digital Content Creation', 'Instagram Content',
                            'Digital Production', 'Interface Design', 'Animated Content',
                            'Motion Design', 'Social Media Content Design', 'Web Design',
                            'Integrated Digital Campaign'
                        ];
                        
                        foreach ($digitalServices as $service): 
                        ?>
                        <div class="flex items-center">
                            <div class="w-3 h-3 rounded-full yellow-accent mr-3 bounce-on-hover"></div>
                            <span class="text-charcoal text-sm"><?php echo $service; ?></span>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
                
                <a href="contact.php" class="inline-flex items-center px-8 py-4 rounded-full yellow-accent text-charcoal font-medium hover:bg-mustard-dark transition-colors duration-300 bounce-on-hover">
                    Discuss Digital Strategy
                    <svg class="w-6 h-6 ml-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                    </svg>
                </a>
            </div>
            <div>
                <div class="relative">
                    <div class="card-playful overflow-hidden">
                        <div class="aspect-[4/3] relative">
                            <img src="assets/place1.jpg" alt="Digital Design" 
                                 class="w-full h-full object-cover">
                            <!-- Overlay grid -->
                            <div class="absolute inset-0 p-6">
                                <div class="grid grid-cols-3 gap-4">
                                    <div class="w-full h-16 bg-white/80 rounded-lg"></div>
                                    <div class="w-full h-16 yellow-accent rounded-lg mt-4"></div>
                                    <div class="w-full h-16 bg-white/80 rounded-lg"></div>
                                    <div class="w-full h-16 yellow-accent rounded-lg"></div>
                                    <div class="w-full h-16 bg-white/80 rounded-lg"></div>
                                    <div class="w-full h-16 yellow-accent rounded-lg mt-4"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Decorative dots -->
                    <div class="absolute -top-3 -left-3 flex space-x-2">
                        <div class="w-6 h-6 yellow-accent rounded-full"></div>
                        <div class="w-6 h-6 yellow-accent rounded-full"></div>
                        <div class="w-6 h-6 yellow-accent rounded-full"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Films Services -->
<section id="films" class="py-16 md:py-24 bg-white rounded-3xl -mx-6 px-6 scroll-mt-20">
    <div class="container mx-auto">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center fade-in-playful">
            <div class="order-2 lg:order-1">
                <div class="card-playful overflow-hidden">
                    <div class="aspect-[4/3] relative bg-charcoal">
                        <img src="assets/place2.jpg" alt="Film Production" 
                             class="w-full h-full object-cover opacity-40">
                        <!-- Film reel overlay -->
                        <div class="absolute inset-0 flex items-center justify-center">
                            <div class="relative">
                                <div class="w-48 h-48 rounded-full border-8 border-white/20"></div>
                                <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2">
                                    <div class="w-32 h-32 yellow-accent rounded-full flex items-center justify-center">
                                        <span class="text-4xl">🎬</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="order-1 lg:order-2">
                <div class="inline-flex items-center px-4 py-2 rounded-full bg-yellow-50 text-charcoal font-medium text-sm mb-6">
                    🎬 MADE BEHIND THE SCENE
                </div>
                <h2 class="font-display text-4xl md:text-5xl text-charcoal mb-6">
                    Films
                </h2>
                <p class="text-medium-gray text-lg mb-6 leading-relaxed">
                    A film is made behind the scene. What goes in the final cut doesn't do justice to what goes behind making it. It's a grind; after all, we have produced quite a few.
                </p>
                <p class="text-medium-gray mb-8 leading-relaxed">
                    Commercials, animation, corporate videos – name it and we have conceptualized, visualized and executed some gems over the years.
                </p>
                
                <div class="bg-gray-50 rounded-2xl p-6 mb-8 border border-light-gray">
                    <h4 class="font-display text-charcoal mb-4">Films & Animation Services</h4>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <?php 
                        $filmsServices = [
                            'Radio & TVC Script', 'Explanatory Film Concept', 'Social Media Films',
                            '2D & 3D Animation', 'Corporate Videos', 'Reels',
                            'Story Content', 'Commercial Production', 'Documentary Films'
                        ];
                        
                        foreach ($filmsServices as $service): 
                        ?>
                        <div class="flex items-center">
                            <div class="w-3 h-3 rounded-full yellow-accent mr-3 bounce-on-hover"></div>
                            <span class="text-charcoal text-sm"><?php echo $service; ?></span>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
                
                <a href="contact.php" class="inline-flex items-center px-8 py-4 rounded-full yellow-accent text-charcoal font-medium hover:bg-mustard-dark transition-colors duration-300 bounce-on-hover">
                    Start Film Project
                    <svg class="w-6 h-6 ml-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                    </svg>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Services Process -->
<section class="py-16 md:py-24">
    <div class="container mx-auto px-6">
        <div class="text-center max-w-3xl mx-auto mb-16 fade-in-playful">
            <div class="inline-block px-4 py-2 rounded-full bg-yellow-50 text-charcoal font-medium mb-6">
                🔄 OUR PROCESS
            </div>
            <h2 class="font-display text-4xl md:text-5xl text-charcoal mb-6">
                How We Make<br>Magic Happen
            </h2>
            <p class="text-medium-gray text-lg">
                A structured yet playful approach that leaves room for creative surprises
            </p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            <?php 
            $processSteps = [
                [
                    'number' => '01',
                    'title' => 'Discovery',
                    'description' => 'Deep dive into your brand, audience, and wildest dreams',
                    'icon' => '🔍'
                ],
                [
                    'number' => '02',
                    'title' => 'Concept',
                    'description' => 'Creative ideation and playful conceptual development',
                    'icon' => '💭'
                ],
                [
                    'number' => '03',
                    'title' => 'Execution',
                    'description' => 'Precision implementation with creative flair',
                    'icon' => '🎨'
                ],
                [
                    'number' => '04',
                    'title' => 'Delivery',
                    'description' => 'Final reveal and celebration of awesome work',
                    'icon' => '✨'
                ]
            ];
            
            foreach ($processSteps as $step): 
            ?>
            <div class="fade-in-playful">
                <div class="card-playful p-6 text-center h-full">
                    <div class="w-16 h-16 rounded-2xl yellow-accent flex items-center justify-center mx-auto mb-6">
                        <span class="text-2xl"><?php echo $step['icon']; ?></span>
                    </div>
                    <div class="font-display text-2xl text-charcoal mb-3"><?php echo $step['number']; ?></div>
                    <h3 class="font-display text-xl text-charcoal mb-3">
                        <?php echo $step['title']; ?>
                    </h3>
                    <p class="text-medium-gray text-sm">
                        <?php echo $step['description']; ?>
                    </p>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- Testimonials -->
<section class="py-16 md:py-24 bg-white rounded-3xl -mx-6 px-6">
    <div class="container mx-auto">
        <div class="text-center mb-16 fade-in-playful">
            <h2 class="font-display text-4xl md:text-5xl text-charcoal mb-6">
                Happy<br><span class="yellow-highlight">Clients</span>
            </h2>
            <p class="text-medium-gray text-lg max-w-2xl mx-auto">
                What lovely people say about working with our playful studio
            </p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <?php 
            $testimonials = [
                [
                    'text' => "Studio Hue's creative approach transformed our brand. Their playful yet professional style was exactly what we needed!",
                    'name' => 'Sarah Chen',
                    'role' => 'Creative Director, Zest Mag',
                    'image' => 'assets/place1.jpg'
                ],
                [
                    'text' => "Working with Alex was a joy! The digital campaign they created exceeded all our expectations and engagement goals.",
                    'name' => 'Marcus Lee',
                    'role' => 'Marketing Head, Bean & Brew',
                    'image' => 'assets/place2.jpg'
                ],
                [
                    'text' => "The film project was handled with such creativity and care. Couldn't be happier with the final result!",
                    'name' => 'Jamie Rivera',
                    'role' => 'Producer, Urban Films',
                    'image' => 'assets/place1.jpg'
                ]
            ];
            
            foreach ($testimonials as $testimonial): 
            ?>
            <div class="fade-in-playful">
                <div class="card-playful p-6 h-full">
                    <div class="text-2xl mb-4">"</div>
                    <p class="text-medium-gray mb-6 leading-relaxed"><?php echo $testimonial['text']; ?></p>
                    <div class="flex items-center pt-6 border-t border-light-gray">
                        <div class="w-12 h-12 rounded-full overflow-hidden mr-4">
                            <img src="<?php echo $testimonial['image']; ?>" 
                                 alt="<?php echo $testimonial['name']; ?>"
                                 class="w-full h-full object-cover">
                        </div>
                        <div>
                            <div class="font-display text-charcoal"><?php echo $testimonial['name']; ?></div>
                            <div class="text-sm text-medium-gray"><?php echo $testimonial['role']; ?></div>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- CTA -->
<section class="py-20 md:py-32">
    <div class="container mx-auto px-6">
        <div class="card-playful p-8 md:p-12 text-center relative overflow-hidden">
            <!-- Background pattern -->
            <div class="absolute inset-0">
                <div class="absolute top-1/4 left-1/4 w-32 h-32 yellow-accent rounded-full opacity-10"></div>
                <div class="absolute bottom-1/3 right-1/3 w-24 h-24 yellow-accent rounded-full opacity-10"></div>
            </div>
            
            <div class="relative fade-in-playful">
                <div class="inline-block px-4 py-2 rounded-full yellow-accent text-charcoal font-medium mb-6 bounce-on-hover">
                    🚀 READY TO START?
                </div>
                <h2 class="font-display text-4xl md:text-6xl text-charcoal mb-6">
                    Let's Create<br>Something<br><span class="yellow-highlight">Awesome</span>
                </h2>
                <p class="text-medium-gray text-lg mb-10 max-w-2xl mx-auto">
                    Whether it's design, creative, digital, or films – we're excited to bring your vision to life with our playful editorial approach.
                </p>
                <div class="flex flex-wrap gap-4 justify-center">
                    <a href="contact.php" class="px-8 py-4 rounded-full yellow-accent text-charcoal font-medium hover:bg-mustard-dark transition-colors duration-300 text-lg bounce-on-hover">
                        START A PROJECT
                        <svg class="w-6 h-6 ml-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                        </svg>
                    </a>
                    <a href="index.php#work" class="px-8 py-4 rounded-full border-2 border-charcoal text-charcoal font-medium hover:bg-charcoal hover:text-white transition-all duration-300 text-lg bounce-on-hover">
                        SEE OUR WORK
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>