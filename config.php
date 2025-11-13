<?php
// Memulai session
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Konfigurasi Website
define('SITE_NAME', 'GerejaKu Schedule');
define('SITE_TAGLINE', 'Bersama Melayani, Bersama Bertumbuh');
define('CHURCH_NAME', 'Gereja Kristen Kasih Sejati');
define('CHURCH_ADDRESS', 'Jl. Pemuda No. 123, Semarang, Jawa Tengah');
define('CHURCH_PHONE', '(024) 1234-5678');
define('CHURCH_EMAIL', 'info@gerejaku.com');

// Admin Credentials (Dummy)
define('ADMIN_USERNAME', 'admin');
define('ADMIN_PASSWORD', 'admin123'); // Dalam produksi harus di-hash

// Fungsi Check Login
function isLoggedIn() {
    return isset($_SESSION['admin_logged_in']) && $_SESSION['admin_logged_in'] === true;
}

function requireLogin() {
    if (!isLoggedIn()) {
        header('Location: ../login.php');
        exit;
    }
}

// Kategori Kegiatan
$categories = [
    'Ibadah' => 'bg-blue-100 text-blue-800',
    'Pelayanan' => 'bg-purple-100 text-purple-800',
    'Persekutuan' => 'bg-green-100 text-green-800',
    'Training' => 'bg-yellow-100 text-yellow-800',
    'Event Khusus' => 'bg-red-100 text-red-800',
    'Sosial' => 'bg-pink-100 text-pink-800'
];

// Hari dalam Bahasa Indonesia
$days = ['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu'];

// Bulan dalam Bahasa Indonesia
$months = [
    1 => 'Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni',
    'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'
];

// Helper Function: Format Tanggal Indonesia
function formatTanggalIndo($date) {
    global $months;
    $timestamp = strtotime($date);
    $day = date('d', $timestamp);
    $month = $months[(int)date('m', $timestamp)];
    $year = date('Y', $timestamp);
    return "$day $month $year";
}

// Helper Function: Get Day Name in Indonesian
function getDayName($date) {
    global $days;
    return $days[date('w', strtotime($date))];
}
?>
