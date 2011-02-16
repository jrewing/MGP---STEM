-- phpMyAdmin SQL Dump
-- version 3.3.7deb2build0.10.10.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 09, 2010 at 10:37 PM
-- Server version: 5.1.49
-- PHP Version: 5.3.3-1ubuntu9.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Database: `mgp-skjema`
--

-- --------------------------------------------------------

--
-- Table structure for table `country`
--

CREATE TABLE IF NOT EXISTS `country` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `song` varchar(1023) NOT NULL,
  `artist` varchar(1023) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `country`
--

INSERT INTO `country` (`id`, `name`, `song`, `artist`) VALUES
(1, 'Sverige', 'Sköna', 'Lilli'),
(2, 'Norge', 'Maralili', 'Nora');

-- --------------------------------------------------------

--
-- Table structure for table `hashtag`
--

CREATE TABLE IF NOT EXISTS `hashtag` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(1024) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `hashtag`
--


-- --------------------------------------------------------

--
-- Table structure for table `officialscore`
--

CREATE TABLE IF NOT EXISTS `officialscore` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `judge` varchar(1023) NOT NULL,
  `country` tinyint(4) NOT NULL,
  `score` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `officialscore`
--

INSERT INTO `officialscore` (`id`, `judge`, `country`, `score`) VALUES
(1, 'Sweden', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `score`
--

CREATE TABLE IF NOT EXISTS `score` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `country` tinyint(3) unsigned NOT NULL,
  `clothes` tinyint(3) unsigned NOT NULL,
  `choreography` tinyint(3) unsigned NOT NULL,
  `song` tinyint(3) unsigned NOT NULL,
  `heart` tinyint(3) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `score`
--

INSERT INTO `score` (`id`, `user_id`, `country`, `clothes`, `choreography`, `song`, `heart`) VALUES
(1, 5, 1, 1, 1, 1, 1),
(2, 5, 2, 5, 5, 5, 5);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `facebook_id` varchar(255) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `facebook_id`) VALUES
(1, '#dork', '0'),
(2, '#kåre', '0'),
(5, 'jebsen', '0');

-- --------------------------------------------------------

--
-- Table structure for table `user_hashtag`
--

CREATE TABLE IF NOT EXISTS `user_hashtag` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `hashes_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `user_hashtag`
--

INSERT INTO `user_hashtag` (`id`, `user_id`, `hashes_id`) VALUES
(1, 1, 1);

