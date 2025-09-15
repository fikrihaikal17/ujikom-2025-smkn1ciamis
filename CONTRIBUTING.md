# Contributing to Ujikom 2025 SMKN1 Ciamis

Terima kasih telah mempertimbangkan untuk berkontribusi pada proyek ini! Berikut adalah panduan untuk berkontribusi.

## 📋 Cara Berkontribusi

### 1. Fork Repository
1. Fork repository ini ke akun GitHub Anda
2. Clone fork Anda ke local machine
3. Tambahkan remote upstream

```bash
git clone https://github.com/YOUR_USERNAME/ujikom-2025-smkn1ciamis.git
cd ujikom-2025-smkn1ciamis
git remote add upstream https://github.com/fikrihaikal17/ujikom-2025-smkn1ciamis.git
```

### 2. Setup Development Environment
```bash
# Install dependencies
make setup

# Atau manual
composer install
npm install
cp .env.example .env
php artisan key:generate
php artisan migrate:fresh --seed
```

### 3. Membuat Branch Feature
```bash
git checkout -b feature/nama-fitur-anda
```

### 4. Development Guidelines

#### Code Style
- Follow PSR-12 coding standards untuk PHP
- Use ESLint configuration untuk JavaScript
- Format code menggunakan tools yang disediakan:

```bash
# Format PHP code
make format

# Lint JavaScript
npm run lint

# Lint CSS
npm run lint:css
```

#### Testing
- Write tests untuk fitur baru
- Pastikan semua tests pass sebelum commit:

```bash
make test
```

#### Commit Messages
Gunakan format commit message yang jelas:

```
type(scope): subject

body

footer
```

**Types:**
- `feat`: Fitur baru
- `fix`: Bug fix
- `docs`: Documentation
- `style`: Code style (formatting, etc)
- `refactor`: Code refactoring
- `test`: Testing
- `chore`: Maintenance

**Contoh:**
```
feat(auth): add social login with Google

- Implement Google OAuth integration
- Add social login buttons to login page
- Update user model to store social provider data

Closes #123
```

### 5. Pull Request Process

1. **Update Documentation**
   - Update README.md jika perlu
   - Update CHANGELOG.md
   - Tambahkan docstring untuk functions/methods baru

2. **Testing**
   ```bash
   # Run semua tests
   make test
   
   # Check code quality
   make lint
   ```

3. **Submit Pull Request**
   - Push branch ke fork Anda
   - Buat Pull Request ke repository utama
   - Jelaskan perubahan yang dibuat
   - Link issue yang terkait jika ada

4. **Review Process**
   - Maintainer akan review PR Anda
   - Respond to feedback dan lakukan perubahan jika diperlukan
   - PR akan di-merge setelah approved

## 🎯 Apa yang Bisa Dikontribusikan

### Priority High
- **Security improvements**: Authentication, authorization, input validation
- **Performance optimization**: Query optimization, caching, asset optimization
- **API enhancements**: New endpoints, better error handling
- **Testing**: Unit tests, feature tests, integration tests

### Priority Medium
- **UI/UX improvements**: Frontend enhancements, responsive design
- **Documentation**: Code documentation, tutorials, examples
- **Developer tools**: Build processes, development scripts
- **Monitoring**: Logging, metrics, error tracking

### Priority Low
- **Code refactoring**: Clean up, organize code structure
- **Dependencies**: Update packages, remove unused dependencies
- **Configuration**: Environment setup improvements

## 🐛 Bug Reports

Ketika melaporkan bug, sertakan:

1. **Environment Information**
   - OS dan versi
   - PHP version
   - Laravel version
   - Browser (jika web-related)

2. **Steps to Reproduce**
   - Langkah-langkah detail untuk reproduce bug
   - Expected behavior
   - Actual behavior

3. **Additional Information**
   - Error messages atau logs
   - Screenshots jika diperlukan
   - Possible solution jika ada

## 💡 Feature Requests

Untuk request fitur baru:

1. Check existing issues untuk memastikan belum ada yang request
2. Jelaskan use case dan benefit dari fitur tersebut
3. Provide mockups atau contoh implementasi jika memungkinkan
4. Diskusikan technical approach

## 📚 Development Setup

### Prerequisites
- PHP 8.3+
- Composer 2.x
- Node.js 18+ & NPM 8+
- MySQL/PostgreSQL/SQLite
- Redis (optional)

### Development Commands
```bash
# Start development servers
make dev

# Run tests
make test

# Format code
make format

# Build for production
make build

# Docker development
make docker-up
make docker-shell
```

### Project Structure
```
├── app/                    # Application logic
├── config/                 # Configuration files
├── database/               # Database files
├── docker/                # Docker configuration
├── resources/             # Frontend resources
├── routes/                # Route definitions
├── tests/                 # Test files
└── ...
```

## 🔒 Security Policy

- Report security vulnerabilities privately
- Don't commit sensitive information
- Follow security best practices
- Use environment variables untuk sensitive data

## 📞 Contact

Jika ada pertanyaan tentang contributing:

1. Open issue untuk diskusi
2. Contact maintainer: [@fikrihaikal17](https://github.com/fikrihaikal17)
3. Join discussions di repository

## 📄 License

Dengan berkontribusi, Anda setuju bahwa kontribusi Anda akan dilisensikan di bawah MIT License yang sama dengan proyek ini.

---

Terima kasih atas kontribusi Anda! 🎉