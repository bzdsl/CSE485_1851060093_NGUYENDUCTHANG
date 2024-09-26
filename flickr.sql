-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 17, 2022 at 05:10 PM
-- Server version: 10.4.16-MariaDB
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `flickr`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `image_url` text NOT NULL,
  `title` varchar(250) DEFAULT NULL,
  `idkhach` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `image_url`, `title`, `idkhach`) VALUES
(57, 'cat 1.61e58ad14ca466.25741196.png', 'cat 1', 26),
(58, 'cat 2.61e58ae05481f5.25118796.png', 'cat 2', 26),
(59, 'cat 3.61e58ae81739f0.18703036.jpg', 'cat 3', 26),
(60, '11.61e58b688bd194.93014839.jpg', '11', 26),
(61, '222.61e58b72815ad8.52510534.png', '222', 26),
(62, '333.61e58b7ba70bd4.08037933.jpg', '333', 26),
(63, '444.61e58b889bbbc9.20281906.png', '444', 26),
(64, 'cây.61e58e2438db16.12116811.jpg', 'cây', 26),
(65, 'home.61e58e2bd91c60.60789521.jpg', 'home', 26),
(67, 'jisoo.61e58e601d7247.41809479.jpg', 'jisoo', 29),
(68, 'jisoo 2.61e58e73128500.69197264.jpg', 'jisoo 2', 29);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id` int(3) NOT NULL,
  `fname` varchar(120) NOT NULL,
  `lname` varchar(120) NOT NULL,
  `age` int(3) NOT NULL,
  `email` varchar(120) NOT NULL,
  `pwd` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `fname`, `lname`, `age`, `email`, `pwd`) VALUES
(23, 'thang', 'anh', 22, 'email@outlook', '$2y$10$/HmmQ3RLn/bq1SECGQREqO5CdDR2bvP1acoybC054IFJMXYiQQ1Iq'),
(24, 'thang', 'nguyen', 12, 'thanghai012@yahoo', '$2y$10$XzwDswyDMjYfWlHUCmJ4SuZOPWyzWjqc6dCQVqWl0VY/q4Jb4x07a'),
(25, 'ádf', 'ádf', 22, '123@yahoo', '$2y$10$sw/2V5Tdbwy3xOCsOXqlT.xTb97ZY3Xnkqv0WKwjuuNR6s38edISi'),
(26, 'Duc Thang', 'Nguyen', 22, 'abc@abc.com', '$2y$10$Cbqkh1jBDqY.cVs5LyZ6IeoVYA047VS2vUHbbY5a/R1P18muwrl0m'),
(28, 'abc', 'cde', 33, 'admin@gmail', '$2y$10$CFRV3DK7/TOgvkvv5u4Tw.GkT0i4hIzw74wF.esGF0j83kV2hiXYG'),
(29, 'Tran', 'Thang', 32, 'abcd@abcd', '$2y$10$9KtVER3oZ.JY/Qjoz8V7FuL.VXfOWsvfi7hP/yX93catLFpaHUbi2');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
