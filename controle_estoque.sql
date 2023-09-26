

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";



DROP TABLE IF EXISTS `admin_accounts`;
CREATE TABLE IF NOT EXISTS `admin_accounts` (
  `id` int NOT NULL AUTO_INCREMENT,
  `user_name` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `series_id` varchar(60) DEFAULT NULL,
  `remember_token` varchar(255) DEFAULT NULL,
  `expires` datetime DEFAULT NULL,
  `admin_type` varchar(10) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `user_name` (`user_name`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;


INSERT INTO `admin_accounts` (`id`, `user_name`, `password`, `series_id`, `remember_token`, `expires`, `admin_type`) VALUES
(4, 'superadmin', 'super', 'rvuWJHMd5LTxLC2J', '$2y$10$LDUi4w/UAM2PgfMoKkLo4.igJX39G5/WQOEDHRaDy3y2KZeIxXggm', '2019-02-16 22:39:57', 'super'),
(7, 'anand', '$2y$10$OrQFRZdSUP3X2kvGZrg.zeplQkxcJAq1s6atRehyCpbEvOVPu8KPe', NULL, NULL, NULL, 'admin'),
(8, 'admin', '$2y$10$RnDwpen5c8.gtZLaxHEHDOKWY77t/20A4RRkWBsjlPuu7Wmy0HyBu', 'MyG5Xw2I12EWdJeD', '$2y$10$XL/RhpCz.uQoWE1xV77Wje4I4ker.gtg7YV4yqNwLZfzIYnP7E8Na', '2019-08-22 01:12:33', 'admin'),
(10, 'guilherme.lara', '$2y$10$6EQVEScOQFjF.uZx.bbq7eJkbPLyi1y2b8keuyn94pc1WcOLF/9Aa', 'IdCxaa19I5uD2eSv', '$2y$10$AiBzHOqjF37BljvSlWl8ZOfjzVgxv5TORI2zVndjgXDOBUkUvVvfm', '2023-10-26 18:13:15', 'super');


DROP TABLE IF EXISTS `customers`;
CREATE TABLE IF NOT EXISTS `customers` (
  `id` int NOT NULL AUTO_INCREMENT,
  `f_name` varchar(25) NOT NULL,
  `l_name` varchar(25) NOT NULL,
  `gender` varchar(6) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `city` varchar(15) DEFAULT NULL,
  `state` varchar(30) DEFAULT NULL,
  `phone` varchar(15) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `date_of_birth` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;


INSERT INTO `customers` (`id`, `f_name`, `l_name`, `gender`, `address`, `city`, `state`, `phone`, `email`, `date_of_birth`, `created_at`, `updated_at`) VALUES
(1, 'chetan', 'Shenai', 'female', 'waaw awf', NULL, 'Maharashtra', '99878', 'chetanshenai9@gmail.com', '2019-07-23', '2019-07-22 20:12:30', '2019-07-22 20:12:41'),
(2, 'Cfree', 'wawfaf', 'male', 'piohh', NULL, 'Madhya pradesh', '09975342821', 'cgtarta@ll.com', '2020-10-14', '2020-10-24 15:46:45', '2020-10-24 15:46:53'),
(3, 'Guilherme', 'Lara', 'male', 'Chimbo Attusi Qd-03 Impar\r\n', NULL, 'Maharashtra', '14991038230', 'guilherme.lara@next.tec.br', '1998-02-23', '2023-09-26 19:51:54', NULL);



DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `id` int NOT NULL AUTO_INCREMENT,
  `usuario_id` int DEFAULT NULL,
  `nome_produto` varchar(255) NOT NULL,
  `descricao` varchar(255) DEFAULT NULL,
  `categoria` varchar(50) DEFAULT NULL,
  `quantidade` int NOT NULL,
  `preco_unitario` decimal(10,2) NOT NULL,
  `data_entrada` date NOT NULL,
  `data_atualizacao` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `Ativo` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `usuario_id` (`usuario_id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

INSERT INTO `products` (`id`, `usuario_id`, `nome_produto`, `descricao`, `categoria`, `quantidade`, `preco_unitario`, `data_entrada`, `data_atualizacao`, `Ativo`) VALUES
(1, 39, 'Notebook Asus X515MA - BR623X', 'Notebook Asus Dual Core 4GB 128GB SSD Tela 15.6” Windows 11 X515MA - BR623X', 'Notebook', 20, '161405.00', '2023-09-26', '2023-09-26 15:56:11', 1),
(2, 40, 'Notebook Positivo MOTION C', 'Notebook Positivo MOTION C 14 Intel Dual Core 4GB 128GB SSD Tela 14,1” Windows 11 C4128G-14 com Microsoft 365 Personal, Alexa Integrada e Ring Light', 'Notebook', 7, '123405.00', '2023-09-06', '2023-09-26 15:35:17', 0),
(3, 1, 'Desktop 5TechPC', 'Processador: I5 3.2 Ghz - mod. 3470\r\n\r\nMemória 8 GB - Frequência: 1333\r\n\r\nArmazenamento: SSD 120 GB\r\n\r\nSistema: Windows 10 PRO - Ver. 2004\r\n\r\nPeriféricos: Adaptador Wifi', 'Desktop', 8, '227864.00', '2023-09-14', '2023-09-26 15:36:16', 0),
(4, NULL, 'HD Seagate Expansion', 'Modelo: STEA2000400\r\nBasta tirar da caixa e \"arrastar e soltar\" para salvar arquivos\r\nInstalado em segundos\r\nCompatível com Windows\r\nAlimentado por USB\r\nPlug & Play\r\n2 TB de capacidade\r\nCaixa contém : 1 HD portátil, cabo USB 3 e guia rápido do usuário.', 'Storage', 10, '574.00', '2023-07-03', '2023-09-26 15:40:28', 0),
(5, NULL, 'Adaptador USB C para RJ45', '- Cor: branco\r\n\r\n- Material: plástico\r\n\r\n- Entrada: USB 3.1 Type-C\r\n\r\n- Interface: RJ45\r\n\r\n- Velocidade de transmissão: 10/100 Mbps\r\n\r\n- Sistema operacional compatível: Windows XP/ 7/ 8/ 10, Mac OS', 'Adaptadores', 5, '39.99', '2023-09-05', '2023-09-26 15:42:18', 0),
(6, NULL, 'SSD 500 GB Kingston ', 'SSD 500 GB Kingston NV2, M.2 2280 PCIe, NVMe, Leitura: 3500 MB/s e Gravação: 2100 MB/s - SNV2S/500G\r\n', 'Storage', 8, '179.99', '2023-09-13', '2023-09-26 15:43:49', 0),
(7, NULL, 'Mouse com fio USB Logitech M90', 'Mouse com fio USB Logitech M90 com Design Ambidestro e Facilidade Plug and Play - 910-004053\r\n', 'Mouse', 10, '31.99', '2023-09-25', '2023-09-26 15:44:36', 0),
(8, NULL, 'Computador All In One 3green Unique', 'Computador All In One 3green Unique, Intel Core I5, 8GB, SSD 1TB, Windows 10, Tela 24 Full HD, Com Webcam - 3u-006', 'Desktop', 5, '2648.99', '2023-09-26', '2023-09-26 03:00:00', 1);



DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `senha` varchar(255) NOT NULL,
  `setor` varchar(45) DEFAULT NULL,
  `cargo` varchar(45) DEFAULT NULL,
  `status` tinyint(1) NOT NULL,
  `tipo_maquina` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=46 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;


INSERT INTO `usuarios` (`id`, `nome`, `email`, `senha`, `setor`, `cargo`, `status`, `tipo_maquina`) VALUES
(1, 'Guilherme Ribeiro de Almeida Lara', 'guilhemre.lara@maltez.com.br', 'root', 'T.I', 'Help Desk', 1, 'Desktop'),
(2, 'Christine M. Urbaniak', 'christine.urbaniak@maltez.com.br', 'chris.urbaniak', 'DP', 'eSocial', 1, 'Notebook'),
(3, 'Carla Cevidrar Cerda', 'carla.cerda@maltez.com.br', 'BegleyMae', 'Contabilidade', 'Gestora', 1, 'Desktop'),
(39, 'Brandi Pearson', 'foxbrandon@example.org', '9287d8d332', 'T.I', 'Analista', 1, 'notebook'),
(40, 'Brendan Sanchez', 'sarah28@example.net', '47c215c9b', 'RH', 'Gestora de RH', 1, 'notebook'),
(41, 'Robert Wells', 'natasha94@example.com', '8e35725b0e63', 'Diretoria', 'Diretora Financeira', 1, 'notebook'),
(42, 'Mallory Solis', 'fishermichelle@example.com', '3f62550731daf26', 'Recepcao', 'Secretaria', 1, 'notebook'),
(43, 'Susan Walker', 'glasspaul@example.org', '8118011a909fba5', 'Almoxarifado', 'Carregador de Carga', 1, 'notebook'),
(44, 'Ashley Gomez', 'maureenblankenship@example.com', '5589a7d', 'T.I', 'Analista de Implantação Web', 1, 'notebook'),
(45, 'Matthew Choi', 'shannon17@example.com', 'f73481', 'Marketing', 'Publishing copy', 1, 'notebook');

ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`usuario_id`) REFERENCES `usuarios` (`id`);
COMMIT;

