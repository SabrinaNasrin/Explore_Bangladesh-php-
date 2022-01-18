-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 16, 2017 at 05:30 PM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `explore_bangladesh`
--

-- --------------------------------------------------------

--
-- Table structure for table `all_link`
--

CREATE TABLE IF NOT EXISTS `all_link` (
  `id` int(11) NOT NULL,
  `name15` varchar(1000) NOT NULL,
  `link` varchar(1000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `all_link`
--

INSERT INTO `all_link` (`id`, `name15`, `link`) VALUES
(1, 'village', 'experience_village.php'),
(2, 'rangamati', 'rangamati.php'),
(3, 'hotel', 'hotel.php'),
(4, 'resort', 'resort.php'),
(5, 'memory lane', 'a_tripdown_to_memory_lane.php'),
(6, 'anthem', 'anthem.php'),
(7, 'art', 'art_and_culture.php'),
(8, 'bandarban', 'bandarban.php'),
(9, 'bangladesh at a glance', 'bangladesh_at_a_glance.php'),
(10, 'zoo', 'bangladesh_national_zoo.php'),
(11, 'beach', 'beach_holiday.php'),
(12, 'business ', 'business_trip.php'),
(13, 'plane', 'by_air.php'),
(14, 'bus', 'by_road.php'),
(15, 'train', 'by_train.php'),
(16, 'boat', 'by_water.php'),
(17, 'carnival', 'carnival_of_culture.php'),
(18, 'contact', 'contact_us.php'),
(19, 'cox bazar', 'cox''s_bazar.php'),
(20, 'religion', 'culture_religion.php'),
(21, 'emergency', 'emergency_numbers.php'),
(22, 'diverse_ethnicity', 'experience_the_diverse_ethnicity.php'),
(23, 'archeology', 'explore_the_archeological_wonders.php'),
(24, 'architecture', 'explore_the_architechtural_wonders.php'),
(25, 'festival', 'festivals.php'),
(26, 'fire service', 'fire_service.php'),
(27, 'foods', 'foods_shopping.php'),
(28, 'foreign embassy', 'froeign_embassies_in_bangladesh.php'),
(29, 'geography', 'geography.php'),
(30, 'holidays', 'government_holidays.php'),
(31, 'hill track', 'hill_track.php'),
(32, 'history', 'history.php'),
(33, 'home', 'home.php'),
(34, 'hospital', 'hospital.php'),
(35, 'jungle', 'jungle.php'),
(36, 'khagrachori', 'khagrachori.php'),
(37, 'kuakata', 'kuakata.php'),
(38, 'land of pride', 'land_of_pride.php'),
(39, 'bangladeshi embassy', 'list_of_bangladeshi_embassies_abroad.php'),
(40, 'archeological site', 'major_archeological_site.php'),
(41, 'money exchange', 'money_exchange_points.php'),
(42, 'performing art', 'performing_art.php'),
(43, 'photo gallery', 'photo_galary.php'),
(44, 'immegration ports', 'points_of_immegration_ports.php'),
(45, 'police station', 'police_station.php'),
(46, 'research study', 'research_study.php'),
(47, 'river cruise', 'river_cruise.php'),
(48, 'saint martin', 'saint_martin.php'),
(49, 'tea garden', 'tea_garden.php'),
(50, 'tour operator', 'tour_operators.php'),
(51, 'travel agent', 'travel_agents.php'),
(52, 'travel tips', 'travel_tips.php'),
(53, 'videos', 'video_gallery.php'),
(54, 'where to stay', 'where_to_stay.php'),
(55, 'bangladesh year', 'visit_bangladesh_year.php'),
(56, 'cultural heritege', 'world_cultural_heritege.php');

-- --------------------------------------------------------

--
-- Table structure for table `bangladeshi embassy`
--

CREATE TABLE IF NOT EXISTS `bangladeshi embassy` (
  `name4` varchar(100) CHARACTER SET utf8 NOT NULL,
  `address2` varchar(10000) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`name4`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bangladeshi embassy`
--

INSERT INTO `bangladeshi embassy` (`name4`, `address2`) VALUES
('Australia', '<p><span style="color: #000000;">High Commission for the People’s Republic of Bangladesh</span></p>\r\n<p><span style="color: #000000;">35 Endeavour Street, PO Box 5, Red Hill,</span></p>\r\n<p><span style="color: #000000;">A.C.T 2603, Canberra, Australia</span></p>\r\n<p><span style="color: #000000;">Telephone: (02) 6295 3328, (02) 6295 3485, (02) 6295 3561</span></p>\r\n<p><span style="color: #000000;">FAX: (02) 6295 5331, (02) 6295 0032</span></p>\r\n<p><span style="color: #000000;">&nbsp;</span></p>'),
('Bahrain', '\r\n<p><span style="color: #000000;">Embassy of the People’s Republic of Bangladesh, Manama, Bahrain</span></p>\r\n<p><span style="color: #000000;">House No 2280, Road No 2757, Adliya 327,</span></p>\r\n<p><span style="color: #000000;">Bahrain, P.O Box 26718</span></p>\r\n<p><span style="color: #000000;">Telephone: (0973) 714717/714867</span></p>\r\n<p><span style="color: #000000;">FAX: (0973) 710031</span></p>\r\n<p><span style="color: #000000;">&nbsp;</span></p>'),
('Belgium', '<p><span style="color: #000000;">Embassy of the People’s Republic of Bangladesh, Brussels.</span></p>\r\n<p><span style="color: #000000;">29-31 Rue Jacques Jordaens, 1050 Brussels, Belgium</span></p>\r\n<p><span style="color: #000000;">Telephone: (02) 6405500, 6405606</span></p>\r\n<p><span style="color: #000000;">FAX: 32-2-6465998</span></p>\r\n<p><span style="color: #000000;">&nbsp;</span></p>'),
('Bhutan', '<p><span style="color: #000000;">Embassy of the People’s Republic of Bangladesh, Thimphu, Bhutan</span></p>\r\n<p><span style="color: #000000;">Plot No HIG-3, Upper Chubachu, Thimphu, Bhutan</span></p>\r\n<p><span style="color: #000000;">P.O Box 178</span></p>\r\n<p><span style="color: #000000;">Telephone: 22539</span></p>\r\n<p><span style="color: #000000;">FAX: 00975-22629</span></p>\r\n<p><span style="color: #000000;">&nbsp;</span></p>'),
('Canada', '<p><span style="color: #000000;">High Commission for the People’s Republic of Bangladesh, Ottowa</span></p>\r\n<p><span style="color: #000000;">275 Bank Street, Suite 302, Ottowa</span></p>\r\n<p><span style="color: #000000;">Ontario K2P 2L6, Canada</span></p>\r\n<p><span style="color: #000000;">Telephone: (613) 236-0138, (613) 236-0139</span></p>\r\n<p><span style="color: #000000;">FAX: (613) 567-3213</span></p>\r\n<p><span style="color: #000000;">&nbsp;</span></p>'),
('China', '<p><span style="color: #000000;">Embassy of the People’s Republic of Bangladesh, Beijing</span></p>\r\n<p><span style="color: #000000;">42, Guang Hua Lu, Beijing-100600, China</span></p>\r\n<p><span style="color: #000000;">Telephone: 65-322521, 65-323706</span></p>\r\n<p><span style="color: #000000;">FAX: 65-324346</span></p>\r\n<p><span style="color: #000000;">&nbsp;</span></p>'),
('Germany', '<p><span style="color: #000000;">Embassy of the People’s Republic of Bangladesh, Bonn</span></p>\r\n<p><span style="color: #000000;">Bonner Strasse 48, 53173 Bonn, Germany</span></p>\r\n<p><span style="color: #000000;">Telephone: 0228-352525, 0228-362940</span></p>\r\n<p><span style="color: #000000;">FAX: 0228-3544142</span></p>\r\n<p><span style="color: #000000;">&nbsp;</span></p>'),
('India', '<p><span style="color: #000000;">High Commission for the People’s Republic of Bangladesh, New Delhi</span></p>\r\n<p><span style="color: #000000;">56, Ring Road, Lajpat Nagar-III</span></p>\r\n<p><span style="color: #000000;">New Delhi-110024, India</span></p>\r\n<p><span style="color: #000000;">Telephone: PABX 6834668, 6839209</span></p>\r\n<p><span style="color: #000000;">FAX: 91-11-6839237, 91-11-6840596</span></p>\r\n<p><span style="color: #000000;">&nbsp;</span></p>'),
('India (Calcutta)', '<p><span style="color: #000000;">Deputy High Commission for the People’s Republic of Bangladesh, Calcutta</span></p>\r\n<p><span style="color: #000000;">9 Circus Avenue, Calcutta-700017, India</span></p>\r\n<p><span style="color: #000000;">Telephone: 247-5208, 247-0341, 247-5209</span></p>\r\n<p><span style="color: #000000;">FAX: 91-33-2470941</span></p>\r\n<p><span style="color: #000000;">&nbsp;</span></p>'),
('Italy', '<p><span style="color: #000000;">Embassy of the People’s Republic of Bangladesh, Rome</span></p>\r\n<p><span style="color: #000000;">Via Antonio Bertolini, 14, Rome-00197, Italy</span></p>\r\n<p><span style="color: #000000;">Telephone: 8083595, 8078541 (PABX)</span></p>\r\n<p><span style="color: #000000;">FAX: (396) 8084853</span></p>\r\n<p><span style="color: #000000;">&nbsp;</span></p>'),
('Japan', '<p><span style="color: #000000;">Embassy of the People’s Republic of Bangladesh, Tokyo</span></p>\r\n<p><span style="color: #000000;">4-15-15, Meguro, Meguro-KU</span></p>\r\n<p><span style="color: #000000;">Tokyo-153-0063, Japan</span></p>\r\n<p><span style="color: #000000;">Telephone: 5704-0216-8 (PABX)</span></p>\r\n<p><span style="color: #000000;">FAX: (03) 5704-1696</span></p>\r\n<p><span style="color: #000000;">&nbsp;</span></p>'),
('Kingdom of Saudi Arabia, Jeddah\r\n\r\n', '<p><span style="color: #000000;">Embassy of the People’s Republic of Bangladesh, Riyadh, K.S.A</span></p>\r\n<p><span style="color: #000000;">Sulaimania, Al-Warud Quarter North of Aruba Street, House No 50</span></p>\r\n<p><span style="color: #000000;">Sulaimania, Riyadh 1169 K.S.A</span></p>\r\n<p><span style="color: #000000;">Telephone: PABX 4655300, 4641594, 465665</span></p>\r\n<p><span style="color: #000000;">FAX: 4633555</span></p>\r\n<p><span style="color: #000000;">&nbsp;</span></p>'),
('Korea', '<p><span style="color: #000000;">Embassy of the People’s Republic of Bangladesh, Seoul</span></p>\r\n<p><span style="color: #000000;">7-3 Hannan 1-dong, Yongsanku, Seoul, Korea</span></p>\r\n<p><span style="color: #000000;">Telephone: 82-2-796-4056/7, 795-6535</span></p>\r\n<p><span style="color: #000000;">FAX: 82-2-790-5313</span></p>\r\n<p><span style="color: #000000;">&nbsp;</span></p>'),
('Malaysia', '<p><span style="color: #000000;">High Commission for the People’s Republic of Bangladesh, Kaula Lampur</span></p>\r\n<p><span style="color: #000000;">No 204-1, Jalan Ampang, 50450</span></p>\r\n<p><span style="color: #000000;">Kaula Lampur, Malaysia</span></p>\r\n<p><span style="color: #000000;">Telephone: 2487940, 2430768, 2423271, 2422505</span></p>\r\n<p><span style="color: #000000;">FAX: 60-3-2413381</span></p>\r\n<p><span style="color: #000000;">&nbsp;</span></p>'),
('Myanmar', '<p><span style="color: #000000;">Embassy of the People’s Republic of Bangladesh, Yangon</span></p>\r\n<p><span style="color: #000000;">56, Kaba Aye Pagoda Road, Yangon, Myanmar</span></p>\r\n<p><span style="color: #000000;">Telephone: 549556, 549557 PABX</span></p>\r\n<p><span style="color: #000000;">FAX: 0951–548745</span></p>\r\n<p><span style="color: #000000;">&nbsp;</span></p>'),
('Nepal', '<p><span style="color: #000000;">Embassy of the People’s Republic of Bangladesh, Kathmandu</span></p>\r\n<p><span style="color: #000000;">Maharajganj, Ring Road, Kathmandu</span></p>\r\n<p><span style="color: #000000;">Municipality, Ward No 22, Shanti Ashram, Kitta No 9,</span></p>\r\n<p><span style="color: #000000;">Kathmandu, Nepal</span></p>\r\n<p><span style="color: #000000;">Telephone: PABX 372843</span></p>\r\n<p><span style="color: #000000;">FAX: 977-1-3733265</span></p>\r\n<p><span style="color: #000000;">&nbsp;</span></p>'),
('Singapore', '<p><span style="color: #000000;">High Commission for the People’s Republic of Bangladesh, Singapore</span></p>\r\n<p><span style="color: #000000;">06-07 United Square, 101 Thomson Road Singapore 1120</span></p>\r\n<p><span style="color: #000000;">Telephone: 2550075- PABX</span></p>\r\n<p><span style="color: #000000;">FAX: (065) 2551824</span></p>\r\n<p><span style="color: #000000;">&nbsp;</span></p>'),
('Sri Lanka', '<p><span style="color: #000000;">High Commission for the People’s Republic of Bangladesh, Colombo</span></p>\r\n<p><span style="color: #000000;">47, Sir Ernest de Silva Mawatha</span></p>\r\n<p><span style="color: #000000;">Colombo-7, Sri Lanka</span></p>\r\n<p><span style="color: #000000;">Telephone: 681310, 681311, 681312</span></p>\r\n<p><span style="color: #000000;">FAX: 00941-681309</span></p>\r\n<p><span style="color: #000000;">&nbsp;</span></p>'),
('United Kingdom', '<p><span style="color: #000000;">High Commission for the People’s Republic of Bangladesh, London</span></p>\r\n<p><span style="color: #000000;">28, Queen’s Gate, London SW7 5JA, U.K</span></p>\r\n<p><span style="color: #000000;">Telephone: PABX 0171-584-0081 (4 lines)</span></p>\r\n<p><span style="color: #000000;">FAX: 727965</span></p>\r\n<p><span style="color: #000000;">&nbsp;</span></p>'),
('United States of America\r\n\r\n', '<p><span style="color: #000000;">Embassy of the People’s Republic of Bangladesh, Washington D.C</span></p>\r\n<p><span style="color: #000000;">2201 Wisconsin Avenue, N.W Suite 300-325</span></p>\r\n<p><span style="color: #000000;">Washington DC 20007, USA</span></p>\r\n<p><span style="color: #000000;">Telephone: (202) 342-8372-76</span></p>\r\n<p><span style="color: #000000;">FAX: 202-333-4971</span></p>\r\n<p><span style="color: #000000;">&nbsp;</span></p>');

-- --------------------------------------------------------

--
-- Table structure for table `bus`
--

CREATE TABLE IF NOT EXISTS `bus` (
  `name9` varchar(100) NOT NULL,
  `details` varchar(10000) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `address5` varchar(1000) NOT NULL,
  `route` varchar(10000) NOT NULL,
  PRIMARY KEY (`phone`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bus`
--

INSERT INTO `bus` (`name9`, `details`, `phone`, `address5`, `route`) VALUES
('Hanif Enterprise', 'The mission of Hanif Enterprise is to provide the smoothest journey possible with the maximum level of luxury and comfort. Bus model of Hanif Enterprise is "Volvo 9400 6X2 B9R Multi-axle Coach".', '0171-3049575, 01713-049515', 'Babar Road, College Gaite, Shaymoli, Dhaka', 'DHAKA-CHITTAGONG-COX BAZAR-DHAKA-RAJSHAHI-DHAKA-NATORE -DHAKA-RANGPUR'),
('Ruposhi Bangla', ' Ruposhi Bangla Paribahan has the following regular routes from Dhaka', '01711-831662', ' Saydabad, Dhaka', 'Dhaka -Kulaura - Borolekha- Shahbajpur -Biriani Bazar - Moulovibazar'),
('Parjatak Paribahan', 'Parjatak Paribahan has the following regular routes from Dhaka: (Only Non-AC chair coach bus service is available)', '01746-487181,<br> 01719-813004', '10/1/I/2, Saydabad Highway, Dhaka.', 'Dhaka - Khulna - Bagerhat - Pirojpur (Zia Nagar)-  Rayenda - Sonadanga'),
('Kuakata Express', 'Kuakata Express has the following regular routes from Dhaka: (Both AC and Non-AC bus services are available)', '01761-784382, 01682-903813', '33, Saydabad, Dhaka', 'Dhaka - Barisal  - Potuakhali   - Kuakata'),
('Nazim Paribahan', 'Nazim Paribahan has the following regular routes from Dhaka: (Only Non-AC chair coach bus service is available)', '01765-450793, 01765-450794', ' Saydabad, Dhaka', 'Dhaka- Sylhet – Sunamganj - Chatak'),
('Desh Paribahan Pvt. Ltd.', 'Desh Paribahan Pvt. Ltd. has the following regular routes from Dhaka: (OnlyNon-AC chair coach bus service is available)', '01922-105062', 'Gabtoli, Dhaka', 'Dhaka- Barisal - Pirojpur - Kuakata\r\nPatuakhali'),
('Shahi Service', 'Shahi Service has the following regular routes from Dhaka: (Only Non-AC chair coach bus service is available)', '01973-399021', 'Saydabad (Dhaka)	', 'Dhaka -Chittagong - Cox''s Bazar - Sonapur - Laksam -  Maijdi -  Raipur'),
('Silk Line', 'Silk Line has the following regular routes from Dhaka: (Only AC-Volvo and Hino business class or economy class bus services are available)', '02-7102461, 01714-087563', '167/4, Circular Road, Arambagh, Dhaka', 'Dhaka-Chittagong-Dhaka<br>\r\nDhaka-Cox''s Bazar-Dhaka'),
('Green Line', 'Green Line has the following regular routes from Dhaka: All buses of Green Line are "Chair Coach with AC (Air Conditioned)".', '02-7192300 , 02-7191900', '9/2, Outer Circular Road (Mobinbag),\r\nRajarbag, Dhaka-1217.', 'Dhaka- Rangpur - Bogra - Rajshahi - Sylhet -   Chittagong - Cox''s Bazar - Khulna - Benapol -Kolkata'),
('S Alam Service', 'All buses of S Alam Service are "Chair Coach". But there is no AC (Air Conditioned) bus service. S Alam Service has the following regular routes from Dhaka.', '02-9002702,\r\n01813-329394', '', 'Dhaka- Cox''s Bazar - Bandarban - Kaptai - Rangamati - Chittagong - Rajshahi - Benapol - Calcutta'),
('Shyamoli Paribahan', 'Shyamoli Paribahan has routs to about 40 districts in Bangladesh from Dhaka. Moreover, Calcutta and Shiliguri routes are available in Shyamoli travels. All buses of Shymoli Travels are "Chair Coach". Both AC (Air Conditioned) and Non-AC bus services are available here.', '02-900331, 02-8034275', '12, South Kollyanpur, Mirpur Road, Dhaka.', 'Dhaka- Kolkata - Chittagong- Cox''s Bazar- Bogra -Jessore-Khulna- Jessore-Benapole- Rangpur - Bogra - Rajshahi - Sylhet'),
('Shohag Paribahan', '', '02-9331600', '2 Inner Circuler Road, Fakirapool', 'Shohagh Paribahan''s regular AC routes are as below: (AC Volvo)\r\n- Dhaka- Chittagong- Dhaka\r\n-Dhaka- Cox''s Bazar- Dhaka\r\n- Dhaka- Sylhet- Dhaka\r\n-Dhaka-Jessore-Khulna- Dhaka\r\n- Dhaka- Jessore- Benapole- Kolkata\r\nShohagh Paribahan''s regular Non-AC routes are as below:\r\n-Dhaka- Jessore- Khulna- Dhaka\r\n-Dhaka- Khulna- Bagerhat- Dhaka\r\n- Dhaka- Jessore- Benapole- Dhaka\r\n- Dhaka- Jessore- Shatkhira- Dhaka');

-- --------------------------------------------------------

--
-- Table structure for table `by water`
--

CREATE TABLE IF NOT EXISTS `by water` (
  `name12` varchar(100) NOT NULL,
  `address8` varchar(10000) NOT NULL,
  PRIMARY KEY (`name12`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `by water`
--

INSERT INTO `by water` (`name12`, `address8`) VALUES
('Bay Cruises', 'House # 13/1, Road # 12, Baridhara Diplomatic Zone</span><br>\r\n<span style="color: #000000;"> Dhaka – 1212, Bangladesh</span><br>\r\n<span style="color: #000000;"> Telephone: +880 2 8417547</span><br>\r\n<span style="color: #000000;"> Cell: 01776-284601</span>'),
('Bengal Tours', 'House # 45, Road # 27</span><br>\r\n<span style="color: #000000;"> Block # A, Banani, Dhaka – 1213.</span><br>\r\n<span style="color: #000000;"> Phone: +880-2-8820716</span><br>\r\n<span style="color: #000000;"> Mobile: +880-191-350828, +880-1711-533610</span><br>\r\n<span style="color: #000000;"> E-mail: bengal@agni.com</span>'),
('Keari Tours and Services Ltd.', 'KEAEI Plaza (5th Floor), 83 Shat Mashjid Road, 8/a Dhanmondi, Dhaka-1209</span><br>\r\n<span style="color: #000000;"> Phone: +880-2-8125881; +880-2-8125629-7</span><br>\r\n<span style="color: #000000;"> Fax: +88-2-9135459</span><br>\r\n<span style="color: #000000;"> Cell: 01817-048597;01814-658273,01817-148735</span><br>\r\n<span style="color: #000000;"> Web Site: www.kearitourism.com</span><br>\r\n<span style="color: #000000;"> Email: tourismkeari@yahoo.com</span>'),
('Reggae Entertainment & Tourism Ltd.', 'Corporate Office:&nbsp;House: B/157 (Gr. Floor)</span><br>\r\n<span style="color: #000000;"> Road: 22, Mohakhali DOHS, Dhaka-1206</span><br>\r\n<span style="color: #000000;"> Phone: 02 9856812-3</span><br>\r\n<span style="color: #000000;"> Mobile: 01713112255</span><br>\r\n<span style="color: #000000;"> Web: http://reggaetourism.com/flamingo/</span>'),
('Sundarban Tours', 'Email: info@sundarbantours.com</span>'),
('Tiger Tours', 'ROB Supermarket (5th Floor)</span><br>\r\n<span style="color: #000000;"> Gulshan 2, Room 605</span><br>\r\n<span style="color: #000000;"> Dhaka-1212, Bangladesh</span><br>\r\n<span style="color: #000000;"> Telephone: (8802) 8834 653, 4 GMT 03:30 hrs to GMT 11:00 hrs</span><br>\r\n<span style="color: #000000;"> Fax: (8802) 8834 837</span><br>\r\n<span style="color: #000000;"> Hotline: +8801841445500, +88018414555</span><br>\r\n<span style="color: #000000;"> Web: http://www.tigertoursbd.com/</span>');

-- --------------------------------------------------------

--
-- Table structure for table `domestic air`
--

CREATE TABLE IF NOT EXISTS `domestic air` (
  `name10` varchar(100) NOT NULL,
  `address6` varchar(10000) NOT NULL,
  PRIMARY KEY (`name10`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `domestic air`
--

INSERT INTO `domestic air` (`name10`, `address6`) VALUES
('Biman Bangladesh Airlines', '</b>Head Office</span><br>\r\n<span style="color: #000000;"> Biman Bangladesh Airlines LTD.</span><br>\r\n<span style="color: #000000;"> Head Office, Balaka</span><br>\r\n<span style="color: #000000;"> Kumitola, Dhaka-1229</span><br>\r\n<span style="color: #000000;"> Web: www.biman-airlines.com</span><br>\r\n<span style="color: #000000;"> Telephone:&nbsp;Head Office: +88-02-8901600, +88-02-8901730-44</span><br>\r\n<span style="color: #000000;"> Offices in Hangar Complex, Admin Building &amp; Terminal Building: +88-02-8901500-22, +88-02-8901640-54</span><br>\r\n<span style="color: #000000;"> District Sales Office, Dhaka : +88-02-9560151-9</span><br>\r\n<span style="color: #000000;"> Biman Loyalty Club: +88-09606 624 626</span><br>\r\n<span style="color: #000000;"> Fax: +88028901558</span><br>\r\n<span style="color: #000000;"> E-Mail:&nbsp;For Feedback on the website: gmpr@bdbiman.com</span><br>\r\n<span style="color: #000000;"> Web Related: anwar@bdbiman.com</span><br>\r\n<span style="color: #000000;"> For any customer inquires please contact: ibebiman@bdbiman.com</span><br>\r\n<span style="color: #000000;"> Travel Agents Registration: tapregistration@bdbiman.com</span><br>\r\n<span style="color: #000000;"> Travel Agents Support: tapsupport@bdbiman.com</span></p>'),
('Novo Air', '</b>Hotline: 13603</span><br>\r\n<span style="color: #000000;"> Phone: 0966672224, 029871891-2</span><br>\r\n<span style="color: #000000;"> Mobile: 01755656660-1</span><br>\r\n<span style="color: #000000;"> Fax: 029890684</span><br>\r\n<span style="color: #000000;"> Web: www.flynovoair.com</span></p>'),
('Regent Airways', '</b>Dhaka, Gulshan</span><br>\r\n<span style="color: #000000;"> SA Tower (Level-5), Plot#1, Road#134, Block SE(A), Gulshan-1, Dhaka 1212</span><br>\r\n<span style="color: #000000;"> Telephone: +880 2 8953003 or, 16238</span><br>\r\n<span style="color: #000000;"> Web: www.flyregent.com</span></p>'),
('United Airways', '</b>Hot line: 09606 445566</span><br>\r\n<span style="color: #000000;"> Fax: 880 2 8955959</span><br>\r\n<span style="color: #000000;"> E-mail: info@uabdl.com</span><br>\r\n<span style="color: #000000;"> Web: www.uabdl.com/</span></p>'),
('US-Bangla Airlines', '</b>77 Sohrawardi Avenue, Baridhara Diplomatic Zone,</span><br>\r\n<span style="color: #000000;"> Baridhara, Dhaka-1212</span><br>\r\n<span style="color: #000000;"> Telephone: (880 – 2) 8822610, 8822608, 9889232</span><br>\r\n<span style="color: #000000;"> Fax: (880 – 2) 9881086</span><br>\r\n<span style="color: #000000;"> Email: info@us-banglaairlines.com</span></p>\r\n<p><span style="color: #000000;">&nbsp;</span></p>');

-- --------------------------------------------------------

--
-- Table structure for table `fire service`
--

CREATE TABLE IF NOT EXISTS `fire service` (
  `name1` varchar(10000) NOT NULL,
  `telephone1` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fire service`
--

INSERT INTO `fire service` (`name1`, `telephone1`) VALUES
('Head Quarter', '9555555, 9556667'),
('Emergency', '199'),
('Sadarghat Fire Service ', '7119759'),
('Pastogola Fire Service', '7440771'),
('Lalbagh Fire Service', '8619981'),
('Khigaon Fire Service', '7218329'),
('Tejgaon Fire Service', '9898187'),
('Mohammedpur Fire Service ', '9112078'),
('Mirpur Fire Service   ', '9001055'),
('Kurmitola Fire Service', '8713399'),
('Tongi Fire Service    ', '9801070'),
('Palashi Fire Service  ', '8628688'),
('D.A.D. Narayangonj Fire Service  ', '9751111'),
('Demra Fire Service', '7500111'),
('Narayangonj Fire Service ', '9750035'),
('Narayangonj Port\r\n\r\nFire Service', '7661888'),
('Hazigonj Fire Service', '9750035');

-- --------------------------------------------------------

--
-- Table structure for table `five star`
--

CREATE TABLE IF NOT EXISTS `five star` (
  `location` varchar(100) CHARACTER SET utf8 NOT NULL,
  `name` varchar(100) CHARACTER SET utf8 NOT NULL,
  `address` varchar(1000) CHARACTER SET utf8 NOT NULL,
  `telephone` varchar(100) CHARACTER SET utf8 NOT NULL,
  `mail` varchar(100) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`telephone`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `five star`
--

INSERT INTO `five star` (`location`, `name`, `address`, `telephone`, `mail`) VALUES
('Airport Road,Dhaka', 'Radisson Water Garden Hotel, Dhaka', 'Airport Road, Dhaka Cantonment,\r\nDhaka 1206 Bangladesh.', '+ 88 02 8754555', 'reservations.dhaka@radisson.com\r\nWebsite : Radisson Water Garden Hotel'),
('Gulshan,Dhaka', 'The Westin hotel', 'Main Gulshan Avenue, Gulshan Ave, Dhaka 1212', '01755642202', '<a style="color: #000000;" href="mailto:munirul.kabir@westin.com">munirul.kabir@westin.com</a>'),
('Cox’s Bazar', 'Seagull Hotel Ltd', 'Hotel Motel Zone ,Cox’s Bazar Sea Beach,Cox’s Bazar', '01766666537\r\nPh 034164436', '<a style="color: #000000;" href="mailto:reservations@seagullhotelbd.com">reservations@seagullhotelbd'),
('Dhaka', 'Pan Pacific Sonargaon Hotel, Dhaka', '107 , Kazi Nazrul Islam Avenue', '880 2 811 1005', ''),
('Banani,\r\nDhaka', 'Hotel sarina', 'Plot#27, Road#17, Bir UttamAminul Haque Sarak,', '982112, 02-8851011', '<a style="color: #000000;" href="http://www.sarinahotel.com/">www.sarinahotel.com</a>'),
('Cox’s Bazar', 'Ocean Paradise Hotel and Resort', '28-29,Hotel Motel Zone,Kolatoli,Cox’s Bazar', 'Ph: 034152370', 'reservation@oceanparadisehotel.com');

-- --------------------------------------------------------

--
-- Table structure for table `foreign embassy`
--

CREATE TABLE IF NOT EXISTS `foreign embassy` (
  `name4` varchar(100) CHARACTER SET utf8 NOT NULL,
  `address2` varchar(10000) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`name4`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `foreign embassy`
--

INSERT INTO `foreign embassy` (`name4`, `address2`) VALUES
('Afghanistan', '<p><span style="color: #000000;">House No. CWN (C) – 2A, Road No. 24, Gulshan, Dhaka, Bangladesh</span></p>\r\n<p><span style="color: #000000;">Phone: (00) (880) (2) 9895994, Fax: (00) (880) (2) 9884767</span></p>\r\n<p><span style="color: #000000;">Email: afghanembassydhaka@yahoo.com</span></p>\r\n<p><span style="color: #000000;">&nbsp;</span></p>'),
('Australia', '<p><span style="color: #000000;">184 Gulshan Avenue, Gulshan-2, Dhaka, Bangladesh</span></p>\r\n<p><span style="color: #000000;">Phone: (+880 2) 881 3101-5,Fax: (+880 2) 881 1125</span></p>\r\n<p><span style="color: #000000;">Email: dima-dhaka@dfat.gov.au,</span></p>\r\n<p><span style="color: #000000;">Web Site: www.bangladesh.embassy.gov.au</span></p>\r\n<p><span style="color: #000000;">&nbsp;</span></p>'),
('Bhutan', '<p><span style="color: #000000;">House No.12 CEN, Road No.107,Gulshan, Dhaka 1212,Bangladesh</span></p>\r\n<p><span style="color: #000000;">Phone: 880-2-8826863/8827160,Fax: 880-2-8823939</span></p>\r\n<p><span style="color: #000000;">&nbsp;</span></p>'),
('Canada', '<p><span style="color: #000000;">House # 16A, Road # 48, Gulshan – 2, Dhaka</span></p>\r\n<p><span style="color: #000000;">Phone: 880 2 988 7091~7, Fax: 880 2 882 3043 and/or 880 2 882 6585</span></p>\r\n<p><span style="color: #000000;">Email: dhaka@international.gc.ca,</span></p>\r\n<p><span style="color: #000000;">Web: www.dfait-maeci.gc.ca/bangladesh</span></p>\r\n<p><span style="color: #000000;">&nbsp;</span></p>'),
('Embassy of China in Bangladesh', '<p><span style="color: #000000;">Plot 2&amp;4, Road No.3, Block-1, Baridara, Dhaka</span></p>\r\n<p><span style="color: #000000;">Phone: +8802-8824862 and/or 8824164,</span></p>\r\n<p><span style="color: #000000;">Fax: +8802-8823004</span></p>\r\n<p><span style="color: #000000;">&nbsp;</span></p>'),
('Germany', '<p><span style="color: #000000;">Embassy of the Federal Republic of Germany,</span></p>\r\n<p><span style="color: #000000;">178, Gulshan Avenue, Dhaka – 1212, Bangladesh</span></p>\r\n<p><span style="color: #000000;">Phone: 008802 – 885 35 21 – 24, Fax: 008802 – 885 35 28</span></p>\r\n<p><span style="color: #000000;">Email:aadhaka@optimaxbd.net,</span></p>\r\n<p><span style="color: #000000;">Web: http://www.dhaka.diplo.de/Vertretung/dhaka/en/Startseite.html</span></p>\r\n<p><span style="color: #000000;">&nbsp;</span></p>'),
('India', '<p><span style="color: #000000;">House No. 120, Road No. 2, Dhanmondi Residential Area, Dhaka</span></p>\r\n<p><span style="color: #000000;">Phone: + 880-2-865373, Fax: 880-2-863662.</span></p>\r\n<p><span style="color: #000000;">&nbsp;</span></p>'),
('Italy', '<p><span style="color: #000000;">Plot no. 2/3, Road 74/79, Gulshan, P.O. Box 6062, Dhaka-1212, Bangladesh</span></p>\r\n<p><span style="color: #000000;">Phone: 88 02 882 2781, Fax: 88 02 882 2578</span></p>\r\n<p><span style="color: #000000;">Email: ambdhaka@dominox.com</span></p>\r\n<p><span style="color: #000000;">&nbsp;</span></p>'),
('Japan', '<p><span style="color: #000000;">Plot No. 5 &amp; 7, Dutabash Road, Baridhara, Dhaka</span></p>\r\n<p><span style="color: #000000;">Phone: (880-2)8810087, Fax: (880-2)8826737, 9882700</span></p>\r\n<p><span style="color: #000000;">&nbsp;</span></p>'),
('Malaysia', '<p><span style="color: #000000;">House No. 19, Road No. 6, Baridhara,</span></p>\r\n<p><span style="color: #000000;">Dhaka – 1212, Bangladesh</span></p>\r\n<p><span style="color: #000000;">Phone: 88 02 8827759 or 88 02 8827759, Fax: 88 02 8827761 or 88 02 8823115</span></p>\r\n<p><span style="color: #000000;">Email: mwdhaka@citech-bd.com,</span></p>\r\n<p><span style="color: #000000;">Web: http://www.kln.gov.my/perwakilan/dhaka</span></p>\r\n<p><span style="color: #000000;">&nbsp;</span></p>'),
('Myanmar', '<p><span style="color: #000000;">No. 3 Block – Nel (l),Road No 84, Gulshan -2, Dhaka</span></p>\r\n<p><span style="color: #000000;">Phone: (88-02) 60 09 88,60 14 61, 60 19 15, 60 22 84,Fax: (88-02) 88 23 740.</span></p>\r\n<p><span style="color: #000000;">Email: mofa.aung@mptmail.net.mm</span></p>\r\n<p><span style="color: #000000;">&nbsp;</span></p>'),
('Nepal', '<p><span style="color: #000000;">United Nations Road, Road No. 2, Baridhara, Diplomatic Enclave, Dhaka, Bangladesh</span></p>\r\n<p><span style="color: #000000;">Phone: 880-2-601-790 / 601 890, 602 091, Fax: 880-2-882-6401</span></p>\r\n<p><span style="color: #000000;">Email: rnedhaka@bdbn.bd.net</span></p>\r\n<p><span style="color: #000000;">&nbsp;</span></p>'),
('Russia', '<p><span style="color: #000000;">House NE (J) 9, Road 79, Gulshan-2, Dhaka-1212</span></p>\r\n<p><span style="color: #000000;">Phone: (8802) 882-8142, Fax: (8802) 882-3735</span></p>\r\n<p><span style="color: #000000;">Email: rusemb@citech-bd.com,</span></p>\r\n<p><span style="color: #000000;">Web: http://www.rusdhaka.org/</span></p>\r\n<p><span style="color: #000000;">&nbsp;</span></p>'),
('Sri Lanka', '<p><span style="color: #000000;">House No. 15 (NW) Road No.50, Gulshan Model Town, Dhaka-1212, Bangladesh</span></p>\r\n<p><span style="color: #000000;">Phone: (+880) 2 8822790 or (+880) 2 8810779, Fax: (+880) 2 8823971</span></p>\r\n<p><span style="color: #000000;">&nbsp;</span></p>'),
('U.S.A', '<p><span style="color: #000000;">Madani Avenue, Baridhara, Dhaka</span></p>\r\n<p><span style="color: #000000;">Phone: (880) (2) 885-5500,Fax: (880) (2) 882-3744</span></p>\r\n<p><span style="color: #000000;">Web: http://dhaka.usembassy.gov/</span></p>'),
('United Kingdom', '<p><span style="color: #000000;">United Nations Road, Baridhara, Dhaka 1212</span></p>\r\n<p><span style="color: #000000;">Phone: (880) (2) 882 2705/ 2706/ 2707/ 2708/ 2709,</span></p>\r\n<p><span style="color: #000000;">Fax: (880) (2) 881 6135 / (880) (2) 882 3474</span></p>\r\n<p><span style="color: #000000;">Email: Dhaka.Consular@fco.gov.uk</span></p>\r\n<p><span style="color: #000000;">Web: http://www.britishhighcommission.gov.uk/Bangladesh</span></p>\r\n<p><span style="color: #000000;">&nbsp;</span></p>');

-- --------------------------------------------------------

--
-- Table structure for table `four star`
--

CREATE TABLE IF NOT EXISTS `four star` (
  `location1` varchar(100) NOT NULL,
  `name2` varchar(100) NOT NULL,
  `address2` varchar(1000) NOT NULL,
  `telephone1` varchar(100) NOT NULL,
  `mail1` varchar(100) NOT NULL,
  PRIMARY KEY (`telephone1`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `hospital`
--

CREATE TABLE IF NOT EXISTS `hospital` (
  `name2` varchar(10000) NOT NULL,
  `address` varchar(10000) NOT NULL,
  `city` varchar(10000) NOT NULL,
  `telephone2` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hospital`
--

INSERT INTO `hospital` (`name2`, `address`, `city`, `telephone2`) VALUES
('Dhaka Medical College Hospital', '', '', '8626812-26, 8626818-25'),
('PG Hospital (BSMMU)', 'Shahabagh,', 'Dhaka. ', '8612550, 8614545-9, 9661900-59'),
('Sir Salimullah Medical College Hospital', 'Midford,', 'Dhaka', ' 7310061-4, 7319002-6'),
('Holy Family Hospital', 'Eskaton Garden,', 'Dhaka.', ' 8311721-25, 8321721-24'),
('Shishu Hashpatal', '(Child Hospital) Shre-E-Bangla Nagar, Agargaon,', 'Dhaka.', '<br>9119119, 8116061-2'),
('BIRDEM (Diabetic Hospital)', 'Shahabagh,', 'Dhaka.', '9661551-60,8616641-50'),
('Lion eye Hospital', '', '', '9112927'),
('Orthopadic Hospital\r\n\r\n', '', '', '91 14075, 91 12150'),
('Shahid Suhrawardy Hospital', '', '', ' 9122560-78, 9130800\r\n\r\n '),
('Tahirunnesa Memorial Medical Center', '', '', ' 9801874,9803302\r\n\r\n '),
('National Heart Foundation Hospital', 'Mirpur,', 'Dhaka.', '8014914'),
('Ahsania Mission Cancer & General Hospital', 'Plot M-1/C, Mirpur 14,', 'Dhaka.', '(880-2) 9008919, 8051618, Fax: 8113010,8118522');

-- --------------------------------------------------------

--
-- Table structure for table `intercity train`
--

CREATE TABLE IF NOT EXISTS `intercity train` (
  `no` int(11) NOT NULL,
  `name13` varchar(100) NOT NULL,
  `offday` varchar(100) NOT NULL,
  `from` varchar(100) NOT NULL,
  `departure` varchar(100) NOT NULL,
  `to` varchar(100) NOT NULL,
  `arrival` varchar(100) NOT NULL,
  PRIMARY KEY (`no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `intercity train`
--

INSERT INTO `intercity train` (`no`, `name13`, `offday`, `from`, `departure`, `to`, `arrival`) VALUES
(701, 'Subarna express', 'Friday', 'Chittagong', '07:00', 'Dhaka', '12:45'),
(702, 'Subarna express', 'Friday', 'Dhaka', '15:20', 'Chittagong', '21:35'),
(703, 'Mahanagar godhuli	', 'No', 'Chittagong', '15:00	', 'Dhaka', '21:30'),
(704, 'Mahanagar Provati	', 'No', 'Dhaka', '07:40', 'Chittagong', '14:45'),
(705, 'Ekota express', 'Tuesday', 'Dhaka', '09:50', 'Dinajpur', '19:10'),
(706, 'Ekota express', 'Monday', 'Dinajpur', '21:50', 'Dhaka', '07:40'),
(707, 'Tista express', 'Monday', 'Dhaka', '07:20', 'Dawngonge Bazar', '13:00'),
(708, 'Tista express', 'Monday', 'Dawngonge Bazar', '14:40', 'Dhaka', '20:10'),
(709, 'Parabat express	', 'Tuesday', 'Dhaka', '06:40', 'Sylhet', '13:20'),
(710, 'Parabat express', 'Tuesday	', 'Sylhet', '15:00', 'Dhaka', '21:50'),
(717, 'Joyantika express', 'No', 'Dhaka', '12:00', 'Sylhet', '19:25'),
(718, 'Joyantika express', 'Thrusday', 'Sylhet', '08:20', 'Dhaka', '15:40'),
(719, 'Paharika express', 'Monday', 'Sylhet', '10:15', 'Chittgong', '19:35'),
(720, 'Paharika express', 'Saturday', 'Sylhet', '10:15', 'Chittgong', '19:35');

-- --------------------------------------------------------

--
-- Table structure for table `international flight`
--

CREATE TABLE IF NOT EXISTS `international flight` (
  `name11` varchar(100) NOT NULL,
  `address7` varchar(10000) NOT NULL,
  PRIMARY KEY (`name11`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `international flight`
--

INSERT INTO `international flight` (`name11`, `address7`) VALUES
('<h3>International Flights</h3>', ''),
('Aeroflot (Russian Airlines)', 'GSA- Borak Travels (Pvt.) Ltd.</span><br>\r\n<span style="color: #000000;"> 12, Dilkusha C/A, Dhaka, Phone : 9559930, 9559111</span><br>\r\n<span style="color: #000000;"> Fax: 9563787, Email: borak@intechworld.ne</span></p>'),
('Air Asia', '<p><span style="color: #000000;">GSA:Sole Agent for Bangladesh Skybangla Aviation Limited.</span><br>\r\n<span style="color: #000000;">Suite # 6C (6th Floor), Sonartori Tower ,12, Sonargaon Road, Dhaka – 1000.</span><br>\r\n<span style="color: #000000;">Tel:+880-2-8651270-1, 9675624,Fax :+880-2-9675624</span><br>\r\n<span style="color: #000000;">E-mail :motin@skybangla.com</span><br>\r\n<span style="color: #000000;">Web: http://www.airasia.com/ot/en/home.page</span></p>'),
('Air India', 'Hotel Purbani International,</span><br>\r\n<span style="color: #000000;"> Annex Building 2,</span><br>\r\n<span style="color: #000000;"> 1 Dilkusha C/A, Dhaka ,</span><br>\r\n<span style="color: #000000;"> Tel: 9571000, 9570200 Fax: 9571283 Email: aidhaka@bijoy.net</span></p>'),
('Biman Bangladesh Airlines', 'Biman Bangladesh Airlines, the national flag carrier airline of Bangladesh, provides international passenger and cargo services to Asia and Europe, as well as major domestic routes inside Bangladesh. It has air service agreements with 42 countries and currently flies to 16 different countries.</span></p>\r\n<p><span style="color: #000000;">Head Office</span><br>\r\n<span style="color: #000000;"> Biman Bangladesh Airlines LTD.</span><br>\r\n<span style="color: #000000;"> Head Office, Balaka</span><br>\r\n<span style="color: #000000;"> Kumitola, Dhaka-1229</span><br>\r\n<span style="color: #000000;"> Web: www.biman-airlines.com</span><br>\r\n<span style="color: #000000;"> Telephone:&nbsp;Head Office: +88-02-8901600, +88-02-8901730-44</span><br>\r\n<span style="color: #000000;"> Offices in Hangar Complex, Admin Building &amp; Terminal Building: +88-02-8901500-22, +88-02-8901640-54</span><br>\r\n<span style="color: #000000;"> District Sales Office, Dhaka : +88-02-9560151-9</span><br>\r\n<span style="color: #000000;"> Biman Loyalty Club: +88-09606 624 626</span><br>\r\n<span style="color: #000000;"> Fax: +88028901558</span><br>\r\n<span style="color: #000000;"> E-Mail:&nbsp;For Feedback on the website: gmpr@bdbiman.com</span><br>\r\n<span style="color: #000000;"> Web Related: anwar@bdbiman.com</span><br>\r\n<span style="color: #000000;"> For any customer inquires please contact: ibebiman@bdbiman.com</span><br>\r\n<span style="color: #000000;"> Travel Agents Registration: tapregistration@bdbiman.com</span><br>\r\n<span style="color: #000000;"> Travel Agents Support: tapsupport@bdbiman.com</span></p>'),
('British Airways', 'Uday Tower (8th Floor), Plot-57,</span><br>\r\n<span style="color: #000000;"> Gulshan Avenue (South) Gulshan-1, Dhaka-1212,</span><br>\r\n<span style="color: #000000;"> Tel: 8815111, Fax : 8815346</span><br>\r\n<span style="color: #000000;"> Airport Office : 8914410, 8912467,</span><br>\r\n<span style="color: #000000;"> Fax : 8913537</span></p>'),
('China Airlines', 'GSA- Air Trip Ltd</span><br>\r\n<span style="color: #000000;"> 67 Naya Paltan (5th Floor), Dhaka ,</span><br>\r\n<span style="color: #000000;"> Tel: 9342496</span><br>\r\n<span style="color: #000000;"> Fax: 8316257,</span><br>\r\n<span style="color: #000000;"> Email: hk@intechworld.net</span></p>'),
('Myanmar Airlines', 'PSA : MARS Aviation Limited</span><br>\r\n<span style="color: #000000;"> 12-14 Gulshan North C/A, Landmark (7th Flr.)</span><br>\r\n<span style="color: #000000;"> Dhaka , Tel : 8824348, 8813059,</span><br>\r\n<span style="color: #000000;"> Fax : 8810557</span><br>\r\n<span style="color: #000000;"> Email : mars1@accesstel.net</span></p>'),
('Saudi Arabian Airlines', 'Pan Pacific Sonargaon Hotel</span><br>\r\n<span style="color: #000000;"> 107, Kazi Nazrul Islam Avenue ,</span><br>\r\n<span style="color: #000000;"> Kawran Bazar, Dhaka</span><br>\r\n<span style="color: #000000;"> Tel: 8116856, 8116830, 8116857, 9143326, 9333481</span><br>\r\n<span style="color: #000000;"> Airport Office : 8914341, Fax: 8113145</span><br>\r\n<span style="color: #000000;"> Email: SVSLSD@dhaka.bangla.net</span></p>'),
('United Airlines', 'GSA- United Link Ltd</span><br>\r\n<span style="color: #000000;"> Taj Marriot (5th Floor),</span><br>\r\n<span style="color: #000000;"> 25 Gulshan Avenue ,</span><br>\r\n<span style="color: #000000;"> Gulshan-1 Dhaka-1212,</span><br>\r\n<span style="color: #000000;"> Tel: 9880054, 9880059,</span><br>\r\n<span style="color: #000000;"> Fax: 8853035</span><br>\r\n<span style="color: #000000;"> Email: reservation@unitedlinkbd.com</span></p>');

-- --------------------------------------------------------

--
-- Table structure for table `money_exchange_points`
--

CREATE TABLE IF NOT EXISTS `money_exchange_points` (
  `name5` varchar(100) CHARACTER SET utf8 NOT NULL,
  `address3` varchar(10000) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`name5`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `money_exchange_points`
--

INSERT INTO `money_exchange_points` (`name5`, `address3`) VALUES
('A J Money Changers Ltd.', '<p><span style="color: #000000;">BCIC Sadan (2nd floor), 22 Motijheel C/A</span></p>\r\n<p><span style="color: #000000;">Dhaka-1000</span></p>\r\n<p><span style="color: #000000;">Telephone: +880-2-7168947</span></p>\r\n<p>&nbsp;</p>'),
('A.R. Money Exchanger', '<p><span style="color: #000000;">887 Sadarghat Road, N.J Bearing Market</span></p>\r\n<p><span style="color: #000000;">Chittagong</span></p>\r\n<p><span style="color: #000000;">Telephone: +880-31-633795</span></p>\r\n'),
('An International Ltd.\r\n\r\n', '<p><span style="color: #000000;">Prachi-Niket (5th Floor) 54 Dilkusha C/A, Motijheel</span></p>\r\n<p><span style="color: #000000;">Dhaka-1000</span></p>\r\n<p><span style="color: #000000;">Telephone: +880-2-7172866</span></p>\r\n<p>&nbsp;</p>'),
('ASN Money Changer', '<p><span style="color: #000000;">60, Dilkusha C/A, (Ground floor)</span></p>\r\n<p><span style="color: #000000;">Dhaka- 1000</span></p>\r\n<p><span style="color: #000000;">Telephone: +880-2-9561480</span></p>\r\n<p><span style="color: #000000;">Fax: +880-2-9568438</span></p>\r\n<p>&nbsp;</p>'),
('Avia Money Changer', '<p><span style="color: #000000;"><b>Avia Money Changer</b></span></p>\r\n<p><span style="color: #000000;">51, Motijheel, Dhaka-1000</span></p>\r\n<p><span style="color: #000000;">Telephone: +880-2-9560852, 9560862</span></p>\r\n<p><span style="color: #000000;">Fax: +880-2-9565039</span></p>\r\n<p>&nbsp;</p>'),
('Bismillah Money Changer', '<p><span style="color: #000000;">55, Dilkusha Ba/A (Ground Floor), Motijheel</span></p>\r\n<p><span style="color: #000000;">Dhaka -1000</span></p>\r\n<p><span style="color: #000000;">Telephone: +880-2-9555393</span></p>\r\n<p>&nbsp;</p>'),
('Bushra Money Exchange Ltd.', '<p><span style="color: #000000;">Shop # 202, Road # 30, Rob Super Market, Gulshan, Circle-2</span></p>\r\n<p><span style="color: #000000;">Dhaka-1212</span></p>\r\n<p><span style="color: #000000;">Telephone: +880-2-8824599</span></p>\r\n<p>&nbsp;</p>'),
('Eastern Union Money Changing', '<p><span style="color: #000000;">56, Puranapaltan, (Ground floor)</span></p>\r\n<p><span style="color: #000000;">Dhaka-1000</span></p>\r\n<p><span style="color: #000000;">Telephone: +88-01552-921266</span></p>\r\n<p>&nbsp;</p>'),
('Mitali Money Exchange', '<p><span style="color: #000000;">51, Motijheel C/A, (2nd Floor)</span></p>\r\n<p><span style="color: #000000;">Dhaka-1000</span></p>\r\n<p><span style="color: #000000;">Telephone: +880-2-9554933, 9569434</span></p>\r\n<p><span style="color: #000000;">Fax: +880-2-9565134</span></p>\r\n<p>&nbsp;</p>'),
('Omni Bukeau De Change', '<p><span style="color: #000000;">Dhaka Sheraton Hotel, 1 Minto Road</span></p>\r\n<p><span style="color: #000000;">Dhaka-1000</span></p>\r\n<p><span style="color: #000000;">Telephone: +880-2-8618892, 8617546</span></p>\r\n<p><span style="color: #000000;">Fax: +880-2-8128892</span></p>\r\n<p>&nbsp;</p>'),
('Square Money Changer', '<p><span style="color: #000000;">Kabir Court, (2nd Floor), 69, Dilkusha C/A</span></p>\r\n<p><span style="color: #000000;">Dhaka-1000</span></p>\r\n<p><span style="color: #000000;">Telephone: +880-2-9551040</span></p>\r\n<p>&nbsp;</p>'),
('Todays International Money Exchange Ltd.', '<p><span style="color: #000000;">64 Dilkusha C/A</span></p>\r\n<p><span style="color: #000000;">Dhaka-1000</span></p>\r\n<p><span style="color: #000000;">Telephone: +880-2-9559024, 01711-594765, 01713-0106</span></p>');

-- --------------------------------------------------------

--
-- Table structure for table `police station`
--

CREATE TABLE IF NOT EXISTS `police station` (
  `name` varchar(1000) NOT NULL,
  `telephone` varchar(100) NOT NULL,
  FULLTEXT KEY `name` (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `police station`
--

INSERT INTO `police station` (`name`, `telephone`) VALUES
('<p><span style="color: #000000;"><b>Dhaka Metropoliton Police (DMP)</b></span></p>', ''),
('<p><span style="color: #000000;">Emergency Telephone: ', '999</span></p>'),
('<p><span style="color: #000000;">Control Room Telephone:', '8616552-7, 8616551-3, 8914664</span></p>'),
('<p><span style="color: #000000;">DC, DB (Detective Branch) Telephone:', '9337362</span></p>'),
('<p><span style="color: #000000;">Head Quarter Telephone:', '9667336</span></p>\r\n<p>&nbsp;</p>'),
('<p><span style="color: #000000;">Badda Thana (PS)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Tel:', '9882652</span></p>'),
('<p><span style="color: #000000;">Cantonment Thana (PS)&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Tel:', '8829267</span></p>'),
('<p><span style="color: #000000;">Demra Thana (PS)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Tel:', '7S 16244</span></p>'),
('<p><span style="color: #000000;">Dhanmondi Thana (PS)&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Tel:', '8631942</span></p>'),
('<p><span style="color: #000000;">Gulshan Thana (PS)&nbsp;&nbsp;&nbsp;&nbsp;  :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Tel:', '9880234</span></p>'),
('<p><span style="color: #000000;">Hajari bag Thana (PS)&nbsp;  :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Tel:', '9669900</span></p>'),
('<p><span style="color: #000000;">Kafrul Thana (PS)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Tel:', '9871771</span></p>'),
('<p><span style="color: #000000;">Kamrangirchar Thana (PS):&nbsp;&nbsp;&nbsp;      &nbsp; Tel:', '7320323</span></p>'),
('<p><span style="color: #000000;">Kotwali Thana (PS)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Tel:', '71 16255</span></p>'),
('<p><span style="color: #000000;">Khilgaon Thana (PS)&nbsp;&nbsp;&nbsp;  :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Tel:', '7219090</span></p>'),
('<p><span style="color: #000000;">Lalbagh Thana (PS)&nbsp;&nbsp;&nbsp;&nbsp;  :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Tel:', ' 7316300</span></p>'),
('<p><span style="color: #000000;">Mohammadpur Thana (PS)  :&nbsp;&nbsp;&nbsp;        Tel:', '91 19960</span></p>'),
('<p><span style="color: #000000;">Motijheel Thana (PS)&nbsp;&nbsp;  :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Tel:', '8323008</span></p>'),
('<p><span style="color: #000000;">Pallabi Thana (PS)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Tel:', '8015 122</span></p>'),
('<p><span style="color: #000000;">Ramna Thana (PS)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Tel:', '9350468</span></p>'),
('<p><span style="color: #000000;">Shabujbag Thana (PS)&nbsp;   :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Tel:', '7219988</span></p>'),
('<p><span style="color: #000000;">Shutrapur Thana (PS)&nbsp;&nbsp;  :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Tel:', '7116233</span></p>'),
('<p><span style="color: #000000;">Shyampur Thana (PS)&nbsp;    :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Tel: ', '7410691</span></p>'),
('<p><span style="color: #000000;">Tejgaon Thana (PS)&nbsp;&nbsp;&nbsp;&nbsp;  :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Tel:', '9119444</span></p>'),
('<p><span style="color: #000000;">Uttara Thana (PS)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Tel:', '8931888</span></p>'),
('<p><span style="color: #000000;">Adabor Thana (PS)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Tel:', '9133265</span></p>'),
('<p><span style="color: #000000;">Airport Thana (PS)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Tel:', '8919364</span></p>'),
('<p><span style="color: #000000;">Dakhin Khan Thana (PS)  :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;    Tel:', '8931777</span></p>'),
('<p><span style="color: #000000;">Jatrabari Thana (PS)&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Tel: ', '7546244</span></p>'),
('<p><span style="color: #000000;">Kerani Ganj Thana (PS)&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Tel:', '7772300</span></p>'),
('<p><span style="color: #000000;">Khilkhet Thana (PS)&nbsp;&nbsp;&nbsp;  :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Tel: ', '8919364</span></p>'),
('<p><span style="color: #000000;">Mirpur Thana (PS)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Tel:', '9001001</span></p>'),
('<p><span style="color: #000000;">New Market Thana (PS)&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Tel:', '8631942</span></p>'),
('<p><span style="color: #000000;">Palton Thana (PS)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Tel:', '9360802</span></p>'),
('<p><span style="color: #000000;">Shahbagh Thana (PS)&nbsp;&nbsp;   :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Tel:', '9676666</span></p>'),
('<p><span style="color: #000000;">Shah Ali Thana (PS)&nbsp;&nbsp;&nbsp;  :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Tel:', '8060555</span></p>'),
('<p><span style="color: #000000;">Turag Thana (PS)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Tel: ', '8914664</span></p>'),
('<p><span style="color: #000000;">Bangshal Thana (PS)&nbsp;&nbsp;&nbsp;  :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Tel:', '9565700</span></p>'),
('<p><span style="color: #000000;">Gandaria Thana (PS)&nbsp;&nbsp;&nbsp;  :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Tel: ', '7453294</span></p>');

-- --------------------------------------------------------

--
-- Table structure for table `research & study`
--

CREATE TABLE IF NOT EXISTS `research & study` (
  `name6` varchar(100) CHARACTER SET utf8 NOT NULL,
  `address4` varchar(10000) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`name6`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `research & study`
--

INSERT INTO `research & study` (`name6`, `address4`) VALUES
('Bangabandhu Sheikh Mujib Medical University', '<p><span style="color: #000000;">Dhaka, Bangladesh</span></p>\r\n<p><span style="color: #000000;">Phone: 02-8624817</span></p>\r\n<p><span style="color: #000000;">&nbsp;</span></p>'),
('Bangabandhu Sheikh Mujibur Rahman Agricultural University', '<p><span style="color: #000000;">Gazipur, Dhaka, Bangaldesh</span></p>\r\n<p><span style="color: #000000;">Phone: 02-9205310-14</span></p>\r\n<p><span style="color: #000000;">&nbsp;</span></p>'),
('Bangabandhu Sheikh Mujibur Rahman Science & Technology University', '<p><span style="color: #000000;">Gopalganj, Bangladesh</span></p>\r\n<p><span style="color: #000000;">Phone: 02-6682257, 01750154446</span></p>\r\n<p><span style="color: #000000;">&nbsp;</span></p>'),
('Bangladesh Agricultural University', '<p><span style="color: #000000;">Mymensingh, Bangladesh</span></p>\r\n<p><span style="color: #000000;">Phone: 091-67401-06</span></p>\r\n<p><span style="color: #000000;">&nbsp;</span></p>'),
('Bangladesh Open University', '<p><span style="color: #000000;">Gazipur, Bangladesh</span></p>\r\n<p><span style="color: #000000;">Phone: 02-9291112</span></p>\r\n<p><span style="color: #000000;">&nbsp;</span></p>'),
('Bangladesh University of Engineering and Technology', '<p><span style="color: #000000;">Dhaka, Bangladesh</span></p>\r\n<p><span style="color: #000000;">Phone: 02-9665650-80, 8616833-38, 8614640-44, 8618344-49</span></p>\r\n'),
('Bangladesh University of Textiles', '<p><span style="color: #000000;">Dhaka, Bangladesh</span></p>\r\n<p><span style="color: #000000;">Phone: 02-9114260, 9123819</span></p>\r\n<p><span style="color: #000000;">&nbsp;</span></p>'),
('Begum Rokeya University', '<p><span style="color: #000000;">Rangpur, Bangladesh</span></p>\r\n<p><span style="color: #000000;">Phone: 0521-66731</span></p>\r\n<p><span style="color: #000000;">&nbsp;</span></p>'),
('Chittagong University of Engineering and Technology', '<p><span style="color: #000000;">Chittagong, Bangladesh</span></p>\r\n<p><span style="color: #000000;">Phone: 031-714946, 31-714911</span></p>\r\n<p><span style="color: #000000;">&nbsp;</span></p>'),
('Chittagong Veterinary & Animal Science University', '<p><span style="color: #000000;">Chittagong Bangladesh</span></p>\r\n<p><span style="color: #000000;">Phone: 031-659492-3, 659093</span></p>\r\n<p><span style="color: #000000;">&nbsp;</span></p>'),
('Comilla University', '<p><span style="color: #000000;">Comilla, Bangladesh</span></p>\r\n<p><span style="color: #000000;">Phone: 01556-980998, 0155-6426446</span></p>\r\n<p><span style="color: #000000;">&nbsp;</span></p>'),
('Dhaka University', '<p><span style="color: #000000;">Dhaka, Bangladesh</span></p>\r\n<p><span style="color: #000000;">Phone: 02-9661900-19, 02-9661920-59</span></p>\r\n<p><span style="color: #000000;">&nbsp;</span></p>'),
('Dhaka University of Engineering and Technology', '<p><span style="color: #000000;">Gazipur, Bangladesh</span></p>\r\n<p><span style="color: #000000;">Phone: 02-9204734-43</span></p>\r\n<p><span style="color: #000000;">&nbsp;</span></p>'),
('Hajee Mohammad Danesh Science and Technology University', '<p><span style="color: #000000;">Dinajpur, Bangaldesh</span></p>\r\n<p><span style="color: #000000;">Phone: 0531-65429, 65429, 61355</span></p>\r\n<p><span style="color: #000000;">&nbsp;</span></p>'),
('Islamic University', '<p><span style="color: #000000;">Kushtia, Bangaldesh</span></p>\r\n<p><span style="color: #000000;">Phone; 071-53465, 62005-06, 62008</span></p>\r\n<p><span style="color: #000000;">&nbsp;</span></p>'),
('Jagannath University', '<p><span style="color: #000000;">Dhaka, Bangladesh</span></p>\r\n<p><span style="color: #000000;">Phone: 02-7119731</span></p>\r\n<p><span style="color: #000000;">&nbsp;</span></p>'),
('Jahangirnagar University', '<p><span style="color: #000000;">Savar, Dhaka, Bangladesh</span></p>\r\n<p><span style="color: #000000;">Phone: 02-7791045-51</span></p>\r\n<p><span style="color: #000000;">&nbsp;</span></p>'),
('Jatiya Kabi Kazi Nazrul Islam University', '<p><span style="color: #000000;">Mymensingh, Bangladesh</span></p>\r\n<p><span style="color: #000000;">Phone: 09032-56270</span></p>\r\n<p><span style="color: #000000;">&nbsp;</span></p>'),
('Jessore University of Science and Technology', '<p><span style="color: #000000;">Jessore, Bangladesh</span></p>\r\n<p><span style="color: #000000;">Phone: 0421-62030 Ext. 104</span></p>\r\n<p><span style="color: #000000;">&nbsp;</span></p>'),
('Khulna University', '<p><span style="color: #000000;">Khulna, Bangladesh</span></p>\r\n<p><span style="color: #000000;">Phone: 041-721791, 041-720171-3</span></p>\r\n<p><span style="color: #000000;">&nbsp;</span></p>'),
('Khulna University of Engineering and Technology', '<p><span style="color: #000000;">Khulna, Bangladesh</span></p>\r\n<p><span style="color: #000000;">Phone: 041-774584, 774780, 774318, 774782, 774900</span></p>\r\n<p><span style="color: #000000;">&nbsp;</span></p>'),
('Mawlana Bhashani Science And Technology University', '<p><span style="color: #000000;">Tangail, Bangladesh</span></p>\r\n<p><span style="color: #000000;">Phone: 0921-61616, 62401, 01711428165</span></p>\r\n<p><span style="color: #000000;">&nbsp;</span></p>'),
('National University', '<p><span style="color: #000000;">Gazipur, Bangladesh</span></p>\r\n<p><span style="color: #000000;">Phone: 9291018-9, 9291020-3, 9291055</span></p>\r\n<p><span style="color: #000000;">&nbsp;</span></p>'),
('Noakhali Science and Technology University', '<p><span style="color: #000000;">Noakhali, Bangladesh</span></p>\r\n<p><span style="color: #000000;">Phone: 0321-71486</span></p>\r\n<p><span style="color: #000000;">&nbsp;</span></p>'),
('Pabna University of Science & Technology', '<p><span style="color: #000000;">Pabna, Bangladesh</span></p>\r\n<p><span style="color: #000000;">Phone: 0731-65790</span></p>\r\n<p><span style="color: #000000;">&nbsp;</span></p>'),
('Patuakhali Science and Technology University', '<p><span style="color: #000000;">Patuakhali, Bangladesh</span></p>\r\n<p><span style="color: #000000;">Phone: 04427-56011, 04427-56014</span></p>\r\n<p><span style="color: #000000;">&nbsp;</span></p>'),
('Rajshahi University', '<p><span style="color: #000000;">Rajshahi, Bangladesh</span></p>\r\n<p><span style="color: #000000;">Phone: 0721-750041-9, 751508</span></p>\r\n<p><span style="color: #000000;">&nbsp;</span></p>'),
('Rajshahi University of Engineering and Technology', '<p><span style="color: #000000;">Rajshahi, Bangladesh</span></p>\r\n<p><span style="color: #000000;">Phone: 0721-750798, 750256</span></p>\r\n<p><span style="color: #000000;">&nbsp;</span></p>'),
('Shahjalal University of Science and Technology', '<p><span style="color: #000000;">Sylhet, Bangladesh</span></p>\r\n<p><span style="color: #000000;">Phone: 0821-713491, 714479, 713850, 717850, 716123</span></p>\r\n<p><span style="color: #000000;">&nbsp;</span></p>'),
('Sher-E-Bangla Agricultural University', '<p><span style="color: #000000;">Dhaka, Bangladesh</span></p>\r\n<p><span style="color: #000000;">Phone: 9144270-9</span></p>\r\n<p><span style="color: #000000;">&nbsp;</span></p>'),
('Sylhet Agricultural University', '<p><span style="color: #000000;">Sylhet, Bangladesh</span></p>\r\n<p><span style="color: #000000;">Phone: 0821-760930</span></p>\r\n<p><span style="color: #000000;">&nbsp;</span></p>'),
('University of Barisal', '<p><span style="color: #000000;">Barisal, Dhaka</span></p>\r\n<p><span style="color: #000000;">Phone: 0431-217743</span></p>\r\n<p><span style="color: #000000;">&nbsp;</span></p>'),
('University of Chittagong', '<p><span style="color: #000000;">Chittagong, Bangladesh</span></p>\r\n<p><span style="color: #000000;">Phone: 031-716552</span></p>\r\n<p><span style="color: #000000;"><b>&nbsp;</b></span></p>');

-- --------------------------------------------------------

--
-- Table structure for table `resort`
--

CREATE TABLE IF NOT EXISTS `resort` (
  `name3` varchar(1000) CHARACTER SET utf8 NOT NULL,
  `address1` varchar(10000) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `resort`
--

INSERT INTO `resort` (`name3`, `address1`) VALUES
('Nazimgarh Resorts Ltd.', '<span style="color: #000000;"> Nazimgarh, Khadimnagar</span><br>\r\n<span style="color: #000000;"> P.S. Kotwali, District : Sylhet</span><br>\r\n<span style="color: #000000;"> Phones : (+880-821) 2870338, 2870339</span><br>\r\n<span style="color: #000000;"> Mobile : (+880-1926) 667444, 01747 200100</span><br>\r\n<span style="color: #000000;"> Manager Reservation : (+880-1916) 271935</span><br>\r\n<span style="color: #000000;"> E-mail : info@nazimgarh.com,reservation@nazimgarh.com</span><br>\r\n<span style="color: #000000;"> Web: www.nazimgarh.com</span><br>\r\n<span style="color: #000000;"> Dhaka Booking Office :</span><br>\r\n<span style="color: #000000;"> 110, Tejgaon Industrial Area (2nd Floor)</span><br>\r\n<span style="color: #000000;"> Tejgaon, Dhaka – 1208.</span><br>\r\n<span style="color: #000000;"> Phone: (+880-2) 8870579</span><br>\r\n<span style="color: #000000;"> Sales &amp; Marketing : +880-1730-712600</span><br>\r\n<span style="color: #000000;"> Reservation : +880-1729-097849</span></p>'),
('Panigram Resort', '<span style="color: #000000;"> Jessore District (just 70 km north of the famous Sundarban Forest)</span><br>\r\n<span style="color: #000000;"> Southern Bangladesh</span><br>\r\n<span style="color: #000000;"> info@panigram.com</span><br>\r\n<span style="color: #000000;"> <a style="color: #000000;" href="http://www.panigram.com/">www.panigram.com</a></span></p>'),
('Mermaid Eco Resort', '</b>Mermaid Beach, Pechar Dwip,</span><br>\r\n<span style="color: #000000;"> Cox’s Bazar</span><br>\r\n<span style="color: #000000;"> Phone: +880 01841416464-9</span></p>'),
('Jamuna Resort', '</b>Tel:88 02 8142971-3Mobile: +88 017 777 40406, +88 017 777 40407, +88 017 777 40408, +88 017 777 40409,</span><br>\r\n<span style="color: #000000;"> Fax:88 02 9141391</span><br>\r\n<span style="color: #000000;"> Email:info@jamunaresortbd.com</span><br>\r\n<span style="color: #000000;"> Address: Corporate Office: Pragati Insurance Bhaban (7th floor) 20-21, Kawran Bazar, Dhaka 1215, BangladeshResort:0923-476032 – 4</span></p>'),
('Dusai Resort and Spa', '<span style="color: #000000;"> Srimangal Road</span><br>\r\n<span style="color: #000000;"> Niteshwar, Giashnagar</span><br>\r\n<span style="color: #000000;"> Sadar Sub-District</span><br>\r\n<span style="color: #000000;"> Moulvi Bazar, Bangladesh.</span><br>\r\n<span style="color: #000000;"> Telephone: +880 861 64100</span><br>\r\n<span style="color: #000000;"> Hotline: +880 1617005515</span><br>\r\n<span style="color: #000000;"> E-mail: <a style="color: #000000;" href="mailto:rsvn@dusairesorts.com">rsvn@dusairesorts.com</a></span></p>'),
('Pakshi Resort Spot', 'Khan Monzil</span><br>\r\n<span style="color: #000000;"> Pakshi, Ishuardi, Pabna,&nbsp;Bangladesh.</span><br>\r\n<span style="color: #000000;"> Head Office:&nbsp;House # 99/A, Road # 06, Banani DOHS, Banani,&nbsp;Dhaka-1206. Bangladesh</span><br>\r\n<span style="color: #000000;"> Tel: 88-02-9833875, 8872005</span><br>\r\n<span style="color: #000000;"> Fax: 88-02-9833869</span><br>\r\n<span style="color: #000000;"> Hotline: 01730706253</span><br>\r\n<span style="color: #000000;"> Email:pakshiresortltd@yahoo.com</span><br>\r\n<span style="color: #000000;"> Resort Office:&nbsp;Sport: Khan Monzil, Pakshi, Ishurdi, Pabna</span><br>\r\n<span style="color: #000000;"> Tel: 0732 663 660, Cell: 01730706258,</span><br>\r\n<span style="color: #000000;"> Email:info@pakshiresort.net</span></p>'),
('Foys Lake', 'Chittagong</span><br>\r\n<span style="color: #000000;"> Telephone:031-2566080</span><br>\r\n<span style="color: #000000;"> Fax:031-659406</span><br>\r\n<span style="color: #000000;"> Cell: 01913531554-5, 01913531480, 01913531483</span></p>'),
('Zastat Holiday Resort', '<span style="color: #000000;"> Zakariya City, Khadimnagar, Sylhet-3103, Bangladesh.</span><br>\r\n<span style="color: #000000;"> Cell: 01716 810 144</span><br>\r\n<span style="color: #000000;"> 01733 200 180</span><br>\r\n<span style="color: #000000;"> Tel: +880 821 287 0760, 287 0040</span><br>\r\n<span style="color: #000000;"> Email: <a style="color: #000000;" href="mailto:reservation@zakariyacity.org">reservation@zakariyacity.org</a></span></p>'),
('Nilgiri Resorts', 'Contact Point: DAA &amp; QMG, Headquarter 69 Infantry Brigade, Bandarban Cantonment, Bandarban.</span><br>\r\n<span style="color: #000000;"> Cell:880 1769299999</span><br>\r\n<span style="color: #000000;"> Email:info@nilgiriresort.com</span></p>'),
('Sampan Resort', '<span style="color: #000000;"> Inani Road, Cox’s Bazar</span><br>\r\n<span style="color: #000000;"> Cox’s Bazar, Bangladesh</span><br>\r\n<span style="color: #000000;"> Phone 01974-726 726,1816-726 726,01813-726 726,01973-726 726</span><br>\r\n<span style="color: #000000;"> Email BOOKING@SAMPANRESORT.COM</span><br>\r\n<span style="color: #000000;"> Website <a style="color: #000000;" href="http://www.sampanresort.com/" target="_self">http://www.sampanresort.com/<br>\r\n</a><a style="color: #000000;" href="mailto:sampanresort@gmail.com">sampanresort@gmail.com</a></span></p>'),
('Amtali Nature Resort', '<span style="color: #000000;"> Rashidpur, Bahubal, Habiganj</span><br>\r\n<span style="color: #000000;"> (On Dhaka – Moulvibazar highway)</span><br>\r\n<span style="color: #000000;"> Mobile: +8801713177766</span><br>\r\n<span style="color: #000000;"> Email: <a style="color: #000000;" href="mailto:amtalinr@gmail.com">amtalinr@gmail.com</a></span></p>'),
('Blue Marine Resorts', '<span style="color: #000000;"> Saint Martin Office:Delpara, Narikel Zingira</span><br>\r\n<span style="color: #000000;"> Saint Martin, Bangladesh</span><br>\r\n<span style="color: #000000;"> Cell: 01713399250-2</span><br>\r\n<span style="color: #000000;"> Cell: 01817060065</span></p>');

-- --------------------------------------------------------

--
-- Table structure for table `tour operator`
--

CREATE TABLE IF NOT EXISTS `tour operator` (
  `name7` varchar(100) CHARACTER SET utf8 NOT NULL,
  `address4` varchar(10000) CHARACTER SET utf8 NOT NULL,
  `phone` varchar(100) CHARACTER SET utf8 NOT NULL,
  `website` varchar(1000) CHARACTER SET utf8 NOT NULL,
  `email` varchar(1000) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`phone`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tour operator`
--

INSERT INTO `tour operator` (`name7`, `address4`, `phone`, `website`, `email`) VALUES
('<tr>\r\n<td width="108"><span style="color: #000000;">Blue Sky Holidays</span></td>', '<td class="Odd" width="240"><span style="color: #000000;">Syed&#39;s Mansion, 4th floor, 78/E, Road No-12, Banani.,</span><br>\r\n<span style="color: #000000;"> Dhaka-1213, Bangladesh</span></td>', '<td width="114"><span style="color: #000000;">02-9102916</span></td>', '<td class="Odd" width="174"><span style="color: #000000;">&nbsp;</span></td>', '<td width="193"><span style="color: #000000;">akter@beyoundbd.com</span></td>\r\n</tr>'),
('<tr>\r\n<td width="108"><span style="color: #000000;">BD Tours Ltd.</span></td>', '<td class="Odd" width="240"><span style="color: #000000;">House-424,(5th Fl),Road-30, DOHS Mohakhali ,</span><br>\r\n<span style="color: #000000;"> Dhaka - 1206, Bangladesh</span></td>', '<td width="114"><span style="color: #000000;">8715112, 8712104</span></td>', '<td class="Odd" width="174"><span style="color: #000000;">&nbsp;</span></td>', '<td width="193"><span style="color: #000000;">bdtravelhomes@gmail.com,<br>\r\ninfo@bdtravelhomes.net</span></td>\r\n</tr>'),
('<tr>\r\n<td width="108"><span style="color: #000000;">BD Travel Homes Ltd.</span></td>', '<td class="Odd" width="240"><span style="color: #000000;">House # 13 Road # 06, Sector # 01 Uttara Model Town,</span><br>\r\n<span style="color: #000000;"> Dhaka - 1230, Bangladesh</span></td>', '<td width="114"><span style="color: #000000;">8922284</span></td>', '<td class="Odd" width="174"><span style="color: #000000;">&nbsp;</span></td>', '<td width="193"><span style="color: #000000;">info@bangladeshtravel.<br>\r\ncom.bd<br>\r\nmasud.mail@gmail.com</span></td>\r\n</tr>'),
('<tr>\r\n<td width="86"><span style="color: #000000;">Abakash Parjatan Ltd.</span></td>', '<td class="Odd" width="92"><span style="color: #000000;">Shiblul Azam Koreshi,(B+), Managing Director, Al-Haj Shamsuddin Mansion(9th Floor) 17 (280 Old) New Eskaton Rood., Mogh Bazar, Dhaka-1000.</span></td>\r\n', '<td width="168"><span style="color: #000000;">01190635565, 01552420602 </span></td>', '<td class="Odd" width="144"><span style="color: #000000;">http://www.abakashparjaton.com</span></td>', '<td width="294"><span style="color: #000000;"><a style="color: #000000;">abakash_parjatan<br>\r\n@yahoo.com</a></span></td>\r\n</tr>'),
('<tr>\r\n<td width="86"><span style="color: #000000;">Adventure Club</span></td>', '<td class="Odd" width="92"><span style="color: #000000;">Syed G. Qadir, O(+) CEO 75,HMM Road, Jessore</span></td>', '<td width="168"><span style="color: #000000;">01713005306 </span></td>', '<td class="Odd" width="144"><span style="color: #000000;">88 01713332651-54</span></td>', '<td width="294"><span style="color: #000000;">adventure2asia<br>\r\n@yahoo.com</span></td>\r\n</tr>'),
('<tr>\r\n<td width="86"><span style="color: #000000;">Maas Travel &amp; Tours Ltd</span></td>', '<td class="Odd" width="92"><span style="color: #000000;">Md.Manjur Alam, O+, Manager Admin &amp; Finance 101 Gulshan Avenue, RM Center,(5th Floor) Gulshan-2, Dhaka 1212, Bangladesh</span></td>', '<td width="168"><span style="color: #000000;">88 02 8837484 01711524098</span></td>', '<td class="Odd" width="144"></td>', '<td width="294"><span style="color: #000000;"><a style="color: #000000;"> manzurmaas@gmail.com</a></span></td>\r\n</tr>'),
('<tr>\r\n<td width="86"><span style="color: #000000;">Angel Tourism</span></td>', '<td class="Odd" width="92"><span style="color: #000000;">Asafud Doula, (Asheqe) B(+), CEO 14/A Meherba Plaza 33 Topkhana Road,Dhaka</span></td>', '<td width="168"><span style="color: #000000;">88027162935,01611012451, 01711012451<br>\r\n</span></td>', '<td class="Odd" width="144"><span style="color: #000000;">http://www.angeltourism.com/</span></td>', '<td width="294"><span style="color: #000000;">mail@angeltourism.com</span></td>\r\n</tr>'),
('<tr>\r\n<td width="86"><span style="color: #000000;">Amazing Holidays</span></td>', '<td class="Odd" width="92"><span style="color: #000000;">Md. Mamun Ashraphi O(+) Proprietor &amp; CEO Hotel Victory Building (13th Floor), 30/A, Naya Paltan, V.I.P Road, Ramna, Dhaka</span></td>', '<td width="168"><span style="color: #000000;">88029352634, 88029352537,9353728, 01713034454 </span><', '<td class="Odd" width="144"><span style="color: #000000;">http://www.holidays-amazing.com</span></td>', '<td width="294"><span style="color: #000000;">holidays<br>\r\n@dhaka.net</span></td>\r\n</tr>'),
('<tr>\r\n<td width="86"><span style="color: #000000;">A. Intraco (Bangladesh) Ltd.</span></td>', '<td class="Odd" width="168"><span style="color: #000000;">Mr. H.M. Hakim Ali, B(+) Nasir Uddin (Apu), Manager Tours House # 25, 1st Floor Road # 4, Block # F Banani, Dhaka-1213</span></td>', '<td width="92"><span style="color: #000000;">88028832794,01711481017\r\n</span></td>', '<td class="Odd" width="144"><span style="color: #000000;">http://www.aintracobd.com</span></td>', '<td width="294"><span style="color: #000000;">intracotours@gmail.com</span></td>\r\n</tr>'),
('<tr>\r\n<td width="86"><span style="color: #000000;">Bangladesh Tourism International</span></td>', '<td class="Odd" width="168"><span style="color: #000000;">Sazzadur R. Azaad, Proprietor, 13/A, Planner Tower, Suit # 14, Floor # 13, Sonargaon Road, Dhaka-1000</span></td>', '<td width="92"><span style="color: #000000;"><span style="color: #000000;">88029671712<br>\r\n01715696', '<td class="Odd" width="144"><span style="color: #000000;">http://www.authentictorism.bd.com</span></td>', '<td width="294"><span style="color: #000000;">info@authentictourism.bd.com</span></td>\r\n</tr>');

-- --------------------------------------------------------

--
-- Table structure for table `travel agent`
--

CREATE TABLE IF NOT EXISTS `travel agent` (
  `name8` varchar(1000) CHARACTER SET utf8 NOT NULL,
  `address4` varchar(10000) CHARACTER SET utf8 NOT NULL,
  `phone` varchar(100) CHARACTER SET utf8 NOT NULL,
  `website` varchar(1000) CHARACTER SET utf8 NOT NULL,
  `email` varchar(1000) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`phone`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `travel agent`
--

INSERT INTO `travel agent` (`name8`, `address4`, `phone`, `website`, `email`) VALUES
('A. J. Air International', 'Aziz Co-operative Market(4th Floor) 204,\r\nShahid Syed Nazrul Islam Sarani, Dhaka.', '01711-074914', '', 'ahmed01bd<br>\r\n@yahoo.com'),
('A-Matribhumi Travels International', '89/1, Kakrail Super Market (1st Floor), Dhaka', '01711128748', '', ''),
('A. S. International', 'Gulshan-E-Asheque 2nd Floor(south) House # 54/A, Road # 133 Gulshan-1, Dhaka-1212.', '01726707676, 01675695020', '', ''),
('A M S Aviation', '131,DIT Extension Road Rafatun Mansion (1st Floor) Fakirapool, Dhaka.', '02-9361033<br>\r\n01711023351<br>', '', 'amsaviation70<br>\r\n@gmail.com'),
('Ababil Overseas Limited', 'Karim Chamber (3rd Floor) 99, Motijheel C/A, Dhaka-1000', '7176028, 9571078\r\n', 'www.ababiloverseas.com', 'ababiloverseas\r\n@hotmail.com'),
('A. R. M. Travels and Tours', 'Kazi Tower (2nd Floor) 86, Inner Circular Road, VIP Road, Dhaka-1000', '8359538, 8360691\r\n01713 010851, 01973 010851', '', 'maisha_traders@yahoo.com'),
('A. M. Travel Agent', 'G-3, Eastern View 50, DIT Extension Road Fakirapool, Dhaka-1000', '8361023, 8361302 (Off) 8311947 (Res) Fax:8361302\r\n01819 242760', '', 'arab.majumder@gmail.com'),
('A to Z Tours &amp; Travels', '89/1, Kakrail Akmol Mansion, Kakrail Super Market (1st floor) Kakrail, Dhaka-1000', '9354697<br>\r\n01710262610<br>', '', 'ibrahim-atoz<br>\r\n@yahoo.com'),
('A. P. Tours & Travels', '44. Naya Paltan (Ground Floor) Dhaka-1000', '9358123, 8321440,\r\n01711 268837', '', ''),
('A. R. Tours & Travels', 'Hotel Ishakha Shopping Complex 89/3, VIP Road, Kakrail, Dhaka', '9360472\r\n01720208291, 01816171449', '', ''),
('A. R. S. Air International', '118, DIT Extension Road, Fakirapool (1st Floor) Dhaka-1000', '9360586, 9349406,\r\n01713 030284, 01714 455047', '', 'arsairintl@yahoo.com'),
('A. Rahman Tours & Travels', '205/1, S.S. Nazrul Islam Sarani (1st Floor) 27/7/1, Topkhana Road (Old) Dhaka-1000', '9556420, 9513104\r\n01817 571647, 01711 819188', 'www.freewebs.com/\r\narahmantravels', 'a_rahman_travels@live.com'),
('A.T.M. Travels & Tours Ltd', 'Dr. Nowab Ali Tower (5th Floor, Room-503) 24/A, Purana Paltan, Dhaka-1000', '9560927\r\n01913308844', '', 'ababilhajj.travels\r\n@gmail.com'),
('Abco Overseas', 'House # 55 (B-4th Floor), Road # 6 Block-C, Banani, Dhaka', '9888777\r\n01713314852', '', 'abco481@yahoo.com'),
('ABC Air Ltd.', '116, Gulshan Avenue Gulshan Model Town, Dhaka.', '9892804\r\n01678016780', '', 'murad@acairbd.com');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
