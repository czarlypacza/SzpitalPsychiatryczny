CREATE VIEW [patient_wards] AS
SELECT p.first_name, p.last_name, ward_name FROM patients p 
JOIN doctors d ON d.doctor_id = p.doctor_id
JOIN hospital_wards hw ON hw.ward_id = d.ward_id;