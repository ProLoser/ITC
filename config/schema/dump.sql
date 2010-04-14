-- phpMyAdmin SQL Dump
-- version 2.11.9.4
-- http://www.phpmyadmin.net
--
-- Host: mysql.artengineered.net
-- Generation Time: Apr 14, 2010 at 01:00 AM
-- Server version: 5.0.89
-- PHP Version: 5.2.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Database: `procoder`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE IF NOT EXISTS `comments` (
  `id` int(11) NOT NULL auto_increment,
  `user_id` int(11) NOT NULL,
  `source_id` int(11) NOT NULL,
  `line_start` int(11) NOT NULL,
  `line_end` int(11) NOT NULL,
  `content` mediumtext NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `vote_count` int(11) default NULL,
  PRIMARY KEY  (`id`),
  KEY `user_id` (`user_id`),
  KEY `file_id` (`source_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `languages`
--

CREATE TABLE IF NOT EXISTS `languages` (
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(30) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `points`
--

CREATE TABLE IF NOT EXISTS `points` (
  `id` int(11) NOT NULL auto_increment,
  `user_id` int(11) NOT NULL,
  `point_event_id` varchar(30) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY  (`id`),
  KEY `user_id` (`user_id`),
  KEY `point_event_id` (`point_event_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

-- --------------------------------------------------------

--
-- Table structure for table `point_events`
--

CREATE TABLE IF NOT EXISTS `point_events` (
  `id` varchar(30) NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` mediumtext,
  `points` int(11) NOT NULL,
  `foreign_model` varchar(30) default NULL,
  `foreign_id` int(11) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ranks`
--

CREATE TABLE IF NOT EXISTS `ranks` (
  `id` int(11) NOT NULL auto_increment,
  `title` varchar(100) NOT NULL,
  `description` mediumtext,
  `points` int(11) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE IF NOT EXISTS `reviews` (
  `id` int(11) NOT NULL auto_increment,
  `user_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `visibility` varchar(10) default NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `closed` tinyint(1) NOT NULL default '0',
  PRIMARY KEY  (`id`),
  KEY `user_id` (`user_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

-- --------------------------------------------------------

--
-- Table structure for table `reviews_tags`
--

CREATE TABLE IF NOT EXISTS `reviews_tags` (
  `id` int(11) NOT NULL auto_increment,
  `tag_id` int(11) NOT NULL,
  `review_id` int(11) NOT NULL,
  PRIMARY KEY  (`id`),
  KEY `tag_id` (`tag_id`),
  KEY `review_id` (`review_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `sources`
--

CREATE TABLE IF NOT EXISTS `sources` (
  `id` int(11) NOT NULL auto_increment,
  `review_id` int(11) NOT NULL,
  `language_id` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `content` blob NOT NULL,
  `description` mediumtext,
  `source_file_name` varchar(255) NOT NULL,
  `source_file_size` int(11) NOT NULL,
  `visibility` varchar(10) default NULL,
  PRIMARY KEY  (`id`),
  KEY `review_id` (`review_id`),
  KEY `language_id` (`language_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

-- --------------------------------------------------------

--
-- Table structure for table `subscriptions`
--

CREATE TABLE IF NOT EXISTS `subscriptions` (
  `id` int(11) NOT NULL auto_increment,
  `user_id` int(11) NOT NULL,
  `foreign_id` int(11) NOT NULL,
  `foreign_model` varchar(20) NOT NULL,
  `status` varchar(10) default NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY  (`id`),
  KEY `user_id` (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE IF NOT EXISTS `tags` (
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(25) NOT NULL,
  `created` datetime NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL auto_increment,
  `username` varchar(100) NOT NULL,
  `password` varchar(40) NOT NULL,
  `name` varchar(100) default NULL,
  `email` varchar(100) NOT NULL,
  `avatar_file_name` varchar(255) default NULL,
  `websites` varchar(255) default NULL,
  `points` int(11) NOT NULL default '0',
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `status` varchar(10) default NULL,
  `rank_id` int(11) NOT NULL,
  `date_of_birth` date default NULL,
  `role` varchar(10) NOT NULL default 'User',
  PRIMARY KEY  (`id`),
  KEY `rank_id` (`rank_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

-- --------------------------------------------------------

--
-- Table structure for table `votes`
--

CREATE TABLE IF NOT EXISTS `votes` (
  `id` int(11) NOT NULL auto_increment,
  `comment_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `direction` binary(1) default NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY  (`id`),
  KEY `comment_id` (`comment_id`),
  KEY `user_id` (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;
