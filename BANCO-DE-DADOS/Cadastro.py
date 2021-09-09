import sqlite3


conector = sqlite3.connect("vendas1.db")

cursor = conector.cursor()

cursor.execute("""
CREATE TABLE cadastro (
            Nome VARCHAR (60) NOT NULL,
            Sexo TEXT NOT NULL,
            Estado VARCHAR NOT NULL,
            Cidade VARCHAR NOT NULL,
            Endereço VARCHAR NOT NULL,
            Celular VARCHAR (15) NOT NULL,
            Email VARCHAR PRIMARY KEY,
            Senha INTEGER NOT NULL,
            FOREIGN KEY (Sexo) REFERENCES publico(Cd_publicotipo)
            );
            
            """
)

conector.commit()
cursor.close()
conector.close()

print("Fim do Programa")
