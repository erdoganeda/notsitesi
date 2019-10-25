-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1:3306
-- Üretim Zamanı: 23 May 2019, 11:14:51
-- Sunucu sürümü: 5.7.19
-- PHP Sürümü: 7.0.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `binotnet`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `adminid` int(11) NOT NULL,
  `adminname` varchar(30) NOT NULL,
  `adminpass` varchar(8) NOT NULL,
  `userid` int(11) DEFAULT NULL,
  `gelenid` int(11) DEFAULT NULL,
  `onayid` int(11) DEFAULT NULL,
  PRIMARY KEY (`adminid`),
  KEY `userid` (`userid`),
  KEY `gelenid` (`gelenid`),
  KEY `onayid` (`onayid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `dersler`
--

DROP TABLE IF EXISTS `dersler`;
CREATE TABLE IF NOT EXISTS `dersler` (
  `dersid` int(11) NOT NULL,
  `dersad` varchar(50) DEFAULT NULL,
  `derstur` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`dersid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `duyuru`
--

DROP TABLE IF EXISTS `duyuru`;
CREATE TABLE IF NOT EXISTS `duyuru` (
  `Duyuruid` int(11) NOT NULL AUTO_INCREMENT,
  `Duyuruad` varchar(30) COLLATE utf8_turkish_ci NOT NULL,
  `Duyurutarih` date NOT NULL,
  `Duyurusaat` time NOT NULL,
  PRIMARY KEY (`Duyuruid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `gelenler`
--

DROP TABLE IF EXISTS `gelenler`;
CREATE TABLE IF NOT EXISTS `gelenler` (
  `gelenid` int(11) NOT NULL,
  `notid` int(11) DEFAULT NULL,
  `yorumid` int(11) DEFAULT NULL,
  PRIMARY KEY (`gelenid`),
  KEY `notid` (`notid`),
  KEY `yorumid` (`yorumid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `haberler`
--

DROP TABLE IF EXISTS `haberler`;
CREATE TABLE IF NOT EXISTS `haberler` (
  `Haberid` int(11) NOT NULL,
  `Haberad` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `Habertur` varchar(15) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `hareketler`
--

DROP TABLE IF EXISTS `hareketler`;
CREATE TABLE IF NOT EXISTS `hareketler` (
  `hareketid` int(11) NOT NULL,
  `giristarih` date DEFAULT NULL,
  `girissaat` datetime DEFAULT NULL,
  `cikistarih` date DEFAULT NULL,
  `cikissaat` datetime DEFAULT NULL,
  `userid` int(11) DEFAULT NULL,
  PRIMARY KEY (`hareketid`),
  KEY `userid` (`userid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `icerik`
--

DROP TABLE IF EXISTS `icerik`;
CREATE TABLE IF NOT EXISTS `icerik` (
  `icerikid` int(11) NOT NULL,
  `icerikad` varchar(50) DEFAULT NULL,
  `iceriktur` varchar(50) DEFAULT NULL,
  `dersid` int(11) DEFAULT NULL,
  PRIMARY KEY (`icerikid`),
  KEY `dersid` (`dersid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kaynaklar`
--

DROP TABLE IF EXISTS `kaynaklar`;
CREATE TABLE IF NOT EXISTS `kaynaklar` (
  `kaynakid` int(11) NOT NULL,
  `kaynakad` varchar(50) DEFAULT NULL,
  `kaynaktur` varchar(50) DEFAULT NULL,
  `dersid` int(11) DEFAULT NULL,
  PRIMARY KEY (`kaynakid`),
  KEY `dersid` (`dersid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `notlar`
--

DROP TABLE IF EXISTS `notlar`;
CREATE TABLE IF NOT EXISTS `notlar` (
  `notid` int(11) NOT NULL,
  `notad` varchar(50) DEFAULT NULL,
  `userid` int(11) DEFAULT NULL,
  PRIMARY KEY (`notid`),
  KEY `userid` (`userid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `onaylananlar`
--

DROP TABLE IF EXISTS `onaylananlar`;
CREATE TABLE IF NOT EXISTS `onaylananlar` (
  `onayid` int(11) NOT NULL,
  `notid` int(11) DEFAULT NULL,
  `yorumid` int(11) DEFAULT NULL,
  PRIMARY KEY (`onayid`),
  KEY `notid` (`notid`),
  KEY `yorumid` (`yorumid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `paylasimlar`
--

DROP TABLE IF EXISTS `paylasimlar`;
CREATE TABLE IF NOT EXISTS `paylasimlar` (
  `payid` int(11) NOT NULL,
  `pstatu` int(11) DEFAULT NULL,
  `paytarih` date DEFAULT NULL,
  `paysaat` datetime DEFAULT NULL,
  `hareketid` int(11) DEFAULT NULL,
  PRIMARY KEY (`payid`),
  KEY `hareketid` (`hareketid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `puan`
--

DROP TABLE IF EXISTS `puan`;
CREATE TABLE IF NOT EXISTS `puan` (
  `Puanid` int(11) NOT NULL AUTO_INCREMENT,
  `Puantop` int(11) DEFAULT NULL,
  `Userid` int(11) DEFAULT NULL,
  PRIMARY KEY (`Puanid`),
  KEY `Userid` (`Userid`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `Userid` int(11) NOT NULL AUTO_INCREMENT,
  `Username` varchar(30) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `Userpass` varchar(8) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `Usermail` varchar(30) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `Usertel` bigint(11) NOT NULL,
  PRIMARY KEY (`Userid`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf32 COLLATE=utf32_turkish_ci;

--
-- Tablo döküm verisi `user`
--

INSERT INTO `user` (`Userid`, `Username`, `Userpass`, `Usermail`, `Usertel`) VALUES
(16, 'hacerbaran', '12345678', 'hcrbrn@gmail.com', 12345678911),
(18, 'edanur', '12345678', 'edanur@gmail.com', 5340335460),
(19, 'sevgi', '12345678', 'sevgim@gmail.com', 54132564124),
(20, 'sevgi', '12345678', 'sevgim@gmail.com', 54132564124),
(21, 'sevgi', '12345678', 'sevgim@gmail.com', 54132564124);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `yorumlar`
--

DROP TABLE IF EXISTS `yorumlar`;
CREATE TABLE IF NOT EXISTS `yorumlar` (
  `yorumid` int(11) NOT NULL,
  `yorumad` varchar(250) DEFAULT NULL,
  `userid` int(11) DEFAULT NULL,
  PRIMARY KEY (`yorumid`),
  KEY `userid` (`userid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dökümü yapılmış tablolar için kısıtlamalar
--

--
-- Tablo kısıtlamaları `puan`
--
ALTER TABLE `puan`
  ADD CONSTRAINT `puan_ibfk_1` FOREIGN KEY (`Userid`) REFERENCES `user` (`Userid`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
