import sqlite3

conector = sqlite3.connect("vendas1.db")
cursor = conector.cursor()

# TABELA Marca
cursor.execute("""
CREATE TABLE Tamanho (
        Marca VARCHAR (3) NOT NULL PRIMARY KEY,
        Tamanho INTEGER NOT NULL 
               

);
""")

conector.commit()
cursor.close()
conector.close()

print("Abra a pasta do programa e veja se o arquivo esta lá")
print("Fim do Programa")
