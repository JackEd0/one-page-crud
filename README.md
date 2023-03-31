## [One-Page-CRUD](https://github.com/JackEd0/one-page-crud)

Nemaxe is web interface that allow users to create and test school exercises.

Curent version: 1.0.0

### Install Commandes

php artisan make:migration create_fields_table --create=fields
php artisan make:seeder FieldsTableSeeder
php artisan migrate --seed
php artisan make:controller FieldController --resource
php artisan make:provider ComposerServiceProvider

add provider to config\app.php
Change debug to true in app.php

## Instalation on 000webhost.com

Before updloading
Make sure to upload in root folder of remote server and not in public_html.
Upload everything in `public` to `public_html`.

Create `.env` from `.env.example`. And update the config data in it. DB_DATABASE...
Run `composer install`.
Run sql in one-p-c.sql

If database connection failed reading the `.env` file then change the `config\database.php` creds.
Be carefull to use `localhost` instead of `127.0.0.1` when asked by the provider.

Also in `config\app.php` update the `env('APP_KEY'`
Update css if needed with

```

*[href*="000webhost"],
*[src*="000webhost"],
*[title*="000webhost"],
*[alt*="000webhost"] {
  display: none;
}
```

### Dependencies

 - resources\views
	 - layouts
	 - entities
		 - entitty_index.php
 - public
	 - js
		 - views\entity.js
		 - bootstrap.min,js
		 - jquery.min.js
	 - less
		 - layouts
		 - views
		 - styles.css
		 - styles.less
	 - css
		 - bootstrap.min.css
		 - font-awsome.min.css
		 - font-lato.css
		 - font-raleway.css
	 - img
		 - searchicon.png
	 - fonts
 - database
	 - migrations
		 - entities_table_migration
	 - seeds
		 - entities_table_seeds
		 - databaseSeeder: $this->call(FieldsTableSeeder::class);
 - app\http
	 - controllers
		 - EntityController.php
	 - viewComposer
		 - EntityComposer
	 - Providers
		 - ServicesProvider:
			 - view()->composer('fields.fields_index', 'App\Http\ViewComposers\FieldComposer');
 - routes\web.php
	 - Route::resource('fields', 'FieldController');
 - .env

### Features

 - Create/Read/Update/Delete subjects

### Technologies used

```
├────── php
│   ├── Laravel
│   └── mysql
├── css
│   ├── Less
│   └── Bootstrap
└── js
    ├── Jquery
    └── Datatable
```

### Creator

**Jack**: <https://github.com/JackEd0>

### Notes

Started: 26 March 2017
Last updated: 26 March 2017
2hrs of work
