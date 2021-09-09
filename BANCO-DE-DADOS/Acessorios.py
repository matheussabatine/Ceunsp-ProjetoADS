import sqlite3

conector = sqlite3.connect("vendas1.db")
cursor = conector.cursor()

# TABELA Acessorios
cursor.execute("""
CREATE TABLE acessorios (
        Cd_acessorio INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT,
        Acestipo TEXT NOT NULL,
        Publico TEXT NOT NULL,
        Marca TEXT NOT NULL,
        Vlr_unitac SMALMONEY,
        Estoqueac INTERGER NOT NULL,
        FOREIGN KEY (Publico) REFERENCES publico(Cd_publicotipo),
        FOREIGN KEY (Marca) REFERENCES marca(Marca)

);
""")

conector.commit()
cursor.close()
conector.close()

print("Abra a pasta do programa e veja se o arquivo esta lá")
print("Fim do Programa")