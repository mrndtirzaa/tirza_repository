<?php
require_once 'includes/config.php';
require_once 'includes/dummy-data.php';
require_once 'includes/functions.php';

// Get jadwal minggu ini
$thisWeekSchedules = getThisWeekSchedules($schedules);
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= SITE_NAME ?> - <?= SITE_TAGLINE ?></title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        @keyframes gradient {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }
        
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        @keyframes slideIn {
            from {
                opacity: 0;
                transform: translateX(-20px);
            }
            to {
                opacity: 1;
                transform: translateX(0);
            }
        }
        
        @keyframes pulse {
            0%, 100% { opacity: 1; }
            50% { opacity: 0.7; }
        }
        
        .animate-gradient {
            background: linear-gradient(-45deg, #1E40AF, #7C3AED, #DC2626, #F59E0B);
            background-size: 400% 400%;
            animation: gradient 15s ease infinite;
        }
        
        .animate-fadeInUp {
            animation: fadeInUp 0.8s ease-out;
        }
        
        .animate-slideIn {
            animation: slideIn 0.6s ease-out;
        }
        
        .animate-pulse-slow {
            animation: pulse 3s ease-in-out infinite;
        }
        
        .hover-scale {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        
        .hover-scale:hover {
            transform: translateY(-8px) scale(1.02);
            box-shadow: 0 20px 40px rgba(0,0,0,0.15);
        }
        
        .text-shadow {
            text-shadow: 2px 2px 4px rgba(0,0,0,0.3);
        }
        
        .scroll-smooth {
            scroll-behavior: smooth;
        }
    </style>
</head>
<body class="bg-gray-50 scroll-smooth">
    <!-- Header/Navbar -->
    <nav class="bg-white shadow-lg fixed w-full top-0 z-50">
        <div class="container mx-auto px-6 py-4">
            <div class="flex justify-between items-center">
                <div class="flex items-center gap-3 animate-slideIn">
                    <i class="fas fa-church text-3xl text-blue-600"></i>
                    <div>
                        <h1 class="text-2xl font-bold text-gray-800"><?= SITE_NAME ?></h1>
                        <p class="text-xs text-gray-600"><?= SITE_TAGLINE ?></p>
                    </div>
                </div>
                
                <div class="hidden md:flex items-center gap-6">
                    <a href="index.php" class="text-blue-600 font-semibold hover:text-blue-800 transition">Beranda</a>
                    <a href="user/schedule.php" class="text-gray-700 hover:text-blue-600 transition">Jadwal</a>
                    <a href="user/calendar.php" class="text-gray-700 hover:text-blue-600 transition">Kalender</a>
                    <a href="user/events.php" class="text-gray-700 hover:text-blue-600 transition">Event</a>
                    <a href="about.php" class="text-gray-700 hover:text-blue-600 transition">Tentang</a>
                    <a href="contact.php" class="text-gray-700 hover:text-blue-600 transition">Kontak</a>
                    <a href="login.php" class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition">
                        <i class="fas fa-user-shield mr-2"></i>Admin
                    </a>
                </div>
                
                <!-- Mobile Menu Button -->
                <button id="mobileMenuBtn" class="md:hidden text-gray-700 text-2xl">
                    <i class="fas fa-bars"></i>
                </button>
            </div>
            
            <!-- Mobile Menu -->
            <div id="mobileMenu" class="hidden md:hidden mt-4 pb-4">
                <a href="index.php" class="block py-2 text-blue-600 font-semibold">Beranda</a>
                <a href="user/schedule.php" class="block py-2 text-gray-700 hover:text-blue-600">Jadwal</a>
                <a href="user/calendar.php" class="block py-2 text-gray-700 hover:text-blue-600">Kalender</a>
                <a href="user/events.php" class="block py-2 text-gray-700 hover:text-blue-600">Event</a>
                <a href="about.php" class="block py-2 text-gray-700 hover:text-blue-600">Tentang</a>
                <a href="contact.php" class="block py-2 text-gray-700 hover:text-blue-600">Kontak</a>
                <a href="login.php" class="block py-2 text-blue-600 font-semibold">
                    <i class="fas fa-user-shield mr-2"></i>Admin Login
                </a>
            </div>
        </div>
    </nav>
    
    <!-- Hero Section -->
    <section class="animate-gradient text-white pt-32 pb-20 px-6">
        <div class="container mx-auto text-center">
            <div class="animate-fadeInUp">
                <i class="fas fa-cross text-6xl mb-6 animate-pulse-slow"></i>
                <h1 class="text-5xl md:text-6xl font-bold mb-4 text-shadow"><?= CHURCH_NAME ?></h1>
                <p class="text-2xl md:text-3xl mb-8 text-shadow"><?= SITE_TAGLINE ?></p>
                <p class="text-lg mb-8 max-w-2xl mx-auto">
                    Temukan jadwal kegiatan gereja minggu ini dan ikuti setiap kegiatan untuk pertumbuhan rohani Anda
                </p>
                <div class="flex gap-4 justify-center flex-wrap">
                    <a href="user/schedule.php" class="bg-white text-blue-600 px-8 py-4 rounded-lg font-bold text-lg hover:bg-gray-100 hover-scale inline-block">
                        <i class="fas fa-calendar-alt mr-2"></i>Lihat Jadwal Lengkap
                    </a>
                    <a href="user/events.php" class="bg-yellow-500 text-white px-8 py-4 rounded-lg font-bold text-lg hover:bg-yellow-600 hover-scale inline-block">
                        <i class="fas fa-star mr-2"></i>Event Spesial
                    </a>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Quick Info Cards -->
    <section class="container mx-auto px-6 -mt-12 mb-16">
        <div class="grid md:grid-cols-3 gap-6">
            <div class="bg-white rounded-lg shadow-lg p-6 hover-scale animate-fadeInUp">
                <div class="text-blue-600 text-4xl mb-4">
                    <i class="fas fa-church"></i>
                </div>
                <h3 class="text-xl font-bold mb-2 text-gray-800">Ibadah Minggu</h3>
                <p class="text-gray-600 mb-2">Minggu, 06:00 & 08:30 WIB</p>
                <p class="text-sm text-gray-500">Gedung Utama - Lantai 1</p>
            </div>
            
            <div class="bg-white rounded-lg shadow-lg p-6 hover-scale animate-fadeInUp" style="animation-delay: 0.1s">
                <div class="text-purple-600 text-4xl mb-4">
                    <i class="fas fa-users"></i>
                </div>
                <h3 class="text-xl font-bold mb-2 text-gray-800">Persekutuan</h3>
                <p class="text-gray-600 mb-2">Setiap Hari</p>
                <p class="text-sm text-gray-500">Pemuda, Anak, Keluarga</p>
            </div>
            
            <div class="bg-white rounded-lg shadow-lg p-6 hover-scale animate-fadeInUp" style="animation-delay: 0.2s">
                <div class="text-green-600 text-4xl mb-4">
                    <i class="fas fa-hands-helping"></i>
                </div>
                <h3 class="text-xl font-bold mb-2 text-gray-800">Pelayanan</h3>
                <p class="text-gray-600 mb-2">Berbagai Bidang</p>
                <p class="text-sm text-gray-500">Bergabunglah bersama kami</p>
            </div>
        </div>
    </section>
    
    <!-- Jadwal Minggu Ini -->
    <section class="container mx-auto px-6 mb-20">
        <div class="text-center mb-12">
            <h2 class="text-4xl font-bold text-gray-800 mb-4">Jadwal Minggu Ini</h2>
            <p class="text-gray-600 text-lg">Ikuti kegiatan gereja dan bertumbuh bersama dalam iman</p>
        </div>
        
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
            <?php 
            $displaySchedules = array_slice($thisWeekSchedules, 0, 6);
            $delay = 0;
            foreach ($displaySchedules as $schedule): 
                $categoryClass = $categories[$schedule['category']];
            ?>
                <div class="bg-white rounded-lg shadow-lg overflow-hidden hover-scale animate-fadeInUp" style="animation-delay: <?= $delay ?>s">
                    <div class="bg-gradient-to-r from-blue-500 to-purple-600 p-4">
                        <div class="flex justify-between items-start">
                            <div>
                                <p class="text-white text-sm font-semibold"><?= $schedule['day'] ?></p>
                                <p class="text-white text-xs"><?= formatTanggalIndo($schedule['date']) ?></p>
                            </div>
                            <span class="<?= $categoryClass ?> px-3 py-1 rounded-full text-xs font-semibold">
                                <?= $schedule['category'] ?>
                            </span>
                        </div>
                    </div>
                    
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-gray-800 mb-3"><?= $schedule['title'] ?></h3>
                        <div class="space-y-2 text-sm text-gray-600 mb-4">
                            <div class="flex items-center gap-2">
                                <i class="fas fa-clock text-blue-600"></i>
                                <span><?= $schedule['time_start'] ?> - <?= $schedule['time_end'] ?> WIB</span>
                            </div>
                            <div class="flex items-center gap-2">
                                <i class="fas fa-map-marker-alt text-red-600"></i>
                                <span><?= $schedule['location'] ?></span>
                            </div>
                            <div class="flex items-center gap-2">
                                <i class="fas fa-user text-green-600"></i>
                                <span><?= $schedule['speaker'] ?></span>
                            </div>
                        </div>
                        <a href="user/schedule-detail.php?id=<?= $schedule['id'] ?>" class="block text-center bg-blue-600 text-white py-2 rounded-lg hover:bg-blue-700 transition">
                            Lihat Detail
                        </a>
                    </div>
                </div>
            <?php 
                $delay += 0.1;
            endforeach; 
            ?>
        </div>
        
        <div class="text-center mt-10">
            <a href="user/schedule.php" class="inline-block bg-blue-600 text-white px-8 py-3 rounded-lg font-bold hover:bg-blue-700 hover-scale">
                <i class="fas fa-calendar-week mr-2"></i>Lihat Semua Jadwal
            </a>
        </div>
    </section>
    
    <!-- Event Highlight -->
    <section class="bg-gradient-to-r from-purple-600 to-blue-600 text-white py-20 px-6 mb-20">
        <div class="container mx-auto">
            <div class="text-center mb-12">
                <h2 class="text-4xl font-bold mb-4">Event Spesial Mendatang</h2>
                <p class="text-lg">Jangan lewatkan event-event istimewa kami!</p>
            </div>
            
            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
                <?php foreach ($special_events as $event): ?>
                    <div class="bg-white text-gray-800 rounded-lg overflow-hidden shadow-xl hover-scale">
                        <img src="<?= $event['image'] ?>" alt="<?= $event['title'] ?>" class="w-full h-48 object-cover">
                        <div class="p-6">
                            <span class="bg-yellow-400 text-yellow-900 px-3 py-1 rounded-full text-xs font-semibold">
                                <?= $event['category'] ?>
                            </span>
                            <h3 class="text-lg font-bold mt-3 mb-2"><?= $event['title'] ?></h3>
                            <div class="text-sm text-gray-600 space-y-1 mb-4">
                                <p><i class="fas fa-calendar text-blue-600"></i> <?= formatTanggalIndo($event['date']) ?></p>
                                <p><i class="fas fa-clock text-green-600"></i> <?= $event['time'] ?> WIB</p>
                            </div>
                            <a href="user/events.php" class="text-blue-600 font-semibold hover:text-blue-800">
                                Selengkapnya <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
    
    <!-- CTA Section -->
    <section class="container mx-auto px-6 mb-20">
        <div class="bg-gradient-to-r from-blue-600 to-purple-600 rounded-2xl shadow-2xl p-12 text-white text-center">
            <h2 class="text-4xl font-bold mb-4">Bergabunglah Bersama Kami</h2>
            <p class="text-xl mb-8 max-w-2xl mx-auto">
                Mari bertumbuh bersama dalam iman, pengharapan, dan kasih. Jadilah bagian dari keluarga besar kami!
            </p>
            <div class="flex gap-4 justify-center flex-wrap">
                <a href="user/ministries.php" class="bg-white text-blue-600 px-8 py-3 rounded-lg font-bold hover:bg-gray-100 hover-scale">
                    <i class="fas fa-hand-holding-heart mr-2"></i>Ikut Pelayanan
                </a>
                <a href="contact.php" class="bg-yellow-500 text-white px-8 py-3 rounded-lg font-bold hover:bg-yellow-600 hover-scale">
                    <i class="fas fa-phone mr-2"></i>Hubungi Kami
                </a>
            </div>
        </div>
    </section>
    
    <!-- Footer -->
    <footer class="bg-gray-800 text-white py-12 px-6">
        <div class="container mx-auto">
            <div class="grid md:grid-cols-4 gap-8 mb-8">
                <div>
                    <h3 class="text-xl font-bold mb-4"><?= SITE_NAME ?></h3>
                    <p class="text-gray-400 text-sm mb-4"><?= CHURCH_NAME ?></p>
                    <p class="text-gray-400 text-sm"><?= SITE_TAGLINE ?></p>
                </div>
                
                <div>
                    <h3 class="text-lg font-bold mb-4">Menu</h3>
                    <ul class="space-y-2 text-sm">
                        <li><a href="index.php" class="text-gray-400 hover:text-white transition">Beranda</a></li>
                        <li><a href="user/schedule.php" class="text-gray-400 hover:text-white transition">Jadwal</a></li>
                        <li><a href="user/events.php" class="text-gray-400 hover:text-white transition">Event</a></li>
                        <li><a href="about.php" class="text-gray-400 hover:text-white transition">Tentang</a></li>
                    </ul>
                </div>
                
                <div>
                    <h3 class="text-lg font-bold mb-4">Kontak</h3>
                    <ul class="space-y-2 text-sm text-gray-400">
                        <li><i class="fas fa-map-marker-alt text-blue-400 mr-2"></i><?= CHURCH_ADDRESS ?></li>
                        <li><i class="fas fa-phone text-green-400 mr-2"></i><?= CHURCH_PHONE ?></li>
                        <li><i class="fas fa-envelope text-red-400 mr-2"></i><?= CHURCH_EMAIL ?></li>
                    </ul>
                </div>
                
                <div>
                    <h3 class="text-lg font-bold mb-4">Sosial Media</h3>
                    <div class="flex gap-3">
                        <a href="#" class="bg-blue-600 w-10 h-10 rounded-full flex items-center justify-center hover:bg-blue-700 transition">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" class="bg-pink-600 w-10 h-10 rounded-full flex items-center justify-center hover:bg-pink-700 transition">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="#" class="bg-red-600 w-10 h-10 rounded-full flex items-center justify-center hover:bg-red-700 transition">
                            <i class="fab fa-youtube"></i>
                        </a>
                        <a href="#" class="bg-green-600 w-10 h-10 rounded-full flex items-center justify-center hover:bg-green-700 transition">
                            <i class="fab fa-whatsapp"></i>
                        </a>
                    </div>
                </div>
            </div>
            
            <div class="border-t border-gray-700 pt-8 text-center text-sm text-gray-400">
                <p>&copy; 2025 <?= CHURCH_NAME ?>. All Rights Reserved.</p>
                <p class="mt-2">Dibuat dengan <i class="fas fa-heart text-red-500"></i> untuk kemuliaan Tuhan</p>
            </div>
        </div>
    </footer>
    
    <script>
        // Mobile Menu Toggle
        document.getElementById('mobileMenuBtn').addEventListener('click', function() {
            const menu = document.getElementById('mobileMenu');
            menu.classList.toggle('hidden');
        });
        
        // Smooth Scroll
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({ behavior: 'smooth' });
                }
            });
        });
    </script>
</body>
</html>
