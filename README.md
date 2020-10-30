# midterm-pweb

## Mid Term Exam of Web Programming - E

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
Please make sure you have installed [Node JS](https://nodejs.org/en/download/) on your Operating System, then run these commands below to install Node Module
```
npm install; npm run dev
```

**5. Database Setup**
* Create `perpus0` database on your localhost.
* Create `.env` file on your IDE or text editor, then move everything from `.env.example` to `.env` file.
* Change `DB_DATABASE=laravel` to `DB_DATABASE=perpus0` in `.env` file.

**6. Migration**
```
php artisan migrate
```

**7. Run the web**
```
php artisan serve
```

### Source
* [https://dev.to/kingsconsult/laravel-8-auth-registration-and-login-32jl](https://dev.to/kingsconsult/laravel-8-auth-registration-and-login-32jl)
* [https://stackoverflow.com/questions/61582940/how-can-i-run-npm-install-npm-run-dev-on-laravel-7](https://stackoverflow.com/questions/61582940/how-can-i-run-npm-install-npm-run-dev-on-laravel-7)


