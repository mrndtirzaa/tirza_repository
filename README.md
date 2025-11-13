# 📅 GerejaKu Schedule - Website Jadwal Kegiatan Mingguan Gereja

Website sistem jadwal kegiatan mingguan gereja dengan desain modern menggunakan Tailwind CSS dan animasi CSS yang menarik. 
**Proyek ini menggunakan data dummy untuk keperluan demo.**

## 🎯 Fitur Utama

### 👥 **Halaman Publik (User)**
- **Landing Page** dengan hero section animasi gradient
- **Jadwal Lengkap** dengan filter hari, kategori, dan search
- **Kalender Bulanan** interaktif dengan navigasi bulan
- **Kategori Kegiatan** (Ibadah, Pelayanan, Persekutuan, Training, Event, Sosial)
- **Event Spesial** dengan gambar dan detail
- **Informasi Pelayanan** gereja
- **Galeri Foto** kegiatan
- **Halaman Tentang** & **Kontak**

### 🔐 **Halaman Admin**
- **Dashboard** dengan statistik kegiatan
- **Kelola Jadwal** (CRUD operations)
- **Tambah/Edit Jadwal** dengan form lengkap
- **Pengaturan** website
- **Session Management** untuk keamanan

## 📁 Struktur Folder

```
gerejaku-schedule/
├── index.php              # Landing page
├── about.php              # Tentang gereja
├── contact.php            # Kontak & lokasi
├── login.php              # Login admin
├── logout.php             # Logout admin
│
├── includes/              # File pendukung
│   ├── config.php        # Konfigurasi & session
│   ├── dummy-data.php    # Data jadwal dummy
│   └── functions.php     # Helper functions
│
├── user/                  # Halaman user (7 files)
│   ├── schedule.php      # Jadwal lengkap
│   ├── schedule-detail.php # Detail kegiatan
│   ├── calendar.php      # Kalender bulanan
│   ├── categories.php    # Kategori kegiatan
│   ├── events.php        # Event spesial
│   ├── ministries.php    # Info pelayanan
│   └── gallery.php       # Galeri foto
│
└── admin/                 # Halaman admin (5 files)
    ├── dashboard.php     # Dashboard admin
    ├── manage-schedule.php # Kelola jadwal
    ├── add-schedule.php  # Tambah jadwal
    ├── edit-schedule.php # Edit jadwal
    └── settings.php      # Pengaturan
```

## 🚀 Cara Instalasi

### 1. **Requirements**
- PHP 7.4 atau lebih tinggi
- Web server (Apache/Nginx) atau XAMPP/WAMP
- Browser modern (Chrome, Firefox, Edge)

### 2. **Instalasi**

**A. Menggunakan XAMPP/WAMP:**
1. Extract file `gerejaku-schedules.zip`
2. Copy folder `gerejaku-schedule` ke folder `htdocs` (XAMPP) atau `www` (WAMP)
3. Buka browser dan akses: `http://localhost/gerejaku-schedule`

**B. Menggunakan PHP Built-in Server:**
1. Extract file `gerejaku-schedules.zip`
2. Buka terminal/command prompt
3. Masuk ke folder: `cd gerejaku-schedule`
4. Jalankan: `php -S localhost:8000`
5. Buka browser: `http://localhost:8000`

## 🔐 Login Admin

Untuk mengakses halaman admin:
- **URL:** `http://localhost/gerejaku-schedule/login.php`
- **Username:** `admin`
- **Password:** `admin123`

## 🎨 Teknologi yang Digunakan

- **Backend:** PHP (Native)
- **Frontend:** HTML5, CSS3
- **CSS Framework:** Tailwind CSS (via CDN)
- **Icons:** Font Awesome 6.4.0
- **Animations:** Custom CSS Animations
- **No Database:** Data menggunakan array PHP (dummy data)

## ✨ Highlight Features

### 🎭 **Animasi & UI/UX**
- ✅ Gradient background animation
- ✅ Fade in up animations
- ✅ Hover scale effects
- ✅ Smooth transitions
- ✅ Responsive design (Mobile, Tablet, Desktop)
- ✅ Loading animations
- ✅ Pulse animations untuk badges

### 📱 **Responsive Design**
- Mobile-first approach
- Optimized untuk semua ukuran layar
- Touch-friendly navigation
- Adaptive layouts

### 🔍 **Search & Filter**
- Filter berdasarkan hari
- Filter berdasarkan kategori
- Search kegiatan (nama, pembicara, deskripsi)
- View mode: List & Grid

### 📊 **Data Management (Admin)**
- CRUD operations lengkap
- Form validation
- Session management
- Success/error notifications

## 📋 Data Dummy

Website ini memiliki **17 kegiatan mingguan** dengan kategori:
- 🛐 **Ibadah** (5 kegiatan)
- 🙏 **Pelayanan** (4 kegiatan)
- 👥 **Persekutuan** (4 kegiatan)
- 📚 **Training** (2 kegiatan)
- 🎉 **Event Khusus** (1 kegiatan)
- ❤️ **Sosial** (1 kegiatan)

Plus **4 event spesial** mendatang!

## 🎯 Fitur Tambahan

- **Print functionality** untuk jadwal
- **Share functionality** untuk detail kegiatan
- **Calendar navigation** antar bulan
- **Ministry information** dengan kontak
- **Gallery dengan hover effects**
- **Social media integration**
- **Google Maps integration** (UI only)

## 🔧 Customization

### Mengubah Informasi Gereja
Edit file `includes/config.php`:
```php
define('CHURCH_NAME', 'Nama Gereja Anda');
define('CHURCH_ADDRESS', 'Alamat Gereja');
define('CHURCH_PHONE', 'No. Telepon');
define('CHURCH_EMAIL', 'email@gereja.com');
```

### Mengubah Kredensial Admin
Edit file `includes/config.php`:
```php
define('ADMIN_USERNAME', 'username_baru');
define('ADMIN_PASSWORD', 'password_baru');
```

### Menambah Data Jadwal
Edit file `includes/dummy-data.php` dan tambahkan array baru pada `$schedules`.

## 📸 Screenshots

### Landing Page
- Hero section dengan gradient animation
- Preview jadwal minggu ini (6 cards)
- Event highlights
- Quick info cards

### Schedule Page
- Filter & search bar
- List/Grid view toggle
- Detailed schedule cards
- Category badges

### Admin Dashboard
- Statistics cards
- Today's schedule
- Quick actions
- Navigation sidebar

## ⚠️ Important Notes

1. **Demo Mode:** Ini adalah website demo dengan data dummy. Tidak ada koneksi database.
2. **CRUD Operations:** Operasi tambah/edit/hapus hanya untuk tampilan. Data tidak benar-benar tersimpan.
3. **Session Management:** Login admin menggunakan PHP session yang sederhana.
4. **Production Use:** Untuk penggunaan produksi, integrasikan dengan database (MySQL/PostgreSQL) dan tambahkan security measures yang lebih baik.

## 🔒 Security Recommendations (Untuk Produksi)

Jika ingin menggunakan untuk produksi:
1. Gunakan database untuk menyimpan data
2. Hash password menggunakan `password_hash()` dan `password_verify()`
3. Implementasikan CSRF protection
4. Gunakan prepared statements untuk query database
5. Validasi dan sanitasi semua input
6. Implementasikan rate limiting untuk login
7. Gunakan HTTPS
8. Set proper file permissions

## 🎓 Learning Resources

Website ini dibuat dengan:
- PHP Native (tidak menggunakan framework)
- Tailwind CSS untuk styling cepat
- CSS Animations untuk efek visual
- Font Awesome untuk icons

## 📝 License

Proyek ini dibuat untuk keperluan demo dan pembelajaran. Anda bebas menggunakan, memodifikasi, dan mendistribusikan.

## 👨‍💻 Developer

Website ini dikembangkan sebagai sistem jadwal kegiatan gereja yang modern dan user-friendly.

## 🙏 Support

Jika ada pertanyaan atau butuh bantuan, silakan hubungi pengembang.

---

**© 2025 GerejaKu Schedule. Made with ❤️ for God's glory.**
