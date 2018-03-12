-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 12, 2018 at 04:12 PM
-- Server version: 5.6.38
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `fillrouge`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id_blog` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `user_id` int(3) NOT NULL,
  `content` text NOT NULL,
  `date_updated` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id_blog`, `title`, `user_id`, `content`, `date_updated`, `image`) VALUES
(1, 'PRÉSENTATION', 2, 'Le Quartier “Notre-Dame-aux-Neiges”, selon son nom médiéval, est situé entre la rue Royale, la petite ceinture et la rue de Louvain y compris le triangle formé par la rue de Louvain, la rue de la Presse et la rue Ducale. Aujourd’hui, on l’appelle aussi parce que, lors de sa reconstruction à la fin du XIXème siècle, plusieurs de ses rues, autour de la place de la Liberté, portent le nom des grandes libertés constitutionnelles : Association, Enseignement, Presse, Cultes. Le Comité de Quartier s’occupe de cette zone ainsi que de toute situation ou tout projet avoisinant susceptible d’avoir un impact sur le Quartier. Le Comité de Quartier a pour buts, en dehors de tout esprit de lucre, de promouvoir la qualité de vie dans le quartier, de favoriser la rencontre entre ses habitants et la convivialité en général. Le Comité est particulièrement attaché à renforcer les liens sociaux et les solidarités intergénérationnelles et inter-culturelles. Le Comité organise des fêtes de quartier, par exemple: la Fête des voisins, le Drink de nouvel an, des fêtes thématiques... Le Comité ne défend pas des intérêts catégoriels. Il s’inscrit dans une vision d’ensemble du quartier qui combine harmonieusement les fonctions d’habitat et d’activités professionnelles, scolaires, culturelles, commerciales et utilitaires (notamment par l’implantation d’un plus grand nombre de commerces de proximité ouverts en semaine et le week-end). Le Comité se préoccupe entre autres de la protection du patrimoine, de l’urbanisme, de l’environnement, de la \"verdurisation\", de la propreté, de la circulation, du bruit et de la sécurité. Face aux projets immobiliers, l’association a notamment pour préoccupation d’éviter l’exclusion des habitants moins fortunés et de créer des logements de qualité accessibles aux habitants et aux familles à revenus modestes ou moyens. ', '2018-03-07 06:00:00', 'pic01.jpg'),
(2, 'LE PATRIMOINE, ÇA NOUS REGARDE', 21, 'Signez et faites signez la pétition contre la suppression de l’avis conforme (contraignant) de la Commission Royale des Monuments et Sites lorsqu’un projet immobilier concerne un immeuble classé ou figurant sur la liste de sauvegarde du Patrimoine. Toutes les signatures sont bienvenues. Cependant, si 5.000 signatures de personnes domiciliées dans la Région de Bruxelles sont atteintes, le collectif à l’origine de cette pétition pourra prendre la parole devant le Parlement bruxellois qui, rappelons-le, est appelé à voter au sujet de la réforme du CoBAT (Code Bruxellois pour l’Aménagement du Territoire) voulue par le gouvernement. Actuellement, les articles de cette réforme sont examinés en commission parlementaires. Mais il faut aller vite.\r\n', '2018-03-07 07:00:00', 'pic02.jpg'),
(3, 'DURABLE,... VOUS AVEZ DIT DURABLE!', 2, 'Beaucoup d’habitants de notre quartier restent opposés à ce projet de démolition et de reconstruction d’un bâtiment plus élevé et plus large. Et trois habitants ont introduit un recours au Conseil d’Etat contre le permis d’urbanisme (non suspensif). Le chantier est actuellement consacré aux travaux de désamiantage car l’inventaire de l’amiante (ou asbeste) n’était pas complet ! La démolition est annoncée pour la mi-avril. Elle va entraîner de nombreuses nuisances directes alentours et le dégagement de gaz à effet de serre pendant des années. Cela risque d’être aussi le cas pour les “tours iconiques” que nous annonce le Plan Régional de Développement “Durable”. Durable, vraiment?', '2018-03-07 08:00:00', 'pic03.jpg'),
(4, 'Le Salon des ateliers Mommen est menacé', 14, 'Le salon Mommen, qui fait partie de la cité d\'artistes du même nom, (rue de la charité à Saint Josse), est menacé.\r\nIl s\'agit de la plus ancienne cité d\'artistes de Bruxelles.\r\nLe salon est le lieu de \"diffusion\" des ateliers qui permet aux artistes d\'exposer et d\'organiser des spectacles.\r\nLa Régie communale autonome de St Josse (RCA) a décidé unilatéralement de mettre au fin au bail du salon. Le but? Diviser le lieu pour engranger de nouveaux loyers (date prévue : le 28 février 2018).\r\n\r\nSignez la pétition : https://www.change.org/p/emir-kir-mohamed-azzouzi-sauvegard…\r\n\r\nEt allez-y faire un tour aux portes ouvertes le week-end des 18 et 19 novembre.', '2018-03-09 03:00:00', 'bg-01.jpg'),
(5, 'Platform Pentagone', 22, 'Attention Danger de Néo-Bruxellisation !!\r\nRejoignez-nous demain vendredi, au parlement bruxellois, où les députés débattront de la réforme\" du CoBAT (Code Bruxellois de l\'Aménagement du Territoire). Une réforme qui a tout d\'une régression vers la grande époque de la Bruxellisation! \r\nDans un article paru en mars 2016, Rudi Vervoort déclare que les réformes en projet ont pour objectif de « répondre aux attentes du secteur immobilier qui éprouve de grandes difficultés à développer des projets importants vu la longueur et la complexité des procédures urbanistiques et environnementales»\r\nTapis rouge pour les promoteurs !\r\n\r\nLe débat et le vote en assemblée plénière sont fixés à demain vendredi 13. Le débat aura lieu le matin à partir de 9h30’ et le vote à partir de 16h - 16h 30’.\r\nLes séances du Parlement sont ouvertes au public : entrée par la rue du Lombard, n° 69 avec sa carte d’identité.\r\n\r\nSi vous pouvez être disponibles, n\'hésitez pas à nous rejoindre : il y va de notre cadre de vie, il y va du droit à la Ville, il y va de notre Démocratie !\r\n\r\nLettre ouverte signée par Inter-Environnement Bruxelles (IEB), l\' Arau Asbl et le BRAL, adressée à nos parlementaires.\r\n\r\nQue devient notre démocratie urbaine ?\r\nLettre ouverte aux député-e-s de la Région de Bruxelles-Capitale\r\n\r\nMesdames, Messieurs les député-e-s de la Région bruxelloise, appelé-e-s à voter sur le projet de réforme du CoBAT,\r\n\r\nD’où venons-nous ?\r\nAprès des décennies de «bruxellisation» de notre ville sous administration centrale de l’État belge, la Région de Bruxelles-Capitale a pu créer une réglementation urbanistique et environnementale qui a suscité un certain consensus. Le contrat urbain bruxellois repose largement sur une participation de ses habitants au travers d’un réseau associatif d’une richesse exceptionnelle par rapport à d’autres grandes villes européennes.', '2018-03-09 05:00:00', 'pic07.jpg'),
(7, 'Les journées du patrimoine dans le quartier ', 14, 'Le quartier Notre-Dame-aux-Neiges : une oasis de verdure\r\n16/09/2017 - 17/09/2017\r\n\r\nhttps://visit.brussels/…/Le-quartier-Notre-Dame-aux-Neiges-…\r\n\r\n\"Le quartier Notre-Dame-aux-Neiges a su préserver son caractère résidentiel de la fin du XIXe siècle et plusieurs espaces verts qui constituent autant d’oasis de verdure pour ses habitants et pour les passants. Au départ de la place des Barricades, cette promenade vous emmènera à la place de la Liberté, devant la cour intérieure du Palais de la Nation, à la place du Congrès, pour terminer au jardin de René Pechère, tapi dans l’ombre de la haute Tour des Finances. Tant de lieux préservés par la Région de Bruxelles-Capitale et entourés par un patrimoine historique et architectural de qualité…\"\r\n\r\n ', '2018-03-09 04:00:00', 'pic8.jpg'),
(8, 'Grave incident ', 21, 'Grave incident samedi 20 mai provoqué sur le chantier de démolition lourde rue du Nord, chantier conduit (très mal) par l\'entreprise De Meuter en faveur de Ghelamco (vous savez, ceux qui ont obtenu le marché du Stade), qui veut reconstruire un immeuble plus haut et plus large dans les mêmes matériaux.\r\nLes riverains et le comité de quartier ont diffusé un communiqué de presse et interpellent les entreprises et les autorités pour arrêter le chantier.', '2018-03-11 02:00:00', '18582386_373412649720452_208099975436001161_n.jpg'),
(9, 'Happy days when Spring starts', 14, 'Spring is one of the four conventional temperate seasons, following winter and preceding summer. There are various technical definitions of spring, but local usage of the term varies according to local climate, cultures and customs.  ', '2018-03-12 01:00:00', 'spring.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `blog_categories`
--

CREATE TABLE `blog_categories` (
  `id_blog` int(11) NOT NULL,
  `id_categories` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blog_categories`
--

INSERT INTO `blog_categories` (`id_blog`, `id_categories`) VALUES
(1, 2),
(1, 3),
(2, 4),
(3, 6),
(4, 2),
(5, 4),
(7, 4),
(7, 6),
(8, 6),
(9, 2);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id_categories` int(11) NOT NULL,
  `name_categories` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id_categories`, `name_categories`) VALUES
(2, 'Entertainment'),
(3, 'Family'),
(4, 'Education'),
(5, 'Sport'),
(6, 'Others'),
(18, 'Sign a petition');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nom` varchar(60) NOT NULL,
  `prenom` varchar(60) NOT NULL,
  `nickname` varchar(60) NOT NULL,
  `email` varchar(60) NOT NULL,
  `password` varchar(255) NOT NULL,
  `gender` enum('F','H') NOT NULL,
  `birthyear` varchar(4) NOT NULL,
  `avatar` varchar(255) NOT NULL,
  `secret_q` set('What is the name of your best friend?','What is the name of your mother''s hometown?','What is the name of school you attend?') NOT NULL,
  `secret_a` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nom`, `prenom`, `nickname`, `email`, `password`, `gender`, `birthyear`, `avatar`, `secret_q`, `secret_a`) VALUES
(2, 'Dervaux', 'Johnathan', '', 'mike@gmail.com', '$2y$10$DVCbLCqgylENZ.AcFqYH5uLwllWAOe5euw2aZxfbyJZUd/YFfUqbq', 'H', '1988', 'boy.svg', 'What is the name of your mother\'s hometown?', 'zorya'),
(3, 'Peter', 'Jordan', '', 'mike@gmail.com', '$2y$10$8a/ICygfiWoVjmzJiBvf3eUqW89FA2Sfs1ZS/6mTNJy8EvZzOQtr6', 'H', '1995', 'boy.svg', 'What is the name of your best friend?', 'xxxxxx'),
(4, 'Farid', 'Hammouten', '', 'farid@gmail.com', '$2y$10$8a/ICygfiWoVjmzJiBvf3eUqW89FA2Sfs1ZS/6mTNJy8EvZzOQtr6', 'H', '1995', 'boy.svg', 'What is the name of your best friend?', 'xxxxxx'),
(5, 'Mickael ', ' Van Craenenbroeck', '', 'mike@gmail.com', '$2y$10$AeDsN/yujdxxLGV20HMnaeWqAxFkBqOu45GExh6Rvqsm4eyjWA3RC', 'H', '1989', 'boy.svg', 'What is the name of your best friend?', 'xxxxxx'),
(6, 'Marina', 'Shvanova', '', 'marina@gmail.com', '$2y$10$AeDsN/yujdxxLGV20HMnaeWqAxFkBqOu45GExh6Rvqsm4eyjWA3RC', 'F', '1992', 'girl.svg', 'What is the name of your best friend?', 'xxxxxx'),
(7, 'Ait', 'Nael', '', 'nael@gmail.com', '$2y$10$cjacdt1HoQ0KiCW2WvfOkuGTOwSi5fafJ0EFXzxmVPhvRIopMk.xy', 'H', '1992', 'boy.svg', 'What is the name of your mother\'s hometown?', 'aaaaaa'),
(13, 'Guy', 'Simon', 'niceguy', 'g@gmail.com', '$2y$10$y.Qlx9uyyUfuvzuUrF3zheVa0GfGnF0snPj1LjxLMkpeanBzNo8Sm', 'H', '1995', 'boy.svg', '', 'hello'),
(14, 'Kateryna', 'Grygorko', 'grygorko', 'grygorko@gmail.com', '$2y$10$bEuHAV/I5k.BzEzzblItbOpjrVEoj3N0hVfYs3wFSypVrTsS/sqRS', 'F', '1988', 'girl.svg', '', 'zorya'),
(15, 'teacher', 'Emily', 'teach', 'emily@gmail.com', '$2y$10$zk9PV91ztRCcKDLZqTn6ruKZmfyE8CCq6Bo1HLd7n4DpFVR9j33oC', 'F', '1990', 'girl.svg', '', 'hey'),
(20, 'Carroy', 'Glenn', 'G-C', 'glenn@mail.com', '$2y$10$VXT1uCAYDiSonPO5pI39GO8ocdyvSGFx8KvOfwi/zLGmwqGs/u10e', 'H', '1988', 'logo1.jpg', 'What is the name of your best friend?', 'zzzzzz'),
(21, 'Symeon', 'Andrea', 'andrea', 'andrea@gmail.com', '$2y$10$0Yon2/k04.ghEvaWfRaYrembO4wSlR4IYNn6AKUajpItHpVwGu.Cm', 'F', '1990', 'pic8.jpg', 'What is the name of your best friend?', 'my_dog'),
(22, 'Rwanyindo', 'Jacqueline ', 'JR', 'jr@gmail.com', '$2y$10$VMoApOM/3pN5vcn8VGxyZ.IXpkE42fOmOY9cP4uSfw1p8yvDVWygm', 'F', '1995', 'img-01.png', 'What is the name of school you attend?', '000000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id_blog`);

--
-- Indexes for table `blog_categories`
--
ALTER TABLE `blog_categories`
  ADD KEY `id_blog` (`id_blog`),
  ADD KEY `id_categories` (`id_categories`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id_categories`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id_blog` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id_categories` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `blog_categories`
--
ALTER TABLE `blog_categories`
  ADD CONSTRAINT `blog_categories_ibfk_1` FOREIGN KEY (`id_blog`) REFERENCES `blog` (`id_blog`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `blog_categories_ibfk_2` FOREIGN KEY (`id_categories`) REFERENCES `categories` (`id_categories`);
