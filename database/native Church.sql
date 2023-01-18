-- phpMyAdmin SQL Dump
-- version 4.7.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 07, 2017 at 09:14 AM
-- Server version: 5.6.38
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hillsoft_real`
--

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int(11) NOT NULL,
  `title` varchar(60) NOT NULL,
  `detail` varchar(500) NOT NULL,
  `date` varchar(60) NOT NULL,
  `time` varchar(30) NOT NULL,
  `venue` varchar(120) NOT NULL,
  `phone` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `title`, `detail`, `date`, `time`, `venue`, `phone`) VALUES
(3, 'There are many variations of passages', 'Please fill details to save a new Event', '13 JUNE', '2PM', 'Church', ''),
(4, 'ECOWAS CONFERENCE', 'Please fill details to save a new Conference.  Please fill details to save a new Conference.  Please fill details to save a new Conference.  Please fill details to save a new Conference.  Please fill details to save a new Conference. Please fill details to save a new Conference. Please fill details to save a new Conference.  Please fill details to save a new Conference.  Please fill details to save a new Conference. ', '12-10-2016', '16-10-2016', 'Las Vegas, US', ''),
(5, 'Food For nations', '<p>About Conference&nbsp; About Conference&nbsp; About Conference &nbsp; About Conference &nbsp; About Conference &nbsp; About Conference &nbsp; About Conference &nbsp; About Conference</p>\r\n', '10-12-2016', '16-10-2016', 'Las Vegas, US', ''),
(6, 'Going to church', 'Here is everything about the site', '3rd, June 2017', '4PM', 'Akure', ''),
(7, 'Efac National Convention', '<p>Here you go! In step one you will fill out a simple form to get a digital wallet for your Kringle coins. Once you click &ldquo;Submit,&rdquo; you&rsquo;ll magically get an email. Step two will be to verify your email address; we want to make sure that you get your gift and not somebody else. We promise all of your information will be secure. We will never spam you, or sell your information to any third party. To collect 100,000 Kringle coins you need to fill out this form and submit it. Go ah', '16th -  20th August, 2017', '3PM', 'Orlu', '08138652645'),
(8, 'Go ahead and do that now! ', '<p>Here you go! In step one you will fill out a simple form to get a digital wallet for your Kringle coins. Once you click &ldquo;Submit,&rdquo; you&rsquo;ll magically get an email. Step two will be to verify your email address; we want to make sure that you get your gift and not somebody else. We promise all of your information will be secure. We will never spam you, or sell your information to any third party. To collect 100,000 Kringle coins you need to fill out this form and submit it. Go ah', '16th -  20th August, 2017', '3PM', 'Akure', '08138652645'),
(9, 'NATIONAL CONVENTION, ORLU 2017', '', 'MONDAY 14 - THURSDAY 17 AUGUST', '', '', ''),
(10, 'NATIONAL CONVENTION, ORLU 2017', '', 'MONDAY 14 - THURSDAY 17 AUGUST', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `excos`
--

CREATE TABLE `excos` (
  `id` int(11) NOT NULL,
  `name` varchar(75) NOT NULL,
  `office` varchar(75) NOT NULL,
  `zone` varchar(75) NOT NULL,
  `phone` varchar(12) NOT NULL,
  `email` varchar(75) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `excos`
--

INSERT INTO `excos` (`id`, `name`, `office`, `zone`, `phone`, `email`) VALUES
(1, 'Rt. Rev\'d Okeke', 'National Chiarman', 'Orlu', '08022445353', 'okekert@efac.com');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(11) NOT NULL,
  `caption` varchar(225) NOT NULL,
  `file` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `caption`, `file`) VALUES
(1, 'With the archbishop of Abuja', 'efac_e5aad374e4121ea095d1f563f74341a5.png'),
(2, 'I was there that day', 'efac_084c3c27caa2e61b414315bfe7c2069c.jpg'),
(3, 'another great photo', 'efac_55b922a901f47aaa9495f6f2fd9d943c.jpg'),
(4, 'pic', 'efac_7172d7f68b11db6bd53584db6d5fa812.png'),
(5, 'picc', 'efac_023a2f6ef5c6ee9d7303c723740d83a5.jpg'),
(6, 'drfd', 'efac_4b2a2a65957779d4bcefbb1cabfd103c.jpg'),
(7, 'rdtfyg', 'efac_96c8ddc28967b257c1d559bf98fe8695.jpg'),
(8, 'wert', 'efac_ff8492b50d9acf59e5bf05bc54ae8be8.jpg'),
(9, 'test', 'efac_509e61f6e194de4165807a5f0f1eaf53.jpg'),
(10, 'jjj', 'efac_069f9a19d87fbcdd81e593e834df8d63.php'),
(11, 'hhhn', 'efac_0c24ccfe77e998daf3bd355f01f61c35.php');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(70) NOT NULL,
  `news_title` varchar(200) NOT NULL,
  `news_detail` varchar(5000) NOT NULL,
  `file` varchar(150) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `news_title`, `news_detail`, `file`, `date`) VALUES
(2, 'I Love Lagos', 'Here is the matter with us', 'efac_e2e8b87165eff6a650f4f2b86fe86ee8.png', '2017-07-26'),
(3, 'I Love Lagos', 'Here is the matter with us', 'efac_e2e8b87165eff6a650f4f2b86fe86ee8.png', '2017-07-26'),
(4, 'we will create one for you, watch your email ', '<p>Here you go! In step one you will fill out a simple form to get a digital wallet for your Kringle coins. Once you click &ldquo;Submit,&rdquo; you&rsquo;ll magically get an email. Step two will be to verify your email address; we want to make sure that you get your gift and not somebody else. We promise all of your information will be secure. We will never spam you, or sell your information to any third party. To collect 100,000 Kringle coins you need to fill out this form and submit it. Go ahead and do that now!</p>\r\n', 'efac_af0474747681f1b98abcfd44ecf1420b.jpg', '2017-07-27'),
(5, 'we will create one for you, watch your email ', '<p>Here you go! In step one you will fill out a simple form to get a digital wallet for your Kringle coins. Once you click &ldquo;Submit,&rdquo; you&rsquo;ll magically get an email. Step two will be to verify your email address; we want to make sure that you get your gift and not somebody else. We promise all of your information will be secure. We will never spam you, or sell your information to any third party. To collect 100,000 Kringle coins you need to fill out this form and submit it. Go ahead and do that now!</p>\r\n', 'efac_af0474747681f1b98abcfd44ecf1420b.jpg', '2017-07-27'),
(6, ' Efac Admin Panel. All Rights Reserved | Design by Hillsofts.', '<p>Here you go! In step one you will fill out a simple form to get a digital wallet for your Kringle coins. Once you click &ldquo;Submit,&rdquo; you&rsquo;ll magically get an email. Step two will be to verify your email address; we want to make sure that you get your gift and not somebody else. We promise all of your information will be secure. We will never spam you, or sell your information to any third party. To collect 100,000 Kringle coins you need to fill out this form and submit it. Go ahead and do that now!&nbsp;</p>\r\n\r\n<p>Here you go! In step one you will fill out a simple form to get a digital wallet for your Kringle coins. Once you click &ldquo;Submit,&rdquo; you&rsquo;ll magically get an email. Step two will be to verify your email address; we want to make sure that you get your gift and not somebody else. We promise all of your information will be secure. We will never spam you, or sell your information to any third party. To collect 100,000 Kringle coins you need to fill out this form and submit it. Go ahead and do that now!</p>\r\n', 'efac_c2bfecc9d713311db7f328956f3ac929.jpg', '2017-07-27'),
(7, ' Efac Admin Panel. All Rights Reserved | Design by Hillsofts.', '<p>Here you go! In step one you will fill out a simple form to get a digital wallet for your Kringle coins. Once you click &ldquo;Submit,&rdquo; you&rsquo;ll magically get an email. Step two will be to verify your email address; we want to make sure that you get your gift and not somebody else. We promise all of your information will be secure. We will never spam you, or sell your information to any third party. To collect 100,000 Kringle coins you need to fill out this form and submit it. Go ahead and do that now!&nbsp;</p>\r\n\r\n<p>Here you go! In step one you will fill out a simple form to get a digital wallet for your Kringle coins. Once you click &ldquo;Submit,&rdquo; you&rsquo;ll magically get an email. Step two will be to verify your email address; we want to make sure that you get your gift and not somebody else. We promise all of your information will be secure. We will never spam you, or sell your information to any third party. To collect 100,000 Kringle coins you need to fill out this form and submit it. Go ahead and do that now!</p>\r\n', 'efac_c2bfecc9d713311db7f328956f3ac929.jpg', '2017-07-27'),
(8, 'Lorem ipsum dolor sit amet, consectetur adipiscing ', '<p>Here you go! In step one you will fill out a simple form to get a digital wallet for your Kringle coins. Once you click &ldquo;Submit,&rdquo; you&rsquo;ll magically get an email. Step two will be to verify your email address; we want to make sure that you get your gift and not somebody else. We promise all of your information will be secure. We will never spam you, or sell your information to any third party. To collect 100,000 Kringle coins you need to fill out this form and submit it. Go ahead and do that now!</p>\r\n\r\n<p>Here you go! In step one you will fill out a simple form to get a digital wallet for your Kringle coins. Once you click &ldquo;Submit,&rdquo; you&rsquo;ll magically get an email. Step two will be to verify your email address; we want to make sure that you get your gift and not somebody else. We promise all of your information will be secure. We will never spam you, or sell your information to any third party. To collect 100,000 Kringle coins you need to fill out this form and submit it. Go ahead and do that now!</p>\r\n', 'efac_5560263ef228c015be7f6dfd62aeaf28.png', '2017-07-27');

-- --------------------------------------------------------

--
-- Table structure for table `quote`
--

CREATE TABLE `quote` (
  `id` int(11) NOT NULL,
  `quote` varchar(300) NOT NULL,
  `quote_by` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `quote`
--

INSERT INTO `quote` (`id`, `quote`, `quote_by`) VALUES
(1, 'For God did not send his Son into the world to condemn the world, but to save the world through him.', ' John 3:17');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(11) NOT NULL,
  `site_name` varchar(45) NOT NULL,
  `site_title` varchar(60) NOT NULL,
  `email` varchar(60) NOT NULL,
  `site_desc` varchar(350) NOT NULL,
  `site_keyword` varchar(250) NOT NULL,
  `google_code` varchar(1000) NOT NULL,
  `street` varchar(100) NOT NULL,
  `city` varchar(60) NOT NULL,
  `country` varchar(50) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `facebook` varchar(45) NOT NULL,
  `twitter` varchar(34) NOT NULL,
  `linkedin` varchar(45) NOT NULL,
  `status` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `site_name`, `site_title`, `email`, `site_desc`, `site_keyword`, `google_code`, `street`, `city`, `country`, `phone`, `facebook`, `twitter`, `linkedin`, `status`) VALUES
(1, 'Efac', 'eBlog', 'awolu_faith@live.com', 'This is a new Blog and it is cool!', 'Search Engine Ready, Business and others', '', 'Aule', 'Akure', 'Nigeria', '+234-8138652645', 'hillsoftsnetwork', 'awolufaith', '+234-8138652645', 'mob_clef');

-- --------------------------------------------------------

--
-- Table structure for table `table_admin`
--

CREATE TABLE `table_admin` (
  `id` int(20) NOT NULL,
  `name` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `username` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  `file` varchar(567) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `table_admin`
--

INSERT INTO `table_admin` (`id`, `name`, `email`, `username`, `password`, `file`) VALUES
(1, 'Awolu Faith', 'awolu_faith@live.com', 'admin', 'admin', ''),
(3, 'AdegbemiGa Y1', 'atme@you.u', 'Alagbaka', 'mememem', 'efac_d8ba6926d6b1c5c485411c9f99a948a0.png'),
(4, 'tester', 'tester@dispostable.com', 'tester', 'tester1', 'efac_b8b0d7464b55213c435110abcb5e2e45.php');

-- --------------------------------------------------------

--
-- Table structure for table `table_ads`
--

CREATE TABLE `table_ads` (
  `id` int(20) NOT NULL,
  `header_ads` varchar(500) NOT NULL,
  `side_ads` varchar(500) NOT NULL,
  `footer_ads` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `table_ads`
--

INSERT INTO `table_ads` (`id`, `header_ads`, `side_ads`, `footer_ads`) VALUES
(1, '<!-- Adtall - Ad Display Code -->\r\n<script type=\"text/javascript\" src=\"//www.adtall.com/display/js/ads.js?822&522&728&90&0\"></script>\r\n<!-- Adtall - Ad Display Code -->', '<!-- Adtall - Ad Display Code -->\r\n<script type=\"text/javascript\" src=\"//www.adtall.com/display/js/ads.js?821&522&300&250&0\"></script>\r\n<!-- Adtall - Ad Display Code -->', 'Footer ads code here');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_about`
--

CREATE TABLE `tbl_about` (
  `id` int(11) NOT NULL,
  `body` varchar(2500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_about`
--

INSERT INTO `tbl_about` (`id`, `body`) VALUES
(4, '<p>Save about us</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_resources`
--

CREATE TABLE `tbl_resources` (
  `id` int(11) NOT NULL,
  `body` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_resources`
--

INSERT INTO `tbl_resources` (`id`, `body`) VALUES
(1, '<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Maecenas feugiat consequat diam. Maecenas metus. Vivamus diam purus, cursus a, commodo non, facilisis vitae, nulla. Aenean dictum lacinia tortor. Nunc iaculis, nibh non iaculis aliquam, orci felis euismod neque, sed ornare massa mauris sed velit. Nulla pretium mi et risus. Fusce mi pede, tempor id, cursus ac, ullamcorper nec, enim. <a href=\"http://localhost/konblog/index.php\">Sed tortor.</a> Curabitur molestie. Duis velit augue, condimentum at, ultrices a, luctus ut, orci. Donec pellentesque egestas eros. Integer cursus, augue in cursus faucibus, eros pede bibendum sem, in tempus tellus justo quis ligula. Etiam eget tortor. Vestibulum rutrum, est ut placerat elementum, lectus nisl aliquam velit, tempor aliquam eros nunc nonummy metus. In eros metus, gravida a, gravida sed, lobortis id, turpis. Ut ultrices, ipsum at venenatis fringilla, sem nulla lacinia tellus, eget aliquet turpis mauris non enim. Nam turpis. Suspendisse lacinia. Curabitur ac tortor ut ipsum egestas elementum. Nunc imperdiet gravida mauris.</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `user_online`
--

CREATE TABLE `user_online` (
  `session` varchar(100) NOT NULL,
  `time` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_online`
--

INSERT INTO `user_online` (`session`, `time`) VALUES
('qcotvvi268d7irofeoehiaj364', 1500896285),
('6jmm0l8uvu2hrmbmll5pstnv54', 1500896318),
('qcotvvi268d7irofeoehiaj364', 1500896285),
('6jmm0l8uvu2hrmbmll5pstnv54', 1500896318),
('qcotvvi268d7irofeoehiaj364', 1500896285),
('6jmm0l8uvu2hrmbmll5pstnv54', 1500896318);

-- --------------------------------------------------------

--
-- Table structure for table `welcome`
--

CREATE TABLE `welcome` (
  `id` int(11) NOT NULL,
  `body` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `welcome`
--

INSERT INTO `welcome` (`id`, `body`) VALUES
(1, 'EFAC is the realization of the dream of some members of Anglican Church, who had had personal encounter with our Lord Jesus Christ, to worship God in the liberty they had found at a time when the church in Nigeria was so lithurgical and there was a great gap between what the scriptures stipulated and what was being practiced in the church. EFAC was founded in England in 1961 and later introduced in Nigeria in 1978 but was inaugurated in 1979. It was not until 1987 that EFAC Enugu Zone was inaugurated, 8 years after the EFAC National was inaugurated. This delay was as a result of very stiff opposition to allowing Christian brethren to operate in the church then. It had to take a very turbulent crisis in the Enugu Diocese in which Christian brethren played very positive roles in resolving, for the then Bishop of Enugu Diocese, Rt. Rev. G. N. Otubelu to direct that EFAC be started in the churches in the Diocese. We thank God for the patience and resilience of the pioneers of Enugu Zone of EFAC. ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `excos`
--
ALTER TABLE `excos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `quote`
--
ALTER TABLE `quote`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `table_admin`
--
ALTER TABLE `table_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `table_ads`
--
ALTER TABLE `table_ads`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_about`
--
ALTER TABLE `tbl_about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_resources`
--
ALTER TABLE `tbl_resources`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `welcome`
--
ALTER TABLE `welcome`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `excos`
--
ALTER TABLE `excos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(70) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `quote`
--
ALTER TABLE `quote`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `table_admin`
--
ALTER TABLE `table_admin`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `table_ads`
--
ALTER TABLE `table_ads`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_about`
--
ALTER TABLE `tbl_about`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tbl_resources`
--
ALTER TABLE `tbl_resources`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `welcome`
--
ALTER TABLE `welcome`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
