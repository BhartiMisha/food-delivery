# 🥘 food-delivery
   Foodopedia is a website providing users to order there convenient food from the active and featured categories.  
   Admins can perform the following things 
   - Add,delete or update admins
   - add,delete or upadte food and categories
 

## Installation
1.  Download Xammp using the  link.
    [Click Here to Download](https://www.apachefriends.org/index.html)

2. Install any Text Editor (Sublime Text or Visual Studio Code or Atom or Brackets)

3. Download as a Zip or Clone this project
4. Move this project to Root Directory
```
Local Disc C: -> xampp -> htdocs -> 'this project'
```
*Local Disk C is the location where xampp was installed*

5. Open XAMPP Control Panel and Start 'Apache' and 'MySQL'

6. Import Database

a. Open 'phpmyadmin' in your browser
b. Create a Database
c. Import the SQL file provided with this project

7. Make Changes to settings

Go to 'config' folder and Open 'constants.php' file. Then make changes on following constants
```php
<?php 
//Start Session
session_start();

//Create Constants to Store Non Repeating Values
define('SITEURL', 'http://localhost/Name-of-your-database/'); //Update the home URL of the project if you have changed port number or it's live on server
define('LOCALHOST', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'Name-of-your-database');
    
$conn = mysqli_connect(LOCALHOST, DB_USERNAME, DB_PASSWORD) or die(mysqli_error()); //Database Connection
$db_select = mysqli_select_db($conn, DB_NAME) or die(mysqli_error()); //SElecting Database 

?>
```

6. Now, Open the project in your browser. It should run perfectly.  
## Software Used
- Html and css for(UI)
- php


## Developers
 - Misha Bharti developed the UI of the website .
 - Ritik DUbey developed the Database and query for the backend.
 
## Future updates 
- Users can have the facility of tracking their order

