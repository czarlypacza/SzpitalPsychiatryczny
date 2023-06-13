DELIMITER //

CREATE OR REPLACE PROCEDURE importIllness(IN in_name VARCHAR(60), IN in_description VARCHAR(150))
BEGIN

    SET FOREIGN_KEY_CHECKS=0;
    INSERT INTO illnesses VALUES (null, in_name, in_description);
    SET FOREIGN_KEY_CHECKS=0;
    
END//

DELIMITER ;