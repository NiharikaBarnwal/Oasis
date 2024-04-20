-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `gender` enum('Male','Female','Other') NOT NULL,
  `dob` date NOT NULL,
  `email` varchar(320) NOT NULL,
  `phone` bigint(11) NOT NULL,
  `pass` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `name`, `gender`, `dob`, `email`, `phone`, `pass`) VALUES
('', 'IJ\'VV', '', '0000-00-00', 'jnn@vhbl', 4568, 'nbk'),
('ayusa', 'T Ayusa ', 'Female', '2004-10-12', 'ayusa@gmail.com', 279864, 'mypass'),
('gullu', 'Gulnaaz Ahmed', 'Female', '2003-09-03', 'gullu@ullu', 5465985502, 'mypass'),
('hera', 'Hera Dubey', 'Female', '2002-07-24', 'hera@gmail', 4666668892, 'mypass'),
('mohit', 'Mohit Barnwal', 'Male', '1999-01-02', 'mohitbarn@gmail.com', 3435864434, 'hello'),
('niharika', 'Niharika Barnwal', 'Female', '2004-12-12', 'nbniharika24@gmail.com', 6206552709, 'mypass'),
('suchi', 'Suchismita Panda', 'Female', '2004-05-25', 'suchi@gmail.com', 5465985502, 'mypass');


