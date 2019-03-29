-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 29, 2019 at 08:59 AM
-- Server version: 5.7.23
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `blogart`
--

-- --------------------------------------------------------

--
-- Table structure for table `angle`
--

CREATE TABLE `angle` (
  `NumAngl` char(6) NOT NULL,
  `LibAngl` char(60) DEFAULT NULL,
  `NumLang` char(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `angle`
--

INSERT INTO `angle` (`NumAngl`, `LibAngl`, `NumLang`) VALUES
('VINTAG', 'Vintage', 'FRAN01');

-- --------------------------------------------------------

--
-- Table structure for table `article`
--

CREATE TABLE `article` (
  `NumArt` char(10) NOT NULL,
  `DtCreA` date DEFAULT NULL,
  `LibTitrA` text,
  `LibChapoA` text,
  `Parag1A` text,
  `LibSsTitr1` text,
  `Parag2A` text,
  `LibSsTitr2` text,
  `Parag3A` text,
  `LibConclA` text,
  `UrlPhotA` char(255) DEFAULT NULL,
  `LiensExternes` text NOT NULL,
  `NumAngl` char(6) NOT NULL,
  `NumThem` char(6) NOT NULL,
  `NumLang` char(8) NOT NULL,
  `NumMoCle` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `article`
--

INSERT INTO `article` (`NumArt`, `DtCreA`, `LibTitrA`, `LibChapoA`, `Parag1A`, `LibSsTitr1`, `Parag2A`, `LibSsTitr2`, `Parag3A`, `LibConclA`, `UrlPhotA`, `LiensExternes`, `NumAngl`, `NumThem`, `NumLang`, `NumMoCle`) VALUES
('ART011', '2019-02-24', 'Oubliez votre âge au salon du vintage !', 'Dans le hangar 14, au milieu de la modernité du quai des marques, le Salon du Vintage a ouvert ses portes le 9 et 10 mars dernier. Ce ralliement des époques invite à (re)découvrir des objets du quotidien, de l’ameublement à l’automobile, en passant par la mode ou la musique. Pourquoi un tel engouement ? Eléments de réponse ci-dessous.', 'Difficile de ne pas prendre “un coup de vieux” quand un enfant vous demande interloqué, à quoi ressemble une disquette ? Pas de panique, vous avez enfin l’occasion de retrouver les objets si chers à votre enfance, ou de découvrir celle de vos parents !\r\n<br> <br>\r\nPour cette nouvelle édition, le salon vous accueille : collectionneurs, nostalgiques, ou simplement désireux de découvrir les tendances d\'antan. Avec ses 3000m² de vêtements, vous trouverez votre bonheur. Tenues de grands couturiers comme Saint Laurent ou Dior, bons plans dans l\'espace Frip Chic, mais aussi des meubles, objets de collection ou vinyles se partagent les allées avec la foule. Pas de moderne, tous ces objets datent des années 50 aux années 80.\r\n<br> <br>\r\nCette année, le salon met en avant les objets iconiques. Le minitel, le Rubik’s cube, les consoles Atari, les chaises Panton ou encore le walkman ne vous rappellent-ils pas des souvenirs ? Ils sont entrés dans les moeurs grâce à leur design innovant, leur concept révolutionnaire ou simplement leur utilité. Le salon du vintage vous les a retrouvés pour une exposition hommage ! Vous avez donc le plaisir de revivre les années 70 avec les lignes space, les couleurs flashy des années 80 et le formalisme des années 90.\r\n<br><br>\r\nCe salon n\'est pas uniquement un lieu de vente, vous y retrouvez de nombreux stands spéciaux. Les tatoueurs et \"barbershop\", les salons de coiffure, de maquillage vintage et les habilleurs sont prêts à vous téléporter dans le temps. Pendant ce temps, les enfants ont accès à un espace \"rétrogaming\" leur permettant de découvrir les jeux vidéo à l\'époque de leur parents.', 'Le rétro, pas seulement une tendance.', 'La tendance rétro est partout : que ce soit dans nos maisons ou même dans notre garde-robe, elle ne nous quitte plus. Issu des années 60, ce courant connaît un succès fulgurant depuis ces dernières années. D’où vient cette popularité ? La génération Y, située entre les années 1980 et 2000, est particulièrement touchée par cette tendance. \r\n<br><br>\r\nEn effet, notre monde moderne en plein accroissement berce les millenials. Par manque de repères, cette génération se rassure en se rattachant au passé. Autrefois abandonné pour des raisons d’amélioration vers un monde moderne, le vintage est aujourd’hui sollicité et idéalisé. Les initiés s’approprient le look du passé, pour le remettre au goût du jour.\r\n<br><br>\r\nLe vintage permet une forme d’indépendance face à l’industrie de la mode. Avec les réseaux sociaux, l’uniformisation est un phénomène courant. Les vêtements de seconde-main encouragent donc l’individualité. Chaque individu devient son propre designer de tenues personnalisées. Cette génération trouve alors à travers cette tendance un moyen de se distinguer et de s’affirmer dans une société trop standardisée.', 'C’était mieux avant !', 'Le vintage développe une certaine fascination pour les objets du passé, que cela soit en ameublement, automobile ou encore mode et beauté.  Reprendre les succès de chaque décennie et les transposer au goût du jour permet de se réapproprier une époque face à un futur incertain. \r\n<br><br>\r\nQui n’a jamais économisé en achetant les meubles du voisin au vide-grenier, trouvé une pépite dans une brocante ou une pièce rare dans une friperie ? Le vintage est moins cher et se démocratise à travers les générations.\r\n<br><br>\r\nL’avantage de consommer vintage est de pouvoir échanger, récupérer et réutiliser des objets. Cette vieille console que quelqu’un jetterait à la déchetterie ferait certainement le bonheur d’un collectionneur, attirait l’attention d’un enfant ou rendrait des parents nostalgiques. La réparation et la restauration appartiennent aussi à l’économie du vintage. Un coup de peinture sur le meuble de grand-père et il est comme neuf ! Une visite chez le garagiste et votre 2 CV repart comme sur des roulettes !\r\n<br><br>\r\nEn plus d’être économique, le vintage est écologique. En effet, la réparation et la réutilisation permet de donner une seconde vie à des objets. L’achat est plus durable et s’oppose aux problèmes de consommation moderne tels que l’obsolescence programmée.', 'Le vintage suscite un véritable engouement au fur et à mesure des années et restera un phénomène intergénérationnel indémodable. Dans un monde ultra-normalisé, le vintage permet aux gens de se reconnecter avec le passé et de se démarquer en portant des pièces uniques.\r\n<br><br>\r\nAlors n\'oubliez pas de garder vos vieux vêtements ou les meubles qui vous semblent démodés, ils feront peut-être le bonheur de quelqu’un dans quelques années. Comme le dit Laurent Journo, créateur du salon du vintage, “Les créations d’aujourd’hui sont le vintage de demain”.', 'https://salonduvintage.com/up/assets/photos/34.jpg', '<a href=\" https://salonduvintage.com/\r\n\">En savoir plus sur l\'évènement</a><br>\r\n<a href=\"https://www.researchgate.net/publication/263469162\">Etude sociétale sur le vintage (anglais)</a>\r\n', 'QR5P09', '76D1', 'FRAN01', 0),
('ART021', '2019-03-26', 'Mobilité urbaine : regardez dans le rétro !', 'Passionnés de véhicules rétros, amoureux de Bordeaux, venez la découvrir ou redécouvrir sous un angle inédit. Emportez le vintage dans la voiture pour une virée au centre-ville. Cheveux au vent, roulez à travers les monuments et voyagez hors du temps.', 'Adopter un style vintage, c’est bien, se déplacer vintage c’est mieux ! A cette occasion, Bordeaux ne manque pas de ressources en ce qui concerne la mobilité.\r\n<br><br>\r\nRevivez des souvenirs d’enfance nostalgique, avec la visite en 2CV. Le conducteur mais aussi votre guide reste à votre disposition. Une entreprise propose des visites nocturnes dans un vieux taxi anglais pour permettre aux passionnés mais aussi aux anglophones nostalgiques de passer un bon moment. Découvrez la ville de Bordeaux dans l’esprit des années 60 !\r\n<br><br> \r\nVous préférez l’exotisme ? Vous allez adorer la balade en tuk tuk, véhicule écologique importé de Thaïlande. Cette visite des plus authentiques vous transportera dans un autre univers. Si aucune de ces propositions ne vous convient, vous avez toujours la possibilité de monter à bord du petit train, attraction incontournable pour les touristes.\r\n<br><br>\r\nMarre des guides et besoin de plus d’autonomie ? La traditionnelle location de véhicule peut vous convenir, mais n’est pas pratique et abordable pour tous. Une solution ? Louez un <a href=\"https://www.getyugo.com/bordeaux\">“Yego”</a>, ces petits scooters bleus en libre service. Avec cette petite touche de vintage, vous pourrez vous déplacer partout afin de découvrir la ville à votre façon et pourquoi pas devenir votre propre guide touristique.', 'Acheter pour mieux y gagner ?', 'Bordeaux ne manque pas de propositions pour rouler vintage. Serait-il plus judicieux de disposer de son propre véhicule ? Tout dépend de l’objectif de votre achat. Collectionneurs et restaurateurs, une multitude de garages sur Bordeaux et ses alentours sont à votre disposition pour vous aider à dénicher la perle de vos rêves ! N’hésitez pas à solliciter les particuliers sur des plateformes de vente bien connues de tous. Une passion commune peut aboutir à de belles rencontres !\r\n<br><br>\r\nEn effet, les amoureux du rétro partagent leur intérêt lors d’événements. Le dernier dimanche du mois, un rassemblement gratuit et accessible est organisé à la base sous-marine. Les véhicules sont exposés pour le plus grand bonheur de leur propriétaire, comme des plus curieux.\r\n<br><br>\r\nMention spéciale au garage moderne, situé dans le quartier de Bacalan, juste derrière la Cité du Vin. Ce garage associatif permet, après paiement d’une adhésion, d’être accompagné par des mécaniciens expérimentés. Mettez les mains dans le cambouis pour réparer votre voiture à moindre frais. En bonus, profitez d’un repas lorsque la cantine associative est ouverte.\r\n<br><br>\r\nPosséder une voiture vintage est synonyme de nostalgie, de passion et rencontres mais peut revenir très cher, surtout si vous souhaitez acquérir une voiture de collection. A Bordeaux, la location peut être une solution. Ce n’est pas l’offre qui manque, du scooter en libre service aux voitures de collections, il y en a pour tous les budgets. Plus besoin de se soucier de l’entretien, de l’assurance, ou du parking sur le long terme. Le plaisir est instantané le temps d’une virée !', 'Un moteur du tourisme.', '5ème destination touristique française, Bordeaux regorge de monuments à visiter. Il y en a tellement, que cela en deviendrait presque décourageant. La solution d’une visite originale, authentique se trouve dans les transports vintages ! Plus classes que le tram ou le V3 et moins physique que la randonnée, vous avez remarqué que ce ne sont pas les moyens qui manquent à Bordeaux.\r\n<br><br>\r\nDevenez familier avec le charme à la française à bord d’une 2CV, d’un petit train, partez à l’aventure avec un tuk tuk ou dans un side-car. La plupart des prestations incluent un conducteur-guide personnel. Ce dernier vous présentera les lieux phares de la Belle Endormie. S’échapper de l’heure de pointe dans les transports en communs ou de la crainte des vélos, ces balades vous immergent dans le passé, le temps de quelques heures.\r\n<br><br>\r\nLes transports vintages permettent de contourner le tourisme de masse, où la foule se bouscule dans les bus touristiques et des groupes se forment devant les monuments. Les visites sont plus personnalisées et les guides lient une relation privilégiée avec vous, pour que vous reteniez le meilleur de Bordeaux puis repartir sur les chapeaux de roues !', 'Le vintage occupe une certaine place dans la mobilité bordelaise. Exhibez vos plus beaux modèles de collection, rencontrez des passionnés, apprenez à réparer. Prenez le temps de jouer aux touristes et appréciez le charme des balades, guidées ou non. Tous les moyens sont bons pour visiter notre cher patrimoine classé à l’UNESCO. Sortez votre 2CV et laissez briller le soleil de Bordeaux dans le rétro !', 'http://buick48.unblog.fr/files/2007/04/buick1m.jpg', '<a href=\"https://www.bordeaux-tourisme.com/offre/recherche/visites-et-excursions/10/~visite-de-la-ville~~~/(page)/1\">Balades et visites à Bordeaux</a><br>\r\n<a href=\"https://www.voyage-insolite.com/2016/10/11/top-10-de-linsolite-a-bordeaux/\">Top 10 des activités insolites à Bordeaux</a>', 'QR5P09', 'F67A', 'FRAN01', 0);

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(100) NOT NULL,
  `adresse email` varchar(255) NOT NULL,
  `commentaires` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `langue`
--

CREATE TABLE `langue` (
  `NumLang` char(8) NOT NULL,
  `Lib1Lang` char(25) DEFAULT NULL,
  `Lib2Lang` char(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `langue`
--

INSERT INTO `langue` (`NumLang`, `Lib1Lang`, `Lib2Lang`) VALUES
('FRAN01', 'Français(e)', 'Langue française');

-- --------------------------------------------------------

--
-- Table structure for table `motcle`
--

CREATE TABLE `motcle` (
  `NumMoCle` char(8) NOT NULL,
  `LibMoCle` char(30) DEFAULT NULL,
  `NumLang` char(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `motcle`
--

INSERT INTO `motcle` (`NumMoCle`, `LibMoCle`, `NumLang`) VALUES
('1', 'vintage', 'FRAN01'),
('10', 'véhicule', 'FRAN01'),
('11', 'transport', 'FRAN01'),
('12', 'mobilité', 'FRAN01'),
('13', 'rétro', 'FRAN01'),
('14', 'visite', 'FRAN01'),
('15', 'tourisme', 'FRAN01'),
('16', 'authenticité', 'FRAN01'),
('17', 'conducteur', 'FRAN01'),
('18', 'achat', 'FRAN01'),
('19', 'location', 'FRAN01'),
('2', 'évènement', 'FRAN01'),
('3', 'salon', 'FRAN01'),
('4', 'exposition', 'FRAN01'),
('5', 'collection', 'FRAN01'),
('6', 'génération', 'FRAN01'),
('7', 'seconde-main', 'FRAN01'),
('8', 'recyclage', 'FRAN01'),
('9', 'récupération', 'FRAN01');

-- --------------------------------------------------------

--
-- Table structure for table `motclearticle`
--

CREATE TABLE `motclearticle` (
  `NumArt` char(10) NOT NULL,
  `NumMoCle` char(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `motclearticle`
--

INSERT INTO `motclearticle` (`NumArt`, `NumMoCle`) VALUES
('ART021', '10'),
('ART021', '11'),
('ART021', '14'),
('ART021', '15'),
('ART021', '16'),
('ART011', '3'),
('ART011', '4'),
('ART011', '5'),
('ART011', '6'),
('ART011', '7'),
('ART011', '8');

-- --------------------------------------------------------

--
-- Table structure for table `thematique`
--

CREATE TABLE `thematique` (
  `NumThem` char(6) NOT NULL,
  `LibThem` char(60) DEFAULT NULL,
  `NumLang` char(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `thematique`
--

INSERT INTO `thematique` (`NumThem`, `LibThem`, `NumLang`) VALUES
('2ZQ4', 'L\'événement', 'FRAN01'),
('76D1', 'L\'acteur-clé', 'FRAN01'),
('CH91', 'Le mouvement émergeant', 'FRAN01'),
('F67A', 'L\'insolite / le clin d\'oeil', 'FRAN01');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `Login` char(30) NOT NULL,
  `Pass` char(15) NOT NULL,
  `LastName` char(30) DEFAULT NULL,
  `FirstName` char(30) DEFAULT NULL,
  `EMail` char(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`Login`, `Pass`, `LastName`, `FirstName`, `EMail`) VALUES
('admin', 'admin', 'admin', 'admin', 'admin.retrobordeaux@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `angle`
--
ALTER TABLE `angle`
  ADD PRIMARY KEY (`NumAngl`),
  ADD KEY `ASSOCIATION_5_FK` (`NumAngl`),
  ADD KEY `FK_ASSOCIATION_6` (`NumLang`);

--
-- Indexes for table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`NumArt`),
  ADD KEY `ASSOCIATION_7_FK` (`NumArt`),
  ADD KEY `FK_ASSOCIATION_1` (`NumAngl`),
  ADD KEY `FK_ASSOCIATION_2` (`NumThem`),
  ADD KEY `FK_ASSOCIATION_3` (`NumLang`);

--
-- Indexes for table `langue`
--
ALTER TABLE `langue`
  ADD PRIMARY KEY (`NumLang`),
  ADD KEY `ASSOCIATION_2_FK` (`NumLang`);

--
-- Indexes for table `motcle`
--
ALTER TABLE `motcle`
  ADD PRIMARY KEY (`NumMoCle`),
  ADD KEY `ASSOCIATION_8_FK` (`NumMoCle`),
  ADD KEY `FK_ASSOCIATION_5` (`NumLang`);

--
-- Indexes for table `motclearticle`
--
ALTER TABLE `motclearticle`
  ADD PRIMARY KEY (`NumArt`,`NumMoCle`),
  ADD KEY `MOTCLEARTICLE_FK` (`NumArt`),
  ADD KEY `MOTCLEARTICLE2_FK` (`NumMoCle`);

--
-- Indexes for table `thematique`
--
ALTER TABLE `thematique`
  ADD PRIMARY KEY (`NumThem`),
  ADD KEY `ASSOCIATION_6_FK` (`NumThem`),
  ADD KEY `FK_ASSOCIATION_4` (`NumLang`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`Login`,`Pass`),
  ADD KEY `ASSOCIATION_4_FK` (`Login`,`Pass`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `angle`
--
ALTER TABLE `angle`
  ADD CONSTRAINT `FK_ASSOCIATION_6` FOREIGN KEY (`NumLang`) REFERENCES `langue` (`NumLang`);

--
-- Constraints for table `article`
--
ALTER TABLE `article`
  ADD CONSTRAINT `FK_ASSOCIATION_1` FOREIGN KEY (`NumAngl`) REFERENCES `angle` (`NumAngl`),
  ADD CONSTRAINT `FK_ASSOCIATION_2` FOREIGN KEY (`NumThem`) REFERENCES `thematique` (`NumThem`),
  ADD CONSTRAINT `FK_ASSOCIATION_3` FOREIGN KEY (`NumLang`) REFERENCES `langue` (`NumLang`);

--
-- Constraints for table `motcle`
--
ALTER TABLE `motcle`
  ADD CONSTRAINT `FK_ASSOCIATION_5` FOREIGN KEY (`NumLang`) REFERENCES `langue` (`NumLang`);

--
-- Constraints for table `motclearticle`
--
ALTER TABLE `motclearticle`
  ADD CONSTRAINT `FK_MotCleArt1` FOREIGN KEY (`NumMoCle`) REFERENCES `motcle` (`NumMoCle`),
  ADD CONSTRAINT `FK_MotCleArt2` FOREIGN KEY (`NumArt`) REFERENCES `article` (`NumArt`);

--
-- Constraints for table `thematique`
--
ALTER TABLE `thematique`
  ADD CONSTRAINT `FK_ASSOCIATION_4` FOREIGN KEY (`NumLang`) REFERENCES `langue` (`NumLang`);
