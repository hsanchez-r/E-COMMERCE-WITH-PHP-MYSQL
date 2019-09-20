-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 14, 2019 at 09:24 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `videogames_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `dev`
--

CREATE TABLE `dev` (
  `dev_id` int(11) NOT NULL,
  `dev_name` varchar(200) NOT NULL,
  `dev_description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dev`
--

INSERT INTO `dev` (`dev_id`, `dev_name`, `dev_description`) VALUES
(1, 'Blizzard Entertainment', ''),
(2, 'Ubisoft Entertainment', ''),
(3, 'Nintendo', ''),
(4, 'Massive Entertainment', ''),
(5, 'Rockstar Games', ''),
(6, '343 Industries', ''),
(7, 'Square Enix', ''),
(8, 'Treyarch', ''),
(9, 'Pysonix', ''),
(10, 'Electronic Arts', ''),
(11, '2K Games', ''),
(12, 'Traveller''s Tales', ''),
(13, 'PUBG Corporation', ''),
(14, 'Eidos Montreal', ''),
(15, 'SIE Santa Monica Studios', ''),
(16, 'SIE San Diego Studios', ''),
(17, 'Capcom', ''),
(18, 'Game Freak', ''),
(19, 'The Coalition', ''),
(20, 'BioWare', ''),
(21, '4A Games', '');

-- --------------------------------------------------------

--
-- Table structure for table `plat`
--

CREATE TABLE `plat` (
  `plat_id` int(11) NOT NULL,
  `plat_type` varchar(200) NOT NULL,
  `plat_company` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `plat`
--

INSERT INTO `plat` (`plat_id`, `plat_type`, `plat_company`) VALUES
(1, 'Xbox', 'Microsoft'),
(2, 'PS4', 'Sony Interactive Entertainment'),
(3, 'PC', ''),
(4, 'Nintendo Switch', 'Nintendo Co., Ltd'),
(5, 'Wii U', 'Nintendo Co., Ltd');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_users` int(11) NOT NULL,
  `username` tinytext NOT NULL,
  `email` tinytext NOT NULL,
  `password` longtext NOT NULL,
  `name` tinytext NOT NULL,
  `lastname` tinytext NOT NULL,
  `role` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_users`, `username`, `email`, `password`, `name`, `lastname`, `role`) VALUES
(1, 'useradmin1', 'admin@email.com', 'test1', 'Hector', 'Sanchez', '1');

-- --------------------------------------------------------

--
-- Table structure for table `vgames`
--

CREATE TABLE `vgames` (
  `id` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `dev_id` varchar(200) NOT NULL DEFAULT '',
  `release_date` text NOT NULL,
  `description` text,
  `plat_id` varchar(200) NOT NULL,
  `upc` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `twitch` text NOT NULL,
  `price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vgames`
--

INSERT INTO `vgames` (`id`, `title`, `dev_id`, `release_date`, `description`, `plat_id`, `upc`, `image`, `twitch`, `price`) VALUES
(1, 'Overwatch', '1', 'May 24, 2016', 'The world needs heroes. Join over 30 million players as you clash on the battlefields of tomorrow. Choose your hero from a diverse cast of soldiers, scientists, adventurers, and oddities. Bend time, defy physics, and unleash an array of extraordinary powers and weapons. Engage your enemies in iconic locations from around the globe in the ultimate team-based shooter. Take your place in Overwatch.', '1', '0047875877634', 'www/img/overwatch.jpg', 'overwatchleague', 59.99),
(2, 'Rainbow Six Siege', '2', 'January 12, 2015', 'Rainbow Six Siege is an intense, new approach to the first-person shooter experience. Choose from a variety of unique Counter-Terrorist Operators and master their abilities as you lead your team through tense, thrilling, and destructive team-based combat.', '3', '887256015435', 'www/img/rainbowSixSiege.jpg', 'pengu', 59.99),
(3, 'Zelda breath of the wild', '3', 'March 3, 2017', 'Forget everything you know about The Legend of Zelda games. Step into a world of discovery, exploration, and adventure in The Legend of Zelda: Breath of the Wild, a boundary-breaking new game in the acclaimed series. Travel across vast fields, through forests, and to mountain peaks as you discover what has become of the kingdom of Hyrule In this stunning Open-Air Adventure. Now on Nintendo Switch, your journey is freer and more open than ever. Take your system anywhere, and adventure as Link any way you like.', '5', '045496904159\r\n', 'www/img/zelda.jpg', ' Pterotactical', 59.99),
(4, 'The Division 2', '4', 'March 15, 2019', 'The fate of the free world is on the line in Tom Clancy The Division 2.\r\nLead a team of elite agents into a post-pandemic Washington, DC, to restore order and prevent the collapse of the city.', '3', '0000000', 'www/img/theDivision2.jpg', 'everythingdivision2', 49.99),
(5, 'Grand Theft Auto 5', '5', 'September 17, 2013', 'Los Santos: a sprawling sun-soaked metropolis full of self-help gurus, starlets and fading celebrities, once the envy of the Western world, now struggling to stay afloat in an era of economic uncertainty and cheap reality TV. Amidst the turmoil, three very different criminals risk everything in a series of daring and dangerous heists that could set them up for life. The biggest, most dynamic and most diverse open world ever created and now packed with layers of new detail, Grand Theft Auto V blends storytelling and gameplay in new ways as players repeatedly jump in and out of the lives of the game''s three lead characters, playing all sides of the game''s interwoven story. Grand Theft Auto V for Xbox One also includes Grand Theft Auto Online, the ever-evolving Grand Theft Auto universe.', '1', '710425494512', 'www/img/grandTheftAuto5.jpg', 'Vader', 54.99),
(6, 'Halo 5', '6', 'Octorber 27, 2015', 'A mysterious and unstoppable force threatens the galaxy, the Master Chief is missing and his loyalty questioned. Experience the most dramatic Halo story to date in a 4-player cooperative epic that spans three worlds. Challenge friends and rivals in new multiplayer modes: Warzone, massive 24-player battles, and Arena, pure 4-vs-4 competitive combat.', '1', '885370928518', 'www/img/halo5.jpg', 'UberNick', 29.99),
(7, 'Far Cry New Dawn', '2', 'February 15, 2019', 'Dive into a transformed, vibrant, post-apocalyptic Hope County, Montana, 17 years after a global nuclear catastrophe. Lead the fight against the Highwaymen as they seek to take over the last remaining resources in the latest installment of Far Cry.', '2', '887256300739', 'www/img/farCryNewDawn.jpg', 'Ifdeez', 59.99),
(8, 'Red Dead Redemption 2\r\n', '5', 'October 26, 2018', 'America, 1899. The end of the wild west era has begun as lawmen hunt down the last remaining outlaw gangs. Those who will not surrender or succumb are killed.', '1', '710425478901', 'www/img/redDeadRedemption2.jpg', 'electrinchen', 59.99),
(9, 'Kingdom Hearts 3', '7', 'January 29, 2019', 'Embark on an adventure that spans the Disney universe: Travel across Disney and Pixar worlds to protect them from the Heartless invasion, and befriend and join heroes from Toy Story, Monsters, Inc., Big Hero 6, Tangled, Hercules, and more!', '2', '662248915050', 'www/img/kingdomHearts3.jpg', 'Bl00dyBizkitz', 59.99),
(10, 'Assassin''s Creed Odyssey', '2', 'October 25, 2018', 'Write your own epic odyssey and become a legendary Spartan hero. Forge your destiny in a world on the brink of tearing itself apart. Influence how history unfolds in an ever-changing world shaped by your choices. Assassin''s Creed Odyssey brings player choice to the forefront through innovations never-before-seen in Assassin''s Creed as you choose the hero you want to become and change the world around you. Fight your way across Greece, engaging in visceral battles both on land and sea, to become a true hero of legend.', '3', '0000000', 'www/img/assassinsCreedO.jpg', 'Barmylad', 59.99),
(11, 'Call of Duty: Black Ops 4', '8', 'October 12, 2018', 'Black Ops is back! Featuring gritty, grounded Multiplayer combat, the biggest Zombies offering ever with three full undead adventures at launch, and Blackout, where the universe of Black Ops comes to life in a massive battle royale experience. Blackout features the largest map in Call of Duty history, signature Black Ops combat, and characters, locations and weapons from the Black Ops series.', '1', '047875882294', 'www/img/callOfDutyBO4.jpg', 'DougisRaw', 39.99),
(12, 'Rocket League', '9', 'July 7, 2015', 'Soccer meets driving once again in the long-awaited, physics-based sequel to the beloved arena classic, Supersonic Acrobatic Rocket-Powered Battle-Cars! A futuristic Sports-Action game, Rocket League, equips players with booster-rigged vehicles that can be crashed into balls for incredible goals or epic saves across multiple, highly-detailed arenas. Using an advanced physics system to simulate realistic interactions, Rocket League relies on mass and momentum to give players a complete sense of intuitive control in this unbelievable, high-octane re-imagining of association football.', '2', '812872018928', 'www/img/rocketLeague.jpg', 'RocketLeagueCentral', 29.99),
(13, 'Madden 19', '10', 'August 10,2018', 'The most authentic sports game in the industry delivering an NFL experience through competing against friends online or side by side, taking your team from pre-season to Super Bowl Champions, and allowing you to be at the center of every play so you can achieve gridiron greatness.', '3', '0000000', 'www/img/madden19.jpg', 'ValorX6XSaint', 49.99),
(14, 'FIFA 19', '10', 'September 28, 2018', 'Powered by Frostbite*, EA SPORTS FIFA 19 delivers a champion-caliber experience on and off the pitch. Introducing the prestigious UEFA Champions League, offering gameplay innovation that allows you to control the pitch in every moment and providing new and unrivaled ways to play. Experience the dramatic finale to the story of Alex Hunter in The Journey: Champions*, a new mode in the ever-popular FIFA Ultimate Team, additional leagues in Career Mode, and more. Champions Rise in FIFA 19.', '4', '014633738292', 'www/img/fifa19.jpg', 'Nick28T', 59.99),
(15, 'NBA 2K19', '11', 'September 7, 2018', 'NBA 2K celebrates 20 years of redefining what sports gaming can be, from best in class graphics & gameplay to groundbreaking game modes and an immersive open-world "Neighborhood." NBA 2K19 continues to push limits as it brings gaming one step closer to real-life basketball excitement and culture.', '1', '710425590504', 'www/img/nBA2K19.jpg', 'Chenzo', 59.99),
(16, 'Battlefield V', '10', 'November 20, 2018', 'Enter mankind''s greatest conflict with Battlefield V as the series goes back to its roots with a never-before-seen portrayal of World War 2. Assemble your Company of customized soldiers, weapons, and vehicles, then take them on an epic journey through the Tides of War.', '2', '014633372458', 'www/img/battlefieldV.jpg', 'BrokenMachineLive', 59.99),
(17, 'Lego DC Super-Villain', '12', 'October 19, 2018', 'Embark on an all-new LEGO open-world adventure by becoming the best villain the universe has seen in LEGO DC Super-Villains. For the first time, a LEGO game is giving you and your family the ability to play as a super-villain, unleashing mischievous antics and wreak havoc in an action-packed, hilarious story written in collaboration with DC Comics.', '3', '0000000', 'www/img/legoDCSuperVillians.jpg', 'Drtyninja', 19.99),
(18, 'PlayerUnknown''s Battlegrounds', '13', 'March 23, 2017', 'PLAYERUNKNOWN''S BATTLEGROUNDS is a battle royale shooter that pits 100 players against each other in a struggle for survival. Gather supplies and outwit your opponents to become the last person standing.', '3', '500000000036', 'www/img/playersUnknownBattlegrounds.jpg', 'Kaymind', 59.99),
(19, 'Shadow of the Tomb Raider', '14', 'September 14, 2018', 'Experience Lara croft''s defining moment as she becomes the Tomb Raider. In Shadow of the Tomb Raider, Lara must master a deadly jungle, overcome terrifying tombs, and persevere through her darkest hour. As she races to save the world from a Maya Apocalypse, Lara will ultimately be forged into the Tomb Raider she is destined to be.', '1', '662248921310', 'www/img/shadowOfTheTombRaider.jpg', 'HuntmasterOrion', 59.99),
(20, 'God of War (2018)', '15', 'April 20, 2018', 'It is a new beginning for Kratos. Living as a man outside the shadow of the gods, he ventures into the brutal Norse wilds with his son Atreus, fighting to fulfill a deeply personal quest.', '2', '711719506133\r\n', 'www/img/godOfWar.jpg', 'Yawwn_Solo', 59.99),
(21, 'MLB The Show 19', '16', 'May 26, 2019', 'The Show is back! MLB The Show 19 brings you the best of baseball. Play America''s pastime your way, with new game modes, expanded team building and player customization, and an extensive personalized RPG experience. Create your own player and rise through the MLB ranks or play against others as baseball''s greatest stars and legends. Fierce online competition, exciting RPG action, lightning fast gameplay. The Show 19 has it all. This is more than baseball. Welcome to The Show.', '2', '711719510536', 'www/img/mLBTheShow19.jpg', 'ProblemWright', 49.99),
(22, 'Monster Hunter: World', '17', 'January 26, 2018', 'Monster Hunter: World puts you in a living, breathing ecosystem as a hunter that seeks and slays ferocious beasts in heart-pounding battles that unfold across the vast ever-changing terrain. Venture on quests alone or cooperatively with up to three hunters via online drop-in multiplayer.', '3', '0000000', 'www/img/monsterHunterWorld.jpg', 'DuckWarriorLily', 59.99),
(23, 'Mario Kart 8 Deluxe', '3', 'April 28, 2017', 'Hit the road with the definitive version of Mario Kart 8 and play anytime, anywhere! Race your friends or battle them in a revised battle mode on new and returning battle courses. Play locally in up to 4-player multiplayer in 1080p while playing in TV Mode. Every track from the Wii U version, including DLC, makes a glorious return. Plus, the Inklings appear as all-new guest characters, along with returning favorites, such as King Boo, Dry Bones, and Bowser Jr.!', '4', '045496590475', 'www/img/marioKartDeluxe8.jpg', 'Jenneses', 59.99),
(24, 'Pokemon Lets Go Pikachu', '18', 'November 16, 2018', 'Take your Pokemon journey to the Kanto region with your energetic partner, Pikachu, to become a top Pokemon Trainer as you battle other trainers. Use a throwing motion to catch Pokemon in the wild with either one Joy-Con controller or Poke Ball Plus accessory, which will light up, vibrate, and make sounds to bring your adventure to life. Share your adventure with family or friends in 2-player action using a second Joy-Con or Poke Ball Plus (sold separately). You can even connect to the Pokemon GO app using a compatible smartphone to bring over Pokemon originally discovered in the Kanto region!', '4', '045496593940', 'www/img/pokemonLetsGoPikachu.jpg', 'numbbleezus', 39.99),
(25, 'Pokemon Lets Go Eevee', '18', 'November 16, 2018', 'Take your Pokemon journey to the Kanto region with your energetic partner, Pikachu, to become a top Pokemon Trainer as you battle other trainers. Use a throwing motion to catch Pokemon in the wild with either one Joy-Con controller or Poke Ball Plus accessory, which will light up, vibrate, and make sounds to bring your adventure to life. Share your adventure with family or friends in 2-player action using a second Joy-Con or Poke Ball Plus (sold separately). You can even connect to the Pokemon GO app using a compatible smartphone to bring over Pokemon originally discovered in the Kanto region!\n', '4', '045496593971', 'www/img/pokemonLetsGoEvee.jpg', 'numbbleezus', 39.99),
(26, 'Gears of War 4', '19', 'October 11, 2016', 'A new saga begins for one of the most acclaimed video game franchises in history. After narrowly escaping an attack on their village, JD Fenix and his friends, Kait and Del, must rescue the ones they love and discover the source of a monstrous new enemy.\r\n', '1', '889842118667', 'www/img/gearsOfWar4.jpg', 'ElGamerWICHO', 29.99),
(27, 'Super Smash Bros. Ultimate', '3', 'December 07, 2018', 'Gaming icons clash in the ultimate brawl you can play anytime, anywhere! Smash rivals off the stage as new characters Simon Belmont and King K. Rool join Inkling, Ridley, and every fighter in Super Smash Bros. history. Enjoy enhanced speed and combat at new stages based on the Castlevania series, Super Mario Odyssey, and more!', '4', '045496592998', 'www/img/superSmashBrosUltimate.jpg', 'VGBootCamp', 59.99),
(28, 'Anthem', '20', 'February 22, 2019', 'On a world left unfinished by the gods, a shadowy faction threatens all of humankind. The only thing that stands between these villains and the ancient technology they covet are the Freelancers.', '1', '014633735253', 'www/img/anthem.jpg', 'ProKillerDante', 59.99),
(29, 'Super Mario Odyssey', '3', 'October 27, 2017', 'Embark on a captivating, globe-trotting adventure!', '4', '04549659041', 'www/img/superMarioOdyssey.jpg', 'Fir_', 59.99),
(30, 'Metro Exodus', '21', 'February 17, 2019', 'A quarter-century after nuclear war devastated the earth, a few thousand survivors still cling to existence beneath the ruins of Moscow, in the tunnels of the Metro.They have struggled against the poisoned elements, fought mutated beasts and paranormal horrors, and suffered the flames of civil war.But now, as Artyom, you must flee the Metro and lead a band of Spartan Rangers on an incredible, continent-spanning journey across post-apocalyptic Russia in search of a new life in the East.Metro Exodus is an epic, story-driven first person shooter from 4A Games that blends deadly combat and stealth with exploration and survival horror in one of the most immersive game worlds ever created.Explore the Russian wilderness across vast, non-linear levels and follow a thrilling story-line that spans an entire year through spring, summer and autumn to the depths of nuclear winter.Inspired by the novels of Dmitry Glukhovsky, Metro Exodus continues Artyom''s story in the greatest Metro adventure', '3', '0000000', 'www/img/metroExodus.jpg', 'UnclePunk', 59.99);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dev`
--
ALTER TABLE `dev`
  ADD PRIMARY KEY (`dev_id`);

--
-- Indexes for table `plat`
--
ALTER TABLE `plat`
  ADD PRIMARY KEY (`plat_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_users`);

--
-- Indexes for table `vgames`
--
ALTER TABLE `vgames`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dev`
--
ALTER TABLE `dev`
  MODIFY `dev_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `plat`
--
ALTER TABLE `plat`
  MODIFY `plat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_users` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `vgames`
--
ALTER TABLE `vgames`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
