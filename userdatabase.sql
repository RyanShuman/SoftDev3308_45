CREATE TABLE users (
	user_id int(20) not null AUTO_INCREMENT PRIMARY KEY, /*auto.. increastes size for each new person; primanry .. sets line as unique id for this table*/ 
	email VARCHAR(64) not null,
	name_first varchar(64) not null,
	name_last varchar(64) not null,
	password CHAR(32) NOT NULL,
	user_lastUse = date("y-m-d H:i:s"); 
);
