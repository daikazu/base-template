<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

# Base Website Template

built on the Laravel Framework this template is a starting point for any website project we build.

## Installation

Use the package manager [composer](https://getcomposer.org/) to install the template.

```bash
gh repo clone daikazu/base-template example-site
cd example-site
git init
git add .
git commit -m"First Commit"
```
This will create a new project in the folder example-site and initialize a git repository.

Install the npm packages
```bash
bun install
```

Run the installer script. This will ask you a few questions and then upadte various files as needed with the answers you provide.
Only run this once.
```bash
php artisan app:init
```

[//]: # (Update the .env file with the database connection information and then run the migrations and seed the database.)

[//]: # (```bash)

[//]: # (mysql -u root -e"create database example_site;")

[//]: # (php artisan migrate:fresh --seed)

[//]: # (```)


## Default Packages

### PHP
```json
"blade-ui-kit/blade-heroicons": "^2.3",
"blade-ui-kit/blade-icons": "^1.6",
"diglactic/laravel-breadcrumbs": "^9.0",
"laravel-notification-channels/telegram": "^5.0",
"laravel/framework": "^11.0",
"laravel/slack-notification-channel": "^3.2",
"laravel/tinker": "^2.9",
"livewire/livewire": "^3.4",
"propaganistas/laravel-phone": "^5.2",
"romanzipp/laravel-seo": "^2.7",
"spatie/laravel-backup": "^8.6",
"spatie/laravel-google-fonts": "^1.4",
"spatie/laravel-sitemap": "^7.2",
"spatie/schema-org": "^3.23",
"watson/active": "^7.1"
```

### NPM
```json
"@prettier/plugin-php": "^0.22.2",
"@pyncz/tailwind-mask-image": "^2.0.0",
"@tailwindcss/aspect-ratio": "^0.4.2",
"@tailwindcss/container-queries": "^0.1.1",
"@tailwindcss/forms": "^0.5.7",
"@tailwindcss/typography": "^0.5.10",
"autoprefixer": "^10.4.19",
"laravel-vite-plugin": "^1.0",
"postcss-import": "^16.1.0",
"prettier": "^3.2.5",
"prettier-plugin-blade": "^2.1.11",
"prettier-plugin-tailwindcss": "^0.5.12",
"tailwindcss": "^3.4.1",
"tailwindcss-debug-screens": "^2.2.1",
"vite": "^5.0"   
```




