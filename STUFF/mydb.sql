-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Gegenereerd op: 09 jun 2022 om 13:14
-- Serverversie: 5.7.36
-- PHP-versie: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mydb`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `tm_mnemonic`
--

DROP TABLE IF EXISTS `tm_mnemonic`;
CREATE TABLE IF NOT EXISTS `tm_mnemonic` (
  `d_index` int(13) UNSIGNED NOT NULL,
  `d_mnemonic` varchar(255) DEFAULT NULL,
  `d_tabel` varchar(255) DEFAULT NULL,
  `d_num` varchar(255) NOT NULL,
  `d_tekst` varchar(255) NOT NULL,
  PRIMARY KEY (`d_index`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `tm_mnemusedby`
--

DROP TABLE IF EXISTS `tm_mnemusedby`;
CREATE TABLE IF NOT EXISTS `tm_mnemusedby` (
  `d_index` tinyint(3) NOT NULL AUTO_INCREMENT,
  `d_mnemTabel` tinyint(3) NOT NULL,
  `d_tabel` varchar(255) NOT NULL,
  `d_veld` varchar(255) NOT NULL,
  `tm_mnemonic_d_index` int(13) UNSIGNED NOT NULL,
  PRIMARY KEY (`d_index`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `ts_authorisation`
--

DROP TABLE IF EXISTS `ts_authorisation`;
CREATE TABLE IF NOT EXISTS `ts_authorisation` (
  `d_index` tinyint(3) UNSIGNED NOT NULL,
  `d_script` varchar(255) NOT NULL,
  `d_0` tinyint(3) UNSIGNED NOT NULL DEFAULT '0',
  `d_1` tinyint(3) UNSIGNED NOT NULL DEFAULT '1',
  `d_2` tinyint(3) UNSIGNED NOT NULL DEFAULT '0',
  `d_3` tinyint(3) UNSIGNED NOT NULL DEFAULT '0',
  `d_4` tinyint(3) UNSIGNED NOT NULL DEFAULT '0',
  `d_5` tinyint(3) UNSIGNED NOT NULL DEFAULT '0',
  `d_6` tinyint(3) UNSIGNED NOT NULL DEFAULT '0',
  `d_7` tinyint(3) UNSIGNED NOT NULL DEFAULT '0',
  `d_8` tinyint(3) UNSIGNED NOT NULL DEFAULT '0',
  PRIMARY KEY (`d_index`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `ts_authorisation`
--

INSERT INTO `ts_authorisation` (`d_index`, `d_script`, `d_0`, `d_1`, `d_2`, `d_3`, `d_4`, `d_5`, `d_6`, `d_7`, `d_8`) VALUES
(0, 'A_home.php', 0, 1, 1, 0, 0, 0, 0, 0, 0),
(1, 'A_logon', 0, 1, 1, 0, 0, 0, 0, 0, 0),
(3, 'E_mail.php', 0, 1, 1, 0, 0, 0, 0, 0, 0),
(4, 'P_reset.php', 0, 1, 1, 0, 0, 0, 0, 0, 0),
(5, 'P_vergeten.php', 0, 1, 1, 0, 0, 0, 0, 0, 0),
(6, 'Z_uitloggen.php', 0, 1, 1, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `ts_soortlid`
--

DROP TABLE IF EXISTS `ts_soortlid`;
CREATE TABLE IF NOT EXISTS `ts_soortlid` (
  `d_soortLid` tinyint(3) NOT NULL,
  `d_mnemonic` varchar(255) NOT NULL,
  PRIMARY KEY (`d_soortLid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Gegevens worden geëxporteerd voor tabel `ts_soortlid`
--

INSERT INTO `ts_soortlid` (`d_soortLid`, `d_mnemonic`) VALUES
(0, ''),
(1, 'Gebruiker'),
(2, 'Admin');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `ts_users`
--

DROP TABLE IF EXISTS `ts_users`;
CREATE TABLE IF NOT EXISTS `ts_users` (
  `d_user` mediumint(8) NOT NULL AUTO_INCREMENT,
  `d_rol` tinyint(3) NOT NULL,
  `d_gender` tinyint(3) NOT NULL,
  `d_country` tinyint(3) UNSIGNED NOT NULL,
  `d_paswoord` char(64) NOT NULL,
  `d_lastName` varchar(255) NOT NULL,
  `d_firstName` varchar(255) NOT NULL,
  `d_username` varchar(255) NOT NULL,
  `d_tel` varchar(255) NOT NULL,
  `d_mail` varchar(255) NOT NULL,
  `d_identifier` char(64) NOT NULL,
  `d_token` char(64) NOT NULL,
  `d_expire` bigint(20) NOT NULL,
  `d_resetKey` char(64) NOT NULL,
  `d_resetTimer` bigint(20) NOT NULL,
  `d_faultCntr` tinyint(3) NOT NULL,
  `d_timeOut` bigint(20) NOT NULL,
  `d_userBanned` tinyint(3) NOT NULL,
  `d_signedUpWhen` bigint(20) NOT NULL,
  `d_dateOfBirth` bigint(20) NOT NULL,
  `d_profilePic` varchar(255) NOT NULL,
  `d_online` tinyint(3) NOT NULL,
  PRIMARY KEY (`d_user`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=32 DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `ts_users`
--

INSERT INTO `ts_users` (`d_user`, `d_rol`, `d_gender`, `d_country`, `d_paswoord`, `d_lastName`, `d_firstName`, `d_username`, `d_tel`, `d_mail`, `d_identifier`, `d_token`, `d_expire`, `d_resetKey`, `d_resetTimer`, `d_faultCntr`, `d_timeOut`, `d_userBanned`, `d_signedUpWhen`, `d_dateOfBirth`, `d_profilePic`, `d_online`) VALUES
(1, 2, 1, 1, '84435d203b60403291bbe724bd18d839ec690f444d6e2d828416abb48226277a', 'Csoregh', 'Lucas', 'lucas_csoregh', '0487787142', 'lucas', '', '', 0, '', 0, 0, 0, 0, 0, 0, '../assets/img/profile_pics/default/head_red.png', 0),
(26, 1, 1, 1, '340de21a7ddd74c4cace855507123edc23282a3d7b43a94beed03c523f432665', 'Csoregh', 'Elias', 'elias_csoregh', '0487787142', 'elias@cso.be', '', '', 0, '', 0, 1, 0, 0, 1653429263, 924480000, '../assets/img/profile_pics/default/head_alizarin.png', 0),
(27, 1, 1, 1, '44e4a071aa360ea9ddf057bc751d158cfc15fe1589a554542174cccd1288a269', 'De Pauw', 'Micky', 'micky_de_pauw', '0487787142', 'micky@depauw.be', '', '', 0, '', 0, 0, 0, 0, 1653429558, 924480000, '../assets/img/profile_pics/default/head_pete_river.png', 0),
(28, 1, 1, 1, '7f5ececec99ca0b8dc46420bdb085f781e0f982637f4cf19e6a7846afaf82247', 'De Man', 'Jan', 'janDeMan', '0487787142', 'jan@de.man', '', '', 0, '', 0, 0, 0, 0, 1653429784, 924480000, '../assets/img/profile_pics/default/head_emerald.png', 0),
(29, 1, 1, 1, 'f75034f9b995ff6bafea4df7e6f6d50d33ba7c99d1a9e674844b6202554cc795', 'Peters', 'Jantje', 'jantjepeters', '0487787142', 'jantje@peters.nl', '', '', 0, '', 0, 0, 0, 0, 1653429878, 924480000, '../assets/img/profile_pics/default/head_pumpkin.png', 0),
(30, 1, 1, 1, 'cf84f2d49d5865e2e2e88766075ef4735623f3b7407ab572d9969ff2508e24d2', 'De Veuster', 'Markske', 'markdv', '0487787142', 'mark@dv.be', '', '', 0, '', 0, 0, 0, 0, 1654587929, 924480000, '../assets/img/profile_pics/default/head_pumpkin.png', 0),
(31, 1, 1, 17, '46f87cd4ea91ef6a8912af0c2540cffce1ff0ef747fbeb2a97870a9043257ad9', 'De Kleine', 'Frankie', 'de_frankie', '0487787142', 'frankie@dk.be', '', '', 0, '', 0, 0, 0, 0, 1654688639, 924480000, '../assets/img/profile_pics/default/head_wisteria.png', 0);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `ts_users_has_ts_users`
--

DROP TABLE IF EXISTS `ts_users_has_ts_users`;
CREATE TABLE IF NOT EXISTS `ts_users_has_ts_users` (
  `d_sentRequest` mediumint(8) NOT NULL,
  `d_receivedRequest` mediumint(8) NOT NULL,
  `d_accepted` tinyint(3) NOT NULL,
  PRIMARY KEY (`d_sentRequest`,`d_receivedRequest`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Gegevens worden geëxporteerd voor tabel `ts_users_has_ts_users`
--

INSERT INTO `ts_users_has_ts_users` (`d_sentRequest`, `d_receivedRequest`, `d_accepted`) VALUES
(1, 26, 1),
(27, 26, 1),
(26, 29, 1),
(30, 29, 1),
(29, 27, 1),
(30, 1, 1),
(1, 31, 1);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `ts_users_has_t_groups`
--

DROP TABLE IF EXISTS `ts_users_has_t_groups`;
CREATE TABLE IF NOT EXISTS `ts_users_has_t_groups` (
  `ts_users_d_user` mediumint(8) NOT NULL,
  `t_groups_d_group` mediumint(8) NOT NULL,
  PRIMARY KEY (`ts_users_d_user`,`t_groups_d_group`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `ts_users_likes_t_posts`
--

DROP TABLE IF EXISTS `ts_users_likes_t_posts`;
CREATE TABLE IF NOT EXISTS `ts_users_likes_t_posts` (
  `ts_users_d_user` mediumint(8) NOT NULL,
  `t_posts_d_post` mediumint(8) NOT NULL,
  PRIMARY KEY (`ts_users_d_user`,`t_posts_d_post`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `ts_users_likes_t_posts`
--

INSERT INTO `ts_users_likes_t_posts` (`ts_users_d_user`, `t_posts_d_post`) VALUES
(1, 7),
(26, 7),
(28, 7);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `t_countries`
--

DROP TABLE IF EXISTS `t_countries`;
CREATE TABLE IF NOT EXISTS `t_countries` (
  `d_country` tinyint(3) UNSIGNED NOT NULL,
  `d_abbrev` char(3) NOT NULL,
  `d_name` varchar(255) NOT NULL,
  PRIMARY KEY (`d_country`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `t_countries`
--

INSERT INTO `t_countries` (`d_country`, `d_abbrev`, `d_name`) VALUES
(1, 'AFG', 'Afghanistan  '),
(2, 'ALB', 'Albania '),
(3, 'DZA', 'Algeria '),
(4, 'AND', 'Andorra '),
(5, 'AGO', 'Angola '),
(6, 'ATG', 'Antigua and Barbuda '),
(7, 'ARG', 'Argentina '),
(8, 'ARM', 'Armenia '),
(9, 'AUS', 'Australia '),
(10, 'AUT', 'Austria '),
(11, 'AZE', 'Azerbaijan '),
(12, 'BHS', 'Bahamas '),
(13, 'BHR', 'Bahrain '),
(14, 'BGD', 'Bangladesh '),
(15, 'BRB', 'Barbados '),
(16, 'BLR', 'Belarus '),
(17, 'BEL', 'Belgium '),
(18, 'BLZ', 'Belize '),
(19, 'BEN', 'Benin '),
(20, 'BTN', 'Bhutan '),
(21, 'BOL', 'Bolivia '),
(22, 'BIH', 'Bosnia and Herzegovina '),
(23, 'BWA', 'Botswana '),
(24, 'BRA', 'Brazil '),
(25, 'BRN', 'Brunei Darussalam '),
(26, 'BGR', 'Bulgaria '),
(27, 'BFA', 'Burkina Faso '),
(28, 'BDI', 'Burundi '),
(29, 'KHM', 'Cambodia '),
(30, 'CMR', 'Cameroon '),
(31, 'CAN', 'Canada '),
(32, 'CPV', 'Cape Verde '),
(33, 'CAF', 'Central African Republic '),
(34, 'TCD', 'Chad '),
(35, 'CHL', 'Chile '),
(36, 'CHN', 'China '),
(37, 'COL', 'Colombia '),
(38, 'COM', 'Comoros '),
(39, 'COG', 'Congo '),
(40, 'CRI', 'Costa Rica '),
(41, 'CIV', 'Cete d\'Ivoire '),
(42, 'HRV', 'Croatia '),
(43, 'CUB', 'Cuba '),
(44, 'CYP', 'Cyprus '),
(45, 'CZE', 'Czech Republic '),
(46, 'PRK', 'Democratic People\'s Republic of Korea '),
(47, 'COD', 'Democratic Republic of the Congo '),
(48, 'DNK', 'Denmark '),
(49, 'DJI', 'Djibouti '),
(50, 'DMA', 'Dominica '),
(51, 'DOM', 'Dominican Republic '),
(52, 'ECU', 'Ecuador '),
(53, 'EGY', 'Egypt '),
(54, 'SLV', 'El Salvador '),
(55, 'GNQ', 'Equatorial Guinea '),
(56, 'ERI', 'Eritrea '),
(57, 'EST', 'Estonia '),
(58, 'ETH', 'Ethiopia '),
(59, 'FJI', 'Fiji '),
(60, 'FIN', 'Finland '),
(61, 'FRA', 'France '),
(62, 'GAB', 'Gabon '),
(63, 'GMB', 'Gambia '),
(64, 'GEO', 'Georgia '),
(65, 'DEU', 'Germany '),
(66, 'GHA', 'Ghana '),
(67, 'GRC', 'Greece '),
(68, 'GRD', 'Grenada '),
(69, 'GTM', 'Guatemala '),
(70, 'GIN', 'Guinea '),
(71, 'GNB', 'Guinea-Bissau '),
(72, 'GUY', 'Guyana '),
(73, 'HTI', 'Haiti '),
(74, 'VAT', 'Holy See '),
(75, 'HND', 'Honduras '),
(76, 'HUN', 'Hungary '),
(77, 'ISL', 'Iceland '),
(78, 'IND', 'India '),
(79, 'IDN', 'Indonesia '),
(80, 'IRN', 'Iran (Islamic Republic of) '),
(81, 'IRQ', 'Iraq '),
(82, 'IRL', 'Ireland '),
(83, 'ISR', 'Israel '),
(84, 'ITA', 'Italy '),
(85, 'JAM', 'Jamaica '),
(86, 'JPN', 'Japan '),
(87, 'JOR', 'Jordan '),
(88, 'KAZ', 'Kazakhstan '),
(89, 'KEN', 'Kenya '),
(90, 'KIR', 'Kiribati '),
(100, 'KWT', 'Kuwait '),
(101, 'KGZ', 'Kyrgyzstan '),
(102, 'LAO', 'Lao People\'s Democratic Republic '),
(103, 'LVA', 'Latvia '),
(104, 'LBN', 'Lebanon '),
(105, 'LSO', 'Lesotho '),
(106, 'LBR', 'Liberia '),
(107, 'LBY', 'Libyan Arab Jamahiriya '),
(108, 'LIE', 'Liechtenstein '),
(109, 'LTU', 'Lithuania '),
(110, 'LUX', 'Luxembourg '),
(111, 'MDG', 'Madagascar '),
(112, 'MWI', 'Malawi '),
(113, 'MYS', 'Malaysia '),
(114, 'MDV', 'Maldives '),
(115, 'MLI', 'Mali '),
(116, 'MLT', 'Malta '),
(117, 'MHL', 'Marshall Islands '),
(118, 'MRT', 'Mauritania '),
(119, 'MUS', 'Mauritius '),
(120, 'MEX', 'Mexico '),
(121, 'FSM', 'Micronesia, Federated States of '),
(122, 'MCO', 'Monaco '),
(123, 'MNG', 'Mongolia '),
(124, 'MAR', 'Morocco '),
(125, 'MOZ', 'Mozambique '),
(126, 'MMR', 'Myanmar '),
(127, 'NAM', 'Namibia '),
(128, 'NRU', 'Nauru '),
(129, 'NPL', 'Nepal '),
(130, 'NLD', 'Netherlands '),
(131, 'NZL', 'New Zealand '),
(132, 'NIC', 'Nicaragua '),
(133, 'NER', 'Niger '),
(134, 'NGA', 'Nigeria '),
(135, 'NOR', 'Norway '),
(136, 'OMN', 'Oman '),
(137, 'PAK', 'Pakistan '),
(138, 'PLW', 'Palau '),
(139, 'PAN', 'Panama '),
(140, 'PNG', 'Papua New Guinea '),
(141, 'PRY', 'Paraguay '),
(142, 'PER', 'Peru '),
(143, 'PHL', 'Philippines '),
(144, 'POL', 'Poland '),
(145, 'PRT', 'Portugal '),
(146, 'QAT', 'Qatar '),
(147, 'KOR', 'Republic of Korea '),
(148, 'MDA', 'Republic of Moldova '),
(149, 'ROU', 'Romania '),
(150, 'RUS', 'Russian Federation '),
(151, 'RWA', 'Rwanda '),
(152, 'KNA', 'Saint Kitts and Nevis '),
(153, 'LCA', 'Saint Lucia '),
(154, 'VCT', 'Saint Vincent and the Grenadines '),
(155, 'WSM', 'Samoa '),
(156, 'SMR', 'San Marino '),
(157, 'STP', 'Sao Tome and Principe '),
(158, 'SAU', 'Saudi Arabia '),
(159, 'SEN', 'Senegal '),
(160, 'SYC', 'Seychelles '),
(161, 'SLE', 'Sierra Leone '),
(162, 'SGP', 'Singapore '),
(163, 'SVK', 'Slovakia '),
(164, 'SVN', 'Slovenia '),
(165, 'SLB', 'Solomon Islands '),
(166, 'SOM', 'Somalia '),
(167, 'ZAF', 'South Africa '),
(168, 'ESP', 'Spain '),
(169, 'LKA', 'Sri Lanka '),
(170, 'SDN', 'Sudan '),
(171, 'SUR', 'Suriname '),
(172, 'SWZ', 'Swaziland '),
(173, 'SWE', 'Sweden '),
(174, 'CHE', 'Switzerland '),
(175, 'SYR', 'Syrian Arab Republic '),
(176, 'TWN', 'Taiwan Province of China '),
(177, 'TJK', 'Tajikistan '),
(178, 'THA', 'Thailand '),
(179, 'MKD', 'The former Yugoslav Republic of Macedonia '),
(180, 'TLS', 'Timor-Leste (East Timor) '),
(181, 'TGO', 'Togo '),
(182, 'TON', 'Tonga '),
(183, 'TTO', 'Trinidad and Tobago '),
(184, 'TUN', 'Tunisia '),
(185, 'TUR', 'Turkey '),
(186, 'TKM', 'Turkmenistan '),
(187, 'TUV', 'Tuvalu '),
(188, 'UGA', 'Uganda '),
(189, 'UKR', 'Ukraine '),
(190, 'ARE', 'United Arab Emirates '),
(191, 'GBR', 'United Kingdom '),
(192, 'TZA', 'United Republic of Tanzania '),
(193, 'USA', 'United States '),
(194, 'URY', 'Uruguay '),
(195, 'UZB', 'Uzbekistan '),
(196, 'VUT', 'Vanuatu '),
(197, 'VEN', 'Venezuela '),
(198, 'VNM', 'Viet Nam '),
(199, 'YEM', 'Yemen '),
(200, 'YUG', 'Yugoslavia '),
(201, 'ZMB', 'Zambia '),
(202, 'ZWE', 'Zimbabwe ');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `t_genders`
--

DROP TABLE IF EXISTS `t_genders`;
CREATE TABLE IF NOT EXISTS `t_genders` (
  `d_gender` tinyint(3) NOT NULL,
  `d_mnemonic` varchar(255) NOT NULL,
  PRIMARY KEY (`d_gender`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `t_genders`
--

INSERT INTO `t_genders` (`d_gender`, `d_mnemonic`) VALUES
(0, ''),
(1, 'Man'),
(2, 'Vrouw'),
(3, 'Other');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `t_groups`
--

DROP TABLE IF EXISTS `t_groups`;
CREATE TABLE IF NOT EXISTS `t_groups` (
  `d_naam` varchar(255) NOT NULL,
  `d_user` mediumint(8) NOT NULL COMMENT 'ADMIN',
  `d_group` mediumint(8) NOT NULL,
  PRIMARY KEY (`d_user`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `t_landen`
--

DROP TABLE IF EXISTS `t_landen`;
CREATE TABLE IF NOT EXISTS `t_landen` (
  `d_land` tinyint(3) UNSIGNED NOT NULL,
  `d_LandCode` char(3) NOT NULL,
  `d_landNaamEng` varchar(255) NOT NULL,
  PRIMARY KEY (`d_land`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `t_posts`
--

DROP TABLE IF EXISTS `t_posts`;
CREATE TABLE IF NOT EXISTS `t_posts` (
  `d_post` mediumint(8) NOT NULL AUTO_INCREMENT,
  `d_prevPostID` int(11) NOT NULL,
  `d_postBody` text NOT NULL,
  `d_postedWhen` bigint(20) NOT NULL,
  `d_user` mediumint(8) NOT NULL,
  PRIMARY KEY (`d_post`)
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=utf8;

--
-- Gegevens worden geëxporteerd voor tabel `t_posts`
--

INSERT INTO `t_posts` (`d_post`, `d_prevPostID`, `d_postBody`, `d_postedWhen`, `d_user`) VALUES
(1, 0, '<p>assdfdf</p>', 1654320869, 1),
(6, 0, '', 1654320870, 1),
(7, 0, '', 1654320870, 1),
(8, 7, '<p>asdf</p>', 1654688869, 1),
(9, 7, '', 1654688869, 1),
(10, 7, '', 1654688869, 1),
(11, 7, '<p>f</p>', 1654688889, 1),
(12, 7, '<p>adf</p>', 1654688935, 1),
(13, 6, '<p>d</p>', 1654708936, 26),
(14, 6, '<p>df</p>', 1654708938, 26),
(15, 1, '<p>asdf</p>', 1654709013, 26),
(16, 1, '', 1654709015, 26),
(17, 1, '<p>d</p>', 1654709018, 26),
(18, 1, '<p>d</p>', 1654709096, 26),
(19, 1, '', 1654709097, 26),
(20, 1, '', 1654709098, 26),
(21, 1, '<p>dd</p>', 1654709099, 26),
(22, 0, '<p>dsf</p>', 1654709115, 26),
(23, 0, '<p>ddd</p>', 1654709117, 26),
(24, 0, '<p>sdf</p>', 1654709124, 26),
(25, 0, '<p>d</p>', 1654709125, 26),
(26, 0, '<p>dd</p>', 1654709126, 26),
(27, 0, '<p>safdfd</p>', 1654709127, 26),
(28, 0, '<p>sd</p>', 1654709805, 26),
(29, 0, '<p>df</p>', 1654712649, 26),
(30, 26, '<p>dd</p>', 1654718558, 26),
(31, 26, '', 1654718558, 26),
(32, 29, '<p>d</p>', 1654780125, 29),
(33, 29, '', 1654780126, 29);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `t_posts_has_t_groups`
--

DROP TABLE IF EXISTS `t_posts_has_t_groups`;
CREATE TABLE IF NOT EXISTS `t_posts_has_t_groups` (
  `t_groups_d_group` mediumint(8) NOT NULL,
  `t_posts_d_post` mediumint(8) NOT NULL,
  PRIMARY KEY (`t_groups_d_group`,`t_posts_d_post`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
