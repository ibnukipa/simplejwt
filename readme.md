#### **Quick Project Setup**

 1. `git clone https://github.com/ibnukipa/simplejwt.git`
 2. Create a database for the project (MySQL RDMS)
 3. From the projects root run `cp .env.example .env`
 4. Configure `.env` file
	 - setting database nya
 5. Run `composer update` from the projects root folder
 6. From the projects root folder run `php artisan key:generate`
 7. From the projects root folder run `php artisan migrate`
 8. From the projects root folder run `composer dump-autoload`
 9. From the projects root folder run `php artisan db:seed`
 10. From the projects root folder run `php artisan vendor:publish --provider="Tymon\JWTAuth\Providers\JWTAuthServiceProvider"`
 11. From the projects root folder run `php artisan jwt:generate`
 11. From the projects root folder run `php artisan serve --port 2021`
