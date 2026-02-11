# SIPRAS - Sistem Informasi Peminjaman Inventaris Barang

Sebuah aplikasi web modern untuk mengelola sistem peminjaman dan pengembalian inventaris barang secara digital dan efisien.

## 📋 Deskripsi Proyek

SIPRAS adalah platform manajemen inventaris yang dirancang untuk memudahkan proses peminjaman dan pengembalian barang. Sistem ini menyediakan interface yang user-friendly untuk melacak barang, mengelola kategori, dan mencatat history peminjaman dengan detail yang komprehensif.

## ✨ Fitur Utama

- **Manajemen Barang** - Tambah, edit, dan hapus barang inventaris dengan stok otomatis
- **Kategorisasi** - Organisir barang berdasarkan kategori untuk kemudahan pencarian
- **Sistem Peminjaman** - Catat proses peminjaman dengan tanggal dan status real-time
- **Detail Peminjaman** - Lacak setiap item yang dipinjam dengan informasi lengkap
- **Manajemen Pengguna** - Kelola data pengguna peminjam dengan autentikasi yang aman
- **Tracking Status** - Monitor status peminjaman (aktif, dikembalikan, dll)

## 🛠️ Teknologi yang Digunakan

- **Backend**: Laravel 10 (PHP Framework modern)
- **Database**: MySQL/SQLite (Database Agnostic)
- **Frontend**: Blade Templating Engine, Vite, JavaScript
- **ORM**: Eloquent (Laravel ORM)
- **Testing**: PHPUnit
- **API**: RESTful Routes dengan Laravel Routing

## 📊 Struktur Database

### Tabel Utama:
- **users** - Data pengguna/peminjam
- **kategoris** - Kategori barang
- **barangs** - Data inventaris barang dengan stok dan kondisi
- **peminjamans** - Riwayat peminjaman barang
- **detail_peminjamans** - Detail item dalam setiap peminjaman

### Relasi:
- User memiliki banyak Peminjaman (1:M)
- Peminjaman memiliki banyak Detail Peminjaman (1:M)
- Barang memiliki banyak Detail Peminjaman (1:M)
- Kategori memiliki banyak Barang (1:M)

## 🚀 Cara Instalasi

### Prerequisites:
- PHP >= 8.1
- Composer
- Node.js & NPM
- MySQL/SQLite

### Langkah Instalasi:

1. **Clone Repository**
   ```bash
   cd /path/to/project
   cd sipras
   ```

2. **Install Dependencies**
   ```bash
   composer install
   npm install
   ```

3. **Setup Environment**
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

4. **Konfigurasi Database**
   Edit file `.env`:
   ```
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=sipras
   DB_USERNAME=root
   DB_PASSWORD=
   ```

5. **Jalankan Migrations**
   ```bash
   php artisan migrate
   ```

6. **Jalankan Seeder (Opsional)**
   ```bash
   php artisan db:seed
   ```

7. **Build Assets**
   ```bash
   npm run build
   ```

8. **Jalankan Server Development**
   ```bash
   php artisan serve
   npm run dev
   ```

Aplikasi akan dapat diakses di `http://localhost:8000`

## 📁 Struktur Folder

```
sipras/
├── app/
│   ├── Http/
│   │   ├── Controllers/        # Controllers untuk handling logic
│   │   ├── Middleware/         # Middleware untuk autentikasi
│   │   └── Kernel.php
│   ├── Models/                 # Eloquent Models
│   │   ├── User.php
│   │   ├── Barang.php
│   │   ├── Kategori.php
│   │   ├── Peminjaman.php
│   │   └── DetailPeminjaman.php
│   └── Providers/
├── database/
│   ├── migrations/             # Database migrations
│   ├── factories/              # Model factories untuk testing
│   └── seeders/                # Database seeders
├── resources/
│   ├── views/                  # Blade templates
│   ├── css/                    # CSS files
│   └── js/                     # JavaScript files
├── routes/
│   ├── web.php                 # Web routes
│   ├── api.php                 # API routes
│   └── console.php
├── storage/                    # File storage untuk aplikasi
├── tests/                      # Unit & Feature tests
└── vendor/                     # Composer dependencies
```

## 🔐 Fitur Keamanan

- Autentikasi user dengan Laravel Sanctum
- Password hashing dengan Bcrypt
- CSRF Protection pada setiap form
- Authorization menggunakan Laravel Policies
- Validation rules pada input data

## 🧪 Testing

Jalankan test suite:
```bash
php artisan test
```

Jalankan test spesifik:
```bash
php artisan test tests/Feature/ExampleTest.php
```

## 📝 API Endpoints

Proyek ini menyediakan API RESTful untuk integrasi:

```
GET    /api/barang              - Dapatkan daftar barang
POST   /api/barang              - Tambah barang baru
GET    /api/peminjaman          - Dapatkan daftar peminjaman
POST   /api/peminjaman          - Buat peminjaman baru
GET    /api/kategori            - Dapatkan daftar kategori
```

## 👥 Kontribusi

Kontribusi sangat diterima! Silakan:
1. Fork repository ini
2. Buat branch fitur (`git checkout -b feature/AmazingFeature`)
3. Commit perubahan (`git commit -m 'Add some AmazingFeature'`)
4. Push ke branch (`git push origin feature/AmazingFeature`)
5. Buat Pull Request

## 📄 Lisensi

Proyek ini menggunakan lisensi MIT. Lihat file [LICENSE](LICENSE) untuk detail lebih lanjut.

## 📞 Kontak & Support

Untuk pertanyaan atau issue, silakan buka GitHub Issues atau hubungi via email.

## 🎯 Roadmap

- [ ] Export laporan ke PDF
- [ ] Notifikasi email untuk pengingat peminjaman
- [ ] Dashboard analytics
- [ ] Multi-user role management
- [ ] Integration dengan QR Code scanning
- [ ] Mobile app (React Native)

---

**Dibuat dengan ❤️ menggunakan Laravel & Vite**
