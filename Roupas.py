import sqlite3

conector = sqlite3.connect("vendas1.db")
cursor = conector.cursor()

#TABELA Roupas
cursor.execute("""
CREATE TABLE roupas (
        Cd_roupas INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT,
        Roupatipo TEXT NOT NULL,
        Cor TEXT NOT NULL,
        Tamanho INTEGER,
        Vlr_unit INTEGER,
        Estoquerp FLOAT NOT NULL,
        Marca TEXT NOT NULL, 
        Cd_publicotipo TEXT NOT NULL,
        Moda TEXT NOT NULL,
        FOREIGN KEY (Moda) REFERENCES roupas(Moda),
        FOREIGN KEY (Cd_publicotipo) REFERENCES roupas(Cd_publicotipo)

);
""")


conector.commit()
cursor.close()
conector.close()

print("Abra a pasta do programa e veja se o arquivo esta lá")
print("Fim do Programa")