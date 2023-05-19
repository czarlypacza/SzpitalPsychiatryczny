CREATE PROCEDURE searchIllnesses
    @condition VARCHAR(50),
    @value VARCHAR(200)
AS
BEGIN
    IF @condition = 'Nazwa'
        BEGIN
            SELECT * FROM illnesses WHERE name = @value;
        END
    ELSE IF @condition = 'Opis'
        BEGIN
            SELECT * FROM illnesses WHERE description = @value;
        END
END
go
