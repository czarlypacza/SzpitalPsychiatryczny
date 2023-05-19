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