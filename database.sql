-- Script Database Portofolio
CREATE DATABASE IF NOT EXISTS `db_portofolio`;
USE `db_portofolio`;

CREATE TABLE IF NOT EXISTS `tbl_proyek` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `judul` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `gambar` varchar(500) NOT NULL,
  `link` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Memasukkan Data Dummy Awal
INSERT INTO `tbl_proyek` (`judul`, `deskripsi`, `gambar`, `link`) VALUES
('Katalog Yonako Design & Printing', 'Desain layout dan tipografi untuk brosur percetakan komersial.', 'https://images.unsplash.com/photo-1626785776979-b108151eb428?auto=format&fit=crop&w=400&q=80', '#'),
('Dashboard Admin BUMN', 'Prototype aplikasi administrasi dan tracking system menggunakan PHP Native & MySQL.', 'https://images.unsplash.com/photo-1551288049-bebda4e38f71?auto=format&fit=crop&w=400&q=80', '#');
