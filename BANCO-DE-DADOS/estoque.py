import sqlite3

conector = sqlite3.connect("vendas1.db")
cursor = conector.cursor()

#TABELA Estoque
cursor.execute("""
CREATE TABLE estoque (
        Pd_codigo INTEGER NOT NULL PRIMARY KEY,
        Nome TEXT NOT NULL,
        Vd_valor SMALLMONEY,
        Saldo INTEGER,
        Pd_qtd INTEGER,
        Gr_nome INTEGER NOT NULL,
        Cd_publicotipo TEXT NOT NULL,
        Marca VARCHAR (30) NOT NULL,
        Imagem VARCHAR (50) NOT NULL,
        Criado_em DATA,
        FOREIGN KEY (Gr_nome) REFERENCES grupo(Gr_nome),
        FOREIGN KEY (Cd_publicotipo) REFERENCES publico(Cd_publicotipo),
        FOREIGN KEY(Marca) REFERENCES marca(Marca)

);
""")


conector.commit()
cursor.close()
conector.close()

print("Abra a pasta do programa e veja se o arquivo esta lá")
print("Fim do Programa")