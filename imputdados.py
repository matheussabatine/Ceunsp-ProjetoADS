import sqlite3

conector = sqlite3.connect("vendas1.db")
cursor = conector.cursor()

# Inserindo Dados na Tabela Publico


#sql = """insert into publico(Cd_publicotipo) values ('Feminino'),('Masculino')"""
#cursor.execute(sql)
#sql = """insert into moda (moda) values ('Infantil'), ('Juvenil') , ('Adulto'), ('Plus_size')"""
#cursor.execute((sql))
#sql = """insert into acessorio (nome,Vlr_unitac, Estoqueac) values ('Brinco', 'R$ 65,65', '3'), ('Boné', 'R$ 45,25', '20'), ('Cinto','R$ 15,75', '45')"""

#sql = """insert into marca (Marca, Fabricante) values ('Hynode','HD Cosmeticos'), ('Mary', 'Mari Semi-joias'),('Nike', 'China Textil'), ('RI19', 'China Textil')"""
#cursor.execute(sql)
#sql = """insert into grupo (Gr_nome) values ('Roupas'),('Acessorios')"""
#cursor.execute(sql)
#sql= """insert into roupas (Roupatipo,Cor,Tamanho,Vlr_unit,Estoquerp,Marca,Cd_publicotipo,Moda)values ('Camisa', 'Azul','GG','R$ 123,00','4',1,2,4)"""
#cursor.execute(sql)
#sql= """insert into roupas (Roupatipo,Cor,Tamanho,Vlr_unit,Estoquerp,Marca,Cd_publicotipo,Moda)values ('Calça', 'Marrom','M','R$ 98,00','12',1,2,4)"""
#cursor.execute(sql)
#sql= """insert into roupas (Roupatipo,Cor,Tamanho,Vlr_unit,Estoquerp,Marca,Cd_publicotipo,Moda)values ('Blusa', 'Branca','G','R$ 56,00','29',2,2,3)"""
#cursor.execute(sql)

#sql = """insert into produto(Nome, Vd_valor, Desconto, Total, Saldo, Pd_qtd, Gr_nome, Cd_publicotipo, Marca, IMGCODIGO) VALUES ('Camisa','R$ 34,87','10%','34,87','1','1',1,3,4,'123456')"""


sql= """insert into cadastro(Nome, Sexo, Estado, Cidade, Endereço, Email, Senha) VALUES ('Matheus Davi da Cruz', 'Maculino', 'Rio de Janeiro', 'Copacabana', 'Edgar Maia, 657, Nova Leblon', 'davim721@lojavirtual.com.br', '212321')"""
cursor.execute(sql)




conector.commit()
cursor.close()
conector.close()

print("Imput realizado com sucesso")
print("Fim do Programa")