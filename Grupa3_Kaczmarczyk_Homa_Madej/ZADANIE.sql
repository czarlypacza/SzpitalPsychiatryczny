-- GROUP BY
SELECT COUNT(patient_id) as 'patients', age FROM patients GROUP BY age;
SELECT COUNT(doctor_id) as 'doctors', ward_id FROM doctors GROUP BY ward_id;
SELECT COUNT(address_id) 'addresses', voivodeship FROM addresses GROUP BY voivodeship;

-- ORDER BY
SELECT first_name, last_name, age FROM patients p ORDER BY p.age DESC; -- malej¹co
SELECT first_name FROM doctors d ORDER BY d.first_name ASC; -- od A do Z(rosn¹co)
SELECT illness_name FROM illnesses i ORDER BY i.illness_name DESC;

-- HAVING
SELECT COUNT(patient_id) as 'patients', age FROM patients p GROUP BY p.age  HAVING COUNT(patient_id) = 2;
SELECT COUNT(doctor_id) as 'doctors', ward_id FROM doctors GROUP BY ward_id HAVING COUNT(doctor_id) > 1;
