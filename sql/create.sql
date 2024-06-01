DROP DATABASE IF EXISTS shop;
CREATE DATABASE shop;

USE shop;

CREATE TABLE raccoons (
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    price DECIMAL(10, 2) NOT NULL,
    description TEXT NOT NULL,
    image_path VARCHAR(255) NOT NULL
);


INSERT INTO raccoons (name, price, description, image_path) VALUES
('Rocky', 25.00, 'Friendly and playful raccoon perfect for a fun day out.', 'szop10.jpg'),
('Bandit', 30.00, 'A mischievous raccoon with a love for shiny objects.', 'szop11.jpg'),
('Rascal', 20.00, 'A gentle raccoon that enjoys relaxing and cuddling.', 'szop12.jpg');


CREATE TABLE receipt (
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    uuid TEXT NOT NULL UNIQUE,
    amount DECIMAL(9, 2) NOT NULL,
    first_namen NVARCHAR(50) NOT NULL,
    last_name NVARCHAR(50) NOT NULL,
    address_line_1 NVARCHAR(100) NOT NULL,
    address_line_2 NVARCHAR(100) NOT NULL,
    card_number VARCHAR(20) NOT NULL,
    card_expiration VARCHAR(7) NOT NULL,
    cvv VARCHAR(3) NOT NULL,
    cleaning_supplies ENUM('yes', 'no') NOT NULL
);