-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 21, 2021 at 10:12 PM
-- Server version: 8.0.21
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `suburban_outfitters`
--

-- --------------------------------------------------------

--
-- Table structure for table `campaign`
--

DROP TABLE IF EXISTS `campaign`;
CREATE TABLE IF NOT EXISTS `campaign` (
  `campID` int NOT NULL AUTO_INCREMENT,
  `prodID` int DEFAULT NULL,
  `discount` int DEFAULT NULL,
  `details` varchar(100) DEFAULT NULL,
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  PRIMARY KEY (`campID`),
  KEY `prodID` (`prodID`)
) ENGINE=MyISAM AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `campaign`
--

INSERT INTO `campaign` (`campID`, `prodID`, `discount`, `details`, `start_date`, `end_date`) VALUES
(1, 1, 10, 'St. Paticks Day Sale 21', '2021-03-17', '2021-03-25'),
(2, 2, 10, 'Presidents Day Sale 21', '2021-02-15', '2021-03-06'),
(3, 3, 10, 'Valentines Day Sale 21', '2021-02-14', '2021-02-14'),
(4, 4, 10, 'MLK Day Sale 21', '2021-01-18', '2021-01-18'),
(5, 5, 15, 'New Years Sale 21', '2020-12-31', '2021-01-01'),
(6, 6, 15, 'Christmas Sale 20', '2020-12-20', '2020-12-25'),
(7, 7, 20, 'Black Friday 20', '2020-11-27', '2020-11-27'),
(8, 8, 10, 'Veterans Day Sale 20', '2020-11-11', '2020-11-11'),
(9, 9, 10, 'Halloween Day Sale 20', '2020-10-31', '2020-11-07'),
(10, 10, 10, 'Columbus Day Sale 20', '2020-10-12', '2020-10-12'),
(11, 11, 10, 'April Fools Day Sale 21', '2021-04-01', '2021-04-01'),
(12, 12, 10, 'Tax Day Sale 21', '2021-04-15', '2021-04-15'),
(13, 13, 10, 'Earth Day Sale 21', '2021-04-22', '2021-04-22'),
(14, 14, 15, 'Mothers Day Sale 21', '2021-05-09', '2021-05-09'),
(15, 15, 10, 'Memorial Day Sale 21', '2021-05-31', '2021-05-31'),
(16, 16, 10, 'Fathers Day Sale 21', '2021-06-20', '2021-06-20'),
(17, 17, 10, 'Independence Day Sale 21', '2021-07-04', '2021-07-04'),
(18, 18, 10, 'Labor Day Sale 21', '2021-09-06', '2021-09-06'),
(19, 19, 15, 'Columbus Day Sale 21', '2021-10-11', '2021-10-11');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

DROP TABLE IF EXISTS `customer`;
CREATE TABLE IF NOT EXISTS `customer` (
  `custID` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `first_name` varchar(100) DEFAULT NULL,
  `last_name` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `phone_number` int DEFAULT NULL,
  `address` varchar(150) DEFAULT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `role` varchar(20) NOT NULL,
  PRIMARY KEY (`custID`)
) ENGINE=MyISAM AUTO_INCREMENT=30 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`custID`, `first_name`, `last_name`, `email`, `phone_number`, `address`, `username`, `password`, `role`) VALUES
(1, 'Pavel', 'Everist', 'peverist0@salon.com', 286, '19876 Eastlawn Lane', 'peverist0', '$2y$10$V8QjYiZu2MoUcFfZUnkRWOL/rfFO2TagbzxuyNNx3wkanaqsRbNxO', 'customer'),
(2, 'Sorcha', 'Zettoi', 'szettoi1@prweb.com', 686, '086 Harbort Lane', 'szettoi1', '$2y$10$V8QjYiZu2MoUcFfZUnkRWOL/rfFO2TagbzxuyNNx3wkanaqsRbNxO', 'customer'),
(3, 'Barbaraanne', 'Northall', 'bnorthall2@techcrunch.com', 585, '80 Blackbird Plaza', 'bnorthall2', '$2y$10$V8QjYiZu2MoUcFfZUnkRWOL/rfFO2TagbzxuyNNx3wkanaqsRbNxO', 'customer'),
(4, 'Gratiana', 'Curneen', 'gcurneen3@sitemeter.com', 292, '01 Thompson Park', 'gcurneen3', '$2y$10$V8QjYiZu2MoUcFfZUnkRWOL/rfFO2TagbzxuyNNx3wkanaqsRbNxO', 'customer'),
(5, 'Casey', 'Bladesmith', 'cbladesmith4@ft.com', 730, '10748 Muir Place', 'cbladesmith4', '$2y$10$V8QjYiZu2MoUcFfZUnkRWOL/rfFO2TagbzxuyNNx3wkanaqsRbNxO', 'customer'),
(6, 'Tabby', 'Blodg', 'tblodg5@reuters.com', 425, '8946 American Ash Road', 'tblodg5', '$2y$10$V8QjYiZu2MoUcFfZUnkRWOL/rfFO2TagbzxuyNNx3wkanaqsRbNxO', 'customer'),
(7, 'Codi', 'Kilmaster', 'ckilmaster6@google.it', 452, '70 Vernon Street', 'ckilmaster6', '$2y$10$V8QjYiZu2MoUcFfZUnkRWOL/rfFO2TagbzxuyNNx3wkanaqsRbNxO', 'customer'),
(8, 'Cyrill', 'Ovid', 'covid7@meetup.com', 861, '503 Stang Court', 'covid7', '$2y$10$V8QjYiZu2MoUcFfZUnkRWOL/rfFO2TagbzxuyNNx3wkanaqsRbNxO', 'customer'),
(9, 'George', 'Giottini', 'ggiottini8@tumblr.com', 112, '9832 Mallard Junction', 'ggiottini8', '$2y$10$V8QjYiZu2MoUcFfZUnkRWOL/rfFO2TagbzxuyNNx3wkanaqsRbNxO', 'customer'),
(10, 'Tucky', 'Barendtsen', 'tbarendtsen9@ucla.edu', 316, '229 Lighthouse Bay Point', 'tbarendtsen9', '$2y$10$V8QjYiZu2MoUcFfZUnkRWOL/rfFO2TagbzxuyNNx3wkanaqsRbNxO', 'customer'),
(11, 'Shawnee', 'Piddlehinton', 'spiddlehintona@gov.uk', 309, '1 Birchwood Point', 'spiddlehintona', '$2y$10$V8QjYiZu2MoUcFfZUnkRWOL/rfFO2TagbzxuyNNx3wkanaqsRbNxO', 'customer'),
(12, 'Lambert', 'Chasmoor', 'lchasmoorb@soup.io', 686, '496 Bunker Hill Terrace', 'lchasmoorb', '$2y$10$V8QjYiZu2MoUcFfZUnkRWOL/rfFO2TagbzxuyNNx3wkanaqsRbNxO', 'customer'),
(13, 'Rosy', 'Garett', 'rgarettc@ovh.net', 648, '293 Corscot Point', 'rgarettc', '$2y$10$V8QjYiZu2MoUcFfZUnkRWOL/rfFO2TagbzxuyNNx3wkanaqsRbNxO', 'customer'),
(14, 'Eliza', 'Lober', 'eloberd@bravesites.com', 545, '27 Ohio Point', 'eloberd', '$2y$10$V8QjYiZu2MoUcFfZUnkRWOL/rfFO2TagbzxuyNNx3wkanaqsRbNxO', 'customer'),
(15, 'Harwilll', 'Hands', 'hhandse@alexa.com', 815, '538 Mayer Center', 'hhandse', '$2y$10$V8QjYiZu2MoUcFfZUnkRWOL/rfFO2TagbzxuyNNx3wkanaqsRbNxO', 'customer'),
(16, 'Madalyn', 'Vinck', 'mvinckf@phpbb.com', 306, '356 Northport Road', 'mvinckf', '$2y$10$V8QjYiZu2MoUcFfZUnkRWOL/rfFO2TagbzxuyNNx3wkanaqsRbNxO', 'customer'),
(17, 'Torry', 'Newhouse', 'tnewhouseg@google.com.hk', 910, '2 Maple Alley', 'tnewhouseg', '$2y$10$V8QjYiZu2MoUcFfZUnkRWOL/rfFO2TagbzxuyNNx3wkanaqsRbNxO', 'customer'),
(18, 'Josey', 'Hyndson', 'jhyndsonh@who.int', 413, '8 Riverside Hill', 'jhyndsonh', '$2y$10$V8QjYiZu2MoUcFfZUnkRWOL/rfFO2TagbzxuyNNx3wkanaqsRbNxO', 'customer'),
(19, 'Renard', 'Muzzillo', 'rmuzzilloi@delicious.com', 470, '9 3rd Terrace', 'rmuzzilloi', '$2y$10$V8QjYiZu2MoUcFfZUnkRWOL/rfFO2TagbzxuyNNx3wkanaqsRbNxO', 'customer'),
(20, 'Neysa', 'Courtliff', 'ncourtliffj@liveinternet.ru', 612, '0 Sheridan Park', 'ncourtliffj', '$2y$10$V8QjYiZu2MoUcFfZUnkRWOL/rfFO2TagbzxuyNNx3wkanaqsRbNxO', 'customer'),
(21, 'Hi', 'Gyorgy', 'hgyorgyk@virginia.edu', 149, '53980 Sachs Lane', 'hgyorgyk', '$2y$10$V8QjYiZu2MoUcFfZUnkRWOL/rfFO2TagbzxuyNNx3wkanaqsRbNxO', 'customer'),
(22, 'Emanuele', 'Deniso', 'edenisol@google.fr', 888, '7 Farmco Terrace', 'edenisol', '$2y$10$V8QjYiZu2MoUcFfZUnkRWOL/rfFO2TagbzxuyNNx3wkanaqsRbNxO', 'customer'),
(23, 'Jacqui', 'Hansberry', 'jhansberrym@multiply.com', 654, '52586 3rd Center', 'jhansberrym', '$2y$10$V8QjYiZu2MoUcFfZUnkRWOL/rfFO2TagbzxuyNNx3wkanaqsRbNxO', 'customer'),
(24, 'Tamma', 'Wiggington', 'twiggingtonn@huffingtonpost.com', 691, '686 Mendota Circle', 'twiggingtonn', '$2y$10$V8QjYiZu2MoUcFfZUnkRWOL/rfFO2TagbzxuyNNx3wkanaqsRbNxO', 'customer'),
(25, 'Dareen', 'Spinola', 'dspinolao@flickr.com', 138, '3390 Portage Circle', 'dspinolao', '$2y$10$V8QjYiZu2MoUcFfZUnkRWOL/rfFO2TagbzxuyNNx3wkanaqsRbNxO', 'customer'),
(26, 'Rob', 'Ber', 'robber@net.net', 555, '45 Holy Oaks', 'rber1', '$2y$10$b5PxwvMwpq3Cutsq4WrIneQnzrx2u9ohv/kr9.hs3vtZO6xGzv4r2', 'customer'),
(27, 'Amelia', 'Le', 'foodisgoodx3@hotmail.com', 123456789, '8989 S CRYING CIR', NULL, NULL, ''),
(28, 'Brody', 'Westberg', 'bbwest@gmail.com', 123456789, '8989 BBW CIR', 'bbwest', 'bwwest1', ''),
(29, 'Boba', 'Lover', 'bobalover999', 123456789, 'Kungfu Tea Dr', 'bobalover', 'foodisgoodx3', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

DROP TABLE IF EXISTS `employee`;
CREATE TABLE IF NOT EXISTS `employee` (
  `empID` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `first_name` varchar(100) DEFAULT NULL,
  `last_name` varchar(100) DEFAULT NULL,
  `position` varchar(100) DEFAULT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `role` varchar(20) NOT NULL,
  PRIMARY KEY (`empID`)
) ENGINE=MyISAM AUTO_INCREMENT=31 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`empID`, `first_name`, `last_name`, `position`, `username`, `password`, `role`) VALUES
(1, 'Ignatius', 'Woltering', 'Automation Specialist I', 'iwoltering0', '$2y$10$V8QjYiZu2MoUcFfZUnkRWOL/rfFO2TagbzxuyNNx3wkanaqsRbNxO', 'employee'),
(28, 'Bob', 'Jones', 'Administrator II', 'bjones', 'password123', 'admin'),
(3, 'Wilbert', 'Surman-Wells', 'Nurse Practicioner', 'wsurmanwells2', '$2y$10$V8QjYiZu2MoUcFfZUnkRWOL/rfFO2TagbzxuyNNx3wkanaqsRbNxO', 'employee'),
(4, 'Shelton', 'Ough', 'Social Worker', 'sough3', '$2y$10$V8QjYiZu2MoUcFfZUnkRWOL/rfFO2TagbzxuyNNx3wkanaqsRbNxO', 'employee'),
(5, 'Domini', 'Happs', 'Senior Cost Accountant', 'dhapps4', '$2y$10$V8QjYiZu2MoUcFfZUnkRWOL/rfFO2TagbzxuyNNx3wkanaqsRbNxO', 'employee'),
(6, 'Yolane', 'Carpenter', 'Staff Scientist', 'ycarpenter5', '$2y$10$V8QjYiZu2MoUcFfZUnkRWOL/rfFO2TagbzxuyNNx3wkanaqsRbNxO', 'employee'),
(7, 'Andee', 'Larrett', 'Help Desk Technician', 'alarrett6', '$2y$10$V8QjYiZu2MoUcFfZUnkRWOL/rfFO2TagbzxuyNNx3wkanaqsRbNxO', 'employee'),
(8, 'Martelle', 'Forsey', 'Financial Advisor', 'mforsey7', '$2y$10$V8QjYiZu2MoUcFfZUnkRWOL/rfFO2TagbzxuyNNx3wkanaqsRbNxO', 'employee'),
(9, 'Xever', 'Lewsie', 'Nurse', 'xlewsie8', '$2y$10$V8QjYiZu2MoUcFfZUnkRWOL/rfFO2TagbzxuyNNx3wkanaqsRbNxO', 'employee'),
(10, 'Caryl', 'Collyer', 'Associate Professor', 'ccollyer9', '$2y$10$V8QjYiZu2MoUcFfZUnkRWOL/rfFO2TagbzxuyNNx3wkanaqsRbNxO', 'employee'),
(11, 'Gran', 'Gourley', 'Teacher', 'ggourleya', '$2y$10$V8QjYiZu2MoUcFfZUnkRWOL/rfFO2TagbzxuyNNx3wkanaqsRbNxO', 'employee'),
(12, 'Kelsey', 'Dingle', 'Graphic Designer', 'kdingleb', '$2y$10$V8QjYiZu2MoUcFfZUnkRWOL/rfFO2TagbzxuyNNx3wkanaqsRbNxO', 'employee'),
(13, 'Sergent', 'Billson', 'Quality Control Specialist', 'sbillsonc', '$2y$10$V8QjYiZu2MoUcFfZUnkRWOL/rfFO2TagbzxuyNNx3wkanaqsRbNxO', 'employee'),
(14, 'Bink', 'Trotton', 'Assistant Professor', 'btrottond', '$2y$10$V8QjYiZu2MoUcFfZUnkRWOL/rfFO2TagbzxuyNNx3wkanaqsRbNxO', 'employee'),
(15, 'Matt', 'Oneal', 'Software Engineer IV', 'moneale', '$2y$10$V8QjYiZu2MoUcFfZUnkRWOL/rfFO2TagbzxuyNNx3wkanaqsRbNxO', 'employee'),
(16, 'Kylie', 'Iacovo', 'Sales Representative', 'kiacovof', '$2y$10$V8QjYiZu2MoUcFfZUnkRWOL/rfFO2TagbzxuyNNx3wkanaqsRbNxO', 'employee'),
(17, 'Effie', 'Ponten', 'VP Accounting', 'eponteng', '$2y$10$V8QjYiZu2MoUcFfZUnkRWOL/rfFO2TagbzxuyNNx3wkanaqsRbNxO', 'employee'),
(18, 'Stanislas', 'Tarbard', 'Director of Sales', 'starbardh', '$2y$10$V8QjYiZu2MoUcFfZUnkRWOL/rfFO2TagbzxuyNNx3wkanaqsRbNxO', 'employee'),
(19, 'Donny', 'Sharphouse', 'Structural Analysis Engineer', 'dsharphousei', '$2y$10$V8QjYiZu2MoUcFfZUnkRWOL/rfFO2TagbzxuyNNx3wkanaqsRbNxO', 'employee'),
(20, 'Gabriele', 'Berwick', 'Civil Engineer', 'gberwickj', '$2y$10$V8QjYiZu2MoUcFfZUnkRWOL/rfFO2TagbzxuyNNx3wkanaqsRbNxO', 'employee'),
(29, 'Lucy', 'Brown', 'Therapist', 'lbrown', 'password123', 'employee'),
(21, 'Dave', 'Hyde', 'admin', 'dhyde1', '$2y$10$9kvOSrBJuY/PikTtzzT2ke9QRoUj0xeZfLmBZzoQOkg.rSph4d3Cq', 'admin'),
(22, 'Amelia', 'Le', 'admin', 'ale1', '$2y$10$9kvOSrBJuY/PikTtzzT2ke9QRoUj0xeZfLmBZzoQOkg.rSph4d3Cq', 'admin'),
(23, 'Dan', 'Orton', 'admin', 'dorton1', '$2y$10$9kvOSrBJuY/PikTtzzT2ke9QRoUj0xeZfLmBZzoQOkg.rSph4d3Cq', 'admin'),
(30, 'Chuck', 'Cheese', 'Entertainer', 'ccheese', 'password123', 'employee');

-- --------------------------------------------------------

--
-- Table structure for table `inventory`
--

DROP TABLE IF EXISTS `inventory`;
CREATE TABLE IF NOT EXISTS `inventory` (
  `invID` int NOT NULL AUTO_INCREMENT,
  `prodID` int DEFAULT NULL,
  `vendorID` int DEFAULT NULL,
  `date_ordered` date DEFAULT NULL,
  `quantity` int DEFAULT NULL,
  `cost` int DEFAULT NULL,
  `imagepath` varchar(128) DEFAULT NULL,
  PRIMARY KEY (`invID`),
  KEY `prodID` (`prodID`),
  KEY `vendorID` (`vendorID`)
) ENGINE=MyISAM AUTO_INCREMENT=49 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `inventory`
--

INSERT INTO `inventory` (`invID`, `prodID`, `vendorID`, `date_ordered`, `quantity`, `cost`, `imagepath`) VALUES
(1, 1, 1, '2021-03-16', 45, 2010, 'images/wrap-dress1.png'),
(2, 2, 1, '2021-03-16', 35, 3000, 'images/fringe-dress1.png'),
(3, 3, 1, '2021-03-16', 55, 3500, 'images/floral-squareneck-dress1.png'),
(4, 4, 1, '2021-03-16', 55, 4500, 'images/blue-pattern-dress1.png'),
(5, 5, 1, '2021-03-16', 35, 2000, 'images/puff-pink-dress1.png'),
(6, 6, 1, '2021-03-16', 25, 1000, 'images/tie-shoulder-croptop1.png'),
(7, 7, 2, '2021-03-16', 30, 2001, 'images/brown-chain-skirt1.png'),
(8, 8, 1, '2021-03-16', 30, 3000, 'images/fringe-top1.png'),
(9, 9, 1, '2021-03-16', 20, 2019, 'images/white-cardigan1.png'),
(10, 10, 1, '2021-03-16', 25, 2020, 'images/brown-plaid-buttonup1.png'),
(11, 11, 2, '2021-03-16', 45, 3509, 'images/black-ripped-jeans1.png'),
(12, 12, 1, '2021-03-16', 15, 2050, 'images/black-leather-top1.png'),
(13, 13, 1, '2021-03-16', 45, 5000, 'images/allover-floral-dress1.png'),
(14, 14, 1, '2021-03-16', 20, 35000, 'images/green-top1.png'),
(15, 15, 2, '2021-03-16', 45, 6000, 'images/green-brown-jeans1.png'),
(16, 16, 1, '2021-03-16', 40, 5500, 'images/white-dress1.png'),
(17, 17, 1, '2021-03-16', 25, 3505, 'images/blue-skater-skirt1.png'),
(18, 18, 1, '2021-03-16', 15, 5500, 'images/orange-top1.png'),
(19, 19, 2, '2021-03-16', 55, 7000, 'images/poka-dot-white-dress1.png'),
(20, 20, 1, '2021-03-16', 55, 8000, 'images/white-lace-dress1.png'),
(21, 21, 1, '2021-03-16', 35, 7500, 'images/butterfly-jeans1.png'),
(22, 22, 1, '2021-03-16', 30, 6500, 'images/blue-sleeveless-dress1.png'),
(23, 23, 2, '2021-03-16', 35, 6000, 'images/black-sweater1.png'),
(24, 24, 1, '2021-03-16', 35, 6000, 'images/pullover1.png'),
(25, 25, 2, '2021-03-16', 35, 6000, 'images/zebra-pants1.png'),
(26, 26, 2, '2021-03-16', 25, 2600, 'images/white-flare-pants1.png'),
(27, 27, 1, '2021-03-16', 25, 2500, 'images/white-vneck-blouse1.png'),
(28, 28, 1, '2021-03-16', 20, 2000, 'images/white-sweats1.png'),
(29, 29, 1, '2021-03-16', 20, 2000, 'images/white-chain-sweater1.png'),
(30, 30, 1, '2021-03-16', 25, 3000, 'images/purple-shorts1.png'),
(31, 31, 2, '2021-03-16', 30, 2500, 'images/flap-pocket-cord-pants1.png'),
(32, 32, 1, '2021-03-16', 15, 200, 'images/truck-tshirt1.png'),
(33, 33, 1, '2021-03-16', 25, 2050, 'images/strawberry-shorts1.png'),
(34, 34, 2, '2021-03-16', 35, 400, 'images/yellow-floral-dress1.png'),
(35, 35, 1, '2021-03-16', 25, 250, 'images/black-bodycon-dress1.png'),
(36, 36, 2, '2021-03-16', 50, 2000, 'images/black-sheer-dress1.png'),
(37, 37, 1, '2021-03-16', 45, 2000, 'images/black-white-jeans1.png'),
(38, 38, 2, '2021-03-16', 15, 500, 'images/front-tie-top1.png'),
(39, 39, 1, '2021-03-16', 19, 300, 'images/satin-top1.png'),
(40, 40, NULL, '2021-03-26', 20, 3520, 'images/white-top1.png'),
(42, 41, NULL, '2021-03-19', 20, 3650, 'images/two-tone-shorts1.png'),
(43, 42, NULL, '2021-03-18', 20, 2560, 'images/black-white-sweats1.png'),
(44, 43, NULL, '2021-03-19', 20, 3650, 'images/white-floral-dress1.png'),
(45, 44, NULL, '2021-03-20', 20, 6520, 'images/black-floral-dress1.png'),
(46, 45, NULL, '2021-03-17', 20, 2530, 'images/blue-floral-skirt1.png'),
(48, 46, NULL, '2021-03-19', 20, 6500, 'images/cargo-pants1.png');

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

DROP TABLE IF EXISTS `order`;
CREATE TABLE IF NOT EXISTS `order` (
  `orderID` int NOT NULL AUTO_INCREMENT,
  `custID` int DEFAULT NULL,
  `campID` int DEFAULT NULL,
  `orderDate` date DEFAULT NULL,
  `total_price` int DEFAULT NULL,
  PRIMARY KEY (`orderID`),
  KEY `custID` (`custID`),
  KEY `campID` (`campID`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`orderID`, `custID`, `campID`, `orderDate`, `total_price`) VALUES
(1, 3, 12, '2021-03-18', 35),
(2, 3, 11, '2021-03-18', 45),
(3, 3, 12, '2021-03-18', 25),
(4, 4, 10, '2021-03-18', 55),
(5, 4, 14, '2021-03-18', 55),
(6, 4, 14, '2021-03-18', 65),
(7, 5, 12, '2021-03-18', 75),
(8, 5, 14, '2021-03-18', 80),
(9, 5, 3, '2021-03-18', 90),
(10, 6, 3, '2021-03-18', 150),
(11, 6, 4, '2021-03-18', 200),
(12, 6, 4, '2021-03-18', 300),
(13, 7, 5, '2021-03-18', 400),
(14, 7, 5, '2021-03-18', 95),
(15, 7, 3, '2021-03-18', 75),
(16, 7, 3, '2021-03-18', 55),
(17, 8, 5, '2021-03-18', 25),
(18, 8, 7, '2021-03-18', 30),
(19, 8, 9, '2021-03-18', 45),
(20, 8, 9, '2021-03-18', 55);

-- --------------------------------------------------------

--
-- Table structure for table `orderline`
--

DROP TABLE IF EXISTS `orderline`;
CREATE TABLE IF NOT EXISTS `orderline` (
  `lineID` int NOT NULL AUTO_INCREMENT,
  `orderID` int DEFAULT NULL,
  `prodID` int DEFAULT NULL,
  `quantity` int DEFAULT NULL,
  `price` int DEFAULT NULL,
  PRIMARY KEY (`lineID`),
  KEY `orderID` (`orderID`),
  KEY `prodID` (`prodID`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `orderline`
--

INSERT INTO `orderline` (`lineID`, `orderID`, `prodID`, `quantity`, `price`) VALUES
(1, 1, 2, 1, 45),
(2, 2, 3, 1, 35),
(3, 3, 4, 1, 55),
(4, 4, 5, 1, 55),
(5, 5, 6, 1, 35),
(6, 6, 7, 1, 25),
(7, 7, 8, 1, 30),
(8, 8, 9, 1, 30),
(9, 9, 10, 1, 20),
(10, 10, 11, 1, 25),
(11, 11, 12, 1, 45),
(12, 12, 13, 1, 20),
(13, 13, 15, 1, 45),
(14, 14, 17, 1, 25),
(15, 15, 19, 1, 55),
(16, 16, 2, 1, 45),
(17, 17, 3, 1, 35),
(18, 18, 4, 1, 55),
(19, 19, 5, 1, 55),
(20, 20, 6, 1, 35);

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

DROP TABLE IF EXISTS `payment`;
CREATE TABLE IF NOT EXISTS `payment` (
  `paymentID` int NOT NULL AUTO_INCREMENT,
  `orderID` int DEFAULT NULL,
  `custID` int DEFAULT NULL,
  `cardNumber` int DEFAULT NULL,
  `paymentDate` date DEFAULT NULL,
  PRIMARY KEY (`paymentID`),
  KEY `orderID` (`orderID`),
  KEY `custID` (`custID`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`paymentID`, `orderID`, `custID`, `cardNumber`, `paymentDate`) VALUES
(1, NULL, NULL, 123456789, '2021-03-20');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

DROP TABLE IF EXISTS `product`;
CREATE TABLE IF NOT EXISTS `product` (
  `prodID` int NOT NULL AUTO_INCREMENT,
  `vendorID` int DEFAULT NULL,
  `prodName` varchar(100) DEFAULT NULL,
  `prodType` varchar(100) DEFAULT NULL,
  `price` int DEFAULT NULL,
  `selection` varchar(128) DEFAULT NULL,
  `imagepath1` varchar(128) DEFAULT NULL,
  `imagepath2` varchar(128) DEFAULT NULL,
  `imagepath3` varchar(128) DEFAULT NULL,
  PRIMARY KEY (`prodID`),
  KEY `vendorID` (`vendorID`)
) ENGINE=MyISAM AUTO_INCREMENT=47 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`prodID`, `vendorID`, `prodName`, `prodType`, `price`, `selection`, `imagepath1`, `imagepath2`, `imagepath3`) VALUES
(1, 1, 'Floral Wrap Dress', 'Dress', 45, 'Featured', 'images/wrap-dress1.png', 'images/wrap-dress2.png', 'images/wrap-dress3.png'),
(2, 1, 'Fringe Hemm Dress', 'Dress', 35, 'Sale', 'images/fringe-dress1.png', 'images/fringe-dress2.png', 'images/fringe-dress3.png'),
(3, 1, 'Floral Square Neck Dress', 'Dress', 55, NULL, 'images/floral-squareneck-dress1.png', 'images/floral-squareneck-dress2.png', 'images/floral-squareneck-dress3.png'),
(4, 1, 'Black Pattern Tweed Dress', 'Dress', 55, NULL, 'images/black-pattern-dress1.png', 'images/black-pattern-dress2.png', 'images/black-pattern-dress3.png'),
(5, 1, 'Puff Sleeves Pink Dress', 'Dress', 35, NULL, 'images/puff-pink-dress1.png', 'images/puff-pink-dress2.png', 'images/puff-pink-dress3.png'),
(6, 1, 'Open-Shoulder Crop Top', 'Top', 25, NULL, 'images/tie-shoulder-croptop1.png', 'images/tie-shoulder-croptop2.png', 'images/tie-shoulder-croptop3.png'),
(7, 2, 'Brown Chains Skater Skirt', 'Bottom', 30, NULL, 'images/brown-chain-skirt1.png', 'images/brown-chain-skirt2.png', 'images/brown-chain-skirt3.png'),
(8, 1, 'Bell Sleeves Fringe Crop Top', 'Top', 30, 'Sale', 'images/fringe-top1.png', 'images/fringe-top2.png', 'images/fringe-top3.png'),
(9, 1, 'White Crop Cardigan', 'Top', 20, NULL, 'images/white-cardigan1.png', 'images/white-cardigan2.png', 'images/white-cardigan3.png'),
(10, 1, 'Brown Plaid Button Up', 'Top', 25, 'Sale', 'images/brown-plaid-buttonup1.png', 'images/brown-plaid-buttonup2.png', 'images/brown-plaid-buttonup3.png'),
(11, 2, 'Black Distressed Jeans', 'Bottom', 45, NULL, 'images/black-ripped-jeans1.png', 'images/black-ripped-jeans2.png', 'images/black-ripped-jeans3.png'),
(12, 1, 'Black Leather Top', 'Top', 15, 'New Arrival', 'images/black-leather-top1.png', 'images/black-leather-top2.png', 'images/black-leather-top3.png'),
(13, 1, 'Open Back Floral Dress', 'Dress', 45, NULL, 'images/open-floral-dress1.png', 'images/open-floral-dress2.png', 'images/open-floral-dress3.png'),
(14, 1, 'Green Crop Top', 'Top', 20, '', 'images/green-top1.png', 'images/green-top2.png', 'images/green-top3.png'),
(15, 2, 'Two Tones Patch Jeans', 'Bottom', 45, 'Featured', 'images/green-brown-jeans1.png', 'images/green-brown-jeans2.png', 'images/green-brown-jeans3.png'),
(16, 1, 'White Lantern Sleeves Dress', 'Dress', 40, 'Featured', 'images/white-dress1.png', 'images/white-dress2.png', 'images/white-dress3.png'),
(17, 1, 'Blue Skater Skirt', 'Bottom', 25, NULL, 'images/blue-skater-skirt1.png', 'images/blue-skater-skirt2.png', 'images/blue-skater-skirt3.png'),
(18, 1, 'Orange Floral Crop Top', 'Top', 15, NULL, 'images/orange-top1.png', 'images/orange-top2.png', 'images/orange-top3.png'),
(19, 2, 'Swiss Dot White Dress', 'Dress', 55, 'Featured', 'images/poka-dot-white-dress1.png', 'images/poka-dot-white-dress2.png', 'images/poka-dot-white-dress3.png'),
(20, 1, 'White Lace Dress', 'Dress', 55, NULL, 'images/white-lace-dress1.png', 'images/white-lace-dress2.png', 'images/white-lace-dress3.png'),
(21, 1, 'Butterfly Patch Jeans', 'Bottom', 35, 'New Arrival', 'images/butterfly-jeans1.png', 'images/butterfly-jeans2.png', 'images/butterfly-jeans3.png'),
(22, 1, 'Blue Sleeveless Open Back Dress', 'Dress', 30, NULL, 'images/blue-sleeveless-dress1.png', 'images/blue-sleeveless-dress2.png', 'images/blue-sleeveless-dress3.png'),
(23, 2, 'Black Argyle Cardigan', 'Top', 35, 'New Arrival', 'images/black-sweater1.png', 'images/black-sweater2.png', 'images/black-sweater3.png'),
(24, 1, 'Letter Pullover', 'Top', 35, 'New Arrival', 'images/pullover1.png', 'images/pullover2.png', 'images/pullover3.png'),
(25, 2, 'Zebra Pattern Pants', 'Bottom', 35, 'New Arrival', 'images/zebra-pants1.png', 'images/zebra-pants2.png', 'images/zebra-pants3.png'),
(26, 2, 'White Flare Pants', 'Bottom', 25, 'New Arrival', 'images/white-flare-pants1.png', 'images/white-flare-pants2.png', 'images/white-flare-pants3.png'),
(27, 1, 'White V-Neck Blouse', 'Top', 25, 'New Arrival', 'images/white-vneck-blouse1.png', 'images/white-vneck-blouse2.png', 'images/white-vneck-blouse3.png'),
(28, 1, 'White Drawstring Sweatpants', 'Bottom', 20, NULL, 'images/white-sweats1.png', 'images/white-sweats2.png', 'images/white-sweats3.png'),
(29, 1, 'White Chain Sweater', 'Top', 20, 'New Arrival', 'images/white-chain-sweater1.png', 'images/white-chain-sweater2.png', 'images/white-chain-sweater3.png'),
(30, 1, 'Purple Shorts', 'Bottom', 25, 'Featured', 'images/purple-shorts1.png', 'images/purple-shorts2.png', 'images/purple-shorts3.png'),
(31, 2, 'Flap Pocket Cord Pants', 'Bottom', 30, 'Sale', 'images/flap-pocket-cord-pants1.png', 'images/flap-pocket-cord-pants2.png', 'images/flap-pocket-cord-pants3.png'),
(32, 1, 'Truck Print Oversized T-Shirt', 'Top', 15, 'Sale', 'images/truck-tshirt1.png', 'images/truck-tshirt2.png', 'images/truck-tshirt3.png'),
(33, 1, 'Strawberry Shorts', 'Bottom', 25, 'Featured', 'images/strawberry-shorts1.png', 'images/strawberry-shorts2.png', 'images/strawberry-shorts3.png'),
(34, 2, 'Yellow Floral Dress', 'Dress', 35, 'New Arrival', 'images/yellow-floral-dress1.png', 'images/yellow-floral-dress2.png', 'images/yellow-floral-dress3.png'),
(35, 1, 'Black Bodycon Dress', 'Dress', 25, 'Featured', 'images/black-bodycon-dress1.png', 'images/black-bodycon-dress2.png', 'images/black-bodycon-dress3.png'),
(36, 2, 'Black Sheer Dress', 'Dress', 50, 'Featured', 'images/black-sheer-dress1.png', 'images/black-sheer-dress2.png', 'images/black-sheer-dress3.png'),
(37, 1, 'Black & White Jeans', 'Bottom', 45, NULL, 'images/black-white-jeans1.png', 'images/black-white-jeans2.png', 'images/black-white-jeans3.png'),
(38, 2, 'Green Self-tie Crop Top', 'Top', 15, 'Featured', 'images/front-tie-top1.png', 'images/front-tie-top2.png', 'images/front-tie-top3.png'),
(39, 1, 'Blue Lace Up Back Satin Top', 'Top', 19, 'Featured', 'images/satin-top1.png', 'images/satin-top2.png', 'images/satin-top3.png'),
(40, NULL, 'White Lace Up Back Top', 'Top', 25, NULL, 'images/white-top1.png', 'images/white-top2.png', 'images/white-top3.png'),
(41, NULL, 'Two Tones Shorts', 'Bottom', 25, NULL, 'images/two-tone-shorts1.png', 'images/two-tone-shorts2.png', 'images/two-tone-shorts3.png'),
(42, NULL, 'Black & White Sweatpants', 'Bottom', 25, NULL, 'images/black-white-sweats1.png', 'images/black-white-sweats2.png', 'images/black-white-sweats3.png'),
(43, NULL, 'White Floral Dress', 'Dress', 35, NULL, 'images/white-floral-dress1.png', 'images/white-floral-dress2.png', 'images/white-floral-dress3.png'),
(44, NULL, 'Black Floral Dress', 'Dress', 35, NULL, 'images/black-floral-dress1.png', 'images/black-floral-dress2.png', 'images/black-floral-dress3.png'),
(45, NULL, 'Blue Floral Skirt', 'Bottom', 25, NULL, 'images/blue-floral-skirt1.png', 'images/blue-floral-skirt2.png', 'images/blue-floral-skirt3.png'),
(46, NULL, 'Pink Cargo Pants', 'Bottom', 30, NULL, 'images/cargo-pants1.png', 'images/cargo-pants2.png', 'images/cargo-pants3.png');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `first_name` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `last_name` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(128) NOT NULL,
  `role` varchar(25) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`first_name`, `last_name`, `username`, `password`, `role`) VALUES
('Boba', 'Lover', 'bobalover', '$2y$10$fHDsa.XQN037O8v7Q1HKO.wwvaQmffTHml16T7lS2Iyk7Qq0KCwNa', 'user'),
('Dan', 'Orton', 'dorton', '$2y$10$ghf72HZUuIab6AkwTS.wTugHdmJKhWEb24VqefRwpSyqrg1gW.ek2', 'admin'),
('Quentin', 'Tarantino', 'qtara', '$2y$10$qwRIY6YWKaESsb6tyjyknOEIHDzeNCHaB6oxqOkwVK5oAoYvcIgB.', 'user'),
('Paula', 'Abdul', 'pabdul', '$2y$10$ITYAYw0r7Lo2TJCBSS23ROADY9/Qv/Ow8U/2ZY/9X6m6I7BajNl7i', 'admin'),
('Olivia', 'John', 'ojohn', '$2y$10$ROyyxbmTLUmZqNQTHy6KWuWu4Ve.EQN/Nr.gCMSlpx0B2FDDigRMS', 'user'),
('Nolan', 'Ryan', 'nryan', '$2y$10$.4135JnF61b0K1hg9UowSeZzcA2pku7uGNRSj7DA9Xs/fmjdChcOC', 'user'),
('Dave', 'Hyde', 'dhyde', '$2y$10$haw5bt1J1LenhpFSNxMp..Lj/UxQFeOCUfAhglrqKIiCl4IhHUAky', 'admin'),
('Alan', 'Wake', 'awake', '$2y$10$6Ic/rPf2oSwBcj88ZuycaekiKoihVE9VnTFptzG3f3yWr0BZQx3gK', 'user'),
('Fred', 'Jones', 'fjones', '$2y$10$JwuNy3m9q4lKsostBXyDY.jkspgTwVQvDMMVgsuUp032d8ZqcC1IG', 'admin'),
('Bobbie', 'Dahl', 'bdahl', '$2y$10$whzScq0GdURrcTXatPJYMuoOnv3CkqvVjDwl8q0xwgNkh24zYko4C', 'user'),
('Chuck', 'Brown', 'cbrown1', '$2y$10$aHyov0DMJFHn1yYO2XVAluPkLcnbHS7WG9lA649GJ3gAeMZtA0lmW', 'user'),
('Donald', 'Troop', 'dtroop', '$2y$10$/K64/ZEf4DeAo2UuG4vLsuYMdseEeZhjjBaTxgVHfeLho4xvRjWii', 'user'),
('Emile', 'Hart', 'ehart', '$2y$10$zcK/iISaKr4lpTKUWddZKOCz9yc2xhdZbUtjV6iORS7LK6oWDbwvm', 'user'),
('Francis', 'Fish', 'ffish', '$2y$10$IzMNhuuWP/.ekA6mMqTvAumFe93EdSmP7.gT6VWdS2/726P0f2poW', 'user'),
('Greg', 'Greggers', 'ggreg', '$2y$10$3752FSlzhtf5.7cqqWl7auD114IUyoBCAjI2k3.thAcJV.kBISPNK', 'user'),
('Holly', 'Ivy', 'hivy', '$2y$10$HeXv7z0JvXrIc24LAgq36e//qmxJDauvFAPcuJIvswLDqBdEJp/Rq', 'user'),
('Indiana', 'Jones', 'ijones', '$2y$10$zjk./Q2gwIXvcOdm0LHSWO.XXLfRDysQyRZ0uhr8T2eWIYJOjrBGe', 'user'),
('Jake', 'Pirate', 'jp', '$2y$10$dcFjQpGg27n81o8a8nKzH.5dMMUvScGTlSCWvB/1k6Eo9qFV7h.2C', 'user'),
('Kenny', 'South', 'ksouth', '$2y$10$nVuboCcaJaQBuubaKuj1YufKb0Xsw56KMmpSBntEtz30R2Tczosmq', 'user'),
('Lisa', 'Lisa', 'lisa2', '$2y$10$YWxKaiA.A33bqTlFg4Sf8eFGJJAu7VJB1WOPQeQnbm6EkXEJSPsOG', 'user'),
('Satan', 'Clause', 'satanclause', '$2y$10$oOYLurWgYD6v4Vq3S/qYeuLWHlVfZrweRlT1WwFrmIKiNouhlSPsm', 'admin'),
('Amelia', 'Le', 'ale', '$2y$10$GsguDoDz5U6pq0JMAWOBl.CjLYn9MjMCKDSEeFaVU6mYo4fGZ7Owm', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `vendor`
--

DROP TABLE IF EXISTS `vendor`;
CREATE TABLE IF NOT EXISTS `vendor` (
  `vendorID` int NOT NULL AUTO_INCREMENT,
  `vendorName` varchar(100) NOT NULL,
  `vendor_address` varchar(100) NOT NULL,
  PRIMARY KEY (`vendorID`)
) ENGINE=MyISAM AUTO_INCREMENT=26 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `vendor`
--

INSERT INTO `vendor` (`vendorID`, `vendorName`, `vendor_address`) VALUES
(1, 'SHEIN', 'Hong Kong, China'),
(2, 'Urban Outfitters', 'Los Angeles, USA'),
(3, 'Romwe', 'Hong Kong, China'),
(4, 'H&M', 'Los Angeles, USA'),
(5, 'Forever 21', 'Los Angeles, USA'),
(6, 'Aliexpress', 'Shanghai, China'),
(7, 'Pretty Little Thing', 'Manchester, England'),
(8, 'Nasty Gal', 'Los Angeles, USA'),
(9, 'Boohoo', 'Manchester, England'),
(10, 'ASOS', 'Manchester, England'),
(11, 'Lucy In The Sky', 'Los Angeles, USA'),
(12, 'Bellewholesale', 'Shanghai, China'),
(13, 'Cider', 'Hong Kong, China'),
(14, 'Missguided', 'Manchester, England'),
(15, 'I Saw It First', 'Manchester, England'),
(16, 'Showpo', 'Sydney, Australia'),
(17, 'Superdry', 'Manchester, England'),
(18, 'All Saints', 'Los Angeles, USA'),
(19, 'American Eagle Outfitters', 'Los Angeles, USA'),
(20, 'Lulus', 'Los Angeles, USA');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
