@extends('layouts.landing')

@section('content')
    <!-- Navigation -->
    <nav class="fixed top-0 w-full z-50 bg-primary-50/95 dark:bg-gray-900/95 backdrop-blur-md border-b border-primary-300 dark:border-primary-800/30 transition-all duration-300 shadow-lg">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-20">
                <div class="flex items-center">
                    <div class="flex-shrink-0">
                        <div class="h-12 w-12 bg-gradient-to-r from-primary-600 to-primary-800 rounded-xl flex items-center justify-center shadow-lg">
                            <span class="text-white font-bold text-xl">Q</span>
                        </div>
                    </div>
                    <div class="ml-4">
                        <span class="text-gray-900 dark:text-white font-bold text-2xl">Quantum</span>
                        <span class="text-primary-600 font-bold text-2xl">Landpark</span>
                    </div>
                </div>
                <div class="hidden md:block">
                    <div class="ml-10 flex items-baseline space-x-8">
                        <a href="#home" class="text-primary-600 hover:text-primary-700 dark:text-primary-400 dark:hover:text-primary-300 px-3 py-2 rounded-lg text-sm font-semibold transition-all duration-300 hover:bg-primary-100 dark:hover:bg-primary-900/20">Beranda</a>
                        <a href="#activities" class="text-gray-700 hover:text-primary-600 dark:text-gray-300 dark:hover:text-primary-400 px-3 py-2 rounded-lg text-sm font-semibold transition-all duration-300 hover:bg-primary-50 dark:hover:bg-gray-800">Aktivitas</a>
                        <a href="#gallery" class="text-gray-700 hover:text-primary-600 dark:text-gray-300 dark:hover:text-primary-400 px-3 py-2 rounded-lg text-sm font-semibold transition-all duration-300 hover:bg-primary-50 dark:hover:bg-gray-800">Galeri</a>
                        <a href="#testimonials" class="text-gray-700 hover:text-primary-600 dark:text-gray-300 dark:hover:text-primary-400 px-3 py-2 rounded-lg text-sm font-semibold transition-all duration-300 hover:bg-primary-50 dark:hover:bg-gray-800">Testimoni</a>
                        <a href="#contact" class="bg-gradient-to-r from-primary-600 to-primary-700 hover:from-primary-700 hover:to-primary-800 text-white px-6 py-3 rounded-lg font-semibold transition-all duration-300 shadow-lg hover:shadow-xl transform hover:-translate-y-1">Hubungi Kami</a>
                    </div>
                </div>
                <div class="md:hidden">
                    <button class="mobile-menu-button text-gray-700 dark:text-gray-300 hover:text-primary-600 dark:hover:text-primary-400 p-2">
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                    </button>
                </div>
            </div>
            
            <!-- Mobile Menu -->
            <div class="mobile-menu hidden md:hidden">
                <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3 bg-primary-50 dark:bg-gray-900 rounded-lg shadow-lg mt-2">
                    <a href="#home" class="text-primary-600 block px-3 py-2 rounded-md text-base font-semibold">Beranda</a>
                    <a href="#activities" class="text-gray-700 dark:text-gray-300 hover:text-primary-600 dark:hover:text-primary-400 block px-3 py-2 rounded-md text-base font-semibold">Aktivitas</a>
                    <a href="#gallery" class="text-gray-700 dark:text-gray-300 hover:text-primary-600 dark:hover:text-primary-400 block px-3 py-2 rounded-md text-base font-semibold">Galeri</a>
                    <a href="#testimonials" class="text-gray-700 dark:text-gray-300 hover:text-primary-600 dark:hover:text-primary-400 block px-3 py-2 rounded-md text-base font-semibold">Testimoni</a>
                    <a href="#contact" class="bg-gradient-to-r from-primary-600 to-primary-700 text-white block px-3 py-2 rounded-md text-base font-semibold">Hubungi Kami</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="home" class="hero-section relative min-h-screen flex items-center justify-center overflow-hidden">
        <!-- Background Image -->
        <div class="hero-bg absolute inset-0">
            <img src="https://images.unsplash.com/photo-1441974231531-c6227db76b6e?q=80&w=2071&auto=format&fit=crop&ixlib=rb-4.0.3" alt="Nature Background" class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-gradient-to-br from-primary-600/40 via-primary-700/50 to-primary-800/60"></div>
            <!-- Floating Shapes -->
            <div class="absolute top-20 left-10 w-64 h-64 bg-white/10 rounded-full blur-3xl animate-pulse"></div>
            <div class="absolute bottom-20 right-10 w-80 h-80 bg-white/5 rounded-full blur-3xl animate-pulse" style="animation-delay: 2s;"></div>
            <div class="absolute top-1/2 left-1/3 w-40 h-40 bg-white/15 rounded-full blur-2xl animate-pulse" style="animation-delay: 1s;"></div>
        </div>

        <!-- Pattern Overlay -->
        <div class="absolute inset-0 opacity-20">
            <svg class="absolute inset-0 w-full h-full" viewBox="0 0 60 60" fill="none" xmlns="http://www.w3.org/2000/svg">
                <defs>
                    <pattern id="hero-pattern" x="0" y="0" width="60" height="60" patternUnits="userSpaceOnUse">
                        <path d="M30 0L35 20L55 15L40 30L55 45L35 40L30 60L25 40L5 45L20 30L5 15L25 20Z" fill="currentColor" class="text-primary-200/10 dark:text-primary-300/15"/>
                    </pattern>
                </defs>
                <rect width="100%" height="100%" fill="url(#hero-pattern)"/>
            </svg>
        </div>

        <div class="hero-content relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-32 text-center">
            <h1 class="text-5xl sm:text-7xl font-bold text-white dark:text-primary-50 mb-8 leading-tight drop-shadow-lg">
                <span class="typing-text block text-white/95">Selamat Datang di</span>
                <span class="bg-gradient-to-r from-primary-600 via-primary-700 to-primary-800 bg-clip-text text-transparent block mt-4">Quantum Landpark</span>
            </h1>
            <p class="text-xl sm:text-2xl text-white/90 dark:text-gray-200 mb-12 max-w-4xl mx-auto leading-relaxed drop-shadow-lg">
                Destinasi wisata alam terlengkap dengan pengalaman tak terlupakan. Nikmati glamping, agro wisata, petualangan ATV, rafting, dan berbagai aktivitas outdoor di tengah keindahan alam yang menakjubkan.
            </p>
            
            <!-- Hero Stats -->
            <div class="grid grid-cols-2 sm:grid-cols-4 gap-6 mb-12 max-w-2xl mx-auto">
                <div class="fade-in-section bg-primary-50/90 dark:bg-gray-800/80 backdrop-blur-sm rounded-xl p-4 shadow-lg border border-primary-100/20">
                    <div class="counter text-3xl font-bold text-primary-600 dark:text-primary-400" data-target="10">0</div>
                    <div class="text-sm text-gray-700 dark:text-gray-300 font-medium">Aktivitas</div>
                </div>
                <div class="fade-in-section bg-primary-50/90 dark:bg-gray-800/80 backdrop-blur-sm rounded-xl p-4 shadow-lg border border-primary-100/20">
                    <div class="counter text-3xl font-bold text-primary-600 dark:text-primary-400" data-target="50">0</div>
                    <div class="text-sm text-gray-700 dark:text-gray-300 font-medium">Hektar Area</div>
                </div>
                <div class="fade-in-section bg-primary-50/90 dark:bg-gray-800/80 backdrop-blur-sm rounded-xl p-4 shadow-lg border border-primary-100/20">
                    <div class="counter text-3xl font-bold text-primary-600 dark:text-primary-400" data-target="365">0</div>
                    <div class="text-sm text-gray-700 dark:text-gray-300 font-medium">Hari Buka</div>
                </div>
                <div class="fade-in-section bg-primary-50/90 dark:bg-gray-800/80 backdrop-blur-sm rounded-xl p-4 shadow-lg border border-primary-100/20">
                    <div class="counter text-3xl font-bold text-primary-600 dark:text-primary-400" data-target="1000">0</div>
                    <div class="text-sm text-gray-700 dark:text-gray-300 font-medium">+ Pengunjung</div>
                </div>
            </div>
            
            <div class="flex flex-col sm:flex-row gap-6 justify-center items-center">
                <a href="#activities" class="group bg-gradient-to-r from-primary-600 to-primary-700 hover:from-primary-700 hover:to-primary-800 text-white px-10 py-5 rounded-xl font-bold text-lg shadow-2xl hover:shadow-3xl transform hover:-translate-y-2 transition-all duration-300">
                    Jelajahi Aktivitas
                    <svg class="inline-block ml-3 w-6 h-6 group-hover:translate-x-2 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                    </svg>
                </a>
                <a href="#gallery" class="group border-3 border-white text-white hover:bg-primary-50 hover:text-primary-600 px-10 py-5 rounded-xl font-bold text-lg transition-all duration-300 bg-white/10 backdrop-blur-sm shadow-lg hover:shadow-xl">
                    Lihat Galeri
                    <svg class="inline-block ml-3 w-6 h-6 group-hover:scale-110 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                    </svg>
                </a>
            </div>
        </div>

        <!-- Scroll Indicator -->
        <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 animate-bounce">
            <div class="w-6 h-10 border-2 border-white rounded-full flex justify-center">
                <div class="w-1 h-3 bg-white rounded-full mt-2 animate-pulse"></div>
            </div>
        </div>
    </section>

    <!-- Activities Section -->
    <section id="activities" class="fade-in-section py-24 bg-gradient-to-br from-primary-50 via-primary-100 to-primary-50 dark:from-gray-900 dark:via-gray-800 dark:to-gray-900 relative">
        <!-- Wave Transition from Hero -->
        <div class="absolute top-0 left-0 w-full overflow-hidden">
            <svg class="relative block w-full h-16" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path d="M985.66,92.83C906.67,72,823.78,31,743.84,14.19c-82.26-17.34-168.06-16.33-250.45.39-57.84,11.73-114,31.07-172,41.86A600.21,600.21,0,0,1,0,27.35V120H1200V95.8C1132.19,118.92,1055.71,111.31,985.66,92.83Z" class="fill-primary-600/60"></path>
            </svg>
        </div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-20">
                <h2 class="text-4xl sm:text-5xl font-bold text-gray-900 dark:text-white mb-6">
                    Aktivitas & <span class="bg-gradient-to-r from-primary-600 to-primary-700 bg-clip-text text-transparent">Petualangan</span>
                </h2>
                <p class="text-xl text-gray-600 dark:text-gray-300 max-w-3xl mx-auto leading-relaxed">
                    Nikmati beragam aktivitas seru dan menantang yang dirancang untuk memberikan pengalaman tak terlupakan bagi seluruh keluarga
                </p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-8">
                <!-- Glamping -->
                <div class="activity-card group bg-primary-50 dark:bg-gray-800 rounded-2xl shadow-xl hover:shadow-2xl border border-primary-200 dark:border-primary-900/20 overflow-hidden transition-all duration-300">
                    <div class="relative h-48 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1504851149312-7a075b496cc5?q=80&w=2069&auto=format&fit=crop&ixlib=rb-4.0.3" alt="Glamping" class="activity-image w-full h-full object-cover transition-transform duration-300 group-hover:scale-110">
                        <div class="absolute inset-0 bg-gradient-to-t from-primary-600/60 to-transparent">
                            <div class="activity-icon absolute bottom-4 left-4 text-white">
                                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 21l1.65-3.8a9 9 0 01.7-1.1L12 7l6.65 9.1c.25.34.5.72.7 1.1L21 21H3z"/>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 1v6"/>
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-3">Glamping</h3>
                        <p class="text-gray-600 dark:text-gray-300 mb-4 leading-relaxed">Kemping mewah di tengah alam dengan fasilitas modern dan pemandangan yang menakjubkan</p>
                        <div class="flex items-center text-primary-600 dark:text-primary-400 font-semibold text-sm">
                            <span>Pelajari Lebih Lanjut</span>
                            <svg class="w-4 h-4 ml-2 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                            </svg>
                        </div>
                    </div>
                </div>

                <!-- Agro Wisata -->
                <div class="activity-card group bg-primary-50 dark:bg-gray-800 rounded-2xl shadow-xl hover:shadow-2xl border border-primary-200 dark:border-primary-900/20 overflow-hidden transition-all duration-300">
                    <div class="relative h-48 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1506905925346-21bda4d32df4?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3" alt="Agro Wisata" class="activity-image w-full h-full object-cover transition-transform duration-300 group-hover:scale-110">
                        <div class="absolute inset-0 bg-gradient-to-t from-green-500/60 to-transparent">
                            <div class="activity-icon absolute bottom-4 left-4 text-white">
                                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z"/>
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-3">Agro Wisata</h3>
                        <p class="text-gray-600 dark:text-gray-300 mb-4 leading-relaxed">Petik buah jambu dan mangga langsung dari pohonnya, rasakan kesegaran alami</p>
                        <div class="flex items-center text-primary-600 dark:text-primary-400 font-semibold text-sm">
                            <span>Pelajari Lebih Lanjut</span>
                            <svg class="w-4 h-4 ml-2 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                            </svg>
                        </div>
                    </div>
                </div>

                <!-- Wisata Peternakan -->
                <div class="activity-card group bg-primary-50 dark:bg-gray-800 rounded-2xl shadow-xl hover:shadow-2xl border border-primary-200 dark:border-primary-900/20 overflow-hidden transition-all duration-300">
                    <div class="relative h-48 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1518521669107-23a8825c4e26?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3" alt="Farm Tourism" class="activity-image w-full h-full object-cover transition-transform duration-300 group-hover:scale-110">
                        <div class="absolute inset-0 bg-gradient-to-t from-primary-600/60 to-transparent">
                            <div class="activity-icon absolute bottom-4 left-4 text-white">
                                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/>
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-3">Wisata Peternakan</h3>
                        <p class="text-gray-600 dark:text-gray-300 mb-4 leading-relaxed">Berinteraksi dengan ayam petelur, merak, dan berbagai burung kecil lainnya</p>
                        <div class="flex items-center text-primary-600 dark:text-primary-400 font-semibold text-sm">
                            <span>Pelajari Lebih Lanjut</span>
                            <svg class="w-4 h-4 ml-2 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                            </svg>
                        </div>
                    </div>
                </div>

                <!-- Camping -->
                <div class="activity-card group bg-primary-50 dark:bg-gray-800 rounded-2xl shadow-xl hover:shadow-2xl border border-primary-200 dark:border-primary-900/20 overflow-hidden transition-all duration-300">
                    <div class="relative h-48 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1504280390367-361c6d9f38f4?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3" alt="Camping" class="activity-image w-full h-full object-cover transition-transform duration-300 group-hover:scale-110">
                        <div class="absolute inset-0 bg-gradient-to-t from-primary-600/60 to-transparent">
                            <div class="activity-icon absolute bottom-4 left-4 text-white">
                                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-3">Perkemahan</h3>
                        <p class="text-gray-600 dark:text-gray-300 mb-4 leading-relaxed">Area perkemahan luas dengan fasilitas lengkap untuk pengalaman outdoor yang seru</p>
                        <div class="flex items-center text-primary-600 dark:text-primary-400 font-semibold text-sm">
                            <span>Pelajari Lebih Lanjut</span>
                            <svg class="w-4 h-4 ml-2 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                            </svg>
                        </div>
                    </div>
                </div>

                <!-- ATV & Motor Cross -->
                <div class="activity-card group bg-primary-50 dark:bg-gray-800 rounded-2xl shadow-xl hover:shadow-2xl border border-primary-200 dark:border-primary-900/20 overflow-hidden transition-all duration-300">
                    <div class="relative h-48 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1544966503-7cc5ac882d5f?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3" alt="ATV Adventure" class="activity-image w-full h-full object-cover transition-transform duration-300 group-hover:scale-110">
                        <div class="absolute inset-0 bg-gradient-to-t from-orange-500/60 to-transparent">
                            <div class="activity-icon absolute bottom-4 left-4 text-white">
                                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-3">ATV & Motor Cross</h3>
                        <p class="text-gray-600 dark:text-gray-300 mb-4 leading-relaxed">Pacu adrenalin dengan petualangan ATV dan motor cross di medan yang menantang</p>
                        <div class="flex items-center text-primary-600 dark:text-primary-400 font-semibold text-sm">
                            <span>Pelajari Lebih Lanjut</span>
                            <svg class="w-4 h-4 ml-2 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                            </svg>
                        </div>
                    </div>
                </div>

                <!-- Cafe & Billiard -->
                <div class="activity-card group bg-primary-50 dark:bg-gray-800 rounded-2xl shadow-xl hover:shadow-2xl border border-primary-200 dark:border-primary-900/20 overflow-hidden transition-all duration-300">
                    <div class="relative h-48 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1571019613454-1cb2f99b2d8b?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3" alt="Cafe & Billiard" class="activity-image w-full h-full object-cover transition-transform duration-300 group-hover:scale-110">
                        <div class="absolute inset-0 bg-gradient-to-t from-primary-600/60 to-transparent">
                            <div class="activity-icon absolute bottom-4 left-4 text-white">
                                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 4V2a1 1 0 011-1h8a1 1 0 011 1v2m0 0V3a1 1 0 011 1v14a1 1 0 01-1 1H6a1 1 0 01-1-1V4a1 1 0 011-1V4"/>
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-3">Cafe & Billiard</h3>
                        <p class="text-gray-600 dark:text-gray-300 mb-4 leading-relaxed">Bersantai di cafe dengan menu lezat dan nikmati permainan billiard bersama teman</p>
                        <div class="flex items-center text-primary-600 dark:text-primary-400 font-semibold text-sm">
                            <span>Pelajari Lebih Lanjut</span>
                            <svg class="w-4 h-4 ml-2 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                            </svg>
                        </div>
                    </div>
                </div>

                <!-- Rafting -->
                <div class="activity-card group bg-primary-50 dark:bg-gray-800 rounded-2xl shadow-xl hover:shadow-2xl border border-primary-200 dark:border-primary-900/20 overflow-hidden transition-all duration-300">
                    <div class="relative h-48 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1544551763-46a013bb70d5?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3" alt="Rafting Adventure" class="activity-image w-full h-full object-cover transition-transform duration-300 group-hover:scale-110">
                        <div class="absolute inset-0 bg-gradient-to-t from-blue-500/60 to-transparent">
                            <div class="activity-icon absolute bottom-4 left-4 text-white">
                                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 14v3m4-3v3m4-3v3M3 21h18M3 10h18M13 3L8 7l-2-1 1.5-3L6 2l2.5 1L10 2l-1.5 1L10 4.5z"/>
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-3">Rafting</h3>
                        <p class="text-gray-600 dark:text-gray-300 mb-4 leading-relaxed">Petualangan arung jeram yang menantang di sungai dengan pemandu berpengalaman</p>
                        <div class="flex items-center text-primary-600 dark:text-primary-400 font-semibold text-sm">
                            <span>Pelajari Lebih Lanjut</span>
                            <svg class="w-4 h-4 ml-2 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                            </svg>
                        </div>
                    </div>
                </div>

                <!-- Riverside Cafe -->
                <div class="activity-card group bg-primary-50 dark:bg-gray-800 rounded-2xl shadow-xl hover:shadow-2xl border border-primary-200 dark:border-primary-900/20 overflow-hidden transition-all duration-300">
                    <div class="relative h-48 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1551632811-561732d1e306?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3" alt="Riverside Cafe" class="activity-image w-full h-full object-cover transition-transform duration-300 group-hover:scale-110">
                        <div class="absolute inset-0 bg-gradient-to-t from-primary-600/60 to-transparent">
                            <div class="activity-icon absolute bottom-4 left-4 text-white">
                                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"/>
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-3">Riverside Cafe</h3>
                        <p class="text-gray-600 dark:text-gray-300 mb-4 leading-relaxed">Nikmati makanan dan minuman dengan suasana tepi sungai yang menenangkan</p>
                        <div class="flex items-center text-primary-600 dark:text-primary-400 font-semibold text-sm">
                            <span>Pelajari Lebih Lanjut</span>
                            <svg class="w-4 h-4 ml-2 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Gallery Section -->
    <section id="gallery" class="fade-in-section py-24 bg-gradient-to-br from-primary-50 via-primary-100 to-primary-50 dark:bg-gray-900 relative">
        <!-- Wave Transition -->
        <div class="absolute top-0 left-0 w-full overflow-hidden">
            <svg class="relative block w-full h-16" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path d="M0,0V46.29c47.79,22.2,103.59,32.17,158,28,70.36-5.37,136.33-33.31,206.8-37.5C438.64,32.43,512.34,53.67,583,72.05c69.27,18,138.3,24.88,209.4,13.08,36.15-6,69.85-17.84,104.45-29.34C989.49,25,1113-14.29,1200,52.47V0Z" opacity=".25" class="fill-primary-300"></path>
                <path d="M0,0V15.81C13,36.92,27.64,56.86,47.69,72.05,99.41,111.27,165,111,224.58,91.58c31.15-10.15,60.09-26.07,89.67-39.8,40.92-19,84.73-46,130.83-49.67,36.26-2.85,70.9,9.42,98.6,31.56,31.77,25.39,62.32,62,103.63,73,40.44,10.79,81.35-6.69,119.13-24.28s75.16-39,116.92-43.05c59.73-5.85,113.28,22.88,168.9,38.84,30.2,8.66,59,6.17,87.09-7.5,22.43-10.89,48-26.93,60.65-49.24V0Z" opacity=".5" class="fill-primary-400"></path>
                <path d="M0,0V5.63C149.93,59,314.09,71.32,475.83,42.57c43-7.64,84.23-20.12,127.61-26.46,59-8.63,112.48,12.24,165.56,35.4C827.93,77.22,886,95.24,951.2,90c86.53-7,172.46-45.71,248.8-84.81V0Z" class="fill-primary-200"></path>
            </svg>
        </div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-4xl sm:text-5xl font-bold text-gray-900 dark:text-white mb-6">
                    Galeri <span class="bg-gradient-to-r from-primary-600 to-primary-700 bg-clip-text text-transparent">Foto</span>
                </h2>
                <p class="text-xl text-gray-600 dark:text-gray-300 max-w-3xl mx-auto">
                    Lihat keindahan dan keseruan aktivitas di Quantum Landpark melalui koleksi foto terbaik kami
                </p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <div class="gallery-item relative group cursor-pointer overflow-hidden rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-300">
                    <div class="w-full h-64 relative">
                        <img src="https://images.unsplash.com/photo-1504851149312-7a075b496cc5?q=80&w=2069&auto=format&fit=crop&ixlib=rb-4.0.3" alt="Area Glamping" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent group-hover:from-black/40 transition-all duration-300">
                            <div class="absolute bottom-4 left-4">
                                <p class="text-white font-bold text-lg drop-shadow-lg">Area Glamping</p>
                                <p class="text-white/80 text-sm">Kemping mewah di alam</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="gallery-item relative group cursor-pointer overflow-hidden rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-300">
                    <div class="w-full h-64 relative">
                        <img src="https://images.unsplash.com/photo-1506905925346-21bda4d32df4?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3" alt="Kebun Buah" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent group-hover:from-black/40 transition-all duration-300">
                            <div class="absolute bottom-4 left-4">
                                <p class="text-white font-bold text-lg drop-shadow-lg">Kebun Buah</p>
                                <p class="text-white/80 text-sm">Petik buah segar</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="gallery-item relative group cursor-pointer overflow-hidden rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-300">
                    <div class="w-full h-64 relative">
                        <img src="https://images.unsplash.com/photo-1544966503-7cc5ac882d5f?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3" alt="Track ATV" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent group-hover:from-black/40 transition-all duration-300">
                            <div class="absolute bottom-4 left-4">
                                <p class="text-white font-bold text-lg drop-shadow-lg">Track ATV</p>
                                <p class="text-white/80 text-sm">Petualangan seru</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="gallery-item relative group cursor-pointer overflow-hidden rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-300">
                    <div class="w-full h-64 relative">
                        <img src="https://images.unsplash.com/photo-1544551763-46a013bb70d5?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3" alt="Area Rafting" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent group-hover:from-black/40 transition-all duration-300">
                            <div class="absolute bottom-4 left-4">
                                <p class="text-white font-bold text-lg drop-shadow-lg">Area Rafting</p>
                                <p class="text-white/80 text-sm">Arung jeram seru</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="gallery-item relative group cursor-pointer overflow-hidden rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-300">
                    <div class="w-full h-64 relative">
                        <img src="https://images.unsplash.com/photo-1551632811-561732d1e306?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3" alt="Riverside Cafe" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent group-hover:from-black/40 transition-all duration-300">
                            <div class="absolute bottom-4 left-4">
                                <p class="text-white font-bold text-lg drop-shadow-lg">Riverside Cafe</p>
                                <p class="text-white/80 text-sm">Santai tepi sungai</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="gallery-item relative group cursor-pointer overflow-hidden rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-300">
                    <div class="w-full h-64 relative">
                        <img src="https://images.unsplash.com/photo-1506905925346-21bda4d32df4?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3" alt="Area Gazebo" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent group-hover:from-black/40 transition-all duration-300">
                            <div class="absolute bottom-4 left-4">
                                <p class="text-white font-bold text-lg drop-shadow-lg">Area Gazebo</p>
                                <p class="text-white/80 text-sm">Tempat bersantai</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section id="testimonials" class="fade-in-section py-24 bg-gradient-to-br from-primary-100 via-primary-50 to-primary-100 dark:from-gray-900 dark:via-gray-800 dark:to-gray-900 relative">
        <!-- Wave Transition -->
        <div class="absolute top-0 left-0 w-full overflow-hidden">
            <svg class="relative block w-full h-16" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path d="M985.66,92.83C906.67,72,823.78,31,743.84,14.19c-82.26-17.34-168.06-16.33-250.45.39-57.84,11.73-114,31.07-172,41.86A600.21,600.21,0,0,1,0,27.35V120H1200V95.8C1132.19,118.92,1055.71,111.31,985.66,92.83Z" class="fill-primary-200"></path>
            </svg>
        </div>
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-4xl sm:text-5xl font-bold text-gray-900 dark:text-white mb-6">
                    Testimoni <span class="bg-gradient-to-r from-primary-600 to-primary-700 bg-clip-text text-transparent">Pengunjung</span>
                </h2>
                <p class="text-xl text-gray-600 dark:text-gray-300 max-w-3xl mx-auto">
                    Dengar cerita seru dari para pengunjung yang telah merasakan pengalaman tak terlupakan di Quantum Landpark
                </p>
            </div>
            
            <!-- Modern Testimonials Grid -->
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 max-w-6xl mx-auto">
                <!-- Testimonial 1 -->
                <div class="testimonial-card bg-primary-50 dark:bg-gray-800 rounded-3xl p-8 shadow-xl border border-primary-200 dark:border-primary-900/20 transform transition-all duration-500 hover:-translate-y-2 hover:shadow-2xl">
                    <div class="flex items-center mb-6">
                        <img src="https://images.unsplash.com/photo-1494790108755-2616b612b786?q=80&w=150&auto=format&fit=crop&ixlib=rb-4.0.3" alt="Sari Dewi" class="w-16 h-16 rounded-full object-cover mr-4 border-4 border-primary-300">
                        <div>
                            <h4 class="font-bold text-xl text-gray-900 dark:text-white">Sari Dewi</h4>
                            <p class="text-primary-600 font-medium">Keluarga Jakarta</p>
                        </div>
                    </div>
                    <div class="flex text-yellow-400 mb-4">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                    </div>
                    <blockquote class="text-gray-700 dark:text-gray-300 leading-relaxed italic">
                        "Pengalaman glamping di Quantum Landpark luar biasa! Anak-anak sangat senang bisa petik buah langsung dari pohonnya dan bermain dengan hewan-hewan lucu."
                    </blockquote>
                </div>

                <!-- Testimonial 2 -->
                <div class="testimonial-card bg-primary-50 dark:bg-gray-800 rounded-3xl p-8 shadow-xl border border-primary-200 dark:border-primary-900/20 transform transition-all duration-500 hover:-translate-y-2 hover:shadow-2xl">
                    <div class="flex items-center mb-6">
                        <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?q=80&w=150&auto=format&fit=crop&ixlib=rb-4.0.3" alt="Ahmad Rizki" class="w-16 h-16 rounded-full object-cover mr-4 border-4 border-primary-300">
                        <div>
                            <h4 class="font-bold text-xl text-gray-900 dark:text-white">Ahmad Rizki</h4>
                            <p class="text-primary-600 font-medium">Pecinta Alam</p>
                        </div>
                    </div>
                    <div class="flex text-yellow-400 mb-4">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                    </div>
                    <blockquote class="text-gray-700 dark:text-gray-300 leading-relaxed italic">
                        "ATV dan motor cross di sini seru banget! Tracknya menantang tapi aman. Setelah itu bisa santai di riverside cafe sambil menikmati pemandangan."
                    </blockquote>
                </div>

                <!-- Testimonial 3 -->
                <div class="testimonial-card bg-primary-50 dark:bg-gray-800 rounded-3xl p-8 shadow-xl border border-primary-200 dark:border-primary-900/20 transform transition-all duration-500 hover:-translate-y-2 hover:shadow-2xl">
                    <div class="flex items-center mb-6">
                        <img src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?q=80&w=150&auto=format&fit=crop&ixlib=rb-4.0.3" alt="Dina Puspita" class="w-16 h-16 rounded-full object-cover mr-4 border-4 border-primary-300">
                        <div>
                            <h4 class="font-bold text-xl text-gray-900 dark:text-white">Dina Puspita</h4>
                            <p class="text-primary-600 font-medium">Team Building</p>
                        </div>
                    </div>
                    <div class="flex text-yellow-400 mb-4">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                    </div>
                    <blockquote class="text-gray-700 dark:text-gray-300 leading-relaxed italic">
                        "Quantum Landpark pilihan tepat untuk kegiatan team building kantor kami. Area outdoor yang luas, aktivitas yang beragam, dan fasilitas yang memadai."
                    </blockquote>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact CTA Section -->
    <section id="contact" class="fade-in-section py-24 bg-gradient-to-r from-primary-600 via-primary-700 to-primary-800 dark:from-primary-700 dark:via-primary-800 dark:to-primary-900 relative overflow-hidden">
        <!-- Wave Transition -->
        <div class="absolute top-0 left-0 w-full overflow-hidden">
            <svg class="relative block w-full h-16" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path d="M0,0V46.29c47.79,22.2,103.59,32.17,158,28,70.36-5.37,136.33-33.31,206.8-37.5C438.64,32.43,512.34,53.67,583,72.05c69.27,18,138.3,24.88,209.4,13.08,36.15-6,69.85-17.84,104.45-29.34C989.49,25,1113-14.29,1200,52.47V0Z" opacity=".25" class="fill-white/20"></path>
                <path d="M0,0V15.81C13,36.92,27.64,56.86,47.69,72.05,99.41,111.27,165,111,224.58,91.58c31.15-10.15,60.09-26.07,89.67-39.8,40.92-19,84.73-46,130.83-49.67,36.26-2.85,70.9,9.42,98.6,31.56,31.77,25.39,62.32,62,103.63,73,40.44,10.79,81.35-6.69,119.13-24.28s75.16-39,116.92-43.05c59.73-5.85,113.28,22.88,168.9,38.84,30.2,8.66,59,6.17,87.09-7.5,22.43-10.89,48-26.93,60.65-49.24V0Z" opacity=".5" class="fill-white/10"></path>
                <path d="M0,0V5.63C149.93,59,314.09,71.32,475.83,42.57c43-7.64,84.23-20.12,127.61-26.46,59-8.63,112.48,12.24,165.56,35.4C827.93,77.22,886,95.24,951.2,90c86.53-7,172.46-45.71,248.8-84.81V0Z" class="fill-white/5"></path>
            </svg>
        </div>
        <!-- Background Pattern -->
        <div class="absolute inset-0 opacity-20">
            <svg class="absolute inset-0 w-full h-full" viewBox="0 0 60 60" fill="none" xmlns="http://www.w3.org/2000/svg">
                <defs>
                    <pattern id="contact-pattern" x="0" y="0" width="60" height="60" patternUnits="userSpaceOnUse">
                        <circle cx="30" cy="30" r="1.5" fill="currentColor" class="text-white/20"/>
                        <circle cx="0" cy="30" r="1.5" fill="currentColor" class="text-white/10"/>
                        <circle cx="60" cy="30" r="1.5" fill="currentColor" class="text-white/10"/>
                        <circle cx="30" cy="0" r="1.5" fill="currentColor" class="text-white/10"/>
                        <circle cx="30" cy="60" r="1.5" fill="currentColor" class="text-white/10"/>
                    </pattern>
                </defs>
                <rect width="100%" height="100%" fill="url(#contact-pattern)"/>
            </svg>
        </div>
        
        <div class="relative max-w-6xl mx-auto text-center px-4 sm:px-6 lg:px-8">
            <h2 class="text-4xl sm:text-6xl font-bold text-white mb-8 leading-tight">
                Siap Untuk
                <span class="block text-primary-100">Petualangan Baru?</span>
            </h2>
            <p class="text-xl sm:text-2xl text-primary-100 mb-12 max-w-4xl mx-auto leading-relaxed">
                Jangan lewatkan kesempatan untuk merasakan pengalaman tak terlupakan di Quantum Landpark. Hubungi kami sekarang untuk informasi dan reservasi!
            </p>
            
            <!-- Contact Info -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-12 max-w-4xl mx-auto">
                <div class="bg-white/10 backdrop-blur-sm rounded-2xl p-6 border border-white/20">
                    <div class="w-16 h-16 bg-white/20 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                        </svg>
                    </div>
                    <h4 class="text-lg font-bold text-white mb-2">Telepon</h4>
                    <p class="text-primary-100">+62 123 456 789</p>
                </div>
                
                <div class="bg-white/10 backdrop-blur-sm rounded-2xl p-6 border border-white/20">
                    <div class="w-16 h-16 bg-white/20 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                        </svg>
                    </div>
                    <h4 class="text-lg font-bold text-white mb-2">Email</h4>
                    <p class="text-primary-100">info@quantumlandpark.com</p>
                </div>
                
                <div class="bg-white/10 backdrop-blur-sm rounded-2xl p-6 border border-white/20">
                    <div class="w-16 h-16 bg-white/20 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                        </svg>
                    </div>
                    <h4 class="text-lg font-bold text-white mb-2">Lokasi</h4>
                    <p class="text-primary-100">Bogor, Jawa Barat</p>
                </div>
            </div>
            
            <div class="flex flex-col sm:flex-row gap-6 justify-center items-center">
                <a href="tel:+62123456789" class="group bg-primary-50 text-primary-800 hover:bg-primary-100 px-10 py-5 rounded-xl font-bold text-lg shadow-2xl hover:shadow-3xl transform hover:-translate-y-2 transition-all duration-300">
                    <svg class="inline-block mr-3 w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                    </svg>
                    Hubungi Sekarang
                </a>
                <a href="https://wa.me/62123456789" class="group border-3 border-white text-white hover:bg-primary-50 hover:text-primary-800 px-10 py-5 rounded-xl font-bold text-lg transition-all duration-300 bg-white/10 backdrop-blur-sm">
                    <svg class="inline-block mr-3 w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.890-5.335 11.893-11.893A11.821 11.821 0 0020.885 3.515"/>
                    </svg>
                    WhatsApp Kami
                </a>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-900 dark:bg-black text-white py-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12">
                <div class="lg:col-span-2">
                    <div class="flex items-center mb-6">
                        <div class="h-14 w-14 bg-gradient-to-r from-primary-600 to-primary-800 rounded-xl flex items-center justify-center mr-4 shadow-lg">
                            <span class="text-white font-bold text-2xl">Q</span>
                        </div>
                        <div>
                            <span class="text-2xl font-bold">Quantum</span>
                            <span class="text-primary-600 text-2xl font-bold">Landpark</span>
                        </div>
                    </div>
                    <p class="text-gray-400 mb-8 max-w-lg leading-relaxed text-lg">
                        Destinasi wisata alam terlengkap yang menghadirkan pengalaman tak terlupakan di tengah keindahan alam yang menakjubkan. Nikmati berbagai aktivitas seru untuk seluruh keluarga.
                    </p>
                    <div class="flex space-x-4">
                        <a href="#" class="w-12 h-12 bg-primary-600 hover:bg-primary-700 rounded-xl flex items-center justify-center transition-all duration-300 hover:scale-110 shadow-lg">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"/>
                            </svg>
                        </a>
                        <a href="#" class="w-12 h-12 bg-primary-600 hover:bg-primary-700 rounded-xl flex items-center justify-center transition-all duration-300 hover:scale-110 shadow-lg">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M22.46 6c-.77.35-1.6.58-2.46.69.88-.53 1.56-1.37 1.88-2.38-.83.5-1.75.85-2.72 1.05C18.37 4.5 17.26 4 16 4c-2.35 0-4.27 1.92-4.27 4.29 0 .34.04.67.11.98C8.28 9.09 5.11 7.38 3 4.79c-.37.63-.58 1.37-.58 2.15 0 1.49.75 2.81 1.91 3.56-.71 0-1.37-.2-1.95-.5v.03c0 2.08 1.48 3.82 3.44 4.21a4.22 4.22 0 0 1-1.93.07 4.28 4.28 0 0 0 4 2.98 8.521 8.521 0 0 1-5.33 1.84c-.34 0-.68-.02-1.02-.06C3.44 20.29 5.7 21 8.12 21 16 21 20.33 14.46 20.33 8.79c0-.19 0-.37-.01-.56.84-.6 1.56-1.36 2.14-2.23z"/>
                            </svg>
                        </a>
                        <a href="#" class="w-12 h-12 bg-primary-600 hover:bg-primary-700 rounded-xl flex items-center justify-center transition-all duration-300 hover:scale-110 shadow-lg">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12.017 0C5.396 0 .029 5.367.029 11.987c0 5.079 3.158 9.417 7.618 11.174-.105-.949-.199-2.403.041-3.439.219-.937 1.406-5.957 1.406-5.957s-.359-.72-.359-1.781c0-1.663.967-2.911 2.168-2.911 1.024 0 1.518.769 1.518 1.688 0 1.029-.653 2.567-.992 3.992-.285 1.193.6 2.165 1.775 2.165 2.128 0 3.768-2.245 3.768-5.487 0-2.861-2.063-4.869-5.008-4.869-3.41 0-5.409 2.562-5.409 5.199 0 1.033.394 2.143.889 2.741.097.118.112.222.085.343-.09.375-.293 1.199-.334 1.363-.053.225-.172.271-.402.165-1.495-.69-2.433-2.878-2.433-4.646 0-3.776 2.748-7.252 7.92-7.252 4.158 0 7.392 2.967 7.392 6.923 0 4.135-2.607 7.462-6.233 7.462-1.214 0-2.357-.629-2.75-1.378l-.748 2.853c-.271 1.043-1.002 2.35-1.492 3.146C9.57 23.812 10.763 24.009 12.017 24.009c6.624 0 11.99-5.367 11.99-11.988C24.007 5.367 18.641.001 12.017.001z"/>
                            </svg>
                        </a>
                        <a href="#" class="w-12 h-12 bg-primary-600 hover:bg-primary-700 rounded-xl flex items-center justify-center transition-all duration-300 hover:scale-110 shadow-lg">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
                            </svg>
                        </a>
                    </div>
                </div>
                
                <div>
                    <h3 class="text-xl font-bold mb-6 text-primary-300">Aktivitas</h3>
                    <ul class="space-y-4">
                        <li><a href="#activities" class="text-gray-400 hover:text-primary-300 transition-colors text-lg">Glamping</a></li>
                        <li><a href="#activities" class="text-gray-400 hover:text-primary-300 transition-colors text-lg">Agro Wisata</a></li>
                        <li><a href="#activities" class="text-gray-400 hover:text-primary-300 transition-colors text-lg">ATV & Motor Cross</a></li>
                        <li><a href="#activities" class="text-gray-400 hover:text-primary-300 transition-colors text-lg">Rafting</a></li>
                        <li><a href="#activities" class="text-gray-400 hover:text-primary-300 transition-colors text-lg">Riverside Cafe</a></li>
                    </ul>
                </div>
                
                <div>
                    <h3 class="text-xl font-bold mb-6 text-primary-300">Informasi</h3>
                    <ul class="space-y-4">
                        <li><a href="#home" class="text-gray-400 hover:text-primary-300 transition-colors text-lg">Tentang Kami</a></li>
                        <li><a href="#gallery" class="text-gray-400 hover:text-primary-300 transition-colors text-lg">Galeri</a></li>
                        <li><a href="#testimonials" class="text-gray-400 hover:text-primary-300 transition-colors text-lg">Testimoni</a></li>
                        <li><a href="#contact" class="text-gray-400 hover:text-primary-300 transition-colors text-lg">Kontak</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-primary-300 transition-colors text-lg">Syarat & Ketentuan</a></li>
                    </ul>
                </div>
            </div>
            
            <div class="border-t border-gray-800 mt-16 pt-8 text-center">
                <p class="text-gray-400 text-lg">
                    &copy; {{ date('Y') }} Quantum Landpark. Seluruh hak cipta dilindungi. 
                    <span class="text-primary-300">❤️</span> Dibuat dengan Laravel TALL Stack.
                </p>
            </div>
        </div>
    </footer>

    <!-- Lightbox Modal -->
    <div class="lightbox fixed inset-0 bg-black/90 backdrop-blur-sm flex items-center justify-center z-50 hidden">
        <div class="relative max-w-4xl max-h-screen p-4">
            <img class="lightbox-image max-w-full max-h-full object-contain rounded-lg shadow-2xl" src="" alt="Gallery Image">
            <button class="lightbox-close absolute top-4 right-4 text-white hover:text-primary-400 transition-colors">
                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                </svg>
            </button>
        </div>
    </div>
@endsection