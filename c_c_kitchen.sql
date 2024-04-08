-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 08, 2024 at 02:29 PM
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
-- Database: `c&c kitchen`
--

-- --------------------------------------------------------

--
-- Table structure for table `recipes`
--

CREATE TABLE `recipes` (
  `RecipeID` int(11) NOT NULL,
  `UserID` int(11) DEFAULT NULL,
  `Title` varchar(255) NOT NULL,
  `Description` text DEFAULT NULL,
  `Ingredients` text NOT NULL,
  `Instructions` text NOT NULL,
  `DatePosted` timestamp NOT NULL DEFAULT current_timestamp(),
  `imagePath` varchar(255) DEFAULT NULL,
  `regionFlag` enum('Recipes') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `recipes`
--

INSERT INTO `recipes` (`RecipeID`, `UserID`, `Title`, `Description`, `Ingredients`, `Instructions`, `DatePosted`, `imagePath`, `regionFlag`) VALUES
(26, 7, 'This Nigerian Egusi Soup Recipe', 'Egusi is a West African name for the seeds of plants like squash, melons, and gourds that, when dried and ground become a staple ingredient in many West African dishes. Particularly, in Nigerian culture, egusi is popular with pounded yam. These seeds are rich in fat and protein, and add these essential nutrients into West African Cuisine. Nigerian Egusi Soup is a soup thickened with ground melon seeds and contains leafy and other vegetables. It is one of the most popular soups prepared by most tribes in Nigeria with considerable variation and often eaten with dishes like Pounded Yams. Prepare it with goat, beef, fish, or shellfish!!!.', '1 cup blended onions (about 3- 5 and fresh chilies, to taste)\r\n4 cups egusi (melon seeds, ground or milled)\r\n1⁄2 – 1 cup palm oil\r\n2 teaspoons fresh Une (Iru, locust beans)\r\nSalt (to taste)\r\nGround crayfish (to taste)\r\n7– 8 cups stock\r\nCooked Meat & fish (quantity and variety to personal preference)\r\n2 cups cut pumpkin leaves\r\n1 cup waterleaf (cut)\r\n3 tablespoons bitter leaf (washed)', 'In a large pot, heat the palm oil on medium for a minute and then add the Une.\r\nSlowly add the stock and set on low heat to simmer.\r\nScoop teaspoon size balls of the egusi paste mixture into the stock. Be sure to keep ball shape.\r\nLeave to simmer for 20 – 30 minutes so the balls cook through.\r\nAdd the meat and fish and other bits which you’d like to use.\r\nAdd cut-up pumpkin leaves. \r\nAdd the waterleaf.\r\nStir and put a lid on the pot and allow cook for 7–10 minutes, till the leaves wilt.\r\nAdd the bitter leaf.  Leave the lid off while the cooking finishes for another 5-10 minutes.\r\n\r\nStir, check seasoning and adjust accordingly.\r\n\r\nNow you can sit back and enjoy your delicious Nigerian Egusi Soup!', '2024-04-08 11:29:50', 'uploads/Egusi-soup.jpg', 'Recipes'),
(28, 4, 'Nigerian Beef Stew', 'This rich and flavorful Nigerian Beef Stew is a comforting and satisfying dish that is perfect for a cozy evening in. Slow-cooked with tender beef, vegetables, and spices, it\\\'s a perfect way to warm up on a chilly day.', '5 plum tomatoes, chopped, divided\\r\\n2 red bell peppers, chopped\\r\\n½ red onion, chopped\\r\\n½ red onion, sliced\\r\\n2 habanero peppers, chopped\\r\\n6 cloves garlic\\r\\n12 oz tomato paste(340 g)\\r\\n1 tablespoon salt, plus 1 teaspoon salt, divided\\r\\n1 ½ teaspoons black pepper, divided\\r\\n½ cup water(120 mL)\\r\\n1 cup vegetable oil(240 mL)\\r\\n1 ½ lb flank steak(680 g), cut into strips\\r\\n1 teaspoon fresh rosemary\\r\\n1 teaspoon paprika\\r\\n1 teaspoon curry powder\\r\\n2 cubes beef bouillon\\r\\n1 bay leaf\\r\\nwhite rice, cooked, for serving\\r\\nfried plantain, for serving\\r\\nscallion, for serving\\r\\nfresh parsley, for serving', 'In a food processor or blender, combine 4 chopped plum tomatoes, red bell peppers, chopped red onion, habanero peppers, garlic cloves, tomato paste, 1 tablespoon salt, 1 teaspoon pepper, and water. Puree until smooth.\\r\\nHeat vegetable oil in a large pot over medium-high heat.\\r\\nAdd the remaining tomato, sliced onion, remaining salt, and remaining pepper. Sauté until fragrant.\\r\\nAdd steak, rosemary, paprika, curry powder, and bullion cubes. Cook until the steak is golden brown and cooked through, about 10 minutes.\\r\\nAdd the blended tomato and pepper mixture and the bay leaf.\\r\\nBring to a boil over high heat. Cover and simmer at low heat for 20 minutes, until the stew has thickened.\\r\\nFish out the bay leaf.\\r\\nRemove stew from heat and let sit 10 minutes.\\r\\nServe with white rice and fried plantains. Garnish with scallions and parsley, if desired.\\r\\nEnjoy!\\r\\nReady for a smarter way to find recipes? Use Botatouille, our AI-powered food genius in the Tasty app. Download here', '2024-04-08 11:43:40', 'uploads/nigerianstew.jpg', 'Recipes'),
(29, 4, 'Nigerian Smoky Jollof Rice', 'Nigerian Smoky Jollof Rice is a one-pot rice dish that is full of flavor and color. It is made with long-grain parboiled rice cooked in a tomato sauce mixed with onions, peppers, and a variety of spices. This dish is often accompanied by vegetables, beans, or meat, making it a hearty and satisfying meal. Its unique taste comes from the combination of spices and the cooking method, which allows the rice to absorb the flavors fully.', '2 cups long-grain parboiled rice, 1/4 cup vegetable oil, 1 large onion (finely chopped), 2 cloves of garlic (minced), 1 teaspoon ginger (minced), 1 bell pepper (blended), 2 cups tomato sauce, 1 tablespoon tomato paste, 1 teaspoon curry powder, 1 teaspoon thyme, 1 chicken bouillon cube, Salt to taste, 2 cups chicken stock (or water), 1 cup mixed vegetables (carrots, peas, and green beans), 1 lb chicken, beef, or fish (optional), Scotch bonnet pepper to taste (optional for heat)', '1. If using meat, season your choice of chicken, beef, or fish with salt, pepper, and a bit of curry powder. Fry or grill until cooked through and set aside.\\\\r\\\\n2. In a large pot, heat the vegetable oil over medium heat. Add the chopped onions, minced garlic, and ginger, frying until soft and fragrant.\\\\r\\\\n3. Stir in the blended bell pepper, tomato sauce, and tomato paste. Cook for about 10 minutes, or until the mixture reduces and thickens.\\\\r\\\\n4. Add the curry powder, thyme, and crumbled chicken bouillon cube. Mix well and cook for another 2 minutes.\\\\r\\\\n5. Rinse the rice under cold water and drain. Add the rice to the pot along with the chicken stock (or water). Stir well to ensure the rice is evenly coated with the tomato mixture. Add the Scotch bonnet pepper here if using.\\\\r\\\\n6. Reduce the heat to low. Cover the pot and simmer for about 20-30 minutes, or until the rice is cooked and the liquid is absorbed. Check periodically and stir to prevent the rice from sticking to the bottom of the pot.\\\\r\\\\n7. Once the rice is nearly done, add the mixed vegetables, gently folding them in. Cover and let cook for an additional 5-10 minutes, or until the vegetables are tender.\\\\r\\\\n8. Serve the Jollof rice hot, garnished with the cooked meat if used, and additional sliced onions or herbs for extra flavor.', '2024-04-08 11:49:52', 'uploads/smoky-jollof.jpg', 'Recipes'),
(30, 4, 'Nigerian Gizdodo', 'Gizdodo is a simple side dish that is often served with rice; especially Jollof rice.\\r\\n\\r\\nIt is easy to deduce from the name that I will combine gizzards and ripe plantain in this recipe.\\r\\n\\r\\nHence Gizdodo (Gizzard Dodo) and we all know that dodo is just another name for ripe plantain.\\r\\n\\r\\nIt makes perfect sense right? I don’t know who actually coined that word but I think it is epic! 😀\\r\\n\\r\\nRipe plantain is called dodo in Nigeria, you can equally use it for porridge. In that case, it would be porridge plantain. But when you fry unripe plantain, it is called kpekere 😀 That aside. Let’s get the recipe for gizdodo\\r\\n\\r\\nWe require the ingredients below for this recipe. It would serve about 6 people if I paired it with jollof rice or just about 3 persons if served alone as it appears in the plate below.', '3 Giant-sized ripe plantain\\r\\nChicken or Turkey Gizzard (500g)\\r\\n4 cups of sliced tomatoes\\r\\nHalf cup of sliced pepper (scotch bonnet)\\r\\n1 cup of sliced onions\\r\\nOne cup of sliced green pepper\\r\\n2 Seasoning cubes\\r\\n150 ml vegetable oil\\r\\nSalt to taste', 'There is really nothing special about cooking gizzard, you just want it soft and tasty so you can use the same technique employed when cooking chicken or beef.\\r\\n\\r\\nStep 1\\r\\n\\r\\nWash the gizzards with hot water and precook for 20 minutes. Use a seasoning cube, half teaspoon of salt and half cup of sliced onions.\\r\\n\\r\\nStep 2\\r\\n\\r\\nCheck to see that the gizzard is soft and chop to smaller bits.\\r\\n\\r\\nThese are some of the needed ingredients. What you find at top-right is the chopped ripe plantain. Chopped gizzards at the bottom-right, then sliced tomato, onions and green beans in the plate at the left corner.', '2024-04-08 11:52:19', 'uploads/dodo-gizzard.jpg', 'Recipes'),
(31, 4, 'YAM PORRIDGE (ASARO)', 'Yam porridge or Asaro is another delicious Nigerian yam dish cooked in a well-seasoned pepper mix until soft and fluffy with some yam chunks. It is very quick and easy to make. It makes a perfect dinner or lunch and it is also a party favourite.', '½ tuber of yam about 1kg\\r\\n1 red bell pepper Tatashe\\r\\n1-2 scotch bonnet chillies (Ata Rodo)\\r\\n1 onion chopped\\r\\n½ cup palm oil or use according to preference and you can substitute with vegetable oil\\r\\n1 tablespoon beef seasoning powder or stock cubes\\r\\nSalt to taste\\r\\n1 medium size mackerel fish cleaned (substitute with dry fish or smoked fish)\\r\\n1 cup Beef stock optional\\r\\n2 handfuls spinach or any green vegetable', 'Prep the ingredients\\r\\npeel and cut yam into chunks, rinse and cover with cold water and set aside Roughly blend red bell pepper, scotch bonnet chill and onions together with water and set aside\\r\\nBoil the fish for about 5 minutes with seasoning cube, salt. Save fish broth for the porridge if you are not using beef stock. De-bone fish, flake and set aside\\r\\nPlace a small pan on medium heat, add palm oil and heat for about 2 minutes. Add chopped onions and fry till onions are translucent. Take it off the heat and set aside. This is to be added to the yam at the tail end of the cooking.\\r\\nPlace a large pan on medium heat; add yam chunks, blended pepper mixture and enough water to cover it (about one cm above the yam or keep it at the same level), add salt, seasoning cube and bring to boil till yam is almost tender. Reduce the heat if you have to avoid the yam burning. Add stock or water to yam in between cooking if need be\\r\\nOnce yam is almost tender add already heated palm oil to the yam and continue to cook till yam is tender. Using a back of a wooden ladle, break yam into pieces but not to puree, leave some yam chunks if you desire\\r\\nStir in the flaked fish and stir together gently into the yam to avoid breaking the fish and yam more, cook for another 2-3 minutes. Finally, add chopped spinach (or any other green vegetable), fold into porridge and cook for another 2 minutes. Take it off the heat as the vegetable would continue to cook just before you serve the dish.', '2024-04-08 11:55:49', 'uploads/asaro-yam-porridge-recipe-image-2.jpg', 'Recipes');

-- --------------------------------------------------------

--
-- Table structure for table `recipesinput`
--

CREATE TABLE `recipesinput` (
  `id` int(11) NOT NULL,
  `chefname` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `RecipeName` varchar(255) NOT NULL,
  `Ingredients` text NOT NULL,
  `Directions` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userid` int(11) NOT NULL,
  `uname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `passwordhash` varchar(255) NOT NULL,
  `telephone` varchar(20) DEFAULT NULL,
  `bio` text DEFAULT NULL,
  `userRole` enum('chef','admin') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userid`, `uname`, `email`, `passwordhash`, `telephone`, `bio`, `userRole`) VALUES
(4, 'Gordon Ramsay', 'Ramsay@gmail.com', '$2y$10$d2bgl/.L7KJz5d.2dU12S.GOv590CSlyuK23IE2v5uP7AgyWQWqDi', '', '', 'chef'),
(5, 'Ainsley Harrio', 'Harriott@gmail.com', '$2y$10$eXtqnBhXjNYrizXJN47k/uIi0aOXua5q7ZLcqrzZeAyb3G6/IXvAi', '441231231', '', 'chef'),
(6, 'Alan Yau', 'Alan@gmail.com', '$2y$10$l/SOCRgllDFabzR3O0UnnOlgqvAzYwzowyh3MwcyxAHhbk39f3od2', '', '', 'chef'),
(7, 'Jamie Oliver', 'Oliver@gmail.com', '$2y$10$VahiHL6/47/SPVSBNvo65ei1FeAhTDOrMna8xWZqGjOTNi5F7dHu2', '', '', 'chef'),
(8, 'Admin', 'admin@chigo.com', '$2y$10$E.MaaH6utvKfM8gioDK7KOUMvEgvL20kNHzABQGRNOMehkkmu/87C', '', '', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `recipes`
--
ALTER TABLE `recipes`
  ADD PRIMARY KEY (`RecipeID`),
  ADD UNIQUE KEY `unique_title` (`Title`),
  ADD KEY `UserID` (`UserID`);

--
-- Indexes for table `recipesinput`
--
ALTER TABLE `recipesinput`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userid`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `recipes`
--
ALTER TABLE `recipes`
  MODIFY `RecipeID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `recipesinput`
--
ALTER TABLE `recipesinput`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `recipes`
--
ALTER TABLE `recipes`
  ADD CONSTRAINT `recipes_ibfk_1` FOREIGN KEY (`UserID`) REFERENCES `users` (`userid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
