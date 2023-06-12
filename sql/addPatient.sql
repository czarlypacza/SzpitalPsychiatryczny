CREATE PROCEDURE [dbo].[addPatient]
@first_name varchar(20), @last_name varchar(30), @age int, @phone_number varchar(20),@pesel bigint,@weight smallint,@height smallint,
@doctor_id bigint,@voivodeship varchar(30),@city varchar(30),@street varchar(30),@house_number int,@flat_number int = null,@postal_code varchar(15)
AS
EXEC addAddress @voivodeship,@city,@street,@house_number,@flat_number,@postal_code;

DECLARE @address_id int;
SET @address_id=(SELECT id FROM addresses WHERE voivodeship=@voivodeship AND city=@city AND street=@street AND house_number=@house_number AND flat_number=@flat_number AND postal_code=@postal_code);

INSERT INTO patients ( first_name, last_name, age, phone_number, pesel, weight, height, doctor_id,[address_id]) values (@first_name, @last_name, @age, @phone_number, @pesel, @weight, @height, @doctor_id, @address_id);
go

-- mysql
DELIMITER //
CREATE PROCEDURE addPatient(IN first_name varchar(20), IN last_name varchar(30), IN age int, IN phone_number varchar(20), IN pesel bigint, IN weight smallint, IN height smallint, IN doctor_id bigint, IN voivodeship varchar(30), IN city varchar(30), IN street varchar(30), IN house_number int, IN flat_number int, IN postal_code varchar(15))
BEGIN
    DECLARE address_id INT;
    CALL addAddress(voivodeship, city, street, house_number, flat_number, postal_code);

  SELECT id INTO address_id FROM addresses WHERE voivodeship = voivodeship AND city = city AND street = street AND house_number = house_number AND flat_number = flat_number AND postal_code = postal_code;

  INSERT INTO patients (first_name, last_name, age, phone_number, pesel, weight, height, doctor_id, address_id) VALUES (first_name, last_name, age, phone_number, pesel, weight, height, doctor_id, address_id);
END //
DELIMITER ;
