CREATE TABLE IF NOT EXISTS `series` (
  `series_id` int(20) NOT NULL AUTO_INCREMENT,
  `series_name` varchar(100) NOT NULL,
  `release_year` varchar(10) NOT NULL,
  `description` varchar(900) NOT NULL,
  `genre` varchar(50) NOT NULL,
  `language` varchar(50) NOT NULL,
  `seasons_number` varchar(10) NOT NULL,
  `episodes_number` varchar(10) NOT NULL,
  `series_link` varchar(500) NOT NULL,
  `trailer_link` varchar(300) NOT NULL,
  `img_path` varchar(30) NOT NULL,
PRIMARY KEY (series_id)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

