DROP TABLE admin;

CREATE TABLE `admin` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(255) DEFAULT NULL,
  `fathername` varchar(255) DEFAULT NULL,
  `idno` varchar(30) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `gender` varchar(12) DEFAULT NULL,
  `user` varchar(255) DEFAULT NULL,
  `psd` varchar(20) DEFAULT NULL,
  `user_image` varchar(255) DEFAULT NULL,
  `reg_date` date DEFAULT NULL,
  `last_login` date DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

INSERT INTO adminVALUES("1","mesfin","tsegaye","NSR/3029/07","sciemesfin55@gmail.com","0915981847","Male","Administrator","001988mtmt","default.jpg","2018-05-11","2018-05-11","unverified");
INSERT INTO adminVALUES("2","Negash","Eshetu","NG123","mesfin@gmail.com","0915981847","Male","Supervisor","1234","default.jpg","2018-05-14","2018-05-14","unverified");
INSERT INTO adminVALUES("3","Abera","Getachewu","Ab12","abera@yahoo.com","0915981847","Male","","1234","default.jpg","2018-05-18","2018-05-18","unverified");
INSERT INTO adminVALUES("4","Mesfin","Tsegaye","NSR","moses@yahoo.com","0915981847","Male","","1234","default.jpg","2018-05-18","2018-05-18","unverified");
INSERT INTO adminVALUES("5","Alan ","Turing","AT12","alanturing@gmail.com","0915981847","Male","","123456","default.jpg","2018-05-21","2018-05-21","unverified");
INSERT INTO adminVALUES("6","g","","","","","Gender","","","default.jpg","2018-05-21","2018-05-21","unverified");



DROP TABLE birth;

CREATE TABLE `birth` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `idno` varchar(25) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `gfname` varchar(255) NOT NULL,
  `nationality` varchar(255) NOT NULL,
  `region` varchar(255) NOT NULL,
  `zone` varchar(255) NOT NULL,
  `woreda` varchar(255) NOT NULL,
  `town` varchar(255) NOT NULL,
  `kebele` varchar(255) NOT NULL,
  `bdate` date NOT NULL,
  `gender` varchar(12) NOT NULL,
  `regdate` date NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

INSERT INTO birthVALUES("2","NSR","Mesfin","Tsegaye","Maniye","Ethiopian","Oromia","Arsi","Asella","Asella","W/kone","2018-05-01","Male","2018-05-19");
INSERT INTO birthVALUES("3","","","","","","Region","","","","","0000-00-00","Select","2018-05-20");



DROP TABLE death;

CREATE TABLE `death` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `idno` varchar(25) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `gfname` varchar(255) NOT NULL,
  `nationality` varchar(255) NOT NULL,
  `region` varchar(255) NOT NULL,
  `zone` varchar(255) NOT NULL,
  `woreda` varchar(255) NOT NULL,
  `town` varchar(255) NOT NULL,
  `kebele` varchar(255) NOT NULL,
  `bdate` date NOT NULL,
  `ddate` date NOT NULL,
  `death_cause` varchar(255) NOT NULL,
  `gender` varchar(12) NOT NULL,
  `regdate` date NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

INSERT INTO deathVALUES("3","GGT","Mesfin","Girma","Tsegaye","Ethiopian","Oromia","Arsi","Shirka","Asella","W/kone","2018-05-01","0000-00-00","Assident","Male","2018-05-19");



DROP TABLE emigrator;

CREATE TABLE `emigrator` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `idno` varchar(25) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `gfname` varchar(255) NOT NULL,
  `nationality` varchar(255) NOT NULL,
  `region` varchar(255) NOT NULL,
  `zone` varchar(255) NOT NULL,
  `woreda` varchar(255) NOT NULL,
  `town` varchar(255) NOT NULL,
  `kebele` varchar(255) NOT NULL,
  `bdate` date NOT NULL,
  `edate` date NOT NULL,
  `emigratedto` varchar(255) NOT NULL,
  `gender` varchar(12) NOT NULL,
  `regdate` date NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

INSERT INTO emigratorVALUES("1","Mo123","Mesfin","Tsegaye","Maniye","Ethiopia","Oromia","Shawa","Adama","Adama","01","2018-05-15","0000-00-00","CANADA","male","2018-05-19");
INSERT INTO emigratorVALUES("2","EL123","Mesfin","Tsegaye","Maniye","Ethiopia","Oromia","Shawa","Adama","Adama","01","2018-05-15","2018-05-10","CANADA","male","2018-05-29");
INSERT INTO emigratorVALUES("3","NSR/3029/07","Mesfin","Tsegaye","Maniye","Ethiopian","Gambela","Arsi","Shirka","Gobesa","W/kone","2018-05-29","2018-05-31","London","Male","2018-05-19");



DROP TABLE feadback;

CREATE TABLE `feadback` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `feadback` text NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

INSERT INTO feadbackVALUES("4","Yeah","Yonas Beyene","Amazing services","2018-05-20","07:05:39");
INSERT INTO feadbackVALUES("5","Yeah","Esfifanos Teklay","You provide a nice service for every one.","2018-05-20","08:05:07");



DROP TABLE imigrator;

CREATE TABLE `imigrator` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `idno` varchar(25) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `gfname` varchar(255) NOT NULL,
  `nationality` varchar(255) NOT NULL,
  `region` varchar(255) NOT NULL,
  `zone` varchar(255) NOT NULL,
  `woreda` varchar(255) NOT NULL,
  `town` varchar(255) NOT NULL,
  `kebele` varchar(255) NOT NULL,
  `bdate` date NOT NULL,
  `edate` date NOT NULL,
  `imigratedfrom` varchar(255) NOT NULL,
  `gender` varchar(12) NOT NULL,
  `regdate` date NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

INSERT INTO imigratorVALUES("2","NSR/3029/07","Mesfin","Tsegaye","Maniye","Ethiopian","Oromia","Arsi","Asella","Asella","W/kone","2018-05-01","0000-00-00","CANADA","Male","2018-05-19");



DROP TABLE newperson;

CREATE TABLE `newperson` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `idno` varchar(25) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `gfname` varchar(255) NOT NULL,
  `nationality` varchar(255) NOT NULL,
  `region` varchar(255) NOT NULL,
  `zone` varchar(255) NOT NULL,
  `woreda` varchar(255) NOT NULL,
  `town` varchar(255) NOT NULL,
  `kebele` varchar(255) NOT NULL,
  `bdate` date NOT NULL,
  `gender` varchar(12) NOT NULL,
  `regdate` date NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

INSERT INTO newpersonVALUES("1","M12","Mesfin","Tsegaye","Maniye","Ethiopian","Oromia","Arsi","Asella","Asella","05","1994-07-02","male","2018-05-20");
INSERT INTO newpersonVALUES("2","M123","Tsegaye","Mesfin","Maniye","Ethiopian","Oromia","Arsi","Shirka","Gobesa","01","2000-05-10","Male","2018-05-19");
INSERT INTO newpersonVALUES("3","M012","Tsegaye","Mesfin","Mekonin","Ethiopian","Oromia","Arsi","Shirka","Gobesa","W/kone","2000-05-10","Male","2018-05-19");
INSERT INTO newpersonVALUES("5","N126","Eshetu","Negash","Abebe","Ethiopian","Gambela","Arsi","Shirka","Gobesa","W/kone","2018-05-30","Male","2018-05-19");
INSERT INTO newpersonVALUES("6","N126","Eshetu","Negash","G/mariyam","Ethiopian","Oromia","Arsi","Shirka","Gobesa","W/kone","2018-05-30","Male","2018-05-19");
INSERT INTO newpersonVALUES("7","M123","Mesfin","Tsegaye","Maniye","Ethiopian","Oromia","Arsi","Shirka","Gobesa","01","2018-05-24","Male","2018-05-19");
INSERT INTO newpersonVALUES("9","G123","Getaneh","Girma","Tsegaye","Ethiopian","Oromia","Arsi","Shirka","Asella","W/kone","2018-05-07","Male","2018-05-19");



DROP TABLE report;

CREATE TABLE `report` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `idno` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

INSERT INTO reportVALUES("3","Enumeration","123 New peoples are recorded.","2018-05-20","10:05:50","NSR/3029/07");



DROP TABLE user;

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `idno` varchar(20) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `email` varchar(255) NOT NULL,
  `gender` varchar(12) NOT NULL,
  `priviledge` varchar(255) NOT NULL,
  `password` varchar(20) NOT NULL,
  `reg_date` date NOT NULL,
  `lastlogindate` date NOT NULL,
  `lastlogintime` time NOT NULL,
  `status` varchar(255) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

INSERT INTO userVALUES("1","Mesfin","Tsegaye","nsr","0915981847","mesfin@gmail.com","male","Manager","001988mtmT","2018-05-22","2018-05-15","17:17:25","1");
INSERT INTO userVALUES("2","Negash","Eshetu","nsr","0915981847","sciemesfin55@gmail.com","male","manager","1234","2018-05-22","2018-05-15","00:00:00","1");
INSERT INTO userVALUES("3","Abera","Getachewu","nsr","0915981847","sciemesfin55@gmail.com","male","manager","1234","2018-05-22","2018-05-15","05:12:44","1");
INSERT INTO userVALUES("4","Firaol","Tesfaye","nsr","0915981847","sciemesfin55@gmail.com","male","manager","1234","2018-05-22","2018-05-15","11:34:18","1");
INSERT INTO userVALUES("7","Wubishet","Fitru","NSR/3029/07","0915981847","mesfin@gmail.com","Male","Supervisor","123","2018-05-18","2018-05-18","03:05:10","unverified");
INSERT INTO userVALUES("8","Yonas","Beyene","NSR/3029/07","0915981847","yohanes@yahoo.com","Male","Enumerator","001988mtmt","2018-05-18","2018-05-18","07:05:50","unverified");
INSERT INTO userVALUES("9","Dawit","Morka","DM01","0915981847","dawit@gmail.com","Male","Enumerator","12","2018-05-18","2018-05-18","10:05:15","unverified");
INSERT INTO userVALUES("10","Shimelis","Megersa","SHM","0915981847","shimelis@gmail.com","Male","Manager","1234","2018-05-20","2018-05-20","08:05:38","unverified");
INSERT INTO userVALUES("11","Mesfin","Tsegaye","NSR","0915981847","mesfin@gmail.com","Male","Enumerator","1234","2018-05-20","2018-05-20","09:05:11","unverified");
INSERT INTO userVALUES("12","Abebe","Kebede","AK12","0915981847","abebe@yahoo.com","Male","Supervisor","1234","2018-05-21","2018-05-21","07:05:02","unverified");



