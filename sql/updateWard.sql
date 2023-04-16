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