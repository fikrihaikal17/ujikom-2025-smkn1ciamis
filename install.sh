#!/bin/bash

# Ujikom 2025 SMKN1 Ciamis - Installation Script
# This script automates the Laravel 12 project setup

set -e

echo "🚀 Setting up Ujikom 2025 SMKN1 Ciamis Laravel 12 Project..."

# Check if required tools are installed
check_requirements() {
    echo "📋 Checking requirements..."
    
    if ! command -v php &> /dev/null; then
        echo "❌ PHP is not installed"
        exit 1
    fi
    
    if ! command -v composer &> /dev/null; then
        echo "❌ Composer is not installed"
        exit 1
    fi
    
    if ! command -v node &> /dev/null; then
        echo "❌ Node.js is not installed"
        exit 1
    fi
    
    if ! command -v npm &> /dev/null; then
        echo "❌ NPM is not installed"
        exit 1
    fi
    
    echo "✅ All requirements are met"
}

# Install PHP dependencies
install_php_dependencies() {
    echo "📦 Installing PHP dependencies..."
    composer install --optimize-autoloader
}

# Install Node.js dependencies
install_node_dependencies() {
    echo "📦 Installing Node.js dependencies..."
    npm install
}

# Setup environment
setup_environment() {
    echo "🔧 Setting up environment..."
    
    if [ ! -f .env ]; then
        cp .env.example .env
        echo "✅ Environment file created"
    else
        echo "⚠️  Environment file already exists"
    fi
}

# Generate application key
generate_app_key() {
    echo "🔑 Generating application key..."
    php artisan key:generate
}

# Setup database
setup_database() {
    echo "🗄️  Setting up database..."
    
    # Create SQLite database if it doesn't exist
    if [ ! -f database/database.sqlite ]; then
        touch database/database.sqlite
        echo "✅ SQLite database created"
    fi
    
    # Run migrations
    php artisan migrate --force
    
    # Seed database
    read -p "Do you want to seed the database with sample data? (y/n): " -n 1 -r
    echo
    if [[ $REPLY =~ ^[Yy]$ ]]; then
        php artisan db:seed
        echo "✅ Database seeded"
    fi
}

# Create storage link
create_storage_link() {
    echo "🔗 Creating storage link..."
    php artisan storage:link
}

# Build frontend assets
build_assets() {
    echo "🎨 Building frontend assets..."
    npm run build
}

# Set permissions
set_permissions() {
    echo "🔒 Setting permissions..."
    
    # Make sure storage and cache directories are writable
    if [ -d storage ]; then
        chmod -R 775 storage
    fi
    
    if [ -d bootstrap/cache ]; then
        chmod -R 775 bootstrap/cache
    fi
    
    echo "✅ Permissions set"
}

# Run tests
run_tests() {
    read -p "Do you want to run tests to verify installation? (y/n): " -n 1 -r
    echo
    if [[ $REPLY =~ ^[Yy]$ ]]; then
        echo "🧪 Running tests..."
        php artisan test
    fi
}

# Main installation process
main() {
    echo "Starting installation process..."
    echo "================================"
    
    check_requirements
    install_php_dependencies
    install_node_dependencies
    setup_environment
    generate_app_key
    setup_database
    create_storage_link
    build_assets
    set_permissions
    run_tests
    
    echo ""
    echo "🎉 Installation completed successfully!"
    echo ""
    echo "Next steps:"
    echo "1. Review and update your .env file"
    echo "2. Start the development server: php artisan serve"
    echo "3. Start the frontend dev server: npm run dev"
    echo "4. Visit: http://localhost:8000"
    echo ""
    echo "For development with all services:"
    echo "  make dev"
    echo ""
    echo "For Docker development:"
    echo "  make docker-up"
    echo ""
    echo "Happy coding! 🚀"
}

# Handle script interruption
trap 'echo "❌ Installation interrupted"; exit 1' INT

# Run main function
main "$@"