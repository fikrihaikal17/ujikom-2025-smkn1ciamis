# Ujikom 2025 SMKN1 Ciamis - Laravel Development Makefile
.PHONY: help setup install clean dev test build deploy docker-up docker-down fresh backup

# Colors for help
YELLOW := \033[33m
GREEN := \033[32m
RED := \033[31m
NC := \033[0m

help: ## Show this help message
	@echo "$(GREEN)Ujikom 2025 SMKN1 Ciamis - Available Commands:$(NC)"
	@echo ""
	@grep -E '^[a-zA-Z_-]+:.*?## .*$$' $(MAKEFILE_LIST) | awk 'BEGIN {FS = ":.*?## "}; {printf "$(YELLOW)%-20s$(NC) %s\n", $$1, $$2}'

setup: ## Initial project setup
	@echo "$(GREEN)Setting up project...$(NC)"
	composer install
	npm install
	cp .env.example .env
	php artisan key:generate
	touch database/database.sqlite
	php artisan migrate:fresh --seed
	php artisan storage:link
	npm run build
	@echo "$(GREEN)Project setup complete!$(NC)"

install: ## Install dependencies
	@echo "$(GREEN)Installing dependencies...$(NC)"
	composer install
	npm install

dev: ## Start development servers
	@echo "$(GREEN)Starting development servers...$(NC)"
	composer run dev

test: ## Run all tests
	@echo "$(GREEN)Running tests...$(NC)"
	php artisan test

test-coverage: ## Run tests with coverage
	@echo "$(GREEN)Running tests with coverage...$(NC)"
	php artisan test --coverage

build: ## Build for production
	@echo "$(GREEN)Building for production...$(NC)"
	npm run production
	composer run deploy

deploy: ## Deploy to production
	@echo "$(GREEN)Deploying to production...$(NC)"
	git pull origin main
	composer install --optimize-autoloader --no-dev
	npm run production
	php artisan config:cache
	php artisan route:cache
	php artisan view:cache
	php artisan migrate --force
	php artisan queue:restart

fresh: ## Fresh database with seeding
	@echo "$(GREEN)Refreshing database...$(NC)"
	php artisan migrate:fresh --seed
	php artisan cache:clear

clean: ## Clean cache and temporary files
	@echo "$(GREEN)Cleaning cache and temporary files...$(NC)"
	php artisan cache:clear
	php artisan config:clear
	php artisan route:clear
	php artisan view:clear
	php artisan clear-compiled
	composer dump-autoload
	npm run clean

format: ## Format code
	@echo "$(GREEN)Formatting code...$(NC)"
	./vendor/bin/pint
	npm run format

lint: ## Lint code
	@echo "$(GREEN)Linting code...$(NC)"
	./vendor/bin/pint --test
	npm run lint
	npm run lint:css

analyse: ## Analyse code
	@echo "$(GREEN)Analysing code...$(NC)"
	php artisan model:show
	php artisan route:list
	php artisan config:show

backup: ## Backup database
	@echo "$(GREEN)Creating backup...$(NC)"
	composer run backup

# Docker commands
docker-up: ## Start Docker containers
	@echo "$(GREEN)Starting Docker containers...$(NC)"
	docker-compose up -d

docker-down: ## Stop Docker containers
	@echo "$(GREEN)Stopping Docker containers...$(NC)"
	docker-compose down

docker-build: ## Build Docker containers
	@echo "$(GREEN)Building Docker containers...$(NC)"
	docker-compose build --no-cache

docker-logs: ## Show Docker logs
	docker-compose logs -f

docker-shell: ## Access application shell in Docker
	docker-compose exec app bash

# Database commands
db-reset: ## Reset database
	@echo "$(GREEN)Resetting database...$(NC)"
	php artisan migrate:reset
	php artisan migrate
	php artisan db:seed

db-seed: ## Seed database
	@echo "$(GREEN)Seeding database...$(NC)"
	php artisan db:seed

# Queue commands
queue-work: ## Start queue worker
	@echo "$(GREEN)Starting queue worker...$(NC)"
	php artisan queue:work --verbose --tries=3 --timeout=90

queue-restart: ## Restart queue workers
	@echo "$(GREEN)Restarting queue workers...$(NC)"
	php artisan queue:restart

# Security commands
security-check: ## Check for security vulnerabilities
	@echo "$(GREEN)Checking for security vulnerabilities...$(NC)"
	composer audit
	npm audit

optimize: ## Optimize for production
	@echo "$(GREEN)Optimizing for production...$(NC)"
	php artisan optimize
	php artisan view:cache
	php artisan config:cache
	php artisan route:cache