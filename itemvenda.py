import sqlite3

conector = sqlite3.connect("vendas1.db")
cursor = conector.cursor()

#TABELA itemvenda
cursor.execute("""
CREATE TABLE itemvenda (
        Vd_codigo INTEGER NOT NULL PRIMARY KEY,
        Itm_codigo float NOT NULL,
        Pd_codigo FLOAT NOT NULL,
        Itm_qtde FLOAT NOT NULL,
        Itm_unitario FLOAT NOT NULL,
        Itm_desconto INTEGER,
        Itm_totalINTEGER,
        
        Criado_em DATA,
        FOREIGN KEY (Itm_codigo) REFERENCES grupo(Gr_nome)
        

);
""")


conector.commit()
cursor.close()
conector.close()

print("Abra a pasta do programa e veja se o arquivo esta lá")
print("Fim do Programa")
