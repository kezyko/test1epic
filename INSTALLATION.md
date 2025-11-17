# Panduan Instalasi Sistem Informasi EPIC

## Daftar Isi
1. [Persyaratan Sistem](#persyaratan-sistem)
2. [Instalasi di XAMPP](#instalasi-di-xampp)
3. [Instalasi dengan PHP Built-in Server](#instalasi-dengan-php-built-in-server)
4. [Konfigurasi Database](#konfigurasi-database)
5. [Menjalankan Migrasi](#menjalankan-migrasi)
6. [Data Testing](#data-testing)

## Persyaratan Sistem

- PHP 8.1 atau lebih tinggi
- MySQL 5.7+ / MariaDB 10.3+ atau SQLite3
- Composer
- Extension PHP yang diperlukan:
  - intl
  - mbstring
  - json
  - mysqlnd (untuk MySQL) atau sqlite3 (untuk SQLite)

## Instalasi di XAMPP

### 1. Download dan Install XAMPP
- Download XAMPP dari [https://www.apachefriends.org/](https://www.apachefriends.org/)
- Install XAMPP di komputer Anda

### 2. Clone/Extract Project
```bash
# Clone dari repository
git clone https://github.com/kezyko/test1epic.git

# Atau extract file zip ke folder htdocs XAMPP
# Contoh: C:\xampp\htdocs\test1epic
```

### 3. Install Dependencies
Buka Command Prompt/Terminal di folder project:
```bash
cd C:\xampp\htdocs\test1epic
composer install
```

### 4. Konfigurasi Environment
```bash
# Copy file .env.example menjadi .env
copy .env.example .env
```

Edit file `.env` dan sesuaikan konfigurasi database:
```
CI_ENVIRONMENT = development

app.baseURL = 'http://localhost/test1epic/'

# Untuk MySQL (XAMPP default)
database.default.hostname = localhost
database.default.database = epic_db
database.default.username = root
database.default.password = 
database.default.DBDriver = MySQLi
database.default.port = 3306
```

### 5. Buat Database
- Buka phpMyAdmin (http://localhost/phpmyadmin)
- Buat database baru dengan nama `epic_db`

Atau via MySQL CLI:
```sql
CREATE DATABASE epic_db;
```

### 6. Generate Encryption Key
```bash
php spark key:generate --force
```

### 7. Jalankan Migrasi
```bash
php spark migrate
```

### 8. (Opsional) Seed Data Testing
```bash
php spark db:seed TestUsersSeeder
```

### 9. Akses Aplikasi
Buka browser dan akses: `http://localhost/test1epic/`

## Instalasi dengan PHP Built-in Server

### 1. Clone/Download Project
```bash
git clone https://github.com/kezyko/test1epic.git
cd test1epic
```

### 2. Install Dependencies
```bash
composer install
```

### 3. Konfigurasi Environment
```bash
cp .env.example .env
```

Edit file `.env`:
```
CI_ENVIRONMENT = development

app.baseURL = 'http://localhost:8080/'

# Untuk SQLite (lebih mudah untuk development)
database.default.DBDriver = SQLite3
database.default.database = writable/database/epic_db.db
database.default.DBPrefix =
```

Atau untuk MySQL:
```
# Untuk MySQL
database.default.hostname = localhost
database.default.database = epic_db
database.default.username = root
database.default.password = your_password
database.default.DBDriver = MySQLi
database.default.port = 3306
```

### 4. Buat Database Directory (untuk SQLite)
```bash
mkdir -p writable/database
touch writable/database/epic_db.db
chmod 777 writable/database/epic_db.db
```

### 5. Generate Encryption Key
```bash
php spark key:generate --force
```

### 6. Jalankan Migrasi
```bash
php spark migrate
```

### 7. Seed Data Testing
```bash
php spark db:seed TestUsersSeeder
```

### 8. Jalankan Server
```bash
php spark serve
```

### 9. Akses Aplikasi
Buka browser dan akses: `http://localhost:8080/`

## Konfigurasi Database

### MySQL (Recommended untuk Production)
```
database.default.hostname = localhost
database.default.database = epic_db
database.default.username = root
database.default.password = 
database.default.DBDriver = MySQLi
database.default.port = 3306
```

### SQLite (Recommended untuk Development)
```
database.default.DBDriver = SQLite3
database.default.database = writable/database/epic_db.db
database.default.DBPrefix =
```

## Menjalankan Migrasi

Sistem menggunakan migrasi database untuk membuat tabel-tabel yang diperlukan.

### Menjalankan Semua Migrasi
```bash
php spark migrate
```

### Rollback Migrasi
```bash
php spark migrate:rollback
```

### Melihat Status Migrasi
```bash
php spark migrate:status
```

## Data Testing

### User Default (setelah seeding)

1. **Admin**
   - Username: `admin`
   - Password: `admin123`
   - Role: Admin Lab Bahasa

2. **Kepala Lab**
   - Username: `kepala_lab`
   - Password: `kepalalab123`
   - Role: Kepala Lab

3. **Mahasiswa**
   - Username: `mahasiswa1`
   - Password: `mahasiswa123`
   - Role: Mahasiswa
   - NIM: 12345678

### Seeding Data Manual
```bash
php spark db:seed TestUsersSeeder
```

## Troubleshooting

### Error: "Unable to connect to the database"
- Pastikan MySQL/MariaDB service sudah berjalan
- Periksa kembali kredensial database di file `.env`
- Pastikan database sudah dibuat

### Error: "Class not found"
- Jalankan `composer install` atau `composer update`
- Clear autoload: `composer dump-autoload`

### Error: "Permission denied" (Linux/Mac)
```bash
chmod -R 777 writable/
```

### Error: "Encryption key not found"
```bash
php spark key:generate --force
```

## Struktur Tabel Database

### users
- id (Primary Key)
- username
- email
- password
- role (mahasiswa, admin, kepala_lab)
- status (active, inactive)
- created_at
- updated_at

### mahasiswa
- id (Primary Key)
- user_id (Foreign Key -> users.id)
- nim
- nama_lengkap
- jurusan
- semester
- no_telp
- created_at
- updated_at

### pendaftaran
- id (Primary Key)
- mahasiswa_id (Foreign Key -> mahasiswa.id)
- jenis_tes
- tanggal_tes
- waktu_tes
- tempat_tes
- status_pendaftaran (pending, verified, rejected, completed)
- hasil_tes
- sertifikat_path
- created_at
- updated_at

### pembayaran
- id (Primary Key)
- pendaftaran_id (Foreign Key -> pendaftaran.id)
- jumlah
- metode_pembayaran
- bukti_pembayaran
- status_verifikasi (pending, verified, rejected)
- keterangan_verifikasi
- verified_by (Foreign Key -> users.id)
- verified_at
- created_at
- updated_at

## Kontak & Support

Untuk pertanyaan dan bantuan, silakan hubungi tim development atau buka issue di repository GitHub.
