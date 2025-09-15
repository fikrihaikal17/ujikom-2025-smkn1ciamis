# Laravel 12 Ujikom 2025 - SMKN 1 Ciamis

Project Laravel 12 untuk Ujikom 2025 di SMKN 1 Ciamis dengan custom minimal implementation.

## 🚀 Features

- Laravel 12 Framework (Custom Minimal Implementation)
- MySQL Database Integration
- Tailwind CSS & Vite for Frontend
- PHPUnit Testing Framework
- Custom Autoloader (bypass Composer issues)
- Complete Laravel stubs for VS Code IntelliSense

## 📋 Requirements

- PHP 8.4+ 
- MySQL Database
- Laragon (recommended) or XAMPP
- VS Code with Intelephense extension

## 🔧 Installation

### Step 1: Clone Repository
```bash
git clone https://github.com/fikrihaikal17/ujikom-2025-smkn1ciamis.git
cd ujikom-2025-smkn1ciamis
```

### Step 2: Environment Setup
1. Copy `.env.example` to `.env`
2. Configure database settings in `.env`:
```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=ujikom_2025
DB_USERNAME=root
DB_PASSWORD=
```

### Step 3: Database Setup
1. Create database `ujikom_2025` in MySQL
2. Run migrations:
```bash
php artisan migrate
```

### Step 4: Start Development Server
```bash
php artisan serve
```

Visit: `http://127.0.0.1:8000`

## 📁 Project Structure

```
ujikom-2025/
├── app/                    # Application logic
├── config/                 # Configuration files
├── database/              # Migrations, factories, seeders
├── public/                # Web accessible files
├── resources/             # Views, CSS, JS
├── routes/                # Route definitions
├── vendor/                # Custom Laravel stubs
└── tests/                 # Test files
```

## 🛠️ Development

### Custom Implementation
This project uses a custom minimal Laravel implementation to bypass Composer dependency issues while maintaining full Laravel functionality.

### VS Code Integration
Complete stub classes provided for full IntelliSense support without traditional Composer autoloading.

### Testing
```bash
php artisan test
```

## 👨‍💻 Author

**Fikri Haikal**
- GitHub: [@fikrihaikal17](https://github.com/fikrihaikal17)
- Email: fikrihaikal170308@gmail.com

## 🏫 Institution

**SMKN 1 Ciamis**
- Ujikom 2025 Project
- Teknik Komputer dan Jaringan

## 📜 License

This project is open-sourced software licensed under the [MIT license](LICENSE).

---

**Laravel 12 Ujikom 2025** - Ready for development! 🚀