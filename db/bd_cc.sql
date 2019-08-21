-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 05, 2018 at 04:19 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bd_cc`
--

-- --------------------------------------------------------

--
-- Table structure for table `best_performance`
--

CREATE TABLE `best_performance` (
  `pid` int(11) NOT NULL,
  `cname` varchar(20) NOT NULL,
  `oppo_cname` varchar(20) DEFAULT NULL,
  `eid` int(11) DEFAULT NULL,
  `mid` int(11) DEFAULT NULL,
  `runs` int(11) DEFAULT NULL,
  `wicket` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `best_performance`
--

INSERT INTO `best_performance` (`pid`, `cname`, `oppo_cname`, `eid`, `mid`, `runs`, `wicket`) VALUES
(2, '', '', 0, 0, 0, 0),
(3, '', '', 0, 0, 0, 0),
(4, '', '', 0, 0, 0, 0),
(5, '', '', 0, 0, 0, 0),
(6, '', '', 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `club_registration`
--

CREATE TABLE `club_registration` (
  `cid` int(11) NOT NULL,
  `cname` varchar(20) DEFAULT NULL,
  `ce_date` date DEFAULT NULL,
  `st_date` date DEFAULT NULL,
  `en_date` date DEFAULT NULL,
  `address` varchar(200) DEFAULT NULL,
  `president_name` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `contract_form`
--

CREATE TABLE `contract_form` (
  `payid` int(11) NOT NULL,
  `cid` int(11) DEFAULT NULL,
  `cname` varchar(20) DEFAULT NULL,
  `fname` varchar(20) DEFAULT NULL,
  `mname` varchar(20) DEFAULT NULL,
  `lname` varchar(20) DEFAULT NULL,
  `pid` int(11) DEFAULT NULL,
  `aut_fname` varchar(20) DEFAULT NULL,
  `aut_mname` varchar(20) DEFAULT NULL,
  `aut_lname` varchar(20) DEFAULT NULL,
  `designation` varchar(30) DEFAULT NULL,
  `c_start_date` date DEFAULT NULL,
  `c_end_date` date DEFAULT NULL,
  `amount` double DEFAULT NULL,
  `pay_serial` int(11) DEFAULT NULL,
  `pay_due` date DEFAULT NULL,
  `pay_actual` date DEFAULT NULL,
  `pay_amount` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contract_form`
--

INSERT INTO `contract_form` (`payid`, `cid`, `cname`, `fname`, `mname`, `lname`, `pid`, `aut_fname`, `aut_mname`, `aut_lname`, `designation`, `c_start_date`, `c_end_date`, `amount`, `pay_serial`, `pay_due`, `pay_actual`, `pay_amount`) VALUES
(1, 0, '', '', '', '', 0, '', '', '', '', '0000-00-00', '0000-00-00', 0, 0, '0000-00-00', '0000-00-00', 0),
(2, 123, 'sdasd', 'asd', 'asdasdfasdf', 'sdf', 1233, 'asd', 'dfgdfg', 'wer', 'care', '2018-09-20', '2018-09-11', 12312, 1, '2018-09-17', '2018-09-20', 12331),
(3, 123, 'BBC', 'Md.', 'Siam', 'Uddin', 1233, 'asd', 'sdfsdf', 'qwe', 'care', '2018-09-24', '2018-09-01', 23123, 123, '2018-09-11', '2018-09-04', 1233);

-- --------------------------------------------------------

--
-- Table structure for table `degree`
--

CREATE TABLE `degree` (
  `pid` int(11) NOT NULL,
  `dname` varchar(20) NOT NULL,
  `institution` varchar(20) DEFAULT NULL,
  `board` varchar(20) DEFAULT NULL,
  `year` varchar(10) DEFAULT NULL,
  `result` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `degree`
--

INSERT INTO `degree` (`pid`, `dname`, `institution`, `board`, `year`, `result`) VALUES
(2, '', '', '', '', ''),
(3, '', '', '', '', ''),
(4, '', '', '', '', ''),
(5, '', '', '', '', ''),
(6, '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `event_form`
--

CREATE TABLE `event_form` (
  `eid` int(11) NOT NULL,
  `location` varchar(200) DEFAULT NULL,
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `vname` varchar(20) DEFAULT NULL,
  `seat_capacity` int(11) DEFAULT NULL,
  `match_date` date DEFAULT NULL,
  `mid` int(11) DEFAULT NULL,
  `mdate` date DEFAULT NULL,
  `team_bat` varchar(20) DEFAULT NULL,
  `team_bowl` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `event_form`
--

INSERT INTO `event_form` (`eid`, `location`, `start_date`, `end_date`, `vname`, `seat_capacity`, `match_date`, `mid`, `mdate`, `team_bat`, `team_bowl`) VALUES
(2, 'Sylhet', '2018-09-02', '2018-09-20', 'BPL', 40000, '2018-09-18', 40, '2018-09-03', 'Pakisthan', ''),
(3, 'Sylhet', '2018-08-27', '2018-09-22', 'BPL', 40000, '2018-09-20', 12, '2018-09-18', 'Australia', 'Bangladesh');

-- --------------------------------------------------------

--
-- Table structure for table `match_performance`
--

CREATE TABLE `match_performance` (
  `mid` int(11) NOT NULL,
  `vid` int(11) DEFAULT NULL,
  `date_of_match` date DEFAULT NULL,
  `player1` varchar(100) DEFAULT NULL,
  `player2` varchar(100) DEFAULT NULL,
  `player3` varchar(100) DEFAULT NULL,
  `player4` varchar(100) DEFAULT NULL,
  `player5` varchar(100) DEFAULT NULL,
  `player6` varchar(100) DEFAULT NULL,
  `player7` varchar(100) DEFAULT NULL,
  `player8` varchar(100) DEFAULT NULL,
  `player9` varchar(100) DEFAULT NULL,
  `player10` varchar(100) DEFAULT NULL,
  `player11` varchar(100) DEFAULT NULL,
  `player12` varchar(100) DEFAULT NULL,
  `player13` varchar(100) DEFAULT NULL,
  `player14` varchar(100) DEFAULT NULL,
  `player15` varchar(100) DEFAULT NULL,
  `player16` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `match_performance`
--

INSERT INTO `match_performance` (`mid`, `vid`, `date_of_match`, `player1`, `player2`, `player3`, `player4`, `player5`, `player6`, `player7`, `player8`, `player9`, `player10`, `player11`, `player12`, `player13`, `player14`, `player15`, `player16`) VALUES
(2, 1, '2018-09-11', 'asdasd', 'hbjkkjb', 'jbjbjb', 'hjbjhbjhbj', 'jhbjbjb', 'kjbj jbj', 'jhbjbjb', 'jlhbljljb', 'jhbljbljbj', 'hbjh jbj', 'bjhbljhbjlb', 'jlbj jhb', 'jbjlhbljblj', 'bj ljhbjlb', 'j ljljbhj', 'jl jhbhb');

-- --------------------------------------------------------

--
-- Table structure for table `players`
--

CREATE TABLE `players` (
  `pid` int(11) NOT NULL,
  `fname` varchar(20) DEFAULT NULL,
  `mname` varchar(20) DEFAULT NULL,
  `lname` varchar(20) DEFAULT NULL,
  `father_name` varchar(40) DEFAULT NULL,
  `mother_name` varchar(40) DEFAULT NULL,
  `present_address` varchar(200) DEFAULT NULL,
  `permanent_address` varchar(200) DEFAULT NULL,
  `date_of_birth` date DEFAULT NULL,
  `membership` varchar(10) DEFAULT NULL,
  `submission_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `players`
--

INSERT INTO `players` (`pid`, `fname`, `mname`, `lname`, `father_name`, `mother_name`, `present_address`, `permanent_address`, `date_of_birth`, `membership`, `submission_date`) VALUES
(2, 'Md.', 'Siam', 'Uddin', 'Md. Jalal Uddin', 'Khorsheda', '1233, badda, dahads, badda, dhak, 1212', '1233, basdd, sdfsdf, asads, sdfsdf, 1231', '2011-08-12', '', '2018-09-04'),
(3, 'Md.', 'Siam', 'Uddin', 'Md. Jalal Uddin', 'Khorsheda', '1233, badda, dahads, badda, dhak, 1212', '1233, basdd, sdfsdf, asads, sdfsdf, 1231', '2011-08-12', 'Amazon', '2018-09-04'),
(4, 'Md.', 'Siam', 'Uddin', 'Md. Jalal Uddin', 'Khorsheda', '1233, badda, dahads, badda, dhak, 1212', '1233, basdd, sdfsdf, asads, sdfsdf, 1231', '2011-08-12', 'Amazon', '2018-09-04'),
(5, 'Md.', 'Siam', 'Uddin', 'Md. Jalal Uddin', 'Khorsheda', '1233, badda, dahads, badda, dhak, 1212', '1233, basdd, sdfsdf, asads, sdfsdf, 1231', '2011-08-12', '', '2018-09-04'),
(6, 'Md.', 'Siam', 'Uddin', 'Md. Jalal Uddin', 'Khorsheda', '1233, badda, dahads, badda, dhak, 1212', '1233, basdd, sdfsdf, asads, sdfsdf, 1231', '2011-08-12', '', '2018-09-04');

-- --------------------------------------------------------

--
-- Table structure for table `previous_history`
--

CREATE TABLE `previous_history` (
  `pid` int(11) NOT NULL,
  `cname` varchar(20) NOT NULL,
  `pc_from` date DEFAULT NULL,
  `pc_to` date DEFAULT NULL,
  `total_runs` int(11) DEFAULT NULL,
  `total_wickets` int(11) DEFAULT NULL,
  `team_leader` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `previous_history`
--

INSERT INTO `previous_history` (`pid`, `cname`, `pc_from`, `pc_to`, `total_runs`, `total_wickets`, `team_leader`) VALUES
(2, '', '2018-09-23', '2018-09-12', 32, 423, 'N'),
(3, '', '2018-09-23', '2018-09-12', 32, 423, 'N'),
(4, '', '2018-09-23', '2018-09-12', 32, 423, 'N'),
(5, '', '2018-09-23', '2018-09-12', 32, 423, 'N'),
(6, 'BBC', '2018-09-23', '2018-09-12', 32, 423, 'N');

-- --------------------------------------------------------

--
-- Table structure for table `team_formation`
--

CREATE TABLE `team_formation` (
  `tid` int(11) NOT NULL,
  `date_of_formation` date DEFAULT NULL,
  `team_leader` varchar(20) DEFAULT NULL,
  `player1` varchar(20) DEFAULT NULL,
  `player2` varchar(20) DEFAULT NULL,
  `player3` varchar(20) DEFAULT NULL,
  `player4` varchar(20) DEFAULT NULL,
  `player5` varchar(20) DEFAULT NULL,
  `player6` varchar(20) DEFAULT NULL,
  `player7` varchar(20) DEFAULT NULL,
  `player8` varchar(20) DEFAULT NULL,
  `player9` varchar(20) DEFAULT NULL,
  `player10` varchar(20) DEFAULT NULL,
  `player11` varchar(20) DEFAULT NULL,
  `player12` varchar(20) DEFAULT NULL,
  `player13` varchar(20) DEFAULT NULL,
  `player14` varchar(20) DEFAULT NULL,
  `player15` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `team_formation`
--

INSERT INTO `team_formation` (`tid`, `date_of_formation`, `team_leader`, `player1`, `player2`, `player3`, `player4`, `player5`, `player6`, `player7`, `player8`, `player9`, `player10`, `player11`, `player12`, `player13`, `player14`, `player15`) VALUES
(1, '2018-08-27', 'Siam', 'bjhbj', 'jhvj jv', 'kjvnb n ', 'nm kn kgv', 'bn mnb n ', 'gvjvj', ' ,n j jlh lm', ' m m mj', 'h khlj ,m ', ',m m m  lg', 'oug', 'uouyg', 'lugoiugiblj', 'hljvjlvhy', 'lbljy');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(20) DEFAULT NULL,
  `email` varchar(20) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(2, 'admin', 'admin@gmail.com', 'admin1234');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `best_performance`
--
ALTER TABLE `best_performance`
  ADD PRIMARY KEY (`pid`,`cname`);

--
-- Indexes for table `club_registration`
--
ALTER TABLE `club_registration`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `contract_form`
--
ALTER TABLE `contract_form`
  ADD PRIMARY KEY (`payid`);

--
-- Indexes for table `degree`
--
ALTER TABLE `degree`
  ADD PRIMARY KEY (`pid`,`dname`);

--
-- Indexes for table `event_form`
--
ALTER TABLE `event_form`
  ADD PRIMARY KEY (`eid`);

--
-- Indexes for table `match_performance`
--
ALTER TABLE `match_performance`
  ADD PRIMARY KEY (`mid`);

--
-- Indexes for table `players`
--
ALTER TABLE `players`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `previous_history`
--
ALTER TABLE `previous_history`
  ADD PRIMARY KEY (`cname`,`pid`),
  ADD KEY `pid` (`pid`);

--
-- Indexes for table `team_formation`
--
ALTER TABLE `team_formation`
  ADD PRIMARY KEY (`tid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `best_performance`
--
ALTER TABLE `best_performance`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `club_registration`
--
ALTER TABLE `club_registration`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contract_form`
--
ALTER TABLE `contract_form`
  MODIFY `payid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `degree`
--
ALTER TABLE `degree`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `event_form`
--
ALTER TABLE `event_form`
  MODIFY `eid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `match_performance`
--
ALTER TABLE `match_performance`
  MODIFY `mid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `players`
--
ALTER TABLE `players`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `previous_history`
--
ALTER TABLE `previous_history`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `team_formation`
--
ALTER TABLE `team_formation`
  MODIFY `tid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `best_performance`
--
ALTER TABLE `best_performance`
  ADD CONSTRAINT `best_performance_ibfk_1` FOREIGN KEY (`pid`) REFERENCES `players` (`pid`) ON DELETE CASCADE;

--
-- Constraints for table `degree`
--
ALTER TABLE `degree`
  ADD CONSTRAINT `degree_ibfk_1` FOREIGN KEY (`pid`) REFERENCES `players` (`pid`) ON DELETE CASCADE;

--
-- Constraints for table `previous_history`
--
ALTER TABLE `previous_history`
  ADD CONSTRAINT `previous_history_ibfk_1` FOREIGN KEY (`pid`) REFERENCES `players` (`pid`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
