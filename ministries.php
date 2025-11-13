<?php
require_once '../includes/config.php';
require_once '../includes/dummy-data.php';
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pelayanan - <?= SITE_NAME ?></title>
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
    
    <section class="bg-gradient-to-r from-green-600 to-blue-600 text-white py-16 px-6">
        <div class="container mx-auto text-center">
            <h1 class="text-4xl md:text-5xl font-bold mb-4">🙏 Pelayanan Gereja</h1>
            <p class="text-lg">Bergabunglah dan melayani bersama kami</p>
        </div>
    </section>
    
    <section class="container mx-auto px-6 py-12">
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
            <?php foreach ($ministries as $ministry): ?>
                <div class="bg-white rounded-lg shadow-lg p-6 hover:shadow-xl transition">
                    <div class="text-5xl mb-4 text-center"><?= $ministry['icon'] ?></div>
                    <h3 class="text-xl font-bold text-gray-800 text-center mb-3"><?= $ministry['name'] ?></h3>
                    <p class="text-gray-600 text-center mb-4"><?= $ministry['description'] ?></p>
                    <div class="bg-blue-50 p-4 rounded-lg mb-4">
                        <p class="text-sm text-gray-700"><strong>Jadwal:</strong> <?= $ministry['schedule'] ?></p>
                        <p class="text-sm text-gray-700"><strong>Kontak:</strong> <?= $ministry['contact'] ?></p>
                    </div>
                    <button class="w-full bg-blue-600 text-white py-3 rounded-lg hover:bg-blue-700 transition font-semibold">
                        <i class="fas fa-user-plus mr-2"></i>Join Pelayanan
                    </button>
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
