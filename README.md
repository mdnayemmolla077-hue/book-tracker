<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

### BookTracker – Personal Reading Management Web Application

BookTracker is a web application designed to help users manage and organise their personal reading activities. It allows users to keep track of books they want to read, are currently reading, or have already completed. 

Instead of relying on memory or scattered notes, this platform provides a centralised system where users can easily store and update their reading lists. The application focuses on simplicity and usability, making it suitable for both casual and active readers.

---

## Features

* **User authentication** (register and login)
* **CRUD functionality** for books (create, view, update, delete)
* **Ability to organise books by status:** Want to Read, Currently Reading, Completed
* **Personal dashboard** to view all books
* **Privacy control:** Users can only manage their own books
* **Form validation and error handling** (client-side and server-side)
* **View individual book details**
* **Clean and user-friendly interface**

---

## Installation

### 1. Clone the repo
```bash
git clone https://github.com/mdnayemmolla077-hue/book-tracker.git

```
### 2.Go to the project folder
```bash
cd C:\Users\mdnay\book-tracker
```
### 3.Install dependencies
```bash
composer install
```
### 4.Install npm
```bash
npm install
```
### 5.Create a copy of .env.example
.env files are not committed to this repo for security purposes, but there's a .env.example file that you can use as a base.
```bash
cp .env.example .env
```
### 6. Update your constants inside .env

DB_HOST, DB_PORT, DB_DATABASE, DB_USERNAME and DB_PASSWORD  
Update these constants to make sure they're matching your credentials

### 7.Generate the encryption key if needed
```bash
php artisan key:generate
```
### 8.Create a new empty database
```bash
This project is using MySQL.
Open your DBMS and create a database called ssd_ca2.
You can check the migrations to see all the tables that will be created.
```
### 9.Migrate the database
```bash
php artisan migrate:fresh --seed
```
### 10.Run the server
```bash
php artisan serve
```
visit:
```bash
http://127.0.0.1:8000
```
Make sure your MySQL database server is running at the same time (e.g. XAMPP, MAMP), otherwise the application will not be able to connect to the database
