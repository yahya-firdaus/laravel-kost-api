# laravel-kost-api

Step by step guide of how to install and use your project in normal environment

## System Requirements
```
php: ^8.1
composer: ^2.3.10
mysql / postgres
```

## Installation

### 1. Clone the Repository
```
git clone https://github.com/yahya-firdaus/laravel-kost-api.git
```

### 2. Install Dependencies
```
cd laravel-kost-api
composer install
```

### 3. Set Up Environment Variables
```
cp .env.example .env
```

### 4. Set Up the Database
```
php artisan migrate
```

### 5. Start the Development Server
```
php artisan serve
```

### 6. Access Swagger API Documentation

http://localhost:8000/api/documentation#/