import sqlite3

conector = sqlite3.connect("vendas1.db")
cursor = conector.cursor()

# TABELA Acessorios
cursor.execute("""
CREATE TABLE acessorio (
        Cd_acessorio INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT,
        Nome VARCHAR NOT NULL,
        Cd_publicotipo TEXT,
        Marca VARCHAR,
        Vlr_unitac FLOAT NOT NULL,
        Estoqueac FLOAT NOT NULL,
        FOREIGN KEY (Cd_publicotipo) REFERENCES acessorio(Cd_publicotipo),
        FOREIGN KEY (Marca) REFERENCES acessorio(Marca)

);
""")

conector.commit()
cursor.close()
conector.close()

print("Abra a pasta do programa e veja se o arquivo esta lá")
print("Fim do Programa")