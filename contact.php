<?php
require_once 'includes/config.php';

$message = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Simulasi kirim pesan (dummy)
    $message = 'Terima kasih! Pesan Anda telah diterima. Tim kami akan segera menghubungi Anda.';
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kontak - <?= SITE_NAME ?></title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        @keyframes fadeInUp {
            from { opacity: 0; transform: translateY(30px); }
            to { opacity: 1; transform: translateY(0); }
        }
        .animate-fadeInUp {
            animation: fadeInUp 0.8s ease-out;
        }
    </style>
</head>
<body class="bg-gray-50">
    <!-- Header/Navbar -->
    <nav class="bg-white shadow-lg">
        <div class="container mx-auto px-6 py-4">
            <div class="flex justify-between items-center">
                <div class="flex items-center gap-3">
                    <i class="fas fa-church text-3xl text-blue-600"></i>
                    <div>
                        <h1 class="text-2xl font-bold text-gray-800"><?= SITE_NAME ?></h1>
                        <p class="text-xs text-gray-600"><?= SITE_TAGLINE ?></p>
                    </div>
                </div>
                
                <div class="hidden md:flex items-center gap-6">
                    <a href="index.php" class="text-gray-700 hover:text-blue-600 transition">Beranda</a>
                    <a href="user/schedule.php" class="text-gray-700 hover:text-blue-600 transition">Jadwal</a>
                    <a href="user/calendar.php" class="text-gray-700 hover:text-blue-600 transition">Kalender</a>
                    <a href="user/events.php" class="text-gray-700 hover:text-blue-600 transition">Event</a>
                    <a href="about.php" class="text-gray-700 hover:text-blue-600 transition">Tentang</a>
                    <a href="contact.php" class="text-blue-600 font-semibold">Kontak</a>
                </div>
                
                <a href="index.php" class="md:hidden text-gray-700 text-xl">
                    <i class="fas fa-home"></i>
                </a>
            </div>
        </div>
    </nav>
    
    <!-- Hero -->
    <section class="bg-gradient-to-r from-blue-600 to-purple-600 text-white py-20 px-6">
        <div class="container mx-auto text-center">
            <h1 class="text-5xl font-bold mb-4 animate-fadeInUp">Hubungi Kami</h1>
            <p class="text-xl max-w-2xl mx-auto animate-fadeInUp">Kami siap melayani dan menjawab pertanyaan Anda</p>
        </div>
    </section>
    
    <!-- Content -->
    <section class="container mx-auto px-6 py-16">
        <div class="grid md:grid-cols-2 gap-12">
            <!-- Contact Info -->
            <div class="animate-fadeInUp">
                <h2 class="text-3xl font-bold text-gray-800 mb-6">Informasi Kontak</h2>
                
                <div class="space-y-6 mb-8">
                    <div class="flex items-start gap-4">
                        <div class="bg-blue-100 w-14 h-14 rounded-lg flex items-center justify-center text-blue-600 text-2xl flex-shrink-0">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <div>
                            <h3 class="font-bold text-gray-800 mb-1">Alamat</h3>
                            <p class="text-gray-600"><?= CHURCH_ADDRESS ?></p>
                        </div>
                    </div>
                    
                    <div class="flex items-start gap-4">
                        <div class="bg-green-100 w-14 h-14 rounded-lg flex items-center justify-center text-green-600 text-2xl flex-shrink-0">
                            <i class="fas fa-phone"></i>
                        </div>
                        <div>
                            <h3 class="font-bold text-gray-800 mb-1">Telepon</h3>
                            <p class="text-gray-600"><?= CHURCH_PHONE ?></p>
                            <p class="text-gray-500 text-sm">Senin - Jumat: 09:00 - 17:00 WIB</p>
                        </div>
                    </div>
                    
                    <div class="flex items-start gap-4">
                        <div class="bg-red-100 w-14 h-14 rounded-lg flex items-center justify-center text-red-600 text-2xl flex-shrink-0">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <div>
                            <h3 class="font-bold text-gray-800 mb-1">Email</h3>
                            <p class="text-gray-600"><?= CHURCH_EMAIL ?></p>
                        </div>
                    </div>
                    
                    <div class="flex items-start gap-4">
                        <div class="bg-purple-100 w-14 h-14 rounded-lg flex items-center justify-center text-purple-600 text-2xl flex-shrink-0">
                            <i class="fas fa-clock"></i>
                        </div>
                        <div>
                            <h3 class="font-bold text-gray-800 mb-1">Jam Ibadah</h3>
                            <ul class="text-gray-600 space-y-1">
                                <li>• Minggu: 06:00 & 08:30 WIB</li>
                                <li>• Rabu: 19:00 WIB (Tengah Minggu)</li>
                                <li>• Jumat: 19:00 WIB (Youth Night)</li>
                            </ul>
                        </div>
                    </div>
                </div>
                
                <!-- Social Media -->
                <div class="bg-white rounded-lg shadow-lg p-6">
                    <h3 class="font-bold text-gray-800 mb-4">Ikuti Kami</h3>
                    <div class="flex gap-3">
                        <a href="#" class="bg-blue-600 w-12 h-12 rounded-full flex items-center justify-center text-white hover:bg-blue-700 transition transform hover:scale-110">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" class="bg-pink-600 w-12 h-12 rounded-full flex items-center justify-center text-white hover:bg-pink-700 transition transform hover:scale-110">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="#" class="bg-red-600 w-12 h-12 rounded-full flex items-center justify-center text-white hover:bg-red-700 transition transform hover:scale-110">
                            <i class="fab fa-youtube"></i>
                        </a>
                        <a href="#" class="bg-green-600 w-12 h-12 rounded-full flex items-center justify-center text-white hover:bg-green-700 transition transform hover:scale-110">
                            <i class="fab fa-whatsapp"></i>
                        </a>
                        <a href="#" class="bg-blue-400 w-12 h-12 rounded-full flex items-center justify-center text-white hover:bg-blue-500 transition transform hover:scale-110">
                            <i class="fab fa-twitter"></i>
                        </a>
                    </div>
                </div>
            </div>
            
            <!-- Contact Form -->
            <div class="bg-white rounded-lg shadow-lg p-8 animate-fadeInUp" style="animation-delay: 0.2s">
                <h2 class="text-2xl font-bold text-gray-800 mb-6">Kirim Pesan</h2>
                
                <?php if ($message): ?>
                    <div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4 mb-6 rounded">
                        <div class="flex items-center">
                            <i class="fas fa-check-circle mr-3"></i>
                            <p><?= $message ?></p>
                        </div>
                    </div>
                <?php endif; ?>
                
                <form method="POST" class="space-y-4">
                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-2">Nama Lengkap</label>
                        <input 
                            type="text" 
                            name="name" 
                            required
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent transition"
                            placeholder="Masukkan nama Anda"
                        >
                    </div>
                    
                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-2">Email</label>
                        <input 
                            type="email" 
                            name="email" 
                            required
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent transition"
                            placeholder="email@example.com"
                        >
                    </div>
                    
                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-2">No. Telepon</label>
                        <input 
                            type="tel" 
                            name="phone" 
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent transition"
                            placeholder="08xx-xxxx-xxxx"
                        >
                    </div>
                    
                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-2">Subjek</label>
                        <input 
                            type="text" 
                            name="subject" 
                            required
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent transition"
                            placeholder="Subjek pesan"
                        >
                    </div>
                    
                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-2">Pesan</label>
                        <textarea 
                            name="message" 
                            rows="5" 
                            required
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent transition"
                            placeholder="Tulis pesan Anda di sini..."
                        ></textarea>
                    </div>
                    
                    <button 
                        type="submit" 
                        class="w-full bg-blue-600 text-white py-3 rounded-lg font-bold hover:bg-blue-700 transition transform hover:scale-105"
                    >
                        <i class="fas fa-paper-plane mr-2"></i>Kirim Pesan
                    </button>
                </form>
            </div>
        </div>
        
        <!-- Map -->
        <div class="mt-16 bg-white rounded-lg shadow-lg overflow-hidden">
            <div class="bg-gradient-to-r from-blue-600 to-purple-600 text-white p-6">
                <h2 class="text-2xl font-bold">
                    <i class="fas fa-map-marked-alt mr-3"></i>Lokasi Kami
                </h2>
            </div>
            <div class="h-96 bg-gray-200 flex items-center justify-center">
                <div class="text-center text-gray-500">
                    <i class="fas fa-map-marker-alt text-6xl mb-4"></i>
                    <p class="text-lg">Peta Lokasi Gereja</p>
                    <p class="text-sm mt-2"><?= CHURCH_ADDRESS ?></p>
                    <a href="https://maps.google.com" target="_blank" class="inline-block mt-4 bg-blue-600 text-white px-6 py-2 rounded-lg hover:bg-blue-700 transition">
                        Buka di Google Maps
                    </a>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Footer -->
    <footer class="bg-gray-800 text-white py-12 px-6">
        <div class="container mx-auto text-center">
            <p class="mb-4">&copy; 2025 <?= CHURCH_NAME ?>. All Rights Reserved.</p>
            <div class="flex gap-4 justify-center">
                <a href="index.php" class="hover:text-blue-400 transition">Beranda</a>
                <a href="user/schedule.php" class="hover:text-blue-400 transition">Jadwal</a>
                <a href="about.php" class="hover:text-blue-400 transition">Tentang</a>
            </div>
        </div>
    </footer>
</body>
</html>
