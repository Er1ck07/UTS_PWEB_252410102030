# LiteraStore - General Bookstore (UTS Project)

LiteraStore adalah aplikasi web e-commerce perpustakaan dan toko buku umum berbasis **Laravel MVC** dengan estetika desain minimalis, hangat, dan elegan. Proyek ini dikembangkan untuk memenuhi Ujian Tengah Semester (UTS) mata kuliah pemrograman web dengan menerapkan arsitektur *Model-View-Controller*, pemrosesan data array, serta penanganan request parameter tanpa menggunakan database.

---

## 🎨 Desain & Tema Estetika
* **Tema Warna:** *Warm Cream / Off-White* (`#f7f5f0`) sebagai latar belakang, dikombinasikan dengan aksen *Forest Green* (`#2c3e35`) yang elegan dan teks cokelat tua hangat (`#2c2a29`).
* **Tipografi:** Menggunakan kombinasi font serif klasik (*Playfair Display*) dan sans-serif bersih (*Plus Jakarta Sans*).
* **Desain UI/Responsive:** Dibangun menggunakan kerangka utilitas **Tailwind CSS** agar responsif di berbagai ukuran layar perangkat.

---

## 📸 Preview Interface (Halaman Login)
Tampilan halaman login LiteraStore:
<img width="1365" height="600" alt="image" src="https://github.com/user-attachments/assets/0bde943b-efee-494b-b23a-da802ec347d5" />
Tampilan halaman dashboard LiteraStore:
<img width="1350" height="597" alt="image" src="https://github.com/user-attachments/assets/51e43564-bd41-44ae-9a0d-833e8b4df5f7" />
Tampilan halaman pengelolaan LiteraStore:
<img width="1344" height="600" alt="image" src="https://github.com/user-attachments/assets/ceef8f55-aa35-496c-bda6-a3d3fb490682" />
Tampilan halaman profile LiteraStore:
<img width="1361" height="598" alt="image" src="https://github.com/user-attachments/assets/6cb67a19-114a-4881-92fd-ef94eab3b5a4" />

---

## 📂 Struktur File Utama (Minimal 9+ Files)
Proyek ini terorganisir ke dalam struktur MVC Laravel yang bersih:
1. `routes/web.php` - Pusat pengaturan rute/URL aplikasi.
2. `app/Http/Controllers/PageController.php` - Controller utama yang mengatur logika dan pengiriman data.
3. `resources/views/layouts/app.blade.php` - Layout utama kerangka halaman web.
4. `resources/views/components/navbar.blade.php` - Komponen navigasi atas (navbar).
5. `resources/views/components/footer.blade.php` - Komponen bagian bawah (footer).
6. `resources/views/login.blade.php` - Halaman login input username pembaca.
7. `resources/views/dashboard.blade.php` - Halaman utama sambutan pembaca (Dashboard).
8. `resources/views/pengelolaan.blade.php` - Halaman katalog buku dengan rendering array data (`@foreach`).
9. `resources/views/profile.blade.php` - Halaman informasi profil pembaca.

---

## ⚙️ Routing & Data Flow
* **Root (`/`)**: Menampilkan halaman login (`login.blade.php`).
* **Dashboard (`/dashboard`)**: Menerima parameter `username` dari input form menggunakan `$request->input('username', 'Reader')` dan menampilkannya secara dinamis.
* **Katalog Buku (`/pengelolaan`)**: Merender daftar data array buku menggunakan struktur perulangan Blade `@foreach`.
* **Profil (`/profile`)**: Menampilkan detail ringkas akun pengguna berdasarkan sesi request.

---
