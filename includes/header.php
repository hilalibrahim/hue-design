<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hue Design Studio | <?php echo $pageTitle ?? 'Premium Creative Design'; ?></title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Space+Grotesk:wght@400;500;600;700&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        :root {
            --hue-teal: #88cbc0;
            --hue-blue: #a8d8ea;
            --hue-dark: #1a1a1a;
            --hue-light: #f8f9fa;
        }
        
        * {
            font-family: 'Inter', sans-serif;
        }
        
        h1, h2, h3, h4, .font-display {
            font-family: 'Space Grotesk', sans-serif;
        }
        
        .hero-gradient {
            background: linear-gradient(135deg, #f8f9fa 0%, #e8f4f8 50%, #d8eff6 100%);
        }
        
        .card-hover {
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }
        
        .card-hover:hover {
            transform: translateY(-8px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.08);
        }
        
        .nav-active {
            position: relative;
        }
        
        .nav-active::after {
            content: '';
            position: absolute;
            bottom: -4px;
            left: 0;
            right: 0;
            height: 2px;
            background: var(--hue-teal);
            border-radius: 2px;
        }
        
        .fade-in {
            opacity: 0;
            transform: translateY(20px);
            transition: opacity 0.6s ease, transform 0.6s ease;
        }
        
        .fade-in.visible {
            opacity: 1;
            transform: translateY(0);
        }
        
        .image-cover {
            object-fit: cover;
            object-position: center;
        }
    </style>
</head>
<body class="bg-white text-gray-800 antialiased">
    <!-- Navigation -->
    <nav class="fixed top-0 left-0 right-0 z-50 bg-white/90 backdrop-blur-sm border-b border-gray-100">
        <div class="container mx-auto px-6 py-4">
            <div class="flex items-center justify-between">
                <!-- Logo -->
                <a href="index.php" class="flex items-center space-x-2">
                    <div class="w-10 h-10 rounded-2xl bg-gradient-to-br from-[#88cbc0] to-[#a8d8ea] flex items-center justify-center">
                        <span class="text-white font-bold text-xl">H</span>
                    </div>
                    <span class="font-display font-bold text-xl text-gray-900">Hue Design</span>
                </a>
                
                <!-- Desktop Navigation -->
                <div class="hidden md:flex items-center space-x-1 bg-gray-100/80 rounded-2xl px-4 py-2">
                    <a href="index.php" class="px-6 py-2 rounded-xl font-medium text-gray-700 hover:bg-white hover:text-gray-900 transition-all duration-300 <?php echo basename($_SERVER['PHP_SELF']) == 'index.php' ? 'bg-white text-gray-900 shadow-sm' : '' ?>">
                        Home
                    </a>
                    <a href="services.php" class="px-6 py-2 rounded-xl font-medium text-gray-700 hover:bg-white hover:text-gray-900 transition-all duration-300 <?php echo basename($_SERVER['PHP_SELF']) == 'services.php' ? 'bg-white text-gray-900 shadow-sm' : '' ?>">
                        Services
                    </a>
                    <a href="about.php" class="px-6 py-2 rounded-xl font-medium text-gray-700 hover:bg-white hover:text-gray-900 transition-all duration-300 <?php echo basename($_SERVER['PHP_SELF']) == 'about.php' ? 'bg-white text-gray-900 shadow-sm' : '' ?>">
                        About
                    </a>
                    <a href="#contact" class="px-6 py-2 rounded-xl font-medium bg-gradient-to-r from-[#88cbc0] to-[#a8d8ea] text-white hover:shadow-lg transition-all duration-300">
                        Get Quote
                    </a>
                </div>
                
                <!-- Mobile Menu Button -->
                <button id="mobileMenuBtn" class="md:hidden p-2 rounded-xl bg-gray-100">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
            </div>
            
            <!-- Mobile Menu -->
            <div id="mobileMenu" class="hidden md:hidden mt-4 pb-4">
                <div class="flex flex-col space-y-2">
                    <a href="index.php" class="px-4 py-3 rounded-xl font-medium text-gray-700 hover:bg-gray-100 transition-all duration-300 <?php echo basename($_SERVER['PHP_SELF']) == 'index.php' ? 'bg-gray-100 text-gray-900' : '' ?>">
                        Home
                    </a>
                    <a href="services.php" class="px-4 py-3 rounded-xl font-medium text-gray-700 hover:bg-gray-100 transition-all duration-300 <?php echo basename($_SERVER['PHP_SELF']) == 'services.php' ? 'bg-gray-100 text-gray-900' : '' ?>">
                        Services
                    </a>
                    <a href="about.php" class="px-4 py-3 rounded-xl font-medium text-gray-700 hover:bg-gray-100 transition-all duration-300 <?php echo basename($_SERVER['PHP_SELF']) == 'about.php' ? 'bg-gray-100 text-gray-900' : '' ?>">
                        About
                    </a>
                    <a href="#contact" class="px-4 py-3 rounded-xl font-medium bg-gradient-to-r from-[#88cbc0] to-[#a8d8ea] text-white text-center">
                        Get Quote
                    </a>
                </div>
            </div>
        </div>
    </nav>
    
    <!-- Main Content -->
    <main class="pt-20">