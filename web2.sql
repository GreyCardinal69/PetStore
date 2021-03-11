-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 07, 2021 at 01:12 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web2`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `meta` text NOT NULL,
  `price` int(11) NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `meta`, `price`, `img`) VALUES
(1, 'Royal Canin® Size Health Nutrition', 'Royal Canin Small Adult dry dog food is formulated to meet the unique nutritional needs of small breed adult dogs, as they actually require higher levels of calories per pound of body weight than large dogs. L-carnitine helps metabolize fat to help your dog maintain a healthy weight. Ideal levels of EPA and DHA support healthy skin and a beautiful, shiny coat. Plus, enhanced palatability helps satisfy even the pickiest eaters.', 22000, '5173207.jpg'),
(2, 'Simply Nourish®\r\nSOURCE ™ Pate Wet Dog Food', 'Make meal time delicious and nutritious\r\nfor your dog by serving Simply Nourish Source Pork & Beef Adult Dog\r\nFood. This delicious pate features carefully-sourced animal protein\r\nand other naturally nutrient-rich ingredients to help meet your dog\\\'s\r\nnutritional needs and support overall health.', 3000, '5287315.jpg'),
(3, 'Simply Nourish® Human Grade Jerky Dog Treats', 'Make treat time\r\ndelicious and nutritious for your dog by serving Simply Nourish Source\r\nTurkey Jerky Dog Treats. These delicious treats feature the great\r\ntaste of turkey that dogs love in each and every bite, and are made\r\nusing nutritious ingredients you can feel good about serving to your\r\ndog.', 7000, '5285959.jpg'),
(4, 'Royal Canin® Size Health Nutrition™\r\nMedium Adult Dog Food', 'Royal Canin Medium Adult dry dog food is a tailored diet made to feed your dog\\\'s high-energy lifestyle. An\r\nexclusive mix of antioxidants and prebiotics helps support natural\r\ndefenses so they can keep on going strong. Omega-3 fatty acids, like\r\nEPA and DHA, nourish your dog\\\'s skin and coat health to help them\r\nstay vibrant. An optimal balance of highly digestible proteins and\r\nfibers helps your dog digest and absorb nutrients. Not only that, the\r\nexclusive kibble is highly palatable, and will keep them coming back\r\nto their bowl every meal.', 8000, '5199270.jpg'),
(5, 'Royal Canin® Lifestyle', 'A healthy dog living mainly in-home may tend to get less exercise\r\nwhich could impact his weight and digestive system. Royal Canin INDOOR\r\nLIFE meets these needs through precise nutrition. Royal Canin improves\r\nbody condition, digestive health, stool quality and coat health.', 4500, '5230992.jpg'),
(6, 'Royal Canin® Canine Health Nutrition12', 'Founded by a veterinarian, Royal Canin has\r\nover 40 years experience in health nutrition. Their work with pet\r\nnutritionist, breeders, and veterinarians from around the world has\r\nprovided us with knowledge about the specific nutritional requirements\r\nof dogs. This knowledge has allowed them to formulate the precise diet\r\nfor your dog\'s special needs.', 2500, '5237407.jpg'),
(7, 'Royal Canin® Canine Health Nutrition Starter', 'ROYAL CANIN wet formulas are designed around the unique needs of small\r\ndogs (up to 22 lbs.) from puppyhood through maturity. Whether fed as a\r\ncomplement to dry kibble or as a complete meal, ROYAL CANIN wet\r\nformulas help keep a small dog healthy from the inside out.', 1500, '5297860.jpg'),
(8, 'Royal Canin® Size Health Nutrition Medium Adult\r\n7+ Dog Food', 'Royal Canin Medium Adult 7+ dry dog food is tailored\r\nto feed your mature dog\\\'s vitality. An exclusive blend of\r\nantioxidants and prebiotics provides immune support to help their\r\nnatural defenses stay strong. Omega-3 fatty acids, like EPA and DHA,\r\nnourish your dog\\\'s skin and coat health to maintain their natural\r\nbeauty. Its targeted balance of highly digestible proteins and fiber\r\nhelps support digestive health. This highly palatable scientific\r\nformula keeps your dog excited for mealtime, while its exclusive\r\nmedium-sized kibble encourages chewing.', 8000, '5200259.jpg'),
(9, 'Blue Buffalo Wilderness Rocky Mountain Recipe', 'For centuries wolves have roamed the American West\r\nsurviving on a diet provided solely by the wild. The spirit of the\r\nwolf lives on in dogs today and is the reason we created BLUE\r\nWilderness Rocky Mountain Recipe. It\\\'s a protein-rich formula made\r\nwith more of the meat dogs love and features.', 6500, '5200162.jpg'),
(10, 'Thrive Essential Reptile Basking Spot Bulb - 2 Count', 'Provide\r\nthe UVA light and radiant heat your reptile desires and needs with\r\nthis Thrive 100-Watt Essential Basking Spot Bulb. This basking spot\r\nlamp bulb provides essential UVA light and radiant heat for reptiles,\r\nand lasts for up to 1,500 hours. Only at PetSmart.', 9800, '5290944.jpg'),
(11, 'Thrive Dried Insect Reptile Treats - Natural, Mealworms, Crickets & Grasshoppers', 'Wondergin what to feed bearded\r\ndraogns as a treat. Provide yours with an all-natural snack\r\ndiet by serving Thrive Desert All-Natural Dried Insect Bearded Dragon Treats. This blend of natural dried mealworms,crickets,\r\nand grasshoppers is an excellent source of protein that your pet\r\nwill love, and makes a great addition to any bearded dragon diet.', 2000, '5290850.jpg'),
(12, 'Authority Large Breed Mature Dog Food', 'Provide your mature dog with a delicious and\r\nnutritious meal time choice by serving Authority Everyday Health\r\nMature Chicken & Rice Formula Adult Dog Food. This delicious dry blend\r\nfeatures nutrients that support joint health a mobility, a healthy\r\nimmune system, digestive health, and even oral care.', 4500, '5279174.jpg'),
(13, 'Authority Ground Entree Adult Wet Dog Food', 'Provide your dog with a delicious and nutritious meal time choice by\r\nserving Authority Chicken and Rice Entree Adult Ground Wet Dog Food.\r\nThis delicious wet food provides nutrients that help promote lean\r\nmuscles, a healthy heart, healthy skin and a shiny coat.', 2000, '5278697.jpg'),
(15, 'NuloMedalSeries Wet Food in Broth Dog Food', 'Provide your pup with the protein-based diet he needs to thrive with\r\nNulo Medal Series Dog Food. This delicious blend is high in\r\nanimal-based protein and is made using 100% natural ingredients for\r\nthe continued good health of your dog.', 1500, '5280972.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
