-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 21, 2022 at 05:57 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hotel_info`
--

-- --------------------------------------------------------

--
-- Table structure for table `hotel_name_table`
--

CREATE TABLE `hotel_name_table` (
  `Hotel_Id` int(255) NOT NULL,
  `Hotel_name` varchar(255) NOT NULL,
  `Location` varchar(255) NOT NULL,
  `RoomS` varchar(255) NOT NULL,
  `AmenitiesS` varchar(255) NOT NULL,
  `RoomD` varchar(255) NOT NULL,
  `AmenitiesD` varchar(255) NOT NULL,
  `H_Details` varchar(255) NOT NULL,
  `timestam` datetime NOT NULL DEFAULT current_timestamp(),
  `image` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hotel_name_table`
--

INSERT INTO `hotel_name_table` (`Hotel_Id`, `Hotel_name`, `Location`, `RoomS`, `AmenitiesS`, `RoomD`, `AmenitiesD`, `H_Details`, `timestam`, `image`) VALUES
(1, 'Taj Lakefront Bhopal', 'Bhadbhada Road, Link Rd Number 3, Chouraha, Bhopal, Madhya Pradesh', '1000 pernight', 'free breakfast', '1200 pernight', 'lunch with free accessory', 'A room assigned to many person. May have one or more beds.  The room size or area of queen Rooms are generally between 37 m² to 45 m².', '2022-11-12 14:35:24', 'taj.jpg'),
(2, 'Noor-Us-Sabah Palace', 'VIP Road, Kohefiza, Bhopal, Madhya Pradesh 462001', '1000 pernight', 'only rooms accessory', '1200 pernight', 'Free Breakfast and lunch', 'A room assigned to many person. May have one or more beds.  The room size or area of queen Rooms are generally between 37 m² to 45 m².', '2022-11-12 14:35:24', 'noor.jpg'),
(3, 'The Vinncent inn', 'Plot No 112 Behind Panchanan Building, Tt Nagar/ Roshanpura, Malviya Nagar, Bhopal, Madhya Pradesh 462011', '1000 pernight', 'free breakfaste', '1200 pernight', 'lunch with free accessoryhee', 'This hotel is very friendly with customer', '2022-11-12 14:35:24', 'citywailk.jpg'),
(4, 'FabHotel Prime Oasis Blue', 'B-25, Kasturba Nagar, Maharana Pratap Nagar, Bhopal, Madhya Pradesh', '1400', 'only rooms accessory', '2500 pernight', 'Free Breakfast and lunch and dinner for first day only', 'This hotel is very friendly with customer', '2022-11-12 14:35:24', 'first1.jpg'),
(5, 'Hotel Centre Park Bhopal', 'Rang Mahal Tower Bhadbhada Rd, New Market, Tt Nagar, Stt Nagar, Bhopal, Madhya Pradesh 462003', '500pernight', 'Ac provided only', '1200 pernightthe', 'free lunch ', 'this is very trusted hotel ', '2022-11-12 14:35:24', 'four.jpg'),
(6, 'Courtyard by Marriott Bhopal', 'DB City Mall, Hoshangabad Rd, Zone-I, Maharana Pratap Nagar, Bhopal, Madhya Pradesh 462011', '', '', '', '0', '0', '2022-11-12 14:35:24', 'eight.jpg'),
(7, 'Loga Villa', '17, Shyamla Hills Road, Krishna Nagar, Shyamla Hills, Bhopal, Madhya Pradesh 462002', '', '', '', '0', '0', '2022-11-12 14:35:24', ''),
(8, 'Radisson Bhopal', 'Opposite Savoy Complex, Gulmohar Colony, E-8, Bawadia Kalan, Bhopal, Madhya Pradesh 462039', '', '', '', '0', '0', '2022-11-12 14:35:24', ''),
(9, 'FabHotel Oasis Yellow Courtyard', 'Courtyard, A 5 Kasturba Nagar, Bhopal 462023', '', '', '', '0', '0', '2022-11-12 14:35:24', ''),
(10, 'Hotel City Walk', '5th Floor, City Walk Mall, Near Lalghati, Kohefiza, Bhopal, Madhya Pradesh', '', '', '', '0', '0', '2022-11-12 14:35:24', ''),
(11, 'The Bastion', 'Plot No -05, Vidhya Nagar, Sector A, Hoshangabad Road, Bhopal 262026', '', '', '', '0', '0', '2022-11-12 14:35:24', ''),
(12, 'Hotel Suraj Palace', 'Airport Road 14-15 Opposit to Dronachal Army Head Office, Bhopal, Madhya Pradesh 462030', '', '', '', '0', '0', '2022-11-12 14:35:24', ''),
(13, 'Hotel Rajhans Regent', 'Plot No 14-15 Inter State Bus Terminal [ISBT] Near Chetak Bridge, Behind Nexa Showroom, Isbt, Commercial Area, Bhopal, Madhya Pradesh 462023', '', '', '', '0', '0', '2022-11-12 14:35:24', ''),
(14, 'Hotel Rajhans Ritz', 'Hoshangabad Rd Near Paliwal Hospital, Bhopal, Madhya Pradesh 462023', '', '', '', '0', '0', '2022-11-12 14:35:24', ''),
(15, 'Hotel Rajhans Abhinandan', '11 Mile Opposite Sahara Estate, Hoshangabad Road, Bhopal, Madhya Pradesh 462026', '', '', '', '0', '0', '2022-11-12 14:35:24', ''),
(16, 'tryhotel', 'Bhopal madhya pradesh', 'Tanyia', 'taniya@gmail.com', '12345', '0', '0', '2022-11-12 14:35:24', ''),
(17, 'Testingcompleted', 'sehore madhya pradesh', 'pooja', 'pooja@gmail.com', '12345', '0', '0', '2022-11-12 14:35:24', ''),
(18, 'try23', 'Bhopal madhya pradesh', 'soni', 'soni@gmail.com', '12345', '0', '0', '2022-11-12 14:35:24', ''),
(19, 'lalvilla', 'Bhopal madhya pradesh', 'pooja', 'pooja@gmail.com', '12345', '0', '0', '2022-11-12 14:35:24', ''),
(20, 'hotelShiva', 'mumbai', 'somya', 'somya@gmail.com', '0000', '0', '0', '2022-11-12 14:35:24', ''),
(21, 'shivahotel', 'bhopal', 'nikita', 'nikita@gmail.com', '12345', '0', '0', '2022-11-12 14:35:24', ''),
(22, 'surajpalace', 'bhopal', 'nikita', 'nikita@gmail.com', '1234', '0', '0', '2022-11-12 14:35:24', ''),
(25, 'Shiva palace', 'Bhopal', '1000 pernight', 'Free Breakfast only ', '2500 pernight', 'Free Breakf', '0', '0000-00-00 00:00:00', ''),
(44, 'newhotel ', 'bhopal', '400pernight', 'khfuwfhwiuk', '5435', 'rkmgkeg', 'ekejtwljg', '2022-11-19 18:49:25', ''),
(45, 'Testing one more ', 'sehore', '234', 'Free Breakfast only ', '1200 pernight', 'lunch with free accessoryhee', 'dbdfbd', '2022-11-26 18:29:19', ''),
(46, ' ', '', '', '', '', '', '', '0000-00-00 00:00:00', 'front1.png '),
(47, 'Testing second time ', 'sehore', '1000 pernight', 'Free Breakfast only ', '1200 pernight', 'Free Breakfast and lunch', 'A room assigned to one person. May have one or more beds.  The room size or area of Single Rooms are generally between 37 m² to 45 m².', '2022-11-26 18:54:47', 'front1.png '),
(50, ' ', '', '', '', '', '', '', '2022-11-26 19:26:28', 'taj.jpg '),
(51, ' ', '', '', '', '', '', '', '2022-11-26 20:18:58', ' '),
(52, ' ', '', '', '', '', '', '', '2022-11-28 18:05:24', ' '),
(55, 'gwwqq ', 'eghe', '322', 'hesd', '234', 'dhsh', 'erheg', '2022-11-28 18:38:42', 'sev.jpg ');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(11) NOT NULL,
  `Aname` varchar(80) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `timestime` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `Aname`, `Address`, `contact`, `email`, `password`, `timestime`) VALUES
(20, 'Pooja chandravanshi', 'Sehore madhya pradesh', '123456789', 'pooja@gmail.com', '0000', '0000-00-00 00:00:00'),
(22, 'soni', 'Bairagarh', '45205926', 'soni@gmail.com', '12345', '0000-00-00 00:00:00'),
(23, 'tanya', 'Bhopal madhya pradesh', '567890', 'tanya@gmail.com', '123456', '0000-00-00 00:00:00'),
(24, 'dev', 'Bhopal madhya pradesh', '567890343546', 'dev@gmail.com', '567890', '0000-00-00 00:00:00'),
(26, 'soni', 'Bhopal near mp nagar', '567890', 'soni@gmail.com', '12345', '0000-00-00 00:00:00'),
(27, 'dev verma', 'Delhi', '8345792', 'dev@gmail.com', '12345', '0000-00-00 00:00:00'),
(28, 'neetu', 'Delhi', '8345792', 'neetu@gmail.com', '12345', '0000-00-00 00:00:00'),
(29, 'priya', 'Delhi', '8345792', 'priya@gmail.com', '12345', '0000-00-00 00:00:00'),
(30, 'ritu', 'mumbai', '8345792', 'ritu@gmail.com', '4563', '0000-00-00 00:00:00'),
(31, 'taniya', 'bhopal', '234567', 'tanya@gmail.com', 'tanya', '0000-00-00 00:00:00'),
(33, 'Pranjal verma', 'Bhopal madhya pradesh', '958943', 'P@gmail.com', '9090', '0000-00-00 00:00:00'),
(34, 'Pooja chandravanshi', 'Bhopal madhya pradesh', '2352', 'pooja@gmail.com', '2345', '0000-00-00 00:00:00'),
(35, 'ritu', 'Bhopal madhya pradesh', '2352', 'ritu@gmail.com', 'hjmjb', '0000-00-00 00:00:00'),
(36, 'oijgwjg', 'gnrkw,ng', '39878951', 'raj@gmail.com', 'iwto', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `sinup`
--

CREATE TABLE `sinup` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` int(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `timestime` datetime(6) NOT NULL DEFAULT current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sinup`
--

INSERT INTO `sinup` (`id`, `name`, `phone`, `email`, `password`, `timestime`) VALUES
(1, 'Pooja chandravanshi', 123454667, 'pooja@gmail.com', '1234', '0000-00-00 00:00:00.000000'),
(2, 'soni', 123454989, 'soni@gmail.com', '1111', '0000-00-00 00:00:00.000000'),
(3, 'Pooja chandravanshi', 123454667, 'pooja@gmail.com', '12345', '0000-00-00 00:00:00.000000'),
(5, 'ritu', 8353955, 'ritu@gmail.com', '0987', '0000-00-00 00:00:00.000000'),
(6, 'priya', 9095895, 'priya@gmail.com', '0000', '0000-00-00 00:00:00.000000'),
(7, 'raj', 123456789, 'raj@gmail.com', '00001', '0000-00-00 00:00:00.000000'),
(8, 'tanu', 3546655, 'tanu@gmail.com', 'tanu', '0000-00-00 00:00:00.000000'),
(9, 'tanu', 3546655, 'tanu@gmail.com', '12345', '0000-00-00 00:00:00.000000'),
(10, 'Pooja chandravanshi', 76576474, 'pooja@gmail.com', '1234', '0000-00-00 00:00:00.000000'),
(11, 'Pooja chandravanshi', 76576474, 'pooja@gmail.com', '1234', '0000-00-00 00:00:00.000000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `hotel_name_table`
--
ALTER TABLE `hotel_name_table`
  ADD PRIMARY KEY (`Hotel_Id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sinup`
--
ALTER TABLE `sinup`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `hotel_name_table`
--
ALTER TABLE `hotel_name_table`
  MODIFY `Hotel_Id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `sinup`
--
ALTER TABLE `sinup`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
