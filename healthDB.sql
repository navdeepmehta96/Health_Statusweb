
--
-- Table structure for table `healthinfo`
--

DROP TABLE IF EXISTS `healthinfo`;

CREATE TABLE `healthinfo` (
  `studentID` int NOT NULL,
  `studentName` varchar(70) DEFAULT NULL,
  `age` int DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `contact` varchar(20) DEFAULT NULL,
  `suger` float DEFAULT NULL,
  `lbp` float DEFAULT NULL,
  `hbp` float DEFAULT NULL,
  `bodytemp` float DEFAULT NULL,
  `heartrate` float DEFAULT NULL,
  `hb` float DEFAULT NULL,
  PRIMARY KEY (`studentID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;


INSERT INTO `healthinfo` VALUES (2010490,'joe',23,'ontario','+1(935)-333-3766',100,88,50,78.6,100,9.9),(2020460,'akhil',20,'calgary','+1(965)-383-3833',110,70,90,98.6,85,12.5),(2020485,'sevin',23,'surrey','+1(962)-583-3837',170,70,99,81.6,99,13.5),(2030430,'radhika',19,'windsor','+1(965)-587-3733',150,90,90,70,95,11.5),(2080497,'karim',26,'brampton','+1(955)-363-3633',100,80,85,98.6,110,10.2);



