DROP TABLE IF EXISTS `aluno`;

CREATE TABLE `aluno` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  `ra` int DEFAULT NULL,
  `email` varchar(45) NOT NULL,
  `senha` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

INSERT INTO `aluno` VALUES (9,'bbbb',45647,'bbb@gmail.com','e10adc3949ba59abbe56e057f20f883e'),(10,'aaaa',12123,'aaa@gmail.com','e10adc3949ba59abbe56e057f20f883e'),(14,'teste',1231312,'erasd@asd.com','e10adc3949ba59abbe56e057f20f883e');

