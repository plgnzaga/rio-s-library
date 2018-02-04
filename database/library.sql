-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 04, 2018 at 04:52 PM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 7.0.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `library`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `title` varchar(200) DEFAULT NULL,
  `author` varchar(100) DEFAULT NULL,
  `genre` varchar(50) DEFAULT NULL,
  `section` varchar(100) DEFAULT NULL,
  `index_no` varchar(10) NOT NULL,
  `status` varchar(20) NOT NULL DEFAULT '0',
  `borrowed_by` varchar(100) NOT NULL,
  `cover` varchar(500) NOT NULL DEFAULT 'default.png'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`title`, `author`, `genre`, `section`, `index_no`, `status`, `borrowed_by`, `cover`) VALUES
('Phantom of the Opera', 'Gaston Leroux', 'Fiction', 'Novel/Literatures', '108', '0', '', 'phantom-of-the-opera.jpg'),
('Miss Peregrines Home for Peculiar Children', 'Ransom Riggs', 'Fiction', 'Novel/Literatures', '121', '0', '', 'peregrines.jpg'),
('Hogwarts', 'Dumbledog', 'Witchcraft', 'Wizardry', '135', '0', '', 'default.png'),
('Pride and Prejudice', 'Jane Austen', 'Romance', 'Novel/Literatures', '143', '0', '', 'pride.jpg'),
('True Believers', 'Nicholas Sparks', 'Romance', 'Novel/Literatures', '145', '0', '', 'true-believer.jpg'),
('The Haunting of Hill House', 'Shirley Jackson', 'Horror', 'Novel/Literatures', '171', '0', '', 'shirley-jacksong.jpg'),
('To Kill a Mocking Bird', 'Harper Lee', 'Gothic', 'Novel/Literatures', '219', '1', 'Lindy Rollinz Gonzales', 'mockingbird.jpg'),
('HTML and CSS3 for Dummies', 'Andy Harris', 'Computers', 'Internet/Technology', '224', '0', '', 'Web Dev for Dummies.jpg'),
('Outlander', 'Diana Gabaldon', 'Romance', 'Novel/Literatures', '235', '0', '', 'outlander.jpg'),
('Purpose Driven Life', 'Rick Warren', 'Religious View', 'Gospel', '261', '0', '', 'purpose-drive-life.jpg'),
('Web Hosting for Beginners', 'J.D. Rockfeller', 'Computers', 'Internet/Technology', '263', '0', '', 'web-hosting.jpg'),
('Social Expressions of Public & Private of Funeral Industry', 'Peter Minucos', 'Thesis/Dissertation', 'Special Collection', '273', '0', '', 'esl-mba-dissertation-edmund-wilson-ambiguity-henry...'),
('Time Magazine - The Punisher', 'Charlie Campbell', 'Social Science', 'Periodical', '276', '0', '', 'time-du30.jpg'),
('Javascipt for Dummies', 'Andy Harris', 'Computers', 'Internet/Technology', '329', '0', '', 'js-for-dummies.jpg'),
('The Notebook', 'Nicholas Sparks', 'Romance', 'Novel/Literatures', '331', '0', '', 'the-notebook.jpg'),
('Things Fall Apart', 'Chinua Achebe', 'Gothic', 'Novel/Literatures', '342', '0', '', 'things-fall-apart.jpg'),
('The Fault in Our Stars', 'John Green', 'Romance', 'Novel/Literatures', '345', '0', '', 'TFIOS.jpg'),
('Dracula', 'Bram Stoker', 'Horror', 'Novel/Literatures', '376', '0', '', 'dracula.jpg'),
('Phantoms', 'Dean Koontz', 'Horror', 'Novel/Literatures', '420', '0', '', 'phantoms.jpg'),
('The Behaviour of Juvenile Delinquency', 'Sreekala K.K. M.Ed.', 'Thesis/Dissertation', 'Special Collection', '429', '0', '', 'dh-ph.png'),
('The Thorn Birds', 'Colleen McCullough', 'Romance', 'Novel/Literatures', '438', '0', '', 'the-thorn-birds.jpg'),
('The Ministry of Healing', 'Ellen G. White', 'Religious View', 'Gospel', '445', '0', '', 'The-Ministry-of-Healing.jpg'),
('The Exorcist', 'William Peter Blatty', 'Horror', 'Novel/Literatures', '455', '0', '', 'exorcist.jpg'),
('Your Relationship with God', 'Dr. Gary Smalley', 'Religious View', 'Gospel', '458', '0', '', 'smalley-god1.jpg'),
('Chesapeake Blue', 'Kazuo Ishiguro', 'Romance', 'Novel/Literatures', '471', '0', '', 'chesapeake-blue.jpg'),
('Charlottes Web', 'E.B. White', 'Fiction', 'Children', '477', '0', '', 'charlottes.jpg'),
('Frankenstein', 'Mary Shelley', 'Horror', 'Novel/Literatures', '556', '0', '', 'frankenstein.jpg'),
('Oxford Dictionary', 'Dr. Henry Zach', 'Facts', 'General', '562', '0', '', 'oxford.jpeg'),
('Wuthering Heights', 'Emily Bronte', 'Romance', 'Novel/Literatures', '566', '0', '', 'wuthering.jpg'),
('Basic Networking', 'Kaveh Pahlavan & Prash Krishna', 'Computers', 'Internet/Technology', '591', '0', '', 'networking_large.jpg'),
('The Turn of the Screw', 'Henry James', 'Horror', 'Novel/Literatures', '629', '0', '', 'screw.jpg'),
('Almanac 2018', 'National Geographic', 'Facts', 'General', '631', '0', '', 'Almanac-2018.jpg'),
('Hell House', 'Richard Matheson', 'Horror', 'Novel/Literatures', '666', '0', '', 'hell-house.jpg'),
('The Remains of Day', 'Kazuo Ishiguro', 'Romance', 'Novel/Literatures', '672', '0', '', 'the-remains-of-the-day.jpg'),
('The English Patient', 'Michael Ondaatje', 'Romance', 'Novel/Literatures', '683', '0', '', 'english.jpg'),
('Crank', 'Ellen Hopkins', 'Horror', 'Novel/Literatures', '707', '0', '', 'crank.jpg'),
('Night Shift', 'Stephen King', 'Horror', 'Novel/Literatures', '711', '0', '', 'night-shift.jpg'),
('Paper Towns', 'John Green', 'Romance', 'Novel/Literatures', '734', '0', '', 'papertowns.jpg'),
('The Emperor''s New Clothes', 'Hans Christian Anderson', 'Fiction', 'Children', '741', '0', '', 'emperors.jpg'),
('The French Lieutenant''s Woman', 'John Fowles', 'Romance', 'Novel/Literatures', '764', '0', '', 'lieutenant.jpg'),
('Thirteen Reasons Why', 'Jay Asher', 'Young Adult', 'Novel/Literatures', '781', '1', 'Clay Jensen', '13-reasons-why.jpg'),
('Anna Karenina', 'Leo Tolstoy', 'Romance', 'Novel/Literatures', '782', '0', '', 'annakarenina.jpg'),
('World Almanac 1992', 'Anthony Cordesman', 'Facts', 'General', '799', '0', '', 'almanac-1992.jpg'),
('Reader''s Digest v9. 2003', 'RD Publishing', 'Facts', 'Periodical', '831', '0', '', 'readers-digest.jpg'),
('A Head Full of Ghost', 'Paul Tremblay', 'Horror', 'Novel/Literatures', '832', '0', '', 'head-ghost.jpg'),
('The Perks of Being a Wallflower', 'Stephen Chbosky', 'Young Adult', 'Novel/Literatures', '893', '0', '', 'perks.jpg'),
('Follow the Stars Home', 'Luanne Rice', 'Romance', 'Novel/Literatures', '906', '0', '', 'follow-stars.jpg'),
('Me Before You', 'Jojo Moyes', 'Romance', 'Novel/Literatures', '909', '0', '', 'me-before-u.jpg'),
('The Call of Cthulhu', 'H.P. Lovecraft', 'Horror', 'Novel/Literatures', '911', '0', '', 'call-of-cthullu.gif'),
('World Almanac 2010', 'John Glenn', 'Facts', 'General', '923', '0', '', 'world-almanac-2010.jpg'),
('If I Stay', 'Gayle Forman', 'Young Adult', 'Novel/Literatures', '928', '0', '', 'if-i-stay.jpg'),
('Harry Potter and the Sorcerer''s Stone', 'J.K. Rowling', 'Fiction', 'Novel/Literatures', '934', '0', '', 'philosophers-stone.jpg'),
('Harry Potter and the Chamber of Secrets', 'J.K. Rowling', 'Fiction', 'Novel/Literatures', '935', '0', '', 'chamber-of-secrets.jpg'),
('Harry Potter and the Prisoner of Azkaban', 'J.K. Rowling', 'Fiction', 'Novel/Literatures', '936', '1', 'Paul Stephen Gonzaga', 'azkaban.jpg'),
('Harry Potter and the Goblet of Fire', 'J.K. Rowling', 'Fiction', 'Novel/Literatures', '937', '0', '', 'goblet.jpg'),
('Harry Potter and the Order of the Phoenix', 'J.K. Rowling', 'Fiction', 'Novel/Literatures', '938', '0', '', 'phoenix.jpg'),
('Harry Potter and the Half-Blood Prince', 'J.K. Rowling', 'Fiction', 'Novel/Literatures', '939', '0', '', 'half-blood-prince.jpg'),
('Harry Potter and the Deathly Hallows', 'J.K. Rowling', 'Fiction', 'Novel/Literatures', '940', '0', '', 'deathly-hallows.jpg'),
('IT', 'Stephen King', 'Horror', 'Novel/Literatures', '981', '0', '', 'it-stephen-king.jpg'),
('Bag of Bones', 'Stephen King', 'Horror', 'Novel/Literatures', '999', '0', '', 'bag-of-bones.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(9) NOT NULL,
  `email` varchar(300) NOT NULL,
  `password` varchar(50) NOT NULL,
  `surname` varchar(50) NOT NULL,
  `middlename` varchar(50) NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `privelege` int(10) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `email`, `password`, `surname`, `middlename`, `firstname`, `privelege`) VALUES
(1, 'rio.library@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'Gonzaga', '', 'Rio', 1),
(4, 'lindygonzales@ymail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'Gonzales', 'Bucaneg', 'Lindy Rollinz', 0),
(6, 'jhaylo@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'Lopez', 'Joaquin', 'Jovelyn', 0),
(9, 'elie@yahoo.com', 'edf601e4cb424d4015feef0ba71f9327', 'Eliezer', 'Ballad', 'Quirong', 0),
(11, 'aryastark@yahoo.com', 'edf601e4cb424d4015feef0ba71f9327', 'Stark', '', 'Arya', 0),
(12, 'littlefinger@yahoo.com', 'edf601e4cb424d4015feef0ba71f9327', 'littlefinge', '', 'Baylish', 0),
(13, 'plstephengnzaga@gmail.com', 'edf601e4cb424d4015feef0ba71f9327', 'Gonzaga', 'Transfiguracion', 'Paul Stephen', 0),
(14, 'clayjensen@yahoo.org', '827ccb0eea8a706c4c34a16891f84e7b', 'Jensen', '', 'Clay', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`index_no`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
