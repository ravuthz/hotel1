
php artisan make:auth

php artisan make:request UserRequest

php artisan make:seed UsersTableSeeder



php artisan make:model Role -m

php artisan make:model Guest -m

php artisan make:model Type -m

php artisan make:model Room -m

php artisan make:model BookRoom -m



php artisan make:seed RolesTableSeeder

php artisan make:seed GuestsTableSeeder

php artisan make:seed TypesTableSeeder

php artisan make:seed RoomsTableSeeder

php artisan make:seed BookRoomsTableSeeder


php artisan make:controller Dash/AdminController

php artisan make:controller Dash/UserController --resource

php artisan make:controller Dash/GuestController

php artisan make:controller Dash/RoomController

php artisan make:controller Dash/RoomTypeController

php artisan make:controller Dash/BookRoomController


composer require components/jquery 2.2.x-dev

composer require twbs/bootstrap

