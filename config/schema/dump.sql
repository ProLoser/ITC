-- phpMyAdmin SQL Dump
-- version 2.11.9.4
-- http://www.phpmyadmin.net
--
-- Host: mysql.artengineered.net
-- Generation Time: Apr 17, 2010 at 02:06 AM
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

DROP TABLE IF EXISTS `comments`;
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
  `owner_vote` tinyint(2) default NULL COMMENT 'Up, Down, Null',
  PRIMARY KEY  (`id`),
  KEY `user_id` (`user_id`),
  KEY `file_id` (`source_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `user_id`, `source_id`, `line_start`, `line_end`, `content`, `created`, `modified`, `vote_count`, `owner_vote`) VALUES
(1, 25, 5, 5, 21, 'Kohana is cool', '2010-04-16 13:14:27', '2010-04-16 13:14:27', NULL, NULL),
(2, 26, 10, 2, 13, 'Clearly this is the problem', '2010-04-16 18:30:35', '2010-04-16 18:30:35', NULL, NULL),
(3, 26, 16, 3, 7, 'asdlfjslkdfjlsdkjf', '2010-04-16 23:26:26', '2010-04-16 23:26:26', NULL, NULL),
(4, 34, 25, 5, 11, 'This right here.', '2010-04-17 01:32:28', '2010-04-17 01:32:28', NULL, NULL),
(5, 34, 27, 9, 13, 'this is a test', '2010-04-17 01:33:00', '2010-04-17 01:33:00', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `languages`
--

DROP TABLE IF EXISTS `languages`;
CREATE TABLE IF NOT EXISTS `languages` (
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(30) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

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

-- --------------------------------------------------------

--
-- Table structure for table `points`
--

DROP TABLE IF EXISTS `points`;
CREATE TABLE IF NOT EXISTS `points` (
  `id` int(11) NOT NULL auto_increment,
  `user_id` int(11) NOT NULL,
  `point_event_id` varchar(30) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `foreign_id` int(11) NOT NULL,
  PRIMARY KEY  (`id`),
  KEY `user_id` (`user_id`),
  KEY `point_event_id` (`point_event_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=47 ;

--
-- Dumping data for table `points`
--

INSERT INTO `points` (`id`, `user_id`, `point_event_id`, `created`, `modified`, `foreign_id`) VALUES
(17, 23, 'user-register', '2010-04-16 02:42:12', '2010-04-16 02:42:12', 0),
(18, 24, 'user-register', '2010-04-16 03:08:36', '2010-04-16 03:08:36', 0),
(19, 25, 'user-register', '2010-04-16 03:32:57', '2010-04-16 03:32:57', 0),
(20, 25, 'create-review', '2010-04-16 03:35:21', '2010-04-16 03:35:21', 0),
(21, 23, 'create-review', '2010-04-16 03:36:52', '2010-04-16 03:36:52', 0),
(22, 26, 'user-register', '2010-04-16 09:57:03', '2010-04-16 09:57:03', 0),
(23, 27, 'user-register', '2010-04-16 12:42:31', '2010-04-16 12:42:31', 0),
(24, 23, 'create-review', '2010-04-16 13:42:36', '2010-04-16 13:42:36', 5),
(25, 23, 'create-review', '2010-04-16 13:53:57', '2010-04-16 13:53:57', 6),
(26, 23, 'create-review', '2010-04-16 13:54:24', '2010-04-16 13:54:24', 7),
(27, 28, 'user-register', '2010-04-16 14:02:04', '2010-04-16 14:02:04', 0),
(28, 29, 'user-register', '2010-04-16 14:36:49', '2010-04-16 14:36:49', 0),
(29, 24, 'create-review', '2010-04-16 17:06:05', '2010-04-16 17:06:05', 8),
(30, 30, 'user-register', '2010-04-16 17:16:15', '2010-04-16 17:16:15', 0),
(31, 31, 'user-register', '2010-04-16 17:23:04', '2010-04-16 17:23:04', 0),
(32, 32, 'user-register', '2010-04-16 17:25:07', '2010-04-16 17:25:07', 0),
(33, 33, 'user-register', '2010-04-16 18:03:29', '2010-04-16 18:03:29', 0),
(34, 34, 'user-register', '2010-04-16 18:09:38', '2010-04-16 18:09:38', 0),
(35, 26, 'create-review', '2010-04-16 22:45:51', '2010-04-16 22:45:51', 9),
(36, 26, 'create-review', '2010-04-16 22:47:53', '2010-04-16 22:47:53', 10),
(37, 25, 'create-review', '2010-04-16 22:50:39', '2010-04-16 22:50:39', 11),
(38, 26, 'create-review', '2010-04-17 01:11:20', '2010-04-17 01:11:20', 12),
(39, 24, 'create-review', '2010-04-17 01:14:29', '2010-04-17 01:14:29', 13),
(40, 27, 'create-review', '2010-04-17 01:15:38', '2010-04-17 01:15:38', 14),
(41, 34, 'create-comment', '2010-04-17 01:32:28', '2010-04-17 01:32:28', 0),
(42, 34, 'create-comment', '2010-04-17 01:33:00', '2010-04-17 01:33:00', 0),
(43, 0, 'review-subscribed', '2010-04-17 01:33:20', '2010-04-17 01:33:20', 6),
(44, 0, 'review-subscribed', '2010-04-17 01:34:26', '2010-04-17 01:34:26', 7),
(45, 23, 'review-subscribed', '2010-04-17 01:47:29', '2010-04-17 01:47:29', 8),
(46, 24, 'review-subscribed', '2010-04-17 01:51:14', '2010-04-17 01:51:14', 9);

-- --------------------------------------------------------

--
-- Table structure for table `point_events`
--

DROP TABLE IF EXISTS `point_events`;
CREATE TABLE IF NOT EXISTS `point_events` (
  `id` varchar(30) NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` mediumtext,
  `points` int(11) NOT NULL,
  `foreign_model` varchar(30) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

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

-- --------------------------------------------------------

--
-- Table structure for table `ranks`
--

DROP TABLE IF EXISTS `ranks`;
CREATE TABLE IF NOT EXISTS `ranks` (
  `id` int(11) NOT NULL auto_increment,
  `title` varchar(100) NOT NULL,
  `description` mediumtext,
  `points` int(11) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

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

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

DROP TABLE IF EXISTS `reviews`;
CREATE TABLE IF NOT EXISTS `reviews` (
  `id` int(11) NOT NULL auto_increment,
  `user_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `visibility` varchar(10) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `closed` tinyint(1) NOT NULL default '0',
  `description` text NOT NULL,
  PRIMARY KEY  (`id`),
  KEY `user_id` (`user_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`id`, `user_id`, `name`, `visibility`, `created`, `modified`, `closed`, `description`) VALUES
(3, 25, 'asdfasdf', 'Public', '2010-04-16 03:35:21', '2010-04-16 03:35:21', 0, 'asdfasdfasd'),
(4, 23, 'Testing', 'Public', '2010-04-16 03:36:52', '2010-04-16 03:36:52', 0, 'my special review for special people'),
(5, 23, 'ITC Application', 'Public', '2010-04-16 13:42:36', '2010-04-16 13:42:36', 0, 'This is our competition project'),
(6, 23, 'Another test project', 'Public', '2010-04-16 13:53:57', '2010-04-16 13:53:57', 0, 'Testing\r\n'),
(7, 23, 'Another test project', 'Public', '2010-04-16 13:54:24', '2010-04-16 13:54:24', 0, 'Testing\r\n'),
(8, 24, 'Override clone', 'Public', '2010-04-16 17:06:05', '2010-04-16 17:06:05', 0, 'I''m wondering what I am doing wrong. I''ve implemented the clone() function properly but it doesn''t seem to be overriding the function, so whenever I try to clone, it doesn''t clone the way I want to.'),
(9, 26, 'Trying to test this site out', 'Public', '2010-04-16 22:45:51', '2010-04-16 22:45:51', 0, 'This is a generic lksdkahsdf asdkhlkasdksd ksjd jshd sd jsd s dsdf as  g dfg df dh s vew b b b dsh g dsfg ds fgds fgd'),
(10, 26, 'fgfgdfdf', 'Public', '2010-04-16 22:47:53', '2010-04-16 22:47:53', 0, 'This is a generic lksdkahsdf asdkhlkasdksd ksjd jshd sd jsd s dsdf as  g dfg df dh s vew b b b dsh g dsfg ds fgds fgd'),
(11, 25, 'file whatever', 'Public', '2010-04-16 22:50:39', '2010-04-16 22:50:39', 0, 'asdfasf ljlsjadf asjdfl j'),
(12, 26, 'Ta DA', 'Public', '2010-04-17 01:11:20', '2010-04-17 01:11:20', 0, 'lsflsjdflkjsldkfjlskjfl;sjdflksjdflkjsdfskdj skdj skj lskdjls dljsd sldj lskdj lsjd sdlkjs dlfj sdlkj sldjf s jl jflksj lw johlh lkj lk jlk jl kj lkj lk jl jl kj lj lj lk j lkh ljh kj hjhkjh kjhkjh kjhkjh kjh kjh kjh kjh kjhkjh kjkjh kjh kjh hjkh kjh kj hkjh jk h kjh kjh kjh kjh kjh jhg iuh h'),
(13, 24, 'Java stuff', 'Public', '2010-04-17 01:14:29', '2010-04-17 01:14:29', 0, 'This is a review with two files.'),
(14, 27, 'Weeee', 'Public', '2010-04-17 01:15:38', '2010-04-17 01:15:38', 0, 'This is a REVIEW');

-- --------------------------------------------------------

--
-- Table structure for table `reviews_tags`
--

DROP TABLE IF EXISTS `reviews_tags`;
CREATE TABLE IF NOT EXISTS `reviews_tags` (
  `id` int(11) NOT NULL auto_increment,
  `tag_id` int(11) NOT NULL,
  `review_id` int(11) NOT NULL,
  PRIMARY KEY  (`id`),
  KEY `tag_id` (`tag_id`),
  KEY `review_id` (`review_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `reviews_tags`
--


-- --------------------------------------------------------

--
-- Table structure for table `sources`
--

DROP TABLE IF EXISTS `sources`;
CREATE TABLE IF NOT EXISTS `sources` (
  `id` int(11) NOT NULL auto_increment,
  `review_id` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `content` text NOT NULL,
  `description` text NOT NULL,
  `filename` varchar(255) NOT NULL,
  `size` int(11) NOT NULL,
  `language_id` int(11) NOT NULL,
  PRIMARY KEY  (`id`),
  KEY `review_id` (`review_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=29 ;

--
-- Dumping data for table `sources`
--

INSERT INTO `sources` (`id`, `review_id`, `created`, `modified`, `content`, `description`, `filename`, `size`, `language_id`) VALUES
(5, 3, '2010-04-16 03:36:11', '2010-04-16 03:36:11', '<?php defined(''SYSPATH'') OR die(''No direct access allowed.'');\n/**\n * RSS and Atom feed helper.\n *\n * @package    Kohana\n * @category   Helpers\n * @author     Kohana Team\n * @copyright  (c) 2007-2009 Kohana Team\n * @license    http://kohanaphp.com/license\n */\nclass Kohana_Feed {\n\n	/**\n	 * Parses a remote feed into an array.\n	 *\n	 * @param   string   remote feed URL\n	 * @param   integer  item limit to fetch\n	 * @return  array\n	 */\n	public static function parse($feed, $limit = 0)\n	{\n		// Check if SimpleXML is installed\n		if( ! function_exists(''simplexml_load_file''))\n			throw new Kohana_Exception(''SimpleXML must be installed!'');\n\n		// Make limit an integer\n		$limit = (int) $limit;\n\n		// Disable error reporting while opening the feed\n		$ER = error_reporting(0);\n\n		// Allow loading by filename or raw XML string\n		$load = (is_file($feed) OR validate::url($feed)) ? ''simplexml_load_file'' : ''simplexml_load_string'';\n\n		// Load the feed\n		$feed = $load($feed, ''SimpleXMLElement'', LIBXML_NOCDATA);\n\n		// Restore error reporting\n		error_reporting($ER);\n\n		// Feed could not be loaded\n		if ($feed === FALSE)\n			return array();\n\n		// Detect the feed type. RSS 1.0/2.0 and Atom 1.0 are supported.\n		$feed = isset($feed->channel) ? $feed->xpath(''//item'') : $feed->entry;\n\n		$i = 0;\n		$items = array();\n\n		foreach ($feed as $item)\n		{\n			if ($limit > 0 AND $i++ === $limit)\n				break;\n\n			$items[] = (array) $item;\n		}\n\n		return $items;\n	}\n\n	/**\n	 * Creates a feed from the given parameters.\n	 *\n	 * @param   array   feed information\n	 * @param   array   items to add to the feed\n	 * @param   string  define which format to use (only rss2 is supported)\n	 * @param   string  define which encoding to use\n	 * @return  string\n	 */\n	public static function create($info, $items, $format = ''rss2'', $encoding = ''UTF-8'')\n	{\n		$info += array(''title'' => ''Generated Feed'', ''link'' => '''', ''generator'' => ''KohanaPHP'');\n\n		$feed = ''<?xml version="1.0" encoding="''.$encoding.''"?><rss version="2.0"><channel></channel></rss>'';\n		$feed = simplexml_load_string($feed);\n\n		foreach ($info as $name => $value)\n		{\n			if (($name === ''pubDate'' OR $name === ''lastBuildDate'') AND (is_int($value) OR ctype_digit($value)))\n			{\n				// Convert timestamps to RFC 822 formatted dates\n				$value = date(DATE_RFC822, $value);\n			}\n			elseif (($name === ''link'' OR $name === ''docs'') AND strpos($value, ''://'') === FALSE)\n			{\n				// Convert URIs to URLs\n				$value = url::site($value, ''http'');\n			}\n\n			// Add the info to the channel\n			$feed->channel->addChild($name, $value);\n		}\n\n		foreach ($items as $item)\n		{\n			// Add the item to the channel\n			$row = $feed->channel->addChild(''item'');\n\n			foreach ($item as $name => $value)\n			{\n				if ($name === ''pubDate'' AND (is_int($value) OR ctype_digit($value)))\n				{\n					// Convert timestamps to RFC 822 formatted dates\n					$value = date(DATE_RFC822, $value);\n				}\n				elseif (($name === ''link'' OR $name === ''guid'') AND strpos($value, ''://'') === FALSE)\n				{\n					// Convert URIs to URLs\n					$value = url::site($value, ''http'');\n				}\n\n				// Add the info to the row\n				$row->addChild($name, $value);\n			}\n		}\n\n		return $feed->asXML();\n	}\n\n} // End Feed\n', 'asdfasfdasd af asf asf', 'feed.php', 3166, 1),
(6, 4, '2010-04-16 03:36:52', '2010-04-16 03:36:52', '<?php\r\nclass AppController extends Controller {\r\n\r\n	var $components = array(\r\n		''Auth'',\r\n		''Session'',\r\n		''DebugKit.Toolbar''\r\n	);\r\n\r\n	var $helpers = array(\r\n		''UploadPack.Upload'',\r\n		''Session'',\r\n		''Form'',\r\n		''Text'',\r\n		''Time''\r\n	);\r\n\r\n	function beforeFilter() {\r\n		$this->__configureAuth();\r\n		App::import(''Model'', ''User'');\r\n		User::store($this->Auth->user());\r\n	}\r\n\r\n	function beforeRender() {\r\n		// Configure Layout\r\n		if ($this->_prefix()) {\r\n			$this->layout = ''admin'';\r\n		}\r\n\r\n		// Load common layout variables\r\n		$this->loadModel(''User'');\r\n		$popUsers = $this->User->find(''list'', array(''limit'' => 10));\r\n		$reviewCount = $this->User->Review->find(''count'');\r\n		$this->set(compact(''popUsers'', ''reviewCount''));\r\n	}\r\n\r\n	/**\r\n	 * Checks to see if the current user is the owner of the record\r\n	 */\r\n	function _owner($id) {\r\n		if ($this->Auth->user(''id'') == $this->{$this->modelClass}->field($this->modelClass.''.user_id'', array($this->modelClass.''.id'' => $id))) {\r\n			return true;\r\n		} else {\r\n			return false;\r\n		}\r\n	}\r\n\r\n	/**\r\n	 * Checks to see if the current user is a subscriber\r\n	 */\r\n	function _subscriber($id) {\r\n		$results = $this->{$this->modelClass}->Subscriber->find(''first'',\r\n			array(''conditions'' => array(\r\n				''foreign_model'' => $this->modelClass,\r\n				''foreign_id'' => $id,\r\n				''user_id'' => $this->Auth->user(''id'')\r\n			))\r\n		);\r\n		$this->set(''subscriber'', $results);\r\n		return $results;\r\n	}\r\n\r\n	/**\r\n	 * Checks to see what the current prefix in use is. Checks for ''admin'' by\r\n	 * default.\r\n	 *\r\n	 * @return boolean\r\n	 * @access protected\r\n	 **/\r\n	function _prefix($prefix = ''admin'') {\r\n		if (isset($this->params[''prefix'']) && $this->params[''prefix''] == $prefix) {\r\n			return true;\r\n		}\r\n		return false;\r\n	}\r\n\r\n	/**\r\n	 * Configures the AuthComponent according to the application''s settings\r\n	 *\r\n	 * @return void\r\n	 * @access private\r\n	 */\r\n	function __configureAuth() {\r\n		$this->Auth->fields = array(''username'' => ''username'', ''password'' => ''password'');\r\n		$this->Auth->loginAction = array(''plugin'' => null, ''admin'' => false, ''controller'' => ''users'', ''action'' => ''login'');\r\n		$this->Auth->logoutRedirect = ''/'';\r\n		$this->Auth->loginRedirect = ''/'';\r\n\r\n		if ($this->_prefix()) {\r\n			$this->Auth->deny();\r\n			if ($this->Auth->user(''role'') != ''Admin'') {\r\n				$this->Session->setFlash(''You must be an Admin to access this area'');\r\n				$this->redirect($this->Auth->loginAction);\r\n			}\r\n		} else {\r\n			$this->Auth->allow();\r\n			$this->Auth->deny(array(''add'', ''edit'', ''delete''));\r\n		}\r\n	}\r\n}\r\n?>\r\n\r\n', '', 'app_controller.php', 2504, 14),
(10, 8, '2010-04-16 17:06:05', '2010-04-16 17:06:05', '\r\npublic class Node {\r\n	public Vec data;\r\n	public Node parent;\r\n	public int y;\r\n	public int z;\r\n	public Node(int x, int y, int z, Node p)\r\n	{\r\n		data = new Vec(x, y, z);\r\n		parent = p;\r\n	}\r\n	public boolean equals(Object obj)\r\n	{\r\n        if (obj == null)\r\n            return false;\r\n        if (obj == this)\r\n            return true;\r\n        if (obj.getClass() != getClass())\r\n            return false;\r\n\r\n        Node n = (Node)obj;\r\n        return (data.x == n.data.x) && (data.y == n.data.y) && (data.z == n.data.z);\r\n	}\r\n	public Object clone() {\r\n		Node obj = new Node(this.data.x, this.data.y, this.data.z, null);\r\n		return obj;\r\n	}\r\n}\r\n', 'Node class with the clone() function that needs to be set to override.', 'Node.java', 643, 4),
(13, 9, '2010-04-16 22:45:51', '2010-04-16 22:45:51', '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">\n\n\n<html>\n<html xmlns="http://www.w3.org/1999/xhtml">\n\n\n	<head>\n		<title>Temp for ProCode</title>\n		\n		<link href="css/style.css" rel="stylesheet" type="text/css" />\n\n		\n	</head>\n	\n	<body>\n	\n		<div id="wrapper">\n		\n			\n			<div id="header-reviews"> <!-- change header-reviews to header for all other pages -->\n			\n				<div id="top-nav">\n					\n					<ul id="user-navigation">\n				\n						<li><a href="#">Log In</a></li>\n						<li><a href="#">Sign Up</a></li>\n						<li><a href="#">My Reviews</a></li>\n						<li><a href="#">Subscriptions</a></li>\n				\n					</ul>\n\n					<form name="input" action="html_form_submit.asp" method="get">\n					<input type="text" name="user" />\n					<input type="submit" value="Submit" />\n					</form> \n				\n				</div><!-- top-nav -->\n			\n				<h1 id="procode">ProCode a web based community here to review develper code...</h1>\n			\n\n			\n			</div><!-- header-reviews / header -->\n		\n		\n		<div id="content">\n		\n		\n				<ul id="main-navigation">\n\n					<li><a href="#" class="current">Reviews</a></li>\n					<li><a href="#">Users</a></li>\n					<li><a href="#">Ranks</a></li>\n					<li><a href="#">FAQ</a></li>\n\n				</ul>\n		\n		\n			<div id="main-content">\n			\n			\n			<ul id="filter-posts">\n			\n				<li>Filter by:</li>\n				<li><a href="#"class="current">Recent</a> |</li>\n				<li><a href="#">Open</a> |</li>\n				<li><a href="#">New</a> |</li>\n				<li><a href="#">Old</a> |</li>\n				<li><a href="#">Popular</a></li>\n			\n			</ul>\n			\n			\n			<div style="clear:both"></div>\n			\n			\n				<div class="post">\n				\n					<div class="post-numbers">\n						\n						<div class="reviews-number">\n							<div class="number-of-reviews">8</div>\n							<div class="reviews">reviews</div>\n						</div>\n						\n						<div class="votes-number">\n							<div class="votes">votes</div>\n							<div class="number-of-votes">6</div>						\n						</div>\n						\n					</div>\n				\n				\n				\n					<div class="post-content answered">\n					\n					<a href="#" class="post-subject">Where to insert $() in CSS apples?</a>\n					<div class="post-summary">Hi, I am trying to include the "flair" in my website. One problem I face is that I cannot change the background color. I went to the flair page and saw that I should use the css style to... </div>\n					\n					<a href="#" class="tags">Tags: CSS, HTML, Actionscript</a>\n					\n					<ul class="user-info">\n					\n					<li>asked 7 hours ago</li>\n					<li>by <a href="#">Redjoker88</a>,</li>\n					<li><a href="#">Grand Puba</a></li>\n					\n					</ul>\n					\n					</div>\n				\n				</div>\n				\n			<div style="clear:both"></div>\n		\n				\n			<ul id="review-nav">\n				\n				<li class="current"><a href="#">1</a></li>\n				<li><a href="#">2</a></li>\n				<li><a href="#">3</a></li>\n				<li><a href="#">4</a></li>\n				<li><a href="#">5</a></li>\n			\n			</ul>\n			\n			</div><!-- main-content -->\n		\n				\n		\n			<div id="side-bar">\n			\n				<h3>Popular <span class="light-blue">Tags</span></h3>\n			\n					<ul>\n				\n						<li><a href="#">CSS</a></li>\n						<li><a href="#">Java</a></li>\n						<li><a href="#">Javascript</a></li>\n						<li><a href="#">PHP</a></li>\n						<li><a href="#">something</a></li>\n						<li><a href="#">CSS</a></li>\n						<li><a href="#">CSS</a></li>\n					\n					</ul>\n				\n				<h3>Popular <span class="light-blue">Useds</span></h3>\n				\n					<ul>\n				\n						<li><a href="#">Redjoker88</a></li>\n						<li><a href="#">Proloser</a></li>\n						<li><a href="#">Katana234</a></li>\n						<li><a href="#">CSS</a></li>\n						<li><a href="#">CSSforEvEr!</a></li>\n						<li><a href="#">CSS</a></li>\n						<li><a href="#">CSS</a></li>\n				\n					</ul>\n			\n				<p class="ad-space">Ad Space Available</p>\n				<p class="ad-space">Ad Space Available</p>\n			\n			\n			</div><!-- side-bar -->\n		\n		\n		</div><!-- content -->\n		\n		\n			<div id="footer">\n			\n			<ul>\n			\n				<li><h4><a href="#">Navigation</a></h4>\n			\n					<ul>\n				\n						<li><a href="#">Reviews</a></li>\n						<li><a href="#">Users</a></li>\n						<li><a href="#">Ranks</a></li>\n						<li><a href="#">FAQ</a></li>\n				\n					</ul>\n			\n				</li>\n				<li><h4><a href="#">Terms of Use</a></h4></li>\n				<li><h4><a href="#">Privacy Policy</a></h4></li>\n				<li><h4><a href="#">Art Engingeered</a></h4>\n				\n					<ul>\n				\n						<li><a href="mailto:redjoker88@hotmail.com">Andrew Hipp</a></li>\n						<li><a href="http://www.deansofer.com">Dean Sofer</a></li>\n						<li><a href="http://www.jaimehernandez.com">Jaime Hernandez</a></li>\n						<li><a href="#">Mark Lenser</a></li>\n						<li><a href="http://www.nicholaschan.net">Nicholas Chan</a></li>\n				\n					</ul>\n\n			\n				</li>\n			\n			</ul>\n			\n			</div><!-- footer -->\n		\n		\n		</div><!-- wrapper -->\n	\n	</body>\n\n</html>\n', 'Thiddfsdfs is a generic lksdkahsdf asdkhlkasdksd ksjd jshd sd jsd s dsdf as  g dfg df dh s vew b b b dsh g dsfg ds fgds fgd', 'tmp.html', 4733, 11),
(16, 10, '2010-04-16 22:47:53', '2010-04-16 22:47:53', '<?php\n/**\n * Front to the WordPress application. This file doesn''t do anything, but loads\n * wp-blog-header.php which does and tells WordPress to load the theme.\n *\n * @package WordPress\n */\n\n/**\n * Tells WordPress to load the WordPress theme and output it.\n *\n * @var bool\n */\ndefine(''WP_USE_THEMES'', true);\n\n/** Loads the WordPress Environment and Template */\nrequire(''./wp-blog-header.php'');\n?>', 'This is a generic lksdkahsdf asdkhlkasdksd ksjd jshd sd jsd s dsdf as  g dfg df dh s vew b b b dsh g dsfg ds fgds fgd', 'index.php', 397, 1),
(19, 11, '2010-04-16 22:50:39', '2010-04-16 22:50:39', '<div id="content">\n	<div id="main2">\n		<h1>Experience</h1>\n		<p>I am currently a Marriage and Family Therapy Trainee at San Diego Hospice Grief Care and Education Center.  As a counselor I give therapeutic services in English and Spanish to adults, children, adolescents, and families in the center''s office, in the client''s home, or at the client''s school.  I have also had the opportunity to facilitate support groups that the center provides.  Since I am not yet licensed I have continuous weekly individual and group supervision.  The center has also provided me with applicable training opportunities which a considerable amount includes over 60 hours of grief and loss education.  I have gained valuable training and experience in progress note taking, administering assessments, and proper use of program''s database.  Common issues that I have worked with are anxiety, depression, stress, grief, complicated grief, adjustment disorders, post traumatic stress disorder, and family dysfunction  just to name a few.  In this training program I also assisted as a Cabin Big Buddy in a grief camp called Camp Erin.   This camp is intended for children who have lost someone significant in their life.  The types of losses varied amongst those who attended the camp.  Some of the losses were sudden, traumatic, or due to a known terminal illness.  Having the opportunity to meet the unique needs of the children was very rewarding experience.</p>\n		<p>Additional experience that I have working with people are in positions where I was an assistant teacher, teacher, mental health worker, and a research assistant.  I have been a teacher and assistant teacher working in preschools with children between the ages of 2 to 5 years old.  I have also worked as an assistant teacher with older children in summer camps, and most recently worked in residential treatment facility with children ages 13 to 17 years old.  My duties as a mental health worker at the residential treatment facility was to assist on improving the children''s behavior by helping out in group therapy, allowing the child to process problems or feelings, tend to the child’s needs, and reinforce appropriate behavior.  If an incident occurred I would report to supervisor and write an incident report.  On a daily basis I would  write progress notes on individual residents.  Additional relevant experience that I have is ability facilitate client evaluation, tracking, and case management systems.  I have updated and maintained database managed systems used to provide development services and case management.</p>\n		<p>Research experience that I have is when I worked with schizophrenic patients and their adherence to their medications.  In this study I managed finances, entered data, co-facilitated sessions, interacted with participants in research study, assisted in recruiting schizophrenic patients to participate in research study, and received some training in assessing participants.  In another study I assisted by  conducting tests and assessments to study the effects of encoding condition on source memory for odors in healthy young and older adults.  I also helped graduate student in preparing for conduction of assessments and tests.</p>\n	</div>\n</div>', 'asdlfjlasjf lasdfasf', 'experience.php', 3243, 11),
(22, 12, '2010-04-17 01:11:20', '2010-04-17 01:11:20', '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">\n<html xmlns="http://www.w3.org/1999/xhtml">\n<head>\n<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />\n<title>Pinnacle Design Center &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;branding | photography | education &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Los Angeles</title>\n\n<link rel="shortcut icon" type="image/x-icon" href="assets/favicon.ico">\n\n<link href="css/style.css" rel="stylesheet" type="text/css" />\n\n\n</head>\n\n<style>\n\n	div#main {\n		background-image:url(assets/backgrounds/about1.jpg);\n		\n	}\n\n</style>\n\n\n\n<body>\n\n<div id="outerDiv">\n\n	<div id="mainNavigation">\n    	\n	  <div id="navigation">\n                \n                <ul>\n                \n                		<li><a href="about_us.html" class="currentLink1">About Us</a></li>\n                  		<li><a href="branding.html" class="link2">Branding</a></li>\n                        <li><a href="photography.html" class="link3">Photography</a></li>\n                        <li><a href="classes/art_and_design.html" class="link4">Education</a></li>\n                        <li><a href="news_and_events.html" class="link5">News & Events</a></li>\n                        <li><a href="resources.html" class="link6" target="_blank">Resources</a></li>\n                        <li><a href="contact.html" class="link7">Contact Us</a></li>\n                        \n        		</ul>\n		</div>     \n        \n        <div id="logo"></div>\n    </div>\n    \n  <div id="main">  \n  \n        <div id="about_pdc">\n		\n        		<ul>\n            \n                        <li><a href="about_us.html" class="currentLink1">PINNACLE DESIGN CENTER</a></li>\n                        <li><a href="founders/steve_trapero.html" class="link2">FOUNDERS</a></li>\n                        <li><a href="achievements/awards.html" class="link3">ACHIEVEMENTS</a></li>\n        \n            	</ul>\n		\n        </div>\n        \n  		<div id="aboutpdc">\n				    <p>\n                    we are Pinnacle Design Center. we''re a unique, creative business venture owned and \n                    operated by the award-winning husband and wife team, steve trapero and yvonne xu. \n                    the business has combined 3 of their passions under 1 roof!<br />\n 					branding, photography and education.</p>\n 					<p>Pinnacle Design Center has several designers, interns, employees, and instructors \n                    involved with us at any given time. however, steve trapero and yvonne xu remain the\n                    driving force behind each arm of the business.\n                    </p>\n        \n        </div>\n        \n        <div id="aboutCaption">\n                    <h6>photos from our<br />\n					new year''s eve grand<br />\n					opening celebration<br />\n					december 31, 2007\n                    </h6>\n        </div>\n  </div>\n\n\n</div>\n\n<script type="text/javascript">\nvar gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");\ndocument.write(unescape("%3Cscript src=''" + gaJsHost + "google-analytics.com/ga.js'' type=''text/javascript''%3E%3C/script%3E"));\n</script>\n<script type="text/javascript">\ntry {\nvar pageTracker = _gat._getTracker("UA-11906294-2");\npageTracker._trackPageview();\n} catch(err) {}</script>\n\n</body>\n</html>\n', 'this is shteohashjaskhjas s sjk sss sdfsfhjsfjkfjfhas fhw fwh awhow foawhef wh foawh w', 'about_us.html', 3306, 11),
(25, 13, '2010-04-17 01:14:29', '2010-04-17 01:14:29', '\r\npublic class Node {\r\n	public Vec data;\r\n	public Node parent;\r\n	public int y;\r\n	public int z;\r\n	public Node(int x, int y, int z, Node p)\r\n	{\r\n		data = new Vec(x, y, z);\r\n		parent = p;\r\n	}\r\n	public boolean equals(Object obj)\r\n	{\r\n        if (obj == null)\r\n            return false;\r\n        if (obj == this)\r\n            return true;\r\n        if (obj.getClass() != getClass())\r\n            return false;\r\n\r\n        Node n = (Node)obj;\r\n        return (data.x == n.data.x) && (data.y == n.data.y) && (data.z == n.data.z);\r\n	}\r\n	public Object clone() {\r\n		Node obj = new Node(this.data.x, this.data.y, this.data.z, null);\r\n		return obj;\r\n	}\r\n}\r\n', 'This is a node.', 'Node.java', 643, 4),
(26, 13, '2010-04-17 01:14:29', '2010-04-17 01:14:29', '\npublic class Vec {\n	public int x, y, z;\n	public Vec (int a, int b, int c)\n	{\n		x = a;\n		y = b;\n		z = c;\n	}\n	public Vec (String a, String b, String c)\n	{\n		x = Integer.parseInt(a);\n		y = Integer.parseInt(b);\n		z = Integer.parseInt(c);\n	}\n	public String toString()\n	{\n		return x + " " + y + " " + z + " ";\n	}\n}\n', 'This is a Vec.', 'Vec.java', 310, 4),
(27, 14, '2010-04-17 01:15:38', '2010-04-17 01:15:38', '<?\r\n$GLOBALS[''SECTION''] = "home";\r\ninclude("/home/mlenser/public_html/include.inc");\r\nMasterTop();\r\n?>\r\n\r\n<div class="colleft">\r\n	<div class="column_center">\r\n		<h1>My Portfolio</h1>\r\n		<p class="text_block">Welcome to my portfolio of works. This project should not be regarded as a finished product, although it is well on the way there. Creating it takes time and it will get better with time. At this point it has structure and needs fixes and content. </p>\r\n\r\n		<h2>This layout</h2>\r\n		<p class="text_block">This layout is designed to work on all major platforms of browser and resolution. It is designed to be fluid in order to expand and show information on larger resolutions, but also works at 800x600.  This layout works in all resolutions* and allcurrent browsers with significant market share*:\r\n		<br />\r\n		<img src="images/browsers/Firefox-32.png" alt="Mozilla Firefox" title="Mozilla Firefox 3+" />\r\n		<img src="images/browsers/IE-32.png" alt="Internet Explorer 5.5, 6, 7 and 8"  title="Internet Explorer 5.5 6, 7 and 8" />\r\n		<img src="images/browsers/Chrome-32.png" alt="Google Chrome" title="Google Chrome" />\r\n		<img src="images/browsers/Safari-32.png" alt="Mac Safari"  title="Safari for Mac users" />\r\n		<img src="images/browsers/Opera-32.png" alt="Opera" title="Opera 10.0" />\r\n		<br/>\r\n		*based on the current list of <a href="http://www.w3schools.com/browsers/browsers_stats.asp">Web Browser Statistics</a> and <a href="http://www.w3schools.com/browsers/browsers_display.asp">Browser Resolution Statistics</a></p>\r\n\r\n		<h3>Main Page</h3>\r\n		<p class="text_block">This main page is rendered with 1 background image for the gradient and the rest is done with CSS3. The alpha transparency, the rounded corners, everything. Unfortunately no version of IE supports CSS3. Therefore it has fallback code for IE that uses JavaScript  and some filters(in CSS) to re-create the same effect. The rounded corners effect for IE is built on jQuery.</p>\r\n\r\n		<h3>Navigation</h3>\r\n		<p class="text_block">The navigation is designed to be functional, allowing the user to open up sub-menus without a page refresh. It also is tested to work on all above browsers, although IE5.5 and 6 do not support transparent PNG (I will try to implement  this at some point). The navigation is built on jQuery.</p>\r\n\r\n		<h3>Database Driven Content</h3>\r\n		<p class="text_block">I pride my work on being easily editable and strive to make every page database driven to allow administrators to login and easily edit content without having to know any code. This portfolio website will also function that way after I get a bulk of my previous work on here.</p>\r\n	</div>\r\n	<div class="column_right">\r\n		<h2>Hi, I''m Mark Lenser</h2>\r\n		<p class="text_block">I am currently living in <b>Orange, CA</b> and am looking for a part-time job/internship opportunity while I attend California Polytechnic State University, Pomona. If that opportunity eventually lead to full employment post-graduation then all the better. I am about a year away from graduating with a B.S. in Computer Information Systems. I prefer <b>Back-End Development</b>, primarily enjoy working with PHP and mySQL. I also am a capable Front-End developer, working with CSS, HTML/XHTML, JavaScript. To find out more about my skills please find out more <a href="/about/">about me</a>.</p>\r\n	</div>\r\n</div>\r\n\r\n<?\r\nMasterBottom();\r\n?>', 'Index page', 'index.php', 3384, 1),
(28, 14, '2010-04-17 01:15:38', '2010-04-17 01:15:38', '<?\r\n$GLOBALS[''SECTION''] = "home";\r\ninclude("/home/mlenser/public_html/include.inc");\r\nMasterTop();\r\n?>\r\n\r\n		<h1>Portfolio of Works</h1>\r\n		<p class="text_block"><img class="float_left rounded_corners" src="/images/work.png" /> <img class="float_left rounded_corners" src="/images/work.png" /> <img class="float_left rounded_corners" src="/images/work.png" /> <img class="float_left rounded_corners" src="/images/work.png" /></p>\r\n\r\n<?\r\nMasterBottom();\r\n?>', 'Portfolio', 'portfolio.php', 455, 1);

-- --------------------------------------------------------

--
-- Table structure for table `sources_revs`
--

DROP TABLE IF EXISTS `sources_revs`;
CREATE TABLE IF NOT EXISTS `sources_revs` (
  `version_id` int(11) NOT NULL auto_increment,
  `id` int(11) NOT NULL,
  `version_created` datetime NOT NULL,
  `content` text NOT NULL,
  `size` int(11) NOT NULL,
  PRIMARY KEY  (`version_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=34 ;

--
-- Dumping data for table `sources_revs`
--

INSERT INTO `sources_revs` (`version_id`, `id`, `version_created`, `content`, `size`) VALUES
(1, 4, '2010-04-16 03:35:21', '<?php defined(''SYSPATH'') OR die(''No direct access allowed.'');\n/**\n * RSS and Atom feed helper.\n *\n * @package    Kohana\n * @category   Helpers\n * @author     Kohana Team\n * @copyright  (c) 2007-2009 Kohana Team\n * @license    http://kohanaphp.com/license\n */\nclass Kohana_Feed {\n\n	/**\n	 * Parses a remote feed into an array.\n	 *\n	 * @param   string   remote feed URL\n	 * @param   integer  item limit to fetch\n	 * @return  array\n	 */\n	public static function parse($feed, $limit = 0)\n	{\n		// Check if SimpleXML is installed\n		if( ! function_exists(''simplexml_load_file''))\n			throw new Kohana_Exception(''SimpleXML must be installed!'');\n\n		// Make limit an integer\n		$limit = (int) $limit;\n\n		// Disable error reporting while opening the feed\n		$ER = error_reporting(0);\n\n		// Allow loading by filename or raw XML string\n		$load = (is_file($feed) OR validate::url($feed)) ? ''simplexml_load_file'' : ''simplexml_load_string'';\n\n		// Load the feed\n		$feed = $load($feed, ''SimpleXMLElement'', LIBXML_NOCDATA);\n\n		// Restore error reporting\n		error_reporting($ER);\n\n		// Feed could not be loaded\n		if ($feed === FALSE)\n			return array();\n\n		// Detect the feed type. RSS 1.0/2.0 and Atom 1.0 are supported.\n		$feed = isset($feed->channel) ? $feed->xpath(''//item'') : $feed->entry;\n\n		$i = 0;\n		$items = array();\n\n		foreach ($feed as $item)\n		{\n			if ($limit > 0 AND $i++ === $limit)\n				break;\n\n			$items[] = (array) $item;\n		}\n\n		return $items;\n	}\n\n	/**\n	 * Creates a feed from the given parameters.\n	 *\n	 * @param   array   feed information\n	 * @param   array   items to add to the feed\n	 * @param   string  define which format to use (only rss2 is supported)\n	 * @param   string  define which encoding to use\n	 * @return  string\n	 */\n	public static function create($info, $items, $format = ''rss2'', $encoding = ''UTF-8'')\n	{\n		$info += array(''title'' => ''Generated Feed'', ''link'' => '''', ''generator'' => ''KohanaPHP'');\n\n		$feed = ''<?xml version="1.0" encoding="''.$encoding.''"?><rss version="2.0"><channel></channel></rss>'';\n		$feed = simplexml_load_string($feed);\n\n		foreach ($info as $name => $value)\n		{\n			if (($name === ''pubDate'' OR $name === ''lastBuildDate'') AND (is_int($value) OR ctype_digit($value)))\n			{\n				// Convert timestamps to RFC 822 formatted dates\n				$value = date(DATE_RFC822, $value);\n			}\n			elseif (($name === ''link'' OR $name === ''docs'') AND strpos($value, ''://'') === FALSE)\n			{\n				// Convert URIs to URLs\n				$value = url::site($value, ''http'');\n			}\n\n			// Add the info to the channel\n			$feed->channel->addChild($name, $value);\n		}\n\n		foreach ($items as $item)\n		{\n			// Add the item to the channel\n			$row = $feed->channel->addChild(''item'');\n\n			foreach ($item as $name => $value)\n			{\n				if ($name === ''pubDate'' AND (is_int($value) OR ctype_digit($value)))\n				{\n					// Convert timestamps to RFC 822 formatted dates\n					$value = date(DATE_RFC822, $value);\n				}\n				elseif (($name === ''link'' OR $name === ''guid'') AND strpos($value, ''://'') === FALSE)\n				{\n					// Convert URIs to URLs\n					$value = url::site($value, ''http'');\n				}\n\n				// Add the info to the row\n				$row->addChild($name, $value);\n			}\n		}\n\n		return $feed->asXML();\n	}\n\n} // End Feed\n', 3166),
(2, 4, '2010-04-16 03:35:21', '', 0),
(3, 5, '2010-04-16 03:36:11', '<?php defined(''SYSPATH'') OR die(''No direct access allowed.'');\n/**\n * RSS and Atom feed helper.\n *\n * @package    Kohana\n * @category   Helpers\n * @author     Kohana Team\n * @copyright  (c) 2007-2009 Kohana Team\n * @license    http://kohanaphp.com/license\n */\nclass Kohana_Feed {\n\n	/**\n	 * Parses a remote feed into an array.\n	 *\n	 * @param   string   remote feed URL\n	 * @param   integer  item limit to fetch\n	 * @return  array\n	 */\n	public static function parse($feed, $limit = 0)\n	{\n		// Check if SimpleXML is installed\n		if( ! function_exists(''simplexml_load_file''))\n			throw new Kohana_Exception(''SimpleXML must be installed!'');\n\n		// Make limit an integer\n		$limit = (int) $limit;\n\n		// Disable error reporting while opening the feed\n		$ER = error_reporting(0);\n\n		// Allow loading by filename or raw XML string\n		$load = (is_file($feed) OR validate::url($feed)) ? ''simplexml_load_file'' : ''simplexml_load_string'';\n\n		// Load the feed\n		$feed = $load($feed, ''SimpleXMLElement'', LIBXML_NOCDATA);\n\n		// Restore error reporting\n		error_reporting($ER);\n\n		// Feed could not be loaded\n		if ($feed === FALSE)\n			return array();\n\n		// Detect the feed type. RSS 1.0/2.0 and Atom 1.0 are supported.\n		$feed = isset($feed->channel) ? $feed->xpath(''//item'') : $feed->entry;\n\n		$i = 0;\n		$items = array();\n\n		foreach ($feed as $item)\n		{\n			if ($limit > 0 AND $i++ === $limit)\n				break;\n\n			$items[] = (array) $item;\n		}\n\n		return $items;\n	}\n\n	/**\n	 * Creates a feed from the given parameters.\n	 *\n	 * @param   array   feed information\n	 * @param   array   items to add to the feed\n	 * @param   string  define which format to use (only rss2 is supported)\n	 * @param   string  define which encoding to use\n	 * @return  string\n	 */\n	public static function create($info, $items, $format = ''rss2'', $encoding = ''UTF-8'')\n	{\n		$info += array(''title'' => ''Generated Feed'', ''link'' => '''', ''generator'' => ''KohanaPHP'');\n\n		$feed = ''<?xml version="1.0" encoding="''.$encoding.''"?><rss version="2.0"><channel></channel></rss>'';\n		$feed = simplexml_load_string($feed);\n\n		foreach ($info as $name => $value)\n		{\n			if (($name === ''pubDate'' OR $name === ''lastBuildDate'') AND (is_int($value) OR ctype_digit($value)))\n			{\n				// Convert timestamps to RFC 822 formatted dates\n				$value = date(DATE_RFC822, $value);\n			}\n			elseif (($name === ''link'' OR $name === ''docs'') AND strpos($value, ''://'') === FALSE)\n			{\n				// Convert URIs to URLs\n				$value = url::site($value, ''http'');\n			}\n\n			// Add the info to the channel\n			$feed->channel->addChild($name, $value);\n		}\n\n		foreach ($items as $item)\n		{\n			// Add the item to the channel\n			$row = $feed->channel->addChild(''item'');\n\n			foreach ($item as $name => $value)\n			{\n				if ($name === ''pubDate'' AND (is_int($value) OR ctype_digit($value)))\n				{\n					// Convert timestamps to RFC 822 formatted dates\n					$value = date(DATE_RFC822, $value);\n				}\n				elseif (($name === ''link'' OR $name === ''guid'') AND strpos($value, ''://'') === FALSE)\n				{\n					// Convert URIs to URLs\n					$value = url::site($value, ''http'');\n				}\n\n				// Add the info to the row\n				$row->addChild($name, $value);\n			}\n		}\n\n		return $feed->asXML();\n	}\n\n} // End Feed\n', 3166),
(4, 6, '2010-04-16 03:36:52', '', 0),
(5, 6, '2010-04-16 03:36:52', '<?php\r\n/**\r\n * Application model for Cake.\r\n *\r\n * This file is application-wide model file. You can put all\r\n * application-wide model-related methods here.\r\n *\r\n * PHP versions 4 and 5\r\n *\r\n * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)\r\n * Copyright 2005-2010, Cake Software Foundation, Inc. (http://cakefoundation.org)\r\n *\r\n * Licensed under The MIT License\r\n * Redistributions of files must retain the above copyright notice.\r\n *\r\n * @copyright     Copyright 2005-2010, Cake Software Foundation, Inc. (http://cakefoundation.org)\r\n * @link          http://cakephp.org CakePHP(tm) Project\r\n * @package       cake\r\n * @subpackage    cake.app\r\n * @since         CakePHP(tm) v 0.2.9\r\n * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)\r\n */\r\n\r\n/**\r\n * Application model for Cake.\r\n *\r\n * Add your application-wide methods in the class below, your models\r\n * will inherit them.\r\n *\r\n * @package       cake\r\n * @subpackage    cake.app\r\n */\r\nclass AppModel extends Model {\r\n	var $recursive = -1;\r\n	\r\n	/**\r\n	 * Run this during beforeSave() to set the currently logged in user as the owner of the record\r\n	 */\r\n	function owner() {\r\n		if (!isset($this->data[$this->name][''id''])) {\r\n			$this->data[$this->name][''user_id''] = User::get(''id'');\r\n			return true;\r\n		} else {\r\n			return false;\r\n		}\r\n	}\r\n}\r\n?>', 1346),
(6, 6, '2010-04-16 03:36:52', '<?php\r\nclass AppController extends Controller {\r\n\r\n	var $components = array(\r\n		''Auth'',\r\n		''Session'',\r\n		''DebugKit.Toolbar''\r\n	);\r\n\r\n	var $helpers = array(\r\n		''UploadPack.Upload'',\r\n		''Session'',\r\n		''Form'',\r\n		''Text'',\r\n		''Time''\r\n	);\r\n\r\n	function beforeFilter() {\r\n		$this->__configureAuth();\r\n		App::import(''Model'', ''User'');\r\n		User::store($this->Auth->user());\r\n	}\r\n\r\n	function beforeRender() {\r\n		// Configure Layout\r\n		if ($this->_prefix()) {\r\n			$this->layout = ''admin'';\r\n		}\r\n\r\n		// Load common layout variables\r\n		$this->loadModel(''User'');\r\n		$popUsers = $this->User->find(''list'', array(''limit'' => 10));\r\n		$reviewCount = $this->User->Review->find(''count'');\r\n		$this->set(compact(''popUsers'', ''reviewCount''));\r\n	}\r\n\r\n	/**\r\n	 * Checks to see if the current user is the owner of the record\r\n	 */\r\n	function _owner($id) {\r\n		if ($this->Auth->user(''id'') == $this->{$this->modelClass}->field($this->modelClass.''.user_id'', array($this->modelClass.''.id'' => $id))) {\r\n			return true;\r\n		} else {\r\n			return false;\r\n		}\r\n	}\r\n\r\n	/**\r\n	 * Checks to see if the current user is a subscriber\r\n	 */\r\n	function _subscriber($id) {\r\n		$results = $this->{$this->modelClass}->Subscriber->find(''first'',\r\n			array(''conditions'' => array(\r\n				''foreign_model'' => $this->modelClass,\r\n				''foreign_id'' => $id,\r\n				''user_id'' => $this->Auth->user(''id'')\r\n			))\r\n		);\r\n		$this->set(''subscriber'', $results);\r\n		return $results;\r\n	}\r\n\r\n	/**\r\n	 * Checks to see what the current prefix in use is. Checks for ''admin'' by\r\n	 * default.\r\n	 *\r\n	 * @return boolean\r\n	 * @access protected\r\n	 **/\r\n	function _prefix($prefix = ''admin'') {\r\n		if (isset($this->params[''prefix'']) && $this->params[''prefix''] == $prefix) {\r\n			return true;\r\n		}\r\n		return false;\r\n	}\r\n\r\n	/**\r\n	 * Configures the AuthComponent according to the application''s settings\r\n	 *\r\n	 * @return void\r\n	 * @access private\r\n	 */\r\n	function __configureAuth() {\r\n		$this->Auth->fields = array(''username'' => ''username'', ''password'' => ''password'');\r\n		$this->Auth->loginAction = array(''plugin'' => null, ''admin'' => false, ''controller'' => ''users'', ''action'' => ''login'');\r\n		$this->Auth->logoutRedirect = ''/'';\r\n		$this->Auth->loginRedirect = ''/'';\r\n\r\n		if ($this->_prefix()) {\r\n			$this->Auth->deny();\r\n			if ($this->Auth->user(''role'') != ''Admin'') {\r\n				$this->Session->setFlash(''You must be an Admin to access this area'');\r\n				$this->redirect($this->Auth->loginAction);\r\n			}\r\n		} else {\r\n			$this->Auth->allow();\r\n			$this->Auth->deny(array(''add'', ''edit'', ''delete''));\r\n		}\r\n	}\r\n}\r\n?>\r\n\r\n', 2504),
(7, 7, '2010-04-16 13:42:36', '<?php\r\nclass AppController extends Controller {\r\n\r\n	var $components = array(\r\n		''Auth'',\r\n		''Session'',\r\n		''DebugKit.Toolbar''\r\n	);\r\n\r\n	var $helpers = array(\r\n		''UploadPack.Upload'',\r\n		''Session'',\r\n		''Form'',\r\n		''Text'',\r\n		''Time''\r\n	);\r\n\r\n	function beforeFilter() {\r\n		$this->__configureAuth();\r\n		App::import(''Model'', ''User'');\r\n		User::store($this->Auth->user());\r\n	}\r\n\r\n	function beforeRender() {\r\n		// Configure Layout\r\n		if ($this->_prefix()) {\r\n			$this->layout = ''admin'';\r\n		}\r\n\r\n		// Load common layout variables\r\n		$this->loadModel(''User'');\r\n		$popUsers = $this->User->find(''list'', array(''limit'' => 10));\r\n		$reviewCount = $this->User->Review->find(''count'');\r\n		$this->set(compact(''popUsers'', ''reviewCount''));\r\n	}\r\n\r\n	/**\r\n	 * Checks to see if the current user is the owner of the record and sets a boolean variable to the view\r\n	 * \r\n	 * @param $id int id of the current record to check ownership for\r\n	 */\r\n	function _owner($id, $relatedModel = null) {\r\n		if ($relatedModel) {\r\n			$check = $this->{$this->modelClass}->$relatedModel->field($this->relatedModel.''.user_id'', array($this->relatedModel.''.id'' => $id));\r\n		} else {\r\n			$check = $this->{$this->modelClass}->field($this->modelClass.''.user_id'', array($this->modelClass.''.id'' => $id));\r\n		}\r\n		if ($this->Auth->user(''id'') == $check) {\r\n			$this->set(''owner'', true);\r\n			return true;\r\n		} else {\r\n			return false;\r\n		}\r\n	}\r\n\r\n	/**\r\n	 * Checks to see if the current user is a subscriber and sends subscription info to the view\r\n	 * Can be used in conjunction with the ''subscribe.ctp'' element\r\n	 * \r\n	 * @param $id int id of the current record to check a subscription for\r\n	 */\r\n	function _subscriber($id) {\r\n		$results = $this->{$this->modelClass}->Subscriber->find(''first'',\r\n			array(''conditions'' => array(\r\n				''foreign_model'' => $this->modelClass,\r\n				''foreign_id'' => $id,\r\n				''user_id'' => $this->Auth->user(''id'')\r\n			))\r\n		);\r\n		$this->set(''subscriber'', $results);\r\n		return $results;\r\n	}\r\n\r\n	/**\r\n	 * Checks to see what the current prefix in use is. Checks for ''admin'' by\r\n	 * default.\r\n	 *\r\n	 * @return boolean\r\n	 * @access protected\r\n	 **/\r\n	function _prefix($prefix = ''admin'') {\r\n		if (isset($this->params[''prefix'']) && $this->params[''prefix''] == $prefix) {\r\n			return true;\r\n		}\r\n		return false;\r\n	}\r\n\r\n	/**\r\n	 * Configures the AuthComponent according to the application''s settings\r\n	 *\r\n	 * @return void\r\n	 * @access private\r\n	 */\r\n	function __configureAuth() {\r\n		$this->Auth->fields = array(''username'' => ''username'', ''password'' => ''password'');\r\n		$this->Auth->loginAction = array(''plugin'' => null, ''admin'' => false, ''controller'' => ''users'', ''action'' => ''login'');\r\n		$this->Auth->logoutRedirect = ''/'';\r\n		$this->Auth->loginRedirect = ''/'';\r\n\r\n		if ($this->_prefix()) {\r\n			$this->Auth->deny();\r\n			if ($this->Auth->user(''role'') != ''Admin'') {\r\n				$this->Session->setFlash(''You must be an Admin to access this area'');\r\n				$this->redirect($this->Auth->loginAction);\r\n			}\r\n		} else {\r\n			$this->Auth->allow();\r\n			$this->Auth->deny(array(''add'', ''edit'', ''delete''));\r\n		}\r\n	}\r\n}\r\n?>\r\n\r\n', 3053),
(8, 7, '2010-04-16 13:42:36', '<?php\r\n/**\r\n * Short description for file.\r\n *\r\n * This file is application-wide helper file. You can put all\r\n * application-wide helper-related methods here.\r\n *\r\n * PHP versions 4 and 5\r\n *\r\n * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)\r\n * Copyright 2005-2010, Cake Software Foundation, Inc. (http://cakefoundation.org)\r\n *\r\n * Licensed under The MIT License\r\n * Redistributions of files must retain the above copyright notice.\r\n *\r\n * @copyright     Copyright 2005-2010, Cake Software Foundation, Inc. (http://cakefoundation.org)\r\n * @link          http://cakephp.org CakePHP(tm) Project\r\n * @package       cake\r\n * @subpackage    cake.cake\r\n * @since         CakePHP(tm) v 0.2.9\r\n * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)\r\n */\r\nApp::import(''Helper'', ''Helper'', false);\r\n\r\n/**\r\n * This is a placeholder class.\r\n * Create the same file in app/app_helper.php\r\n *\r\n * Add your application-wide methods in the class below, your helpers\r\n * will inherit them.\r\n *\r\n * @package       cake\r\n * @subpackage    cake.cake\r\n */\r\nclass AppHelper extends Helper {\r\n}\r\n?>', 1122),
(9, 7, '2010-04-16 13:42:36', '', 0),
(10, 8, '2010-04-16 13:53:57', '<?php\r\n/**\r\n * Application model for Cake.\r\n *\r\n * This file is application-wide model file. You can put all\r\n * application-wide model-related methods here.\r\n *\r\n * PHP versions 4 and 5\r\n *\r\n * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)\r\n * Copyright 2005-2010, Cake Software Foundation, Inc. (http://cakefoundation.org)\r\n *\r\n * Licensed under The MIT License\r\n * Redistributions of files must retain the above copyright notice.\r\n *\r\n * @copyright     Copyright 2005-2010, Cake Software Foundation, Inc. (http://cakefoundation.org)\r\n * @link          http://cakephp.org CakePHP(tm) Project\r\n * @package       cake\r\n * @subpackage    cake.app\r\n * @since         CakePHP(tm) v 0.2.9\r\n * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)\r\n */\r\n\r\n/**\r\n * Application model for Cake.\r\n *\r\n * Add your application-wide methods in the class below, your models\r\n * will inherit them.\r\n *\r\n * @package       cake\r\n * @subpackage    cake.app\r\n */\r\nclass AppModel extends Model {\r\n	var $recursive = -1;\r\n	\r\n	var $actsAs = array(''Containable'');\r\n	\r\n	/**\r\n	 * Run this during beforeSave() to set the currently logged in user as the owner of the record\r\n	 */\r\n	function owner() {\r\n		if (!isset($this->data[$this->name][''id''])) {\r\n			$this->data[$this->name][''user_id''] = User::get(''id'');\r\n			return true;\r\n		} else {\r\n			return false;\r\n		}\r\n	}\r\n}\r\n?>', 1387),
(11, 8, '2010-04-16 13:53:57', '<?php\r\n/**\r\n * PHP versions 4 and 5\r\n *\r\n * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)\r\n * Copyright 2005-2009, Cake Software Foundation, Inc. (http://cakefoundation.org)\r\n *\r\n * Licensed under The MIT License\r\n * Redistributions of files must retain the above copyright notice.\r\n *\r\n * @copyright     Copyright 2005-2009, Cake Software Foundation, Inc. (http://cakefoundation.org)\r\n * @link          http://cakephp.org CakePHP(tm) Project\r\n * @package       cake\r\n * @subpackage    cake.app\r\n * @since         CakePHP(tm) v 0.10.0.1076\r\n * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)\r\n */\r\nrequire ''webroot'' . DIRECTORY_SEPARATOR . ''index.php'';\r\n?>', 705),
(12, 8, '2010-04-16 13:53:57', '', 0),
(13, 9, '2010-04-16 13:54:24', '[submodule "plugins/welcome"]\r\n	path = plugins/welcome\r\n	url = git://github.com/ProLoser/CakePHP-Welcome.git\r\n[submodule "plugins/upload_pack"]\r\n	path = plugins/upload_pack\r\n	url = git://github.com/josegonzalez/uploadpack.git\r\n\r\n[submodule "plugins/debug_kit"]\r\n	path = plugins/debug_kit\r\n	url = git://github.com/cakephp/debug_kit.git\r\n', 336),
(14, 9, '2010-04-16 13:54:24', '', 0),
(15, 10, '2010-04-16 17:06:05', '\r\npublic class Node {\r\n	public Vec data;\r\n	public Node parent;\r\n	public int y;\r\n	public int z;\r\n	public Node(int x, int y, int z, Node p)\r\n	{\r\n		data = new Vec(x, y, z);\r\n		parent = p;\r\n	}\r\n	public boolean equals(Object obj)\r\n	{\r\n        if (obj == null)\r\n            return false;\r\n        if (obj == this)\r\n            return true;\r\n        if (obj.getClass() != getClass())\r\n            return false;\r\n\r\n        Node n = (Node)obj;\r\n        return (data.x == n.data.x) && (data.y == n.data.y) && (data.z == n.data.z);\r\n	}\r\n	public Object clone() {\r\n		Node obj = new Node(this.data.x, this.data.y, this.data.z, null);\r\n		return obj;\r\n	}\r\n}\r\n', 643),
(16, 11, '2010-04-16 17:06:05', '', 0),
(17, 12, '2010-04-16 17:06:05', '', 0),
(18, 13, '2010-04-16 22:45:51', '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">\n\n\n<html>\n<html xmlns="http://www.w3.org/1999/xhtml">\n\n\n	<head>\n		<title>Temp for ProCode</title>\n		\n		<link href="css/style.css" rel="stylesheet" type="text/css" />\n\n		\n	</head>\n	\n	<body>\n	\n		<div id="wrapper">\n		\n			\n			<div id="header-reviews"> <!-- change header-reviews to header for all other pages -->\n			\n				<div id="top-nav">\n					\n					<ul id="user-navigation">\n				\n						<li><a href="#">Log In</a></li>\n						<li><a href="#">Sign Up</a></li>\n						<li><a href="#">My Reviews</a></li>\n						<li><a href="#">Subscriptions</a></li>\n				\n					</ul>\n\n					<form name="input" action="html_form_submit.asp" method="get">\n					<input type="text" name="user" />\n					<input type="submit" value="Submit" />\n					</form> \n				\n				</div><!-- top-nav -->\n			\n				<h1 id="procode">ProCode a web based community here to review develper code...</h1>\n			\n\n			\n			</div><!-- header-reviews / header -->\n		\n		\n		<div id="content">\n		\n		\n				<ul id="main-navigation">\n\n					<li><a href="#" class="current">Reviews</a></li>\n					<li><a href="#">Users</a></li>\n					<li><a href="#">Ranks</a></li>\n					<li><a href="#">FAQ</a></li>\n\n				</ul>\n		\n		\n			<div id="main-content">\n			\n			\n			<ul id="filter-posts">\n			\n				<li>Filter by:</li>\n				<li><a href="#"class="current">Recent</a> |</li>\n				<li><a href="#">Open</a> |</li>\n				<li><a href="#">New</a> |</li>\n				<li><a href="#">Old</a> |</li>\n				<li><a href="#">Popular</a></li>\n			\n			</ul>\n			\n			\n			<div style="clear:both"></div>\n			\n			\n				<div class="post">\n				\n					<div class="post-numbers">\n						\n						<div class="reviews-number">\n							<div class="number-of-reviews">8</div>\n							<div class="reviews">reviews</div>\n						</div>\n						\n						<div class="votes-number">\n							<div class="votes">votes</div>\n							<div class="number-of-votes">6</div>						\n						</div>\n						\n					</div>\n				\n				\n				\n					<div class="post-content answered">\n					\n					<a href="#" class="post-subject">Where to insert $() in CSS apples?</a>\n					<div class="post-summary">Hi, I am trying to include the "flair" in my website. One problem I face is that I cannot change the background color. I went to the flair page and saw that I should use the css style to... </div>\n					\n					<a href="#" class="tags">Tags: CSS, HTML, Actionscript</a>\n					\n					<ul class="user-info">\n					\n					<li>asked 7 hours ago</li>\n					<li>by <a href="#">Redjoker88</a>,</li>\n					<li><a href="#">Grand Puba</a></li>\n					\n					</ul>\n					\n					</div>\n				\n				</div>\n				\n			<div style="clear:both"></div>\n		\n				\n			<ul id="review-nav">\n				\n				<li class="current"><a href="#">1</a></li>\n				<li><a href="#">2</a></li>\n				<li><a href="#">3</a></li>\n				<li><a href="#">4</a></li>\n				<li><a href="#">5</a></li>\n			\n			</ul>\n			\n			</div><!-- main-content -->\n		\n				\n		\n			<div id="side-bar">\n			\n				<h3>Popular <span class="light-blue">Tags</span></h3>\n			\n					<ul>\n				\n						<li><a href="#">CSS</a></li>\n						<li><a href="#">Java</a></li>\n						<li><a href="#">Javascript</a></li>\n						<li><a href="#">PHP</a></li>\n						<li><a href="#">something</a></li>\n						<li><a href="#">CSS</a></li>\n						<li><a href="#">CSS</a></li>\n					\n					</ul>\n				\n				<h3>Popular <span class="light-blue">Useds</span></h3>\n				\n					<ul>\n				\n						<li><a href="#">Redjoker88</a></li>\n						<li><a href="#">Proloser</a></li>\n						<li><a href="#">Katana234</a></li>\n						<li><a href="#">CSS</a></li>\n						<li><a href="#">CSSforEvEr!</a></li>\n						<li><a href="#">CSS</a></li>\n						<li><a href="#">CSS</a></li>\n				\n					</ul>\n			\n				<p class="ad-space">Ad Space Available</p>\n				<p class="ad-space">Ad Space Available</p>\n			\n			\n			</div><!-- side-bar -->\n		\n		\n		</div><!-- content -->\n		\n		\n			<div id="footer">\n			\n			<ul>\n			\n				<li><h4><a href="#">Navigation</a></h4>\n			\n					<ul>\n				\n						<li><a href="#">Reviews</a></li>\n						<li><a href="#">Users</a></li>\n						<li><a href="#">Ranks</a></li>\n						<li><a href="#">FAQ</a></li>\n				\n					</ul>\n			\n				</li>\n				<li><h4><a href="#">Terms of Use</a></h4></li>\n				<li><h4><a href="#">Privacy Policy</a></h4></li>\n				<li><h4><a href="#">Art Engingeered</a></h4>\n				\n					<ul>\n				\n						<li><a href="mailto:redjoker88@hotmail.com">Andrew Hipp</a></li>\n						<li><a href="http://www.deansofer.com">Dean Sofer</a></li>\n						<li><a href="http://www.jaimehernandez.com">Jaime Hernandez</a></li>\n						<li><a href="#">Mark Lenser</a></li>\n						<li><a href="http://www.nicholaschan.net">Nicholas Chan</a></li>\n				\n					</ul>\n\n			\n				</li>\n			\n			</ul>\n			\n			</div><!-- footer -->\n		\n		\n		</div><!-- wrapper -->\n	\n	</body>\n\n</html>\n', 4733),
(19, 14, '2010-04-16 22:45:51', '', 0),
(20, 15, '2010-04-16 22:45:51', '', 0),
(21, 16, '2010-04-16 22:47:53', '<?php\n/**\n * Front to the WordPress application. This file doesn''t do anything, but loads\n * wp-blog-header.php which does and tells WordPress to load the theme.\n *\n * @package WordPress\n */\n\n/**\n * Tells WordPress to load the WordPress theme and output it.\n *\n * @var bool\n */\ndefine(''WP_USE_THEMES'', true);\n\n/** Loads the WordPress Environment and Template */\nrequire(''./wp-blog-header.php'');\n?>', 397),
(22, 17, '2010-04-16 22:47:53', '', 0),
(23, 18, '2010-04-16 22:47:53', '', 0),
(24, 19, '2010-04-16 22:50:39', '<div id="content">\n	<div id="main2">\n		<h1>Experience</h1>\n		<p>I am currently a Marriage and Family Therapy Trainee at San Diego Hospice Grief Care and Education Center.  As a counselor I give therapeutic services in English and Spanish to adults, children, adolescents, and families in the center''s office, in the client''s home, or at the client''s school.  I have also had the opportunity to facilitate support groups that the center provides.  Since I am not yet licensed I have continuous weekly individual and group supervision.  The center has also provided me with applicable training opportunities which a considerable amount includes over 60 hours of grief and loss education.  I have gained valuable training and experience in progress note taking, administering assessments, and proper use of program''s database.  Common issues that I have worked with are anxiety, depression, stress, grief, complicated grief, adjustment disorders, post traumatic stress disorder, and family dysfunction  just to name a few.  In this training program I also assisted as a Cabin Big Buddy in a grief camp called Camp Erin.   This camp is intended for children who have lost someone significant in their life.  The types of losses varied amongst those who attended the camp.  Some of the losses were sudden, traumatic, or due to a known terminal illness.  Having the opportunity to meet the unique needs of the children was very rewarding experience.</p>\n		<p>Additional experience that I have working with people are in positions where I was an assistant teacher, teacher, mental health worker, and a research assistant.  I have been a teacher and assistant teacher working in preschools with children between the ages of 2 to 5 years old.  I have also worked as an assistant teacher with older children in summer camps, and most recently worked in residential treatment facility with children ages 13 to 17 years old.  My duties as a mental health worker at the residential treatment facility was to assist on improving the children''s behavior by helping out in group therapy, allowing the child to process problems or feelings, tend to the child’s needs, and reinforce appropriate behavior.  If an incident occurred I would report to supervisor and write an incident report.  On a daily basis I would  write progress notes on individual residents.  Additional relevant experience that I have is ability facilitate client evaluation, tracking, and case management systems.  I have updated and maintained database managed systems used to provide development services and case management.</p>\n		<p>Research experience that I have is when I worked with schizophrenic patients and their adherence to their medications.  In this study I managed finances, entered data, co-facilitated sessions, interacted with participants in research study, assisted in recruiting schizophrenic patients to participate in research study, and received some training in assessing participants.  In another study I assisted by  conducting tests and assessments to study the effects of encoding condition on source memory for odors in healthy young and older adults.  I also helped graduate student in preparing for conduction of assessments and tests.</p>\n	</div>\n</div>', 3243),
(25, 20, '2010-04-16 22:50:39', '', 0),
(26, 21, '2010-04-16 22:50:39', '', 0),
(27, 22, '2010-04-17 01:11:20', '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">\n<html xmlns="http://www.w3.org/1999/xhtml">\n<head>\n<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />\n<title>Pinnacle Design Center &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;branding | photography | education &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Los Angeles</title>\n\n<link rel="shortcut icon" type="image/x-icon" href="assets/favicon.ico">\n\n<link href="css/style.css" rel="stylesheet" type="text/css" />\n\n\n</head>\n\n<style>\n\n	div#main {\n		background-image:url(assets/backgrounds/about1.jpg);\n		\n	}\n\n</style>\n\n\n\n<body>\n\n<div id="outerDiv">\n\n	<div id="mainNavigation">\n    	\n	  <div id="navigation">\n                \n                <ul>\n                \n                		<li><a href="about_us.html" class="currentLink1">About Us</a></li>\n                  		<li><a href="branding.html" class="link2">Branding</a></li>\n                        <li><a href="photography.html" class="link3">Photography</a></li>\n                        <li><a href="classes/art_and_design.html" class="link4">Education</a></li>\n                        <li><a href="news_and_events.html" class="link5">News & Events</a></li>\n                        <li><a href="resources.html" class="link6" target="_blank">Resources</a></li>\n                        <li><a href="contact.html" class="link7">Contact Us</a></li>\n                        \n        		</ul>\n		</div>     \n        \n        <div id="logo"></div>\n    </div>\n    \n  <div id="main">  \n  \n        <div id="about_pdc">\n		\n        		<ul>\n            \n                        <li><a href="about_us.html" class="currentLink1">PINNACLE DESIGN CENTER</a></li>\n                        <li><a href="founders/steve_trapero.html" class="link2">FOUNDERS</a></li>\n                        <li><a href="achievements/awards.html" class="link3">ACHIEVEMENTS</a></li>\n        \n            	</ul>\n		\n        </div>\n        \n  		<div id="aboutpdc">\n				    <p>\n                    we are Pinnacle Design Center. we''re a unique, creative business venture owned and \n                    operated by the award-winning husband and wife team, steve trapero and yvonne xu. \n                    the business has combined 3 of their passions under 1 roof!<br />\n 					branding, photography and education.</p>\n 					<p>Pinnacle Design Center has several designers, interns, employees, and instructors \n                    involved with us at any given time. however, steve trapero and yvonne xu remain the\n                    driving force behind each arm of the business.\n                    </p>\n        \n        </div>\n        \n        <div id="aboutCaption">\n                    <h6>photos from our<br />\n					new year''s eve grand<br />\n					opening celebration<br />\n					december 31, 2007\n                    </h6>\n        </div>\n  </div>\n\n\n</div>\n\n<script type="text/javascript">\nvar gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");\ndocument.write(unescape("%3Cscript src=''" + gaJsHost + "google-analytics.com/ga.js'' type=''text/javascript''%3E%3C/script%3E"));\n</script>\n<script type="text/javascript">\ntry {\nvar pageTracker = _gat._getTracker("UA-11906294-2");\npageTracker._trackPageview();\n} catch(err) {}</script>\n\n</body>\n</html>\n', 3306),
(28, 23, '2010-04-17 01:11:20', '', 0),
(29, 24, '2010-04-17 01:11:20', '', 0),
(30, 25, '2010-04-17 01:14:29', '\r\npublic class Node {\r\n	public Vec data;\r\n	public Node parent;\r\n	public int y;\r\n	public int z;\r\n	public Node(int x, int y, int z, Node p)\r\n	{\r\n		data = new Vec(x, y, z);\r\n		parent = p;\r\n	}\r\n	public boolean equals(Object obj)\r\n	{\r\n        if (obj == null)\r\n            return false;\r\n        if (obj == this)\r\n            return true;\r\n        if (obj.getClass() != getClass())\r\n            return false;\r\n\r\n        Node n = (Node)obj;\r\n        return (data.x == n.data.x) && (data.y == n.data.y) && (data.z == n.data.z);\r\n	}\r\n	public Object clone() {\r\n		Node obj = new Node(this.data.x, this.data.y, this.data.z, null);\r\n		return obj;\r\n	}\r\n}\r\n', 643),
(31, 26, '2010-04-17 01:14:29', '\npublic class Vec {\n	public int x, y, z;\n	public Vec (int a, int b, int c)\n	{\n		x = a;\n		y = b;\n		z = c;\n	}\n	public Vec (String a, String b, String c)\n	{\n		x = Integer.parseInt(a);\n		y = Integer.parseInt(b);\n		z = Integer.parseInt(c);\n	}\n	public String toString()\n	{\n		return x + " " + y + " " + z + " ";\n	}\n}\n', 310),
(32, 27, '2010-04-17 01:15:38', '<?\r\n$GLOBALS[''SECTION''] = "home";\r\ninclude("/home/mlenser/public_html/include.inc");\r\nMasterTop();\r\n?>\r\n\r\n<div class="colleft">\r\n	<div class="column_center">\r\n		<h1>My Portfolio</h1>\r\n		<p class="text_block">Welcome to my portfolio of works. This project should not be regarded as a finished product, although it is well on the way there. Creating it takes time and it will get better with time. At this point it has structure and needs fixes and content. </p>\r\n\r\n		<h2>This layout</h2>\r\n		<p class="text_block">This layout is designed to work on all major platforms of browser and resolution. It is designed to be fluid in order to expand and show information on larger resolutions, but also works at 800x600.  This layout works in all resolutions* and allcurrent browsers with significant market share*:\r\n		<br />\r\n		<img src="images/browsers/Firefox-32.png" alt="Mozilla Firefox" title="Mozilla Firefox 3+" />\r\n		<img src="images/browsers/IE-32.png" alt="Internet Explorer 5.5, 6, 7 and 8"  title="Internet Explorer 5.5 6, 7 and 8" />\r\n		<img src="images/browsers/Chrome-32.png" alt="Google Chrome" title="Google Chrome" />\r\n		<img src="images/browsers/Safari-32.png" alt="Mac Safari"  title="Safari for Mac users" />\r\n		<img src="images/browsers/Opera-32.png" alt="Opera" title="Opera 10.0" />\r\n		<br/>\r\n		*based on the current list of <a href="http://www.w3schools.com/browsers/browsers_stats.asp">Web Browser Statistics</a> and <a href="http://www.w3schools.com/browsers/browsers_display.asp">Browser Resolution Statistics</a></p>\r\n\r\n		<h3>Main Page</h3>\r\n		<p class="text_block">This main page is rendered with 1 background image for the gradient and the rest is done with CSS3. The alpha transparency, the rounded corners, everything. Unfortunately no version of IE supports CSS3. Therefore it has fallback code for IE that uses JavaScript  and some filters(in CSS) to re-create the same effect. The rounded corners effect for IE is built on jQuery.</p>\r\n\r\n		<h3>Navigation</h3>\r\n		<p class="text_block">The navigation is designed to be functional, allowing the user to open up sub-menus without a page refresh. It also is tested to work on all above browsers, although IE5.5 and 6 do not support transparent PNG (I will try to implement  this at some point). The navigation is built on jQuery.</p>\r\n\r\n		<h3>Database Driven Content</h3>\r\n		<p class="text_block">I pride my work on being easily editable and strive to make every page database driven to allow administrators to login and easily edit content without having to know any code. This portfolio website will also function that way after I get a bulk of my previous work on here.</p>\r\n	</div>\r\n	<div class="column_right">\r\n		<h2>Hi, I''m Mark Lenser</h2>\r\n		<p class="text_block">I am currently living in <b>Orange, CA</b> and am looking for a part-time job/internship opportunity while I attend California Polytechnic State University, Pomona. If that opportunity eventually lead to full employment post-graduation then all the better. I am about a year away from graduating with a B.S. in Computer Information Systems. I prefer <b>Back-End Development</b>, primarily enjoy working with PHP and mySQL. I also am a capable Front-End developer, working with CSS, HTML/XHTML, JavaScript. To find out more about my skills please find out more <a href="/about/">about me</a>.</p>\r\n	</div>\r\n</div>\r\n\r\n<?\r\nMasterBottom();\r\n?>', 3384),
(33, 28, '2010-04-17 01:15:38', '<?\r\n$GLOBALS[''SECTION''] = "home";\r\ninclude("/home/mlenser/public_html/include.inc");\r\nMasterTop();\r\n?>\r\n\r\n		<h1>Portfolio of Works</h1>\r\n		<p class="text_block"><img class="float_left rounded_corners" src="/images/work.png" /> <img class="float_left rounded_corners" src="/images/work.png" /> <img class="float_left rounded_corners" src="/images/work.png" /> <img class="float_left rounded_corners" src="/images/work.png" /></p>\r\n\r\n<?\r\nMasterBottom();\r\n?>', 455);

-- --------------------------------------------------------

--
-- Table structure for table `subscriptions`
--

DROP TABLE IF EXISTS `subscriptions`;
CREATE TABLE IF NOT EXISTS `subscriptions` (
  `id` int(11) NOT NULL auto_increment,
  `user_id` int(11) NOT NULL,
  `foreign_id` int(11) NOT NULL,
  `foreign_model` varchar(20) NOT NULL,
  `pending` tinyint(1) NOT NULL default '0',
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY  (`id`),
  KEY `user_id` (`user_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `subscriptions`
--

INSERT INTO `subscriptions` (`id`, `user_id`, `foreign_id`, `foreign_model`, `pending`, `created`, `modified`) VALUES
(1, 26, 28, 'User', 0, '2010-04-16 18:27:59', '2010-04-16 18:27:59'),
(2, 26, 25, 'User', 0, '2010-04-16 20:32:23', '2010-04-16 20:32:23'),
(3, 24, 23, 'User', 0, '2010-04-17 01:15:20', '2010-04-17 01:15:20'),
(4, 23, 14, 'Review', 0, '2010-04-17 01:16:57', '2010-04-17 01:16:57'),
(5, 23, 24, 'User', 0, '2010-04-17 01:26:07', '2010-04-17 01:26:07'),
(6, 34, 24, 'User', 0, '2010-04-17 01:33:20', '2010-04-17 01:33:20'),
(7, 23, 34, 'User', 0, '2010-04-17 01:34:26', '2010-04-17 01:34:26'),
(8, 26, 4, 'Review', 0, '2010-04-17 01:47:29', '2010-04-17 01:47:29'),
(9, 34, 13, 'Review', 0, '2010-04-17 01:51:14', '2010-04-17 01:51:14');

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

DROP TABLE IF EXISTS `tags`;
CREATE TABLE IF NOT EXISTS `tags` (
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(25) NOT NULL,
  `created` datetime NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `tags`
--


-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL auto_increment,
  `username` varchar(100) NOT NULL,
  `password` varchar(40) NOT NULL,
  `name` varchar(100) default NULL,
  `email` varchar(100) NOT NULL,
  `avatar_file_name` varchar(255) default NULL,
  `website` varchar(255) default NULL,
  `points` int(11) NOT NULL default '0',
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `status` varchar(10) default NULL,
  `rank_id` int(11) NOT NULL,
  `date_of_birth` date default NULL,
  `role` varchar(10) NOT NULL default 'User',
  `comment_count` int(11) NOT NULL,
  `review_count` int(11) NOT NULL,
  PRIMARY KEY  (`id`),
  KEY `rank_id` (`rank_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=35 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `name`, `email`, `avatar_file_name`, `website`, `points`, `created`, `modified`, `status`, `rank_id`, `date_of_birth`, `role`, `comment_count`, `review_count`) VALUES
(23, 'gamegod', 'd40c1b239fedd0dada4905b0e1ad84be9021d764', '', 'proloser@hotmail.com', NULL, '', 5, '2010-04-16 02:42:12', '2010-04-16 16:43:01', NULL, 2, '1987-06-02', 'Admin', 0, 0),
(24, 'kankurou', '8af0489d2fbad22f336704e00ab156adf70108de', 'Nicholas Chan', 'itccompetition@gmail.com', 'face.png', 'http://www.nicholaschan.net', 5, '2010-04-16 03:08:36', '2010-04-16 17:17:10', NULL, 2, '1988-03-29', 'Admin', 0, 0),
(25, 'jaime', '354dcdda3d104d460f0f1ca9bc1869e79ca378f7', 'Jaime', 'talent03@gmail.com', 'wyvern-irontux.png', 'http://jaimehernandez.com', 5, '2010-04-16 03:32:57', '2010-04-16 03:32:57', NULL, 2, '1981-06-20', 'User', 0, 0),
(26, 'redjoker88', 'ca1d0e0e0685287061a41ab232108acfa3858960', 'Andrew', 'redjoker88@hotmail.com', 'user-photo-122916-1982.gif', '', 5, '2010-04-16 09:57:03', '2010-04-16 20:31:32', NULL, 2, '2010-04-18', 'User', 0, 0),
(27, 'Mark', '7027b860837d5f0d7b24ecc38ae48034a37978ab', 'Mark', 'MLenser@gmail.com', 'logo_black_bg.png', 'bob.com', 5, '2010-04-16 12:42:31', '2010-04-16 12:42:31', NULL, 2, '1987-03-26', 'User', 0, 0),
(28, 'Bobby', '7bb5e7740ff6b94ab02d8042ef07c4238b90c0f5', 'Bob', 'bob@gmail.com', 'baby-tux.png', 'bob.com', 5, '2010-04-16 14:02:04', '2010-04-16 14:02:12', NULL, 2, '1991-10-16', 'User', 0, 0),
(29, 'bob222', '47d51a7223a0a8551417c9712b67911075951ad4', 'bob222', 'bobby2@gmail.com', 'Were_wolf_mini_final.png', 'bob222.com', 5, '2010-04-16 14:36:49', '2010-04-16 14:36:49', NULL, 2, '1978-05-10', 'User', 0, 0),
(30, '1337islame', '8af0489d2fbad22f336704e00ab156adf70108de', 'Brandon Parr', '1337_is_dead@gmail.com', 'brandon.jpg', 'www.superawesomestudios.com', 5, '2010-04-16 17:16:15', '2010-04-16 17:18:11', NULL, 2, '1987-12-16', 'User', 0, 0),
(31, 'deadmau5', '8af0489d2fbad22f336704e00ab156adf70108de', 'joelzimmerman', 'whereishere@gmail.com', 'deadmau5.jpg', 'www.deadmau5.com', 5, '2010-04-16 17:23:04', '2010-04-16 17:23:04', NULL, 2, '1981-01-05', 'User', 0, 0),
(32, 'dragon55', '8af0489d2fbad22f336704e00ab156adf70108de', 'Michael Azaula', 'johnnywhat@gmail.com', '04042008485.jpg', 'www.michaelazaula.com', 5, '2010-04-16 17:25:07', '2010-04-16 17:25:07', NULL, 2, '1988-04-25', 'User', 0, 0),
(33, 'steve', '1c17070842878cd1d57a565e44fb523d932a7e5a', 'Steve Jobs', 'sjobs@apple.com', '220px-Steve_Jobs_WWDC07.jpg', 'www.apple.com', 5, '2010-04-16 18:03:29', '2010-04-16 18:03:29', NULL, 2, '1955-02-24', 'User', 0, 0),
(34, 'kimswift', '8af0489d2fbad22f336704e00ab156adf70108de', 'Kim Swift', 'kimswift@gmail.com', 'kim_swift_photo.jpg', 'www.valvesoftware.com', 5, '2010-04-16 18:09:38', '2010-04-16 18:09:38', NULL, 2, '1986-03-14', 'User', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `votes`
--

DROP TABLE IF EXISTS `votes`;
CREATE TABLE IF NOT EXISTS `votes` (
  `id` int(11) NOT NULL auto_increment,
  `comment_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `direction` binary(1) default NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `foreign_id` int(11) default NULL,
  PRIMARY KEY  (`id`),
  KEY `comment_id` (`comment_id`),
  KEY `user_id` (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `votes`
--

