# Laravel Blog Posts API

A simple REST API built with Laravel for managing blog posts.

This project was developed as part of a Laravel Internship Technical Test.

## Features

- Create a blog post
- View all blog posts
- View a single blog post
- Update a blog post
- Delete a blog post
- Request validation
- User and Post relationship
- Pagination
- Proper HTTP status codes
- JSON API responses

---

## Requirements

Before running the project, make sure you have:

- PHP 8.2 or higher
- Composer
- MySQL
- Laravel
- Git

---

## Installation

### 1. Clone the Repository

```bash
git clone https://github.com/Amit-Singha-BD/laravel-blog-api.git
```

### 2. Install PHP Dependencies

```bash
composer install
```

### 3. Create Environment File

```bash
cp .env.example .env
```

### 4. Generate Application Key

```bash
php artisan key:generate
```

### 5. MySQL Database Setup

```bash
CREATE DATABASE blog_api;
```

### 6. Run Migrations

```bash
php artisan migrate
```

### 7. Database Seeding

```bash
php artisan db:seed
```

### 8. Run the Application
```bash
php artisan serve
```

## Testing with Postman

### API Endpoints

#### 1. Get All Posts
```bash
GET
http://127.0.0.1:8000/api/posts
```

#### 2. Create a Post
```bash
POST
http://127.0.0.1:8000/api/posts
```

#### 3. Get a Single Post
```bash
GET
http://127.0.0.1:8000/api/posts/{id}
```

#### 4. Update a Post
```bash
PUT
http://127.0.0.1:8000/api/posts/{id}
```

#### 5. Delete a Post
```bash
DELETE
http://127.0.0.1:8000/api/posts/{id}
```