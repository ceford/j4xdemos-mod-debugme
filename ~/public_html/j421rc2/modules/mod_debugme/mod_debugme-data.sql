CREATE TABLE IF NOT EXISTS `#__debugme_data` (
  `id` int NOT NULL AUTO_INCREMENT,
  `day_of_year` int DEFAULT 0,
  `title` varchar(63) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 DEFAULT COLLATE=utf8mb4_unicode_ci;

INSERT IGNORE INTO #__debugme_data (`id`, `day_of_year`, `title`) VALUES
(1, 242, 'Aiden'),
(2, 342, 'Benedict'),
(3, 235, 'Christopher'),
(4, 236, 'David'),
(5, 184, 'Edward'),
(6, 320, 'Francis'),
(7, 8, 'George'),
(8, 88, 'Hilda'),
(9, 119, 'Irene'),
(10, 26, 'James'),
(11, 33, 'Kevin'),
(12, 253, 'Lucy'),
(13, 258, 'Margaret'),
(14, 29, 'Nicholas'),
(15, 294, 'Olga'),
(16, 17, 'Peter'),
(17, 64, 'Quintian'),
(18, 259, 'Rose'),
(19, 59, 'Simon'),
(20, 309, 'Teresa'),
(21, 43, 'Ursula'),
(22, 97, 'Veronica'),
(23, 174, 'William'),
(24, 272, 'Xenia'),
(25, 341, 'Yvonne'),
(26, 278, 'Zachary');
