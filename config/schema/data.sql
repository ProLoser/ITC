-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 16, 2010 at 09:30 AM
-- Server version: 5.1.36
-- PHP Version: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Database: `itc`
--

--
-- Dumping data for table `languages`
--

INSERT INTO `languages` (`id`, `name`) VALUES
(1, 'PHP'),
(2, 'ASP.NET'),
(3, 'Perl'),
(4, 'Java'),
(5, 'C'),
(6, 'C++'),
(7, 'C#'),
(8, 'Fortran'),
(9, 'Cobol'),
(10, 'VB.NET'),
(11, 'HTML'),
(12, 'JavaScript'),
(13, 'CSS'),
(14, 'AJAX'),
(15, 'XML'),
(16, 'Objective C'),
(17, 'Pascal'),
(18, 'Python'),
(19, 'Ruby');

--
-- Dumping data for table `point_events`
--

INSERT INTO `point_events` (`id`, `name`, `description`, `points`, `foreign_model`) VALUES
('user-register', 'User Registers', '', 5, 'User'),
('create-review', 'User creates a review', '', 5, 'Review'),
('vote-user-up', 'User is voted up', '', 10, 'Vote'),
('vote-user-down', 'User is voted down', '', -10, 'Vote'),
('vote-review-down', 'Review is voted down', '', -5, 'Vote'),
('vote-review-up', 'Review is voted up', '', 5, 'Vote'),
('vote-comment-up', 'Comment is voted up', '', 5, 'Vote'),
('vote-comment-down', 'Comment is voted down', '', -5, 'Vote'),
('create-comment', 'User creates a comment', '', 1, 'Comment'),
('user-subscribed', 'User gets a new subscriber', '', 5, 'Subscription'),
('review-subscribed', 'Review gets a new subscriber', '', 5, 'Subscription');

--
-- Dumping data for table `ranks`
--

INSERT INTO `ranks` (`id`, `title`, `description`, `points`) VALUES
(1, 'Pond Scum', 'You are least evolved as a programmer. Others look upon you as the lowest form of programming life. However you can only go up from here!', 0),
(2, 'Cucumber', 'Congratulations! Your brain is best compared to a vegetable.', 100),
(3, 'Noob', 'You must know something but it pales in comparison to the vast ocean of knowledge available.', 200),
(4, 'Beginner', 'You have a basic understanding of some things but the good stuff is yet to come.', 300),
(5, 'The Coderâ€™s Apprentice', 'Like Mickey Mouse before you seem to have found a place to learn your craft. Well... here clearly... however donâ€™t get cocky you have a long way to go.', 400),
(6, 'Generic Rank #6', 'You have achieved mediocrity. Like the famous cubical employee you have gain the standard knowledge associated with your trade. Keep working you little drone!', 500),
(7, 'Bilingual', 'Learning programming can be a daunting task. By mastering the basics of different programs you can combine them to form some sort of super program... yes... like a megazord.', 600),
(8, 'Doesnâ€™t Suck', 'Okay, weâ€™ll admit it you don''t suck but you donâ€™t rock yet. You have proven yourself to the computer nerd community. Keep it up!', 700),
(9, 'Mildly Adequate', 'Thatâ€™s right. You heard us.', 800),
(10, 'Programmer', 'Congratulations. Youâ€™ve earn this title. Although we donâ€™t have any ability to anoint you with this title we give it to you anyway. Youâ€™re welcome.', 900),
(11, 'Code Linguist', 'Youâ€™re better than average and a master of the code. You can claim you speak more than just English... and pig-latin. You lucky dog.', 1000),
(12, 'Programming Tzar', 'Your a king of some sort off in another country. There are now people below you, wishing they were at your level. Pity the lowly pond scum and cucumber.', 1100),
(13, 'Grand Puba', 'Others flock to you for advice on many subjects. By now you have your own site and possibly something far greater all to yourself. We envy you, but not much.', 1200),
(14, 'Master Programmer and Commander', 'Get yourself a throne and scepter, you are king. If you ever need a job just remember, weâ€™re not hiring so don''t look at us. But if you need something to put on your resume you can ad your rank. If your desperate.', 1300),
(15, 'Godlike', 'Nope you can''t get this rank even if you try. Not because we donâ€™t believe in you but because we can cheat. }:D>', 2147483647);
