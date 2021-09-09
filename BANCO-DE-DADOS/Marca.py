import sqlite3

conector = sqlite3.connect("vendas1.db")
cursor = conector.cursor()

# TABELA Marca
cursor.execute("""
CREATE TABLE marca (
        Marca VARCHAR (30) NOT NULL PRIMARY KEY,
        Fabricante VARCHAR (60) NOT NULL 
               

);
""")

conector.commit()
cursor.close()
conector.close()

print("Abra a pasta do programa e veja se o arquivo esta lá")
print("Fim do Programa")