CREATE PROCEDURE addAddress
@voivodeship varchar(30),@city varchar(30),@street varchar(30),@house_number int,@flat_number int = null,@postal_code varchar(15)
AS
DECLARE @count int;
SET @count = (SELECT COUNT(address_id) FROM addresses WHERE voivodeship = @voivodeship AND city = @city AND street = @street AND house_number = @house_number AND flat_number = @flat_number AND postal_code = @postal_code);

if(@count=0)
	BEGIN
	insert into addresses ( voivodeship, city, street, house_number, flat_number, postal_code) values (@voivodeship, @city, @street, @house_number, @flat_number, @postal_code);
	END

-- mysql
-- DELIMITER //
-- CREATE PROCEDURE addAddress(IN voivodeship varchar(30), IN city varchar(30), IN street varchar(30), IN house_number int, IN flat_number int, IN postal_code varchar(15))
-- BEGIN
--   DECLARE count INT;
--   SELECT COUNT(*) INTO count FROM addresses WHERE voivodeship = voivodeship AND city = city AND street = street AND house_number = house_number AND flat_number = flat_number AND postal_code = postal_code;
--
--   IF count = 0 THEN
--     INSERT INTO addresses (voivodeship, city, street, house_number, flat_number, postal_code) VALUES (voivodeship, city, street, house_number, flat_number, postal_code);
--   END IF;
-- END //
-- DELIMITER ;
