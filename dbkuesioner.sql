-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 25, 2014 at 11:56 AM
-- Server version: 5.5.34
-- PHP Version: 5.4.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `dbkuesioner`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbaspekquesioner`
--

CREATE TABLE IF NOT EXISTS `tbaspekquesioner` (
  `idaspek` int(2) NOT NULL,
  `idkompetensi` varchar(2) DEFAULT NULL,
  `namakompetensi` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idaspek`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbdosen`
--

CREATE TABLE IF NOT EXISTS `tbdosen` (
  `iddosen` smallint(6) NOT NULL,
  `nik` varchar(10) DEFAULT NULL,
  `nidn` varchar(12) DEFAULT NULL,
  `namadosen` varchar(30) DEFAULT NULL,
  `tgllahir` date DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`iddosen`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbjurusan`
--

CREATE TABLE IF NOT EXISTS `tbjurusan` (
  `kdjurusan` varchar(2) NOT NULL,
  `namajurusan` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`kdjurusan`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbkompetensi`
--

CREATE TABLE IF NOT EXISTS `tbkompetensi` (
  `idkompetensi` int(2) NOT NULL,
  `namakompetensi` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`idkompetensi`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbmahasiswa`
--

CREATE TABLE IF NOT EXISTS `tbmahasiswa` (
  `npm` varchar(16) NOT NULL,
  `nama` varchar(30) DEFAULT NULL,
  `tgllahir` date DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `kdjurusan` varchar(2) DEFAULT NULL,
  PRIMARY KEY (`npm`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbmatakuliah`
--

CREATE TABLE IF NOT EXISTS `tbmatakuliah` (
  `kdmatakuliah` varchar(10) NOT NULL,
  `namamatakuliah` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`kdmatakuliah`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbmengajar`
--

CREATE TABLE IF NOT EXISTS `tbmengajar` (
  `iddosen` smallint(6) DEFAULT NULL,
  `semester` char(1) DEFAULT NULL,
  `kdmatakuliah` varchar(10) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbpenilaian`
--

CREATE TABLE IF NOT EXISTS `tbpenilaian` (
  `idpenilaian` int(11) NOT NULL,
  `idaspek` int(2) DEFAULT NULL,
  `npm` varchar(16) DEFAULT NULL,
  `iddosen` int(2) DEFAULT NULL,
  `kdmatakuliah` varchar(10) DEFAULT NULL,
  `nilai` int(1) DEFAULT NULL,
  `semester` varchar(6) DEFAULT NULL,
  `tahun` varchar(4) DEFAULT NULL,
  PRIMARY KEY (`idpenilaian`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbuser`
--

CREATE TABLE IF NOT EXISTS `tbuser` (
  `username` varchar(20) NOT NULL,
  `nama` varchar(30) DEFAULT NULL,
  `email` varchar(20) DEFAULT NULL,
  `password` varchar(32) DEFAULT NULL,
  `tipeakses` varchar(5) DEFAULT NULL,
  PRIMARY KEY (`username`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbuser`
--

INSERT INTO `tbuser` (`username`, `nama`, `email`, `password`, `tipeakses`) VALUES
('root', 'root', 'root@ekuesioner.net', '77de54ccf56eb6f7dbf99e4d3be949ab', 'admin');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
