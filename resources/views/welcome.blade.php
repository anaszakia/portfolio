<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio | Anas Zakia Ardhan</title>
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
        
        .glass-effect {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);
        }
        
        .dark .glass-effect {
            background: rgba(30, 41, 59, 0.5);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(100, 116, 139, 0.3);
        }
        
        .skill-card {
            position: relative;
            overflow: hidden;
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        }
        
        .skill-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
            transition: left 0.5s;
        }
        
        .skill-card:hover::before {
            left: 100%;
        }
        
        .skill-card:hover {
            transform: translateY(-10px) scale(1.05);
            box-shadow: 0 20px 40px -10px rgba(0, 0, 0, 0.3);
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
                    <div class="flex items-center space-x-3">
                        <div class="w-10 h-10 rounded-lg bg-gradient-to-br from-blue-500 to-purple-600 flex items-center justify-center shadow-lg">
                            <span class="text-white font-bold text-xl">A</span>
                        </div>
                        <span class="text-2xl font-bold gradient-text">Anas Portfolio</span>
                    </div>
                </div>
                <div class="hidden md:flex items-center space-x-1">
                    <a href="#home" class="px-4 py-2 rounded-lg text-gray-700 dark:text-gray-300 hover:bg-white/50 dark:hover:bg-gray-700/50 transition-all duration-300 font-medium">Home</a>
                    <a href="#skills" class="px-4 py-2 rounded-lg text-gray-700 dark:text-gray-300 hover:bg-white/50 dark:hover:bg-gray-700/50 transition-all duration-300 font-medium">Skills</a>
                    <a href="#projects" class="px-4 py-2 rounded-lg text-gray-700 dark:text-gray-300 hover:bg-white/50 dark:hover:bg-gray-700/50 transition-all duration-300 font-medium">Projects</a>
                    <a href="#contact" class="px-4 py-2 rounded-lg text-gray-700 dark:text-gray-300 hover:bg-white/50 dark:hover:bg-gray-700/50 transition-all duration-300 font-medium">Contact</a>
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
                <a href="#home" class="px-4 py-3 rounded-lg text-gray-700 dark:text-gray-300 hover:bg-gradient-to-r hover:from-blue-500 hover:to-purple-600 hover:text-white transition-all duration-300">Home</a>
                <a href="#skills" class="px-4 py-3 rounded-lg text-gray-700 dark:text-gray-300 hover:bg-gradient-to-r hover:from-blue-500 hover:to-purple-600 hover:text-white transition-all duration-300">Skills</a>
                <a href="#projects" class="px-4 py-3 rounded-lg text-gray-700 dark:text-gray-300 hover:bg-gradient-to-r hover:from-blue-500 hover:to-purple-600 hover:text-white transition-all duration-300">Projects</a>
                <a href="#contact" class="px-4 py-3 rounded-lg text-gray-700 dark:text-gray-300 hover:bg-gradient-to-r hover:from-blue-500 hover:to-purple-600 hover:text-white transition-all duration-300">Contact</a>
                <button id="theme-toggle-mobile" class="px-4 py-3 rounded-lg text-left text-gray-700 dark:text-gray-300 hover:bg-gradient-to-r hover:from-blue-500 hover:to-purple-600 hover:text-white transition-all duration-300 flex items-center">
                    <i class="fas fa-moon dark:hidden mr-2"></i>
                    <i class="fas fa-sun hidden dark:block mr-2"></i>
                    Toggle Theme
                </button>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="home" class="relative pt-32 pb-20 md:pt-40 md:pb-32 px-4 sm:px-6 lg:px-8 max-w-7xl mx-auto z-10">
        <div class="flex flex-col md:flex-row items-center justify-between gap-12">
            <div class="md:w-1/2 space-y-6" data-aos="fade-right" data-aos-duration="1000">
                <div class="inline-block">
                    <span class="px-4 py-2 bg-gradient-to-r from-blue-500 to-purple-600 text-white text-sm font-semibold rounded-full shadow-lg">
                        👋 Welcome to my portfolio
                    </span>
                </div>
                <h1 class="text-5xl md:text-7xl font-black mb-4 leading-tight">
                    Hai, Saya <br>
                    <span class="gradient-text">Anas Zakia Ardhan</span>
                    <span class="text-3xl md:text-4xl block mt-2 text-gray-600 dark:text-gray-400">, S.Kom</span>
                </h1>
                <div class="flex items-center space-x-3">
                    <div class="h-1 w-12 bg-gradient-to-r from-blue-500 to-purple-600 rounded-full"></div>
                    <h2 class="text-2xl md:text-3xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-blue-600 to-purple-600 dark:from-blue-400 dark:to-purple-400">
                        Full Stack Developer
                    </h2>
                </div>
                <p class="text-lg md:text-xl text-gray-600 dark:text-gray-300 leading-relaxed">
                    Passionate about crafting elegant digital solutions that combine <span class="font-semibold text-blue-600 dark:text-blue-400">creativity</span> with <span class="font-semibold text-purple-600 dark:text-purple-400">cutting-edge technology</span>. Transforming ideas into powerful web and mobile experiences.
                </p>
                <div class="flex flex-wrap gap-4 pt-4">
                    <a href="#contact" class="group px-8 py-4 bg-gradient-to-r from-blue-600 to-purple-600 hover:from-blue-700 hover:to-purple-700 text-white rounded-xl font-semibold transition-all duration-300 shadow-xl hover:shadow-2xl flex items-center space-x-2 transform hover:scale-105">
                        <span>Hubungi Saya</span>
                        <i class="fas fa-arrow-right group-hover:translate-x-1 transition-transform"></i>
                    </a>
                    <button id="download-cv" class="group px-8 py-4 border-2 border-blue-600 dark:border-purple-500 text-blue-600 dark:text-purple-400 hover:bg-blue-600 hover:text-white dark:hover:bg-purple-600 rounded-xl font-semibold transition-all duration-300 flex items-center space-x-2 transform hover:scale-105">
                        <i class="fas fa-download group-hover:animate-bounce"></i>
                        <span>Download CV</span>
                    </button>
                </div>
                <div class="flex items-center space-x-6 pt-6">
                    <a href="https://github.com/anaszakia" class="w-12 h-12 rounded-full bg-gray-200 dark:bg-gray-700 flex items-center justify-center text-gray-700 dark:text-gray-300 hover:bg-gradient-to-r hover:from-blue-500 hover:to-purple-600 hover:text-white transition-all duration-300 transform hover:scale-110 hover:rotate-6">
                        <i class="fab fa-github text-xl"></i>
                    </a>
                    <a href="https://www.linkedin.com/in/anas-zakia-613b872b7/" class="w-12 h-12 rounded-full bg-gray-200 dark:bg-gray-700 flex items-center justify-center text-gray-700 dark:text-gray-300 hover:bg-gradient-to-r hover:from-blue-500 hover:to-purple-600 hover:text-white transition-all duration-300 transform hover:scale-110 hover:rotate-6">
                        <i class="fab fa-linkedin-in text-xl"></i>
                    </a>
                    <a href="https://www.instagram.com/_anaszakiaa/" class="w-12 h-12 rounded-full bg-gray-200 dark:bg-gray-700 flex items-center justify-center text-gray-700 dark:text-gray-300 hover:bg-gradient-to-r hover:from-blue-500 hover:to-purple-600 hover:text-white transition-all duration-300 transform hover:scale-110 hover:rotate-6">
                        <i class="fab fa-instagram text-xl"></i>
                    </a>
                    <a href="https://gitlab.com/anaszakia123" class="w-12 h-12 rounded-full bg-gray-200 dark:bg-gray-700 flex items-center justify-center text-gray-700 dark:text-gray-300 hover:bg-gradient-to-r hover:from-blue-500 hover:to-purple-600 hover:text-white transition-all duration-300 transform hover:scale-110 hover:rotate-6">
                        <i class="fab fa-gitlab text-xl"></i>
                    </a>
                </div>
            </div>
            <div class="md:w-1/2 flex justify-center" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="200">
                <div class="relative w-80 h-80 md:w-[450px] md:h-[450px]">
                    <!-- Animated gradient rings -->
                    <div class="absolute inset-0 bg-gradient-to-br from-blue-400 via-purple-500 to-pink-500 rounded-full blur-3xl opacity-40 animate-blob"></div>
                    <div class="absolute inset-4 bg-gradient-to-tl from-blue-500 via-purple-600 to-pink-600 rounded-full blur-2xl opacity-30 animate-blob animation-delay-2000"></div>
                    
                    <!-- Rotating border -->
                    <div class="absolute inset-0 rounded-full bg-gradient-to-r from-blue-500 via-purple-500 to-pink-500 animate-spin-slow p-1" style="animation: spin 8s linear infinite;">
                        <div class="w-full h-full rounded-full bg-gray-50 dark:bg-gray-900"></div>
                    </div>
                    
                    <!-- Profile image container -->
                    <div class="absolute inset-2 rounded-full overflow-hidden border-4 border-white dark:border-gray-800 shadow-2xl animate-float">
                        <img src="/images/profile.png" 
                            alt="Anas Zakia Ardhan" 
                            class="w-full h-full object-cover object-center transform hover:scale-110 transition-transform duration-700" 
                            style="object-position: center top;">
                    </div>
                    
                    <!-- Floating badges -->
                    <div class="absolute -top-4 -right-4 px-4 py-2 bg-white dark:bg-gray-800 rounded-full shadow-xl flex items-center space-x-2 animate-bounce" style="animation: bounce 3s infinite;">
                        <span class="w-3 h-3 bg-green-500 rounded-full animate-pulse"></span>
                        <span class="text-sm font-semibold text-gray-700 dark:text-gray-300">Available</span>
                    </div>
                    
                    <div class="absolute -bottom-4 -left-4 px-4 py-2 bg-white dark:bg-gray-800 rounded-full shadow-xl animate-bounce" style="animation: bounce 3s infinite 1s;">
                        <span class="text-2xl">💼</span>
                        <span class="text-sm font-semibold text-gray-700 dark:text-gray-300 ml-2">Full Stack Dev</span>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Scroll indicator -->
        <div class="absolute bottom-10 left-1/2 transform -translate-x-1/2 animate-bounce" data-aos="fade-up" data-aos-delay="1000">
            <div class="flex flex-col items-center space-y-2">
                <span class="text-sm text-gray-500 dark:text-gray-400">Scroll Down</span>
                <i class="fas fa-chevron-down text-gray-500 dark:text-gray-400"></i>
            </div>
        </div>
    </section>

    <!-- Skills Section -->
    <section id="skills" class="relative py-24 px-4 sm:px-6 lg:px-8 max-w-7xl mx-auto z-10">
        <div class="text-center mb-16" data-aos="fade-up">
            <span class="inline-block px-4 py-2 bg-gradient-to-r from-blue-500 to-purple-600 text-white text-sm font-semibold rounded-full shadow-lg mb-4">
                🚀 My Skills
            </span>
            <h2 class="text-4xl md:text-6xl font-black mb-6">
                <span class="gradient-text">Tech Stack</span> & Tools
            </h2>
            <p class="text-lg md:text-xl text-gray-600 dark:text-gray-400 max-w-3xl mx-auto">
                Powerful technologies I use to build amazing web and mobile applications
            </p>
        </div>
        
        <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-6 gap-6">
            <!-- HTML -->
            <div class="skill-card group bg-white dark:bg-gray-800 border-2 border-gray-200 dark:border-gray-700 rounded-2xl p-6 cursor-pointer" data-aos="zoom-in" data-aos-delay="100">
                <div class="w-20 h-20 mx-auto mb-4 flex items-center justify-center bg-gradient-to-br from-orange-100 to-orange-50 dark:from-orange-900/30 dark:to-orange-800/20 rounded-2xl group-hover:scale-110 transition-transform duration-300">
                    <i class="fab fa-html5 text-5xl text-orange-500"></i>
                </div>
                <h3 class="text-center font-bold text-lg text-gray-800 dark:text-gray-200">HTML5</h3>
                <p class="text-center text-xs text-gray-500 dark:text-gray-400 mt-1">Advanced</p>
            </div>
            
            <!-- CSS -->
            <div class="skill-card group bg-white dark:bg-gray-800 border-2 border-gray-200 dark:border-gray-700 rounded-2xl p-6 cursor-pointer" data-aos="zoom-in" data-aos-delay="150">
                <div class="w-20 h-20 mx-auto mb-4 flex items-center justify-center bg-gradient-to-br from-blue-100 to-blue-50 dark:from-blue-900/30 dark:to-blue-800/20 rounded-2xl group-hover:scale-110 transition-transform duration-300">
                    <i class="fab fa-css3-alt text-5xl text-blue-500"></i>
                </div>
                <h3 class="text-center font-bold text-lg text-gray-800 dark:text-gray-200">CSS3</h3>
                <p class="text-center text-xs text-gray-500 dark:text-gray-400 mt-1">Advanced</p>
            </div>
            
            <!-- Bootstrap -->
            <div class="skill-card group bg-white dark:bg-gray-800 border-2 border-gray-200 dark:border-gray-700 rounded-2xl p-6 cursor-pointer" data-aos="zoom-in" data-aos-delay="200">
                <div class="w-20 h-20 mx-auto mb-4 flex items-center justify-center bg-gradient-to-br from-purple-100 to-purple-50 dark:from-purple-900/30 dark:to-purple-800/20 rounded-2xl group-hover:scale-110 transition-transform duration-300">
                    <i class="fab fa-bootstrap text-5xl text-purple-600"></i>
                </div>
                <h3 class="text-center font-bold text-lg text-gray-800 dark:text-gray-200">Bootstrap</h3>
                <p class="text-center text-xs text-gray-500 dark:text-gray-400 mt-1">Advanced</p>
            </div>
            
            <!-- Tailwind -->
            <div class="skill-card group bg-white dark:bg-gray-800 border-2 border-gray-200 dark:border-gray-700 rounded-2xl p-6 cursor-pointer" data-aos="zoom-in" data-aos-delay="250">
                <div class="w-20 h-20 mx-auto mb-4 flex items-center justify-center bg-gradient-to-br from-cyan-100 to-cyan-50 dark:from-cyan-900/30 dark:to-cyan-800/20 rounded-2xl group-hover:scale-110 transition-transform duration-300">
                    <img src="https://cdn.worldvectorlogo.com/logos/tailwindcss.svg" alt="Tailwind CSS" class="h-10">
                </div>
                <h3 class="text-center font-bold text-lg text-gray-800 dark:text-gray-200">Tailwind</h3>
                <p class="text-center text-xs text-gray-500 dark:text-gray-400 mt-1">Advanced</p>
            </div>
            
            <!-- MySQL -->
            <div class="skill-card group bg-white dark:bg-gray-800 border-2 border-gray-200 dark:border-gray-700 rounded-2xl p-6 cursor-pointer" data-aos="zoom-in" data-aos-delay="300">
                <div class="w-20 h-20 mx-auto mb-4 flex items-center justify-center bg-gradient-to-br from-blue-100 to-blue-50 dark:from-blue-900/30 dark:to-blue-800/20 rounded-2xl group-hover:scale-110 transition-transform duration-300">
                    <i class="fas fa-database text-5xl text-blue-600"></i>
                </div>
                <h3 class="text-center font-bold text-lg text-gray-800 dark:text-gray-200">MySQL</h3>
                <p class="text-center text-xs text-gray-500 dark:text-gray-400 mt-1">Advanced</p>
            </div>
            
            <!-- PHP -->
            <div class="skill-card group bg-white dark:bg-gray-800 border-2 border-gray-200 dark:border-gray-700 rounded-2xl p-6 cursor-pointer" data-aos="zoom-in" data-aos-delay="350">
                <div class="w-20 h-20 mx-auto mb-4 flex items-center justify-center bg-gradient-to-br from-indigo-100 to-indigo-50 dark:from-indigo-900/30 dark:to-indigo-800/20 rounded-2xl group-hover:scale-110 transition-transform duration-300">
                    <i class="fab fa-php text-5xl text-indigo-700"></i>
                </div>
                <h3 class="text-center font-bold text-lg text-gray-800 dark:text-gray-200">PHP</h3>
                <p class="text-center text-xs text-gray-500 dark:text-gray-400 mt-1">Advanced</p>
            </div>
            
            <!-- Flutter -->
            <div class="skill-card group bg-white dark:bg-gray-800 border-2 border-gray-200 dark:border-gray-700 rounded-2xl p-6 cursor-pointer" data-aos="zoom-in" data-aos-delay="400">
                <div class="w-20 h-20 mx-auto mb-4 flex items-center justify-center bg-gradient-to-br from-blue-100 to-blue-50 dark:from-blue-900/30 dark:to-blue-800/20 rounded-2xl group-hover:scale-110 transition-transform duration-300">
                    <img src="https://cdn.worldvectorlogo.com/logos/flutter.svg" alt="Flutter" class="h-10">
                </div>
                <h3 class="text-center font-bold text-lg text-gray-800 dark:text-gray-200">Flutter</h3>
                <p class="text-center text-xs text-gray-500 dark:text-gray-400 mt-1">Intermediate</p>
            </div>
            
            <!-- Laravel -->
            <div class="skill-card group bg-white dark:bg-gray-800 border-2 border-gray-200 dark:border-gray-700 rounded-2xl p-6 cursor-pointer" data-aos="zoom-in" data-aos-delay="450">
                <div class="w-20 h-20 mx-auto mb-4 flex items-center justify-center bg-gradient-to-br from-red-100 to-red-50 dark:from-red-900/30 dark:to-red-800/20 rounded-2xl group-hover:scale-110 transition-transform duration-300">
                    <i class="fab fa-laravel text-5xl text-red-500"></i>
                </div>
                <h3 class="text-center font-bold text-lg text-gray-800 dark:text-gray-200">Laravel</h3>
                <p class="text-center text-xs text-gray-500 dark:text-gray-400 mt-1">Advanced</p>
            </div>

            <!-- React -->
            <div class="skill-card group bg-white dark:bg-gray-800 border-2 border-gray-200 dark:border-gray-700 rounded-2xl p-6 cursor-pointer" data-aos="zoom-in" data-aos-delay="500">
                <div class="w-20 h-20 mx-auto mb-4 flex items-center justify-center bg-gradient-to-br from-cyan-100 to-cyan-50 dark:from-cyan-900/30 dark:to-cyan-800/20 rounded-2xl group-hover:scale-110 transition-transform duration-300">
                    <i class="fab fa-react text-5xl text-cyan-400"></i>
                </div>
                <h3 class="text-center font-bold text-lg text-gray-800 dark:text-gray-200">React</h3>
                <p class="text-center text-xs text-gray-500 dark:text-gray-400 mt-1">Intermediate</p>
            </div>

            <!-- Python -->
            <div class="skill-card group bg-white dark:bg-gray-800 border-2 border-gray-200 dark:border-gray-700 rounded-2xl p-6 cursor-pointer" data-aos="zoom-in" data-aos-delay="550">
                <div class="w-20 h-20 mx-auto mb-4 flex items-center justify-center bg-gradient-to-br from-yellow-100 to-yellow-50 dark:from-yellow-900/30 dark:to-yellow-800/20 rounded-2xl group-hover:scale-110 transition-transform duration-300">
                    <i class="fab fa-python text-5xl text-yellow-500"></i>
                </div>
                <h3 class="text-center font-bold text-lg text-gray-800 dark:text-gray-200">Python</h3>
                <p class="text-center text-xs text-gray-500 dark:text-gray-400 mt-1">Intermediate</p>
            </div>

            <!-- Livewire -->
            <div class="skill-card group bg-white dark:bg-gray-800 border-2 border-gray-200 dark:border-gray-700 rounded-2xl p-6 cursor-pointer" data-aos="zoom-in" data-aos-delay="600">
                <div class="w-20 h-20 mx-auto mb-4 flex items-center justify-center bg-gradient-to-br from-pink-100 to-pink-50 dark:from-pink-900/30 dark:to-pink-800/20 rounded-2xl group-hover:scale-110 transition-transform duration-300">
                    <img src="https://laravel-livewire.com/img/twitter.png" alt="Livewire" class="h-10 rounded-lg">
                </div>
                <h3 class="text-center font-bold text-lg text-gray-800 dark:text-gray-200">Livewire</h3>
                <p class="text-center text-xs text-gray-500 dark:text-gray-400 mt-1">Advanced</p>
            </div>

            <!-- Dart -->
            <div class="skill-card group bg-white dark:bg-gray-800 border-2 border-gray-200 dark:border-gray-700 rounded-2xl p-6 cursor-pointer" data-aos="zoom-in" data-aos-delay="650">
                <div class="w-20 h-20 mx-auto mb-4 flex items-center justify-center bg-gradient-to-br from-blue-100 to-blue-50 dark:from-blue-900/30 dark:to-blue-800/20 rounded-2xl group-hover:scale-110 transition-transform duration-300">
                    <svg class="h-10" viewBox="0 0 256 256" xmlns="http://www.w3.org/2000/svg">
                        <path d="M70.534 69.696L53.988 53.15l.07 119.6.198 5.59c.082 2.63.57 5.598 1.384 8.674l131.104 46.23 42.268-42.27-158.478-121.28z" fill="#00D2B8"/>
                        <path d="M185.374 43.832l-58.314-.02L.104 233.25l38.65 14.087 167.85-167.84.136-24.428-21.366-11.237z" fill="#55DDCA"/>
                        <path d="M199.19 77.488l-13.816-33.656-60.316 60.315 24.177 24.176 33.674 13.817 16.467-16.467.046-31.865-.232-16.32z" fill="#0081C6"/>
                        <path d="M183.538 225.26L37.732 73.86l-1.318-.006.103 79.298 147.47 147.466 79.21-.099.006-1.318-79.665-73.94z" fill="#0079B3"/>
                    </svg>
                </div>
                <h3 class="text-center font-bold text-lg text-gray-800 dark:text-gray-200">Dart</h3>
                <p class="text-center text-xs text-gray-500 dark:text-gray-400 mt-1">Intermediate</p>
            </div>
        </div>
    </section>

   <!-- Projects Section -->
    <section id="projects" class="relative py-24 px-4 sm:px-6 lg:px-8 max-w-7xl mx-auto z-10">
        <div class="text-center mb-16" data-aos="fade-up">
            <span class="inline-block px-4 py-2 bg-gradient-to-r from-blue-500 to-purple-600 text-white text-sm font-semibold rounded-full shadow-lg mb-4">
                💼 My Works
            </span>
            <h2 class="text-4xl md:text-6xl font-black mb-6">
                Featured <span class="gradient-text">Projects</span>
            </h2>
            <p class="text-lg md:text-xl text-gray-600 dark:text-gray-400 max-w-3xl mx-auto">
                Check out some of my recent projects that showcase my skills and creativity
            </p>
        </div>
        
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach($projects as $index => $project)
            <div class="project-card group bg-white dark:bg-gray-800 rounded-2xl overflow-hidden shadow-2xl border border-gray-200 dark:border-gray-700" data-aos="fade-up" data-aos-delay="{{ 100 + ($index * 100) }}">
                <div class="relative overflow-hidden h-56">
                    <img src="{{ asset('storage/' . $project->image) }}" 
                        alt="{{ $project->nama }}" 
                        class="project-image object-cover w-full h-full">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/40 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end p-6">
                        <div class="flex gap-3">
                            @if($project->link_demo)
                            <a href="{{ $project->link_demo }}" target="_blank" class="px-4 py-2 bg-white text-gray-900 rounded-lg font-semibold text-sm hover:bg-blue-500 hover:text-white transition-all duration-300 flex items-center space-x-2">
                                <i class="fas fa-external-link-alt"></i>
                                <span>Demo</span>
                            </a>
                            @endif
                            @if($project->link_sc)
                            <a href="{{ $project->link_sc }}" target="_blank" class="px-4 py-2 bg-gray-900 text-white rounded-lg font-semibold text-sm hover:bg-purple-600 transition-all duration-300 flex items-center space-x-2">
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

        <!-- View All Projects Button -->
        <div class="text-center mt-12" data-aos="fade-up" data-aos-delay="200">
            <a href="{{ route('projects.all') }}" class="group inline-flex px-8 py-4 bg-gradient-to-r from-blue-600 to-purple-600 hover:from-blue-700 hover:to-purple-700 text-white rounded-xl font-semibold transition-all duration-300 shadow-xl hover:shadow-2xl items-center space-x-2 transform hover:scale-105">
                <span>View All Projects</span>
                <i class="fas fa-arrow-right group-hover:translate-x-1 transition-transform"></i>
            </a>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="relative py-24 px-4 sm:px-6 lg:px-8 max-w-7xl mx-auto z-10">
        <div class="text-center mb-16" data-aos="fade-up">
            <span class="inline-block px-4 py-2 bg-gradient-to-r from-blue-500 to-purple-600 text-white text-sm font-semibold rounded-full shadow-lg mb-4">
                📬 Get In Touch
            </span>
            <h2 class="text-4xl md:text-6xl font-black mb-6">
                Let's <span class="gradient-text">Work Together</span>
            </h2>
            <p class="text-lg md:text-xl text-gray-600 dark:text-gray-400 max-w-3xl mx-auto">
                Have a project in mind? Let's discuss how I can help bring your ideas to life
            </p>
        </div>
        
        <div class="grid lg:grid-cols-5 gap-8">
            <div class="lg:col-span-3" data-aos="fade-right" data-aos-delay="100">
                <div class="glass-effect rounded-3xl p-8 shadow-2xl">
                    <form class="space-y-6">
                        <div class="grid md:grid-cols-2 gap-6">
                            <div>
                                <label for="name" class="block mb-2 text-sm font-semibold text-gray-700 dark:text-gray-300">Your Name</label>
                                <input type="text" id="name" class="w-full px-5 py-4 rounded-xl border-2 border-gray-200 dark:border-gray-700 dark:bg-gray-800 focus:outline-none focus:border-blue-500 dark:focus:border-purple-500 transition-all duration-300" placeholder="John Doe">
                            </div>
                            <div>
                                <label for="email" class="block mb-2 text-sm font-semibold text-gray-700 dark:text-gray-300">Your Email</label>
                                <input type="email" id="email" class="w-full px-5 py-4 rounded-xl border-2 border-gray-200 dark:border-gray-700 dark:bg-gray-800 focus:outline-none focus:border-blue-500 dark:focus:border-purple-500 transition-all duration-300" placeholder="john@example.com">
                            </div>
                        </div>
                        <div>
                            <label for="subject" class="block mb-2 text-sm font-semibold text-gray-700 dark:text-gray-300">Subject</label>
                            <input type="text" id="subject" class="w-full px-5 py-4 rounded-xl border-2 border-gray-200 dark:border-gray-700 dark:bg-gray-800 focus:outline-none focus:border-blue-500 dark:focus:border-purple-500 transition-all duration-300" placeholder="Project Discussion">
                        </div>
                        <div>
                            <label for="message" class="block mb-2 text-sm font-semibold text-gray-700 dark:text-gray-300">Your Message</label>
                            <textarea id="message" rows="6" class="w-full px-5 py-4 rounded-xl border-2 border-gray-200 dark:border-gray-700 dark:bg-gray-800 focus:outline-none focus:border-blue-500 dark:focus:border-purple-500 transition-all duration-300 resize-none" placeholder="Tell me about your project..."></textarea>
                        </div>
                        <button type="submit" class="group w-full px-8 py-4 bg-gradient-to-r from-blue-600 to-purple-600 hover:from-blue-700 hover:to-purple-700 text-white rounded-xl font-semibold transition-all duration-300 shadow-xl hover:shadow-2xl flex items-center justify-center space-x-2 transform hover:scale-105">
                            <span>Send Message</span>
                            <i class="fas fa-paper-plane group-hover:translate-x-1 group-hover:-translate-y-1 transition-transform"></i>
                        </button>
                    </form>
                </div>
            </div>
            
            <div class="lg:col-span-2 space-y-6" data-aos="fade-left" data-aos-delay="200">
                <!-- Contact Info Cards -->
                <div class="glass-effect rounded-3xl p-6 shadow-xl hover:shadow-2xl transition-shadow duration-300">
                    <div class="flex items-start space-x-4">
                        <div class="flex-shrink-0 w-14 h-14 rounded-2xl bg-gradient-to-br from-blue-500 to-blue-600 flex items-center justify-center shadow-lg">
                            <i class="fas fa-envelope text-white text-xl"></i>
                        </div>
                        <div>
                            <h4 class="font-bold text-gray-800 dark:text-gray-200 mb-1">Email Me</h4>
                            <a href="mailto:anaszakia123@gmail.com" class="text-gray-600 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-400 transition-colors text-sm">
                                anaszakia123@gmail.com
                            </a>
                        </div>
                    </div>
                </div>

                <div class="glass-effect rounded-3xl p-6 shadow-xl hover:shadow-2xl transition-shadow duration-300">
                    <div class="flex items-start space-x-4">
                        <div class="flex-shrink-0 w-14 h-14 rounded-2xl bg-gradient-to-br from-green-500 to-green-600 flex items-center justify-center shadow-lg">
                            <i class="fas fa-phone-alt text-white text-xl"></i>
                        </div>
                        <div>
                            <h4 class="font-bold text-gray-800 dark:text-gray-200 mb-1">Call Me</h4>
                            <a href="tel:+6281231195859" class="text-gray-600 dark:text-gray-400 hover:text-green-600 dark:hover:text-green-400 transition-colors text-sm">
                                +62 812 3119 5859
                            </a>
                        </div>
                    </div>
                </div>

                <div class="glass-effect rounded-3xl p-6 shadow-xl hover:shadow-2xl transition-shadow duration-300">
                    <div class="flex items-start space-x-4">
                        <div class="flex-shrink-0 w-14 h-14 rounded-2xl bg-gradient-to-br from-purple-500 to-purple-600 flex items-center justify-center shadow-lg">
                            <i class="fas fa-map-marker-alt text-white text-xl"></i>
                        </div>
                        <div>
                            <h4 class="font-bold text-gray-800 dark:text-gray-200 mb-1">Location</h4>
                            <p class="text-gray-600 dark:text-gray-400 text-sm">
                                Pati, Jawa Tengah<br>Indonesia
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Social Media -->
                <div class="glass-effect rounded-3xl p-6 shadow-xl">
                    <h4 class="font-bold text-gray-800 dark:text-gray-200 mb-4">Connect With Me</h4>
                    <div class="grid grid-cols-4 gap-3">
                        <a href="https://www.linkedin.com/in/anas-zakia-613b872b7/" target="_blank" class="aspect-square rounded-2xl bg-gradient-to-br from-blue-500 to-blue-600 flex items-center justify-center text-white hover:scale-110 hover:rotate-6 transition-all duration-300 shadow-lg">
                            <i class="fab fa-linkedin-in text-xl"></i>
                        </a>
                        <a href="https://github.com/anaszakia" target="_blank" class="aspect-square rounded-2xl bg-gradient-to-br from-gray-700 to-gray-900 flex items-center justify-center text-white hover:scale-110 hover:rotate-6 transition-all duration-300 shadow-lg">
                            <i class="fab fa-github text-xl"></i>
                        </a>
                        <a href="https://www.instagram.com/_anaszakiaa/" target="_blank" class="aspect-square rounded-2xl bg-gradient-to-br from-pink-500 to-purple-600 flex items-center justify-center text-white hover:scale-110 hover:rotate-6 transition-all duration-300 shadow-lg">
                            <i class="fab fa-instagram text-xl"></i>
                        </a>
                        <a href="https://gitlab.com/anaszakia123" target="_blank" class="aspect-square rounded-2xl bg-gradient-to-br from-orange-500 to-red-600 flex items-center justify-center text-white hover:scale-110 hover:rotate-6 transition-all duration-300 shadow-lg">
                            <i class="fab fa-gitlab text-xl"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="relative py-12 bg-gradient-to-br from-gray-900 via-gray-800 to-gray-900 text-white overflow-hidden">
        <!-- Decorative elements -->
        <div class="absolute inset-0 overflow-hidden pointer-events-none">
            <div class="absolute -top-24 -left-24 w-48 h-48 bg-blue-500 rounded-full mix-blend-multiply filter blur-3xl opacity-20 animate-blob"></div>
            <div class="absolute -bottom-24 -right-24 w-48 h-48 bg-purple-500 rounded-full mix-blend-multiply filter blur-3xl opacity-20 animate-blob animation-delay-4000"></div>
        </div>

        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid md:grid-cols-3 gap-12 mb-8">
                <!-- Brand Section -->
                <div class="space-y-4">
                    <div class="flex items-center space-x-3">
                        <div class="w-12 h-12 rounded-lg bg-gradient-to-br from-blue-500 to-purple-600 flex items-center justify-center shadow-lg">
                            <span class="text-white font-bold text-2xl">A</span>
                        </div>
                        <span class="text-2xl font-bold gradient-text">Anas Portfolio</span>
                    </div>
                    <p class="text-gray-400 text-sm leading-relaxed">
                        Crafting digital experiences that inspire and engage. Let's build something amazing together.
                    </p>
                    <div class="flex space-x-3">
                        <a href="https://www.linkedin.com/in/anas-zakia-613b872b7/" class="w-10 h-10 rounded-lg bg-white/10 hover:bg-gradient-to-r hover:from-blue-500 hover:to-purple-600 flex items-center justify-center transition-all duration-300 transform hover:scale-110">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                        <a href="https://github.com/anaszakia" class="w-10 h-10 rounded-lg bg-white/10 hover:bg-gradient-to-r hover:from-blue-500 hover:to-purple-600 flex items-center justify-center transition-all duration-300 transform hover:scale-110">
                            <i class="fab fa-github"></i>
                        </a>
                        <a href="https://www.instagram.com/_anaszakiaa/" class="w-10 h-10 rounded-lg bg-white/10 hover:bg-gradient-to-r hover:from-blue-500 hover:to-purple-600 flex items-center justify-center transition-all duration-300 transform hover:scale-110">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="https://gitlab.com/anaszakia123" class="w-10 h-10 rounded-lg bg-white/10 hover:bg-gradient-to-r hover:from-blue-500 hover:to-purple-600 flex items-center justify-center transition-all duration-300 transform hover:scale-110">
                            <i class="fab fa-gitlab"></i>
                        </a>
                    </div>
                </div>

                <!-- Quick Links -->
                <div class="space-y-4">
                    <h4 class="text-lg font-bold mb-4">Quick Links</h4>
                    <div class="flex flex-col space-y-2">
                        <a href="#home" class="text-gray-400 hover:text-white transition-colors text-sm flex items-center space-x-2 group">
                            <i class="fas fa-chevron-right text-xs group-hover:translate-x-1 transition-transform"></i>
                            <span>Home</span>
                        </a>
                        <a href="#skills" class="text-gray-400 hover:text-white transition-colors text-sm flex items-center space-x-2 group">
                            <i class="fas fa-chevron-right text-xs group-hover:translate-x-1 transition-transform"></i>
                            <span>Skills</span>
                        </a>
                        <a href="#projects" class="text-gray-400 hover:text-white transition-colors text-sm flex items-center space-x-2 group">
                            <i class="fas fa-chevron-right text-xs group-hover:translate-x-1 transition-transform"></i>
                            <span>Projects</span>
                        </a>
                        <a href="#contact" class="text-gray-400 hover:text-white transition-colors text-sm flex items-center space-x-2 group">
                            <i class="fas fa-chevron-right text-xs group-hover:translate-x-1 transition-transform"></i>
                            <span>Contact</span>
                        </a>
                    </div>
                </div>

                <!-- Contact Info -->
                <div class="space-y-4">
                    <h4 class="text-lg font-bold mb-4">Get In Touch</h4>
                    <div class="flex flex-col space-y-3">
                        <a href="mailto:anaszakia123@gmail.com" class="text-gray-400 hover:text-white transition-colors text-sm flex items-center space-x-3 group">
                            <i class="fas fa-envelope text-blue-400"></i>
                            <span>anaszakia123@gmail.com</span>
                        </a>
                        <a href="tel:+6281231195859" class="text-gray-400 hover:text-white transition-colors text-sm flex items-center space-x-3 group">
                            <i class="fas fa-phone text-green-400"></i>
                            <span>+62 812 3119 5859</span>
                        </a>
                        <div class="text-gray-400 text-sm flex items-center space-x-3">
                            <i class="fas fa-map-marker-alt text-purple-400"></i>
                            <span>Pati, Jawa Tengah, Indonesia</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Bottom Bar -->
            <div class="pt-8 border-t border-gray-700">
                <div class="flex flex-col md:flex-row justify-between items-center space-y-4 md:space-y-0">
                    <p class="text-gray-400 text-sm text-center md:text-left">
                        © {{ date('Y') }} <span class="font-semibold text-white">Anas Zakia Ardhan, S.Kom</span>. All rights reserved.
                    </p>
                    <div class="flex items-center space-x-6 text-sm text-gray-400">
                        <span>Made with <i class="fas fa-heart text-red-500 animate-pulse"></i> using Laravel & Tailwind</span>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Back to top button -->
    <button id="back-to-top" class="fixed bottom-8 right-8 h-14 w-14 bg-gradient-to-r from-blue-600 to-purple-600 hover:from-blue-700 hover:to-purple-700 text-white rounded-2xl shadow-2xl flex items-center justify-center transition-all duration-300 opacity-0 invisible transform hover:scale-110 z-50">
        <i class="fas fa-arrow-up text-xl"></i>
    </button>

    <!-- Download CV Modal -->
    <div id="download-modal" class="fixed inset-0 bg-black/50 z-50 flex items-center justify-center p-4 opacity-0 invisible transition-opacity duration-300">
        <div class="bg-white dark:bg-gray-800 rounded-xl max-w-md w-full p-6 transform transition-all duration-300 scale-95">
            <div class="flex justify-between items-center mb-4">
                <h3 class="text-xl font-bold">Download CV</h3>
                <button id="close-modal" class="text-gray-500 hover:text-gray-700 dark:hover:text-gray-300">
                    <i class="fas fa-times"></i>
                </button>
            </div>
            
            @if($cv = App\Models\Cv::first())
            <div class="space-y-4">
                <div class="flex items-center p-4 border border-gray-200 dark:border-gray-700 rounded-lg">
                    <i class="fas fa-file-pdf text-red-500 text-2xl mr-3"></i>
                    <div class="flex-1">
                        <h4 class="font-medium">Curriculum Vitae</h4>
                        <p class="text-sm text-gray-500 dark:text-gray-400 truncate">
                            {{ basename($cv->file_cv) }}
                        </p>
                    </div>
                    <a href="{{ asset('storage/'.$cv->file_cv) }}" download
                    class="text-blue-600 dark:text-blue-400 hover:text-blue-800 dark:hover:text-blue-300 transition p-2">
                        <i class="fas fa-download"></i>
                    </a>
                </div>
                
                <div class="flex justify-between text-sm text-gray-500 dark:text-gray-400">
                    <span>
                        <i class="fas fa-calendar-alt mr-1"></i>
                        {{ $cv->created_at->format('d M Y') }}
                    </span>
                    <span>
                        <i class="fas fa-file-archive mr-1"></i>
                        {{ round(filesize(storage_path('app/public/'.$cv->file_cv)) )/ 1024 }} KB
                    </span>
                </div>
            </div>
            @else
            <div class="text-center py-6">
                <i class="fas fa-file-exclamation text-yellow-500 text-4xl mb-3"></i>
                <p class="text-gray-600 dark:text-gray-300">CV belum tersedia</p>
                <p class="text-sm text-gray-500 mt-2">Silakan upload CV terlebih dahulu</p>
            </div>
            @endif
        </div>
    </div>


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
        
        // Download CV modal
        const downloadCvButton = document.getElementById('download-cv');
        const downloadModal = document.getElementById('download-modal');
        const closeModalButton = document.getElementById('close-modal');
        
        downloadCvButton.addEventListener('click', () => {
            downloadModal.classList.remove('opacity-0', 'invisible');
            downloadModal.classList.add('opacity-100', 'visible');
            downloadModal.querySelector('div').classList.remove('scale-95');
            downloadModal.querySelector('div').classList.add('scale-100');
        });
        
        closeModalButton.addEventListener('click', () => {
            downloadModal.classList.remove('opacity-100', 'visible');
            downloadModal.classList.add('opacity-0', 'invisible');
            downloadModal.querySelector('div').classList.remove('scale-100');
            downloadModal.querySelector('div').classList.add('scale-95');
        });
        
        // Close modal when clicking outside
        downloadModal.addEventListener('click', (e) => {
            if (e.target === downloadModal) {
                downloadModal.classList.remove('opacity-100', 'visible');
                downloadModal.classList.add('opacity-0', 'invisible');
                downloadModal.querySelector('div').classList.remove('scale-100');
                downloadModal.querySelector('div').classList.add('scale-95');
            }
        });
        
        // Smooth scrolling for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                
                const targetId = this.getAttribute('href');
                if (targetId === '#') return;
                
                const targetElement = document.querySelector(targetId);
                if (targetElement) {
                    const offsetTop = targetElement.offsetTop - 80;
                    window.scrollTo({
                        top: offsetTop,
                        behavior: 'smooth'
                    });
                    
                    // Close mobile menu if open
                    if (!mobileMenu.classList.contains('hidden')) {
                        mobileMenu.classList.add('hidden');
                    }
                }
            });
        });
        
        // Add active state to nav links
        const sections = document.querySelectorAll('section[id]');
        const navLinks = document.querySelectorAll('nav a[href^="#"]');
        
        window.addEventListener('scroll', () => {
            let current = '';
            sections.forEach(section => {
                const sectionTop = section.offsetTop;
                const sectionHeight = section.clientHeight;
                if (pageYOffset >= (sectionTop - 200)) {
                    current = section.getAttribute('id');
                }
            });
            
            navLinks.forEach(link => {
                link.classList.remove('text-blue-600', 'dark:text-blue-400');
                if (link.getAttribute('href') === `#${current}`) {
                    link.classList.add('text-blue-600', 'dark:text-blue-400');
                }
            });
        });
        
        // Parallax effect for background blobs
        window.addEventListener('scroll', () => {
            const scrolled = window.pageYOffset;
            const blobs = document.querySelectorAll('.blob');
            blobs.forEach((blob, index) => {
                const speed = 0.5 + (index * 0.1);
                blob.style.transform = `translateY(${scrolled * speed}px)`;
            });
        });
        
        // Add hover effect for project cards
        document.querySelectorAll('.project-card').forEach(card => {
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