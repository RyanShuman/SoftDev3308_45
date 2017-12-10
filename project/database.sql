CREATE TABLE users (
	user_id int(11) not null AUTO_INCREMENT PRIMARY KEY,
	user_first varchar(256) not null,
	user_last varchar(256) not null,
	user_email varchar(256) not null,
	user_name varchar(256) not null,
	user_password varchar(256) not null
);
