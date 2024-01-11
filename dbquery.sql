CREATE TABLE donated (
    id INT(11) PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(255) COLLATE utf8mb4_general_ci NOT NULL,
    email VARCHAR(255) COLLATE utf8mb4_general_ci NOT NULL,
    amount DECIMAL(10,2) NOT NULL,
    contactNo VARCHAR(15) COLLATE utf8mb4_general_ci NOT NULL,
    payment_id VARCHAR(255) COLLATE utf8mb4_general_ci NOT NULL,
    timestamp TIMESTAMP NOT NULL DEFAULT current_timestamp(),
);
