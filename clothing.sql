-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 16, 2018 at 11:29 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `clothing`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `aid` int(30) NOT NULL,
  `admin_name` varchar(30) NOT NULL,
  `admin_email` varchar(30) NOT NULL,
  `admin_password` varchar(30) NOT NULL,
  `admin_pp` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `cgid` int(20) NOT NULL,
  `category` varchar(50) NOT NULL,
  `cgfor` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cgid`, `category`, `cgfor`) VALUES
(8, 'Jackets', 'Men'),
(10, 'T-Shirt', 'Men'),
(11, 'Shirt', 'Men'),
(12, 'Shari', 'Women'),
(13, 'Lehenga', 'Women'),
(14, 'Baby item', 'Child'),
(15, 'Polo T-Shirt', 'Men'),
(16, 'Round Collar T-Shirt', 'Men'),
(17, 'Full Sleeve Shirt', 'Men'),
(18, 'Half Sleeve Shirt', 'Men'),
(19, 'Pants & Trousers', 'Men'),
(20, 'Jeans', 'Men'),
(21, 'Shorts', 'Men'),
(22, 'Panjabi & Pajama', 'Men'),
(23, 'Suits Blazers & Ties', 'Men'),
(24, 'Sports Wear', 'Men'),
(25, 'Winter Wear', 'Men'),
(26, 'Wedding Collection', 'Men'),
(27, 'Inner Wear', 'Men'),
(28, 'Salwar Kamiz', 'Women'),
(29, 'Saree', 'Women'),
(30, 'Kurtis & Tunics', 'Women'),
(31, 'Hijab & Scarfs', 'Women'),
(32, 'Palazzo & Leggings', 'Women'),
(33, 'T-Shirt', 'Women'),
(34, 'Shirt', 'Women'),
(35, 'Pants', 'Women'),
(36, 'Inner Wear', 'Women'),
(37, 'Winter Wear', 'Women'),
(38, 'UN-Stitched Than', 'Women'),
(39, 'Wedding Collection', 'Women'),
(40, 'Tops', 'Women'),
(41, 'Dress', 'Women'),
(42, 'Shrugs & Jackets', 'Women'),
(43, 'Shirts', 'Child'),
(44, 'T-Shirts', 'Child'),
(45, 'Saree', 'Child'),
(46, 'Pants', 'Child'),
(47, 'Salwar Kameez', 'Child'),
(48, 'Panjabi & Pajamas', 'Child'),
(49, 'Hijab & Scarf', 'Child'),
(50, 'Dress & Frocks', 'Child');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `cmntid` int(30) NOT NULL,
  `cmnt_text` varchar(255) NOT NULL,
  `cmnt_rating` int(20) DEFAULT NULL,
  `cmnt_for` int(30) NOT NULL,
  `pname` varchar(50) DEFAULT NULL,
  `cmnted_by` int(30) NOT NULL,
  `cmnter` varchar(50) NOT NULL,
  `nested_of` int(30) DEFAULT NULL,
  `created_date` varchar(30) NOT NULL,
  `created_time` varchar(30) NOT NULL,
  `modified_date` varchar(30) DEFAULT NULL,
  `modified_time` varchar(30) DEFAULT NULL,
  `mention` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`cmntid`, `cmnt_text`, `cmnt_rating`, `cmnt_for`, `pname`, `cmnted_by`, `cmnter`, `nested_of`, `created_date`, `created_time`, `modified_date`, `modified_time`, `mention`) VALUES
(2, 'yeah i think so', NULL, 1, NULL, 3, 'mzs', 1, 'Nov 22, 2018', '19:14:54', NULL, NULL, 'nobo'),
(4, 'not bad', NULL, 1, NULL, 23, 'alex', 1, 'Nov 22, 2018', '19:29:23', NULL, NULL, 'nobo'),
(7, 'so cool :V', NULL, 1, NULL, 11, 'fizz', 1, 'Nov 23, 2018', '02:31:15', 'Nov 23, 2018', '12:37:10', 'nobo'),
(8, 'checking again :3', NULL, 1, NULL, 11, 'fizz', 1, 'Nov 23, 2018', '08:37:40', 'Nov 23, 2018', '12:37:24', 'nobo'),
(9, 'holy moly', 4, 10, NULL, 11, 'fizz', 0, 'Nov 23, 2018', '08:38:50', NULL, NULL, NULL),
(11, 'about to delete', NULL, 14, NULL, 11, 'fizz', 10, 'Nov 23, 2018', '09:00:42', 'Nov 23, 2018', '13:11:01', 'fizz'),
(13, 'xyz', 0, 10, NULL, 11, 'fizz', 0, 'Nov 23, 2018', '16:07:10', NULL, NULL, NULL),
(14, 'fyfujgu g', 5, 1, NULL, 23, 'alex', 0, 'Nov 23, 2018', '16:15:50', 'Nov 23, 2018', '16:23:18', NULL),
(17, 'dgsdgd', 0, 3, NULL, 3, 'mzs', 0, 'Nov 23, 2018', '16:36:31', NULL, NULL, NULL),
(18, 'ggdfgsgdfg', 5, 3, NULL, 3, 'mzs', 0, 'Nov 23, 2018', '16:36:36', 'Nov 23, 2018', '16:36:49', NULL),
(19, 'fgdghfgh', 3, 1, NULL, 1, 'Clothing.com', 0, 'Nov 23, 2018', '16:49:19', 'Nov 23, 2018', '17:02:14', NULL),
(20, 'we are working hard', NULL, 1, NULL, 1, 'Clothing.com', 14, 'Nov 23, 2018', '17:01:08', NULL, NULL, 'alex'),
(21, 'trddyyht', 0, 1, NULL, 2, 'nobo', 0, 'Nov 23, 2018', '17:46:25', 'Nov 23, 2018', '17:48:51', NULL),
(22, 'gkhhukuhbkgte', NULL, 1, NULL, 2, 'nobo', 21, 'Nov 23, 2018', '17:46:46', 'Nov 23, 2018', '17:47:36', 'nobo'),
(23, 'hfghfhfh', 0, 1, NULL, 2, 'nobo', 0, 'Nov 23, 2018', '17:49:10', 'Nov 23, 2018', '17:49:34', NULL),
(24, 'hlw', NULL, 1, NULL, 2, 'nobo', 23, 'Nov 23, 2018', '17:49:26', NULL, NULL, 'nobo'),
(25, 'rydhtfh', 4, 1, NULL, 2, 'nobo', 0, 'Nov 23, 2018', '17:50:12', NULL, NULL, NULL),
(26, 'k', 0, 21, NULL, 1, 'Clothing.com', 0, 'Nov 23, 2018', '18:03:02', NULL, NULL, NULL),
(27, 'gxgx', 0, 1, NULL, 3, 'mzs', 0, 'Nov 24, 2018', '13:51:17', NULL, NULL, NULL),
(28, 'fyhyrtyfh', 0, 1, NULL, 11, 'fizz', 0, 'Nov 25, 2018', '10:17:17', 'Nov 25, 2018', '10:17:28', NULL),
(29, 'ntyhtthytrd', 0, 10, NULL, 2, 'nobo', 0, 'Nov 25, 2018', '11:42:52', 'Nov 25, 2018', '11:43:07', NULL),
(30, 'all ok', NULL, 10, NULL, 1, 'Clothing.com', 9, 'Nov 25, 2018', '12:02:51', 'Nov 25, 2018', '12:03:21', 'fizz'),
(32, 'cool', 0, 2, NULL, 2, 'nobo', 0, 'Nov 29, 2018', '14:14:42', NULL, NULL, NULL),
(33, 'good', NULL, 2, NULL, 1, 'Clothing.com', 32, 'Nov 29, 2018', '14:15:13', NULL, NULL, 'nobo'),
(34, 'fine', 0, 2, NULL, 1, 'Clothing.com', 0, 'Nov 29, 2018', '16:26:30', NULL, NULL, NULL),
(35, 'opps', 0, 10, NULL, 2, 'nobo', 0, 'Nov 30, 2018', '09:17:52', NULL, NULL, NULL),
(36, 'fgjfgiobj', 0, 10, NULL, 2, 'nobo', 0, 'Nov 30, 2018', '09:21:41', 'Nov 30, 2018', '09:41:05', NULL),
(37, 'xyz', NULL, 3, NULL, 2, 'nobo', 17, 'Nov 30, 2018', '09:28:54', NULL, NULL, 'mzs');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `cus_id` int(20) NOT NULL,
  `msg_from` varchar(60) NOT NULL,
  `msg_to` varchar(60) NOT NULL,
  `full_name` varchar(100) DEFAULT NULL,
  `phone_number` varchar(30) DEFAULT NULL,
  `email` varchar(60) NOT NULL,
  `message` varchar(255) NOT NULL,
  `send_date` varchar(30) DEFAULT NULL,
  `send_time` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`cus_id`, `msg_from`, `msg_to`, `full_name`, `phone_number`, `email`, `message`, `send_date`, `send_time`) VALUES
(1, 'mzsmunna', 'Admin', 'mzsmunna', '01744692979', 'mzs.munna@gmail.com', 'checking', 'Nov 30, 2018', '23:13:33'),
(2, 'nobo', 'Admin', 'nobo', '01840117914', 'noboranjan@gmail.com', 'hey', 'Dec 1, 2018', '12:44:25'),
(3, 'nobo', 'Admin', 'nobo', '01840117914', 'noboranjan@gmail.com', 'hello', 'Dec 1, 2018', '12:47:10'),
(4, 'nobo', 'Admin', 'nobo', '01840117914', 'noboranjan@gmail.com', 'hola', 'Dec 1, 2018', '12:52:49'),
(5, 'nobo', 'Admin', 'nobo', '01840117914', 'noboranjan@gmail.com', 'cool', 'Dec 1, 2018', '12:54:00'),
(6, 'Admin', 'nobo', 'mzsmunna', '01744692979', 'mzs.munna@gmail.com', 'what\'s up nobo?', 'Dec 1, 2018', '14:29:33'),
(7, 'nobo', 'Admin', 'nobo', '01840117914', 'noboranjan@gmail.com', 'hi admin', 'Dec 1, 2018', '14:47:22'),
(8, 'Admin', 'nobo', 'mzsmunna', '01744692979', 'mzs.munna@gmail.com', 'hello nobo', 'Dec 1, 2018', '14:47:46'),
(9, 'nobo', 'Admin', 'nobo', '01840117914', 'noboranjan@gmail.com', 'lol', 'Dec 1, 2018', '14:53:20'),
(10, 'nobo', 'Admin', 'nobo', '01840117914', 'noboranjan@gmail.com', 'sodhi vai', 'Dec 1, 2018', '16:51:16'),
(11, 'Admin', 'nobo', 'mzsmunna', '01744692979', 'mzs.munna@gmail.com', 'who is soshi?', 'Dec 1, 2018', '17:02:36'),
(12, 'Admin', 'nobo', 'mzsmunna', '01744692979', 'mzs.munna@gmail.com', 'anyway', 'Dec 1, 2018', '17:04:50'),
(13, 'Admin', 'nobo', 'mzsmunna', '01744692979', 'mzs.munna@gmail.com', 'keep supporting us', 'Dec 1, 2018', '17:05:32'),
(14, 'Admin', 'nobo', 'mzsmunna', '01744692979', 'mzs.munna@gmail.com', 'cool', 'Dec 1, 2018', '17:07:22'),
(15, 'nobo', 'Admin', 'nobo', '01840117914', 'noboranjan@gmail.com', 'yeah ok', 'Dec 1, 2018', '17:13:07'),
(16, 'nobo', 'Admin', 'nobo', '01840117914', 'noboranjan@gmail.com', 'take care', 'Dec 1, 2018', '17:14:12'),
(17, 'nobo', 'Admin', 'nobo', '01840117914', 'noboranjan@gmail.com', 'testing', 'Dec 1, 2018', '17:17:49'),
(18, 'Admin', 'nobo', 'mzsmunna', '01744692979', 'mzs.munna@gmail.com', 'good', 'Dec 1, 2018', '17:18:40'),
(19, 'fizz', 'Admin', 'fizz', '23435365464', 'fizz@gmail.com', 'Hello Admin, I\'m fizz', 'Dec 1, 2018', '17:32:10'),
(20, 'Admin', 'fizz', 'mzsmunna', '01744692979', 'mzs.munna@gmail.com', 'hi fizz.. how are you?', 'Dec 1, 2018', '17:33:00'),
(21, 'Admin', 'fizz', 'mzsmunna', '01744692979', 'mzs.munna@gmail.com', 'checking', 'Dec 1, 2018', '17:43:56'),
(22, 'Admin', 'nobo', 'mzsmunna', '01744692979', 'mzs.munna@gmail.com', 'hi again', 'Dec 1, 2018', '20:18:41'),
(23, 'nobo', 'Admin', 'nobo', '01840117914', 'noboranjan@gmail.com', 'what?', 'Dec 1, 2018', '20:19:01'),
(24, 'Admin', 'nobo', 'mzsmunna', '01744692979', 'mzs.munna@gmail.com', 'moira ja', 'Dec 1, 2018', '20:19:26'),
(25, 'nobo', 'Admin', 'nobo', '01840117914', 'noboranjan@gmail.com', 'you should manner!', 'Dec 1, 2018', '20:20:00'),
(26, 'Admin', 'nobo', 'mzsmunna', '01744692979', 'mzs.munna@gmail.com', 'i will', 'Dec 1, 2018', '20:34:56'),
(27, 'nobo', 'Admin', 'nobo', '01840117914', 'noboranjan@gmail.com', 'great', 'Dec 1, 2018', '20:35:15'),
(28, 'fizz', 'Admin', 'fizz', '23435365464', 'fizz@gmail.com', 'checking what?', 'Dec 1, 2018', '20:36:50'),
(29, 'Admin', 'fizz', 'mzsmunna', '01744692979', 'mzs.munna@gmail.com', 'idk', 'Dec 1, 2018', '20:37:28'),
(30, 'Admin', 'nobo', 'mzsmunna', '01744692979', 'mzs.munna@gmail.com', 'lol', 'Dec 1, 2018', '20:51:32'),
(31, 'Admin', 'nobo', 'mzsmunna', '01744692979', 'mzs.munna@gmail.com', 'yalak yalak', 'Dec 1, 2018', '21:19:59'),
(32, 'nobo', 'Admin', 'nobo', '01840117914', 'noboranjan@gmail.com', 'huh?', 'Dec 1, 2018', '21:20:54'),
(33, 'Admin', 'nobo', 'mzsmunna', '01744692979', 'mzs.munna@gmail.com', 'yo yo', 'Dec 1, 2018', '21:37:57'),
(34, 'Admin', 'nobo', 'mzsmunna', '01744692979', 'mzs.munna@gmail.com', 'moira ja', 'Dec 1, 2018', '21:38:10'),
(35, 'Admin', 'nobo', 'mzsmunna', '01744692979', 'mzs.munna@gmail.com', 'ha ha', 'Dec 1, 2018', '21:38:23'),
(36, 'nobo', 'Admin', 'nobo', '01840117914', 'noboranjan@gmail.com', 'ki baal suru korsos?', 'Dec 1, 2018', '21:38:37'),
(37, 'nobo', 'Admin', 'nobo', '01840117914', 'noboranjan@gmail.com', 'moja loss??', 'Dec 1, 2018', '21:38:50'),
(38, 'mamunuz zaman', 'Admin', 'mamunuz zaman', '01744692979', 'mzs.munna@outlook.com', 'hey admin what\'s up?', 'Dec 2, 2018', '00:01:01'),
(39, 'stranger', 'Admin', 'stranger', '3224354356', 'xyz@gmail.com', 'a a aaa a rama o la la kya lya ula la la !!! :#', 'Dec 2, 2018', '00:03:42'),
(40, 'Admin', 'mzs', 'mzsmunna', '01744692979', 'mzs.munna@gmail.com', 'hi Mzs', 'Dec 15, 2018', '19:28:36'),
(41, 'mzs', 'Admin', 'mzs', '01744697929', 'mzs.munna@outlook.com', 'what?', 'Dec 15, 2018', '19:30:24'),
(42, 'mzs', 'Admin', 'mamun', '01744602070', 'mzs.munna@outlook.com', 'la la land', 'Dec 15, 2018', '23:41:58'),
(43, 'blaman ( blabla@bla.com ) ', 'Admin', 'blaman', '0191919191919', 'blabla@bla.com', 'bla bla bla', 'Dec 16, 2018', '01:41:49');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `cid` int(30) NOT NULL,
  `customer_name` varchar(30) NOT NULL,
  `customer_email` varchar(30) NOT NULL,
  `customer_password` varchar(30) NOT NULL,
  `customer_pp` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `favorites`
--

CREATE TABLE `favorites` (
  `fid` int(30) NOT NULL,
  `pid` int(30) NOT NULL,
  `uid` int(30) NOT NULL,
  `username` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `favorites`
--

INSERT INTO `favorites` (`fid`, `pid`, `uid`, `username`) VALUES
(13, 14, 23, 'alex'),
(14, 19, 23, 'alex'),
(37, 10, 11, 'fizz'),
(42, 4, 2, 'nobo'),
(44, 14, 42, 'mithun'),
(45, 1, 9, 'mash'),
(46, 14, 9, 'mash'),
(47, 10, 2, 'nobo'),
(48, 21, 2, 'nobo'),
(51, 19, 2, 'nobo');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(54, '2018_11_22_095941_create_admins_table', 0),
(55, '2018_11_22_095941_create_categories_table', 0),
(56, '2018_11_22_095941_create_contact_us_table', 0),
(57, '2018_11_22_095941_create_customers_table', 0),
(58, '2018_11_22_095941_create_favorites_table', 0),
(59, '2018_11_22_095941_create_products_table', 0),
(60, '2018_11_22_095941_create_purchases_table', 0),
(61, '2018_11_22_095941_create_ratings_table', 0),
(62, '2018_11_22_095941_create_soldouts_table', 0),
(63, '2018_11_22_095941_create_users_table', 0);

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `nid` int(30) NOT NULL,
  `notify_for` varchar(30) NOT NULL,
  `notify_forid` int(30) NOT NULL,
  `notify_of` varchar(30) NOT NULL,
  `notify_ofid` int(30) NOT NULL,
  `notify_type` varchar(30) NOT NULL,
  `notify_by` varchar(50) NOT NULL,
  `notify_title` varchar(100) NOT NULL,
  `notify_dtls` varchar(255) NOT NULL,
  `notify_to` varchar(30) NOT NULL,
  `notify_time` varchar(30) NOT NULL,
  `notify_date` varchar(30) NOT NULL,
  `status` varchar(30) DEFAULT NULL,
  `uid` int(30) DEFAULT NULL,
  `pid` int(30) DEFAULT NULL,
  `prid` int(30) DEFAULT NULL,
  `soid` int(30) DEFAULT NULL,
  `fid` int(30) DEFAULT NULL,
  `rid` int(30) DEFAULT NULL,
  `cmntid` int(30) DEFAULT NULL,
  `msgid` int(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`nid`, `notify_for`, `notify_forid`, `notify_of`, `notify_ofid`, `notify_type`, `notify_by`, `notify_title`, `notify_dtls`, `notify_to`, `notify_time`, `notify_date`, `status`, `uid`, `pid`, `prid`, `soid`, `fid`, `rid`, `cmntid`, `msgid`) VALUES
(2, 'Product', 1, 'Comment', 14, 'Report', 'nobo', 'Report on a Comment of Product : Full T-Shirt', 'nobo has reported a comment of alex for Product : Full T-Shirt', 'Admin', '16:22:32', 'Nov 24, 2018', 'unchecked', NULL, 1, NULL, NULL, NULL, NULL, 14, NULL),
(3, 'Product', 10, 'Comment', 9, 'Report', 'nobo', 'Report on a Comment', 'nobo has reported a comment of fizz for Product : csdfsdfsd', 'Admin', '17:15:19', 'Nov 24, 2018', 'unchecked', NULL, 10, NULL, NULL, NULL, NULL, 9, NULL),
(4, 'Product', 31, 'Product', 31, 'StockOut', 'System', 'Out of Stock', 'Product \'kijjtyjhtyhyr\' is out of Stock!', 'Admin', '10:13:11', 'Nov 25, 2018', 'unchecked', NULL, 31, NULL, NULL, NULL, NULL, NULL, NULL),
(5, 'Product', 30, 'Product', 30, 'Purchase', 'System', 'New Purchase', '4 XS,S,M,L,XL,XXL size items of Product \'child cloth\' has been purchased by user : nobo', 'Admin', '13:24:37', 'Nov 29, 2018', 'unchecked', NULL, 30, NULL, NULL, NULL, NULL, NULL, NULL),
(6, 'Product', 1, 'Product', 1, 'StockOut', 'System', 'Out of Stock', 'Product \'Full T-Shirt\' is out of Stock!', 'Admin', '13:35:15', 'Nov 29, 2018', 'unchecked', NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL),
(7, 'Product', 1, 'Product', 1, 'Purchase', 'System', 'New Purchase', 'XS XS, size items of Product \'Full T-Shirt\' has been purchased by user : fizz', 'Admin', '13:35:15', 'Nov 29, 2018', 'unchecked', NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL),
(8, 'Product', 2, 'Product', 2, 'Rating', 'System', 'New Rating', 'nobo has given 4 Star Rating to Product \'Black Shari\'!', 'Admin', '13:58:18', 'Nov 29, 2018', 'unchecked', NULL, 2, NULL, NULL, NULL, NULL, NULL, NULL),
(9, 'Product', 2, 'Product', 2, 'Rating', 'System', 'Changed Rating', 'User \'nobo\' has changed Rating of Product \'Black Shari\' from 4 to1', 'Admin', '13:58:30', 'Nov 29, 2018', 'unchecked', NULL, 2, NULL, NULL, NULL, NULL, NULL, NULL),
(10, 'Product', 2, 'Comment', 2, 'Comments', 'System', 'New Comment', 'nobo has Commented on Product \'2', 'Admin', '14:14:42', 'Nov 29, 2018', 'unchecked', NULL, 2, NULL, NULL, NULL, NULL, NULL, NULL),
(11, 'Product', 3, 'Product', 3, 'Rating', 'System', 'New Rating', 'nobo has given 3 Star Rating to Product \'Half T-Shirt\'!', 'Admin', '09:12:38', 'Nov 30, 2018', 'unchecked', NULL, 3, NULL, NULL, NULL, NULL, NULL, NULL),
(12, 'Product', 3, 'Product', 3, 'Rating', 'nobo', 'Giving New Rating', 'Given 3 Star Rating to Product \'Half T-Shirt\'!', 'nobo', '09:12:38', 'Nov 30, 2018', 'unchecked', NULL, 3, NULL, NULL, NULL, NULL, NULL, NULL),
(13, 'Product', 3, 'Product', 3, 'Rating', 'System', 'Changed Rating', 'User \'nobo\' has changed Rating of Product \'Half T-Shirt\' from 3 to1', 'Admin', '09:17:01', 'Nov 30, 2018', 'unchecked', NULL, 3, NULL, NULL, NULL, NULL, NULL, NULL),
(14, 'Product', 3, 'Product', 3, 'Rating', 'nobo', 'Changing Rating', 'Changed Rating of Product \'Half T-Shirt\' from 3 to1', 'nobo', '09:17:01', 'Nov 30, 2018', 'unchecked', NULL, 3, NULL, NULL, NULL, NULL, NULL, NULL),
(15, 'Product', 10, 'Comment', 10, 'Comments', 'System', 'New Comment', 'nobo has Commented on Product \'10', 'Admin', '09:17:52', 'Nov 30, 2018', 'unchecked', NULL, 10, NULL, NULL, NULL, NULL, NULL, NULL),
(16, 'Product', 10, 'Comment', 10, 'Comments', 'System', 'New Comment', 'nobo has Commented on Product \'10', 'Admin', '09:21:41', 'Nov 30, 2018', 'unchecked', NULL, 10, NULL, NULL, NULL, NULL, NULL, NULL),
(17, 'Product', 10, 'Comment', 10, 'Commenting', 'nobo', 'Adding new Comment', 'Commented on Product : csdfsdfsd', 'nobo', '09:21:41', 'Nov 30, 2018', 'unchecked', NULL, NULL, NULL, NULL, NULL, NULL, 10, NULL),
(18, 'Product', 3, 'Comment', 3, 'Comments', 'System', 'New Comment', 'nobo has Commented on Product \'3', 'Admin', '09:28:54', 'Nov 30, 2018', 'unchecked', NULL, 3, NULL, NULL, NULL, NULL, NULL, NULL),
(19, 'Product', 3, 'Comment', 3, 'Commenting', 'nobo', 'Adding new Comment', 'Commented on Product : Half T-Shirt', 'nobo', '09:28:54', 'Nov 30, 2018', 'unchecked', NULL, 3, NULL, NULL, NULL, NULL, NULL, NULL),
(20, 'Product', 3, 'Product', 3, 'Favourite', 'nobo', 'Adding as Favourite', 'Product \'Half T-Shirt\' Added as Favourite!', 'nobo', '09:30:42', 'Nov 30, 2018', 'unchecked', NULL, 3, NULL, NULL, NULL, NULL, NULL, NULL),
(21, 'Product', 3, 'Product', 3, 'Favourite', 'nobo', 'Removing from Favourite', 'Product \'Half T-Shirt\' Removed from Favourite list!', 'nobo', '09:30:57', 'Nov 30, 2018', 'unchecked', NULL, 3, NULL, NULL, NULL, NULL, NULL, NULL),
(22, 'Product', 21, 'Product', 21, 'Rating', 'System', 'Changed Rating', 'User \'nobo\' has changed Rating of Product \'new panjabi\' from 3 to5', 'Admin', '09:31:45', 'Nov 30, 2018', 'unchecked', NULL, 21, NULL, NULL, NULL, NULL, NULL, NULL),
(23, 'Product', 21, 'Product', 21, 'Rating', 'nobo', 'Changing Rating', 'Changed Rating of Product \'new panjabi\' from 3 to5', 'nobo', '09:31:45', 'Nov 30, 2018', 'unchecked', NULL, 21, NULL, NULL, NULL, NULL, NULL, NULL),
(24, 'Product', 21, 'Product', 21, 'Rating', 'System', 'Changed Rating', 'User \'nobo\' has changed Rating of Product \'new panjabi\' from 5 to5', 'Admin', '09:31:48', 'Nov 30, 2018', 'unchecked', NULL, 21, NULL, NULL, NULL, NULL, NULL, NULL),
(25, 'Product', 21, 'Product', 21, 'Rating', 'nobo', 'Changing Rating', 'Changed Rating of Product \'new panjabi\' from 5 to5', 'nobo', '09:31:48', 'Nov 30, 2018', 'unchecked', NULL, 21, NULL, NULL, NULL, NULL, NULL, NULL),
(26, 'Product', 14, 'Comment', 14, 'Comments', 'System', 'New Comment', 'nobo has Commented on Product \'14', 'Admin', '09:44:26', 'Nov 30, 2018', 'unchecked', NULL, 14, NULL, NULL, NULL, NULL, NULL, NULL),
(27, 'Product', 14, 'Comment', 14, 'Commenting', 'nobo', 'Adding new Comment', 'Commented on Product : asdfdsf', 'nobo', '09:44:26', 'Nov 30, 2018', 'unchecked', NULL, 14, NULL, NULL, NULL, NULL, NULL, NULL),
(28, 'Product', 14, 'Comment', 14, 'Edit Comment', 'nobo', 'Editing a Comment', 'Edited a Comment of Product : asdfdsf', 'nobo', 'Nov 30, 2018', '09:44:34', 'unchecked', NULL, 14, NULL, NULL, NULL, NULL, NULL, NULL),
(30, 'Product', 14, 'Comment', 14, 'Comments', 'System', 'New Comment', 'nobo has Commented on Product \'14', 'Admin', '09:57:17', 'Nov 30, 2018', 'unchecked', NULL, 14, NULL, NULL, NULL, NULL, NULL, NULL),
(31, 'Product', 14, 'Comment', 14, 'Commenting', 'nobo', 'Adding new Comment', 'Commented on Product : asdfdsf', 'nobo', '09:57:17', 'Nov 30, 2018', 'unchecked', NULL, 14, NULL, NULL, NULL, NULL, NULL, NULL),
(32, 'Product', 14, 'Comment', 14, 'Delete Comment', 'nobo', 'Deleting a Comment', 'Deleted a Comment on Product : asdfdsf', 'nobo', '09:57:22', 'Nov 30, 2018', 'unchecked', NULL, NULL, NULL, NULL, NULL, NULL, 39, NULL),
(33, 'Product', 21, 'Product', 21, 'Favourite', 'nobo', 'Removing from Favourite', 'Product \'new panjabi\' Removed from Favourite list!', 'nobo', '00:43:42', 'Dec 1, 2018', 'unchecked', NULL, 21, NULL, NULL, NULL, NULL, NULL, NULL),
(34, 'Product', 21, 'Product', 21, 'Favourite', 'nobo', 'Adding as Favourite', 'Product \'new panjabi\' Added as Favourite!', 'nobo', '00:43:46', 'Dec 1, 2018', 'unchecked', NULL, 21, NULL, NULL, NULL, NULL, NULL, NULL),
(35, 'Product', 30, 'Product', 30, 'Purchase', 'System', 'New Purchase', '3 S size items of Product \'child cloth\' has been purchased by user : nobo', 'Admin', '12:37:59', 'Dec 12, 2018', 'unchecked', NULL, 30, NULL, NULL, NULL, NULL, NULL, NULL),
(36, 'Product', 30, 'Product', 30, 'Favourite', 'nobo', 'Purchasing New Product', '3 S size items of Product \'child cloth\' has been purchased!', 'nobo', '12:37:59', 'Dec 12, 2018', 'unchecked', NULL, 30, NULL, NULL, NULL, NULL, NULL, NULL),
(37, 'Product', 30, 'Product', 30, 'Purchase', 'System', 'New Purchase', '5 L size items of Product \'child cloth\' has been purchased by user : nobo', 'Admin', '13:37:50', 'Dec 12, 2018', 'unchecked', NULL, 30, NULL, NULL, NULL, NULL, NULL, NULL),
(38, 'Product', 30, 'Product', 30, 'Favourite', 'nobo', 'Purchasing New Product', '5 L size items of Product \'child cloth\' has been purchased!', 'nobo', '13:37:50', 'Dec 12, 2018', 'unchecked', NULL, 30, NULL, NULL, NULL, NULL, NULL, NULL),
(39, 'Product', 2, 'Product', 2, 'Rating', 'System', 'Changed Rating', 'User \'nobo\' has changed Rating of Product \'Black Shari\' from 1 to3', 'Admin', '11:36:56', 'Dec 15, 2018', 'unchecked', NULL, 2, NULL, NULL, NULL, NULL, NULL, NULL),
(40, 'Product', 2, 'Product', 2, 'Rating', 'nobo', 'Changing Rating', 'Changed Rating of Product \'Black Shari\' from 1 to3', 'nobo', '11:36:56', 'Dec 15, 2018', 'unchecked', NULL, 2, NULL, NULL, NULL, NULL, NULL, NULL),
(41, 'Product', 4, 'Product', 4, 'StockOut', 'System', 'Out of Stock', 'Product \'Black Panjabi\' is out of Stock!', 'Admin', '11:38:17', 'Dec 15, 2018', 'unchecked', NULL, 4, NULL, NULL, NULL, NULL, NULL, NULL),
(42, 'Product', 4, 'Product', 4, 'Purchase', 'System', 'New Purchase', '1 XXL size items of Product \'Black Panjabi\' has been purchased by user : nobo', 'Admin', '11:38:17', 'Dec 15, 2018', 'unchecked', NULL, 4, NULL, NULL, NULL, NULL, NULL, NULL),
(43, 'Product', 4, 'Product', 4, 'Favourite', 'nobo', 'Purchasing New Product', '1 XXL size items of Product \'Black Panjabi\' has been purchased!', 'nobo', '11:38:17', 'Dec 15, 2018', 'unchecked', NULL, 4, NULL, NULL, NULL, NULL, NULL, NULL),
(44, 'Product', 4, 'Product', 4, 'Rating', 'System', 'New Rating', 'nobo has given 5 Star Rating to Product \'Black Panjabi\'!', 'Admin', '21:35:48', 'Dec 15, 2018', 'unchecked', NULL, 4, NULL, NULL, NULL, NULL, NULL, NULL),
(45, 'Product', 4, 'Product', 4, 'Rating', 'nobo', 'Giving New Rating', 'Gave 5 Star Rating to Product \'Black Panjabi\'!', 'nobo', '21:35:48', 'Dec 15, 2018', 'unchecked', NULL, 4, NULL, NULL, NULL, NULL, NULL, NULL),
(46, 'Product', 21, 'Product', 21, 'Favourite', 'nobo', 'Removing from Favourite', 'Product \'new panjabi\' Removed from Favourite list!', 'nobo', '21:56:51', 'Dec 15, 2018', 'unchecked', NULL, 21, NULL, NULL, NULL, NULL, NULL, NULL),
(47, 'Product', 4, 'Product', 4, 'Favourite', 'nobo', 'Adding as Favourite', 'Product \'Black Panjabi\' Added as Favourite!', 'nobo', '22:06:34', 'Dec 15, 2018', 'unchecked', NULL, 4, NULL, NULL, NULL, NULL, NULL, NULL),
(48, 'Product', 4, 'Product', 4, 'Favourite', 'nobo', 'Removing from Favourite', 'Product \'Black Panjabi\' Removed from Favourite list!', 'nobo', '22:06:35', 'Dec 15, 2018', 'unchecked', NULL, 4, NULL, NULL, NULL, NULL, NULL, NULL),
(49, 'Product', 4, 'Product', 4, 'Favourite', 'nobo', 'Adding as Favourite', 'Product \'Black Panjabi\' Added as Favourite!', 'nobo', '22:06:45', 'Dec 15, 2018', 'unchecked', NULL, 4, NULL, NULL, NULL, NULL, NULL, NULL),
(50, 'Product', 30, 'Product', 30, 'Favourite', 'nobo', 'Adding as Favourite', 'Product \'child cloth\' Added as Favourite!', 'nobo', '22:08:47', 'Dec 15, 2018', 'unchecked', NULL, 30, NULL, NULL, NULL, NULL, NULL, NULL),
(51, 'Product', 30, 'Product', 30, 'Favourite', 'nobo', 'Removing from Favourite', 'Product \'child cloth\' Removed from Favourite list!', 'nobo', '22:09:10', 'Dec 15, 2018', 'unchecked', NULL, 30, NULL, NULL, NULL, NULL, NULL, NULL),
(52, 'Product', 14, 'Product', 14, 'Favourite', 'mithun', 'Adding as Favourite', 'Product \'asdfdsf\' Added as Favourite!', 'mithun', '09:04:18', 'Dec 16, 2018', 'unchecked', NULL, 14, NULL, NULL, NULL, NULL, NULL, NULL),
(53, 'Product', 1, 'Product', 1, 'Purchase', 'System', 'New Purchase', '3 S size items of Product \'Full T-Shirt\' has been purchased by user : mithun', 'Admin', '09:05:32', 'Dec 16, 2018', 'unchecked', NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL),
(54, 'Product', 1, 'Product', 1, 'Favourite', 'mithun', 'Purchasing New Product', '3 S size items of Product \'Full T-Shirt\' has been purchased!', 'mithun', '09:05:32', 'Dec 16, 2018', 'unchecked', NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL),
(55, 'Product', 21, 'Product', 21, 'Purchase', 'System', 'New Purchase', '3 M size items of Product \'new panjabi\' has been purchased by user : mithun', 'Admin', '09:05:32', 'Dec 16, 2018', 'unchecked', NULL, 21, NULL, NULL, NULL, NULL, NULL, NULL),
(56, 'Product', 21, 'Product', 21, 'Favourite', 'mithun', 'Purchasing New Product', '3 M size items of Product \'new panjabi\' has been purchased!', 'mithun', '09:05:32', 'Dec 16, 2018', 'unchecked', NULL, 21, NULL, NULL, NULL, NULL, NULL, NULL),
(57, 'Product', 1, 'Product', 1, 'Purchase', 'System', 'New Purchase', '3 XS size items of Product \'Full T-Shirt\' has been purchased by user : mithun', 'Admin', '09:07:13', 'Dec 16, 2018', 'unchecked', NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL),
(58, 'Product', 1, 'Product', 1, 'Favourite', 'mithun', 'Purchasing New Product', '3 XS size items of Product \'Full T-Shirt\' has been purchased!', 'mithun', '09:07:13', 'Dec 16, 2018', 'unchecked', NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL),
(59, 'Product', 21, 'Product', 21, 'Purchase', 'System', 'New Purchase', '3 L size items of Product \'new panjabi\' has been purchased by user : mithun', 'Admin', '09:07:13', 'Dec 16, 2018', 'unchecked', NULL, 21, NULL, NULL, NULL, NULL, NULL, NULL),
(60, 'Product', 21, 'Product', 21, 'Favourite', 'mithun', 'Purchasing New Product', '3 L size items of Product \'new panjabi\' has been purchased!', 'mithun', '09:07:13', 'Dec 16, 2018', 'unchecked', NULL, 21, NULL, NULL, NULL, NULL, NULL, NULL),
(61, 'Product', 1, 'Product', 1, 'Purchase', 'System', 'New Purchase', '5 XS size items of Product \'Full T-Shirt\' has been purchased by user : alex', 'Admin', '15:52:35', 'Dec 16, 2018', 'unchecked', NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL),
(62, 'Product', 1, 'Product', 1, 'Favourite', 'alex', 'Purchasing New Product', '5 XS size items of Product \'Full T-Shirt\' has been purchased!', 'alex', '15:52:35', 'Dec 16, 2018', 'unchecked', NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL),
(63, 'Product', 1, 'Product', 1, 'Purchase', 'System', 'New Purchase', '1 XS size items of Product \'Full T-Shirt\' has been purchased by user : alex', 'Admin', '15:53:45', 'Dec 16, 2018', 'unchecked', NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL),
(64, 'Product', 1, 'Product', 1, 'Favourite', 'alex', 'Purchasing New Product', '1 XS size items of Product \'Full T-Shirt\' has been purchased!', 'alex', '15:53:45', 'Dec 16, 2018', 'unchecked', NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL),
(65, 'Product', 1, 'Product', 1, 'Purchase', 'System', 'New Purchase', '1 XXL size items of Product \'Full T-Shirt\' has been purchased by user : alex', 'Admin', '15:53:45', 'Dec 16, 2018', 'unchecked', NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL),
(66, 'Product', 1, 'Product', 1, 'Favourite', 'alex', 'Purchasing New Product', '1 XXL size items of Product \'Full T-Shirt\' has been purchased!', 'alex', '15:53:45', 'Dec 16, 2018', 'unchecked', NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL),
(67, 'Product', 30, 'Product', 30, 'Purchase', 'System', 'New Purchase', '1 XS size items of Product \'child cloth\' has been purchased by user : alex', 'Admin', '15:55:13', 'Dec 16, 2018', 'unchecked', NULL, 30, NULL, NULL, NULL, NULL, NULL, NULL),
(68, 'Product', 30, 'Product', 30, 'Favourite', 'alex', 'Purchasing New Product', '1 XS size items of Product \'child cloth\' has been purchased!', 'alex', '15:55:13', 'Dec 16, 2018', 'unchecked', NULL, 30, NULL, NULL, NULL, NULL, NULL, NULL),
(69, 'Product', 28, 'Product', 28, 'Purchase', 'System', 'New Purchase', '4 S size items of Product \'DGSFHF\' has been purchased by user : alex', 'Admin', '15:55:13', 'Dec 16, 2018', 'unchecked', NULL, 28, NULL, NULL, NULL, NULL, NULL, NULL),
(70, 'Product', 28, 'Product', 28, 'Favourite', 'alex', 'Purchasing New Product', '4 S size items of Product \'DGSFHF\' has been purchased!', 'alex', '15:55:13', 'Dec 16, 2018', 'unchecked', NULL, 28, NULL, NULL, NULL, NULL, NULL, NULL),
(71, 'Product', 21, 'Product', 21, 'Purchase', 'System', 'New Purchase', '5 S size items of Product \'new panjabi\' has been purchased by user : alex', 'Admin', '16:15:55', 'Dec 16, 2018', 'unchecked', NULL, 21, NULL, NULL, NULL, NULL, NULL, NULL),
(72, 'Product', 21, 'Product', 21, 'Favourite', 'alex', 'Purchasing New Product', '5 S size items of Product \'new panjabi\' has been purchased!', 'alex', '16:15:55', 'Dec 16, 2018', 'unchecked', NULL, 21, NULL, NULL, NULL, NULL, NULL, NULL),
(73, 'Product', 21, 'Product', 21, 'Purchase', 'System', 'New Purchase', '5 M size items of Product \'new panjabi\' has been purchased by user : alex', 'Admin', '16:15:55', 'Dec 16, 2018', 'unchecked', NULL, 21, NULL, NULL, NULL, NULL, NULL, NULL),
(74, 'Product', 21, 'Product', 21, 'Favourite', 'alex', 'Purchasing New Product', '5 M size items of Product \'new panjabi\' has been purchased!', 'alex', '16:15:55', 'Dec 16, 2018', 'unchecked', NULL, 21, NULL, NULL, NULL, NULL, NULL, NULL),
(75, 'Product', 21, 'Product', 21, 'Purchase', 'System', 'New Purchase', '5 L size items of Product \'new panjabi\' has been purchased by user : alex', 'Admin', '16:15:55', 'Dec 16, 2018', 'unchecked', NULL, 21, NULL, NULL, NULL, NULL, NULL, NULL),
(76, 'Product', 21, 'Product', 21, 'Favourite', 'alex', 'Purchasing New Product', '5 L size items of Product \'new panjabi\' has been purchased!', 'alex', '16:15:55', 'Dec 16, 2018', 'unchecked', NULL, 21, NULL, NULL, NULL, NULL, NULL, NULL),
(77, 'Product', 1, 'Product', 1, 'StockOut', 'System', 'Out of Stock', 'Product \'Full T-Shirt\' is out of Stock!', 'Admin', '16:27:19', 'Dec 16, 2018', 'unchecked', NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL),
(78, 'Product', 1, 'Product', 1, 'Purchase', 'System', 'New Purchase', '2 XXL size items of Product \'Full T-Shirt\' has been purchased by user : mash', 'Admin', '16:27:19', 'Dec 16, 2018', 'unchecked', NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL),
(79, 'Product', 1, 'Product', 1, 'Favourite', 'mash', 'Purchasing New Product', '2 XXL size items of Product \'Full T-Shirt\' has been purchased!', 'mash', '16:27:19', 'Dec 16, 2018', 'unchecked', NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL),
(80, 'Product', 1, 'Product', 1, 'Favourite', 'mash', 'Adding as Favourite', 'Product \'\' Added as Favourite!', 'mash', '16:37:59', 'Dec 16, 2018', 'unchecked', NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL),
(81, 'Product', 14, 'Product', 14, 'Favourite', 'mash', 'Adding as Favourite', 'Product \'asdfdsf\' Added as Favourite!', 'mash', '16:38:47', 'Dec 16, 2018', 'unchecked', NULL, 14, NULL, NULL, NULL, NULL, NULL, NULL),
(82, 'Product', 10, 'Product', 10, 'Favourite', 'nobo', 'Adding as Favourite', 'Product \'csdfsdfsd\' Added as Favourite!', 'nobo', '20:16:55', 'Dec 16, 2018', 'unchecked', NULL, 10, NULL, NULL, NULL, NULL, NULL, NULL),
(83, 'Product', 21, 'Product', 21, 'Favourite', 'nobo', 'Adding as Favourite', 'Product \'new panjabi\' Added as Favourite!', 'nobo', '20:17:11', 'Dec 16, 2018', 'unchecked', NULL, 21, NULL, NULL, NULL, NULL, NULL, NULL),
(84, 'Product', 19, 'Product', 19, 'Favourite', 'nobo', 'Adding as Favourite', 'Product \'ccrdxh\' Added as Favourite!', 'nobo', '20:20:41', 'Dec 16, 2018', 'unchecked', NULL, 19, NULL, NULL, NULL, NULL, NULL, NULL),
(85, 'Product', 19, 'Product', 19, 'Favourite', 'nobo', 'Removing from Favourite', 'Product \'ccrdxh\' Removed from Favourite list!', 'nobo', '20:20:57', 'Dec 16, 2018', 'unchecked', NULL, 19, NULL, NULL, NULL, NULL, NULL, NULL),
(86, 'Product', 14, 'Product', 14, 'Favourite', 'nobo', 'Adding as Favourite', 'Product \'asdfdsf\' Added as Favourite!', 'nobo', '20:21:11', 'Dec 16, 2018', 'unchecked', NULL, 14, NULL, NULL, NULL, NULL, NULL, NULL),
(87, 'Product', 14, 'Product', 14, 'Favourite', 'nobo', 'Removing from Favourite', 'Product \'asdfdsf\' Removed from Favourite list!', 'nobo', '20:21:20', 'Dec 16, 2018', 'unchecked', NULL, 14, NULL, NULL, NULL, NULL, NULL, NULL),
(88, 'Product', 19, 'Product', 19, 'Favourite', 'nobo', 'Adding as Favourite', 'Product \'ccrdxh\' Added as Favourite!', 'nobo', '20:25:11', 'Dec 16, 2018', 'unchecked', NULL, 19, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `pid` int(30) NOT NULL,
  `pname` varchar(30) NOT NULL,
  `category` varchar(30) NOT NULL,
  `pfor` varchar(30) NOT NULL,
  `size` varchar(30) NOT NULL,
  `available` int(30) NOT NULL,
  `xs_available` int(30) DEFAULT NULL,
  `s_available` int(30) DEFAULT NULL,
  `m_available` int(30) DEFAULT NULL,
  `l_available` int(30) DEFAULT NULL,
  `xl_available` int(30) DEFAULT NULL,
  `xxl_available` int(30) DEFAULT NULL,
  `rating` float DEFAULT NULL,
  `price` int(30) NOT NULL,
  `currency` varchar(30) NOT NULL,
  `cost` int(30) NOT NULL,
  `offer` int(30) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`pid`, `pname`, `category`, `pfor`, `size`, `available`, `xs_available`, `s_available`, `m_available`, `l_available`, `xl_available`, `xxl_available`, `rating`, `price`, `currency`, `cost`, `offer`, `image`) VALUES
(1, 'Full T-Shirt', 'T-Shirt', 'Men', 'XS,S,XXL,', 0, 0, 0, 0, 0, 0, 0, 3.2, 880, 'Taka', 880, 0, NULL),
(3, 'Half T-Shirt', 'T-Shirt', 'Child', 'xs,s', 7, NULL, NULL, NULL, NULL, NULL, NULL, 1, 400, 'Taka', 350, NULL, NULL),
(10, 'csdfsdfsd', 'T-Shirt', 'Men', 'Medium', 1, NULL, NULL, NULL, NULL, NULL, NULL, 3.5, 120, '$', 110, 12, ''),
(14, 'asdfdsf', 'Shirt', 'Women', 'Large', 3, NULL, NULL, NULL, NULL, NULL, NULL, 3, 500, 'TK.', 400, 5, ''),
(16, 'lehenga', 'Shirt', 'Women', 'L', 500, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 400, 'TK.', 300, 20, NULL),
(17, 'kurtis', 'Shirt', 'Women', 'L', 19, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1000, 'RS.', 800, 20, NULL),
(19, 'ccrdxh', 'T-Shirt', 'Women', 'M', 100, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1000, 'TK.', 200, 20, NULL),
(20, 'ashdagshf', 'vdasvgasg', 'Men', 'S,M,L,', 20, 0, 0, 10, 10, 0, 0, NULL, 1000, 'Taka', 800, 10, NULL),
(21, 'new panjabi', 'panjabi', 'Men', 'S,M,L,XL,', 461, 0, 141, 135, 92, 93, 0, 5, 2500, 'TK.', 1000, 15, NULL),
(22, 'grown', 'night wear', 'Women', 'XS,S,M,L,XL,XXL', 1158, 190, 197, 187, 189, 197, 200, NULL, 120, '$', 110, NULL, NULL),
(23, 'new pro', 'jackets', 'Men', 'XS,S,M,L,XL,XXL', 557, 100, 83, 86, 100, 96, 95, 3, 2500, 'Taka', 200, 10, NULL),
(24, 'gdfgdfgdsfdfgfhgjghjhkjh', 'T-Shirt', 'Men', 'XS,S,M,L,XL,XXL,', 295, 50, 48, 47, 50, 50, 50, NULL, 1000, 'Taka', 800, 20, NULL),
(25, 'dxgxfgdgd', 'T-Shirt', 'Men', 'XS,S,M,L,XL,XXL', 1170, 194, 197, 196, 189, 194, 200, NULL, 500, 'Taka', 300, 15, NULL),
(26, 'lhjkfghdfs', 'T-Shirt', 'Men', 'XS,S,M,L,XL,XXL', 103, 16, 18, 15, 20, 14, 20, NULL, 1200, 'Taka', 110, 2, NULL),
(27, 'xyz', 'T-Shirt', 'Men', 'none,none,', -2, 0, 0, 0, -1, -1, 0, NULL, 1100, 'Taka', 1000, 0, NULL),
(28, 'DGSFHF', 'SFHFGS', 'Men', 'XS,S,M,L,XL,XXL', 46, 5, 1, 10, 10, 10, 10, NULL, 1200, 'Taka', 1100, 2, NULL),
(29, 'sfsdfsdfgd', 'Lehenga', 'Women', 'XS,S,M,L,XL,XXL', 30, 5, 5, 5, 5, 5, 5, NULL, 1300, 'Taka', 1100, 5, NULL),
(30, 'child cloth', 'Baby item', 'Child', 'XS,S,M,L,XL,XXL', 5, 0, 0, 0, 0, 0, 5, 3, 1599, 'Taka', 1455, 10, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `purchases`
--

CREATE TABLE `purchases` (
  `prid` int(30) NOT NULL,
  `pid` int(30) NOT NULL,
  `pname` varchar(30) NOT NULL,
  `category` varchar(30) NOT NULL,
  `pfor` varchar(30) NOT NULL,
  `size` varchar(30) NOT NULL,
  `quantity` int(30) NOT NULL,
  `price` int(30) NOT NULL,
  `cost` int(30) DEFAULT NULL,
  `offer` int(30) DEFAULT NULL,
  `currency` varchar(30) NOT NULL,
  `purchasedby` varchar(30) NOT NULL,
  `date` varchar(30) NOT NULL,
  `purchasedmethod` varchar(30) NOT NULL,
  `phonenumber` varchar(30) NOT NULL,
  `address` varchar(100) NOT NULL,
  `totalprice` int(30) NOT NULL,
  `totalcost` int(50) NOT NULL,
  `image` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `purchases`
--

INSERT INTO `purchases` (`prid`, `pid`, `pname`, `category`, `pfor`, `size`, `quantity`, `price`, `cost`, `offer`, `currency`, `purchasedby`, `date`, `purchasedmethod`, `phonenumber`, `address`, `totalprice`, `totalcost`, `image`) VALUES
(1, 2, 'xyz', 'T-Shirt', 'Men', 'S', 5, 300, 200, NULL, 'Taka', 'nobo', '1.11.18', 'Bikash', '', '', 1500, 1000, NULL),
(2, 1, 'Full T-Shirt', 'T-Shirt', 'Men', 'XS', 3, 1000, 900, NULL, 'taka', 'mzs', '2018-11-04 06:04:31.024', 'xyz', '01744', 'abc', 3000, 2700, NULL),
(3, 2, 'Black Shari ', 'Shari', 'Women', 'M', 4, 4000, 2000, NULL, 'Taka', 'mzs', '2018-11-04 06:04:31.026', 'xyz', '01744', 'abc', 16000, 8000, NULL),
(4, 3, 'Half T-Shirt', 'T-Shirt', 'Child', 'L', 3, 400, 300, NULL, 'Taka', 'mzs', '2018-11-04 06:04:31.027', 'xyz', '01744', 'abc', 1200, 900, NULL),
(5, 1, 'Full T-Shirt', 'T-Shirt', 'Men', '', 3, 1000, NULL, NULL, 'taka', 'mzs', '2018-11-04 06:16:58.451', 'xyz', '01744', 'abc', 3000, 0, NULL),
(6, 2, 'Black Shari ', 'Shari', 'Women', '', 3, 4000, NULL, NULL, 'Taka', 'mzs', '2018-11-04 06:16:58.453', 'xyz', '01744', 'abc', 12000, 0, NULL),
(7, 3, 'Half T-Shirt', 'T-Shirt', 'Child', '', 3, 400, NULL, NULL, 'Taka', 'mzs', '2018-11-04 06:16:58.454', 'xyz', '01744', 'abc', 1200, 0, NULL),
(8, 1, 'Full T-Shirt', 'T-Shirt', 'Men', '', 4, 1000, NULL, NULL, 'taka', 'mzs', '2018-11-04 10:56:16.305', 'xyz', '01744', 'abc', 4000, 0, NULL),
(9, 3, 'Half T-Shirt', 'T-Shirt', 'Child', '', 7, 400, NULL, NULL, 'Taka', 'mzs', '2018-11-04 10:56:16.305', 'xyz', '01744', 'abc', 2800, 0, NULL),
(10, 2, 'Black Shari ', 'Shari', 'Women', '', 3, 4000, NULL, NULL, 'Taka', 'mzs', '2018-11-04 10:56:16.305', 'xyz', '01744', 'abc', 12000, 0, NULL),
(11, 1, 'Full T-Shirt', 'T-Shirt', 'Men', '', 3, 1000, NULL, NULL, 'taka', 'mzs', '2018-11-04 11:20:29.999', 'xyz', '01744', 'abc', 3000, 0, NULL),
(12, 4, 'Black Panjabi', 'Panjabi', 'Men', '', 1, 5000, NULL, NULL, 'Taka', 'mzs', '2018-11-04 11:20:29.999', 'xyz', '01744', 'abc', 5000, 0, NULL),
(74, 25, 'dxgxfgdgd', 'T-Shirt', 'Men', 'XS', 4, 425, 300, 15, 'Taka', 'mzs', '2018-11-17', 'Home Delivary', '01744697929', 'xyz, Uttara Khan, Dhaka, Bangladesh', 1700, 1200, NULL),
(75, 26, 'lhjkfghdfs', 'T-Shirt', 'Men', 'M', 4, 1176, 110, 2, 'Taka', 'mzs', '2018-11-17', 'Home Delivary', '01744697929', 'xyz, Uttara Khan, Dhaka, Bangladesh', 4704, 440, NULL),
(76, 26, 'lhjkfghdfs', 'T-Shirt', 'Men', 'XL', 6, 1176, 110, 2, 'Taka', 'mzs', '2018-11-17', 'Home Delivary', '01744697929', 'xyz, Uttara Khan, Dhaka, Bangladesh', 7056, 660, NULL),
(77, 25, 'dxgxfgdgd', 'T-Shirt', 'Men', 'L', 6, 425, 300, 15, 'Taka', 'mzs', '2018-11-17', 'Home Delivary', '01744697929', 'xyz, Uttara Khan, Dhaka, Bangladesh', 2550, 1800, NULL),
(78, 20, 'ashdagshf', 'vdasvgasg', 'Men', 'M', 3, 800, 800, 20, 'TK.', 'mzs', '2018-11-17', 'Home Delivary', '01744697929', 'xyz, Uttara Khan, Dhaka, Bangladesh', 2400, 2400, NULL),
(79, 20, 'ashdagshf', 'vdasvgasg', 'Men', 'L', 4, 800, 800, 20, 'TK.', 'mzs', '2018-11-17', 'Home Delivary', '01744697929', 'xyz, Uttara Khan, Dhaka, Bangladesh', 3200, 3200, NULL),
(80, 20, 'ashdagshf', 'vdasvgasg', 'Men', 'XS', 6, 800, 800, 20, 'TK.', 'mzs', '2018-11-17', 'Home Delivary', '01744697929', 'xyz, Uttara Khan, Dhaka, Bangladesh', 4800, 4800, NULL),
(81, 27, 'xyz', 'T-Shirt', 'Men', 'L', 1, 1100, 1000, 0, 'Taka', 'mzs', '2018-11-17', 'Home Delivary', '01744697929', 'xyz, Uttara Khan, Dhaka, Bangladesh', 1100, 1000, NULL),
(82, 27, 'xyz', 'T-Shirt', 'Men', 'XL', 1, 1100, 1000, 0, 'Taka', 'mzs', '2018-11-17', 'Home Delivary', '01744697929', 'xyz, Uttara Khan, Dhaka, Bangladesh', 1100, 1000, NULL),
(83, 27, 'xyz', 'T-Shirt', 'Men', 'L', 1, 1100, 1000, 0, 'Taka', 'mzs', '2018-11-17', 'Home Delivary', '01744697929', 'xyz, Uttara Khan, Dhaka, Bangladesh', 1100, 1000, NULL),
(84, 27, 'xyz', 'T-Shirt', 'Men', 'XL', 1, 1100, 1000, 0, 'Taka', 'mzs', '2018-11-17', 'Home Delivary', '01744697929', 'xyz, Uttara Khan, Dhaka, Bangladesh', 1100, 1000, NULL),
(85, 26, 'lhjkfghdfs', 'T-Shirt', 'Men', 'XS', 4, 1176, 110, 2, 'Taka', 'nobo', '2018-11-18', 'Home Delivary', '01840117914', 'Sector 7, Uttara, Dhaka, Bangladesh', 4704, 440, NULL),
(86, 26, 'lhjkfghdfs', 'T-Shirt', 'Men', 'XS', 4, 1176, 110, 2, 'Taka', 'nobo', '2018-11-18', 'Home Delivary', '01840117914', 'Sector 7, Uttara, Dhaka, Bangladesh', 4704, 440, NULL),
(87, 26, 'lhjkfghdfs', 'T-Shirt', 'Men', 'XS', 4, 1176, 110, 2, 'Taka', 'nobo', '2018-11-18', 'Home Delivary', '01840117914', 'Sector 7, Uttara, Dhaka, Bangladesh', 4704, 440, NULL),
(88, 20, 'ashdagshf', 'vdasvgasg', 'Men', 'S', 10, 900, 800, 10, 'Taka', 'nobo', '2018-11-18', 'Home Delivary', '01840117914', 'Sector 7, Uttara, Dhaka, Bangladesh', 9000, 8000, NULL),
(89, 28, 'DGSFHF', 'SFHFGS', 'Men', 'XS', 2, 1176, 1100, 2, 'Taka', 'nobo', '2018-11-18', 'Home Delivary', '01840117914', 'Sector 7, Uttara, Dhaka, Bangladesh', 2352, 2200, NULL),
(90, 28, 'DGSFHF', 'SFHFGS', 'Men', 'S', 5, 1176, 1100, 2, 'Taka', 'nobo', '2018-11-19', 'Home Delivary', '01840117914', 'Sector 7, Uttara, Dhaka, Bangladesh', 5880, 5500, NULL),
(91, 28, 'DGSFHF', 'SFHFGS', 'Men', 'S', 5, 1176, 1100, 2, 'Taka', 'nobo', '2018-11-19', 'Home Delivary', '01840117914', 'Sector 7, Uttara, Dhaka, Bangladesh', 5880, 5500, NULL),
(92, 28, 'DGSFHF', 'SFHFGS', 'Men', 'S', 5, 1176, 1100, 2, 'Taka', 'nobo', '2018-11-19', 'Home Delivary', '01840117914', 'Sector 7, Uttara, Dhaka, Bangladesh', 5880, 5500, NULL),
(93, 28, 'DGSFHF', 'SFHFGS', 'Men', 'S', 5, 1176, 1100, 2, 'Taka', 'nobo', '2018-11-19', 'Home Delivary', '01840117914', 'Sector 7, Uttara, Dhaka, Bangladesh', 5880, 5500, NULL),
(94, 28, 'DGSFHF', 'SFHFGS', 'Men', 'S', 5, 1176, 1100, 2, 'Taka', 'nobo', '2018-11-19', 'Home Delivary', '01840117914', 'Sector 7, Uttara, Dhaka, Bangladesh', 5880, 5500, NULL),
(95, 25, 'dxgxfgdgd', 'T-Shirt', 'Men', 'XS', 2, 425, 300, 15, 'Taka', 'nobo', '2018-11-19', 'Home Delivary', '01840117914', 'Sector 7, Uttara, Dhaka, Bangladesh', 850, 600, NULL),
(96, 25, 'dxgxfgdgd', 'T-Shirt', 'Men', 'XS', 2, 425, 300, 15, 'Taka', 'nobo', '2018-11-19', 'Home Delivary', '01840117914', 'Sector 7, Uttara, Dhaka, Bangladesh', 850, 600, NULL),
(97, 25, 'dxgxfgdgd', 'T-Shirt', 'Men', 'XS', 2, 425, 300, 15, 'Taka', 'nobo', '2018-11-19', 'Home Delivary', '01840117914', 'Sector 7, Uttara, Dhaka, Bangladesh', 850, 600, NULL),
(98, 25, 'dxgxfgdgd', 'T-Shirt', 'Men', 'XS', 2, 425, 300, 15, 'Taka', 'nobo', '2018-11-19', 'Home Delivary', '01840117914', 'Sector 7, Uttara, Dhaka, Bangladesh', 850, 600, NULL),
(99, 25, 'dxgxfgdgd', 'T-Shirt', 'Men', 'XS', 2, 425, 300, 15, 'Taka', 'nobo', '2018-11-19', 'Home Delivary', '01840117914', 'Sector 7, Uttara, Dhaka, Bangladesh', 850, 600, NULL),
(100, 25, 'dxgxfgdgd', 'T-Shirt', 'Men', 'S', 3, 425, 300, 15, 'Taka', 'nobo', '2018-11-19', 'Home Delivary', '01840117914', 'Sector 7, Uttara, Dhaka, Bangladesh', 1275, 900, NULL),
(101, 25, 'dxgxfgdgd', 'T-Shirt', 'Men', 'M', 4, 425, 300, 15, 'Taka', 'nobo', '2018-11-19', 'Home Delivary', '01840117914', 'Sector 7, Uttara, Dhaka, Bangladesh', 1700, 1200, NULL),
(102, 25, 'dxgxfgdgd', 'T-Shirt', 'Men', 'L', 5, 425, 300, 15, 'Taka', 'nobo', '2018-11-19', 'Home Delivary', '01840117914', 'Sector 7, Uttara, Dhaka, Bangladesh', 2125, 1500, NULL),
(103, 25, 'dxgxfgdgd', 'T-Shirt', 'Men', 'XL', 6, 425, 300, 15, 'Taka', 'nobo', '2018-11-19', 'Home Delivary', '01840117914', 'Sector 7, Uttara, Dhaka, Bangladesh', 2550, 1800, ''),
(104, 28, 'DGSFHF', 'SFHFGS', 'Men', 'XS', 3, 1176, 1100, 2, 'Taka', 'nobo', '2018-11-19', 'Home Delivary', '01840117914', 'Sector 7, Uttara, Dhaka, Bangladesh', 3528, 3300, NULL),
(105, 28, 'DGSFHF', 'SFHFGS', 'Men', 'S', 5, 1176, 1100, 2, 'Taka', 'nobo', '2018-11-19', 'Home Delivary', '01840117914', 'Sector 7, Uttara, Dhaka, Bangladesh', 5880, 5500, NULL),
(106, 26, 'lhjkfghdfs', 'T-Shirt', 'Men', 'S', 2, 1176, 110, 2, 'Taka', 'nobo', '2018-11-19', 'Home Delivary', '01840117914', 'Sector 7, Uttara, Dhaka, Bangladesh', 2352, 220, NULL),
(107, 24, 'gdfgdfgdsfdfg', 'T-Shirt', 'Men', 'S', 2, 800, 800, 20, 'Taka', 'nobo', '2018-11-19', 'Home Delivary', '01840117914', 'Sector 7, Uttara, Dhaka, Bangladesh', 1600, 1600, NULL),
(108, 24, 'gdfgdfgdsfdfg', 'T-Shirt', 'Men', 'M', 3, 800, 800, 20, 'Taka', 'nobo', '2018-11-19', 'Home Delivary', '01840117914', 'Sector 7, Uttara, Dhaka, Bangladesh', 2400, 2400, NULL),
(109, 23, 'new pro', 'jackets', 'Men', 'S', 2, 2250, 200, 10, 'Taka', 'nobo', '2018-11-19', 'Home Delivary', '01840117914', 'Sector 7, Uttara, Dhaka, Bangladesh', 4500, 400, NULL),
(110, 23, 'new pro', 'jackets', 'Men', 'M', 3, 2250, 200, 10, 'Taka', 'nobo', '2018-11-19', 'Home Delivary', '01840117914', 'Sector 7, Uttara, Dhaka, Bangladesh', 6750, 600, NULL),
(111, 22, 'grown', 'night wear', 'Women', 'M', 2, 120, 110, 0, '$', 'nobo', '2018-11-19', 'Home Delivary', '01840117914', 'Sector 7, Uttara, Dhaka, Bangladesh', 240, 220, NULL),
(112, 22, 'grown', 'night wear', 'Women', 'L', 3, 120, 110, 0, '$', 'nobo', '2018-11-19', 'Home Delivary', '01840117914', 'Sector 7, Uttara, Dhaka, Bangladesh', 360, 330, NULL),
(113, 30, 'child cloth', 'Baby item', 'Child', 'S', 2, 1439, 1455, 10, 'Taka', 'nobo', '2018-11-21', 'Home Delivary', '01840117914', 'Sector 7, Uttara, Dhaka, Bangladesh', 2878, 2910, NULL),
(114, 30, 'child cloth', 'Baby item', 'Child', 'M', 3, 1439, 1455, 10, 'Taka', 'nobo', '2018-11-21', 'Home Delivary', '01840117914', 'Sector 7, Uttara, Dhaka, Bangladesh', 4317, 4365, NULL),
(115, 30, 'child cloth', 'Baby item', 'Child', 'XL', 5, 1439, 1455, 10, 'Taka', 'nobo', '2018-11-21', 'Home Delivary', '01840117914', 'Sector 7, Uttara, Dhaka, Bangladesh', 7196, 7275, NULL),
(116, 21, 'new panjabi', 'panjabi', 'Men', 'M', 5, 2125, 1000, 15, 'TK.', 'fizz', '2018-11-25', 'Home Delivary', '23435365464', 'aaaaaaaaaaaaaaaaaad, Chwak Bazar, Chittagong, Bangladesh', 10625, 5000, NULL),
(117, 21, 'new panjabi', 'panjabi', 'Men', 'XL', 5, 2125, 1000, 15, 'TK.', 'fizz', '2018-11-25', 'Home Delivary', '23435365464', 'aaaaaaaaaaaaaaaaaad, Chwak Bazar, Chittagong, Bangladesh', 10625, 5000, NULL),
(118, 30, 'child cloth', 'Baby item', 'Child', 'M', 2, 1439, 1455, 10, 'Taka', 'fizz', '2018-11-25', 'Home Delivary', '23435365464', 'aaaaaaaaaaaaaaaaaad, Chwak Bazar, Chittagong, Bangladesh', 2878, 2910, NULL),
(119, 31, 'kijjtyjhtyhyr', 'Dress & Frocks', 'Child', 'M', 1, 1304, 1234, 3, 'Taka', 'fizz', '2018-11-25', 'Home Delivary', '23435365464', 'aaaaaaaaaaaaaaaaaad, Chwak Bazar, Chittagong, Bangladesh', 1305, 1234, NULL),
(120, 31, 'kijjtyjhtyhyr', 'Dress & Frocks', 'Child', 'M', 1, 1304, 1234, 3, 'Taka', 'fizz', '2018-11-25', 'Home Delivary', '23435365464', 'aaaaaaaaaaaaaaaaaad, Chwak Bazar, Chittagong, Bangladesh', 1305, 1234, NULL),
(121, 31, 'kijjtyjhtyhyr', 'Dress & Frocks', 'Child', 'M', 1, 1304, 1234, 3, 'Taka', 'fizz', '2018-11-25', 'Home Delivary', '23435365464', 'aaaaaaaaaaaaaaaaaad, Chwak Bazar, Chittagong, Bangladesh', 1305, 1234, NULL),
(122, 31, 'kijjtyjhtyhyr', 'Dress & Frocks', 'Child', 'L', 2, 1304, 1234, 3, 'Taka', 'nobo', '2018-11-26', 'Home Delivary', '01840117914', 'Sector 7, Uttara, Dhaka, Bangladesh', 2609, 2468, NULL),
(123, 31, 'kijjtyjhtyhyr', 'Dress & Frocks', 'Child', 'XL', 2, 1304, 1234, 3, 'Taka', 'nobo', '2018-11-26', 'Home Delivary', '01840117914', 'Sector 7, Uttara, Dhaka, Bangladesh', 2609, 2468, NULL),
(124, 21, 'new panjabi', 'panjabi', 'Men', 'S', 4, 2125, 1000, 15, 'TK.', 'nobo', '2018-11-27', 'Home Delivary', '01840117914', 'Sector 7, Uttara, Dhaka, Bangladesh', 8500, 4000, NULL),
(125, 1, 'Full T-Shirt', 'T-Shirt', 'Men', 'XS', 5, 2000, 880, 0, 'taka', 'nobo', '2018-11-29', 'Home Delivary', '01840117914', 'Sector 7, Uttara, Dhaka, Bangladesh', 10000, 4320, NULL),
(126, 30, 'child cloth', 'Baby item', 'Child', 'XS', 4, 1439, 1455, 10, 'Taka', 'nobo', '2018-11-29', 'Home Delivary', '01840117914', 'Sector 7, Uttara, Dhaka, Bangladesh', 5756, 5820, NULL),
(127, 1, 'Full T-Shirt', 'T-Shirt', 'Men', 'XXL', 5, 1500, 880, 0, 'Taka', 'fizz', '2018-11-29', 'Home Delivary', '23435365464', 'aaaaaaaaaaaaaaaaaad, Chwak Bazar, Chittagong, Bangladesh', 7500, 4320, NULL),
(128, 30, 'child cloth', 'Baby item', 'Child', 'S', 3, 1439, 1455, 10, 'Taka', 'nobo', '2018-12-12', 'Home Delivary', '01840117914', 'Sector 7, Uttara, Dhaka, Bangladesh', 4317, 4365, NULL),
(129, 30, 'child cloth', 'Baby item', 'Child', 'L', 5, 1439, 1455, 10, 'Taka', 'nobo', '2018-12-12', 'Home Delivary', '01840117914', 'Sector 7, Uttara, Dhaka, Bangladesh', 7196, 7275, NULL),
(130, 4, 'Black Panjabi', 'Panjabi', 'Men', 'XXL', 1, 5000, 3500, 0, 'Taka', 'nobo', '2018-12-15', 'Home Delivary', '01840117914', 'Sector 7, Uttara, Dhaka, Bangladesh', 5000, 3500, NULL),
(131, 1, 'Full T-Shirt', 'T-Shirt', 'Men', 'S', 3, 880, 880, 0, 'Taka', 'mithun', '2018-12-16', 'Home Delivary', '01817991947', 'sector 7, Elephant Road, Dhaka, Bangladesh', 2640, 2640, NULL),
(132, 21, 'new panjabi', 'panjabi', 'Men', 'M', 3, 2125, 1000, 15, 'Taka', 'mithun', '2018-12-16', 'Home Delivary', '01817991947', 'sector 7, Elephant Road, Dhaka, Bangladesh', 6375, 3000, NULL),
(133, 1, 'Full T-Shirt', 'T-Shirt', 'Men', 'XS', 3, 880, 880, 0, 'Taka', 'mithun', '2018-12-16', 'Home Delivary', '01919-192949', 'sector 7, Elephant Road, Dhaka, Bangladesh', 2640, 2640, NULL),
(134, 21, 'new panjabi', 'panjabi', 'Men', 'L', 3, 2125, 1000, 15, 'Taka', 'mithun', '2018-12-16', 'Home Delivary', '01919-192949', 'sector 7, Elephant Road, Dhaka, Bangladesh', 6375, 3000, NULL),
(135, 1, 'Full T-Shirt', 'T-Shirt', 'Men', 'XS', 5, 880, 880, 0, 'Taka', 'alex', '2018-12-16', 'Home Delivary', '01818444666', 'xyz, Adabor, Dhaka, Bangladesh', 4400, 4400, NULL),
(136, 1, 'Full T-Shirt', 'T-Shirt', 'Men', 'XS', 1, 880, 880, 0, 'Taka', 'alex', '2018-12-16', 'Home Delivary', '01818444666', 'xyz, Adabor, Dhaka, Bangladesh', 880, 880, NULL),
(137, 1, 'Full T-Shirt', 'T-Shirt', 'Men', 'XXL', 1, 880, 880, 0, 'Taka', 'alex', '2018-12-16', 'Home Delivary', '01818444666', 'xyz, Adabor, Dhaka, Bangladesh', 880, 880, NULL),
(138, 30, 'child cloth', 'Baby item', 'Child', 'XS', 1, 1439, 1455, 10, 'Taka', 'alex', '2018-12-16', 'Home Delivary', '01818444666', 'xyz, Adabor, Dhaka, Bangladesh', 1439, 1455, NULL),
(139, 28, 'DGSFHF', 'SFHFGS', 'Men', 'S', 4, 1176, 1100, 2, 'Taka', 'alex', '2018-12-16', 'Home Delivary', '01818444666', 'xyz, Adabor, Dhaka, Bangladesh', 4704, 4400, NULL),
(140, 21, 'new panjabi', 'panjabi', 'Men', 'S', 5, 2125, 1000, 15, 'Taka', 'alex', '2018-12-16', 'Home Delivary', '01818444666', 'xyz, Adabor, Dhaka, Bangladesh', 10625, 5000, NULL),
(141, 21, 'new panjabi', 'panjabi', 'Men', 'M', 5, 2125, 1000, 15, 'Taka', 'alex', '2018-12-16', 'Home Delivary', '01818444666', 'xyz, Adabor, Dhaka, Bangladesh', 10625, 5000, NULL),
(142, 21, 'new panjabi', 'panjabi', 'Men', 'L', 5, 2125, 1000, 15, 'Taka', 'alex', '2018-12-16', 'Home Delivary', '01818444666', 'xyz, Adabor, Dhaka, Bangladesh', 10625, 5000, NULL),
(143, 1, 'Full T-Shirt', 'T-Shirt', 'Men', 'XXL', 2, 880, 880, 0, 'Taka', 'mash', '2018-12-16', 'Home Delivary', '0987654432', ', Other, Other, Other', 1760, 1760, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `ratings`
--

CREATE TABLE `ratings` (
  `rid` int(20) NOT NULL,
  `pid` int(20) NOT NULL,
  `pname` varchar(60) NOT NULL,
  `rating` double NOT NULL,
  `uid` int(20) NOT NULL,
  `username` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ratings`
--

INSERT INTO `ratings` (`rid`, `pid`, `pname`, `rating`, `uid`, `username`) VALUES
(1, 1, 'Full T-Shirt', 5, 2, 'nobo'),
(2, 1, 'Full T-Shirt', 1, 3, 'mzs'),
(3, 1, 'Full T-Shirt', 2, 4, 'munna'),
(4, 1, 'Full T-Shirt', 3, 7, 'Thor'),
(5, 1, 'Full T-Shirt', 5, 23, 'alex'),
(6, 10, 'csdfsdfsd', 4, 2, 'nobo'),
(7, 14, 'asdfdsf', 3, 2, 'nobo'),
(8, 19, 'ccrdxh', 1, 2, 'nobo'),
(9, 14, 'asdfdsf', 1, 3, 'mzs'),
(10, 14, 'asdfdsf', 5, 23, 'alex'),
(11, 2, 'Black Shari', 1, 23, 'alex'),
(12, 2, 'Black Shari', 2, 3, 'mzs'),
(13, 23, 'new pro', 3, 3, 'mzs'),
(14, 31, 'kijjtyjhtyhyr', 3, 2, 'nobo'),
(15, 21, 'new panjabi', 5, 2, 'nobo'),
(16, 30, 'child cloth', 3, 2, 'nobo'),
(17, 10, 'csdfsdfsd', 3, 11, 'fizz'),
(18, 2, 'Black Shari', 3, 2, 'nobo'),
(19, 3, 'Half T-Shirt', 1, 2, 'nobo'),
(20, 4, 'Black Panjabi', 5, 2, 'nobo');

-- --------------------------------------------------------

--
-- Table structure for table `soldouts`
--

CREATE TABLE `soldouts` (
  `soid` int(30) NOT NULL,
  `pid` int(30) NOT NULL,
  `pname` varchar(30) NOT NULL,
  `category` varchar(30) NOT NULL,
  `pfor` varchar(30) NOT NULL,
  `size` varchar(30) NOT NULL,
  `sold` int(30) NOT NULL,
  `xs_sold` int(30) DEFAULT NULL,
  `s_sold` int(30) DEFAULT NULL,
  `m_sold` int(30) DEFAULT NULL,
  `l_sold` int(30) DEFAULT NULL,
  `xl_sold` int(30) DEFAULT NULL,
  `xxl_sold` int(30) DEFAULT NULL,
  `rating` int(30) DEFAULT NULL,
  `price` int(30) NOT NULL,
  `currency` varchar(30) NOT NULL,
  `cost` int(30) NOT NULL,
  `offer` int(30) DEFAULT NULL,
  `profit` int(30) NOT NULL,
  `image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `soldouts`
--

INSERT INTO `soldouts` (`soid`, `pid`, `pname`, `category`, `pfor`, `size`, `sold`, `xs_sold`, `s_sold`, `m_sold`, `l_sold`, `xl_sold`, `xxl_sold`, `rating`, `price`, `currency`, `cost`, `offer`, `profit`, `image`) VALUES
(1, 26, 'lhjkfghdfs', 'T-Shirt', 'Men', 'XS', 6, 4, 2, NULL, NULL, NULL, NULL, NULL, 1176, 'Taka', 110, 2, 6396, NULL),
(2, 20, 'ashdagshf', 'vdasvgasg', 'Men', 'S', 10, NULL, 10, NULL, NULL, NULL, NULL, NULL, 900, 'Taka', 800, 10, 1000, NULL),
(3, 28, 'DGSFHF', 'SFHFGS', 'Men', 'XS', 14, 5, 9, NULL, NULL, NULL, NULL, NULL, 1176, 'Taka', 1100, 2, 836, NULL),
(5, 25, 'dxgxfgdgd', 'T-Shirt', 'Men', 'XS', 20, 2, 3, 4, 5, 6, NULL, NULL, 425, 'Taka', 300, 15, 2500, NULL),
(6, 24, 'gdfgdfgdsfdfg', 'T-Shirt', 'Men', 'S', 5, NULL, 2, 3, NULL, NULL, NULL, NULL, 800, 'Taka', 800, 20, 0, NULL),
(7, 23, 'new pro', 'jackets', 'Men', 'S', 5, NULL, 2, 3, NULL, NULL, NULL, NULL, 2250, 'Taka', 200, 10, 10250, NULL),
(8, 22, 'grown', 'night wear', 'Women', 'M', 5, NULL, NULL, 2, 3, NULL, NULL, NULL, 9925, 'Taka', 9098, 0, 4135, NULL),
(9, 30, 'child cloth', 'Baby item', 'Child', 'S', 25, 5, 5, 5, 5, 5, NULL, NULL, 1439, 'Taka', 1455, 10, -240, NULL),
(10, 21, 'new panjabi', 'panjabi', 'Men', 'M', 35, NULL, 9, 13, 8, 5, NULL, NULL, 2125, 'Taka', 1000, 15, 9000, NULL),
(11, 31, 'kijjtyjhtyhyr', 'Dress & Frocks', 'Child', 'M', 7, NULL, NULL, 3, 2, 2, NULL, NULL, 1304, 'Taka', 1234, 3, 350, NULL),
(12, 1, 'Full T-Shirt', 'T-Shirt', 'Men', 'XS', 20, 14, 3, NULL, NULL, NULL, 3, NULL, 880, 'Taka', 880, 0, 620, NULL),
(13, 4, 'Black Panjabi', 'Panjabi', 'Men', 'XXL', 1, NULL, NULL, NULL, NULL, NULL, 1, NULL, 5000, 'Taka', 3500, 0, 1500, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `gender` varchar(30) NOT NULL,
  `dob` varchar(30) DEFAULT NULL,
  `phonenumber` varchar(30) DEFAULT NULL,
  `country` varchar(30) DEFAULT NULL,
  `city` varchar(30) DEFAULT NULL,
  `area` varchar(30) DEFAULT NULL,
  `address` varchar(30) DEFAULT NULL,
  `profilepic` varchar(255) DEFAULT NULL,
  `accounttype` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `firstname`, `lastname`, `email`, `password`, `gender`, `dob`, `phonenumber`, `country`, `city`, `area`, `address`, `profilepic`, `accounttype`) VALUES
(1, 'mzsmunna', 'mamunuz', 'zaman', 'mzs.munna@gmail.com', '12345', 'Male', '1996-01-28', '01744692979', 'Bangladesh', 'Dhaka', 'Uttara', 'Dakkhin Chalabon', 'mzsmunna.jpg', 'Admin'),
(2, 'nobo', 'nabaranjan', 'niloy', 'noboranjan@gmail.com', '123456', 'Male', '1995-01-13', '01840117914', 'Bangladesh', 'Dhaka', 'Uttara', 'Sector 7', NULL, 'User'),
(3, 'mzs', 'mzs', 'munna', 'mzs.munna@outlook.com', '123', 'Male', '1995-01-28', '01744697929', 'Bangladesh', 'Dhaka', 'Uttara Khan', 'xyz', 'mzs.jpg', 'User'),
(4, 'munna', 'Mzsmunna', 'ffjgikyug', 'mzs.aiub@gmail.com', '123', 'Male', '2018-10-06', '01744682878', 'Bangladesh', 'Dhaka', 'Banani', 'jgchds', '', 'User'),
(5, 'sakib', 'sakib', 'hasan', 'sakib@gmail.com', '1234', 'male', '2018-10-01', '0176586755345', 'Bangladesh', 'Chittagong', 'Agrabad', 'gjfdsdgas', '', 'User'),
(6, 'tamim', 'tamim', 'iqbal', 'tamim@gmail.com', '12345', 'male', '2018-10-14', '017446929798', 'Bangladesh', 'Chittagong', 'Muradpur', 'dgghfggj', '', 'User'),
(7, 'Thor', 'thor', 'thunder', 'thor@gmail.com', '1234', 'male', '2018-10-24', '12345678', 'Bangladesh', 'Chittagong', 'Kazi Dewan Bari', 'ogikyuftyd', '', 'User'),
(8, 'mushi', 'mushfiqur', 'rahim', 'mushi@gmail.com', '1234', 'male', '2018-10-21', '0174498785654', 'Bangladesh', 'Chittagong', 'Khulshi', 'hkhgtrfytr', '', 'User'),
(9, 'mash', 'mash', 'rafi', 'mash@gmail.com', '12345', 'male', '1985-05-29', '0987654432', 'Other', 'Other', 'Other', '', '', 'User'),
(10, 'imrul', 'imrul', 'kayes', 'imrul@gmail.com', '1234', 'male', '2018-10-14', '0987654345678', 'Bangladesh', 'Chittagong', 'Muradpur', '', '', 'User'),
(11, 'fizz', 'mustafizur', 'rahman', 'fizz@gmail.com', '12345', 'male', '1997-03-18', '23435365464', 'Bangladesh', 'Chittagong', 'Chwak Bazar', 'aaaaaaaaaaaaaaaaaad', '', 'User'),
(13, 'dfdsg', 'gdgdfg', 'fgfdgdg', 'xyz@gmail.com', '123', 'male', '', '23435646757', 'Other', 'Other', 'Other', '', '', 'User'),
(14, 'liton', 'liton', 'dash', 'liton@gmail.com', '1234', 'male', '', '565453542', 'Other', 'Other', 'Other', '', '', 'User'),
(15, 'mehedi', 'mehedi', 'meraz', 'mehedi@gmail.com', '123', 'male', '2018-10-08', '01744111000', 'Other', 'Other', 'Other', '', '', 'User'),
(16, 'mular', 'mular', 'mzs', 'mular@gmail.com', '123', 'male', '', '876755443532', 'Other', 'Other', 'Other', '', '', 'User'),
(20, 'toto', 'toto', 'toto', 'toto@gmail.com', '4321', 'male', '', '8329473341', 'Other', 'Other', 'Other', '', '', 'User'),
(21, 'niloy', 'nabaranjan', 'niloy', 'niloy@gmail.com', '123', 'male', '', '07988765323', 'Other', 'Other', 'Other', '', '', 'Admin'),
(22, 'moni', 'moniruzzaman', 'sarker', 'moni@gmail.com', 'moni', 'male', '', '232432732326', 'Bangladesh', 'Dhaka', 'Uttara Khan', 'gkggfyu', '', 'User'),
(23, 'alex', 'alex', 'hales', 'alex@gmail.com', '1234', 'male', '2018-11-13', '01818444666', 'Bangladesh', 'Dhaka', 'Adabor', 'xyz', NULL, 'User'),
(34, 'kabbo', 'sfsdfs', 'sdgsdgsd', 'sdfsdg@sdffs.co', '123', 'male', NULL, NULL, 'Other', 'Other', 'Other', NULL, 'kabbo.png', 'User'),
(35, 'mahi', 'mazeda', 'mahi', 'mahi@gmail.com', '1234', 'female', '2018-11-12', '12345678', 'Bangladesh', 'Dhaka', 'Utttara', 'hdnfdgd', NULL, 'User'),
(36, 'thomas', 'vhst', 'hfdtrd', 'tdyess@vghjh.com', '123456', 'male', '2018-11-14', '8908975645', 'Bangladesh', 'Barishal', 'Mehendiganj', 'gvctydtfg', NULL, 'User'),
(37, 'CFGFGD', 'FSFDS', 'SFSDF', 'sdsfsfds@fgdgd.com', '123', 'male', NULL, NULL, 'Bangladesh', 'Barishal', 'Other', 'hdnfdgd', NULL, 'User'),
(38, 'dfdgdf', 'dsgddfg', 'dsgdsg', 'fdgdhdh@ddfxg.com', '123', 'female', '2018-11-20', '2132444566', 'Bangladesh', 'Dhaka', 'Elephant Road', 'sdsfdfs', NULL, 'User'),
(39, 'khgjghgfh', 'dfdgdg', 'dfgdfgd', 'sdfsfds@vdhvd.com', '123', 'male', NULL, '24235435', 'Bangladesh', 'Rajshahi', 'Not Available', 'hdnfdgd', NULL, 'User'),
(40, 'sfddfg', 'gdfd', 'gdfgdfdg', 'fgdgdg@sfdd.com', '1234', 'male', NULL, '123456789', 'Bangladesh', 'Chittagong', 'Nasirabad Housing Society', 'hdnfdgd', NULL, 'User'),
(41, 'lkghgfh', 'gdfgdfg', 'dfgsdsf', 'dfdsgf@ddfgdfh.com', '1234', 'male', NULL, '123456778', 'Bangladesh', 'Rajshahi', 'Not Available', 'hdnfdgd', NULL, 'User'),
(42, 'mithun', 'mohammad', 'mithun', 'mithun@gmail.com', '123', 'male', '2018-12-15', NULL, 'Bangladesh', 'Dhaka', 'Elephant Road', 'sector 7', 'mithun.jpg', 'User');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`aid`),
  ADD UNIQUE KEY `admin_name` (`admin_name`),
  ADD UNIQUE KEY `admin_email` (`admin_email`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cgid`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`cmntid`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`cus_id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`cid`),
  ADD UNIQUE KEY `customer_name` (`customer_name`),
  ADD UNIQUE KEY `customer_email` (`customer_email`);

--
-- Indexes for table `favorites`
--
ALTER TABLE `favorites`
  ADD PRIMARY KEY (`fid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`nid`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`pid`),
  ADD UNIQUE KEY `pname` (`pname`);

--
-- Indexes for table `purchases`
--
ALTER TABLE `purchases`
  ADD PRIMARY KEY (`prid`);

--
-- Indexes for table `ratings`
--
ALTER TABLE `ratings`
  ADD PRIMARY KEY (`rid`);

--
-- Indexes for table `soldouts`
--
ALTER TABLE `soldouts`
  ADD PRIMARY KEY (`soid`),
  ADD UNIQUE KEY `pname` (`pname`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `aid` int(30) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cgid` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `cmntid` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `cus_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `cid` int(30) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `favorites`
--
ALTER TABLE `favorites`
  MODIFY `fid` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT for table `notifications`
--
ALTER TABLE `notifications`
  MODIFY `nid` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=89;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `pid` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `purchases`
--
ALTER TABLE `purchases`
  MODIFY `prid` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=144;

--
-- AUTO_INCREMENT for table `ratings`
--
ALTER TABLE `ratings`
  MODIFY `rid` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `soldouts`
--
ALTER TABLE `soldouts`
  MODIFY `soid` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
