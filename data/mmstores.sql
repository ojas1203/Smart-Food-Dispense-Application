-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 16, 2018 at 11:54 AM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mmstores`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `mmstores`
--

CREATE TABLE `mmstores` (
  `uid` int(11) NOT NULL,
  `username` text NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL,
  `Phone` text NOT NULL,
  `DEPARTMENT` text NOT NULL,
  `DESIGNATION` text NOT NULL,
  `Bal` int(11) NOT NULL,
  `OTP` varchar(10) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mmstores`
--

INSERT INTO `mmstores` (`uid`, `username`, `email`, `password`, `Phone`, `DEPARTMENT`, `DESIGNATION`, `Bal`, `OTP`, `status`) VALUES
(1, 'DJP', 'DHRUVIL', 'DJ123', '0', '', '', 100, '', ''),
(2, 'prakhar', 'prakhar.ad@gmail.com', 'prakhar', '0', '', '', 20, '1234', 'Valid'),
(3, 'ashash', 'ask@g.com', 'ashash', '7894564587', 'CMPN', 'Faculty', 150, '', ''),
(4, 'jyotsna', 'jyotsnadesai93@gmail.com', 'jyotsna', '9878665541', 'IT', 'Faculty', 375, '11588', 'Valid');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) NOT NULL,
  `p_name` varchar(200) NOT NULL,
  `image` varchar(50) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `price` int(10) NOT NULL,
  `category` varchar(100) NOT NULL,
  `time` varchar(15) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `p_name`, `image`, `description`, `price`, `category`, `time`) VALUES
(1, 'Idli Sambhar', 'IdliSambhar.jpg', 'Idli are a type of savoury rice cake, popular as breakfast foods throughout India and neighbouring countries.he cakes are made by steaming a batter consisting of fermented black lentils (de-husked) and rice.', 80, 'Breakfast', 'Enable'),
(2, 'Idli Chilli fry', 'Idlifry.jpg', 'Idli fry-a quick snack made with idlis. In this recipe of idli fry sauted idlis with cumin, sesame and mustard which give them amazing taste and aroma.', 130, 'Breakfast', '30'),
(3, 'Masala Dosa', 'masaladosa.jpg', 'The masala dosa is made by stuffing a dosa with a lightly cooked filling of potatoes, fried onions and spices. The dosa is wrapped around an onion and potato curry or masala.', 90, 'Breakfast', '30'),
(4, 'Special Spring Dosa', 'springdosa.jpg', 'A tasty stuffing of crunchy veggies, boiled noodles and peppy sauces is the highlight of this delicious butter-cooked Spring dosa', 110, 'Breakfast', '30'),
(5, 'Veg Grill Sandwich', 'veggrillsand.jpg', 'Veg Grill Sandwich with chutney and sauce', 95, 'Breakfast', '30'),
(6, 'Veg Grilled Cheese Sandwich', 'cheesesand.jpg', 'Veg Grilled Cheese Sandwich recipe is also very healthy as it is loaded with vegetables and paneer.This is a sweet and spicy sandwich with filling of cabbage, carrot, onion, paneer/indian cottage cheese, mayonnaise and mozzarella cheese. ', 100, 'Breakfast', '30'),
(7, 'Masala Uttapam', 'uttapam.jpg', 'Uttapam is traditionally made with toppings such as tomatoes, onion, chillies, capsicum and coriander', 80, 'Breakfast', '30'),
(8, 'Aloo Paratha', 'alooparatha.jpg', ' Aloo parathas consist of unleavened dough stuffed with a mixture of mashed potato and spices, which is rolled out and cooked on a hot tawa with butter or ghee', 60, 'Breakfast', '30'),
(9, 'Tomato Soup', 'tomatosoup.jpg', 'smooth in texture,include chunks (or small pieces) of tomato, cream and vegetable stock. Popular toppings for tomato soup include sour cream or croutons.', 80, 'Soups', '30'),
(10, 'Vegetable Manchow Soup', 'VegetableManchowSoup.jpg', 'Vegetable Manchow Soup is a spicy, hot and sour Indo-Chinese soup loaded with crunchy vegetables flavored with soy sauce and vinegar and thickened with a cornstarch mixture. The highlight of this delightful soup is the garnish of fried noodles! ', 90, 'Soups', '30'),
(11, 'Vegetable Noodles Soup', 'VegetableNoodlesSoup.jpg', 'Vegetable Noodle Soup is full of healthy veggies, protein packed with gluten free noodles.', 85, 'Soups', '30'),
(12, 'Chicken Noodle Soup', 'chickennoodlesoup.jpg', 'Brimming with chopped vegetables, cubed chicken, and egg noodles, and seasoned with fresh parsley, pepper, bay leaf and chopped garlic.', 90, 'Soups', '30'),
(13, 'Veg Spring Roll', 'vegspringroll.jpg', 'Spring rolls are a large variety of filled, rolled appetizers,spring rolls are savoury rolls with cabbage and other vegetable fillings inside a thinly wrapped cylindrical pastry.', 175, 'Starter', '30'),
(14, 'Paneer Tikka', 'PANEERTIKKA.jpg', 'It is made by marinating paneer in special type of marinade made from thick curd, tandoori masala powder and many other spices', 250, 'Starter', '30'),
(15, 'Cheese Corn Balls', 'cheesecornballs.jpg', 'Cheese Corn Balls crecipe is a crunchy yet soft-centered deep-fried dish with soft corn kernels and creamy melted cheese.', 250, 'Starter', '30'),
(16, 'Chicken Sholey Kabab', 'chickentikka.jpg', 'Chicken Sholay Kebab is made with spicy and flavorful chicken kebab topped by fluffy egg omelet. This dish is little spicy and it is served best on sizzling plate', 375, 'Starter', '30'),
(17, 'Chiken Crispy', 'chickencrispy.jpg', 'The chicken is fried in such a way that the skin is extremely crunchy, but the white meat is relatively soft and served with sauce.', 350, 'Starter', '30'),
(18, 'Chicken Reshmi Kabab', 'ChickenReshmiKabab.jpg', 'Chicken Reshmi Kabab is made with Pieces of Boneless Chicken Breast, marinated in juicy mixture of Curd, Cream, Cashew nuts and Spices and then Grilled in Oven. It is one of the most popular Indian Kabab dish.', 350, 'Starter', '30'),
(19, 'Prawns Koliwada', 'koliwadaprawn.jpg', 'Prawn Koliwada is a spicy, deep fried prawns ', 210, 'Starter', '30'),
(20, 'Fish fingers', 'FishFingersTartarSauce.jpg', 'Fish fingers or fish sticks are a processed food made using a whitefish, such as cod, haddock or pollock, which has been battered or breaded served with tarter sauce. ', 500, 'Starter', '30'),
(21, 'Veg Hakka Nooddles', 'hakkanoddles.jpg', 'vegetable hakka noodles an indo chinese preparation with hakka noodles and mix vegetables', 180, 'Main Course', '30'),
(22, 'Paneer Veg Biryani', 'VegBiryaniPaneer.jpg', 'Vegetable and Paneer Biryani A classic Indian one pot meal that is full of flavors and aromas from whole spices, garam masala and the long grain basmati rice.', 180, 'Main Course', '30'),
(23, 'Chiken Tikka Biryani', 'chikentikkabiryani.jpg', 'Chicken Tikka Biryani Recipe is the famous delicacy of Indian Cuisine. Here Boneless Chicken Tikka is cooked in Gravy and then mixed with Basmati Rice.', 300, 'Main Course', '30'),
(24, 'Rasmalai', 'Rasmalai.jpg', 'Ras malai consists of sugary white cream, or yellow-coloured (flattened) balls of chhana soaked in malai (clotted cream) flavoured with cardamom', 250, 'Desserts', '30'),
(25, 'Rose Falooda', 'rosefaluda.jpg', 'Falooda is a cold dessert popular in the Indian subcontinent. Traditionally it is made from mixing rose syrup, vermicelli, sweet basil (sabza/takmaria) seeds, and pieces of jelly with milk, often topped off with a scoop of ice cream. ', 150, 'Desserts', '30'),
(26, 'Cheese Pizza', 'pizza.jpg', 'Extra cheese pizza with a thick and puffy pizza crust.', 250, 'Main Course', '30'),
(27, 'Skillet Chocolate Chip Cookie', 'SkilletChocolateChipCookie.JPG', 'Chocolate Chip Skillet Cookie the Pizzokie is a warm, ooey, gooey browned butter chocolate chip cookie topped with vanilla bean ice cream.', 250, 'Specials', '30'),
(28, 'Chocolate gateau', 'choco.jpg', 'Chocolate gateau is a cake flavored with melted chocolate, cocoa powder.', 250, 'Desserts', '30'),
(29, 'Malai Kulfi', 'malaikulfi.jpg', 'Traditional Malai Kulfi stands out with an extra rich and intense flavour and creaminess', 200, 'Desserts', '30');

-- --------------------------------------------------------

--
-- Table structure for table `temp`
--

CREATE TABLE `temp` (
  `orderid` int(15) NOT NULL,
  `uid` varchar(15) NOT NULL,
  `product_id` varchar(15) NOT NULL,
  `item_name` varchar(100) NOT NULL,
  `product_price` varchar(100) NOT NULL,
  `item_quantity` varchar(15) NOT NULL,
  `total` varchar(15) NOT NULL,
  `status` varchar(50) NOT NULL,
  `date` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `temp`
--

INSERT INTO `temp` (`orderid`, `uid`, `product_id`, `item_name`, `product_price`, `item_quantity`, `total`, `status`, `date`) VALUES
(1, '4', '3', 'Masala Dosa', '90', '1', '90', 'Ready', '13/03/2018 18:30 PM'),
(2, '4', '28', 'Chocolate gateau', '250', '1', '250', 'Order Placed', '14/03/2018 13:35 PM'),
(3, '2', '3', 'Masala Dosa', '90', '1', '90', 'Order Placed', '14/03/2018 13:36 PM'),
(6, '4', '4', 'Special Spring Dosa', '110', '1', '110.00', 'Order Placed', '15/03/2018 18:53 PM'),
(5, '2', '5', 'Veg Grill Sandwich', '95', '1', '95.00', 'Order Placed', '14/03/2018 14:01 PM'),
(7, '4', '2', 'Idli Chilli fry', '130', '1', '130', 'Order Placed', '15/03/2018 18:58 PM');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mmstores`
--
ALTER TABLE `mmstores`
  ADD PRIMARY KEY (`uid`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `temp`
--
ALTER TABLE `temp`
  ADD PRIMARY KEY (`orderid`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
