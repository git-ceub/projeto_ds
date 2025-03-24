	CREATE database projeto;
	use projeto;

	CREATE TABLE `projeto`.`aluno` (
	  `id` INT NOT NULL AUTO_INCREMENT,
	  `nome` VARCHAR(100) NOT NULL,
	  `ra` INT NULL,
	  `email` VARCHAR(45) NOT NULL,
	  PRIMARY KEY (`id`));
	  
	INSERT INTO aluno (nome, ra, email) VALUES
					  ('Molina', 12345, 'francisco.m.duarte@gmail.com');
	INSERT INTO aluno (nome, ra, email) VALUES
					  ('José', null, 'jose@gmail.com');
	INSERT INTO aluno (nome, ra, email) VALUES
					  ('Maria', 55555, 'maria@gmail.com');
	INSERT INTO aluno (nome, ra, email) VALUES
					  ('Pedro', 6666, 'pedro@gmail.com');