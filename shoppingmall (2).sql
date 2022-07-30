-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 30, 2022 at 01:24 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shoppingmall`
--

-- --------------------------------------------------------

--
-- Table structure for table `coupons`
--

CREATE TABLE `coupons` (
  `couponId` int(11) NOT NULL,
  `couponCode` varchar(10) NOT NULL,
  `couponValue` int(11) NOT NULL,
  `couponOutletiId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `eventsponsor`
--

CREATE TABLE `eventsponsor` (
  `eventSponsorId` int(11) NOT NULL,
  `eventId` int(11) NOT NULL,
  `eventSponsorName` varchar(50) NOT NULL,
  `eventSponsorAmount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `foodcourt`
--

CREATE TABLE `foodcourt` (
  `foodCourtId` int(11) NOT NULL,
  `foodCourtName` varchar(50) NOT NULL,
  `foodCourtContact` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `foodcourt`
--

INSERT INTO `foodcourt` (`foodCourtId`, `foodCourtName`, `foodCourtContact`) VALUES
(1, 'FC_1', '990099'),
(3, 'FC_1', '9900991'),
(4, 'FC_2', '09090');

-- --------------------------------------------------------

--
-- Table structure for table `foodcourtitems`
--

CREATE TABLE `foodcourtitems` (
  `foodCourtItemId` int(11) NOT NULL,
  `foodCourtItemName` varchar(50) NOT NULL,
  `foodCourtItemValue` int(11) NOT NULL,
  `foodCourtItemQuantity` int(11) NOT NULL,
  `foodCourtId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `invoice`
--

CREATE TABLE `invoice` (
  `invoiceId` int(11) NOT NULL,
  `invoiceNumber` varchar(12) NOT NULL,
  `invoiceAmount` int(11) NOT NULL,
  `invoiceDate` datetime NOT NULL,
  `patronId` int(11) NOT NULL,
  `productId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `mallevent`
--

CREATE TABLE `mallevent` (
  `mallEventId` int(11) NOT NULL,
  `mallEventName` varchar(50) NOT NULL,
  `mallEventDate` datetime NOT NULL,
  `mallIds` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mallevent`
--

INSERT INTO `mallevent` (`mallEventId`, `mallEventName`, `mallEventDate`, `mallIds`) VALUES
(1, 'MALL EVE', '2022-01-01 02:00:00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `mallfoodcourt`
--

CREATE TABLE `mallfoodcourt` (
  `mallFoodCourtId` int(11) NOT NULL,
  `mallId` int(11) NOT NULL,
  `foodCourtId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mallfoodcourt`
--

INSERT INTO `mallfoodcourt` (`mallFoodCourtId`, `mallId`, `foodCourtId`) VALUES
(1, 1, 1),
(2, 1, 4);

-- --------------------------------------------------------

--
-- Table structure for table `mallmanager`
--

CREATE TABLE `mallmanager` (
  `mallManagerId` int(11) NOT NULL,
  `mallId` int(11) NOT NULL,
  `mallManager` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mallmanager`
--

INSERT INTO `mallmanager` (`mallManagerId`, `mallId`, `mallManager`) VALUES
(1, 1, 'MGR_1');

-- --------------------------------------------------------

--
-- Table structure for table `mallparking`
--

CREATE TABLE `mallparking` (
  `mallParkingId` int(11) NOT NULL,
  `mallParkingCode` varchar(5) NOT NULL,
  `mallId` int(11) NOT NULL,
  `mallParkingStatus` enum('Empty','Parked') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `managerdetails`
--

CREATE TABLE `managerdetails` (
  `managerId` varchar(6) NOT NULL,
  `managerName` varchar(50) NOT NULL,
  `managerMobile` varchar(12) NOT NULL,
  `managerPassword` varchar(20) NOT NULL,
  `managerSalary` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `managerdetails`
--

INSERT INTO `managerdetails` (`managerId`, `managerName`, `managerMobile`, `managerPassword`, `managerSalary`) VALUES
('ANISH1', 'Anish', '990990', '1234', 1234),
('MGR_1', 'GOPI', '90909090', '1234', 4300);

-- --------------------------------------------------------

--
-- Table structure for table `outletdetails`
--

CREATE TABLE `outletdetails` (
  `outletId` int(11) NOT NULL,
  `outletName` varchar(50) NOT NULL,
  `mallId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `outletdetails`
--

INSERT INTO `outletdetails` (`outletId`, `outletName`, `mallId`) VALUES
(1, 'Old road outlet', 1),
(2, 'New road outlet', 1);

-- --------------------------------------------------------

--
-- Table structure for table `outletmembership`
--

CREATE TABLE `outletmembership` (
  `idMembership` int(11) NOT NULL,
  `membershipId` varchar(5) NOT NULL,
  `outletId` int(11) NOT NULL,
  `memberId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `outletproducts`
--

CREATE TABLE `outletproducts` (
  `outletProductId` int(11) NOT NULL,
  `productCost` int(11) NOT NULL,
  `productName` varchar(50) NOT NULL,
  `productQuantity` int(11) NOT NULL,
  `outletId` int(11) NOT NULL,
  `outletProductDetails` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `outletproducts`
--

INSERT INTO `outletproducts` (`outletProductId`, `productCost`, `productName`, `productQuantity`, `outletId`, `outletProductDetails`) VALUES
(1, 20, 'Big toy', 20, 1, 'Product Detail'),
(2, 30, 'Small Toy', 30, 1, 'This is a small product');

-- --------------------------------------------------------

--
-- Table structure for table `patron`
--

CREATE TABLE `patron` (
  `patronId` int(11) NOT NULL,
  `patronFirstName` varchar(50) NOT NULL,
  `patronUserId` varchar(50) NOT NULL,
  `patronPassword` varchar(20) NOT NULL,
  `patronContact` varchar(12) NOT NULL,
  `patronLastName` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `patron`
--

INSERT INTO `patron` (`patronId`, `patronFirstName`, `patronUserId`, `patronPassword`, `patronContact`, `patronLastName`) VALUES
(1, 'First', 'email@email.com', '1234', '99009900', 'Last');

-- --------------------------------------------------------

--
-- Table structure for table `patroncard`
--

CREATE TABLE `patroncard` (
  `patronCardId` int(11) NOT NULL,
  `patronCardFirstName` varchar(50) NOT NULL,
  `patronCardLastName` varchar(50) NOT NULL,
  `patronCardNumber` varchar(16) NOT NULL,
  `patronCardCVV` int(11) NOT NULL,
  `patronCardExpiry` date NOT NULL,
  `patronId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `paymentmethod`
--

CREATE TABLE `paymentmethod` (
  `paymentMethodId` int(11) NOT NULL,
  `paymentMethodName` varchar(50) NOT NULL,
  `paymentType` enum('UPI','Card') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `proprietor`
--

CREATE TABLE `proprietor` (
  `proprietorId` varchar(10) NOT NULL,
  `proprietorName` varchar(40) NOT NULL,
  `proprietorMobile` varchar(12) NOT NULL,
  `proprietorPin` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `proprietor`
--

INSERT INTO `proprietor` (`proprietorId`, `proprietorName`, `proprietorMobile`, `proprietorPin`) VALUES
('PROP_1', 'Nishanth', '90909090', 1234);

-- --------------------------------------------------------

--
-- Table structure for table `shoppingmalldetails`
--

CREATE TABLE `shoppingmalldetails` (
  `shoppingMallId` int(11) NOT NULL,
  `shoppingMallName` varchar(50) NOT NULL,
  `shoppingMallAddress` varchar(100) NOT NULL,
  `shoppingMallMobile` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `shoppingmalldetails`
--

INSERT INTO `shoppingmalldetails` (`shoppingMallId`, `shoppingMallName`, `shoppingMallAddress`, `shoppingMallMobile`) VALUES
(1, 'DENTON Mall', 'Denton, 76201', '90909099'),
(2, 'Dallas Mall', 'Dallas', '990099');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `coupons`
--
ALTER TABLE `coupons`
  ADD PRIMARY KEY (`couponId`);

--
-- Indexes for table `eventsponsor`
--
ALTER TABLE `eventsponsor`
  ADD PRIMARY KEY (`eventSponsorId`),
  ADD KEY `eventsponsor_1` (`eventId`);

--
-- Indexes for table `foodcourt`
--
ALTER TABLE `foodcourt`
  ADD PRIMARY KEY (`foodCourtId`),
  ADD UNIQUE KEY `foodCourtContact` (`foodCourtContact`);

--
-- Indexes for table `foodcourtitems`
--
ALTER TABLE `foodcourtitems`
  ADD PRIMARY KEY (`foodCourtItemId`);

--
-- Indexes for table `invoice`
--
ALTER TABLE `invoice`
  ADD PRIMARY KEY (`invoiceId`),
  ADD UNIQUE KEY `invoiceNumber` (`invoiceNumber`),
  ADD KEY `invoice_1` (`patronId`),
  ADD KEY `invoice_2` (`productId`);

--
-- Indexes for table `mallevent`
--
ALTER TABLE `mallevent`
  ADD PRIMARY KEY (`mallEventId`),
  ADD KEY `mallEvent_1` (`mallIds`);

--
-- Indexes for table `mallfoodcourt`
--
ALTER TABLE `mallfoodcourt`
  ADD PRIMARY KEY (`mallFoodCourtId`),
  ADD UNIQUE KEY `foodCourtId` (`foodCourtId`);

--
-- Indexes for table `mallmanager`
--
ALTER TABLE `mallmanager`
  ADD PRIMARY KEY (`mallManagerId`),
  ADD KEY `constraint_1` (`mallManager`),
  ADD KEY `constraint_2` (`mallId`);

--
-- Indexes for table `mallparking`
--
ALTER TABLE `mallparking`
  ADD PRIMARY KEY (`mallParkingId`),
  ADD KEY `mallparking_1` (`mallId`);

--
-- Indexes for table `managerdetails`
--
ALTER TABLE `managerdetails`
  ADD PRIMARY KEY (`managerId`),
  ADD UNIQUE KEY `managerMobile` (`managerMobile`);

--
-- Indexes for table `outletdetails`
--
ALTER TABLE `outletdetails`
  ADD PRIMARY KEY (`outletId`),
  ADD KEY `outletdetails_1` (`mallId`);

--
-- Indexes for table `outletmembership`
--
ALTER TABLE `outletmembership`
  ADD PRIMARY KEY (`idMembership`),
  ADD KEY `outletmembership_3` (`outletId`),
  ADD KEY `outletmembership_4` (`memberId`);

--
-- Indexes for table `outletproducts`
--
ALTER TABLE `outletproducts`
  ADD PRIMARY KEY (`outletProductId`),
  ADD KEY `outletproduct_1` (`outletId`);

--
-- Indexes for table `patron`
--
ALTER TABLE `patron`
  ADD PRIMARY KEY (`patronId`);

--
-- Indexes for table `patroncard`
--
ALTER TABLE `patroncard`
  ADD PRIMARY KEY (`patronCardId`);

--
-- Indexes for table `paymentmethod`
--
ALTER TABLE `paymentmethod`
  ADD PRIMARY KEY (`paymentMethodId`);

--
-- Indexes for table `proprietor`
--
ALTER TABLE `proprietor`
  ADD PRIMARY KEY (`proprietorId`);

--
-- Indexes for table `shoppingmalldetails`
--
ALTER TABLE `shoppingmalldetails`
  ADD PRIMARY KEY (`shoppingMallId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `coupons`
--
ALTER TABLE `coupons`
  MODIFY `couponId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `eventsponsor`
--
ALTER TABLE `eventsponsor`
  MODIFY `eventSponsorId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `foodcourt`
--
ALTER TABLE `foodcourt`
  MODIFY `foodCourtId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `foodcourtitems`
--
ALTER TABLE `foodcourtitems`
  MODIFY `foodCourtItemId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `invoice`
--
ALTER TABLE `invoice`
  MODIFY `invoiceId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `mallevent`
--
ALTER TABLE `mallevent`
  MODIFY `mallEventId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `mallfoodcourt`
--
ALTER TABLE `mallfoodcourt`
  MODIFY `mallFoodCourtId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `mallmanager`
--
ALTER TABLE `mallmanager`
  MODIFY `mallManagerId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `mallparking`
--
ALTER TABLE `mallparking`
  MODIFY `mallParkingId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `outletdetails`
--
ALTER TABLE `outletdetails`
  MODIFY `outletId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `outletmembership`
--
ALTER TABLE `outletmembership`
  MODIFY `idMembership` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `outletproducts`
--
ALTER TABLE `outletproducts`
  MODIFY `outletProductId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `patron`
--
ALTER TABLE `patron`
  MODIFY `patronId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `patroncard`
--
ALTER TABLE `patroncard`
  MODIFY `patronCardId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `paymentmethod`
--
ALTER TABLE `paymentmethod`
  MODIFY `paymentMethodId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `shoppingmalldetails`
--
ALTER TABLE `shoppingmalldetails`
  MODIFY `shoppingMallId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `eventsponsor`
--
ALTER TABLE `eventsponsor`
  ADD CONSTRAINT `eventsponsor_1` FOREIGN KEY (`eventId`) REFERENCES `mallevent` (`mallEventId`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `invoice`
--
ALTER TABLE `invoice`
  ADD CONSTRAINT `invoice_1` FOREIGN KEY (`patronId`) REFERENCES `patron` (`patronId`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `invoice_2` FOREIGN KEY (`productId`) REFERENCES `outletproducts` (`outletProductId`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `mallevent`
--
ALTER TABLE `mallevent`
  ADD CONSTRAINT `mallEvent_1` FOREIGN KEY (`mallIds`) REFERENCES `shoppingmalldetails` (`shoppingMallId`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `mallmanager`
--
ALTER TABLE `mallmanager`
  ADD CONSTRAINT `constraint_1` FOREIGN KEY (`mallManager`) REFERENCES `managerdetails` (`managerId`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `constraint_2` FOREIGN KEY (`mallId`) REFERENCES `shoppingmalldetails` (`shoppingMallId`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `mallparking`
--
ALTER TABLE `mallparking`
  ADD CONSTRAINT `mallparking_1` FOREIGN KEY (`mallId`) REFERENCES `shoppingmalldetails` (`shoppingMallId`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `outletdetails`
--
ALTER TABLE `outletdetails`
  ADD CONSTRAINT `outletdetails_1` FOREIGN KEY (`mallId`) REFERENCES `shoppingmalldetails` (`shoppingMallId`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `outletmembership`
--
ALTER TABLE `outletmembership`
  ADD CONSTRAINT `outletmembership_3` FOREIGN KEY (`outletId`) REFERENCES `outletdetails` (`outletId`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `outletmembership_4` FOREIGN KEY (`memberId`) REFERENCES `patron` (`patronId`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `outletproducts`
--
ALTER TABLE `outletproducts`
  ADD CONSTRAINT `outletproduct_1` FOREIGN KEY (`outletId`) REFERENCES `outletdetails` (`outletId`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
