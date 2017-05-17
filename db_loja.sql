-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 27-Nov-2016 às 23:44
-- Versão do servidor: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_loja`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `carrinho`
--

CREATE TABLE `carrinho` (
  `ClienteId` int(11) NOT NULL,
  `ProdutoId` int(11) NOT NULL,
  `Quantidade` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `compra`
--

CREATE TABLE `compra` (
  `CompraId` int(11) NOT NULL,
  `ClienteId` int(11) NOT NULL,
  `DataCompra` date NOT NULL,
  `DataEnt` date DEFAULT NULL,
  `Frete` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `produto`
--

CREATE TABLE `produto` (
  `ProdutoId` int(11) NOT NULL,
  `Tipo` varchar(64) NOT NULL,
  `NomeProduto` varchar(200) NOT NULL,
  `imgURL` varchar(50) NOT NULL,
  `PrecoVenda` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `produto`
--

INSERT INTO `produto` (`ProdutoId`, `Tipo`, `NomeProduto`, `imgURL`, `PrecoVenda`) VALUES
(1, 'STT', 'Chapman Guitars ML1 RS Rob Scallon', 'img/prods/chapST.jpg', 725),
(2, 'STT', 'Fender Squier Classic Vibe Strat 50\'s', 'img/prods/fenderST.jpg', 444),
(3, 'TT', 'Fender Deluxe Tele MN BBlonde', 'img/prods/fenderT.jpg', 679),
(4, 'TT', 'Chapman Guitars ML-3 RC SBC', 'img/prods/chapT.jpg', 839),
(5, 'LPT', 'Epiphone Les Paul Standard Plus Pro HB', 'img/prods/epiLP.jpg', 419),
(6, 'LPT', 'Gibson Les Paul Standard 2016 T LB', 'img/prods/gibsonLP.jpg', 1890),
(7, 'SGT', 'Epiphone Vintage G-400 WC', 'img/prods/epiSG.jpg', 289),
(8, 'SGT', 'Gibson SG Standard T 2017 HC', 'img/prods/gibsonSG.jpg', 1250),
(9, 'HB', 'Gretsch G2622T FSS Streamliner', 'img/prods/gretchHB.jpg', 499),
(10, 'HB', 'Gibson ES-335 Pelham Blue', 'img/prods/gibsonHB.jpg', 3799),
(11, 'CL', 'Thomann Classic Guitar 1/2', 'img/prods/cl.jpg', 69),
(12, 'ST', 'Cort MR 710F NS', 'img/prods/acST.jpg', 333),
(13, 'VAMP', 'Hughes&Kettner Tubemeister 5 Head', 'img/prods/HK.jpg', 222),
(14, 'VAMP', 'Victory Amplifiers VX The Kraken Head', 'img/prods/kraken.jpg', 990),
(15, 'SSAMP', 'Line6 Spider V 30', 'img/prods/spiderV.jpg', 199),
(16, 'SSAMP', 'Fender Mustang III V.2', 'img/prods/mustangiii.jpg', 279),
(17, 'DS', 'Boss MT-2', 'img/prods/bossMZ.jpg', 99),
(18, 'DS', 'JHS Pedals The AT', 'img/prods/charlie.jpg', 249),
(19, 'MOD', 'MXR M 234 Analog Chorus', 'img/prods/mxrCh.jpg', 125),
(20, 'MOD', 'Strymon Timeline', 'img/prods/timeline.jpg', 499),
(21, 'CBL', 'the sssnake IPP1030', 'img/prods/CBL.jpg', 2.5),
(22, 'CBL', 'pro snake Patch Angled Jack 0,15 m', 'img/prods/patch.jpg', 2.5),
(23, 'STRP', 'Harley Benton Guitar Strap Suede Brown', 'img/prods/strapLeather.jpg', 17.9),
(24, 'STRP', 'Taylor Suede/Poly Guitar Strap Copper', 'img/prods/strp.jpg', 29),
(25, 'STRGS', 'Daddario NYXL1046', 'img/prods/NYXL.jpg', 12.7),
(26, 'STRGS', 'Daddario EJ45-3D', 'img/prods/nyStrgs.jpg', 20.9),
(27, 'GSTDS', 'Millenium GS-2001 A', 'img/prods/gstd.jpg', 6.9),
(28, 'GPRTS', 'Seymour Duncan SH-59 Set Vintage Blues BK', 'img/prods/SDHB.jpg', 119),
(29, 'GPRTS', 'Göldo E500L', 'img/prods/pot.jpg', 4.55),
(30, 'KC', 'Tama Rhythm Mate Standard -CCM', 'img/prods/tamaKC.jpg', 598),
(31, 'KC', 'Millenium MX222BX Standard Set BK', 'img/prods/milKC.jpg', 239),
(32, 'T', 'Millenium 12"x10" MX200BK Series TomTom', 'img/prods/tom.jpg', 36),
(33, 'TA', 'Sonor 14"x6,5" Thomann Edition Snare', 'img/prods/snare.jpg', 249),
(34, 'BU', 'Pearl VB 24"x18" Bass Drum # 91/C', 'img/prods/pearlBU.jpg', 399),
(35, 'CY', 'Zildjian K-Series Profi Promo Pack', 'img/prods/ZilCY.jpg', 929),
(36, 'CY', 'Meinl MB8 Standard Cymbal Set II', 'img/prods/meinlCY.jpg', 282),
(37, 'EKC', 'Millenium MPS-750 E-Drum Mesh Set', 'img/prods/ekcMil.jpg', 499),
(38, 'EKC', 'Roland TD-11KV V-Drum Set', 'img/prods/eckRol.jpg', 1399),
(39, 'P', 'Millenium MD-90 Mobile Drum', 'img/prods/pad.jpg', 99),
(40, 'CYP', 'Millenium MPS-400 Stereo Cymbal Pad', 'img/prods/milPAd.jpg', 45),
(41, 'CYP', 'Roland CY-8 V-Drum Stereo Cymbal Pad', 'img/prods/rolPad.jpg', 99),
(42, 'R', 'Millenium PDR-5004 Prof. Drum Rack', 'img/prods/rack.jpg', 349),
(43, 'CST', 'Pearl BC-2030 Cymbal Boom Stand', 'img/prods/CYstd.jpg', 144),
(44, 'C', 'Roland V-Drum Cable 3,5m', 'img/prods/dcbl.jpg', 8.9),
(45, 'BA', 'Gibraltar 9608 Drum Throne', 'img/prods/stool.jpg', 102),
(46, 'DCS', 'Millenium Touring Trolley', 'img/prods/HwdCS.jpg', 55),
(47, 'DCS', 'Millenium Multi Cymbal Bag', 'img/prods/CYbag.jpg', 39),
(48, 'PRT', 'DW 4002 Double Bass Drum Pedal', 'img/prods/DBP.jpg', 149),
(49, 'DST', 'Millenium 7A Drum Sticks Maple -Wood-', 'img/prods/sticks.jpg', 2.22),
(50, 'PRT', 'Thomann Drum Tuning Key', 'img/prods/key.jpg', 1.99);

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE `users` (
  `ClienteId` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password_digest` varchar(255) DEFAULT NULL,
  `remember_digest` varchar(255) DEFAULT NULL,
  `admin` tinyint(1) DEFAULT NULL,
  `activation_digest` varchar(255) DEFAULT NULL,
  `activated` tinyint(1) DEFAULT NULL,
  `activated_at` datetime DEFAULT NULL,
  `reset_digest` varchar(255) DEFAULT NULL,
  `reset_sent_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`ClienteId`, `name`, `email`, `password_digest`, `remember_digest`, `admin`, `activation_digest`, `activated`, `activated_at`, `reset_digest`, `reset_sent_at`) VALUES
(8, 'a52777', 'a52777@ualg.pt', '47bce5c74f589f4867dbd57e9ca9f808', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(16, 'Joe', 'joe@a.c', '4124bc0a9335c27f086f24ba207a4912', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(17, 'pe', 'pe@perna.pt', '4124bc0a9335c27f086f24ba207a4912', NULL, NULL, NULL, NULL, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `carrinho`
--
ALTER TABLE `carrinho`
  ADD PRIMARY KEY (`ProdutoId`,`ClienteId`),
  ADD KEY `ClienteId` (`ClienteId`);

--
-- Indexes for table `compra`
--
ALTER TABLE `compra`
  ADD PRIMARY KEY (`CompraId`),
  ADD KEY `ClienteId` (`ClienteId`);

--
-- Indexes for table `produto`
--
ALTER TABLE `produto`
  ADD PRIMARY KEY (`ProdutoId`),
  ADD UNIQUE KEY `ProdutoId` (`ProdutoId`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ClienteId`),
  ADD UNIQUE KEY `index_users_on_email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `produto`
--
ALTER TABLE `produto`
  MODIFY `ProdutoId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `ClienteId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `carrinho`
--
ALTER TABLE `carrinho`
  ADD CONSTRAINT `ProdutoIdFk` FOREIGN KEY (`ProdutoId`) REFERENCES `produto` (`ProdutoId`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `carrinho_ibfk_1` FOREIGN KEY (`ClienteId`) REFERENCES `users` (`ClienteId`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Limitadores para a tabela `compra`
--
ALTER TABLE `compra`
  ADD CONSTRAINT `compra_ibfk_1` FOREIGN KEY (`ClienteId`) REFERENCES `users` (`ClienteId`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
