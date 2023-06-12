CREATE OR ALTER PROCEDURE addWard
@name varchar(50)
AS
insert into wards(ward_name) values (@name);

-- mysql
DELIMITER //
CREATE PROCEDURE addWard(IN name varchar(50))
BEGIN
  INSERT INTO wards(ward_name) VALUES (name);
END //
DELIMITER ;
