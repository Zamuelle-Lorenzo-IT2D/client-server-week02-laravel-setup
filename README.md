# client-server-week02-laravel-setup

---

## 📘 INTRODUCTION

Laravel is a open source web application framework that uses open source PHP, this helps developers to make modern web application in more efficient way. The Importance of Client-Server Technologies this is that, it's the most modern application and web that founds it. This make the users and servers able to communicate that makes data processing, storage and management more efficient and secure.

---

## 🎯 Objectives

- Updated PHP version
- Installed Composer
- Installed Laravel
- Fix issues to launch laravel project
- Upload project to github

---

## ⚙️ Installation Steps for Laravel

### STEP 1: Install PHP
- Download PHP from the official PHP website.

<img width="625" height="214" alt="image" src="https://github.com/user-attachments/assets/df20be05-53f3-44ad-b81c-010b38b4e7e9" />
<img width="640" height="420" alt="image" src="https://github.com/user-attachments/assets/520fea06-afa5-470c-bc5d-b6e84fceed71" />

- Extract it to a folder.
- Add the PHP folder to the Windows PATH environment variable.
- Verify installation by running this in terminal (php -v)

<img width="497" height="101" alt="image" src="https://github.com/user-attachments/assets/7c952c7b-07a2-4f00-8aff-1caf8973f57e" />

### STEP 2: Install Composer
- Download and install Composer from the official website.

<img width="665" height="443" alt="image" src="https://github.com/user-attachments/assets/763e97d5-48de-4bb8-b751-cd52270550bd" />

- During installation, select the installed PHP executable.
- Verify installation by running this in terminal (composer -v)

<img width="624" height="279" alt="image" src="https://github.com/user-attachments/assets/d3142916-e682-4a99-89d5-378f2d0677d1" />

### STEP 3: Install Laravel
- Run this in terminal composer global require laravel/installer
- Add Composer's vendor\bin directory to the PATH (C:\Users\<username>\AppData\Roaming\Composer\vendor\bin)
- Verify installation by running this in terminal (laravel -v)

### STEP 4: Install Git
- Download and install Git from your web browser.

<img width="1098" height="555" alt="image" src="https://github.com/user-attachments/assets/272538d9-9a52-46e1-8c77-428c65a6db24" />

- Verify installation by running this in terminal (git --version)

<img width="431" height="98" alt="image" src="https://github.com/user-attachments/assets/91e5f491-ac33-4d52-a516-f06d38ef9830" />

### STEP 5: Install MYSQL
- Download and install MySQL Server and MySQL Workbench.

<img width="1363" height="612" alt="image" src="https://github.com/user-attachments/assets/79b0c3a6-96fc-4d37-8369-8d6a1e7e84da" />

- Add the MySQL bin folder to the PATH.
- Verify installation by running this in terminal (mysql --version)

<img width="514" height="102" alt="image" src="https://github.com/user-attachments/assets/d43fe098-c0bc-4e60-80b6-716c3913b391" />

### STEP 6: Install Visual Studio Code
- Download and install Visual Studio Code.
- Open your Laravel project folder in VS Code.

### STEP 7: Create a Laravel Project
- Navigate to the desired directory (cd C:\LaravelProjects)
- Create a new Laravel project (laravel new hello-laravel)

---

## 🗂️ Project Structure

- 🧠 **app**
    - Contains the main code of the application.
    - This is where you create controllers, models, and other files that make the website work.
    - Think of it as the "brain" of the Laravel project.

- 🛣️ **routes**
    - Contains all the routes of the application.
    - Routes tell Laravel what page or function to show when a user visits a specific URL.
    - The most common file is web.php.

- 🎨 **resources**
    - Stores the files that users can see, such as web pages (Blade templates), CSS, and JavaScript.
    - This is where you design the user interface of the website.

- 🌐 **public**
    - This is the folder that users access through the web browser.
    - It contains the index.php file, images, icons, and other public files.
    - Laravel starts running from this folder.

- 🔧 **config**
    - Contains the configuration files of the project.
    - This is where you can change settings like the database connection, mail, cache, and other application options.

- 🗄️ **database**
    - Contains files related to the database.
    - It stores migrations, seeders, and factories used to create and manage database tables and sample data.

---

## ❗ Problems Encountered

- PHP version is not 8.5 I tried to install laravel v12 but it required PHP verision 8.5 so I make a way on how will it use the 8.5 instead the older version
- PHP PATH issue
- MYSQL not working

---

## ✅ Solutions

- For the PHP version i just download the latest version on the web and rename the folder and change a path so that it will recognize to use it
- For the MYSQL i just change the DB path on the env file of my project since its using msqlite so i just change it to the server that i created on MYSQL workvbench

---

## 💭 REFLECTION

During this activity, I learned how to install and set up Laravel on my computer. One of the most important things I learned is that the PATH environment variable is very important. If the PATH is not set correctly, Windows cannot recognize commands like php, composer, laravel, and mysql. I also learned how to install the required software such as PHP, Composer, Git, MySQL, and Visual Studio Code before creating a Laravel project. Another thing I learned is how to configure the database using the .env file and how to run a Laravel project using the php artisan serve command.

The most challenging part for me was changing and configuring the PATH variables. I had not done this for a long time because I just got back to school, so I felt rusty. I also encountered several errors, such as missing PHP extensions and database connection problems, which took time to solve. However, I slowly understood the process because I experienced something similar before when I installed Flutter on my computer. Although it was challenging, solving each problem helped me understand Laravel installation better.

Laravel is important in client-server development because it helps the client and the server communicate with each other in an organized and secure way. It provides a ready-made structure for building web applications, making it easier to manage data, process user requests, and connect to databases. This allows developers to build modern web applications more efficiently.

I believe this knowledge will help me in my future software development projects. Laravel already has a well-organized structure, so I do not have to start every project from scratch. This saves a lot of development time and allows me to focus more on improving the system and adding new features instead of spending too much time setting up the project. Overall, learning Laravel is a good foundation for becoming a better web developer..

---

## 📚 REFERECES

The PHP Group. (n.d.). PHP manual.
https://www.php.net/docs.php

Composer. (n.d.). Composer documentation.
https://getcomposer.org/doc/

Git. (n.d.). Git documentation.
https://git-scm.com/doc

Laravel. (n.d.). Laravel documentation.
https://laravel.com/docs
