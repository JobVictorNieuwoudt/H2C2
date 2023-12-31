<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

PHP Laravel Sales Management Application Setup

Prerequisites:

Before you begin setting up the Sales Management Application, ensure you have the following prerequisites installed:

1) XAMPP: If you don't have XAMPP installed, download it from https://www.apachefriends.org/download.html.

2) PHP 8.1 or Later: Download PHP 8.1 or a later version from https://windows.php.net/download#php-8.1. Be sure to download the "VS16 x64 Thread Safe Zip" package.

Setup Instructions:

Follow these steps to set up the Sales Management Application on your local environment:

1) Start XAMPP Services: Open the XAMPP Control Panel and start both the Apache and MySQL servers.

2) Open Command Prompt or Terminal: Navigate to the root directory of your project. For example, use the cd command to move to your project directory: cd C:\xampp\htdocs\H2C2\sales-management

3) Run Laravel Development Server: Start the Laravel development server by running the following command:

4) Access phpMyAdmin: Open your web browser and go to http://localhost/phpmyadmin/.

5) Create a Database: Create a new MySQL database named h2c2.

6) Migrate Database Tables: Run the following command to create the necessary database tables for the application: php artisan migrate:fresh

7) Access the Application: Open a new browser window and navigate to http://localhost:8000/ to start using the Sales Management Application.

Now, your Laravel-based Sales Management Application should be up and running on your local development environment. You can access and use it by visiting http://localhost:8000/.

Feel free to reach out if you encounter any issues or have further questions.
