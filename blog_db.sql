-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 20, 2024 at 11:47 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blog_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(6) UNSIGNED NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `content` text DEFAULT NULL,
  `auther` varchar(100) DEFAULT NULL,
  `reg_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `content`, `auther`, `reg_date`) VALUES
(2, 'The resume that got a software engineer a $300,000 job at Google.', 'My name is Alex Nguyen and I previously worked as a software engineer at Amazon and Microsoft before joining Google.\r\nAbove is the resume I used to apply to Google and land an exciting $300,000 offer.\r\nIt’s the resume I like to share working with candidates who are applying for software engineering roles.\r\nBut before digging into resume strategies that worked for me, let’s first talk about the elephants in the room.', ' Alexander Nguyen', '2024-08-20 09:43:00'),
(3, 'PUT vs PATCH', 'In my recent interview, Interviewer asked me lot of question on this topic.\r\n\r\nThe PUT and PATCH methods are both HTTP verbs used in web development for updating resources on a server, but they differ in their semantics and usage.\r\n\r\nPUT\r\nFull Replacement: The PUT method is used to update a resource by replacing the entire resource with the new content provided in the request. It usually requires sending the complete representation of the resource.\r\nIdempotency: PUT is idempotent, meaning that making multiple identical PUT requests will result in the same state as making a single request. If you PUT the same data multiple times, the resource remains unchanged after the first request.\r\nUsage Example: Updating a user profile by sending the entire user object, even if only one attribute has changed.', 'Ankita Kolhe', '2024-08-20 09:43:40'),
(4, 'What’s the Difference Between localhost and 127.0.0.1?', 'My article is open to everyone; non-member readers can click this link to read the full text.\r\n\r\nWhen front-end developers debug locally, they often interact with localhost, simply running npm run to open their webpage in a browser, with the address bar displaying something like http://localhost:xxx/index.html.\r\n\r\nMany might use it without pondering the distinction between the two.\r\n\r\nConsidering my past collaboration with developers who also lacked a clear understanding of their differences, I find it essential to spread some knowledge on this topic.\r\n\r\nWhat is localhost?\r\nlocalhost is a domain name, fundamentally no different from the domain names used for internet access, except for its ease of remembrance.\r\n\r\nThe scope of localhost is limited to the local machine — its name makes it clear: “local” refers to something within the locality.\r\n\r\nBoth John Smith and Jane Doe can use localhost on their respective machines without interfering with each other, accessing their individual page content.', ' Oliver Foster', '2024-08-20 09:44:49'),
(5, 'Microsoft is ditching React', 'Recently, the Microsoft Edge Team wrote an article on how Microsoft team is improving Edge to become faster.\r\n\r\nHowever, Microsoft took shots at React and announced they will not use React for Edge anymore.\r\n\r\nI will explain their entire article and how it affects React, JavaScript Developers, and what are the true intentions of the Microsoft Edge Team.', ' Afan Khan', '2024-08-20 09:45:51');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
