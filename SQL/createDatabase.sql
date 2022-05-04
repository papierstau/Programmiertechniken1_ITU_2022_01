-- Erstellt Datenbank
CREATE DATABASE Tablename;

--Löscht die Datenbank
DROP DATABASE Tablename;

--Erstellt eine Tabelle
CREATE TABLE Tablename{
    ID INT AUTO_INCREMENT,
    userName VARCHAR(255),
    email VARCHAR(255),
    PRIMARY KEY(ID),
    CONSTRAINT UC_Tablenamen UNIQUE (ID, userName)
    --FOREIGN KEY(Columnname)
};

--Löscht die Tabelle
DROP TABLE Tablename;

--Bearbeitet Tabelle
ALTER TABLE Tablename
--Columnname der Name der zu erstellenden Spalte
ADD Columnname Datatype;

INSERT INTO Tablename (userName, email)
--Value ist der Wert der in die Datenbank geschrieben werden soll
VALUES(userNameValue, emailValue);

--Datenbankabrfrage mit * (Wildcard)
SELECT * FROM Tablename;

--Datenbankabfrage mit Bedingung
SELECT userName FROM Tablename
WHERE userName = "Alex";

--Updated einen Datensatz, wenn man eine WHERE Bedingung verwendet
UPDATE Tablename
SET email = neuenEmailValue, Columnname = neueColumnValue
WHERE userName = "Alex";

--Löschen der Bedingung (CONSTRAINT)
ALTER TABLE Tablename
DROP CONSTRAINT UC_Tablenamen;

--Löscht Datebankeintrag mit der Bedingung
DELETE FROM Tablename
WHERE userName = "Alex";