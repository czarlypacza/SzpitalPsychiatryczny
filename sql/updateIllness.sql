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

    CREATE PROCEDURE updateIllness(IN ID INT, IN NAME VARCHAR(60), IN DESCRIPTION VARCHAR(150))
    BEGIN
        UPDATE illnesses
        SET name = NAME, description = DESCRIPTION
        WHERE ID = id;
    END //

DELIMITER ;
