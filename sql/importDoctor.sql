DELIMITER //

CREATE OR REPLACE PROCEDURE importDoctor(IN first_name varchar(30), IN last_name varchar(40), IN specialization varchar(150), IN phone_number varchar(15), IN ward_name varchar(50))
BEGIN

    SET FOREIGN_KEY_CHECKS=0;
    INSERT INTO doctors VALUES (null, first_name, last_name, specialization, phone_number, ward_name);
    SET FOREIGN_KEY_CHECKS=0;
    
END//

DELIMITER ;