SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

DROP TABLE IF EXISTS `contactscms`;

CREATE TABLE `contactscms` (
    `contactID` int NOT NULL PRIMARY KEY AUTO_INCREMENT,
    `fname` char(50) NOT NULL,
    `lname` char(50) NOT NULL,
    `email` varchar(100) NOT NULL,
    `streetaddress` varchar(100) NOT NULL,
    `city` varchar(100) NOT NULL,
    `province` varchar(100) NOT NULL,
    `postalcode` varchar(7) NOT NULL,    
    `phone` varchar(12) NOT NULL,
    `yob` date NOT NULL
)ENGINE=MyISAM DEFAULT CHARSET=latin1;

INSERT INTO `contactscms` (`contactID`, `fname`, `lname`, `email`, `streetaddress`,`city`, `province`, `postalcode`, `phone`, `yob`) VALUES 
  (1, 'chris', 'macfarlane', 'chris@hotmail.com','31 upper rd', 'sackville', 'nova scotia', 'b3n-2n4','902-222-2222', '1991-05-16'),
  (2, 'billy', 'macdougle', 'billy@outlook.com','12 lower street', 'halifax', 'nova scotia', 'c5n-6f3', '902-333-3333', '1950-01-10'); 


DROP TABLE IF EXISTS `logincms`;
CREATE TABLE `logincms` (
    `email` varchar(25) NOT NULL,
    `password` varchar(200) NOT NULL
)ENGINE=MyISAM DEFAULT CHARSET=latin1;

INSERT INTO `logincms` (`email`, `password`) VALUES
    ('chris', '$2y$09$MtCliwHg.MGviWK4EjbENufQlGdS1nEzsgJ1NTC2y8GBZ0l8DkUHe');
