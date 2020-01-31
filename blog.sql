-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le :  mar. 28 jan. 2020 à 20:26
-- Version du serveur :  5.7.21
-- Version de PHP :  7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `blog`
--

-- --------------------------------------------------------

--
-- Structure de la table `billet`
--

DROP TABLE IF EXISTS `billet`;
CREATE TABLE IF NOT EXISTS `billet` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `idUser` int(11) NOT NULL,
  `dateAjout` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `idUser` (`idUser`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `billet`
--

INSERT INTO `billet` (`id`, `titre`, `description`, `idUser`, `dateAjout`) VALUES
(3, 'Texte 1', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec eget elementum ligula, nec vestibulum magna. Proin eu blandit ante, quis commodo enim. Proin eu convallis lectus, ac consectetur nulla. In consequat augue rhoncus lorem rhoncus imperdiet. Curabitur sodales, est non porttitor interdum, urna mauris luctus sem, eu laoreet dui elit ut libero. Maecenas ullamcorper libero nisi, vel semper metus dictum at. Vivamus consequat vulputate tellus ac ultrices.\r\n\r\nIn quis gravida magna. Phasellus sit amet elementum augue. Fusce et bibendum velit. Pellentesque vehicula purus in sem iaculis, efficitur venenatis justo laoreet. In lobortis, urna eu consequat pulvinar, erat lectus pharetra sapien, venenatis finibus tellus magna eget erat. Nullam non fringilla nunc, eget euismod enim. Etiam fermentum leo at enim euismod, id egestas turpis egestas. Aliquam dignissim eu elit in faucibus. Morbi malesuada quam nec quam facilisis vehicula. Maecenas non arcu eu diam auctor maximus non quis massa. Nam eros arcu, accumsan et semper euismod, blandit pretium magna. Maecenas fringilla libero vitae lacus venenatis hendrerit. Pellentesque nisl risus, efficitur a ipsum nec, fringilla malesuada dui. Donec posuere nunc id dui vulputate, eget auctor lorem consectetur. Proin id nisi ornare enim faucibus faucibus.', 1, '2019-11-25 00:00:00'),
(4, 'Titre 2', 'Contrairement à une opinion répandue, le Lorem Ipsum n\'est pas simplement du texte aléatoire. Il trouve ses racines dans une oeuvre de la littérature latine classique datant de 45 av. J.-C., le rendant vieux de 2000 ans. Un professeur du Hampden-Sydney College, en Virginie, s\'est intéressé à un des mots latins les plus obscurs, consectetur, extrait d\'un passage du Lorem Ipsum, et en étudiant tous les usages de ce mot dans la littérature classique, découvrit la source incontestable du Lorem Ipsum. Il provient en fait des sections 1.10.32 et 1.10.33 du \"De Finibus Bonorum et Malorum\" (Des Suprêmes Biens et des Suprêmes Maux) de Cicéron. Cet ouvrage, très populaire pendant la Renaissance, est un traité sur la théorie de l\'éthique. Les premières lignes du Lorem Ipsum, \"Lorem ipsum dolor sit amet...\", proviennent de la section 1.10.32.\r\n\r\n', 1, '2019-12-02 00:00:00'),
(5, 'text 6', 'Pandente itaque viam fatorum sorte tristissima, qua praestitutum erat eum vita et imperio spoliari, itineribus interiectis permutatione iumentorum emensis venit Petobionem oppidum Noricorum, ubi reseratae sunt insidiarum latebrae omnes, et Barbatio repente apparuit comes, qui sub eo domesticis praefuit, cum Apodemio agente in rebus milites ducens, quos beneficiis suis oppigneratos elegerat imperator certus nec praemiis nec miseratione ulla posse deflecti.\r\n\r\nProinde die funestis interrogationibus praestituto imaginarius iudex equitum resedit magister adhibitis aliis iam quae essent agenda praedoctis, et adsistebant hinc inde notarii, quid quaesitum esset, quidve responsum, cursim ad Caesarem perferentes, cuius imperio truci, stimulis reginae exsertantis aurem subinde per aulaeum, nec diluere obiecta permissi nec defensi periere conplures.\r\n\r\nQuod cum ita sit, paucae domus studiorum seriis cultibus antea celebratae nunc ludibriis ignaviae torpentis exundant, vocali sonu, perflabili tinnitu fidium resultantes. denique pro philosopho cantor et in locum oratoris doctor artium ludicrarum accitur et bybliothecis sepulcrorum ritu in perpetuum clausis organa fabricantur hydraulica, et lyrae ad speciem carpentorum ingentes tibiaeque et histrionici gestus instrumenta non levia.', 1, '2019-11-25 00:00:00'),
(7, 'etete', 'Cum haec taliaque sollicitas eius aures everberarent expositas semper eius modi rumoribus et patentes, varia animo tum miscente consilia, tandem id ut optimum factu elegit: et Vrsicinum primum ad se venire summo cum honore mandavit ea specie ut pro rerum tunc urgentium captu disponeretur concordi consilio, quibus virium incrementis Parthicarum gentium a arma minantium impetus frangerentur.\r\n\r\nRogatus ad ultimum admissusque in consistorium ambage nulla praegressa inconsiderate et leviter proficiscere inquit ut praeceptum est, Caesar sciens quod si cessaveris, et tuas et palatii tui auferri iubebo prope diem annonas. hocque solo contumaciter dicto subiratus abscessit nec in conspectum eius postea venit saepius arcessitus.\r\n\r\nQuod cum ita sit, paucae domus studiorum seriis cultibus antea celebratae nunc ludibriis ignaviae torpentis exundant, vocali sonu, perflabili tinnitu fidium resultantes. denique pro philosopho cantor et in locum oratoris doctor artium ludicrarum accitur et bybliothecis sepulcrorum ritu in perpetuum clausis organa fabricantur hydraulica, et lyrae ad speciem carpentorum ingentes tibiaeque et histrionici gestus instrumenta non levia.\r\n\r\nErgo ego senator inimicus, si ita vultis, homini, amicus esse, sicut semper fui, rei publicae debeo. Quid? si ipsas inimicitias, depono rei publicae causa, quis me tandem iure reprehendet, praesertim cum ego omnium meorum consiliorum atque factorum exempla semper ex summorum hominum consiliis atque factis mihi censuerim petenda.\r\n\r\nHaec dum oriens diu perferret, caeli reserato tepore Constantius consulatu suo septies et Caesaris ter egressus Arelate Valentiam petit, in Gundomadum et Vadomarium fratres Alamannorum reges arma moturus, quorum crebris excursibus vastabantur confines limitibus terrae Gallorum.', 1, '2019-12-03 14:27:00'),
(13, 'Ciel terre et mer', '<p style=\"margin: 0px 0px 15px; padding: 0px; text-align: justify; font-family: \'Open Sans\', Arial, sans-serif; font-size: 14px; background-color: #ffffff;\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed et iaculis lectus. Sed eget lectus at nibh lacinia pharetra eu in enim. Nullam porta faucibus nisl, at dictum purus malesuada nec. Aliquam vehicula ultricies neque sit amet vulputate. Phasellus consequat vestibulum dolor in molestie. Pellentesque tincidunt dui quis arcu tristique, at bibendum dolor sollicitudin. Integer vulputate, massa id luctus interdum, magna purus scelerisque felis, nec sollicitudin quam dolor ac enim. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Ut viverra mauris in facilisis eleifend. Integer semper sollicitudin lacus sed convallis. In mi sapien, vulputate sed condimentum et, ultricies at lacus.</p>\r\n<p style=\"margin: 0px 0px 15px; padding: 0px; text-align: justify; font-family: \'Open Sans\', Arial, sans-serif; font-size: 14px; background-color: #ffffff;\">Sed accumsan lacus ante, in hendrerit justo semper sit amet. Pellentesque eu risus orci. Fusce aliquam interdum mauris, nec ultricies magna gravida non. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Suspendisse in sem ac metus semper egestas at in magna. Cras dapibus fermentum posuere. Aliquam mauris magna, suscipit non mauris non, venenatis euismod augue. Duis blandit tellus nec arcu rutrum condimentum vel sit amet felis.</p>\r\n<p style=\"margin: 0px 0px 15px; padding: 0px; text-align: justify; font-family: \'Open Sans\', Arial, sans-serif; font-size: 14px; background-color: #ffffff;\">Nam id consequat eros. Nulla ex nisl, hendrerit vitae tincidunt at, aliquam vitae enim. Pellentesque vitae est at enim varius consectetur vitae ut ex. Sed non dolor ac elit luctus volutpat sed a lacus. Quisque eleifend nisi nec laoreet laoreet. Integer suscipit ante non ex lobortis, a tincidunt velit consectetur. In felis mauris, tempor ac lacinia sed, accumsan finibus diam. Mauris sit amet quam mattis, mollis sem sit amet, volutpat urna. Nulla congue risus ac magna ultricies dignissim. Donec molestie rutrum diam, at pulvinar neque egestas id. Quisque porttitor aliquet metus sit amet posuere.</p>\r\n<p style=\"margin: 0px 0px 15px; padding: 0px; text-align: justify; font-family: \'Open Sans\', Arial, sans-serif; font-size: 14px; background-color: #ffffff;\">Nullam mollis urna sed efficitur mattis. Sed vitae pretium ex. Aliquam lacinia turpis varius tortor tempus pretium. Suspendisse sed tristique ante. Aliquam erat volutpat. Phasellus a est fermentum neque tempus malesuada nec non nunc. Nam sollicitudin sem tortor. Sed metus purus, aliquet quis sem ac, hendrerit porttitor augue. Donec interdum rutrum odio. Nulla porta tortor eget mauris dapibus, sed venenatis felis facilisis. In nibh est, cursus quis volutpat sit amet, malesuada sit amet urna. Nunc tristique lectus arcu, in malesuada nisi cursus in.</p>\r\n<p style=\"margin: 0px 0px 15px; padding: 0px; text-align: justify; font-family: \'Open Sans\', Arial, sans-serif; font-size: 14px; background-color: #ffffff;\">Curabitur sit amet rhoncus nunc. Nam cursus mollis nunc, at egestas diam interdum vitae. Donec fermentum odio turpis, ut laoreet risus lacinia at. Vestibulum ut volutpat magna. In egestas augue vitae finibus tincidunt. In sed ligula feugiat, eleifend velit at, facilisis nunc. Proin eu molestie magna, feugiat dignissim neque. Fusce rhoncus facilisis felis vitae sodales. Vestibulum a commodo sapien. Morbi aliquam sagittis erat non vestibulum.</p>', 1, '2020-01-07 14:27:12'),
(14, 'Terre', '<p style=\"font-size: 10px; margin: 10px; color: #5e5737; font-family: Verdana, Arial, Helvetica, sans-serif; background-color: #ffffff;\">Tantum autem cuique tribuendum, primum quantum ipse efficere possis, deinde etiam quantum ille quem diligas atque adiuves, sustinere. Non enim neque tu possis, quamvis excellas, omnes tuos ad honores amplissimos perducere, ut Scipio P. Rupilium potuit consulem efficere, fratrem eius L. non potuit. Quod si etiam possis quidvis deferre ad alterum, videndum est tamen, quid ille possit sustinere.</p>\r\n<p style=\"font-size: 10px; margin: 10px; color: #5e5737; font-family: Verdana, Arial, Helvetica, sans-serif; background-color: #ffffff;\">Dum haec in oriente aguntur, Arelate hiemem agens Constantius post theatralis ludos atque circenses ambitioso editos apparatu diem sextum idus Octobres, qui imperii eius annum tricensimum terminabat, insolentiae pondera gravius librans, siquid dubium deferebatur aut falsum, pro liquido accipiens et conperto, inter alia excarnificatum Gerontium Magnentianae comitem partis exulari maerore multavit.</p>\r\n<p style=\"font-size: 10px; margin: 10px; color: #5e5737; font-family: Verdana, Arial, Helvetica, sans-serif; background-color: #ffffff;\">Cumque pertinacius ut legum gnarus accusatorem flagitaret atque sollemnia, doctus id Caesar libertatemque superbiam ratus tamquam obtrectatorem audacem excarnificari praecepit, qui ita evisceratus ut cruciatibus membra deessent, inplorans caelo iustitiam, torvum renidens fundato pectore mansit inmobilis nec se incusare nec quemquam alium passus et tandem nec confessus nec confutatus cum abiecto consorte poenali est morte multatus. et ducebatur intrepidus temporum iniquitati insultans, imitatus Zenonem illum veterem Stoicum qui ut mentiretur quaedam laceratus diutius, avulsam sedibus linguam suam cum cruento sputamine in oculos interrogantis Cyprii regis inpegit.</p>', 1, '2020-01-07 14:29:47'),
(15, 'Planete terre', '<p style=\"margin: 0px 0px 15px; padding: 0px; text-align: justify; font-family: \'Open Sans\', Arial, sans-serif; font-size: 14px; background-color: #ffffff;\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent nec scelerisque velit. Duis scelerisque, enim ac hendrerit cursus, velit lectus luctus augue, non venenatis nibh ipsum nec libero. Morbi molestie posuere nisl, at venenatis purus euismod id. Cras ac lacus tristique, malesuada dui vel, egestas purus. In sed est eu velit placerat volutpat. Curabitur id libero eget ipsum semper pharetra. Nullam a est tortor. Curabitur facilisis auctor urna, sit amet convallis massa mattis ac. Vestibulum varius varius turpis, a vehicula neque imperdiet in. In sed mattis mi.</p>\r\n<p style=\"margin: 0px 0px 15px; padding: 0px; text-align: justify; font-family: \'Open Sans\', Arial, sans-serif; font-size: 14px; background-color: #ffffff;\">Aenean sagittis, augue a egestas iaculis, lectus risus auctor erat, quis euismod arcu nulla quis turpis. Ut facilisis posuere ipsum eget elementum. Aliquam tempor suscipit consectetur. Cras ut nibh nulla. Nullam imperdiet varius placerat. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Aliquam lacinia dui porta ligula vehicula porta eu sed nisi. Donec nec lacus purus. Suspendisse elementum est vel felis efficitur, nec porttitor turpis volutpat. Nam mattis quis turpis ac egestas. Donec sagittis libero et vehicula eleifend. Integer commodo quis risus sit amet elementum. Suspendisse eget massa tempus, scelerisque purus ut, vehicula lectus. Morbi vehicula sapien sit amet lectus tempor pulvinar. Fusce aliquet enim a leo suscipit, placerat posuere turpis vestibulum.</p>\r\n<p style=\"margin: 0px 0px 15px; padding: 0px; text-align: justify; font-family: \'Open Sans\', Arial, sans-serif; font-size: 14px; background-color: #ffffff;\">Etiam tristique scelerisque arcu, sed interdum elit efficitur id. Ut lobortis aliquam purus, vitae iaculis metus lacinia eu. In finibus justo ut aliquet malesuada. Aliquam viverra nisi ut mi pretium aliquam. Mauris ultrices placerat nisl in ultricies. Vestibulum metus libero, semper in magna vel, lacinia tempus arcu. Nunc tempus vitae purus id volutpat. Fusce blandit rutrum augue, vel cursus lectus aliquam vel. Curabitur sit amet placerat ligula. Praesent at laoreet quam, quis sollicitudin nunc.</p>\r\n<p style=\"margin: 0px 0px 15px; padding: 0px; text-align: justify; font-family: \'Open Sans\', Arial, sans-serif; font-size: 14px; background-color: #ffffff;\">Proin ut ex eget risus aliquam semper sed vel arcu. Duis commodo lectus vel justo hendrerit malesuada. Suspendisse vel eleifend eros, mollis tempor ex. Integer rhoncus est dolor, sit amet bibendum purus fermentum eu. Suspendisse porttitor libero sit amet lectus tristique maximus. Vestibulum sollicitudin augue ut ante finibus feugiat. Sed quis venenatis sem, a mollis justo. Fusce sit amet augue sit amet lectus dignissim vehicula. Donec ultricies est nec justo pulvinar, at varius diam ultricies. Pellentesque ut nisl bibendum, iaculis mauris et, ornare orci. Proin id est suscipit, bibendum libero at, sodales purus. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Aliquam id tellus eget lacus mattis hendrerit. Duis ornare lacus et odio commodo efficitur. Donec scelerisque metus at leo imperdiet laoreet.</p>\r\n<p style=\"margin: 0px 0px 15px; padding: 0px; text-align: justify; font-family: \'Open Sans\', Arial, sans-serif; font-size: 14px; background-color: #ffffff;\">Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Proin et aliquam nunc. Quisque feugiat semper risus, at pellentesque tellus dictum in. Sed faucibus purus lorem, non tristique ex aliquam quis. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nunc egestas tellus vitae malesuada imperdiet. Praesent tincidunt quis felis at tempor. Vivamus justo neque, mollis non libero et, gravida gravida massa. Phasellus aliquam posuere felis eu ornare. Duis a ligula a metus gravida vestibulum. Praesent quis nibh at odio placerat viverra. Cras in maximus elit, sed pretium arcu. In ullamcorper nibh quis turpis aliquam, non placerat mauris venenatis. Morbi in posuere sapien, sit amet vestibulum neque. Phasellus at erat et purus tincidunt elementum vitae et risus.</p>\r\n<p style=\"margin: 0px 0px 15px; padding: 0px; text-align: justify; font-family: \'Open Sans\', Arial, sans-serif; font-size: 14px; background-color: #ffffff;\">Aliquam sagittis metus a orci euismod laoreet. Aenean varius purus ipsum, suscipit aliquet mi rutrum nec. Cras ultrices, ipsum nec mollis cursus, diam tortor vulputate dolor, in convallis nisi libero eget velit. Donec nec eros ac urna luctus vulputate eu vitae est. Etiam in lacinia dui, sit amet porttitor velit. Cras mauris ipsum, tincidunt ut ultricies sit amet, eleifend eget nisi. Aliquam erat volutpat.</p>\r\n<p style=\"margin: 0px 0px 15px; padding: 0px; text-align: justify; font-family: \'Open Sans\', Arial, sans-serif; font-size: 14px; background-color: #ffffff;\">Suspendisse quis dolor vel eros fermentum congue. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed maximus convallis congue. Praesent cursus risus sit amet ipsum laoreet, non dapibus metus auctor. Vivamus tempus ex sit amet lorem semper porttitor. Nullam tempor ornare nisl congue rutrum. Pellentesque eros velit, vulputate quis lacinia posuere, feugiat sit amet est. Phasellus cursus, purus sed suscipit venenatis, lectus arcu convallis nisi, at euismod leo sapien vel mauris. In nisl turpis, malesuada sed fringilla vel, semper non massa. Proin vel tincidunt erat. Curabitur in feugiat sem.</p>', 1, '2020-01-20 17:51:49');

-- --------------------------------------------------------

--
-- Structure de la table `commentaire`
--

DROP TABLE IF EXISTS `commentaire`;
CREATE TABLE IF NOT EXISTS `commentaire` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `text` text NOT NULL,
  `datecomment` datetime NOT NULL,
  `idbillet` int(11) NOT NULL,
  `flag` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `idbillet` (`idbillet`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `commentaire`
--

INSERT INTO `commentaire` (`id`, `username`, `text`, `datecomment`, `idbillet`, `flag`) VALUES
(2, 'fafazaz', 'Ergo ego senator inimicus, si ita vultis, homini, amicus esse, sicut semper fui, rei publicae debeo. Quid?', '2019-12-09 15:19:27', 3, 0),
(3, 'Zassqq', 'Utque aegrum corpus quassari etiam levibus solet offensis, ita animus eius angustus et tener, quicquid increpuisset, ad salutis suae dispendium existimans factum aut cogitatum, insontium caedibus fecit victoriam luctuosam.', '2019-12-09 08:16:17', 3, 0),
(4, 'ZZZZZZZZ', 'eazeAAAAAAAAEZAAAAAAAAAAAA', '2019-12-09 06:16:18', 4, 1),
(5, 'Pedro', 'super ', '2020-01-07 06:22:20', 13, 0),
(6, 'Pierre', 'sa va ', '2020-01-07 18:46:19', 14, 0),
(7, 'richard ', 'super article', '2020-01-07 18:46:54', 14, 0),
(8, 'Pierre', 'GENIAL', '2020-01-07 18:47:16', 7, 0),
(9, 'Pierre', 'c\'est bien', '2020-01-14 14:19:09', 3, 0),
(10, 'eazzea', 'sasas', '2020-01-14 18:58:48', 5, 1),
(11, 'marc', 'super bien', '2020-01-16 00:56:35', 14, 0),
(12, 'genial', 'super', '2020-01-20 14:12:12', 14, 0),
(13, 'LOLO', 'super bien ecrit', '2020-01-20 18:22:35', 3, 0),
(14, 'gege ', 'top', '2020-01-20 18:31:15', 4, 0);

-- --------------------------------------------------------

--
-- Structure de la table `report`
--

DROP TABLE IF EXISTS `report`;
CREATE TABLE IF NOT EXISTS `report` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `commentid` int(11) NOT NULL,
  `billetid` int(11) NOT NULL,
  `userreport` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `billetid` (`billetid`),
  KEY `commentid` (`commentid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

DROP TABLE IF EXISTS `utilisateur`;
CREATE TABLE IF NOT EXISTS `utilisateur` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `usename` varchar(255) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=96 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`id`, `usename`, `mail`, `password`) VALUES
(1, 'pierre', 'alemanpierre@gmail.com', 'pierre'),
(2, 'imperio ', 'imperio@gemm.com', 'imperio'),
(3, 'azazazaz', 'pierre@eazazaaaz.de', 'azerty1'),
(4, 'azazazaz', 'pierre@e', 'azerty1'),
(16, 'azazazaz', 'pierre@e', 'azerty1'),
(34, 'nouveau', 'nouveau@sa', 'super'),
(35, 'super', 'super@sa', 'bien'),
(53, 'zeaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaazeazeazeazeazeaze', 'pierre@e', 'azerty1'),
(54, 'savacazzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzz', 'pierre@e', 'azerty1'),
(55, 'zaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', 'pierre@e', 'azerty1'),
(60, 'Pseudo', 'pierre@e', 'azerty1'),
(86, 'jeanforteroche', 'jeanforteroche@gmail.com', 'ecrire'),
(87, 'Pseudo', 'pierre@e', 'azerty1'),
(88, '', 'pierre@e', 'azerty1'),
(89, 'richard', 'richard@ezaaza', 'ecrire'),
(90, 'zazaza', 'pierre@e', '1b70c226782b4986b3af69a54fde87582c220fef'),
(91, 'Pseudo', 'pierre@e', 'c0302cb832da4f325c45949db17f3f98386a305d'),
(92, 'Pseudo', 'pierre@e', 'c0302cb832da4f325c45949db17f3f98386a305d'),
(93, 'Pseudo', 'pierre@e', 'c0302cb832da4f325c45949db17f3f98386a305d'),
(94, 'Pseudo', 'pierre@e', 'c0302cb832da4f325c45949db17f3f98386a305d'),
(95, 'RIC', 'pierrZAA@AA', 'f82408d08813bf415a2b0b768337a03c69a77ad8');

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `billet`
--
ALTER TABLE `billet`
  ADD CONSTRAINT `billet_ibfk_1` FOREIGN KEY (`idUser`) REFERENCES `utilisateur` (`id`);

--
-- Contraintes pour la table `commentaire`
--
ALTER TABLE `commentaire`
  ADD CONSTRAINT `commentaire_ibfk_1` FOREIGN KEY (`idbillet`) REFERENCES `billet` (`id`);

--
-- Contraintes pour la table `report`
--
ALTER TABLE `report`
  ADD CONSTRAINT `report_ibfk_1` FOREIGN KEY (`billetid`) REFERENCES `billet` (`id`),
  ADD CONSTRAINT `report_ibfk_2` FOREIGN KEY (`commentid`) REFERENCES `commentaire` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
