CREATE OR ALTER PROCEDURE deleteWard @ID int
AS
DELETE FROM wards
WHERE id = @ID;


--mysql
-- DELIMITER //
-- CREATE PROCEDURE deleteWard(IN id INT)
-- BEGIN
--   DELETE FROM wards WHERE id = id;
-- END //
-- DELIMITER ;
