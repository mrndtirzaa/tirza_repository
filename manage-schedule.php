<?php
require_once '../includes/config.php';
require_once '../includes/dummy-data.php';
requireLogin();

$message = '';
if (isset($_GET['action']) && $_GET['action'] === 'delete' && isset($_GET['id'])) {
    $message = 'Jadwal berhasil dihapus! (Demo mode - data tidak benar-benar terhapus)';
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kelola Jadwal - <?= SITE_NAME ?></title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body class="bg-gray-50">
    <nav class="bg-gradient-to-r from-blue-600 to-purple-600 text-white shadow-lg">
        <div class="container mx-auto px-6 py-4">
            <div class="flex justify-between items-center">
                <h1 class="text-xl font-bold">Admin Panel - Kelola Jadwal</h1>
                <a href="dashboard.php" class="bg-white text-blue-600 px-4 py-2 rounded-lg hover:bg-gray-100">
                    <i class="fas fa-arrow-left mr-2"></i>Dashboard
                </a>
            </div>
        </div>
    </nav>
    
    <div class="flex">
        <aside class="w-64 bg-white shadow-lg min-h-screen">
            <nav class="p-6">
                <a href="dashboard.php" class="flex items-center gap-3 px-4 py-3 text-gray-700 hover:bg-gray-100 rounded-lg mb-2">
                    <i class="fas fa-dashboard"></i>Dashboard
                </a>
                <a href="manage-schedule.php" class="flex items-center gap-3 px-4 py-3 bg-blue-100 text-blue-600 rounded-lg mb-2 font-semibold">
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
            <div class="flex justify-between items-center mb-8">
                <h1 class="text-3xl font-bold text-gray-800">Kelola Jadwal</h1>
                <a href="add-schedule.php" class="bg-blue-600 text-white px-6 py-3 rounded-lg hover:bg-blue-700 transition font-semibold">
                    <i class="fas fa-plus mr-2"></i>Tambah Baru
                </a>
            </div>
            
            <?php if ($message): ?>
                <div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4 mb-6 rounded">
                    <?= $message ?>
                </div>
            <?php endif; ?>
            
            <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                <table class="w-full">
                    <thead class="bg-gradient-to-r from-blue-600 to-purple-600 text-white">
                        <tr>
                            <th class="px-6 py-4 text-left">Kegiatan</th>
                            <th class="px-6 py-4 text-left">Kategori</th>
                            <th class="px-6 py-4 text-left">Hari & Tanggal</th>
                            <th class="px-6 py-4 text-left">Waktu</th>
                            <th class="px-6 py-4 text-center">Status</th>
                            <th class="px-6 py-4 text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y">
                        <?php foreach ($schedules as $schedule): 
                            $categoryClass = $categories[$schedule['category']];
                        ?>
                            <tr class="hover:bg-gray-50">
                                <td class="px-6 py-4">
                                    <div class="font-bold text-gray-800"><?= $schedule['title'] ?></div>
                                    <div class="text-sm text-gray-500"><?= $schedule['speaker'] ?></div>
                                </td>
                                <td class="px-6 py-4">
                                    <span class="<?= $categoryClass ?> px-3 py-1 rounded-full text-xs font-semibold">
                                        <?= $schedule['category'] ?>
                                    </span>
                                </td>
                                <td class="px-6 py-4">
                                    <div><?= $schedule['day'] ?></div>
                                    <div class="text-sm text-gray-500"><?= formatTanggalIndo($schedule['date']) ?></div>
                                </td>
                                <td class="px-6 py-4 text-sm">
                                    <?= $schedule['time_start'] ?> - <?= $schedule['time_end'] ?>
                                </td>
                                <td class="px-6 py-4 text-center">
                                    <span class="bg-green-100 text-green-800 px-3 py-1 rounded-full text-xs font-semibold">
                                        Aktif
                                    </span>
                                </td>
                                <td class="px-6 py-4 text-center">
                                    <a href="edit-schedule.php?id=<?= $schedule['id'] ?>" class="text-blue-600 hover:text-blue-800 mx-2">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <a href="?action=delete&id=<?= $schedule['id'] ?>" onclick="return confirm('Yakin ingin menghapus?')" class="text-red-600 hover:text-red-800 mx-2">
                                        <i class="fas fa-trash"></i>
                                    </a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </main>
    </div>
</body>
</html>
