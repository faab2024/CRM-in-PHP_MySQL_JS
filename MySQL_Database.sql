-- phpMyAdmin SQL Dump
-- version 4.9.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 04, 2020 at 12:27 AM
-- Server version: 10.3.23-MariaDB-log-cll-lve
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ironxpxj_crm`
--

-- --------------------------------------------------------

--
-- Table structure for table `camp`
--

CREATE TABLE `camp` (
  `id` int(9) NOT NULL,
  `sender` varchar(200) NOT NULL,
  `recp` varchar(240) NOT NULL,
  `subject` varchar(250) NOT NULL,
  `message` varchar(250) NOT NULL,
  `tzone` varchar(200) NOT NULL,
  `stime` varchar(250) NOT NULL,
  `etime` varchar(250) NOT NULL,
  `period` int(100) NOT NULL,
  `date_reg` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `client` int(250) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `id` int(9) NOT NULL,
  `name` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `email` varchar(250) NOT NULL,
  `location` varchar(250) NOT NULL,
  `date_reg` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`id`, `name`, `phone`, `email`, `location`, `date_reg`) VALUES
(2, 'Krish', '+61412766366', 'kc@hardhatdata.com', 'sydney', '2019-10-25 03:38:59');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) UNSIGNED NOT NULL,
  `Contact_Title` varchar(30) DEFAULT NULL,
  `Contact_First` varchar(5) NOT NULL,
  `Contact_Middle` varchar(30) DEFAULT NULL,
  `Contact_Last` varchar(8) NOT NULL,
  `Lead_Referral_Source` varchar(23) NOT NULL,
  `Date_of_Initial_Contact` date NOT NULL,
  `Title` varchar(20) NOT NULL,
  `Company` varchar(16) NOT NULL,
  `Industry` varchar(12) NOT NULL,
  `Address` varchar(38) NOT NULL,
  `Address_Street_1` varchar(17) NOT NULL,
  `Address_Street_2` varchar(30) DEFAULT NULL,
  `Address_City` varchar(12) NOT NULL,
  `Address_State` char(2) NOT NULL DEFAULT '',
  `Address_Zip` int(11) NOT NULL,
  `Address_Country` varchar(30) DEFAULT NULL,
  `Phone` varchar(14) NOT NULL,
  `Email` varchar(20) NOT NULL,
  `Status` int(11) UNSIGNED NOT NULL,
  `Website` varchar(23) NOT NULL,
  `LinkedIn_Profile` varchar(21) NOT NULL,
  `Background_Info` text NOT NULL,
  `Sales_Rep` int(11) UNSIGNED NOT NULL,
  `Rating` decimal(4,2) NOT NULL,
  `Project_Type` varchar(35) DEFAULT NULL,
  `Project_Description` tinytext DEFAULT NULL,
  `Proposal_Due_Date` date DEFAULT NULL,
  `Budget` decimal(10,2) DEFAULT NULL,
  `Deliverables` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `Contact_Title`, `Contact_First`, `Contact_Middle`, `Contact_Last`, `Lead_Referral_Source`, `Date_of_Initial_Contact`, `Title`, `Company`, `Industry`, `Address`, `Address_Street_1`, `Address_Street_2`, `Address_City`, `Address_State`, `Address_Zip`, `Address_Country`, `Phone`, `Email`, `Status`, `Website`, `LinkedIn_Profile`, `Background_Info`, `Sales_Rep`, `Rating`, `Project_Type`, `Project_Description`, `Proposal_Due_Date`, `Budget`, `Deliverables`) VALUES
(1, NULL, 'Amir', NULL, 'Kahnzz', 'www.google .com', '2014-05-09', 'PR Director', 'Barnes and Wells', 'PR', '52 Broadway New York, NY 12345', '52 Broadway', NULL, 'New York', 'NY', 12345, NULL, '(234) 432-2234', 'amir@pr.com', 1, 'www.pr.com', 'www.sample.com', '4 years as PR Dir. Knows the biz and has wide network.', 1, 4.00, NULL, NULL, NULL, NULL, NULL),
(2, NULL, 'Dave', NULL, 'Myers', 'Mack Truck Partner Site', '2014-02-11', 'DEF Sales', 'DEF Fluids', 'Auto', '456 Diesel St Philadelphia, PA 19308', '456 Diesel St', NULL, 'Philadelphia', 'PA', 19308, NULL, '(765) 765-7755', 'dave@def.com', 2, 'www.def.com', 'www.sample.com', '19 years in biz', 2, 2.50, NULL, NULL, NULL, NULL, NULL),
(3, NULL, 'Jason', NULL, 'Wright', 'salesforce associate', '2014-09-12', 'Marketing Director', 'Ben and Jerry\'s', 'Food', '123 Ice Cream Way Burlington, VT 12345', '123 Ice Cream Way', NULL, 'Burlington', 'VT', 12345, NULL, '(123) 432-1223', 'eat@benandjerrys.com', 1, 'www.benandjerrys.com', 'http://www.sample.com', 'Amazing ice creme company from Vermont. Sustainable practices.', 1, 4.00, NULL, NULL, NULL, NULL, NULL),
(4, NULL, 'Linda', NULL, 'DeCastro', 'Conference', '2014-01-19', 'Regional Sales Mgr', 'Pillsbury', 'Retail Foods', '44 Reading Rd Flourtown, NJ 39485', '44 Reading Rd', NULL, 'Flourtown', 'NJ', 39485, NULL, '(555) 555-5555', 'linda@pillsbury.com', 3, 'www.pillsbury.com', 'www.sample.com', 'New territory MGR', 1, 3.00, 'New Packaging for Cookie products', 'Design new cookie packaging for new line of Sugar Free cookies.', '2014-11-01', 45000.00, '6 Proofs, multiple assets'),
(5, NULL, 'Sally', NULL, 'Jane', 'CES Conference', '2014-07-01', 'COO', 'Facetech', 'Tech', '123 Tech Blvd Menlo Park, CA 12345', '123 Tech Blvd', NULL, 'Menlo Park', 'CA', 12345, NULL, '(321) 321-1122', 'sally@facetech.com', 1, 'http://www.facetech.com', 'www.sample.com', 'Great contact, has a really great roadmap.', 1, 5.00, NULL, NULL, NULL, 30000.00, NULL),
(6, NULL, 'Tim', NULL, 'Smith', 'www.google.com', '2014-10-10', 'Supply Chain Manager', 'Levis', 'Apparel', '1 Blue Jean St. Corduroy, CO 12345', '1 Blue Jean St.', NULL, 'Corduroy', 'CO', 12345, NULL, '(321) 321-4321', 'tim@levis.com', 2, 'www.levis.com', 'www.sample.com', 'Jeans and apparel for eastern U.S.<br />', 1, 3.50, 'Shelf talkers; kiosk style displays', 'Set up shelf talkers for stock shelves with an end of aisle kiosk detailing the history of Levis.', '2014-11-05', 333000.00, '10k shelf talkers, 1500 kiosks');

-- --------------------------------------------------------

--
-- Table structure for table `crm_user`
--

CREATE TABLE `crm_user` (
  `id` int(9) NOT NULL,
  `name` varchar(100) NOT NULL,
  `package` varchar(250) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(250) NOT NULL,
  `password` varchar(100) NOT NULL,
  `location` varchar(250) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `paymentNo` varchar(250) NOT NULL,
  `date_reg` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `crm_user`
--

INSERT INTO `crm_user` (`id`, `name`, `package`, `username`, `email`, `password`, `location`, `phone`, `paymentNo`, `date_reg`) VALUES
(1, 'Josh M', '', 'josh@regrowup.com', 'inc.academy.share@gmail.com', '123', '', '', '', '2019-10-28 07:57:31');

-- --------------------------------------------------------

--
-- Table structure for table `lead`
--

CREATE TABLE `lead` (
  `id` char(36) NOT NULL,
  `date_entered` datetime DEFAULT NULL,
  `date_modified` datetime DEFAULT NULL,
  `modified_user_id` char(36) DEFAULT NULL,
  `created_by` char(36) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `deleted` tinyint(1) DEFAULT 0,
  `assigned_user_id` char(36) DEFAULT NULL,
  `salutation` varchar(255) DEFAULT NULL,
  `first_name` varchar(100) DEFAULT NULL,
  `last_name` varchar(100) DEFAULT NULL,
  `title` varchar(100) DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `department` varchar(100) DEFAULT NULL,
  `do_not_call` tinyint(1) DEFAULT 0,
  `phone_home` varchar(100) DEFAULT NULL,
  `phone_mobile` varchar(100) DEFAULT NULL,
  `phone_work` varchar(100) DEFAULT NULL,
  `phone_other` varchar(100) DEFAULT NULL,
  `phone_fax` varchar(100) DEFAULT NULL,
  `lawful_basis` text DEFAULT NULL,
  `date_reviewed` date DEFAULT NULL,
  `lawful_basis_source` varchar(100) DEFAULT NULL,
  `primary_address_street` varchar(150) DEFAULT NULL,
  `primary_address_city` varchar(100) DEFAULT NULL,
  `primary_address_state` varchar(100) DEFAULT NULL,
  `primary_address_postalcode` varchar(20) DEFAULT NULL,
  `primary_address_country` varchar(255) DEFAULT NULL,
  `alt_address_street` varchar(150) DEFAULT NULL,
  `alt_address_city` varchar(100) DEFAULT NULL,
  `alt_address_state` varchar(100) DEFAULT NULL,
  `alt_address_postalcode` varchar(20) DEFAULT NULL,
  `alt_address_country` varchar(255) DEFAULT NULL,
  `assistant` varchar(75) DEFAULT NULL,
  `assistant_phone` varchar(100) DEFAULT NULL,
  `converted` tinyint(1) DEFAULT 0,
  `refered_by` varchar(100) DEFAULT NULL,
  `lead_source` varchar(100) DEFAULT NULL,
  `lead_source_description` text DEFAULT NULL,
  `status` varchar(100) DEFAULT NULL,
  `status_description` text DEFAULT NULL,
  `reports_to_id` char(36) DEFAULT NULL,
  `account_name` varchar(255) DEFAULT NULL,
  `account_description` text DEFAULT NULL,
  `contact_id` char(36) DEFAULT NULL,
  `account_id` char(36) DEFAULT NULL,
  `opportunity_id` char(36) DEFAULT NULL,
  `opportunity_name` varchar(255) DEFAULT NULL,
  `opportunity_amount` varchar(50) DEFAULT NULL,
  `campaign_id` char(36) DEFAULT NULL,
  `birthdate` date DEFAULT NULL,
  `portal_name` varchar(255) DEFAULT NULL,
  `portal_app` varchar(255) DEFAULT NULL,
  `website` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `lead`
--

INSERT INTO `lead` (`id`, `date_entered`, `date_modified`, `modified_user_id`, `created_by`, `description`, `deleted`, `assigned_user_id`, `salutation`, `first_name`, `last_name`, `title`, `photo`, `department`, `do_not_call`, `phone_home`, `phone_mobile`, `phone_work`, `phone_other`, `phone_fax`, `lawful_basis`, `date_reviewed`, `lawful_basis_source`, `primary_address_street`, `primary_address_city`, `primary_address_state`, `primary_address_postalcode`, `primary_address_country`, `alt_address_street`, `alt_address_city`, `alt_address_state`, `alt_address_postalcode`, `alt_address_country`, `assistant`, `assistant_phone`, `converted`, `refered_by`, `lead_source`, `lead_source_description`, `status`, `status_description`, `reports_to_id`, `account_name`, `account_description`, `contact_id`, `account_id`, `opportunity_id`, `opportunity_name`, `opportunity_amount`, `campaign_id`, `birthdate`, `portal_name`, `portal_app`, `website`) VALUES
('11765d0d-2440-c3d5-76da-5d9182282e78', '2019-09-30 04:20:49', '2019-09-30 04:20:49', '1', '1', 'VINTAGE TRAILER GROUP', 0, '1', NULL, 'KAREN', 'ABBEY', NULL, NULL, NULL, 0, 'No Answer', '9096334664', NULL, '909-633-4662', '', NULL, NULL, NULL, '1005 W 56TH ST', 'SAN BERNARDINO', 'CA', '92407', 'No Answer', '', '', '', '', '', NULL, NULL, 0, '', '', '', 'New', '', NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', NULL, NULL, NULL, NULL),
('12eb656e-7d19-c146-4511-5d91821b3ab6', '2019-09-30 04:20:49', '2019-09-30 04:20:49', '1', '1', 'No Answer', 0, '1', NULL, 'NEIL', 'ACKERMAN', NULL, NULL, NULL, 0, 'No Answer', '6616182367', NULL, 'No Answer', '', NULL, NULL, NULL, '27632 W MUIR GROVE PL', 'CASTAIC', 'CA', '91384', 'No Answer', '', '', '', '', '', NULL, NULL, 0, '', '', '', 'New', '', NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', NULL, NULL, NULL, NULL),
('14ea709d-00ab-9efa-9b13-5d918285b47e', '2019-09-30 04:20:49', '2019-09-30 04:20:49', '1', '1', 'WALK IN', 0, '1', NULL, 'DAVID', 'AARON', NULL, NULL, NULL, 0, 'No Answer', '8634122097', NULL, 'No Answer', '', NULL, NULL, NULL, '2415 MADERA CIR', 'Port Hueneme', 'CA', '93041', 'No Answer', '', '', '', '', '', NULL, NULL, 0, '', '', '', 'New', '', NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', NULL, NULL, NULL, NULL),
('1575e465-4f03-9e7d-75c2-5d918276cf63', '2019-09-30 04:20:49', '2019-09-30 04:20:49', '1', '1', 'No Answer', 0, '1', NULL, 'JUAN & MARTHA', 'ACOSTA', NULL, NULL, NULL, 0, '7/9/2017, 7/28/2019', '8184544102', NULL, 'No Answer', '', NULL, NULL, NULL, '11939 YOUNGDALE AVE', 'Sylmar', 'CA', '91342', 'No Answer', '', '', '', '', '', NULL, NULL, 0, '', '', '', 'New', '', NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', NULL, NULL, NULL, NULL),
('17e6ea5e-0679-1232-d652-5d9182285526', '2019-09-30 04:20:49', '2019-09-30 04:20:49', '1', '1', 'No Answer', 0, '1', NULL, 'DANA', 'ADAMS YOGA', NULL, NULL, NULL, 0, '10/6/2017, 10/6/2017', '6612447012', NULL, 'No Answer', '', NULL, NULL, NULL, '316 CYPRESS LN UNIT 2', 'Wofford Heights', 'CA', '93285', 'No Answer', '', '', '', '', '', NULL, NULL, 0, '', '', '', 'New', '', NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', NULL, NULL, NULL, NULL),
('1f342103-fb3d-d4f0-09e2-5d9182936bf9', '2019-09-30 04:20:49', '2019-09-30 04:20:49', '1', '1', '4/29/17  CHECK FOR DEPOSIT IS WRITTEN UNDER BUSINESS ACCT. OF BUILDERS UNLIMITED. STEVE WANE --KIM', 0, '1', NULL, 'COURTNEY', 'ADAMS', NULL, NULL, NULL, 0, '8/4/17', '6613171443', NULL, 'No Answer', '', NULL, NULL, NULL, '4813 NORTHRIDGE DR', 'Palmdale', 'CA', '93551', 'No Answer', '', '', '', '', '', NULL, NULL, 0, '', '', '', 'New', '', NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', NULL, NULL, NULL, NULL),
('1f663765-5248-5579-13d8-5d9182ff6fb2', '2019-09-30 04:20:49', '2019-09-30 04:20:49', '1', '1', 'No Answer', 0, '1', NULL, 'LISE', 'ADAMS', NULL, NULL, NULL, 0, '8/13/16', '7149102934', NULL, 'No Answer', '', NULL, NULL, NULL, '24070 WHEATFIELD CR', 'Wildomar', 'CA', '92595', 'No Answer', '', '', '', '', '', NULL, NULL, 0, '', '', '', 'New', '', NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', NULL, NULL, NULL, NULL),
('20447f40-58f3-07ee-649b-5d918223eeb6', '2019-09-30 04:20:49', '2019-09-30 04:20:49', '1', '1', 'No Answer', 0, '1', NULL, 'REY & JESSICA', 'ABDOOL', NULL, NULL, NULL, 0, 'No Answer', '8059442789', NULL, 'No Answer', '', NULL, NULL, NULL, '7609 GOLDENRISE CT', 'BAKERSFIELD', 'CA', '93313', 'No Answer', '', '', '', '', '', NULL, NULL, 0, '', '', '', 'New', '', NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', NULL, NULL, NULL, NULL),
('235fbf52-d024-336a-5e6f-5d9182e13079', '2019-09-30 04:20:49', '2019-09-30 04:20:49', '1', '1', 'No Answer', 0, '1', NULL, 'MATT & JENNIFER (BO)', 'ABSHIRE', NULL, NULL, NULL, 0, '9/23/16', '9498721100', NULL, 'No Answer', '', NULL, NULL, NULL, '27312 EASTRIDGE DR', 'Lake Forest', 'CA', '92630', 'No Answer', '', '', '', '', '', NULL, NULL, 0, '', '', '', 'New', '', NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', NULL, NULL, NULL, NULL),
('27b09980-350b-c56a-a8e1-5d9182045984', '2019-09-30 04:20:49', '2019-09-30 04:20:49', '1', '1', 'No Answer', 0, '1', NULL, 'JEFF', 'ADAMS', NULL, NULL, NULL, 0, '10/17/19', '7149141849', NULL, 'No Answer', '', NULL, NULL, NULL, '2754 N. FLOWER', 'Santa Ana', 'CA', '92706', 'No Answer', '', '', '', '', '', NULL, NULL, 0, '', '', '', 'New', '', NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', NULL, NULL, NULL, NULL),
('2fc4043c-6037-aa0a-9c49-5d9182e3b21c', '2019-09-30 04:20:49', '2019-09-30 04:20:49', '1', '1', 'no prior reservation-no mailing til they book', 0, '1', NULL, 'JASON & KATHY', 'ABSEY', NULL, NULL, NULL, 0, 'No Answer', '6614446942', NULL, '661-396-0319', '', NULL, NULL, NULL, '3708 GAELIC CT', 'BAKERSFIELD', 'CA', '93311', 'No Answer', '', '', '', '', '', NULL, NULL, 0, '', '', '', 'New', '', NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', NULL, NULL, NULL, NULL),
('326a024e-d66e-43e3-2a9d-5d91820703e9', '2019-09-30 04:20:49', '2019-09-30 04:20:49', '1', '1', 'W/BROCHU', 0, '1', NULL, 'BRENT & SHARI', 'ADAMS', NULL, NULL, NULL, 0, '3/26/2015, 3/17/2016', '9038708031', NULL, 'No Answer', '', NULL, NULL, NULL, 'PO BOX 401', 'BELLES', 'TX', '75414', 'No Answer', '', '', '', '', '', NULL, NULL, 0, '', '', '', 'New', '', NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', NULL, NULL, NULL, NULL),
('327006c1-8c35-7fe7-cffc-5d9182027997', '2019-09-30 04:20:49', '2019-09-30 04:20:49', '1', '1', 'No Answer', 0, '1', NULL, 'ODALYS', 'ACOSTA', NULL, NULL, NULL, 0, '2/23/2018, 8/10/2018', '8185150670', NULL, 'No Answer', '', NULL, NULL, NULL, '7627 ALCOVE AVE', 'North Hollywood', 'CA', '91605', 'No Answer', '', '', '', '', '', NULL, NULL, 0, '', '', '', 'New', '', NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', NULL, NULL, NULL, NULL),
('3570cf28-5fa2-0c44-4486-5d9182749232', '2019-09-30 04:20:49', '2019-09-30 04:20:49', '1', '1', 'No Answer', 0, '1', NULL, 'PRESCILLA', 'ACOSTA', NULL, NULL, NULL, 0, '8/29/15', '3237673868', NULL, 'No Answer', '', NULL, NULL, NULL, '121 SINCLAIR AVE', 'GLENDALE', 'CA', '91206', 'No Answer', '', '', '', '', '', NULL, NULL, 0, '', '', '', 'New', '', NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', NULL, NULL, NULL, NULL),
('379436d4-0307-6cc4-f13d-5d91825e4f8d', '2019-09-30 04:20:49', '2019-09-30 04:20:49', '1', '1', 'No Answer', 0, '1', NULL, 'MIKE & DEBBIE', 'ABRAMS', NULL, NULL, NULL, 0, '2/12/2014, 10/6/2014, 3/12/2015, 8/3/2015, 7/4/2015, 7/6/2015, 1/10/2019', '7606177020', NULL, 'No Answer', '', NULL, NULL, NULL, '19635 OSHKOSH CT', 'APPLE VALLEY', 'CA', '92307', 'No Answer', '', '', '', '', '', NULL, NULL, 0, '', '', '', 'New', '', NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', NULL, NULL, NULL, NULL),
('3d6912d1-0dce-6ae9-6bb9-5d9182faddb4', '2019-09-30 04:20:49', '2019-09-30 04:20:49', '1', '1', 'No Answer', 0, '1', NULL, 'JASON & CHRISTA', 'ABMA', NULL, NULL, NULL, 0, '11/27/19', '8056104387', NULL, 'No Answer', '', NULL, NULL, NULL, '6190 CONEJO RD', 'Atascadero', 'CA', '93422', 'No Answer', '', '', '', '', '', NULL, NULL, 0, '', '', '', 'New', '', NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', NULL, NULL, NULL, NULL),
('3de76104-90f8-5359-6f74-5d9182d3476c', '2019-09-30 04:20:49', '2019-09-30 04:20:49', '1', '1', 'No Answer', 0, '1', NULL, 'RAY & CIRRIA', 'ABREO', NULL, NULL, NULL, 0, '7/18/2017, 7/1/2018', '9094179475', NULL, '909-390-6409', '', NULL, NULL, NULL, '2243 GREENWOOD PL', 'Ontario', 'CA', '91761', 'No Answer', '', '', '', '', '', NULL, NULL, 0, '', '', '', 'New', '', NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', NULL, NULL, NULL, NULL),
('3e07fc62-9859-af21-6fa4-5d91824f5138', '2019-09-30 04:20:49', '2019-09-30 04:20:49', '1', '1', '12 \\\\  \\\\ 07/27 - JENNIFER LEFT MESSAGE REGARDING CREDIT CARD \\\\ 07/28 - AMANDA LEFT MESSAGE REGARDS CREDIT CARD \\\\  \\\\ 07/29 - A WOMEN CALLED AND ADVISED THAT MS ACOSTA WILL NOT BE COMING, HOWEVER SOMEONE ELSE IS GOING TO BE TAKING HER SPOT. I ADVISED HER TO HAVE THAT PERSON CALL US WITH THEIR INFORMATION TO TRANSFER THE RESERVATION. NO ONE EVER CALLED BACK \\\\  \\\\ 07/31 - LEFT A MESSAGE FOR MS ACOSTA THAT THE RESERVATION IS BEING CANCELLED DUE TO NO RESPONSE.', 0, '1', NULL, 'LILLIAN', 'ACOSTA', NULL, NULL, NULL, 0, '8/6/15', '5624578226', NULL, 'No Answer', '', NULL, NULL, NULL, '8951 CALMABA AVE', 'Whittier', 'CA', '90605', 'No Answer', '', '', '', '', '', NULL, NULL, 0, '', '', '', 'New', '', NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', NULL, NULL, NULL, NULL),
('407b8101-ca91-39e2-b9b7-5d918276f815', '2019-09-30 04:20:49', '2019-09-30 04:20:49', '1', '1', 'NOE GROUP ciroco group', 0, '1', NULL, 'BRIAN & DEE', 'ABELAR', NULL, NULL, NULL, 0, '5/24/17', '8054334318', NULL, 'No Answer', '', NULL, NULL, NULL, '5961 MYRTLE CT', 'Simi Valley', 'CA', '93063', 'No Answer', '', '', '', '', '', NULL, NULL, 0, '', '', '', 'New', '', NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', NULL, NULL, NULL, NULL),
('4261b847-a61a-dca9-de0f-5d91828831e5', '2019-09-30 04:20:49', '2019-09-30 04:20:49', '1', '1', 'No Answer', 0, '1', NULL, 'TAMMY', 'ACKLEY', NULL, NULL, NULL, 0, '9/28/18', '7144253435', NULL, 'No Answer', '', NULL, NULL, NULL, '5421 ADELE AVE', 'Whittier', 'CA', '90601', 'No Answer', '', '', '', '', '', NULL, NULL, 0, '', '', '', 'New', '', NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', NULL, NULL, NULL, NULL),
('42782a22-f746-a068-46e1-5d918204e884', '2019-09-30 04:20:49', '2019-09-30 04:20:49', '1', '1', 'THEY WERE NOT HAPPY WITH THE A/C IN THE CABIN ( FELT FINE TO US!) THEY LEFT THE CABIN AND ENDED UP STAYING WITH PARENTS ON A SITE - JOSH OK\'D A 50% REFUND ($262.50) I WAS LOW ON CHECKS IN THE OFFICE SO SHELLY IS GOING TO SEND THE CHK FROM HER HOUSE. 6/7/19 LD', 0, '1', NULL, 'BRANDON', 'ABBOTT', NULL, NULL, NULL, 0, '6/6/19', '9515156236', NULL, 'No Answer', '', NULL, NULL, NULL, '2057 COUNTRY HILLS LANE', 'Riverside', 'CA', '92503', 'No Answer', '', '', '', '', '', NULL, NULL, 0, '', '', '', 'New', '', NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', NULL, NULL, NULL, NULL),
('44ddee45-2c12-5d7c-7a22-5d91827105cf', '2019-09-30 04:20:49', '2019-09-30 04:20:49', '1', '1', 'No Answer', 0, '1', NULL, 'JOSE & MARIA-ELIZABETH', 'ABAIGAR', NULL, NULL, NULL, 0, '4/21/17', '3233709142', NULL, 'No Answer', '', NULL, NULL, NULL, '2400 S ST ANDREWS PL', 'Los Angeles', 'CA', '90018', 'No Answer', '', '', '', '', '', NULL, NULL, 0, '', '', '', 'New', '', NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', NULL, NULL, NULL, NULL),
('45048005-af66-ccd2-83cf-5d9182b31303', '2019-09-30 04:20:49', '2019-09-30 04:20:49', '1', '1', 'WALK IN', 0, '1', NULL, 'BRUNO & DOROTHY', 'ACALINAS', NULL, NULL, NULL, 0, '3/28/17', '8184393672', NULL, 'No Answer', '', NULL, NULL, NULL, '609 N CALIFORNIA ST', 'Burbank', 'CA', '91505', 'No Answer', '', '', '', '', '', NULL, NULL, 0, '', '', '', 'New', '', NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', NULL, NULL, NULL, NULL),
('48a58454-1b6b-fc06-2029-5d9182b17e58', '2019-09-30 04:20:49', '2019-09-30 04:20:49', '1', '1', 'No Answer', 0, '1', NULL, 'ADAM & AMBER', 'ADAIR', NULL, NULL, NULL, 0, '11/3/2017, 11/3/2017, 11/9/2018, 11/9/2018, 11/1/2019, 11/1/2019', '3107954488', NULL, 'No Answer', '', NULL, NULL, NULL, '15515 WEST SUNSET BLVD UNIT 407', 'Pacific Palisades', 'CA', '90272', 'No Answer', '', '', '', '', '', NULL, NULL, 0, '', '', '', 'New', '', NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', NULL, NULL, NULL, NULL),
('4fa9e0e4-2b48-eff3-dd6e-5d91827af1fe', '2019-09-30 04:20:49', '2019-09-30 04:20:49', '1', '1', 'No Answer', 0, '1', NULL, 'charles', 'adamsmoss', NULL, NULL, NULL, 0, '2/15/18', '3073492318', NULL, 'No Answer', '', NULL, NULL, NULL, '14017 datura', 'bakersfield', 'CA', '93306', 'No Answer', '', '', '', '', '', NULL, NULL, 0, '', '', '', 'New', '', NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', NULL, NULL, NULL, NULL),
('50948f7b-a46c-7170-3c87-5d918260dd4f', '2019-09-30 04:20:49', '2019-09-30 04:20:49', '1', '1', 'No Answer', 0, '1', NULL, 'STEVE & DESIREE', 'ADAMS', NULL, NULL, NULL, 0, '11/10/17', '6613337312', NULL, 'No Answer', '', NULL, NULL, NULL, '250 HERMOSA DR', 'Bakersfield', 'CA', '93305', 'No Answer', '', '', '', '', '', NULL, NULL, 0, '', '', '', 'New', '', NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', NULL, NULL, NULL, NULL),
('53ec86bd-cd54-de17-0e8d-5d9182a0fe07', '2019-09-30 04:20:49', '2019-09-30 04:20:49', '1', '1', 'No Answer', 0, '1', NULL, 'GLADYS', 'ABEA', NULL, NULL, NULL, 0, '9/27/19', '3235062043', NULL, 'No Answer', '', NULL, NULL, NULL, '1499 RIDGECREST ST APT 40', 'Monterey Park', 'CA', '91754', 'No Answer', '', '', '', '', '', NULL, NULL, 0, '', '', '', 'New', '', NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', NULL, NULL, NULL, NULL),
('57848eaf-73cb-ee6f-2a6a-5d918268d623', '2019-09-30 04:20:49', '2019-09-30 04:20:49', '1', '1', 'No Answer', 0, '1', NULL, 'KELLY', 'AARDAHL', NULL, NULL, NULL, 0, '4/24/19', '6619931799', NULL, 'No Answer', '', NULL, NULL, NULL, '19129 ERWIN ST', 'Reseda', 'CA', '91335', 'No Answer', '', '', '', '', '', NULL, NULL, 0, '', '', '', 'New', '', NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', NULL, NULL, NULL, NULL),
('57ab7c52-98e4-3197-d975-5d9182a2e964', '2019-09-30 04:20:49', '2019-09-30 04:20:49', '1', '1', 'ONE DAY ON 53  TWO DAYS ON 39', 0, '1', NULL, 'MICHAEL & NOEL', 'ADAMS', NULL, NULL, NULL, 0, 'No Answer', 'No Answer', NULL, 'No Answer', '', NULL, NULL, NULL, 'P O BOX 392', 'SANTA PAULA', 'CA', '93061', 'No Answer', '', '', '', '', '', NULL, NULL, 0, '', '', '', 'New', '', NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', NULL, NULL, NULL, NULL),
('59ecfb1a-ed1e-c23b-2c21-5d9182c28552', '2019-09-30 04:20:49', '2019-09-30 04:20:49', '1', '1', 'No Answer', 0, '1', NULL, 'GARY & CATHY', 'ADAMS', NULL, NULL, NULL, 0, '4/16/2015, 1/30/2016, 7/9/2016, 6/9/2016, 4/13/2016, 8/19/2016, 7/1/2017, 4/16/2017, 4/20/2017, 7/31', '3102944249', NULL, '310-294-4249', '', NULL, NULL, NULL, '216 SAWMILL RD', 'Wofford Heights', 'CA', '93285', 'No Answer', '', '', '', '', '', NULL, NULL, 0, '', '', '', 'New', '', NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', NULL, NULL, NULL, NULL),
('61e4db42-3319-1321-abb0-5d9182ad538d', '2019-09-30 04:20:49', '2019-09-30 04:20:49', '1', '1', 'No Answer', 0, '1', NULL, 'LUIS', 'ACOSTA', NULL, NULL, NULL, 0, '7/22/14', '7608804937', NULL, 'No Answer', '', NULL, NULL, NULL, '72490 ELCENTRA WAY #140', 'Thousand Palms', 'CA', '92276', 'No Answer', '', '', '', '', '', NULL, NULL, 0, '', '', '', 'New', '', NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', NULL, NULL, NULL, NULL),
('64ca27a9-4329-5328-700f-5d91827cd22c', '2019-09-30 04:20:49', '2019-09-30 04:20:49', '1', '1', 'No Answer', 0, '1', NULL, 'RUBEN & KRISTEN', 'ACOSTA', NULL, NULL, NULL, 0, '7/18/14', '9099215884', NULL, 'No Answer', '', NULL, NULL, NULL, '1925 ELOISE WAY', 'UPLAND', 'CA', '91784', 'No Answer', '', '', '', '', '', NULL, NULL, 0, '', '', '', 'New', '', NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', NULL, NULL, NULL, NULL),
('669974be-16b6-6545-bcf5-5d9182e745c1', '2019-09-30 04:20:49', '2019-09-30 04:20:49', '1', '1', '19 YEAR ANNIVERSARY', 0, '1', NULL, 'JIM & MARGARET', 'ADAMS', NULL, NULL, NULL, 0, '9/28/18', '6613400908', NULL, 'No Answer', '', NULL, NULL, NULL, '4213 STARLING DR', 'BAKERSFIELD', 'CA', '93309', 'No Answer', '', '', '', '', '', NULL, NULL, 0, '', '', '', 'New', '', NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', NULL, NULL, NULL, NULL),
('687e5f54-0e1b-8acd-c28f-5d9182a10194', '2019-09-30 04:20:49', '2019-09-30 04:20:49', '1', '1', 'No Answer', 0, '1', NULL, 'ANTHONY', 'ACO', NULL, NULL, NULL, 0, 'No Answer', '8186345511', NULL, 'No Answer', '', NULL, NULL, NULL, '8520 DE SOTO AVE', 'CANOGA PARK', 'CA', '91304-2969', 'No Answer', '', '', '', '', '', NULL, NULL, 0, '', '', '', 'New', '', NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', NULL, NULL, NULL, NULL),
('68e9898b-960e-5e21-fbf1-5d918214f9b6', '2019-09-30 04:20:49', '2019-09-30 04:20:49', '1', '1', 'No Answer', 0, '1', NULL, 'HEATHER', 'ACAMPORA', NULL, NULL, NULL, 0, '9/29/17', '8587053582', NULL, 'No Answer', '', NULL, NULL, NULL, '14950 AMSO ST', 'Poway', 'CA', '92064', 'No Answer', '', '', '', '', '', NULL, NULL, 0, '', '', '', 'New', '', NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', NULL, NULL, NULL, NULL),
('69b53667-437b-fcfd-c731-5d91826a0351', '2019-09-30 04:20:49', '2019-09-30 04:20:49', '1', '1', 'PHOTOGRAPHER /  WIFE', 0, '1', NULL, 'BRIAN & TERESA', 'ADAMS', NULL, NULL, NULL, 0, '9/25/15', 'No Answer', NULL, '661-330-1649', '', NULL, NULL, NULL, 'No Answer', 'No Answer', 'No Answer', 'No Answer', 'No Answer', '', '', '', '', '', NULL, NULL, 0, '', '', '', 'New', '', NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', NULL, NULL, NULL, NULL),
('736d2ec5-c34b-b698-fd5d-5d9182c906e4', '2019-09-30 04:20:49', '2019-09-30 04:20:49', '1', '1', 'No Answer', 0, '1', NULL, 'BUD', 'ABBOTT', NULL, NULL, NULL, 0, '6/5/19', '9515003692', NULL, 'No Answer', '', NULL, NULL, NULL, '16490 LOIS LN', 'Riverside', 'CA', '92504', 'No Answer', '', '', '', '', '', NULL, NULL, 0, '', '', '', 'New', '', NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', NULL, NULL, NULL, NULL),
('7456fc99-f1f8-e015-9b7c-5d91829cd951', '2019-09-30 04:20:49', '2019-09-30 04:20:49', '1', '1', 'No Answer', 0, '1', NULL, 'CHARLES', 'ABAJIAN', NULL, NULL, NULL, 0, '5/17/2015, 8/3/2015', '9093387926', NULL, 'No Answer', '', NULL, NULL, NULL, 'PO BOX 26', 'CRESTLINE', 'CA', '92325', 'No Answer', '', '', '', '', '', NULL, NULL, 0, '', '', '', 'New', '', NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', NULL, NULL, NULL, NULL),
('7822954e-30bd-72bf-3cc8-5d9182ce4c8f', '2019-09-30 04:20:49', '2019-09-30 04:20:49', '1', '1', 'kids are 10-9  TWO SITES--GROUP HAD AT LEAST 5 OR 6 ADULTS AND 5 OR 6 KIDS--NOISY  UP LATE --- UP EARLY  VERY LOUD  HAD CUSTOMER COMPLAINTS!!  JOE HAD TO TELL THEM TO TURN THEIR MUSIC DOWN---DO NOT BOOK THEM AGAIN  CC \\\\ THEY ALSO COMPLETELY MUDDED OUT THE ROAD DUE TO MAXIMUM USE OF THE HOSE BIBB AT FRONT OF 79.', 0, '1', NULL, 'GREG & OVSANNA', 'ABRAMYAN', NULL, NULL, NULL, 0, 'No Answer', '8186126660', NULL, 'No Answer', '', NULL, NULL, NULL, '14744 HART ST', 'VAN NUYS', 'CA', '91405', 'No Answer', '', '', '', '', '', NULL, NULL, 0, '', '', '', 'New', '', NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', NULL, NULL, NULL, NULL),
('793079ed-525b-93e2-9b47-5d918285865b', '2019-09-30 04:20:49', '2019-09-30 04:20:49', '1', '1', 'WITH  SHEETS', 0, '1', NULL, 'LORETTA', 'ABELSEN', NULL, NULL, NULL, 0, 'No Answer', '6614331024', NULL, 'No Answer', '', NULL, NULL, NULL, '37840 28TH ST E', 'PALMDALE', 'CA', '93550', 'No Answer', '', '', '', '', '', NULL, NULL, 0, '', '', '', 'New', '', NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', NULL, NULL, NULL, NULL),
('7e2a3764-b2c5-04c1-c049-5d9182db8991', '2019-09-30 04:20:49', '2019-09-30 04:20:49', '1', '1', 'WITH HAIR ON 11 BOY SCOUTS -VEGAS 02/8/16 LD', 0, '1', NULL, 'BRETT', 'ABNEY', NULL, NULL, NULL, 0, '6/14/16', '7024451007', NULL, 'No Answer', '', NULL, NULL, NULL, '2304 STONE BREEZE AVENUE', 'NORTH LAS VEGAS', 'NV', '89031', 'No Answer', '', '', '', '', '', NULL, NULL, 0, '', '', '', 'New', '', NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', NULL, NULL, NULL, NULL),
('7e849c32-6bb3-4ac5-a78d-5d9182afb703', '2019-09-30 04:20:49', '2019-09-30 04:20:49', '1', '1', 'No Answer', 0, '1', NULL, 'AARON', 'ADAMS', NULL, NULL, NULL, 0, '8/1/2015, 7/30/2017, 6/15/2018, 6/27/2018', '7604477003', NULL, 'No Answer', '', NULL, NULL, NULL, '27447 AZURITE', 'Barstow', 'CA', '92311', 'No Answer', '', '', '', '', '', NULL, NULL, 0, '', '', '', 'New', '', NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', NULL, NULL, NULL, NULL),
('87fd0a38-41c7-143a-aad0-5d9182c875f0', '2019-09-30 04:20:49', '2019-09-30 04:20:49', '1', '1', 'child 7   WITH COURTMARSH', 0, '1', NULL, 'CHUCK & SUSAN', 'ABEL', NULL, NULL, NULL, 0, 'No Answer', '6617330442', NULL, '661-367-4575', '', NULL, NULL, NULL, '21180 LONE STAR WAY', 'SANTA CLARITA', 'CA', '91390', 'No Answer', '', '', '', '', '', NULL, NULL, 0, '', '', '', 'New', '', NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', NULL, NULL, NULL, NULL),
('8a7f496b-c773-b1f7-4e80-5d9182e8a801', '2019-09-30 04:20:49', '2019-09-30 04:20:49', '1', '1', 'No Answer', 0, '1', NULL, 'MIKE & REGINA', 'ADAMS', NULL, NULL, NULL, 0, '6/18/2019, 2/13/2020', '5592230674', NULL, 'No Answer', '', NULL, NULL, NULL, '3324 EAST GETTYSBURG AVE', 'Clovis', 'CA', '93619', 'No Answer', '', '', '', '', '', NULL, NULL, 0, '', '', '', 'New', '', NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', NULL, NULL, NULL, NULL),
('8ce1c37a-4529-0dea-1fe9-5d9182b4a28c', '2019-09-30 04:20:49', '2019-09-30 04:20:49', '1', '1', 'RESO CANCELLED MARCELO PASSED AWAY  =(  2/14/18 LD', 0, '1', NULL, 'MARCELO & ERICA', 'ACENTARES', NULL, NULL, NULL, 0, '3/29/18', '9095340178', NULL, 'No Answer', '', NULL, NULL, NULL, '1970 FURLOW DR', 'Redlands', 'CA', '92374', 'No Answer', '', '', '', '', '', NULL, NULL, 0, '', '', '', 'New', '', NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', NULL, NULL, NULL, NULL),
('8d7f5d27-0baa-b6f4-a7d7-5d918238f5a2', '2019-09-30 04:20:49', '2019-09-30 04:20:49', '1', '1', 'W/AGUILNALDO AND MABALO', 0, '1', NULL, 'MARK & BERNADETTE', 'ACO', NULL, NULL, NULL, 0, 'No Answer', '8186452386', NULL, 'No Answer', '', NULL, NULL, NULL, '10830 PASO ROBLES AVE', 'GRANADA HILLS', 'CA', '91344', 'No Answer', '', '', '', '', '', NULL, NULL, 0, '', '', '', 'New', '', NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', NULL, NULL, NULL, NULL),
('8e42968b-12b8-0e5a-6e91-5d9182afff9f', '2019-09-30 04:20:49', '2019-09-30 04:20:49', '1', '1', 'acosta group', 0, '1', NULL, 'MARIA', 'ACOSTA', NULL, NULL, NULL, 0, 'No Answer', '9094400047', NULL, 'No Answer', '', NULL, NULL, NULL, '605 WEST ST', 'UPLAND', 'CA', '91786', 'No Answer', '', '', '', '', '', NULL, NULL, 0, '', '', '', 'New', '', NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', NULL, NULL, NULL, NULL),
('8e4640ae-6d60-b634-043c-5d91825662cf', '2019-09-30 04:20:49', '2019-09-30 04:20:49', '1', '1', 'SHE SAID SHE MAILED IT ON 5/7/18 - SENT EM - EXTENDED TO 5/12/18 WILL CANCEL IF NO DEP BY THAT DATE 5/7/18 LD', 0, '1', NULL, 'YADIRA/ALEX', 'ABEA', NULL, NULL, NULL, 0, '9/14/2018, 9/27/2019', '3234373695', NULL, 'No Answer', '', NULL, NULL, NULL, '1783 ALBION ST', 'Los Angeles', 'CA', '90031', 'No Answer', '', '', '', '', '', NULL, NULL, 0, '', '', '', 'New', '', NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', NULL, NULL, NULL, NULL),
('8e67f103-f799-eca2-c6da-5d91826fae99', '2019-09-30 04:20:49', '2019-09-30 04:20:49', '1', '1', 'No Answer', 0, '1', NULL, 'GUY & VALERIE', 'ADAMS', NULL, NULL, NULL, 0, '4/27/2018, 5/10/2018, 10/25/2018', '6614018433', NULL, 'No Answer', '', NULL, NULL, NULL, '11004 SILVERCLIFF COURT', 'Bakersfield', 'CA', '93312', 'No Answer', '', '', '', '', '', NULL, NULL, 0, '', '', '', 'New', '', NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', NULL, NULL, NULL, NULL),
('8f9c1f96-5541-9a63-e455-5d918224365e', '2019-09-30 04:20:49', '2019-09-30 04:20:49', '1', '1', 'W/HADLEY', 0, '1', NULL, 'JAMES & MARCENE', 'ADAMSON', NULL, NULL, NULL, 0, '4/6/2015, 4/2/2016', '9492950391', NULL, '949-495-5126', '', NULL, NULL, NULL, '2972 VISTA PLAZA DR', 'LAGUNA NIGUEL', 'CA', '92677', 'No Answer', '', '', '', '', '', NULL, NULL, 0, '', '', '', 'New', '', NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', NULL, NULL, NULL, NULL),
('9849df99-0b12-2108-3e76-5d91821ad452', '2019-09-30 04:20:49', '2019-09-30 04:20:49', '1', '1', 'ACOSTA GROUP', 0, '1', NULL, 'SALOMON & CHRISTINA', 'ACOSTA', NULL, NULL, NULL, 0, 'No Answer', '7143051946', NULL, 'No Answer', '', NULL, NULL, NULL, '605 WEST ST', 'UPLAND', 'CA', '91786', 'No Answer', '', '', '', '', '', NULL, NULL, 0, '', '', '', 'New', '', NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', NULL, NULL, NULL, NULL),
('98c71d85-a17d-541b-2650-5d918286f0dd', '2019-09-30 04:20:49', '2019-09-30 04:20:49', '1', '1', 'No Answer', 0, '1', NULL, 'TAYLOR', 'ADAMS', NULL, NULL, NULL, 0, '4/23/2019, 4/25/2019', '7603823801', NULL, 'No Answer', '', NULL, NULL, NULL, '706 WEST BATAAN ST', 'Ridgecrest', 'CA', '93555', 'No Answer', '', '', '', '', '', NULL, NULL, 0, '', '', '', 'New', '', NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', NULL, NULL, NULL, NULL),
('9e2de47b-64ad-4eed-4db3-5d91828e0147', '2019-09-30 04:20:49', '2019-09-30 04:20:49', '1', '1', 'CHAVEZ GROUP', 0, '1', NULL, 'KEVIN & CAREY', 'ADAMS', NULL, NULL, NULL, 0, 'No Answer', '9519038732', NULL, '951-352-0561', '', NULL, NULL, NULL, '12144 CLAVEL CT', 'RIVERSIDE', 'CA', '92503', 'No Answer', '', '', '', '', '', NULL, NULL, 0, '', '', '', 'New', '', NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', NULL, NULL, NULL, NULL),
('a0aab608-babc-b301-a005-5d9182c90a90', '2019-09-30 04:20:49', '2019-09-30 04:20:49', '1', '1', 'kids are 3-4', 0, '1', NULL, 'BRYCE & JENNIFER', 'ADAMS', NULL, NULL, NULL, 0, 'No Answer', '6618608803', NULL, '661-722-9451', '', NULL, NULL, NULL, '4529 QUARTZ HILL ROAD', 'LANCASTER', 'CA', '93536', 'No Answer', '', '', '', '', '', NULL, NULL, 0, '', '', '', 'New', '', NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', NULL, NULL, NULL, NULL),
('a220755f-60eb-4140-ee0b-5d9182ea28f5', '2019-09-30 04:20:49', '2019-09-30 04:20:49', '1', '1', 'CHILD 9, MAY HAVE A 3RD ADULT WITH THEM. WILL CALL TO LET US KNOW - KT', 0, '1', NULL, 'JASON & MONICA', 'ABARCA', NULL, NULL, NULL, 0, '8/10/2014, 8/12/2017', '8185198691', NULL, 'No Answer', '', NULL, NULL, NULL, '5460 WHITE OAK AVE', 'ENCINO', 'CA', '91316', 'No Answer', '', '', '', '', '', NULL, NULL, 0, '', '', '', 'New', '', NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', NULL, NULL, NULL, NULL),
('a227702b-b672-033a-ac74-5d9182758b91', '2019-09-30 04:20:49', '2019-09-30 04:20:49', '1', '1', 'No Answer', 0, '1', NULL, 'MAGGIE', 'ABBOTT', NULL, NULL, NULL, 0, '11/20/2018, 5/16/2019', '8054042611', NULL, 'No Answer', '', NULL, NULL, NULL, '3002 SLEEPY HOLLOW ST', 'Simi Valley', 'CA', '93065', 'No Answer', '', '', '', '', '', NULL, NULL, 0, '', '', '', 'New', '', NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', NULL, NULL, NULL, NULL),
('ae8e04c8-6025-5d9f-defc-5d91829daa4a', '2019-09-30 04:20:49', '2019-09-30 04:20:49', '1', '1', 'No Answer', 0, '1', NULL, 'REED & LORI', 'ADAMS', NULL, NULL, NULL, 0, '4/2/19', '8052184172', NULL, 'No Answer', '', NULL, NULL, NULL, '7401 WALLABY CT', 'Ventura', 'CA', '93003', 'No Answer', '', '', '', '', '', NULL, NULL, 0, '', '', '', 'New', '', NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', NULL, NULL, NULL, NULL),
('b22b482c-084a-6ff6-ff21-5d918265ec02', '2019-09-30 04:20:49', '2019-09-30 04:20:49', '1', '1', 'GUARA BY GREG ABRAMYAN  LOUD   UP LATE -- UP EARLY 5:30AM    INCONSIDERATE  HAD COMPLAINTS FROM 3 OTHER GUESTS  DO NOT BOOK THIS GROUP AGAIN!!  CC', 0, '1', NULL, 'MIKAYEL', 'ABRAMYAN', NULL, NULL, NULL, 0, 'No Answer', 'No Answer', NULL, '818-908-0690', '', NULL, NULL, NULL, '7009 COLBATH AVENUE', 'VAN NUYS', 'CA', '91405', 'No Answer', '', '', '', '', '', NULL, NULL, 0, '', '', '', 'New', '', NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', NULL, NULL, NULL, NULL),
('b27716fc-21cb-420c-b376-5d918216add8', '2019-09-30 04:20:49', '2019-09-30 04:20:49', '1', '1', 'No Answer', 0, '1', NULL, 'ANDREW', 'ADAMS', NULL, NULL, NULL, 0, '9/15/18', '3105955976', NULL, 'No Answer', '', NULL, NULL, NULL, '10006 SUNDERLAND ST', 'Santa Ana', 'CA', '92705', 'No Answer', '', '', '', '', '', NULL, NULL, 0, '', '', '', 'New', '', NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', NULL, NULL, NULL, NULL),
('b486f3ee-e425-b2a1-3ee7-5d9182fc1150', '2019-09-30 04:20:49', '2019-09-30 04:20:49', '1', '1', 'WITH SANPEDRO', 0, '1', NULL, 'HUGO & JESSICA', 'ACEVEDO', NULL, NULL, NULL, 0, '7/2/15', '6617559075', NULL, 'No Answer', '', NULL, NULL, NULL, '22013 RUTHERFORD PLACE', 'Santa Clarita', 'CA', '91350', 'No Answer', '', '', '', '', '', NULL, NULL, 0, '', '', '', 'New', '', NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', NULL, NULL, NULL, NULL),
('b505e036-81d0-8637-ab58-5d91823f4dcd', '2019-09-30 04:20:49', '2019-09-30 04:20:49', '1', '1', 'has sites 54-55-56-57', 0, '1', NULL, 'TIMOTHY', 'ABERIN', NULL, NULL, NULL, 0, 'No Answer', '3103478351', NULL, 'No Answer', '', NULL, NULL, NULL, '3808 W 187TH ST', 'TORRANCE', 'CA', '90504', 'No Answer', '', '', '', '', '', NULL, NULL, 0, '', '', '', 'New', '', NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', NULL, NULL, NULL, NULL),
('b54eac38-b8d3-2ff5-f492-5d91825181f3', '2019-09-30 04:20:49', '2019-09-30 04:20:49', '1', '1', 'No Answer', 0, '1', NULL, 'ANGEL', 'ACOSTA', NULL, NULL, NULL, 0, '8/30/18', '3106846757', NULL, 'No Answer', '', NULL, NULL, NULL, '1729 WEST 260TH ST', 'Lomita', 'CA', '90717', 'No Answer', '', '', '', '', '', NULL, NULL, 0, '', '', '', 'New', '', NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', NULL, NULL, NULL, NULL),
('b68a1665-cbfa-4dd9-c466-5d9182f3a4e0', '2019-09-30 04:20:49', '2019-09-30 04:20:49', '1', '1', 'WALK IN', 0, '1', NULL, 'RICHARD', 'ABREU', NULL, NULL, NULL, 0, '4/18/17', '4073610691', NULL, 'No Answer', '', NULL, NULL, NULL, '6912 SAN BERNARDO CIR', 'Buena Park', 'CA', '90620', 'No Answer', '', '', '', '', '', NULL, NULL, 0, '', '', '', 'New', '', NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', NULL, NULL, NULL, NULL),
('bb5febee-ed47-da34-3833-5d918220a046', '2019-09-30 04:20:49', '2019-09-30 04:20:49', '1', '1', 'No Answer', 0, '1', NULL, 'SHIMON', 'ABRAMCZIK', NULL, NULL, NULL, 0, '5/24/2016, 5/24/2016, 5/24/2016, 5/24/2016, 5/24/2016, 5/24/2016, 5/16/2017, 5/16/2017, 5/16/2017, 5', '3108953415', NULL, 'No Answer', '', NULL, NULL, NULL, '1104 S WETHERLY DR', 'Los Angeles', 'CA', '90035', 'No Answer', '', '', '', '', '', NULL, NULL, 0, '', '', '', 'New', '', NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', NULL, NULL, NULL, NULL),
('c0fb213a-784c-eb8b-2681-5d9182641545', '2019-09-30 04:20:49', '2019-09-30 04:20:49', '1', '1', 'No Answer', 0, '1', NULL, 'NASER', 'ABEIN', NULL, NULL, NULL, 0, '4/6/14', '3233339004', NULL, 'No Answer', '', NULL, NULL, NULL, '2261 CALHAN DR', 'CULVER CITY', 'CA', '90230', 'No Answer', '', '', '', '', '', NULL, NULL, 0, '', '', '', 'New', '', NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', NULL, NULL, NULL, NULL),
('c4ec85d6-c8b7-fde7-3cb8-5d9182d26958', '2019-09-30 04:20:49', '2019-09-30 04:20:49', '1', '1', 'No Answer', 0, '1', NULL, 'NORMAN', 'ACOSTA', NULL, NULL, NULL, 0, 'No Answer', '6704866851', NULL, 'No Answer', '', NULL, NULL, NULL, '1717 N DEL NORTE AVE', 'ONTARIO', 'CA', '91764', 'No Answer', '', '', '', '', '', NULL, NULL, 0, '', '', '', 'New', '', NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', NULL, NULL, NULL, NULL),
('c630975a-9e75-bd04-252e-5d91824942ef', '2019-09-30 04:20:49', '2019-09-30 04:20:49', '1', '1', 'No Answer', 0, '1', NULL, 'PAUL', 'ADAMS', NULL, NULL, NULL, 0, 'No Answer', 'No Answer', NULL, '(530) 906-0081', '', NULL, NULL, NULL, 'P.O BOX 2174', 'Truckee', 'CA', '96160', 'No Answer', '', '', '', '', '', NULL, NULL, 0, '', '', '', 'New', '', NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', NULL, NULL, NULL, NULL),
('cf6b0e2d-d1c6-c89d-11c6-5d9182a86a44', '2019-09-30 04:20:49', '2019-09-30 04:20:49', '1', '1', 'No Answer', 0, '1', NULL, 'DON &  HEATHER', 'ADANI', NULL, NULL, NULL, 0, '6/18/16', '8186481769', NULL, 'No Answer', '', NULL, NULL, NULL, '12421 PACIFIC AVE APT 8', 'Los Angeles', 'CA', '90066', 'No Answer', '', '', '', '', '', NULL, NULL, 0, '', '', '', 'New', '', NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', NULL, NULL, NULL, NULL),
('d143246c-2956-132a-bb86-5d91828c6e34', '2019-09-30 04:20:49', '2019-09-30 04:20:49', '1', '1', 'No Answer', 0, '1', NULL, 'JASON & SHANNON', 'ADAMS', NULL, NULL, NULL, 0, '7/30/2018, 7/29/2019', '7147570134', NULL, 'No Answer', '', NULL, NULL, NULL, '7825 PORTOFINO AVE', 'Anaheim', 'CA', '92808', 'No Answer', '', '', '', '', '', NULL, NULL, 0, '', '', '', 'New', '', NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', NULL, NULL, NULL, NULL),
('d2bb2c81-225a-c156-2756-5d91820d3de2', '2019-09-30 04:20:49', '2019-09-30 04:20:49', '1', '1', 'CAROLYN COLE GROUP', 0, '1', NULL, 'ALEX & TERRY', 'ABBENE', NULL, NULL, NULL, 0, 'No Answer', '8188859426', NULL, '818-885-9424', '', NULL, NULL, NULL, '20410 KINZIE ST', 'CHATSWORTH', 'CA', '91311', 'No Answer', '', '', '', '', '', NULL, NULL, 0, '', '', '', 'New', '', NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', NULL, NULL, NULL, NULL),
('d50e2162-3340-90df-dc57-5d91822d7dca', '2019-09-30 04:20:49', '2019-09-30 04:20:49', '1', '1', 'No Answer', 0, '1', NULL, 'TYLER', 'ADAMS', NULL, NULL, NULL, 0, '8/21/15', '9094381777', NULL, 'No Answer', '', NULL, NULL, NULL, '13236 DON JULIEN AVE', 'CHINO', 'CA', '91710', 'No Answer', '', '', '', '', '', NULL, NULL, 0, '', '', '', 'New', '', NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', NULL, NULL, NULL, NULL),
('d611ea5e-f908-c976-eae9-5d9182591eea', '2019-09-30 04:20:49', '2019-09-30 04:20:49', '1', '1', 'APPLY CHANGE FEE OF $10 TO STAY ON 9/1/16  --2/2216 LD \\\\ ONE CHILD IS 5 YRS OLD 9/2/16 KIM', 0, '1', NULL, 'FARSHAD', 'ABDOH', NULL, NULL, NULL, 0, '2/5/2016, 9/1/2016, 8/30/2017, 8/30/2018', '3109018564', NULL, 'No Answer', '', NULL, NULL, NULL, '22639 WATERBURY ST', 'WOODLAND HILLS', 'CA', '91364', 'No Answer', '', '', '', '', '', NULL, NULL, 0, '', '', '', 'New', '', NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', NULL, NULL, NULL, NULL),
('d75ac59c-16f8-4ceb-7399-5d9182a80c58', '2019-09-30 04:20:49', '2019-09-30 04:20:49', '1', '1', 'No Answer', 0, '1', NULL, 'LARRY', 'ADAMS', NULL, NULL, NULL, 0, '6/12/2019, 6/12/2019, 11/7/2019', '6618600130', NULL, 'No Answer', '', NULL, NULL, NULL, '5564 RUBY ST', 'Fort Mohave', 'AZ', '86426', 'No Answer', '', '', '', '', '', NULL, NULL, 0, '', '', '', 'New', '', NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', NULL, NULL, NULL, NULL),
('d9867a69-eb01-ba05-598a-5d9182089bc4', '2019-09-30 04:20:49', '2019-09-30 04:20:49', '1', '1', 'No Answer', 0, '1', NULL, 'JESSICA', 'ACEVEDO', NULL, NULL, NULL, 0, '5/26/14', '7149318696', NULL, 'No Answer', '', NULL, NULL, NULL, '6692 HGHLAND AVE', 'BUENA PARK', 'CA', '90621', 'No Answer', '', '', '', '', '', NULL, NULL, 0, '', '', '', 'New', '', NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', NULL, NULL, NULL, NULL),
('dfacb266-6b8a-c18f-12d9-5d9182ac2124', '2019-09-30 04:20:49', '2019-09-30 04:20:49', '1', '1', 'WITH AYALA', 0, '1', NULL, 'DANIEL & MARY', 'ACOSTA', NULL, NULL, NULL, 0, '6/30/14', '9096413387', NULL, '909-823-7271', '', NULL, NULL, NULL, '8640 WILLIAMS RD', 'FONTANA', 'CA', '92335', 'No Answer', '', '', '', '', '', NULL, NULL, 0, '', '', '', 'New', '', NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', NULL, NULL, NULL, NULL),
('e3c93fcc-ad15-a1f0-9108-5d918257eea6', '2019-09-30 04:20:49', '2019-09-30 04:20:49', '1', '1', 'JINGER GONZALEZ GROUP AGES 5 & 8', 0, '1', NULL, 'CLARE', 'ADAMS', NULL, NULL, NULL, 0, '7/13/18', '7144028184', NULL, 'No Answer', '', NULL, NULL, NULL, '5663 NELSON ST', 'CYPRESS', 'CA', '90630', 'No Answer', '', '', '', '', '', NULL, NULL, 0, '', '', '', 'New', '', NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', NULL, NULL, NULL, NULL),
('e6285ceb-14f6-1d86-b17d-5d918231036d', '2019-09-30 04:20:49', '2019-09-30 04:20:49', '1', '1', 'No Answer', 0, '1', NULL, 'ANGELA', 'ADAMS', NULL, NULL, NULL, 0, '8/25/2017, 9/15/2017', '7608128185', NULL, 'No Answer', '', NULL, NULL, NULL, 'P.O BOX 2039', 'Wrightwood', 'CA', '92397', 'No Answer', '', '', '', '', '', NULL, NULL, 0, '', '', '', 'New', '', NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', NULL, NULL, NULL, NULL),
('e7d7bbdc-70b1-87c2-dd46-5d9182822939', '2019-09-30 04:20:49', '2019-09-30 04:20:49', '1', '1', 'W/TAKASHIMA', 0, '1', NULL, 'MARICE & MANNY', 'ACUNA', NULL, NULL, NULL, 0, 'No Answer', 'No Answer', NULL, '323-702-9224 CELL', '', NULL, NULL, NULL, '1500 HICKORY AVE #225', 'TORRANCE', 'CA', '90503', 'No Answer', '', '', '', '', '', NULL, NULL, 0, '', '', '', 'New', '', NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', NULL, NULL, NULL, NULL),
('f26dac1b-58cf-da81-fed7-5d9182e85741', '2019-09-30 04:20:49', '2019-09-30 04:20:49', '1', '1', 'No Answer', 0, '1', NULL, 'ELLEN', 'ABMA', NULL, NULL, NULL, 0, '11/27/19', '8055388052', NULL, 'No Answer', '', NULL, NULL, NULL, 'PO BOX 1868', 'Atascadero', 'CA', '93422', 'No Answer', '', '', '', '', '', NULL, NULL, 0, '', '', '', 'New', '', NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', NULL, NULL, NULL, NULL),
('f2cfcfe5-41a5-8f01-60a8-5d918259944f', '2019-09-30 04:20:49', '2019-09-30 04:20:49', '1', '1', 'No Answer', 0, '1', NULL, 'ANTONIO', 'ABREGO', NULL, NULL, NULL, 0, '10/6/17', '3129534970', NULL, 'No Answer', '', NULL, NULL, NULL, '325 WEST GOETHE ST', 'Chicago', 'IL', '60610', 'No Answer', '', '', '', '', '', NULL, NULL, 0, '', '', '', 'New', '', NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `leads`
--

CREATE TABLE `leads` (
  `id` int(36) NOT NULL,
  `date_entered` datetime DEFAULT NULL,
  `date_modified` datetime DEFAULT NULL,
  `modified_user_id` char(36) DEFAULT NULL,
  `created_by` char(36) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `deleted` tinyint(1) DEFAULT 0,
  `assigned_user_id` char(36) DEFAULT NULL,
  `salutation` varchar(255) DEFAULT NULL,
  `first_name` varchar(100) DEFAULT NULL,
  `last_name` varchar(100) DEFAULT NULL,
  `title` varchar(100) DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `department` varchar(100) DEFAULT NULL,
  `do_not_call` tinyint(1) DEFAULT 0,
  `phone_home` varchar(100) DEFAULT NULL,
  `phone_mobile` varchar(100) DEFAULT NULL,
  `phone_work` varchar(100) DEFAULT NULL,
  `phone_other` varchar(100) DEFAULT NULL,
  `phone_fax` varchar(100) DEFAULT NULL,
  `lawful_basis` text DEFAULT NULL,
  `date_reviewed` date DEFAULT NULL,
  `lawful_basis_source` varchar(100) DEFAULT NULL,
  `primary_address_street` varchar(150) DEFAULT NULL,
  `primary_address_city` varchar(100) DEFAULT NULL,
  `primary_address_state` varchar(100) DEFAULT NULL,
  `primary_address_postalcode` varchar(20) DEFAULT NULL,
  `primary_address_country` varchar(255) DEFAULT NULL,
  `alt_address_street` varchar(150) DEFAULT NULL,
  `alt_address_city` varchar(100) DEFAULT NULL,
  `alt_address_state` varchar(100) DEFAULT NULL,
  `alt_address_postalcode` varchar(20) DEFAULT NULL,
  `alt_address_country` varchar(255) DEFAULT NULL,
  `assistant` varchar(75) DEFAULT NULL,
  `assistant_phone` varchar(100) DEFAULT NULL,
  `converted` tinyint(1) DEFAULT 0,
  `refered_by` varchar(100) DEFAULT NULL,
  `lead_source` varchar(100) DEFAULT NULL,
  `lead_source_description` text DEFAULT NULL,
  `status` varchar(100) DEFAULT NULL,
  `status_description` text DEFAULT NULL,
  `reports_to_id` char(36) DEFAULT NULL,
  `account_name` varchar(255) DEFAULT NULL,
  `account_description` text DEFAULT NULL,
  `contact_id` char(36) DEFAULT NULL,
  `account_id` char(36) DEFAULT NULL,
  `opportunity_id` char(36) DEFAULT NULL,
  `opportunity_name` varchar(255) DEFAULT NULL,
  `opportunity_amount` varchar(50) DEFAULT NULL,
  `campaign_id` char(36) DEFAULT NULL,
  `birthdate` date DEFAULT NULL,
  `portal_name` varchar(255) DEFAULT NULL,
  `portal_app` varchar(255) DEFAULT NULL,
  `website` varchar(255) DEFAULT NULL,
  `client` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `people`
--

CREATE TABLE `people` (
  `id` int(9) NOT NULL,
  `name` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `email` varchar(250) NOT NULL,
  `location` varchar(250) NOT NULL,
  `date_reg` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `people`
--

INSERT INTO `people` (`id`, `name`, `phone`, `email`, `location`, `date_reg`) VALUES
(12, 'Krish', '+614012766366', 'irontin2015@gmail.com', 'sydney', '2019-10-28 22:11:09'),
(13, 'Abdul', '1233456', 'mehanalex4@gmail.com', 'US', '2019-10-28 22:12:11'),
(14, '13', '1233456', 'Abdul', 'mehanalex4@gmail.com', '2019-10-29 12:54:52'),
(4, 'Admin', '9654354446', 'inc.academy.share@gmail.com', 'New Delhi, India', '2019-10-23 09:45:24'),
(15, '4', '9654354446', 'Admin', 'inc.academy.share@gmail.com', '2019-10-29 12:54:52');

-- --------------------------------------------------------

--
-- Table structure for table `userlog`
--

CREATE TABLE `userlog` (
  `id` int(250) NOT NULL,
  `userId` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `userIp` varbinary(16) NOT NULL,
  `action` varchar(250) NOT NULL,
  `loginTime` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `camp`
--
ALTER TABLE `camp`
  ADD PRIMARY KEY (`id`),
  ADD KEY `client` (`client`);

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_SALES_REP` (`Sales_Rep`),
  ADD KEY `FK_STATUS` (`Status`);

--
-- Indexes for table `crm_user`
--
ALTER TABLE `crm_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lead`
--
ALTER TABLE `lead`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx_lead_acct_name_first` (`account_name`,`deleted`),
  ADD KEY `idx_lead_last_first` (`last_name`,`first_name`,`deleted`),
  ADD KEY `idx_lead_del_stat` (`last_name`,`status`,`deleted`,`first_name`),
  ADD KEY `idx_lead_opp_del` (`opportunity_id`,`deleted`),
  ADD KEY `idx_leads_acct_del` (`account_id`,`deleted`),
  ADD KEY `idx_del_user` (`deleted`,`assigned_user_id`),
  ADD KEY `idx_lead_assigned` (`assigned_user_id`),
  ADD KEY `idx_lead_contact` (`contact_id`),
  ADD KEY `idx_reports_to` (`reports_to_id`),
  ADD KEY `idx_lead_phone_work` (`phone_work`),
  ADD KEY `idx_leads_id_del` (`id`,`deleted`);

--
-- Indexes for table `leads`
--
ALTER TABLE `leads`
  ADD PRIMARY KEY (`id`),
  ADD KEY `client` (`client`);

--
-- Indexes for table `people`
--
ALTER TABLE `people`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userlog`
--
ALTER TABLE `userlog`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `camp`
--
ALTER TABLE `camp`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `client`
--
ALTER TABLE `client`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `crm_user`
--
ALTER TABLE `crm_user`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `leads`
--
ALTER TABLE `leads`
  MODIFY `id` int(36) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=240;

--
-- AUTO_INCREMENT for table `people`
--
ALTER TABLE `people`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `userlog`
--
ALTER TABLE `userlog`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=117;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `leads`
--
ALTER TABLE `leads`
  ADD CONSTRAINT `leads_ibfk_1` FOREIGN KEY (`client`) REFERENCES `client` (`id`),
  ADD CONSTRAINT `leads_ibfk_2` FOREIGN KEY (`client`) REFERENCES `crm_user` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
