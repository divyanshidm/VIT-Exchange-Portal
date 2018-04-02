# VIT-Exchange-Portal
VIT Exchange Portal is a web application that will allow VIT Students to interact with each other. The application shall be helpful for a variety of purposes. It consists of mainly three forums: Reviews exchange forum, Discussions forum and cab sharing forum. <br/> <br/>
Click [here](https://nameless-savannah-14217.herokuapp.com/index.php) to take a tour of VIT Exchange Portal. <br/>
Use username "15BCE0342" (without quotes) and password "qwerty" (without quotes) to login. <br/>
# Dependenices #
* XAMPP web server <br/>
* PHP <br/>
* MYSQL <br/>
* HTML <br/>
* CSS <br/>

# Instructions on how to setup #

## Server Setup ##
- [x] Start Xampp Server Control Panel. <br/>
- [x] Start Apache and MySQL in the Xampp Control Panel. <br/>


## Database Setup ##
PHPMyAdmin is recommended to execute the SQL scripts.
Execute the <kbd> database.sql </kbd> file inside <kbd> dataBase </kbd> folder in the directory root using the MySQL command line or PHPMyAdmin in order to create the required tables.

### Note ###
Some PHP files given in the src folder contains the following code segment.

```PHP
$url=parse_url(getenv("CLEARDB_DATABASE_URL"));
$server = $url["host"];
$username = $url["user"];
$password1 = $url["pass"];
$db = substr($url["path"],1);
```
The part is to connect to the database which is hosted over heroku cloud. 
To run the website locally you should edit these lines.

```PHP
// Remove the $url = ... line
$server = "localhost";
$username = "root";
$password1 = "YOUR PASSWORD FOR LOCALHOST IF ANY";
//Leave the quotes empty without spaces if you do not have any password set for localhost.
$db = "NAME OF THE DATABASE";
//In the dataBase file name of database is "vep" leave it as it is or change it accordingly in the above line.
```

## Folder setup ##
- [x] Copy the contents of <kbd> src </kbd> folder to <kbd> C:\xampp\htdocs </kbd> in your local computer. Also copy the contents of <kbd> images </kbd> folder inside <kbd> src </kbd> to the same folder.<br/>
- [x] Open http://localhost/index.php on your browser. Make sure Apache and MySQL are turned on in Xampp Control Panel. <br/>
- [x] The homepage of VEP should open. You can browse through the entire website.
- [x] Use username "15BCE0342" (without quotes) and password "qwerty" (without quotes) to login.
