<?php
require_once '../includes/config.php';
require_once '../includes/dummy-data.php';
require_once '../includes/functions.php';

$currentMonth = $_GET['month'] ?? date('n');
$currentYear = $_GET['year'] ?? date('Y');

$calendar = generateCalendar($currentYear, $currentMonth, $schedules);
$monthName = $months[(int)$currentMonth];
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalender - <?= SITE_NAME ?></title>
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
                <div class="hidden md:flex gap-6">
                    <a href="../index.php" class="text-gray-700 hover:text-blue-600">Beranda</a>
                    <a href="schedule.php" class="text-gray-700 hover:text-blue-600">Jadwal</a>
                    <a href="calendar.php" class="text-blue-600 font-semibold">Kalender</a>
                    <a href="events.php" class="text-gray-700 hover:text-blue-600">Event</a>
                </div>
            </div>
        </div>
    </nav>
    
    <section class="bg-gradient-to-r from-blue-600 to-purple-600 text-white py-16 px-6">
        <div class="container mx-auto text-center">
            <h1 class="text-4xl md:text-5xl font-bold mb-4">📆 Kalender Kegiatan</h1>
            <p class="text-lg">Lihat jadwal kegiatan per bulan</p>
        </div>
    </section>
    
    <section class="container mx-auto px-6 py-12">
        <div class="bg-white rounded-lg shadow-lg p-6 mb-8">
            <div class="flex justify-between items-center mb-6">
                <a href="?month=<?= $currentMonth == 1 ? 12 : $currentMonth - 1 ?>&year=<?= $currentMonth == 1 ? $currentYear - 1 : $currentYear ?>" class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700">
                    <i class="fas fa-chevron-left"></i> Prev
                </a>
                <h2 class="text-3xl font-bold text-gray-800"><?= $monthName ?> <?= $currentYear ?></h2>
                <a href="?month=<?= $currentMonth == 12 ? 1 : $currentMonth + 1 ?>&year=<?= $currentMonth == 12 ? $currentYear + 1 : $currentYear ?>" class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700">
                    Next <i class="fas fa-chevron-right"></i>
                </a>
            </div>
            
            <div class="grid grid-cols-7 gap-2">
                <?php foreach (['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu'] as $day): ?>
                    <div class="text-center font-bold text-gray-700 py-2"><?= substr($day, 0, 3) ?></div>
                <?php endforeach; ?>
                
                <?php foreach ($calendar as $week): ?>
                    <?php foreach ($week as $day): ?>
                        <?php if ($day === null): ?>
                            <div class="bg-gray-100 min-h-24 rounded-lg"></div>
                        <?php else: ?>
                            <div class="bg-white border-2 border-gray-200 min-h-24 rounded-lg p-2 hover:border-blue-500 transition">
                                <div class="font-bold text-gray-800 mb-1"><?= $day['day'] ?></div>
                                <div class="space-y-1">
                                    <?php foreach (array_slice($day['schedules'], 0, 2) as $schedule): ?>
                                        <a href="schedule-detail.php?id=<?= $schedule['id'] ?>" class="block text-xs bg-blue-100 text-blue-800 px-2 py-1 rounded truncate hover:bg-blue-200">
                                            <?= substr($schedule['title'], 0, 15) ?>...
                                        </a>
                                    <?php endforeach; ?>
                                    <?php if (count($day['schedules']) > 2): ?>
                                        <div class="text-xs text-gray-500">+<?= count($day['schedules']) - 2 ?> lagi</div>
                                    <?php endif; ?>
                                </div>
                            </div>
                        <?php endif; ?>
                    <?php endforeach; ?>
                <?php endforeach; ?>
            </div>
        </div>
        
        <div class="bg-white rounded-lg shadow-lg p-6">
            <h3 class="text-xl font-bold text-gray-800 mb-4">Legend Kategori</h3>
            <div class="grid md:grid-cols-3 gap-4">
                <?php foreach ($categories as $cat => $class): ?>
                    <span class="<?= $class ?> px-4 py-2 rounded-lg font-semibold text-center"><?= $cat ?></span>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
    
    <footer class="bg-gray-800 text-white py-8 px-6">
        <div class="container mx-auto text-center">
            <p>&copy; 2025 <?= CHURCH_NAME ?>. All Rights Reserved.</p>
        </div>
    </footer>
</body>
</html>
