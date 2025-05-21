<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio | Anas Zakia Ardhan</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script>
        tailwind.config = {
            darkMode: 'class',
            theme: {
                extend: {
                    animation: {
                        'float': 'float 3s ease-in-out infinite',
                        'fade-in': 'fadeIn 1s ease-in',
                        'slide-up': 'slideUp 0.5s ease-out',
                    },
                    keyframes: {
                        float: {
                            '0%, 100%': { transform: 'translateY(0)' },
                            '50%': { transform: 'translateY(-10px)' },
                        },
                        fadeIn: {
                            '0%': { opacity: '0' },
                            '100%': { opacity: '1' },
                        },
                        slideUp: {
                            '0%': { 
                                opacity: '0',
                                transform: 'translateY(20px)'
                            },
                            '100%': { 
                                opacity: '1',
                                transform: 'translateY(0)'
                            },
                        }
                    }
                }
            }
        }
    </script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');
        
        body {
            font-family: 'Poppins', sans-serif;
            transition: background-color 0.3s, color 0.3s;
        }
        
        .gradient-text {
            background-clip: text;
            -webkit-background-clip: text;
            color: transparent;
            background-image: linear-gradient(90deg, #3b82f6, #8b5cf6);
        }
        
        .dark .gradient-text {
            background-image: linear-gradient(90deg, #60a5fa, #a78bfa);
        }
        
        .skill-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.1);
        }
        
        .project-card:hover {
            transform: translateY(-5px);
        }
        
        .dark .project-card {
            background-color: #1e293b;
        }
        
        .dark .skill-card {
            background-color: #1e293b;
            border-color: #334155;
        }
    </style>
</head>
<body class="bg-gray-50 text-gray-800 dark:bg-gray-900 dark:text-gray-100">
    <!-- Navbar -->
    <nav class="fixed w-full bg-white/80 dark:bg-gray-800/80 backdrop-blur-md z-50 shadow-sm">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <div class="flex items-center">
                    <span class="text-xl font-bold gradient-text">Portfolio</span>
                </div>
                <div class="hidden md:flex items-center space-x-8">
                    <a href="#home" class="text-gray-700 dark:text-gray-300 hover:text-blue-600 dark:hover:text-blue-400 transition">Home</a>
                    <a href="#skills" class="text-gray-700 dark:text-gray-300 hover:text-blue-600 dark:hover:text-blue-400 transition">Skills</a>
                    <a href="#projects" class="text-gray-700 dark:text-gray-300 hover:text-blue-600 dark:hover:text-blue-400 transition">Projects</a>
                    <a href="#contact" class="text-gray-700 dark:text-gray-300 hover:text-blue-600 dark:hover:text-blue-400 transition">Contact</a>
                    <button id="theme-toggle" class="p-2 rounded-full focus:outline-none">
                        <i class="fas fa-moon dark:hidden"></i>
                        <i class="fas fa-sun hidden dark:block"></i>
                    </button>
                </div>
                <div class="md:hidden flex items-center">
                    <button id="mobile-menu-button" class="p-2 rounded-md focus:outline-none">
                        <i class="fas fa-bars"></i>
                    </button>
                </div>
            </div>
        </div>
        
        <!-- Mobile menu -->
        <div id="mobile-menu" class="hidden md:hidden bg-white dark:bg-gray-800 pb-4 px-4 shadow-lg">
            <div class="flex flex-col space-y-2">
                <a href="#home" class="px-3 py-2 rounded-md text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700 transition">Home</a>
                <a href="#skills" class="px-3 py-2 rounded-md text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700 transition">Skills</a>
                <a href="#projects" class="px-3 py-2 rounded-md text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700 transition">Projects</a>
                <a href="#contact" class="px-3 py-2 rounded-md text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700 transition">Contact</a>
                <button id="theme-toggle-mobile" class="px-3 py-2 rounded-md text-left text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700 transition flex items-center">
                    <i class="fas fa-moon dark:hidden mr-2"></i>
                    <i class="fas fa-sun hidden dark:block mr-2"></i>
                    Toggle Theme
                </button>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="home" class="pt-24 pb-16 md:pt-32 md:pb-24 px-4 sm:px-6 lg:px-8 max-w-6xl mx-auto">
        <div class="flex flex-col md:flex-row items-center justify-between">
            <div class="md:w-1/2 mb-10 md:mb-0 animate-fade-in">
                <h1 class="text-4xl md:text-5xl font-bold mb-4">Hai, Saya <span class="gradient-text">Anas Zakia Ardhan, S.Kom</span></h1>
                <h2 class="text-2xl md:text-3xl font-semibold mb-6 text-gray-600 dark:text-gray-400">Full Stack Developer</h2>
                <p class="text-lg mb-8 text-gray-600 dark:text-gray-300 leading-relaxed">
                    Saya adalah pengembang web dan mobile yang menggabungkan kreativitas dengan teknologi untuk menciptakan solusi digital yang elegan, cepat, dan mudah digunakan. Dengan komitmen pada detail dan performa, saya membantu bisnis dan brand membangun kehadiran digital yang kuat dan berkesan.
                </p>
                <div class="flex flex-wrap gap-4">
                    <a href="#contact" class="px-6 py-3 bg-blue-600 hover:bg-blue-700 text-white rounded-lg font-medium transition shadow-lg hover:shadow-xl">
                        Hubungi Saya
                    </a>
                    <button id="download-cv" class="px-6 py-3 border-2 border-blue-600 text-blue-600 dark:text-blue-400 dark:border-blue-400 hover:bg-blue-50 dark:hover:bg-gray-800 rounded-lg font-medium transition flex items-center">
                        <i class="fas fa-download mr-2"></i> Download CV
                    </button>
                </div>
            </div>
           <div class="md:w-1/2 flex justify-center animate-float">
                <div class="relative w-72 h-72 md:w-96 md:h-96"> <!-- Ukuran diperbesar -->
                    <!-- Efek background gradient -->
                    <div class="absolute inset-0 bg-gradient-to-br from-blue-400 to-purple-500 rounded-full blur-xl opacity-30 animate-pulse"></div>
                    
                    <!-- Container untuk foto dengan overflow-hidden -->
                    <div class="relative w-full h-full rounded-full border-4 border-white dark:border-gray-800 shadow-xl overflow-hidden">
                        <!-- Foto dengan object-cover untuk memastikan seluruh area terisi -->
                        <img src="/images/profile.png" 
                            alt="Profile" 
                            class="w-full h-full object-cover object-center" 
                            style="object-position: center top;"> <!-- Penyesuaian posisi foto -->
                </div>
            </div>
             </div>
        </div>
    </section>

    <!-- Skills Section -->
    <section id="skills" class="py-16 px-4 sm:px-6 lg:px-8 max-w-6xl mx-auto">
        <div class="text-center mb-12">
            <h2 class="text-3xl md:text-4xl font-bold mb-4">Keahlian Saya</h2>
            <p class="text-lg text-gray-600 dark:text-gray-400 max-w-2xl mx-auto">
                Teknologi dan alat yang saya kuasai untuk membangun aplikasi web dan mobile yang luar biasa.
            </p>
        </div>
        
        <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 gap-6">
            <!-- HTML -->
            <div class="skill-card bg-white dark:bg-gray-800 border border-gray-200 dark:border-gray-700 rounded-xl p-6 transition-all duration-300 animate-slide-up" style="animation-delay: 0.1s">
                <div class="w-16 h-16 mx-auto mb-4 flex items-center justify-center bg-blue-50 dark:bg-gray-700 rounded-lg">
                    <i class="fab fa-html5 text-4xl text-orange-500"></i>
                </div>
                <h3 class="text-center font-semibold text-lg">HTML</h3>
            </div>
            
            <!-- CSS -->
            <div class="skill-card bg-white dark:bg-gray-800 border border-gray-200 dark:border-gray-700 rounded-xl p-6 transition-all duration-300 animate-slide-up" style="animation-delay: 0.2s">
                <div class="w-16 h-16 mx-auto mb-4 flex items-center justify-center bg-blue-50 dark:bg-gray-700 rounded-lg">
                    <i class="fab fa-css3-alt text-4xl text-blue-500"></i>
                </div>
                <h3 class="text-center font-semibold text-lg">CSS</h3>
            </div>
            
            <!-- Bootstrap -->
            <div class="skill-card bg-white dark:bg-gray-800 border border-gray-200 dark:border-gray-700 rounded-xl p-6 transition-all duration-300 animate-slide-up" style="animation-delay: 0.3s">
                <div class="w-16 h-16 mx-auto mb-4 flex items-center justify-center bg-blue-50 dark:bg-gray-700 rounded-lg">
                    <i class="fab fa-bootstrap text-4xl text-purple-500"></i>
                </div>
                <h3 class="text-center font-semibold text-lg">Bootstrap</h3>
            </div>
            
            <!-- Tailwind -->
            <div class="skill-card bg-white dark:bg-gray-800 border border-gray-200 dark:border-gray-700 rounded-xl p-6 transition-all duration-300 animate-slide-up" style="animation-delay: 0.4s">
                <div class="w-16 h-16 mx-auto mb-4 flex items-center justify-center bg-blue-50 dark:bg-gray-700 rounded-lg">
                    <img src="https://cdn.worldvectorlogo.com/logos/tailwindcss.svg" alt="Tailwind CSS" class="h-8">
                </div>
                <h3 class="text-center font-semibold text-lg">Tailwind CSS</h3>
            </div>
            
            <!-- MySQL -->
            <div class="skill-card bg-white dark:bg-gray-800 border border-gray-200 dark:border-gray-700 rounded-xl p-6 transition-all duration-300 animate-slide-up" style="animation-delay: 0.5s">
                <div class="w-16 h-16 mx-auto mb-4 flex items-center justify-center bg-blue-50 dark:bg-gray-700 rounded-lg">
                    <i class="fas fa-database text-4xl text-blue-600"></i>
                </div>
                <h3 class="text-center font-semibold text-lg">MySQL</h3>
            </div>
            
            <!-- PHP -->
            <div class="skill-card bg-white dark:bg-gray-800 border border-gray-200 dark:border-gray-700 rounded-xl p-6 transition-all duration-300 animate-slide-up" style="animation-delay: 0.6s">
                <div class="w-16 h-16 mx-auto mb-4 flex items-center justify-center bg-blue-50 dark:bg-gray-700 rounded-lg">
                    <i class="fab fa-php text-4xl text-purple-700"></i>
                </div>
                <h3 class="text-center font-semibold text-lg">PHP</h3>
            </div>
            
            <!-- Flutter -->
            <div class="skill-card bg-white dark:bg-gray-800 border border-gray-200 dark:border-gray-700 rounded-xl p-6 transition-all duration-300 animate-slide-up" style="animation-delay: 0.7s">
                <div class="w-16 h-16 mx-auto mb-4 flex items-center justify-center bg-blue-50 dark:bg-gray-700 rounded-lg">
                    <img src="https://cdn.worldvectorlogo.com/logos/flutter.svg" alt="Flutter" class="h-8">
                </div>
                <h3 class="text-center font-semibold text-lg">Flutter</h3>
            </div>
            
            <!-- Laravel -->
            <div class="skill-card bg-white dark:bg-gray-800 border border-gray-200 dark:border-gray-700 rounded-xl p-6 transition-all duration-300 animate-slide-up" style="animation-delay: 0.8s">
                <div class="w-16 h-16 mx-auto mb-4 flex items-center justify-center bg-blue-50 dark:bg-gray-700 rounded-lg">
                    <i class="fab fa-laravel text-4xl text-red-500"></i>
                </div>
                <h3 class="text-center font-semibold text-lg">Laravel</h3>
            </div>
        </div>
    </section>

   <!-- Projects Section -->
    <section id="projects" class="py-16 px-4 sm:px-6 lg:px-8 max-w-6xl mx-auto bg-gray-50 dark:bg-gray-800/50">
        <div class="text-center mb-12">
            <h2 class="text-3xl md:text-4xl font-bold mb-4">Project Saya</h2>
            <p class="text-lg text-gray-600 dark:text-gray-400 max-w-2xl mx-auto">
                Beberapa project terbaru yang telah saya selesaikan untuk klien dan kebutuhan pribadi.
            </p>
        </div>
        
        <div class="grid md:grid-cols-2 gap-8">
            @foreach($projects as $index => $project)
            <div class="project-card bg-white dark:bg-gray-800 rounded-xl overflow-hidden shadow-lg transition-all duration-300 animate-slide-up" style="animation-delay: {{ 0.2 + ($index * 0.2) }}s">
                <div class="h-48 overflow-hidden">
                    <img src="{{ asset('storage/' . $project->image) }}" 
                        alt="{{ $project->nama }}" 
                        class="w-full h-full object-cover transition duration-500 hover:scale-105">
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-bold mb-2">{{ $project->nama }}</h3>
                    <p class="text-gray-600 dark:text-gray-300 mb-4">
                        {{ $project->deskripsi }}
                    </p>
                    <div class="flex flex-wrap gap-2 mb-4">
                        @foreach($project->teknologi as $tech)
                        <span class="px-3 py-1 bg-blue-100 dark:bg-blue-900/50 text-blue-800 dark:text-blue-300 text-sm rounded-full">
                            {{ $tech }}
                        </span>
                        @endforeach
                    </div>
                    <div class="flex space-x-3">
                        @if($project->link_demo)
                        <a href="{{ $project->link_demo }}" target="_blank" class="text-blue-600 dark:text-blue-400 hover:underline flex items-center">
                            <i class="fas fa-external-link-alt mr-1"></i> Live Demo
                        </a>
                        @endif
                        @if($project->link_sc)
                        <a href="{{ $project->link_sc }}" target="_blank" class="text-gray-600 dark:text-gray-400 hover:underline flex items-center">
                            <i class="fab fa-github mr-1"></i> Source Code
                        </a>
                        @endif
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-16 px-4 sm:px-6 lg:px-8 max-w-6xl mx-auto">
        <div class="text-center mb-12">
            <h2 class="text-3xl md:text-4xl font-bold mb-4">Hubungi Saya</h2>
            <p class="text-lg text-gray-600 dark:text-gray-400 max-w-2xl mx-auto">
                Tertarik bekerja sama atau memiliki pertanyaan? Jangan ragu untuk menghubungi saya.
            </p>
        </div>
        
        <div class="flex flex-col md:flex-row gap-8">
            <div class="md:w-1/2 animate-slide-up" style="animation-delay: 0.2s">
                <form class="space-y-4">
                    <div>
                        <label for="name" class="block mb-2 text-sm font-medium text-gray-700 dark:text-gray-300">Nama</label>
                        <input type="text" id="name" class="w-full px-4 py-3 rounded-lg border border-gray-300 dark:border-gray-600 dark:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition" placeholder="Nama lengkap">
                    </div>
                    <div>
                        <label for="email" class="block mb-2 text-sm font-medium text-gray-700 dark:text-gray-300">Email</label>
                        <input type="email" id="email" class="w-full px-4 py-3 rounded-lg border border-gray-300 dark:border-gray-600 dark:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition" placeholder="email@contoh.com">
                    </div>
                    <div>
                        <label for="message" class="block mb-2 text-sm font-medium text-gray-700 dark:text-gray-300">Pesan</label>
                        <textarea id="message" rows="5" class="w-full px-4 py-3 rounded-lg border border-gray-300 dark:border-gray-600 dark:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition" placeholder="Pesan Anda..."></textarea>
                    </div>
                    <button type="submit" class="w-full px-6 py-3 bg-blue-600 hover:bg-blue-700 text-white rounded-lg font-medium transition shadow-lg hover:shadow-xl">
                        Kirim Pesan
                    </button>
                </form>
            </div>
            
            <div class="md:w-1/2 animate-slide-up" style="animation-delay: 0.4s">
                <div class="bg-white dark:bg-gray-800 rounded-xl p-6 shadow-lg h-full">
                    <h3 class="text-xl font-semibold mb-4">Informasi Kontak</h3>
                    <div class="space-y-4">
                        <div class="flex items-start">
                            <div class="flex-shrink-0 h-10 w-10 rounded-full bg-blue-100 dark:bg-blue-900/50 flex items-center justify-center mr-4">
                                <i class="fas fa-envelope text-blue-600 dark:text-blue-400"></i>
                            </div>
                            <div>
                                <h4 class="font-medium text-gray-700 dark:text-gray-300">Email</h4>
                                <p class="text-gray-600 dark:text-gray-400">anaszakia123@gmail.com</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <div class="flex-shrink-0 h-10 w-10 rounded-full bg-blue-100 dark:bg-blue-900/50 flex items-center justify-center mr-4">
                                <i class="fas fa-phone-alt text-blue-600 dark:text-blue-400"></i>
                            </div>
                            <div>
                                <h4 class="font-medium text-gray-700 dark:text-gray-300">Telepon</h4>
                                <p class="text-gray-600 dark:text-gray-400">+62 812 3119 5859</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <div class="flex-shrink-0 h-10 w-10 rounded-full bg-blue-100 dark:bg-blue-900/50 flex items-center justify-center mr-4">
                                <i class="fas fa-map-marker-alt text-blue-600 dark:text-blue-400"></i>
                            </div>
                            <div>
                                <h4 class="font-medium text-gray-700 dark:text-gray-300">Lokasi</h4>
                                <p class="text-gray-600 dark:text-gray-400">Pati, Jawa Tengah</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="mt-8">
                        <h3 class="text-xl font-semibold mb-4">Media Sosial</h3>
                        <div class="flex space-x-4">
                            <a href="https://www.linkedin.com/in/anas-zakia-613b872b7/" class="h-10 w-10 rounded-full bg-gray-100 dark:bg-gray-700 flex items-center justify-center text-gray-700 dark:text-gray-300 hover:bg-blue-100 dark:hover:bg-blue-900/50 hover:text-blue-600 dark:hover:text-blue-400 transition">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                            <a href="https://github.com/anaszakia" class="h-10 w-10 rounded-full bg-gray-100 dark:bg-gray-700 flex items-center justify-center text-gray-700 dark:text-gray-300 hover:bg-blue-100 dark:hover:bg-blue-900/50 hover:text-blue-600 dark:hover:text-blue-400 transition">
                                <i class="fab fa-github"></i>
                            </a>
                            <a href="https://www.instagram.com/_anaszakiaa/" class="h-10 w-10 rounded-full bg-gray-100 dark:bg-gray-700 flex items-center justify-center text-gray-700 dark:text-gray-300 hover:bg-blue-100 dark:hover:bg-blue-900/50 hover:text-blue-600 dark:hover:text-blue-400 transition">
                                <i class="fab fa-instagram"></i>
                            </a>
                            <a href="https://gitlab.com/anaszakia123" class="h-10 w-10 rounded-full bg-gray-100 dark:bg-gray-700 flex items-center justify-center text-gray-700 dark:text-gray-300 hover:bg-blue-100 dark:hover:bg-blue-900/50 hover:text-blue-600 dark:hover:text-blue-400 transition">
                                <i class="fab fa-gitlab"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="py-8 bg-gray-100 dark:bg-gray-800/50">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col md:flex-row justify-between items-center">
                <div class="mb-4 md:mb-0">
                    <span class="text-lg font-bold gradient-text">Portfolio</span>
                    <p class="text-gray-600 dark:text-gray-400 mt-1 text-sm">
                        © 2023 Anas Zakia Ardhan. All rights reserved.
                    </p>
                </div>
                <div class="flex space-x-6">
                    <a href="https://www.linkedin.com/in/anas-zakia-613b872b7/" class="text-gray-600 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-400 transition">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                    <a href="https://github.com/anaszakia" class="text-gray-600 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-400 transition">
                        <i class="fab fa-github"></i>
                    </a>
                    <a href="https://www.instagram.com/_anaszakiaa/" class="text-gray-600 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-400 transition">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a href="https://gitlab.com/anaszakia123" class="text-gray-600 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-400 transition">
                        <i class="fab fa-gitlab"></i>
                    </a>
                </div>
            </div>
        </div>
    </footer>

    <!-- Back to top button -->
    <button id="back-to-top" class="fixed bottom-8 right-8 h-12 w-12 bg-blue-600 hover:bg-blue-700 text-white rounded-full shadow-lg flex items-center justify-center transition opacity-0 invisible">
        <i class="fas fa-arrow-up"></i>
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
        
        // Back to top button
        const backToTopButton = document.getElementById('back-to-top');
        
        window.addEventListener('scroll', () => {
            if (window.pageYOffset > 300) {
                backToTopButton.classList.remove('opacity-0', 'invisible');
                backToTopButton.classList.add('opacity-100', 'visible');
            } else {
                backToTopButton.classList.remove('opacity-100', 'visible');
                backToTopButton.classList.add('opacity-0', 'invisible');
            }
        });
        
        backToTopButton.addEventListener('click', () => {
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
                    targetElement.scrollIntoView({
                        behavior: 'smooth'
                    });
                    
                    // Close mobile menu if open
                    if (!mobileMenu.classList.contains('hidden')) {
                        mobileMenu.classList.add('hidden');
                    }
                }
            });
        });
        
        // Animate elements when they come into view
        const animateOnScroll = () => {
            const elements = document.querySelectorAll('.animate-slide-up, .animate-fade-in');
            
            elements.forEach(element => {
                const elementPosition = element.getBoundingClientRect().top;
                const windowHeight = window.innerHeight;
                
                if (elementPosition < windowHeight - 100) {
                    element.style.opacity = '1';
                    element.style.transform = 'translateY(0)';
                }
            });
        };
        
        // Initial check
        animateOnScroll();
        
        // Check on scroll
        window.addEventListener('scroll', animateOnScroll);
    </script>
</body>
</html>