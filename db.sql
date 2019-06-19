DROP DATABASE IF EXISTS gath39;
CREATE DATABASE gath39;
CREATE TABLE IF NOT EXISTS gath39.login 
	(
		id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
		user VARCHAR(20) NOT NULL,
		pass VARCHAR(40) NOT NULL
	);
INSERT INTO gath39.login (id, user, pass)VALUES('1','admin','shl1337');
CREATE TABLE IF NOT EXISTS gath39.article
	(
		id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
		title CHAR(32) NOT NULL,
		image CHAR(32) NOT NULL,
		quote CHAR(50) NOT NULL
	);
INSERT INTO gath39.article VALUES (1, 'Surabaya Hacker Link', 'image/shl.jpg', 'Jangan Biarkan Manusia Menatap Langit Penuh Harap, Biarkan Langit Gelap Selamanya');
