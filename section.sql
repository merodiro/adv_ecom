-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 25, 2017 at 11:19 PM
-- Server version: 10.2.5-MariaDB-log
-- PHP Version: 7.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `section`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(15) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `price` double NOT NULL,
  `rate` int(1) UNSIGNED NOT NULL,
  `views` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `description`, `image`, `price`, `rate`, `views`) VALUES
(1, 'Product One', 'Pie sesame snaps jelly cookie jujubes apple pie toffee macaroon. Candy cheesecake liquorice wafer cake chocolate. Tart topping cheesecake soufflé carrot cake. Macaroon gingerbread muffin tootsie roll sweet roll chocolate cake wafer macaroon pastry. Jujubes lemon drops jelly beans oat cake marshmallow dessert pudding. Cookie pudding donut caramels tart gummies biscuit chocolate cake. Cake pie chupa chups candy pie wafer candy canes. Liquorice powder ice cream. Jelly chocolate cake brownie sweet roll. Marzipan gingerbread candy cake halvah. Pastry tiramisu cookie carrot cake. Tootsie roll gummies sugar plum jujubes danish. Chocolate bar wafer gummies candy.', 'img/1.jpeg', 49.99, 5, 53),
(2, 'Product Two', 'Pie sesame snaps jelly cookie jujubes apple pie toffee macaroon. Candy cheesecake liquorice wafer cake chocolate. Tart topping cheesecake soufflé carrot cake. Macaroon gingerbread muffin tootsie roll sweet roll chocolate cake wafer macaroon pastry. Jujubes lemon drops jelly beans oat cake marshmallow dessert pudding. Cookie pudding donut caramels tart gummies biscuit chocolate cake. Cake pie chupa chups candy pie wafer candy canes. Liquorice powder ice cream. Jelly chocolate cake brownie sweet roll. Marzipan gingerbread candy cake halvah. Pastry tiramisu cookie carrot cake. Tootsie roll gummies sugar plum jujubes danish. Chocolate bar wafer gummies candy.', 'img/2.jpeg', 59.99, 4, 50),
(3, 'Product Three', 'Pie sesame snaps jelly cookie jujubes apple pie toffee macaroon. Candy cheesecake liquorice wafer cake chocolate. Tart topping cheesecake soufflé carrot cake. Macaroon gingerbread muffin tootsie roll sweet roll chocolate cake wafer macaroon pastry. Jujubes lemon drops jelly beans oat cake marshmallow dessert pudding. Cookie pudding donut caramels tart gummies biscuit chocolate cake. Cake pie chupa chups candy pie wafer candy canes. Liquorice powder ice cream. Jelly chocolate cake brownie sweet roll. Marzipan gingerbread candy cake halvah. Pastry tiramisu cookie carrot cake. Tootsie roll gummies sugar plum jujubes danish. Chocolate bar wafer gummies candy.', 'img/3.jpeg', 39.99, 3, 51),
(4, 'Product Four', 'Pie sesame snaps jelly cookie jujubes apple pie toffee macaroon. Candy cheesecake liquorice wafer cake chocolate. Tart topping cheesecake soufflé carrot cake. Macaroon gingerbread muffin tootsie roll sweet roll chocolate cake wafer macaroon pastry. Jujubes lemon drops jelly beans oat cake marshmallow dessert pudding. Cookie pudding donut caramels tart gummies biscuit chocolate cake. Cake pie chupa chups candy pie wafer candy canes. Liquorice powder ice cream. Jelly chocolate cake brownie sweet roll. Marzipan gingerbread candy cake halvah. Pastry tiramisu cookie carrot cake. Tootsie roll gummies sugar plum jujubes danish. Chocolate bar wafer gummies candy.', 'img/4.jpeg', 29.99, 2, 59),
(5, 'Product Five', 'Pie sesame snaps jelly cookie jujubes apple pie toffee macaroon. Candy cheesecake liquorice wafer cake chocolate. Tart topping cheesecake soufflé carrot cake. Macaroon gingerbread muffin tootsie roll sweet roll chocolate cake wafer macaroon pastry. Jujubes lemon drops jelly beans oat cake marshmallow dessert pudding. Cookie pudding donut caramels tart gummies biscuit chocolate cake. Cake pie chupa chups candy pie wafer candy canes. Liquorice powder ice cream. Jelly chocolate cake brownie sweet roll. Marzipan gingerbread candy cake halvah. Pastry tiramisu cookie carrot cake. Tootsie roll gummies sugar plum jujubes danish. Chocolate bar wafer gummies candy.', 'img/5.jpeg', 24.99, 1, 18),
(6, 'Product Six', 'Pie sesame snaps jelly cookie jujubes apple pie toffee macaroon. Candy cheesecake liquorice wafer cake chocolate. Tart topping cheesecake soufflé carrot cake. Macaroon gingerbread muffin tootsie roll sweet roll chocolate cake wafer macaroon pastry. Jujubes lemon drops jelly beans oat cake marshmallow dessert pudding. Cookie pudding donut caramels tart gummies biscuit chocolate cake. Cake pie chupa chups candy pie wafer candy canes. Liquorice powder ice cream. Jelly chocolate cake brownie sweet roll. Marzipan gingerbread candy cake halvah. Pastry tiramisu cookie carrot cake. Tootsie roll gummies sugar plum jujubes danish. Chocolate bar wafer gummies candy.', 'img/6.jpeg', 34.99, 3, 20),
(7, 'Product Seven', 'Pie sesame snaps jelly cookie jujubes apple pie toffee macaroon. Candy cheesecake liquorice wafer cake chocolate. Tart topping cheesecake soufflé carrot cake. Macaroon gingerbread muffin tootsie roll sweet roll chocolate cake wafer macaroon pastry. Jujubes lemon drops jelly beans oat cake marshmallow dessert pudding. Cookie pudding donut caramels tart gummies biscuit chocolate cake. Cake pie chupa chups candy pie wafer candy canes. Liquorice powder ice cream. Jelly chocolate cake brownie sweet roll. Marzipan gingerbread candy cake halvah. Pastry tiramisu cookie carrot cake. Tootsie roll gummies sugar plum jujubes danish. Chocolate bar wafer gummies candy.', 'img/7.jpeg', 54.99, 5, 11),
(8, 'Product Eight', 'Pie sesame snaps jelly cookie jujubes apple pie toffee macaroon. Candy cheesecake liquorice wafer cake chocolate. Tart topping cheesecake soufflé carrot cake. Macaroon gingerbread muffin tootsie roll sweet roll chocolate cake wafer macaroon pastry. Jujubes lemon drops jelly beans oat cake marshmallow dessert pudding. Cookie pudding donut caramels tart gummies biscuit chocolate cake. Cake pie chupa chups candy pie wafer candy canes. Liquorice powder ice cream. Jelly chocolate cake brownie sweet roll. Marzipan gingerbread candy cake halvah. Pastry tiramisu cookie carrot cake. Tootsie roll gummies sugar plum jujubes danish. Chocolate bar wafer gummies candy.', 'img/8.jpeg', 64.99, 4, 1),
(9, 'Product Nine', 'Pie sesame snaps jelly cookie jujubes apple pie toffee macaroon. Candy cheesecake liquorice wafer cake chocolate. Tart topping cheesecake soufflé carrot cake. Macaroon gingerbread muffin tootsie roll sweet roll chocolate cake wafer macaroon pastry. Jujubes lemon drops jelly beans oat cake marshmallow dessert pudding. Cookie pudding donut caramels tart gummies biscuit chocolate cake. Cake pie chupa chups candy pie wafer candy canes. Liquorice powder ice cream. Jelly chocolate cake brownie sweet roll. Marzipan gingerbread candy cake halvah. Pastry tiramisu cookie carrot cake. Tootsie roll gummies sugar plum jujubes danish. Chocolate bar wafer gummies candy.', 'img/9.jpeg', 34.99, 2, 1),
(10, 'Product Ten', 'Pie sesame snaps jelly cookie jujubes apple pie toffee macaroon. Candy cheesecake liquorice wafer cake chocolate. Tart topping cheesecake soufflé carrot cake. Macaroon gingerbread muffin tootsie roll sweet roll chocolate cake wafer macaroon pastry. Jujubes lemon drops jelly beans oat cake marshmallow dessert pudding. Cookie pudding donut caramels tart gummies biscuit chocolate cake. Cake pie chupa chups candy pie wafer candy canes. Liquorice powder ice cream. Jelly chocolate cake brownie sweet roll. Marzipan gingerbread candy cake halvah. Pastry tiramisu cookie carrot cake. Tootsie roll gummies sugar plum jujubes danish. Chocolate bar wafer gummies candy.', 'img/10.jpeg', 39.99, 2, 3);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(30) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(1, 'Amr', 'amr@example.com', '$2y$10$5lOYV6guFSk5Xw1jEumA9e/BRlAFJG.S7.K8wIKSnF6LQ7RqyMMCS'),
(2, 'mostafa', 'mo@mo.com', '$2y$10$XfIUvvgWL0S.iXH6zEARV.LreuQqoqIS3H1AV23qhEHsEoUUIOxpm');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
