
CREATE TABLE IF NOT EXISTS `movies` (
  `movie_id` int(20)  NOT NULL AUTO_INCREMENT,
  `movie_name` varchar(500) NOT NULL,
  `release_year` varchar(10) NOT NULL,
  `duration` varchar(6) NOT NULL,
  `description` varchar(900) NOT NULL,
  `genre` varchar(50) NOT NULL,
  `language` varchar(50) NOT NULL,
  `movie_link` varchar(300) NOT NULL,
  `trailer_link` varchar(300) NOT NULL,
  `img_path` varchar(30) NOT NULL,
PRIMARY KEY (movie_id)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;








