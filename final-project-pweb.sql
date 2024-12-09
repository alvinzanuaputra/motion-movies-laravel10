-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 09, 2024 at 06:06 PM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `final-project-pweb`
--

-- --------------------------------------------------------

--
-- Table structure for table `artists`
--

CREATE TABLE `artists` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `birthdate` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `artists`
--

INSERT INTO `artists` (`id`, `name`, `birthdate`, `created_at`, `updated_at`) VALUES
(1, 'Robert Downey Jr.', '1965-04-04', '2024-12-03 19:42:27', '2024-12-03 19:42:27'),
(2, 'Tom Holland', '1996-06-01', '2024-12-03 19:42:27', '2024-12-03 19:42:27'),
(3, 'Chris Evans', '1981-06-13', '2024-12-03 19:42:27', '2024-12-03 19:42:27'),
(4, 'Benedict Cumberbatch', '1976-07-19', '2024-12-03 19:42:27', '2024-12-03 19:42:27'),
(5, 'Scarlett Johansson', '1984-11-22', '2024-12-03 19:42:27', '2024-12-03 19:42:27'),
(6, 'Chris Hemsworth', '1983-08-11', '2024-12-03 19:42:27', '2024-12-03 19:42:27'),
(7, 'Natalie Portman', '1981-06-09', '2024-12-03 19:42:27', '2024-12-03 19:42:27'),
(8, 'Mark Ruffalo', '1967-11-22', '2024-12-03 19:42:27', '2024-12-03 19:42:27'),
(9, 'Jeremy Renner', '1971-01-07', '2024-12-03 19:42:27', '2024-12-03 19:42:27'),
(10, 'Elizabeth Olsen', '1989-02-16', '2024-12-03 19:42:27', '2024-12-03 19:42:27'),
(11, 'Samuel L. Jackson', '1948-12-21', '2024-12-03 19:42:27', '2024-12-03 19:42:27'),
(12, 'Paul Rudd', '1969-04-06', '2024-12-03 19:42:27', '2024-12-03 19:42:27'),
(13, 'Brie Larson', '1989-10-01', '2024-12-03 19:42:27', '2024-12-03 19:42:27'),
(14, 'Chadwick Boseman', '1976-11-29', '2024-12-03 19:42:27', '2024-12-03 19:42:27'),
(15, 'Letitia Wright', '1993-10-31', '2024-12-03 19:42:27', '2024-12-03 19:42:27'),
(16, 'Ryan Reynolds', '1976-10-23', '2024-12-03 19:42:27', '2024-12-03 19:42:27'),
(17, 'Hugh Jackman', '1968-10-12', '2024-12-03 19:42:27', '2024-12-03 19:42:27'),
(18, 'Patrick Stewart', '1940-07-13', '2024-12-03 19:42:27', '2024-12-03 19:42:27'),
(19, 'Ian McKellen', '1939-05-25', '2024-12-03 19:42:27', '2024-12-03 19:42:27'),
(20, 'James McAvoy', '1979-04-21', '2024-12-03 19:42:27', '2024-12-03 19:42:27'),
(21, 'Michael Fassbender', '1977-04-02', '2024-12-03 19:42:28', '2024-12-03 19:42:28'),
(22, 'Jennifer Lawrence', '1990-08-15', '2024-12-03 19:42:28', '2024-12-03 19:42:28'),
(23, 'Sophie Turner', '1996-02-21', '2024-12-03 19:42:28', '2024-12-03 19:42:28'),
(24, 'Evan Peters', '1987-01-20', '2024-12-03 19:42:28', '2024-12-03 19:42:28'),
(25, 'Daniel Radcliffe', '1989-07-23', '2024-12-03 19:42:28', '2024-12-03 19:42:28'),
(26, 'Emma Watson', '1990-04-15', '2024-12-03 19:42:28', '2024-12-03 19:42:28'),
(27, 'Rupert Grint', '1988-08-24', '2024-12-03 19:42:28', '2024-12-03 19:42:28'),
(28, 'Alan Rickman', '1946-02-21', '2024-12-03 19:42:28', '2024-12-03 19:42:28'),
(29, 'Maggie Smith', '1934-12-28', '2024-12-03 19:42:28', '2024-12-03 19:42:28'),
(30, 'Helena Bonham Carter', '1966-05-26', '2024-12-03 19:42:28', '2024-12-03 19:42:28'),
(31, 'Johnny Depp', '1963-06-09', '2024-12-03 19:42:28', '2024-12-03 19:42:28'),
(32, 'Orlando Bloom', '1977-01-13', '2024-12-03 19:42:28', '2024-12-03 19:42:28'),
(33, 'Keira Knightley', '1985-03-26', '2024-12-03 19:42:28', '2024-12-03 19:42:28'),
(34, 'Kate Winslet', '1975-10-05', '2024-12-03 19:42:28', '2024-12-03 19:42:28'),
(35, 'Leonardo DiCaprio', '1974-11-11', '2024-12-03 19:42:28', '2024-12-03 19:42:28'),
(36, 'Matt Damon', '1970-10-08', '2024-12-03 19:42:28', '2024-12-03 19:42:28'),
(37, 'Ben Affleck', '1972-08-15', '2024-12-03 19:42:28', '2024-12-03 19:42:28'),
(38, 'Christian Bale', '1974-01-30', '2024-12-03 19:42:28', '2024-12-03 19:42:28'),
(39, 'Anne Hathaway', '1982-11-12', '2024-12-03 19:42:28', '2024-12-03 19:42:28'),
(40, 'Tom Hardy', '1977-09-15', '2024-12-03 19:42:28', '2024-12-03 19:42:28'),
(41, 'Charlize Theron', '1975-08-07', '2024-12-03 19:42:28', '2024-12-03 19:42:28'),
(42, 'Gal Gadot', '1985-04-30', '2024-12-03 19:42:28', '2024-12-03 19:42:28'),
(43, 'Jason Momoa', '1979-08-01', '2024-12-03 19:42:28', '2024-12-03 19:42:28'),
(44, 'Dwayne Johnson', '1972-05-02', '2024-12-03 19:42:28', '2024-12-03 19:42:28'),
(45, 'Vin Diesel', '1967-07-18', '2024-12-03 19:42:28', '2024-12-03 19:42:28'),
(46, 'Michelle Rodriguez', '1978-07-12', '2024-12-03 19:42:28', '2024-12-03 19:42:28'),
(47, 'Jordana Brewster', '1980-04-26', '2024-12-03 19:42:28', '2024-12-03 19:42:28'),
(48, 'Zac Efron', '1987-10-18', '2024-12-03 19:42:28', '2024-12-03 19:42:28'),
(49, 'Vanessa Hudgens', '1988-12-14', '2024-12-03 19:42:28', '2024-12-03 19:42:28'),
(50, 'Timothée Chalamet', '1995-12-27', '2024-12-03 19:42:28', '2024-12-03 19:42:28'),
(51, 'Florence Pugh', '1996-01-03', '2024-12-03 19:42:28', '2024-12-03 19:42:28'),
(52, 'Zendaya', '1996-09-01', '2024-12-03 19:42:28', '2024-12-03 19:42:28'),
(53, 'Anya Taylor-Joy', '1996-04-16', '2024-12-03 19:42:28', '2024-12-03 19:42:28'),
(54, 'Millie Bobby Brown', '2004-02-19', '2024-12-03 19:42:28', '2024-12-03 19:42:28'),
(55, 'Finn Wolfhard', '2002-12-23', '2024-12-03 19:42:28', '2024-12-03 19:42:28'),
(56, 'Noah Schnapp', '2004-10-03', '2024-12-03 19:42:28', '2024-12-03 19:42:28'),
(57, 'Winona Ryder', '1971-10-29', '2024-12-03 19:42:28', '2024-12-03 19:42:28'),
(58, 'David Harbour', '1975-04-10', '2024-12-03 19:42:28', '2024-12-03 19:42:28'),
(59, 'Natalia Dyer', '1995-01-13', '2024-12-03 19:42:28', '2024-12-03 19:42:28'),
(60, 'Charlie Heaton', '1994-02-06', '2024-12-03 19:42:28', '2024-12-03 19:42:28'),
(61, 'Sadie Sink', '2002-04-16', '2024-12-03 19:42:28', '2024-12-03 19:42:28'),
(62, 'Caleb McLaughlin', '2001-10-13', '2024-12-03 19:42:28', '2024-12-03 19:42:28'),
(63, 'Maya Hawke', '1998-07-08', '2024-12-03 19:42:28', '2024-12-03 19:42:28'),
(64, 'Jake Gyllenhaal', '1980-12-19', '2024-12-03 19:42:28', '2024-12-03 19:42:28'),
(65, 'Heath Ledger', '1979-04-04', '2024-12-03 19:42:28', '2024-12-03 19:42:28'),
(66, 'Joaquin Phoenix', '1974-10-28', '2024-12-03 19:42:28', '2024-12-03 19:42:28'),
(67, 'Reese Witherspoon', '1976-03-22', '2024-12-03 19:42:28', '2024-12-03 19:42:28'),
(68, 'Meryl Streep', '1949-06-22', '2024-12-03 19:42:28', '2024-12-03 19:42:28'),
(69, 'Julia Roberts', '1967-10-28', '2024-12-03 19:42:28', '2024-12-03 19:42:28');

-- --------------------------------------------------------

--
-- Table structure for table `artist_movies`
--

CREATE TABLE `artist_movies` (
  `id` bigint UNSIGNED NOT NULL,
  `artist_id` bigint UNSIGNED NOT NULL,
  `movie_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `artist_movies`
--

INSERT INTO `artist_movies` (`id`, `artist_id`, `movie_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '2024-12-03 19:42:29', '2024-12-03 19:42:29'),
(2, 2, 1, '2024-12-03 19:42:29', '2024-12-03 19:42:29'),
(3, 1, 2, '2024-12-03 19:42:29', '2024-12-03 19:42:29'),
(4, 2, 2, '2024-12-03 19:42:29', '2024-12-03 19:42:29');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `genres`
--

CREATE TABLE `genres` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `genres`
--

INSERT INTO `genres` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'action', '2024-12-03 19:42:28', '2024-12-03 19:42:28'),
(2, 'adventure', '2024-12-03 19:42:28', '2024-12-03 19:42:28'),
(3, 'marvel', '2024-12-03 19:42:28', '2024-12-03 19:42:28'),
(4, 'sci-fi', '2024-12-03 19:42:28', '2024-12-03 19:42:28'),
(5, 'dc', '2024-12-03 19:42:28', '2024-12-03 19:42:28'),
(6, 'romance', '2024-12-03 19:42:28', '2024-12-03 19:42:28'),
(7, 'comedy', '2024-12-03 19:42:28', '2024-12-03 19:42:28'),
(8, 'anime', '2024-12-03 19:42:28', '2024-12-03 19:42:28');

-- --------------------------------------------------------

--
-- Table structure for table `genre_movies`
--

CREATE TABLE `genre_movies` (
  `id` bigint UNSIGNED NOT NULL,
  `genre_id` bigint UNSIGNED NOT NULL,
  `movie_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `genre_movies`
--

INSERT INTO `genre_movies` (`id`, `genre_id`, `movie_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '2024-12-03 19:42:29', '2024-12-03 19:42:29'),
(2, 2, 1, '2024-12-03 19:42:29', '2024-12-03 19:42:29'),
(3, 3, 1, '2024-12-03 19:42:29', '2024-12-03 19:42:29'),
(4, 4, 1, '2024-12-03 19:42:29', '2024-12-03 19:42:29'),
(5, 7, 1, '2024-12-03 19:42:29', '2024-12-03 19:42:29'),
(6, 1, 2, '2024-12-03 19:42:29', '2024-12-03 19:42:29'),
(7, 2, 2, '2024-12-03 19:42:29', '2024-12-03 19:42:29'),
(8, 3, 2, '2024-12-03 19:42:29', '2024-12-03 19:42:29'),
(9, 4, 2, '2024-12-03 19:42:29', '2024-12-03 19:42:29'),
(10, 1, 3, '2024-12-03 19:42:29', '2024-12-03 19:42:29'),
(11, 2, 3, '2024-12-03 19:42:29', '2024-12-03 19:42:29'),
(12, 6, 3, '2024-12-03 19:42:29', '2024-12-03 19:42:29'),
(13, 8, 3, '2024-12-03 19:42:29', '2024-12-03 19:42:29'),
(14, 1, 4, '2024-12-03 19:42:29', '2024-12-03 19:42:29'),
(15, 2, 4, '2024-12-03 19:42:29', '2024-12-03 19:42:29'),
(16, 4, 4, '2024-12-03 19:42:29', '2024-12-03 19:42:29'),
(17, 6, 4, '2024-12-03 19:42:29', '2024-12-03 19:42:29'),
(18, 1, 5, '2024-12-03 19:42:29', '2024-12-03 19:42:29'),
(19, 2, 5, '2024-12-03 19:42:29', '2024-12-03 19:42:29'),
(20, 6, 5, '2024-12-03 19:42:29', '2024-12-03 19:42:29'),
(21, 8, 5, '2024-12-03 19:42:29', '2024-12-03 19:42:29');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(294, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(295, '2014_10_12_100000_create_password_resets_table', 1),
(296, '2019_08_19_000000_create_failed_jobs_table', 1),
(297, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(298, '2023_03_15_132327_create_movies_table', 1),
(299, '2023_03_15_132419_create_genres_table', 1),
(300, '2023_03_15_132445_create_artists_table', 1),
(301, '2023_03_15_132519_create_plans_table', 1),
(302, '2023_03_16_030052_create_artist_movies_table', 1),
(303, '2023_03_16_030103_create_genre_movies_table', 1),
(304, '2023_03_16_142645_create_users_table', 1),
(305, '2023_03_16_142813_create_watchlists_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `movies`
--

CREATE TABLE `movies` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `studio` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `release_date` date NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `paid` tinyint(1) NOT NULL,
  `tags` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `movies`
--

INSERT INTO `movies` (`id`, `name`, `link`, `studio`, `release_date`, `image`, `paid`, `tags`, `created_at`, `updated_at`) VALUES
(1, 'SpiderMan : Homecoming', 'https://www.youtube.com/watch?v=rk-dF1lIbIg', 'Marvel Studios', '2017-07-07', 'images/1.spidermanhomecoming.jpg', 1, 'Action | Superhero | Adventure', '2024-12-03 19:42:27', '2024-12-03 19:42:27'),
(2, 'Spider-Man 2 (2004)', 'https://www.youtube.com/watch?v=3jBFwltrxJw', 'Marvel Studios', '2004-06-30', 'images/2-spiderman2.jpg', 1, 'Action | Superhero | Adventure', '2024-12-03 19:42:27', '2024-12-03 19:42:27'),
(3, 'The Amazing SpiderMan (2012)', 'https://www.youtube.com/watch?v=fUmmrxVVzqA', 'Marvel Studios', '2012-07-03', 'images/3-theamazingspiderman.jpg', 1, 'Action | Superhero | Adventure', '2024-12-03 19:42:27', '2024-12-03 19:42:27'),
(4, 'Spider-Man: Far From Home', 'https://www.youtube.com/watch?v=DYYtuKyMtY8', 'Marvel Studios', '2019-07-02', 'images/4-spiderfarfromhome,jpg.jpg', 1, 'Action | Superhero | Adventure', '2024-12-03 19:42:27', '2024-12-03 19:42:27'),
(5, 'Your Name.', 'https://www.youtube.com/watch?v=s0wTdCQoc2k', 'CoMix Wave Films', '2016-07-03', 'images/5-kimi-no-na-wa.jpg', 0, 'Anime | Romance | Fantasy', '2024-12-03 19:42:27', '2024-12-03 19:42:27'),
(6, 'Venom: Let There Be Carnage', 'https://www.youtube.com/watch?v=-FmWuCgJmxo', 'Sony Pictures', '2021-09-24', 'images/7-venom2.jpg', 1, 'Action | Superhero | Sci-Fi', '2024-12-03 19:42:27', '2024-12-03 19:42:27'),
(7, 'Venom: The Last Dance', 'https://www.youtube.com/watch?v=zlTKpqybQTA', 'Sony Pictures', '2024-12-20', 'images/8-venom3.jpg', 1, 'Action | Superhero | Sci-Fi', '2024-12-03 19:42:27', '2024-12-03 19:42:27'),
(8, 'Doctor Strange in the Multiverse of Madness', 'https://www.youtube.com/watch?v=wx3EwVwCcdc', 'Marvel Studios', '2022-05-06', 'images/9-doctorstrangem.jpg', 1, 'Action | Superhero | Fantasy', '2024-12-03 19:42:27', '2024-12-03 19:42:27'),
(9, 'Moana', 'https://www.youtube.com/watch?v=LKFuXETZUsI', 'Walt Disney Animation Studios', '2016-11-23', 'images/11-moana.jpg', 1, 'Animation | Family | Adventure', '2024-12-03 19:42:27', '2024-12-03 19:42:27'),
(10, 'Agatha: All Along', 'https://www.youtube.com/watch?v=R9pXbNz6Vbw', 'Marvel Studios', '2024-03-15', 'images/10-agatha.jpg', 1, 'Action | Superhero | Fantasy', '2024-12-03 19:42:27', '2024-12-03 19:42:27'),
(11, 'The Dark Knight (2008)', 'https://www.youtube.com/watch?v=EXeTwQWrcwY', 'Warner Bros. Pictures', '2008-07-18', 'images/12-The_Dark_Knight_(2008_film).jpg', 1, 'Action | Crime | Drama', '2024-12-03 19:42:27', '2024-12-03 19:42:27'),
(12, 'Deadpool & Wolverine', 'https://www.youtube.com/watch?v=paHN0mKXB6Y', 'Marvel Studios', '2024-07-25', 'images/13-deadpool_wolverine.jpg', 1, 'Action | Comedy | Superhero', '2024-12-03 19:42:27', '2024-12-03 19:42:27'),
(13, 'Dune: Part Two', 'https://www.youtube.com/watch?v=_YUzQa_1RCE', 'Warner Bros. Pictures', '2024-02-28', 'images/14-dune_part_two.jpg', 1, 'Sci-Fi | Adventure | Drama', '2024-12-03 19:42:27', '2024-12-03 19:42:27'),
(14, 'Godzilla x Kong: The New Empire', 'https://www.youtube.com/watch?v=qqrpMRDuPfc', 'Legendary Pictures', '2024-03-29', 'images/15-godzilla_x_kong.jpg', 1, 'Action | Sci-Fi | Monster', '2024-12-03 19:42:27', '2024-12-03 19:42:27'),
(15, 'Furiosa: A Mad Max Saga', 'https://www.youtube.com/watch?v=FVswuip0-co', 'Warner Bros. Pictures', '2024-05-23', 'images/16-furiosa.jpg', 1, 'Action | Adventure | Post-Apocalyptic', '2024-12-03 19:42:27', '2024-12-03 19:42:27'),
(16, 'Transformers: The One', 'https://www.youtube.com/watch?v=jaVcDaozGgc', 'Paramount Pictures', '2024-09-11', 'images/17-transformers_the_one.jpg', 1, 'Animation | Sci-Fi | Action', '2024-12-03 19:42:27', '2024-12-03 19:42:27'),
(17, 'Harry Potter and the Sorcerer\'s Stone', 'https://www.youtube.com/watch?v=VyHV0BRtdxo', 'Warner Bros. Pictures', '2001-11-16', 'images/18-harry_potter_sorcerers_stone.jpg', 1, 'Fantasy | Adventure | Family', '2024-12-03 19:42:27', '2024-12-03 19:42:27'),
(18, 'Harry Potter and the Chamber of Secrets', 'https://www.youtube.com/watch?v=nE11U5iBnH0', 'Warner Bros. Pictures', '2002-11-15', 'images/19-harry_potter_chamber_secrets.jpg', 1, 'Fantasy | Adventure | Family', '2024-12-03 19:42:27', '2024-12-03 19:42:27'),
(19, 'Harry Potter and the Prisoner of Azkaban', 'https://www.youtube.com/watch?v=lAxgztbYDbs', 'Warner Bros. Pictures', '2004-06-04', 'images/20-harry_potter_prisoner_azkaban.jpg', 1, 'Fantasy | Adventure | Family', '2024-12-03 19:42:27', '2024-12-03 19:42:27'),
(20, 'Harry Potter and the Goblet of Fire', 'https://www.youtube.com/watch?v=iw0RWnC28Gs', 'Warner Bros. Pictures', '2005-11-18', 'images/21-harry_potter_goblet_fire.jpg', 1, 'Fantasy | Adventure | Family', '2024-12-03 19:42:27', '2024-12-03 19:42:27'),
(21, 'Harry Potter and the Order of the Phoenix', 'https://www.youtube.com/watch?v=LLAaW1EgyY8', 'Warner Bros. Pictures', '2007-07-11', 'images/22-harry_potter_order_phoenix.jpg', 1, 'Fantasy | Adventure | Family', '2024-12-03 19:42:27', '2024-12-03 19:42:27'),
(22, 'Harry Potter and the Half-Blood Prince', 'https://www.youtube.com/watch?v=RiAmoT8R4Ic', 'Warner Bros. Pictures', '2009-07-15', 'images/23-harry_potter_half_blood_prince.jpg', 1, 'Fantasy | Adventure | Family', '2024-12-03 19:42:27', '2024-12-03 19:42:27'),
(23, 'Harry Potter and the Deathly Hallows: Part 1', 'https://www.youtube.com/watch?v=MxqsmsA8y5k', 'Warner Bros. Pictures', '2010-11-19', 'images/24-harry_potter_deathly_hallows_part1.jpg', 1, 'Fantasy | Adventure | Family', '2024-12-03 19:42:27', '2024-12-03 19:42:27'),
(24, 'Harry Potter and the Deathly Hallows: Part 2', 'https://www.youtube.com/watch?v=kwM3kN8PNOc', 'Warner Bros. Pictures', '2011-07-15', 'images/25-harry_potter_deathly_hallows_part2.jpg', 1, 'Fantasy | Adventure | Family', '2024-12-03 19:42:27', '2024-12-03 19:42:27'),
(25, 'Venom', 'https://www.youtube.com/watch?v=u9Mv98Gr5pY', 'Sony Pictures', '2018-10-05', 'images/26-venom.jpg', 1, 'Action | Sci-Fi | Thriller', '2024-12-03 19:42:27', '2024-12-03 19:42:27'),
(26, 'Spider-Man', 'https://www.youtube.com/watch?v=_yhFofFZGcc', 'Sony Pictures', '2002-05-03', 'images/27-spiderman.jpg', 1, 'Action | Adventure | Sci-Fi', '2024-12-03 19:42:27', '2024-12-03 19:42:27'),
(27, 'Spider-Man 3', 'https://www.youtube.com/watch?v=e5wUilOeOmg', 'Sony Pictures', '2007-05-04', 'images/28-spiderman_3.jpg', 1, 'Action | Adventure | Sci-Fi', '2024-12-03 19:42:27', '2024-12-03 19:42:27'),
(28, 'The Amazing Spider-Man 2', 'https://www.youtube.com/watch?v=DlM2CWNTQ84', 'Sony Pictures', '2014-05-02', 'images/29-the_amazing_spiderman_2.jpg', 1, 'Action | Adventure | Sci-Fi', '2024-12-03 19:42:27', '2024-12-03 19:42:27'),
(29, 'Spider-Man: No Way Home', 'https://www.youtube.com/watch?v=JfVOs4VSpmA', 'Sony Pictures', '2021-12-17', 'images/30-spiderman_no_way_home.jpg', 1, 'Action | Adventure | Sci-Fi', '2024-12-03 19:42:27', '2024-12-03 19:42:27'),
(30, 'Dead Dead Demon’s Dededede Destruction', 'https://www.youtube.com/watch?v=tm6NNq4SQbc', 'Production +h', '2024-04-19', 'images/32-dead_dead_demon.jpg', 1, 'Sci-Fi | Comedy | Drama', '2024-12-03 19:42:27', '2024-12-03 19:42:27');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `plans`
--

CREATE TABLE `plans` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` decimal(15,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `plans`
--

INSERT INTO `plans` (`id`, `name`, `price`, `created_at`, `updated_at`) VALUES
(1, 'Gratis', 0.00, '2024-12-03 19:42:28', '2024-12-03 19:42:28'),
(2, 'Berbayar', 17500.00, '2024-12-03 19:42:28', '2024-12-03 19:42:28'),
(3, 'Admin', 0.00, '2024-12-03 19:42:28', '2024-12-03 19:42:28');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `plan_id` bigint UNSIGNED NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `plan_id`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'User', 'user@motionmovies.com', NULL, '$2y$10$qFwXaBOEdLaPWyk4vmDzKufCgNbiDWDHFl.oUSwFh1ejZiuXeGfQK', 1, 'Nupo0UYFcor5HGV1', '2024-12-03 19:42:28', '2024-12-03 19:42:28'),
(2, 'User', 'paid@motionmovies.com', NULL, '$2y$10$PtM4kVVnpe3uZAwqp6.1auwpveQMLCqn1QjVFdAt3TOkdGK0yI5a2', 2, '5jT8Irf6jkWiFOXv', '2024-12-03 19:42:28', '2024-12-03 19:42:28'),
(3, 'Admin', 'admin@motionmovies.com', NULL, '$2y$10$X..H/fDehNLSr6yB4NwZX.Z2.5qX/l0umL10l199Dm84LfnitumB2', 3, 'Q3flNxLGYeJ18X63vBJVn2SzZQ76JdXBv6TQ8hgcPDDgiX7vbJ3lgbBk1aGy', '2024-12-03 19:42:28', '2024-12-03 19:42:28'),
(4, 'Alvin Zanua Putra', 'zanaputraalvin123@gmail.com', NULL, '$2y$10$2MO0wNjeqh.g9fhyA.JwEuwtikG7v16OFCyVkYWAM4011/bRK077q', 1, '41z5uXPtDyeYCI1C', '2024-12-03 19:42:28', '2024-12-03 19:42:28'),
(5, 'Yahya Ayyash Ashdaqi', 'yahyaayyash125@gmail.com', NULL, '$2y$10$c/mlY/aoxFFCtShcdOyFCOuFXXu9EOMk.HgJE1o30p4KeSEJL/XZi', 1, 'zSHRZU2Qwhxi30es', '2024-12-03 19:42:29', '2024-12-03 19:42:29'),
(6, 'Imam Kuswardayan S.Kom., M.T.', 'imamkuswadayan@its.ac.id', NULL, '$2y$10$o/KG0AZVvE86P8M3ew0gf.fJ4gW2Dmc7B3enUrdIiJev/mN5JaXB2', 2, 'peGdvA0flxAkfqvp', '2024-12-03 19:42:29', '2024-12-03 19:42:29'),
(7, 'Alvin Zanua Putra', '5025231064@student.its.ac.id', NULL, '$2y$10$9EDQg7ZpsiUpyAycLhgfoueSYnMbNIldWzj8FuVwEymztnc1KG3cK', 2, 'k0fn4A0eS2GkTW9w', '2024-12-03 19:42:29', '2024-12-03 19:42:29');

-- --------------------------------------------------------

--
-- Table structure for table `watchlists`
--

CREATE TABLE `watchlists` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `movie_id` bigint UNSIGNED NOT NULL,
  `order` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `watchlists`
--

INSERT INTO `watchlists` (`id`, `user_id`, `movie_id`, `order`, `created_at`, `updated_at`) VALUES
(1, 3, 1, 1, '2024-12-03 19:48:24', '2024-12-03 19:48:24');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `artists`
--
ALTER TABLE `artists`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `artists_name_unique` (`name`);

--
-- Indexes for table `artist_movies`
--
ALTER TABLE `artist_movies`
  ADD PRIMARY KEY (`id`),
  ADD KEY `artist_movies_artist_id_foreign` (`artist_id`),
  ADD KEY `artist_movies_movie_id_foreign` (`movie_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `genres`
--
ALTER TABLE `genres`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `genres_name_unique` (`name`);

--
-- Indexes for table `genre_movies`
--
ALTER TABLE `genre_movies`
  ADD PRIMARY KEY (`id`),
  ADD KEY `genre_movies_genre_id_foreign` (`genre_id`),
  ADD KEY `genre_movies_movie_id_foreign` (`movie_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `movies`
--
ALTER TABLE `movies`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `movies_name_unique` (`name`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `plans`
--
ALTER TABLE `plans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_plan_id_foreign` (`plan_id`);

--
-- Indexes for table `watchlists`
--
ALTER TABLE `watchlists`
  ADD PRIMARY KEY (`id`),
  ADD KEY `watchlists_user_id_foreign` (`user_id`),
  ADD KEY `watchlists_movie_id_foreign` (`movie_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `artists`
--
ALTER TABLE `artists`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT for table `artist_movies`
--
ALTER TABLE `artist_movies`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `genres`
--
ALTER TABLE `genres`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `genre_movies`
--
ALTER TABLE `genre_movies`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=306;

--
-- AUTO_INCREMENT for table `movies`
--
ALTER TABLE `movies`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `plans`
--
ALTER TABLE `plans`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `watchlists`
--
ALTER TABLE `watchlists`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `artist_movies`
--
ALTER TABLE `artist_movies`
  ADD CONSTRAINT `artist_movies_artist_id_foreign` FOREIGN KEY (`artist_id`) REFERENCES `artists` (`id`),
  ADD CONSTRAINT `artist_movies_movie_id_foreign` FOREIGN KEY (`movie_id`) REFERENCES `movies` (`id`);

--
-- Constraints for table `genre_movies`
--
ALTER TABLE `genre_movies`
  ADD CONSTRAINT `genre_movies_genre_id_foreign` FOREIGN KEY (`genre_id`) REFERENCES `genres` (`id`),
  ADD CONSTRAINT `genre_movies_movie_id_foreign` FOREIGN KEY (`movie_id`) REFERENCES `movies` (`id`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_plan_id_foreign` FOREIGN KEY (`plan_id`) REFERENCES `plans` (`id`);

--
-- Constraints for table `watchlists`
--
ALTER TABLE `watchlists`
  ADD CONSTRAINT `watchlists_movie_id_foreign` FOREIGN KEY (`movie_id`) REFERENCES `movies` (`id`),
  ADD CONSTRAINT `watchlists_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
