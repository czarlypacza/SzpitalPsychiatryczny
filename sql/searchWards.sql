CREATE PROCEDURE searchWards
@value VARCHAR(50)
AS
BEGIN
    SELECT * FROM wards WHERE ward_name = @value;
END
go

