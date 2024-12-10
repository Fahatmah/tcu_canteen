-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 08, 2024 at 07:27 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tcu_canteen`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_us`
--

CREATE TABLE `about_us` (
  `about_id` int(10) NOT NULL,
  `about_heading` text NOT NULL,
  `about_short_desc` text NOT NULL,
  `about_desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `about_us`
--

INSERT INTO `about_us` (`about_id`, `about_heading`, `about_short_desc`, `about_desc`) VALUES
(1, 'About Us', 'We take pride in offering a diverse menu that caters to a variety of tastes and dietary preferences. From comfort food classics to healthy options, there’s something for everyone at the University Canteen. Join us in our cozy, welcoming environment and let us make your day a little more delicious!', 'At the University Canteen, we believe that good food fuels great minds. Our mission is to offer students, faculty, and staff delicious, nutritious meals that are affordable and convenient. Whether you\'re grabbing a quick snack between classes or enjoying a hearty meal with friends, we’re here to serve fresh, locally-sourced dishes made with love.');

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `admin_id` int(10) NOT NULL,
  `admin_name` varchar(255) NOT NULL,
  `admin_email` varchar(255) NOT NULL,
  `admin_pass` varchar(255) NOT NULL,
  `admin_image` text NOT NULL,
  `admin_contact` varchar(255) NOT NULL,
  `admin_job` varchar(255) NOT NULL,
  `admin_about` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`admin_id`, `admin_name`, `admin_email`, `admin_pass`, `admin_image`, `admin_contact`, `admin_job`, `admin_about`) VALUES
(2, 'Administrator', 'admin@gmail.com', 'Password@123', 'user-profile-min.png', '09123456789', 'Front-End Developer', 'The admin that manages this system  ');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `p_id` int(10) NOT NULL,
  `ip_add` varchar(255) NOT NULL,
  `p_name` varchar(255) NOT NULL,
  `qty` int(10) NOT NULL,
  `p_price` varchar(255) NOT NULL,
  `p_manufacturer` int(11) NOT NULL,
  `size` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `cat_id` int(10) NOT NULL,
  `cat_title` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_title`) VALUES
(2, 'Snack Foods'),
(3, 'Comfort Foods'),
(4, 'Fried Foods'),
(5, 'Beverages');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `contact_id` int(10) NOT NULL,
  `contact_email` text NOT NULL,
  `contact_heading` text NOT NULL,
  `contact_desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`contact_id`, `contact_email`, `contact_heading`, `contact_desc`) VALUES
(1, 'tcucanteen@gmail.com', 'Contact Us', 'Feel free to inquire concerns with us if you may have.');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `customer_id` int(10) NOT NULL,
  `customer_name` varchar(255) NOT NULL,
  `customer_email` varchar(255) NOT NULL,
  `customer_stno` varchar(11) NOT NULL,
  `customer_pass` varchar(255) NOT NULL,
  `customer_contact` varchar(255) NOT NULL,
  `customer_image` text NOT NULL,
  `customer_ip` varchar(255) NOT NULL,
  `customer_confirm_code` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`customer_id`, `customer_name`, `customer_email`, `customer_stno`, `customer_pass`, `customer_contact`, `customer_image`, `customer_ip`, `customer_confirm_code`) VALUES
(1, 'test', 'test@gmail.com', '0', '$2y$10$iHlSc/GhizMU024hT5EE2OyrIl8dzhvzYgHdsYOwsBbQf8zOKudt6', '09412412421', 'default_image.png', '::1', ''),
(2, 'test', 'testing@gmail.com', '', '$2y$10$nowAMrUroNF85JGg.IhV0Ozo3d7Ds6VelRyY6MpdYJWUT91fOEIXW', '09414141414', 'default_image.png', '::1', ''),
(3, 'test3', 'test3@gmail.com', '21-00528', '$2y$10$t65OZLXhQA1o2ASnBZNc5uQqSssXvC06FyjfahlT.JNydqZ14sIVi', '09414141213', 'default_image.png', '::1', ''),
(4, 'test4', 'test4@gmail.com', '21-00569', '$2y$10$yqpTGTCu6jSKMTRUfdYJ.en7ZhfOCucivsIUgbhE4MOunADmtRuMG', '09414141313', 'default_image.png', '::1', ''),
(5, 'Delg John', 'delg@gmail.com', '21-00468', '$2y$10$K4QpqU468dsKdAAQeS.JF.u7C76qLBCOQL4WJHyK5OMrNN6RIK6dK', '09569987959', 'default_image.png', '::1', ''),
(6, 'rich', 'richmondvivas@gmail.com', '21-05055', '$2y$10$9oraFwJug6CzyxAX4fNlLeWqLhjknG87yL1suVuFNbdzQ3LGjH/vC', '09649567489', 'default_image.png', '::1', ''),
(7, 'rich', 'rich@gmail.com', '21-05056', '$2y$10$oIwQQ6TS9MC8eVjPiM75neWxu.uqUyjMJASuHBzYxXqJUjnLGnJXy', '09845654555', 'default_image.png', '::1', '');

-- --------------------------------------------------------

--
-- Table structure for table `customer_orders`
--

CREATE TABLE `customer_orders` (
  `order_id` int(10) NOT NULL,
  `customer_id` int(10) NOT NULL,
  `order_name` varchar(255) NOT NULL,
  `due_amount` int(100) NOT NULL,
  `invoice_no` int(100) NOT NULL,
  `qty` int(10) NOT NULL,
  `manufacturer_id` int(11) NOT NULL,
  `size` text NOT NULL,
  `order_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `order_status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `customer_orders`
--

INSERT INTO `customer_orders` (`order_id`, `customer_id`, `order_name`, `due_amount`, `invoice_no`, `qty`, `manufacturer_id`, `size`, `order_date`, `order_status`) VALUES
(1, 3, 'Shake', 25, 729790513, 1, 10, '', '2024-12-06 01:20:49', 'Complete'),
(2, 3, 'Spaghetti and Meatballs', 150, 1864348403, 3, 9, '', '2024-12-06 04:04:35', 'Complete'),
(3, 6, 'Porksilog', 110, 110127192, 2, 13, '', '2024-12-07 16:53:42', 'Complete'),
(4, 7, 'Pork Sisig with Rice', 70, 347457345, 1, 18, '', '2024-12-08 05:27:28', 'Complete');

-- --------------------------------------------------------

--
-- Table structure for table `enquiry_types`
--

CREATE TABLE `enquiry_types` (
  `enquiry_id` int(10) NOT NULL,
  `enquiry_title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `enquiry_types`
--

INSERT INTO `enquiry_types` (`enquiry_id`, `enquiry_title`) VALUES
(1, 'Order Support'),
(2, 'Technical Support'),
(3, 'Price Concern');

-- --------------------------------------------------------

--
-- Table structure for table `manufacturers`
--

CREATE TABLE `manufacturers` (
  `manufacturer_id` int(10) NOT NULL,
  `manufacturer_title` text NOT NULL,
  `contact` bigint(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `manufacturers`
--

INSERT INTO `manufacturers` (`manufacturer_id`, `manufacturer_title`, `contact`) VALUES
(13, 'Stall Silog Meals', 9171575419),
(14, 'Stall Dim Sum', 9171575419),
(15, 'Stall Mi Mart', 9171575419),
(16, 'Stall MyPie', 9171575419),
(18, 'Stall Bowls and Buns', 9171575419);

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `payment_id` int(10) NOT NULL,
  `invoice_no` bigint(10) NOT NULL,
  `order_name` varchar(255) NOT NULL,
  `amount` bigint(10) NOT NULL,
  `payment_mode` text NOT NULL,
  `payment_date` datetime NOT NULL DEFAULT current_timestamp(),
  `stall_no` varchar(255) NOT NULL,
  `stall_gcash_no` bigint(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`payment_id`, `invoice_no`, `order_name`, `amount`, `payment_mode`, `payment_date`, `stall_no`, `stall_gcash_no`) VALUES
(1, 729790513, 'Shake', 25, 'CASH', '2024-12-06 00:00:00', 'Stall 7', 9144556677),
(2, 1864348403, 'Spaghetti and Meatballs', 150, 'PICK-UP', '2024-12-06 00:00:00', 'Stall 6', 9111223344),
(3, 110127192, 'Porksilog', 110, 'PICK-UP', '2024-12-07 00:00:00', 'Stall Silog Meals', 9171575419),
(4, 347457345, 'Pork Sisig with Rice', 70, 'PICK-UP', '2024-12-08 00:00:00', 'Stall Bowls and Buns', 9171575419);

-- --------------------------------------------------------

--
-- Table structure for table `pending_orders`
--

CREATE TABLE `pending_orders` (
  `order_id` int(10) NOT NULL,
  `customer_id` int(10) NOT NULL,
  `invoice_no` int(10) NOT NULL,
  `product_id` text NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `qty` int(10) NOT NULL,
  `manufacturer_id` int(11) NOT NULL,
  `size` text NOT NULL,
  `order_status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `pending_orders`
--

INSERT INTO `pending_orders` (`order_id`, `customer_id`, `invoice_no`, `product_id`, `product_name`, `qty`, `manufacturer_id`, `size`, `order_status`) VALUES
(1, 3, 729790513, '22', 'Shake', 1, 10, '', 'Complete'),
(2, 3, 1864348403, '24', 'Spaghetti and Meatballs', 3, 9, '', 'Complete'),
(3, 6, 110127192, '25', 'Porksilog', 2, 13, '', 'Complete'),
(4, 7, 347457345, '51', 'Pork Sisig with Rice', 1, 18, '', 'Complete');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(10) NOT NULL,
  `p_cat_id` int(10) NOT NULL,
  `cat_id` int(10) NOT NULL,
  `manufacturer_id` int(10) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `product_title` text NOT NULL,
  `product_url` text NOT NULL,
  `product_img1` text NOT NULL,
  `product_img2` text NOT NULL,
  `product_img3` text NOT NULL,
  `product_price` int(10) NOT NULL,
  `product_psp_price` int(100) NOT NULL,
  `product_desc` text NOT NULL,
  `product_keywords` text NOT NULL,
  `product_label` text NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `p_cat_id`, `cat_id`, `manufacturer_id`, `date`, `product_title`, `product_url`, `product_img1`, `product_img2`, `product_img3`, `product_price`, `product_psp_price`, `product_desc`, `product_keywords`, `product_label`, `status`) VALUES
(25, 1, 3, 13, '2024-12-07 11:35:15', 'Porksilog', 'Porksilog', 'porksilog.jpg', 'porksilog2.jpg', 'porksilog3.jpg', 55, 0, 'Pork with rice and egg', 'Silog Meals', 'Silog Meals', 'product'),
(26, 1, 3, 13, '2024-12-07 11:39:47', 'Chicsilog', 'Chicsilog', 'chicksilog.jpg', 'chicsilog2.jpeg', 'chicsilog3.jpg', 55, 0, 'Chicken with rice and egg', 'Chicsilog', 'Silog Meals', 'product'),
(27, 1, 3, 13, '2024-12-07 11:43:13', 'Hungsilog', 'Hungsilog', 'hungsilog.jpeg', 'hungsilog2.jpg', 'hungsilog3.jpeg', 55, 0, 'Hungarian hotdog with rice and egg', 'Hungsilog', 'Silog Meals', 'product'),
(28, 1, 3, 13, '2024-12-07 11:47:46', 'Shangsilog', 'Shangsilog', 'Shangsilog.jpeg', 'shangsilog2.jpg', 'shangsilog3.jpg', 55, 0, 'Shanghai with rice and egg', 'Shangsilog', 'Silog Meals', 'product'),
(29, 1, 3, 13, '2024-12-07 11:52:55', 'Longsilog', 'Longsilog', 'longsilog.jpg', 'longsilog-2.jpg', 'longsilog3.jpg', 55, 0, 'Longganisa with rice and egg', 'Longsilog', 'Silog Meals', 'product'),
(30, 1, 3, 13, '2024-12-07 11:55:27', 'Bangsilog', 'Bangsilog', 'bangsilog.jpeg', 'bangsilog2.jpg', 'bangsilog3.jpeg', 55, 0, 'Bangus with rice and egg', 'Bangsilog', 'Silog Meals', 'product'),
(31, 1, 3, 13, '2024-12-07 11:57:34', 'Spamsilog', 'Spamsilog', 'spamsilog.jpg', 'spamsilog2.jpeg', 'spamsilog3.jpg', 55, 0, 'Spam with rice and egg', 'Spamsilog', 'Silog Meals', 'product'),
(32, 1, 2, 14, '2024-12-07 12:04:35', 'Big Siomai', 'BigSiomai', 'big siomai.jpeg', 'big siomai.jpeg', 'big siomai.jpeg', 50, 0, 'Big Siomai - ?50 for 4 pcs', 'Big Siomai', 'Dim Sum', 'product'),
(33, 1, 2, 14, '2024-12-07 13:09:47', 'Siomai', 'Siomai', 'siomai.jpg', 'siomai2.jpg', 'siomai3.jpeg', 30, 0, 'Siomai 4 pcs', 'Siomai', 'Dim Sum', 'product'),
(34, 1, 2, 14, '2024-12-07 13:18:04', 'Sharksfin', 'Sharksfin', 'sharksfin.jpg', 'sharksfin2.jpg', 'sharksfin3.jpeg', 30, 0, 'Sharksfin 4 pcs', 'Sharksfin', 'Dim Sum', 'product'),
(35, 1, 2, 14, '2024-12-07 13:32:11', 'Siopao', 'Siopao', 'siopao.jpg', 'siopao2.jpg', 'siopao3.jpg', 15, 0, 'Pork Siopao', '-', 'Dim Sum', 'product'),
(36, 1, 5, 14, '2024-12-07 13:32:07', 'Lemon Iced Tea', 'LemonIcedTea', 'lemonicedtea.jpg', 'lemonicedtea.jpg', 'lemonicedtea.jpg', 20, 0, 'Ice cold Lemon Iced Tea', 'Lemon Iced Tea', 'Dim Sum', 'product'),
(37, 1, 5, 14, '2024-12-07 13:31:49', 'Pomelo Juice', 'PomeloJuice', 'pomelo juice.jpeg', 'pomelo juice.jpeg', 'pomelo juice.jpeg', 20, 0, 'Ice cold Pomelo Juice', 'Pomelo Juice', 'Dim Sum', 'product'),
(38, 1, 2, 14, '2024-12-07 13:31:37', 'Sweet Corn', 'Sweetcorn', 'sweetcorn.jpg', 'sweetcorn.jpg', 'sweetcorn.jpg', 25, 0, 'Yummy Sweet Corn', 'Sweet Corn', 'Dim Sum', 'product'),
(39, 1, 5, 15, '2024-12-07 13:41:25', 'Mango Shake', 'mangoshake', 'mangoshake.jpeg', 'mangoshake.jpeg', 'mangoshake.jpeg', 55, 0, 'Fresh and cold mango shake', '-', 'Mi Mart', 'product'),
(40, 1, 5, 15, '2024-12-07 13:43:50', 'Papaya Shake ', 'papayashake', 'papayashake.jpg', 'papayashake.jpg', 'papayashake.jpg', 55, 0, 'Fresh and cold papaya shake', '-', 'Mi Mart', 'product'),
(41, 1, 5, 15, '2024-12-07 13:52:50', 'Avocado Milk Shake', 'avocadomilkshake', 'avocado.jpg', 'avocado.jpg', 'avocado.jpg', 45, 0, 'Fresh and Avocado milk shake', 'Avocado Milk Shake', 'Mi mart', 'product'),
(42, 1, 5, 15, '2024-12-07 13:53:58', 'Mango Milk Shake', 'MangoMilkShake', 'mangomilk.jpg', 'mangomilk.jpg', 'mangomilk.jpg', 45, 0, 'Fresh and cold Mango Milk Shake', 'Mango Milk Shake', 'Mi Mart', 'product'),
(43, 1, 5, 15, '2024-12-07 13:54:50', 'Cookies n Cream Milk Shake', 'cookiesandcream', 'cookiesncream.jpeg', 'cookiesncream.jpeg', 'cookiesncream.jpeg', 45, 0, 'Fresh and cold Cookies n Cream Milk Shake', 'Cookies n Cream Milk Shake', 'Mi Mart', 'product'),
(44, 1, 4, 16, '2024-12-07 14:17:29', 'Plain French Fries', 'fries', 'fries.jpg', 'fries.jpg', 'fries.jpg', 30, 0, 'Freshly cooked French Fries - Available Flavors: Barbecue, Cheese, Sour Cream', 'French Fries', 'MyPie', 'product'),
(45, 1, 2, 16, '2024-12-07 14:23:14', 'Mojos Potatoes', 'mojos', 'mojos.jpg', 'mojos.jpg', 'mojos.jpg', 40, 0, 'Freshly cooked mojos ', 'Mojos ', 'MyPie', 'product'),
(46, 1, 2, 16, '2024-12-07 14:25:32', 'Pancake', 'pancake', 'pancake.jpg', 'pancake.jpg', 'pancake.jpg', 10, 0, 'Freshly cooked pancake', '-', 'MyPie', 'product'),
(47, 1, 3, 18, '2024-12-07 14:35:46', 'Cheese Burger', 'cheeseburger', 'cheeseburger.jpg', 'cheeseburger2.jpg', 'cheeseburger3.jpg', 40, 0, 'A cheeseburger is a beef patty topped with melted cheese, served in a bun. It\'s a classic and popular comfort food.', 'Cheese Burger', 'Bowls&Buns', 'product'),
(48, 1, 3, 18, '2024-12-07 14:37:53', 'Ham n\' Cheese', 'hamncheese', 'hamandcheese.jpeg', 'hamandcheese2.png', 'hamandcheese3.jpg', 40, 0, 'A ham and cheese sandwich typically consists of slices of ham and cheese, placed between two pieces of bread. It’s a simple, savory meal enjoyed cold or toasted.', '-', 'Bowls&Buns', 'product'),
(49, 1, 3, 18, '2024-12-07 14:40:44', 'Hungarian Sandwich', 'hungsand', 'hungsand.jpeg', 'hungsand2.jpeg', 'hungsand3.webp', 45, 0, 'A Hungarian sandwich features hearty ingredients like smoked sausage between slices of crusty bread. It reflects Hungary\'s rich culinary tradition of bold, flavorful combinations.', '-', 'Bowls&Buns', 'product'),
(50, 1, 3, 18, '2024-12-07 14:43:47', 'Spam & Cheese Burger', 'spam', 'spamburger2.jpg', 'spamburger3.jpg', 'spamburger.jpg', 40, 0, 'A Spam and cheese burger combines a grilled or fried slice of Spam with melted cheese, served on a burger bun. This unique twist on the classic cheeseburger offers a savory, salty flavor from the Spam, paired with the creamy richness of cheese.', '-', 'Bowls&Buns', 'product'),
(51, 1, 3, 18, '2024-12-07 14:46:38', 'Pork Sisig with Rice', 'sisig', 'sisig.jpg', 'sisig2.jpeg', 'sisig3.jpg', 70, 0, 'Pork sisig with rice is a dish made from finely chopped, seasoned pork (usually from the face or ears), sautéed with onions, chili, and various seasonings, often served sizzling. It’s typically enjoyed with a side of steamed rice for a flavorful, savory meal.', '-', 'Bowls&Buns', 'product');

-- --------------------------------------------------------

--
-- Table structure for table `product_categories`
--

CREATE TABLE `product_categories` (
  `p_cat_id` int(10) NOT NULL,
  `p_cat_title` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `product_categories`
--

INSERT INTO `product_categories` (`p_cat_id`, `p_cat_title`) VALUES
(1, 'Canteen');

-- --------------------------------------------------------

--
-- Table structure for table `store`
--

CREATE TABLE `store` (
  `store_id` int(10) NOT NULL,
  `store_title` varchar(255) NOT NULL,
  `store_image` varchar(255) NOT NULL,
  `store_desc` text NOT NULL,
  `store_button` varchar(255) NOT NULL,
  `store_url` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `terms`
--

CREATE TABLE `terms` (
  `term_id` int(10) NOT NULL,
  `term_title` varchar(100) NOT NULL,
  `term_link` varchar(100) NOT NULL,
  `term_desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `terms`
--

INSERT INTO `terms` (`term_id`, `term_title`, `term_link`, `term_desc`) VALUES
(1, 'Rules And Regulations', 'rules', '<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance.&nbsp;</p>'),
(2, 'Refund Policy', 'link2', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).Why do we use it?It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on'),
(3, 'Pricing and Promotions Policy', 'link3', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).Why do we use it?It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on');

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

CREATE TABLE `wishlist` (
  `wishlist_id` int(10) NOT NULL,
  `customer_id` int(10) NOT NULL,
  `product_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about_us`
--
ALTER TABLE `about_us`
  ADD PRIMARY KEY (`about_id`);

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`contact_id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `customer_orders`
--
ALTER TABLE `customer_orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `enquiry_types`
--
ALTER TABLE `enquiry_types`
  ADD PRIMARY KEY (`enquiry_id`);

--
-- Indexes for table `manufacturers`
--
ALTER TABLE `manufacturers`
  ADD PRIMARY KEY (`manufacturer_id`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`payment_id`);

--
-- Indexes for table `pending_orders`
--
ALTER TABLE `pending_orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `product_categories`
--
ALTER TABLE `product_categories`
  ADD PRIMARY KEY (`p_cat_id`);

--
-- Indexes for table `store`
--
ALTER TABLE `store`
  ADD PRIMARY KEY (`store_id`);

--
-- Indexes for table `terms`
--
ALTER TABLE `terms`
  ADD PRIMARY KEY (`term_id`);

--
-- Indexes for table `wishlist`
--
ALTER TABLE `wishlist`
  ADD PRIMARY KEY (`wishlist_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about_us`
--
ALTER TABLE `about_us`
  MODIFY `about_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `admin_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `contact_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `customer_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `customer_orders`
--
ALTER TABLE `customer_orders`
  MODIFY `order_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `enquiry_types`
--
ALTER TABLE `enquiry_types`
  MODIFY `enquiry_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `manufacturers`
--
ALTER TABLE `manufacturers`
  MODIFY `manufacturer_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `payment_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `pending_orders`
--
ALTER TABLE `pending_orders`
  MODIFY `order_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `product_categories`
--
ALTER TABLE `product_categories`
  MODIFY `p_cat_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `store`
--
ALTER TABLE `store`
  MODIFY `store_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `terms`
--
ALTER TABLE `terms`
  MODIFY `term_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `wishlist`
--
ALTER TABLE `wishlist`
  MODIFY `wishlist_id` int(10) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
