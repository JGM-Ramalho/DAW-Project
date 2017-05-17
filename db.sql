CREATE DATABASE LojaVirtual;

CREATE TABLE CLIENTE(
  ClienteId integer NOT NULL,
  PrimNome varchar(32) NOT NULL,
  UltNome varchar(32) NOT NULL,
  Endereco varchar(64) NOT NULL,
  Cidade varchar(32) NOT NULL,
  Cep varchar(10) NOT NULL,
  Telefone varchar(16),
  PRIMARY KEY(ClienteId));

  CREATE TABLE PRODUTO(
    ProdutoId integer NOT NULL,
    Descricao varchar(64) NOT NULL,
    PrecoCusto double precision,
    PrecoVenda double precision,
    PRIMARY KEY(ProdutoId),
    CHECK(PrecoCusto >= 0),
    CHECK(PrecoVenda >= 0));

    CREATE TABLE COMPRA(
      CompraId integer NOT NULL,
      ClienteId integer NOT NULL,
      DataCompra date NOT NULL,
      DataEnt date,
      Frete double precision,
      PRIMARY KEY(CompraId),
      FOREIGN KEY(ClienteId) REFERENCES CLIENTE(ClienteId)
      ON DELETE CASCADE ON UPDATE CASCADE);

      CREATE TABLE ENVOLVE(
        CompraId integer NOT NULL,
        ProdutoId integer NOT NULL,
        Quantidade integer NOT NULL);
