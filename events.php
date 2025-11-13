<?php
require_once '../includes/config.php';
require_once '../includes/dummy-data.php';
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Event Spesial - <?= SITE_NAME ?></title>
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
    
    <section class="bg-gradient-to-r from-purple-600 to-pink-600 text-white py-16 px-6">
        <div class="container mx-auto text-center">
            <h1 class="text-4xl md:text-5xl font-bold mb-4">🎉 Event Spesial</h1>
            <p class="text-lg">Jangan lewatkan event-event istimewa kami!</p>
        </div>
    </section>
    
    <section class="container mx-auto px-6 py-12">
        <div class="grid md:grid-cols-2 gap-8">
            <?php foreach ($special_events as $event): ?>
                <div class="bg-white rounded-lg shadow-xl overflow-hidden hover:shadow-2xl transition">
                    <img src="<?= $event['image'] ?>" alt="<?= $event['title'] ?>" class="w-full h-64 object-cover">
                    <div class="p-6">
                        <span class="bg-yellow-400 text-yellow-900 px-3 py-1 rounded-full text-xs font-bold inline-block mb-3">
                            <?= $event['category'] ?>
                        </span>
                        <h3 class="text-2xl font-bold text-gray-800 mb-3"><?= $event['title'] ?></h3>
                        <p class="text-gray-600 mb-4"><?= $event['description'] ?></p>
                        <div class="space-y-2 text-sm text-gray-600 mb-4">
                            <p><i class="fas fa-calendar text-blue-600 mr-2"></i><?= formatTanggalIndo($event['date']) ?></p>
                            <p><i class="fas fa-clock text-green-600 mr-2"></i><?= $event['time'] ?> WIB</p>
                            <p><i class="fas fa-map-marker-alt text-red-600 mr-2"></i><?= $event['location'] ?></p>
                        </div>
                        <span class="inline-block bg-green-100 text-green-800 px-4 py-2 rounded-lg font-semibold">
                            <i class="fas fa-star text-yellow-500"></i> Upcoming
                        </span>
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
