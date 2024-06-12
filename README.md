# Personal Profile Web Application

## Objective

This project is a dynamic web application that allows users to create and manage personal profiles. The application includes a front-end form for collecting user data, a page to display the profiles, and integrates with a MySQL database to store and retrieve profile information. I've used basic CSS to enhance the visual appearance of the application.

## Features

- Form page to collect user details (name, email, phone number, address, profile picture)
- Profile display page to show all user profiles
- MySQL database integration for storing and retrieving profile data
- Basic CSS styling to improve the user interface

## Requirements

- XAMPP or another server stack with Apache, MySQL, and PHP
- MySQL database named `profiles_db`

## Installation

1. **Set up your environment:**
    - Install XAMPP or another server stack that includes Apache, MySQL, and PHP.
    - Start the Apache and MySQL modules from the XAMPP control panel.

2. **Create the database:**
    - Open phpMyAdmin from the XAMPP control panel.
    - Create a new database named `profiles_db`.
    - Run the following SQL query to create the `profiles` table:
        ```sql
        CREATE TABLE profiles (
            id INT AUTO_INCREMENT PRIMARY KEY,
            name VARCHAR(100) NOT NULL,
            email VARCHAR(100) NOT NULL,
            phone VARCHAR(15) NOT NULL,
            address TEXT NOT NULL,
            profile_pic VARCHAR(255) NOT NULL
        );
        ```

3. **Project structure:**
    - Clone this repository to your local machine.
    - Ensure the project directory (`PersonalProfileApp`) has the following structure:
        ```
        PersonalProfileApp/
        ├── css/
        │   └── styles.css
        ├── images/
        ├── includes/
        ├── index.php
        ├── save_profile.php
        └── profiles.php
        ```

4. **Run the application:**
    - Place the `PersonalProfileApp` directory in the `htdocs` folder of your XAMPP installation.
    - Open a web browser and navigate to `http://localhost/PersonalProfileApp/index.php` to create profiles.
    - Navigate to `http://localhost/PersonalProfileApp/profiles.php` to view all profiles.

## Usage

- **Creating a profile:**
    - Fill out the form on the `index.php` page with your details and upload a profile picture.
    - Submit the form to save your profile to the database.

- **Viewing profiles:**
    - Navigate to the `profiles.php` page to see a list of all created profiles.

##PHP Classwork
  -This is a classwork for practicing php and how to connect to databases
## Contact

For any questions or feedback, please reach out to me at gamalielgachanga58@gmail.com
