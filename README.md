# Pet Shop Laravel Project
![The San Juan Mountains are beautiful!](https://github.com/HossamSoliuman/petshop/img/pet-shop-website-template.jpg "San Juan Mountains")
![Alt text](https://via.placeholder.com/1024x768?text=Optional+Image+Here)
## Description

This is a Laravel-based application for managing and running a pet shop. The application allows you to display products, services, members, and other information
related to your pet shop. Additionally, it comes with a simple admin panel that allows you to manage products, services, and members.
## Prerequisites

* Before running this application, you need to have the following installed on your machine:
* PHP 7.3 or higher
* MySQL or any other database system
* Composer
* PHP 7.3 or higher
* MySQL or any other database system

## Run Locally

Clone the repository to your local machine using the following command:
```shell
git clone https://github.com/hossamsoliuman/petshop.git

cd petshop
```

Generate .env file
```shell
cp .env.example .env
```

Then, configure the .env file according to your use case.

Install the dependencies and then compile the assets
```shell
composer install

npm install
npm run dev
```

Populate the tables to the database
```shell
php artisan migrate
```

Optional: Seed data to the dabase
```shell
php aritsan db:seed
```

Generate app key
```shell
php artisan key:generate
```

Run the application
```shell
php artisan serve
```

Finally, visit http://localhost:8000 to view the site.

## admin panel that can be accessed by visiting 
http://localhost:8000/admin

###Observation

I developed this project out of my head, not on YouTube
