-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 24, 2023 at 03:35 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `omos_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart_list`
--

CREATE TABLE `cart_list` (
  `id` int(30) NOT NULL,
  `customer_id` int(30) NOT NULL,
  `product_id` int(30) NOT NULL,
  `quantity` int(30) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `category_list`
--

CREATE TABLE `category_list` (
  `id` int(30) NOT NULL,
  `name` text NOT NULL,
  `description` text NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `delete_flag` tinyint(1) NOT NULL DEFAULT 0,
  `date_created` datetime NOT NULL DEFAULT current_timestamp(),
  `date_updated` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category_list`
--

INSERT INTO `category_list` (`id`, `name`, `description`, `status`, `delete_flag`, `date_created`, `date_updated`) VALUES
(1, 'Tablet', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque nisl neque, tincidunt eu imperdiet eget, fringilla ut magna. Fusce in auctor nisl, a efficitur nisi. Vestibulum venenatis velit pharetra mauris dictum ultrices quis et quam. Donec sollicitudin condimentum lectus, vel convallis ipsum sodales id.', 1, 0, '2022-05-25 10:14:16', '2022-05-25 10:16:27'),
(2, 'Capsule', 'Suspendisse accumsan mollis quam. Etiam ut dolor felis. Proin maximus eros tortor, et condimentum massa mollis nec. Fusce gravida posuere purus et tempor. Phasellus commodo auctor justo, tempus pellentesque nunc condimentum id.', 1, 0, '2022-05-25 10:16:05', '2022-05-25 10:16:05'),
(3, 'Syrup', 'Sample category 101', 1, 0, '2022-05-26 10:57:14', '2022-05-26 10:57:14'),
(4, 'Test 123 - updated', 'Sample Only', 1, 1, '2022-05-26 10:57:31', '2022-05-26 10:58:45'),
(5, 'sy', 'svv', 1, 1, '2023-07-24 18:32:28', '2023-07-24 18:33:45');

-- --------------------------------------------------------

--
-- Table structure for table `customer_list`
--

CREATE TABLE `customer_list` (
  `id` int(30) NOT NULL,
  `firstname` text NOT NULL,
  `middlename` text DEFAULT NULL,
  `lastname` text DEFAULT NULL,
  `gender` varchar(100) DEFAULT NULL,
  `contact` text NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL,
  `avatar` text DEFAULT NULL,
  `date_created` datetime NOT NULL DEFAULT current_timestamp(),
  `date_updated` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer_list`
--

INSERT INTO `customer_list` (`id`, `firstname`, `middlename`, `lastname`, `gender`, `contact`, `email`, `password`, `avatar`, `date_created`, `date_updated`) VALUES
(21, 'Mohan Sahu', '', '', 'Male', '09617660067', 'msahu3623@gmail.com', 'c4ca4238a0b923820dcc509a6f75849b', NULL, '2023-07-19 15:40:39', '2023-07-22 01:33:17'),
(22, 'Mohan Sahu', NULL, NULL, 'Male', '9617660067', 'msahu@gmail.com', 'c4ca4238a0b923820dcc509a6f75849b', NULL, '2023-07-24 16:17:10', '2023-07-24 16:17:10');

-- --------------------------------------------------------

--
-- Table structure for table `order_items`
--

CREATE TABLE `order_items` (
  `order_id` int(30) NOT NULL,
  `product_id` int(30) NOT NULL,
  `quantity` int(30) NOT NULL DEFAULT 0,
  `price` float(12,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order_items`
--

INSERT INTO `order_items` (`order_id`, `product_id`, `quantity`, `price`) VALUES
(13, 30, 1, 15.00);

-- --------------------------------------------------------

--
-- Table structure for table `order_list`
--

CREATE TABLE `order_list` (
  `id` int(30) NOT NULL,
  `code` varchar(100) NOT NULL,
  `customer_id` int(30) NOT NULL,
  `delivery_address` text NOT NULL,
  `total_amount` float(12,2) NOT NULL DEFAULT 0.00,
  `status` tinyint(1) NOT NULL DEFAULT 0 COMMENT '0=pending,\r\n1=packed,\r\n2=out for delivery,\r\n3=paid\r\n',
  `date_created` datetime NOT NULL DEFAULT current_timestamp(),
  `date_updated` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order_list`
--

INSERT INTO `order_list` (`id`, `code`, `customer_id`, `delivery_address`, `total_amount`, `status`, `date_created`, `date_updated`) VALUES
(6, '2023072000001', 21, 'abc', 40.00, 3, '2023-07-20 01:14:25', '2023-07-23 11:48:19'),
(7, '2023072000002', 21, 'abc', 40.00, 2, '2023-07-20 01:29:37', '2023-07-20 01:54:28'),
(8, '2023072000003', 21, 'abc', 20.00, 1, '2023-07-20 01:37:38', '2023-07-20 01:54:13'),
(9, '2023072000004', 21, 'abc', 20.00, 3, '2023-07-20 09:31:42', '2023-07-23 11:48:10'),
(10, '2023072000005', 21, 'Abc', 100.00, 3, '2023-07-20 12:14:19', '2023-07-23 11:48:02'),
(11, '2023072100001', 21, 'abc', 80.00, 3, '2023-07-20 21:42:39', '2023-07-23 11:47:28'),
(12, '2023072200001', 21, 'abc', 60.00, 3, '2023-07-21 23:23:08', '2023-07-22 12:52:10'),
(13, '2023072400001', 21, 'abc', 15.00, 3, '2023-07-24 18:46:00', '2023-07-24 18:49:52');

-- --------------------------------------------------------

--
-- Table structure for table `product_list`
--

CREATE TABLE `product_list` (
  `id` int(30) NOT NULL,
  `category_id` int(30) NOT NULL,
  `brand` text NOT NULL,
  `name` text NOT NULL,
  `description` text NOT NULL,
  `dose` varchar(250) NOT NULL,
  `price` float(12,2) NOT NULL DEFAULT 0.00,
  `image_path` text DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `delete_flag` tinyint(1) NOT NULL DEFAULT 0,
  `date_created` datetime NOT NULL DEFAULT current_timestamp(),
  `date_updated` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product_list`
--

INSERT INTO `product_list` (`id`, `category_id`, `brand`, `name`, `description`, `dose`, `price`, `image_path`, `status`, `delete_flag`, `date_created`, `date_updated`) VALUES
(15, 1, 'Nimpee', 'Paracetamol', 'Paracetamol is a common pain reliever and fever reducer. It is used to treat various conditions such as headaches, muscle aches, backaches, and fever.', '500mg', 60.00, 'uploads/medicines//Paracetamol-500.jpg?v=1690182603', 1, 0, '2023-07-24 08:57:40', '2023-07-24 12:40:03'),
(16, 1, 'Relifast', 'Ibuprofen', 'Ibuprofen is a nonsteroidal anti-inflammatory drug (NSAID) that helps relieve pain, inflammation, and reduce fever. It is commonly used to treat headaches, menstrual cramps, and minor injuries.', '400mg', 45.00, 'uploads/medicines//30-204.jpg?v=1690183049', 1, 0, '2023-07-24 08:58:52', '2023-07-24 12:47:29'),
(17, 2, 'AmoxiCare', 'AmoXicillin', 'Amoxicillin is an antibiotic used to treat various bacterial infections such as respiratory infections, ear infections, and urinary tract infections.', '250mg', 80.00, 'uploads/medicines//amoxicillin-250mg-capsules_1618818051.jpg?v=1690181397', 1, 0, '2023-07-24 09:00:03', '2023-07-24 12:19:57'),
(18, 2, 'AcidEase', 'Omeprazole', 'Omeprazole is a proton pump inhibitor that reduces stomach acid production. It is used to treat conditions like acid reflux, heartburn, and peptic ulcers.', '20mg', 35.00, 'uploads/medicines//OIP.jfif?v=1690177010', 1, 0, '2023-07-24 09:01:00', '2023-07-24 11:06:50'),
(19, 1, 'AllerClear', 'Loratadine', ' Loratadine is an antihistamine used to relieve allergy symptoms such as sneezing, runny nose, and itchy or watery eyes.', '10mg', 25.00, 'uploads/medicines//loratadine.jpg?v=1690181092', 1, 0, '2023-07-24 09:01:58', '2023-07-24 12:14:52'),
(20, 1, 'SereneLife', 'Sertraline', 'Sertraline is an antidepressant used to treat depression, anxiety disorders, and certain types of obsessive-compulsive disorder.', '100 IU/mL', 65.00, 'uploads/medicines//Sertraline-100mg-Film-coated-Tablets_28s-1.png?v=1690182975', 1, 0, '2023-07-24 09:03:50', '2023-07-24 12:46:15'),
(21, 1, 'CalmPill', 'Alprazolam', 'Alprazolam is a benzodiazepine used to treat anxiety and panic disorders.', '0.5mg', 50.00, 'uploads/medicines//ijsu2983-jpg.jpg?v=1690181948', 1, 0, '2023-07-24 09:04:39', '2023-07-24 12:29:08'),
(22, 1, 'BreatheFree', 'Montelukast', 'Montelukast is a leukotriene receptor antagonist used to manage asthma and seasonal allergies.', '10mg', 55.00, 'uploads/medicines//montelukast-10-mg-tablet.jpg?v=1690181868', 1, 0, '2023-07-24 09:05:27', '2023-07-24 12:27:48'),
(23, 1, 'Amlodipine', 'Amlodipine', 'Amlodipine is a calcium channel blocker used to treat high blood pressure and certain types of chest pain.', '5mg', 40.00, 'uploads/medicines//Bp-din-5.jpg?v=1690181330', 1, 0, '2023-07-24 09:06:14', '2023-07-24 12:18:50'),
(24, 3, 'AllerRelief', 'Cetirizine', 'Cetirizine is an antihistamine syrup used to relieve allergy symptoms such as sneezing, runny nose, and itching.', '5mg/5ml', 30.00, 'uploads/medicines//cetiri.jfif?v=1690181252', 1, 0, '2023-07-24 09:07:55', '2023-07-24 12:17:32'),
(25, 3, 'Azeez', 'Azithromycin', 'Azithromycin is an antibiotic syrup used to treat various bacterial infections, including respiratory and skin infections.', '200mg/5ml', 45.00, 'uploads/medicines//Azithromycin-200mg-5ml-.jpg?v=1690181809', 1, 0, '2023-07-24 09:08:53', '2023-07-24 12:26:49'),
(26, 3, 'SleepWell', 'Diphenhydramine', 'Diphenhydramine is an antihistamine syrup that also acts as a mild sedative, commonly used for relief from allergies and sleeplessness.', '12.5mg/5ml', 20.00, 'uploads/medicines//Diphenhydramine-Oral-Solution.jpg?v=1690182732', 1, 0, '2023-07-24 09:09:36', '2023-07-24 12:42:12'),
(27, 3, 'GastricCare', 'Ranitidine', ' Ranitidine is an H2 blocker syrup used to reduce stomach acid production and treat conditions like acid reflux and heartburn.', '75mg/5ml', 35.00, 'uploads/medicines//rani.jfif?v=1690182276', 1, 0, '2023-07-24 09:10:36', '2023-07-24 12:34:36'),
(28, 3, 'Guaifenesin', 'Guaifenesin', 'Guaifenesin is an expectorant syrup used to relieve chest congestion by loosening and thinning mucus in the airways.', '100mg/5ml', 25.00, 'uploads/medicines//Guaifenesin-100-mg-5-mL-Syrup.png?v=1690182482', 1, 0, '2023-07-24 09:11:28', '2023-07-24 12:38:02'),
(29, 3, 'CodiRelief', 'Paracetamol + Codeine', 'Paracetamol and Codeine combination syrup is used to manage moderate pain and fever.', '120mg/5ml + 10mg/5ml', 50.00, 'uploads/medicines//Fennings-Paracetamol-120mg-5ml_Group.png?v=1690182041', 1, 0, '2023-07-24 09:12:15', '2023-07-24 12:30:41'),
(30, 1, 'AspiRelief', 'Aspirin', ' Aspirin is a nonsteroidal anti-inflammatory drug (NSAID) used to relieve pain, reduce inflammation, and prevent blood clotting.', '75mg', 15.00, 'uploads/medicines//6217c36ca52a652f0e0f3510_621648cc3201ca3878b8a2e6_Aspirin 75mg CROPweb.jpg?v=1690181450', 1, 0, '2023-07-24 09:13:34', '2023-07-24 12:20:50'),
(31, 1, 'DiaCare', 'Metformin', ' Metformin is an oral medication used to manage blood sugar levels in people with type 2 diabetes.', '500mg', 25.00, 'uploads/medicines//metformin-500mg-tablet.jpg?v=1690182123', 1, 0, '2023-07-24 09:14:39', '2023-07-24 12:32:03'),
(32, 1, 'CholestoCare', 'Atorvastatin', 'Atorvastatin is a statin medication used to lower cholesterol levels and reduce the risk of heart-related conditions.', '40mg', 30.00, 'uploads/medicines//atorvastatin-tablets_1619445470.jpg?v=1690181717', 1, 0, '2023-07-24 09:15:25', '2023-07-24 12:25:35'),
(33, 1, 'MetroCure', 'Metronidazole', 'Metronidazole is an antibiotic used to treat various bacterial and protozoal infections.', '400mg', 60.00, 'uploads/medicines//metrowell-400mg-tablets-1648273568-6258250.jpeg?v=1690182678', 1, 0, '2023-07-24 09:16:29', '2023-07-24 12:41:18'),
(34, 2, 'ImoStop', 'Loperamide', 'Loperamide is an antidiarrheal medication used to relieve diarrhea symptoms.', '2mg', 30.00, 'uploads/medicines//2mg-Loperamide-Capsules-BP.jpg?v=1690182802', 1, 0, '2023-07-24 09:19:53', '2023-07-24 12:43:22');

-- --------------------------------------------------------

--
-- Table structure for table `stock_list`
--

CREATE TABLE `stock_list` (
  `id` int(30) NOT NULL,
  `product_id` int(30) NOT NULL,
  `code` varchar(100) NOT NULL,
  `quantity` float(12,2) NOT NULL DEFAULT 0.00,
  `expiration` date DEFAULT NULL,
  `date_created` datetime NOT NULL DEFAULT current_timestamp(),
  `date_updated` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `stock_list`
--

INSERT INTO `stock_list` (`id`, `product_id`, `code`, `quantity`, `expiration`, `date_created`, `date_updated`) VALUES
(19, 18, '27649014', 50.00, '2024-12-24', '2023-07-24 10:30:54', '2023-07-24 10:30:54'),
(20, 19, '276490141', 20.00, '2024-07-24', '2023-07-24 12:48:31', '2023-07-24 12:48:31'),
(22, 24, '2764901511', 111.00, '2024-11-24', '2023-07-24 12:49:24', '2023-07-24 12:50:20'),
(23, 23, '276490142', 22.00, '2024-12-24', '2023-07-24 12:50:51', '2023-07-24 12:50:51'),
(24, 17, '276490143', 33.00, '2023-12-24', '2023-07-24 12:51:34', '2023-07-24 12:51:34'),
(25, 30, '276490144', 33.00, '2023-09-24', '2023-07-24 12:52:17', '2023-07-24 12:52:17'),
(26, 25, '276490154', 40.00, '2023-12-24', '2023-07-24 12:55:16', '2023-07-24 12:55:16'),
(27, 22, '2764901544', 40.00, '2023-11-25', '2023-07-24 12:55:41', '2023-07-24 12:55:41'),
(28, 21, '276490145', 50.00, '2023-12-24', '2023-07-24 12:56:09', '2023-07-24 12:56:09'),
(29, 32, '276490146', 60.00, '2023-12-24', '2023-07-24 12:56:32', '2023-07-24 12:56:32'),
(30, 29, '2764901464', 80.00, '2024-03-24', '2023-07-24 12:57:08', '2023-07-24 12:57:08'),
(31, 31, '276490157', 80.00, '2024-01-24', '2023-07-24 12:57:36', '2023-07-24 12:57:36'),
(32, 27, '2764901421', 220.00, '2023-12-24', '2023-07-24 12:58:21', '2023-07-24 12:58:21'),
(33, 28, '2764901411', 50.00, '2023-12-24', '2023-07-24 12:58:46', '2023-07-24 12:58:46'),
(34, 34, '276490147', 80.00, '2023-12-24', '2023-07-24 13:03:04', '2023-07-24 13:03:04'),
(35, 33, '2764901499', 90.00, '2023-12-24', '2023-07-24 13:11:12', '2023-07-24 13:11:12'),
(36, 15, '2764901468', 90.00, '2023-12-24', '2023-07-24 13:11:49', '2023-07-24 13:11:49'),
(37, 16, '2764901566', 90.00, '2023-12-24', '2023-07-24 13:12:15', '2023-07-24 13:12:15'),
(38, 20, '27649015', 60.00, '2024-03-24', '2023-07-24 13:12:44', '2023-07-24 13:12:44'),
(39, 26, '27649014997', 90.00, '2024-02-24', '2023-07-24 13:13:13', '2023-07-24 13:13:13');

-- --------------------------------------------------------

--
-- Table structure for table `stock_out`
--

CREATE TABLE `stock_out` (
  `id` int(30) NOT NULL,
  `order_id` int(30) NOT NULL,
  `stock_id` int(30) NOT NULL,
  `quantity` int(30) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `system_info`
--

CREATE TABLE `system_info` (
  `id` int(30) NOT NULL,
  `meta_field` text NOT NULL,
  `meta_value` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `system_info`
--

INSERT INTO `system_info` (`id`, `meta_field`, `meta_value`) VALUES
(1, 'name', 'E - Medical Store'),
(6, 'short_name', 'E - Medical Store'),
(11, 'logo', 'uploads/logo.png?v=1653443580'),
(13, 'user_avatar', 'uploads/user_avatar.jpg'),
(14, 'cover', 'uploads/cover.png?v=1690175237'),
(17, 'phone', '456-987-1231'),
(18, 'mobile', '1234567890  ,  1234567890'),
(19, 'email', 'info@sample.com'),
(20, 'address', 'Chhattisgarh');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(50) NOT NULL,
  `firstname` varchar(250) NOT NULL,
  `middlename` text DEFAULT NULL,
  `lastname` varchar(250) NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL,
  `avatar` text DEFAULT NULL,
  `last_login` datetime DEFAULT NULL,
  `type` tinyint(1) NOT NULL DEFAULT 0,
  `date_added` datetime NOT NULL DEFAULT current_timestamp(),
  `date_updated` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='2';

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `middlename`, `lastname`, `username`, `password`, `avatar`, `last_login`, `type`, `date_added`, `date_updated`) VALUES
(1, 'Medilap', '', '-', 'hello', '0192023a7bbd73250516f069df18b500', 'uploads/avatars/1.png?v=1690189526', NULL, 1, '2021-01-20 14:02:37', '2023-07-24 14:35:26'),
(8, 'Mohan', '', 'S', 'user', '81dc9bdb52d04dc20036dbd8313ed055', NULL, NULL, 2, '2023-07-24 10:34:37', '2023-07-24 10:34:37');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart_list`
--
ALTER TABLE `cart_list`
  ADD PRIMARY KEY (`id`),
  ADD KEY `customer_id` (`customer_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `category_list`
--
ALTER TABLE `category_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer_list`
--
ALTER TABLE `customer_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_items`
--
ALTER TABLE `order_items`
  ADD KEY `order_id` (`order_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `order_list`
--
ALTER TABLE `order_list`
  ADD PRIMARY KEY (`id`),
  ADD KEY `customer_id` (`customer_id`);

--
-- Indexes for table `product_list`
--
ALTER TABLE `product_list`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_id` (`category_id`);

--
-- Indexes for table `stock_list`
--
ALTER TABLE `stock_list`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `stock_out`
--
ALTER TABLE `stock_out`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_id` (`order_id`),
  ADD KEY `stock_id` (`stock_id`);

--
-- Indexes for table `system_info`
--
ALTER TABLE `system_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart_list`
--
ALTER TABLE `cart_list`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `category_list`
--
ALTER TABLE `category_list`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `customer_list`
--
ALTER TABLE `customer_list`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `order_list`
--
ALTER TABLE `order_list`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `product_list`
--
ALTER TABLE `product_list`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `stock_list`
--
ALTER TABLE `stock_list`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `stock_out`
--
ALTER TABLE `stock_out`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `system_info`
--
ALTER TABLE `system_info`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cart_list`
--
ALTER TABLE `cart_list`
  ADD CONSTRAINT `customer_id_fk_cl` FOREIGN KEY (`customer_id`) REFERENCES `customer_list` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `product_id_fk_cl` FOREIGN KEY (`product_id`) REFERENCES `product_list` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Constraints for table `order_items`
--
ALTER TABLE `order_items`
  ADD CONSTRAINT `order_id_fk_oi` FOREIGN KEY (`order_id`) REFERENCES `order_list` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `product_id_fk_oi` FOREIGN KEY (`product_id`) REFERENCES `product_list` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Constraints for table `order_list`
--
ALTER TABLE `order_list`
  ADD CONSTRAINT `customer_id_fk_ol` FOREIGN KEY (`customer_id`) REFERENCES `customer_list` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Constraints for table `product_list`
--
ALTER TABLE `product_list`
  ADD CONSTRAINT `category_id_fk_pl` FOREIGN KEY (`category_id`) REFERENCES `category_list` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Constraints for table `stock_list`
--
ALTER TABLE `stock_list`
  ADD CONSTRAINT `product_id_fk_sl` FOREIGN KEY (`product_id`) REFERENCES `product_list` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Constraints for table `stock_out`
--
ALTER TABLE `stock_out`
  ADD CONSTRAINT `order_id_fk_so` FOREIGN KEY (`order_id`) REFERENCES `order_list` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `stock_id_fk_so` FOREIGN KEY (`stock_id`) REFERENCES `stock_list` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
