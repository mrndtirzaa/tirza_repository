<?php
require_once '../includes/config.php';
require_once '../includes/dummy-data.php';
require_once '../includes/functions.php';

// Filter
$selectedDay = $_GET['day'] ?? '';
$selectedCategory = $_GET['category'] ?? '';
$searchKeyword = $_GET['search'] ?? '';

// Get schedules
$filteredSchedules = $schedules;

if ($selectedDay) {
    $filteredSchedules = getScheduleByDay($selectedDay);
}

if ($selectedCategory) {
    $filteredSchedules = getScheduleByCategory($selectedCategory);
}

if ($searchKeyword) {
    $filteredSchedules = searchSchedules($filteredSchedules, $searchKeyword);
}

// Sort by date and time
usort($filteredSchedules, function($a, $b) {
    $dateCompare = strcmp($a['date'], $b['date']);
    if ($dateCompare === 0) {
        return strcmp($a['time_start'], $b['time_start']);
    }
    return $dateCompare;
});
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jadwal Kegiatan - <?= SITE_NAME ?></title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        @keyframes fadeInUp {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
        .animate-fadeInUp {
            animation: fadeInUp 0.5s ease-out;
        }
        .hover-scale {
            transition: transform 0.3s ease;
        }
        .hover-scale:hover {
            transform: translateY(-5px);
        }
    </style>
</head>
<body class="bg-gray-50">
    <!-- Navbar -->
    <nav class="bg-white shadow-lg sticky top-0 z-50">
        <div class="container mx-auto px-6 py-4">
            <div class="flex justify-between items-center">
                <a href="../index.php" class="flex items-center gap-3">
                    <i class="fas fa-church text-3xl text-blue-600"></i>
                    <div>
                        <h1 class="text-2xl font-bold text-gray-800"><?= SITE_NAME ?></h1>
                        <p class="text-xs text-gray-600"><?= SITE_TAGLINE ?></p>
                    </div>
                </a>
                
                <div class="hidden md:flex items-center gap-6">
                    <a href="../index.php" class="text-gray-700 hover:text-blue-600 transition">Beranda</a>
                    <a href="schedule.php" class="text-blue-600 font-semibold">Jadwal</a>
                    <a href="calendar.php" class="text-gray-700 hover:text-blue-600 transition">Kalender</a>
                    <a href="events.php" class="text-gray-700 hover:text-blue-600 transition">Event</a>
                    <a href="categories.php" class="text-gray-700 hover:text-blue-600 transition">Kategori</a>
                    <a href="ministries.php" class="text-gray-700 hover:text-blue-600 transition">Pelayanan</a>
                </div>
                
                <a href="../index.php" class="md:hidden text-gray-700 text-xl">
                    <i class="fas fa-home"></i>
                </a>
            </div>
        </div>
    </nav>
    
    <!-- Header -->
    <section class="bg-gradient-to-r from-blue-600 to-purple-600 text-white py-16 px-6">
        <div class="container mx-auto text-center">
            <h1 class="text-4xl md:text-5xl font-bold mb-4">📅 Jadwal Kegiatan Lengkap</h1>
            <p class="text-lg md:text-xl">Temukan dan ikuti setiap kegiatan gereja</p>
        </div>
    </section>
    
    <!-- Filter & Search -->
    <section class="container mx-auto px-6 -mt-8 mb-8">
        <div class="bg-white rounded-lg shadow-lg p-6">
            <form method="GET" class="grid md:grid-cols-4 gap-4">
                <!-- Search -->
                <div class="md:col-span-2">
                    <label class="block text-sm font-semibold text-gray-700 mb-2">
                        <i class="fas fa-search text-blue-600 mr-2"></i>Cari Kegiatan
                    </label>
                    <input 
                        type="text" 
                        name="search" 
                        value="<?= htmlspecialchars($searchKeyword) ?>"
                        placeholder="Cari nama kegiatan, pembicara..." 
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500"
                    >
                </div>
                
                <!-- Filter Hari -->
                <div>
                    <label class="block text-sm font-semibold text-gray-700 mb-2">
                        <i class="fas fa-calendar-day text-green-600 mr-2"></i>Hari
                    </label>
                    <select name="day" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500">
                        <option value="">Semua Hari</option>
                        <?php foreach ($days as $day): ?>
                            <option value="<?= $day ?>" <?= $selectedDay === $day ? 'selected' : '' ?>><?= $day ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                
                <!-- Filter Kategori -->
                <div>
                    <label class="block text-sm font-semibold text-gray-700 mb-2">
                        <i class="fas fa-tag text-purple-600 mr-2"></i>Kategori
                    </label>
                    <select name="category" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500">
                        <option value="">Semua Kategori</option>
                        <?php foreach ($categories as $cat => $class): ?>
                            <option value="<?= $cat ?>" <?= $selectedCategory === $cat ? 'selected' : '' ?>><?= $cat ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                
                <!-- Buttons -->
                <div class="md:col-span-4 flex gap-3">
                    <button type="submit" class="bg-blue-600 text-white px-6 py-2 rounded-lg hover:bg-blue-700 transition font-semibold">
                        <i class="fas fa-filter mr-2"></i>Filter
                    </button>
                    <a href="schedule.php" class="bg-gray-200 text-gray-700 px-6 py-2 rounded-lg hover:bg-gray-300 transition font-semibold">
                        <i class="fas fa-redo mr-2"></i>Reset
                    </a>
                    <button type="button" onclick="window.print()" class="bg-green-600 text-white px-6 py-2 rounded-lg hover:bg-green-700 transition font-semibold ml-auto">
                        <i class="fas fa-print mr-2"></i>Cetak
                    </button>
                </div>
            </form>
        </div>
    </section>
    
    <!-- Results Info -->
    <section class="container mx-auto px-6 mb-6">
        <div class="flex items-center justify-between flex-wrap gap-4">
            <p class="text-gray-600">
                Menampilkan <strong><?= count($filteredSchedules) ?></strong> kegiatan
                <?php if ($selectedDay): ?>
                    di hari <strong><?= $selectedDay ?></strong>
                <?php endif; ?>
                <?php if ($selectedCategory): ?>
                    kategori <strong><?= $selectedCategory ?></strong>
                <?php endif; ?>
            </p>
            
            <div class="flex gap-2">
                <button onclick="setView('list')" id="btnList" class="px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700">
                    <i class="fas fa-list"></i> List
                </button>
                <button onclick="setView('grid')" id="btnGrid" class="px-4 py-2 bg-gray-200 text-gray-700 rounded-lg hover:bg-gray-300">
                    <i class="fas fa-th"></i> Grid
                </button>
            </div>
        </div>
    </section>
    
    <!-- Schedule List/Grid -->
    <section class="container mx-auto px-6 mb-16">
        <div id="scheduleContainer" class="space-y-6">
            <?php if (empty($filteredSchedules)): ?>
                <div class="bg-white rounded-lg shadow-lg p-12 text-center">
                    <i class="fas fa-calendar-times text-6xl text-gray-300 mb-4"></i>
                    <h3 class="text-2xl font-bold text-gray-600 mb-2">Tidak Ada Kegiatan</h3>
                    <p class="text-gray-500">Tidak ada kegiatan yang sesuai dengan filter Anda</p>
                </div>
            <?php else: ?>
                <?php foreach ($filteredSchedules as $index => $schedule): 
                    $categoryClass = $categories[$schedule['category']];
                ?>
                    <div class="bg-white rounded-lg shadow-lg overflow-hidden hover-scale animate-fadeInUp" style="animation-delay: <?= $index * 0.05 ?>s">
                        <div class="md:flex">
                            <!-- Date Badge -->
                            <div class="bg-gradient-to-br from-blue-500 to-purple-600 text-white p-6 text-center md:w-48 flex-shrink-0">
                                <div class="text-4xl font-bold"><?= date('d', strtotime($schedule['date'])) ?></div>
                                <div class="text-sm"><?= strtoupper(substr(getDayName($schedule['date']), 0, 3)) ?></div>
                                <div class="text-xs mt-1"><?= formatTanggalIndo($schedule['date']) ?></div>
                                <div class="mt-3 text-2xl">
                                    <i class="fas fa-clock"></i>
                                </div>
                                <div class="text-sm font-semibold mt-1"><?= $schedule['time_start'] ?></div>
                            </div>
                            
                            <!-- Content -->
                            <div class="p-6 flex-1">
                                <div class="flex items-start justify-between mb-3">
                                    <div>
                                        <span class="<?= $categoryClass ?> px-3 py-1 rounded-full text-xs font-semibold inline-block mb-2">
                                            <?= $schedule['category'] ?>
                                        </span>
                                        <h3 class="text-2xl font-bold text-gray-800"><?= $schedule['title'] ?></h3>
                                    </div>
                                    <span class="bg-green-100 text-green-800 px-3 py-1 rounded-full text-xs font-semibold">
                                        <i class="fas fa-circle text-green-500 animate-pulse text-xs"></i> Aktif
                                    </span>
                                </div>
                                
                                <p class="text-gray-600 mb-4"><?= truncateText($schedule['description'], 120) ?></p>
                                
                                <div class="grid md:grid-cols-3 gap-4 text-sm mb-4">
                                    <div class="flex items-center gap-2 text-gray-600">
                                        <i class="fas fa-clock text-blue-600"></i>
                                        <span><?= $schedule['time_start'] ?> - <?= $schedule['time_end'] ?> WIB</span>
                                    </div>
                                    <div class="flex items-center gap-2 text-gray-600">
                                        <i class="fas fa-map-marker-alt text-red-600"></i>
                                        <span><?= $schedule['location'] ?></span>
                                    </div>
                                    <div class="flex items-center gap-2 text-gray-600">
                                        <i class="fas fa-user text-green-600"></i>
                                        <span><?= $schedule['speaker'] ?></span>
                                    </div>
                                </div>
                                
                                <div class="flex items-center justify-between">
                                    <span class="text-sm text-gray-500">
                                        <i class="fas fa-users mr-1"></i>~<?= $schedule['attendance'] ?> jemaat
                                    </span>
                                    <a href="schedule-detail.php?id=<?= $schedule['id'] ?>" class="bg-blue-600 text-white px-6 py-2 rounded-lg hover:bg-blue-700 transition font-semibold">
                                        Lihat Detail <i class="fas fa-arrow-right ml-2"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
    </section>
    
    <!-- Footer -->
    <footer class="bg-gray-800 text-white py-12 px-6">
        <div class="container mx-auto text-center">
            <p class="mb-4">&copy; 2025 <?= CHURCH_NAME ?>. All Rights Reserved.</p>
            <div class="flex gap-4 justify-center">
                <a href="../index.php" class="hover:text-blue-400 transition">Beranda</a>
                <a href="calendar.php" class="hover:text-blue-400 transition">Kalender</a>
                <a href="events.php" class="hover:text-blue-400 transition">Event</a>
            </div>
        </div>
    </footer>
    
    <script>
        function setView(view) {
            const container = document.getElementById('scheduleContainer');
            const btnList = document.getElementById('btnList');
            const btnGrid = document.getElementById('btnGrid');
            
            if (view === 'grid') {
                container.className = 'grid md:grid-cols-2 gap-6';
                btnGrid.className = 'px-4 py-2 bg-blue-600 text-white rounded-lg';
                btnList.className = 'px-4 py-2 bg-gray-200 text-gray-700 rounded-lg hover:bg-gray-300';
            } else {
                container.className = 'space-y-6';
                btnList.className = 'px-4 py-2 bg-blue-600 text-white rounded-lg';
                btnGrid.className = 'px-4 py-2 bg-gray-200 text-gray-700 rounded-lg hover:bg-gray-300';
            }
        }
    </script>
</body>
</html>
