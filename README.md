# Padel LLM - Laravel Test Project

This repository contains a technical test project built with Laravel. The goal is to demonstrate proficiency in Laravel development, including setup, basic configuration, and running the application in a local environment.

## Requirements

- Docker & Docker Compose
- Composer
- PHP 8.1+
- Node.js & npm (if using frontend assets)

## Getting Started

1. **Clone the repository:**
	```bash
	git clone https://github.com/vffdevop/padel-llm.git
	cd padel-llm
	```

2. **Install dependencies:**
	```bash
	composer install
	```

3. **Copy the example environment file and configure:**
	```bash
	cp .env.example .env
	# Edit .env as needed
	```

4. **Start the application with Docker Compose:**
	```bash
	docker-compose up -d
	```

5. **Run migrations (if applicable):**
	```bash
	docker-compose exec app php artisan migrate
	```

6. **Access the application:**
	Open your browser and go to `http://localhost:8000`

## Project Structure

- `composer.json` - PHP dependencies
- `docker-compose.yml` - Docker services configuration
- `Dockerfile` - Application container setup
- `nginx/default.conf` - Nginx configuration

## Notes

- This project is intended for demonstration and testing purposes.
- Please refer to the source code and comments for further details.

