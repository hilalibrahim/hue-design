<?php
$pageTitle = "Our Story";
include 'includes/header.php';
?>

<!-- Hero -->
<section class="hero-gradient py-12 md:py-24">
    <div class="container mx-auto px-6">
        <div class="max-w-3xl mx-auto text-center fade-in">
            <h1 class="font-display text-4xl md:text-5xl lg:text-6xl font-bold text-gray-900 leading-tight mb-6">
                Our Design
                <span class="bg-gradient-to-r from-[#88cbc0] to-[#a8d8ea] bg-clip-text text-transparent">
                    Philosophy
                </span>
            </h1>
            <p class="text-xl text-gray-600 leading-relaxed">
                Where creativity meets precision, and every hue tells a story.
            </p>
        </div>
    </div>
</section>

<!-- Story -->
<section class="py-16 md:py-24">
    <div class="container mx-auto px-6">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center fade-in">
            <div>
                <div class="inline-flex items-center px-4 py-2 rounded-full bg-gradient-to-r from-[#88cbc0]/10 to-[#a8d8ea]/10 text-[#88cbc0] font-semibold text-sm mb-6">
                    Our Journey
                </div>
                <h2 class="font-display text-3xl md:text-4xl font-bold text-gray-900 mb-6">
                    Crafting Visual Narratives
                </h2>
                <div class="space-y-6 text-gray-600 text-lg leading-relaxed">
                    <p>
                        Founded on the principle that great design communicates before a single word is spoken, 
                        Hue Design Studio began as a collective of creatives passionate about the power of 
                        visual storytelling.
                    </p>
                    <p>
                        We believe that every color, every line, and every material choice contributes to a 
                        larger narrative. Our approach combines artistic intuition with technical precision 
                        to create designs that not only look beautiful but function flawlessly.
                    </p>
                    <p>
                        Over the years, we've evolved from a small design collective to a full-service studio, 
                        but our core philosophy remains unchanged: design should be intentional, meaningful, 
                        and memorable.
                    </p>
                </div>
            </div>
            <div>
                <div class="relative rounded-3xl overflow-hidden shadow-2xl">
                    <div class="aspect-[4/5] bg-gradient-to-br from-gray-100 to-gray-200 flex items-center justify-center">
                        <!-- Studio visualization -->
                        <div class="relative w-full h-full">
                            <div class="absolute inset-0 flex items-center justify-center">
                                <div class="grid grid-cols-3 gap-6">
                                    <div class="w-20 h-20 rounded-2xl bg-gradient-to-r from-[#88cbc0] to-[#a8d8ea] opacity-20"></div>
                                    <div class="w-20 h-20 rounded-2xl bg-gradient-to-r from-[#a8d8ea] to-[#88cbc0] opacity-10 mt-8"></div>
                                    <div class="w-20 h-20 rounded-2xl bg-gradient-to-r from-[#88cbc0] to-teal-400 opacity-15"></div>
                                    <div class="w-20 h-20 rounded-2xl bg-gradient-to-r from-teal-400 to-[#a8d8ea] opacity-10 mt-8"></div>
                                    <div class="w-20 h-20 rounded-2xl bg-gradient-to-r from-[#a8d8ea] to-[#88cbc0] opacity-20"></div>
                                    <div class="w-20 h-20 rounded-2xl bg-gradient-to-r from-[#88cbc0] to-[#a8d8ea] opacity-10 mt-8"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Values -->
<section class="py-16 md:py-24 bg-gray-50">
    <div class="container mx-auto px-6">
        <div class="text-center max-w-3xl mx-auto mb-16 fade-in">
            <h2 class="font-display text-3xl md:text-4xl font-bold text-gray-900 mb-4">
                Our Core Values
            </h2>
            <p class="text-gray-600 text-lg">
                The principles that guide every project we undertake
            </p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <?php 
            $values = [
                [
                    'title' => 'Intentional Design',
                    'description' => 'Every element serves a purpose, contributing to a cohesive narrative that aligns with your brand objectives.',
                    'icon' => 'M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z'
                ],
                [
                    'title' => 'Precision Execution',
                    'description' => 'From concept to installation, we maintain rigorous attention to detail ensuring flawless results.',
                    'icon' => 'M13 10V3L4 14h7v7l9-11h-7z'
                ],
                [
                    'title' => 'Creative Innovation',
                    'description' => 'We push boundaries while maintaining aesthetic harmony, delivering solutions that stand out.',
                    'icon' => 'M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01'
                ]
            ];
            
            foreach ($values as $value): 
            ?>
            <div class="fade-in card-hover bg-white rounded-3xl p-8 shadow-lg hover:shadow-2xl border border-gray-100">
                <div class="w-14 h-14 rounded-2xl bg-gradient-to-r from-[#88cbc0] to-[#a8d8ea] flex items-center justify-center mb-6">
                    <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="<?php echo $value['icon']; ?>"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-display font-semibold text-gray-900 mb-4">
                    <?php echo $value['title']; ?>
                </h3>
                <p class="text-gray-600">
                    <?php echo $value['description']; ?>
                </p>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- Approach -->
<section class="py-16 md:py-24">
    <div class="container mx-auto px-6">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center fade-in">
            <div class="order-2 lg:order-1">
                <div class="relative rounded-3xl overflow-hidden shadow-2xl">
                    <div class="aspect-[4/3] bg-gradient-to-br from-gray-100 to-gray-200 flex items-center justify-center">
                        <!-- Process visualization -->
                        <div class="relative w-full h-full p-8">
                            <div class="absolute top-8 left-8 w-32 h-8 bg-gradient-to-r from-[#88cbc0] to-[#a8d8ea] rounded-lg"></div>
                            <div class="absolute top-24 left-12 w-24 h-8 bg-gradient-to-r from-[#a8d8ea] to-[#88cbc0] rounded-lg"></div>
                            <div class="absolute bottom-24 right-12 w-28 h-8 bg-gradient-to-r from-[#88cbc0] to-teal-400 rounded-lg"></div>
                            <div class="absolute bottom-8 right-8 w-20 h-8 bg-gradient-to-r from-teal-400 to-[#a8d8ea] rounded-lg"></div>
                            <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2">
                                <div class="w-32 h-32 rounded-full border-8 border-white bg-gradient-to-r from-[#88cbc0] to-[#a8d8ea] shadow-xl"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="order-1 lg:order-2">
                <div class="inline-flex items-center px-4 py-2 rounded-full bg-gradient-to-r from-[#88cbc0]/10 to-[#a8d8ea]/10 text-[#88cbc0] font-semibold text-sm mb-6">
                    Our Process
                </div>
                <h2 class="font-display text-3xl md:text-4xl font-bold text-gray-900 mb-6">
                    Collaborative & Iterative
                </h2>
                <div class="space-y-8">
                    <div class="flex items-start">
                        <div class="w-12 h-12 rounded-xl bg-gradient-to-r from-[#88cbc0] to-[#a8d8ea] flex items-center justify-center mr-4 flex-shrink-0">
                            <span class="text-white font-bold">1</span>
                        </div>
                        <div>
                            <h4 class="font-display text-xl font-semibold text-gray-900 mb-2">Discovery</h4>
                            <p class="text-gray-600">We dive deep into your brand, audience, and objectives to understand the complete picture.</p>
                        </div>
                    </div>
                    <div class="flex items-start">
                        <div class="w-12 h-12 rounded-xl bg-gradient-to-r from-[#88cbc0] to-[#a8d8ea] flex items-center justify-center mr-4 flex-shrink-0">
                            <span class="text-white font-bold">2</span>
                        </div>
                        <div>
                            <h4 class="font-display text-xl font-semibold text-gray-900 mb-2">Concept Development</h4>
                            <p class="text-gray-600">Initial concepts and mood boards that capture the essence of your vision.</p>
                        </div>
                    </div>
                    <div class="flex items-start">
                        <div class="w-12 h-12 rounded-xl bg-gradient-to-r from-[#88cbc0] to-[#a8d8ea] flex items-center justify-center mr-4 flex-shrink-0">
                            <span class="text-white font-bold">3</span>
                        </div>
                        <div>
                            <h4 class="font-display text-xl font-semibold text-gray-900 mb-2">Execution</h4>
                            <p class="text-gray-600">Precise production and implementation with quality control at every stage.</p>
                        </div>
                    </div>
                    <div class="flex items-start">
                        <div class="w-12 h-12 rounded-xl bg-gradient-to-r from-[#88cbc0] to-[#a8d8ea] flex items-center justify-center mr-4 flex-shrink-0">
                            <span class="text-white font-bold">4</span>
                        </div>
                        <div>
                            <h4 class="font-display text-xl font-semibold text-gray-900 mb-2">Delivery & Support</h4>
                            <p class="text-gray-600">Final delivery and ongoing support to ensure your complete satisfaction.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Team CTA -->
<section class="py-16 md:py-24 hero-gradient">
    <div class="container mx-auto px-6">
        <div class="max-w-4xl mx-auto text-center fade-in">
            <h2 class="font-display text-3xl md:text-4xl font-bold text-gray-900 mb-6">
                Ready to create something remarkable?
            </h2>
            <p class="text-gray-600 text-xl mb-8 max-w-2xl mx-auto">
                Let's collaborate to bring your vision to life with precision, creativity, and attention to detail.
            </p>
            <div class="flex flex-wrap gap-4 justify-center">
                <a href="services.php" class="inline-flex items-center px-8 py-4 rounded-2xl bg-gradient-to-r from-[#88cbc0] to-[#a8d8ea] text-white font-semibold text-lg hover:shadow-2xl transition-all duration-300">
                    Explore Our Services
                    <svg class="w-6 h-6 ml-3" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M10.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L12.586 11H5a1 1 0 110-2h7.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                    </svg>
                </a>
                <a href="#contact" class="inline-flex items-center px-8 py-4 rounded-2xl border-2 border-gray-300 text-gray-700 font-semibold text-lg hover:border-[#88cbc0] hover:text-[#88cbc0] transition-all duration-300">
                    Get in Touch
                </a>
            </div>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>