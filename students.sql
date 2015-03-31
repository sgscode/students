-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1
-- Время создания: Мар 31 2015 г., 15:09
-- Версия сервера: 5.6.20-log
-- Версия PHP: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `students`
--

-- --------------------------------------------------------

--
-- Структура таблицы `students`
--

CREATE TABLE IF NOT EXISTS `students` (
`id` int(10) unsigned NOT NULL,
  `name` varchar(100) NOT NULL,
  `surname` varchar(100) NOT NULL,
  `gender` enum('male','female') NOT NULL,
  `groupnumber` varchar(5) NOT NULL,
  `email` varchar(200) NOT NULL,
  `year_of_birth` year(4) NOT NULL,
  `scores` int(3) NOT NULL,
  `residence` enum('local','notlocal') NOT NULL,
  `code` varchar(32) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=95 ;

--
-- Дамп данных таблицы `students`
--

INSERT INTO `students` (`id`, `name`, `surname`, `gender`, `groupnumber`, `email`, `year_of_birth`, `scores`, `residence`, `code`) VALUES
(1, 'Ivan', 'Ivanov', 'male', 'grp10', 'ivan@10', 1910, 110, 'local', 'byuhvcxqttbx82c3n6x10'),
(2, 'Ivan', 'Ivanov', 'male', 'grp11', 'ivan@11', 1911, 111, 'local', 'byuhvcxqttbx82c3n6x11'),
(3, 'Ivan', 'Ivanov', 'male', 'grp12', 'ivan@12', 1912, 112, 'local', 'byuhvcxqttbx82c3n6x12'),
(4, 'Ivan', 'Ivanov', 'male', 'grp13', 'ivan@13', 1913, 113, 'local', 'byuhvcxqttbx82c3n6x13'),
(5, 'Ivan', 'Ivanov', 'male', 'grp14', 'ivan@14', 1914, 114, 'local', 'byuhvcxqttbx82c3n6x14'),
(6, 'Ivan', 'Ivanov', 'male', 'grp15', 'ivan@15', 1915, 115, 'local', 'byuhvcxqttbx82c3n6x15'),
(7, 'Ivan', 'Ivanov', 'male', 'grp16', 'ivan@16', 1916, 116, 'local', 'byuhvcxqttbx82c3n6x16'),
(8, 'Ivan', 'Ivanov', 'male', 'grp17', 'ivan@17', 1917, 117, 'local', 'byuhvcxqttbx82c3n6x17'),
(9, 'Ivan', 'Ivanov', 'male', 'grp18', 'ivan@18', 1918, 118, 'local', 'byuhvcxqttbx82c3n6x18'),
(10, 'Ivan', 'Ivanov', 'male', 'grp19', 'ivan@19', 1919, 119, 'local', 'byuhvcxqttbx82c3n6x19'),
(11, 'Ivan', 'Ivanov', 'male', 'grp20', 'ivan@20', 1920, 120, 'local', 'byuhvcxqttbx82c3n6x20'),
(12, 'Ivan', 'Ivanov', 'male', 'grp21', 'ivan@21', 1921, 121, 'local', 'byuhvcxqttbx82c3n6x21'),
(13, 'Ivan', 'Ivanov', 'male', 'grp22', 'ivan@22', 1922, 122, 'local', 'byuhvcxqttbx82c3n6x22'),
(14, 'Ivan', 'Ivanov', 'male', 'grp23', 'ivan@23', 1923, 123, 'local', 'byuhvcxqttbx82c3n6x23'),
(15, 'Ivan', 'Ivanov', 'male', 'grp24', 'ivan@24', 1924, 124, 'local', 'byuhvcxqttbx82c3n6x24'),
(16, 'Ivan', 'Ivanov', 'male', 'grp25', 'ivan@25', 1925, 125, 'local', 'byuhvcxqttbx82c3n6x25'),
(17, 'Ivan', 'Ivanov', 'male', 'grp26', 'ivan@26', 1926, 126, 'local', 'byuhvcxqttbx82c3n6x26'),
(18, 'Ivan', 'Ivanov', 'male', 'grp27', 'ivan@27', 1927, 127, 'local', 'byuhvcxqttbx82c3n6x27'),
(19, 'Ivan', 'Ivanov', 'male', 'grp28', 'ivan@28', 1928, 128, 'local', 'byuhvcxqttbx82c3n6x28'),
(20, 'Ivan', 'Ivanov', 'male', 'grp29', 'ivan@29', 1929, 129, 'local', 'byuhvcxqttbx82c3n6x29'),
(21, 'Ivan', 'Ivanov', 'male', 'grp30', 'ivan@30', 1930, 130, 'local', 'byuhvcxqttbx82c3n6x30'),
(22, 'Ivan', 'Ivanov', 'male', 'grp31', 'ivan@31', 1931, 131, 'local', 'byuhvcxqttbx82c3n6x31'),
(23, 'Ivan', 'Ivanov', 'male', 'grp32', 'ivan@32', 1932, 132, 'local', 'byuhvcxqttbx82c3n6x32'),
(24, 'Ivan', 'Ivanov', 'male', 'grp33', 'ivan@33', 1933, 133, 'local', 'byuhvcxqttbx82c3n6x33'),
(25, 'Ivan', 'Ivanov', 'male', 'grp34', 'ivan@34', 1934, 134, 'local', 'byuhvcxqttbx82c3n6x34'),
(26, 'Ivan', 'Ivanov', 'male', 'grp35', 'ivan@35', 1935, 135, 'local', 'byuhvcxqttbx82c3n6x35'),
(27, 'Ivan', 'Ivanov', 'male', 'grp36', 'ivan@36', 1936, 136, 'local', 'byuhvcxqttbx82c3n6x36'),
(28, 'Ivan', 'Ivanov', 'male', 'grp37', 'ivan@37', 1937, 137, 'local', 'byuhvcxqttbx82c3n6x37'),
(29, 'Ivan', 'Ivanov', 'male', 'grp38', 'ivan@38', 1938, 138, 'local', 'byuhvcxqttbx82c3n6x38'),
(30, 'Ivan', 'Ivanov', 'male', 'grp39', 'ivan@39', 1939, 139, 'local', 'byuhvcxqttbx82c3n6x39'),
(31, 'Ivan', 'Ivanov', 'male', 'grp40', 'ivan@40', 1940, 140, 'local', 'byuhvcxqttbx82c3n6x40'),
(32, 'Ivan', 'Ivanov', 'male', 'grp41', 'ivan@41', 1941, 141, 'local', 'byuhvcxqttbx82c3n6x41'),
(33, 'Ivan', 'Ivanov', 'male', 'grp42', 'ivan@42', 1942, 142, 'local', 'byuhvcxqttbx82c3n6x42'),
(34, 'Ivan', 'Ivanov', 'male', 'grp43', 'ivan@43', 1943, 143, 'local', 'byuhvcxqttbx82c3n6x43'),
(35, 'Ivan', 'Ivanov', 'male', 'grp44', 'ivan@44', 1944, 144, 'local', 'byuhvcxqttbx82c3n6x44'),
(36, 'Ivan', 'Ivanov', 'male', 'grp45', 'ivan@45', 1945, 145, 'local', 'byuhvcxqttbx82c3n6x45'),
(37, 'Ivan', 'Ivanov', 'male', 'grp46', 'ivan@46', 1946, 146, 'local', 'byuhvcxqttbx82c3n6x46'),
(38, 'Ivan', 'Ivanov', 'male', 'grp47', 'ivan@47', 1947, 147, 'local', 'byuhvcxqttbx82c3n6x47'),
(39, 'Ivan', 'Ivanov', 'male', 'grp48', 'ivan@48', 1948, 148, 'local', 'byuhvcxqttbx82c3n6x48'),
(40, 'Ivan', 'Ivanov', 'male', 'grp49', 'ivan@49', 1949, 149, 'local', 'byuhvcxqttbx82c3n6x49'),
(41, 'Ivan', 'Ivanov', 'male', 'grp50', 'ivan@50', 1950, 150, 'local', 'byuhvcxqttbx82c3n6x50'),
(42, 'Ivan', 'Ivanov', 'male', 'grp51', 'ivan@51', 1951, 151, 'local', 'byuhvcxqttbx82c3n6x51'),
(43, 'Ivan', 'Ivanov', 'male', 'grp52', 'ivan@52', 1952, 152, 'local', 'byuhvcxqttbx82c3n6x52'),
(44, 'Ivan', 'Ivanov', 'male', 'grp53', 'ivan@53', 1953, 153, 'local', 'byuhvcxqttbx82c3n6x53'),
(45, 'Ivan', 'Ivanov', 'male', 'grp54', 'ivan@54', 1954, 154, 'local', 'byuhvcxqttbx82c3n6x54'),
(46, 'Ivan', 'Ivanov', 'male', 'grp55', 'ivan@55', 1955, 155, 'local', 'byuhvcxqttbx82c3n6x55'),
(47, 'Ivan', 'Ivanov', 'male', 'grp56', 'ivan@56', 1956, 156, 'local', 'byuhvcxqttbx82c3n6x56'),
(48, 'Ivan', 'Ivanov', 'male', 'grp57', 'ivan@57', 1957, 157, 'local', 'byuhvcxqttbx82c3n6x57'),
(49, 'Ivan', 'Ivanov', 'male', 'grp58', 'ivan@58', 1958, 158, 'local', 'byuhvcxqttbx82c3n6x58'),
(50, 'Ivan', 'Ivanov', 'male', 'grp59', 'ivan@59', 1959, 159, 'local', 'byuhvcxqttbx82c3n6x59'),
(51, 'Ivan', 'Ivanov', 'male', 'grp60', 'ivan@60', 1960, 160, 'local', 'byuhvcxqttbx82c3n6x60'),
(52, 'Ivan', 'Ivanov', 'male', 'grp61', 'ivan@61', 1961, 161, 'local', 'byuhvcxqttbx82c3n6x61'),
(53, 'Ivan', 'Ivanov', 'male', 'grp62', 'ivan@62', 1962, 162, 'local', 'byuhvcxqttbx82c3n6x62'),
(54, 'Ivan', 'Ivanov', 'male', 'grp63', 'ivan@63', 1963, 163, 'local', 'byuhvcxqttbx82c3n6x63'),
(55, 'Ivan', 'Ivanov', 'male', 'grp64', 'ivan@64', 1964, 164, 'local', 'byuhvcxqttbx82c3n6x64'),
(56, 'Ivan', 'Ivanov', 'male', 'grp65', 'ivan@65', 1965, 165, 'local', 'byuhvcxqttbx82c3n6x65'),
(57, 'Ivan', 'Ivanov', 'male', 'grp66', 'ivan@66', 1966, 166, 'local', 'byuhvcxqttbx82c3n6x66'),
(58, 'Ivan', 'Ivanov', 'male', 'grp67', 'ivan@67', 1967, 167, 'local', 'byuhvcxqttbx82c3n6x67'),
(59, 'Ivan', 'Ivanov', 'male', 'grp68', 'ivan@68', 1968, 168, 'local', 'byuhvcxqttbx82c3n6x68'),
(60, 'Ivan', 'Ivanov', 'male', 'grp69', 'ivan@69', 1969, 169, 'local', 'byuhvcxqttbx82c3n6x69'),
(61, 'Ivan', 'Ivanov', 'male', 'grp70', 'ivan@70', 1970, 170, 'local', 'byuhvcxqttbx82c3n6x70'),
(62, 'Ivan', 'Ivanov', 'male', 'grp71', 'ivan@71', 1971, 171, 'local', 'byuhvcxqttbx82c3n6x71'),
(63, 'Ivan', 'Ivanov', 'male', 'grp72', 'ivan@72', 1972, 172, 'local', 'byuhvcxqttbx82c3n6x72'),
(64, 'Ivan', 'Ivanov', 'male', 'grp73', 'ivan@73', 1973, 173, 'local', 'byuhvcxqttbx82c3n6x73'),
(65, 'Ivan', 'Ivanov', 'male', 'grp74', 'ivan@74', 1974, 174, 'local', 'byuhvcxqttbx82c3n6x74'),
(66, 'Ivan', 'Ivanov', 'male', 'grp75', 'ivan@75', 1975, 175, 'local', 'byuhvcxqttbx82c3n6x75'),
(67, 'Ivan', 'Ivanov', 'male', 'grp76', 'ivan@76', 1976, 176, 'local', 'byuhvcxqttbx82c3n6x76'),
(68, 'Ivan', 'Ivanov', 'male', 'grp77', 'ivan@77', 1977, 177, 'local', 'byuhvcxqttbx82c3n6x77'),
(69, 'Ivan', 'Ivanov', 'male', 'grp78', 'ivan@78', 1978, 178, 'local', 'byuhvcxqttbx82c3n6x78'),
(70, 'Ivan', 'Ivanov', 'male', 'grp79', 'ivan@79', 1979, 179, 'local', 'byuhvcxqttbx82c3n6x79'),
(71, 'Ivan', 'Ivanov', 'male', 'grp80', 'ivan@80', 1980, 180, 'local', 'byuhvcxqttbx82c3n6x80'),
(72, 'Ivan', 'Ivanov', 'male', 'grp81', 'ivan@81', 1981, 181, 'local', 'byuhvcxqttbx82c3n6x81'),
(73, 'Ivan', 'Ivanov', 'male', 'grp82', 'ivan@82', 1982, 182, 'local', 'byuhvcxqttbx82c3n6x82'),
(74, 'Ivan', 'Ivanov', 'male', 'grp83', 'ivan@83', 1983, 183, 'local', 'byuhvcxqttbx82c3n6x83'),
(75, 'Ivan', 'Ivanov', 'male', 'grp84', 'ivan@84', 1984, 184, 'local', 'byuhvcxqttbx82c3n6x84'),
(76, 'Ivan', 'Ivanov', 'male', 'grp85', 'ivan@85', 1985, 185, 'local', 'byuhvcxqttbx82c3n6x85'),
(77, 'Ivan', 'Ivanov', 'male', 'grp86', 'ivan@86', 1986, 186, 'local', 'byuhvcxqttbx82c3n6x86'),
(78, 'Ivan', 'Ivanov', 'male', 'grp87', 'ivan@87', 1987, 187, 'local', 'byuhvcxqttbx82c3n6x87'),
(79, 'Ivan', 'Ivanov', 'male', 'grp88', 'ivan@88', 1988, 188, 'local', 'byuhvcxqttbx82c3n6x88'),
(80, 'Ivan', 'Ivanov', 'male', 'grp89', 'ivan@89', 1989, 189, 'local', 'byuhvcxqttbx82c3n6x89'),
(81, 'Ivan', 'Ivanov', 'male', 'grp90', 'ivan@90', 1990, 190, 'local', 'byuhvcxqttbx82c3n6x90'),
(82, 'Ivan', 'Ivanov', 'male', 'grp91', 'ivan@91', 1991, 191, 'local', 'byuhvcxqttbx82c3n6x91'),
(83, 'Ivan', 'Ivanov', 'male', 'grp92', 'ivan@92', 1992, 192, 'local', 'byuhvcxqttbx82c3n6x92'),
(84, 'Ivan', 'Ivanov', 'male', 'grp93', 'ivan@93', 1993, 193, 'local', 'byuhvcxqttbx82c3n6x93'),
(85, 'Ivan', 'Ivanov', 'male', 'grp94', 'ivan@94', 1994, 194, 'local', 'byuhvcxqttbx82c3n6x94'),
(86, 'Ivan', 'Ivanov', 'male', 'grp95', 'ivan@95', 1995, 195, 'local', 'byuhvcxqttbx82c3n6x95'),
(87, 'Ivan', 'Ivanov', 'male', 'grp96', 'ivan@96', 1996, 196, 'local', 'byuhvcxqttbx82c3n6x96'),
(88, 'Ivan', 'Ivanov', 'male', 'grp97', 'ivan@97', 1997, 197, 'local', 'byuhvcxqttbx82c3n6x97'),
(89, 'Ivan', 'Ivanov', 'male', 'grp98', 'ivan@98', 1998, 198, 'local', 'byuhvcxqttbx82c3n6x98'),
(90, 'petr', 'petrov', 'female', 'gr001', 'petr@ry', 2001, 222, 'local', '0y45a3i3xdkvglsh7x7pd8p5gvhlhnzi'),
(91, 'semen', 'semenov', 'female', '23qww', 'sem@enov.ru', 2002, 333, 'notlocal', 'js11252o4w90lrdvqxoz1qim6pewxv0y'),
(92, 'alex', 'alexov', 'male', 'asdfg', 'ale@x', 2000, 321, 'local', 'wpm2ef1a5zvdu86wged4baiftefgwwfg'),
(93, 'семен', 'семенов', 'male', '123qw', 'sdsad@kjbkjn', 1988, 123, 'local', 'x3d7iq0m8uvqbp73erhgst69izj4a05t'),
(94, 'кирилл', 'петров', 'male', '12345', 'pet@lkkjlkjlk', 1988, 333, 'local', 'x2dvfp1wqkml3dhuh003hf6kr4a3nfjl');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `students`
--
ALTER TABLE `students`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `email` (`email`), ADD UNIQUE KEY `secretcode` (`code`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=95;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
