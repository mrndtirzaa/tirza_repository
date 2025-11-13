<?php
require_once 'includes/config.php';
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tentang Kami - <?= SITE_NAME ?></title>
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
                    <a href="about.php" class="text-blue-600 font-semibold">Tentang</a>
                    <a href="contact.php" class="text-gray-700 hover:text-blue-600 transition">Kontak</a>
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
            <h1 class="text-5xl font-bold mb-4 animate-fadeInUp">Tentang Kami</h1>
            <p class="text-xl max-w-2xl mx-auto animate-fadeInUp"><?= CHURCH_NAME ?></p>
        </div>
    </section>
    
    <!-- Content -->
    <section class="container mx-auto px-6 py-16">
        <!-- Visi & Misi -->
        <div class="grid md:grid-cols-2 gap-8 mb-16">
            <div class="bg-white rounded-lg shadow-lg p-8 animate-fadeInUp">
                <div class="text-blue-600 text-4xl mb-4">
                    <i class="fas fa-eye"></i>
                </div>
                <h2 class="text-2xl font-bold text-gray-800 mb-4">Visi Kami</h2>
                <p class="text-gray-600 leading-relaxed">
                    Menjadi gereja yang penuh kasih, hidup dalam kebenaran firman Tuhan, dan menjadi berkat bagi bangsa dan dunia melalui pelayanan yang berkualitas dan transformatif.
                </p>
            </div>
            
            <div class="bg-white rounded-lg shadow-lg p-8 animate-fadeInUp" style="animation-delay: 0.1s">
                <div class="text-purple-600 text-4xl mb-4">
                    <i class="fas fa-bullseye"></i>
                </div>
                <h2 class="text-2xl font-bold text-gray-800 mb-4">Misi Kami</h2>
                <ul class="text-gray-600 leading-relaxed space-y-2">
                    <li><i class="fas fa-check-circle text-green-500 mr-2"></i>Memberitakan Injil Yesus Kristus</li>
                    <li><i class="fas fa-check-circle text-green-500 mr-2"></i>Membina jemaat dalam pengenalan akan Tuhan</li>
                    <li><i class="fas fa-check-circle text-green-500 mr-2"></i>Melayani dengan kasih dan kerendahan hati</li>
                    <li><i class="fas fa-check-circle text-green-500 mr-2"></i>Menjangkau jiwa-jiwa untuk Kristus</li>
                </ul>
            </div>
        </div>
        
        <!-- Sejarah -->
        <div class="bg-white rounded-lg shadow-lg p-8 mb-16 animate-fadeInUp">
            <h2 class="text-3xl font-bold text-gray-800 mb-6 text-center">
                <i class="fas fa-history text-yellow-600 mr-3"></i>Sejarah Gereja
            </h2>
            <div class="prose max-w-none text-gray-600 leading-relaxed">
                <p class="mb-4">
                    <strong><?= CHURCH_NAME ?></strong> didirikan pada tahun 1995 di Semarang, Jawa Tengah. Berawal dari sebuah persekutuan kecil yang terdiri dari 20 keluarga, gereja ini terus bertumbuh dan berkembang hingga saat ini memiliki lebih dari 2000 jemaat.
                </p>
                <p class="mb-4">
                    Dengan semangat melayani dan kasih Kristus, gereja kami telah menjadi tempat di mana ribuan jiwa mengalami transformasi hidup, pertumbuhan rohani, dan pemulihan. Kami percaya bahwa setiap orang berharga di mata Tuhan dan layak menerima kasih-Nya.
                </p>
                <p>
                    Hingga kini, gereja kami terus berkomitmen untuk menjadi wadah yang relevan bagi generasi masa kini, sambil tetap berpegang teguh pada kebenaran firman Tuhan yang tidak berubah.
                </p>
            </div>
        </div>
        
        <!-- Nilai-Nilai -->
        <div class="mb-16">
            <h2 class="text-3xl font-bold text-gray-800 mb-8 text-center">Nilai-Nilai Kami</h2>
            <div class="grid md:grid-cols-3 gap-6">
                <div class="bg-gradient-to-br from-blue-500 to-blue-600 text-white rounded-lg p-6 text-center">
                    <div class="text-5xl mb-4">❤️</div>
                    <h3 class="text-xl font-bold mb-2">Kasih</h3>
                    <p class="text-sm">Mengasihi Tuhan dan sesama dengan tulus</p>
                </div>
                
                <div class="bg-gradient-to-br from-purple-500 to-purple-600 text-white rounded-lg p-6 text-center">
                    <div class="text-5xl mb-4">✝️</div>
                    <h3 class="text-xl font-bold mb-2">Iman</h3>
                    <p class="text-sm">Hidup dalam iman kepada Yesus Kristus</p>
                </div>
                
                <div class="bg-gradient-to-br from-green-500 to-green-600 text-white rounded-lg p-6 text-center">
                    <div class="text-5xl mb-4">🤝</div>
                    <h3 class="text-xl font-bold mb-2">Pelayanan</h3>
                    <p class="text-sm">Melayani dengan setia dan kerendahan hati</p>
                </div>
                
                <div class="bg-gradient-to-br from-yellow-500 to-yellow-600 text-white rounded-lg p-6 text-center">
                    <div class="text-5xl mb-4">📖</div>
                    <h3 class="text-xl font-bold mb-2">Firman</h3>
                    <p class="text-sm">Berpegang pada kebenaran Alkitab</p>
                </div>
                
                <div class="bg-gradient-to-br from-red-500 to-red-600 text-white rounded-lg p-6 text-center">
                    <div class="text-5xl mb-4">🔥</div>
                    <h3 class="text-xl font-bold mb-2">Semangat</h3>
                    <p class="text-sm">Penuh semangat dalam pelayanan</p>
                </div>
                
                <div class="bg-gradient-to-br from-pink-500 to-pink-600 text-white rounded-lg p-6 text-center">
                    <div class="text-5xl mb-4">🌟</div>
                    <h3 class="text-xl font-bold mb-2">Keunggulan</h3>
                    <p class="text-sm">Memberikan yang terbaik untuk Tuhan</p>
                </div>
            </div>
        </div>
        
        <!-- Leadership -->
        <div class="bg-white rounded-lg shadow-lg p-8">
            <h2 class="text-3xl font-bold text-gray-800 mb-8 text-center">Tim Kepemimpinan</h2>
            <div class="grid md:grid-cols-3 gap-8">
                <div class="text-center">
                    <div class="w-32 h-32 bg-gradient-to-br from-blue-400 to-blue-600 rounded-full mx-auto mb-4 flex items-center justify-center text-white text-4xl">
                        <i class="fas fa-user-tie"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-2">Pdt. Jonathan Prasetyo, M.Th</h3>
                    <p class="text-blue-600 font-semibold mb-2">Gembala Sidang</p>
                    <p class="text-sm text-gray-600">Memimpin gereja dengan hikmat dan kasih</p>
                </div>
                
                <div class="text-center">
                    <div class="w-32 h-32 bg-gradient-to-br from-purple-400 to-purple-600 rounded-full mx-auto mb-4 flex items-center justify-center text-white text-4xl">
                        <i class="fas fa-user"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-2">Pdp. Sarah Wijaya, M.Min</h3>
                    <p class="text-purple-600 font-semibold mb-2">Pendeta Pembantu</p>
                    <p class="text-sm text-gray-600">Membina jemaat dan pelayanan wanita</p>
                </div>
                
                <div class="text-center">
                    <div class="w-32 h-32 bg-gradient-to-br from-green-400 to-green-600 rounded-full mx-auto mb-4 flex items-center justify-center text-white text-4xl">
                        <i class="fas fa-users"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-2">Bpk. Peter Liem</h3>
                    <p class="text-green-600 font-semibold mb-2">Ketua Majelis</p>
                    <p class="text-sm text-gray-600">Koordinator pelayanan dan administrasi</p>
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
                <a href="contact.php" class="hover:text-blue-400 transition">Kontak</a>
            </div>
        </div>
    </footer>
</body>
</html>
