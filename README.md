# midterm-pweb

## Installation

**1. Change Directory to XAMPP folder**
```
cd \xampp\htdocs\..
```

**2. Install & Run Composer**
```
composer install
composer update
```

**3. Install Jetsream**
```
composer require laravel/jetstream
```

**4. Install Livewire & Node Module**
```
php artisan jetstream:install livewire
```
Please make sure you have installed Node JS on your Operating System, then install Node Module
```
npm install; npm run dev
```

**5. Database Setup**
* Open the .env file on your IDE or text editor. 
* Change `DB_DATABASE=laravel` to `DB_DATABASE=perpus0`.

**6. Migration**
```
php artisan migrate
```

**7. Run the app**
```
php artisan serve
```

## Source
* [https://dev.to/kingsconsult/laravel-8-auth-registration-and-login-32jl](https://dev.to/kingsconsult/laravel-8-auth-registration-and-login-32jl)


