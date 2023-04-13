CREATE PROCEDURE addPatient
@first_name varchar(20), @last_name varchar(30), @age int, @phone_number varchar(20),@pesel bigint,@weight smallint,@height smallint,
@doctor_name varchar(30),@doctor_sur varchar(40),@voivodeship varchar(30),@city varchar(30),@street varchar(30),@house_number int,@flat_number int = null,@postal_code varchar(15)
AS
EXEC addAddress @voivodeship,@city,@street,@house_number,@flat_number,@postal_code;

DECLARE @doctor_id int;
DECLARE @address_id int;
SET @doctor_id=(SELECT doctor_id FROM doctors WHERE first_name=@first_name AND last_name=@last_name);
SET @address_id=(SELECT address_id FROM addresses WHERE street=@street AND house_number=@house_number AND flat_number=@flat_number AND postal_code=@postal_code);

INSERT INTO patients ( first_name, last_name, age, phone_number, pesel, weight, height, doctor_id, address_id) values (@first_name, @last_name, @age, @phone_number, @pesel, @weight, @height, @doctor_id, @address_id);