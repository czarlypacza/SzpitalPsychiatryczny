CREATE TABLE patients(
	patient_id int IDENTITY(1,1) primary key,
	first_name varchar(20) not null,
	last_name varchar(30) not null,
	age int,
	phone_number varchar(20),
	pesel bigint,
	weight smallint,
	height smallint,
	doctor_id int,
	address_id int,
	Foreign key (doctor_id) references doctors(doctor_id),
	Foreign key (address_id) references addresses(address_id),
)

insert into patients ( first_name, last_name, age, phone_number, pesel, weight, height, doctor_id, address_id) values ('Kirk', 'Wornum', 63, '791-622-6642', 86097259953, 80, 184, 25, 51);
insert into patients ( first_name, last_name, age, phone_number, pesel, weight, height, doctor_id, address_id) values ('Bradly', 'Rosenbush', 50, '920-420-6987', 83174770222, 95, 178, 23, 12);
insert into patients ( first_name, last_name, age, phone_number, pesel, weight, height, doctor_id, address_id) values ('John', 'Marnane', 70, '591-739-4369', 84318991349, 91, 158, 18, 77);
insert into patients ( first_name, last_name, age, phone_number, pesel, weight, height, doctor_id, address_id) values ('Jerad', 'Scrivin', 48, '868-865-2817', 83787268570, 70, 168, 16, 10);
insert into patients ( first_name, last_name, age, phone_number, pesel, weight, height, doctor_id, address_id) values ( 'Harald', 'Ivashnikov', 66, '579-729-6357', 86900233971, 96, 171, 1, 65);
insert into patients ( first_name, last_name, age, phone_number, pesel, weight, height, doctor_id, address_id) values ('Clemente', 'McTrustey', 25, '112-780-9298', 87504821240, 58, 150, 3, 63);
insert into patients ( first_name, last_name, age, phone_number, pesel, weight, height, doctor_id, address_id) values ('Tanney', 'Kulver', 42, '831-526-4543', 79374124322, 83, 160, 11, 15);
insert into patients ( first_name, last_name, age, phone_number, pesel, weight, height, doctor_id, address_id) values ('Nerti', 'Scothron', 21, '272-709-9617', 88865168327, 86, 179, 3, 36);
insert into patients ( first_name, last_name, age, phone_number, pesel, weight, height, doctor_id, address_id) values ('Bud', 'McKeand', 67, '671-130-1745', 91735282070, 101, 168, 27, 40);
insert into patients ( first_name, last_name, age, phone_number, pesel, weight, height, doctor_id, address_id) values ( 'Barret', 'Fallawe', 35, '482-781-7180', 89489504770, 61, 172, 23, 49);
insert into patients ( first_name, last_name, age, phone_number, pesel, weight, height, doctor_id, address_id) values ( 'Parker', 'Dolley', 44, '499-327-9813', 94934030657, 73, 150, 14, 5);
insert into patients ( first_name, last_name, age, phone_number, pesel, weight, height, doctor_id, address_id) values ( 'Therese', 'MacGiolla', 47, '680-681-9590', 78601662428, 75, 197, 11, 39);
insert into patients ( first_name, last_name, age, phone_number, pesel, weight, height, doctor_id, address_id) values ( 'Starlin', 'Rubertelli', 36, '127-938-6996', 97185372821, 90, 174, 4, 10);
insert into patients ( first_name, last_name, age, phone_number, pesel, weight, height, doctor_id, address_id) values ( 'Sherwood', 'Rowsel', 50, '620-496-9006', 95695068819, 71, 192, 5, 58);
insert into patients ( first_name, last_name, age, phone_number, pesel, weight, height, doctor_id, address_id) values ( 'Sadie', 'Pehrsson', 60, '291-301-9519', 98141643835, 64, 182, 15, 41);
insert into patients ( first_name, last_name, age, phone_number, pesel, weight, height, doctor_id, address_id) values ( 'Miran', 'Kerwood', 64, '845-247-8492', 94384292329, 92, 188, 25, 87);
insert into patients ( first_name, last_name, age, phone_number, pesel, weight, height, doctor_id, address_id) values ( 'Stillmann', 'Righy', 15, '235-231-8603', 80821850989, 87, 176, 26, 67);
insert into patients ( first_name, last_name, age, phone_number, pesel, weight, height, doctor_id, address_id) values ( 'Derron', 'Lamplough', 25, '298-132-7832', 99762132786, 108, 187, 16, 41);
insert into patients ( first_name, last_name, age, phone_number, pesel, weight, height, doctor_id, address_id) values ( 'Lulita', 'Lewsam', 54, '418-850-0188', 80989396262, 74, 188, 18, 27);
insert into patients ( first_name, last_name, age, phone_number, pesel, weight, height, doctor_id, address_id) values ( 'Daryn', 'Giacomo', 37, '823-124-9736', 84278364562, 88, 170, 29, 80);
insert into patients ( first_name, last_name, age, phone_number, pesel, weight, height, doctor_id, address_id) values ( 'Ase', 'Itzkin', 16, '450-801-7353', 87855021983, 55, 164, 13, 44);
insert into patients ( first_name, last_name, age, phone_number, pesel, weight, height, doctor_id, address_id) values ( 'Cal', 'Cloney', 48, '717-789-6339', 98152195041, 59, 176, 10, 56);
insert into patients ( first_name, last_name, age, phone_number, pesel, weight, height, doctor_id, address_id) values ( 'Ephrayim', 'Adrain', 48, '444-390-7019', 80475595670, 56, 152, 3, 47);
insert into patients ( first_name, last_name, age, phone_number, pesel, weight, height, doctor_id, address_id) values ( 'Jamal', 'Gheeorghie', 24, '477-510-0394', 78146832866, 95, 201, 23, 91);
insert into patients ( first_name, last_name, age, phone_number, pesel, weight, height, doctor_id, address_id) values ( 'Pattin', 'Cotty', 47, '203-276-9357', 94013384506, 74, 156, 26, 21);
insert into patients ( first_name, last_name, age, phone_number, pesel, weight, height, doctor_id, address_id) values ( 'Abie', 'Watford', 50, '663-824-5361', 83392825979, 57, 205, 27, 34);
insert into patients ( first_name, last_name, age, phone_number, pesel, weight, height, doctor_id, address_id) values ( 'Norton', 'Cobbe', 17, '647-122-6164', 80763121397, 80, 183, 17, 47);
insert into patients ( first_name, last_name, age, phone_number, pesel, weight, height, doctor_id, address_id) values ( 'Husein', 'Taverner', 26, '293-724-0965', 86115659590, 68, 172, 19, 88);
insert into patients ( first_name, last_name, age, phone_number, pesel, weight, height, doctor_id, address_id) values ( 'Odette', 'Burgis', 54, '175-283-8881', 94658246110, 65, 157, 1, 63);
insert into patients ( first_name, last_name, age, phone_number, pesel, weight, height, doctor_id, address_id) values ( 'Corina', 'Paddefield', 49, '522-111-6626', 84405831926, 70, 163, 10, 38);
insert into patients ( first_name, last_name, age, phone_number, pesel, weight, height, doctor_id, address_id) values ( 'Mady', 'Server', 29, '335-634-5218', 81738455226, 94, 156, 20, 68);
insert into patients ( first_name, last_name, age, phone_number, pesel, weight, height, doctor_id, address_id) values ( 'Putnam', 'Thomann', 30, '473-729-9238', 83779923550, 85, 158, 28, 15);
insert into patients ( first_name, last_name, age, phone_number, pesel, weight, height, doctor_id, address_id) values ( 'Emlen', 'MacGaffey', 17, '616-435-7028', 98160198735, 93, 168, 20, 47);
insert into patients ( first_name, last_name, age, phone_number, pesel, weight, height, doctor_id, address_id) values ( 'Mame', 'Conahy', 47, '351-811-8840', 88187128532, 65, 173, 16, 81);
insert into patients ( first_name, last_name, age, phone_number, pesel, weight, height, doctor_id, address_id) values ( 'Giordano', 'Ferminger', 50, '963-956-3565', 95385980836, 56, 183, 14, 73);
insert into patients ( first_name, last_name, age, phone_number, pesel, weight, height, doctor_id, address_id) values ( 'Vin', 'Greville', 39, '549-464-6252', 86647646804, 102, 175, 3, 83);
insert into patients ( first_name, last_name, age, phone_number, pesel, weight, height, doctor_id, address_id) values ( 'Flss', 'Lantry', 24, '705-357-1986', 98247672761, 96, 195, 7, 69);
insert into patients ( first_name, last_name, age, phone_number, pesel, weight, height, doctor_id, address_id) values ( 'Cleavland', 'Salvage', 38, '240-734-4653', 87069033929, 97, 200, 2, 22);
insert into patients ( first_name, last_name, age, phone_number, pesel, weight, height, doctor_id, address_id) values ( 'Judi', 'Corroyer', 52, '381-852-3086', 82720213115, 65, 202, 6, 53);
insert into patients ( first_name, last_name, age, phone_number, pesel, weight, height, doctor_id, address_id) values ( 'Lindi', 'Jervois', 23, '283-394-1367', 81435654840, 80, 177, 15, 56);
insert into patients ( first_name, last_name, age, phone_number, pesel, weight, height, doctor_id, address_id) values ( 'Jourdain', 'Ballsdon', 62, '360-428-7309', 95506901214, 105, 178, 22, 6);
insert into patients ( first_name, last_name, age, phone_number, pesel, weight, height, doctor_id, address_id) values ( 'Noland', 'Paylie', 53, '965-812-1770', 90951814912, 71, 171, 4, 83);
insert into patients ( first_name, last_name, age, phone_number, pesel, weight, height, doctor_id, address_id) values ( 'Harmonia', 'Abeau', 40, '763-165-7762', 86539259077, 109, 152, 23, 66);
insert into patients ( first_name, last_name, age, phone_number, pesel, weight, height, doctor_id, address_id) values ( 'Rebecca', 'Tomasini', 34, '430-721-3825', 97571615985, 78, 204, 2, 91);
insert into patients ( first_name, last_name, age, phone_number, pesel, weight, height, doctor_id, address_id) values ( 'Lindsey', 'Andrault', 63, '390-477-3393', 93878893158, 90, 163, 25, 95);
insert into patients ( first_name, last_name, age, phone_number, pesel, weight, height, doctor_id, address_id) values ( 'Rebeka', 'Alenikov', 20, '885-227-4577', 78679614006, 97, 199, 6, 72);
insert into patients ( first_name, last_name, age, phone_number, pesel, weight, height, doctor_id, address_id) values ( 'Michal', 'Olligan', 66, '996-307-9709', 95988037838, 107, 157, 15, 10);
insert into patients ( first_name, last_name, age, phone_number, pesel, weight, height, doctor_id, address_id) values ( 'Asher', 'Beahan', 55, '536-873-7982', 82362424074, 83, 196, 19, 61);
insert into patients ( first_name, last_name, age, phone_number, pesel, weight, height, doctor_id, address_id) values ( 'Mycah', 'Cuerda', 33, '213-747-6302', 83048313601, 97, 204, 21, 93);
insert into patients ( first_name, last_name, age, phone_number, pesel, weight, height, doctor_id, address_id) values ( 'Odille', 'Fowls', 50, '858-795-9460', 89391327629, 102, 198, 19, 49);
insert into patients ( first_name, last_name, age, phone_number, pesel, weight, height, doctor_id, address_id) values ( 'Susanne', 'Cantrill', 20, '560-451-2621', 89146136710, 73, 164, 12, 40);
insert into patients ( first_name, last_name, age, phone_number, pesel, weight, height, doctor_id, address_id) values ( 'Garvey', 'Enticknap', 18, '522-118-1049', 94423587591, 88, 191, 8, 28);
insert into patients ( first_name, last_name, age, phone_number, pesel, weight, height, doctor_id, address_id) values ( 'Selinda', 'Aleksich', 18, '654-290-8273', 90994639417, 107, 199, 9, 42);
insert into patients ( first_name, last_name, age, phone_number, pesel, weight, height, doctor_id, address_id) values ( 'Reinald', 'Howgill', 40, '947-681-8322', 96568290617, 68, 153, 9, 12);
insert into patients ( first_name, last_name, age, phone_number, pesel, weight, height, doctor_id, address_id) values ( 'Beauregard', 'Gorman', 26, '802-692-9002', 97729204400, 84, 191, 1, 12);
insert into patients ( first_name, last_name, age, phone_number, pesel, weight, height, doctor_id, address_id) values ( 'Teena', 'Schustl', 53, '214-315-2761', 80301598756, 79, 153, 27, 96);
insert into patients ( first_name, last_name, age, phone_number, pesel, weight, height, doctor_id, address_id) values ( 'Gunther', 'Kaubisch', 28, '985-803-0200', 84434025215, 73, 178, 18, 89);
insert into patients ( first_name, last_name, age, phone_number, pesel, weight, height, doctor_id, address_id) values ( 'Carly', 'Jaye', 67, '127-400-3355', 80208278951, 69, 151, 18, 5);
insert into patients ( first_name, last_name, age, phone_number, pesel, weight, height, doctor_id, address_id) values ( 'Myron', 'Messingham', 21, '263-483-2900', 87667030491, 61, 187, 28, 83);
insert into patients ( first_name, last_name, age, phone_number, pesel, weight, height, doctor_id, address_id) values ( 'Susette', 'Blaschke', 31, '785-985-8306', 95790322965, 75, 182, 14, 13);
insert into patients ( first_name, last_name, age, phone_number, pesel, weight, height, doctor_id, address_id) values ( 'Noelani', 'Luscott', 36, '340-788-1336', 86478111971, 62, 164, 15, 51);
insert into patients ( first_name, last_name, age, phone_number, pesel, weight, height, doctor_id, address_id) values ( 'Sax', 'Riccioppo', 43, '702-181-7847', 95065051080, 64, 198, 21, 54);
insert into patients ( first_name, last_name, age, phone_number, pesel, weight, height, doctor_id, address_id) values ( 'Klarrisa', 'Iddon', 31, '138-709-6531', 81357917912, 107, 164, 25, 9);
insert into patients ( first_name, last_name, age, phone_number, pesel, weight, height, doctor_id, address_id) values ( 'Carmen', 'Burnsell', 33, '883-171-5577', 84618106552, 57, 202, 17, 93);
insert into patients ( first_name, last_name, age, phone_number, pesel, weight, height, doctor_id, address_id) values ( 'Devin', 'Pendleton', 27, '669-767-8103', 80817496896, 79, 195, 26, 28);
insert into patients ( first_name, last_name, age, phone_number, pesel, weight, height, doctor_id, address_id) values ( 'Willdon', 'Edmans', 67, '827-668-6385', 90815306218, 56, 164, 14, 22);
insert into patients ( first_name, last_name, age, phone_number, pesel, weight, height, doctor_id, address_id) values ( 'Erda', 'Bawden', 17, '141-676-7309', 96444302453, 107, 157, 18, 70);
insert into patients ( first_name, last_name, age, phone_number, pesel, weight, height, doctor_id, address_id) values ( 'Lyda', 'Lindenbluth', 40, '306-143-3833', 91799994334, 82, 166, 29, 52);
insert into patients ( first_name, last_name, age, phone_number, pesel, weight, height, doctor_id, address_id) values ( 'Jan', 'Rillstone', 16, '751-375-8695', 80140335372, 60, 205, 9, 20);
insert into patients ( first_name, last_name, age, phone_number, pesel, weight, height, doctor_id, address_id) values ( 'Florri', 'Lambdon', 49, '377-295-6990', 87486042451, 75, 157, 27, 79);
insert into patients ( first_name, last_name, age, phone_number, pesel, weight, height, doctor_id, address_id) values ( 'Esmaria', 'Ffoulkes', 51, '617-200-2458', 88915799399, 98, 202, 28, 19);
insert into patients ( first_name, last_name, age, phone_number, pesel, weight, height, doctor_id, address_id) values ( 'Ado', 'Matt', 52, '871-649-0603', 88370174825, 87, 182, 13, 75);
insert into patients ( first_name, last_name, age, phone_number, pesel, weight, height, doctor_id, address_id) values ( 'Holly', 'Mosco', 32, '796-686-5656', 84083021131, 84, 150, 9, 29);
insert into patients ( first_name, last_name, age, phone_number, pesel, weight, height, doctor_id, address_id) values ( 'Ajay', 'Dyshart', 46, '163-576-0387', 94797501680, 71, 198, 24, 53);
insert into patients ( first_name, last_name, age, phone_number, pesel, weight, height, doctor_id, address_id) values ( 'Rodolphe', 'Armall', 34, '692-810-8379', 84578256460, 84, 168, 18, 66);
insert into patients ( first_name, last_name, age, phone_number, pesel, weight, height, doctor_id, address_id) values ( 'Geoffrey', 'Blaxall', 27, '340-538-0097', 97309819623, 75, 168, 24, 14);
insert into patients ( first_name, last_name, age, phone_number, pesel, weight, height, doctor_id, address_id) values ( 'Blanch', 'Paolo', 63, '200-262-7972', 86749344114, 89, 173, 12, 33);
insert into patients ( first_name, last_name, age, phone_number, pesel, weight, height, doctor_id, address_id) values ( 'Donella', 'Guinness', 57, '988-780-2595', 91819957595, 70, 191, 19, 38);
insert into patients ( first_name, last_name, age, phone_number, pesel, weight, height, doctor_id, address_id) values ( 'Orton', 'Fordyce', 39, '846-929-2964', 99128651245, 107, 187, 7, 4);
insert into patients ( first_name, last_name, age, phone_number, pesel, weight, height, doctor_id, address_id) values ( 'Melva', 'Snarr', 27, '368-899-8837', 86114362740, 59, 177, 26, 34);
insert into patients ( first_name, last_name, age, phone_number, pesel, weight, height, doctor_id, address_id) values ( 'Aviva', 'Troman', 63, '195-757-3807', 94610768762, 65, 176, 30, 3);
insert into patients ( first_name, last_name, age, phone_number, pesel, weight, height, doctor_id, address_id) values ( 'Felicity', 'Sawford', 67, '822-143-6100', 91771125589, 88, 203, 5, 80);
insert into patients ( first_name, last_name, age, phone_number, pesel, weight, height, doctor_id, address_id) values ( 'Michaella', 'Brandone', 39, '447-399-7711', 94880366114, 79, 203, 6, 77);
insert into patients ( first_name, last_name, age, phone_number, pesel, weight, height, doctor_id, address_id) values ( 'Bendix', 'Parramore', 26, '555-144-8762', 99351439228, 57, 152, 9, 28);
insert into patients ( first_name, last_name, age, phone_number, pesel, weight, height, doctor_id, address_id) values ( 'Barn', 'Monery', 36, '758-741-4168', 95644451866, 97, 154, 29, 42);
insert into patients ( first_name, last_name, age, phone_number, pesel, weight, height, doctor_id, address_id) values ( 'Titos', 'Sturgis', 59, '353-834-2080', 96527518481, 102, 173, 23, 50);
insert into patients ( first_name, last_name, age, phone_number, pesel, weight, height, doctor_id, address_id) values ( 'Abbye', 'Everall', 46, '412-588-8144', 94750379308, 73, 176, 14, 40);
insert into patients ( first_name, last_name, age, phone_number, pesel, weight, height, doctor_id, address_id) values ( 'Izaak', 'Littley', 67, '224-242-9958', 86768243719, 67, 183, 15, 79);
insert into patients ( first_name, last_name, age, phone_number, pesel, weight, height, doctor_id, address_id) values ( 'Eldon', 'Gilyatt', 69, '241-973-4466', 82725259795, 88, 198, 10, 22);
insert into patients ( first_name, last_name, age, phone_number, pesel, weight, height, doctor_id, address_id) values ( 'Christoforo', 'Spaunton', 48, '973-172-0204', 96508095995, 94, 190, 20, 38);
insert into patients ( first_name, last_name, age, phone_number, pesel, weight, height, doctor_id, address_id) values ( 'Francois', 'Stiegers', 44, '236-867-4737', 83019275350, 96, 173, 23, 63);
insert into patients ( first_name, last_name, age, phone_number, pesel, weight, height, doctor_id, address_id) values ( 'Otes', 'Stace', 67, '725-399-1090', 78326227521, 96, 180, 12, 49);
insert into patients ( first_name, last_name, age, phone_number, pesel, weight, height, doctor_id, address_id) values ( 'Obidiah', 'Wrigley', 50, '651-479-3008', 78954156503, 90, 191, 15, 3);
insert into patients ( first_name, last_name, age, phone_number, pesel, weight, height, doctor_id, address_id) values ( 'Gerianna', 'Laurence', 16, '562-186-9502', 97189299934, 110, 190, 3, 83);
insert into patients ( first_name, last_name, age, phone_number, pesel, weight, height, doctor_id, address_id) values ( 'Freeman', 'Gruby', 31, '206-358-9483', 95052186398, 84, 203, 8, 8);
insert into patients ( first_name, last_name, age, phone_number, pesel, weight, height, doctor_id, address_id) values ( 'Teresina', 'Bloor', 62, '957-883-3403', 83417947649, 64, 183, 16, 82);
insert into patients ( first_name, last_name, age, phone_number, pesel, weight, height, doctor_id, address_id) values ( 'Sheela', 'McPheat', 22, '719-652-8277', 84016711214, 89, 201, 5, 94);
insert into patients ( first_name, last_name, age, phone_number, pesel, weight, height, doctor_id, address_id) values ( 'Conn', 'McGiffie', 57, '660-455-4692', 88489680517, 79, 160, 13, 16);
insert into patients ( first_name, last_name, age, phone_number, pesel, weight, height, doctor_id, address_id) values ( 'Carly', 'Orring', 53, '881-884-8680', 99713855852, 89, 170, 6, 81);
insert into patients ( first_name, last_name, age, phone_number, pesel, weight, height, doctor_id, address_id) values ( 'Bart', 'Lurriman', 24, '125-367-1819', 84122532591, 104, 200, 4, 55);

