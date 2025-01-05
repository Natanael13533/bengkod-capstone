<!-- Improved compatibility of back to top link: See: https://github.com/othneildrew/Best-README-Template/pull/73 -->
<a id="readme-top"></a>
<!--
*** Thanks for checking out the Best-README-Template. If you have a suggestion
*** that would make this better, please fork the repo and create a pull request
*** or simply open an issue with the tag "enhancement".
*** Don't forget to give the project a star!
*** Thanks again! Now go create something AMAZING! :D
-->



<!-- PROJECT SHIELDS -->
<!--
*** I'm using markdown "reference style" links for readability.
*** Reference links are enclosed in brackets [ ] instead of parentheses ( ).
*** See the bottom of this document for the declaration of the reference variables
*** for contributors-url, forks-url, etc. This is an optional, concise syntax you may use.
*** https://www.markdownguide.org/basic-syntax/#reference-style-links
-->

<!-- PROJECT LOGO -->
<br />
<div align="center">
  <h3 align="center">Bengkel Koding Sistem Input Kartu rencana Studi (KRS) Menggunakan Laravel</h3>
</div>

<!-- TABLE OF CONTENTS -->
<details>
  <summary>Table of Contents</summary>
  <ol>
    <li>
      <a href="#about-the-project">About The Project</a>
      <ul>
        <li><a href="#built-with">Built With</a></li>
      </ul>
    </li>
    <li>
      <a href="#getting-started">Getting Started</a>
      <ul>
        <li><a href="#installation">Installation</a></li>
      </ul>
    </li>
  </ol>
</details>

<!-- ABOUT THE PROJECT -->
## About The Project
Sistem Input KRS Bengkel Koding Project:
* Menggunakan Laravel 11
* Menggunakan MYSQL sebagai database 

<p align="right">(<a href="#readme-top">back to top</a>)</p>

### Built With

Berikut Aplikasi, Bahasa Pemorgraman, Framework, Database yang digunakan dalam projek ini.

* [![Laravel][Laravel]][Laravel-url]
* [![Mysql][Mysql]][Mysql-url]
* [![PHP][PHP]][PHP-url]
* [![Xampp][Xampp]][Xampp-url]

<p align="right">(<a href="#readme-top">back to top</a>)</p>

<!-- GETTING STARTED -->
## Getting Started

Berikut cara untuk mensetting project ini di mesin lokal.

### Installation

1. Clone the repo
   ```sh
   git clone https://github.com/Natanael13533/bengkod-capstone.git
   ```
2. Jalankan perintah composer
   ```sh
   composer install
   ```
4. Buka .env.example dan rename .env.example menjadi .env, (isikan sesuai dengan nama database, port, user, dan password)
   ```js
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=database_name
   DB_USERNAME=database_user
   DB_PASSWORD=
   ```
5. Import SQL file, dengan membuka xampp lalu nyalakan apache dan Mysql, lalu buka localhost/phpmyadmin, login jika ada password, buat database dengan nama "bengkod_capstone" jika sudah import data sql dengan nama "bengkod_cpastone.sql" ke dalam database yang sudah di buat yang memiliki nama yang sama pada DB_DATABASE pada file .env
6. Jalankan perintah migrate pada terminal (lakukan migrate jika tidak menggunakan import sql dan pastikan bahwa database sudah dibuat di phpmyadmin)
   ```sh
   php artisan migrate
   ```
7. Jalankan perintah untuk menjalankan program
   ```sh
   php artisan serve
   ```

<p align="right">(<a href="#readme-top">back to top</a>)</p>

<!-- MARKDOWN LINKS & IMAGES -->
<!-- https://www.markdownguide.org/basic-syntax/#reference-style-links -->
[Laravel]: https://img.shields.io/badge/Laravel-FF2D20?logo=laravel&logoColor=white
[Laravel-url]: https://laravel.com/
[Mysql]: https://img.shields.io/badge/MySQL-4479A1?style=for-the-badge&logo=mysql&logoColor=white
[Mysql-url]: https://www.mysql.com/
[PHP]: https://img.shields.io/badge/PHP-777BB4?logo=php&logoColor=white
[PHP-url]: https://www.php.net/
[Xampp]: https://img.shields.io/badge/Xampp-F37623?style=for-the-badge&logo=xampp&logoColor=white
[Xampp-url]: https://www.apachefriends.org/
