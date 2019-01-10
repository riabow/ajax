
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `comments`
--
CREATE DATABASE IF NOT EXISTS `comments` DEFAULT CHARACTER SET utf8 COLLATE utf8_bin;
USE `comments`;


CREATE TABLE `cmt` (
  `id` bigint(11) NOT NULL, -- ключевое уникальное поле для редактирования и или удаления комментариев  bigint  Диапазон без знака от 0 до 18446744073709551615.
  `name` varchar(150) COLLATE utf8_bin NOT NULL,
  `email` varchar(150) COLLATE utf8_bin NOT NULL,
  `text` varchar(1000) COLLATE utf8_bin NOT NULL, -- здесь максимальная длина комментария равна 1000 знаков 
  												  -- в задании ничего не сказано , 
  												  -- но если учитывать что записей будет очень много нужно ограничеваться 	
  `dt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;


INSERT INTO `cmt` (`id`, `name`, `email`, `text`, `dt`) VALUES

(1, 'Петя', 'admin@mail.com', 'комментарий 1  ', '2019-01-10 19:05:10'),
(2, 'Дима', 'admin@mail.com', 'комментарий 2   ', '2019-01-10 19:05:37'),
(3, 'Женя', 'admin@mail.com', 'комментарий 3 ', '2019-01-10 19:05:45'),
(4, 'Вася', 'admin@mail.com', 'комментарий 4', '2019-01-10 19:11:52');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cmt`
--
ALTER TABLE `cmt`
  ADD PRIMARY KEY (`id`),
  ADD KEY `email` (`email`); -- для поиска по полю emal 

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cmt`
--
ALTER TABLE `cmt`
  MODIFY `id` bigint(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
