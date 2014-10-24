CREATE TABLE `t_experience` (
  `experience_id` int(11) NOT NULL AUTO_INCREMENT,
  `fuser_id` int(11) NOT NULL,
  `experience_post` text NOT NULL,
  `experince_timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`experience_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1