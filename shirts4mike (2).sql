-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 16, 2014 at 11:06 AM
-- Server version: 5.6.16
-- PHP Version: 5.5.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `shirts4mike`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `sku` int(11) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `img` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `price` decimal(10,2) DEFAULT NULL,
  `paypal` varchar(32) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`sku`, `name`, `img`, `price`, `paypal`) VALUES
(101, 'Logo Shirt, Red', 'img/shirts/shirt-101.jpg', '18.00', 'G6A9PKRY2YFH6'),
(102, 'Mike the Frog Shirt, Black', 'img/shirts/shirt-102.jpg', '20.00', 'Y2TFLBLXER5XU'),
(103, 'Mike the Frog Shirt, Blue', 'img/shirts/shirt-103.jpg', '20.00', 'L3N34SPZP6W7W'),
(104, 'Logo Shirt, Green', 'img/shirts/shirt-104.jpg', '18.00', 'WH7JYFAJJ62M8'),
(105, 'Mike the Frog Shirt, Yellow', 'img/shirts/shirt-105.jpg', '25.00', 'ZLH5TQ77ZN6DN'),
(106, 'Logo Shirt, Gray', 'img/shirts/shirt-106.jpg', '20.00', 'ZD7CTDKS6X7RQ'),
(107, 'Logo Shirt, Teal', 'img/shirts/shirt-107.jpg', '20.00', '2GRJ2HT6UYU52'),
(108, 'Mike the Frog Shirt, Orange', 'img/shirts/shirt-108.jpg', '25.00', 'W2296ZDDERHK4'),
(109, 'Get Coding Shirt, Gray', 'img/shirts/shirt-109.jpg', '20.00', 'B5DAJHWHDA4RC'),
(110, 'HTML5 Shirt, Orange', 'img/shirts/shirt-110.jpg', '22.00', '6T2LVA8EDZR8L'),
(111, 'CSS3 Shirt, Gray', 'img/shirts/shirt-111.jpg', '22.00', 'MA2WQGE2KCWDS'),
(112, 'HTML5 Shirt, Blue', 'img/shirts/shirt-112.jpg', '22.00', 'FWR955VF5PALA'),
(113, 'CSS3 Shirt, Black', 'img/shirts/shirt-113.jpg', '22.00', '4ELH2M2FW7272'),
(114, 'PHP Shirt, Yellow', 'img/shirts/shirt-114.jpg', '24.00', 'AT3XQ3ZVP2DZG'),
(115, 'PHP Shirt, Purple', 'img/shirts/shirt-115.jpg', '24.00', 'LYESEKV9JWE3A'),
(116, 'PHP Shirt, Green', 'img/shirts/shirt-116.jpg', '24.00', 'KT7MRRJUXZR34'),
(117, 'Get Coding Shirt, Red', 'img/shirts/shirt-117.jpg', '20.00', '5UXJG8PXRXFKE'),
(118, 'Mike the Frog Shirt, Purple', 'img/shirts/shirt-118.jpg', '25.00', 'KHP8PYPDZZFTA'),
(119, 'CSS3 Shirt, Purple', 'img/shirts/shirt-119.jpg', '22.00', 'BFJRFE24L93NW'),
(120, 'HTML5 Shirt, Red', 'img/shirts/shirt-120.jpg', '22.00', 'RUVJSBR9FXXWQ'),
(121, 'Get Coding Shirt, Blue', 'img/shirts/shirt-121.jpg', '20.00', 'PGN6ULGFZTXL4'),
(122, 'PHP Shirt, Gray', 'img/shirts/shirt-122.jpg', '24.00', 'PYR4QH97W2TSJ'),
(123, 'Mike the Frog Shirt, Green', 'img/shirts/shirt-123.jpg', '25.00', 'STDAUJJTSPT54'),
(124, 'Logo Shirt, Yellow', 'img/shirts/shirt-124.jpg', '20.00', '2R2U74KWU5RXG'),
(125, 'CSS3 Shirt, Blue', 'img/shirts/shirt-125.jpg', '22.00', 'GJG7F8EW3XFAS'),
(126, 'Doctype Shirt, Green', 'img/shirts/shirt-126.jpg', '25.00', 'QW2LFRYGU7L4Q'),
(127, 'Logo Shirt, Purple', 'img/shirts/shirt-127.jpg', '20.00', 'GFV6QVRMJU7F8'),
(128, 'Doctype Shirt, Purple', 'img/shirts/shirt-128.jpg', '25.00', 'BARQMHMB565PN'),
(129, 'Get Coding Shirt, Green', 'img/shirts/shirt-129.jpg', '20.00', 'DH9GXABU3P8GS'),
(130, 'HTML5 Shirt, Teal', 'img/shirts/shirt-130.jpg', '22.00', '4LZ3EUVCBENE4'),
(131, 'Logo Shirt, Orange', 'img/shirts/shirt-131.jpg', '20.00', '7BNDYJBKWD364'),
(132, 'Mike the Frog Shirt, Red', 'img/shirts/shirt-132.jpg', '25.00', 'Y6EQRE445MYYW');

-- --------------------------------------------------------

--
-- Table structure for table `products_sizes`
--

CREATE TABLE IF NOT EXISTS `products_sizes` (
  `product_sku` int(11) NOT NULL,
  `size_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `products_sizes`
--

INSERT INTO `products_sizes` (`product_sku`, `size_id`) VALUES
(101, 1),
(101, 2),
(101, 3),
(101, 4),
(102, 1),
(102, 2),
(102, 3),
(102, 4),
(103, 1),
(103, 2),
(103, 3),
(103, 4),
(104, 1),
(104, 2),
(104, 3),
(104, 4),
(105, 1),
(105, 2),
(105, 3),
(105, 4),
(106, 1),
(106, 2),
(106, 3),
(106, 4),
(107, 1),
(107, 2),
(107, 3),
(107, 4),
(108, 1),
(108, 2),
(108, 3),
(108, 4),
(109, 1),
(109, 2),
(109, 3),
(109, 4),
(110, 1),
(110, 2),
(110, 3),
(110, 4),
(111, 1),
(111, 2),
(111, 3),
(111, 4),
(112, 1),
(112, 2),
(112, 3),
(112, 4),
(113, 1),
(113, 2),
(113, 3),
(113, 4),
(114, 1),
(114, 2),
(114, 3),
(114, 4),
(115, 1),
(115, 2),
(115, 3),
(115, 4),
(116, 1),
(116, 2),
(116, 3),
(116, 4),
(117, 1),
(117, 2),
(117, 3),
(117, 4),
(118, 1),
(118, 2),
(118, 3),
(118, 4),
(119, 1),
(119, 2),
(119, 3),
(119, 4),
(120, 1),
(120, 2),
(120, 3),
(120, 4),
(121, 1),
(121, 2),
(121, 3),
(121, 4),
(122, 1),
(122, 2),
(122, 3),
(122, 4),
(123, 1),
(123, 2),
(123, 3),
(123, 4),
(124, 1),
(124, 2),
(124, 3),
(124, 4),
(125, 1),
(125, 2),
(125, 3),
(125, 4),
(126, 1),
(126, 2),
(126, 3),
(126, 4),
(127, 1),
(127, 2),
(127, 3),
(127, 4),
(128, 1),
(128, 2),
(128, 3),
(128, 4),
(129, 1),
(129, 2),
(129, 3),
(129, 4),
(130, 1),
(130, 2),
(130, 3),
(130, 4),
(131, 1),
(131, 2),
(131, 3),
(131, 4),
(132, 1),
(132, 2),
(132, 3),
(132, 4);

-- --------------------------------------------------------

--
-- Table structure for table `sizes`
--

CREATE TABLE IF NOT EXISTS `sizes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `size` varchar(32) COLLATE utf8_unicode_ci DEFAULT NULL,
  `order` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- Dumping data for table `sizes`
--

INSERT INTO `sizes` (`id`, `size`, `order`) VALUES
(1, 'Small', 10),
(2, 'Medium', 20),
(3, 'Large', 30),
(4, 'X-Large', 40);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
