CREATE TABLE addresses(
	address_id int IDENTITY(1,1) Primary key,
	voivodeship varchar(30),
	city varchar(30) not null,
	street varchar(30) not null,
	house_number int not null,
	flat_number int,
	postal_code varchar(15)
)

insert into addresses ( voivodeship, city, street, house_number, flat_number, postal_code) values ('kujawsko-pomorskie', 'Söderhamn', 'Brickson Park', 259, 93, '826 86');
insert into addresses ( voivodeship, city, street, house_number, flat_number, postal_code) values ('podlaskie', 'Richmond', 'Scoville', 210, 33, '7090');
insert into addresses ( voivodeship, city, street, house_number, flat_number, postal_code) values ('zachodniopomorskie', 'Butahai', 'Raven', 142, 92, '7090');
insert into addresses ( voivodeship, city, street, house_number, flat_number, postal_code) values ('kujawsko-pomorskie', 'Pithoro', 'Lakeland', 224, 83, '69060');
insert into addresses ( voivodeship, city, street, house_number, flat_number, postal_code) values ('lubuskie', 'Ar Rumaythīyah', 'Banding', 117, 45, '7090');
insert into addresses ( voivodeship, city, street, house_number, flat_number, postal_code) values ('łódzkie', 'Bjuv', 'Welch', 209, 57, '267 35');
insert into addresses ( voivodeship, city, street, house_number, flat_number, postal_code) values ('zachodniopomorskie', 'Santa Cruz', 'Ludington', 272, 98, '30560');
insert into addresses ( voivodeship, city, street, house_number, flat_number, postal_code) values ('dolnośląskie', 'Puerto Esperanza', 'Toban', 308, 13, '3378');
insert into addresses ( voivodeship, city, street, house_number, flat_number, postal_code) values ('warmińsko-mazurskie', 'Riosucio', 'Sunnyside', 228, 89, '178057');
insert into addresses ( voivodeship, city, street, house_number, flat_number, postal_code) values ( 'pomorskie', 'Xiadu', 'Northport', 259, 40, '7090');
insert into addresses ( voivodeship, city, street, house_number, flat_number, postal_code) values ( 'wielkopolskie', 'Fushan', 'Dennis', 199, 12, '7090');
insert into addresses ( voivodeship, city, street, house_number, flat_number, postal_code) values ( 'dolnośląskie', 'Shifo', 'Clarendon', 204, 44, '7090');
insert into addresses ( voivodeship, city, street, house_number, flat_number, postal_code) values ( 'mazowieckie', 'Aiximan', 'Onsgard', 147, 84, '7090');
insert into addresses ( voivodeship, city, street, house_number, flat_number, postal_code) values ( 'świętokrzyskie', 'Kashiwa', 'Darwin', 189, 73, '861-3923');
insert into addresses ( voivodeship, city, street, house_number, flat_number, postal_code) values ( 'podkarpackie', 'Nedakonice', 'Alpine', 188, 99, '687 38');
insert into addresses ( voivodeship, city, street, house_number, flat_number, postal_code) values ( 'mazowieckie', 'Agrelo', 'Eastlawn', 214, 24, '4730-300');
insert into addresses ( voivodeship, city, street, house_number, flat_number, postal_code) values ( 'dolnośląskie', 'Kihancha', 'Pond', 111, 110, '7090');
insert into addresses ( voivodeship, city, street, house_number, flat_number, postal_code) values ( 'podlaskie', 'Ust’-Dzheguta', 'Dakota', 218, 85, '369312');
insert into addresses ( voivodeship, city, street, house_number, flat_number, postal_code) values ( 'kujawsko-pomorskie', 'Panitian', 'Sugar', 294, 82, '5309');
insert into addresses ( voivodeship, city, street, house_number, flat_number, postal_code) values ( 'śląskie', 'Muliang', 'Jenna', 241, 82, '7090');
insert into addresses ( voivodeship, city, street, house_number, flat_number, postal_code) values ( 'dolnośląskie', 'Bagumbayan', 'Sutteridge', 226, 37, '9810');
insert into addresses ( voivodeship, city, street, house_number, flat_number, postal_code) values ( 'zachodniopomorskie', 'Estrada', 'Forster', 254, 28, '4600-661');
insert into addresses ( voivodeship, city, street, house_number, flat_number, postal_code) values ( 'opolskie', 'Pŭrvomaytsi', 'Oneill', 156, 59, '5139');
insert into addresses ( voivodeship, city, street, house_number, flat_number, postal_code) values ( 'dolnośląskie', 'Caherconlish', '8th', 202, 98, 'F45');
insert into addresses ( voivodeship, city, street, house_number, flat_number, postal_code) values ( 'lubuskie', 'Compiègne', 'Norway Maple', 158, 34, '60204 CEDEX');
insert into addresses ( voivodeship, city, street, house_number, flat_number, postal_code) values ( 'zachodniopomorskie', 'Miaoya', 'Barnett', 197, 16, '7090');
insert into addresses ( voivodeship, city, street, house_number, flat_number, postal_code) values ( 'podkarpackie', 'Ore', 'Hagan', 123, 61, '7090');
insert into addresses ( voivodeship, city, street, house_number, flat_number, postal_code) values ( 'łódzkie', 'Valparaíso', 'Cottonwood', 114, 108, '16880-000');
insert into addresses ( voivodeship, city, street, house_number, flat_number, postal_code) values ( 'dolnośląskie', 'Condado', 'Donald', 168, 110, '7090');
insert into addresses ( voivodeship, city, street, house_number, flat_number, postal_code) values ( 'pomorskie', 'Sundsvall', 'Lakewood', 266, 38, '851 06');
insert into addresses ( voivodeship, city, street, house_number, flat_number, postal_code) values ( 'podkarpackie', 'Canomoy', 'Cardinal', 227, 77, '5411');
insert into addresses ( voivodeship, city, street, house_number, flat_number, postal_code) values ( 'lubuskie', 'Kulykiv', 'Thompson', 257, 17, '7090');
insert into addresses ( voivodeship, city, street, house_number, flat_number, postal_code) values ( 'lubuskie', 'Mendes', 'Jay', 168, 94, '26700-000');
insert into addresses ( voivodeship, city, street, house_number, flat_number, postal_code) values ( 'kujawsko-pomorskie', 'Muleba', 'Hermina', 239, 74, '7090');
insert into addresses ( voivodeship, city, street, house_number, flat_number, postal_code) values ( 'łódzkie', 'Mabasa', 'Melvin', 328, 86, '3707');
insert into addresses ( voivodeship, city, street, house_number, flat_number, postal_code) values ( 'mazowieckie', 'Bonga', 'Doe Crossing', 250, 68, '5504');
insert into addresses ( voivodeship, city, street, house_number, flat_number, postal_code) values ( 'śląskie', 'Ubinskoye', 'Dorton', 245, 109, '632520');
insert into addresses ( voivodeship, city, street, house_number, flat_number, postal_code) values ( 'śląskie', 'Krajan Alastengah', 'Oakridge', 282, 68, '7090');
insert into addresses ( voivodeship, city, street, house_number, flat_number, postal_code) values ( 'śląskie', 'Baita', 'Springs', 220, 91, '7090');
insert into addresses ( voivodeship, city, street, house_number, flat_number, postal_code) values ( 'pomorskie', 'Taocun', 'Park Meadow', 147, 66, '7090');
insert into addresses ( voivodeship, city, street, house_number, flat_number, postal_code) values ( 'podkarpackie', 'Lefengzhen', 'North', 182, 90, '7090');
insert into addresses ( voivodeship, city, street, house_number, flat_number, postal_code) values ( 'lubuskie', 'Västervik', 'Nova', 119, 68, '593 30');
insert into addresses ( voivodeship, city, street, house_number, flat_number, postal_code) values ( 'świętokrzyskie', 'Ramada', 'West', 154, 54, '2620-188');
insert into addresses ( voivodeship, city, street, house_number, flat_number, postal_code) values ( 'lubelskie', 'Bayuin', 'Oakridge', 171, 45, '4324');
insert into addresses ( voivodeship, city, street, house_number, flat_number, postal_code) values ( 'małopolskie', 'Kintinku', 'Schurz', 114, 96, '7090');
insert into addresses ( voivodeship, city, street, house_number, flat_number, postal_code) values ( 'opolskie', 'Đắk Glei', 'Springview', 277, 93, '7090');
insert into addresses ( voivodeship, city, street, house_number, flat_number, postal_code) values ( 'pomorskie', 'Baruunturuun', 'Alpine', 284, 83, '7090');
insert into addresses ( voivodeship, city, street, house_number, flat_number, postal_code) values ( 'mazowieckie', 'Antony', 'Troy', 250, 23, '92169 CEDEX');
insert into addresses ( voivodeship, city, street, house_number, flat_number, postal_code) values ( 'podlaskie', 'Payxambabazar', 'Shasta', 152, 35, '7090');
insert into addresses ( voivodeship, city, street, house_number, flat_number, postal_code) values ( 'opolskie', 'São Miguel do Iguaçu', 'Fair Oaks', 120, 42, '85877-000');
insert into addresses ( voivodeship, city, street, house_number, flat_number, postal_code) values ( 'lubuskie', 'Goz Béïda', 'Acker', 192, 64, '7090');
insert into addresses ( voivodeship, city, street, house_number, flat_number, postal_code) values ( 'łódzkie', 'Alejal', 'Gerald', 290, 100, '9205');
insert into addresses ( voivodeship, city, street, house_number, flat_number, postal_code) values ( 'wielkopolskie', 'Zavetnoye', 'Express', 184, 71, '357014');
insert into addresses ( voivodeship, city, street, house_number, flat_number, postal_code) values ( 'pomorskie', 'Bueng Kum', 'Warbler', 157, 74, '10240');
insert into addresses ( voivodeship, city, street, house_number, flat_number, postal_code) values ( 'łódzkie', 'Naberezhnyye Chelny', 'Carberry', 181, 20, '423555');
insert into addresses ( voivodeship, city, street, house_number, flat_number, postal_code) values ( 'lubelskie', 'Panguna', 'Emmet', 153, 111, '7090');
insert into addresses ( voivodeship, city, street, house_number, flat_number, postal_code) values ( 'podkarpackie', 'Los Cerrillos', 'Lerdahl', 136, 100, '7090');
insert into addresses ( voivodeship, city, street, house_number, flat_number, postal_code) values ( 'mazowieckie', 'Baon', 'Summer Ridge', 214, 41, '2436');
insert into addresses ( voivodeship, city, street, house_number, flat_number, postal_code) values ( 'wielkopolskie', 'Jumpangdua', 'Prairieview', 249, 15, '7090');
insert into addresses ( voivodeship, city, street, house_number, flat_number, postal_code) values ( 'świętokrzyskie', 'Bystrzyca', 'Weeping Birch', 303, 101, '60-852');
insert into addresses ( voivodeship, city, street, house_number, flat_number, postal_code) values ( 'wielkopolskie', 'Gawanan', 'Westport', 290, 89, '7090');
insert into addresses ( voivodeship, city, street, house_number, flat_number, postal_code) values ( 'śląskie', 'Rashaant', 'Pleasure', 323, 59, '7090');
insert into addresses ( voivodeship, city, street, house_number, flat_number, postal_code) values ( 'małopolskie', 'Halayhayin', 'Brown', 325, 80, '4010');
insert into addresses ( voivodeship, city, street, house_number, flat_number, postal_code) values ( 'świętokrzyskie', 'Sanquan', 'Sunbrook', 119, 25, '7090');
insert into addresses ( voivodeship, city, street, house_number, flat_number, postal_code) values ( 'śląskie', 'Izobil’nyy', 'Mitchell', 251, 60, '347674');
insert into addresses ( voivodeship, city, street, house_number, flat_number, postal_code) values ( 'zachodniopomorskie', 'Mariestad', 'Morrow', 326, 44, '542 87');
insert into addresses ( voivodeship, city, street, house_number, flat_number, postal_code) values ( 'lubuskie', 'Toyota', 'Loftsgordon', 268, 41, '952-0317');
insert into addresses ( voivodeship, city, street, house_number, flat_number, postal_code) values ( 'dolnośląskie', 'Jembayan Hitam', 'Jay', 178, 18, '7090');
insert into addresses ( voivodeship, city, street, house_number, flat_number, postal_code) values ( 'lubelskie', 'Kallithéa', 'Northview', 160, 104, '7090');
insert into addresses ( voivodeship, city, street, house_number, flat_number, postal_code) values ( 'podlaskie', 'Živinice', 'Declaration', 189, 63, '7090');
insert into addresses ( voivodeship, city, street, house_number, flat_number, postal_code) values ( 'łódzkie', 'Candelaria', 'South', 236, 101, '111711');
insert into addresses ( voivodeship, city, street, house_number, flat_number, postal_code) values ( 'pomorskie', 'Lasusua', 'Pierstorff', 269, 71, '7090');
insert into addresses ( voivodeship, city, street, house_number, flat_number, postal_code) values ( 'pomorskie', 'Borzytuchom', 'Sheridan', 263, 93, '77-141');
insert into addresses ( voivodeship, city, street, house_number, flat_number, postal_code) values ( 'kujawsko-pomorskie', 'Kertasari', 'Tennyson', 117, 15, '7090');
insert into addresses ( voivodeship, city, street, house_number, flat_number, postal_code) values ( 'podkarpackie', 'Dongfeng', 'Shelley', 256, 64, '7090');
insert into addresses ( voivodeship, city, street, house_number, flat_number, postal_code) values ( 'podlaskie', 'Mandapajaya', 'Corry', 282, 66, '7090');
insert into addresses ( voivodeship, city, street, house_number, flat_number, postal_code) values ( 'opolskie', 'Hedaru', 'Hermina', 274, 38, '7090');
insert into addresses ( voivodeship, city, street, house_number, flat_number, postal_code) values ( 'podkarpackie', 'Maria Cristina', 'Dahle', 186, 100, '9201');
insert into addresses ( voivodeship, city, street, house_number, flat_number, postal_code) values ( 'małopolskie', 'Mapiripán', 'Bay', 202, 96, '943057');
insert into addresses ( voivodeship, city, street, house_number, flat_number, postal_code) values ( 'podkarpackie', '‘Arīqah', 'Marcy', 159, 105, '7090');
insert into addresses ( voivodeship, city, street, house_number, flat_number, postal_code) values ( 'łódzkie', 'Rahama', 'Delladonna', 114, 32, '7090');
insert into addresses ( voivodeship, city, street, house_number, flat_number, postal_code) values ( 'dolnośląskie', 'Hualin', 'Oxford', 245, 11, '7090');
insert into addresses ( voivodeship, city, street, house_number, flat_number, postal_code) values ( 'kujawsko-pomorskie', 'Zheleznogorsk', 'Canary', 215, 78, '307156');
insert into addresses ( voivodeship, city, street, house_number, flat_number, postal_code) values ( 'wielkopolskie', 'Paya Dapur', 'Emmet', 232, 26, '7090');
insert into addresses ( voivodeship, city, street, house_number, flat_number, postal_code) values ( 'lubuskie', 'Norfolk', 'Reinke', 327, 74, '23514');
insert into addresses ( voivodeship, city, street, house_number, flat_number, postal_code) values ( 'śląskie', 'Gaplek', '7th', 175, 48, '7090');
insert into addresses ( voivodeship, city, street, house_number, flat_number, postal_code) values ( 'lubelskie', 'Geldrop', 'Hauk', 293, 41, '5664');
insert into addresses ( voivodeship, city, street, house_number, flat_number, postal_code) values ( 'warmińsko-mazurskie', 'Changping', 'Erie', 260, 30, '7090');
insert into addresses ( voivodeship, city, street, house_number, flat_number, postal_code) values ( 'lubuskie', 'Ust’-Katav', 'Ilene', 300, 17, '456049');
insert into addresses ( voivodeship, city, street, house_number, flat_number, postal_code) values ( 'dolnośląskie', 'Kłomnice', 'Westerfield', 118, 33, '42-270');
insert into addresses ( voivodeship, city, street, house_number, flat_number, postal_code) values ( 'łódzkie', 'Enniskerry', 'Fuller', 169, 54, 'D18');
insert into addresses ( voivodeship, city, street, house_number, flat_number, postal_code) values ( 'lubuskie', 'Kampungbajo', 'Debra', 285, 20, '7090');
insert into addresses ( voivodeship, city, street, house_number, flat_number, postal_code) values ( 'podkarpackie', 'Wang Sam Mo', 'Porter', 296, 22, '41380');
insert into addresses ( voivodeship, city, street, house_number, flat_number, postal_code) values ( 'podkarpackie', 'Fenghuanglu', 'Algoma', 127, 101, '7090');
insert into addresses ( voivodeship, city, street, house_number, flat_number, postal_code) values ( 'śląskie', 'Ribeirópolis', 'Monica', 319, 55, '49530-000');
insert into addresses ( voivodeship, city, street, house_number, flat_number, postal_code) values ( 'podlaskie', 'Haolaishan', 'South', 272, 57, '7090');
insert into addresses ( voivodeship, city, street, house_number, flat_number, postal_code) values ( 'lubuskie', 'Fengshuling', 'Dennis', 225, 28, '7090');
insert into addresses ( voivodeship, city, street, house_number, flat_number, postal_code) values ( 'wielkopolskie', 'Chengxi', 'Dahle', 189, 106, '7090');
insert into addresses ( voivodeship, city, street, house_number, flat_number, postal_code) values ( 'opolskie', 'Shurugwi', 'Hansons', 156, 19, '7090');
insert into addresses ( voivodeship, city, street, house_number, flat_number, postal_code) values ( 'mazowieckie', 'Melrose', 'Alpine', 255, 100, '41380');


