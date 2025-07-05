-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 30, 2025 at 11:59 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `voting_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `candidates`
--

CREATE TABLE `candidates` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `party` varchar(100) DEFAULT NULL,
  `votes` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `candidates`
--

INSERT INTO `candidates` (`id`, `name`, `party`, `votes`) VALUES
(1, 'Pushkar', 'BJP', 2),
(2, 'Nishant Kumar', 'INC', 1),
(3, 'Badal Shah', 'AIM', 1),
(4, 'Riya Srivastava', 'BJP', 1);

-- --------------------------------------------------------

--
-- Table structure for table `voters`
--

CREATE TABLE `voters` (
  `id` int(11) NOT NULL,
  `voter_id` varchar(50) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `has_voted` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `voters`
--

INSERT INTO `voters` (`id`, `voter_id`, `password`, `has_voted`) VALUES
(1, 'voter101', '$2b$12$9XqWWs5vEhjMnB97EwFYFeVjJ3lLsaa.D/HJp5gaeUuo5vNcC6v/e', 1),
(2, 'voter102', '$2b$12$8s46TDryfGWLSUXqReMXYeImRztP6r7yKr/wkjOTI5ESw.QXVivGy', 1),
(3, 'voter103', '$2b$12$Weremv5zJbh5pbT7xrBGtO6vcd2vZl0XU7BH1e7.9dIQ4ORFgyPia', 1),
(4, 'voter104', '$2b$12$ZZbY20h7nUa687Ecllhj1O3lSdNxcp4bFdQf/JO9/IGGogVOFOcum', 1),
(5, 'voter105', '$2b$12$BIJTB.95O5xwGpe1Ht4etOxEmMHdBXmjRhnpbNClqJCNlMnd.lgJi', 1),
(6, 'voter106', '$2b$12$UGclo4hLl/otiWLrKa5xHO9cHPkQdZ5ZfgmQazQtG/GgC0FkLi8pS', 0),
(7, 'voter107', '$2b$12$TTfFZtgG9ryXKvrIn39r6e2prMe7pdPw8WIWpS2nCkOYp7T7grDWu', 0),
(8, 'voter108', '$2b$12$jD6VrMxSIZQl067fjak/C.lNf2WoMYE570cFTel6ecm1tqqnFM9ny', 0),
(9, 'voter109', '$2b$12$y38p77eA28RD.6eXwIWjs.OiGddqeTLR0JFMYXrGoa17jvcqBBHfK', 0),
(10, 'voter110', '$2b$12$V2Kgr8K0nEc8Cu2KAARO2egjbNlLh.EyhLEDjgktWyrfJO/IKLwdm', 0),
(11, 'voter111', '$2b$12$fMJhDgHn3bKXbDnqZtBk/e1lRoTYPi6/v.X9xjnkExZPmoqZW5kv2', 0),
(12, 'voter112', '$2b$12$vT3r2gV2Ye3cP4dFxw.LDO7k2qx0lfBamtL5XVzUvvTrCw6nR.VIy', 0),
(13, 'voter113', '$2b$12$iL6rvvcSaRAqpD7xeaXITO7ouxUGy3UKzBD/Q.WZeYtup/1.mDNPm', 0),
(14, 'voter114', '$2b$12$1we2Xr4X4Hwhwfo/0Cs/1.oI9Gfdc4Y6SLz3MmnzfU7.WJJ6F1v7q', 0),
(15, 'voter115', '$2b$12$CXYRrqbP/7BsHOoaOuLm9uWd6vyIOeRwbpMJn7qkJCwq4jRgU04QK', 0),
(16, 'voter116', '$2b$12$nwxzBb1v5/7o4iO6RxpJieR9KwGq/ukY2INEvhbA1lW23Bpxt3mTa', 0),
(17, 'voter117', '$2b$12$Fj4PJse9T8Zdi3uUTvHkQ.0bYDfBPDSf6UBzxUaKbS6BhDyuK7YiK', 0),
(18, 'voter118', '$2b$12$mQ3u1X3/O6pTz5VgQVqb9.GQasl9TL7kRlwc4NwG/pBskuOy5rlGi', 0),
(19, 'voter119', '$2b$12$wKzwMw.417Nbxl2rWyZkBOQEUF6xW0hH7soAnV5urbtAILGMzYqFC', 0),
(20, 'voter120', '$2b$12$YsPGVBA2VTz8I/2JZ8ZXRuZWqCCvrjz0kdTZaxdUgFFwK3JftTsn2', 0),
(21, 'voter121', '$2b$12$sKi/xFCWox/qNRfLoN8MguETfWL5CcvYDQpisDc7w8s9qvojmN9SC', 0),
(22, 'voter122', '$2b$12$2M5FDDiE9DN9/xCotepqa.N0W2VhryZawlFMChId1mOjdBxxTnzcW', 0),
(23, 'voter123', '$2b$12$8YUL7OrUG5m.ga.ddqqwGeZllmAq1/l6rPvqrTbcYEHb042fq.U2i', 0),
(24, 'voter124', '$2b$12$41DMvlDjF1ojYaUTsC1Ou.3eu6t6J1ta6POAXEcIbzjZ4bPvwdOJ2', 0),
(25, 'voter125', '$2b$12$I3a61orWHJU4b2JRNldJl.zHHRa7iKn/d5PfZfAJTr1tatkATqrS.', 0),
(26, 'voter126', '$2b$12$CHHxUtEHrVR7VDI5s.mMsuhj1T/UHwK24nu0sux4BMAfkSwLuWDjG', 0),
(27, 'voter127', '$2b$12$je1RHOsZzMJxDEgFzMryIebUbySmYg6SyLVujA6dhN7/fbERGt9Da', 0),
(28, 'voter128', '$2b$12$K4IqAjI/WJmFjjoO6zSqeOW5nvXt24EC7BA2Xc8T204E3YspEGcbW', 0),
(29, 'voter129', '$2b$12$1L2BW/SjfJelhIPbSFjsn.fMBRp464U/cEhckQQg1xNxk4vvEtvP6', 0),
(30, 'voter130', '$2b$12$fiXc3vZ4Nkg38Ijd.kB3x.E1JkOGyVaLR1QvJbaHmLujp0C3LluHy', 0),
(31, 'voter131', '$2b$12$Zx0RFoQs5QsBBFX2q60qb.zRFRH70E3OY6fEYhU.QPNTFUbYBnGna', 0),
(32, 'voter132', '$2b$12$R7uqTBT5jga4O/kjGl3C8eJNi.LWw0OMd49LwKPDCeNkXGKnuJuji', 0),
(33, 'voter133', '$2b$12$yZu0JqzIT.BW2e9BXi4mY.tAT9VjI5pKs6mo3VPm56Ege5WVpB4tO', 0),
(34, 'voter134', '$2b$12$.A.s6micOUZSolvi8xMuxePz275jfzs/jsHk0koDg3/O9hixCgI6C', 0),
(35, 'voter135', '$2b$12$Zl9Kw0j8Yj/q26msp5nz/uzdnJ0KrW.3/d8BFqBmN3e9hWW0dCY8.', 0),
(36, 'voter136', '$2b$12$9jJ9qRdswWUX1wMYtbfc9.Iei1pXjT3jaPomXndhOlrOYVyT8tP5O', 0),
(37, 'voter137', '$2b$12$cKV44uNzshhLPozYHmra8ulxLEHbuTdqtiD1AfVR0OOTBkn87NQE.', 0),
(38, 'voter138', '$2b$12$TOea1Pp2Ml5Eb/x1Q4/5KeW1.f2DeCT8xlndDNe2Bi6ffWU/deMQi', 0),
(39, 'voter139', '$2b$12$kGF9pC3HiGJT4.FMavO//.sJeUu2rxo2lenmEBz1BzlZo/7kUfryq', 0),
(40, 'voter140', '$2b$12$NIP24Rt73DSVmhZI6CdY0u6PRlCETjn25Ut0rih9XGEisZP2llMjm', 0);

-- --------------------------------------------------------

--
-- Table structure for table `votes`
--

CREATE TABLE `votes` (
  `id` int(11) NOT NULL,
  `candidate_id` int(11) DEFAULT NULL,
  `vote_time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `candidates`
--
ALTER TABLE `candidates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `voters`
--
ALTER TABLE `voters`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `voter_id` (`voter_id`);

--
-- Indexes for table `votes`
--
ALTER TABLE `votes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `candidates`
--
ALTER TABLE `candidates`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `voters`
--
ALTER TABLE `voters`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `votes`
--
ALTER TABLE `votes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
