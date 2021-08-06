import sqlite3

conector = sqlite3.connect("vendas1.db")
cursor = conector.cursor()

#TABELA Publico (Masculino, Feminino)
cursor.execute("""
CREATE TABLE publico (
        Cd_publicotipo TEXT NOT NULL PRIMARY KEY
        
);
""")


conector.commit()
cursor.close()
conector.close()

print("Abra a pasta do programa e veja se o arquivo esta lá")
print("Fim do Programa")