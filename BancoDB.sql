CREATE database Atv;

CREATE TABLE usuarios(
        id INT PRIMARY KEY AUTO_INCREMENT,
        nome VARCHAR(120) NOT NULL,
        sobrenome VARCHAR(120),
        email VARCHAR(50)
        );    

INSERT INTO `usuarios` (`id`,`nome`, `sobrenome`, `email`)
            VALUES (1, 'Sandro', 'Weber','sandroweber@gmail.com'),
                   (2, 'Eduardo', 'Reis','edureis@gmail.com');

SELECT nome, sobrenome From usuarios";
