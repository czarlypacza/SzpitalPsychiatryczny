CREATE PROCEDURE addDoctor
@first_name varchar(30), @last_name varchar(40),@specialization varchar(150), @phone_number varchar(15),@ward_name varchar(50)
AS
DECLARE @WardID int;

SET @WardID = (SELECT ward_id FROM hospital_wards WHERE ward_name = @ward_name);

insert into doctors (first_name, last_name, specialization, phone_number, ward_id) values (@first_name, @last_name, @specialization, @phone_number, @WardID);