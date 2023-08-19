# Membuild Docker Compose

docker-compose up -d --build

# Menjalankan Container

docker exec -it pemweb_TA bash

# Menginstall Laravel

composer create-project laravel/laravel:^9.0 .

# Hak Akses, jika ditolak

chown -R www-data:www-data /var/www

# Migrasi Database dan Seeding

php artisan migrate --seed

# User admin

username : admin
password : rahasia
