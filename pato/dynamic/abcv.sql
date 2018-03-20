--
-- Database: `abcv`
--

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `userid` varchar(100) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(11) NOT NULL,
  `address` text NOT NULL,
  `age` varchar(10) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `country` varchar(100) NOT NULL,
  `number` varchar(10) NOT NULL,
  `images` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`userid`, `name`, `email`, `phone`, `address`, `age`, `gender`, `date`, `country`, `number`, `images`) VALUES
('12', '12', '12', '12', '21', '12', 'male', '2120-12-12 00:00:00', '12', '112', '0a193d620bc66fa8ad725b30cce1e048Screenshot (6).png'),
('Deepak525', 'Deepak', 'deepkangar233243@gmail.com', '7973453377', 'Jalandhar', '18', 'male', '2018-03-22 00:00:00', 'India', '4', '5b9b1eac1c3c0cb80a1c1709438aa9b3Screenshot (5).png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `phone` (`phone`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
