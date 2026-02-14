# RSHP-Unair Dashboard

[![Laravel](https://img.shields.io/badge/Laravel-12.x-FF2D20?style=flat-square&logo=laravel)](https://laravel.com)
[![PHP](https://img.shields.io/badge/PHP-8.2+-777BB4?style=flat-square&logo=php)](https://php.net)
[![License](https://img.shields.io/badge/License-MIT-green?style=flat-square)](LICENSE)

> Repository untuk tugas mata kuliah Pengujian Perangkat Lunak

---

## Daftar Isi

- [Persyaratan Sistem](#-persyaratan-sistem)
- [Instalasi](#-instalasi)
- [Arsitektur Sistem](#%EF%B8%8F-arsitektur-sistem)
- [Sistem Otorisasi](#-sistem-otorisasi)
- [Struktur Project](#-struktur-project)

---

## Persyaratan Sistem

### Wajib

| Komponen | Versi | Keterangan |
|----------|-------|------------|
| PHP | >= 8.2 | Bahasa pemrograman |
| Composer | Latest | Dependency Manager untuk PHP |
| Laravel | 12.x | PHP Framework |

### Rekomendasi

| Komponen | Versi | Keterangan |
|----------|-------|------------|
| Laragon | Latest | Local development environment (Windows) |
| MySQL | >= 5.7 | Database |
| MariaDB | >= 10.3 | Alternatif database |

---

## Instalasi

### 1. Clone Repository

```bash
git clone https://github.com/jamaalul/prak_testing.git
cd prak_testing
```

### 2. Install Dependencies

```bash
composer install
```

### 3. Konfigurasi Environment

```bash
cp .env.example .env
php artisan key:generate
```

### 4. Setup Database

1. Buat database baru di Laragon/phpMyAdmin
2. Import file `database_rshp.dump` ke database
3. Konfigurasi koneksi database di file `.env`:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=nama_database_anda
DB_USERNAME=root
DB_PASSWORD=
```

### 5. Jalankan Aplikasi

```bash
php artisan serve
```

Aplikasi akan berjalan di `http://localhost:8000`

---

## Arsitektur Sistem

### Komponen Blade Reusable

Sistem ini menggunakan komponen Blade yang dapat digunakan ulang untuk konsistensi dan efisiensi.

#### Data Table Component

```blade
<x-data-table :data="$users" />
```

Komponen ini digunakan di setiap menu untuk menampilkan data dalam format tabel yang konsisten.

#### Confirmation Modal Component

```blade
<x-confirm-modal />
```

Komponen modal konfirmasi penghapusan yang dipanggil via JavaScript:

```javascript
openDeleteModal('model-name', id);
```

Contoh penggunaan pada tombol hapus:

```blade
<button onclick="openDeleteModal('user', {{ $user->id }})">
    Hapus
</button>
```

Fitur yang tersedia:
- Konfirmasi sebelum penghapusan
- Loading state saat proses hapus
- Pesan sukses/gagal setelah penghapusan
- Auto refresh tabel setelah berhasil

---

## Sistem Otorisasi

### Role-Based Access Control (RBAC)

Sistem menggunakan middleware [`RoleMiddleware`](app/Http/Middleware/RoleMiddleware.php) untuk mengatur akses berdasarkan role:

```
+-------------------------------------------------------------+
|                    DASHBOARD UTAMA                          |
+-------------------------------------------------------------+
|  +---------+  +---------+  +---------+  +---------+        |
|  |  Admin  |  | Dokter  |  | Perawat |  |  User   |        |
|  +----+----+  +----+----+  +----+----+  +----+----+        |
|       |            |            |            |              |
|       v            v            v            v              |
|  Full Access   Limited       Limited      Basic            |
|                Access        Access       Access           |
+-------------------------------------------------------------+
```

### Fitur Otorisasi

- Satu dashboard yang sama untuk semua role
- Menu ditampilkan secara dinamis berdasarkan role
- Akses ke fitur dibatasi sesuai hak akses
- Mapping role terpusat di middleware

---

## Struktur Project

```
praktikum_testing/
|-- app/
|   |-- Http/
|   |   |-- Controllers/
|   |   |   |-- AuthController.php
|   |   |   |-- DokterController.php
|   |   |   |-- PerawatController.php
|   |   |   |-- PetController.php
|   |   |   |-- RekamMedisController.php
|   |   |   +-- ...
|   |   +-- Middleware/
|   |       +-- RoleMiddleware.php
|   |-- Models/
|   +-- View/
|       +-- Components/
|-- resources/
|   +-- views/
|       |-- components/
|       |   |-- data-table.blade.php
|       |   +-- confirm-modal.blade.php
|       |-- dashboard/
|       +-- layouts/
|-- routes/
|   |-- dashboard.php
|   +-- auth.php
+-- database_rshp.dump
```

---

## License

Proyek ini dilisensikan di bawah [MIT License](LICENSE).
