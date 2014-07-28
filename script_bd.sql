-- phpMyAdmin SQL Dump
-- version 4.1.12
-- Database: `teste_pratico`
--
-- --------------------------------------------------------

--
-- Table structure for table `agendas`
--
CREATE TABLE IF NOT EXISTS `agendas` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `date_event` date NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;


