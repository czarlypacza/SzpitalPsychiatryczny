CREATE OR ALTER PROCEDURE addWard
@name varchar(50)
AS
insert into wards(ward_name) values (@name);