<?php
require_once '../includes/config.php';
require_once '../includes/dummy-data.php';
require_once '../includes/functions.php';
requireLogin();

$todaySchedules = getTodaySchedules($schedules);
$thisWeekSchedules = getThisWeekSchedules($schedules);
$totalSchedules = count($schedules);
$totalCategories = count($categories);
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin - <?= SITE_NAME ?></title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body class="bg-gray-50">
    <nav class="bg-gradient-to-r from-blue-600 to-purple-600 text-white shadow-lg">
        <div class="container mx-auto px-6 py-4">
            <div class="flex justify-between items-center">
                <div class="flex items-center gap-3">
                    <i class="fas fa-user-shield text-3xl"></i>
                    <div>
                        <h1 class="text-xl font-bold">Admin Panel</h1>
                        <p class="text-xs">Welcome, <?= $_SESSION['admin_username'] ?></p>
                    </div>
                </div>
                <div class="flex gap-4">
                    <a href="../index.php" class="bg-white text-blue-600 px-4 py-2 rounded-lg hover:bg-gray-100 transition">
                        <i class="fas fa-home mr-2"></i>Ke Website
                    </a>
                    <a href="../logout.php" class="bg-red-600 text-white px-4 py-2 rounded-lg hover:bg-red-700 transition">
                        <i class="fas fa-sign-out-alt mr-2"></i>Logout
                    </a>
                </div>
            </div>
        </div>
    </nav>
    
    <div class="flex">
        <aside class="w-64 bg-white shadow-lg min-h-screen">
            <nav class="p-6">
                <a href="dashboard.php" class="flex items-center gap-3 px-4 py-3 bg-blue-100 text-blue-600 rounded-lg mb-2 font-semibold">
                    <i class="fas fa-dashboard"></i>Dashboard
                </a>
                <a href="manage-schedule.php" class="flex items-center gap-3 px-4 py-3 text-gray-700 hover:bg-gray-100 rounded-lg mb-2">
                    <i class="fas fa-calendar-alt"></i>Kelola Jadwal
                </a>
                <a href="add-schedule.php" class="flex items-center gap-3 px-4 py-3 text-gray-700 hover:bg-gray-100 rounded-lg mb-2">
                    <i class="fas fa-plus-circle"></i>Tambah Jadwal
                </a>
                <a href="settings.php" class="flex items-center gap-3 px-4 py-3 text-gray-700 hover:bg-gray-100 rounded-lg">
                    <i class="fas fa-cog"></i>Pengaturan
                </a>
            </nav>
        </aside>
        
        <main class="flex-1 p-8">
            <h1 class="text-3xl font-bold text-gray-800 mb-8">Dashboard</h1>
            
            <div class="grid md:grid-cols-4 gap-6 mb-8">
                <div class="bg-white rounded-lg shadow-lg p-6">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-gray-600 text-sm">Total Kegiatan</p>
                            <p class="text-3xl font-bold text-blue-600"><?= $totalSchedules ?></p>
                        </div>
                        <i class="fas fa-calendar-alt text-4xl text-blue-200"></i>
                    </div>
                </div>
                
                <div class="bg-white rounded-lg shadow-lg p-6">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-gray-600 text-sm">Kegiatan Hari Ini</p>
                            <p class="text-3xl font-bold text-green-600"><?= count($todaySchedules) ?></p>
                        </div>
                        <i class="fas fa-calendar-day text-4xl text-green-200"></i>
                    </div>
                </div>
                
                <div class="bg-white rounded-lg shadow-lg p-6">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-gray-600 text-sm">Minggu Ini</p>
                            <p class="text-3xl font-bold text-purple-600"><?= count($thisWeekSchedules) ?></p>
                        </div>
                        <i class="fas fa-calendar-week text-4xl text-purple-200"></i>
                    </div>
                </div>
                
                <div class="bg-white rounded-lg shadow-lg p-6">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-gray-600 text-sm">Kategori</p>
                            <p class="text-3xl font-bold text-yellow-600"><?= $totalCategories ?></p>
                        </div>
                        <i class="fas fa-tags text-4xl text-yellow-200"></i>
                    </div>
                </div>
            </div>
            
            <div class="bg-white rounded-lg shadow-lg p-6 mb-8">
                <h2 class="text-2xl font-bold text-gray-800 mb-4">
                    <i class="fas fa-calendar-day text-blue-600 mr-2"></i>Kegiatan Hari Ini
                </h2>
                <?php if (empty($todaySchedules)): ?>
                    <p class="text-gray-500 text-center py-8">Tidak ada kegiatan hari ini</p>
                <?php else: ?>
                    <div class="space-y-4">
                        <?php foreach ($todaySchedules as $schedule): ?>
                            <div class="border-l-4 border-blue-600 pl-4 py-2">
                                <h3 class="font-bold text-gray-800"><?= $schedule['title'] ?></h3>
                                <p class="text-sm text-gray-600">
                                    <i class="fas fa-clock mr-1"></i><?= $schedule['time_start'] ?> - <?= $schedule['time_end'] ?>
                                    <i class="fas fa-map-marker-alt ml-3 mr-1"></i><?= $schedule['location'] ?>
                                </p>
                            </div>
                        <?php endforeach; ?>
                    </div>
                <?php endif; ?>
            </div>
            
            <div class="grid md:grid-cols-3 gap-6">
                <a href="add-schedule.php" class="bg-gradient-to-br from-blue-500 to-blue-600 text-white rounded-lg p-6 hover:shadow-xl transition">
                    <i class="fas fa-plus-circle text-5xl mb-4"></i>
                    <h3 class="text-xl font-bold">Tambah Jadwal</h3>
                    <p class="text-sm opacity-90">Buat kegiatan baru</p>
                </a>
                
                <a href="manage-schedule.php" class="bg-gradient-to-br from-green-500 to-green-600 text-white rounded-lg p-6 hover:shadow-xl transition">
                    <i class="fas fa-edit text-5xl mb-4"></i>
                    <h3 class="text-xl font-bold">Kelola Jadwal</h3>
                    <p class="text-sm opacity-90">Edit atau hapus kegiatan</p>
                </a>
                
                <a href="../user/schedule.php" class="bg-gradient-to-br from-purple-500 to-purple-600 text-white rounded-lg p-6 hover:shadow-xl transition">
                    <i class="fas fa-eye text-5xl mb-4"></i>
                    <h3 class="text-xl font-bold">Lihat Website</h3>
                    <p class="text-sm opacity-90">Preview jadwal publik</p>
                </a>
            </div>
        </main>
    </div>
</body>
</html>
