CREATE TABLE doctors(
		doctor_id int Primary key,
		first_name varchar(30) not null,
		last_name varchar(40) not null,
		specialization varchar(150),
		phone_number varchar(15),
		ward_id int,
		foreign key(ward_id) references hospital_wards(ward_id)
	)


insert into doctors (doctor_id, first_name, last_name, specialization, phone_number, ward_id) values (1, 'Alla', 'Hoopper', 'PROVIGIL', '390-165-0329', 19);
insert into doctors (doctor_id, first_name, last_name, specialization, phone_number, ward_id) values (2, 'Bev', 'Barham', 'Molds, Rusts and Smuts, Epicoccum nigrum', '513-249-8833', 19);
insert into doctors (doctor_id, first_name, last_name, specialization, phone_number, ward_id) values (3, 'Joanna', 'Cotta', 'CD DIORSKIN CITY DEFENSE Toxin Shield Pollution UV Advanced Protection with sunscreen Broad Spectrum SPF50', '881-689-2873', 14);
insert into doctors (doctor_id, first_name, last_name, specialization, phone_number, ward_id) values (4, 'Marillin', 'Grayne', 'Mint Sunscreen Lip Moisturizer', '602-198-7415', 18);
insert into doctors (doctor_id, first_name, last_name, specialization, phone_number, ward_id) values (5, 'Brnaba', 'Sandle', 'ISOPROPYL WINTER GREEN RUBBING ALCOHOL', '934-939-0048', 6);
insert into doctors (doctor_id, first_name, last_name, specialization, phone_number, ward_id) values (6, 'Carrissa', 'Middup', 'Aspirin', '697-266-1428', 11);
insert into doctors (doctor_id, first_name, last_name, specialization, phone_number, ward_id) values (7, 'Tripp', 'Enevold', 'Gabapentin', '828-846-4763', 1);
insert into doctors (doctor_id, first_name, last_name, specialization, phone_number, ward_id) values (8, 'Luciano', 'Snary', 'West Cottonwood', '636-205-2150', 13);
insert into doctors (doctor_id, first_name, last_name, specialization, phone_number, ward_id) values (9, 'Cris', 'Sedgefield', 'Artichoke', '665-627-4220', 6);
insert into doctors (doctor_id, first_name, last_name, specialization, phone_number, ward_id) values (10, 'Corny', 'Pykerman', 'Potassium Chloride', '504-654-3109', 6);
insert into doctors (doctor_id, first_name, last_name, specialization, phone_number, ward_id) values (11, 'Anna-diana', 'Janous', 'Neutrogena Healthy Skin Radiance', '207-694-5139', 5);
insert into doctors (doctor_id, first_name, last_name, specialization, phone_number, ward_id) values (12, 'Whitby', 'Brim', 'Welchol', '207-823-7399', 9);
insert into doctors (doctor_id, first_name, last_name, specialization, phone_number, ward_id) values (13, 'Margareta', 'Roeby', 'Ulta', '600-785-7284', 13);
insert into doctors (doctor_id, first_name, last_name, specialization, phone_number, ward_id) values (14, 'Odilia', 'Geale', 'Promethazine Hydrochloride', '474-358-3155', 4);
insert into doctors (doctor_id, first_name, last_name, specialization, phone_number, ward_id) values (15, 'Kendell', 'Castanos', 'Cold and Flu', '366-677-8975', 18);
insert into doctors (doctor_id, first_name, last_name, specialization, phone_number, ward_id) values (16, 'Fiorenze', 'Soppett', 'butalbital, acetaminophen and caffeine', '505-180-7897', 5);
insert into doctors (doctor_id, first_name, last_name, specialization, phone_number, ward_id) values (17, 'Hube', 'Zammitt', 'Fomepizole', '193-192-5923', 9);
insert into doctors (doctor_id, first_name, last_name, specialization, phone_number, ward_id) values (18, 'Reggie', 'Messier', 'Nicardipine Hydrochloride', '202-735-7829', 3);
insert into doctors (doctor_id, first_name, last_name, specialization, phone_number, ward_id) values (19, 'Evania', 'Mellor', 'SERTRALINE', '226-253-9459', 12);
insert into doctors (doctor_id, first_name, last_name, specialization, phone_number, ward_id) values (20, 'Sergio', 'Baldacco', 'Benicar', '782-548-5788', 5);
insert into doctors (doctor_id, first_name, last_name, specialization, phone_number, ward_id) values (21, 'Katrinka', 'Kalisch', 'Methotrexate Sodium', '878-462-5228', 13);
insert into doctors (doctor_id, first_name, last_name, specialization, phone_number, ward_id) values (22, 'Audrie', 'Mapston', 'Menstrual Headache', '509-540-3931', 19);
insert into doctors (doctor_id, first_name, last_name, specialization, phone_number, ward_id) values (23, 'Zaccaria', 'Weavers', 'Value PharmaPain Reliever', '423-767-9709', 15);
insert into doctors (doctor_id, first_name, last_name, specialization, phone_number, ward_id) values (24, 'Sargent', 'Gatland', 'VENLAFAXINE HYDROCHLORIDE', '836-260-8755', 4);
insert into doctors (doctor_id, first_name, last_name, specialization, phone_number, ward_id) values (25, 'Everett', 'Thombleson', 'Personal Care Sensitive Skin Deep Cleaning Astringent', '324-561-9815', 15);
insert into doctors (doctor_id, first_name, last_name, specialization, phone_number, ward_id) values (26, 'Eran', 'Spicer', 'Glaucoma', '410-953-5837', 2);
insert into doctors (doctor_id, first_name, last_name, specialization, phone_number, ward_id) values (27, 'Claude', 'Desouza', 'Cold Spot', '327-303-0503', 14);
insert into doctors (doctor_id, first_name, last_name, specialization, phone_number, ward_id) values (28, 'Pansy', 'Bucklan', 'Tenzer', '460-134-0401', 1);
insert into doctors (doctor_id, first_name, last_name, specialization, phone_number, ward_id) values (29, 'Ainslee', 'Molan', 'Lamotrigine', '231-167-8604', 12);
insert into doctors (doctor_id, first_name, last_name, specialization, phone_number, ward_id) values (30, 'Den', 'Sked', 'Topiramate', '221-991-2198', 18);

