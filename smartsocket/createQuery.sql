CREATE TABLE `iotusers` (
 `user_name` varchar(100) NOT NULL,
 `email` varchar(100) NOT NULL,
 `pass` varchar(100) NOT NULL,
 `mobile` varchar(10) NOT NULL,
 `active` tinyint(1) NOT NULL DEFAULT '0',
 PRIMARY KEY (`email`)
) 