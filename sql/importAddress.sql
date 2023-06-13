DELIMITER //

CREATE OR REPLACE PROCEDURE importAddress(IN voivodeship varchar(30), IN city varchar(30),
                            IN street varchar(30), IN house_number int, IN flat_number int,
                            IN postal_code varchar(15))
BEGIN

    SET FOREIGN_KEY_CHECKS=0;
    INSERT INTO addresses VALUES (null, voivodeship, city, street, house_number, flat_number, postal_code);
    SET FOREIGN_KEY_CHECKS=0;
    
END//

DELIMITER ;