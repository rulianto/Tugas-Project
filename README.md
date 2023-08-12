# Aplikasi Pembelian Tiket Cinema Secara Online

# Support
<img src="https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white">
<img src="https://img.shields.io/badge/Bootstrap-563D7C?style=for-the-badge&logo=bootstrap&logoColor=white">
<img src="https://img.shields.io/badge/JavaScript-F7DF1E?style=for-the-badge&logo=javascript&logoColor=black">

sumber: https://dev.to/envoy_/150-badges-for-github-pnk

# Deskripsi 
### Aplikasi website yang saya buat ini merupakan aplikasi berbasis web yang berfungsi untuk melakukan pembelian tiket cinema/biskop secara online, dimana user bisa membeli tiket apa, kapan dan berapa tiket yang dipesan, kemudian sistem melakukan penjumlahan/mengkalkulasikan dari harga tiket dengan jumlah tiket yang dipesan. Kemudian sistem menampilkan struk pembelian yang telah dilakukan oleh user.

# Requirement
### 
1. Xampp PHP version 7.0
2. Browser
3. Bootstrap V.5

# Installation
1. Buat Folder di htdocs dengan nama Project.
2. Jalankan Xampp control panel.
3. Start tombol apache.
4. Buka browser ketikan url localhost/project

# Struktur Folder
```php
📦project
 ┣ 📂assets
 ┃ ┣ 📂css
 ┃ ┃ ┣ 📜demo.css
 ┃ ┃ ┣ 📜gaya.css
 ┃ ┃ ┗ 📜style.css
 ┃ ┣ 📂img
 ┃ ┃ ┣ 📂avatars
 ┃ ┃ ┃ ┣ 📜1.png
 ┃ ┃ ┃ ┣ 📜5.png
 ┃ ┃ ┃ ┣ 📜6.png
 ┃ ┃ ┃ ┗ 📜7.png
 ┃ ┃ ┣ 📂backgrounds
 ┃ ┃ ┃ ┗ 📜18.jpg
 ┃ ┃ ┣ 📂elements
 ┃ ┃ ┃ ┣ 📜1.jpg
 ┃ ┃ ┃ ┣ 📜11.jpg
 ┃ ┃ ┃ ┣ 📜12.jpg
 ┃ ┃ ┃ ┣ 📜13.jpg
 ┃ ┃ ┃ ┣ 📜17.jpg
 ┃ ┃ ┃ ┣ 📜18.jpg
 ┃ ┃ ┃ ┣ 📜19.jpg
 ┃ ┃ ┃ ┣ 📜2.jpg
 ┃ ┃ ┃ ┣ 📜20.jpg
 ┃ ┃ ┃ ┣ 📜3.jpg
 ┃ ┃ ┃ ┣ 📜4.jpg
 ┃ ┃ ┃ ┣ 📜5.jpg
 ┃ ┃ ┃ ┗ 📜7.jpg
 ┃ ┃ ┣ 📂favicon
 ┃ ┃ ┃ ┣ 📜favicon.ico
 ┃ ┃ ┃ ┗ 📜logo-labti.png
 ┃ ┃ ┣ 📂icons
 ┃ ┃ ┃ ┣ 📂brands
 ┃ ┃ ┃ ┃ ┣ 📜asana.png
 ┃ ┃ ┃ ┃ ┣ 📜behance.png
 ┃ ┃ ┃ ┃ ┣ 📜dribbble.png
 ┃ ┃ ┃ ┃ ┣ 📜facebook.png
 ┃ ┃ ┃ ┃ ┣ 📜github.png
 ┃ ┃ ┃ ┃ ┣ 📜google.png
 ┃ ┃ ┃ ┃ ┣ 📜instagram.png
 ┃ ┃ ┃ ┃ ┣ 📜mailchimp.png
 ┃ ┃ ┃ ┃ ┣ 📜slack.png
 ┃ ┃ ┃ ┃ ┗ 📜twitter.png
 ┃ ┃ ┃ ┗ 📂unicons
 ┃ ┃ ┃ ┃ ┣ 📜cc-primary.png
 ┃ ┃ ┃ ┃ ┣ 📜cc-success.png
 ┃ ┃ ┃ ┃ ┣ 📜cc-warning.png
 ┃ ┃ ┃ ┃ ┣ 📜chart-success.png
 ┃ ┃ ┃ ┃ ┣ 📜chart.png
 ┃ ┃ ┃ ┃ ┣ 📜paypal.png
 ┃ ┃ ┃ ┃ ┣ 📜wallet-info.png
 ┃ ┃ ┃ ┃ ┗ 📜wallet.png
 ┃ ┃ ┣ 📂illustrations
 ┃ ┃ ┃ ┣ 📜girl-doing-yoga-light.png
 ┃ ┃ ┃ ┣ 📜man-with-laptop-light.png
 ┃ ┃ ┃ ┗ 📜page-misc-error-light.png
 ┃ ┃ ┗ 📂layouts
 ┃ ┃ ┃ ┣ 📜layout-container-light.png
 ┃ ┃ ┃ ┣ 📜layout-fluid-light.png
 ┃ ┃ ┃ ┣ 📜layout-without-menu-light.png
 ┃ ┃ ┃ ┗ 📜layout-without-navbar-light.png
 ┃ ┣ 📂js
 ┃ ┃ ┣ 📜config.js
 ┃ ┃ ┣ 📜dashboards-analytics.js
 ┃ ┃ ┣ 📜extended-ui-perfect-scrollbar.js
 ┃ ┃ ┣ 📜form-basic-inputs.js
 ┃ ┃ ┣ 📜main.js
 ┃ ┃ ┣ 📜pages-account-settings-account.js
 ┃ ┃ ┣ 📜ui-modals.js
 ┃ ┃ ┣ 📜ui-popover.js
 ┃ ┃ ┗ 📜ui-toasts.js
 ┃ ┗ 📂vendor
 ┃ ┃ ┣ 📂css
 ┃ ┃ ┃ ┣ 📂pages
 ┃ ┃ ┃ ┃ ┣ 📜page-account-settings.css
 ┃ ┃ ┃ ┃ ┣ 📜page-auth.css
 ┃ ┃ ┃ ┃ ┣ 📜page-icons.css
 ┃ ┃ ┃ ┃ ┗ 📜page-misc.css
 ┃ ┃ ┃ ┣ 📜core.css
 ┃ ┃ ┃ ┗ 📜theme-default.css
 ┃ ┃ ┣ 📂fonts
 ┃ ┃ ┃ ┣ 📂boxicons
 ┃ ┃ ┃ ┃ ┣ 📜boxicons.eot
 ┃ ┃ ┃ ┃ ┣ 📜boxicons.svg
 ┃ ┃ ┃ ┃ ┣ 📜boxicons.ttf
 ┃ ┃ ┃ ┃ ┣ 📜boxicons.woff
 ┃ ┃ ┃ ┃ ┗ 📜boxicons.woff2
 ┃ ┃ ┃ ┗ 📜boxicons.css
 ┃ ┃ ┣ 📂js
 ┃ ┃ ┃ ┣ 📜bootstrap.js
 ┃ ┃ ┃ ┣ 📜helpers.js
 ┃ ┃ ┃ ┗ 📜menu.js
 ┃ ┃ ┗ 📂libs
 ┃ ┃ ┃ ┣ 📂apex-charts
 ┃ ┃ ┃ ┃ ┣ 📜apex-charts.css
 ┃ ┃ ┃ ┃ ┗ 📜apexcharts.js
 ┃ ┃ ┃ ┣ 📂highlight
 ┃ ┃ ┃ ┃ ┣ 📜highlight-github.css
 ┃ ┃ ┃ ┃ ┣ 📜highlight.css
 ┃ ┃ ┃ ┃ ┗ 📜highlight.js
 ┃ ┃ ┃ ┣ 📂jquery
 ┃ ┃ ┃ ┃ ┗ 📜jquery.js
 ┃ ┃ ┃ ┣ 📂masonry
 ┃ ┃ ┃ ┃ ┗ 📜masonry.js
 ┃ ┃ ┃ ┣ 📂perfect-scrollbar
 ┃ ┃ ┃ ┃ ┣ 📜perfect-scrollbar.css
 ┃ ┃ ┃ ┃ ┗ 📜perfect-scrollbar.js
 ┃ ┃ ┃ ┗ 📂popper
 ┃ ┃ ┃ ┃ ┗ 📜popper.js
 ┣ 📂database
 ┃ ┗ 📜mahasiswa.sql
 ┣ 📂img
 ┃ ┣ 📂projects
 ┃ ┃ ┣ 📜1.jpg
 ┃ ┃ ┣ 📜10.jpg
 ┃ ┃ ┣ 📜11.jpg
 ┃ ┃ ┣ 📜12.jpg
 ┃ ┃ ┣ 📜13.jpg
 ┃ ┃ ┣ 📜14.jpg
 ┃ ┃ ┣ 📜15.jpg
 ┃ ┃ ┣ 📜2.jpg
 ┃ ┃ ┣ 📜3.jpg
 ┃ ┃ ┣ 📜4.jpg
 ┃ ┃ ┣ 📜5.jpg
 ┃ ┃ ┣ 📜6.jpg
 ┃ ┃ ┣ 📜7.jpg
 ┃ ┃ ┣ 📜8.jpg
 ┃ ┃ ┗ 📜9.jpg
 ┃ ┣ 📜1.png
 ┃ ┣ 📜2.png
 ┃ ┣ 📜3.png
 ┃ ┣ 📜4.png
 ┃ ┣ 📜logo.png
 ┃ ┣ 📜logout.png
 ┃ ┗ 📜logout2.png
 ┣ 📜index.php
 ┣ 📜koneksi.php
 ┣ 📜login.php
 ┣ 📜logout.php
 ┣ 📜pesantiket.php
 ┗ 📜prosestiket.php
```

# Credits 
Dibuat pada Tanggal 12 Agustus 2023. Oleh Dimas Fauzian As'aryanda 
versi 1.0








