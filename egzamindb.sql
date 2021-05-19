-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 18 Kwi 2021, 21:04
-- Wersja serwera: 10.4.17-MariaDB
-- Wersja PHP: 7.4.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `egzamindb`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `odpowiedzi`
--

CREATE TABLE `odpowiedzi` (
  `id` int(11) NOT NULL,
  `pytanie` text NOT NULL,
  `odpowiedz1` text NOT NULL,
  `odpowiedz2` text NOT NULL,
  `odpowiedz3` text NOT NULL,
  `odpowiedz4` text NOT NULL,
  `poprawna` text NOT NULL,
  `zdjecie` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `odpowiedzi`
--

INSERT INTO `odpowiedzi` (`id`, `pytanie`, `odpowiedz1`, `odpowiedz2`, `odpowiedz3`, `odpowiedz4`, `poprawna`, `zdjecie`) VALUES
(1, 'Jaką wartość zwróci funkcja empty($a); zapisana w języku PHP, gdy zmienna $a przyjmie wartość liczbową równą 0?', '0', 'NULL', 'FALSE', 'TRUE', 'D', ''),
(2, 'W języku PHP zmienna predefiniowana $_SESSION zawiera', 'zmienne zarejestrowane w bieżącej sesji', 'zmienne przesyłane do skryptu za pomocą formularza', 'spis zarejestrowanych sesji na serwerze WWW', 'zmienne przesyłane do skryptu za pomocą ciastek (cookie)', 'A', ''),
(3, 'W języku SQL polecenie INSERT INTO', 'dodaje tabelę', 'aktualizuje rekordy określoną wartością', 'dodaje pola do tabeli', 'wprowadza dane do tabeli', 'D', ''),
(4, 'Za pomocą języka PHP nie jest możliwe', 'Generowanie dynamicznej zawartości strony', 'Przetwarzanie danych zgromadzonych w bazie danych', 'Zmienianie dynamiczne zawartości strony HTML w przeglądarce', 'Przetwarzanie danych formularzy', 'C', ''),
(5, 'W języku SQL aby zmodyfikować dane w tabeli, należy posłużyć się poleceniem', 'UPDATE', 'CREATE', 'SELECT', 'JOIN', 'A', ''),
(6, 'Wykonując raport w systemie obsługi relacyjnych baz danych, umożliwia się', 'analizę wybranych danych', 'aktualizowanie danych w tabelach', 'dodawanie danych w tabelach', 'usuwanie danych w tabelach', 'B', ''),
(7, 'Polecenie REVOKE SELECT ON nazwa1 FROM nazwa2 w języku SQL umożliwia', 'usuwanie użytkownika z bazy', 'nadawanie praw do tabeli', 'odbieranie uprawnień użytkownikowi', 'nadanie uprawnień z użyciem zdefiniowanego schematu', 'C', ''),
(8, 'Wskaż poprawną kolejność etapów projektowania relacyjnej bazy danych', 'Określenie kluczy podstawowych tabel, Określenie zbioru danych, Selekcja, Określenie relacji', 'Selekcja, Określenie relacji, Określenie kluczy podstawowych tabel, Określenie zbioru danych', 'Określenie zbioru danych, Selekcja, Określenie kluczy podstawowych tabel, Określenie relacji', 'Określenie relacji, Określenie kluczy podstawowych tabel, Selekcja, Określenie zbioru danych', 'C', ''),
(9, 'Który opis odnosi się do metody POST wysyłania formularza?', 'Dane przesyłane są za pomocą adresu URL, czyli w sposób widoczny dla użytkownika', 'Może być zapisana jako zakładka w przeglądarce internetowej', 'Jest wskazana, gdy przesyłane są informacje poufne, np. hasło, numer telefonu czy numer karty kredytowej', 'Posiada dodatkowe ograniczenia jakim jest długość adresu - maksymalnie 255 znaków', 'C', '');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `odpowiedzi`
--
ALTER TABLE `odpowiedzi`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT dla zrzuconych tabel
--

--
-- AUTO_INCREMENT dla tabeli `odpowiedzi`
--
ALTER TABLE `odpowiedzi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
