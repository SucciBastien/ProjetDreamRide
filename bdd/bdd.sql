CREATE DATABASE IF NOT EXISTS voiture;

USE voiture;

DROP TABLE IF EXISTS manager ; 
CREATE TABLE manager (
idManager INT AUTO_INCREMENT NOT NULL, 
nomManager VARCHAR(50), 
prenomManager VARCHAR(50), 
numManager VARCHAR(15), 
mailManager VARCHAR(50), 
identifiantManager VARCHAR(20), 
mdpManager VARCHAR(20), 
PRIMARY KEY (idManager) ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;  

INSERT INTO manager ( `idManager`, `nomManager`, `prenomManager`, `numManager`, `mailManager`, `identifiantManager`, `mdpManager` )
VALUES
(1, "Dupont", "Patrick", "+33612345678", "manager1@gmail.com", "Manager1", "man1");

DROP TABLE IF EXISTS agence ; 
CREATE TABLE agence (
idAgence INT AUTO_INCREMENT NOT NULL,
ville VARCHAR(50),
codePostal INT(5),
region VARCHAR(50),
numAgence VARCHAR(15),
mailAgence VARCHAR(50),
ouverture TIME,
fermeture TIME,
idManager INT NOT NULL,
PRIMARY KEY (idAgence) ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `agence` ( `idAgence`, `ville`, `codePostal`, `region`, `numAgence`, `mailAgence`, `ouverture`, `fermeture`, `idManager` )
VALUES
(1, "Saint Pol Sur Mer", 59430, "Hauts de France", "+33312345678", "agencesaintpolsurmer@gmail.com", "08:00:0000", "21:00:0000", 1);

DROP TABLE IF EXISTS marque ; 
CREATE TABLE marque (
idMarque INT AUTO_INCREMENT NOT NULL, 
nomMarque VARCHAR(50), 
PRIMARY KEY (idMarque) ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `marque` ( `idMarque`, `nomMarque` )
VALUES
(1, "Acura" ),
(2, "Alfa Romeo" ),
(3, "Alpine" ),
(4, "Aston Martin" ),
(5, "Audi" ),
(6, "BAIC" ),
(7, "Baojun" ),
(8, "Bentley" ),
(9, "BMW" ),
(10, "Brilliance" ),
(11, "Buick" ),
(12, "Bugatti" ),
(13, "BYD" ),
(14, "Cadillac" ),
(15, "Chang'an" ),
(16, "Chery" ),
(17, "Chevrolet" ),
(18, "Chrysler" ),
(19, "Citroën" ),
(20, "Cupra" ),
(21, "Dacia" ),
(22, "Daihatsu" ),
(23, "Datsun" ),
(24, "Dodge" ),
(25, "Dongfeng" ),
(26, "DS" ),
(27, "FAW" ),
(28, "Ferrari" ),
(29, "Fiat" ),
(30, "Ford" ),
(31, "GAC" ),
(32, "Geely" ),
(33, "Great Wal"l ),
(34, "Honda" ),
(35, "Holden" ),
(36, "Hyundai" ),
(37, "Infiniti" ),
(38, "Iran Khodro" ),
(39, "JAC" ),
(40, "Jaguar" ),
(41, "Jeep" ),
(42, "Kia" ),
(43, "Lada-AvtoVAZ" ),
(44, "Lamborghini" ),
(45, "Lancia" ),
(46, "Land Rover" ),
(47, "Lexus" ),
(48, "Lincoln" ),
(49, "Lifan" ),
(50, "Lotus" ),
(51, "Luxgen" ),
(52, "McLaren" ),
(53, "Maruti" ),
(54, "Maserati" ),
(55, "Mazda" ),
(56, "Mercedes-Benz" ),
(57, "Mini" ),
(58, "Mitsubishi" ),
(59, "Nissan" ),
(60, "Opel / Vauxhall" ),
(61, "Peugeot" ),
(62, "Perodua" ),
(63, "Porsche" ),
(64, "Proton" ),
(65, "Renault" ),
(66, "Rolls-Royce" ),
(67, "SAIC" ),
(68, "Saipa" ),
(69, "Samsung" ),
(70, "Seat" ),
(71, "Škoda" ),
(72, "Soueast" ),
(73, "SsangYong" ),
(74, "Stellantis" ),
(75, "Subaru" ),
(76, "Suzuki" ),
(77, "Tata" ),
(78, "Tesla" ),
(79, "Toyota" ),
(80, "Volkswagen" ),
(81, "Volvo" ),
(82, "Wuling" ),

DROP TABLE IF EXISTS model ; 
CREATE TABLE model (
idModel INT AUTO_INCREMENT NOT NULL, 
nomModel VARCHAR(50),
carburant VARCHAR(50),
cylindree FLOAT(5), 
nbCylindre INT(2), 
accel FLOAT(4), 
puiMax INT(4), 
regPuiMax INT(5), 
coupleMax INT(4), 
regCoupleMax INT(5), 
longueur INT(4), 
hauteur INT(4), 
empatement INT(4), 
volCoffre INT(4), 
reservoir INT(3), 
poids FLOAT(6),
anneeModel INT(4),
idMarque INT NOT NULL, 
PRIMARY KEY (idModel) ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `model` ( `idModel`, `nomModel`, `carburant`, `cylindree`, `nbCylindre`, `accel`, `puiMax`, `regPuiMax`, `coupleMax`, `regCoupleMax`, `longueur`, `hauteur`, `empatement`, `volCoffre`, `reservoir`, `poids`, `anneeModel`, `idMarque` )
VALUES
(1, "206 XBOX 360", "essence", 1360, 4, 12.7, 75, 4000, 160, 3400, 3835, 1432, 2445, 245, 50, 1025, 2006, 1),
(2, "C4 Picasso", "essence", 1560, 4, 12.5, 109, 4000, 240, 1750, 4470, 1680, 2730, 500, 60, 1489, 2010, 2),
(3, "DS3", "essence", 1598, 4, 7.3, 156, 6000, 240, 4000, 3950, 1460, 2460, 285, 50, 1165, 2013, 2),
(4, "ENZO", "essence", 5999, 6, 3.65, 660, 7800, 657, 5500, 4702, 2035, 2650, 350, 110, 1255, 2003, 3),
(5, "GTR35", "essence", 3799, 6, 2.8, 600, 6800, 652, , 4690, 1370, 2780, 315, 74, 1800, 2020, 4),
(6, "GT86", "essence", 1998, 4, 7.6, 200, 7000, 205, 6400, 4240, 1290, 2570, 237, 50, 2012, 5),
(7, "Proace", "diesel", 1499, 4, NULL, 120, NULL, 300, 2000, 5310, 1900, 3280, 980, 69, 2021, 5),
(8, "TAYCAN", "electrique", NULL, NULL, 4, 530, 640, NULL, NULL, 4960, 1380, 2900, 491, NULL, 2020, 6),
(9, "La Voiture Noire", "essence", 7993, 16, 2.4, 1500, 6700, 1600, 2000, 4569, 2038, 2711, 440, 100, 2021, 7);

DROP TABLE IF EXISTS typeVehicule ; 
CREATE TABLE typeVehicule (
idTypeVehicule INT AUTO_INCREMENT NOT NULL, 
nomTypeVehicule VARCHAR(50), 
PRIMARY KEY (idTypeVehicule) ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

DROP TABLE IF EXISTS vehicule ; 
CREATE TABLE vehicule (
idVehicule INT AUTO_INCREMENT NOT NULL,
photo VARCHAR(50), 
prix FLOAT, 
siege INT(1), 
porte INT(1), 
estManuel BOOL,
clim BOOL,
annee INT(4), 
idModel INT NOT NULL, 
idTypeVehicule INT NOT NULL, 
PRIMARY KEY (idVehicule) ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;  

DROP TABLE IF EXISTS client ; 
CREATE TABLE client (
idClient INT AUTO_INCREMENT NOT NULL, 
nomClient VARCHAR(50), 
prenomClient VARCHAR(50), 
numClient VARCHAR(15), 
mailClient VARCHAR(50), 
identifiantClient VARCHAR(20), 
mdpClient VARCHAR(20), 
PRIMARY KEY (idClient) ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

DROP TABLE IF EXISTS admin ; 
CREATE TABLE admin (
idAdmin INT AUTO_INCREMENT NOT NULL, 
nomAdmin VARCHAR(50), 
prenomAdmin VARCHAR(50), 
numAdmin VARCHAR(15),
mailAdmin VARCHAR(50), 
identifiantAdmin VARCHAR(20), 
mdpAdmin VARCHAR(20), 
PRIMARY KEY (idAdmin) ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;  

DROP TABLE IF EXISTS reservation ; 
CREATE TABLE reservation (
idReservation INT AUTO_INCREMENT NOT NULL, 
dateDebut DATETIME, 
dateFin DATETIME, 
PRIMARY KEY (idReservation) ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;  

DROP TABLE IF EXISTS contenir ; 
CREATE TABLE contenir (
idAgence INT AUTO_INCREMENT NOT NULL, 
idVehicule INT NOT NULL, 
PRIMARY KEY (idAgence,  idVehicule) ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;  

DROP TABLE IF EXISTS louer ; 
CREATE TABLE louer (
idVehicule INT AUTO_INCREMENT NOT NULL, 
idClient INT NOT NULL, 
idReservation INT NOT NULL, 
PRIMARY KEY (idVehicule,  idClient,  idReservation) ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;  

ALTER TABLE agence ADD CONSTRAINT FK_agence_idManager FOREIGN KEY (idManager) REFERENCES manager (idManager); 
ALTER TABLE vehicule ADD CONSTRAINT FK_vehicule_idModel FOREIGN KEY (idModel) REFERENCES model (idModel); 
ALTER TABLE vehicule ADD CONSTRAINT FK_vehicule_idTypeVehicule FOREIGN KEY (idTypeVehicule) REFERENCES typeVehicule (idTypeVehicule); 
ALTER TABLE model ADD CONSTRAINT FK_model_idMarque FOREIGN KEY (idMarque) REFERENCES marque (idMarque); 
ALTER TABLE contenir ADD CONSTRAINT FK_contenir_idAgence FOREIGN KEY (idAgence) REFERENCES agence (idAgence); 
ALTER TABLE contenir ADD CONSTRAINT FK_contenir_idVehicule FOREIGN KEY (idVehicule) REFERENCES vehicule (idVehicule); 
ALTER TABLE louer ADD CONSTRAINT FK_louer_idVehicule FOREIGN KEY (idVehicule) REFERENCES vehicule (idVehicule); 
ALTER TABLE louer ADD CONSTRAINT FK_louer_idClient FOREIGN KEY (idClient) REFERENCES client (idClient); 
ALTER TABLE louer ADD CONSTRAINT FK_louer_idReservation FOREIGN KEY (idReservation) REFERENCES reservation (idReservation);
