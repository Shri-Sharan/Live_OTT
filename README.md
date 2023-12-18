# Live_OTT
Unique OTT Platform built for college project. Not for commercial purposes.
This was for a college project built entirely from scratch pending for license. 

#Setup guide
->Requirements
*Any browser
*Xampp or any application that lets you create a local server. Mainly Mysql and Apache are the requirements.
*Basic knowledge of using xampp tool (its pretty easy watch any youtube tutorial ezz, don't worry)
*You need Xampp running i.e, your apache and mysql should be started and make sure to place entire files in the htdocs folder of you Xampp installation directory. (Refer online for issues)

#Setup guide for database
->There are two databases created one for storing and verifiying login credentials and the other for booking Id's.
For error free proces follow the below methods that corresponds to PHP code

*Setup live_ott_book database (for booking id storage)
First create a database with exact name live_ott_book
Then just copy and run the below code in the SQL query tab
CREATE TABLE bookings (
    id INT AUTO_INCREMENT PRIMARY KEY,
    movie VARCHAR(255) NOT NULL,
    timing VARCHAR(255) NOT NULL,
    name VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    phone VARCHAR(15) NOT NULL,
    payment VARCHAR(255) NOT NULL,
    booking_id VARCHAR(255) NOT NULL
);

*Setup live_ott_login database (for storing login credentials)
First create a database with exact name live_ott_login
Then just copy and run the below code in the SQL query tab
CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    fullname VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    password VARCHAR(255) NOT NULL
);

Your database is setup

By placing all the files under the correct htdocs directory and starting apache and mysql server your good to go.
