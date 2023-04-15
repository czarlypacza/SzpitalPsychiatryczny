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