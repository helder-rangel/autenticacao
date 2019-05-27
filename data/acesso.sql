CREATE TABLE acesso(
  id INT NOT NULL AUTO_INCREMENT,
  usuario VARCHAR(80) NOT NULL,
  senha VARCHAR(32) NOT NULL,
  PRIMARY KEY (id)
  );

INSERT INTO acesso (usuario,senha) VALUES ('jaba',md5('123abc'));
INSERT INTO acesso (usuario,senha) VALUES ('rafael',md5('123abc'));