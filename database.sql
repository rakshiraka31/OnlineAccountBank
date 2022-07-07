create database bank;

use bank;

CREATE TABLE `account` (
  `id` int(11) NOT NULL auto_increment,
  `fname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `gender` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `contact` int(15) NOT NULL,
  `address` varchar(100) NOT NULL,
  `marital` varchar(30) NOT NULL,
  `abtype` varchar(30) NOT NULL,
  `atype` varchar(30) NOT NULL,
  `ctype` varchar(30) NOT NULL,
  `branch` varchar(30) NOT NULL,
  `income` varchar(30) NOT NULL,
  `doc1` varchar(30) NOT NULL,
  `doc2` varchar(30) NOT NULL,
  `doc3` varchar(30) NOT NULL,
  `service` varchar(30) NOT NULL,
    `demat` varchar(30) NOT NULL,
  `locker` varchar(30) NOT NULL,
  PRIMARY KEY  (`id`)
);