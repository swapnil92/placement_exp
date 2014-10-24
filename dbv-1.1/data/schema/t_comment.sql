CREATE TABLE `t_comment` (
  `comment_id` int(11) NOT NULL AUTO_INCREMENT,
  `fuser_id` int(11) NOT NULL,
  `fcomment_reply_id` int(11) NOT NULL,
  `comment_post` text NOT NULL,
  `comment_timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `comment_like` int(10) unsigned NOT NULL,
  `comment_unlike` int(10) unsigned NOT NULL,
  `comment_view_flag` tinyint(4) NOT NULL COMMENT 'for hiding/showing/making this post on hold',
  PRIMARY KEY (`comment_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1