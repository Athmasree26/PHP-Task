
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";
--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `slno` int(11) NOT NULL,
  `Username` varchar(256) NOT NULL,
  `email` varchar(256) NOT NULL,
  `password` varchar(256) NOT NULL,
  `confirmpassword` varchar(256) NOT NULL,
  `tad` timestamp NOT NULL DEFAULT current_timestamp(),
  `lastlogindate` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`slno`, `Username`,  `email`, `password`,  `confirmpassword`) VALUES
(1, 'sree', 'sree@gmail.com', 'sree', 'sree'),
(2, 'laxmi', 'laxmi@gmail.com', 'laxmi', 'laxmi'),
(3, 'nani', 'nani@gmail.com', 'nani', 'nani'),
(4, 'kumar', 'kumar@gmail.com', 'kumar', 'kumar');


ALTER TABLE `register`
  ADD PRIMARY KEY (`slno`);


ALTER TABLE `register`
  MODIFY `slno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;


-- --------------------------------------------------------


