CREATE PROCEDURE searchWards
@value VARCHAR(50)
AS
BEGIN
    SELECT * FROM wards WHERE ward_name = @value;
END
go
-- mysql
DELIMITER //

CREATE PROCEDURE searchWards(IN value VARCHAR(50))
BEGIN
    SELECT * FROM wards WHERE ward_name = value;
END //

DELIMITER ;

