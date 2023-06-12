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

CREATE PROCEDURE updatePatient(
    IN id BIGINT,
    IN first_name VARCHAR(20),
    IN last_name VARCHAR(30),
    IN age INT,
    IN phone_number VARCHAR(20),
    IN pesel BIGINT,
    IN weight SMALLINT,
    IN height SMALLINT,
    IN doctor_id BIGINT,
    IN voivodeship VARCHAR(30),
    IN city VARCHAR(30),
    IN street VARCHAR(30),
    IN house_number INT,
    IN flat_number INT,
    IN postal_code VARCHAR(15)
)
BEGIN
    DECLARE address_id INT;

    CALL addAddress(voivodeship, city, street, house_number, flat_number, postal_code);


    SET address_id = (SELECT id FROM addresses WHERE voivodeship = voivodeship AND city = city AND street = street AND house_number = house_number AND flat_number = flat_number AND postal_code = postal_code );
    SET address_id = (
        SELECT id
        FROM addresses
        WHERE voivodeship = @voivodeship
          AND city = @city
          AND street = @street
          AND house_number = @house_number
          AND flat_number = @flat_number
          AND postal_code = @postal_code
            LIMIT 1
    );

    UPDATE patients
    SET
        first_name = first_name,
        last_name = last_name,
        age = age,
        phone_number = phone_number,
        pesel = pesel,
        weight = weight,
        height = height,
        doctor_id = doctor_id,
        address_id = address_id
    WHERE id = id;
END //

DELIMITER ;
