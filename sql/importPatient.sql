DELIMITER //

CREATE OR REPLACE PROCEDURE importPatient(IN first_name varchar(20),
                                           IN last_name varchar(30),
                                           IN age int,
                                           IN phone_number varchar(20),
                                           IN pesel bigint,
                                           IN weight smallint,
                                           IN height smallint,
                                           IN doctor_id bigint,
                                           IN address_id bigint)
BEGIN

    SET FOREIGN_KEY_CHECKS=0;
    INSERT INTO patients VALUES (null, first_name, last_name, age, phone_number, pesel, weight, height, doctor_id, address_id);
    SET FOREIGN_KEY_CHECKS=0;
    
END//

DELIMITER ;