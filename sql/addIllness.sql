CREATE PROCEDURE addIllness 
@name varchar(60), @description varchar(150)
AS
insert into illnesses (name, description) values (@name, @description);