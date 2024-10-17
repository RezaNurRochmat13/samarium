# Samarium

<img src="https://img.shields.io/badge/Version-0.8.6-blue" alt="Version"> <img src="https://img.shields.io/badge/License-MIT-005530" alt="Version">

Simple content management system (CMS). You can create webpages and
blog posts easily from a GUI admin panel. Apart from CMS, there
are also other features like product display, invoice creation,
calendar events, contact message, task manager, document
sharing etc.

![screenshot](dashboard-screenshot-1.png)

## Built with

<img src="https://img.shields.io/badge/Laravel-FF2D20?style=flat&logo=laravel&logoColor=white" alt="Laravel"> <img src="https://img.shields.io/badge/Livewire-AA2BE2" alt="Livewire"> <img src="https://img.shields.io/badge/Bootstrap-7952B3?style=flat&logo=bootstrap&logoColor=white" alt="Bootstrap">

## Features

- Content Management System (CMS)
- Product Catalogue
- Invoice Generation
- Calendar Events
- Team Catalogue
- Contact Message
- Appointment Scheduler

## Installation

It is just another laravel application. So we do all the steps required to get a
laravel application working. 

### Pre requisites

Below applications must be installed in the system. 

```
php >= 8.2
mysql >= 8.0
```

### Manual installation

First create a mysql database. Then run below command to clone this repo and change
the working directory.

```
$ git clone https://github.com/oitcode/samarium.git
$ cd samarium
$ mv env.example .env
```

Now, enter database name, mysql username and mysql password in the .env file. Next
perform below steps.

```
$ composer install
$ npm install
$ npm run dev
$ php artisan migrate
$ php artisan key:generate
$ php artisan storage:link
```

### Script installation

If you do not want to perform all the installation steps manually,
then there is a bash script provided that will run all the 
required steps.

Please run below bash script.

`bash app-install.sh`

## Creating first user

To use the dashboard, you need a username and password.
Use below seeder file to create first user. This will create
an admin user. After that you can create other users from
dashboard.

`php artisan db:seed --class=UserSeeder`
 
## Running the app

`php artisan serve`

Now open your web browser and visit 
- 127.0.0.1 to see the website
- 127.0.0.1/dashboard to see the dashboard

## Usage

Below are screenshots of most used functionalities. 

### Create a webpage

![screenshot](screenshots/create-webpage-1.gif)

### Create a post

![screenshot](screenshots/create-post-1.gif)

## Contributing

__Please contribute to this project.__ Contributions are welcome.

## Issues

If you find any issue in this application, you can help by raising an issue
here in our github repo.

## License

[MIT license](https://opensource.org/licenses/MIT).
