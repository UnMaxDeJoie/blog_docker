CREATE TABLE `info_connexion` (
                                  `id` int NOT NULL AUTO_INCREMENT,
                                  `pseudo` varchar(16) NOT NULL,
                                  `email` varchar(50) NOT NULL,
                                  `password` text NOT NULL,
                                  `date_inscription` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE current_timestamp(),
                                  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

