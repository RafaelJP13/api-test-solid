# User API: Pure PHP 8.4 RESTful CRUD with SOLID Principles

A RESTful CRUD API for managing users, built in pure PHP 8.4 with no frameworks.  
Follows SOLID principles, uses an in-memory mock data store, and is designed for local development with XAMPP (Apache and mod_php).  
Features clean architecture, PSR-4 autoloading, and JSON-based endpoints for creating, reading, updating, and deleting users.

---

## Features

- RESTful endpoints for CRUD operations (Create, Read, Update, Delete)
- Input validation for user data (name, email)
- SOLID-compliant design with interfaces and dependency injection
- Mocked data store (in-memory array) for simplicity
- PSR-4 autoloading via Composer

---

## Requirements

- PHP 8.4
- XAMPP with Apache
- Composer

---

## ✅ Project Setup

Follow these steps to run the project locally using XAMPP:

---

### 1. Clone the repository

Open your terminal (CMD, Git Bash, or PowerShell) and run:

```bash
git clone https://github.com/RafaelJP13/user-api-solid.git
Move to something like this: C:/xampp/htdocs/user-apis
cd C:/xampp/htdocs/myapi
composer install
