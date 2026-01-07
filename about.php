<?php
$pageTitle = "Our Story";
include 'includes/header.php';
?>

<!-- Hero -->
<section class="py-20 md:py-32">
    <div class="container mx-auto px-6">
        <div class="max-w-3xl mx-auto text-center fade-in-playful">
            <div class="inline-block px-4 py-2 rounded-full yellow-accent text-charcoal font-medium mb-6 bounce-on-hover">
                👋 OUR STORY
            </div>
            <h1 class="font-display text-5xl md:text-7xl lg:text-8xl text-charcoal mb-6 leading-none">
                OUR DESIGN<br><span class="yellow-highlight">PHILOSOPHY</span>
            </h1>
            <p class="text-lg text-medium-gray leading-relaxed max-w-2xl mx-auto">
                Where playful creativity meets editorial precision, and every color tells a story worth sharing.
            </p>
        </div>
    </div>
</section>

<!-- Story -->
<section class="py-16 md:py-24">
    <div class="container mx-auto px-6">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center fade-in-playful">
            <div>
                <div class="inline-flex items-center px-4 py-2 rounded-full bg-yellow-50 text-charcoal font-medium text-sm mb-6">
                    🚀 OUR JOURNEY
                </div>
                <h2 class="font-display text-4xl md:text-5xl text-charcoal mb-6">
                    Crafting Visual<br>Narratives
                </h2>
                <div class="space-y-6 text-medium-gray text-lg leading-relaxed">
                    <p>
                        Founded on the principle that great design communicates before a single word is spoken, 
                        Hue Designs began as a collective of creatives passionate about the power of 
                        visual storytelling with a playful twist.
                    </p>
                    <p>
                        We believe that every color, every line, and every design choice contributes to a 
                        larger narrative. Our approach combines artistic intuition with technical precision 
                        to create designs that not only look beautiful but make you smile.
                    </p>
                    <p>
                        Over the years, we've evolved from a small design collective to a full-service studio, 
                        but our core philosophy remains unchanged: design should be intentional, meaningful, 
                        and memorable—with a dash of fun.
                    </p>
                </div>
                
                <!-- Fun Facts -->
                <div class="grid grid-cols-2 gap-4 mt-8">
                    <div class="bg-yellow-50 rounded-xl p-4">
                        <div class="font-display text-2xl text-charcoal mb-1">8+</div>
                        <div class="text-sm text-medium-gray">Years Creating</div>
                    </div>
                    <div class="bg-yellow-50 rounded-xl p-4">
                        <div class="font-display text-2xl text-charcoal mb-1">200+</div>
                        <div class="text-sm text-medium-gray">Projects Delivered</div>
                    </div>
                    <div class="bg-yellow-50 rounded-xl p-4">
                        <div class="font-display text-2xl text-charcoal mb-1">∞</div>
                        <div class="text-sm text-medium-gray">Cups of Coffee</div>
                    </div>
                    <div class="bg-yellow-50 rounded-xl p-4">
                        <div class="font-display text-2xl text-charcoal mb-1">50+</div>
                        <div class="text-sm text-medium-gray">Happy Clients</div>
                    </div>
                </div>
            </div>
            
            <div>
                <div class="card-playful overflow-hidden">
                    <div class="aspect-[4/5] relative">
                        <img src="assets/place1.jpg" alt="Studio Workspace" 
                             class="w-full h-full object-cover">
                        <!-- Overlay design elements -->
                        <div class="absolute top-6 left-6 w-20 h-20 yellow-accent rounded-full flex items-center justify-center">
                            <span class="text-charcoal font-display text-xl">H</span>
                        </div>
                        <div class="absolute bottom-6 right-6 w-16 h-16 bg-white rounded-xl flex items-center justify-center">
                            <span class="text-charcoal text-lg">🎨</span>
                        </div>
                    </div>
                </div>
                <!-- Floating decorative elements -->
                <div class="relative -mt-8 -ml-8">
                    <div class="w-12 h-12 yellow-accent rounded-lg rotate-12"></div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Values -->
<section class="py-16 md:py-24 bg-white rounded-3xl -mx-6 px-6">
    <div class="container mx-auto">
        <div class="text-center max-w-3xl mx-auto mb-16 fade-in-playful">
            <div class="inline-block px-4 py-2 rounded-full yellow-accent text-charcoal font-medium mb-6">
                ✨ CORE VALUES
            </div>
            <h2 class="font-display text-4xl md:text-5xl text-charcoal mb-6">
                What Guides Our<br>Creative Spirit
            </h2>
            <p class="text-medium-gray text-lg">
                The principles that shape every project and every pixel
            </p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <?php 
            $values = [
                [
                    'title' => 'Intentional Play',
                    'description' => 'Every element serves a purpose while maintaining a sense of playfulness and joy.',
                    'icon' => '🎯',
                    'color' => 'bg-yellow-50 border-yellow-100'
                ],
                [
                    'title' => 'Precision with Personality',
                    'description' => 'Rigorous attention to detail paired with unique character and creative flair.',
                    'icon' => '⚡',
                    'color' => 'bg-blue-50 border-blue-100'
                ],
                [
                    'title' => 'Creative Innovation',
                    'description' => 'Pushing boundaries while keeping designs accessible, engaging, and memorable.',
                    'icon' => '🚀',
                    'color' => 'bg-pink-50 border-pink-100'
                ]
            ];
            
            foreach ($values as $value): 
            ?>
            <div class="fade-in-playful">
                <div class="card-playful p-8 h-full hover:border-mustard transition-colors duration-300">
                    <div class="text-4xl mb-6"><?php echo $value['icon']; ?></div>
                    <h3 class="font-display text-xl text-charcoal mb-4">
                        <?php echo $value['title']; ?>
                    </h3>
                    <p class="text-medium-gray">
                        <?php echo $value['description']; ?>
                    </p>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- Approach -->
<section class="py-16 md:py-24">
    <div class="container mx-auto px-6">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center fade-in-playful">
            <div class="order-2 lg:order-1">
                <div class="card-playful overflow-hidden">
                    <div class="aspect-[4/3] relative">
                        <img src="assets/place2.jpg" alt="Creative Process" 
                             class="w-full h-full object-cover">
                        <!-- Process overlay -->
                        <div class="absolute inset-0 p-6">
                            <div class="grid grid-cols-2 gap-4">
                                <div class="w-full h-16 yellow-accent rounded-lg"></div>
                                <div class="w-full h-16 bg-white/80 rounded-lg mt-4"></div>
                                <div class="w-full h-16 bg-white/80 rounded-lg"></div>
                                <div class="w-full h-16 yellow-accent rounded-lg mt-4"></div>
                            </div>
                            <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2">
                                <div class="w-32 h-32 yellow-accent rounded-full flex items-center justify-center">
                                    <span class="text-charcoal text-3xl">🔄</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="order-1 lg:order-2">
                <div class="inline-flex items-center px-4 py-2 rounded-full bg-yellow-50 text-charcoal font-medium text-sm mb-6">
                    🔄 OUR PROCESS
                </div>
                <h2 class="font-display text-4xl md:text-5xl text-charcoal mb-6">
                    Collaborative &<br>Playful Process
                </h2>
                <div class="space-y-8">
                    <div class="flex items-start group">
                        <div class="w-12 h-12 rounded-xl yellow-accent flex items-center justify-center mr-4 flex-shrink-0 group-hover:scale-110 transition-transform">
                            <span class="text-charcoal font-display text-lg">1</span>
                        </div>
                        <div>
                            <h4 class="font-display text-xl text-charcoal mb-2 group-hover:text-mustard-dark transition-colors">Discovery & Play</h4>
                            <p class="text-medium-gray">We dive deep into your brand, audience, and objectives with creative curiosity.</p>
                        </div>
                    </div>
                    <div class="flex items-start group">
                        <div class="w-12 h-12 rounded-xl yellow-accent flex items-center justify-center mr-4 flex-shrink-0 group-hover:scale-110 transition-transform">
                            <span class="text-charcoal font-display text-lg">2</span>
                        </div>
                        <div>
                            <h4 class="font-display text-xl text-charcoal mb-2 group-hover:text-mustard-dark transition-colors">Concept & Create</h4>
                            <p class="text-medium-gray">Initial concepts and mood boards that capture the playful essence of your vision.</p>
                        </div>
                    </div>
                    <div class="flex items-start group">
                        <div class="w-12 h-12 rounded-xl yellow-accent flex items-center justify-center mr-4 flex-shrink-0 group-hover:scale-110 transition-transform">
                            <span class="text-charcoal font-display text-lg">3</span>
                        </div>
                        <div>
                            <h4 class="font-display text-xl text-charcoal mb-2 group-hover:text-mustard-dark transition-colors">Execute & Elevate</h4>
                            <p class="text-medium-gray">Precise production with creative flair and quality at every stage.</p>
                        </div>
                    </div>
                    <div class="flex items-start group">
                        <div class="w-12 h-12 rounded-xl yellow-accent flex items-center justify-center mr-4 flex-shrink-0 group-hover:scale-110 transition-transform">
                            <span class="text-charcoal font-display text-lg">4</span>
                        </div>
                        <div>
                            <h4 class="font-display text-xl text-charcoal mb-2 group-hover:text-mustard-dark transition-colors">Deliver & Celebrate</h4>
                            <p class="text-medium-gray">Final delivery with ongoing support and celebration of awesome work.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Team/Founder -->
<section class="py-16 md:py-24 bg-white rounded-3xl -mx-6 px-6">
    <div class="container mx-auto">
        <div class="text-center max-w-3xl mx-auto mb-16 fade-in-playful">
            <div class="inline-block px-4 py-2 rounded-full yellow-accent text-charcoal font-medium mb-6">
                👨‍🎨 MEET THE FOUNDER
            </div>
            <h2 class="font-display text-4xl md:text-5xl text-charcoal mb-6">
                Alex Morgan<br><span class="yellow-highlight">Creative Director</span>
            </h2>
        </div>
        
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <div class="fade-in-playful">
                <!-- Portrait with yellow shapes -->
                <div class="relative">
                    <div class="card-playful overflow-hidden">
                        <div class="aspect-[3/4] relative">
                            <img src="assets/place2.jpg" alt="Alex Morgan" 
                                 class="w-full h-full object-cover portrait-grayscale">
                            <div class="absolute inset-0 bg-gradient-to-t from-black/10 to-transparent"></div>
                        </div>
                    </div>
                    <!-- Yellow shapes -->
                    <div class="absolute -top-4 -right-4 w-16 h-16 yellow-accent rounded-full"></div>
                    <div class="absolute -bottom-4 -left-4 w-20 h-20 yellow-accent rounded-lg rotate-12"></div>
                    <div class="absolute top-1/2 -right-8 w-12 h-12 yellow-accent rounded-full"></div>
                </div>
            </div>
            
            <div class="fade-in-playful">
                <div class="space-y-6">
                    <p class="text-medium-gray text-lg leading-relaxed">
                        With over 8 years in the creative industry, Alex brings a unique blend of 
                        editorial precision and playful creativity to every project. What started as 
                        a passion for doodling in margins evolved into a studio dedicated to making 
                        design fun and functional.
                    </p>
                    
                    <div class="space-y-4">
                        <div class="flex items-center">
                            <div class="w-3 h-3 rounded-full yellow-accent mr-3"></div>
                            <span class="text-charcoal">Former Art Director at major publications</span>
                        </div>
                        <div class="flex items-center">
                            <div class="w-3 h-3 rounded-full yellow-accent mr-3"></div>
                            <span class="text-charcoal">Speaker at Design Week conferences</span>
                        </div>
                        <div class="flex items-center">
                            <div class="w-3 h-3 rounded-full yellow-accent mr-3"></div>
                            <span class="text-charcoal">Lover of bold typography and yellow everything</span>
                        </div>
                    </div>
                    
                    <div class="pt-6 border-t border-light-gray">
                        <p class="text-medium-gray italic">
                            "Great design should make you feel something. My mission is to create work 
                            that not only looks good but brings a smile to your face."
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Studio Culture -->
<section class="py-16 md:py-24">
    <div class="container mx-auto px-6">
        <div class="text-center mb-16 fade-in-playful">
            <h2 class="font-display text-4xl md:text-5xl text-charcoal mb-6">
                Studio<br><span class="yellow-highlight">Culture</span>
            </h2>
            <p class="text-medium-gray text-lg max-w-2xl mx-auto">
                What makes our creative space special (besides the endless snacks)
            </p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            <?php 
            $culture = [
                [
                    'title' => 'Play First',
                    'description' => 'We believe the best ideas come from playful exploration',
                    'emoji' => '🎮'
                ],
                [
                    'title' => 'Learn Always',
                    'description' => 'Continuous growth and skill development',
                    'emoji' => '📚'
                ],
                [
                    'title' => 'Collaborate Openly',
                    'description' => 'Transparent communication and teamwork',
                    'emoji' => '🤝'
                ],
                [
                    'title' => 'Celebrate Wins',
                    'description' => 'Big or small, every success matters',
                    'emoji' => '🎉'
                ]
            ];
            
            foreach ($culture as $item): 
            ?>
            <div class="fade-in-playful">
                <div class="card-playful p-6 text-center">
                    <div class="text-3xl mb-4"><?php echo $item['emoji']; ?></div>
                    <h4 class="font-display text-charcoal mb-3"><?php echo $item['title']; ?></h4>
                    <p class="text-medium-gray text-sm"><?php echo $item['description']; ?></p>
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
            <!-- Background elements -->
            <div class="absolute top-6 right-6 w-20 h-20 yellow-accent rounded-full opacity-10"></div>
            <div class="absolute bottom-6 left-6 w-16 h-16 yellow-accent rounded-full opacity-10"></div>
            
            <div class="relative fade-in-playful">
                <div class="inline-block px-4 py-2 rounded-full yellow-accent text-charcoal font-medium mb-6 bounce-on-hover">
                    🚀 READY TO COLLABORATE?
                </div>
                <h2 class="font-display text-4xl md:text-6xl text-charcoal mb-6">
                    Let's Create Something<br><span class="yellow-highlight">Remarkable</span>
                </h2>
                <p class="text-medium-gray text-lg mb-10 max-w-2xl mx-auto">
                    Whether you have a project in mind or just want to chat about design, 
                    we'd love to hear from you.
                </p>
                <div class="flex flex-wrap gap-4 justify-center">
                    <a href="contact.php" class="inline-flex items-center px-8 py-4 rounded-full yellow-accent text-charcoal font-medium hover:bg-mustard-dark transition-colors duration-300 text-lg bounce-on-hover">
                        GET IN TOUCH
                        <svg class="w-6 h-6 ml-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                        </svg>
                    </a>
                    <a href="services.php" class="inline-flex items-center px-8 py-4 rounded-full border-2 border-charcoal text-charcoal font-medium hover:bg-charcoal hover:text-white transition-all duration-300 text-lg bounce-on-hover">
                        VIEW SERVICES
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>