-- phpMyAdmin SQL Dump
-- version 4.1.0
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 14, 2014 at 03:52 AM
-- Server version: 5.5.35
-- PHP Version: 5.4.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `crud`
--

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `first_name` varchar(20) NOT NULL,
  `last_name` varchar(40) NOT NULL,
  `email` varchar(60) NOT NULL,
  `student_id` smallint(4) NOT NULL,
  `phone` varchar(20) NOT NULL,
  PRIMARY KEY (`student_id`),
  KEY `student_id` (`student_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`first_name`, `last_name`, `email`, `student_id`, `phone`) VALUES
('Rogan', 'Patel', 'Quisque@Aliquam.co.uk', 8437, '(213) 591-4759'),
('Nina', 'Browning', 'Fusce.aliquet@metusAenean.edu', 6304, '(962) 277-4759'),
('Kay', 'Byers', 'aliquet.sem@dictumauguemalesuada.edu', 3480, '(848) 443-0710'),
('Maile', 'Lloyd', 'et.tristique.pellentesque@arcu.org', 7554, '(184) 141-4727'),
('Heidi', 'Coffey', 'feugiat@sedlibero.edu', 9337, '(839) 577-8615'),
('Lydia', 'Martinez', 'semper.auctor@nibh.edu', 2813, '(105) 383-7451'),
('Catherine', 'Pate', 'blandit.Nam@semPellentesque.co.uk', 7893, '(721) 964-3053'),
('Chastity', 'Head', 'eleifend.non@Craslorem.co.uk', 7451, '(173) 718-0973'),
('Akeem', 'Velazquez', 'Nam.ligula.elit@lorem.com', 6673, '(792) 186-4740'),
('Fritz', 'Mcmillan', 'vel.quam@at.co.uk', 6843, '(563) 586-2428'),
('Kyle', 'Griffin', 'enim.commodo.hendrerit@metusInnec.com', 7178, '(317) 176-2473'),
('Dara', 'Wilkins', 'Curae.Donec@lacusvarius.co.uk', 2499, '(458) 665-9400'),
('Nathaniel', 'Conner', 'leo.Vivamus.nibh@dolornonummyac.ca', 8662, '(843) 824-8010'),
('Alana', 'Kent', 'mattis@atvelit.net', 5228, '(754) 734-5284'),
('Lydia', 'Hensley', 'diam.at@porta.com', 4917, '(667) 484-8722'),
('Coby', 'Alford', 'convallis.erat@velitinaliquet.org', 2231, '(525) 247-6027'),
('Stone', 'Cobb', 'ornare.sagittis@malesuadaiderat.net', 8351, '(876) 421-0071'),
('Tamekah', 'Perez', 'Duis.sit@Maecenas.edu', 8955, '(909) 455-3693'),
('Athena', 'Spencer', 'enim.condimentum@volutpatnunc.edu', 8350, '(283) 905-4277'),
('Cain', 'Pena', 'sagittis@enim.co.uk', 8772, '(658) 688-0858'),
('Cherokee', 'Benton', 'eu.ultrices@libero.net', 2926, '(865) 282-1483'),
('Zorita', 'Walter', 'tincidunt@Maecenasiaculisaliquet.co.uk', 7396, '(837) 452-6128'),
('Palmer', 'Robinson', 'lacus.Cras.interdum@Suspendissealiquet.com', 8813, '(145) 577-8433'),
('Evelyn', 'Howell', 'eu@pede.ca', 4726, '(207) 729-0516'),
('Abigail', 'Howard', 'metus.In@molestietellusAenean.co.uk', 9950, '(145) 183-7993'),
('Brynn', 'Lowery', 'magna.et@Innecorci.co.uk', 4799, '(664) 924-8395'),
('Ora', 'Guerrero', 'ullamcorper.viverra.Maecenas@malesuada.org', 8519, '(246) 244-6977'),
('Alyssa', 'Hansen', 'penatibus@ProinmiAliquam.co.uk', 4853, '(636) 699-2477'),
('Jerome', 'Johnson', 'sapien.molestie.orci@auctorMauris.edu', 5925, '(264) 807-7071'),
('Reed', 'Huff', 'tellus.lorem.eu@necluctus.com', 6463, '(695) 808-8435'),
('Walker', 'Carpenter', 'enim.commodo@morbitristiquesenectus.co.uk', 6517, '(391) 297-7987'),
('Dylan', 'Preston', 'eu.erat@lorem.co.uk', 3115, '(368) 401-0646'),
('Aretha', 'Parks', 'tincidunt@arcuac.net', 9334, '(184) 281-2784'),
('Cara', 'Gould', 'ligula@diameudolor.net', 5515, '(676) 787-4112'),
('Wylie', 'Thomas', 'vel@pharetraNamac.net', 4790, '(563) 719-4573'),
('Ebony', 'Bean', 'Cras.pellentesque@metusurnaconvallis.edu', 9551, '(368) 184-6360'),
('Claudia', 'Rosales', 'risus.Morbi.metus@tinciduntDonec.com', 2399, '(175) 144-3830'),
('Amanda', 'Norris', 'eu.odio.Phasellus@porttitortellusnon.com', 6068, '(655) 814-1340'),
('Cooper', 'Dunlap', 'nibh.enim@necligulaconsectetuer.edu', 7070, '(885) 408-1212'),
('Hillary', 'Adams', 'adipiscing.elit@porta.edu', 6504, '(352) 851-0417'),
('Noel', 'Castaneda', 'scelerisque@molestietortor.com', 5123, '(121) 241-2079'),
('Yardley', 'Castro', 'vel.convallis.in@Aenean.com', 2785, '(180) 682-4115'),
('Sigourney', 'Moses', 'felis@purusNullam.ca', 7492, '(649) 375-2082'),
('Tobias', 'Campbell', 'dolor.quam@ac.edu', 7063, '(855) 669-1404'),
('Lev', 'Velez', 'fringilla.mi@interdum.co.uk', 8448, '(184) 767-7358'),
('Leah', 'Fowler', 'Vivamus.molestie.dapibus@Etiam.ca', 7952, '(603) 642-6098'),
('Paul', 'Kramer', 'Mauris@ullamcorperDuiscursus.co.uk', 7696, '(796) 395-5603'),
('Mallory', 'Barry', 'enim@utaliquamiaculis.org', 3947, '(424) 373-5629'),
('Holmes', 'Pearson', 'at.augue@euelit.edu', 7502, '(341) 455-0037'),
('Germaine', 'Mills', 'et@utlacusNulla.net', 6326, '(274) 535-9412'),
('Erasmus', 'Acosta', 'non.lacinia@nec.net', 7254, '(110) 347-1591'),
('Dana', 'Vega', 'laoreet.lectus@dictum.ca', 7212, '(551) 689-4106'),
('Chester', 'Hammond', 'congue@Aliquam.net', 7306, '(411) 922-3562'),
('Lydia', 'Kramer', 'cursus@posuerevulputatelacus.ca', 9934, '(849) 748-0865'),
('Ivana', 'Gross', 'sagittis@Duis.edu', 6904, '(154) 270-3158'),
('Maisie', 'Fisher', 'Cras.dolor@mifelisadipiscing.co.uk', 3207, '(769) 558-2004'),
('Briar', 'Holden', 'lorem.eget.mollis@lacus.edu', 9695, '(932) 223-4586'),
('Zelenia', 'Paul', 'senectus.et.netus@Donecvitaeerat.ca', 3461, '(483) 113-3217'),
('Geoffrey', 'Calhoun', 'tortor.at.risus@magnaseddui.net', 4344, '(351) 913-0178'),
('Christian', 'Sharpe', 'eu@aliquet.edu', 6630, '(318) 679-6205'),
('Baxter', 'Burch', 'velit.Cras@sapien.co.uk', 2506, '(241) 220-5567'),
('Wylie', 'Bennett', 'ante@convallisante.ca', 6043, '(537) 596-5801'),
('Gwendolyn', 'Barnett', 'nascetur.ridiculus@enimEtiamgravida.ca', 2323, '(304) 288-4587'),
('Kerry', 'Ford', 'enim.commodo@leo.edu', 6164, '(777) 658-8120'),
('Nissim', 'Mclaughlin', 'pretium.aliquet@vestibulumMauris.com', 6688, '(710) 256-2979'),
('Pearl', 'Allison', 'ut.ipsum.ac@pellentesquemassalobortis.edu', 8172, '(883) 315-0973'),
('Aladdin', 'Lowery', 'Etiam@sapien.ca', 5107, '(864) 139-9841'),
('Wyatt', 'Pena', 'mi.enim@vestibulumneceuismod.com', 4533, '(604) 774-7324'),
('Allegra', 'Haley', 'scelerisque.neque@metusAliquamerat.edu', 4313, '(148) 100-3163'),
('Lawrence', 'Crosby', 'velit.Sed.malesuada@pharetrafeliseget.org', 9295, '(119) 406-3633'),
('Lysandra', 'Hardin', 'at.egestas.a@semutdolor.com', 7474, '(512) 859-1726'),
('Anne', 'Romero', 'enim@eratinconsectetuer.net', 8472, '(621) 947-3209'),
('Jesse', 'Byars', 'jesse@email.com', 4252, '(360) 241-8530'),
('Lisa', 'Littleman', 'lisa@email.com', 5333, '(360) 123-4567'),
('Mike', 'Bonsell', 'mike@email.com', 8534, '(360) 321-1234'),
('Bruce', 'Elgort', 'bruce@email.com', 4242, '(123) 456-7890'),
('John', 'Smith', 'johnsmith@email.com', 4444, '(444) 444-4444'),
('John', 'Stevens', 'johnstevens@email.com', 5555, '(555) 555-5555');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
