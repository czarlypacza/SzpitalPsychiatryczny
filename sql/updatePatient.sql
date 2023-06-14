CREATE PROCEDURE updatePatient
    @id bigint,@first_name varchar(20), @last_name varchar(30), @age int, @phone_number varchar(20),@pesel bigint,@weight smallint,@height smallint,
    @doctor_id bigint,@voivodeship varchar(30),@city varchar(30),@street varchar(30),@house_number int,@flat_number int = null,@postal_code varchar(15)
AS
    EXEC addAddress @voivodeship,@city,@street,@house_number,@flat_number,@postal_code;

DECLARE @address_id int;
    SET @address_id=(SELECT id FROM addresses WHERE voivodeship=@voivodeship AND city=@city AND street=@street AND house_number=@house_number AND flat_number=@flat_number AND postal_code=@postal_code);

UPDATE patients SET first_name=@first_name, last_name=@last_name, age=@age, phone_number=@phone_number, pesel=@pesel, weight=@weight, height=@height, doctor_id=@doctor_id,[address_id]=@address_id WHERE id=@id;
go


-- mysql
DELIMITER //

CREATE PROCEDURE updatePatient(IN p_id bigint, IN first_name varchar(20),
                               IN last_name varchar(30), IN age int, IN phone_number varchar(20),
                               IN pesel bigint, IN weight smallint, IN height smallint,
                               IN doctor_id bigint, IN voivodeship varchar(30),
                               IN city varchar(30), IN street varchar(30), IN house_number int,
                               IN flat_number int, IN postal_code varchar(15))
BEGIN
    DECLARE address INT;

    CALL addAddress(voivodeship, city, street, house_number, flat_number, postal_code);


    SET address = (SELECT a.id FROM addresses a WHERE a.voivodeship = voivodeship AND a.city = city AND a.street = street AND a.house_number = house_number AND a.flat_number = flat_number AND a.postal_code = postal_code );
    /*SET address_id = (
        SELECT id
        FROM addresses
        WHERE voivodeship = @voivodeship
          AND city = @city
          AND street = @street
          AND house_number = @house_number
          AND flat_number = @flat_number
          AND postal_code = @postal_code
            LIMIT 1
    );*/

    UPDATE patients p
    SET
        first_name = first_name,
        last_name = last_name,
        age = age,
        phone_number = phone_number,
        pesel = pesel,
        weight = weight,
        height = height,
        doctor_id = doctor_id,
        address_id = address
    WHERE id = p_id;
END//

DELIMITER ;



create
    definer = root@localhost procedure updatePatient(IN p_id bigint, IN first_name varchar(20),
                                                     IN last_name varchar(30), IN age int, IN phone_number varchar(20),
                                                     IN pesel bigint, IN weight smallint, IN height smallint,
                                                     IN doctor_id bigint, IN voivodeship varchar(30),
                                                     IN city varchar(30), IN street varchar(30), IN house_number int,
                                                     IN flat_number int, IN postal_code varchar(15))
BEGIN
    DECLARE address INT;

    CALL addAddress(voivodeship, city, street, house_number, flat_number, postal_code);


    SET address = (SELECT a.id FROM addresses a WHERE a.voivodeship = voivodeship AND a.city = city AND a.street = street AND a.house_number = house_number AND a.flat_number = flat_number AND a.postal_code = postal_code );
    /*SET address_id = (
        SELECT id
        FROM addresses
        WHERE voivodeship = @voivodeship
          AND city = @city
          AND street = @street
          AND house_number = @house_number
          AND flat_number = @flat_number
          AND postal_code = @postal_code
            LIMIT 1
    );*/

    UPDATE patients p
    SET
        first_name = first_name,
        last_name = last_name,
        age = age,
        phone_number = phone_number,
        pesel = pesel,
        weight = weight,
        height = height,
        doctor_id = doctor_id,
        address_id = address
    WHERE id = p_id;
END;

