<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Projects | Anas Zakia Ardhan</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" />
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
    <script>
        tailwind.config = {
            darkMode: 'class',
            theme: {
                extend: {
                    animation: {
                        'float': 'float 6s ease-in-out infinite',
                        'fade-in': 'fadeIn 1s ease-in',
                        'slide-up': 'slideUp 0.5s ease-out',
                        'gradient': 'gradient 8s linear infinite',
                        'blob': 'blob 7s infinite',
                        'glow': 'glow 2s ease-in-out infinite alternate',
                    },
                    keyframes: {
                        float: {
                            '0%, 100%': { transform: 'translateY(0px) rotate(0deg)' },
                            '33%': { transform: 'translateY(-20px) rotate(5deg)' },
                            '66%': { transform: 'translateY(10px) rotate(-5deg)' },
                        },
                        fadeIn: {
                            '0%': { opacity: '0' },
                            '100%': { opacity: '1' },
                        },
                        slideUp: {
                            '0%': { 
                                opacity: '0',
                                transform: 'translateY(30px)'
                            },
                            '100%': { 
                                opacity: '1',
                                transform: 'translateY(0)'
                            },
                        },
                        gradient: {
                            '0%, 100%': { backgroundPosition: '0% 50%' },
                            '50%': { backgroundPosition: '100% 50%' },
                        },
                        blob: {
                            '0%, 100%': { transform: 'translate(0, 0) scale(1)' },
                            '33%': { transform: 'translate(30px, -50px) scale(1.1)' },
                            '66%': { transform: 'translate(-20px, 20px) scale(0.9)' },
                        },
                        glow: {
                            '0%': { boxShadow: '0 0 20px rgba(59, 130, 246, 0.5)' },
                            '100%': { boxShadow: '0 0 30px rgba(139, 92, 246, 0.8)' },
                        }
                    },
                    backgroundSize: {
                        '300%': '300% 300%',
                    }
                }
            }
        }
    </script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap');
        
        body {
            font-family: 'Inter', sans-serif;
            transition: background-color 0.3s, color 0.3s;
        }
        
        .gradient-text {
            background-clip: text;
            -webkit-background-clip: text;
            color: transparent;
            background-image: linear-gradient(135deg, #667eea 0%, #764ba2 25%, #f093fb 50%, #4facfe 75%, #00f2fe 100%);
            background-size: 300% 300%;
            animation: gradient 4s ease infinite;
        }
        
        .gradient-bg {
            background: linear-gradient(-45deg, #667eea, #764ba2, #f093fb, #4facfe);
            background-size: 400% 400%;
            animation: gradient 15s ease infinite;
        }
        
        .project-card {
            position: relative;
            overflow: hidden;
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        }
        
        .project-card::after {
            content: '';
            position: absolute;
            inset: 0;
            background: linear-gradient(135deg, rgba(59, 130, 246, 0.1), rgba(139, 92, 246, 0.1));
            opacity: 0;
            transition: opacity 0.4s;
            pointer-events: none;
            z-index: 1;
        }
        
        .project-card:hover::after {
            opacity: 1;
        }
        
        .project-card:hover {
            transform: translateY(-15px);
            box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.4);
        }
        
        .project-card:hover .project-image {
            transform: scale(1.1);
        }
        
        .project-image {
            transition: transform 0.6s cubic-bezier(0.4, 0, 0.2, 1);
        }
        
        .project-overlay {
            z-index: 10;
            pointer-events: none;
        }
        
        .project-overlay.active {
            pointer-events: auto;
        }
        
        .project-overlay a {
            pointer-events: auto;
        }
        
        .nav-blur {
            background: rgba(255, 255, 255, 0.8);
            backdrop-filter: blur(20px) saturate(180%);
            -webkit-backdrop-filter: blur(20px) saturate(180%);
        }
        
        .dark .nav-blur {
            background: rgba(17, 24, 39, 0.8);
        }
        
        /* Custom scrollbar */
        ::-webkit-scrollbar {
            width: 10px;
        }
        
        ::-webkit-scrollbar-track {
            background: #f1f1f1;
        }
        
        .dark ::-webkit-scrollbar-track {
            background: #1e293b;
        }
        
        ::-webkit-scrollbar-thumb {
            background: linear-gradient(135deg, #667eea, #764ba2);
            border-radius: 10px;
        }
        
        ::-webkit-scrollbar-thumb:hover {
            background: linear-gradient(135deg, #764ba2, #667eea);
        }
        
        .blob {
            border-radius: 30% 70% 70% 30% / 30% 30% 70% 70%;
            animation: blob 7s infinite;
        }
    </style>
</head>
<body class="bg-gradient-to-br from-gray-50 via-blue-50 to-purple-50 text-gray-800 dark:from-gray-900 dark:via-gray-900 dark:to-slate-900 dark:text-gray-100 overflow-x-hidden">
    <!-- Animated Background Blobs -->
    <div class="fixed inset-0 overflow-hidden pointer-events-none z-0">
        <div class="absolute top-20 -left-20 w-96 h-96 bg-purple-300 dark:bg-purple-900 rounded-full mix-blend-multiply dark:mix-blend-soft-light filter blur-3xl opacity-30 animate-blob"></div>
        <div class="absolute top-40 -right-20 w-96 h-96 bg-blue-300 dark:bg-blue-900 rounded-full mix-blend-multiply dark:mix-blend-soft-light filter blur-3xl opacity-30 animate-blob animation-delay-2000"></div>
        <div class="absolute -bottom-20 left-1/2 w-96 h-96 bg-pink-300 dark:bg-pink-900 rounded-full mix-blend-multiply dark:mix-blend-soft-light filter blur-3xl opacity-30 animate-blob animation-delay-4000"></div>
    </div>

    <!-- Navbar -->
    <nav class="fixed w-full nav-blur z-50 shadow-lg border-b border-white/20 dark:border-gray-700/50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-20">
                <div class="flex items-center">
                    <a href="/" class="flex items-center space-x-3">
                        <div class="w-10 h-10 rounded-lg bg-gradient-to-br from-blue-500 to-purple-600 flex items-center justify-center shadow-lg">
                            <span class="text-white font-bold text-xl">A</span>
                        </div>
                        <span class="text-2xl font-bold gradient-text">Anas Portfolio</span>
                    </a>
                </div>
                <div class="hidden md:flex items-center space-x-1">
                    <a href="/" class="px-4 py-2 rounded-lg text-gray-700 dark:text-gray-300 hover:bg-white/50 dark:hover:bg-gray-700/50 transition-all duration-300 font-medium">Home</a>
                    <a href="/#skills" class="px-4 py-2 rounded-lg text-gray-700 dark:text-gray-300 hover:bg-white/50 dark:hover:bg-gray-700/50 transition-all duration-300 font-medium">Skills</a>
                    <a href="/#projects" class="px-4 py-2 rounded-lg text-gray-700 dark:text-gray-300 hover:bg-white/50 dark:hover:bg-gray-700/50 transition-all duration-300 font-medium">Projects</a>
                    <a href="/#contact" class="px-4 py-2 rounded-lg text-gray-700 dark:text-gray-300 hover:bg-white/50 dark:hover:bg-gray-700/50 transition-all duration-300 font-medium">Contact</a>
                    <button id="theme-toggle" class="ml-4 p-2.5 rounded-lg bg-gradient-to-r from-blue-500 to-purple-600 text-white hover:shadow-lg transition-all duration-300">
                        <i class="fas fa-moon dark:hidden"></i>
                        <i class="fas fa-sun hidden dark:block"></i>
                    </button>
                </div>
                <div class="md:hidden flex items-center">
                    <button id="mobile-menu-button" class="p-2 rounded-lg focus:outline-none text-gray-700 dark:text-gray-300">
                        <i class="fas fa-bars text-xl"></i>
                    </button>
                </div>
            </div>
        </div>
        
        <!-- Mobile menu -->
        <div id="mobile-menu" class="hidden md:hidden bg-white/95 dark:bg-gray-800/95 backdrop-blur-lg pb-4 px-4 shadow-2xl">
            <div class="flex flex-col space-y-2">
                <a href="/" class="px-4 py-3 rounded-lg text-gray-700 dark:text-gray-300 hover:bg-gradient-to-r hover:from-blue-500 hover:to-purple-600 hover:text-white transition-all duration-300">Home</a>
                <a href="/#skills" class="px-4 py-3 rounded-lg text-gray-700 dark:text-gray-300 hover:bg-gradient-to-r hover:from-blue-500 hover:to-purple-600 hover:text-white transition-all duration-300">Skills</a>
                <a href="/#projects" class="px-4 py-3 rounded-lg text-gray-700 dark:text-gray-300 hover:bg-gradient-to-r hover:from-blue-500 hover:to-purple-600 hover:text-white transition-all duration-300">Projects</a>
                <a href="/#contact" class="px-4 py-3 rounded-lg text-gray-700 dark:text-gray-300 hover:bg-gradient-to-r hover:from-blue-500 hover:to-purple-600 hover:text-white transition-all duration-300">Contact</a>
                <button id="theme-toggle-mobile" class="px-4 py-3 rounded-lg text-left text-gray-700 dark:text-gray-300 hover:bg-gradient-to-r hover:from-blue-500 hover:to-purple-600 hover:text-white transition-all duration-300 flex items-center">
                    <i class="fas fa-moon dark:hidden mr-2"></i>
                    <i class="fas fa-sun hidden dark:block mr-2"></i>
                    Toggle Theme
                </button>
            </div>
        </div>
    </nav>

    <!-- All Projects Section -->
    <section class="relative pt-32 pb-24 px-4 sm:px-6 lg:px-8 max-w-7xl mx-auto z-10">
        <!-- Header -->
        <div class="text-center mb-16" data-aos="fade-up">
            <a href="/" class="inline-flex items-center space-x-2 text-gray-600 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-400 transition-colors mb-6">
                <i class="fas fa-arrow-left"></i>
                <span>Back to Home</span>
            </a>
            <span class="inline-block px-4 py-2 bg-gradient-to-r from-blue-500 to-purple-600 text-white text-sm font-semibold rounded-full shadow-lg mb-4">
                💼 All Projects
            </span>
            <h1 class="text-4xl md:text-6xl font-black mb-6">
                My <span class="gradient-text">Complete Portfolio</span>
            </h1>
            <p class="text-lg md:text-xl text-gray-600 dark:text-gray-400 max-w-3xl mx-auto">
                Explore all {{ $projects->count() }} projects I've worked on, showcasing my skills and expertise across different technologies
            </p>
        </div>

        <!-- Projects Grid -->
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach($projects as $index => $project)
            <div class="project-card group bg-white dark:bg-gray-800 rounded-2xl overflow-hidden shadow-2xl border border-gray-200 dark:border-gray-700" data-aos="fade-up" data-aos-delay="{{ 100 + ($index * 50) }}">
                <div class="relative overflow-hidden h-56">
                    <img src="{{ asset('storage/' . $project->image) }}" 
                        alt="{{ $project->nama }}" 
                        class="project-image object-cover w-full h-full">
                    <div class="project-overlay absolute inset-0 bg-gradient-to-t from-black/80 via-black/40 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end p-6">
                        <div class="flex gap-3 relative z-20">
                            @if($project->link_demo)
                            <a href="{{ $project->link_demo }}" target="_blank" rel="noopener noreferrer" class="px-4 py-2 bg-white text-gray-900 rounded-lg font-semibold text-sm hover:bg-blue-500 hover:text-white transition-all duration-300 flex items-center space-x-2">
                                <i class="fas fa-external-link-alt"></i>
                                <span>Demo</span>
                            </a>
                            @endif
                            @if($project->link_sc)
                            <a href="{{ $project->link_sc }}" target="_blank" rel="noopener noreferrer" class="px-4 py-2 bg-gray-900 text-white rounded-lg font-semibold text-sm hover:bg-purple-600 transition-all duration-300 flex items-center space-x-2">
                                <i class="fab fa-github"></i>
                                <span>Code</span>
                            </a>
                            @endif
                        </div>
                    </div>
                    <!-- Status Badge -->
                    <div class="absolute top-4 right-4">
                        <span class="px-3 py-1 bg-green-500 text-white text-xs font-bold rounded-full shadow-lg flex items-center space-x-1">
                            <span class="w-2 h-2 bg-white rounded-full animate-pulse"></span>
                            <span>Live</span>
                        </span>
                    </div>
                </div>
                <div class="p-6">
                    <div class="flex items-center justify-between mb-3">
                        <h3 class="text-xl font-bold text-gray-800 dark:text-gray-100 group-hover:text-transparent group-hover:bg-clip-text group-hover:bg-gradient-to-r group-hover:from-blue-600 group-hover:to-purple-600 transition-all duration-300">
                            {{ $project->nama }}
                        </h3>
                        <div class="flex items-center text-xs text-gray-500 dark:text-gray-400">
                            <i class="far fa-calendar-alt mr-1"></i>
                            <span>{{ \Carbon\Carbon::parse($project->created_at)->format('M Y') }}</span>
                        </div>
                    </div>
                    <p class="text-gray-600 dark:text-gray-300 mb-4 text-sm leading-relaxed line-clamp-3">
                        {{ $project->deskripsi }}
                    </p>
                    <div class="flex flex-wrap gap-2 mb-4">
                        @foreach($project->teknologi as $tech)
                        <span class="px-3 py-1 bg-gradient-to-r from-blue-50 to-purple-50 dark:from-blue-900/30 dark:to-purple-900/30 border border-blue-200 dark:border-blue-700 text-blue-700 dark:text-blue-300 text-xs font-semibold rounded-lg">
                            {{ $tech }}
                        </span>
                        @endforeach
                    </div>
                    <div class="flex items-center justify-between pt-4 border-t border-gray-200 dark:border-gray-700">
                        <div class="flex items-center text-xs text-gray-500 dark:text-gray-400">
                            <i class="far fa-clock mr-1"></i>
                            <span>{{ \Carbon\Carbon::parse($project->created_at)->diffForHumans() }}</span>
                        </div>
                        <div class="flex items-center space-x-2">
                            @if($project->link_demo)
                            <a href="{{ $project->link_demo }}" target="_blank" class="w-8 h-8 rounded-full bg-blue-100 dark:bg-blue-900/50 flex items-center justify-center text-blue-600 dark:text-blue-400 hover:bg-blue-600 hover:text-white dark:hover:bg-blue-600 transition-all duration-300 transform hover:scale-110">
                                <i class="fas fa-external-link-alt text-xs"></i>
                            </a>
                            @endif
                            @if($project->link_sc)
                            <a href="{{ $project->link_sc }}" target="_blank" class="w-8 h-8 rounded-full bg-gray-100 dark:bg-gray-700 flex items-center justify-center text-gray-600 dark:text-gray-400 hover:bg-gray-900 hover:text-white dark:hover:bg-gray-600 transition-all duration-300 transform hover:scale-110">
                                <i class="fab fa-github text-xs"></i>
                            </a>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        <!-- Empty State -->
        @if($projects->count() === 0)
        <div class="text-center py-20" data-aos="fade-up">
            <div class="mb-6">
                <i class="fas fa-folder-open text-gray-300 dark:text-gray-700 text-8xl"></i>
            </div>
            <h3 class="text-2xl font-bold text-gray-700 dark:text-gray-300 mb-2">No Projects Yet</h3>
            <p class="text-gray-500 dark:text-gray-400 mb-6">Check back later for amazing projects!</p>
            <a href="/" class="inline-flex items-center space-x-2 px-6 py-3 bg-gradient-to-r from-blue-600 to-purple-600 hover:from-blue-700 hover:to-purple-700 text-white rounded-xl font-semibold transition-all duration-300 shadow-xl hover:shadow-2xl transform hover:scale-105">
                <i class="fas fa-arrow-left"></i>
                <span>Back to Home</span>
            </a>
        </div>
        @endif
    </section>

    <!-- Back to top button -->
    <button id="back-to-top" class="fixed bottom-8 right-8 h-14 w-14 bg-gradient-to-r from-blue-600 to-purple-600 hover:from-blue-700 hover:to-purple-700 text-white rounded-2xl shadow-2xl flex items-center justify-center transition-all duration-300 opacity-0 invisible transform hover:scale-110 z-50">
        <i class="fas fa-arrow-up text-xl"></i>
    </button>

    <script>
        // Initialize AOS
        AOS.init({
            duration: 1000,
            once: true,
            offset: 100,
        });

        // Mobile menu toggle
        const mobileMenuButton = document.getElementById('mobile-menu-button');
        const mobileMenu = document.getElementById('mobile-menu');
        
        mobileMenuButton.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });
        
        // Dark mode toggle
        const themeToggle = document.getElementById('theme-toggle');
        const themeToggleMobile = document.getElementById('theme-toggle-mobile');
        
        function toggleTheme() {
            document.documentElement.classList.toggle('dark');
            localStorage.setItem('theme', document.documentElement.classList.contains('dark') ? 'dark' : 'light');
        }
        
        themeToggle.addEventListener('click', toggleTheme);
        themeToggleMobile.addEventListener('click', toggleTheme);
        
        // Set initial theme based on localStorage or system preference
        if (localStorage.getItem('theme') === 'dark' || (!localStorage.getItem('theme') && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
            document.documentElement.classList.add('dark');
        } else {
            document.documentElement.classList.remove('dark');
        }
        
        // Navbar scroll effect
        let lastScroll = 0;
        const navbar = document.querySelector('nav');
        
        window.addEventListener('scroll', () => {
            const currentScroll = window.pageYOffset;
            
            // Back to top button
            const backToTopButton = document.getElementById('back-to-top');
            if (currentScroll > 300) {
                backToTopButton.classList.remove('opacity-0', 'invisible');
                backToTopButton.classList.add('opacity-100', 'visible');
            } else {
                backToTopButton.classList.remove('opacity-100', 'visible');
                backToTopButton.classList.add('opacity-0', 'invisible');
            }
            
            // Navbar hide/show on scroll
            if (currentScroll > lastScroll && currentScroll > 100) {
                navbar.style.transform = 'translateY(-100%)';
            } else {
                navbar.style.transform = 'translateY(0)';
            }
            
            lastScroll = currentScroll;
        });
        
        // Back to top button
        document.getElementById('back-to-top').addEventListener('click', () => {
            window.scrollTo({ top: 0, behavior: 'smooth' });
        });
        
        // Add hover effect for project cards
        document.querySelectorAll('.project-card').forEach(card => {
            const overlay = card.querySelector('.project-overlay');
            
            card.addEventListener('mouseenter', () => {
                if (overlay) {
                    overlay.classList.add('active');
                }
            });
            
            card.addEventListener('mouseleave', () => {
                if (overlay) {
                    overlay.classList.remove('active');
                }
            });
            
            card.addEventListener('mousemove', (e) => {
                const rect = card.getBoundingClientRect();
                const x = e.clientX - rect.left;
                const y = e.clientY - rect.top;
                
                card.style.setProperty('--mouse-x', `${x}px`);
                card.style.setProperty('--mouse-y', `${y}px`);
            });
        });
    </script>
</body>
</html>
