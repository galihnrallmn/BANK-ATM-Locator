-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 20 Jul 2024 pada 11.52
-- Versi server: 8.0.30
-- Versi PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `atm_locator`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `marker`
--

CREATE TABLE `marker` (
  `idmarker` int NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `latitude` decimal(10,8) DEFAULT NULL,
  `longitude` decimal(11,8) DEFAULT NULL,
  `type` enum('ATM','Bank') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `marker`
--

INSERT INTO `marker` (`idmarker`, `name`, `address`, `latitude`, `longitude`, `type`) VALUES
(1, 'ATM BRI RSIA', 'Angsau, Kec. Pelaihari, Kabupaten Tanah Laut, Kalimantan Selatan 70812', -3.78974805, 114.77564330, 'ATM'),
(2, 'Bank BRI ATM - GALLERY KC PELAIHARI', 'Karang Taruna, Kec. Pelaihari, Kabupaten Tanah Laut, Kalimantan Selatan 70812', -3.80153287, 114.76406156, 'Bank'),
(17, 'Bank BRI CRM - UNIT BRI PLEIHARI KOTA PLEIHARI', 'Jl. Pintas Sambangan, RT.02/RW.01, Pelaihari, Kec. Pelaihari, Kabupaten Tanah Laut, Kalimantan Selatan 70812', -3.80187875, 114.76618950, 'Bank'),
(18, 'ATM BRI & BNI', 'Jl. KH. Mansyur, Angsau, Kec. Pelaihari, Kabupaten Tanah Laut, Kalimantan Selatan 70814', -3.79059503, 114.77664098, 'ATM');

-- --------------------------------------------------------

--
-- Struktur dari tabel `polygon`
--

CREATE TABLE `polygon` (
  `idpolygon` int NOT NULL,
  `name` varchar(20) NOT NULL,
  `polygon` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `polygon`
--

INSERT INTO `polygon` (`idpolygon`, `name`, `polygon`) VALUES
(2, 'Angsau', '[[114.76792380158491,-3.802220562224562],[114.77154148577233,-3.803293952095686],[114.77361826356622,-3.8018011225951938],[114.7772541987245,-3.8000906121567937],[114.78024036600362,-3.79974575077118],[114.78122538052139,-3.7991111653165035],[114.78173783253493,-3.7958834405952047],[114.78238755953464,-3.794347810331004],[114.77574123991195,-3.7901444040928],[114.77521002849124,-3.7917222246667706],[114.77434429829452,-3.793623381258527],[114.77352032955599,-3.7959973744951014],[114.77252840763117,-3.7971415024700406],[114.76993707449833,-3.7994337255873916],[114.76933192888316,-3.800966486851806],[114.76792380158491,-3.802220562224562]]'),
(3, 'Karang Taruna', '[\r\n            [\r\n              114.76233837156684,\r\n              -3.8042896615079513\r\n            ],\r\n            [\r\n              114.76170673100995,\r\n              -3.8058611033203817\r\n            ],\r\n            [\r\n              114.7609107542703,\r\n              -3.8070430381858955\r\n            ],\r\n            [\r\n              114.75887379519702,\r\n              -3.8084983440279245\r\n            ],\r\n            [\r\n              114.75764325439633,\r\n              -3.8092922745221927\r\n            ],\r\n            [\r\n              114.75700485352979,\r\n              -3.809449214184056\r\n            ],\r\n            [\r\n              114.75508407921507,\r\n              -3.810393020320916\r\n            ],\r\n            [\r\n              114.7553326010268,\r\n              -3.811281087206197\r\n            ],\r\n            [\r\n              114.75562825415926,\r\n              -3.8120677513046672\r\n            ],\r\n            [\r\n              114.75551562449141,\r\n              -3.813149412683373\r\n            ],\r\n            [\r\n              114.75723420717168,\r\n              -3.815921690992809\r\n            ],\r\n            [\r\n              114.75783215506851,\r\n              -3.818404405817404\r\n            ],\r\n            [\r\n              114.76140055380847,\r\n              -3.820328986012626\r\n            ],\r\n            [\r\n              114.76290506787177,\r\n              -3.816710771676952\r\n            ],\r\n            [\r\n              114.76311724293191,\r\n              -3.815171101377814\r\n            ],\r\n            [\r\n              114.76338728391801,\r\n              -3.813708412037741\r\n            ],\r\n            [\r\n              114.76361456053178,\r\n              -3.810855965837902\r\n            ],\r\n            [\r\n              114.76396055557348,\r\n              -3.807560950348716\r\n            ],\r\n            [\r\n              114.76472895852487,\r\n              -3.80562714308185\r\n            ],\r\n            [\r\n              114.76470334509355,\r\n              -3.805047851954882\r\n            ],\r\n            [\r\n              114.76233837156684,\r\n              -3.8042896615079513\r\n            ]\r\n          ]');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `marker`
--
ALTER TABLE `marker`
  ADD PRIMARY KEY (`idmarker`);

--
-- Indeks untuk tabel `polygon`
--
ALTER TABLE `polygon`
  ADD PRIMARY KEY (`idpolygon`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `marker`
--
ALTER TABLE `marker`
  MODIFY `idmarker` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT untuk tabel `polygon`
--
ALTER TABLE `polygon`
  MODIFY `idpolygon` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
