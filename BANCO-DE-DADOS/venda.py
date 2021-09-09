import sqlite3

conector = sqlite3.connect("vendas1.db")
cursor = conector.cursor()

# TABELA venda
cursor.execute("""
CREATE TABLE Venda (
        Vd_codigo INTEGER NOT NULL PRIMARY KEY,
        Cl_codigo INTEGER NOT NULL,
        Vd_data  DATE NOT NULL,
        Vd_valor  DECIMAL NOT NULL,
        Nome TEXT,
        Marca VARCHAR,
        Roupatipo TEXT NOT NULL,
        Tamanho INTEGER,
        Cor TEXT NOT NULL,
        Criado_em DATA,
        FOREIGN KEY (Cl_codigo) REFERENCES grupo(Gr_nome),
        FOREIGN KEY (Tamanho) REFERENCES tamanho(Tamanho)
                        

);
""")

conector.commit()
cursor.close()
conector.close()

print("Abra a pasta do programa e veja se o arquivo esta lá")
print("Fim do Programa")
