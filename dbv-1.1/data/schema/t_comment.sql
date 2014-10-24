CREATE TABLE `t_comment` (
  `comment_id` int(11) NOT NULL AUTO_INCREMENT,
  `fexperience_id` int(11) NOT NULL,
  `fuser_id` int(11) NOT NULL,
  `fcomment_reply_id` int(11) NOT NULL,
  `comment_post` text NOT NULL,
  `comment_timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `comment_like` int(10) unsigned NOT NULL,
  `comment_unlike` int(10) unsigned NOT NULL,
  `comment_view_flag` tinyint(4) NOT NULL COMMENT 'for hiding/showing/making this post on hold',
  PRIMARY KEY (`comment_id`),
  KEY `fexperience_id` (`fexperience_id`),
  KEY `fuser_id` (`fuser_id`),
  KEY `fcomment_reply_id` (`fcomment_reply_id`),
  CONSTRAINT `t_comment_ibfk_1` FOREIGN KEY (`fexperience_id`) REFERENCES `t_experience` (`experience_id`),
  CONSTRAINT `t_comment_ibfk_2` FOREIGN KEY (`fuser_id`) REFERENCES `t_user` (`user_id`),
  CONSTRAINT `t_comment_ibfk_3` FOREIGN KEY (`fcomment_reply_id`) REFERENCES `t_comment` (`comment_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1