<?php
$pageTitle = "Premium Creative Design Studio";
include 'includes/header.php';
?>

<!-- Hero Section -->
<section class="hero-gradient py-12 md:py-24">
    <div class="container mx-auto px-6">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <!-- Left Content -->
            <div class="fade-in">
                <h1 class="font-display text-4xl md:text-5xl lg:text-6xl font-bold text-gray-900 leading-tight mb-6">
                    Design that speaks<br>
                    <span class="bg-gradient-to-r from-[#88cbc0] to-[#a8d8ea] bg-clip-text text-transparent">
                        in every shade
                    </span>
                </h1>
                <p class="text-lg text-gray-600 mb-8 leading-relaxed">
                    Hue Design Studio crafts premium visual experiences through intentional design, 
                    precise execution, and creative innovation. We transform spaces and brands with 
                    signage, print, and digital design solutions.
                </p>
                <div class="flex flex-wrap gap-4">
                    <a href="#services" class="px-8 py-3 rounded-2xl bg-gradient-to-r from-[#88cbc0] to-[#a8d8ea] text-white font-semibold hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1">
                        View Services
                    </a>
                    <a href="about.php" class="px-8 py-3 rounded-2xl border-2 border-gray-300 text-gray-700 font-semibold hover:border-[#88cbc0] hover:text-[#88cbc0] transition-all duration-300">
                        Our Story →
                    </a>
                </div>
            </div>
            
            <!-- Right Image -->
            <div class="fade-in relative">
                <div class="relative rounded-3xl overflow-hidden shadow-2xl">
                    <div class="aspect-[4/5] bg-gradient-to-br from-gray-200 to-gray-300 flex items-center justify-center">
                        <!-- Abstract design placeholder -->
                        <div class="absolute inset-0 flex items-center justify-center">
                            <div class="w-64 h-64 rounded-full bg-gradient-to-r from-[#88cbc0]/20 to-[#a8d8ea]/20 blur-3xl"></div>
                        </div>
                        <div class="relative z-10 text-center p-8">
                            <div class="grid grid-cols-3 gap-4">
                                <div class="w-20 h-20 rounded-2xl bg-white/90 shadow-lg"></div>
                                <div class="w-20 h-20 rounded-2xl bg-[#88cbc0]/20 shadow-lg mt-8"></div>
                                <div class="w-20 h-20 rounded-2xl bg-white/90 shadow-lg"></div>
                                <div class="w-20 h-20 rounded-2xl bg-[#a8d8ea]/20 shadow-lg"></div>
                                <div class="w-20 h-20 rounded-2xl bg-white/90 shadow-lg"></div>
                                <div class="w-20 h-20 rounded-2xl bg-[#88cbc0]/20 shadow-lg mt-8"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Client Logos -->
<section class="py-12 bg-gray-50">
    <div class="container mx-auto px-6">
        <div class="text-center mb-8">
            <p class="text-gray-500 text-sm uppercase tracking-wider font-semibold">Trusted By</p>
        </div>
        <div class="grid grid-cols-2 md:grid-cols-5 gap-8 items-center">
            <?php 
            $clientNames = ['ArchiForm', 'NovaCreative', 'UrbanEdge', 'VergeStudio', 'BloomBrands'];
            foreach ($clientNames as $client): 
            ?>
            <div class="flex items-center justify-center opacity-60 hover:opacity-100 transition-opacity duration-300">
                <div class="text-center">
                    <div class="w-12 h-12 rounded-xl bg-gray-200 flex items-center justify-center mx-auto mb-2"></div>
                    <span class="text-gray-700 font-medium"><?php echo $client; ?></span>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- Stats Section -->
<section class="py-16 md:py-24">
    <div class="container mx-auto px-6">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <?php 
            $stats = [
                ['number' => '200+', 'label' => 'Projects Completed', 'description' => 'Across signage, print & digital'],
                ['number' => '150+', 'label' => 'Signage Installations', 'description' => 'Indoor & outdoor solutions'],
                ['number' => '100+', 'label' => 'Print Campaigns', 'description' => 'From concept to delivery']
            ];
            
            foreach ($stats as $index => $stat): 
            ?>
            <div class="fade-in card-hover bg-white rounded-3xl p-8 shadow-lg hover:shadow-2xl border border-gray-100">
                <div class="text-5xl font-display font-bold bg-gradient-to-r from-[#88cbc0] to-[#a8d8ea] bg-clip-text text-transparent mb-4">
                    <?php echo $stat['number']; ?>
                </div>
                <h3 class="text-xl font-display font-semibold text-gray-900 mb-2">
                    <?php echo $stat['label']; ?>
                </h3>
                <p class="text-gray-600">
                    <?php echo $stat['description']; ?>
                </p>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- Services Preview -->
<section id="services" class="py-16 md:py-24 bg-gray-50">
    <div class="container mx-auto px-6">
        <div class="text-center max-w-3xl mx-auto mb-16 fade-in">
            <h2 class="font-display text-3xl md:text-4xl font-bold text-gray-900 mb-4">
                Our Design Services
            </h2>
            <p class="text-gray-600 text-lg">
                Comprehensive creative solutions tailored to elevate your brand presence
            </p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <?php 
            $services = [
                [
                    'title' => 'Signage Packages',
                    'description' => 'Indoor and outdoor signage solutions that make lasting impressions.',
                    'features' => ['LED Boards', 'Vinyl Signage', 'Acrylic Displays', 'Environmental Graphics'],
                    'color' => 'from-[#88cbc0] to-[#a8d8ea]'
                ],
                [
                    'title' => 'Printing Packages',
                    'description' => 'Premium print materials that communicate quality and attention to detail.',
                    'features' => ['Business Cards', 'Banners & Posters', 'Brochures', 'Large Format'],
                    'color' => 'from-[#a8d8ea] to-[#88cbc0]'
                ],
                [
                    'title' => 'Design Packages',
                    'description' => 'Complete creative direction from branding to digital experiences.',
                    'features' => ['Brand Identity', 'Social Media', 'UI/UX Design', 'Marketing Collateral'],
                    'color' => 'from-[#88cbc0] to-teal-400'
                ]
            ];
            
            foreach ($services as $service): 
            ?>
            <a href="services.php#<?php echo strtolower(str_replace(' ', '', $service['title'])); ?>" class="fade-in card-hover block bg-white rounded-3xl p-8 shadow-lg hover:shadow-2xl border border-gray-100 group">
                <div class="mb-6">
                    <div class="w-16 h-16 rounded-2xl bg-gradient-to-r <?php echo $service['color']; ?> flex items-center justify-center mb-6">
                        <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M11.3 1.046A1 1 0 0112 2v5h4a1 1 0 01.82 1.573l-7 10A1 1 0 018 18v-5H4a1 1 0 01-.82-1.573l7-10a1 1 0 011.12-.38z" clip-rule="evenodd"></path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-display font-semibold text-gray-900 mb-3 group-hover:text-[#88cbc0] transition-colors">
                        <?php echo $service['title']; ?>
                    </h3>
                    <p class="text-gray-600 mb-6">
                        <?php echo $service['description']; ?>
                    </p>
                    <ul class="space-y-2">
                        <?php foreach ($service['features'] as $feature): ?>
                        <li class="flex items-center text-gray-700">
                            <svg class="w-4 h-4 text-[#88cbc0] mr-2" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                            </svg>
                            <?php echo $feature; ?>
                        </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
                <div class="pt-6 border-t border-gray-100 flex items-center text-[#88cbc0] font-semibold group-hover:translate-x-2 transition-transform">
                    Learn more
                    <svg class="w-5 h-5 ml-2" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                    </svg>
                </div>
            </a>
            <?php endforeach; ?>
        </div>
        
        <div class="text-center mt-12 fade-in">
            <a href="services.php" class="inline-flex items-center px-8 py-3 rounded-2xl border-2 border-gray-300 text-gray-700 font-semibold hover:border-[#88cbc0] hover:text-[#88cbc0] transition-all duration-300">
                View All Services
                <svg class="w-5 h-5 ml-2" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M10.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L12.586 11H5a1 1 0 110-2h7.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                </svg>
            </a>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>