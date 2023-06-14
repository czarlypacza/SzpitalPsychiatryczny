CREATE OR ALTER PROCEDURE updateIllness @ID int,
@NAME VARCHAR(
    60
),
@DESCRIPTION VARCHAR(
    150
) AS 

UPDATE illnesses
SET name = @NAME, description = @DESCRIPTION
WHERE id = @ID;
-- mysql
DELIMITER //

    CREATE PROCEDURE updateIllness(IN illID INT, IN NAME VARCHAR(60), IN DESCRIPTION VARCHAR(150))
    BEGIN
        UPDATE illnesses
        SET name = NAME, description = DESCRIPTION
        WHERE id = illID;
    END //

DELIMITER ;



create
    definer = root@localhost procedure updateIllness(IN illID int, IN NAME varchar(60), IN DESCRIPTION varchar(150))
BEGIN
    UPDATE illnesses
    SET name = NAME, description = DESCRIPTION
    WHERE id = illID;
END;

