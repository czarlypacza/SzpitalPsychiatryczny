SELECT first_name FROM patients p 
JOIN patients_illnesses pi ON pi.patient_id = p.patient_id
JOIN illnesses i ON pi.illness_id = i.illness_id 
WHERE i.illness_name = 'Albuterol Sulfate';