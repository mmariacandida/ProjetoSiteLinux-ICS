Table	Create Table
autor	CREATE TABLE `autor` (\n  `id` int(6) unsigned NOT NULL AUTO_INCREMENT,\n  `nome` varchar(30) NOT NULL,\n  `senha` varchar(30) NOT NULL,\n  `email` varchar(30) NOT NULL,\n  PRIMARY KEY (`id`),\n  UNIQUE KEY `email` (`email`)\n) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci
