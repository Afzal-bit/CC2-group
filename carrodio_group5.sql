-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 03, 2021 at 12:11 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `carrodio_group5`
--

-- --------------------------------------------------------

--
-- Table structure for table `advertisement`
--

CREATE TABLE `advertisement` (
  `Id` int(100) NOT NULL,
  `Title` varchar(255) NOT NULL,
  `Model` varchar(100) NOT NULL,
  `Brand` varchar(100) NOT NULL,
  `Price` int(100) NOT NULL,
  `CarCondition` varchar(100) NOT NULL,
  `Year` int(10) NOT NULL,
  `Transmission` varchar(100) NOT NULL,
  `Fuel` varchar(100) NOT NULL,
  `Mileage` int(100) NOT NULL,
  `Body` varchar(255) NOT NULL,
  `EngineCapacity` int(10) NOT NULL,
  `Description` varchar(300) NOT NULL,
  `MainImage` varchar(400) NOT NULL,
  `SellerName` varchar(200) NOT NULL,
  `Email` varchar(200) NOT NULL,
  `Contact` varchar(100) NOT NULL,
  `Location` varchar(255) NOT NULL,
  `Approved` varchar(10) NOT NULL,
  `wishList` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `advertisement`
--

INSERT INTO `advertisement` (`Id`, `Title`, `Model`, `Brand`, `Price`, `CarCondition`, `Year`, `Transmission`, `Fuel`, `Mileage`, `Body`, `EngineCapacity`, `Description`, `MainImage`, `SellerName`, `Email`, `Contact`, `Location`, `Approved`, `wishList`) VALUES
(40, 'nfndv ', 'A', 'I', 130000, 'I', 0, 'Manual', 'A', 130000, 'B', 0, 'nnnnnnnnnnnnnnnn', 'Screenshot (10).png', 'Gimhan', 'gimhanr9@gmail.com', 'ew', 'h ', 'Yes', ''),
(47, 'nfndv ', 'A', 'I', 0, 'I', 0, 'I', 'A', 0, 'B', 0, 'nnnnnnnnnnnnnnnn', '', 'Gimhan', 'gimhanr9@gmail.com', 'ew', 'h ', 'yes', ''),
(54, 'Ford Mustang Shelby 2020', 'Mustang', 'BMW', 14000000, 'Brand New', 2020, 'Manual', 'Diesel', 2000, 'Coupe', 2500, 'In very good condition', 'newcar1.jpg', 'Gimhan', 'gimhanr9@gmail.com', '0770599068', 'Negombo', 'Yes', ''),
(55, 'van', '2', 'Honda', 20000, 'Reconditioned', 2077, 'Manual', 'Petrol', 200, 'Sedan', 3000, 'noiceoc nocue noce to meet u', '9-99114_hd-car-wallpapers-for-pc-car-4k-wallpaper.jpg', 'Afzal', 'john123@123.com', '123456789', 'california', 'yes', 'yes'),
(56, 'car', 'gt2', 'Toyota', 1000, 'Used', 2005, 'Manual', 'Petrol', 2020, 'SUV', 3000, 'this car is shape ekka ok. can drive', '67b95bb3bdf36c408e04293ebb1f6de1-700.jpg', 'Afzal', 'cb008173@students.apiit.lk', '123456', 'california', 'yes', 'yes'),
(57, 'suv totyat', 'gs200', 'Toyota', 2550, 'Reconditioned', 1998, 'Manual', 'Petrol', 25000, 'Wagon', 1500, 'very good vehcile , can only drive this veihcle\r\nthank you \r\n', '369451.jpg', 'Afzal', 'john123@123.com', '123456', 'california', 'yes', ''),
(58, 'suv totyat', '12', 'Toyota', 50000, 'Reconditioned', 2020, 'Automatic', 'Diesel', 15000, 'MPV', 6000, 'good vehicle', 'd2m63qq-49c84307-8e3c-4339-8c40-d841a174087b.jpg', 'Afzal', 'john123@123.com', '789456132', 'california', 'yes', '');

-- --------------------------------------------------------

--
-- Table structure for table `ad_images`
--

CREATE TABLE `ad_images` (
  `Img_Id` int(100) NOT NULL,
  `Ad_Id` int(100) NOT NULL,
  `PathName` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ad_images`
--

INSERT INTO `ad_images` (`Img_Id`, `Ad_Id`, `PathName`) VALUES
(34, 41, 'Screenshot (10).png'),
(35, 41, 'Screenshot (7).png'),
(36, 41, 'Screenshot (10).png'),
(37, 43, 'Screenshot (10).png'),
(38, 43, 'Screenshot (7).png'),
(39, 43, 'Screenshot (10).png'),
(40, 45, 'Screenshot (10).png'),
(41, 45, 'Screenshot (7).png'),
(42, 45, 'Screenshot (10).png'),
(43, 47, 'Screenshot (10).png'),
(44, 47, 'Screenshot (7).png'),
(45, 47, 'Screenshot (10).png'),
(52, 54, 'newcar2.jpg'),
(53, 54, 'newcar3.jpg'),
(54, 55, '4k-ktm-790-duke-smoke-2018-bikes-drift.jpg'),
(55, 55, '17_1967-Shelby-GT500.jpg'),
(56, 55, '52-523942_free-hd-dirt-bike-wallpaper-bike-stunt-wallpaper.jpg'),
(57, 55, '8ecec7770158987851f213eaaffeacf5.jpg'),
(58, 56, '1920x1080_px_car_lake_mitsubishi_Mitsubishi_Lancer_Evo_X-1049942.jpg'),
(59, 57, '56298.jpg'),
(60, 58, 'audi-wallpaper-desktop-For-Desktop-Wallpaper.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `favorites`
--

CREATE TABLE `favorites` (
  `favoriteId` int(100) NOT NULL,
  `userId` int(100) NOT NULL,
  `adId` int(100) NOT NULL,
  `title` varchar(255) NOT NULL,
  `mainimage` varchar(400) NOT NULL,
  `mileage` int(100) NOT NULL,
  `enginecapacity` int(10) NOT NULL,
  `transmission` varchar(100) NOT NULL,
  `price` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `Id` int(100) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Level` varchar(100) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Phone` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`Id`, `Name`, `Email`, `Level`, `Password`, `Phone`) VALUES
(6, 'Gimhan', 'gimhanr9@gmail.com', 'Seller', '$2y$10$G1q4OQmC8N3WLI09PPaeG.93FRfXce75mHAwr6mQ8MVb.RfYlX8d.', '0770599068'),
(7, 'Admin', 'carrodioad@gmail.com', 'Admin', 'admin@cr', '0771234567'),
(8, 'Gimhan', 'gimhanrd19@gmail.com', 'Buyer', '$2y$10$DRw9dA0PWYTo5f.wBBNe.eEObeCLXoyMHzPJow7qvWuVieAkQBLX.', '0770599068'),
(9, 'Afzal', 'cb008173@students.apiit.lk', 'Buyer', '$2y$10$VFniM.k4ge84RkNZvGHFvOOvyacVN2XyoZbndfTqNCSmiCoMlypku', '1234567890'),
(10, 'Afzal', 'john123@123.com', 'Seller', '$2y$10$wkRN7HgtnuzkPLxyex4gFOyP8wE0I19DCDOWDmMY8V6EYq0q89IzS', '1234567890');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `advertisement`
--
ALTER TABLE `advertisement`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `ad_images`
--
ALTER TABLE `ad_images`
  ADD PRIMARY KEY (`Img_Id`);

--
-- Indexes for table `favorites`
--
ALTER TABLE `favorites`
  ADD PRIMARY KEY (`favoriteId`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `advertisement`
--
ALTER TABLE `advertisement`
  MODIFY `Id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `ad_images`
--
ALTER TABLE `ad_images`
  MODIFY `Img_Id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `favorites`
--
ALTER TABLE `favorites`
  MODIFY `favoriteId` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `Id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
