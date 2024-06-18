# Laravel BootCamp with Blade
[Link](https://bootcamp.laravel.com/) to Laravel documentation 

## Overview
Using the Laravel Bootcamp, I created a Chirp App where you can post your tweets. The bootcamp takes you through setting up Model, Migration and Controllers to create a database to store the comments and set up CRUD operations. I used Blade files to create this application. 


## What I learnt
This project provided a solid foundation in Laravel, covering several key areas:

Laravel Breeze for Authentication
Laravel Breeze was instrumental in swiftly implementing user authentication. It facilitated the creation of a user registration and login system, while also setting up the necessary database tables to manage user information. Breeze also includes pre-made views for features like user profiles, allowing easy customization and management of user data.

Models, Migrations, and Controllers
Models: I utilized Laravel's Eloquent ORM to define models for interacting with the database. Models encapsulate data logic and define relationships between different data entities.

Migrations: Laravel's migration system enabled seamless management of database schema changes. Using migration files, I could modify the database structure and keep it synchronized across different environments.

Controllers: These components handled incoming HTTP requests and managed application logic. By creating CRUD operations within controllers, I could facilitate the creation, editing, and deletion of comments (Chirps) within the application.

## Routing

Routing in Laravel provided a clear structure for defining application endpoints. I configured routes to handle two main functionalities:

Index: Displayed the form for creating new Chirps and listed existing ones.
Store: Saved new Chirps submitted via the form into the database.
Controller Operations
Within the Controller file, I implemented CRUD operations to manage Chirps:

Create: Processed user input from the form to create new Chirps.
Read: Retrieved and displayed existing Chirps.
Update: Allowed users to edit and update their Chirps.
Delete: Provided functionality to remove unwanted Chirps from the database.


## Technology Stack

- **Frontend:** Laravel/PHP
- **Backend:** SQL
- **Styling:** Tailwind CSS
- **Authentication:** Laravel Breeze

## How to Install

1. Clone the repository.
2. Navigate to the project directory.
3. Run `npm install` to install dependencies.
4. Start the application using `php artisan serve`.
5. To enable the styling from TailwindCSS use `npm run dev`.

