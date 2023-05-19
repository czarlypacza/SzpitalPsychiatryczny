CREATE OR ALTER PROCEDURE ADDILLNESS @NAME VARCHAR(
    60
),
@DESCRIPTION VARCHAR(
    150
) AS DECLARE @ILOSC INT;

SET @ILOSC = (
    SELECT
        COUNT(id)
    FROM
        illnesses
	WHERE
		name = @name
)

IF (@ILOSC=0)

BEGIN
    INSERT INTO ILLNESSES (
        NAME,
        DESCRIPTION
    ) VALUES (
        @NAME,
        @DESCRIPTION
    );
END



--mysql
-- DELIMITER //
-- CREATE PROCEDURE ADDILLNESS(IN in_name VARCHAR(60), IN in_description VARCHAR(150))
-- BEGIN
--   DECLARE count INT;
--   SELECT COUNT(id) INTO count FROM illnesses WHERE name = in_name;

--   IF count = 0 THEN
--     INSERT INTO ILLNESSES (name, description) VALUES (in_name, in_description);
--   END IF;
-- END //
-- DELIMITER ;
