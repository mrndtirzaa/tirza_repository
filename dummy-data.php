<?php
// Data Jadwal Kegiatan (Dummy)
$schedules = [
    // MINGGU
    [
        'id' => 1,
        'title' => 'Ibadah Minggu Perdana',
        'category' => 'Ibadah',
        'day' => 'Minggu',
        'date' => '2025-11-16',
        'time_start' => '06:00',
        'time_end' => '08:00',
        'location' => 'Gedung Utama - Lantai 1',
        'speaker' => 'Pdt. Jonathan Prasetyo, M.Th',
        'description' => 'Ibadah pagi perdana dengan tema "Kasih Yang Sempurna". Dilengkapi dengan pujian penyembahan dan firman Tuhan yang menguatkan.',
        'status' => 'active',
        'attendance' => 450
    ],
    [
        'id' => 2,
        'title' => 'Ibadah Minggu Kedua',
        'category' => 'Ibadah',
        'day' => 'Minggu',
        'date' => '2025-11-16',
        'time_start' => '08:30',
        'time_end' => '10:30',
        'location' => 'Gedung Utama - Lantai 1',
        'speaker' => 'Pdt. Jonathan Prasetyo, M.Th',
        'description' => 'Ibadah kedua dengan tema yang sama, untuk melayani jemaat yang lebih banyak.',
        'status' => 'active',
        'attendance' => 520
    ],
    [
        'id' => 3,
        'title' => 'Sekolah Minggu',
        'category' => 'Pelayanan',
        'day' => 'Minggu',
        'date' => '2025-11-16',
        'time_start' => '08:00',
        'time_end' => '10:00',
        'location' => 'Ruang Anak - Lantai 2',
        'speaker' => 'Ibu Maria Susanti',
        'description' => 'Pembelajaran Alkitab untuk anak-anak usia 5-12 tahun dengan metode fun learning dan aktivitas kreatif.',
        'status' => 'active',
        'attendance' => 85
    ],
    [
        'id' => 4,
        'title' => 'Ibadah Youth (Pemuda)',
        'category' => 'Ibadah',
        'day' => 'Minggu',
        'date' => '2025-11-16',
        'time_start' => '16:00',
        'time_end' => '18:00',
        'location' => 'Aula Pemuda - Lantai 3',
        'speaker' => 'Ev. David Kurniawan',
        'description' => 'Ibadah khusus pemuda dengan worship modern dan firman yang relevan untuk generasi muda.',
        'status' => 'active',
        'attendance' => 180
    ],
    
    // SENIN
    [
        'id' => 5,
        'title' => 'Doa Pagi',
        'category' => 'Ibadah',
        'day' => 'Senin',
        'date' => '2025-11-17',
        'time_start' => '05:30',
        'time_end' => '06:30',
        'location' => 'Ruang Doa',
        'speaker' => 'Pdp. Sarah Wijaya',
        'description' => 'Memulai hari dengan doa bersama untuk kekuatan dan berkat Tuhan sepanjang minggu.',
        'status' => 'active',
        'attendance' => 35
    ],
    [
        'id' => 6,
        'title' => 'Kelas Baptisan Air',
        'category' => 'Training',
        'day' => 'Senin',
        'date' => '2025-11-17',
        'time_start' => '19:00',
        'time_end' => '21:00',
        'location' => 'Ruang Kelas B',
        'speaker' => 'Pdt. Antonius Budiman',
        'description' => 'Persiapan baptisan air untuk jemaat baru. Sesi ke-2 dari 4 pertemuan.',
        'status' => 'active',
        'attendance' => 22
    ],
    
    // SELASA
    [
        'id' => 7,
        'title' => 'Persekutuan Kaum Bapak',
        'category' => 'Persekutuan',
        'day' => 'Selasa',
        'date' => '2025-11-18',
        'time_start' => '19:00',
        'time_end' => '21:00',
        'location' => 'Ruang Fellowship',
        'speaker' => 'Bpk. Thomas Gunawan',
        'description' => 'Persekutuan dan sharing bagi kaum bapak untuk saling menguatkan dalam iman dan keluarga.',
        'status' => 'active',
        'attendance' => 48
    ],
    [
        'id' => 8,
        'title' => 'Latihan Paduan Suara',
        'category' => 'Pelayanan',
        'day' => 'Selasa',
        'date' => '2025-11-18',
        'time_start' => '19:30',
        'time_end' => '21:30',
        'location' => 'Gedung Utama',
        'speaker' => 'Dirigen: Bpk. Samuel Chandra',
        'description' => 'Latihan rutin paduan suara untuk ibadah minggu dan special performance.',
        'status' => 'active',
        'attendance' => 42
    ],
    
    // RABU
    [
        'id' => 9,
        'title' => 'Ibadah Tengah Minggu',
        'category' => 'Ibadah',
        'day' => 'Rabu',
        'date' => '2025-11-19',
        'time_start' => '19:00',
        'time_end' => '21:00',
        'location' => 'Gedung Utama - Lantai 1',
        'speaker' => 'Pdt. Michael Santoso',
        'description' => 'Ibadah pertengahan minggu untuk refresh rohani dan menerima firman Tuhan yang memulihkan.',
        'status' => 'active',
        'attendance' => 280
    ],
    [
        'id' => 10,
        'title' => 'Persekutuan Kaum Ibu',
        'category' => 'Persekutuan',
        'day' => 'Rabu',
        'date' => '2025-11-19',
        'time_start' => '09:00',
        'time_end' => '11:00',
        'location' => 'Ruang Fellowship',
        'speaker' => 'Ibu Grace Halim',
        'description' => 'Persekutuan kaum ibu dengan topik "Menjadi Ibu dan Istri yang Bijaksana".',
        'status' => 'active',
        'attendance' => 65
    ],
    
    // KAMIS
    [
        'id' => 11,
        'title' => 'Doa Syafaat',
        'category' => 'Ibadah',
        'day' => 'Kamis',
        'date' => '2025-11-20',
        'time_start' => '19:00',
        'time_end' => '21:00',
        'location' => 'Ruang Doa',
        'speaker' => 'Tim Intercessor',
        'description' => 'Doa syafaat untuk gereja, kota, dan bangsa. Berdoa untuk pemulihan dan kebangunan rohani.',
        'status' => 'active',
        'attendance' => 55
    ],
    [
        'id' => 12,
        'title' => 'Kelas Musik Worship',
        'category' => 'Training',
        'day' => 'Kamis',
        'date' => '2025-11-20',
        'time_start' => '19:00',
        'time_end' => '21:00',
        'location' => 'Studio Musik',
        'speaker' => 'Worship Leader: Joshua Lim',
        'description' => 'Pelatihan musik worship untuk tim pujian dan pemain musik gereja.',
        'status' => 'active',
        'attendance' => 28
    ],
    
    // JUMAT
    [
        'id' => 13,
        'title' => 'Youth Night Service',
        'category' => 'Ibadah',
        'day' => 'Jumat',
        'date' => '2025-11-21',
        'time_start' => '19:00',
        'time_end' => '21:30',
        'location' => 'Aula Pemuda - Lantai 3',
        'speaker' => 'Ev. Kevin Tanuwijaya',
        'description' => 'Kebaktian malam pemuda dengan worship energik, games, dan firman yang applicable untuk anak muda.',
        'status' => 'active',
        'attendance' => 195
    ],
    [
        'id' => 14,
        'title' => 'Cell Group Meeting (Zona A)',
        'category' => 'Persekutuan',
        'day' => 'Jumat',
        'date' => '2025-11-21',
        'time_start' => '19:30',
        'time_end' => '21:30',
        'location' => 'Rumah Bpk. Peter (Zona A)',
        'speaker' => 'Cell Leader: Bpk. Peter Liem',
        'description' => 'Kelompok sel zona A untuk persekutuan intim dan saling mendoakan.',
        'status' => 'active',
        'attendance' => 15
    ],
    
    // SABTU
    [
        'id' => 15,
        'title' => 'Persekutuan Pemuda & Remaja',
        'category' => 'Persekutuan',
        'day' => 'Sabtu',
        'date' => '2025-11-22',
        'time_start' => '16:00',
        'time_end' => '18:00',
        'location' => 'Aula Pemuda - Lantai 3',
        'speaker' => 'Tim Pemuda',
        'description' => 'Persekutuan mingguan pemuda dan remaja dengan games, sharing, dan fun activities.',
        'status' => 'active',
        'attendance' => 120
    ],
    [
        'id' => 16,
        'title' => 'Konseling Keluarga',
        'category' => 'Pelayanan',
        'day' => 'Sabtu',
        'date' => '2025-11-22',
        'time_start' => '10:00',
        'time_end' => '12:00',
        'location' => 'Ruang Konseling',
        'speaker' => 'Pdt. Jonathan & Ibu Esther',
        'description' => 'Sesi konseling untuk pasangan dan keluarga yang membutuhkan bimbingan rohani.',
        'status' => 'active',
        'attendance' => 8
    ],
    [
        'id' => 17,
        'title' => 'Bakti Sosial - Kunjungan Panti Asuhan',
        'category' => 'Sosial',
        'day' => 'Sabtu',
        'date' => '2025-11-22',
        'time_start' => '09:00',
        'time_end' => '12:00',
        'location' => 'Panti Asuhan Kasih Sayang',
        'speaker' => 'Tim Sosial Gereja',
        'description' => 'Kunjungan dan membawa bantuan ke panti asuhan. Mari bergabung untuk berbagi kasih!',
        'status' => 'active',
        'attendance' => 35
    ],
];

// Event Khusus
$special_events = [
    [
        'id' => 101,
        'title' => 'Konser Rohani Natal 2025',
        'category' => 'Event Khusus',
        'date' => '2025-12-20',
        'time' => '18:00',
        'location' => 'Gedung Utama',
        'description' => 'Konser rohani spesial menyambut Natal dengan penampilan paduan suara dan special guest artists.',
        'image' => 'https://images.unsplash.com/photo-1482686115713-0fbcaced6e28?w=800',
        'status' => 'upcoming'
    ],
    [
        'id' => 102,
        'title' => 'Retreat Pemuda 2025',
        'category' => 'Event Khusus',
        'date' => '2025-12-28',
        'time' => '08:00',
        'location' => 'Villa Puncak, Cisarua',
        'description' => 'Retreat 3 hari 2 malam untuk pemuda dengan tema "Ignite Your Faith". Biaya: Rp 750.000',
        'image' => 'https://images.unsplash.com/photo-1478146896981-b80fe463b330?w=800',
        'status' => 'upcoming'
    ],
    [
        'id' => 103,
        'title' => 'Seminar Keluarga Bahagia',
        'category' => 'Training',
        'date' => '2025-11-30',
        'time' => '09:00',
        'location' => 'Aula Lantai 2',
        'description' => 'Seminar untuk pasangan suami istri tentang membangun keluarga yang harmonis dan bahagia.',
        'image' => 'https://images.unsplash.com/photo-1511632765486-a01980e01a18?w=800',
        'status' => 'upcoming'
    ],
    [
        'id' => 104,
        'title' => 'Camp Anak-Anak 2025',
        'category' => 'Event Khusus',
        'date' => '2025-12-15',
        'time' => '07:00',
        'location' => 'Campground Kopeng',
        'description' => 'Camp seru untuk anak-anak kelas 4-6 SD. Belajar firman Tuhan dengan cara yang fun!',
        'image' => 'https://images.unsplash.com/photo-1478827536114-da961b7f1d9b?w=800',
        'status' => 'upcoming'
    ],
];

// Ministries (Pelayanan)
$ministries = [
    [
        'name' => 'Pemuda & Remaja',
        'description' => 'Pelayanan untuk generasi muda usia 13-30 tahun',
        'schedule' => 'Minggu 16:00 & Sabtu 16:00',
        'contact' => 'Kevin (0812-3456-7890)',
        'icon' => '🙌'
    ],
    [
        'name' => 'Sekolah Minggu',
        'description' => 'Pelayanan untuk anak-anak usia 5-12 tahun',
        'schedule' => 'Minggu 08:00',
        'contact' => 'Ibu Maria (0813-4567-8901)',
        'icon' => '👶'
    ],
    [
        'name' => 'Paduan Suara',
        'description' => 'Tim worship dan paduan suara gereja',
        'schedule' => 'Selasa 19:30',
        'contact' => 'Samuel (0814-5678-9012)',
        'icon' => '🎵'
    ],
    [
        'name' => 'Doa Syafaat',
        'description' => 'Tim intercessor yang berdoa untuk gereja dan bangsa',
        'schedule' => 'Kamis 19:00',
        'contact' => 'Ibu Grace (0815-6789-0123)',
        'icon' => '🙏'
    ],
    [
        'name' => 'Sosial & Diakonia',
        'description' => 'Pelayanan sosial dan kepedulian kepada sesama',
        'schedule' => 'Sabtu (Sesuai Program)',
        'contact' => 'Bpk. Peter (0816-7890-1234)',
        'icon' => '❤️'
    ],
    [
        'name' => 'Usher & Sambut',
        'description' => 'Tim penyambut dan pelayan jemaat',
        'schedule' => 'Minggu (Setiap Ibadah)',
        'contact' => 'Bpk. Thomas (0817-8901-2345)',
        'icon' => '🤝'
    ],
];

// Gallery Images (Dummy)
$gallery = [
    ['title' => 'Ibadah Raya Minggu', 'image' => 'https://images.unsplash.com/photo-1438232992991-995b7058bbb3?w=800', 'category' => 'Ibadah'],
    ['title' => 'Youth Night Worship', 'image' => 'https://images.unsplash.com/photo-1510511459019-5dda7724fd87?w=800', 'category' => 'Pemuda'],
    ['title' => 'Sekolah Minggu Fun', 'image' => 'https://images.unsplash.com/photo-1503454537195-1dcabb73ffb9?w=800', 'category' => 'Anak'],
    ['title' => 'Bakti Sosial Panti', 'image' => 'https://images.unsplash.com/photo-1469571486292-0ba58a3f068b?w=800', 'category' => 'Sosial'],
    ['title' => 'Persekutuan Doa', 'image' => 'https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=800', 'category' => 'Doa'],
    ['title' => 'Paduan Suara', 'image' => 'https://images.unsplash.com/photo-1415201364774-f6f0bb35f28f?w=800', 'category' => 'Musik'],
];

// Fungsi Helper untuk mendapatkan schedule berdasarkan ID
function getScheduleById($id) {
    global $schedules;
    foreach ($schedules as $schedule) {
        if ($schedule['id'] == $id) {
            return $schedule;
        }
    }
    return null;
}

// Fungsi Helper untuk filter schedule berdasarkan hari
function getScheduleByDay($day) {
    global $schedules;
    return array_filter($schedules, function($s) use ($day) {
        return $s['day'] === $day;
    });
}

// Fungsi Helper untuk filter schedule berdasarkan kategori
function getScheduleByCategory($category) {
    global $schedules;
    return array_filter($schedules, function($s) use ($category) {
        return $s['category'] === $category;
    });
}
?>
