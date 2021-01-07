-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 07 Oca 2021, 17:49:36
-- Sunucu sürümü: 10.4.14-MariaDB
-- PHP Sürümü: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `itp_vt`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `tbl_400432`
--

CREATE TABLE `tbl_400432` (
  `id` int(11) NOT NULL,
  `baslik` varchar(90) COLLATE utf8_turkish_ci NOT NULL,
  `detay` varchar(1000) COLLATE utf8_turkish_ci NOT NULL,
  `tarih` datetime NOT NULL,
  `hatirlatici` varchar(255) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `tbl_400432`
--

INSERT INTO `tbl_400432` (`id`, `baslik`, `detay`, `tarih`, `hatirlatici`) VALUES
(242, 'Alışveriş Listesi', 'Ekmek, Un, Tuz, Yumurta', '2021-01-07 00:01:00', '1 Hafta sonra');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `tbl_400432`
--
ALTER TABLE `tbl_400432`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `tbl_400432`
--
ALTER TABLE `tbl_400432`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=243;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
