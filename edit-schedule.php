<?php
require_once '../includes/config.php';
require_once '../includes/dummy-data.php';
requireLogin();

$id = $_GET['id'] ?? 0;
$schedule = getScheduleById($id);

if (!$schedule) {
    header('Location: manage-schedule.php');
    exit;
}

$message = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $message = 'Jadwal berhasil diupdate! (Demo mode - data tidak tersimpan)';
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Jadwal - <?= SITE_NAME ?></title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body class="bg-gray-50">
    <nav class="bg-gradient-to-r from-blue-600 to-purple-600 text-white shadow-lg">
        <div class="container mx-auto px-6 py-4">
            <div class="flex justify-between items-center">
                <h1 class="text-xl font-bold">Admin Panel - Edit Jadwal</h1>
                <a href="manage-schedule.php" class="bg-white text-blue-600 px-4 py-2 rounded-lg hover:bg-gray-100">
                    <i class="fas fa-arrow-left mr-2"></i>Kembali
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
            <h1 class="text-3xl font-bold text-gray-800 mb-8">Edit Jadwal: <?= $schedule['title'] ?></h1>
            
            <?php if ($message): ?>
                <div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4 mb-6 rounded">
                    <?= $message ?>
                </div>
            <?php endif; ?>
            
            <div class="bg-white rounded-lg shadow-lg p-8">
                <form method="POST" class="space-y-6">
                    <div class="grid md:grid-cols-2 gap-6">
                        <div>
                            <label class="block text-sm font-semibold text-gray-700 mb-2">Nama Kegiatan *</label>
                            <input type="text" name="title" value="<?= htmlspecialchars($schedule['title']) ?>" required class="w-full px-4 py-3 border rounded-lg focus:ring-2 focus:ring-blue-500">
                        </div>
                        
                        <div>
                            <label class="block text-sm font-semibold text-gray-700 mb-2">Kategori *</label>
                            <select name="category" required class="w-full px-4 py-3 border rounded-lg focus:ring-2 focus:ring-blue-500">
                                <?php foreach ($categories as $cat => $class): ?>
                                    <option value="<?= $cat ?>" <?= $schedule['category'] === $cat ? 'selected' : '' ?>><?= $cat ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        
                        <div>
                            <label class="block text-sm font-semibold text-gray-700 mb-2">Hari *</label>
                            <select name="day" required class="w-full px-4 py-3 border rounded-lg focus:ring-2 focus:ring-blue-500">
                                <?php foreach ($days as $day): ?>
                                    <option value="<?= $day ?>" <?= $schedule['day'] === $day ? 'selected' : '' ?>><?= $day ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        
                        <div>
                            <label class="block text-sm font-semibold text-gray-700 mb-2">Tanggal *</label>
                            <input type="date" name="date" value="<?= $schedule['date'] ?>" required class="w-full px-4 py-3 border rounded-lg focus:ring-2 focus:ring-blue-500">
                        </div>
                        
                        <div>
                            <label class="block text-sm font-semibold text-gray-700 mb-2">Waktu Mulai *</label>
                            <input type="time" name="time_start" value="<?= $schedule['time_start'] ?>" required class="w-full px-4 py-3 border rounded-lg focus:ring-2 focus:ring-blue-500">
                        </div>
                        
                        <div>
                            <label class="block text-sm font-semibold text-gray-700 mb-2">Waktu Selesai *</label>
                            <input type="time" name="time_end" value="<?= $schedule['time_end'] ?>" required class="w-full px-4 py-3 border rounded-lg focus:ring-2 focus:ring-blue-500">
                        </div>
                        
                        <div>
                            <label class="block text-sm font-semibold text-gray-700 mb-2">Lokasi *</label>
                            <input type="text" name="location" value="<?= htmlspecialchars($schedule['location']) ?>" required class="w-full px-4 py-3 border rounded-lg focus:ring-2 focus:ring-blue-500">
                        </div>
                        
                        <div>
                            <label class="block text-sm font-semibold text-gray-700 mb-2">Pembicara/PIC *</label>
                            <input type="text" name="speaker" value="<?= htmlspecialchars($schedule['speaker']) ?>" required class="w-full px-4 py-3 border rounded-lg focus:ring-2 focus:ring-blue-500">
                        </div>
                    </div>
                    
                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-2">Deskripsi *</label>
                        <textarea name="description" rows="5" required class="w-full px-4 py-3 border rounded-lg focus:ring-2 focus:ring-blue-500"><?= htmlspecialchars($schedule['description']) ?></textarea>
                    </div>
                    
                    <div class="flex gap-4">
                        <button type="submit" class="bg-blue-600 text-white px-8 py-3 rounded-lg hover:bg-blue-700 font-semibold">
                            <i class="fas fa-save mr-2"></i>Update
                        </button>
                        <a href="manage-schedule.php" class="bg-gray-200 text-gray-700 px-8 py-3 rounded-lg hover:bg-gray-300 font-semibold">
                            Batal
                        </a>
                    </div>
                </form>
            </div>
        </main>
    </div>
</body>
</html>
