SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


CREATE TABLE `categories` (
  `category_id` int(11) NOT NULL AUTO_INCREMENT,
  `category_name` varchar(50) NOT NULL,
  PRIMARY KEY (`category_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


INSERT INTO `categories` (`category_id`, `category_name`) VALUES
(1, 'Life Extension'),
(2, 'MuscleTech'),
(3, "Nature's Way, Alive!"),
(4, "Enzymedica");


CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `price` int(20) NOT NULL,
  `category_id` int(11) NOT NULL,
  FOREIGN KEY (`category_id`) REFERENCES `categories`(`category_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



INSERT INTO `products` (`id`, `name`, `price`, `category_id`) VALUES
(1, 'Life Extension, BioActive Complete B-Complex, 60 Vegetarian Capsules', 300, 1),
(2, 'Life Extension, Two-Per-Day Multivitamin, 120 Capsules', 250, 1),
(3, 'Life Extension, Magnesium Caps, 500 mg, 100 Vegetarian Capsules', 350, 1),
(4, 'Life Extension, Two-Per-Day Multivitamin, 120 Tablets', 180, 1),
(5, 'MuscleTech, Essential Series, Platinum 100% Creatine, Unflavored, 14.11 oz (400 g)', 180, 2),
(6, 'MuscleTech, Platinum Multivitamin, 90 Tablets', 250, 2),
(7, 'MuscleTech, Platinum Multi Vitamin, 180 Tablets', 50, 2),
(8, 'MuscleTech, Platinum 100% Glutamine, Unflavored, 10.58 oz (300 g)', 230, 2),
(9, "Nature's Way, Alive! Kid's Chewable Multivitamin, Orange & Berry, 120 Chewable Tablets", 800, 3),
(10, "Nature's Way, Alive! Kids, Complete Multivitamin, Cherry, Orange & Grape , 60 Gummies", 750, 3),
(11, "Nature's Way, Chlorofresh, Liquid Chlorophyll, Mint, 132 mg, 16 fl oz (480 ml) (132 mg per 2 Tbsp)", 700, 3),
(12, "Nature's Way, Alive! Kids, Premium Multivitamin, Cherry, Orange & Grape, 90 Gummies", 600, 3),
(13, "Enzymedica, Digest Basic, Essential Enzyme Formula, 180 Capsules", 22, 4),
(14, "Enzymedica, Digest Basic, Essential Enzyme Formula, 90 Capsules", 45, 4),
(15, "Enzymedica, Digest Basic, Essential Enzyme Formula, 30 Capsules", 10, 4),
(16, "Enzymedica, Digest Basic + Probiotics, 90 Capsules", 15,4);


CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email_id` varchar(255) NOT NULL,
  `first_name` varchar(20) NOT NULL,
  `last_name` varchar(20) DEFAULT NULL,
  `phone` int(10) NOT NULL,
  `registration_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



INSERT INTO `users` (`id`, `email_id`, `first_name`, `last_name`, `phone`, `registration_time`, `password`) VALUES
(1, 'peter@gmail.com', 'Peter', 'rudt', 0, '2019-03-18 13:46:33', 'e4f194cba29960e12d8b8f1bfedc972b'),
(2, 'john@gmail.com', 'John', 'erty', 0, '2019-03-18 13:55:46', 'e10adc3949ba59abbe56e057f20f883e'),
(3, 'sam@gmail.com', 'Sam', 'das', 0, '2019-03-19 07:37:46', 'e10adc3949ba59abbe56e057f20f883e');



CREATE TABLE `users_products` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL ,
  `item_id` int(11) DEFAULT NULL,
  `status` enum('Added To Cart','Confirmed') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


INSERT INTO `users_products` (`id`, `user_id`, `item_id`, `status`) VALUES
(11, 3, 6, 'Confirmed'),
(17, 3, 1, 'Confirmed'),
(18, 3, 5, 'Confirmed'),
(19, 3, 6, 'Confirmed'),
(20, 3, 1, 'Confirmed'),
(23, 3, 1, 'Confirmed'),
(24, 3, 2, 'Confirmed'),
(25, 3, 9, 'Confirmed');

--
CREATE TABLE `payment` (
  `payment_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `expiry_date` decimal(10,2) NOT NULL,
  `payment_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `card_number` varchar(16) NOT NULL,
  `cvv` varchar(3) NOT NULL,
  PRIMARY KEY (`payment_id`),
  FOREIGN KEY (`user_id`) REFERENCES `users`(`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1; this datatable to modify connect 
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `users_products`
  ADD PRIMARY KEY (`id`),
  ADD  KEY `user_id` (`user_id`),
  ADD  KEY `product_id` (`item_id`);


ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;


ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;


ALTER TABLE `users_products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;


ALTER TABLE `users_products`
  ADD CONSTRAINT `users_products_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `users_products_ibfk_2` FOREIGN KEY (`item_id`) REFERENCES `products` (`id`);
COMMIT;


