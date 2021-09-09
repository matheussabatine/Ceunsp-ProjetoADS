import sqlite3


conector = sqlite3.connect("vendas1.db")
cursor = conector.cursor()

# Inserindo Dados na Tabela Publico


#sql = """insert into publico(Cd_publicotipo) values ('Unisex')"""
#cursor.execute(sql)
#sql = """insert into moda (moda) values ('Infantil'), ('Juvenil') , ('Adulto'), ('Plus_size')"""
#cursor.execute((sql))
#sql = """insert into acessorios (Cd_acessorio,Acestipo, publico, Marca, Vlr_unitac, Estoqueac) values ('1','Brinco', 'Feminino', 'Mary', 'R$ 65.65','3'), ('2','Boné', 'Masculino', 'Nuby', 'R$ 45.25', '20'), ('3','Cinto','Maculino','Cowbor','R$ 15.75','45')"""

#sql = """insert into marca (Marca, Fabricante) values ('Hynode','HD Cosmeticos'), ('Mary', 'Mari Semi-joias'),('Nike', 'China Textil'), ('RI19', 'China Textil')"""
#cursor.execute(sql)
#sql = """insert into grupo (Gr_nome) values ('Roupas'),('Acessorios')"""
#cursor.execute(sql)
#sql= """insert into roupas (Roupatipo,Cor,Tamanho,Vlr_unit,Estoquerp,Marca,Cd_publicotipo,Moda)values ('Camisa', 'Azul','GG','R$ 123.00','4','Heringge','Masculino','Adulto')"""
#cursor.execute(sql)
#sql= """insert into roupas (Roupatipo,Cor,Tamanho,Vlr_unit,Estoquerp,Marca,Cd_publicotipo,Moda)values ('Calça', 'Marrom','M','R$ 98,00','12',1,2,4)"""
#cursor.execute(sql)
#sql= """insert into roupas (Roupatipo,Cor,Tamanho,Vlr_unit,Estoquerp,Marca,Cd_publicotipo,Moda)values ('Blusa', 'Branca','G','R$ 56,00','29',2,2,3)"""
#cursor.execute(sql)

#sql = """insert into acessorio(Cd_acessorio, Acestipo, Publico, Marca, Vlr_unitac, Estoqueac) values ('3','Puceira','Feminino','Mary','R$ 75.45','9'),('2','Boné','Masculino','Bongo','R$ 120.00','6')"""
sql = """insert into estoque (Pd_codigo, Nome, Vd_valor, Saldo, Pd_qtd, Gr_nome, Cd_publicotipo, Marca, Imagem, Criado_em) VALUES ('1','Camisa','R$ 34,87','10','2','Roupas','Masculino','Nike',3,'30-08-2021')"""

#sql= """insert into Imagens (Img_Codigo, Imagem) VALUES (1,LOAD_FILE("C:\blusa.jpeg"))"""

#sql = """insert into cadastro (Nome, Sexo, Estado, Cidade, Endereço, Celular,Email, Senha) VALUES ('Emily Kauane da Cruz', 'Feminino', 'São Paulo', 'Diadema', 'Regente Feijó  6127 Centro', '11-98871-9923','ekauane@lojavirtual.com.br','221011'),('Davi Jurandir', 'Masculino', 'Rio de Janeiro', 'Rio de Janeiro', 'Bonifacio Melo 234 Jardins', '11-98334-9223','djurandir@lojavirtual.com.br','221200')"""
cursor.execute(sql)




conector.commit()
cursor.close()
conector.close()

print("Imput realizado com sucesso")
print("Fim do Programa")
