-- sql server
CREATE PROCEDURE searchDoctors
    @condition VARCHAR(50),
    @value VARCHAR(50)
AS
BEGIN
    IF @condition = 'Imie'
        BEGIN
            SELECT * FROM Doctors WHERE first_name = @value;
        END
    ELSE IF @condition = 'Nazwisko'
        BEGIN
            SELECT * FROM Doctors WHERE last_name = @value;
        END
    ELSE IF @condition = 'Specjalizacja'
        BEGIN
            SELECT * FROM Doctors WHERE specialization = @value;
        END
    ELSE IF @condition = 'Tel'
        BEGIN
            SELECT * FROM Doctors WHERE phone_number = @value;
        END
    ELSE IF @condition = 'Oddzial'
        BEGIN
            SELECT d.*
            FROM Doctors d
                     INNER JOIN wards w ON d.ward_id = w.id
            WHERE w.ward_name = @value;
        END
END
go

-- mysql
DELIMITER //

CREATE PROCEDURE searchDoctors(IN cond VARCHAR(50), IN value VARCHAR(50))
BEGIN
            CASE
            WHEN cond = 'Imie' THEN
    SELECT * FROM Doctors WHERE first_name = value;
            WHEN cond = 'Nazwisko' THEN
    SELECT * FROM Doctors WHERE last_name = value;
            WHEN cond = 'Specjalizacja' THEN
    SELECT * FROM Doctors WHERE specialization = value;
            WHEN cond = 'Tel' THEN
    SELECT * FROM Doctors WHERE phone_number = value;
            WHEN cond = 'Oddzial' THEN
    SELECT d.*
    FROM Doctors d
             INNER JOIN wards w ON d.ward_id = w.id
    WHERE w.ward_name = value;
END CASE;
END //

DELIMITER ;

create
    definer = root@localhost procedure searchDoctors(IN cond varchar(50), IN value varchar(50))
BEGIN
    CASE
        WHEN cond = 'Imie' THEN
            SELECT * FROM Doctors WHERE first_name = value;
        WHEN cond = 'Nazwisko' THEN
            SELECT * FROM Doctors WHERE last_name = value;
        WHEN cond = 'Specjalizacja' THEN
            SELECT * FROM Doctors WHERE specialization = value;
        WHEN cond = 'Tel' THEN
            SELECT * FROM Doctors WHERE phone_number = value;
        WHEN cond = 'Oddzial' THEN
            SELECT d.*
            FROM Doctors d
                     INNER JOIN wards w ON d.ward_id = w.id
            WHERE w.ward_name = value;
        END CASE;
END;

