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
('Fat Racoon', 25.00, 'Slow, almost not washing, probably eat your fridge.', 'szop10.jpg'),
('Bandit', 30.00, 'A mischievous raccoon with a love for shiny objects.', 'szop11.jpg'),
('Thief Racoon', 18.99, 'The price you will pay for his service will be a rip-off', 'szop12.jpg'),
('Zorro Racoon', 0.99, 'He will distribute your cleaning supplies to the most needy people.', 'szop17.jpg'),
('Rockstar Racoon', 220.00, 'More playing guitar than washing.', 'szop16.jpg'),
('Very Good Racoon', 999.99, 'Your laundry will be perfectly washed.', 'szop14.jpg'),
('Gossip Racoon', 34.00, 'There is more gossip than working..', 'szop18.jpg'),
('I do not know what to do Racoon', 8.99, 'Never knows what to do, you have to help him to wash', 'szop15.jpg');


CREATE TABLE receipt (
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    uuid TEXT NOT NULL UNIQUE,
    amount DECIMAL(9, 2) NOT NULL,
    first_name NVARCHAR(50) NOT NULL,
    last_name NVARCHAR(50) NOT NULL,
    address_line_1 NVARCHAR(100) NOT NULL,
    address_line_2 NVARCHAR(100) NOT NULL,
    card_number VARCHAR(20) NOT NULL,
    card_expiration VARCHAR(7) NOT NULL,
    cvv VARCHAR(3) NOT NULL,
    cleaning_supplies ENUM('yes', 'no') NOT NULL
);