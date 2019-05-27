CREATE TABLE acesso(
  id INT NOT NULL AUTO_INCREMENT,
  usuario VARCHAR(80) NOT NULL,
  senha VARCHAR(32) NOT NULL,
  PRIMARY KEY (id));

INSERT INTO acesso (id,usuario,senha) VALUES (1,'jaba','123mudar');
INSERT INTO acesso (id,usuario,senha) VALUES (2,'rafael','123mudei');