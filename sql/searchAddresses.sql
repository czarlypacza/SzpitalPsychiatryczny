CREATE PROCEDURE searchAddresses
    @condition VARCHAR(50),
    @value VARCHAR(50)
AS
BEGIN
    IF @condition = 'Województwo'
        BEGIN
            SELECT * FROM addresses WHERE voivodeship = @value;
        END
    ELSE IF @condition = 'Miasto'
        BEGIN
            SELECT * FROM addresses WHERE city = @value;
        END
    ELSE IF @condition = 'Ulica'
        BEGIN
            SELECT * FROM addresses WHERE street = @value;
        END
    ELSE IF @condition = 'Nr domu'
        BEGIN
            SELECT * FROM addresses WHERE house_number = @value;
        END
    ELSE IF @condition = 'Nr mieszkania'
        BEGIN
            SELECT * FROM addresses WHERE flat_number = @value;
        END
    ELSE IF @condition = 'Kod pocztowy'
        BEGIN
            SELECT * FROM addresses WHERE postal_code = @value;
        END

END
go

--mysql
-- DELIMITER //
-- CREATE PROCEDURE searchAddresses(IN condition VARCHAR(50), IN value VARCHAR(50))
-- BEGIN
--   CASE
--     WHEN condition = 'Województwo' THEN
--       SELECT * FROM addresses WHERE voivodeship = value;
--     WHEN condition = 'Miasto' THEN
--       SELECT * FROM addresses WHERE city = value;
--     WHEN condition = 'Ulica' THEN
--       SELECT * FROM addresses WHERE street = value;
--     WHEN condition = 'Nr domu' THEN
--       SELECT * FROM addresses WHERE house_number = value;
--     WHEN condition = 'Nr mieszkania' THEN
--       SELECT * FROM addresses WHERE flat_number = value;
--     WHEN condition = 'Kod pocztowy' THEN
--       SELECT * FROM addresses WHERE postal_code = value;
--   END CASE;
-- END //
-- DELIMITER ;
