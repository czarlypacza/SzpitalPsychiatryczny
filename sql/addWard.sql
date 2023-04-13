CREATE PROCEDURE addWard
@name varchar(50)
AS
insert into hospital_wards(ward_name) values (@name);