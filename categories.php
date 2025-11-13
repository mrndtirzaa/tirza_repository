<?php
require_once '../includes/config.php';
require_once '../includes/dummy-data.php';
require_once '../includes/functions.php';
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kategori Kegiatan - <?= SITE_NAME ?></title>
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
    
    <section class="bg-gradient-to-r from-blue-600 to-purple-600 text-white py-16 px-6">
        <div class="container mx-auto text-center">
            <h1 class="text-4xl md:text-5xl font-bold mb-4">🏷️ Kategori Kegiatan</h1>
            <p class="text-lg">Jelajahi kegiatan berdasarkan kategori</p>
        </div>
    </section>
    
    <section class="container mx-auto px-6 py-12">
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
            <?php foreach ($categories as $cat => $class): 
                $count = count(getScheduleByCategory($cat));
            ?>
                <div class="bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition">
                    <div class="<?= $class ?> p-6 text-center">
                        <div class="text-5xl mb-4">
                            <?php 
                            $icons = ['Ibadah' => '⛪', 'Pelayanan' => '🙏', 'Persekutuan' => '👥', 'Training' => '📚', 'Event Khusus' => '🎉', 'Sosial' => '❤️'];
                            echo $icons[$cat];
                            ?>
                        </div>
                        <h3 class="text-2xl font-bold mb-2"><?= $cat ?></h3>
                        <p class="text-sm opacity-80"><?= $count ?> kegiatan</p>
                    </div>
                    <div class="p-6">
                        <a href="schedule.php?category=<?= urlencode($cat) ?>" class="block w-full text-center bg-blue-600 text-white py-3 rounded-lg hover:bg-blue-700 transition font-semibold">
                            Lihat Semua <i class="fas fa-arrow-right ml-2"></i>
                        </a>
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
