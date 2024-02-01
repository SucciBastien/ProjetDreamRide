-- CREATE DATABASE IF NOT EXISTS voitures;

-- USE voitures;

DROP TABLE IF EXISTS manager ; 
CREATE TABLE manager (
idManager INT AUTO_INCREMENT NOT NULL, 
nomManager VARCHAR(50) NOT NULL, 
prenomManager VARCHAR(50) NOT NULL, 
numManager VARCHAR(15) NOT NULL, 
mailManager VARCHAR(50) NOT NULL, 
identifiantManager VARCHAR(20) NOT NULL, 
mdpManager VARCHAR(20) NOT NULL, 
PRIMARY KEY (idManager) ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;  

INSERT INTO `manager` ( `idManager`, `nomManager`, `prenomManager`, `numManager`, `mailManager`, `identifiantManager`, `mdpManager` )
VALUES
(1, "Dupont", "Patrick", "+33612345678", "manager1@gmail.com", "Manager1", "man1");

DROP TABLE IF EXISTS agence ; 
CREATE TABLE agence (
idAgence INT AUTO_INCREMENT NOT NULL,
ville VARCHAR(50) NOT NULL,
codePostal INT NOT NULL,
region VARCHAR(50) NOT NULL,
numAgence VARCHAR(15) NOT NULL,
mailAgence VARCHAR(50) NOT NULL,
ouverture TIME NOT NULL,
fermeture TIME NOT NULL,
idManager INT NOT NULL,
PRIMARY KEY (idAgence) ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `agence` ( `idAgence`, `ville`, `codePostal`, `region`, `numAgence`, `mailAgence`, `ouverture`, `fermeture`, `idManager` )
VALUES
(1, "Saint Pol Sur Mer", 59430, "Hauts de France", "+33312345678", "agencesaintpolsurmer@gmail.com", "08:00:0000", "21:00:0000", 1);

DROP TABLE IF EXISTS marque ; 
CREATE TABLE marque (
idMarque INT AUTO_INCREMENT NOT NULL, 
nomMarque VARCHAR(50) NOT NULL, 
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
(33, "Great Wall" ),
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
(82, "Wuling" );

DROP TABLE IF EXISTS modelVehicule ; 
CREATE TABLE model (
idModel INT AUTO_INCREMENT NOT NULL, 
nomModel VARCHAR(50) NOT NULL,
carburant VARCHAR(50) NOT NULL,
cylindree FLOAT(5), 
nbCylindre INT, 
accel FLOAT(4), 
puiMax INT, 
regPuiMax INT, 
coupleMax INT, 
regCoupleMax INT, 
longueur INT NOT NULL, 
hauteur INT NOT NULL, 
empatement INT, 
volCoffre INT, 
reservoir INT, 
poids FLOAT(6),
anneeModel INT,
idMarque INT NOT NULL, 
PRIMARY KEY (idModel) ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `model` ( `idModel`, `nomModel`, `carburant`, `cylindree`, `nbCylindre`, `accel`, `puiMax`, `regPuiMax`, `coupleMax`, `regCoupleMax`, `longueur`, `hauteur`, `empatement`, `volCoffre`, `reservoir`, `poids`, `anneeModel`, `idMarque` )
VALUES
(1, "206 XBOX 360", "essence", 1360, 4, 12.7, 75, 4000, 160, 3400, 3835, 1432, 2445, 245, 50, 1025, 2006, 61),
(2, "C4 Picasso", "essence", 1560, 4, 12.5, 109, 4000, 240, 1750, 4470, 1680, 2730, 500, 60, 1489, 2010, 19),
(3, "DS3", "essence", 1598, 4, 7.3, 156, 6000, 240, 4000, 3950, 1460, 2460, 285, 50, 1165, 2013, 19),
(4, "ENZO", "essence", 5999, 6, 3.65, 660, 7800, 657, 5500, 4702, 2035, 2650, 350, 110, 1255, 2003, 28),
(5, "GTR35", "essence", 3799, 6, 2.8, 600, 6800, 652, NULL, 4690, 1370, 2780, 315, 74, 1800, 2020, 59),
(6, "GT86", "essence", 1998, 4, 7.6, 200, 7000, 205, 6400, 4240, 1290, 2570, 237, 50, 1200, 2012, 79),
(7, "Proace", "diesel", 1499, 4, NULL, 120, NULL, 300, 2000, 5310, 1900, 3280, 980, 69, 1690, 2021, 79),
(8, "TAYCAN", "electrique", NULL, NULL, 4, 530, 640, NULL, NULL, 4960, 1380, 2900, 491, NULL, 2310, 2020, 63),
(9, "La Voiture Noire", "essence", 7993, 16, 2.4, 1500, 6700, 1600, 2000, 4569, 2038, 2711, 440, 100, 1960, 2021, 12);

DROP TABLE IF EXISTS typeVehicule ; 
CREATE TABLE typeVehicule (
idTypeVehicule INT AUTO_INCREMENT NOT NULL, 
nomTypeVehicule VARCHAR(50) NOT NULL, 
PRIMARY KEY (idTypeVehicule) ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `typeVehicule` ( `idTypeVehicule`, `nomTypeVehicule` )
VALUES
(1, "suv"),
(2, "sport"),
(3, "luxe"),
(4, "coupe"),
(5, "berline"),
(6, "4x4"),
(7, "utilitaire"),
(8, "break"),
(9, "cabriolet");

DROP TABLE IF EXISTS vehicule ; 
CREATE TABLE vehicule (
idVehicule INT AUTO_INCREMENT NOT NULL,
photo VARCHAR(50), 
prix FLOAT NOT NULL, 
siege INT NOT NULL, 
porte INT NOT NULL, 
estManuel BOOL NOT NULL,
clim BOOL,
annee INT, 
idModel INT NOT NULL, 
idTypeVehicule INT NOT NULL, 
PRIMARY KEY (idVehicule) ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `vehicule`( `idVehicule`, `photo`, `prix`, `siege`, `porte`, `estManuel`, `clim`, `annee`, `idModel`, `idTypeVehicule` )
VALUES
(1, "206_XBOX_360", 49.98, 5, 5, 1, 0, 2007, 1, 5),
(2, "proace", 70, 6, 4, 0, 1, 2018, 7, 7),
(3, "taycan", 149.98, 4, 4, 0, 1, 2020, 8, 3);


DROP TABLE IF EXISTS client ; 
CREATE TABLE client (
idClient INT AUTO_INCREMENT NOT NULL, 
nomClient VARCHAR(50) NOT NULL, 
prenomClient VARCHAR(50) NOT NULL, 
numClient VARCHAR(15) NOT NULL, 
mailClient VARCHAR(50) NOT NULL, 
identifiantClient VARCHAR(20) NOT NULL, 
mdpClient VARCHAR(20) NOT NULL, 
PRIMARY KEY (idClient) ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

DROP TABLE IF EXISTS admin ; 
CREATE TABLE admin (
idAdmin INT AUTO_INCREMENT NOT NULL, 
nomAdmin VARCHAR(50) NOT NULL, 
prenomAdmin VARCHAR(50) NOT NULL, 
numAdmin VARCHAR(15) NOT NULL,
mailAdmin VARCHAR(50) NOT NULL, 
identifiantAdmin VARCHAR(20) NOT NULL, 
mdpAdmin VARCHAR(20) NOT NULL, 
PRIMARY KEY (idAdmin) ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;  

DROP TABLE IF EXISTS contenir ; 
CREATE TABLE contenir (
idAgence INT AUTO_INCREMENT NOT NULL, 
idVehicule INT NOT NULL, 
PRIMARY KEY (idAgence,  idVehicule) ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;  

DROP TABLE IF EXISTS reservation ; 
CREATE TABLE reservation (
idVehicule INT AUTO_INCREMENT NOT NULL, 
idClient INT NOT NULL, 
dateDebut DATE NOT NULL,
dateFin DATE NOT NULL, 
PRIMARY KEY (idVehicule,  idClient) ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;  

ALTER TABLE agence ADD CONSTRAINT FK_agence_idManager FOREIGN KEY (idManager) REFERENCES manager (idManager); 
ALTER TABLE vehicule ADD CONSTRAINT FK_vehicule_idModel FOREIGN KEY (idModel) REFERENCES model (idModel); 
ALTER TABLE model ADD CONSTRAINT FK_model_idMarque FOREIGN KEY (idMarque) REFERENCES marque (idMarque); 
ALTER TABLE contenir ADD CONSTRAINT FK_contenir_idAgence FOREIGN KEY (idAgence) REFERENCES agence (idAgence); 
ALTER TABLE contenir ADD CONSTRAINT FK_contenir_idVehicule FOREIGN KEY (idVehicule) REFERENCES vehicule (idVehicule); 
ALTER TABLE reservation ADD CONSTRAINT FK_louer_idVehicule FOREIGN KEY (idVehicule) REFERENCES vehicule (idVehicule); 
ALTER TABLE reservation ADD CONSTRAINT FK_louer_idClient FOREIGN KEY (idClient) REFERENCES client (idClient); 
