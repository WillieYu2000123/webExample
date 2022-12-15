-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- 主機： localhost
-- 產生時間： 
-- 伺服器版本： 8.0.17
-- PHP 版本： 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `temp`
--

-- --------------------------------------------------------

--
-- 資料表結構 `account`
--

CREATE TABLE `account` (
  `ID` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `level` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- 傾印資料表的資料 `account`
--

INSERT INTO `account` (`ID`, `password`, `name`, `level`) VALUES
('admin', 'admin', 'admin', 'admin'),
('user', 'user', 'user', 'user');

-- --------------------------------------------------------

--
-- 資料表結構 `career`
--

CREATE TABLE `career` (
  `ID` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `year` varchar(50) NOT NULL,
  `job` varchar(50) NOT NULL,
  `industry` varchar(50) NOT NULL,
  `totalSalary` varchar(50) NOT NULL,
  `usualSalary` varchar(50) NOT NULL,
  `unusualSalary` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- 傾印資料表的資料 `career`
--

INSERT INTO `career` (`ID`, `year`, `job`, `industry`, `totalSalary`, `usualSalary`, `unusualSalary`) VALUES
('1', '2016', '資訊系統分析師', '金融及保險業', '70458', '65124', '5334'),
('2', '2016', '軟體開發設計師', '金融及保險業', '73874', '60518', '13356'),
('3', '2016', '資料庫專業人員', '金融及保險業', '71574', '59319', '12255'),
('4', '2016', '財務投資分析師', '金融及保險業', '91231', '79636', '11595');

-- --------------------------------------------------------

--
-- 資料表結構 `students`
--

CREATE TABLE `students` (
  `sid` varchar(50) NOT NULL,
  `sname` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `sphone` varchar(50) NOT NULL,
  `saddress` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- 傾印資料表的資料 `students`
--

INSERT INTO `students` (`sid`, `sname`, `sphone`, `saddress`) VALUES
('4091324331', 'Babe', '09328738', 'fjcu'),
('4091398934`', 'Candy', '093480932', '新竹市風城'),
('fkewpof', 'je;oifjwa', ';jefoij', ';jeoifw'),
('S001', '庾小黑', '096505123', '新北市輔仁大學23路'),
('S002', '李庫威', '0937393847', '台北市大安大學76路'),
('S003', '西哈人', '029348093', '嘻哈國'),
('S004', '東西人', '0988798', 'jukkl'),
('s005', '李我', '097878576', 'waterful'),
('s006', '李清清', '17309', 'fijife'),
('s007', '黑狗狗', '32940934', 'its here'),
('s008', '不要睡覺', 'yesyesye', 'aeifojfjued'),
('s016', '張小淳大帥哥', '0955533091', '白宮');

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`ID`);

--
-- 資料表索引 `career`
--
ALTER TABLE `career`
  ADD PRIMARY KEY (`ID`);

--
-- 資料表索引 `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`sid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
