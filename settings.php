<?php
require_once '../includes/config.php';
requireLogin();

$message = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $message = 'Pengaturan berhasil disimpan! (Demo mode - data tidak tersimpan)';
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pengaturan - <?= SITE_NAME ?></title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body class="bg-gray-50">
    <nav class="bg-gradient-to-r from-blue-600 to-purple-600 text-white shadow-lg">
        <div class="container mx-auto px-6 py-4">
            <div class="flex justify-between items-center">
                <h1 class="text-xl font-bold">Admin Panel - Pengaturan</h1>
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
                <a href="manage-schedule.php" class="flex items-center gap-3 px-4 py-3 text-gray-700 hover:bg-gray-100 rounded-lg mb-2">
                    <i class="fas fa-calendar-alt"></i>Kelola Jadwal
                </a>
                <a href="add-schedule.php" class="flex items-center gap-3 px-4 py-3 text-gray-700 hover:bg-gray-100 rounded-lg mb-2">
                    <i class="fas fa-plus-circle"></i>Tambah Jadwal
                </a>
                <a href="settings.php" class="flex items-center gap-3 px-4 py-3 bg-blue-100 text-blue-600 rounded-lg font-semibold">
                    <i class="fas fa-cog"></i>Pengaturan
                </a>
            </nav>
        </aside>
        
        <main class="flex-1 p-8">
            <h1 class="text-3xl font-bold text-gray-800 mb-8">Pengaturan Website</h1>
            
            <?php if ($message): ?>
                <div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4 mb-6 rounded">
                    <?= $message ?>
                </div>
            <?php endif; ?>
            
            <div class="bg-white rounded-lg shadow-lg p-8 mb-6">
                <h2 class="text-xl font-bold text-gray-800 mb-6">Informasi Gereja</h2>
                <form method="POST" class="space-y-6">
                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-2">Nama Gereja</label>
                        <input type="text" name="church_name" value="<?= CHURCH_NAME ?>" class="w-full px-4 py-3 border rounded-lg focus:ring-2 focus:ring-blue-500">
                    </div>
                    
                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-2">Alamat</label>
                        <input type="text" name="address" value="<?= CHURCH_ADDRESS ?>" class="w-full px-4 py-3 border rounded-lg focus:ring-2 focus:ring-blue-500">
                    </div>
                    
                    <div class="grid md:grid-cols-2 gap-6">
                        <div>
                            <label class="block text-sm font-semibold text-gray-700 mb-2">Telepon</label>
                            <input type="text" name="phone" value="<?= CHURCH_PHONE ?>" class="w-full px-4 py-3 border rounded-lg focus:ring-2 focus:ring-blue-500">
                        </div>
                        
                        <div>
                            <label class="block text-sm font-semibold text-gray-700 mb-2">Email</label>
                            <input type="email" name="email" value="<?= CHURCH_EMAIL ?>" class="w-full px-4 py-3 border rounded-lg focus:ring-2 focus:ring-blue-500">
                        </div>
                    </div>
                    
                    <button type="submit" class="bg-blue-600 text-white px-8 py-3 rounded-lg hover:bg-blue-700 font-semibold">
                        <i class="fas fa-save mr-2"></i>Simpan Pengaturan
                    </button>
                </form>
            </div>
            
            <div class="bg-white rounded-lg shadow-lg p-8">
                <h2 class="text-xl font-bold text-gray-800 mb-4">Informasi Sistem</h2>
                <div class="space-y-3 text-gray-600">
                    <p><strong>Versi:</strong> 1.0.0 (Demo Mode)</p>
                    <p><strong>Total Jadwal:</strong> <?= count($schedules) ?> kegiatan</p>
                    <p><strong>Status:</strong> <span class="text-green-600 font-semibold">Aktif</span></p>
                    <p class="text-sm text-yellow-600"><i class="fas fa-info-circle mr-2"></i>Website ini menggunakan data dummy untuk keperluan demo</p>
                </div>
            </div>
        </main>
    </div>
</body>
</html>
