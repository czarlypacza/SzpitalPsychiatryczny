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

-- mysql
DELIMITER //

CREATE PROCEDURE searchIllnesses(IN cond VARCHAR(50), IN value VARCHAR(200))
BEGIN
    CASE
        WHEN cond = 'Nazwa' THEN
            SELECT * FROM illnesses WHERE name = value;
        WHEN cond = 'Opis' THEN
            SELECT * FROM illnesses WHERE description = value;
        END CASE;
END //

DELIMITER ;

create
    definer = root@localhost procedure searchIllnesses(IN cond varchar(50), IN value varchar(200))
BEGIN
    CASE
        WHEN cond = 'Nazwa' THEN
            SELECT * FROM illnesses WHERE name = value;
        WHEN cond = 'Opis' THEN
            SELECT * FROM illnesses WHERE description LIKE value;
        END CASE;
END;

