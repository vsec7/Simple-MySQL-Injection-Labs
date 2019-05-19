DROP DATABASE IF EXISTS shl;
CREATE DATABASE shl;
CREATE TABLE IF NOT EXISTS shl.gath39
		(
			id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
			title CHAR(32) NOT NULL,
			image CHAR(32) NOT NULL,
			quote CHAR(50) NOT NULL
		);
INSERT INTO shl.gath39 VALUES (1, 'Surabaya Hacker Link', 'image/shl.jpg', 'Jangan Biarkan Manusia Menatap Langit Penuh Harap, Biarkan Langit Gelap Selamanya');