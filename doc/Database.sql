CREATE TABLE atividades (
  id_atividades INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  tarefa_atividades VARCHAR(100) NULL,
  prazo_atividades DATE NULL,
  descricao_atividades VARCHAR(255) NULL,
  realizada_atividades VARCHAR(32) NULL,
  tipo_atividades VARCHAR(32) NULL,
  PRIMARY KEY(id_atividades)
);

CREATE TABLE usuario (
  id_usuario INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  login_usuario VARCHAR(20) NULL,
  senha_usuario VARCHAR(32) NOT NULL,
  nome_usuario VARCHAR(70) NULL,
  PRIMARY KEY(id_usuario)
)


