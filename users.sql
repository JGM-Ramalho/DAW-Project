CREATE TABLE `microposts` (
 `id` int(11) NOT NULL auto_increment,
 `content` text,
 `user_id` int(11) default NULL,
 `created_at` datetime NOT NULL,
 `updated_at` datetime NOT NULL,
 PRIMARY KEY (`id`),
 KEY `fk_user_id` (`user_id`),
 CONSTRAINT `fk_user_id` FOREIGN KEY (`user_id`)
REFERENCES `users` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;