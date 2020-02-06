-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 06, 2020 at 06:12 PM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `youtube`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

DROP TABLE IF EXISTS `comments`;
CREATE TABLE IF NOT EXISTS `comments` (
  `commentid` int(11) NOT NULL AUTO_INCREMENT,
  `userid` int(11) NOT NULL,
  `videoid` int(11) NOT NULL,
  `value` varchar(255) NOT NULL,
  PRIMARY KEY (`commentid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `userid` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `nadate` varchar(255) NOT NULL,
  PRIMARY KEY (`userid`),
  UNIQUE KEY `email` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userid`, `firstname`, `lastname`, `email`, `password`, `photo`, `nadate`) VALUES
(1, 'Suraj', 'Yadav', 'sy9621551@gmail.com', '123', '../userImages/my photo.jpg', 'Wednesday 5th of February 2020 04:40:32 PM'),
(2, 'Animesh', 'Pani Grahi', 'animesh@gmail.com', '123', '../userImages/2020-02-05 16_46_48-Animesh Panigrahi (@animesh_vicky) â€¢ Instagram photos and videos.png', 'Thursday 6th of February 2020 01:56:16 AM'),
(3, 'Shivam', 'Sharma', 'shivam@gmail.com', '123', '../userImages/75419066_985489188453427_8514615653200560128_o.jpg', 'Thursday 6th of February 2020 02:45:25 AM'),
(4, 'Balram', 'Paswan', 'balram@gmail.com', '123', '../userImages/82498633_1001756130195917_8023168581611028480_o.jpg', 'Thursday 6th of February 2020 04:14:04 AM'),
(5, 'Jagmeet', 'Kaur', 'jagmeet@gmail.com', '123', '../userImages/41032915_433686280487744_4026404189276995584_n.jpg', 'Thursday 6th of February 2020 02:52:37 PM'),
(6, 'Aman', 'Gangwar', 'aman@gmail.com', '123', '../userImages/aman gangwar.jpg', 'Thursday 6th of February 2020 04:43:22 PM');

-- --------------------------------------------------------

--
-- Table structure for table `videos`
--

DROP TABLE IF EXISTS `videos`;
CREATE TABLE IF NOT EXISTS `videos` (
  `videoid` int(11) NOT NULL AUTO_INCREMENT,
  `userid` int(11) NOT NULL,
  `video` varchar(255) NOT NULL,
  `videoname` varchar(255) NOT NULL,
  `discription` varchar(255) NOT NULL,
  `vudate` varchar(255) NOT NULL,
  `vlike` int(11) NOT NULL,
  `vdislike` int(11) NOT NULL,
  `subscribe` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `nadate` varchar(255) NOT NULL,
  PRIMARY KEY (`videoid`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `videos`
--

INSERT INTO `videos` (`videoid`, `userid`, `video`, `videoname`, `discription`, `vudate`, `vlike`, `vdislike`, `subscribe`, `username`, `photo`, `email`, `nadate`) VALUES
(4, 3, '../uploadedVideos/Chaiyya Chaiyya Full Video Song   Dil Se   Shahrukh Khan, Malaika Arora Khan   Sukhwinder Singh.mp4', 'chal chhaiya chhaiya', 'Chaiyya Chaiyya Full Video Song   Dil Se   Shahrukh Khan, Malaika Arora Khan   Sukhwinder Singh', 'Thursday 6th of February 2020 02:46:54 AM', 0, 0, 0, 'Shivam', '../userImages/75419066_985489188453427_8514615653200560128_o.jpg', 'shivam@gmail.com', 'Thursday 6th of February 2020 02:45:25 AM'),
(3, 2, '../uploadedVideos/3 Peg Sharry Mann  (Full Video)   Mista Baaz   Parmish Verma   Latest Punjabi Songs 2016   T-Series (2).mp4', '3 Peg Sharry Mann', '3 Peg Sharry Mann  (Full Video)   Mista Baaz   Parmish Verma   Latest Punjabi Songs 2016   T-Series (2)', 'Thursday 6th of February 2020 02:13:24 AM', 0, 0, 0, 'Animesh', '../userImages/2020-02-05 16_46_48-Animesh Panigrahi (@animesh_vicky) â€¢ Instagram photos and videos.png', 'animesh@gmail.com', 'Thursday 6th of February 2020 01:56:16 AM'),
(5, 4, '../uploadedVideos/Jinne Mera Dil Luteya (Jazzy B) with Lyrics Punjabi Song.mp4', 'Jinne Mera Dil Luteya', 'Jinne Mera Dil Luteya (Jazzy B) with Lyrics Punjabi Song', 'Thursday 6th of February 2020 04:14:51 AM', 0, 0, 0, 'Balram', '../userImages/82498633_1001756130195917_8023168581611028480_o.jpg', 'balram@gmail.com', 'Thursday 6th of February 2020 04:14:04 AM'),
(6, 4, '../uploadedVideos/Mere Yaara Tere Ghum Hum Agar Payenge(Aashiqui 2)Sung by Arijit Singh & Tulsi Kumar HD720P.mp4', 'Mere Yaara Tere Ghum Hum Agar Payenge', 'Mere Yaara Tere Ghum Hum Agar Payenge(Aashiqui 2)Sung by Arijit Singh & Tulsi Kumar HD720P', 'Thursday 6th of February 2020 04:15:25 AM', 0, 0, 0, 'Balram', '../userImages/82498633_1001756130195917_8023168581611028480_o.jpg', 'balram@gmail.com', 'Thursday 6th of February 2020 04:14:04 AM'),
(7, 5, '../uploadedVideos/SMARTPHONES and PASSWORDS   Stand Up Comedy by Gaurav Kapoor.mp4', 'SMARTPHONES and PASSWORDS   Stand Up Comedy by Gaurav Kapoor', 'SMARTPHONES and PASSWORDS   Stand Up Comedy by Gaurav Kapoor', 'Thursday 6th of February 2020 02:58:16 PM', 0, 0, 0, 'Jagmeet', '../userImages/41032915_433686280487744_4026404189276995584_n.jpg', 'jagmeet@gmail.com', 'Thursday 6th of February 2020 02:52:37 PM'),
(8, 6, '../uploadedVideos/Gaurav Kapoor   No Ball   Stand Up Comedy 2019.mp4', 'Gaurav Kapoor   No Ball   Stand Up Comedy 2019', 'Gaurav Kapoor   No Ball   Stand Up Comedy 2019', 'Thursday 6th of February 2020 04:45:45 PM', 0, 0, 0, 'Aman', '../userImages/aman gangwar.jpg', 'aman@gmail.com', 'Thursday 6th of February 2020 04:43:22 PM');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
