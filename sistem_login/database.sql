-- menghapus table users
DROP TABLE kamaba_next.users;

-- membuat database dan juga membuat tabel users
CREATE DATABASE kamaba_next;

USE kamaba_next;

CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    birthdate DATE NOT NULL,
    gender ENUM('male', 'female', 'other') NOT NULL,
    bio TEXT,
    agree TINYINT(1) NOT NULL DEFAULT 0,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

-- menambahkan kolom akses
ALTER TABLE kamaba_next.users
ADD akses ENUM('admin', 'guest') NOT NULL DEFAULT 'guest';

-- menambahkan data awal di table users
INSERT INTO kamaba_next.users (name, email, password, birthdate, gender, bio, agree, akses)
VALUES
('John Doe', 'john.doe@example.com', 'password123', '1990-01-01', 'male', 'I am a software engineer', 1, 'admin'),
('Jane Doe', 'jane.doe@example.com', 'password456', '1992-02-02', 'female', 'I am a graphic designer', 1, 'admin'),
('Bob Smith', 'bob.smith@example.com', 'password789', '1985-03-03', 'male', 'I am a project manager', 1, 'admin');