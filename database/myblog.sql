CREATE DATABASE myblog CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE myblog;

CREATE TABLE posts (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    slug VARCHAR(255) UNIQUE NOT NULL,
    content TEXT NOT NULL,
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP
);

INSERT INTO posts (title, slug, content) VALUES
('Giới thiệu SPSS', 'gioi-thieu-spss', 'Đây là bài viết giới thiệu SPSS.'),
('Hướng dẫn cài đặt AMOS', 'huong-dan-cai-dat-amos', 'Đây là bài hướng dẫn cài đặt AMOS.');
