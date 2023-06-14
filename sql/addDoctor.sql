CREATE OR ALTER PROCEDURE addDoctor
@first_name varchar(30), @last_name varchar(40),@specialization varchar(150), @phone_number varchar(15),@ward_name varchar(50)
AS
DECLARE @WardID int;

SET @WardID = (SELECT id FROM wards WHERE ward_name = @ward_name);

insert into doctors (first_name, last_name, specialization, phone_number, ward_id) values (@first_name, @last_name, @specialization, @phone_number, @WardID);




-- mysql
DELIMITER //

CREATE PROCEDURE addDoctor(IN first_name varchar(30), IN last_name varchar(40), IN specialization varchar(150), IN phone_number varchar(15), IN ward_name varchar(50))
BEGIN
  DECLARE WardID INT;
  SELECT id INTO WardID FROM wards WHERE ward_name = ward_name;

  INSERT INTO doctors (first_name, last_name, specialization, phone_number, ward_id) VALUES (first_name, last_name, specialization, phone_number, WardID);
END //

DELIMITER ;
-- lokalna moja

create
    definer = root@localhost procedure addDoctor(IN first_name varchar(30), IN last_name varchar(40),
                                                 IN specialization varchar(150), IN phone_number varchar(15),
                                                 IN ward_name varchar(50))
BEGIN
    DECLARE WardID INT;
    SELECT id INTO WardID FROM wards w WHERE w.ward_name = ward_name;

    INSERT INTO doctors (first_name, last_name, specialization, phone_number, ward_id) VALUES (first_name, last_name, specialization, phone_number, WardID);
END;

