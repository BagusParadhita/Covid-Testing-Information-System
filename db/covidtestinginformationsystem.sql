-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 08 Apr 2021 pada 10.28
-- Versi server: 10.1.38-MariaDB
-- Versi PHP: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `covidtestinginformationsystem`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `centreofficer`
--

CREATE TABLE `centreofficer` (
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `position` varchar(255) NOT NULL,
  `centreID` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `centreofficer`
--

INSERT INTO `centreofficer` (`username`, `password`, `name`, `position`, `centreID`) VALUES
('sasuke4life', '410e7892f596e775bb0788daf21eaefe', 'Sakura Haruno', 'Tester', 3),
('SuperKingCowBaby', '827ccb0eea8a706c4c34a16891f84e7b', 'So Junghwan', 'Tester', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `covidtest`
--

CREATE TABLE `covidtest` (
  `testID` int(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `symptoms` varchar(255) NOT NULL,
  `patientType` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `testDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `covidtest`
--

INSERT INTO `covidtest` (`testID`, `username`, `password`, `name`, `symptoms`, `patientType`, `status`, `testDate`) VALUES
(1, 'patient1', '202cb962ac59075b964b07152d234b70', 'Patient', 'cough', 'suspect', 'pending', '2021-04-07 15:55:30'),
(2, 'jametKun', '289dff07669d7a23de0ef88d2f7129e7', 'Junaedi Jamet', 'fever', 'closecontact', 'pending', '2021-04-07 16:03:17');

-- --------------------------------------------------------

--
-- Struktur dari tabel `testcentre`
--

CREATE TABLE `testcentre` (
  `centreID` int(255) NOT NULL,
  `centreName` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `testcentre`
--

INSERT INTO `testcentre` (`centreID`, `centreName`) VALUES
(1, 'Tabanan General Hospital'),
(2, 'RSUD Sanjiwani Gianyar'),
(3, 'Sanglah General Hospital'),
(4, 'RSUD Kabupaten Buleleng'),
(5, 'RSUD Blambangan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `testkit`
--

CREATE TABLE `testkit` (
  `kitID` int(255) NOT NULL,
  `testName` varchar(255) NOT NULL,
  `availableStock` int(255) NOT NULL,
  `centreID` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `testkit`
--

INSERT INTO `testkit` (`kitID`, `testName`, `availableStock`, `centreID`) VALUES
(1, 'Corona Swab Stick', 50, 2),
(2, 'VTM Kit', 86, 3),
(3, 'RT PCR Test Kit', 80, 1),
(4, 'RNA Extraction Kit', 69, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`username`, `password`, `name`) VALUES
('joheun', '202cb962ac59075b964b07152d234b70', 'Bagus Paradhita'),
('nanaji', '289dff07669d7a23de0ef88d2f7129e7', 'Nana');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `centreofficer`
--
ALTER TABLE `centreofficer`
  ADD PRIMARY KEY (`username`);

--
-- Indeks untuk tabel `covidtest`
--
ALTER TABLE `covidtest`
  ADD PRIMARY KEY (`testID`);

--
-- Indeks untuk tabel `testcentre`
--
ALTER TABLE `testcentre`
  ADD PRIMARY KEY (`centreID`);

--
-- Indeks untuk tabel `testkit`
--
ALTER TABLE `testkit`
  ADD PRIMARY KEY (`kitID`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `covidtest`
--
ALTER TABLE `covidtest`
  MODIFY `testID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `testcentre`
--
ALTER TABLE `testcentre`
  MODIFY `centreID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `testkit`
--
ALTER TABLE `testkit`
  MODIFY `kitID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
