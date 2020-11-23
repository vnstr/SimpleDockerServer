CREATE DATABASE server_database;
CREATE USER 'gdrive'@'localhost' IDENTIFIED BY 'gdrive21';
GRANT ALL PRIVILEGES ON server_database.* TO 'gdrive'@'localhost';
FLUSH PRIVILEGES;
