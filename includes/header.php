<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hue Designs | <?php echo $pageTitle ?? 'Creative Studio'; ?></title>
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Archivo+Black&family=Bebas+Neue&family=Inter:wght@300;400;500;600&display=swap" rel="stylesheet">
    
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    
    <style>
        :root {
            --gray-bg: #f5f5f7;
            --mustard: #FFD166;
            --mustard-dark: #e6b952;
            --charcoal: #1a1a1a;
            --light-gray: #e0e0e0;
            --medium-gray: #8a8a8a;
        }
        
        * {
            font-family: 'Inter', sans-serif;
        }
        
        h1, h2, h3, h4, .font-display {
            font-family: 'Archivo Black', sans-serif;
            font-weight: 900;
            letter-spacing: -0.02em;
        }
        
        .font-display-alt {
            font-family: 'Bebas Neue', sans-serif;
            letter-spacing: 0.1em;
        }
        
        body {
            background-color: var(--gray-bg);
            color: var(--charcoal);
        }
        
        .card-playful {
            background: white;
            border-radius: 24px;
            border: 2px solid var(--charcoal);
            box-shadow: 8px 8px 0 var(--charcoal);
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }
        
        .card-playful:hover {
            transform: translate(-4px, -4px);
            box-shadow: 12px 12px 0 var(--charcoal);
        }
        
        .yellow-accent {
            background-color: var(--mustard);
        }
        
        .text-stroke {
            -webkit-text-stroke: 2px var(--charcoal);
            color: transparent;
        }
        
        .fade-in-playful {
            opacity: 0;
            transform: translateY(20px) rotate(-1deg);
            transition: all 0.6s cubic-bezier(0.4, 0, 0.2, 1);
        }
        
        .fade-in-playful.visible {
            opacity: 1;
            transform: translateY(0) rotate(0);
        }
        
        .bounce-on-hover {
            transition: transform 0.3s cubic-bezier(0.68, -0.55, 0.265, 1.55);
        }
        
        .bounce-on-hover:hover {
            transform: scale(1.05);
        }
        
        .yellow-highlight {
            position: relative;
            display: inline-block;
        }
        
        .yellow-highlight::after {
            content: '';
            position: absolute;
            left: -4px;
            right: -4px;
            bottom: 0;
            height: 8px;
            background-color: var(--mustard);
            z-index: -1;
            border-radius: 4px;
        }
        
        .image-hover {
            transition: transform 0.5s ease, filter 0.5s ease;
        }
        
        .image-hover:hover {
            transform: scale(1.05);
            filter: brightness(1.1);
        }
        
        /* Custom scroll behavior */
        html {
            scroll-behavior: smooth;
        }
        
        /* Navigation indicator animation */
        .nav-indicator {
            position: absolute;
            top: 0;
            left: 0;
            width: 0;
            height: 100%;
            background-color: var(--mustard);
            border-radius: 20px;
            z-index: -1;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }
        
        .nav-item {
            position: relative;
            z-index: 1;
            transition: color 0.3s ease;
        }
        
        .nav-item.active {
            background-color: var(--mustard);
            color: var(--charcoal);
        }
        
        .nav-container {
            background-color: var(--charcoal);
            border-radius: 28px;
            padding: 8px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body class="antialiased">
    <!-- Navigation -->
    <nav class="fixed top-6 left-1/2 transform -translate-x-1/2 z-50 w-[95%] md:w-auto">
        <div class="flex items-center gap-4">
            <!-- Logo Pill -->
            <div class="bg-white rounded-[28px] px-6 py-4 shadow-lg border-2 border-charcoal flex items-center gap-3">
                <div class="w-10 h-10 rounded-2xl yellow-accent flex items-center justify-center bounce-on-hover">
                    <span class="text-charcoal font-display text-lg">H</span>
                </div>
                <div>
                    <span class="font-display text-xl text-charcoal tracking-tight">hue designs</span>
                    <span class="block text-xs text-medium-gray tracking-wider">CREATIVE STUDIO</span>
                </div>
            </div>
            
            <!-- Menu Pill -->
            <div class="nav-container hidden md:block">
                <div class="relative px-4 py-2">
                    <!-- Menu Items -->
                    <div class="flex items-center space-x-1">
                        <a href="index.php" 
                           class="nav-item px-6 py-3 rounded-[20px] text-sm font-medium text-white hover:text-mustard transition-colors duration-300 relative <?php echo basename($_SERVER['PHP_SELF']) == 'index.php' ? 'active' : '' ?>"
                           data-index="0">
                            HOME
                        </a>
                        <a href="services.php" 
                           class="nav-item px-6 py-3 rounded-[20px] text-sm font-medium text-white hover:text-mustard transition-colors duration-300 relative <?php echo basename($_SERVER['PHP_SELF']) == 'services.php' ? 'active' : '' ?>"
                           data-index="1">
                            SERVICES
                        </a>
                        <a href="about.php" 
                           class="nav-item px-6 py-3 rounded-[20px] text-sm font-medium text-white hover:text-mustard transition-colors duration-300 relative <?php echo basename($_SERVER['PHP_SELF']) == 'about.php' ? 'active' : '' ?>"
                           data-index="2">
                            ABOUT
                        </a>
                        <a href="contact.php" 
                           class="nav-item px-6 py-3 rounded-[20px] text-sm font-medium text-white hover:text-mustard transition-colors duration-300 relative <?php echo basename($_SERVER['PHP_SELF']) == 'contact.php' ? 'active' : '' ?>"
                           data-index="3">
                            CONTACT
                        </a>
                        <a href="#cta" 
                           class="nav-item px-6 py-3 rounded-[20px] text-sm font-medium text-white hover:text-mustard transition-colors duration-300 relative"
                           data-index="4">
                            GET QUOTE
                        </a>
                    </div>
                </div>
            </div>
            
            <!-- Mobile Menu Button -->
            <button id="mobileMenuBtn" class="md:hidden p-3 rounded-[20px] yellow-accent">
                <svg class="w-6 h-6 text-charcoal" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                </svg>
            </button>
        </div>
        
        <!-- Mobile Menu -->
        <div id="mobileMenu" class="md:hidden mt-4">
            <div class="nav-container p-4">
                <div class="flex flex-col space-y-2">
                    <a href="index.php" class="nav-item px-6 py-3 rounded-[20px] text-sm font-medium text-white hover:text-mustard transition-colors <?php echo basename($_SERVER['PHP_SELF']) == 'index.php' ? 'active bg-mustard text-charcoal' : '' ?>">
                        HOME
                    </a>
                    <a href="services.php" class="nav-item px-6 py-3 rounded-[20px] text-sm font-medium text-white hover:text-mustard transition-colors <?php echo basename($_SERVER['PHP_SELF']) == 'services.php' ? 'active bg-mustard text-charcoal' : '' ?>">
                        SERVICES
                    </a>
                    <a href="about.php" class="nav-item px-6 py-3 rounded-[20px] text-sm font-medium text-white hover:text-mustard transition-colors <?php echo basename($_SERVER['PHP_SELF']) == 'about.php' ? 'active bg-mustard text-charcoal' : '' ?>">
                        ABOUT
                    </a>
                    <a href="contact.php" class="nav-item px-6 py-3 rounded-[20px] text-sm font-medium text-white hover:text-mustard transition-colors <?php echo basename($_SERVER['PHP_SELF']) == 'contact.php' ? 'active bg-mustard text-charcoal' : '' ?>">
                        CONTACT
                    </a>
                    <a href="#cta" class="nav-item px-6 py-3 rounded-[20px] text-sm font-medium text-white hover:text-mustard transition-colors">
                        GET QUOTE
                    </a>
                </div>
            </div>
        </div>
    </nav>
    
    <!-- Main Content -->
    <main class="pt-32">