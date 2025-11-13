<?php
require_once '../includes/config.php';
require_once '../includes/dummy-data.php';
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galeri - <?= SITE_NAME ?></title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body class="bg-gray-50">
    <nav class="bg-white shadow-lg">
        <div class="container mx-auto px-6 py-4">
            <div class="flex justify-between items-center">
                <a href="../index.php" class="flex items-center gap-3">
                    <i class="fas fa-church text-3xl text-blue-600"></i>
                    <h1 class="text-2xl font-bold text-gray-800"><?= SITE_NAME ?></h1>
                </a>
                <a href="../index.php" class="text-blue-600"><i class="fas fa-home"></i></a>
            </div>
        </div>
    </nav>
    
    <section class="bg-gradient-to-r from-pink-600 to-purple-600 text-white py-16 px-6">
        <div class="container mx-auto text-center">
            <h1 class="text-4xl md:text-5xl font-bold mb-4">📸 Galeri Kegiatan</h1>
            <p class="text-lg">Momen-momen indah dalam pelayanan</p>
        </div>
    </section>
    
    <section class="container mx-auto px-6 py-12">
        <div class="grid md:grid-cols-3 gap-6">
            <?php foreach ($gallery as $item): ?>
                <div class="bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition group">
                    <div class="relative overflow-hidden">
                        <img src="<?= $item['image'] ?>" alt="<?= $item['title'] ?>" class="w-full h-64 object-cover group-hover:scale-110 transition duration-300">
                        <div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-50 transition flex items-center justify-center">
                            <i class="fas fa-search-plus text-white text-3xl opacity-0 group-hover:opacity-100 transition"></i>
                        </div>
                    </div>
                    <div class="p-4">
                        <h3 class="font-bold text-gray-800"><?= $item['title'] ?></h3>
                        <span class="text-sm text-blue-600"><?= $item['category'] ?></span>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </section>
    
    <footer class="bg-gray-800 text-white py-8 px-6">
        <div class="container mx-auto text-center">
            <p>&copy; 2025 <?= CHURCH_NAME ?>. All Rights Reserved.</p>
        </div>
    </footer>
</body>
</html>
