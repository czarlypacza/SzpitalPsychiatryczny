DELIMITER //

    CREATE PROCEDURE ExportData(IN tbl VARCHAR(50))
    BEGIN
                CASE
                WHEN tbl = 'addresses' THEN
        SELECT * FROM addresses;
                WHEN tbl = 'doctors' THEN
        SELECT * FROM doctors;
                WHEN tbl = 'illness_patient' THEN
        SELECT * FROM illness_patient;
                WHEN tbl = 'illnesses' THEN
        SELECT * FROM illnesses;
                WHEN tbl = 'patients' THEN
        SELECT * FROM patients;
                WHEN tbl = 'wards' THEN
        SELECT * FROM wards;
    END CASE;
    END //

DELIMITER ;


create
    definer = root@localhost procedure ExportData(IN tbl varchar(50))
BEGIN
    CASE
        WHEN tbl = 'addresses' THEN
            SELECT * FROM addresses;
        WHEN tbl = 'doctors' THEN
            SELECT * FROM doctors;
        WHEN tbl = 'illness_patient' THEN
            SELECT * FROM illness_patient;
        WHEN tbl = 'illnesses' THEN
            SELECT * FROM illnesses;
        WHEN tbl = 'patients' THEN
            SELECT * FROM patients;
        WHEN tbl = 'wards' THEN
            SELECT * FROM wards;
        END CASE;
END;

