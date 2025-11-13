<?php
require_once '../includes/config.php';
require_once '../includes/dummy-data.php';
require_once '../includes/functions.php';

$id = $_GET['id'] ?? 0;
$schedule = getScheduleById($id);

if (!$schedule) {
    header('Location: schedule.php');
    exit;
}

$categoryClass = $categories[$schedule['category']];
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $schedule['title'] ?> - <?= SITE_NAME ?></title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body class="bg-gray-50">
    <!-- Navbar -->
    <nav class="bg-white shadow-lg">
        <div class="container mx-auto px-6 py-4">
            <div class="flex justify-between items-center">
                <a href="../index.php" class="flex items-center gap-3">
                    <i class="fas fa-church text-3xl text-blue-600"></i>
                    <div>
                        <h1 class="text-2xl font-bold text-gray-800"><?= SITE_NAME ?></h1>
                    </div>
                </a>
                <a href="schedule.php" class="text-blue-600 hover:text-blue-800">
                    <i class="fas fa-arrow-left mr-2"></i>Kembali ke Jadwal
                </a>
            </div>
        </div>
    </nav>
    
    <!-- Detail Section -->
    <section class="container mx-auto px-6 py-12">
        <div class="max-w-4xl mx-auto">
            <!-- Header Card -->
            <div class="bg-white rounded-lg shadow-xl overflow-hidden mb-8">
                <div class="bg-gradient-to-r from-blue-600 to-purple-600 text-white p-8">
                    <span class="<?= str_replace(['text-', '800'], ['bg-white text-', '600'], $categoryClass) ?> px-4 py-2 rounded-full text-sm font-semibold inline-block mb-4">
                        <?= $schedule['category'] ?>
                    </span>
                    <h1 class="text-4xl font-bold mb-4"><?= $schedule['title'] ?></h1>
                    <div class="flex items-center gap-6 flex-wrap text-lg">
                        <span><i class="fas fa-calendar mr-2"></i><?= getDayName($schedule['date']) ?>, <?= formatTanggalIndo($schedule['date']) ?></span>
                        <span><i class="fas fa-clock mr-2"></i><?= $schedule['time_start'] ?> - <?= $schedule['time_end'] ?> WIB</span>
                    </div>
                </div>
                
                <div class="p-8">
                    <div class="grid md:grid-cols-2 gap-6 mb-8">
                        <div class="flex items-start gap-4">
                            <div class="bg-red-100 w-12 h-12 rounded-lg flex items-center justify-center text-red-600 text-xl flex-shrink-0">
                                <i class="fas fa-map-marker-alt"></i>
                            </div>
                            <div>
                                <h3 class="font-bold text-gray-800 mb-1">Lokasi</h3>
                                <p class="text-gray-600"><?= $schedule['location'] ?></p>
                            </div>
                        </div>
                        
                        <div class="flex items-start gap-4">
                            <div class="bg-green-100 w-12 h-12 rounded-lg flex items-center justify-center text-green-600 text-xl flex-shrink-0">
                                <i class="fas fa-user-tie"></i>
                            </div>
                            <div>
                                <h3 class="font-bold text-gray-800 mb-1">Pembicara / PIC</h3>
                                <p class="text-gray-600"><?= $schedule['speaker'] ?></p>
                            </div>
                        </div>
                        
                        <div class="flex items-start gap-4">
                            <div class="bg-blue-100 w-12 h-12 rounded-lg flex items-center justify-center text-blue-600 text-xl flex-shrink-0">
                                <i class="fas fa-users"></i>
                            </div>
                            <div>
                                <h3 class="font-bold text-gray-800 mb-1">Rata-rata Kehadiran</h3>
                                <p class="text-gray-600">~<?= $schedule['attendance'] ?> jemaat</p>
                            </div>
                        </div>
                        
                        <div class="flex items-start gap-4">
                            <div class="bg-purple-100 w-12 h-12 rounded-lg flex items-center justify-center text-purple-600 text-xl flex-shrink-0">
                                <i class="fas fa-info-circle"></i>
                            </div>
                            <div>
                                <h3 class="font-bold text-gray-800 mb-1">Status</h3>
                                <span class="bg-green-100 text-green-800 px-3 py-1 rounded-full text-sm font-semibold">
                                    <i class="fas fa-circle text-green-500 animate-pulse text-xs"></i> Aktif
                                </span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="border-t pt-8">
                        <h2 class="text-2xl font-bold text-gray-800 mb-4">
                            <i class="fas fa-align-left text-blue-600 mr-2"></i>Deskripsi Kegiatan
                        </h2>
                        <p class="text-gray-600 leading-relaxed text-lg"><?= $schedule['description'] ?></p>
                    </div>
                    
                    <div class="mt-8 flex gap-4 flex-wrap">
                        <button onclick="window.print()" class="bg-green-600 text-white px-6 py-3 rounded-lg hover:bg-green-700 transition font-semibold">
                            <i class="fas fa-print mr-2"></i>Cetak Detail
                        </button>
                        <button onclick="shareSchedule()" class="bg-blue-600 text-white px-6 py-3 rounded-lg hover:bg-blue-700 transition font-semibold">
                            <i class="fas fa-share-alt mr-2"></i>Bagikan
                        </button>
                        <a href="schedule.php" class="bg-gray-200 text-gray-700 px-6 py-3 rounded-lg hover:bg-gray-300 transition font-semibold">
                            <i class="fas fa-arrow-left mr-2"></i>Kembali
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <footer class="bg-gray-800 text-white py-8 px-6">
        <div class="container mx-auto text-center">
            <p>&copy; 2025 <?= CHURCH_NAME ?>. All Rights Reserved.</p>
        </div>
    </footer>
    
    <script>
        function shareSchedule() {
            if (navigator.share) {
                navigator.share({
                    title: '<?= addslashes($schedule['title']) ?>',
                    text: 'Ikuti kegiatan: <?= addslashes($schedule['title']) ?>',
                    url: window.location.href
                });
            } else {
                alert('Link telah disalin: ' + window.location.href);
                navigator.clipboard.writeText(window.location.href);
            }
        }
    </script>
</body>
</html>
