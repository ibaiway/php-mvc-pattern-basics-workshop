-- Database creation
DROP DATABASE IF EXISTS mvc_basics;
CREATE DATABASE IF NOT EXISTS mvc_basics;
USE mvc_basics;

-- Creation of the tables
CREATE TABLE drivers(
id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
name VARCHAR(25) NOT NULL,
phone_number INT(9) NOT NULL,
license_plate VARCHAR(10)
);

CREATE TABLE clients(
id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
name VARCHAR(25) NOT NULL,
email VARCHAR(50) NOT NULL
);

CREATE TABLE trips(
id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
driver_id INT NOT NULL,
client_id INT NOT NULL,
length INT NOT NULL,
date DATE NOT NULL,
FOREIGN KEY (driver_id)  REFERENCES drivers (id)    ON DELETE CASCADE,
FOREIGN KEY (client_id) REFERENCES clients (id) ON DELETE CASCADE
);


-- Insert of data
INSERT INTO drivers(name, phone_number, license_plate)
VALUES
("Paco","333444555","XJK1234"),
("Marta","777444222","UJH6582"),
("Juan","333444555","HRJ4756"),
("Miguel","111444777","MKJ1368"),
("Alberto","666999888","FDR4856");

INSERT INTO clients(name, email)
VALUES
("Mikel","mikel@gmail.com"),
("Ibai","ibai@gmail.com"),
("Pau","pau@gmail.com"),
("Luis","luis@gmail.com"),
("Adrian","adrian@gmail.com");

INSERT INTO trips(driver_id, client_id, length, date)
VALUES
(1,3,6,"2020-05-04"),
(1,2,6,"2020-06-14"),
(1,1,6,"2020-04-13"),
(2,4,6,"2020-08-18"),
(2,5,6,"2020-05-19"),
(2,5,6,"2020-04-22"),
(3,4,6,"2020-03-05"),
(3,1,6,"2020-06-25"),
(3,2,6,"2020-07-14"),
(4,3,6,"2020-07-26"),
(4,1,6,"2020-09-23"),
(4,5,6,"2020-04-12"),
(5,4,6,"2020-05-14"),
(5,1,6,"2020-03-09"),
(5,2,6,"2020-06-10");
