download xampp
go to the apache configuration file in the config menu
find DocumentRoot "/home/user/Desktop" and
<Directory "/home/user/Desktop"> is one line below

put the location of the parent directory of where the project folder is inside both of the quotes. Use my example if you put project folder on desktop

run apache server and mysql database

go to localhost/phpmyadmin and create a database from the code in database.sql, make sure to name the database "database"

go to localhost/project in web browser to view/use website
