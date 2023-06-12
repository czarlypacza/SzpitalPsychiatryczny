CREATE PROCEDURE searchPatients
    @condition VARCHAR(50),
    @value VARCHAR(50)
AS
BEGIN
    IF @condition = 'Imie'
        BEGIN
            SELECT * FROM Patients WHERE first_name = @value;
        END
    ELSE IF @condition = 'Nazwisko'
        BEGIN
            SELECT * FROM Patients WHERE last_name = @value;
        END
    ELSE IF @condition = 'Wiek'
        BEGIN
            SELECT * FROM Patients WHERE age = @value;
        END
    ELSE IF @condition = 'Tel'
        BEGIN
            SELECT * FROM Patients WHERE phone_number = @value;
        END
    ELSE IF @condition = 'PESEL'
        BEGIN
            SELECT * FROM Patients WHERE pesel = @value;
        END
    ELSE IF @condition = 'Waga'
        BEGIN
            SELECT * FROM Patients WHERE weight = @value;
        END
    ELSE IF @condition = 'Wzrost'
        BEGIN
            SELECT * FROM Patients WHERE height = @value;
        END
    ELSE IF @condition = 'Doktor'
        BEGIN
            SELECT * FROM Patients WHERE doctor_id = @value;
        END
    ELSE IF @condition = 'Wojewodztwo'
        BEGIN
            SELECT p.*
            FROM Patients p
                     INNER JOIN Addresses a ON p.address_id = a.id
            WHERE a.voivodeship = @value;
        END
    ELSE IF @condition = 'Miasto'
        BEGIN
            SELECT p.*
            FROM Patients p
                     INNER JOIN Addresses a ON p.address_id = a.id
            WHERE a.city = @value;
        END
    ELSE IF @condition = 'Ulica'
        BEGIN
            SELECT p.*
            FROM Patients p
                     INNER JOIN Addresses a ON p.address_id = a.id
            WHERE a.street = @value;
        END
    ELSE IF @condition = 'Numer'
        BEGIN
            SELECT p.*
            FROM Patients p
                     INNER JOIN Addresses a ON p.address_id = a.id
            WHERE a.house_number = @value;
        END
    ELSE IF @condition = 'NumerMieszkania'
        BEGIN
            SELECT p.*
            FROM Patients p
                     INNER JOIN Addresses a ON p.address_id = a.id
            WHERE a.flat_number = @value;
        END
END
go
-- mysql
        DELIMITER //

CREATE PROCEDURE searchPatients(IN cond VARCHAR(50), IN value VARCHAR(50))
BEGIN
            CASE
            WHEN cond = 'Imie' THEN
    SELECT * FROM Patients WHERE first_name = value;
            WHEN cond = 'Nazwisko' THEN
    SELECT * FROM Patients WHERE last_name = value;
            WHEN cond = 'Wiek' THEN
    SELECT * FROM Patients WHERE age = value;
            WHEN cond = 'Tel' THEN
    SELECT * FROM Patients WHERE phone_number = value;
            WHEN cond = 'PESEL' THEN
    SELECT * FROM Patients WHERE pesel = value;
            WHEN cond = 'Waga' THEN
    SELECT * FROM Patients WHERE weight = value;
            WHEN cond = 'Wzrost' THEN
    SELECT * FROM Patients WHERE height = value;
            WHEN cond = 'Doktor' THEN
    SELECT * FROM Patients WHERE doctor_id = value;
            WHEN cond = 'Wojewodztwo' THEN
    SELECT p.*
    FROM Patients p
             INNER JOIN Addresses a ON p.address_id = a.id
    WHERE a.voivodeship = value;
            WHEN cond = 'Miasto' THEN
    SELECT p.*
    FROM Patients p
             INNER JOIN Addresses a ON p.address_id = a.id
    WHERE a.city = value;
            WHEN cond = 'Ulica' THEN
    SELECT p.*
    FROM Patients p
             INNER JOIN Addresses a ON p.address_id = a.id
    WHERE a.street = value;
            WHEN cond = 'Numer' THEN
    SELECT p.*
    FROM Patients p
             INNER JOIN Addresses a ON p.address_id = a.id
    WHERE a.house_number = value;
            WHEN cond = 'NumerMieszkania' THEN
    SELECT p.*
    FROM Patients p
             INNER JOIN Addresses a ON p.address_id = a.id
    WHERE a.flat_number = value;
END CASE;
END //

DELIMITER ;
