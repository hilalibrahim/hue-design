<?php
$pageTitle = "Contact";
include 'includes/header.php';
?>

<section class="py-20 md:py-32">
    <div class="container mx-auto px-6">
        <div class="max-w-3xl mx-auto">
            <div class="text-center mb-16 fade-in">
                <p class="text-stone text-sm tracking-wider mb-4">GET IN TOUCH</p>
                <h1 class="font-serif text-4xl md:text-5xl text-charcoal mb-6">
                    Start Your Project
                </h1>
                <p class="text-stone leading-relaxed">
                    Let's discuss how our editorial approach can elevate your corporate brand.
                </p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12">
                <div class="fade-in">
                    <div class="space-y-8">
                        <div>
                            <h3 class="font-serif text-charcoal text-lg mb-3">Contact Information</h3>
                            <ul class="space-y-3">
                                <li class="flex items-start">
                                    <svg class="w-5 h-5 text-stone mr-3 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                    </svg>
                                    <span class="text-stone">consult@huedesign.studio</span>
                                </li>
                                <li class="flex items-start">
                                    <svg class="w-5 h-5 text-stone mr-3 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                                    </svg>
                                    <span class="text-stone">+1 (555) 234-5678</span>
                                </li>
                                <li class="flex items-start">
                                    <svg class="w-5 h-5 text-stone mr-3 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                    </svg>
                                    <span class="text-stone">200 Corporate Avenue<br>Suite 1500<br>New York, NY 10001</span>
                                </li>
                            </ul>
                        </div>
                        
                        <div>
                            <h3 class="font-serif text-charcoal text-lg mb-3">Business Hours</h3>
                            <ul class="space-y-2 text-stone">
                                <li class="flex justify-between">
                                    <span>Monday - Thursday</span>
                                    <span>9:00 AM - 6:00 PM</span>
                                </li>
                                <li class="flex justify-between">
                                    <span>Friday</span>
                                    <span>9:00 AM - 5:00 PM</span>
                                </li>
                                <li class="flex justify-between">
                                    <span>Weekend</span>
                                    <span>By appointment</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                
                <div class="fade-in">
                    <form class="space-y-6">
                        <div>
                            <label class="block text-stone text-sm mb-2 tracking-wider">NAME</label>
                            <input type="text" class="w-full px-4 py-3 border border-divider bg-white text-charcoal focus:outline-none focus:border-charcoal/30 transition-colors" placeholder="Full Name">
                        </div>
                        <div>
                            <label class="block text-stone text-sm mb-2 tracking-wider">EMAIL</label>
                            <input type="email" class="w-full px-4 py-3 border border-divider bg-white text-charcoal focus:outline-none focus:border-charcoal/30 transition-colors" placeholder="name@company.com">
                        </div>
                        <div>
                            <label class="block text-stone text-sm mb-2 tracking-wider">COMPANY</label>
                            <input type="text" class="w-full px-4 py-3 border border-divider bg-white text-charcoal focus:outline-none focus:border-charcoal/30 transition-colors" placeholder="Company Name">
                        </div>
                        <div>
                            <label class="block text-stone text-sm mb-2 tracking-wider">MESSAGE</label>
                            <textarea rows="5" class="w-full px-4 py-3 border border-divider bg-white text-charcoal focus:outline-none focus:border-charcoal/30 transition-colors" placeholder="Tell us about your project..."></textarea>
                        </div>
                        <button type="submit" class="px-8 py-3 bg-charcoal text-white hover:bg-charcoal/90 transition-colors duration-300 w-full text-sm tracking-wider">
                            SEND MESSAGE
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>