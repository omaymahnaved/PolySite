-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 10, 2024 at 09:02 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `poly_site`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(200) NOT NULL,
  `file_name` varchar(300) NOT NULL,
  `title` varchar(300) NOT NULL,
  `description` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `file_name`, `title`, `description`) VALUES
(2, 'pp1.jpg', 'Poly Propylene (PP)', '(PP) plastic is a semi crystalline thermoplastic produced by catalytic polymerisation of propylene and belongs to the more broadly characterised group of materials known as polyolefins.'),
(1, 'pet1.jpg', 'Poly Ethylene Terephthalate (PET)', '(PET) belongs to the family of polyesters. It has a semi-crystalline form when stable. It is recyclable and shows resistance to impact moisture & solvents.'),
(3, 'pc1.jpg', 'Poly Carbonate (PC)	', '(PC) is an amorphous clear plastic suitable for industrial engineering. This versatile thermoplastic polymer is easy to process and has many applications within different branches.');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` int(100) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `message` varchar(600) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `phone`, `subject`, `message`) VALUES
(1, 'name', 'email', 0, 'subject', 'message'),
(2, 'name', 'email', 0, 'subject', 'message'),
(3, 'ahmedraza123', 'admin@gmail.com', 2147483647, 'complain', 'bsuibuiwfbrueohguqncjknuqhrf\r\n'),
(4, 'ahmedraza123', 'aijazmurtaza9@gmail.com', 2147483647, 'complain', 'thmjkejkmjeitjhimtkbipqaopjk0wkrgopm\r\n'),
(5, 'name', 'email', 0, 'subject', 'message'),
(6, 'name', 'email', 0, 'subject', 'message'),
(7, 'stu', 'asdfg@gmail.com', 2147483647, 'complain', '643ujmkne5jfhdjmn'),
(8, 'ahmedraza123wwe', 'asdfg@gmail.com', 2147483647, 'complain', 'erfg24tuhj6u7k\r\n'),
(9, 'Amina Ahmed', 'ahmedaminaahmedrazarizwan@pinterest.pk', 0, 'jsmu smc', 'mujhe kya pata kya likhna hai kya nahi. zabardasti review likhwaya ja raha hai mujh say. lekin main bhi amina hn, main bhi k lafz review say related nahi likhn gi. \r\njee ahmed, tou meri birthday a rahi hai, us ki tayyari kar lo ap. or mera dimagh km khaya karo. free mat ho ab, jaan choro meri'),
(10, 'rizwan', 'rizwan@gmail.com', 123456789, 'hhh', 'deg5y5y'),
(11, '', '', 0, '', ''),
(12, 'ahmed ', 'qwerty@gmail.com', 0, '', ''),
(13, 'ahmed ', 'qwerty@gmail.com', 0, '', ''),
(14, 'ahmed ', 'qwerty@gmail.com', 0, '', ''),
(15, '', '', 0, '', ''),
(16, '', '', 0, '', ''),
(17, '', '', 0, '', ''),
(18, '', '', 0, '', ''),
(19, '', '', 0, '', ''),
(20, '', '', 0, '', ''),
(21, '', '', 0, '', ''),
(22, '', '', 0, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `feature`
--

CREATE TABLE `feature` (
  `id` int(200) NOT NULL,
  `title` varchar(300) NOT NULL,
  `description` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `feature`
--

INSERT INTO `feature` (`id`, `title`, `description`) VALUES
(1, 'Quality', 'At our plastic manufacturing company, quality is the cornerstone of our operations. Our commitment to quality guarantees that our customers receive durable, reliable, and superior plastic products, every time.'),
(2, 'Safety', 'Customer safety is paramount. We prioritize the use of non-toxic, food-grade materials which are harmful for human health. We ensure that our customers can trust the reliability and safety of our plastic.'),
(3, 'Recycle', 'Our company takes pride in using high-quality, carefully selected raw materials for composition of our products. We utilize a diverse range of polyethylene, polypropylene, and specialty polymers.'),
(4, 'Customer Satisfaction', 'Customer satisfaction is at the heart of our company. We are dedicated to understanding and meeting the unique needs of each customer, offering customized solutions and unparalleled service.');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `rating` varchar(200) NOT NULL,
  `name` varchar(1000) NOT NULL,
  `comment` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `rating`, `name`, `comment`) VALUES
(19, '5', 'amina ahmed', 'bottle li nahi hai. par bohat achi hai khuwab main gift main mili thi mujhe.\nkhair on a serious note, keep it up. hamesha ap ko shine kartay hue dekhna chahti hn.'),
(20, '5', 'ahmed ', 'good websie\r\n'),
(23, '1', 'ahmed', 'vey good website made by me');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(200) NOT NULL,
  `file_name` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `order_bottles`
--

CREATE TABLE `order_bottles` (
  `id` int(200) NOT NULL,
  `name` varchar(300) NOT NULL,
  `email` varchar(300) NOT NULL,
  `product` varchar(300) NOT NULL,
  `amount` varchar(300) NOT NULL,
  `shipping_address` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `order_bottles`
--

INSERT INTO `order_bottles` (`id`, `name`, `email`, `product`, `amount`, `shipping_address`) VALUES
(1, 'name', 'email', 'product', 'amount', 'shipping_address'),
(2, 'ahmed ', 'ahmad@gmail.com', '1', '3', '123 st karachi'),
(3, 'ahmed ', 'ahmad@gmail.com', 'LG 3L BOTTLE', 'Three Boxes', '123 st karachi');

-- --------------------------------------------------------

--
-- Table structure for table `order_jars`
--

CREATE TABLE `order_jars` (
  `id` int(11) NOT NULL,
  `name` varchar(300) NOT NULL,
  `email` varchar(300) NOT NULL,
  `product` varchar(300) NOT NULL,
  `amount` varchar(300) NOT NULL,
  `shipping_address` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `order_jars`
--

INSERT INTO `order_jars` (`id`, `name`, `email`, `product`, `amount`, `shipping_address`) VALUES
(1, 'ahmed ', 'ahmad@gmail.com', 'SM 1L JARS', 'Two Boxes', '123 st karachi'),
(2, 'ahmed', 'ahmad53@gmail.com', 'LG 3L JARS', 'One Boxes', '123 st karachi');

-- --------------------------------------------------------

--
-- Table structure for table `product_bottle_upload`
--

CREATE TABLE `product_bottle_upload` (
  `id` int(200) NOT NULL,
  `file_name` varchar(300) NOT NULL,
  `title` varchar(200) NOT NULL,
  `description` varchar(300) NOT NULL,
  `price` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product_bottle_upload`
--

INSERT INTO `product_bottle_upload` (`id`, `file_name`, `title`, `description`, `price`) VALUES
(1, '1.png', 'PC BOTTLE', 'LG 2L BOTTLE', '$ 10'),
(2, 'C.png', 'PC BOTTLE', 'MD 0.5L BOTTLE', '25 $'),
(3, 'b44.png', 'PV BOTTLE', 'MD 1L BOTTLE', '35 $'),
(4, 'b55.png', 'PET BOTTLE', 'MD 1L BOTTLE', '25 $'),
(5, 'D.png', 'PET BOTTLE', 'LG 2L BOTTLE', '45 $'),
(6, 'b63.png', 'PC BOTTLE', 'SM 0.5L BOTTLE', '$ 10');

-- --------------------------------------------------------

--
-- Table structure for table `product_jar_upload`
--

CREATE TABLE `product_jar_upload` (
  `id` int(200) NOT NULL,
  `file_name` varchar(300) NOT NULL,
  `title` varchar(300) NOT NULL,
  `description` varchar(300) NOT NULL,
  `price` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product_jar_upload`
--

INSERT INTO `product_jar_upload` (`id`, `file_name`, `title`, `description`, `price`) VALUES
(1, 'E.jpg', 'PET JAR', 'LG 2L JAR', '$ 40'),
(2, 'j1.png', 'PET JAR', 'MD 1.5L JAR', '35 $'),
(3, 'j8.png', 'PET JAR', 'SM 0.5L JAR ', '10 $'),
(4, 'F.png', 'PV JAR', 'MD 1.5L JAR', '20 $'),
(5, 'j10.png', 'PV BOTTLE', 'LG 2L JAR', '$ 40'),
(6, 'j24.png', 'PV BOTTLE', 'MD 1.5L JAR', '$ 40');

-- --------------------------------------------------------

--
-- Table structure for table `registeration`
--

CREATE TABLE `registeration` (
  `id` int(25) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `user_type` varchar(300) NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `registeration`
--

INSERT INTO `registeration` (`id`, `name`, `email`, `password`, `user_type`) VALUES
(35, 'Ahmed Raza', 'ahmadraza2527963@gmail.com', '12345', 'user'),
(37, 'Admin', 'polysiteadmin@gmail.com', 'admin123', 'admin'),
(39, 'Admin User', 'adminuser@gmail.com', '12345', 'user'),
(40, 'Omaymah', 'omaymah@gmail.com', 'omay123', 'user'),
(41, '', '', '', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feature`
--
ALTER TABLE `feature`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_bottles`
--
ALTER TABLE `order_bottles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_jars`
--
ALTER TABLE `order_jars`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_bottle_upload`
--
ALTER TABLE `product_bottle_upload`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_jar_upload`
--
ALTER TABLE `product_jar_upload`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registeration`
--
ALTER TABLE `registeration`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `feature`
--
ALTER TABLE `feature`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `order_bottles`
--
ALTER TABLE `order_bottles`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `order_jars`
--
ALTER TABLE `order_jars`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `product_bottle_upload`
--
ALTER TABLE `product_bottle_upload`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `product_jar_upload`
--
ALTER TABLE `product_jar_upload`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `registeration`
--
ALTER TABLE `registeration`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
