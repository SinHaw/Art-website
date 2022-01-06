-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Aug 04, 2021 at 12:23 PM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project_database`
--

-- --------------------------------------------------------

--
-- Table structure for table `brand`
--

DROP TABLE IF EXISTS `brand`;
CREATE TABLE IF NOT EXISTS `brand` (
  `Id` int(255) NOT NULL AUTO_INCREMENT,
  `Brand` varchar(255) NOT NULL,
  `Image` varchar(255) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `brand`
--

INSERT INTO `brand` (`Id`, `Brand`, `Image`) VALUES
(1, 'FABER-CASTELL', 'FABER-CASTELL.png'),
(2, 'PEBEO', 'PEBEO.png'),
(3, 'MIYA', 'MIYA.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

DROP TABLE IF EXISTS `cart`;
CREATE TABLE IF NOT EXISTS `cart` (
  `Id` int(255) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `price` int(255) NOT NULL,
  `qty` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `Date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=37 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

DROP TABLE IF EXISTS `member`;
CREATE TABLE IF NOT EXISTS `member` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Email` varchar(255) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Delivery_Address` varchar(255) NOT NULL,
  `Phone_Number` int(8) NOT NULL,
  `Profile_Picture` varchar(255) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`Id`, `Email`, `Name`, `Password`, `Delivery_Address`, `Phone_Number`, `Profile_Picture`) VALUES
(12, 'David123@gmail.com', 'David', '123', 'Blk 740 woodlands circle #12-409', 97817985, 'profile_picture/David_734362_media_online_social_tube_youtube_icon.png'),
(10, 'n301030@gmail.com', 'lme.jice.is.bae@gmail.com', 'David ', 'Blk 740 woodlands circle #12-409', 97817985, 'profile_picture/lme.jice.is.bae@gmail.com_AboutUs_Image_Opt1.jpg'),
(11, 'lme.jice.is.bae@gmail.com', 'boon sin haw', 'David', 'Blk 740 woodlands circle #12-409', 97817985, 'profile_picture/boon sin haw_734395_instagram_media_online_photo_social_icon.png');

-- --------------------------------------------------------

--
-- Table structure for table `partners`
--

DROP TABLE IF EXISTS `partners`;
CREATE TABLE IF NOT EXISTS `partners` (
  `Id` int(255) NOT NULL AUTO_INCREMENT,
  `Name` varchar(255) NOT NULL,
  `Link` varchar(255) NOT NULL,
  `Images` varchar(255) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `partners`
--

INSERT INTO `partners` (`Id`, `Name`, `Link`, `Images`) VALUES
(1, 'Show &  Tell', 'https://www.showandtell.com.sg', 'showtell-logo.jpg'),
(2, 'Artefakts', 'https://artefakts.sg', 'artefakts-logo.jpg'),
(3, 'ArtzGem', 'http://artzgem.com.sg', 'artzgem-logo.jpg'),
(4, 'WithAutum', 'https://www.withautumn.com', 'withautumn-logo.jpg'),
(5, 'ArtHaus', 'https://www.arthaus.com.sg', 'arthaus-logo.jpg'),
(6, 'DaylightCreativeTherapies', 'https://daylightct.sg', 'daylight-creative-therapies-logo.jpg'),
(7, 'KilioArt', 'https://kilioart.com', 'kilio-art-logo.jpg'),
(8, 'VisualArtsCenter', 'https://visualartscentre.sg/about', 'visual-arts-centre-logo.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

DROP TABLE IF EXISTS `product`;
CREATE TABLE IF NOT EXISTS `product` (
  `Id` int(255) NOT NULL AUTO_INCREMENT,
  `Name` varchar(255) NOT NULL,
  `Price` decimal(10,2) NOT NULL,
  `Brand` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `Image` varchar(255) NOT NULL,
  `Description` text NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`Id`, `Name`, `Price`, `Brand`, `category`, `Image`, `Description`) VALUES
(23, 'Classic Color Pencil Metal Box Set x 36', '25.50', 'FABER-CASTELL ', 'Pencil', 'FABER-CASTELL Classic Color Pencil Metal Box Set x 36.jpeg', 'The classic wooden barrel pencils: the coloured pencils in a standard size and hexagonal shape. They feature vivid colours and a special bonding process to make them break resistant. The classic coloured pencils are available in up to 60 different colours.\n\nSpecification\n- Hexagonal coloured pencils in a metal box\n- Brilliant colours\n- Break-resistant due to SV bonding\n- Classic hexagonal shape\n- 36 bright colours in metal box'),
(22, 'Classic Color Pencil Metal Box Set x 24', '16.00', 'FABER-CASTELL ', 'Pencil', 'FABER-CASTELL Classic Color Pencil Metal Box Set x 24.jfif', 'The classic wooden barrel pencils: the coloured pencils in a standard size and hexagonal shape. They feature vivid colours and a special bonding process to make them break resistant. The classic coloured pencils are available in up to 60 different colours.\n\nSpecification\n- Hexagonal coloured pencils in a metal box\n- Brilliant colours\n- Break-resistant due to SV bonding\n- Classic hexagonal shape\n- 24 bright colours in metal box'),
(21, 'Jumbo Grip Watercolor Pencil Set x 16', '31.00', 'FABER-CASTELL ', 'Pencil', 'FABER-CASTELL Jumbo Grip Watercolor Pencil Set x 16.jpg', 'Coloured pencils with a thick triangular barrel are designed to fit perfectly in little hands. The patented Soft-Grip zone ensures fatigue-free and comfortable drawing. The water-soluble pigments give fantastic results: simply draw your picture then apply water to a paintbrush to create beautiful watercolour images.'),
(19, 'Junior Grip Graphite Pencil Set x 12', '11.99', 'FABER-CASTELL ', 'Pencil', 'FABER-CASTELL Junior Grip Graphite Pencil Set x 12.jpeg', 'FABER-CASTELL Junior Grip Graphite Pencil Set\n\n- Ergonomic Grip\n- Eco Pencil\n- Pack of 12'),
(20, 'Soft Pen Case Unicorn', '19.90', 'FABER-CASTELL ', 'Pencil', 'FABER-CASTELL Soft Pen Case Unicorn.jpeg', 'FABER-CASTELL Soft Case Pencil Box with a embossed Unicorn Design.\n\nEasy to maintain and durable, multifunctional pencil case.\n\nDimension: 16 x 22.5cm.\nThickness: 4cm'),
(18, 'Creative Coloring Pencil Set', '20.90', 'FABER-CASTELL ', 'Pencil', 'FABER-CASTELL Creative Coloring Pencil Set.jpeg', 'FABER-CASTELL Creative Coloring Pencil Set contains 10 color pencils, 10 connector markers, 1 bag to neatly contain the pencils and connector markers and 1 eraser.'),
(17, 'Junior Triangular Pencil Sharpener Set x 12', '6.60', 'FABER-CASTELL ', 'Pencil', 'FABER-CASTELL Junior Triangular Pencil Sharpener Set x 12.jpeg', 'Tri Colour Pencils â€“ consists of colour shades specially selected by Art teachers. Its triangular shape gives better control and comfort for children\'s little fingers. The smooth leads with less breakage and minimum lead flake provide better coverage and create brilliant effects on paper.\n\nSpecification\n- Brand quality at a good price\nColour pencils with ergonomic triangular shape\n- Brilliant colours\n- Soft colour laydown\n- Break-resistant lead due to secural bonding process (SV)\n- Washes out of most fabrics\n- Wood from certified sustainable forestry\n- Cardboard wallet of 12'),
(16, 'Porcelaine Marker 1.2mm Marseille Yellow', '6.90', 'PEBEO', 'Marker', 'PEBEO Porcelaine Marker 1.2mm Marseille Yellow.png', 'Porcelaine 150 Markers can be applied to all heat-stable surfaces that are able to withstand a temperature of 300Â°F (150Â°C), such as porcelain, china, glazed earthenware, terracotta, metal, enamelled sheet steel, copper and glass.\nThe surface chosen, allows for numerous interesting effects to be produced and experiments to be made with the transparency and intensity of the colours.\nPorcelaine 150 makes professional enamelling available to all. Colours can all be mixed together to create a deep and glossy, transparent or opaque finish, with a superb enamelled appearance, once baked.\nColours can be mixed together.'),
(15, 'Porcelaine Marker 1.2mm Earth Brown', '6.90', 'PEBEO', 'Marker', 'PEBEO Porcelaine Marker 1.2mm Earth Brown.png', 'Porcelaine 150 Markers can be applied to all heat-stable surfaces that are able to withstand a temperature of 300Â°F (150Â°C), such as porcelain, china, glazed earthenware, terracotta, metal, enamelled sheet steel, copper and glass.\nThe surface chosen, allows for numerous interesting effects to be produced and experiments to be made with the transparency and intensity of the colours.\nPorcelaine 150 makes professional enamelling available to all. Colours can all be mixed together to create a deep and glossy, transparent or opaque finish, with a superb enamelled appearance, once baked.\nColours can be mixed together.'),
(14, 'Porcelaine Outliner 20ml Tourmaline', '4.90', 'PEBEO', 'Marker', 'PEBEO Porcelaine Outliner 20ml Tourmaline.png', 'Porcelaine 150 can be applied to all heat-stable surfaces that are able to withstand a temperature of 300Â°F (150Â°C), such as porcelain, china, glazed earthenware, terracotta, metal, enamelled sheet steel, copper and glass.\n\nThe surface chosen, allows for numerous interesting effects to be produced and experiments to be made with the transparency and intensity of the colours. Porcelaine 150 makes professional enamelling available to all, with a new generation of 46 colours, glazed by simply baking at 300Â°F ( 150Â°C) in a kitchen oven.\n\nWhether using Porcelaine 150, in a bottle, a tube or marker, all colours can all be mixed together to create a deep and glossy, transparent or opaque finish, with a superb enamelled appearance, once baked.\n\nMany applications are possible with Porcelaine 150 : with brushes and also with sponge, stencil.\n\nMade in France.'),
(13, 'Porcelaine Outliner 20ml Bronze', '4.90', 'PEBEO', 'Marker', 'PEBEO Porcelaine Outliner 20ml Bronze.jfif', 'Porcelaine 150 can be applied to all heat-stable surfaces that are able to withstand a temperature of 300Â°F (150Â°C), such as porcelain, china, glazed earthenware, terracotta, metal, enamelled sheet steel, copper and glass.\n\nThe surface chosen, allows for numerous interesting effects to be produced and experiments to be made with the transparency and intensity of the colours. Porcelaine 150 makes professional enamelling available to all, with a new generation of 46 colours, glazed by simply baking at 300Â°F ( 150Â°C) in a kitchen oven.\n\nWhether using Porcelaine 150, in a bottle, a tube or marker, all colours can all be mixed together to create a deep and glossy, transparent or opaque finish, with a superb enamelled appearance, once baked.\n\nMany applications are possible with Porcelaine 150 : with brushes and also with sponge, stencil.\n\nMade in France.'),
(12, ' Porcelaine Marker 1.2mm Peacock Blue', '6.90', 'PEBEO', 'Marker', 'PEBEO Porcelaine Marker 0.7mm Lapis Blue.png', 'Porcelaine 150 Markers can be applied to all heat-stable surfaces that are able to withstand a temperature of 300Â°F (150Â°C), such as porcelain, china, glazed earthenware, terracotta, metal, enamelled sheet steel, copper and glass.\nThe surface chosen, allows for numerous interesting effects to be produced and experiments to be made with the transparency and intensity of the colours.\nPorcelaine 150 makes professional enamelling available to all. Colours can all be mixed together to create a deep and glossy, transparent or opaque finish, with a superb enamelled appearance, once baked.\nColours can be mixed together.'),
(11, 'Porcelaine Marker 1.2mm Scarlet Red', '6.90', 'PEBEO', 'Marker', 'PEBEO Porcelaine Marker 1.2mm Scarlet Red.png', 'Porcelaine 150 Markers can be applied to all heat-stable surfaces that are able to withstand a temperature of 300Â°F (150Â°C), such as porcelain, china, glazed earthenware, terracotta, metal, enamelled sheet steel, copper and glass.\nThe surface chosen, allows for numerous interesting effects to be produced and experiments to be made with the transparency and intensity of the colours.\nPorcelaine 150 makes professional enamelling available to all. Colours can all be mixed together to create a deep and glossy, transparent or opaque finish, with a superb enamelled appearance, once baked.\nColours can be mixed together.'),
(10, 'Porcelaine Marker 1.2mm Anthracite Black', '6.90', 'PEBEO', 'Marker', 'PEBEO Porcelaine Marker 1.2mm Anthracite Black.png', 'Porcelaine 150 Markers can be applied to all heat-stable surfaces that are able to withstand a temperature of 300Â°F (150Â°C), such as porcelain, china, glazed earthenware, terracotta, metal, enamelled sheet steel, copper and glass.\nThe surface chosen, allows for numerous interesting effects to be produced and experiments to be made with the transparency and intensity of the colours.\nPorcelaine 150 makes professional enamelling available to all. Colours can all be mixed together to create a deep and glossy, transparent or opaque finish, with a superb enamelled appearance, once baked.\nColours can be mixed together.'),
(9, 'Porcelaine Marker 0.7mm Lapis Blue', '6.90', 'PEBEO', 'Marker', 'PEBEO Porcelaine Marker 0.7mm Lapis Blue.png', 'Porcelaine 150 Markers can be applied to all heat-stable surfaces that are able to withstand a temperature of 300Â°F (150Â°C), such as porcelain, china, glazed earthenware, terracotta, metal, enamelled sheet steel, copper and glass.\nThe surface chosen, allows for numerous interesting effects to be produced and experiments to be made with the transparency and intensity of the colours.\nPorcelaine 150 makes professional enamelling available to all. Colours can all be mixed together to create a deep and glossy, transparent or opaque finish, with a superb enamelled appearance, once baked.\nColours can be mixed together.'),
(8, 'Gouache 12ml Set x 12.jfif', '19.90', 'MIYA', 'Paint', 'MIYA Jelly Gouache 30ml Pink Set x 24.jpg', 'MIYA Himi Jelly Gouache 30ml Set of 24 assorted colors.\n\nThe MIYA gouache paint set can make for the most appreciated gift for every artist and generally everyone that loves painting!'),
(7, 'Gouache 12ml Set x 12', '6.90', 'MIYA', 'Paint', 'MIYA Gouache 12ml Set x 12.jfif', 'Miya gouache set of 12 assorted colors.\n\nAbout the brand\nMIYA factory is strictly follow ISO9000 system, and produces a variety of products developed with a dedication to quanlity, all products are non-toxic and confirms to European EN71 and American ASTM-D4236 standards with test reports.'),
(5, 'Himi Jelly Gouache 30ml Mint Set x 24', '19.90', 'MIYA', 'Paint', 'MIYA Himi Jelly Gouache 30ml Mint Set x 24.jpg', 'MIYA Himi Jelly Gouache 30ml Set of 24 assorted colors.\n\nThe MIYA gouache paint set can make for the most appreciated gift for every artist and generally everyone that loves painting!'),
(6, 'Himi Jelly Gouache 30ml Set x 56', '34.90', 'MIYA', 'Paint', 'MIYA Himi Jelly Gouache 30ml Set x 56.jfif', 'MIYA Himi Jelly Gouache 30ml Set of 56 assorted colors.\n\nMiya is the first company to design and manufacture jelly cup paint pigment in China.\n\nThe MIYA gouache paint set can make for the most appreciated gift for every artist and generally everyone that loves painting!'),
(3, 'Jelly Gouache 30ml Pink Set x 18', '12.90', 'MIYA', 'Paint', 'MIYA Jelly Gouache 30ml Pink Set x 18.jfif', 'MIYA Himi Jelly Gouache 30ml Set of 56 assorted colors.\n\nThe MIYA gouache paint set can make for the most appreciated gift for every artist and generally everyone that loves painting!'),
(4, 'Himi Jelly Gouache 30ml Blue Set x 18', '12.90', 'MIYA', 'Paint', 'MIYA Himi Jelly Gouache 30ml Blue Set x 18.jfif', 'MIYA Himi Jelly Gouache 30ml Set of 56 assorted colors.\n\nThe MIYA gouache paint set can make for the most appreciated gift for every artist and generally everyone that loves painting!'),
(1, 'Himi Jelly Gouache 30ml Blue Set x 24', '19.90', 'MIYA', 'Paint', 'MIYA Himi Jelly Gouache 30ml Blue Set x 24.jfif', 'The MIYA gouache paint set can make for the most appreciated gift for every artist and generally everyone that loves painting!'),
(2, ' Gouache 12ml Set x 18', '8.90', 'MIYA', 'Paint', 'MIYA Gouache 12ml Set x 18.jfif', 'Miya gouache set of 18 asorted colors.\n\nAbout the brand\nMIYA factory is strictly follow ISO9000 system, and produces a variety of products developed with a dedication to quanlity, all products are non-toxic and confirms to European EN71 and American ASTM-D4236 standards with test reports.'),
(24, 'Classic Color Pencil Sketch Set x 48', '42.00', 'FABER-CASTELL ', 'Pencil', 'FABER-CASTELL Classic Color Pencil Sketch Set x 48.jpeg', 'Permanent colour pencils in a standard size and hexagonal shape. They feature vivid colours and a special bonding process to make them break resistant. The classic coloured pencils are available in up to 48 different colours.\n\nSpecification\n- Permanent colour pencils in a standard size and hexagonal shape\n- They feature vivid colours and a special bonding process to make them break resistant\n- 48 bright colours, 2 Grip graphite pencils, eraser and sharpener in metal box');

-- --------------------------------------------------------

--
-- Table structure for table `transact`
--

DROP TABLE IF EXISTS `transact`;
CREATE TABLE IF NOT EXISTS `transact` (
  `Id` int(255) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `qty` int(255) NOT NULL,
  `images` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `Date` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transact`
--

INSERT INTO `transact` (`Id`, `name`, `price`, `qty`, `images`, `username`, `Date`) VALUES
(19, 'Jumbo Grip Watercolor Pencil Set x 16', '31', 3, 'FABER-CASTELL Jumbo Grip Watercolor Pencil Set x 16.jpg', 'david', '2021-08-04 20:21:25');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
