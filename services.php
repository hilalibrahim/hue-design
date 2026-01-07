<?php
$pageTitle = "Creative Services";
include 'includes/header.php';
?>

<!-- Hero -->
<section class="hero-gradient py-12 md:py-24">
    <div class="container mx-auto px-6">
        <div class="max-w-3xl mx-auto text-center fade-in">
            <h1 class="font-display text-4xl md:text-5xl lg:text-6xl font-bold text-gray-900 leading-tight mb-6">
                Our Creative
                <span class="bg-gradient-to-r from-[#88cbc0] to-[#a8d8ea] bg-clip-text text-transparent">
                    Services
                </span>
            </h1>
            <p class="text-xl text-gray-600 leading-relaxed">
                Where strategy meets creativity, and ideas transform into compelling visual narratives.
            </p>
        </div>
    </div>
</section>

<!-- Design Services -->
<section id="design" class="py-16 md:py-24 scroll-mt-20">
    <div class="container mx-auto px-6">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center fade-in">
            <div>
                <div class="inline-flex items-center px-4 py-2 rounded-full bg-gradient-to-r from-[#88cbc0]/10 to-[#a8d8ea]/10 text-[#88cbc0] font-semibold text-sm mb-6">
                    Our Strong Suit
                </div>
                <h2 class="font-display text-3xl md:text-4xl font-bold text-gray-900 mb-6">
                    Design
                </h2>
                <p class="text-gray-600 text-lg mb-8 leading-relaxed">
                    This is where we flex our muscles and passionately craft work that meets our client's brief and exceeds expectations. Design is a natural process, and we always keep it as intuitive, original, and bold as possible.
                </p>
                <p class="text-gray-600 mb-8 leading-relaxed">
                    Strategy lays the foundation, and our instincts take over while bearing in mind the cultural, emotional, functional, and social nuances of what we are designing – inspired by the times, but timeless.
                </p>
                
                <div class="bg-gray-50 rounded-2xl p-6 mb-8">
                    <h4 class="font-display font-semibold text-gray-900 mb-4">Design Capsule Includes</h4>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-3">
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
                            <div class="w-2 h-2 rounded-full bg-gradient-to-r from-[#88cbc0] to-[#a8d8ea] mr-3"></div>
                            <span class="text-gray-700"><?php echo $service; ?></span>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
                
                <a href="#contact" class="inline-flex items-center px-6 py-3 rounded-2xl bg-gradient-to-r from-[#88cbc0] to-[#a8d8ea] text-white font-semibold hover:shadow-xl transition-all duration-300">
                    Start Design Project
                    <svg class="w-5 h-5 ml-2" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M10.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L12.586 11H5a1 1 0 110-2h7.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                    </svg>
                </a>
            </div>
            <div>
                <div class="relative rounded-3xl overflow-hidden shadow-2xl">
                    <div class="aspect-[4/5] bg-gradient-to-br from-gray-100 to-gray-200 flex items-center justify-center">
                        <!-- Design visualization -->
                        <div class="relative w-full h-full p-8">
                            <div class="absolute top-8 left-8 w-24 h-24 rounded-2xl bg-gradient-to-r from-[#88cbc0] to-[#a8d8ea] opacity-20"></div>
                            <div class="absolute bottom-12 right-12 w-32 h-32 rounded-2xl bg-gradient-to-r from-[#a8d8ea] to-[#88cbc0] opacity-15"></div>
                            <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2">
                                <div class="grid grid-cols-2 gap-6">
                                    <div class="w-16 h-16 bg-white rounded-xl shadow-lg flex items-center justify-center">
                                        <span class="text-2xl font-bold text-[#88cbc0]">A</span>
                                    </div>
                                    <div class="w-16 h-16 bg-gradient-to-r from-[#88cbc0] to-[#a8d8ea] rounded-xl shadow-lg flex items-center justify-center">
                                        <span class="text-2xl font-bold text-white">B</span>
                                    </div>
                                    <div class="w-16 h-16 bg-gradient-to-r from-[#a8d8ea] to-[#88cbc0] rounded-xl shadow-lg flex items-center justify-center">
                                        <span class="text-2xl font-bold text-white">C</span>
                                    </div>
                                    <div class="w-16 h-16 bg-white rounded-xl shadow-lg flex items-center justify-center">
                                        <span class="text-2xl font-bold text-[#a8d8ea]">D</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Creative Services -->
<section id="creative" class="py-16 md:py-24 bg-gray-50 scroll-mt-20">
    <div class="container mx-auto px-6">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center fade-in">
            <div class="order-2 lg:order-1">
                <div class="relative rounded-3xl overflow-hidden shadow-2xl">
                    <div class="aspect-[4/3] bg-gradient-to-br from-gray-100 to-gray-200 flex items-center justify-center">
                        <!-- Creative visualization -->
                        <div class="relative w-full h-full p-8">
                            <div class="absolute top-1/4 left-1/4 w-20 h-20 rounded-full bg-gradient-to-r from-[#88cbc0] to-[#a8d8ea] opacity-30"></div>
                            <div class="absolute bottom-1/3 right-1/4 w-24 h-24 rounded-full bg-gradient-to-r from-[#a8d8ea] to-[#88cbc0] opacity-20"></div>
                            <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2">
                                <div class="text-center">
                                    <div class="w-32 h-32 rounded-full border-8 border-white bg-gradient-to-r from-[#88cbc0] to-[#a8d8ea] shadow-xl flex items-center justify-center">
                                        <span class="text-white text-4xl font-bold">💡</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="order-1 lg:order-2">
                <div class="inline-flex items-center px-4 py-2 rounded-full bg-gradient-to-r from-[#88cbc0]/10 to-[#a8d8ea]/10 text-[#88cbc0] font-semibold text-sm mb-6">
                    Idea is King Kong
                </div>
                <h2 class="font-display text-3xl md:text-4xl font-bold text-gray-900 mb-6">
                    Creative
                </h2>
                <p class="text-gray-600 text-lg mb-8 leading-relaxed">
                    From weaving brand stories to dishing out quick and creative key visuals, it's an art we have honed. The little grey cells have helped us create clever, clear, and conceptual pieces of communication.
                </p>
                <p class="text-gray-600 mb-8 leading-relaxed">
                    Be it static, motion, or GIFs, we punch above our weight. The vision is to produce quality work that speaks for itself.
                </p>
                
                <div class="bg-white rounded-2xl p-6 mb-8 border border-gray-100">
                    <h4 class="font-display font-semibold text-gray-900 mb-4">Creative Capsule Includes</h4>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-3">
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
                            <div class="w-2 h-2 rounded-full bg-gradient-to-r from-[#88cbc0] to-[#a8d8ea] mr-3"></div>
                            <span class="text-gray-700"><?php echo $service; ?></span>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
                
                <a href="#contact" class="inline-flex items-center px-6 py-3 rounded-2xl bg-gradient-to-r from-[#88cbc0] to-[#a8d8ea] text-white font-semibold hover:shadow-xl transition-all duration-300">
                    Explore Creative Work
                    <svg class="w-5 h-5 ml-2" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M10.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L12.586 11H5a1 1 0 110-2h7.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                    </svg>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Digital Services -->
<section id="digital" class="py-16 md:py-24 scroll-mt-20">
    <div class="container mx-auto px-6">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center fade-in">
            <div>
                <div class="inline-flex items-center px-4 py-2 rounded-full bg-gradient-to-r from-[#88cbc0]/10 to-[#a8d8ea]/10 text-[#88cbc0] font-semibold text-sm mb-6">
                    Scrollable, Likable, Sharable
                </div>
                <h2 class="font-display text-3xl md:text-4xl font-bold text-gray-900 mb-6">
                    Digital
                </h2>
                <p class="text-gray-600 text-lg mb-8 leading-relaxed">
                    Digital and its various avatars help brands connect, listen, and engage with their clique. From time specific to always-on, our creative digital content strategy is designed to aid brands acquire and retain fans, followers, and social bees.
                </p>
                
                <div class="bg-gray-50 rounded-2xl p-6 mb-8">
                    <h4 class="font-display font-semibold text-gray-900 mb-4">Digital Capsule Includes</h4>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-3">
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
                            <div class="w-2 h-2 rounded-full bg-gradient-to-r from-[#88cbc0] to-[#a8d8ea] mr-3"></div>
                            <span class="text-gray-700"><?php echo $service; ?></span>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
                
                <a href="#contact" class="inline-flex items-center px-6 py-3 rounded-2xl bg-gradient-to-r from-[#88cbc0] to-[#a8d8ea] text-white font-semibold hover:shadow-xl transition-all duration-300">
                    Discuss Digital Strategy
                    <svg class="w-5 h-5 ml-2" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M10.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L12.586 11H5a1 1 0 110-2h7.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                    </svg>
                </a>
            </div>
            <div>
                <div class="relative rounded-3xl overflow-hidden shadow-2xl">
                    <div class="aspect-[4/3] bg-gradient-to-br from-gray-100 to-gray-200 flex items-center justify-center">
                        <!-- Digital visualization -->
                        <div class="relative w-full h-full p-8">
                            <div class="grid grid-cols-3 gap-4">
                                <div class="w-20 h-20 rounded-xl bg-white shadow-lg"></div>
                                <div class="w-20 h-20 rounded-xl bg-gradient-to-r from-[#88cbc0] to-[#a8d8ea] shadow-lg mt-8"></div>
                                <div class="w-20 h-20 rounded-xl bg-white shadow-lg"></div>
                                <div class="w-20 h-20 rounded-xl bg-gradient-to-r from-[#a8d8ea] to-[#88cbc0] shadow-lg"></div>
                                <div class="w-20 h-20 rounded-xl bg-white shadow-lg"></div>
                                <div class="w-20 h-20 rounded-xl bg-gradient-to-r from-[#88cbc0] to-[#a8d8ea] shadow-lg mt-8"></div>
                            </div>
                            <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2">
                                <div class="w-24 h-24 rounded-full border-4 border-white bg-gradient-to-r from-[#88cbc0] to-[#a8d8ea] shadow-xl"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Films Services -->
<section id="films" class="py-16 md:py-24 bg-gray-50 scroll-mt-20">
    <div class="container mx-auto px-6">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center fade-in">
            <div class="order-2 lg:order-1">
                <div class="relative rounded-3xl overflow-hidden shadow-2xl">
                    <div class="aspect-[4/3] bg-gradient-to-br from-gray-900 to-gray-800 flex items-center justify-center">
                        <!-- Films visualization -->
                        <div class="relative w-full h-full p-8">
                            <div class="absolute inset-0 flex items-center justify-center">
                                <div class="w-32 h-32 rounded-full border-8 border-white/20 flex items-center justify-center">
                                    <div class="w-24 h-24 rounded-full border-4 border-white/30 flex items-center justify-center">
                                        <div class="w-16 h-16 rounded-full bg-gradient-to-r from-[#88cbc0] to-[#a8d8ea] flex items-center justify-center">
                                            <span class="text-white text-2xl">🎬</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="absolute top-6 left-6 w-8 h-8 rounded-lg bg-gradient-to-r from-[#88cbc0] to-[#a8d8ea]"></div>
                            <div class="absolute bottom-6 right-6 w-8 h-8 rounded-lg bg-gradient-to-r from-[#a8d8ea] to-[#88cbc0]"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="order-1 lg:order-2">
                <div class="inline-flex items-center px-4 py-2 rounded-full bg-gradient-to-r from-[#88cbc0]/10 to-[#a8d8ea]/10 text-[#88cbc0] font-semibold text-sm mb-6">
                    Made Behind the Scene
                </div>
                <h2 class="font-display text-3xl md:text-4xl font-bold text-gray-900 mb-6">
                    Films
                </h2>
                <p class="text-gray-600 text-lg mb-8 leading-relaxed">
                    A film is made behind the scene. What goes in the final cut doesn't do justice to what goes behind making it. It's a grind; after all, we have produced quite a few.
                </p>
                <p class="text-gray-600 mb-8 leading-relaxed">
                    Commercials, animation, corporate videos – name it and we have conceptualized, visualized and executed some gems over the years.
                </p>
                
                <div class="bg-white rounded-2xl p-6 mb-8 border border-gray-100">
                    <h4 class="font-display font-semibold text-gray-900 mb-4">Films & Animation Services</h4>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-3">
                        <?php 
                        $filmsServices = [
                            'Radio & TVC Script', 'Explanatory Film Concept', 'Social Media Films',
                            '2D & 3D Animation', 'Corporate Videos', 'Reels',
                            'Story Content', 'Commercial Production', 'Documentary Films'
                        ];
                        
                        foreach ($filmsServices as $service): 
                        ?>
                        <div class="flex items-center">
                            <div class="w-2 h-2 rounded-full bg-gradient-to-r from-[#88cbc0] to-[#a8d8ea] mr-3"></div>
                            <span class="text-gray-700"><?php echo $service; ?></span>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
                
                <a href="#contact" class="inline-flex items-center px-6 py-3 rounded-2xl bg-gradient-to-r from-[#88cbc0] to-[#a8d8ea] text-white font-semibold hover:shadow-xl transition-all duration-300">
                    Start Film Project
                    <svg class="w-5 h-5 ml-2" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M10.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L12.586 11H5a1 1 0 110-2h7.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                    </svg>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Services Process -->
<section class="py-16 md:py-24">
    <div class="container mx-auto px-6">
        <div class="text-center max-w-3xl mx-auto mb-16 fade-in">
            <h2 class="font-display text-3xl md:text-4xl font-bold text-gray-900 mb-4">
                Our Creative Process
            </h2>
            <p class="text-gray-600 text-lg">
                A structured approach that leaves room for creative magic
            </p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
            <?php 
            $processSteps = [
                [
                    'number' => '01',
                    'title' => 'Discovery',
                    'description' => 'Deep dive into your brand, audience, and objectives',
                    'color' => 'from-[#88cbc0] to-[#a8d8ea]'
                ],
                [
                    'number' => '02',
                    'title' => 'Concept',
                    'description' => 'Creative ideation and conceptual development',
                    'color' => 'from-[#a8d8ea] to-[#88cbc0]'
                ],
                [
                    'number' => '03',
                    'title' => 'Execution',
                    'description' => 'Precision implementation across all mediums',
                    'color' => 'from-[#88cbc0] to-teal-400'
                ],
                [
                    'number' => '04',
                    'title' => 'Delivery',
                    'description' => 'Final delivery and performance optimization',
                    'color' => 'from-teal-400 to-[#a8d8ea]'
                ]
            ];
            
            foreach ($processSteps as $step): 
            ?>
            <div class="fade-in text-center">
                <div class="w-20 h-20 rounded-2xl bg-gradient-to-r <?php echo $step['color']; ?> flex items-center justify-center mx-auto mb-6">
                    <span class="text-white text-2xl font-bold"><?php echo $step['number']; ?></span>
                </div>
                <h3 class="text-xl font-display font-semibold text-gray-900 mb-3">
                    <?php echo $step['title']; ?>
                </h3>
                <p class="text-gray-600 text-sm">
                    <?php echo $step['description']; ?>
                </p>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- CTA -->
<section class="py-16 md:py-24 hero-gradient">
    <div class="container mx-auto px-6">
        <div class="max-w-4xl mx-auto text-center fade-in">
            <h2 class="font-display text-3xl md:text-4xl font-bold text-gray-900 mb-6">
                Ready to bring your vision to life?
            </h2>
            <p class="text-gray-600 text-xl mb-8 max-w-2xl mx-auto">
                Let's collaborate on your next creative project across design, digital, or film.
            </p>
            <a href="#contact" class="inline-flex items-center px-8 py-4 rounded-2xl bg-gradient-to-r from-[#88cbc0] to-[#a8d8ea] text-white font-semibold text-lg hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-1">
                Start a Project
                <svg class="w-6 h-6 ml-3" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M10.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L12.586 11H5a1 1 0 110-2h7.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                </svg>
            </a>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>