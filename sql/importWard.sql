DELIMITER //

CREATE OR REPLACE PROCEDURE importWard(IN name VARCHAR(60))
BEGIN

    SET FOREIGN_KEY_CHECKS=0;
    INSERT INTO wards VALUES (null, name);
    SET FOREIGN_KEY_CHECKS=0;
    
END//

DELIMITER ;