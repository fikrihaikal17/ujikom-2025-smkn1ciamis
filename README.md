# Ujikom 2025 SMKN1 Ciamis - Laravel 12 Repository

![Laravel](https://img.shields.io/badge/Laravel-12.x-red.svg)
![PHP](https://img.shields.io/badge/PHP-8.3+-blue.svg)
![License](https://img.shields.io/badge/License-MIT-green.svg)

Repositori lengkap untuk pengembangan aplikasi Laravel 12 dengan konfigurasi komprehensif yang siap untuk pengembangan dan produksi.

## 🚀 Fitur Utama

### Framework & Teknologi
- **Laravel 12** - Framework PHP terbaru
- **PHP 8.3+** - Versi PHP terkini dengan performa optimal
- **MySQL/PostgreSQL/SQLite** - Support multi database
- **Redis** - Caching dan session storage
- **Vue.js 3** - Frontend framework modern
- **Tailwind CSS 4** - Utility-first CSS framework
- **Vite** - Build tool yang cepat

### Konfigurasi Development
- **Docker** - Environment containerized lengkap
- **Laravel Sail** - Docker environment bawaan Laravel
- **Hot Module Replacement** - Development yang lebih cepat
- **Code Quality Tools** - PHP CS Fixer, ESLint, Prettier
- **Testing** - PHPUnit dengan coverage
- **Queue Management** - Background job processing

### Fitur Keamanan
- **Laravel Sanctum** - API authentication
- **CORS** - Cross-origin resource sharing
- **Rate Limiting** - API throttling
- **Input Validation** - Comprehensive validation rules
- **CSRF Protection** - Cross-site request forgery protection

### Tools & Utilities
- **Backup System** - Database backup automation
- **File Upload** - Secure file handling
- **Email System** - Multi-provider email support
- **Real-time Features** - WebSocket support with Pusher
- **API Documentation** - Auto-generated docs
- **Monitoring** - Application performance tracking

## 📋 Prasyarat

- PHP 8.3 atau lebih tinggi
- Composer 2.x
- Node.js 18+ & NPM 8+
- MySQL 8.0+ / PostgreSQL 15+ / SQLite
- Redis (opsional)
- Docker & Docker Compose (untuk development)

## 🛠️ Instalasi

### 1. Clone Repository
```bash
git clone https://github.com/fikrihaikal17/ujikom-2025-smkn1ciamis.git
cd ujikom-2025-smkn1ciamis
```

### 2. Setup Menggunakan Makefile (Rekomendasi)
```bash
make setup
```

### 3. Setup Manual
```bash
# Install dependencies
composer install
npm install

# Setup environment
cp .env.example .env
php artisan key:generate

# Setup database
touch database/database.sqlite
php artisan migrate:fresh --seed

# Setup storage
php artisan storage:link

# Build assets
npm run build
```

### 4. Setup dengan Docker
```bash
# Start containers
make docker-up

# Setup aplikasi di container
make docker-shell
make setup
```

## 🚀 Development

### Start Development Server
```bash
# Menggunakan Makefile
make dev

# Manual
composer run dev
# atau
php artisan serve & npm run dev & php artisan queue:work & php artisan pail
```

### Testing
```bash
# Run semua test
make test

# Test dengan coverage
make test-coverage

# Manual
php artisan test
```

### Code Quality
```bash
# Format code
make format

# Lint code
make lint

# Analyse code
make analyse
```

## 📁 Struktur Project

```
├── app/                    # Application logic
│   ├── Http/Controllers/   # Controllers
│   ├── Models/             # Eloquent models
│   ├── Services/           # Business logic
│   └── ...
├── config/                 # Configuration files
│   ├── api.php            # API configuration
│   └── ...
├── database/               # Database files
│   ├── migrations/         # Database migrations
│   ├── seeders/           # Database seeders
│   └── factories/         # Model factories
├── docker/                # Docker configuration
│   ├── nginx/             # Nginx config
│   ├── php/               # PHP config
│   └── supervisor/        # Supervisor config
├── resources/             # Frontend resources
│   ├── js/                # JavaScript files
│   ├── css/               # CSS files
│   └── views/             # Blade templates
├── routes/                # Route definitions
├── tests/                 # Test files
├── .env.example          # Environment template
├── docker-compose.yml    # Docker compose config
├── Dockerfile           # Docker image config
├── Makefile            # Development commands
└── README.md           # This file
```

## 🔧 Konfigurasi

### Environment Variables
Copy `.env.example` ke `.env` dan sesuaikan konfigurasi:

```bash
# Application
APP_NAME="Ujikom 2025 SMKN1 Ciamis"
APP_ENV=local
APP_DEBUG=true
APP_URL=http://localhost
APP_TIMEZONE=Asia/Jakarta

# Database
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=ujikom_2025_smkn1ciamis
DB_USERNAME=root
DB_PASSWORD=

# Cache & Queue
CACHE_STORE=redis
QUEUE_CONNECTION=redis
REDIS_HOST=127.0.0.1
```

### Database Setup
```bash
# Migrate dan seed database
php artisan migrate:fresh --seed

# Atau menggunakan Makefile
make fresh
```

## 📖 API Documentation

API documentation tersedia di `/docs` ketika aplikasi berjalan dalam mode development.

### Endpoint Utama
- `GET /api/v1/users` - List users
- `POST /api/v1/auth/login` - Login
- `POST /api/v1/auth/register` - Register
- `POST /api/v1/auth/logout` - Logout

## 🔒 Keamanan

### Best Practices
- ✅ Input validation pada semua endpoint
- ✅ CSRF protection untuk web routes
- ✅ Rate limiting untuk API
- ✅ Secure headers configuration
- ✅ Environment variables untuk sensitive data
- ✅ Database query protection (prepared statements)

### Security Checklist
```bash
# Check security vulnerabilities
make security-check

# Update dependencies
composer update
npm update
```

## 🚀 Deployment

### Production Setup
```bash
# Build untuk production
make build

# Deploy ke production
make deploy
```

### Environment Production
```bash
APP_ENV=production
APP_DEBUG=false
LOG_LEVEL=error

# Cache configurations
php artisan config:cache
php artisan route:cache
php artisan view:cache
```

## 📊 Monitoring & Logging

### Logs
- Application logs: `storage/logs/laravel.log`
- Queue logs: `storage/logs/queue.log`
- Error logs: `storage/logs/error.log`

### Performance Monitoring
- Laravel Telescope (development)
- Laravel Horizon (queue monitoring)
- Built-in performance metrics

## 🔄 Backup

### Database Backup
```bash
# Manual backup
make backup

# Scheduled backup (add to cron)
php artisan backup:run
```

## 🤝 Contributing

1. Fork repository
2. Create feature branch (`git checkout -b feature/amazing-feature`)
3. Commit changes (`git commit -m 'Add amazing feature'`)
4. Push to branch (`git push origin feature/amazing-feature`)
5. Open Pull Request

### Code Style
- Follow PSR-12 coding standards
- Use PHP CS Fixer untuk formatting
- Write tests untuk fitur baru
- Update documentation

## 📝 License

Project ini menggunakan [MIT License](LICENSE).

## 👥 Team

- **Developer**: [Fikri Haikal](https://github.com/fikrihaikal17)
- **Institution**: SMKN 1 Ciamis
- **Year**: 2025

## 📞 Support

Jika mengalami masalah atau memiliki pertanyaan:

1. Check [Issues](https://github.com/fikrihaikal17/ujikom-2025-smkn1ciamis/issues)
2. Create new issue jika belum ada
3. Contact maintainer

---

## 🛠️ Quick Commands Reference

```bash
# Development
make dev                 # Start development servers
make test               # Run tests
make format             # Format code
make clean              # Clean cache

# Docker
make docker-up          # Start containers
make docker-down        # Stop containers
make docker-shell       # Access container shell

# Database
make fresh              # Fresh migration with seeding
make backup             # Backup database

# Production
make build              # Build for production
make deploy             # Deploy to production
```

Happy coding! 🎉
