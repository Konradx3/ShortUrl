-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 25 Sie 2022, 19:04
-- Wersja serwera: 10.4.20-MariaDB
-- Wersja PHP: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `shorturl`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `links`
--

CREATE TABLE `links` (
  `id` int(11) NOT NULL,
  `oldUrl` varchar(200) NOT NULL,
  `newUrl` varchar(200) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `links`
--

INSERT INTO `links` (`id`, `oldUrl`, `newUrl`, `date`) VALUES
(1, 'https://www.google.com/webhp?hl=pl&authuser=1&sa=X&ved=0ahUKEwj7uryq_N35AhXwsYsKHbBrDhwQPAgI', 'http://localhost/shorturl/share.php', '2022-08-24 00:35:44'),
(3, 'https://www.facebook.com', '7562a94dc8', '0000-00-00 00:00:00'),
(4, 'https://www.php.net/manual/en/book.pdo.php', '683f8cda8c', '2022-08-24 13:47:23'),
(6, 'http://www.awdaw.com', 'b0d9b0cf7c', '2022-08-24 15:53:29'),
(7, 'http://www.awdaw.com', '7c20c847db', '2022-08-25 18:49:56'),
(8, 'http://www.awdaw.com', 'd1d445b298', '2022-08-25 18:54:01'),
(9, 'https://www.google.com', '242ee6f27d', '2022-08-25 18:54:57');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `links`
--
ALTER TABLE `links`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT dla zrzuconych tabel
--

--
-- AUTO_INCREMENT dla tabeli `links`
--
ALTER TABLE `links`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
