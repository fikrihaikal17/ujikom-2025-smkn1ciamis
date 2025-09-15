# Laravel 12 Ujikom 2025 - SMKN 1 Ciamis

![Laravel](https://img.shields.io/badge/Laravel-12.x-red.svg)
![Vue.js](https://img.shields.io/badge/Vue.js-3.x-green.svg)
![PHP](https://img.shields.io/badge/PHP-8.4+-blue.svg)
![License](https://img.shields.io/badge/License-MIT-green.svg)

> **Project Ujian Kompetensi Keahlian 2025**  
> Web Application Development dengan Laravel Framework + Vue.js

---

## 👤 Data Siswa

<div align="center">

| **Biodata** | **Keterangan** |
|-------------|----------------|
| **Nama Lengkap** | Muhammad Fikri Haikal |
| **NIS** | 232410560 |
| **NISN** | 0084673783 |
| **Tempat, Tanggal Lahir** | Nusa Tenggara Timur, 17 Maret 2008 |
| **Kelas** | XII PPLG |
| **Sekolah** | SMKN 1 Ciamis |
| **Tahun Ujikom** | 2025 |

</div>

## 🏫 Informasi Ujikom

- **📚 Mata Pelajaran**: Junior Developer
- **🎯 Kompetensi Keahlian**: Pengembangan Perangkat Lunak dan Gim (PPLG)
- **📅 Periode Ujikom**: 2025
- **💻 Project Type**: Full-Stack Web Application Development
- **🌐 Framework**: Laravel 12 + Vue.js 3

---

## 🚀 Tech Stack & Features

### 🎯 Frontend Stack
- **Vue.js 3** - Progressive JavaScript framework dengan Composition API
- **Tailwind CSS** - Utility-first CSS framework untuk styling cepat
- **Vite** - Lightning-fast frontend build tool dan dev server
- **JavaScript ES6+** - Modern JavaScript dengan module support

### 🔧 Backend Stack  
- **Laravel 12** - Custom minimal implementation framework
- **MySQL 8.0+** - Relational database dengan Eloquent ORM
- **PHP 8.4+** - Server-side scripting dengan type declarations
- **Custom Autoloader** - PSR-4 compliant autoloading (bypass Composer)

### 🧪 Testing & Development
- **PHPUnit** - Unit testing framework untuk backend
- **Laragon** - Local development environment
- **VS Code** - IDE dengan complete IntelliSense support
- **Git** - Version control system

### ✨ Key Features
- ⚡ **SPA-like Experience** dengan Vue.js components
- 📱 **Responsive Design** - Mobile-first approach
- 🎨 **Modern UI/UX** - Clean dan intuitive interface
- 🔒 **Secure** - Laravel security best practices
- 🚀 **Performance Optimized** - Vite bundling & lazy loading
- 📝 **Full Documentation** - Comprehensive setup guide

---

## 📋 Requirements

### 🔧 Development Environment (Laragon Recommended!)
- **Laragon** v6+ - All-in-one development stack
  - ✅ PHP 8.4+
  - ✅ MySQL 8.0+  
  - ✅ Apache/Nginx
  - ✅ Node.js 18+
  - ✅ Git integration
- **Alternative**: XAMPP + Node.js manual setup

### 🛠️ VS Code Extensions
- **PHP Intelephense** - PHP language support
- **Vue Language Features (Volar)** - Vue.js 3 support  
- **Tailwind CSS IntelliSense** - CSS class autocomplete
- **Laravel Extension Pack** - Laravel development tools

### 🌐 Browser Support
- Chrome 88+ | Firefox 85+ | Safari 14+ | Edge 88+

---

## 🔧 Installation Guide

### 🚀 Quick Setup dengan Laragon (Recommended)

#### Step 1: Install Laragon
1. Download **Laragon Full** dari [laragon.org](https://laragon.org/download/)
2. Install dengan default settings
3. Start Laragon → **Start All** (Apache, MySQL, PHP)
4. Pastikan semua service hijau ✅

#### Step 2: Clone Repository
```bash
# Open Terminal di Laragon
cd C:\laragon\www
git clone https://github.com/fikrihaikal17/ujikom-2025-smkn1ciamis.git
cd ujikom-2025-smkn1ciamis
```

#### Step 3: Database Setup
1. **Buka Laragon** → **Database** → **Open**
2. Create database: `ujikom_2025`
3. Copy `.env.example` to `.env`
4. Configure database di `.env`:

```env
APP_NAME="Laravel Ujikom 2025"
APP_ENV=local
APP_DEBUG=true
APP_URL=http://ujikom-2025.test

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=ujikom_2025
DB_USERNAME=root
DB_PASSWORD=
```

#### Step 4: Install Frontend Dependencies
```bash
# Install Node.js dependencies untuk Vue.js
npm install

# Atau jika menggunakan yarn
yarn install
```

#### Step 5: Build Frontend Assets
```bash
# Development mode (dengan hot reload)
npm run dev

# Production build
npm run build
```

#### Step 6: Setup Laravel
```bash
# Run database migrations
php artisan migrate

# Generate application key (jika belum ada)
php artisan key:generate

# Link storage
php artisan storage:link
```

#### Step 7: Start Development Server
```bash
# Terminal 1: Laravel development server
php artisan serve

# Terminal 2: Vite dev server (untuk Vue.js hot reload)
npm run dev
```

**🎉 Open browser**: `http://127.0.0.1:8000`

### ⚡ Alternative: Manual Setup (XAMPP)

#### Prerequisites
- XAMPP dengan PHP 8.4+
- Node.js 18+
- Git
- VS Code

#### Setup Steps
1. Copy project ke `htdocs` folder
2. Start XAMPP (Apache + MySQL)
3. Follow steps 3-7 dari Laragon setup

---

## 📁 Project Structure

```
ujikom-2025/
├── app/                    # Application logic
│   ├── Http/Controllers/   # Controllers
│   ├── Models/            # Eloquent models
│   └── Providers/         # Service providers
├── config/                # Configuration files
├── database/              # Migrations, factories, seeders
├── public/                # Web accessible files
├── resources/             # Views, CSS, JS, Vue components
│   ├── js/components/     # Vue.js components
│   ├── views/            # Blade templates
│   └── css/              # Stylesheets
├── routes/                # Route definitions
├── vendor/                # Custom Laravel stubs
└── tests/                 # Test files
```

---

## 🛠️ Development Workflow

### 🎯 Frontend Development dengan Vue.js
```bash
# Start development dengan hot reload
npm run dev

# Build untuk production
npm run build

# Preview production build
npm run serve
```

### 🔧 Backend Development dengan Laravel
```bash
# Start Laravel development server
php artisan serve

# Run tests
php artisan test

# Database migrations
php artisan migrate

# Create new migration
php artisan make:migration create_example_table
```

### 🧪 Testing
```bash
# Run all tests
php artisan test

# Run specific test file
php artisan test tests/Feature/ExampleTest.php

# Run with coverage
php artisan test --coverage
```

---

## 🎯 Tujuan Project

Project ini dibuat sebagai bagian dari **Ujian Kompetensi Keahlian (Ujikom) 2025** untuk mendemonstrasikan kemampuan dalam:

- ✅ **Full-Stack Web Development** dengan Laravel + Vue.js
- ✅ **Database Design & Management** dengan MySQL
- ✅ **Modern Frontend Development** dengan Vue.js & Tailwind CSS
- ✅ **API Development** untuk SPA integration
- ✅ **Testing** dengan PHPUnit framework
- ✅ **Version Control** dengan Git & GitHub
- ✅ **Problem Solving** dalam custom implementation
- ✅ **Project Documentation** yang profesional

---

## 👨‍💻 Contact & Social Media

**Muhammad Fikri Haikal**

<div align="center">

| **Platform** | **Link/Info** |
|--------------|---------------|
| 📧 **Email** | [fikrihaikal170308@gmail.com](mailto:fikrihaikal170308@gmail.com) |
| 🐙 **GitHub** | [@fikrihaikal17](https://github.com/fikrihaikal17) |
| 🏫 **Sekolah** | SMKN 1 Ciamis |
| 📚 **Jurusan** | Pengembangan Perangkat Lunak dan Gim (PPLG) |
| 🎓 **Angkatan** | 2022-2025 |

</div>

---

## 🏫 Informasi Sekolah

**SMK Negeri 1 Ciamis**


- 📍 **Alamat**: Jl. Jenderal Sudirman No.269, Ciamis, Jawa Barat
- 🌐 **Website**: [smkn1ciamis.sch.id](https://smkn1ciamis.sch.id)
- ⭐ **Kompetensi Keahlian**: Pengembangan Perangkat Lunak dan Gim (PPLG)
- 📅 **Periode Ujikom**: Tahun Pelajaran 2024/2025

</div>

---

## 🏆 Achievement Targets

Melalui project ini, diharapkan dapat menunjukkan pencapaian kompetensi:

- [x] **Merancang dan membangun aplikasi web** dengan framework modern
- [x] **Mengimplementasikan SPA** dengan Vue.js + Laravel API
- [x] **Menerapkan responsive design** untuk berbagai device
- [x] **Menggunakan version control** untuk manajemen kode
- [x] **Dokumentasi project** yang lengkap dan profesional
- [x] **Performance optimization** dengan modern build tools

---

## 📜 License

This project is open-sourced software licensed under the [MIT license](LICENSE).

---

<div align="center">

**🎓 Laravel 12 Ujikom 2025 - SMKN 1 Ciamis 🎓**

*Dibuat dengan ❤️ oleh Muhammad Fikri Haikal*

**Ready for modern full-stack development!** 🚀

---

⭐ **Star this repo if you find it helpful!** ⭐

</div>