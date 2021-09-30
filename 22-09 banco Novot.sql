create database vendasSql
default char set utf8
default collate utf8_general_ci;

create table acessorios (
		Cd_acessorio int not null auto_increment,
        Acestipo enum ('Roupas','Acessorios'),
        Publico varchar (20),
        Marca varchar (20),
        Vlr_unitac int,
        Estoqueac int,
        primary key (Cd_acessorio)
       
) default charset = utf8;

create table cadastro (
			Nome VARCHAR (60) NOT NULL,
            Sexo varchar (20),
            Estado varchar(35),
            Cidade VARCHAR (30),
            Endereço varchar(60),
            Celular VARCHAR (15) NOT NULL,
            Email VARCHAR (60),
            Senha INTEGER NOT NULL,
            primary key (Email)
) default charset = utf8;


create table estoque(
		Pd_codigo int not null auto_increment,
        Produto TEXT NOT NULL,
        Cor TEXT NOT NULL,
        Vd_valor integer,
        Saldo INTEGER,
        Pd_qtd INTEGER,
        Gr_nome varchar(20),
        Cd_publicotipo varchar(20),
        Marca VARCHAR (30) NOT NULL,
        Imagem VARCHAR (50) NOT NULL,
        Criado_em date,
        primary key (Pd_codigo)	
	
) default charset = utf8;


create table grupo (
     Cd_grupo int not null auto_increment,
	 Gr_nome enum ('Roupas','Acessorios'),
	primary key(Cd_grupo)
) default charset = utf8;

CREATE TABLE imagens (
        Img_Codigo int not null auto_increment,
        Imagem longblob NOT NULL, 
        primary key (Img_Codigo)
        
        ) default charset = utf8;
        
create table itemvenda (
        Vd_codigo int not null auto_increment,
        Itm_codigo integer,
        Pd_codigo integer,
        Itm_qtde integer,
        Itm_unitario integer,
        Itm_desconto float,
        Itm_total integer,        
        Criado_em date,  
        primary key (Vd_codigo)

) default charset = utf8;

create table marca(
        Marca VARCHAR (30) NOT NULL,
        Fabricante VARCHAR (60) NOT NULL,
        primary key(Marca)
) default charset = utf8;

create table moda(
	Moda varchar (20),
	primary key (Moda)

) default charset = utf8;

create table publico(
	Publicotipo varchar (15),
	primary key (Publicotipo)

) default charset = utf8;

CREATE TABLE roupas(
        Cd_roupas INTEGER NOT NULL auto_increment,
        Roupatipo TEXT NOT NULL,
        Cor TEXT NOT NULL,
        Tamanho INTEGER,
        Vlr_unit integer,
        Estoquerp FLOAT NOT NULL,
        Marca TEXT NOT NULL, 
        Cd_publicotipo TEXT NOT NULL,
        Moda TEXT NOT NULL,
        primary key (Cd_roupas)
) default charset = utf8;

create table tamanho(
	Tamanho varchar (3) not null,
    primary key(Tamanho)
) default charset = utf8;


CREATE TABLE Venda (
        Vd_codigo INTEGER NOT NULL,
        Cl_codigo INTEGER NOT NULL,
        Vd_data  DATE NOT NULL,
        Vd_valor  DECIMAL NOT NULL,
        Nome TEXT,
        Marca VARCHAR (30),
        Roupatipo TEXT NOT NULL,
        Tamanho INTEGER,
        Cor TEXT NOT NULL,
        Criado_em date ,
        primary key(Vd_codigo)
                        

);

alter table cadastro
add foreign key (sexo) references publico(Publicotipo);

describe cadastro;

alter table acessorios
add foreign key (publico) references publico(Publicotipo);

describe acessorios;


alter table acessorios
add foreign key(marca) references marca(Marca);
describe acessorios;


 alter table itemvenda
 add foreign key (Itm_codigo) references grupo(Cd_grupo);

alter table roupas
add foreign key(moda) references moda(Moda),
add foreign key(marca) references marca(Marca),
add foreign key(Cd_publicotipo) references publico(Publicotipo),
add foreign key(Tamanho) references tamanho(Tamanho);


alter table venda
add foreign key(Vd_codigo) references itemvenda(Itm_codigo);

describe venda;

insert into cadastro
(Nome, Sexo, Estado, Cidade, Endereço, Celular, Email, Senha)
values
('Rosa Soraia', 'Masculino' 'São Paulo','Cajamar','Treze de Maio', '11-93232-2323', 'rsoraia@oul.com','123456');

insert into cadastro 
(Nome, Sexo, Estado, Cidade, Endereço, Celular, Email, Senha)
VALUES 
('Emily Kauane da Cruz', 'Feminino', 'São Paulo', 'Diadema', 'Regente Feijó  6127 Centro', '11-98871-9923','ekauane@lojavirtual.com.br','221011'),
('Davi Jurandir', 'Masculino', 'Rio de Janeiro', 'Rio de Janeiro', 'Bonifacio Melo 234 Jardins', '11-98334-9223','djurandir@lojavirtual.com.br','221200');