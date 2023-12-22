-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 17, 2023 at 04:18 AM
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
-- Database: `bestpractice`
--
CREATE DATABASE IF NOT EXISTS `bestpractice` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `bestpractice`;

-- --------------------------------------------------------

--
-- Table structure for table `btauthor`
--

CREATE TABLE `btauthor` (
  `bt_authors` varchar(150) CHARACTER SET utf8 NOT NULL COMMENT 'ผู้เขียน',
  `bt_name` varchar(150) CHARACTER SET utf8 NOT NULL COMMENT 'ชื่อ – นามสกุล',
  `bt_workplace` varchar(200) CHARACTER SET utf8 NOT NULL COMMENT 'สถานที่ทำงาน',
  `bt_educational` text CHARACTER SET utf8 NOT NULL COMMENT 'ประวัติการศึกษา',
  `bt_email` varchar(100) CHARACTER SET utf8 NOT NULL COMMENT 'อีเมล',
  `bt_phone` int(10) NOT NULL COMMENT 'หมายเลขโทรศัพท์'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `btemployee`
--

CREATE TABLE `btemployee` (
  `id` int(11) NOT NULL COMMENT 'id',
  `bt_userid` varchar(150) NOT NULL COMMENT 'UserID',
  `bt_password` varchar(150) NOT NULL COMMENT 'รหัสผ่าน',
  `bt_status` varchar(150) NOT NULL COMMENT 'สถานะในระบบ',
  `bt_username` varchar(150) NOT NULL COMMENT 'ชื่อของผู้ใช้',
  `bt_email` varchar(150) NOT NULL COMMENT 'Email'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `btemployee`
--

INSERT INTO `btemployee` (`id`, `bt_userid`, `bt_password`, `bt_status`, `bt_username`, `bt_email`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin', 'e00cf25ad42683b3df678c61f42c6bda', 'admin@gmail.com'),
(2, 'save', '10c9bad47cdeb7434167e884243e411c', 'user', 'c1353075564a39c4e5d7e2a533f3c8e0', 'save@gmail.com'),
(3, 'saveadmin', '204846cff6f418e76b402a95a3bef5df', 'admin', 'c1353075564a39c4e5d7e2a533f3c8e0', 'saveadmin@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `btknowl`
--

CREATE TABLE `btknowl` (
  `bt_knowledgepass` int(10) NOT NULL COMMENT 'รหัสความรู้',
  `bt_knowledgename` varchar(150) NOT NULL COMMENT 'ชื่อความรู้'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `btknowledge`
--

CREATE TABLE `btknowledge` (
  `id` int(11) NOT NULL,
  `bt_groupid` int(11) NOT NULL COMMENT 'รหัสกลุ่ม',
  `bt_groupname` varchar(150) NOT NULL COMMENT 'ชื่อกลุ่ม',
  `bt_note` varchar(150) NOT NULL COMMENT 'หมายเหตุ'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `btknowledge`
--

INSERT INTO `btknowledge` (`id`, `bt_groupid`, `bt_groupname`, `bt_note`) VALUES
(1, 101, 'test1', '.....');

-- --------------------------------------------------------

--
-- Table structure for table `btpracticed`
--

CREATE TABLE `btpracticed` (
  `id` int(11) NOT NULL COMMENT 'เรื่องที่',
  `bt_years` varchar(4) CHARACTER SET utf8 NOT NULL COMMENT 'ปี พ.ศ.',
  `bt_titleth` varchar(250) CHARACTER SET utf8 NOT NULL COMMENT 'ชื่อเรื่องภาษาไทย',
  `bt_titleeng` varchar(250) CHARACTER SET utf8 NOT NULL COMMENT 'ชื่อเรื่องภาษาอังกฤษ',
  `bt_source` text CHARACTER SET utf8 NOT NULL COMMENT 'ที่มาและความสำคัญ',
  `bt_objective` text CHARACTER SET utf8 NOT NULL COMMENT 'วัตถุประสงค์',
  `bt_targetgroup` text CHARACTER SET utf8 NOT NULL COMMENT 'กลุ่มเป้าหมาย',
  `bt_process` text CHARACTER SET utf8 NOT NULL COMMENT 'กระบวนการจัดการความรู้',
  `bt_result` text CHARACTER SET utf8 NOT NULL COMMENT 'ผลลัพธ์หรือองค์ความรู้',
  `bt_factor` text CHARACTER SET utf8 NOT NULL COMMENT 'ปัจจัยสู่ความสำเร็จ',
  `bt_tool` text CHARACTER SET utf8 NOT NULL COMMENT 'เครื่องมือ',
  `bt_refer` text CHARACTER SET utf8 NOT NULL COMMENT 'อ้างอิง',
  `bt_author` text CHARACTER SET utf8 NOT NULL COMMENT 'ผู้เขียน',
  `bt_practicegroup` text CHARACTER SET utf8 NOT NULL COMMENT 'กลุ่มแนวปฏิบัติที่ดี',
  `bt_responsible` text CHARACTER SET utf8 NOT NULL COMMENT 'ผู้รับผิดชอบ',
  `bt_filedetail` varchar(250) CHARACTER SET utf8 NOT NULL COMMENT 'ไฟล์รายละเอียด',
  `bt_contact` varchar(250) CHARACTER SET utf8 NOT NULL COMMENT 'ติดต่อ'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `btpracticed`
--

INSERT INTO `btpracticed` (`id`, `bt_years`, `bt_titleth`, `bt_titleeng`, `bt_source`, `bt_objective`, `bt_targetgroup`, `bt_process`, `bt_result`, `bt_factor`, `bt_tool`, `bt_refer`, `bt_author`, `bt_practicegroup`, `bt_responsible`, `bt_filedetail`, `bt_contact`) VALUES
(2, '2545', 'ดีจ้า', 'dja', '<p>dsadasd</p>\r\n', '<p>sadasdsad</p>\r\n', '<p>asdsadsa</p>\r\n', '<p>dasdsadsa</p>\r\n', '<p>dsadsad</p>\r\n', '<p>asdsadasd</p>\r\n', '<p>asdsadsads</p>\r\n', '<p>adsadsadsa</p>\r\n', 'dasdasds', '<p>adsadsad</p>\r\n', '<p>sadsadsa</p>\r\n', '', '<p>dsadsadsa</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `btpracticem`
--

CREATE TABLE `btpracticem` (
  `bt_years` int(4) NOT NULL COMMENT 'ปี พ.ศ.',
  `bt_filecalendar` varchar(90) NOT NULL COMMENT 'ไฟล์ปฏิทินการดำเนินงาน',
  `bt_cabtacts` varchar(90) NOT NULL COMMENT 'รายชื่อคณะกรรมการ',
  `bt_fileknowledge` varchar(90) NOT NULL COMMENT 'ไฟล์แผนจัดการความรู้',
  `bt_bookpractice` varchar(90) NOT NULL COMMENT 'เล่มแนวปฏิบัติที่ดี',
  `bt_knowledge` int(10) NOT NULL COMMENT 'การจัดการความรู้ครั้งที่'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `btutilization`
--

CREATE TABLE `btutilization` (
  `id` int(11) NOT NULL COMMENT 'เรื่องที่',
  `bt_utilizationorder` varchar(20) CHARACTER SET utf8 NOT NULL COMMENT 'ลำดับการใช้ประโยชน์',
  `bt_years` varchar(4) CHARACTER SET utf8 NOT NULL COMMENT 'ปี พ.ศ.',
  `bt_utilizaname` varchar(250) CHARACTER SET utf8 NOT NULL COMMENT 'ชื่อหน่วยงานการใช้ประโยชน์',
  `bt_academic` text CHARACTER SET utf8 NOT NULL COMMENT 'เชิงวิชาการ',
  `bt_public` text CHARACTER SET utf8 NOT NULL COMMENT 'เชิงสาธารณะ',
  `bt_policy` text CHARACTER SET utf8 NOT NULL COMMENT 'เชิงนโยบาย',
  `bt_commercial` text CHARACTER SET utf8 NOT NULL COMMENT 'เชิงพาณิชย์',
  `bt_filesdetail` varchar(90) CHARACTER SET utf8 NOT NULL COMMENT 'ไฟล์รายละเอียดใช้ประโยชน์',
  `bt_fileutilization` varchar(90) CHARACTER SET utf8 NOT NULL COMMENT 'ไฟล์การใช้ประโยชน์'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `btutilization`
--

INSERT INTO `btutilization` (`id`, `bt_utilizationorder`, `bt_years`, `bt_utilizaname`, `bt_academic`, `bt_public`, `bt_policy`, `bt_commercial`, `bt_filesdetail`, `bt_fileutilization`) VALUES
(3, 'A01', '2563', 'บัญชี', '<p>ปัจจุบันการพัฒนาองค์กร บุคลากร หรือการวางแผนดำเนินการเรื่องต่าง ๆ ต้องอาศัยข้อมูลประกอบการตัดสินใจ ดังนั้นข้อมูลจากหน่วยงานต่าง ๆ ของทุกภาคส่วน และการควบคุมคุณภาพของข้อมูลจึงเป็นปัจจัยสำคัญที่ทำให้การตัดสินใจวางแผนดำเนินงานในแต่ละเรื่องเป็นไปอย่างมีประสิทธิภาพซึ่งการนำข้อมูลไปใช้ส่งผลที่สำคัญ ดังนี้</p>\r\n\r\n<p>1. เกิดการวิเคราะห์และการพัฒนาในด้านต่าง ๆ ที่สำคัญ เช่น การแก้ปัญหาทุจริต การป้องกันการเกิดอาชญากรรมซ้ำ การปรับปรุงประสิทธิภาพทางธุรกิจ เพิ่มความสามารถในการแข่งขันและลดต้นทุนการผลิต</p>\r\n\r\n<p>2. เกิดประโยชน์กับข้อมูลอย่างมีนัยสำคัญ เช่น ทำให้การวิเคราะห์ข้อมูลมีประสิทธิภาพที่แม่นยำมากขึ้นโดยการนำเอาเทคโนโลยีใหม่ ๆ เข้ามาประมวลผลข้อมูลเพื่อส่งเสริมภารกิจหรือความต้องการใช้ข้อมูลที่แตกต่างกัน</p>\r\n', '<p><strong>1. ประโยชน์ต่อภาครัฐ</strong></p>\r\n\r\n<p>&nbsp; 1.1 ส่งเสริมให้เกิดธรรมาภิบาลในการดำเนินงาน</p>\r\n\r\n<p>&nbsp; 1.2 สร้างความโปร่งใส โดยประชาชนหรือภาคส่วนต่าง ๆ สามารถเข้าถึงข้อมูลและตรวจสอบการดำเนินงาน เพื่อแก้ปัญหาทุจริตคอร์รัปชัน</p>\r\n\r\n<p>&nbsp; 1.3 วางแผนเชิงนโยบายโดยใช้ประโยชน์จากข้อมูลเปิดได้อย่างมีคุณภาพ</p>\r\n\r\n<p>&nbsp; 1.4 ผลักดันให้เกิดการบูรณาการการใช้ประโยชน์จากข้อมูลร่วมกัน ส่งเสริมการสร้าง นวัตกรรมด้านข้อมูล</p>\r\n\r\n<p>&nbsp; 1.5 ปรับปรุงการให้บริการสาธารณะอย่างมีประสิทธิภาพ</p>\r\n', '<p><strong>2. ประโยชน์ต่อภาคเอกชน</strong></p>\r\n\r\n<p>&nbsp; 2.1 นำข้อมูลเปิดไปต่อยอดการสร้างมูลค่าเพิ่มทางธุรกิจ</p>\r\n\r\n<p>&nbsp; 2.2 ส่งเสริมการขับเคลื่อนนวัตกรรมจากข้อมูลสำหรับภาคเอกชนมากขึ้น</p>\r\n\r\n<p>&nbsp; 2.3 เพิ่มศักยภาพในการแข่งขันของประเทศ ปรับปรุงประสิทธิภาพทางธุรกิจและการลดต้นทุนการผลิตในภาพรวม</p>\r\n', '<p><strong>3. ประโยชน์ต่อภาคประชาชน</strong></p>\r\n\r\n<p>&nbsp; 3.1 เสริมสร้างการมีส่วนร่วมของภาคประชาชน</p>\r\n\r\n<p>&nbsp; 3.2 ส่งผลให้ประชาชนได้รับบริการดิจิทัลภาครัฐที่ดีขึ้น</p>\r\n\r\n<p>&nbsp; 3.3 เข้าถึงและใช้ประโยชน์จากข้อมูลเปิดภาครัฐแบบดิจิทัล</p>\r\n\r\n<p>&nbsp; 3.4 นำข้อมูลไปพัฒนาหรือต่อยอดนวัตกรรมต่าง ๆ</p>\r\n', '', ''),
(4, 'A02', '2564', 'Government e-Service ยกระดับขีดความสามารถภาครัฐ', '<p><strong>การให้บริการภาครัฐผ่านระบบอิเล็กทรอนิกส์ (Government e-Service)</strong>&nbsp;คือ การจัดการบริการภาครัฐผ่านช่องทางออนไลน์ เพื่อตอบสนองความต้องการและพฤติกรรมของประชาชนและภาคส่วนที่เกี่ยวข้องได้อย่างก้าวทันสถานการณ์</p>\r\n', '<p><strong>รัฐบาลหลาย ๆ ประเทศทั่วโลก รวมถึงประเทศไทย มุ่งใช้ e-Service&nbsp;</strong>เพื่อบรรลุเป้าหมายการให้บริการสาธารณะที่สะดวกและรวดเร็ว ก่อให้เกิดการมีส่วนร่วมของภาคประชาสังคม ปรับปรุงคุณภาพบริการให้ดีขึ้น ทำให้มีการใช้ทรัพยากรอย่างประหยัด เกิดความคล่องตัวในการบริหารงาน และสามารถนำข้อมูลต่าง ๆ ไปใช้ประกอบการตัดสินใจเชิงนโยบายได้</p>\r\n', '<p><strong>ความท้าทายในการให้บริการภาครัฐผ่าน e-Service&nbsp;</strong>ได้แก่​ (1) การปรับบทบาทภาครัฐเป็นผู้อำนวยความสะดวกทางด้านดิจิทัลแบบครบวงจร</p>\r\n\r\n<p>(2)&nbsp;การยกระดับขีดความสามารถทางดิจิทัลของบุคลากรภาครัฐ</p>\r\n\r\n<p>(3)&nbsp;แม้การลงทุนทางเทคโนโลยีดิจิทัลจะค่อนข้างสูง แต่ประชาชนจะได้รับประโยชน์ในระยะยาว</p>\r\n\r\n<p>(4)&nbsp;การสร้างการรับรู้และความเชื่อมั่นของภาคประชาชนต่อระบบ e-Service ของภาครัฐ</p>\r\n', '<p>ในยุคดิจิทัลเช่นนี้ หลายประเทศได้ให้ความสำคัญกับการให้<strong>บริการภาครัฐผ่านระบบอิเล็กทรอนิกส์ (Government e-Service)</strong>&nbsp;ซึ่งหมายถึง&nbsp;<strong>การจัดการบริการต่าง ๆ ของภาครัฐให้กับประชาชนผ่านช่องทางออนไลน์ </strong></p>\r\n\r\n<p><strong>เพื่อเป็นการเพิ่มช่องทางให้กับประชาชนในการติดต่อและขอรับบริการจากภาครัฐ&nbsp;</strong>ซึ่งช่องทางดังกล่าวสามารถตอบสนองต่อความต้องการของประชาชนได้อย่างสะดวกรวดเร็วและประหยัด เนื่องจากผู้ใช้สามารถรับบริการต่าง ๆ</p>\r\n\r\n<p>ผ่านช่องทางออนไลน์ แทนการเดินทางมาติดต่อที่หน่วยงานหรือสำนักงาน รวมถึงช่วยลดช่องว่างและความเหลื่อมล้ำในการเข้าถึงข้อมูลและบริการภาครัฐต่าง ๆ ได้ นอกจากนี้ภาครัฐก็สามารถชี้แจงและเผยแพร่ข้อมูลที่เป็นประโยชน์ต่อการเข้ารับบริการแก่ประชาชนได้อย่างทั่วถึง</p>\r\n\r\n<p>ซึ่งเมื่อใดก็ตามที่ผู้ใช้งานทำรายการผ่าน e-Service ระบบจะบันทึกรายละเอียดทั้งหมดเก็บไว้ในรูปแบบออนไลน์ที่ช่วยลดการตรวจสอบและประหยัดเวลาในการจัดทำเอกสารของเจ้าหน้าที่รัฐได้</p>\r\n', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `btauthor`
--
ALTER TABLE `btauthor`
  ADD PRIMARY KEY (`bt_authors`);

--
-- Indexes for table `btemployee`
--
ALTER TABLE `btemployee`
  ADD PRIMARY KEY (`id`,`bt_userid`);

--
-- Indexes for table `btknowl`
--
ALTER TABLE `btknowl`
  ADD PRIMARY KEY (`bt_knowledgepass`);

--
-- Indexes for table `btknowledge`
--
ALTER TABLE `btknowledge`
  ADD PRIMARY KEY (`id`,`bt_groupid`) USING BTREE;

--
-- Indexes for table `btpracticed`
--
ALTER TABLE `btpracticed`
  ADD PRIMARY KEY (`id`,`bt_years`) USING BTREE;

--
-- Indexes for table `btpracticem`
--
ALTER TABLE `btpracticem`
  ADD PRIMARY KEY (`bt_years`);

--
-- Indexes for table `btutilization`
--
ALTER TABLE `btutilization`
  ADD PRIMARY KEY (`id`,`bt_utilizationorder`,`bt_years`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `btemployee`
--
ALTER TABLE `btemployee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'id', AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `btknowledge`
--
ALTER TABLE `btknowledge`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `btpracticed`
--
ALTER TABLE `btpracticed`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'เรื่องที่', AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `btpracticem`
--
ALTER TABLE `btpracticem`
  MODIFY `bt_years` int(4) NOT NULL AUTO_INCREMENT COMMENT 'ปี พ.ศ.';

--
-- AUTO_INCREMENT for table `btutilization`
--
ALTER TABLE `btutilization`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'เรื่องที่', AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
