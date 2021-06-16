-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 25, 2018 at 01:49 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test1`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` text NOT NULL,
  `password` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('irfan', 'k1122');

-- --------------------------------------------------------

--
-- Table structure for table `cat`
--

CREATE TABLE `cat` (
  `id` int(11) NOT NULL,
  `image` varchar(32) NOT NULL,
  `name` varchar(32) NOT NULL,
  `detail` tinytext NOT NULL,
  `price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cat`
--

INSERT INTO `cat` (`id`, `image`, `name`, `detail`, `price`) VALUES
(101, 'cat/persian.jpg', 'PERSIAN', 'COLOR : WHITE LIFE SPAN : 10 TO 12 YEARS', 15000),
(102, 'cat/bombay.jpg', 'BOMBAY CAT', 'COLOR : BLACK LIFE SPAN : 15 TO 20 YEARS', 17500),
(103, 'cat/americanbobtail.jpg', 'AMERICAN BOBTAIL', 'COLOR : GOLDEN WITH BLACK LIFE SPAN : 11 TO 15 YEARS', 21000),
(104, 'cat/mainecoon.jpg', 'MAINE COON', 'COLOR : GOLDEN BLACK WHITE LIFE SPAN : 10 TO 12 YEARS WEIGHT : 6.2 KG', 35000),
(105, 'cat/RustySpotted.jpg', 'RUSTY SPOTTED', 'COLOR : YELLOW & GOLDEN LIFE SPAN : 11 TO 16 YEARS', 25000),
(106, 'cat/siamemses.jpg', 'SIAMEMSES', 'COLOR : BLACK & WHITE LIFE SPAN : 15 TO 20 YEARS', 40000),
(107, 'cat/BENGALCAT.jpg', 'BENGAL CAT', 'COLOR : BLACK & GOLDEN LIFE SPAN : 10 TO 14 YEARS WEIGHT : 2.5 KG', 40000),
(108, 'cat/BRITISHSHORTHAIR.jpg', 'BRITISH SHORTHAIR', 'COLOR : CREAM & GREY WEIGHT : 10 TO 12 POUNDS', 30000),
(109, 'cat/exoticshorthair.jpg', 'EXOTICS SHORTHAIR', 'COLOR : WHITE & GOLD WEIGHT : 10 TO 20 POUNDS LIFE SPAN 10 TO 15 YEARS', 32000),
(110, 'cat/Ragdoll.jpg', 'RAGDOLL', 'COLOR : WHITE & BROWN LIFE SPAN : 9 TO 12 YEARS', 45000),
(111, 'cat/americanshorthair.jpg', 'AMERICAN SHORTHAIR', 'COLOR  : BLACK & BROWN ', 28000);

-- --------------------------------------------------------

--
-- Table structure for table `dog`
--

CREATE TABLE `dog` (
  `id` int(11) NOT NULL,
  `image` varchar(32) NOT NULL,
  `name` varchar(32) NOT NULL,
  `detail` tinytext NOT NULL,
  `price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dog`
--

INSERT INTO `dog` (`id`, `image`, `name`, `detail`, `price`) VALUES
(1, 'dog/GERMAN.jpg', 'GERMAN SHEPHERD', 'COLOR : BLACK & GOLDEN HEIGHT: 1 FOOT. WEIGHT: 75 TO 95 POUNDS LIFE SPAN : 10 TO 14 YEARS', 7000),
(2, 'dog/Rottweiler.jpg', 'ROTTWEILER', 'COLOR : BLACK LIFE SPAN : 8 TO 10 YEARS TEMPERAMENT : FEARLESS,DEVOTED', 18000),
(3, 'dog/GREATDANE.jpg', 'GREAT DANE', 'COLOR : YELLOW LIFE SPAN : 8 TO 10 YEARS HEIGHT : 71 TO 81 CM SPEED : 30 MPH ', 20000),
(4, 'dog/DOBERMAN.jpg', 'DOBERMAN', ' COLOR : BLACK & GOLDEN HEIGHT : 2 FEET TO 2 FEET 4INCHES WEIGHT : 60 TO 80 POUNDS', 17000),
(5, 'dog/DOBERMANBABY.jpg', 'DOBERMAN BABY', 'COLOR : BLACK AGE : 1 YEARS WEIGHT : 20 POUNDS', 10000),
(6, 'dog/rottweilerpuppy.jpg', 'ROTTWEILER BABY', 'COLOR : BLACK AGE : 2 YEARS WEIGHT : 25 POUNDS', 11000),
(7, 'dog/germanbaby.jpg', 'GERMAN BABY', 'COLOR : BLACK & GOLDEN WEIGHT : 30 POUNDS AGE : 1YEARS 9 MONTHS', 3500),
(8, 'dog/GREATDANEBABY.jpg', 'GREAT DANE BABY', 'COLOR : WHITE & BLACKAGE : 2 YEARS WEIGHT : 25 POUNDS', 10000),
(9, 'dog/BULLDOG.jpg', 'BULL DOG BABY', 'COLOR : BROWN & WHITE FEMALE AGE : 1 YEARS ', 20000),
(10, 'dog/ENGLISHBULLDOG.jpg', 'ENGLISH BULL DOG ', 'COLOR : BROWN & WHITE GENDER : MALE AGE : 2 YEARS', 90000),
(11, 'dog/YellowLabrador.jpg', 'YELLOW LABRADOR', 'COLOR : YELLOW WEIGHT : 23 KG LIFE SPAN : 10 TO 14 YEARS', 25000),
(12, 'dog/L.jpg', 'LABRADOR BABY', 'COLOR : YELLOW WEIGHT : 10 KG', 15000);

-- --------------------------------------------------------

--
-- Table structure for table `extra`
--

CREATE TABLE `extra` (
  `id` int(11) NOT NULL,
  `image` varchar(32) NOT NULL,
  `name` text NOT NULL,
  `detail` tinytext NOT NULL,
  `price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `extra`
--

INSERT INTO `extra` (`id`, `image`, `name`, `detail`, `price`) VALUES
(201, 'extra/platies.jpg', 'BLUE MOON PLATY', 'COLOR : BLUE PACK : 10 PAIRS', 300),
(202, 'extra/mikrorazbora.jpg', 'MICRO RAZBORA', 'COLOR : MIXED PACK : 15 PAIRS', 700),
(203, 'extra/corydoraseversi.jpg', 'CORYDORAS CATFISH', 'COLOR : MIXED PACK : 10 PAIRS', 2500),
(204, 'extra/FireMouthCichilid.jpg', 'FIREMOUTH CICHILID', 'COLOR : MIXED PACK : 5 PAIRS', 6000),
(205, 'extra/V.jpg', 'Choostix Nylon Rope Dog Leashes', 'COLOR : BLUE 1 PIECE', 299),
(206, 'extra/VV.jpg', 'Crystal Dog Collar And Leash Large (Red)', '[1 Pc]', 499),
(207, 'extra/vvv.jpg', 'Crystal Dog Collar And Leash Large (BLUE)', '[ 1 Pc ]', 499),
(208, 'extra/v1.jpg', 'Crystal Dog Collar And Leash Large (BLACK)', '[1 Pc]', 459),
(209, 'extra/FR.jpg', 'Muzzle For Dogs Medium', '[1 Pc]', 199),
(210, 'extra/oldbcage.jpg', 'PetsWorld Medium Dog Cage (LxBxH : 24x18x18)', '', 2999),
(211, 'extra/FG.jpg', 'Dog Gone Smart Donut Bed Red 35 inch', 'ONE', 5599),
(212, 'extra/cage1.jpg', 'IATA Approved Fibre Flight Dog Crate - (LxBxH : 25x21x18 inch)', 'ONE', 11999),
(213, 'extra/egg.jpg', 'Choostix Real Egg Biskies 1 Kg', 'ONE', 269),
(214, 'extra/cat.jpg', 'Karlie Banana Leaf Scratching Tree For Cats ', 'ONE', 5999),
(215, 'extra/ss.jpg', 'Karlie Scratching Board For Cats', '1 Piece', 598);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `orderid` int(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `name` varchar(15) NOT NULL,
  `address` varchar(20) NOT NULL,
  `place` varchar(30) NOT NULL,
  `item` varchar(100) NOT NULL,
  `quantity` varchar(255) NOT NULL,
  `price` int(255) NOT NULL,
  `subtotal` int(255) NOT NULL,
  `total` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`orderid`, `username`, `name`, `address`, `place`, `item`, `quantity`, `price`, `subtotal`, `total`) VALUES
(120, 'k1122irfan', 'irfan ', 'Hazratganj', '', 'DOBERMAN', '1', 17000, 17000, 17000),
(121, 'k1122irfan', 'irfan ', 'Hazratganj', '', 'Karlie Banana Leaf Scratching Tree For Cats ', '1', 5999, 5999, 5999),
(122, 'k1122irfan', 'irfan ', 'Hazratganj', '', 'Karlie Banana Leaf Scratching Tree For Cats ', '1', 5999, 5999, 5999),
(123, 'k1122irfan', 'irfan ', 'Hazratganj', '', 'GERMAN SHEPHERD', '1', 7000, 7000, 7000),
(124, 'k1122irfan', 'irfan ', 'Hazratganj', '', 'GERMAN SHEPHERD', '1', 7000, 7000, 7000),
(125, 'k1122irfan', 'irfan ', 'Hazratganj', '', 'LABRADOR BABY', '1', 15000, 15000, 15000),
(126, 'gg', 'gh ', '', '', 'GREAT DANE', '1', 20000, 20000, 20000),
(127, 'gg', 'gh ', 'Aashiyana', '', 'GREAT DANE', '1', 20000, 20000, 20000);

-- --------------------------------------------------------

--
-- Table structure for table `petcare`
--

CREATE TABLE `petcare` (
  `date` date NOT NULL,
  `name` varchar(10) NOT NULL,
  `email` varchar(20) NOT NULL,
  `mobile` int(10) NOT NULL,
  `pettype` varchar(10) NOT NULL,
  `locality` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `petcare`
--

INSERT INTO `petcare` (`date`, `name`, `email`, `mobile`, `pettype`, `locality`) VALUES
('0000-00-00', 'fgf', 'dfaqdk@dsv.com', 2147483647, 'dog', 'Aashiyana');

-- --------------------------------------------------------

--
-- Table structure for table `petgrooming`
--

CREATE TABLE `petgrooming` (
  `date` date NOT NULL,
  `name` varchar(10) NOT NULL,
  `email` text NOT NULL,
  `mobile` int(10) NOT NULL,
  `dogbreed` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `petgrooming`
--

INSERT INTO `petgrooming` (`date`, `name`, `email`, `mobile`, `dogbreed`) VALUES
('0000-00-00', '4545', 'dvcsd@mdf.com', 2147483647, ''),
('0000-00-00', '55', 'dscd@migl.com', 546545, ''),
('0000-00-00', 'dsac', 'dscd@migl.com', 566665, ''),
('0000-00-00', 'fgf', 'dfaqdk@dsv.com', 2147483647, 'German Shepherd'),
('0000-00-00', 'hghg', 'dmcvkk@gmdsk.com', 555, 'German Shepherd');

-- --------------------------------------------------------

--
-- Table structure for table `petspa`
--

CREATE TABLE `petspa` (
  `date` varchar(10) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `mobile` int(10) NOT NULL,
  `pettype` varchar(5) NOT NULL,
  `locality` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `petspa`
--

INSERT INTO `petspa` (`date`, `name`, `email`, `mobile`, `pettype`, `locality`) VALUES
('0000-00-', 'vikas', '', 2147483647, '', 'Aashiyana'),
('0000-00-', 'anskvn', '', 959625265, '', 'Aashiyana'),
('0000-00-', 'dsac', 'dfaqdk@dsv.com', 2147483647, 'Femal', 'Aashiyana'),
('0000-00-', 'asvknasnk', 'dsvndsk@dgm.com', 2147483647, 'dog', 'Aashiyana'),
('0000-00-', 'bjb', 'bjbjbj@vhvh.com', 2147483647, 'cat', 'Aashiyana'),
('0000-00-', 'sacascascasc', 'dvcsd@mdf.com', 2147483647, 'dog', 'Aashiyana'),
('0000-00-', 'viakskok', 'adsvnkadn@safnk.com', 2147483647, 'dog', 'Aashiyana'),
('1111-11-', 'dzac', 'dscd@migl.com', 2147483647, 'dog', 'Aashiyana'),
('0000-00-', 'asmcklmaskc', 'dmcvkk@gmdsk.com', 2147483647, 'dog', 'Aashiyana'),
('0000-00-', 'sava', 'dsvs@dscvml.com', 2147483647, 'dog', 'Aashiyana'),
('1212121', 'dav', 'dsmvckW@dcvnk.cpm', 2147483647, 'cat', 'Aashiyana'),
('44444444', 'dfd', 'dvcsd@mdf.com', 566665, 'cat', 'Aashiyana'),
('484848', 'hvgv', 'dvcsd@mdf.com', 595959, 'dog', 'Aishbag'),
('55959595', 'rrr', 'bjbjbj@vhvh.com', 666555, 'dog', 'Aishbag'),
('4444-44-', 'gfg', 'dscd@migl.com', 25555555, 'dog', 'Aishbag'),
('1212-23-23', 'trhf', 'dfaqdk@dsv.com', 895, 'dog', 'Aishbag');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userid` int(10) NOT NULL,
  `name` varchar(15) DEFAULT NULL,
  `username` varchar(15) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `mobile` int(10) DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `locality` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userid`, `name`, `username`, `password`, `email`, `mobile`, `gender`, `locality`) VALUES
(10011, 'irfan', 'k1122irfan', 'k1122', 'irfanali@gmail.com', 2147483647, 'on', 'Hazratganj'),
(10012, 'anand singh', 'anand005', 'anand', 'anandasojdoj@gmail.com', 2147483647, 'on', 'Aashiyana'),
(10018, 'rajesh', 'rajesh@', '1234', 'rajesh@yahoo.com', 2147483647, 'on', 'Aashiyana'),
(10023, 'gh', 'gg', 'gg', 'ss@ff.com', 4545, 'on', 'Aashiyana');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cat`
--
ALTER TABLE `cat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dog`
--
ALTER TABLE `dog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `extra`
--
ALTER TABLE `extra`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`orderid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userid`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cat`
--
ALTER TABLE `cat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=112;

--
-- AUTO_INCREMENT for table `dog`
--
ALTER TABLE `dog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `extra`
--
ALTER TABLE `extra`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=216;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `orderid` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=128;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10024;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
