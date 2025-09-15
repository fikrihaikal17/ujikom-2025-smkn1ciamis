# Panduan Setup Laravel 12 - Ujikom 2025

## 🚀 Quick Setup

### Opsi 1: Setup Otomatis (Recommended)

1. Double-click file `setup.bat`
2. Ikuti instruksi yang muncul

### Opsi 2: Setup Manual

#### Step 1: Persiapan Environment

1. Pastikan Laragon sudah running
2. Buka terminal/cmd di folder project ini
3. Jalankan perintah berikut:

```batch
php -m | findstr -i "openssl curl pdo_mysql"
```

Jika tidak muncul extension tersebut, lakukan:

1. Buka Laragon → Menu → PHP → php.ini
2. Uncomment (hapus `;`) dari baris berikut:
   ```ini
   extension=openssl
   extension=curl
   extension=pdo_mysql
   ```
3. Restart Laragon

#### Step 2: Install Dependencies

```batch
composer install --no-scripts --prefer-dist
```

Jika error SSL/OpenSSL:

```batch
composer config -g disable-tls true
composer config -g secure-http false
composer install --no-scripts --prefer-dist
```

#### Step 3: Setup Application

```batch
# Generate application key
php artisan key:generate

# Create storage symlink
php artisan storage:link

# Install JS dependencies (optional)
npm install

# Build assets (optional)
npm run build
```

#### Step 4: Database Setup

1. Buka phpMyAdmin (Laragon → Database)
2. Buat database baru dengan nama: `ujikom_2025`
3. Jalankan migration:

```batch
php artisan migrate
```

#### Step 5: Run Application

```batch
php artisan serve
```

Aplikasi akan berjalan di: http://localhost:8000

## 🎉 Status Instalasi

**✅ SETUP BERHASIL COMPLETED!**

Laravel 12 untuk Ujikom 2025 sudah siap digunakan dengan:

- Server development: `http://127.0.0.1:8000` ✅
- Database configuration: MySQL (ujikom_2025) ✅
- Application key: Generated ✅
- Basic artisan commands: Available ✅
- Storage symlink: Created ✅

### 📁 Struktur Project (Updated)

```
ujikom-2025/
├── app/               # Application logic
├── bootstrap/         # Framework bootstrap (Modified for minimal setup)
├── config/           # Configuration files
├── database/         # Migrations, seeds, factories
├── public/           # Web accessible files (Modified for basic routing)
├── resources/        # Views, assets, lang files
├── routes/           # Route definitions
├── storage/          # File storage
├── tests/            # Test files
├── vendor/           # Minimal autoloader (Custom implementation)
├── .env              # Environment configuration
├── artisan           # Artisan command line tool (Modified)
├── composer.json     # PHP dependencies
└── setup.bat         # Automated setup script
```

### 🎯 Fitur yang Sudah Dikonfigurasi

- ✅ Laravel 12 Framework (Minimal Implementation)
- ✅ MySQL Database Configuration
- ✅ Basic Artisan Commands (serve, key:generate, storage:link, migrate)
- ✅ Application Key Generated
- ✅ Development Server Ready
- ✅ Basic Routing System
- ✅ Environment Configuration
- ✅ Welcome Page
- ✅ Health Check Endpoint (/up)

## 🔧 Troubleshooting

### Error: OpenSSL Extension

- **Masalah**: Composer tidak bisa connect ke packagist.org
- **Solusi**:
  1. Enable extension openssl di php.ini
  2. Restart Laragon
  3. Atau gunakan: `composer config -g disable-tls true`

### Error: Database Connection

- **Masalah**: SQLSTATE[HY000] [2002] Connection refused
- **Solusi**:
  1. Pastikan MySQL running di Laragon
  2. Check .env file (DB_HOST=127.0.0.1, DB_PORT=3306)
  3. Buat database `ujikom_2025` di phpMyAdmin

### Error: Permission Denied (storage/logs)

- **Masalah**: Laravel tidak bisa write ke folder storage
- **Solusi**: Jalankan `php artisan storage:link`

### Error: Mix/Vite Assets Not Found

- **Masalah**: CSS/JS tidak load
- **Solusi**:
  1. `npm install`
  2. `npm run build`

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
