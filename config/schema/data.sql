-- phpMyAdmin SQL Dump
-- version 2.11.9.4
-- http://www.phpmyadmin.net
--
-- Host: mysql.artengineered.net
-- Generation Time: Apr 15, 2010 at 01:25 AM
-- Server version: 5.0.89
-- PHP Version: 5.2.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Database: `procoder`
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

INSERT INTO `point_events` (`id`, `name`, `description`, `points`, `foreign_model`, `foreign_id`) VALUES
('user-register', 'User Registers', '', 5, 'User', 0),
('create-review', 'User creates a review', '', 5, 'Review', 0),
('vote-user-up', 'User is voted up', '', 10, 'Vote', 0),
('vote-user-down', 'User is voted down', '', -10, 'Vote', 0),
('vote-review-down', 'Review is voted down', '', -5, 'Vote', 0),
('vote-review-up', 'Review is voted up', '', 5, 'Vote', 0),
('vote-comment-up', 'Comment is voted up', '', 5, 'Vote', 0),
('vote-comment-down', 'Comment is voted down', '', -5, 'Vote', 0),
('create-comment', 'User creates a comment', '', 1, 'Comment', 0),
('user-subscribed', 'User gets a new subscriber', '', 5, 'Subscription', 0),
('review-subscribed', 'Review gets a new subscriber', '', 5, 'Subscription', 0);

--
-- Dumping data for table `ranks`
--

INSERT INTO `ranks` (`id`, `title`, `description`, `points`) VALUES
(1, 'Pond Scum', 'You are least evolved as a programmer. Others look upon you as the lowest form of programming life. However you can only go up from here!', 0),
(2, 'Cucumber', 'Congratulations! Your brain is best compared to a vegetable.', 100),
(3, 'Noob', 'You must know something but it pales in comparison to the vast ocean of knowledge available.', 200),
(4, 'Beginner', 'You have a basic understanding of some things but the good stuff is yet to come.', 300),
(5, 'The Coder’s Apprentice', 'Like Mickey Mouse before you seem to have found a place to learn your craft. Well... here clearly... however don’t get cocky you have a long way to go.', 400),
(6, 'Generic Rank #6', 'You have achieved mediocrity. Like the famous cubical employee you have gain the standard knowledge associated with your trade. Keep working you little drone!', 500),
(7, 'Bilingual', 'Learning programming can be a daunting task. By mastering the basics of different programs you can combine them to form some sort of super program... yes... like a megazord.', 600),
(8, 'Doesn’t Suck', 'Okay, we’ll admit it you don''t suck but you don’t rock yet. You have proven yourself to the computer nerd community. Keep it up!', 700),
(9, 'Mildly Adequate', 'That’s right. You heard us.', 800),
(10, 'Programmer', 'Congratulations. You’ve earn this title. Although we don’t have any ability to anoint you with this title we give it to you anyway. You’re welcome.', 900),
(11, 'Code Linguist', 'You’re better than average and a master of the code. You can claim you speak more than just English... and pig-latin. You lucky dog.', 1000),
(12, 'Programming Tzar', 'Your a king of some sort off in another country. There are now people below you, wishing they were at your level. Pity the lowly pond scum and cucumber.', 1100),
(13, 'Grand Puba', 'Others flock to you for advice on many subjects. By now you have your own site and possibly something far greater all to yourself. We envy you, but not much.', 1200),
(14, 'Master Programmer and Commander', 'Get yourself a throne and scepter, you are king. If you ever need a job just remember, we’re not hiring so don''t look at us. But if you need something to put on your resume you can ad your rank. If your desperate.', 1300),
(15, 'Godlike', 'Nope you can''t get this rank even if you try. Not because we don’t believe in you but because we can cheat. }:D>', 2147483647);
