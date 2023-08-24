-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 13, 2021 at 05:26 AM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shopping`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `id` int(10) NOT NULL,
  `name` varchar(30) NOT NULL,
  `detail` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id`, `name`, `detail`) VALUES
(10, 'Antila Shoppy', 'Our vision is to be Earths most customer centric company to build a place where people can come to find and discover virtually anything they want to buy online.\r\n\r\nWith Us we endeavor to build that same destination in India by giving customers more of what they want  vast selection low prices fast and reliable delivery and a trusted and convenient online shopping experience  and provide sellers a world class e commerce platform.\r\n\r\nWe are committed to ensure 100% Purchase Protection for your shopping done on our site so that you can benefit from a safe and secure online ordering experience convenient payment options such as cash on delivery easy returns and enjoy a completely hassle free online shopping experience.');

-- --------------------------------------------------------

--
-- Table structure for table `admin_master`
--

CREATE TABLE `admin_master` (
  `id` int(10) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_master`
--

INSERT INTO `admin_master` (`id`, `email`, `password`) VALUES
(1, 'zakhariyabhi2509@gmail.com', 'admin1'),
(2, 'pranav123@gmail.com', 'prnv123');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `id` int(10) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(35) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `adress` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`id`, `name`, `email`, `phone`, `adress`) VALUES
(1, 'Antila Shoppy', 'antila.shoppy@gmail.com', '0288-2550270', 'Khodiyar Colony, main road, jamnagar-361 008.');

-- --------------------------------------------------------

--
-- Table structure for table `drop_down`
--

CREATE TABLE `drop_down` (
  `cat_id` int(10) NOT NULL,
  `cat_name` varchar(20) NOT NULL,
  `sub_cat` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `drop_down`
--

INSERT INTO `drop_down` (`cat_id`, `cat_name`, `sub_cat`) VALUES
(7, 'mens', 't-shirts'),
(9, 'Mens', 'shirts'),
(10, 'Mens', 'kurtas'),
(11, 'Mens', 'shuits'),
(12, 'Mens', 'jeans'),
(13, 'Womens', 'dress'),
(14, 'Womens', 'saree'),
(15, 'Womens', 'kurties'),
(16, 'Womens', 'jeans'),
(18, 'Womens', 'tops');

-- --------------------------------------------------------

--
-- Table structure for table `finalorder`
--

CREATE TABLE `finalorder` (
  `fono` int(11) NOT NULL,
  `fodate` varchar(255) NOT NULL,
  `id` int(11) NOT NULL,
  `name1` varchar(255) NOT NULL,
  `price` int(10) NOT NULL,
  `img` varchar(255) NOT NULL,
  `ptype` varchar(255) NOT NULL,
  `uno` int(11) NOT NULL,
  `uname` varchar(50) NOT NULL,
  `address` varchar(255) NOT NULL,
  `qty` varchar(10) NOT NULL,
  `size` varchar(6) NOT NULL,
  `tot` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `finalorder`
--

INSERT INTO `finalorder` (`fono`, `fodate`, `id`, `name1`, `price`, `img`, `ptype`, `uno`, `uname`, `address`, `qty`, `size`, `tot`) VALUES
(57, '27-10-21', 46, 'jk', 500, 'uploads/k7.jpg', 'Mens kurtas', 16, 'Zakhariya Abhishek', 'Rameshwar nagar, raj rajeshwari sociaty, street no.7, Jamnagar - 361 008.', '2', 'XS', '500'),
(58, '27-10-21', 30, 'mens shuit', 1500, 'uploads/b6.jpg', 'Care Instructions: Dry Clean Only\r\nFit Type: Slim Fit\r\nFabric: Poly Viscose\r\nWash Care: Dry Clean Only; Style: Single Breasted\r\nPattern: Checkered; Fit: Slim Fit\r\nClosure: Buttoned; Occasion: Evening\r\nNumber of outside pockets: 3; Number of inside pockets', 16, 'Zakhariya Abhishek', 'Rameshwar nagar, raj rajeshwari sociaty, street no.7, Jamnagar - 361 008.', '1', 'XS', '1500'),
(59, '27-10-21', 31, 'mens jeans', 500, 'uploads/j8.jpg', 'Material: Cotton\r\nColor: Dark Blue\r\nFit Type: Relaxed; Occasion: Casual\r\nPackage Contents: 1 Jeans\r\nWash Care Intructions Do not bleach, dry in shade\r\nDisclaimer: Kindly refer to the size chart (Also In Images) for fitimeasurements.', 16, 'Zakhariya Abhishek', 'Rameshwar nagar, raj rajeshwari sociaty, street no.7, Jamnagar - 361 008.', '1', 'XS', '500');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_id` int(100) NOT NULL,
  `product_name` varchar(30) NOT NULL,
  `product_img` varchar(100) NOT NULL,
  `product_price` int(10) NOT NULL,
  `product_discription` varchar(10000) NOT NULL,
  `product_category` varchar(20) NOT NULL,
  `product_quantity` varchar(20) NOT NULL,
  `product_size` varchar(5) NOT NULL DEFAULT 'X'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `product_name`, `product_img`, `product_price`, `product_discription`, `product_category`, `product_quantity`, `product_size`) VALUES
(17, 'Diverse men regular formal shi', 'uploads/s4.webp', 900, 'Care Instructions: Machine Wash\r\nFit Type: slim fit\r\nColor Name: Bottle Green\r\n100% Cotton\r\nLong sleeve\r\nSlim fit\r\nMachine wash\r\nMade in India\r\n100% Premium cotton, pre-washed for extremely soft hand feel\r\nStylish plain casual shirt for Men', 'mens shirts', '10', ''),
(19, 'Dennis lingo mens shirt', 'uploads/s9.jpg', 900, 'Product comes in assorted prints. Actual colors and prints might vary for the image shown on the website\r\nCollection: 24 x 7 ; Style no: 2714\r\n80% cotton & 20% poly\r\nPremium Combed Cotton rich fabric\r\nModern fit\r\nRibbed crew-neck prevents sagging\r\nAuthentic Jockey logo label', 'mens shirts', '10', ''),
(23, 'mens full slive t-shirt', 'uploads/t6.jpg', 600, 'Product comes in assorted prints. Actual colors and prints might vary for the image shown on the website Collection: 24 x 7 ; Style no: 2714 80% cotton & 20% poly Premium Combed Cotton rich fabric Modern fit Ribbed crew-neck prevents sagging Authentic Jockey logo label', 'mens t-shirts', '10', ''),
(24, 'mens cotton t-shirt', 'uploads/t10.jpg', 400, 'Product comes in assorted prints. Actual colors and prints might vary for the image shown on the website Collection: 24 x 7 ; Style no: 2714 80% cotton & 20% poly Premium Combed Cotton rich fabric Modern fit Ribbed crew-neck prevents sagging Authentic Jockey logo label\r\n\r\n', 'mens t-shirts', '10', ''),
(25, 'mens classic t-shirt', 'uploads/t3.jpg', 600, 'Product comes in assorted prints. Actual colors and prints might vary for the image shown on the website Collection: 24 x 7 ; Style no: 2714 80% cotton & 20% poly Premium Combed Cotton rich fabric Modern fit Ribbed crew-neck prevents sagging Authentic Jockey logo label\r\n\r\n', 'mens t-shirts', '10', ''),
(26, 'mens stylish t-shirt', 'uploads/t7.jpg', 1000, 'Product comes in assorted prints. Actual colors and prints might vary for the image shown on the website Collection: 24 x 7 ; Style no: 2714 80% cotton & 20% poly Premium Combed Cotton rich fabric Modern fit Ribbed crew-neck prevents sagging Authentic Jockey logo label\r\n\r\n', 'mens t-shirts', '', ''),
(27, 'mens stylish t-shirt', 'uploads/t1.jpg', 1100, 'Product comes in assorted prints. Actual colors and prints might vary for the image shown on the website Collection: 24 x 7 ; Style no: 2714 80% cotton & 20% poly Premium Combed Cotton rich fabric Modern fit Ribbed crew-neck prevents sagging Authentic Jockey logo label\r\n\r\n', 'mens t-shirts', '9', ''),
(28, 'mens kurta', 'uploads/k1.jpg', 500, 'Fabric: Poly Viscose\r\nWash Care: Dry Clean Only\r\nStyle: Single Breasted; Pattern: Solid\r\nFit: Slim Fit; Closure: Buttoned\r\nOccasion: Formal; Number of outside pockets: 2\r\n', 'mens kurtas', '5', ''),
(29, 'mens kurta1', 'uploads/k6.jpg', 900, 'Care Instructions: Hand Wash Only\r\nSIZE GUIDE: Please refer the Size Chart Image and Check Garment Chest Measurement. Basic Rule: Select the Same Size as your Usual, Example if shirt size is 40 select size M kurta.\r\nHIGH QUALITY SUSTAINABLE MATERIAL: Made from 100% Natural fabrics, comfortable feel. The kurta is lightweight with vented side. Designs feature modern and innovative details that appeal to everyone.\r\nFabric: Cotton\r\nWASH CARE: Ideally Dry Clean recommended, however can also be washed at home seperately. Some hand-dyed Artisnal fabrics may bleed colour on first few washes.\r\nSleeves: Full Sleeves + 2 Side Pockets\r\n', 'mens kurtas', '10', ''),
(30, 'mens shuit', 'uploads/b6.jpg', 1500, 'Care Instructions: Dry Clean Only\r\nFit Type: Slim Fit\r\nFabric: Poly Viscose\r\nWash Care: Dry Clean Only; Style: Single Breasted\r\nPattern: Checkered; Fit: Slim Fit\r\nClosure: Buttoned; Occasion: Evening\r\nNumber of outside pockets: 3; Number of inside pockets: 2\r\n', 'mens shuits', '9', ''),
(31, 'mens jeans', 'uploads/j8.jpg', 500, 'Material: Cotton\r\nColor: Dark Blue\r\nFit Type: Relaxed; Occasion: Casual\r\nPackage Contents: 1 Jeans\r\nWash Care Intructions Do not bleach, dry in shade\r\nDisclaimer: Kindly refer to the size chart (Also In Images) for fitimeasurements.', 'mens jeans', '6', ''),
(32, 'mens light blue jeans', 'uploads/j7.jpg', 900, 'Material: Cotton\r\nColor: Dark Blue\r\nFit Type: Relaxed; Occasion: Casual\r\nPackage Contents: 1 Jeans\r\nWash Care Intruction Do not bleach, dry in shade\r\nDisclaimer: Kindly refer to the size chart (Also In Images) for fitin measurements.', 'mens jeans', '10', ''),
(33, 'womens kurti', 'uploads/kurta1.jpg', 1000, 'Material: Cotton\r\nColor: Dark Blue\r\nFit Type: Relaxed; Occasion: Casual\r\nPackage Contents: 1 Jeans\r\nWash Care Intructions Do not bleach, dry in shade\r\nDisclaimer: Kindly refer to the size chart (Also In Images) for measurements.', 'womens kurties', '8', ''),
(34, 'designer kurti for women', 'uploads/wk3.jpg', 1500, 'Care Instructions: Hand Wash\r\nFit Type: Regular\r\nMaterial : fabric :- 100% soft Rayon fabric stitching:- interlock stitching, palazzo fabric is also Rayon fabric. Best options for gifting on any occasion to your love ones\r\nLook your best at Festive or a casual day out with friends/family with this beautiful kurt\r\nOccasion: best for everyday wear, casual and festive\r\nCare instructions: gentle hand / machine light wash separately in cold water, low temp. Iron, dry in shade, first wash preferblack white dry clean, do not bleach and tumble dry. Disclaimer : product colour may slightly vary due to photographic lighting sources, photo editing or your monitor settings\r\n', 'womens kurties', '10', ''),
(35, 'womens designer saree', 'uploads/saree2.webp', 2000, 'Care Instructions: Hand Wash\r\nFit Type: Regular\r\nMaterial : fabric :- 100% soft Rayon fabric stitching:- interlock stitching, palazzo fabric is also Rayon fabric. Best options for gifting on any occasion to your love ones\r\nLook your best at Festive or a casual day out with friends/family with this beautiful kurt\r\nOccasion: best for everyday wear, casual and festive\r\nCare instructions: gentle hand / machine light wash separately in cold water, low temp. Iron, dry in shade, first wash preferblac white dry clean, do not bleach and tumble dry. Disclaimer : product colou may slightly vary due to photographic lighting sources, photo editing or your monitor settings\r\n', 'womens saree', '5', ''),
(36, 'purple saree for womens', 'uploads/anjaneya_sarees_maroon_zari_woven_traditional_saree___.webp', 2000, 'Care Instructions: Hand Wash\r\nFit Type: Regular\r\nMaterial : fabric :- 100% soft Rayon fabric stitching:- interlock stitching, palazzo fabric is also Rayon fabric. Best options for gifting on any occasion to your love ones\r\nLook your best at Festive or a casual day out with friends/family with this beautiful sari\r\nOccasion: best for everyday wear, casual and festive\r\nCare instructions: gentle hand / machine light wash separately in cold water, low temp. Iron, dry in shade, first wash  white dry clean, do not bleach and tumble dry. Disclaimer : product color may slightly vary due to photographic lighting sources, photo editing or your monitor settings\r\n', 'womens saree', '6', ''),
(37, 'saree3', 'uploads/vishnu_weaves_blue_striped_traditional_saree_with_tassels.webp', 3000, 'Care Instructions: Hand Wash\r\nFit Type: Regular\r\nMaterial : fabric :- 100% soft Rayon fabric stitching:- interlock stitching, palazzo fabric is also Rayon fabric. Best options for gifting on any occasion to your love ones\r\nLook your best at Festive or a casual day out with friends/family with this beautiful sari\r\nOccasion: best for everyday wear, casual and festive\r\nCare instructions: gentle hand / machine light wash separately in cold water, low temp. Iron, dry in shade, first wash  white dry clean, do not bleach and tumble dry. Disclaimer : product  may slightly vary due to photographic lighting sources, photo editing or your monitor settings\r\n', 'womens saree', '10', ''),
(38, 'womens designer dress', 'uploads/d2.jpg', 1500, 'Care Instructions: Hand Wash Only\r\nColor Name: Pink\r\n100% Polyester\r\nHand wash\r\nPleated\r\nMaxi\r\nAnkle-length', 'womens dress', '10', ''),
(39, 'beautiful dress', 'uploads/d4.jpg', 2700, 'Care Instructions: Hand Wash Only\r\nColor Name: Pink\r\n100% Polyester\r\nHand wash\r\nPleated\r\nMaxi\r\nAnkle-length', 'womens dress', '7', ''),
(40, 'womens jeans', 'uploads/wj6.jpg', 799, 'Care Instructions: Machine Wash\r\nFit Type: Skinny\r\nMaterial - 72% Cotton, 26% Polyester and 2% \r\nFit Type - Skinny fit\r\nHigh Rise\r\nZip fly with button closure\r\nBasic 5 Pocket Jeans; Scoop Pocket', 'womens jeans', '8', ''),
(41, 'womens relaxed jeans ', 'uploads/wj3.jpg', 1000, 'Care Instructions: Machine Wash\r\nFit Type: Skinny\r\nMaterial - 72% Cotton, 26% Polyester and 2%\r\nFit Type - Skinny fit\r\nHigh Rise\r\nZip fly with button closure\r\nBasic 5 Pocket Jeans; Scoop Pocket', 'womens jeans', '9', ''),
(42, 'womens hight size jeans', 'uploads/wj8.jpg', 999, 'Care Instructions: Machine Wash\r\nFit Type: large\r\nMaterial - 72% Cotton, 26% Polyester and 2% \r\nFit Type - Skinny fit\r\nHigh Rise\r\nZip fly with button closure\r\nBasic 5 Pocket Jeans; Scoop Pocket', 'womens jeans', '8', ''),
(43, 'womens hight size jeans', 'uploads/wj8.jpg', 999, 'Care Instructions: Machine Wash\r\nFit Type: large\r\nMaterial - 72% Cotton, 26% Polyester and 2% \r\nFit Type - Skinny fit\r\nHigh Rise\r\nZip fly with button closure\r\nBasic 5 Pocket Jeans; Scoop Pocket', 'womens jeans', '8', ''),
(44, 'luise fillipe', 'uploads/s2.webp', 500, 'red shirt', 'mens shirts', '5', ''),
(45, 'designer saree', 'uploads/anjaneya_sarees_maroon_zari_woven_traditional_saree___.webp', 1500, 'beautiful saree for woman', 'womens saree', '10', 'M'),
(46, 'jk', 'uploads/k7.jpg', 500, 'dsakdjskdjsk', 'Mens kurtas', '5', ''),
(47, 'shirt', 'uploads/s6.jpg', 2000, 'hasjashj', '', '10', 'X'),
(48, 'saree1', 'uploads/saree3.jpg', 2000, 'Varkala Silk Sarees Womens Banarasi Katan Silk Saree With Blouse Piece', 'Womens saree', '10', 'X'),
(49, 'saree2', 'uploads/saree2.jpg', 2000, 'Varkala Silk Sarees Womens Banarasi Katan Silk Saree With Blouse Piece', 'Womens saree', '10', 'X'),
(50, 'saree3', 'uploads/saree4.jpg', 3000, 'Varkala Silk Sarees Womens Banarasi Katan Silk Saree With Blouse Piece', 'Womens saree', '15', 'X'),
(51, 'saree4', 'uploads/saree5.jpg', 5000, 'Varkala Silk Sarees Womens Banarasi Katan Silk Saree With Blouse Piece', 'Womens saree', '10', 'X'),
(52, 'saree6', 'uploads/saree10.jpg', 10000, 'Varkala Silk Sarees Womens Banarasi Katan Silk Saree With Blouse Piece', 'Womens saree', '5', 'X'),
(53, 'jeans', 'uploads/wj7.jpg', 2500, 'beautiful & comfortable jeans foe women', 'Womens jeans', '10', 'X'),
(54, 'women jeans', 'uploads/wj8.jpg', 3000, 'beautiful & comfortable jeans foe women', 'Womens jeans', '15', 'X'),
(55, 'women jeans', 'uploads/wj10.jpg', 3500, 'beautiful & comfortable jeans foe women', 'Womens jeans', '10', 'X'),
(56, 'tops1', 'uploads/t1.jpg', 2500, 'J B Fashion Printed Women Top with Full Sleeves for Fancy top,Stylish top, Casual Wear Top for Women/Girls Top', '', '10', 'X'),
(57, 'women top', 'uploads/t3.jpg', 3500, 'J B Fashion Printed Women Top with Full Sleeves for Fancy top,Stylish top, Casual Wear Top for Women/Girls Top', '', '10', 'X'),
(58, 'tops1', 'uploads/top3.jpg', 2000, 'J B Fashion Printed Women Top with Full Sleeves for Fancy top,Stylish top, Casual Wear Top for Women/Girls Top', '', '10', 'X'),
(59, 'tops2', 'uploads/t4.jpg', 1000, 'J B Fashion Printed Women Top with Full Sleeves for Fancy top,Stylish top, Casual Wear Top for Women/Girls Top', 'Womens tops', '20', 'X'),
(60, 'tops3', 'uploads/t2.jpg', 500, 'J B Fashion Printed Women Top with Full Sleeves for Fancy top,Stylish top, Casual Wear Top for Women/Girls Top', 'Womens tops', '20', 'X'),
(62, 'tops3', 'uploads/top5.jpg', 3000, 'top1', 'Womens tops', '10', 'X'),
(63, 'tops4', 'uploads/top3.jpg', 1000, 'top', 'Womens tops', '10', 'X'),
(64, 'top6', 'uploads/top6.jpg', 2000, 'top1', 'Womens tops', '20', 'X'),
(65, 'kurti3', 'uploads/kurti_5.jpg', 2000, 'tare Instructions: Hand Wash Fit Type: Regular Material : fabric :- 100% soft Rayon fabric stitching:- interlock stitching, palazzo fabric is also Rayon fabric. Best options for gifting on any occasion to your love ones Look your best at Festive or a casual day out with friends/family with this beautiful kurt Occasion: best for everyday wear, casual and festive Care instructions: gentle hand / machine light wash separately in cold water, low temp. Iron, dry in shade, first wash preferblack white dry clean, do not bleach and tumble dry. Disclaimer : product colour may slightly vary due to photographic lighting sources, photo editing or your monitor settings', 'Womens kurties', '2000', 'X'),
(66, 'kurti4', 'uploads/kurti_11.jpg', 2000, 'are Instructions: Hand Wash Fit Type: Regular Material : fabric :- 100% soft Rayon fabric stitching:- interlock stitching, palazzo fabric is also Rayon fabric. Best options for gifting on any occasion to your love ones Look your best at Festive or a casual day out with friends/family with this beautiful kurt Occasion: best for everyday wear, casual and festive Care instructions: gentle hand / machine light wash separately in cold water, low temp. Iron, dry in shade, first wash preferblack white dry clean, do not bleach and tumble dry. Disclaimer : product colour may slightly vary due to photographic lighting sources, photo editing or your monitor settings', 'Womens kurties', '20', 'X'),
(67, 'kurti5', 'uploads/kurti_10.jpg', 2000, 'are Instructions: Hand Wash Fit Type: Regular Material : fabric :- 100% soft Rayon fabric stitching:- interlock stitching, palazzo fabric is also Rayon fabric. Best options for gifting on any occasion to your love ones Look your best at Festive or a casual day out with friends/family with this beautiful kurt Occasion: best for everyday wear, casual and festive Care instructions: gentle hand / machine light wash separately in cold water, low temp. Iron, dry in shade, first wash preferblack white dry clean, do not bleach and tumble dry. Disclaimer : product colour may slightly vary due to photographic lighting sources, photo editing or your monitor settings', 'Womens kurties', '10', 'X'),
(68, 'shirt2', 'uploads/s8.jpg', 10000, 'Care Instructions: Machine Wash Fit Type: slim fit Color Name: Bottle Green 100% Cotton Long sleeve Slim fit Machine wash Made in India 100% Premium cotton, pre-washed for extremely soft hand feel Stylish plain casual shirt for Men\r\n\r\n', 'Mens shirts', '10', 'X'),
(69, 'shirt3', 'uploads/s5.jpg', 1000, 'Care Instructions: Machine Wash Fit Type: slim fit Color Name: Bottle Green 100% Cotton Long sleeve Slim fit Machine wash Made in India 100% Premium cotton, pre-washed for extremely soft hand feel Stylish plain casual shirt for Men\r\n\r\n', 'Mens shirts', '20', 'X'),
(70, 'shuit2', 'uploads/b6.jpg', 2000, 'Care Instructions: Dry Clean Only Fit Type: Slim Fit Fabric: Poly Viscose Wash Care: Dry Clean Only; Style: Single Breasted Pattern: Checkered; Fit: Slim Fit Closure: Buttoned; Occasion: Evening Number of outside pockets: 3; Number of inside pockets: 2\r\n\r\n', '', '10', 'X'),
(71, 'shuit3', 'uploads/b8.jpg', 3500, 'Care Instructions: Dry Clean Only Fit Type: Slim Fit Fabric: Poly Viscose Wash Care: Dry Clean Only; Style: Single Breasted Pattern: Checkered; Fit: Slim Fit Closure: Buttoned; Occasion: Evening Number of outside pockets: 3; Number of inside pockets: 2\r\n\r\n', 'Mens shuits', '20', 'X'),
(72, 'shuit4', 'uploads/b10.jpg', 5000, 'Care Instructions: Dry Clean Only Fit Type: Slim Fit Fabric: Poly Viscose Wash Care: Dry Clean Only; Style: Single Breasted Pattern: Checkered; Fit: Slim Fit Closure: Buttoned; Occasion: Evening Number of outside pockets: 3; Number of inside pockets: 2\r\n\r\n', 'Mens shuits', '20', 'X'),
(73, 'shuit5', 'uploads/b7.jpg', 10000, 'Care Instructions: Dry Clean Only Fit Type: Slim Fit Fabric: Poly Viscose Wash Care: Dry Clean Only; Style: Single Breasted Pattern: Checkered; Fit: Slim Fit Closure: Buttoned; Occasion: Evening Number of outside pockets: 3; Number of inside pockets: 2\r\n\r\n', 'Mens shuits', '10', 'X'),
(74, 'jeans3', 'uploads/j4.jpg', 1000, 'Material: Cotton Color: Dark Blue Fit Type: Relaxed; Occasion: Casual Package Contents: 1 Jeans Wash Care Intruction Do not bleach, dry in shade Disclaimer: Kindly refer to the size chart (Also In Images) for fitin measurements.', 'Mens jeans', '10', 'X'),
(75, 'jeans4', 'uploads/j10.jpg', 1000, 'Material: Cotton Color: Dark Blue Fit Type: Relaxed; Occasion: Casual Package Contents: 1 Jeans Wash Care Intruction Do not bleach, dry in shade Disclaimer: Kindly refer to the size chart (Also In Images) for fitin measurements.', 'Mens jeans', '10', 'X'),
(76, 'dress', 'uploads/d7.jpg', 2000, 'Material: Cotton Color: Dark Blue Fit Type: Relaxed; Occasion: Casual Package Contents: 1 Jeans Wash Care Intruction Do not bleach, dry in shade Disclaimer: Kindly refer to the size chart (Also In Images) for fitin measurements.', 'Womens dress', '10', 'X'),
(77, 'dress1', 'uploads/d8.jpg', 1000, 'Material: Cotton Color: Dark Blue Fit Type: Relaxed; Occasion: Casual Package Contents: 1 Jeans Wash Care Intruction Do not bleach, dry in shade Disclaimer: Kindly refer to the size chart (Also In Images) for fitin measurements.', 'Womens dress', '20', 'X'),
(78, 'dress2', 'uploads/d8.jpg', 5000, 'Material: Cotton Color: Dark Blue Fit Type: Relaxed; Occasion: Casual Package Contents: 1 Jeans Wash Care Intruction Do not bleach, dry in shade Disclaimer: Kindly refer to the size chart (Also In Images) for fitin measurements.', 'Womens dress', '10', 'X');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(11) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `user_email` varchar(50) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `user_contect` bigint(20) NOT NULL,
  `user_address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `user_name`, `user_email`, `user_password`, `user_contect`, `user_address`) VALUES
(4, 'shyam', 'shyam1@gmail.com', 's123', 998877, 'ramehswar nagar'),
(6, 'kaushal', 'kd123@gmail.com', 'kd123', 789977998, 'lalpur'),
(8, 'DD', 'dd123@gmail.com', 'dd123', 8877993379, 'khodiyar colony'),
(9, 'jadeja dushyant', 'jd123@gmail.com', 'jd123', 99822787, 'rameshwar nagar, jamnagar'),
(10, 'prnv', 'kp123@gmail.com', 'kp123', 6788877676, 'vinayak park'),
(16, 'Zakhariya Abhishek', 'zakhariyabhi2509@gmail.com', 'abhi123', 9979537197, 'Rameshwar nagar, raj rajeshwari sociaty, street no.7, Jamnagar - 361 008.');

-- --------------------------------------------------------

--
-- Table structure for table `tmp_addtocart`
--

CREATE TABLE `tmp_addtocart` (
  `cno` int(11) NOT NULL,
  `date` varchar(255) NOT NULL,
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `ptype` text NOT NULL,
  `uno` int(11) NOT NULL,
  `uname` varchar(255) NOT NULL,
  `qty` varchar(5) NOT NULL,
  `size` varchar(5) NOT NULL,
  `total` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tmp_addtocart`
--

INSERT INTO `tmp_addtocart` (`cno`, `date`, `id`, `name`, `price`, `image`, `ptype`, `uno`, `uname`, `qty`, `size`, `total`) VALUES
(74, '10-12-21', 23, 'mens full slive t-shirt', 600, 'uploads/t6.jpg', 'Product comes in assorted prints. Actual colors and prints might vary for the image shown on the website Collection: 24 x 7 ; Style no: 2714 80% cotton & 20% poly Premium Combed Cotton rich fabric Modern fit Ribbed crew-neck prevents sagging Authentic Jockey logo label', 16, 'Zakhariya Abhishek', '1', 'XS', '600'),
(75, '10-12-21', 30, 'mens shuit', 1500, 'uploads/b6.jpg', 'Care Instructions: Dry Clean Only\r\nFit Type: Slim Fit\r\nFabric: Poly Viscose\r\nWash Care: Dry Clean Only; Style: Single Breasted\r\nPattern: Checkered; Fit: Slim Fit\r\nClosure: Buttoned; Occasion: Evening\r\nNumber of outside pockets: 3; Number of inside pockets: 2\r\n', 16, 'Zakhariya Abhishek', '1', 'XS', '1500'),
(76, '13-12-21', 38, 'womens designer dress', 1500, 'uploads/d2.jpg', 'Care Instructions: Hand Wash Only\r\nColor Name: Pink\r\n100% Polyester\r\nHand wash\r\nPleated\r\nMaxi\r\nAnkle-length', 10, 'prnv', '1', 'XS', '1500'),
(77, '13-12-21', 23, 'mens full slive t-shirt', 600, 'uploads/t6.jpg', 'Product comes in assorted prints. Actual colors and prints might vary for the image shown on the website Collection: 24 x 7 ; Style no: 2714 80% cotton & 20% poly Premium Combed Cotton rich fabric Modern fit Ribbed crew-neck prevents sagging Authentic Jockey logo label', 10, 'prnv', '1', 'XS', '600'),
(78, '13-12-21', 28, 'mens kurta', 500, 'uploads/k1.jpg', 'Fabric: Poly Viscose\r\nWash Care: Dry Clean Only\r\nStyle: Single Breasted; Pattern: Solid\r\nFit: Slim Fit; Closure: Buttoned\r\nOccasion: Formal; Number of outside pockets: 2\r\n', 10, 'prnv', '1', 'XS', '500'),
(79, '13-12-21', 31, 'mens jeans', 500, 'uploads/j8.jpg', 'Material: Cotton\r\nColor: Dark Blue\r\nFit Type: Relaxed; Occasion: Casual\r\nPackage Contents: 1 Jeans\r\nWash Care Intructions Do not bleach, dry in shade\r\nDisclaimer: Kindly refer to the size chart (Also In Images) for fitimeasurements.', 10, 'prnv', '1', 'XS', '500'),
(80, '13-12-21', 59, 'tops2', 1000, 'uploads/t4.jpg', 'J B Fashion Printed Women Top with Full Sleeves for Fancy top,Stylish top, Casual Wear Top for Women/Girls Top', 10, 'prnv', '1', 'XS', '1000'),
(81, '13-12-21', 46, 'jk', 500, 'uploads/k7.jpg', 'dsakdjskdjsk', 10, 'prnv', '1', 'XS', '500');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin_master`
--
ALTER TABLE `admin_master`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `drop_down`
--
ALTER TABLE `drop_down`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `finalorder`
--
ALTER TABLE `finalorder`
  ADD PRIMARY KEY (`fono`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tmp_addtocart`
--
ALTER TABLE `tmp_addtocart`
  ADD PRIMARY KEY (`cno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `admin_master`
--
ALTER TABLE `admin_master`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `drop_down`
--
ALTER TABLE `drop_down`
  MODIFY `cat_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `finalorder`
--
ALTER TABLE `finalorder`
  MODIFY `fono` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;
--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;
--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `tmp_addtocart`
--
ALTER TABLE `tmp_addtocart`
  MODIFY `cno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
