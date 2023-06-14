CREATE OR ALTER PROCEDURE updateWard @ID int,
@NAME VARCHAR(
    60
) AS
DECLARE @count int;
SET @count = (SELECT COUNT(id) FROM wards WHERE ward_name = @name)
IF(@count = 0)
BEGIN
	UPDATE wards
	SET ward_name = @NAME
	WHERE id = @ID;
END
-- mysql
DELIMITER //

CREATE PROCEDURE updateWard(IN ID INT, IN NAME VARCHAR(60))
BEGIN
    DECLARE count INT;
    SELECT COUNT(id) INTO count FROM wards WHERE ward_name = NAME;
    IF count = 0 THEN
        UPDATE wards
        SET ward_name = NAME
        WHERE id = ID;
    END IF;
END //

DELIMITER ;



create
    definer = root@localhost procedure updateWard(IN w_ID int, IN NAME varchar(60))
BEGIN
    DECLARE count INT;
    SELECT COUNT(id) INTO count FROM wards WHERE ward_name = NAME;
    IF count = 0 THEN
        UPDATE wards
        SET ward_name = NAME
        WHERE id = w_ID;
    END IF;
END;

