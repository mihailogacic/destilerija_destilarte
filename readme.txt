php artisan make:controller KorisnikController
php artisan make:controller AdminController

php artisan make:model Rezervacija
php artisan make:model Dogadjaj
php artisan make:model Korisnik
php artisan make:model Kontakt

php artisan make:migration create_rezervacijas
php artisan make:migration create_kontakts
php artisan migrate

php artisan make:seeder DogadjajSeeder
php artisan db:seed

link ka templejtu:
https://www.free-css.com/free-css-templates/page289/hotelier