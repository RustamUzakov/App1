-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 28, 2016 at 02:11 AM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rustam_app1`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userID` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `auth` varchar(255) NOT NULL,
  `verificationToken` varchar(15) NOT NULL,
  `verified` tinyint(1) NOT NULL,
  `dateCreated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userID`, `username`, `auth`, `verificationToken`, `verified`, `dateCreated`) VALUES
(12, 'testtest', 'sha256:1000:iMVwpD+pp6n5fBPL1u2h&#47;BGQmfkTsAmk:qKqwPlszLHTfqSuRh568Lkr1JhTBPTxd', 'Ad0gxIOR9K', 0, '2016-06-09 00:29:36'),
(13, 'rustam.uzakov16@gmail.com', 'sha256:1000:t+6KowlOWW35itAcwwluWhODodZmxyX5:L2g8LAoAmZwGxqYt7wq380Eb1mjvdo&#47;G', 'yzPE9MHjvY', 0, '2016-06-22 22:35:39'),
(14, 'test', 'sha256:1000:2LS4sA&#47;E09f6CWGpLPeedTyI325lZU41:MabUkzIEXIXEzPmHHNr1FZ8dn2QsBZC7', 'Awg-~EcAsR', 0, '2016-06-22 23:45:46'),
(15, 'test2', 'sha256:1000:ZFdJgRfla8BxLFPx3U9vh5Im3aPpNXFK:nTrqXVGQNWq10&#47;pipmcW7tkvowG1yKUd', '-4@xPEnl7k', 0, '2016-06-23 00:27:16'),
(16, 'TEST3', 'sha256:1000:HYkGTHF8HAR1Uw7ZPEqYUZeS7HUGEI+H:NC4RAirtRCohRXyTrp7N+DrRUU2ekxAq', 'KzUT79w8xA', 0, '2016-06-23 01:01:09'),
(17, 'rustam', 'sha256:1000:EFBLbpjKQoKJ2hWFu9sza0GJs006xB6P:Cgloeyb+3nY6jhPBQTR99LS0DRFQUlFG', 'M99V1poK5M', 0, '2016-06-27 22:15:30'),
(18, 'qwe', 'sha256:1000:RbTBlYEmDDbLxeru&#47;FfwXd430Kg9gT34:SvTjly99sor&#47;WEbncWjill+lR6IyG1ij', 'g0YMxLciDQ', 0, '2016-06-27 22:59:22');

-- --------------------------------------------------------

--
-- Table structure for table `user_hours_record`
--

CREATE TABLE `user_hours_record` (
  `id` int(11) NOT NULL,
  `totalMonday` varchar(5) NOT NULL,
  `totalTuesday` varchar(5) NOT NULL,
  `totalWednesday` varchar(5) NOT NULL,
  `totalThursday` varchar(5) NOT NULL,
  `totalFriday` varchar(5) NOT NULL,
  `totalSaturday` varchar(5) NOT NULL,
  `totalSunday` varchar(5) NOT NULL,
  `totalWeek` varchar(5) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_meta`
--

CREATE TABLE `user_meta` (
  `umID` int(11) NOT NULL,
  `userID` int(11) NOT NULL,
  `fieldKey` varchar(255) NOT NULL,
  `fieldValue` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_meta`
--

INSERT INTO `user_meta` (`umID`, `userID`, `fieldKey`, `fieldValue`) VALUES
(2, 12, 'u_name', 'qweqwe');

-- --------------------------------------------------------

--
-- Table structure for table `user_session`
--

CREATE TABLE `user_session` (
  `sesID` int(11) NOT NULL,
  `userID` int(11) NOT NULL,
  `sessionID` varchar(255) NOT NULL,
  `active` tinyint(1) NOT NULL,
  `browsername` varchar(255) NOT NULL,
  `browserversion` varchar(255) NOT NULL,
  `osplatform` varchar(255) NOT NULL,
  `dateCreated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_session`
--

INSERT INTO `user_session` (`sesID`, `userID`, `sessionID`, `active`, `browsername`, `browserversion`, `osplatform`, `dateCreated`) VALUES
(2, 12, 'eudl0jv173urn47qbmj9i1svv4', 0, 'Google Chrome', '51.0.2704.84', 'windows', '2016-06-09 00:29:43'),
(3, 12, 'o361qh9llteabc9318cjr4j9p0', 0, 'Google Chrome', '51.0.2704.84', 'windows', '2016-06-09 00:29:46'),
(4, 12, 'tvjoqhif925efbvnvkaqod0gk7', 0, 'Google Chrome', '51.0.2704.84', 'windows', '2016-06-09 00:29:58'),
(5, 12, 'r33ql4ceu5iil0foeoccda4j04', 0, 'Google Chrome', '51.0.2704.84', 'windows', '2016-06-09 00:30:03'),
(6, 12, '0vat7216r2ac8ao7bjuqqjgr63', 0, 'Google Chrome', '51.0.2704.84', 'windows', '2016-06-09 00:30:40'),
(7, 12, 'afibsmtalujs1ss1s4s7r4qft4', 0, 'Google Chrome', '51.0.2704.84', 'windows', '2016-06-09 00:30:40'),
(8, 12, 'dcssn5l0rq73bmqca2i480c094', 0, 'Google Chrome', '51.0.2704.84', 'windows', '2016-06-09 00:30:41'),
(9, 12, 'vb2qnna700rs7svimtppp771f5', 0, 'Google Chrome', '51.0.2704.84', 'windows', '2016-06-09 00:30:41'),
(10, 12, 'gbpt8v6uhko0rtu6f1j47oeng4', 0, 'Google Chrome', '51.0.2704.84', 'windows', '2016-06-09 00:31:35'),
(11, 12, '75s7je2742fn4kvqcp1rnal980', 0, 'Google Chrome', '51.0.2704.103', 'windows', '2016-06-22 22:05:00'),
(12, 12, 'pr2tvq4irt11qs1qdanrj2i3u3', 0, 'Google Chrome', '51.0.2704.103', 'windows', '2016-06-22 22:05:12'),
(13, 12, 'u45cjngh62rtaoiju86e3m8hu7', 0, 'Google Chrome', '51.0.2704.103', 'windows', '2016-06-22 22:25:18'),
(14, 12, 'q8pdansi111ebvjaco2nlp7gm2', 0, 'Google Chrome', '51.0.2704.103', 'windows', '2016-06-22 22:26:07'),
(15, 12, 'tiisjh5o50nfdqnnfek64nlv72', 0, 'Google Chrome', '51.0.2704.103', 'windows', '2016-06-22 22:28:36'),
(16, 12, 'jsqfi90rknlmurte63onkod6u4', 0, 'Google Chrome', '51.0.2704.103', 'windows', '2016-06-22 22:30:51'),
(17, 12, '8lkhj605kag64hn5s649c9jj44', 0, 'Google Chrome', '51.0.2704.103', 'windows', '2016-06-22 22:32:06'),
(18, 13, '37igtqrj46jq4c7snu4ik4ee97', 0, 'Google Chrome', '51.0.2704.103', 'windows', '2016-06-22 22:35:52'),
(19, 13, '3andi6n2e46u7rjvg72hu7ls63', 0, 'Google Chrome', '51.0.2704.103', 'windows', '2016-06-22 22:35:55'),
(20, 12, '4qkv85pta2peeue6pdbn95vkf6', 0, 'Google Chrome', '51.0.2704.103', 'windows', '2016-06-22 22:38:57'),
(21, 12, 'rrr1hpibila2s26siklhsvjcm1', 0, 'Google Chrome', '51.0.2704.103', 'windows', '2016-06-22 22:47:44'),
(22, 12, 'mvr9moujnplh86ch8d6q0nsv31', 0, 'Google Chrome', '51.0.2704.103', 'windows', '2016-06-22 22:56:18'),
(23, 13, 'p9722ob2bd6cb047lrdl1rmla0', 0, 'Google Chrome', '51.0.2704.103', 'windows', '2016-06-22 23:45:33'),
(24, 14, 'v5lel5qk7aj2jd6g39vor9hno5', 0, 'Google Chrome', '51.0.2704.103', 'windows', '2016-06-22 23:45:50'),
(25, 14, '7u416sisdmhmk27v1ndoohm1d6', 0, 'Google Chrome', '51.0.2704.103', 'windows', '2016-06-22 23:50:45'),
(26, 15, 'o82e2t79a5n1anvg34s6245eg6', 0, 'Google Chrome', '51.0.2704.103', 'windows', '2016-06-23 00:27:23'),
(27, 15, 'pckv5p7k4segvmussntp219l94', 0, 'Google Chrome', '51.0.2704.103', 'windows', '2016-06-23 01:00:54'),
(28, 16, '5togu0hquubvvprhh6oug8dvl7', 0, 'Google Chrome', '51.0.2704.103', 'windows', '2016-06-23 01:01:14'),
(29, 16, 'ilfbfajo5lc2613lu2a37g5pp0', 1, 'Google Chrome', '51.0.2704.103', 'windows', '2016-06-23 01:01:14'),
(30, 17, 'cbhvpp1bhsiirsjqhrns329b32', 0, 'Google Chrome', '51.0.2704.103', 'windows', '2016-06-27 22:15:36'),
(31, 17, 'etpm3snrsqdrok5saaru6c2h80', 1, 'Google Chrome', '51.0.2704.103', 'windows', '2016-06-27 22:15:36'),
(32, 18, '7rto6eg13ggpdrqm62squ3sir4', 0, 'Google Chrome', '51.0.2704.103', 'windows', '2016-06-27 22:59:26'),
(33, 18, '9hq641k5j5tbj42mj7pujo9gb0', 0, 'Google Chrome', '51.0.2704.103', 'windows', '2016-06-27 23:24:44'),
(34, 18, 'oha13oivluqi6alsrv3bavtne3', 1, 'Google Chrome', '51.0.2704.103', 'windows', '2016-06-27 23:24:48');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userID`);

--
-- Indexes for table `user_hours_record`
--
ALTER TABLE `user_hours_record`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_meta`
--
ALTER TABLE `user_meta`
  ADD PRIMARY KEY (`umID`);

--
-- Indexes for table `user_session`
--
ALTER TABLE `user_session`
  ADD PRIMARY KEY (`sesID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `user_hours_record`
--
ALTER TABLE `user_hours_record`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user_meta`
--
ALTER TABLE `user_meta`
  MODIFY `umID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `user_session`
--
ALTER TABLE `user_session`
  MODIFY `sesID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
