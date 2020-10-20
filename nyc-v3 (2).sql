-- phpMyAdmin SQL Dump
-- version 4.9.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 07, 2020 at 11:14 PM
-- Server version: 5.6.49-cll-lve
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nyc-v3`
--

-- --------------------------------------------------------

--
-- Table structure for table `active_pages`
--

CREATE TABLE `active_pages` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(50) NOT NULL,
  `enabled` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `active_pages`
--

INSERT INTO `active_pages` (`id`, `name`, `enabled`) VALUES
(1, 'blog', 1);

-- --------------------------------------------------------

--
-- Table structure for table `bank_accounts`
--

CREATE TABLE `bank_accounts` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `iban` varchar(255) NOT NULL,
  `bank` varchar(255) NOT NULL,
  `bic` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `blog_posts`
--

CREATE TABLE `blog_posts` (
  `id` int(10) UNSIGNED NOT NULL,
  `image` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `time` int(10) UNSIGNED NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `blog_posts`
--

INSERT INTO `blog_posts` (`id`, `image`, `url`, `time`) VALUES
(3, 'Dream-gaming-gadgets.png', 'Dream_Gaming_Gadgets_for_every_Gamer_in_3', 1599806473),
(2, 'top-7-ps4-accessories.png', 'Top_PS_Accessories_every_gamer_must_have_2', 1599806345),
(4, 'xbox_elite_controller.png', 'Optimize_your_Modern_Warfare_Performance_with_this_Xbox_Elite_Controller_Setup_4', 1599807801),
(5, 'PS5.png', 'Everything_you_need_to_know_about_the_upcoming_launch_of_PS_5', 1599808015),
(6, 'blog_games.png', 'List_of_Top_Gaming_Keyboards_6', 1601383345);

-- --------------------------------------------------------

--
-- Table structure for table `blog_translations`
--

CREATE TABLE `blog_translations` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` longtext NOT NULL,
  `abbr` varchar(5) NOT NULL,
  `for_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `blog_translations`
--

INSERT INTO `blog_translations` (`id`, `title`, `description`, `abbr`, `for_id`) VALUES
(2, 'Top 7 PS4 Accessories every gamer must have', '<p>The PlayStation 4 is undoubtedly the most successful gaming console of this generation, thanks to its wide range of challenging games. Though your PlayStation is created to provide you an extraordinary experience, adding a few accessories will take the gaming to a whole new level.&nbsp;</p>\r\n\r\n<p>You will surely find a dozen accessories on the internet but are they all worth spending on? No, which is why we have enlisted some of the best PS4 accessories which will elevate your gameplay:</p>\r\n\r\n<p>PlayStation VR Headset:</p>\r\n\r\n<p>If you want to add a 3D touch to your gaming, the PlayStation VR Headset is a must have in your gaming kit. The VR is designed with a 5.7 inch OLED panel and offers a 1080p display, which enables an amazing gaming experience for the players.</p>\r\n\r\n<p>PowerA DualShock 4 Charging Station:</p>\r\n\r\n<p>In the trend of wireless, why stay stuck with those annoying charging cables. The PowerA DualShock 4 Charging Station is a reliable tool which offers convenience. Just place your PS4 controllers on the dock when not in use. Also, it is a great way to keep your gaming setup organized for the next gaming session.&nbsp;</p>\r\n\r\n<p>PlayStation Streaming Camera:</p>\r\n\r\n<p>The Sony Playstation Streaming Camera is one of the best gaming accessories on our list since it will turn your gaming into an immersive experience. This tool has the capability to track your movement and reflect them into your gameplay, applicable for the compatible games like Fortnite and GTA V.&nbsp;</p>\r\n\r\n<p>You now have the chance to stream on your favorite gaming platforms like Twitch and Youtube.</p>\r\n\r\n<p>Game Drive for PS4:</p>\r\n\r\n<p>The in-built space in your console may seem insufficient during long hours of non-stop gaming with upgraded graphics. At that time, this hard drive will be your go-to the accessory as it comes with multiple storage options to suit your needs. Let nothing come between you and your gaming.&nbsp;</p>\r\n\r\n<p>These gaming drives are capable to store tons of your gaming data and are sturdy which makes them the best choice for long term usage.</p>\r\n\r\n<p>Gaming Racing Wheel and Pedal:</p>\r\n\r\n<p>The Driving Force G29 Gaming Racing Wheel and Pedals is the perfect addition for racing game lovers and top-rated PS4 games like DriveClub, Need For Speed or Gran Turismo.</p>\r\n\r\n<p>No doubt a controller is not designed for realistic driving gameplay, which is why this Racing Wheel and pedals are invented with the aim to add realism to your gaming experience with the dual-motor tactile feedback and durable build quality.</p>\r\n\r\n<p>Wireless Gaming Headset:</p>\r\n\r\n<p>An exclusive audio device is one of the most important PS4 accessories which every gamer must-have. The audio output plays a major role in your gaming. Also, while choosing your gaming headset, look for a wireless headset equipped with a good-quality mic which will provide you the best of your multiplayer games.</p>\r\n\r\n<p>Cooling Vertical Stand:</p>\r\n\r\n<p>The best Cooling Vertical Stands help you to save some desk space and offer efficient cooling to your PS4 which helps you to keep your gaming console in good condition for a long time.&nbsp;</p>\r\n\r\n<p>Designed with multiple fans which let the airflow and cools down your PlayStation preventing it from overheating. Also, this stand comes with an in-built charging port.</p>\r\n\r\n<p>Want to buy the best gaming accessories? NYC Games offers the latest gaming consoles, accessories, and more, at the lowest prices. Shop for your favorite products and reach another level of gaming.</p>\r\n', 'en', 2),
(3, 'Dream Gaming Gadgets for every Gamer in 2020', '<p><meta charset=\"utf-8\" /></p>\r\n\r\n<p>To become a pro gamer today, you need something more than just a decent gaming setup. You need to be equipped with some advanced gaming accessories to compete in this fast-paced world of gaming.&nbsp;</p>\r\n\r\n<p>Many gamers find difficulty in choosing the best gadgets to suit their gaming needs. Hence, we have created a list of the best gaming accessories in 2020 which will uplift every gamers’ experience:</p>\r\n\r\n<p>Surround Sound Speaker System:</p>\r\n\r\n<p>A Logitech sound system is a dream accessory for any gamer. The Logitech Z906 5.1 speakers is one of the most reliable speakers in the gamer community which comes with a powerful 500 RMS, 5 satellite speakers, and one subwoofer.</p>\r\n\r\n<p>Having an amazing speaker set enhances the gaming experience and creates a more realistic environment during your gaming session.</p>\r\n\r\n<p>8Bitdo N30 Arcade Stick Controller:</p>\r\n\r\n<p>The stick’s flexibility, value, and general build quality makes it a perfect pick for anyone who wants to enjoy top nintendo switch games. This controller brings back the memories of the traditional arcade style gaming with its large stick and buttons to be mashed.</p>\r\n\r\n<p>Nintendo Switch Projector:</p>\r\n\r\n<p>Want to take that portable gaming on a wider screen? The OJO Nintendo Switch Projector can serve your needs by converting any flat surface into your very own huge gaming display.&nbsp;</p>\r\n\r\n<p>Fortunately, this projector is built portable which ensures you can carry your switch experience everywhere you want. To level up, this projector comes with a charging dock to serve as a charging station at the same time.</p>\r\n\r\n<p>PS4 Cover:</p>\r\n\r\n<p>Bored with the traditional playstation look? Why not amp up your game time with a touch of customization. Choose your favourite playstation controller and console styles which will also protect your favourite device from dust or any scratches while you enjoy your best PS4 games.</p>\r\n\r\n<p>VR Headset:</p>\r\n\r\n<p>If you are a PlayStation owner, you need to have a VR headset in your stock. With an exceptional 3D experience, it is the best device to scare yourself silly at Resident Evil, and feel the rage during a game of Fortnite.</p>\r\n\r\n<p>This is a necessary addition for any gamer looking to level up their gaming.</p>\r\n\r\n<p>External Hard Drive:</p>\r\n\r\n<p>Ran out of space on your console’s hard drive? Keep the party going with an external USB 3.0 drive which will easily double your drive storage without any hassle.&nbsp;</p>\r\n\r\n<p>This is a great device to keep your gaming data safe, secure and organized. Do not worry, this device is compatible not just with your latest x box but it also supports all your PC devices, PS4 or even your phone storage.</p>\r\n\r\n<p>Looking for the most efficient space to buy the best gaming consoles, accessories, and more at the most affordable prices online? NYC Games is your way to go with a huge variety of your favorite gaming gadgets designed to boost your gaming experience and ease your journey as a pro gamer.</p>\r\n', 'en', 3),
(4, 'Optimize your Modern Warfare Performance with this Xbox Elite 2 Controller Setup', '<p>Are you a die-heart fan of Call of Duty Modern Warfare? Yes? Then, this blog is a perfect guide for you to configure your latest Xbox Elite 2 controller to achieve the most out of your favorite game.&nbsp;</p>\r\n\r\n<p>The primary goal is to conveniently execute game actions with minimum efforts in the fastest time possible. You do not have to waste any time experimenting because we have created a guide to set up your Xbox controller to boost your gaming experience and performance in Modern Warfare.</p>\r\n\r\n<p>Elite 2 Trigger Locks:</p>\r\n\r\n<p>While setting up your controller trigger locks you need to ensure that they are super reactive and you eliminate the slightest chance of any delays in the action you take.&nbsp;</p>\r\n\r\n<p>You want to press these buttons as quick as possible, and adjusting them on the highest setting will allow you to do that. Once done, you are ready to aim and fire instantly.</p>\r\n\r\n<p>This device also provides you an option to visit the accessory app and adjust your triggers dead zone to the minimum.</p>\r\n\r\n<p>Set Up Vibration:</p>\r\n\r\n<p>This is more of a personal choice because many gamers consider the vibrations to be a distracting factor and feel that it affects their aiming negatively.</p>\r\n\r\n<p>Still, we cannot deny the fact that these vibrations play a vital role in improving the gaming experience, so you can adjust the vibrations as per your comfort while gaming.</p>\r\n\r\n<p>D-Pad:</p>\r\n\r\n<p>We recommend you to keep the setting on the standard model, as it shows great performance and offers a better sense to your thumb which allows you to press the directional keys more accurately.&nbsp;</p>\r\n\r\n<p>Also, it improves your performance as it ensures that the player does not have to compromise his focus while using the D-Pad. Without a doubt the faceted D-Pad is one of the coolest parts of your X box series X.</p>\r\n\r\n<p>Software Setup:</p>\r\n\r\n<p>The stick menu offers you multiple options to play with. Firstly, you can try adjusting the sensitivity curves, configuring the left stick to an “Instant” setting will help you improve your in-game movement.</p>\r\n\r\n<p>ThumbSticks:</p>\r\n\r\n<p>Xbox launched the new tension adjusting feature which has come out to be a game changer. You can adjust among three different levels of the thumbsticks that can be changed with the use of a tool which you get in a box when you buy an Xbox.</p>\r\n\r\n<p>If you are a fan of the standard Xbox One setting, you can have it and as you turn it clockwise you reach the point with middle tension setting. Also, if you like the Xbox 360 then you can set your controller to the most tension point.</p>\r\n\r\n<p>If you want to buy the best XBox One accessories, PS4 accessories, gaming consoles and more at the best prices, visit the NYC Games online store and browse through your favorite games and order them online to elevate your gaming experience.</p>\r\n', 'en', 4),
(5, 'Everything you need to know about the upcoming launch of PS5', '<p>After years of waiting and gazillion hints, Sony has finally announced the release of PS5. No doubt the elegant design and the outstanding gaming line-up has earned the hearts of every gamer out there, and you might already be dreaming about buying the PS5 as soon it gets launched in the country.</p>\r\n\r\n<p>In case, you have missed out on any information about the upcoming PS5, we have gathered all the required information about the &nbsp;&nbsp; &nbsp;PS5 design, specification, games and more, to keep the gaming enthusiasm high:</p>\r\n\r\n<p>Design:&nbsp;</p>\r\n\r\n<p>On June 11, 2020, the legendary PS5 design was revealed in front of the world, and surprisingly the new console is much far away from the traditional design. With the combination of icing white and black, the console will be presented in two options - The Digital only and The Disc-Drive version.&nbsp;&nbsp; &nbsp;</p>\r\n\r\n<p>Release Date:</p>\r\n\r\n<p>Though the exact release date of PS5 is still unknown but as history shows, Sony loves to surprise the gamers near the holiday season. PS3 was launched on November 17, and PS4 was made available on November 15. So, the gamers can expect to see PS5 in the market around November 2020.</p>\r\n\r\n<p>Specification:</p>\r\n\r\n<p>Sony removed the hood on PS5 during the release event, and here are the detailed specifications which will blow you away:</p>\r\n\r\n<p>CPU: AMD Zen 2-based CPU with 8 cores at 3.5GHz (variable frequency)<br />\r\nGPU architecture: Custom RDNA 2<br />\r\nGPU: 10.28 TFLOPs, 36 CUs at 2.23GHz (variable frequency)<br />\r\nMemory interface: 16GB GDDR6 / 256-bit<br />\r\nMemory bandwidth: 448GB/s<br />\r\nInternal storage: Custom 825GB SSD<br />\r\nIO throughput: 5.5GB/s (raw), typical 8-9GB/s (compressed)<br />\r\nExpandable storage: NVMe SSD slot<br />\r\nExternal storage: USB HDD support (PS4 games only)<br />\r\nOptical drive: 4K UHD Blu-ray drive</p>\r\n\r\n<p>Keeping all these factors in mind, it won’t be an understatement to mention that the PlayStation 5 is going to be a very powerful machine.</p>\r\n\r\n<p>Price:&nbsp;</p>\r\n\r\n<p>Unfortunately, Sonay has yet not revealed the price for PS5 but many experts have been predicting the price of this upcoming device. Considering the initial price of the PS4 was $399, many are predicting that the price of the PlayStation 5 will land somewhere around $499.&nbsp;</p>\r\n\r\n<p>Not to mention, we will get to see two price variants, keeping in mind the launch of two different devices: The Digital only and The Disc-Drive version.&nbsp;</p>\r\n\r\n<p>Games:</p>\r\n\r\n<p>We believe that the best PS4 games will be compatible with PS5 machines, and we will be introduced to a bunch of new major AAA releases like Assassin’s Creed: Valhalla, Cyberpunk 2077, and more, that will blow away our minds.</p>\r\n\r\n<p>Controller:</p>\r\n\r\n<p>The PS5 controller became public long before the console itself, the Dual Sense is the successor of the DualShock line as it follows the same principles when it comes to design.</p>\r\n\r\n<p>But talking about the technology, you might get to see some advancements in the controllers:</p>\r\n\r\n<p>Haptic Feedback: The Dual Sense outputs really powerful sensations during gameplay. There have been some major improvisations in the DualShock 4 in terms of functionality, and is made more subtle.</p>\r\n\r\n<p>Adaptive Triggers: The L2 and R2 buttons on the Dual Sense controller are trained to match the tension of your in-game actions. Sony even mentioned that they have tweaked the angles of the triggers.</p>\r\n\r\n<p>Built-in Microphone: Now, chatting with your friend during an on-going game has been made a more instant and seamless experience.</p>\r\n\r\n<p>Once released, you will be able to buy the PS5 at NYC Games at the most affordable prices with a ton of your other favourite gaming accessories, console games, switch accessories and more.</p>\r\n', 'en', 5),
(6, 'List of Top Gaming Keyboards', '<p>For a gamer, the gaming season is all year round, and, now that the COVID-19 pandemic has got us all inside our homes, spending time is all about play, eat, sleep, repeat. And, to have a wholesome gaming experience, it is better to engage in the latest x box or just not. Just kidding; it is not just about the console that you have invested in, but also the several and various accessories that can amp up your overall video game experience.&nbsp;</p>\r\n\r\n<p>In this blog, we will talk about the latest and top-performing gaming keyboards. If you are looking to buy one, you can visit our website to purchase the ones that best suit your needs. So, let’s dive in the details already:</p>\r\n\r\n<p>Steel Series Apex Pro: This is a full-size mechanical keyboard that offers unique omni-point switches. This keyboard is packed with features that will allow you to customize the actuation point and the actuation force that will suit your gaming experience. Steel Series Apex Pro comes with a comfortable wrist rest that attaches magnetically, and also has incline settings.</p>\r\n\r\n<p>Razer Blackwidow Elite: Packed with tons of features, every key in this keyboard can be customized via Razer’s Synapse 3 software. Razer Blackwidow Elite keyboard is comfortable to type with, and it’s effortless to press the keys, as it feels incredibly responsive. The keyboard also offers tactile feedback so that one is sure that the keypress is registered.&nbsp;</p>\r\n\r\n<p>Logitech G915 Lightspeed: This is amongst the best wireless gaming keyboards<br />\r\n&nbsp;which is available in the market for a gamer’s fun and thrill. It is a complete keyboard that offers features like full RGB backlighting, multi-device pairing, dedicated macro keys, and so much more.&nbsp;</p>\r\n\r\n<p>Corsair K95 RGB Platinum XT: This is a wired keyboard that is built best for MMO games and has a unique built due to a solid plastic base and a metal top plate. The double-shot PBT keycaps feel much nicer and stable than its previous model. Corsair is completely compatible with iCUE software and allows customization of macros, RGB lighting, and also program each key.</p>\r\n\r\n<p>Redragon K552-RGB: Even though wired, this is truly the best buy for a gamer who is running short on funds but wants a new real good keyboard. The keys do not need to be pressed too hard and provide tactile and audible feedback. A gamer can use this keyboard at a stretched length without getting tired. This keyboard is compatible with both Windows and Linux.</p>\r\n\r\n<p>In the end, we can say that whenever you are shopping for the best gaming keyboard, don’t get confused between which one to buy, cause every keyboard is designed to offer a unique experience, and you should choose the one that best suits your needs. Generally speaking, a mechanical keyboard is better for gaming, but might not be made for everyone. So, keep into account your gaming session needs when it comes to switches, best gaming accessories, and beyond.</p>\r\n', 'en', 6);

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `confirm_links`
--

CREATE TABLE `confirm_links` (
  `id` int(11) NOT NULL,
  `link` char(32) NOT NULL,
  `for_order` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `confirm_links`
--

INSERT INTO `confirm_links` (`id`, `link`, `for_order`) VALUES
(1, '7832fbdadbcd5feb669a8e0c492130bb', 1234),
(2, '94803f06428fba17ca5b3354ac4a7b56', 1235),
(3, 'fb3e7c491d874f64fa9a3f10efb18dbd', 1236),
(4, '2afb8e2e2475eabcf85b8f1eb039b35a', 1237),
(5, '838f7eb4459882c01d3e8ff9b65e2748', 1238),
(6, '8c7ea631b3e6b8581869242abeb07996', 1239);

-- --------------------------------------------------------

--
-- Table structure for table `cookie_law`
--

CREATE TABLE `cookie_law` (
  `id` int(10) UNSIGNED NOT NULL,
  `link` varchar(255) NOT NULL,
  `theme` varchar(20) NOT NULL,
  `visibility` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `cookie_law_translations`
--

CREATE TABLE `cookie_law_translations` (
  `id` int(10) UNSIGNED NOT NULL,
  `message` varchar(255) NOT NULL,
  `button_text` varchar(50) NOT NULL,
  `learn_more` varchar(50) NOT NULL,
  `abbr` varchar(5) NOT NULL,
  `for_id` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `discount_codes`
--

CREATE TABLE `discount_codes` (
  `id` int(10) UNSIGNED NOT NULL,
  `type` varchar(10) NOT NULL,
  `code` varchar(10) NOT NULL,
  `amount` varchar(20) NOT NULL,
  `valid_from_date` int(10) UNSIGNED NOT NULL,
  `valid_to_date` int(10) UNSIGNED NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1' COMMENT '1-enabled, 0-disabled'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE `history` (
  `id` int(10) UNSIGNED NOT NULL,
  `activity` varchar(255) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `time` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `keys`
--

CREATE TABLE `keys` (
  `id` int(11) NOT NULL,
  `key` varchar(40) NOT NULL,
  `level` int(2) NOT NULL,
  `ignore_limits` tinyint(1) NOT NULL DEFAULT '0',
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `languages`
--

CREATE TABLE `languages` (
  `id` int(10) UNSIGNED NOT NULL,
  `abbr` varchar(5) NOT NULL,
  `name` varchar(30) NOT NULL,
  `currency` varchar(10) NOT NULL,
  `currencyKey` varchar(5) NOT NULL,
  `flag` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `languages`
--

INSERT INTO `languages` (`id`, `abbr`, `name`, `currency`, `currencyKey`, `flag`) VALUES
(2, 'en', 'english', '$', 'USD', 'en.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(10) UNSIGNED NOT NULL,
  `order_id` int(11) NOT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL COMMENT 'point to public_users ID',
  `products` text NOT NULL,
  `date` int(10) UNSIGNED NOT NULL,
  `referrer` varchar(255) NOT NULL,
  `clean_referrer` varchar(255) NOT NULL,
  `payment_type` varchar(255) NOT NULL,
  `paypal_status` varchar(10) DEFAULT NULL,
  `processed` tinyint(1) NOT NULL DEFAULT '0',
  `viewed` tinyint(1) NOT NULL DEFAULT '0' COMMENT 'viewed status is change when change processed status',
  `confirmed` tinyint(1) NOT NULL DEFAULT '0',
  `discount_code` varchar(20) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `order_id`, `user_id`, `products`, `date`, `referrer`, `clean_referrer`, `payment_type`, `paypal_status`, `processed`, `viewed`, `confirmed`, `discount_code`) VALUES
(1, 1234, 1, 'a:1:{i:0;a:2:{s:12:\"product_info\";a:21:{s:11:\"vendor_name\";N;s:9:\"vendor_id\";s:1:\"0\";s:2:\"id\";s:2:\"33\";s:6:\"folder\";s:10:\"1600326524\";s:5:\"image\";s:12:\"_0100_~1.JPG\";s:4:\"time\";s:10:\"1600326633\";s:11:\"time_update\";s:1:\"0\";s:10:\"visibility\";s:1:\"1\";s:14:\"shop_categorie\";s:2:\"30\";s:8:\"quantity\";s:2:\"15\";s:11:\"procurement\";s:1:\"0\";s:9:\"in_slider\";s:1:\"0\";s:10:\"super_deal\";N;s:15:\"feature_product\";N;s:11:\"best_seller\";s:1:\"1\";s:12:\"bundle_offer\";s:1:\"1\";s:3:\"url\";s:106:\"Microsoft_Xbox_One_S_TB_All_Digital_Edition_Console_with_Fortnite_Minecraft_and_Sea_of_Thieves_DLC_Game_33\";s:16:\"virtual_products\";N;s:8:\"brand_id\";N;s:8:\"position\";s:1:\"0\";s:5:\"price\";s:3:\"900\";}s:16:\"product_quantity\";s:1:\"1\";}}', 1601884772, 'Direct', 'Direct', 'cashOnDelivery', NULL, 1, 1, 0, NULL),
(2, 1235, 1, 'a:2:{i:0;a:2:{s:12:\"product_info\";a:21:{s:11:\"vendor_name\";N;s:9:\"vendor_id\";s:1:\"0\";s:2:\"id\";s:2:\"29\";s:6:\"folder\";s:10:\"1600323651\";s:5:\"image\";s:20:\"_0004_Xbox_lamp2.jpg\";s:4:\"time\";s:10:\"1600324056\";s:11:\"time_update\";s:1:\"0\";s:10:\"visibility\";s:1:\"1\";s:14:\"shop_categorie\";s:2:\"30\";s:8:\"quantity\";s:2:\"10\";s:11:\"procurement\";s:1:\"0\";s:9:\"in_slider\";s:1:\"0\";s:10:\"super_deal\";N;s:15:\"feature_product\";N;s:11:\"best_seller\";s:1:\"1\";s:12:\"bundle_offer\";s:1:\"0\";s:3:\"url\";s:12:\"Xbox_lamp_29\";s:16:\"virtual_products\";N;s:8:\"brand_id\";N;s:8:\"position\";s:1:\"0\";s:5:\"price\";s:3:\"130\";}s:16:\"product_quantity\";s:1:\"1\";}i:1;a:2:{s:12:\"product_info\";a:21:{s:11:\"vendor_name\";N;s:9:\"vendor_id\";s:1:\"0\";s:2:\"id\";s:2:\"47\";s:6:\"folder\";s:10:\"1600628046\";s:5:\"image\";s:85:\"_0070_Nintendo_Switch_Extended_Battery_Life_with_Neon_Blue_and_Neon_Red_Joy‑Con.jpg\";s:4:\"time\";s:10:\"1600628203\";s:11:\"time_update\";s:1:\"0\";s:10:\"visibility\";s:1:\"1\";s:14:\"shop_categorie\";s:2:\"32\";s:8:\"quantity\";s:1:\"0\";s:11:\"procurement\";s:1:\"0\";s:9:\"in_slider\";s:1:\"0\";s:10:\"super_deal\";N;s:15:\"feature_product\";N;s:11:\"best_seller\";N;s:12:\"bundle_offer\";N;s:3:\"url\";s:75:\"Nintendo_Switch_Extended_Battery_Life_with_Neon_Blue_and_Neon_Red_JoyCon_47\";s:16:\"virtual_products\";N;s:8:\"brand_id\";N;s:8:\"position\";s:1:\"0\";s:5:\"price\";s:4:\"1240\";}s:16:\"product_quantity\";s:1:\"1\";}}', 1601888465, 'Direct', 'Direct', 'cashOnDelivery', NULL, 0, 0, 0, NULL),
(3, 1236, 1, 'a:1:{i:0;a:2:{s:12:\"product_info\";a:21:{s:11:\"vendor_name\";N;s:9:\"vendor_id\";s:1:\"0\";s:2:\"id\";s:2:\"23\";s:6:\"folder\";s:10:\"1600322652\";s:5:\"image\";s:50:\"_0060_PlayStation_VR_Marvels_Iron_Man_VR_(PS4).jpg\";s:4:\"time\";s:10:\"1600322731\";s:11:\"time_update\";s:1:\"0\";s:10:\"visibility\";s:1:\"1\";s:14:\"shop_categorie\";s:2:\"30\";s:8:\"quantity\";s:2:\"10\";s:11:\"procurement\";s:1:\"0\";s:9:\"in_slider\";s:1:\"0\";s:10:\"super_deal\";N;s:15:\"feature_product\";N;s:11:\"best_seller\";s:1:\"1\";s:12:\"bundle_offer\";s:1:\"0\";s:3:\"url\";s:40:\"PlayStation_VR_Marvels_Iron_Man_VR_PS_23\";s:16:\"virtual_products\";N;s:8:\"brand_id\";N;s:8:\"position\";s:1:\"0\";s:5:\"price\";s:4:\"1450\";}s:16:\"product_quantity\";s:1:\"2\";}}', 1601894364, 'Direct', 'Direct', 'cashOnDelivery', NULL, 0, 0, 0, NULL),
(4, 1237, 1, 'a:2:{i:0;a:2:{s:12:\"product_info\";a:21:{s:11:\"vendor_name\";N;s:9:\"vendor_id\";s:1:\"0\";s:2:\"id\";s:2:\"16\";s:6:\"folder\";s:10:\"1600252738\";s:5:\"image\";s:26:\"_0024_Sony_PS4_Camera1.jpg\";s:4:\"time\";s:10:\"1600254484\";s:11:\"time_update\";s:10:\"1600255147\";s:10:\"visibility\";s:1:\"1\";s:14:\"shop_categorie\";s:2:\"30\";s:8:\"quantity\";s:2:\"15\";s:11:\"procurement\";s:1:\"0\";s:9:\"in_slider\";s:1:\"0\";s:10:\"super_deal\";N;s:15:\"feature_product\";s:1:\"1\";s:11:\"best_seller\";N;s:12:\"bundle_offer\";s:1:\"0\";s:3:\"url\";s:17:\"Sony_PS_Camera_16\";s:16:\"virtual_products\";N;s:8:\"brand_id\";N;s:8:\"position\";s:1:\"0\";s:5:\"price\";s:3:\"220\";}s:16:\"product_quantity\";s:1:\"1\";}i:1;a:2:{s:12:\"product_info\";a:21:{s:11:\"vendor_name\";N;s:9:\"vendor_id\";s:1:\"0\";s:2:\"id\";s:2:\"31\";s:6:\"folder\";s:10:\"1600324166\";s:5:\"image\";s:50:\"_0000_Xbox_One_Wireless_Controller_-_Cyberpunk.jpg\";s:4:\"time\";s:10:\"1600324250\";s:11:\"time_update\";s:1:\"0\";s:10:\"visibility\";s:1:\"1\";s:14:\"shop_categorie\";s:2:\"30\";s:8:\"quantity\";s:2:\"15\";s:11:\"procurement\";s:1:\"0\";s:9:\"in_slider\";s:1:\"0\";s:10:\"super_deal\";N;s:15:\"feature_product\";N;s:11:\"best_seller\";s:1:\"1\";s:12:\"bundle_offer\";s:1:\"0\";s:3:\"url\";s:41:\"Xbox_One_Wireless_Controller_Cyberpunk_31\";s:16:\"virtual_products\";N;s:8:\"brand_id\";N;s:8:\"position\";s:1:\"0\";s:5:\"price\";s:3:\"295\";}s:16:\"product_quantity\";s:1:\"1\";}}', 1601894564, 'Direct', 'Direct', 'cashOnDelivery', NULL, 0, 0, 0, NULL),
(5, 1238, 1, 'a:2:{i:0;a:2:{s:12:\"product_info\";a:21:{s:11:\"vendor_name\";N;s:9:\"vendor_id\";s:1:\"0\";s:2:\"id\";s:2:\"20\";s:6:\"folder\";s:10:\"1600322021\";s:5:\"image\";s:68:\"_0085_Nintendo_Joy-Con_Neon_Purple,Neon_Orange_(Nintendo_Switch).jpg\";s:4:\"time\";s:10:\"1600322140\";s:11:\"time_update\";s:1:\"0\";s:10:\"visibility\";s:1:\"1\";s:14:\"shop_categorie\";s:2:\"30\";s:8:\"quantity\";s:2:\"10\";s:11:\"procurement\";s:1:\"0\";s:9:\"in_slider\";s:1:\"0\";s:10:\"super_deal\";N;s:15:\"feature_product\";N;s:11:\"best_seller\";s:1:\"1\";s:12:\"bundle_offer\";s:1:\"0\";s:3:\"url\";s:57:\"Nintendo_JoyCon_Neon_PurpleNeon_Orange_Nintendo_Switch_20\";s:16:\"virtual_products\";N;s:8:\"brand_id\";N;s:8:\"position\";s:1:\"0\";s:5:\"price\";s:3:\"290\";}s:16:\"product_quantity\";s:1:\"1\";}i:1;a:2:{s:12:\"product_info\";a:21:{s:11:\"vendor_name\";N;s:9:\"vendor_id\";s:1:\"0\";s:2:\"id\";s:2:\"33\";s:6:\"folder\";s:10:\"1600326524\";s:5:\"image\";s:12:\"_0100_~1.JPG\";s:4:\"time\";s:10:\"1600326633\";s:11:\"time_update\";s:1:\"0\";s:10:\"visibility\";s:1:\"1\";s:14:\"shop_categorie\";s:2:\"30\";s:8:\"quantity\";s:2:\"14\";s:11:\"procurement\";s:1:\"1\";s:9:\"in_slider\";s:1:\"0\";s:10:\"super_deal\";N;s:15:\"feature_product\";N;s:11:\"best_seller\";s:1:\"1\";s:12:\"bundle_offer\";s:1:\"1\";s:3:\"url\";s:106:\"Microsoft_Xbox_One_S_TB_All_Digital_Edition_Console_with_Fortnite_Minecraft_and_Sea_of_Thieves_DLC_Game_33\";s:16:\"virtual_products\";N;s:8:\"brand_id\";N;s:8:\"position\";s:1:\"0\";s:5:\"price\";s:3:\"900\";}s:16:\"product_quantity\";s:1:\"1\";}}', 1601901712, 'Direct', 'Direct', 'cashOnDelivery', NULL, 0, 0, 0, NULL),
(6, 1239, 1, 'a:1:{i:0;a:2:{s:12:\"product_info\";a:21:{s:11:\"vendor_name\";N;s:9:\"vendor_id\";s:1:\"0\";s:2:\"id\";s:2:\"33\";s:6:\"folder\";s:10:\"1600326524\";s:5:\"image\";s:12:\"_0100_~1.JPG\";s:4:\"time\";s:10:\"1600326633\";s:11:\"time_update\";s:1:\"0\";s:10:\"visibility\";s:1:\"1\";s:14:\"shop_categorie\";s:2:\"30\";s:8:\"quantity\";s:2:\"14\";s:11:\"procurement\";s:1:\"1\";s:9:\"in_slider\";s:1:\"0\";s:10:\"super_deal\";N;s:15:\"feature_product\";N;s:11:\"best_seller\";s:1:\"1\";s:12:\"bundle_offer\";s:1:\"1\";s:3:\"url\";s:106:\"Microsoft_Xbox_One_S_TB_All_Digital_Edition_Console_with_Fortnite_Minecraft_and_Sea_of_Thieves_DLC_Game_33\";s:16:\"virtual_products\";N;s:8:\"brand_id\";N;s:8:\"position\";s:1:\"0\";s:5:\"price\";s:3:\"900\";}s:16:\"product_quantity\";s:1:\"1\";}}', 1601901915, 'Direct', 'Direct', 'cashOnDelivery', NULL, 2, 1, 0, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `orders_clients`
--

CREATE TABLE `orders_clients` (
  `id` int(11) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(30) NOT NULL,
  `address` text NOT NULL,
  `city` varchar(20) NOT NULL,
  `post_code` varchar(10) NOT NULL,
  `notes` text NOT NULL,
  `for_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `orders_clients`
--

INSERT INTO `orders_clients` (`id`, `first_name`, `last_name`, `email`, `phone`, `address`, `city`, `post_code`, `notes`, `for_id`) VALUES
(1, 'Test', 'test', 'naresh.ahirwar.tma@gmail.com', '9354758544', 'heldnfjasdbhvksadbvhasdkvbkhdabvhb', 'Testt', '471625', 'Hello this is test', 1),
(2, 'Rakesh', 'Kumar', 'trived.tcb@gmail.com', '7017340079', 'test', 'sector 16 gurgaon', '244099', 'ede', 2),
(3, 'Rakesh', 'Kumar', 'trived.tcb@gmail.com', '7017340079', 'test', 'sector 16 gurgaon', '244657', 'test', 3),
(4, 'Rakesh', 'Kumar', 'vipin.kumar.tcb@gmail.com', '6565765765', 'testing', 'sector 16 gurgaon', '', 'test', 4),
(5, 'Rakesh', 'Kumar', 'trived.tcb@gmail.com', '6565765765', 'ttt', 'sector 16 gurgaon', '', 'efes', 5),
(6, 'Rakesh', 'Kumar', 'trived.tcb@gmail.com', '7017340079', 'sws', 'sector 16 gurgaon', '', 'ewed', 6);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `folder` int(10) UNSIGNED DEFAULT NULL COMMENT 'folder with images',
  `image` varchar(255) NOT NULL,
  `time` int(10) UNSIGNED NOT NULL COMMENT 'time created',
  `time_update` int(10) UNSIGNED NOT NULL COMMENT 'time updated',
  `visibility` tinyint(1) NOT NULL DEFAULT '1',
  `shop_categorie` int(11) NOT NULL,
  `quantity` int(11) NOT NULL DEFAULT '0',
  `procurement` int(10) UNSIGNED NOT NULL,
  `in_slider` tinyint(1) NOT NULL DEFAULT '0',
  `super_deal` int(10) DEFAULT '0',
  `feature_product` int(10) DEFAULT '0',
  `best_seller` int(10) DEFAULT '0',
  `bundle_offer` int(10) DEFAULT '0',
  `url` varchar(255) NOT NULL,
  `virtual_products` varchar(500) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `brand_id` int(5) DEFAULT NULL,
  `position` int(10) UNSIGNED NOT NULL,
  `vendor_id` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `folder`, `image`, `time`, `time_update`, `visibility`, `shop_categorie`, `quantity`, `procurement`, `in_slider`, `super_deal`, `feature_product`, `best_seller`, `bundle_offer`, `url`, `virtual_products`, `brand_id`, `position`, `vendor_id`) VALUES
(7, 1599652349, 'Banner_1.png', 1599652481, 1601903161, 1, 30, 5, 0, 1, NULL, NULL, NULL, NULL, 'More_than_an_experience_7', NULL, NULL, 0, 0),
(15, 1600172038, '_0102_Marvels_Iron_Man_-_PlayStation_VR_with_Move_Controller_PS41.jpg', 1600172133, 1602048272, 1, 30, 15, 0, 0, NULL, NULL, NULL, NULL, 'Marvels_Iron_Man_PlayStation_VR_with_Move_Controller_PS_15', NULL, NULL, 0, 0),
(16, 1600252738, '_0024_Sony_PS4_Camera1.jpg', 1600254484, 1600255147, 1, 30, 15, 0, 0, NULL, 1, NULL, 0, 'Sony_PS_Camera_16', NULL, NULL, 0, 0),
(17, 1600259602, '_0010_Sony_Virtual_Reality_Bundle,_VR_Headset,_VR_Camera_5_Games_Voucher_Codes_For_PlayStation_41.jpg', 1600260044, 1600260770, 1, 30, 10, 0, 0, NULL, NULL, NULL, 0, 'Sony_Virtual_Reality_Bundle_VR_Headset_VR_Camera_Games_Voucher_Codes_For_PlayStation_17', NULL, NULL, 0, 0),
(18, 1600260820, '_0090_Nintendo_JoyCon_Blue,Neon_Yellow.jpg', 1600260931, 1602049639, 1, 30, 10, 0, 0, NULL, NULL, NULL, NULL, 'Nintendo_JoyCon_BlueNeon_Yellow_Nintendo_Switch_18', NULL, NULL, 0, 0),
(19, 1600321900, '_0064_Nintendo_Switch_Left_and_Right_Joy-Cons_-_Neon_Red_and_Neon_Blue.jpg', 1600322001, 1602049665, 1, 30, 10, 0, 0, NULL, NULL, NULL, NULL, 'Nintendo_Switch_Left_and_Right_JoyCons_Neon_Red_and_Neon_Blue_19', NULL, NULL, 0, 0),
(20, 1600322021, '_0085_Nintendo_Joy-Con_Neon_Purple,Neon_Orange_(Nintendo_Switch).jpg', 1600322140, 1602049679, 1, 30, 10, 0, 0, NULL, NULL, NULL, NULL, 'Nintendo_JoyCon_Neon_PurpleNeon_Orange_Nintendo_Switch_20', NULL, NULL, 0, 0),
(21, 1600322144, '_0111_Ghost_of_Tsushima_Collectors_Edition2.jpg', 1600322562, 1602049714, 1, 31, 10, 0, 0, NULL, NULL, NULL, NULL, 'Ghost_of_Tsushima_Collectors_Edition_21', NULL, NULL, 0, 0),
(23, 1600322652, '_0060_PlayStation_VR_Marvels_Iron_Man_VR_(PS4).jpg', 1600322731, 1602050266, 1, 30, 10, 0, 0, NULL, NULL, NULL, NULL, 'PlayStation_VR_Marvels_Iron_Man_VR_PS_23', NULL, NULL, 0, 0),
(24, 1600322739, '_0028_Sony_PlayStation_4_Pro_1TB_Console_(White).jpg', 1600322807, 1600625587, 1, 32, 10, 0, 0, NULL, NULL, NULL, NULL, 'Sony_PlayStation_Pro_TB_Console_White_24', NULL, NULL, 0, 0),
(25, 1600322809, '_0047_Sony_PlayStation_4_1TB_Console_(Grey)_-_Days_of_Play_Limited_Edition.jpg', 1600322951, 1600627508, 1, 32, 10, 0, 0, NULL, NULL, NULL, NULL, 'Sony_PlayStation_TB_Console_Grey_Days_of_Play_Limited_Edition_25', NULL, NULL, 0, 0),
(26, 1600322953, '_0044_Sony_PlayStation_4_1TB_Slim_,_1_Controller,_Black.jpg', 1600323024, 1602050450, 1, 32, 10, 0, 0, NULL, NULL, NULL, NULL, 'Sony_PlayStation_TB_Slim_Controller_Black_26', NULL, NULL, 0, 0),
(27, 1600323037, '_0020_Sony_PS4_Dualshock_4_Controller,_Black.jpg', 1600323110, 0, 1, 30, 10, 0, 0, NULL, NULL, 1, 0, 'Sony_PS_Dualshock_Controller_Black_27', NULL, NULL, 0, 0),
(28, 1600323121, '_0015_Sony_PS4_glasses.jpg', 1600323296, 0, 1, 30, 15, 0, 0, NULL, NULL, 1, 0, 'Sony_PS_glasses_28', NULL, NULL, 0, 0),
(29, 1600323651, '_0004_Xbox_lamp2.jpg', 1600324056, 0, 1, 30, 10, 0, 0, NULL, NULL, 1, 0, 'Xbox_lamp_29', NULL, NULL, 0, 0),
(30, 1600324065, '_0055_PowerA_Enhanced_Wireless_Controller_For_Nintendo_Switch-K_K_Slider.jpg', 1600324152, 1602051562, 1, 30, 15, 0, 0, NULL, NULL, NULL, NULL, 'PowerA_Enhanced_Wireless_Controller_For_Nintendo_SwitchKKSlider_30', NULL, NULL, 0, 0),
(31, 1600324166, '_0000_Xbox_One_Wireless_Controller_-_Cyberpunk.jpg', 1600324250, 0, 1, 30, 15, 0, 0, NULL, NULL, 1, 0, 'Xbox_One_Wireless_Controller_Cyberpunk_31', NULL, NULL, 0, 0),
(32, 1600324258, '_0040_Sony_PlayStation_4_500GB_Console_(Black)_with_Extra_Controller_2.jpg', 1600324662, 0, 1, 32, 10, 0, 0, NULL, 1, NULL, 0, 'Sony_PlayStation_GB_Console_Black_32', NULL, NULL, 0, 0),
(33, 1600326524, '_0100_~1.JPG', 1600326633, 0, 1, 30, 14, 1, 0, NULL, NULL, 1, 1, 'Microsoft_Xbox_One_S_TB_All_Digital_Edition_Console_with_Fortnite_Minecraft_and_Sea_of_Thieves_DLC_Game_33', NULL, NULL, 0, 0),
(37, 1600625773, '_0075_Nintendo_Switch_Extended_Battery_Life_with_Grey_Joy‑Con2.jpg', 1600625854, 1602047264, 1, 32, 13, 0, 0, NULL, NULL, NULL, NULL, 'Nintendo_Switch_Extended_Battery_Life_with_Grey_JoyCon_37', NULL, NULL, 0, 0),
(38, 1600626140, '_0069_Nintendo_Switch_Joy-Cons_-_Neon_Pink_Neon_Green.jpg', 1600626290, 0, 1, 30, 8, 0, 0, NULL, NULL, NULL, NULL, 'Nintendo_Switch_JoyCons_Neon_Pink_Neon_Green_38', NULL, NULL, 0, 0),
(39, 1600626483, '_0095_Microsoft_Xbox_One_Wireless_Controller_Special_Edition_-_Arctic_Camo.jpg', 1600626628, 0, 1, 30, 2, 0, 0, NULL, NULL, NULL, NULL, 'Microsoft_Xbox_One_Wireless_Controller_Special_Edition_Arctic_Camo_39', NULL, NULL, 0, 0),
(40, 1600626672, '_0106_Logitech_G920_Driving_Force_Racing_Wheel.jpg', 1600626747, 0, 1, 30, 2, 0, 0, NULL, NULL, NULL, NULL, 'Logitech_G_Driving_Force_Racing_Wheel_40', NULL, NULL, 0, 0),
(41, 1600626791, '_0052_RING_FIT_ADVENTURE_FOR_NINTENDO_SWITCH.jpg', 1600626918, 1601982198, 1, 30, 10, 0, 0, NULL, NULL, NULL, NULL, 'Ring_Fit_Adventure_For_Nintendo_Switch_41', NULL, NULL, 0, 0),
(42, 1600626945, '_0032_Sony_PlayStation_4_Platinum_Wireless_Headset.jpg', 1600627087, 1601982220, 1, 30, 10, 0, 0, NULL, NULL, NULL, NULL, 'Sony_PlayStation_Platinum_Wireless_Headset_42', NULL, NULL, 0, 0),
(43, 1600627224, '_0009_Sony_Wireless_Headphone_Gold_For_Ps4.jpg', 1600627414, 0, 1, 30, 11, 0, 0, NULL, NULL, NULL, NULL, 'Sony_Wireless_Headphone_Gold_For_Ps_43', NULL, NULL, 0, 0),
(44, 1600627573, '_0011_Sony_PS4_Pro_1TB_Console,_Black.jpg', 1600627717, 0, 1, 32, 5, 0, 0, NULL, NULL, NULL, NULL, 'Sony_PS_Pro_TB_Console_Black_44', NULL, NULL, 0, 0),
(45, 1600627741, '_0036_Sony_PlayStation_4_500GB_Console_(Black).jpg', 1600627850, 0, 1, 32, 2, 0, 0, NULL, NULL, NULL, NULL, 'Sony_PlayStation_GB_Console_Black_with_Extra_Controller_45', NULL, NULL, 0, 0),
(46, 1600627926, '_0083_Nintendo_Switch_Console_-_Animal_Crossing_3.jpg', 1600628024, 1602047150, 1, 32, 9, 0, 0, NULL, NULL, NULL, NULL, 'Nintendo_Switch_Console_Animal_Crossing_46', NULL, NULL, 0, 0),
(47, 1600628046, '_0070_Nintendo_Switch_Extended_Battery_Life_with_Neon_Blue_and_Neon_Red_Joy‑Con.jpg', 1600628203, 1602047364, 1, 32, 20, 0, 0, NULL, NULL, NULL, NULL, 'Nintendo_Switch_Extended_Battery_Life_with_Neon_Blue_and_Neon_Red_JoyCon_47', NULL, NULL, 0, 0),
(48, 1600686873, 'Banner_2.png', 1600687003, 1601903179, 1, 30, 5, 0, 1, NULL, NULL, NULL, NULL, 'Marvels_Iron_Man_PlayStation_VR_with_Move_Controller_PS_48', NULL, NULL, 0, 0),
(49, 1601969300, '_0065_PS_classic.jpg', 1601969864, 0, 1, 32, 15, 0, 0, NULL, NULL, NULL, NULL, 'Sony_PlayStation_Classic_49', NULL, NULL, 0, 0),
(50, 1601969868, '_0029_Red_Dead_Redemption_2_PlayStation_4.jpg', 1601969956, 0, 1, 31, 15, 0, 0, NULL, NULL, NULL, NULL, 'Red_Dead_Redemption_PlayStation_50', NULL, NULL, 0, 0),
(51, 1601974184, '_0008_Thrustmaster_T_Racing_Scuderia_Ferrari_Edition_Gaming_Headset.jpg', 1601974237, 0, 1, 30, 12, 0, 0, NULL, NULL, NULL, NULL, 'Thrustmaster_TRacing_Scuderia_Ferrari_Edition_Gaming_Headset_51', NULL, NULL, 0, 0),
(52, 1601974297, '_0073_Playstation_Dualshock_4_Wireless_Controller_For_4_-_Copper.jpg', 1601974384, 0, 1, 30, 15, 0, 0, NULL, NULL, NULL, NULL, 'Playstation_Dualshock_Wireless_Controller_For_Copper_52', NULL, NULL, 0, 0),
(53, 1601974408, '_0024_Sony_PS4_DualShock_4_Wireless_Controller_-_Blue_Crystal.jpg', 1601974984, 0, 1, 30, 15, 0, 0, NULL, NULL, NULL, NULL, 'Sony_PS_DualShock_Wireless_Controller_Blue_Crystal_53', NULL, NULL, 0, 0),
(54, 1601974986, '_0022_Sony_PS4_DualShock_4_Wireless_Controller_-_Sunset_Orange_Classic.jpg', 1601975055, 0, 1, 30, 15, 0, 0, NULL, NULL, NULL, NULL, 'Sony_PS_DualShock_Wireless_Controller_Sunset_Orange_Classic_54', NULL, NULL, 0, 0),
(55, 1601978023, '_0062_PS4_DualShock_4_Wireless_Controller_-_Red_Crystal.jpg', 1601978106, 0, 1, 30, 15, 0, 0, NULL, NULL, NULL, NULL, 'PS_DualShock_Wireless_Controller_Red_Crystal_55', NULL, NULL, 0, 0),
(56, 1601978110, '_0042_Razer_Nari_Ultimate_Wireless_7_1_Surround_Sound_Gaming_Headset.jpg', 1601978207, 0, 1, 30, 15, 0, 0, NULL, NULL, NULL, NULL, 'Razer_Nari_Ultimate_Wireless_Surround_Sound_Gaming_Headset_56', NULL, NULL, 0, 0),
(57, 1601978234, '_0047_Razer_Huntsman_Elite_-_Mechanical_Gaming_Keyboard.jpg', 1601978310, 0, 1, 30, 15, 0, 0, NULL, NULL, NULL, NULL, 'Razer_Huntsman_Elite_Mechanical_Gaming_Keyboard_57', NULL, NULL, 0, 0),
(58, 1601978319, '_0037_Razer_Nari_Ultimate_Wireless_7_1_Surround_Sound_Gaming_Headset.jpg', 1601978492, 0, 1, 30, 15, 0, 0, NULL, NULL, NULL, NULL, 'Razer_Nari_Ultimate_Wireless_Surround_Sound_Gaming_Headset_58', NULL, NULL, 0, 0),
(59, 1601978499, 'Xbox_One_White_Wireless_Controller_(White).jpg', 1601978566, 0, 1, 30, 15, 0, 0, NULL, NULL, NULL, NULL, 'Xbox_One_White_Wireless_Controller_White_59', NULL, NULL, 0, 0),
(60, 1601978569, 'eFootball_PES_2021_Season_Update_(PS4).jpg', 1601978626, 0, 1, 31, 15, 0, 0, NULL, NULL, NULL, NULL, 'eFootball_PES_Season_Update_PS_60', NULL, NULL, 0, 0),
(61, 1601978720, '_0111_Elite_Series_2_Controller_Xbox_One_(Xbox_One).jpg', 1601978804, 0, 1, 30, 12, 0, 0, NULL, NULL, NULL, NULL, 'Elite_Series_Controller_Xbox_One_Xbox_One_61', NULL, NULL, 0, 0),
(62, 1601978845, '_0033_Razer_Raiju_Tournament_Edition,_Wireless_and_Wired_Gaming_Controller.jpg', 1601979774, 0, 1, 30, 15, 0, 0, NULL, NULL, NULL, NULL, 'Razer_Raiju_Tournament_Edition_Wireless_and_Wired_Gaming_Controller_62', NULL, NULL, 0, 0),
(63, 1601979780, '_0006_Tom_Clancys_Rainbow_Six_Siege_-_Deluxe_Edition_-_Sony_PlayStation_4.jpg', 1601979847, 0, 1, 31, 15, 0, 0, NULL, NULL, NULL, NULL, 'Tom_Clancys_Rainbow_Six_Siege_Deluxe_Edition_Sony_PlayStation_63', NULL, NULL, 0, 0),
(64, 1601979849, '_0014_Super_Mario_3D_All-Stars_(Nintendo_Switch).jpg', 1601979898, 0, 1, 31, 12, 0, 0, NULL, NULL, NULL, NULL, 'Super_Mario_D_AllStars_Nintendo_Switch_64', NULL, NULL, 0, 0),
(65, 1601979906, '_0094_Logitech_Driving_Force_G29_Racing_Wheel_for_PlayStation_3_and_PC.jpg', 1601979963, 0, 1, 30, 10, 0, 0, NULL, NULL, NULL, NULL, 'Logitech_Driving_Force_G_Racing_Wheel_for_PlayStation_and_PC_65', NULL, NULL, 0, 0),
(66, 1601979969, '_0053_PS4_Limited_Edition_The_Last_of_Us_Part_II_Gold_Wireless_Headset.jpg', 1601980074, 0, 1, 30, 15, 0, 0, NULL, NULL, NULL, NULL, 'PS_Limited_Edition_The_Last_of_Us_Part_II_Gold_Wireless_Headset_66', NULL, NULL, 0, 0),
(67, 1601980854, '_0105_HG_Extreme_4_in_1_Essential_Gaming_Kit.jpg', 1601980896, 0, 1, 30, 15, 0, 0, NULL, NULL, NULL, NULL, 'HG_Extreme_in_Essential_Gaming_Kit_67', NULL, NULL, 0, 0),
(68, 1601980898, '_0089_Mario_Kart_Racing_Wheel_Pro_Mini_for_Nintendo_Switch.jpg', 1601980966, 0, 1, 31, 15, 0, 0, NULL, NULL, NULL, NULL, 'Mario_Kart_Racing_Wheel_Pro_Mini_for_Nintendo_Switch_68', NULL, NULL, 0, 0),
(69, 1601980972, 'UNCHARTED_THE_NATHAN_DRAKE_COLLECTION_PlayStation_4.jpg', 1601981021, 0, 1, 31, 15, 0, 0, NULL, NULL, NULL, NULL, 'UNCHARTED_THE_NATHAN_DRAKE_COLLECTION_PlayStation_69', NULL, NULL, 0, 0),
(70, 1601981056, '_0077_Nintendo_Switch_Lite_(Yellow).jpg', 1601981203, 0, 1, 32, 25, 0, 0, NULL, NULL, NULL, NULL, 'Nintendo_Switch_Lite_Yellow_70', NULL, NULL, 0, 0),
(71, 1601981206, '_0003_Tom_Clancys_The_Division_2_(PS4).jpg', 1601981250, 0, 1, 31, 15, 0, 0, NULL, NULL, NULL, NULL, 'Tom_Clancys_The_Division_PS_71', NULL, NULL, 0, 0),
(72, 1601981253, '_0018_SteelSeries_Arctis_1_Wireless_Cyberpunk_2077_Limited_Edition_Gaming_Headset.jpg', 1601981303, 0, 1, 30, 15, 0, 0, NULL, NULL, NULL, NULL, 'SteelSeries_Arctis_Wireless_Cyberpunk_Limited_Edition_Gaming_Headset_72', NULL, NULL, 0, 0),
(73, 1601981310, '_0098_Hyperkin_Duke_Wired_Controller_for_Xbox_One_(Black).jpg', 1601981372, 1601981497, 1, 30, 25, 0, 0, NULL, NULL, NULL, NULL, 'Hyperkin_Duke_Wired_Controller_for_Xbox_One_Green_73', NULL, NULL, 0, 0),
(74, 1601981392, '_0102_Hyperkin_Duke_Green_Controller_Xbox_One.jpg', 1601981468, 1601982243, 1, 30, 20, 0, 0, NULL, NULL, NULL, NULL, 'Hyperkin_Duke_Wired_Controller_for_Xbox_One_Green_74', NULL, NULL, 0, 0),
(75, 1601981885, '_0085_Microsoft_Xbox_One_X_1TB.jpg', 1601981937, 0, 1, 32, 15, 0, 0, NULL, NULL, NULL, NULL, 'Microsoft_Xbox_One_X_TB_75', NULL, NULL, 0, 0),
(76, 1601981940, '_0083_Microsoft_Xbox_One_X_1TB_Cyberpunk_2077_Limited_Edition_Bundle.jpg', 1601982042, 0, 1, 30, 15, 0, 0, NULL, NULL, NULL, 1, 'Microsoft_Xbox_One_X_TB_Cyberpunk_Limited_Edition_Bundle_76', NULL, NULL, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `products_translations`
--

CREATE TABLE `products_translations` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` longtext NOT NULL,
  `basic_description` text NOT NULL,
  `price` varchar(20) NOT NULL,
  `old_price` varchar(20) NOT NULL,
  `abbr` varchar(5) NOT NULL,
  `for_id` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `products_translations`
--

INSERT INTO `products_translations` (`id`, `title`, `description`, `basic_description`, `price`, `old_price`, `abbr`, `for_id`) VALUES
(12, 'More than an Experience', '<p>\r\n<style type=\"text/css\"><!--td {border: 1px solid #ccc;}br {mso-data-placement:same-cell;}-->\r\n</style>\r\nThis Xbox Wireless Controller immerses you in a future where technology is the key to survival.</p>\r\n\r\n<p>Button mapping allows you to customize your controller just the way you like it.</p>\r\n\r\n<p>Plug in any compatible headset with the 3.5mm stereo headset jack, and with Bluetooth technology,</p>\r\n\r\n<p>play your favorite games on Windows 10 PCs, laptops, and mobile devices.</p>\r\n', '<p>Buy Personal Games at the BEST PRICES in the Market!<br />\r\nSale up to 60%</p>\r\n', '300', '295', 'en', 7),
(20, 'Marvel\'s Iron Man - PlayStation VR with Move Controller PS4 ', '<p>\r\n<style type=\"text/css\"><!--td {border: 1px solid #ccc;}br {mso-data-placement:same-cell;}-->\r\n</style>\r\n- This bundle includes two PlayStation Move motion controllers and a physical copy of Marvel\'s Iron Man VR.<br />\r\n- Set Contains: CD move controller</p>\r\n\r\n<p>\r\n<style type=\"text/css\"><!--td {border: 1px solid #ccc;}br {mso-data-placement:same-cell;}-->\r\n</style>\r\n• Using two PlayStation® Move motion controllers** fire up Iron Man’s Repulsor Jets and blast into the skies with an arsenal of iconic Iron Man gear at your fingertips.<br />\r\n<br />\r\n• Face off against one of Iron Man’s greatest foes in high stakes, action-packed battles.<br />\r\n<br />\r\n• Upgrade tech in Tony Stark’s garage to customise Iron Man’s sleek armor and awesome abilities.</p>\r\n', '', '480', '500', 'en', 15),
(21, 'Sony PS4 Camera', '<p>\r\n<style type=\"text/css\"><!--td {border: 1px solid #ccc;}br {mso-data-placement:same-cell;}-->\r\n</style>\r\nPlayStation Camera doesn’t just let you see, hear, cheer and share your fantastic feats with friends. It’s also your entry to staggering Virtual Reality worlds thanks to PlayStation VR support, and the stylish, redesigned model also comes with an adaptable stand so it’s never been easier to capture your legendary gaming sessions.</p>\r\n\r\n<p>\r\n<style type=\"text/css\"><!--td {border: 1px solid #ccc;}br {mso-data-placement:same-cell;}-->\r\n</style>\r\n- Display: OLED<br />\r\n- Display Size: 5.7 inches<br />\r\n- Resolution: 1920 x RGB x 1080<br />\r\n- Connection: HDMI<br />\r\n- USB<br />\r\n- 360 degree vision<br />\r\n- 120 frames per second<br />\r\n- 3D audio<br />\r\n- Built in mic</p>\r\n', '', '220', '300', 'en', 16),
(22, 'Sony Virtual Reality Bundle, VR Headset, VR Camera & 5 Games Voucher Codes For PlayStation 4', '<p>\r\n<style type=\"text/css\"><!--td {border: 1px solid #ccc;}br {mso-data-placement:same-cell;}-->\r\n</style>\r\nBring the virtual reality world of gaming home with the PlayStation VR Mega Pack<br />\r\nSet Contains:<br />\r\nVR-HEADSET,VR-CAMERA, 5-VR GAME CARD</p>\r\n\r\n<p>\r\n<style type=\"text/css\"><!--td {border: 1px solid #ccc;}br {mso-data-placement:same-cell;}-->\r\n</style>\r\n- Absorbs 360 degrees of smooth visuals on a 5.7\"\" OLED screen<br />\r\n- VR headset Cutting-edge sound technology<br />\r\n- Built-in microphone to chat with friends<br />\r\n- PlayStation camera with depth-sensing 3D technology<br />\r\n- One-size-fits-all VR headset features an adjustable headband and optical scope for a perfect fit Play thrilling games</p>\r\n', '', '970', '1100', 'en', 17),
(23, 'Nintendo Joy-Con Blue/Neon Yellow (Nintendo Switch)', '<p>\r\n<style type=\"text/css\"><!--td {border: 1px solid #ccc;}br {mso-data-placement:same-cell;}-->\r\n</style>\r\nIntroducing Joy-Con, controllers that make new kinds of gaming possible, for use with Nintendo Switch.<br />\r\nThe versatile Joy-Con offers multiple surprising new ways for players to have fun.<br />\r\nThey can also attach to the main console for use in handheld mode, or be shared with friends to enjoy two-player action in supported games.<br />\r\n<br />\r\nSet Contains:<br />\r\nController</p>\r\n\r\n<p>\r\n<style type=\"text/css\"><!--td {border: 1px solid #ccc;}br {mso-data-placement:same-cell;}-->\r\n</style>\r\n- Includes an accelerometer<br />\r\n- Gyroscope motion sensor<br />\r\n- Making independent left and right motion control possible<br />\r\n- Compatible with the Nintendo Switch<br />\r\n- Blue and neon yellow</p>\r\n', '', '270', '300', 'en', 18),
(24, 'Nintendo Switch Left and Right Joy-Cons - Neon Red and Neon Blue', '<p>\r\n<style type=\"text/css\"><!--td {border: 1px solid #ccc;}br {mso-data-placement:same-cell;}-->\r\n</style>\r\nIntroducing Joy-Con, controllers that make new kinds of gaming possible, for use with Nintendo Switch.<br />\r\nThe versatile Joy-Con offers multiple surprising new ways for players to have fun.<br />\r\nThey can also attach to the main console for use in handheld mode, or be shared with friends to enjoy two-player action in supported games.<br />\r\n<br />\r\nSet Contains:<br />\r\nController</p>\r\n\r\n<p>\r\n<style type=\"text/css\"><!--td {border: 1px solid #ccc;}br {mso-data-placement:same-cell;}-->\r\n</style>\r\n- Includes an accelerometer<br />\r\n- Gyroscope motion sensor<br />\r\n- Making independent left and right motion control possible<br />\r\n- Compatible with the Nintendo Switch<br />\r\n- Neon red and neon blue</p>\r\n', '', '270', '350', 'en', 19),
(25, 'Nintendo Joy-Con Neon Purple/Neon Orange (Nintendo Switch)', '<p>\r\n<style type=\"text/css\"><!--td {border: 1px solid #ccc;}br {mso-data-placement:same-cell;}-->\r\n</style>\r\nIntroducing Joy-Con, controllers that make new kinds of gaming possible, for use with Nintendo Switch.<br />\r\nThe versatile Joy-Con offers multiple surprising new ways for players to have fun.<br />\r\nThey can also attach to the main console for use in handheld mode, or be shared with friends to enjoy two-player action in supported games.<br />\r\n<br />\r\nSet Contains:<br />\r\nController</p>\r\n\r\n<p>\r\n<style type=\"text/css\"><!--td {border: 1px solid #ccc;}br {mso-data-placement:same-cell;}-->\r\n</style>\r\n\"- Includes an accelerometer<br />\r\n- Gyroscope motion sensor<br />\r\n- Making independent left and right motion control possible<br />\r\n- Compatible with the Nintendo Switch<br />\r\n- Neon purple and neon orange</p>\r\n', '', '270', '350', 'en', 20),
(26, 'Ghost of Tsushima Collector\'s Edition', '<p>\r\n<style type=\"text/css\"><!--td {border: 1px solid #ccc;}br {mso-data-placement:same-cell;}-->\r\n</style>\r\nIn this open-world action adventure, you\'ll roam vast countrysides and expansive terrain to encounter rich characters, discover ancient landmarks, and uncover the hidden beauty of Tsushima. The Rise of the Ghost: In his quest to reclaim Tsushima, Jin must seek support from old friends and new unlikely allies.</p>\r\n\r\n<p>\r\n<style type=\"text/css\"><!--td {border: 1px solid #ccc;}br {mso-data-placement:same-cell;}-->\r\n</style>\r\nThe Ghost OF Tsushima collector\'s edotion include:<br />\r\n- Game<br />\r\n- Sakai Mask with Stand<br />\r\n- Cloth Map<br />\r\n- Sashimono (War Banner)<br />\r\n- Furoshiki (Wrapping Cloth)<br />\r\n- SteelBook Case<br />\r\n- 48-page Mini Art Book by Dark Horse<br />\r\n- 1 Technique Point*<br />\r\n- Charm of Hachiman’s Favor*<br />\r\n- Hero of Tsushima Skin Set*: Golden Mask, Body Armor, Sword Kit, Horse, Saddle<br />\r\n- Director’s Commentary*: The creative team sits down with a renowned Japanese historian to look at the world of Ghost of Tsushima and how it compares to the real-life events that inspired it.<br />\r\n- Ghost of Tsushima Samurai Theme*</p>\r\n', '', '950', '1250', 'en', 21),
(28, 'PlayStation VR Marvel\'s Iron Man VR (PS4)', '<p>\r\n<style type=\"text/css\"><!--td {border: 1px solid #ccc;}br {mso-data-placement:same-cell;}-->\r\n</style>\r\nUsing two PlayStation Move motion controllers** fire up Iron Man\'s Repulsor Jets and blast into the skies with an arsenal of iconic Iron Man gear at your fingertips. Face off against one of Iron Man\'s greatest foes in high stakes, action-packed battles. Upgrade tech in Tony Stark\'s garage to customize Iron Man\'s sleek armor and awesome abilities.<br />\r\n<br />\r\nSet Contains:<br />\r\nMarvel\'s Iron Man VR Blue-Ray Disc, and Demo Disc 3.0, 2 PlayStation Move motion controllers, PlayStationVR headset, PlayStation Camera</p>\r\n', '', '1420', '1550', 'en', 23),
(29, 'Sony PlayStation 4 Pro 1TB Console (White)', '<p>\r\n<style type=\"text/css\"><!--td {border: 1px solid #ccc;}br {mso-data-placement:same-cell;}-->\r\n</style>\r\nThe Super-Charged PS4 The PlayStation 4 Pro delivers true innovation in console gaming with pin-sharp images and high-resolution graphics. PS4 Pro extends PS4 games by supporting the latest image display technologies, 4K resolution and HDR images, as well as softer refresh rates.</p>\r\n\r\n<p>\r\n<style type=\"text/css\"><!--td {border: 1px solid #ccc;}br {mso-data-placement:same-cell;}-->\r\n</style>\r\n- 4K gaming and entertainment<br />\r\n- High Dynamic Range<br />\r\n- Enhanced games<br />\r\n- 4k entertainment</p>\r\n', '', '1380', '1400', 'en', 24),
(30, 'Sony PlayStation 4 1TB Console (Grey) - Days of Play Limited Edition', '<p>\r\n<style type=\"text/css\"><!--td {border: 1px solid #ccc;}br {mso-data-placement:same-cell;}-->\r\n</style>\r\nThis 1TB Steel Black console features an eye-catching silver embossment of the iconic PlayStation shapes and includes a matching DUALSHOCK 4 wireless controller<br />\r\n<br />\r\nSet Contains:<br />\r\nConsole Controller mono heandsfree powercable</p>\r\n', '', '1190', '1250', 'en', 25),
(31, 'Sony PlayStation 4 1TB Slim , 1 Controller, Black', '<p>\r\n<style type=\"text/css\"><!--td {border: 1px solid #ccc;}br {mso-data-placement:same-cell;}-->\r\n</style>\r\nWelcome to the future of gaming! Sony has introduced the PlayStation 4 into the market much to the delight of gamers all over the world. It is stylish to look at, offers ultra realistic graphics, and provides super smooth gameplay</p>\r\n', '', '1070', '1100', 'en', 26),
(32, 'Sony PS4 Dualshock 4 Controller, Black', '<p>\r\n<style type=\"text/css\"><!--td {border: 1px solid #ccc;}br {mso-data-placement:same-cell;}-->\r\n</style>\r\nThe Sony PlayStation Dualshock 4 Wireless Controller features three axis gyroscope and three axis accelerometer to perfectly predict your every move and offer you absolute control over every gaming title. The 1000mAh Lithium Ion battery allows the controller to give you maximum wireless gaming time. It comes with innovative technologies such as integrated light bar, multi touch clickable touchpad, and internal speaker that offer brilliant new ways to play your PS4 games.</p>\r\n\r\n<p>\r\n<style type=\"text/css\"><!--td {border: 1px solid #ccc;}br {mso-data-placement:same-cell;}-->\r\n</style>\r\n- Precision Controller for PlayStation 4<br />\r\n- Sharing at your Fingertips<br />\r\n- Revolutionary features like the touch pad<br />\r\n- integrated light bar and built-in speaker<br />\r\n- Charge Efficiently</p>\r\n', '', '185', '250', 'en', 27),
(33, 'Sony PS4 glasses', '<p>\r\n<style type=\"text/css\"><!--td {border: 1px solid #ccc;}br {mso-data-placement:same-cell;}-->\r\n</style>\r\nAmber lens, natural arc and lightweight frame. Includes blue carry pouch and cleaning cloth. Reduces UV glare. Gives players competitive gaming edge. Size H21, W6, D6cm</p>\r\n', '', '150', '300', 'en', 28),
(34, 'Xbox lamp', '<p>\r\n<style type=\"text/css\"><!--td {border: 1px solid #ccc;}br {mso-data-placement:same-cell;}-->\r\n</style>\r\n<br />\r\n- Paladone Lamp<br />\r\n- 3D Iconic Night Light Usb Or Battery Powered<br />\r\n- Ideal For Bedrooms, Office, Study, Dining Room<br />\r\n- Xbox Logo.</p>\r\n', '', '130', '250', 'en', 29),
(35, 'PowerA Enhanced Wireless Controller For Nintendo Switch-K.K.Slider', '<p>\r\n<style type=\"text/css\"><!--td {border: 1px solid #ccc;}br {mso-data-placement:same-cell;}-->\r\n</style>\r\nWireless freedom using Bluetooth 5.0 Features motion controls and Advanced Gaming Buttons Ergonomic controller with standard button layout and K.K. Slider design LEDs for player number, button mapping, and low battery warning Includes two AA batteries for up to 30 hours of gameplay Official licensed product with two-year limited warranty</p>\r\n', '', '190', '300', 'en', 30),
(36, 'Xbox One Wireless Controller - Cyberpunk', '<p>\r\n<style type=\"text/css\"><!--td {border: 1px solid #ccc;}br {mso-data-placement:same-cell;}-->\r\n</style>\r\nThis Xbox Wireless Controller immerses you in a future where technology is the key to survival. Button mapping allows you to customize your controller just the way you like it. Plug in any compatible headset with the 3.5mm stereo headset jack, and with Bluetooth technology, play your favorite games on Windows 10 PCs, laptops, and mobile devices.</p>\r\n', '', '295', '395', 'en', 31),
(37, 'Sony PlayStation 4 500GB Console (Black)', '<p>- PlayStation 4 console - Features powerful graphics and speed, deeply integrated social capabilities, connected gaming, intelligent personalization, innovative second-screen features and more.</p>\r\n\r\n<p>- 500GB of storage - The substantial hard drive lets you store several blockbuster games, plenty of apps, indie titles, recorded game footage and more.</p>\r\n\r\n<p>- Blu-ray technology delivers exceptional video quality - Watch Blu-ray and DVD video content. Blu-ray game discs have several times the capacity of DVD-based discs, so massive games fit on a single disc.</p>\r\n\r\n<p>- Introducing PlayStation VR - Redefine your gaming expectations and immerse yourself in moments so intense your intuition takes over.</p>\r\n\r\n<p>- Incredible games - The exclusive games take you on incredible journeys, ranging from critically acclaimed indies to award-winning AAA hits.</p>\r\n\r\n<p>- Endless entertainment - Something new and amazing is always within your reach. Find what you\'re looking for and get it at the touch of a button via various PlayStation entertainment options, such as PlayStation Vue.</p>\r\n\r\n<p>- DualShock 4 wireless controller - The evolved analog sticks and trigger buttons provide unparalleled accuracy with every move while innovative technologies offer exciting ways to experience your games and share your greatest moments.</p>\r\n', '', '970', '1000', 'en', 32),
(38, 'Microsoft Xbox One S 1TB All Digital Edition Console with Fortnite, Minecraft and Sea of Thieves DLC Game', '<p>\r\n<style type=\"text/css\"><!--td {border: 1px solid #ccc;}br {mso-data-placement:same-cell;}-->\r\n</style>\r\nPlay all your favorite games in clear, crisp quality with the Microsoft Xbox One S All Digital Edition Console. It allows you to play an array of games that keep you thoroughly entertained all day long. The console stores your saved game sequences and games on the Cloud for easy access later. It enables you to pre-install your favorite games so that you can play them as soon as they launch. The Microsoft Xbox One S console also enables you to stream movies and TV shows in 4K quality on Netflix, Amazon, Hulu, and more.</p>\r\n', '', '900', '1100', 'en', 33),
(42, 'Nintendo Switch Extended Battery Life with Grey Joy‑Con', '<p>\r\n<style type=\"text/css\"><!--td {border: 1px solid #ccc;}br {mso-data-placement:same-cell;}-->\r\n</style>\r\nNintendo Switch with Gray Joy Con. Get the gaming system that lets you play the games you want, wherever you are, however you like. Includes the Nintendo Switch console and Nintendo Switch dock in black, and left and right Joy Con controllers in a contrasting gray. Also includes all the extras you need to get started. This model includes battery life of approximately 4.5 - 9 hours. The battery life will depend on the games you play.<br />\r\n<br />\r\nSet Contains:<br />\r\nNintendo Switch Extended Battery Life with Grey Joy‑Con</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>\r\n<style type=\"text/css\"><!--td {border: 1px solid #ccc;}br {mso-data-placement:same-cell;}-->\r\n</style>\r\n- Faultless Functionality: Allows connecting up to 8 consoles for an uninterrupted multiplayer showdown.<br />\r\n- Precision-Engineered Design: The 6.2-inch multi-touch capacitive touch screen allows you to enjoy endless hours of high-definition gaming and battery capacity ranging between 4.5 up to 9 hours, depending on your gameplay format.<br />\r\n&nbsp;</p>\r\n', '', '1205', '1425', 'en', 37),
(43, 'Nintendo Switch Joy-Cons - Neon Pink & Neon Green', '<p>\r\n<style type=\"text/css\"><!--td {border: 1px solid #ccc;}br {mso-data-placement:same-cell;}-->\r\n</style>\r\n\"Introducing Joy-Con, controllers that make new kinds of gaming possible, for use with Nintendo Switch.<br />\r\nThe versatile Joy-Con offers multiple surprising new ways for players to have fun.<br />\r\nThey can also attach to the main console for use in handheld mode, or be shared with friends to enjoy two-player action in supported games.<br />\r\n<br />\r\nSet Contains:<br />\r\nController\"</p>\r\n\r\n<p>- Includes an accelerometer<br />\r\n- Gyroscope motion sensor<br />\r\n- Making independent left and right motion control possible<br />\r\n- Compatible with the Nintendo Switch<br />\r\n- Neon pink and neon green</p>\r\n', '', '290', '310', 'en', 38),
(44, 'Microsoft Xbox One Wireless Controller Special Edition - Arctic Camo', '<p>Equip yourself with the Xbox Wireless Controller – Arctic Camo Special Edition, featuring a rugged white, grey, and translucent camouflage pattern. An etched trigger grip gives you extra control, and button mapping allows you to customise your gear just the way you like it. Plug in any compatible headset with the 3.5mm stereo headset jack, and with Bluetooth technology, play your favourite games on Windows 10 PCs, laptops, and mobile devices. Button mapping available via Xbox Accessories app for Xbox One and Windows 10. Operating system and controller firmware updates may be required. Functionality depends on the supported device and operating system version, and experiences may vary.&nbsp;</p>\r\n', '', '235', '275', 'en', 39),
(45, 'Logitech G920 Driving Force Racing Wheel', '<ul>\r\n	<li>The sim racing shifter for G29 and G920 Driving Force Racing Wheels: Adds realistic shifting to your racing rig</li>\r\n	<li>Built to last: Durable solid steel gear shifter and hand stitched leather boot and knob cover and six speeds with push down reverse gear</li>\r\n	<li>Compatible with PlayStation 4, Xbox One, Windows 8.1, Windows 8, or Windows 7, games that support Logitech force feedback racing wheel</li>\r\n	<li>Weight with cable: 1.66 pound (0.76 kilogram)</li>\r\n	<li>Six speed shifter and push down reverse: “H” pattern gear box for fast, smooth shifting.SYSTEM REQUIREMENTS Logitech G29 or G920 Driving Force Racing Wheel.Games that support Logitech Driving Force Shifter(not compatible with Playstation 3). Weight without cable 1.59 pounds. Weight with cable 1.66 pounds</li>\r\n	<li>Secure mounting: Built in clamps mount shifter securely to a table or racing rig.&nbsp;</li>\r\n</ul>\r\n', '', '195', '221', 'en', 40),
(46, 'Ring Fit Adventure For Nintendo Switch', '<p>Technical Details Brand Name Nintendo Item Weight 699 g Product Dimensions 6.6 x 33.5 x 32.8 cm Batteries: 1 Lithium ion batteries required. Item model number HACRAL3PA Hardware Platform Nintendo DS Operating System Nintendo Switch Lithium Battery Energy Content 1 watt_hours Lithium Battery Packaging Batteries contained in equipment Lithium Battery Weight 1 Grams Number Of Lithium Ion Cells 1</p>\r\n', '', '350', '380', 'en', 41),
(47, 'Sony PlayStation 4 Platinum Wireless Headset', '<p>- 7.1 Virtual Surround Sound</p>\r\n\r\n<p>- 3.5mm Audio Jack</p>\r\n\r\n<p>- 3D Audio Mode</p>\r\n', '', '365', '428', 'en', 42),
(48, 'Sony Wireless Headphone Gold For Ps4', '<p>- Brand : Sony</p>\r\n\r\n<p>- null : Gold</p>\r\n\r\n<p>- Connectivity : Wireless</p>\r\n\r\n<p>- Compatible with : Gaming Consoles</p>\r\n\r\n<p>- Microphone included : Yes</p>\r\n\r\n<p>- Noise Cancelling : No</p>\r\n\r\n<p>- Are batteries needed to power the product or is this product a battery : Yes</p>\r\n', '', '210', '248', 'en', 43),
(49, 'Sony PS4 Pro 1TB Console, Black', '<p>The Sony PS4 Pro lets you explore the vivid gaming world like never before. The Sony PlayStation 4 Pro takes you on an awe inspiring journey with a heightened visual and breathtaking audio experience. This PlayStation 4 Pro from Sony takes the gaming world to the next level. It is devised with cutting edge hardware elements and an optimized interface to offer a superior gaming experience. The system lets you get in touch with a deeply connected gaming community, thereby further enhancing the visual world of PS4 gaming for you. It has an x86 64 AMD Jaguar processor that runs all your games smoothly without any glitches. The 8GB GDDR5 RAM ensures lag free latency and optimal operations. This Sony PlayStation 4 Pro is equipped with a 1.84 TFLOPS AMD Radeon based graphics engine that runs all your graphics heavy games swiftly. For select PS4 games, this device supports faster frame rates and delivers super sharp action. You can even play games online with other PS4 players on this Sony PS4. It offers spectacular graphics that lets you explore the game world in such vivid detail for a heightened, immersive experience. With support for faster frame rates on select PS4 titles, the PS4 Pro offers super sharp and super fast gameplay. Additionally, this PlayStation 4 offers up to 4K streaming and 4K auto upscaling for video content.</p>\r\n\r\n<p>&nbsp;</p>\r\n', '', '1370', '1430', 'en', 44),
(50, 'Sony PlayStation 4 500GB Console (Black) with Extra Controller', '<p>- A Stunning New Design : A slimmer and lighter console with stylish new looks and packed with true PlayStation 4 power.</p>\r\n\r\n<p>- High Dynamic Range (HDR) Technology : Visuals are more realistic, strikingly vivid and truer to what the human eye sees in the real world.</p>\r\n\r\n<p>- The DualShock 4 wireless controller has been updated with a new look and feel, including a more visible, colourful light bar to put even more of the game into your hands.</p>\r\n\r\n<p>- Slick Interface : Fast, personal and easier to share, connect and play with friends.</p>\r\n\r\n<p>- Exclusive PS4 Features : Game-changing innovations and ways to keep playing, like Remote Play and Share Play.</p>\r\n\r\n<p>- More Connections : Features 2.4GHz/5GHz Wi-Fi mode options and HDMI 2.0 output.</p>\r\n', '', '1250', '1290', 'en', 45),
(51, 'Nintendo Switch Console - Animal Crossing', '<p>- Beloved franchise Animal Crossing gets ready for its Nintendo Switch Debut!</p>\r\n\r\n<p>- This special Nintendo Switch bundle has everything you need to start your new island life, including an island-themed console, dock, Joy-Con controllers and straps, as well as a download code for Animal Crossing: New Horizons!</p>\r\n\r\n<p>- If the hustle and bustle of modern life’s got you down, Tom Nook has a new business venture up his sleeve that he knows you’ll adore: the Nook Inc. Deserted Island Getaway Package! Sure, you’ve crossed paths with colourful characters near and far. Had a grand time as one of the city folk. May’ve even turned over a new leaf and dedicated yourself to public service! But deep down, isn’t there a part of you that longs for…freedom? Then perhaps a long walk on the beach of a deserted island, where a rich wealth of untouched nature awaits, is just what the doctor ordered!</p>\r\n\r\n<p>- Peaceful creativity and charm await as you roll up your sleeves and make your new life whatever you want it to be. Collect resources and craft everything from creature comforts to handy tools. Embrace your green thumb as you interact with flowers and trees in new ways. Set up a homestead where the rules of what goes indoors and out no longer apply. Make friends with new arrivals, enjoy the seasons, pole-vault across rivers as you explore, and more!</p>\r\n', '', '1780', '1849', 'en', 46),
(52, 'Nintendo Switch Extended Battery Life with Neon Blue and Neon Red Joy‑Con', '<p>- The Nintendo Switch comes with two Joy-Con, each of which can act as a standalone controller with an analogue stick, a full complement of face and shoulder buttons, built in motion-sensing, and \"HD Rumble\" technology. They can be inserted into the included Joy-Con Grip accessory, allowing them to be used like a traditional controller</p>\r\n\r\n<p>- Held comfortably in each hand, allowing for independent arm movement or shared between two players, allowing for instant multiplayer gaming. Thanks to the built-in kickstand, you can have two-player sessions in front of the TV or anywhere else.</p>\r\n', '', '1210', '1316', 'en', 47),
(53, 'Marvel\'s Iron Man - PlayStation VR with Move Controller PS4 ', '<p>\r\n<style type=\"text/css\"><!--td {border: 1px solid #ccc;}br {mso-data-placement:same-cell;}-->\r\n</style>\r\n- This bundle includes two PlayStation Move motion controllers and a physical copy of Marvel\'s Iron Man VR.<br />\r\n- Set Contains: CD move controller</p>\r\n\r\n<p>\r\n<style type=\"text/css\"><!--td {border: 1px solid #ccc;}br {mso-data-placement:same-cell;}-->\r\n</style>\r\n• Using two PlayStation® Move motion controllers** fire up Iron Man’s Repulsor Jets and blast into the skies with an arsenal of iconic Iron Man gear at your fingertips.<br />\r\n<br />\r\n• Face off against one of Iron Man’s greatest foes in high stakes, action-packed battles.<br />\r\n<br />\r\n• Upgrade tech in Tony Stark’s garage to customise Iron Man’s sleek armor and awesome abilities.</p>\r\n', '', '495', '550', 'en', 48),
(54, 'Sony PlayStation Classic', '<p>\r\n<style type=\"text/css\"><!--td {border: 1px solid #ccc;}br {mso-data-placement:same-cell;}-->\r\n</style>\r\n- PlayStation Classic comes with 20 pre loaded games including, Final Fantasy Vll, Jumping Flash, Ridge Racer Type 4, Tekken 3 and Wild Arms<br />\r\n- This mini Console is approximately 45 percent smaller than the original PlayStation<br />\r\n- Includes two wired Controllers, a virtual memory card and an HDMI cable</p>\r\n', '', '220', '300', 'en', 49),
(55, 'Red Dead Redemption 2 PlayStation 4', '<p>\r\n<style type=\"text/css\"><!--td {border: 1px solid #ccc;}br {mso-data-placement:same-cell;}-->\r\n</style>\r\n- Game Name : Red Dead Redemption 2<br />\r\n- Region : Free Region<br />\r\n- Brand : Rockstar</p>\r\n', '', '80', '100', 'en', 50),
(56, 'Thrustmaster T.Racing Scuderia Ferrari Edition Gaming Headset', '<p>\r\n<style type=\"text/css\"><!--td {border: 1px solid #ccc;}br {mso-data-placement:same-cell;}-->\r\n</style>\r\n- Officially licensed by Ferrari<br />\r\n- Exclusive design<br />\r\n- 2\"/50 mm analytic drivers allow for clear and accurate sound reproduction<br />\r\n- No saturation<br />\r\n- Sound pressure level of 116 dB SPL prevents sound distortion<br />\r\n- The perfect combination of audio performance and comfort<br />\r\n- With ear pad cushions crafted of memory foam and a gel layer for effective passive sound isolation<br />\r\n- High-performance<br />\r\n- Unidirectional noise-canceling microphone is detachable</p>\r\n', '', '360', '400', 'en', 51),
(57, 'Playstation Dualshock 4 Wireless Controller For 4 - Copper', '<p>\r\n<style type=\"text/css\"><!--td {border: 1px solid #ccc;}br {mso-data-placement:same-cell;}-->\r\n</style>\r\n- Precision Control: The enhanced feel, shape, and sensitivity of the DUALSHOCK 4 wireless controller offers players absolute control over all games on the PlayStation 4 system.<br />\r\n- Sharing at Your Fingertips: The addition of the SHARE button makes sharing your greatest gaming moments as easy as a press of a button. Upload gameplay videos and screenshots directly from your system or live-stream your gameplay, all without disturbing the game in progress.<br />\r\n- New Ways to Play: Revolutionary features like the touch pad, integrated light bar, and built-in speaker offer exciting new ways to experience and interact with your games, and its 3.5mm stereo headset jack offers a practical, personal audio solution for gamers who want to listen to their games in private.<br />\r\n- Charge Efficiently: The DUALSHOCK 4 wireless controller can be easily recharged by plugging it into your PlayStation 4 system, even when in rest mode, or with any standard charger using a USB cable (type-A to Micro-B Sold Separately)</p>\r\n', '', '220', '300', 'en', 52),
(58, 'Sony PS4 DualShock 4 Wireless Controller - Blue Crystal', '<p>\r\n<style type=\"text/css\"><!--td {border: 1px solid #ccc;}br {mso-data-placement:same-cell;}-->\r\n</style>\r\n- Wireless Controller<br />\r\n- Responsive Touch Pad<br />\r\n- Built-In Speaker<br />\r\n- Share Button<br />\r\n- Multiple Vibration Motors</p>\r\n', '', '220', '300', 'en', 53),
(59, 'Sony PS4 DualShock 4 Wireless Controller - Sunset Orange Classic', '<p>\r\n<style type=\"text/css\"><!--td {border: 1px solid #ccc;}br {mso-data-placement:same-cell;}-->\r\n</style>\r\n- Wireless Controller<br />\r\n- Responsive Touch Pad<br />\r\n- Built-In Speaker<br />\r\n- Share Button<br />\r\n- Multiple Vibration Motors</p>\r\n', '', '220', '300', 'en', 54),
(60, 'PS4 DualShock 4 Wireless Controller - Red Crystal', '<p>\r\n<style type=\"text/css\"><!--td {border: 1px solid #ccc;}br {mso-data-placement:same-cell;}-->\r\n</style>\r\n- Wireless Controller<br />\r\n- Responsive Touch Pad<br />\r\n- Built-In Speaker<br />\r\n- Share Button<br />\r\n- Multiple Vibration Motors</p>\r\n', '', '220', '300', 'en', 55),
(61, 'Razer Nari Ultimate Wireless 7.1 Surround Sound Gaming Headset', '<p>\r\n<style type=\"text/css\"><!--td {border: 1px solid #ccc;}br {mso-data-placement:same-cell;}-->\r\n</style>\r\nRazer Hypersense Haptic Feedback for Unparalleled Immersion: Provides industry-leading audio realism for intense, in-game immersion and positional accuracy coupled with THX Spatial 7.1 surround sound<br />\r\n- Lightweight &amp; Auto-Adjusting Headband for Extended Gaming Sessions: The Nari Ultimate adapts to the shape of the user\'s head for convenient comfort. Frequency response 20 Hz – 20 kHz<br />\r\n- Retractable Mic with Audio Adjustment: Tune game/chat balance for the perfect mix of game audio and team communication; also includes a volume adjustment wheel and mic mute button directly on the headset<br />\r\n- Soft Cloth Cushions with Cooling Gel: Reduces heat build-up while providing comfort and sound isolation for hours of comfort<br />\r\n- Compatibility: Wireless connection with PC and PS4. Wired compatibility via 3.5mm cable with PC, PS4, Nintendo Switch, and mobile devices<br />\r\n- Ultimate Personalization &amp; Gaming Immersion with Razer Chroma: Includes 16.8 million color combinations-</p>\r\n', '', '850', '900', 'en', 56),
(62, 'Razer Huntsman Elite - Mechanical Gaming Keyboard', '<p>\r\n<style type=\"text/css\"><!--td {border: 1px solid #ccc;}br {mso-data-placement:same-cell;}-->\r\n</style>\r\nThe Razer Huntsman Elite introduces the Razer Opto-Mechanical Switch, utilising optical technology for unmatched speed and a key stabiliser bar so every keypress is precise and accurate. Combined with a switch design, it’s the first clicky switch that actuates and resets at the exact same point for rapid performance. The keyboard also features a programmable digital dial for quick access to functions. Personalise settings with hybrid on-board memory and cloud storage. Comes with an ergonomic wrist rest for long-lasting comfort. Fully programmable keys with on-the-fly macro recording.<br />\r\n<br />\r\nSet Contains:<br />\r\nRazer Huntsman Elite Mechanical Gaming Keyboard (with Opto-Mechanical Switches, Multifunctional Digital Knob, RGB Chroma Lighting, QWERTY Layout)</p>\r\n', '', '820', '1000', 'en', 57),
(63, 'Razer Nari Ultimate Wireless 7.1 Surround Sound Gaming Headset', '<p>\r\n<style type=\"text/css\"><!--td {border: 1px solid #ccc;}br {mso-data-placement:same-cell;}-->\r\n</style>\r\n- Hyper sense technology to feel the action for an additional layer of immersion<br />\r\n- THX Spatial Audio for next-gen surround sound<br />\r\n- Cooling Gel-Infused cushions to stay cool on gaming marathons.</p>\r\n', '', '750', '850', 'en', 58),
(64, 'Xbox One White Wireless Controller (White)', '<p>\r\n<style type=\"text/css\"><!--td {border: 1px solid #ccc;}br {mso-data-placement:same-cell;}-->\r\n</style>\r\n- Experience the enhanced comfort and feel of the new Xbox Wireless Controller<br />\r\n- Stay on target with textured grip<br />\r\n- Includes Bluetooth technology for gaming on Windows 10 PCs, tablets, and phones<br />\r\n- Get up to twice the wireless range than previous controllers</p>\r\n', '', '190', '250', 'en', 59),
(65, 'eFootball PES 2021 Season Update (PS4)', '<p>\r\n<style type=\"text/css\"><!--td {border: 1px solid #ccc;}br {mso-data-placement:same-cell;}-->\r\n</style>\r\nefootball PES 2021 season update delivers all the critically acclaimed features and gameplay from efootball PES 2020 that was awarded \"best sports game\" At E3 2019, plus more. Boasting the latest player and Club data for the new Season, the game also includes the exclusive UEFA Euro 2020 mode and content in advance of the rescheduled real-life tournament.As the PES franchise celebrates its 25th anniversary since its debut in 1995 and over 100 million copies sold, Konami invites football fans all over the world to join us once again as we head out onto the pitch for a new action-packed Season of football and prepare for the future.</p>\r\n', '', '850', '1000', 'en', 60),
(66, 'Elite Series 2 Controller Xbox One (Xbox One)', '<p>\r\n<style type=\"text/css\"><!--td {border: 1px solid #ccc;}br {mso-data-placement:same-cell;}-->\r\n</style>\r\nOptimised for you, Limitless Customization, Extend your gameplay, Built for performance.<br />\r\n<br />\r\nSet Contains:<br />\r\nController,InterChangable Dpads,Interchangable Thumbsticks,Paddles,Carrying case,Charging dock,USB C Cable</p>\r\n', '', '630', '700', 'en', 61),
(67, 'Razer Raiju Tournament Edition, Wireless and Wired Gaming Controller', '<p>\r\n<style type=\"text/css\"><!--td {border: 1px solid #ccc;}br {mso-data-placement:same-cell;}-->\r\n</style>\r\n- Works with PS4 and PC (Windows 7 and above)<br />\r\n- Bluetooth/Wired connection<br />\r\n- Mobile app for easy configuration<br />\r\n- Ergonomic multi-function button layout</p>\r\n', '', '450', '550', 'en', 62),
(68, 'Tom Clancy\'s Rainbow Six Siege - Deluxe Edition - Sony PlayStation 4', '<p>\r\n<style type=\"text/css\"><!--td {border: 1px solid #ccc;}br {mso-data-placement:same-cell;}-->\r\n</style>\r\nTom Clancy\'s Rainbow Six Siege Deluxe Edition includes the full game and the 8 Year 1 Operators (Frost, Buck, Valkyrie, Blackbeard, Caveira, Capitão, Hibana and Echo).</p>\r\n', '', '45', '100', 'en', 63),
(69, 'Super Mario 3D All-Stars (Nintendo Switch)', '<p>\r\n<style type=\"text/css\"><!--td {border: 1px solid #ccc;}br {mso-data-placement:same-cell;}-->\r\n</style>\r\n3 Games, 1 Star-Studded Collection!</p>\r\n', '', '210', '300', 'en', 64),
(70, 'Logitech Driving Force G29 Racing Wheel for PlayStation 3 and PC', '<p>\r\n<style type=\"text/css\"><!--td {border: 1px solid #ccc;}br {mso-data-placement:same-cell;}-->\r\n</style>\r\n- Dual-Motor Force Feedback<br />\r\n- Helical Gearing With Anti-Backlash<br />\r\n- Responsive Floor Pedal Unit<br />\r\n- Logitech Driving Force can also be used with the latest XBox One<br />\r\n- It comes with dual-motor force feedback, on-wheel controls, and responsive pedals</p>\r\n', '', '820', '900', 'en', 65),
(71, 'PS4 Limited Edition The Last of Us Part II Gold Wireless Headset', '<p>\r\n<style type=\"text/css\"><!--td {border: 1px solid #ccc;}br {mso-data-placement:same-cell;}-->\r\n</style>\r\n- Built for gamers to experience sounds in stunning 7.1 virtual surround and chat with friends through the hidden, noise-canceling microphones.<br />\r\n- Headset Companion App-Download the free app from PlayStation Store to optimize your headset with audio modes hand-tuned by game developers for their games.<br />\r\n- Wireless use with PlayStation 4 and personal computer or use the 3.5mm audio cable to connect with PlayStation VR and mobile devices.<br />\r\n- Designed with comfort in mind and made to be used comfortably along with PlayStation VR.<br />\r\n- The Last of Us Part II game not included.<br />\r\n- This limited edition headset comes in a steel black matte with dark red interior headset cups. An embossed fern on the inside rim and the “THE LAST OF US PART II” logo on the band.</p>\r\n', '', '350', '400', 'en', 66),
(72, 'HG Extreme 4 in 1 Essential Gaming Kit', '<p>\r\n<style type=\"text/css\"><!--td {border: 1px solid #ccc;}br {mso-data-placement:same-cell;}-->\r\n</style>\r\nHG Extreme 4 in 1 Essential Gaming Kit</p>\r\n', '', '95', '200', 'en', 67),
(73, 'Mario Kart Racing Wheel Pro Mini for Nintendo Switch', '<p>\r\n<style type=\"text/css\"><!--td {border: 1px solid #ccc;}br {mso-data-placement:same-cell;}-->\r\n</style>\r\n- Officially licensed by Nintendo<br />\r\n- Fully featured racing wheel for Mario Kart &amp; racing titles<br />\r\n- Ergonomic design based on real steering wheels<br />\r\n- Includes paddles and convenient onboard controls</p>\r\n', '', '250', '400', 'en', 68),
(74, 'UNCHARTED THE NATHAN DRAKE COLLECTION PlayStation 4', '<p>\r\n<style type=\"text/css\"><!--td {border: 1px solid #ccc;}br {mso-data-placement:same-cell;}-->\r\n</style>\r\nFrom the groundbreaking storytellers at Naughty Dog, comes the genre-defining epic that revolutionized adventure storytelling, rebuilt by Bluepoint Games with the power of the PS4 system. Experience one of the most revered game series of all time as you follow the perilous journey of Nathan Drake across the globe, from humble beginnings to extraordinary discoveries.</p>\r\n', '', '40', '100', 'en', 69),
(75, 'Nintendo Switch Lite (Yellow)', '<p>\r\n<style type=\"text/css\"><!--td {border: 1px solid #ccc;}br {mso-data-placement:same-cell;}-->\r\n</style>\r\nIt\'s easy to take your favourite games with you: Nintendo Switch Lite can play all Nintendo Switch software that supports handheld mode. If a game supports Joy-Con functions such as HD rumble, IR Motion Camera and Joy-Con motion sensors, some features will not be available using Nintendo Switch Lite alone. Joy-Con controllers (sold separately) are required to use these features. For games that do not support handheld mode, players can wireless connect Joy-Con controllers (sold separately) to Nintendo Switch Lite. In these cases, users will need to have a device to recharge Joy-Con controllers, such as the Joy-Con charging grip. To find play mode compatibility information for specific games, please refer to the product packaging or Nintendo eShop.</p>\r\n', '', '750', '900', 'en', 70),
(76, 'Tom Clancys The Division 2 (PS4)', '<p>\r\n<style type=\"text/css\"><!--td {border: 1px solid #ccc;}br {mso-data-placement:same-cell;}-->\r\n</style>\r\nGame Name : Division 2 (PS4)<br />\r\nRegion : Region 2Brand : Ubisoft</p>\r\n', '', '30', '40', 'en', 71),
(77, 'SteelSeries Arctis 1 Wireless Cyberpunk 2077 Limited Edition Gaming Headset', '<p>\r\n<style type=\"text/css\"><!--td {border: 1px solid #ccc;}br {mso-data-placement:same-cell;}-->\r\n</style>\r\nInspired by the in-game ability to see the net overlaid on the real world, the Netrunner Edition is part of the official Cyberpunk 2077 headset collection by SteelSeries Features SteelSeries lossless 2.4GHz wireless for ultra-low latency wireless connectivity on PC, PS4, Android, and Switch/Switch Lite Detachable clear cast noise canceling microphone with natural sounding clarity, discovered-certified Same high-performance speaker drivers as the award-winning Arctis 7, revealing every detail Padded AirWeave ear cushions and adjustable, steel-reinforced headband provide lasting comfort and durability.<br />\r\n<br />\r\nSet Contains:<br />\r\nCONTROLLER</p>\r\n', '', '800', '1000', 'en', 72),
(78, 'Hyperkin Duke Wired Controller for Xbox One (Black)', '<p>\r\n<style type=\"text/css\"><!--td {border: 1px solid #ccc;}br {mso-data-placement:same-cell;}-->\r\n</style>\r\n- Brand : Hyperkin<br />\r\n- Compatible with : Xbox One<br />\r\n- Accessory Type : Controllers</p>\r\n', '', '95', '150', 'en', 73),
(79, 'Hyperkin Duke Wired Controller for Xbox One (Green)', '<p>\r\n<style type=\"text/css\"><!--td {border: 1px solid #ccc;}br {mso-data-placement:same-cell;}-->\r\n</style>\r\n- Brand : Hyperkin<br />\r\n- Compatible with : Xbox One<br />\r\n- Accessory Type : Controllers</p>\r\n', '', '95', '200', 'en', 74),
(80, 'Microsoft Xbox One X 1TB', '<p>\r\n<style type=\"text/css\"><!--td {border: 1px solid #ccc;}br {mso-data-placement:same-cell;}-->\r\n</style>\r\n- Play 4K titles the way they were meant to be played at 60 fps with this beast of a console<br />\r\n- The Xbox One X has earned its title as the most powerful console<br />\r\n- The Xbox One X console is second to none in terms of speed and graphical performance<br />\r\n- Games play better on Xbox One X - Experience 40% more power than any other console<br />\r\n- 6 teraflops of graphical processing power and a 4K Blu-ray player provides more immersive gaming and entertainment<br />\r\n- Play with the greatest community of gamers on the most advanced multiplayer network<br />\r\n- Works with all your Xbox One games and accessories</p>\r\n', '', '1100', '1300', 'en', 75),
(81, 'Microsoft Xbox One X 1TB Cyberpunk 2077 Limited Edition Bundle', '<p>\r\n<style type=\"text/css\"><!--td {border: 1px solid #ccc;}br {mso-data-placement:same-cell;}-->\r\n</style>\r\nOwn the Xbox One X Cyberpunk 2077 Limited Edition Bundle and step into the shoes of an urban mercenary equipped with cybernetic enhancements in a massive, ever-evolving open world. Enjoy a full-game digital download of Cyberpunk 2077, as well as the future first expansion release, on the 1TB limited edition console that uses textures, glowing elements, bright panels, and colour shift effects to capture the vibrant grit and technical enhancements of Night City. Get your hands on the Cyberpunk 2077 Limited Edition Wireless Controller featuring a half natural, half cyber-enhancement design and a 1-Month Xbox Game Pass Ultimate trial that includes Xbox Live Gold so you can play console online multiplayer with friends.<br />\r\n<br />\r\nSet Contains:<br />\r\nConsole, Controller, Power cables, Game kit</p>\r\n', '', '1750', '2000', 'en', 76);

-- --------------------------------------------------------

--
-- Table structure for table `rating`
--

CREATE TABLE `rating` (
  `id` int(10) NOT NULL,
  `rating` int(10) NOT NULL,
  `user_id` int(10) NOT NULL,
  `product_id` int(10) NOT NULL,
  `review` varchar(100) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rating`
--

INSERT INTO `rating` (`id`, `rating`, `user_id`, `product_id`, `review`, `created_at`) VALUES
(1, 0, 1, 43, 'Tina Wang, who was born and raised in Taiwan, is happy to now call New York her Taiwan. Tina majored', '2020-10-01 15:53:35'),
(2, 0, 1, 31, 'This Xbox Wireless Controller immerses you in a future where technology is the key to survival.', '2020-10-01 15:54:18'),
(3, 0, 1, 31, 'This Xbox Wireless Controller immerses you in a future where technology is the key to survival.', '2020-10-01 15:54:22'),
(4, 4, 1, 31, 'rating', '2020-10-01 15:56:05'),
(5, 3, 1, 31, 'Tina Wang, who was born and raised in Taiwan, is happy to now call New York her Taiwan. Tina majored', '2020-10-01 15:57:36'),
(6, 3, 1, 30, 'Wireless Controller ', '2020-10-01 16:48:27'),
(7, 4, 1, 39, 'This is tesht ', '2020-10-01 17:00:57');

-- --------------------------------------------------------

--
-- Table structure for table `seo_pages`
--

CREATE TABLE `seo_pages` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `seo_pages`
--

INSERT INTO `seo_pages` (`id`, `name`) VALUES
(1, 'home'),
(2, 'checkout'),
(3, 'contacts'),
(4, 'blog');

-- --------------------------------------------------------

--
-- Table structure for table `seo_pages_translations`
--

CREATE TABLE `seo_pages_translations` (
  `id` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `description` varchar(200) NOT NULL,
  `abbr` varchar(5) NOT NULL,
  `page_type` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `seo_pages_translations`
--

INSERT INTO `seo_pages_translations` (`id`, `title`, `description`, `abbr`, `page_type`) VALUES
(1, 'Nyc Games', 'Nyc Games Pvt Ltd ..!!', 'en', 'home'),
(2, 'Nyc Games', 'Nyc Games', 'en', 'checkout'),
(3, 'Nyc Games', 'Nyc Games Pvt Ltd ..!!', 'en', 'contacts'),
(4, 'Nyc Games', 'Nyc Games Pvt Ltd ..!!', 'en', 'blog');

-- --------------------------------------------------------

--
-- Table structure for table `shop_categories`
--

CREATE TABLE `shop_categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `sub_for` int(11) NOT NULL,
  `position` int(10) UNSIGNED NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `shop_categories`
--

INSERT INTO `shop_categories` (`id`, `sub_for`, `position`) VALUES
(30, 0, 0),
(13, 0, 0),
(32, 0, 0),
(15, 0, 0),
(16, 0, 0),
(17, 0, 0),
(18, 0, 0),
(19, 0, 0),
(20, 0, 0),
(21, 0, 0),
(22, 0, 0),
(23, 0, 0),
(24, 0, 0),
(25, 0, 0),
(26, 0, 0),
(27, 0, 0),
(28, 0, 0),
(31, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `shop_categories_translations`
--

CREATE TABLE `shop_categories_translations` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `image` varchar(100) DEFAULT NULL,
  `abbr` varchar(5) NOT NULL,
  `for_id` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `shop_categories_translations`
--

INSERT INTO `shop_categories_translations` (`id`, `name`, `image`, `abbr`, `for_id`) VALUES
(24, 'Gaming accessories ', 'game_accessories_icon.png', 'en', 30),
(25, 'Game', 'game_icon.png', 'en', 31),
(26, 'Console', 'console_icon.png', 'en', 32);

-- --------------------------------------------------------

--
-- Table structure for table `subscribed`
--

CREATE TABLE `subscribed` (
  `id` int(10) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `browser` varchar(255) NOT NULL,
  `ip` varchar(255) NOT NULL,
  `time` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `textual_pages_tanslations`
--

CREATE TABLE `textual_pages_tanslations` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` longtext NOT NULL,
  `abbr` varchar(5) NOT NULL,
  `for_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(32) NOT NULL,
  `email` varchar(100) NOT NULL,
  `notify` tinyint(1) NOT NULL DEFAULT '0' COMMENT 'notifications by email',
  `last_login` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `notify`, `last_login`) VALUES
(1, 'admin', '4297f44b13955235245b2497399d7a93', 'naresh@nycgames.com', 0, 1602046716),
(2, 'rakesh ji', '4297f44b13955235245b2497399d7a93', 'rakesh@nycgames.co', 0, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users_public`
--

CREATE TABLE `users_public` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `password` varchar(40) NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users_public`
--

INSERT INTO `users_public` (`id`, `name`, `email`, `phone`, `password`, `created`) VALUES
(1, 'Naresh Developer', 'naresh.ahirwar.tma@gmail.com', '9354758540', '4297f44b13955235245b2497399d7a93', '2020-09-14 06:31:03'),
(2, 'Rakesh tma', 'rakesh@nycgames.co', '9354758540', '4297f44b13955235245b2497399d7a93', '2020-09-14 07:16:56');

-- --------------------------------------------------------

--
-- Table structure for table `value_store`
--

CREATE TABLE `value_store` (
  `id` int(10) UNSIGNED NOT NULL,
  `thekey` varchar(50) NOT NULL,
  `value` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `value_store`
--

INSERT INTO `value_store` (`id`, `thekey`, `value`) VALUES
(1, 'sitelogo', 'NewLogo.jpg'),
(2, 'navitext', ''),
(3, 'footercopyright', 'Powered by NYC GAMES© All right reserved. '),
(4, 'contactspage', 'Hello dear client'),
(5, 'footerContactAddr', ''),
(6, 'footerContactEmail', 'support@nycgames.co'),
(7, 'footerContactPhone', ''),
(8, 'googleMaps', '42.671840, 83.279163'),
(9, 'footerAboutUs', ''),
(10, 'footerSocialFacebook', ''),
(11, 'footerSocialTwitter', ''),
(12, 'footerSocialGooglePlus', ''),
(13, 'footerSocialPinterest', ''),
(14, 'footerSocialYoutube', ''),
(16, 'contactsEmailTo', 'contacts@nycgames.co'),
(17, 'shippingOrder', '1'),
(18, 'addJs', ''),
(19, 'publicQuantity', '0'),
(20, 'paypal_email', ''),
(21, 'paypal_sandbox', '0'),
(22, 'publicDateAdded', '0'),
(23, 'googleApi', ''),
(24, 'template', 'nycgames'),
(25, 'cashondelivery_visibility', '1'),
(26, 'showBrands', '0'),
(27, 'showInSlider', '0'),
(28, 'codeDiscounts', '1'),
(29, 'virtualProducts', '0'),
(30, 'multiVendor', '0'),
(31, 'outOfStock', '0'),
(32, 'hideBuyButtonsOfOutOfStock', '0'),
(33, 'moreInfoBtn', ''),
(34, 'refreshAfterAddToCart', '0');

-- --------------------------------------------------------

--
-- Table structure for table `vendors`
--

CREATE TABLE `vendors` (
  `id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `url` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `vendors_orders`
--

CREATE TABLE `vendors_orders` (
  `id` int(10) UNSIGNED NOT NULL,
  `order_id` int(11) NOT NULL,
  `products` text NOT NULL,
  `date` int(10) UNSIGNED NOT NULL,
  `referrer` varchar(255) NOT NULL,
  `clean_referrer` varchar(255) NOT NULL,
  `payment_type` varchar(255) NOT NULL,
  `paypal_status` varchar(10) DEFAULT NULL,
  `processed` tinyint(1) NOT NULL DEFAULT '0',
  `viewed` tinyint(1) NOT NULL DEFAULT '0',
  `confirmed` tinyint(1) NOT NULL DEFAULT '0',
  `discount_code` varchar(20) NOT NULL,
  `vendor_id` int(10) UNSIGNED NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `vendors_orders_clients`
--

CREATE TABLE `vendors_orders_clients` (
  `id` int(11) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(30) NOT NULL,
  `address` text NOT NULL,
  `city` varchar(20) NOT NULL,
  `post_code` varchar(10) NOT NULL,
  `notes` text NOT NULL,
  `for_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `active_pages`
--
ALTER TABLE `active_pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bank_accounts`
--
ALTER TABLE `bank_accounts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog_posts`
--
ALTER TABLE `blog_posts`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `blog_translations`
--
ALTER TABLE `blog_translations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `confirm_links`
--
ALTER TABLE `confirm_links`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cookie_law`
--
ALTER TABLE `cookie_law`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cookie_law_translations`
--
ALTER TABLE `cookie_law_translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQUE` (`abbr`,`for_id`) USING BTREE;

--
-- Indexes for table `discount_codes`
--
ALTER TABLE `discount_codes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `history`
--
ALTER TABLE `history`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `keys`
--
ALTER TABLE `keys`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `languages`
--
ALTER TABLE `languages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders_clients`
--
ALTER TABLE `orders_clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products_translations`
--
ALTER TABLE `products_translations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rating`
--
ALTER TABLE `rating`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seo_pages`
--
ALTER TABLE `seo_pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seo_pages_translations`
--
ALTER TABLE `seo_pages_translations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shop_categories`
--
ALTER TABLE `shop_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shop_categories_translations`
--
ALTER TABLE `shop_categories_translations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subscribed`
--
ALTER TABLE `subscribed`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `textual_pages_tanslations`
--
ALTER TABLE `textual_pages_tanslations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users_public`
--
ALTER TABLE `users_public`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `value_store`
--
ALTER TABLE `value_store`
  ADD PRIMARY KEY (`id`),
  ADD KEY `key` (`thekey`);

--
-- Indexes for table `vendors`
--
ALTER TABLE `vendors`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `unique` (`email`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `vendors_orders`
--
ALTER TABLE `vendors_orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vendors_orders_clients`
--
ALTER TABLE `vendors_orders_clients`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `active_pages`
--
ALTER TABLE `active_pages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `bank_accounts`
--
ALTER TABLE `bank_accounts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `blog_posts`
--
ALTER TABLE `blog_posts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `blog_translations`
--
ALTER TABLE `blog_translations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `confirm_links`
--
ALTER TABLE `confirm_links`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `cookie_law`
--
ALTER TABLE `cookie_law`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cookie_law_translations`
--
ALTER TABLE `cookie_law_translations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `discount_codes`
--
ALTER TABLE `discount_codes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `history`
--
ALTER TABLE `history`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `keys`
--
ALTER TABLE `keys`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `languages`
--
ALTER TABLE `languages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `orders_clients`
--
ALTER TABLE `orders_clients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

--
-- AUTO_INCREMENT for table `products_translations`
--
ALTER TABLE `products_translations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;

--
-- AUTO_INCREMENT for table `rating`
--
ALTER TABLE `rating`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `seo_pages`
--
ALTER TABLE `seo_pages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `seo_pages_translations`
--
ALTER TABLE `seo_pages_translations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `shop_categories`
--
ALTER TABLE `shop_categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `shop_categories_translations`
--
ALTER TABLE `shop_categories_translations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `subscribed`
--
ALTER TABLE `subscribed`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `textual_pages_tanslations`
--
ALTER TABLE `textual_pages_tanslations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users_public`
--
ALTER TABLE `users_public`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `value_store`
--
ALTER TABLE `value_store`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `vendors`
--
ALTER TABLE `vendors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `vendors_orders`
--
ALTER TABLE `vendors_orders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `vendors_orders_clients`
--
ALTER TABLE `vendors_orders_clients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
