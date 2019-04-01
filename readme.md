# Bagwings hotels

To run the app locally:

1. Copy the `.env.example` file into a `.env` file and modify the `APP_URL` env variable and the database env variables to reflect the necessary credentials and info (e.g. the database to be used, the user and password for the database, etc.). Give the `APP_ENV` key the value `development`.
2. run `composer install`.
3. run `php artisan key:generate`.
4. run `php artisan migrate`
5. run `php artisan db:seed`
6. Navigate to the `public` folder and run `php -S localhost:3030`
7. Navigate to `localhost:3030` on your desired browser.
8. Use username `admin` and password `123456` to log in as an admin, or username `nancy` and password `123456` to log in as a normal user.