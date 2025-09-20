<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" height="200" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

# 🚀 CRUD Tabel Siswa

Projek ini adalah tugas **Penilaian Sumatif Tengah Semester** kelas XI semester 1 dari Student Day Programming Web, yang fokus pada implementasi **CRUD** (Create, Read, Update, Delete) pada tabel data siswa.

---

## 💡 Fitur Utama

-   **➕ Menambahkan** data siswa baru.
-   **🔍 Melihat** semua data siswa yang tersimpan.
-   **✍️ Mengubah** data siswa yang sudah ada.
-   **❌ Menghapus** data siswa dari tabel.

---

## 📊 Struktur Tabel `siswa`

Struktur tabel `siswa` pada database `studentdb.sql` adalah sebagai berikut:

| Nama Kolom  | Tipe Data      | Keterangan                      |
|-------------|----------------|---------------------------------|
| `id`        | `INT`          | Primary Key                     |
| `nama`      | `VARCHAR(255)` | Nama siswa                      |
| `jekel`     | `ENUM('L', 'P')` | Jenis kelamin (Laki-laki/Perempuan) |
| `kelas`     | `VARCHAR(255)`  | Kelas siswa                     |
| `tanggalLahir` | `DATE`         | Tanggal lahir siswa             |

---

## 🛠️ Teknologi yang Digunakan

-   **`PHP`**
-   **`MySQL`**
-   **`HTML`**

---

## ⚙️ Cara Menjalankan Projek

1.  `Clone` repositori ini ke folder `htdocs` XAMPP Anda.
2.  `Import` file database **`studentdb.sql`** ke `phpMyAdmin` MySQL Anda.
3.  Jalankan aplikasi di *browser* dengan URL: `http://localhost/crud-students/` atau dengan URL `http://127.0.0.1:8000/students`

---

## 💻 Aplikasi yang Digunakan
-   **`VScode`**
-   **`XAMPP`**
-   **`Goole Chrome`** atau web browser lain 
