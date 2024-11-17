create database FamilyWeardB;
use FamilyWeardB;
CREATE TABLE categories (
    category_id INT AUTO_INCREMENT PRIMARY KEY,
    category_name VARCHAR(255) NOT NULL
);
CREATE TABLE product_types (
    product_type_id INT AUTO_INCREMENT PRIMARY KEY,
    category_id INT,
    product_type_name VARCHAR(255) NOT NULL,
    FOREIGN KEY (category_id) REFERENCES categories(category_id)
);
CREATE TABLE products (
    product_id INT AUTO_INCREMENT PRIMARY KEY,
    product_type_id INT,
    product_name VARCHAR(255) NOT NULL,
    price DECIMAL(10, 2) NOT NULL,
    sales_price DECIMAL(10, 2),
    wholesale_price DECIMAL(10, 2) NOT NULL,
    colors VARCHAR(255),
    sizes VARCHAR(255),
    patterns VARCHAR(255),
    waist_sizes VARCHAR(255),
    lengths VARCHAR(255),
    attributes VARCHAR(255),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    FOREIGN KEY (product_type_id) REFERENCES product_types(product_type_id)
);
CREATE TABLE sales (
    sale_id INT AUTO_INCREMENT PRIMARY KEY,
    product_id INT,
    sale_price DECIMAL(10, 2),
    start_date DATE,
    end_date DATE,
    FOREIGN KEY (product_id) REFERENCES products(product_id)
);
