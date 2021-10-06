-- INSERE DADOS
INSERT INTO funcionario (nome, cargo) VALUES ('Jonathan', 'Tech Lead');
-- ALTERA DADOS
UPDATE funcionario SET cargo = 'Estudante' WHERE id IN (2, 3);
-- SELECIONA DADOS
SELECT * FROM funcionario;
-- DELETA DADOS
DELETE FROM funcionario;
-- LIMPA A TABELA
TRUNCATE TABLE funcionario;