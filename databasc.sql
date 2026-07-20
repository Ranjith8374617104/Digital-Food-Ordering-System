CREATE DATABASE food_ordering;

USE food_ordering;

-- Users Table
CREATE TABLE users (
id INT AUTO_INCREMENT PRIMARY KEY,
name VARCHAR(100),
email VARCHAR(100) UNIQUE,
password VARCHAR(100)
);

-- Food Items Table
CREATE TABLE food_items (
id INT AUTO_INCREMENT PRIMARY KEY,
name VARCHAR(100),
price INT
);

-- Orders Table
CREATE TABLE orders (
id INT AUTO_INCREMENT PRIMARY KEY,
user_id INT,
food_id INT,
quantity INT,
FOREIGN KEY (user_id) REFERENCES users(id),
FOREIGN KEY (food_id) REFERENCES food_items(id)
);

-- Insert Sample Food Data
INSERT INTO food_items (name, price) VALUES
('Pizza', 200),
('Burger', 120),
('Pasta', 180);
