CREATE TABLE IF NOT EXISTS `users` ( 
    `id` int PRIMARY KEY AUTO_INCREMENT,
    `name` varchar(50) NOT NULL, 
    `email` varchar(50) NOT NULL, 
    `password` varchar(50) NOT NULL )
    ENGINE=InnoDB