# Live_OTT
Unique OTT Platform built for college project. Not for commercial purposes.

Have a Look into it at **https://shri-sharan.github.io/Live_OTT/**

This was for a college project built entirely from scratch. 

*All and any movie image, content and information are just for example and fair usage and not for any commercial purposes. Used for a college project*

Index.html
![image](https://github.com/Shri-Sharan/Live_OTT/assets/146396309/189eecbc-6c12-445a-9dc1-d3b69d34b6a7)
![image](https://github.com/Shri-Sharan/Live_OTT/assets/146396309/f9e962df-4d73-4d70-bbea-b50dd6f76f24)
![image](https://github.com/Shri-Sharan/Live_OTT/assets/146396309/41a9e2ae-8969-4ebc-b1d1-8d4e97530a5f)

Booking.html
![image](https://github.com/Shri-Sharan/Live_OTT/assets/146396309/f87ea179-7bc2-4fa9-9653-c829aace3d91)

and more..

#Setup guide

->Requirements

**Any browser**

**Xampp or any application that lets you create a local server. Mainly Mysql and Apache are the requirements.**

**Basic knowledge of using xampp tool (its pretty easy watch any youtube tutorial ezz, don't worry)**

**You need Xampp running i.e, your apache and mysql should be started and make sure to place entire files in the htdocs folder of you Xampp installation directory. (Refer online for issues)**

#Setup guide for database

_->There are two databases created one for storing and verifiying login credentials and the other for booking Id's._

_For error a free process follow the below methods that corresponds to PHP code_

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

_(Give your own mp4 file to play in play.html ""-source src="kantara.mp4" type="video/mp4"-"")_
