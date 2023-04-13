CREATE VIEW [Pacjenci z Podkarpacia] AS
SELECT first_name, last_name, voivodeship FROM patients p 
JOIN addresses a ON p.address_id = a.address_id
WHERE voivodeship = 'Podkarpackie';