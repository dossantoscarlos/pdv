create table if not exists produtos(
  id int not null auto_increment primary key,
  codigoBarra int not null,
  nomeProduto varchar(90) not null,
  marca char(100) not null,
  descricao char(100) not null,
  icon varchar(255) default null,
  preco float not null,
  unidade int default 0,
  peso float default 0
)ENGINE='InnoDB';

create table if not exists fornecedores(
  cpnj char(25) not null primary key,
  nomeEmpresa varchar(50) not null,
  telEmpresa char(16) default null,
  numLojaEmpresa int not null
  dataCadastro timestamp not null default CURRENT_TIMESTAMP
)ENGINE='InnoDB';

create table if not exists estoques(
  id int not null auto_increment primary key,
  qntMin int not null default 10,
  qntAtual int not null
)ENGINE='InnoDB';

create table if not exists registraVendas(
  id int not null auto_increment primary key,
  valorFinal float not null,
  formaPagamento char(15) not null,
  matrFuncionario int not null,
  itemColecao varchar(255) not null,
  itemCodBarra varchar(255) not null,
  qntItemColecao float not null,
  dataVenda timestamp not null default CURRENT_TIMESTAMP
)ENGINE='InnoDB';

create table if not exists status(
  id int not null auto_increment primary key,
  tipoStatus char(10) not null default 'ATIVO'
)ENGINE='InnoDB';

create table if not exists pessoas(
  id int not null auto_increment primary key,
  cpf char(16) not null,
  sexo char(10) not null,
  nome varchar(50) not null,
  sobrenome varchar(50) not null
)ENGINE='InnoDB';

create table if not exists clientes(
  id int not null auto_increment primary key,
  dataCadastro timestamp not null default CURRENT_TIMESTAMP
)ENGINE='InnoDB';

create table if not exists funcionarios (
  id int not null auto_increment primary key,
  matricula char(25) not null,
  password char(15) not null,
  numCarteiraTrab int not null,
  rg char(25) not null,
  cargo char(45) not null,
  dataAdmissao timestamp not null default CURRENT_TIMESTAMP,
  loginIn timestamp not null default CURRENT_TIMESTAMP,
  loginOut timestamp not null default CURRENT_TIMESTAMP
)ENGINE='InnoDB';

create table if not exists ceps(
  cep char(10) not null primary key,
  nomeRua varchar(65) not null
)ENGINE='InnoDB';

/* alter table add columns*/

/*alter table clientes*/
alter table clientes add idRegistraVenda int not null;
alter table clientes add idPessoa int not null;
alter table clientes add idStatus int not null;

/*alter table fornecedor*/
alter table fornecedores add idCepFornecedor int not null;
alter table fornecedores add idStatusFornecdor int not null;

/*alter table produtos*/
alter table produtos add idFornecedorProdutos char(25) not null;
alter table pdodutos add idEstoques int not null;

/*alter table pessoas*/
alter table pessoas add cepId char(10) not null;

/*alter table funcionarios*/
alter table funcionarios add numCasa int not null;
alter table funcionarios add complemento varchar(50) default null;
alter table funcionarios add idPessoa int not null;

/*Foreign keys*/

/*table produtos*/
alter table produtos add constraint idFornecedorProdutos foreign key (idFornecedorProdutos) references fornecedor(cnpj);
alter table produtos add constraint idEstoques foreign key (idEstoques) references estoques(id);

/*table fornecedores*/
alter table fornecedores add constraint idCep foreign key (idCepFornecedor) references ceps(cep);
alter table fornecedores add constraint idStatusFornecdor foreign key (idStatusFornecdor) references status(id);

/*table registraVendas*/
alter table registraVendas add constraint matrFuncionario foreign key (matrFuncionario) references funcionarios(id);

/*table clientes*/
alter table clientes add constraint idRegistraVendas Foreign key (idRegistraVenda) references registraVendas(id);
alter table clientes add constraint idpessoacliente foreign key (idPessoa) references pessoas(id);
alter table clientes add constraint idStatus foreign key (idStatus) references status(id);

/*table pessoas*/
alter table pessoas add constraint cepId foreign key (cepId) references ceps(cep);

/*Table funcionarios*/
alter table funcionarios add constraint idpessoafuncionario foreign key (idPessoa) references pessoas(id);

/*insert into*/
insert into status (id, status) values (null,'Ativo'),(null,'Desativado');
