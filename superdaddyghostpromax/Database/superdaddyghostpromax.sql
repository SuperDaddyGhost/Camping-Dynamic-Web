-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 25, 2023 at 11:42 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `superdaddyghostpromax`
--

-- --------------------------------------------------------

--
-- Table structure for table `attractions`
--

CREATE TABLE `attractions` (
  `id` int(11) NOT NULL,
  `list` text NOT NULL,
  `campid` int(11) NOT NULL,
  `remark` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `attractions`
--

INSERT INTO `attractions` (`id`, `list`, `campid`, `remark`) VALUES
(1, 'The camping areas on this quiet working farm are situated on riverside meadows with direct access to the River Wye. There are a total of 42 pitches, suitable for tents and a limited number of small campervans. A maximum of six people are allowed per pitch. Canoe and paddle board launching and access onto the river is free for campers.', 8, ''),
(2, 'Experience camping in Glencoe, where you will discover Scotland’s wildlife and some of the most beautiful scenery this country has to offer with breathtaking mountain views and riverside spots. A rural spot for those looking to explore the highlands with plenty to do nearby including waterfalls, trails and the UK’s highest peak – Ben Nevis (40 minutes).', 9, ''),
(3, 'This is an award winning conversation site (David Bellamy Gold Award winners for over 10 years) with lots of greenery for everyone to enjoy. Pitches for caravans, tents and motorhomes are offered on the Cider Mill field, a spacious four acre, level and open field with options to include electric and non-electric spaces', 11, ''),
(4, 'Top of the wood is home to a selection of glamping accommodation, plus tent camping and an exclusive campervan pitch that’ll take you right back to nature. Park up in their campervan pitch, a large pitch bordered by newly planted woodland, with plenty of space for one campervan plus gazebo/awning or two if you are coming with friends of family.', 12, ''),
(5, 'The La Jolla Indian Camp is the only campground in San Diego Country that’s campfire-friendly and has river access. This river camping spot has multiple sites – group, tent-only and even RV campgrounds. Enjoy tubing in the San Luis River in the midst of the undisturbed wilderness.', 13, ''),
(6, 'Head to over to Camp Kernville to Experience camping with modern amenities. Not only does the campground provide you with up to date restroom facilities and RV rentals but it also has a 1,000 foot private beach area along the Kern River. Discover a newfound love for watersports at this SoCal river camping destination.', 14, ''),
(7, 'Experience river camping in the Northern California at Fowlers Campground which offers a number of campsites for RVs, trailers and tents. Not only is it one of the best places for McCloud falls camping but its also a wonderful place for outdoor activities- fishing activities available. Enjoy a peaceful weekend here and head back to the city.', 15, ''),
(8, 'Clear Springs campsite has sweeping views overs rolling hills, across to the ocean and has koalas and wallabies in abundance. The site is BYO toiet but does have a hot shower, woodfired hot-tub, power, water and phone reception. This site is all-weather access and is just a 7-minutes drive to the Apollo Bay township', 16, ''),
(9, 'Stay on the Howqua River in the lake Eildan Region. Choose from basic cabins or four sites only accessed by 4WD or AWD with access to toilets, showers, a cooking area and deck. Go swimming, canoeing, waterskiing, sailing and fishing in the shower of the Victorian Alps. Hike up to one of the mountains for breath-taking lookouts and unrivalled views. Cabins and sites are also are pet friendly. ', 17, ''),
(10, 'Explore 40 hectares of lush natural bushland crisscrossed with crystal-clear freshwater creeks and backing onto Springbrook National Park. The campsite is within easy reach of Natural Arch and great fishing and crabbing on the Tweed River.', 18, '');

-- --------------------------------------------------------

--
-- Table structure for table `booking_new`
--

CREATE TABLE `booking_new` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `number` varchar(10) NOT NULL,
  `campsite_name` varchar(50) NOT NULL,
  `check_in_date` date NOT NULL,
  `check_out_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `booking_new`
--

INSERT INTO `booking_new` (`id`, `name`, `email`, `number`, `campsite_name`, `check_in_date`, `check_out_date`) VALUES
(2, 'Itachi', 'user@user.com', '0944445545', '10.	Crystal Creek Ranch ', '2023-02-06', '2023-02-07');

-- --------------------------------------------------------

--
-- Table structure for table `camp`
--

CREATE TABLE `camp` (
  `id` int(11) NOT NULL,
  `camp_name` varchar(100) NOT NULL,
  `location` text NOT NULL,
  `address` text NOT NULL,
  `country` varchar(255) NOT NULL,
  `about` text NOT NULL,
  `photo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `camp`
--

INSERT INTO `camp` (`id`, `camp_name`, `location`, `address`, `country`, `about`, `photo`) VALUES
(8, 'Clifford, Hereford,Herefordshire, united Kingdom', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d19160.092455466496!2d-3.636521864430573!3d53.1099848699645!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48653bea2954a2e9%3A0xa3eb4c168b0d3ad6!2sGwarchodfa%20Natur%20Genedlaethol%20Hafod%20Elwy%20Hafod%20Elwy%20Moor%20National%20Nature%20Reserve!5e0!3m2!1sen!2smm!4v1690315815416!5m2!1sen!2smm', 'Clifford, Hereford,Herefordshire, United Kingdom', 'United Kingdom', 'This camp is a creative arts and performing arts camp that caters to young artists between the ages of 10 and 18. Located in a scenic countryside setting or near a cultural hub, the camp provides an inspiring and nurturing environment for participants to explore and enhance their artistic talents.', 'photos/uk1.jpeg'),
(9, 'Red Squirrel Campsite', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d9554.856379556017!2d-3.4767034491678825!3d53.22297447472862!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48652f05cf40423d%3A0xed89f9fd0492c226!2sOpen%20Door%20Adventure!5e0!3m2!1sen!2smm!4v1690315920001!5m2!1sen!2smm', 'Glencoe, Highlands, Scotland, United Kingdom', 'United Kingdom', 'Red Squirrel Campsite is an educational and environmental conservation camp designed for teenagers and young adults aged 15 to 18. Located in a beautiful natural setting, the camp provides a unique learning experience that focuses on sustainability, ecological awareness, and hands-on conservation efforts.', 'photos/9270-tent-campfire-camping-night-nature-4k.jpg'),
(11, 'Woodside Country Park', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d76508.54723832691!2d-4.331105006337812!3d53.18391537065455!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4865aa2147ee0459%3A0x617f079e21a51bb9!2sPili%20Palas%20Nature%20World!5e0!3m2!1sen!2smm!4v1690315964591!5m2!1sen!2smm', 'Ledbury, Herefordshire, United Kingdom', 'United Kingdom', 'This camp is a sports and fitness camp tailored for children and teenagers aged 8 to 14 who have a passion for athletics and staying active. Situated in a picturesque location with access to sports facilities, the camp offers a fun and motivating environment to improve athletic skills and foster a love for physical activity.\r\n\r\n', 'photos/3eLXO5.jpg'),
(12, 'Top of the Woods', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d153462.93809981592!2d-4.4790778377978215!3d53.05885152732902!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4865092b61f9afd3%3A0xedccee25f480756d!2sGlyder%20Fawr!5e0!3m2!1sen!2smm!4v1690316023873!5m2!1sen!2smm', 'Capel Coleman, Boncath, Pembrokeshire, Wales, United Kingdom', 'United Kingdom', 'Top of the wood is a unique cultural exchange and language immersion camp that provides a diverse and enriching experience for teenagers aged 13 to 17. Located in an international setting, the camp welcomes participants from different countries and backgrounds who are eager to learn about other cultures and languages.', 'photos/pexels-nathan-moore-2603681.jpg'),
(13, 'La Jolla Indian Camp', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d27498.89732546921!2d-88.75674520889005!3d30.510796664469428!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x889b8b8e1410a849%3A0x74923a35b9f984ba!2sVancleave%2C%20MS%2039565%2C%20USA!5e0!3m2!1sen!2smm!4v1690316152103!5m2!1sen!2smm', '22000 California 76, Pauma Valley, United State', 'United States', 'The La Jolla Indian Camp is an outdoor adventure and leadership development camp tailored for teenagers and young adults aged 16 to 20. Situated in a remote wilderness area, the camp offers a transformative experience that focuses on personal growth, teamwork, and leadership skills.', 'photos/360_F_593937581_PpVfETEFbOsPAkee2TqGsrpDeyKSuFMH.jpg'),
(14, 'Camp Kernville', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d110051.69628691484!2d-88.83347784414123!3d30.461166233422173!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x889c0da0bd21745b%3A0xb5aa8ff9ec89c4b9!2sRiverside%20Park!5e0!3m2!1sen!2smm!4v1690316359087!5m2!1sen!2smm', '24 Sirretta Street, Kernville, United State', 'United States', 'This camp is a music and performing arts camp designed for aspiring young musicians, singers, dancers, and actors. Located in a scenic countryside setting, the camp offers a creative and nurturing environment for individuals aged 10 to 18 to hone their artistic talents and explore their passion for the performing arts.', 'photos/216313.jpg'),
(15, 'Fowlers campground', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d110051.69628691484!2d-88.83347784414123!3d30.461166233422173!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x889c132cc1d0441d%3A0xadf2e17e6d8ba466!2sWoolmarket%20Community%20Center!5e0!3m2!1sen!2smm!4v1690316450198!5m2!1sen!2smm', 'Fowler Public Camp Road, McCloud, United State', 'United States', 'Fowlers campground is a wilderness retreat nestled deep within a national park, offering a nature-centric experience for individuals seeking a peaceful and rejuvenating escape. The camp is designed for adults and families who want to immerse themselves in the beauty of the great outdoors while disconnecting from the hustle and bustle of everyday life.', 'photos/2452610.jpg'),
(16, 'Clear Springs', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d62350.113924843565!2d132.9074629331744!3d-12.390823284363995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2cb7c4b1a82a38c1%3A0x4f20c894da3fc564!2sNadab%20Lookout!5e0!3m2!1sen!2smm!4v1690316637225!5m2!1sen!2smm', 'Apollo Bay, great ocean road, VIC, Australia', 'Australia', 'This camp is a specialized technology and innovation camp designed for teenagers with a passion for science, engineering, and computer programming. It offers a unique and immersive experience where campers can explore cutting-edge technologies and develop their skills in a creative and supportive environment.', 'photos/Camping-Wallpaper-07-1920x1080-1.jpg'),
(17, 'Taylor Bay Country Club', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d500288.70601735206!2d132.2254523208722!3d-11.58726372338623!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2cc60c627badf68f%3A0x8aebdfe501c3b307!2sGarig%20Gunak%20Barlu%20National%20Park%20(Cobourg%20Marine%20Park)!5e0!3m2!1sen!2smm!4v1690316946500!5m2!1sen!2smm', 'Howqua River, VIC, Australia', 'Australia', 'This camp is an adventure-based camp located in the foothills of a mountain range. It primarily caters to teenagers and young adults aged 14 to 20, offering an adrenaline-pumping outdoor experience. The camp\'s main focus is on promoting leadership skills, outdoor survival techniques, and environmental awareness.', 'photos/black-bird-in-focus-shot-photography-double-crested-cormorant-double-crested-cormorant-wallpaper-preview.jpg'),
(18, 'Crystal Creek Ranch', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15581.054742936547!2d131.00889595188056!3d-12.498673589381557!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2cc0a2d7a688ca89%3A0x138c495ac9cbdfa6!2sSanctuary%20Lakes%20Park!5e0!3m2!1sen!2smm!4v1690317170394!5m2!1sen!2smm', 'Upper Crystal Creek, Tweed Coast, NSW, Australia', 'Australia', 'Crystal Creek Ranch is a well-established summer camp located in a picturesque woodland area. It caters to children and teenagers between the ages of 8 and 16, offering a wide range of outdoor activities and educational programs. The camp is known for its emphasis on fostering teamwork, personal growth, and self-confidence among its campers.', 'photos/216309.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `number` varchar(20) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `number`, `message`) VALUES
(2, 'Saburo', 'saburo@gmail.com', '09123456789', 'Dear GWSC,\r\n\r\nI hope this message finds you well. My name is [Your Name], and I am writing to inquire about the enrollment process for your camp. I came across your camp\'s website and was impressed by the fantastic range of activities and the positive testimonials from past campers.\r\n\r\nI have a [son/daughter/niece/nephew] named [Camper\'s Name] who is [age], and they have a keen interest in [nature exploration/arts and crafts/sports/any specific activity mentioned on the camp website]. We believe that your camp would be a perfect fit for their interests and personal growth.'),
(3, 'Yahiko', 'naruto@yahoo.com', '09987654321', 'Dear GWSC,\r\n\r\nI hope this email finds you well. My name is [Your Name], and I am writing to inquire about your products/services. I came across your website and was impressed by the range of offerings and positive customer reviews.');

-- --------------------------------------------------------

--
-- Table structure for table `counter`
--

CREATE TABLE `counter` (
  `count` int(255) NOT NULL,
  `id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `counter`
--

INSERT INTO `counter` (`count`, `id`) VALUES
(0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `features`
--

CREATE TABLE `features` (
  `id` int(11) NOT NULL,
  `list` text NOT NULL,
  `campid` int(11) NOT NULL,
  `remark` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `features`
--

INSERT INTO `features` (`id`, `list`, `campid`, `remark`) VALUES
(1, 'Camp fire,\nDog Allowed,\nShower', 8, ''),
(2, 'Wifi,\r\nShower,\r\nCamp fire,\r\nFishing', 9, ''),
(3, 'Dog Allowed, Camp Fire', 11, ''),
(4, 'Wifi, Shower, Camp fire, Fishing', 12, ''),
(5, 'Camp fire, Dog Allowed, Camp Fire, Shower', 13, ''),
(6, 'Camp Fire, Shower', 14, ''),
(7, 'Fishing, Camp Fire, Shower', 15, ''),
(8, 'Shower, Fishing, Camp Fire', 16, ''),
(9, 'Shower, Camp fire, Wifi', 17, ''),
(10, 'Wifi, Shower, Camp fire, Fishing', 18, '');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` int(11) NOT NULL,
  `message` text NOT NULL,
  `campid` int(11) NOT NULL,
  `username` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`id`, `message`, `campid`, `username`) VALUES
(4, 'This camp was an absolute blast for my kids! They had the time of their lives and couldn\'t stop talking about all the fun activities they did each day. The counselors were fantastic, and I felt reassured knowing my children were in safe hands. The campsite was beautiful, surrounded by nature, which made it a perfect setting for a summer camp. My kids made so many new friends and came back with a newfound sense of confidence and independence. They especially loved the kayaking and archery sessions. We\'ll definitely be sending them back to Camp 1 next year!', 8, 'Damian'),
(5, 'Sending my daughter to Camp 1 was the best decision ever! She came back from the camp with a huge smile on her face, and I could tell she had an incredible time. The staff was caring and attentive, making her feel welcome and supported throughout her stay. She participated in a variety of activities, from arts and crafts to outdoor games, and she loved every minute of it. As a parent, I was impressed with the emphasis on safety and organization at the camp. The memories and friendships she made will last a lifetime. We\'re already counting down the days until she can go back next summer!', 8, 'Uchia Sasuke'),
(6, 'My child\'s experience at Camp 1 was disappointing. The facilities were run-down, and the cabins were not well-maintained. The camp activities were disorganized, and it seemed like the staff lacked proper training. My child didn\'t feel safe during some of the outdoor adventures due to inadequate supervision. Communication with the camp was also challenging, as our concerns were not addressed promptly. Overall, it was not the enjoyable and enriching experience we were hoping for, and we won\'t be returning.', 9, 'Kyaw Thu'),
(7, 'Our experience at this camp was decent. The campsite was in a beautiful location, and the activities offered were diverse. Some of the staff members were friendly and helpful, while others seemed a bit disengaged. The facilities were average, but they could use some improvement. Overall, it was an okay experience for my child, but we might explore other options next time.', 11, 'Saburo V');

-- --------------------------------------------------------

--
-- Table structure for table `rssfeed`
--

CREATE TABLE `rssfeed` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `link` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `rssfeed`
--

INSERT INTO `rssfeed` (`id`, `title`, `description`, `link`) VALUES
(1, 'Home', 'This is the Home Page of GWSC.', 'http://localhost/superdaddyghostpromax/user_page.php'),
(2, 'Camps', 'This is the camp sites where customers can book.', 'http://localhost/superdaddyghostpromax/usercamp.php'),
(3, 'About Us', 'This is the about us page of GWSC web.', 'http://localhost/superdaddyghostpromax/aboutus.php'),
(4, 'Contact Us', 'This the contact web page where customer can get support by customer care.', 'http://localhost/superdaddyghostpromax/contact_us.php'),
(5, 'Logout', 'This is the logout button.', 'http://localhost/superdaddyghostpromax/logout.php');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(32) NOT NULL,
  `user_type` enum('admin','user') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `first_name`, `last_name`, `name`, `email`, `password`, `user_type`) VALUES
(2, 'Itachi', 'Arasaka', 'Itachi Arasaka', 'admin@admin.com', '21232f297a57a5a743894a0e4a801fc3', 'admin'),
(3, 'Damian', 'KT', 'Damian KT', 'user@user.com', 'ee11cbb19052e40b07aac0ca060c23ee', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `visitedip`
--

CREATE TABLE `visitedip` (
  `ip` text NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `visitedip`
--

INSERT INTO `visitedip` (`ip`, `id`) VALUES
('::1', 0),
('0', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attractions`
--
ALTER TABLE `attractions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `booking_new`
--
ALTER TABLE `booking_new`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `camp`
--
ALTER TABLE `camp`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `counter`
--
ALTER TABLE `counter`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `features`
--
ALTER TABLE `features`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rssfeed`
--
ALTER TABLE `rssfeed`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `visitedip`
--
ALTER TABLE `visitedip`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `attractions`
--
ALTER TABLE `attractions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `booking_new`
--
ALTER TABLE `booking_new`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `camp`
--
ALTER TABLE `camp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `counter`
--
ALTER TABLE `counter`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `features`
--
ALTER TABLE `features`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `rssfeed`
--
ALTER TABLE `rssfeed`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
