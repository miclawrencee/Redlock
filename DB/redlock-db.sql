CREATE DATABASE RedLock;
USE RedLock;

CREATE TABLE Users
(
    ID int(11) NOT NULL,
    Nama varchar(255) NOT NULL,
    Alamat varchar(255) NOT NULL,
    Jabatan varchar(255) NOT NULL,
    Primary Key (ID)
);

INSERT into Users (ID, Nama, Alamat, Jabatan) VALUES
(01, 'Dana', 'Jl. Flamboyan Blok 4 No. 21', 'Finance'),
(02, 'Tasya', 'Jl. Ancol Raya 3 No. 17', 'Content Creator'),
(03, 'Karin', 'Jl. Jelambar Selatan 4 No. 2', 'General Manager'),
(04, 'Forsun', 'Jl. Kapuk Baru Blok F No. 9A', 'Supervisor');