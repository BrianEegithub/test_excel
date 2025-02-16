-- Create the database
CREATE DATABASE IF NOT EXISTS store_data;
USE store_data;

-- Create the table
CREATE TABLE IF NOT EXISTS users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    number VARCHAR(50) NOT NULL
);

-- Insert sample data (optional)
INSERT INTO users (name, number) VALUES ('John Doe', '12345');
INSERT INTO users (name, number) VALUES ('Alice Smith', '67890');
