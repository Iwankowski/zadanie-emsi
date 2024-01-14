-- phpMyAdmin SQL Dump
-- version 4.9.11
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Czas generowania: 14 Sty 2024, 22:30
-- Wersja serwera: 10.5.21-MariaDB-0cba+deb11u1
-- Wersja PHP: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `kamil99iwankowski`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `contractors`
--

CREATE TABLE `contractors` (
  `id` int(11) NOT NULL,
  `nip` varchar(32) NOT NULL,
  `regon` varchar(32) NOT NULL,
  `name` varchar(256) NOT NULL,
  `vat_payer` tinyint(1) NOT NULL,
  `street` varchar(256) NOT NULL,
  `house_number` varchar(16) NOT NULL,
  `apartment_number` varchar(16) DEFAULT NULL,
  `deleted` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `contractors`
--

INSERT INTO `contractors` (`id`, `nip`, `regon`, `name`, `vat_payer`, `street`, `house_number`, `apartment_number`, `deleted`) VALUES
(14, '', '', '', 0, '', '', '', 1),
(13, '54954858888', '654688', 'Anna Nowak', 1, 'Grochowa 16', '2B', '23', 0),
(12, '254545445', '5644189', 'Usuługi Kowalski', 0, 'Wiejska 5', '20', '', 0);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `delegations`
--

CREATE TABLE `delegations` (
  `id` int(11) NOT NULL,
  `fullname` varchar(128) NOT NULL,
  `date_from` timestamp NULL DEFAULT NULL,
  `date_to` timestamp NULL DEFAULT NULL,
  `departure` varchar(256) NOT NULL,
  `arrival` varchar(256) NOT NULL,
  `deleted` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `delegations`
--

INSERT INTO `delegations` (`id`, `fullname`, `date_from`, `date_to`, `departure`, `arrival`, `deleted`) VALUES
(16, 'Aleksander Kowalski', '2024-01-17 23:00:00', '2024-01-30 23:00:00', 'Gdynia', 'Opole', 0),
(15, 'Jakub Nowak', '2024-01-07 23:00:00', '2024-01-11 23:00:00', 'Olecko', 'Gdynia', 0),
(14, 'Andrzej Kowalski', '2024-01-17 23:00:00', '2024-01-07 23:00:00', 'Białystok', 'Bielsko-Biała', 0),
(17, 'Grzegorz', '2024-01-15 23:00:00', '2024-01-13 23:00:00', 'Katowice', 'Częstochowa', 0),
(13, 'Anna Maj', '2024-01-29 23:00:00', '2024-01-11 23:00:00', 'Poznań', 'Warszawa', 0),
(12, 'Karol Nowak', '2024-01-15 23:00:00', '2024-01-25 23:00:00', 'Warszawa', 'Kraków', 0);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `employees`
--

CREATE TABLE `employees` (
  `id` int(11) NOT NULL,
  `name` varchar(64) NOT NULL,
  `lastname` varchar(64) NOT NULL,
  `position` varchar(255) NOT NULL,
  `employment_date` timestamp NULL DEFAULT NULL,
  `vac_days` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `employees`
--

INSERT INTO `employees` (`id`, `name`, `lastname`, `position`, `employment_date`, `vac_days`) VALUES
(1, 'Adam', 'Kowalski', 'Mechanik', '1999-05-16 17:05:41', 8),
(2, 'Adam', 'Kowalski', 'Mechanik', '2024-01-16 18:05:41', 8),
(3, 'Anna', 'Kowalska', 'Ksiegowa', '2000-08-08 17:05:41', 5),
(4, 'Natalia', 'Nowak', 'Ksiegowa', '1999-04-06 17:05:41', 10),
(5, 'Grzegorz', 'Nowak', 'Mechanik', '1989-03-22 17:05:41', 12),
(6, 'Jakub', 'Kowalski', 'Elektronik', '2000-02-18 18:05:41', 20),
(7, 'Wojciech', 'Kowalski', 'Informatyk', '1995-01-15 19:05:41', 8),
(8, 'Karol', 'Kowalski', 'Handlowiec', '1997-05-16 19:05:41', 9);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `vat_invoices`
--

CREATE TABLE `vat_invoices` (
  `id` int(11) NOT NULL,
  `description` text NOT NULL,
  `mpk` varchar(64) NOT NULL,
  `net_amount` float NOT NULL,
  `amount` int(11) NOT NULL,
  `vat` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `vat_invoices`
--

INSERT INTO `vat_invoices` (`id`, `description`, `mpk`, `net_amount`, `amount`, `vat`) VALUES
(1, 'Faktura NIP', 'FT/2024/005', 0, 0, 0),
(2, 'Paragon', 'FT/2024/025', 200, 25, 25),
(3, 'Paragon', 'FT/2014/004', 0, 0, 0),
(4, 'Faktura NIP', 'FT/2024/001', 55, 5, 5),
(5, 'Paragon', 'FT/2024/001', 500, 500, 500),
(6, 'Paragon', 'FT/2024/001', 500, 500, 500);

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `contractors`
--
ALTER TABLE `contractors`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `delegations`
--
ALTER TABLE `delegations`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `vat_invoices`
--
ALTER TABLE `vat_invoices`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT dla zrzuconych tabel
--

--
-- AUTO_INCREMENT dla tabeli `contractors`
--
ALTER TABLE `contractors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT dla tabeli `delegations`
--
ALTER TABLE `delegations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT dla tabeli `employees`
--
ALTER TABLE `employees`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT dla tabeli `vat_invoices`
--
ALTER TABLE `vat_invoices`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
