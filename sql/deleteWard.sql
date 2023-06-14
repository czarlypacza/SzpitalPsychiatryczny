CREATE OR ALTER PROCEDURE deleteWard @ID int
AS
DELETE FROM wards
WHERE id = @ID;


-- mysql
DELIMITER //
CREATE PROCEDURE deleteWard(IN id INT)
BEGIN
  DELETE FROM wards WHERE id = id;
END //
DELIMITER ;



create
    definer = root@localhost procedure deleteWard(IN w_id int)
BEGIN
    DELETE FROM wards WHERE id = w_id;
END;

