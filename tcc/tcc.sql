-- Valentina Studio --
-- MySQL dump --
-- ---------------------------------------------------------


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
-- ---------------------------------------------------------


-- CREATE TABLE "admin" ----------------------------------------
CREATE TABLE `admin` (
	`id` Int( 11 ) AUTO_INCREMENT NOT NULL,
	`nome` VarChar( 50 ) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
	`senha` VarChar( 255 ) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
	`email` VarChar( 50 ) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
	PRIMARY KEY ( `id` ),
	CONSTRAINT `index2` UNIQUE( `email` ) )
CHARACTER SET = utf8
COLLATE = utf8_general_ci
ENGINE = InnoDB
AUTO_INCREMENT = 2;
-- -------------------------------------------------------------


-- CREATE TABLE "cliente" --------------------------------------
CREATE TABLE `cliente` (
	`id` Int( 11 ) AUTO_INCREMENT NOT NULL,
	`nome` VarChar( 100 ) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
	`email` VarChar( 50 ) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
	`cpf` Char( 11 ) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
	`senha` VarChar( 255 ) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
	`telefone_fixo` VarChar( 11 ) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
	`telefone_celular` VarChar( 11 ) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
	`fl_desabilitado` Int( 1 ) NOT NULL DEFAULT 0,
	PRIMARY KEY ( `id` ),
	CONSTRAINT `index2` UNIQUE( `cpf` ),
	CONSTRAINT `index3` UNIQUE( `email` ) )
CHARACTER SET = utf8
COLLATE = utf8_general_ci
ENGINE = InnoDB
AUTO_INCREMENT = 3;
-- -------------------------------------------------------------


-- CREATE TABLE "cliente_endereco" -----------------------------
CREATE TABLE `cliente_endereco` (
	`id` Int( 11 ) AUTO_INCREMENT NOT NULL,
	`bairro` VarChar( 50 ) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
	`cep` Char( 8 ) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
	`numero` Int( 11 ) NOT NULL,
	`logradouro` VarChar( 50 ) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
	`fl_principal` Int( 1 ) NOT NULL DEFAULT 0,
	`fk_cliente` Int( 11 ) NOT NULL,
	`uf` VarChar( 45 ) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
	`cidade` VarChar( 45 ) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
	`complemento` Text CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
	`nome` VarChar( 255 ) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
	PRIMARY KEY ( `id` ) )
CHARACTER SET = utf8
COLLATE = utf8_general_ci
ENGINE = InnoDB
AUTO_INCREMENT = 3;
-- -------------------------------------------------------------


-- CREATE TABLE "pedido" ---------------------------------------
CREATE TABLE `pedido` (
	`id` Int( 11 ) AUTO_INCREMENT NOT NULL,
	`data_criacao` DateTime NOT NULL,
	`data_atualizacao` DateTime NOT NULL,
	`status_pedido` Char( 1 ) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
	`fk_cliente` Int( 11 ) NOT NULL,
	`pedido_numero` VarChar( 100 ) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
	PRIMARY KEY ( `id` ),
	CONSTRAINT `pedido_numero` UNIQUE( `pedido_numero` ) )
CHARACTER SET = utf8
COLLATE = utf8_general_ci
ENGINE = InnoDB
AUTO_INCREMENT = 21;
-- -------------------------------------------------------------


-- CREATE TABLE "pedido_entrega" -------------------------------
CREATE TABLE `pedido_entrega` (
	`id` Int( 11 ) AUTO_INCREMENT NOT NULL,
	`data_atualizacao` DateTime NOT NULL,
	`data_criacao` DateTime NOT NULL,
	`status_entrega` Char( 1 ) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
	`valor_entrega` Decimal( 8, 2 ) NOT NULL,
	`fk_pedido` Int( 11 ) NOT NULL,
	`fk_cliente_endereco` Int( 11 ) NOT NULL,
	PRIMARY KEY ( `id` ) )
CHARACTER SET = utf8
COLLATE = utf8_general_ci
ENGINE = InnoDB
AUTO_INCREMENT = 7;
-- -------------------------------------------------------------


-- CREATE TABLE "pedido_item" ----------------------------------
CREATE TABLE `pedido_item` (
	`id` Int( 11 ) AUTO_INCREMENT NOT NULL,
	`data_criacao` DateTime NOT NULL,
	`data_atualizacao` DateTime NOT NULL,
	`preco` Decimal( 8, 2 ) NOT NULL,
	`quantidade` Decimal( 8, 2 ) NOT NULL,
	`sku` VarChar( 10 ) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
	`fk_pedido` Int( 11 ) NOT NULL,
	`fk_produto` Int( 11 ) NOT NULL,
	`valor_total_item` Decimal( 8, 2 ) NOT NULL,
	PRIMARY KEY ( `id` ) )
CHARACTER SET = utf8
COLLATE = utf8_general_ci
ENGINE = InnoDB
AUTO_INCREMENT = 8;
-- -------------------------------------------------------------


-- CREATE TABLE "pedido_pagamento" -----------------------------
CREATE TABLE `pedido_pagamento` (
	`id` Int( 11 ) AUTO_INCREMENT NOT NULL,
	`data_atualizacao` DateTime NOT NULL,
	`data_criacao` DateTime NOT NULL,
	`status_pagamento` Char( 1 ) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
	`valor_total_entrega` Decimal( 8, 2 ) NOT NULL,
	`forma_pagamento` VarChar( 45 ) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
	`valor_total_item` VarChar( 45 ) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
	`valor_total_pedido` VarChar( 45 ) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
	`fk_pedido` Int( 11 ) NOT NULL,
	`info` Text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
	PRIMARY KEY ( `id` ) )
CHARACTER SET = utf8
COLLATE = utf8_general_ci
ENGINE = InnoDB
AUTO_INCREMENT = 2;
-- -------------------------------------------------------------


-- CREATE TABLE "produto" --------------------------------------
CREATE TABLE `produto` (
	`id` Int( 11 ) AUTO_INCREMENT NOT NULL,
	`sku` VarChar( 50 ) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
	`nome` VarChar( 50 ) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
	`descricao_prod` Text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
	`url` VarChar( 100 ) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
	`foto` VarChar( 100 ) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
	`fl_desabilitado` Int( 1 ) NOT NULL DEFAULT 0,
	`fk_categoria` Int( 11 ) NOT NULL,
	PRIMARY KEY ( `id` ) )
CHARACTER SET = utf8
COLLATE = utf8_general_ci
ENGINE = InnoDB
AUTO_INCREMENT = 5;
-- -------------------------------------------------------------


-- CREATE TABLE "produto_categoria" ----------------------------
CREATE TABLE `produto_categoria` (
	`id` Int( 11 ) AUTO_INCREMENT NOT NULL,
	`nome` VarChar( 50 ) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
	PRIMARY KEY ( `id` ) )
CHARACTER SET = utf8
COLLATE = utf8_general_ci
ENGINE = InnoDB
AUTO_INCREMENT = 3;
-- -------------------------------------------------------------


-- CREATE TABLE "produto_estoque" ------------------------------
CREATE TABLE `produto_estoque` (
	`id` Int( 11 ) AUTO_INCREMENT NOT NULL,
	`sku` VarChar( 10 ) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
	`quantidade` Decimal( 8, 2 ) NOT NULL,
	`data_criacao` DateTime NOT NULL,
	`fk_produto` Int( 11 ) NOT NULL,
	PRIMARY KEY ( `id` ) )
CHARACTER SET = utf8
COLLATE = utf8_general_ci
ENGINE = InnoDB
AUTO_INCREMENT = 5;
-- -------------------------------------------------------------


-- CREATE TABLE "produto_preco" --------------------------------
CREATE TABLE `produto_preco` (
	`id` Int( 11 ) AUTO_INCREMENT NOT NULL,
	`sku` VarChar( 10 ) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
	`preco` Decimal( 8, 2 ) NOT NULL,
	`data_criacao` DateTime NOT NULL,
	`fk_produto` Int( 11 ) NOT NULL,
	PRIMARY KEY ( `id` ) )
CHARACTER SET = utf8
COLLATE = utf8_general_ci
ENGINE = InnoDB
AUTO_INCREMENT = 7;
-- -------------------------------------------------------------


-- Dump data of "admin" ------------------------------------
INSERT INTO `admin`(`id`,`nome`,`senha`,`email`) VALUES
( '1', 'Admin', '2e6f9b0d5885b6010f9167787445617f553a735f', 'email@email.com.br' );
-- ---------------------------------------------------------


-- Dump data of "cliente" ----------------------------------
INSERT INTO `cliente`(`id`,`nome`,`email`,`cpf`,`senha`,`telefone_fixo`,`telefone_celular`,`fl_desabilitado`) VALUES
( '1', 'User', 'user@email.com', '34415487847', '2e6f9b0d5885b6010f9167787445617f553a735f', '', '11987454877', '0' );
-- ---------------------------------------------------------


-- Dump data of "cliente_endereco" -------------------------
INSERT INTO `cliente_endereco`(`id`,`bairro`,`cep`,`numero`,`logradouro`,`fl_principal`,`fk_cliente`,`uf`,`cidade`,`complemento`,`nome`) VALUES
( '1', 'Jaragua', '06547888', '21', 'Rua das Flores', '1', '1', 'SP', 'Sao Paulo', NULL, 'Casa' ),
( '2', 'Itaquera', '05487989', '548', 'Tapojos', '1', '1', 'SP', 'Sao Paulo', NULL, 'Apartamento' );
-- ---------------------------------------------------------


-- Dump data of "pedido" -----------------------------------
INSERT INTO `pedido`(`id`,`data_criacao`,`data_atualizacao`,`status_pedido`,`fk_cliente`,`pedido_numero`) VALUES
( '1', '2022-05-15 00:00:00', '2022-05-15 00:00:00', 'F', '1', '1231232' ),
( '16', '2022-05-18 02:13:00', '2022-05-18 02:13:00', 'N', '1', '1850554411' ),
( '17', '2022-05-18 02:15:00', '2022-05-18 02:15:00', 'N', '1', '1554833505' ),
( '18', '2022-05-18 02:16:00', '2022-05-18 02:16:00', 'N', '1', '1265465831' ),
( '19', '2022-05-18 02:18:00', '2022-05-18 02:18:00', 'N', '1', '100688498' ),
( '20', '2022-05-18 02:27:00', '2022-05-18 02:27:00', 'N', '1', '319935973' ),
( '21', '2022-05-18 02:29:00', '2022-05-18 02:29:00', 'N', '1', '1449079504' ),
( '22', '2022-05-18 02:31:00', '2022-05-18 02:31:00', 'N', '1', '1017564186' ),
( '23', '2022-05-18 02:32:00', '2022-05-18 02:32:00', 'N', '1', '1073773620' ),
( '24', '2022-05-18 02:33:00', '2022-05-18 02:33:00', 'N', '1', '1491587455' ),
( '25', '2022-05-18 02:34:00', '2022-05-18 02:34:00', 'N', '1', '2041388174' ),
( '26', '2022-05-18 02:34:00', '2022-05-18 02:34:00', 'N', '1', '1638481102' ),
( '27', '2022-05-18 02:34:00', '2022-05-18 02:34:00', 'N', '1', '725769921' ),
( '28', '2022-05-18 02:34:00', '2022-05-18 02:34:00', 'N', '1', '16405811' ),
( '29', '2022-05-18 02:35:00', '2022-05-18 02:35:00', 'N', '1', '656368371' );
-- ---------------------------------------------------------


-- Dump data of "pedido_entrega" ---------------------------
INSERT INTO `pedido_entrega`(`id`,`data_atualizacao`,`data_criacao`,`status_entrega`,`valor_entrega`,`fk_pedido`,`fk_cliente_endereco`) VALUES
( '1', '2022-05-15 00:00:00', '2022-05-15 00:00:00', 'E', '5.99', '1', '2' ),
( '2', '2022-05-18 02:13:00', '2022-05-18 02:13:00', 'N', '15.00', '16', '2' ),
( '3', '2022-05-18 02:15:00', '2022-05-18 02:15:00', 'N', '15.00', '17', '2' ),
( '4', '2022-05-18 02:16:00', '2022-05-18 02:16:00', 'N', '15.00', '18', '2' ),
( '5', '2022-05-18 02:18:00', '2022-05-18 02:18:00', 'N', '15.00', '19', '2' ),
( '6', '2022-05-18 02:27:00', '2022-05-18 02:27:00', 'N', '15.00', '20', '2' ),
( '7', '2022-05-18 02:31:00', '2022-05-18 02:31:00', 'N', '15.00', '22', '2' ),
( '8', '2022-05-18 02:32:00', '2022-05-18 02:32:00', 'N', '15.00', '23', '2' ),
( '9', '2022-05-18 02:33:00', '2022-05-18 02:33:00', 'N', '15.00', '24', '2' ),
( '10', '2022-05-18 02:34:00', '2022-05-18 02:34:00', 'N', '15.00', '25', '2' ),
( '11', '2022-05-18 02:34:00', '2022-05-18 02:34:00', 'N', '15.00', '26', '2' ),
( '12', '2022-05-18 02:34:00', '2022-05-18 02:34:00', 'N', '15.00', '27', '2' ),
( '13', '2022-05-18 02:34:00', '2022-05-18 02:34:00', 'N', '15.00', '28', '2' ),
( '14', '2022-05-18 02:35:00', '2022-05-18 02:35:00', 'N', '15.00', '29', '2' );
-- ---------------------------------------------------------


-- Dump data of "pedido_item" ------------------------------
INSERT INTO `pedido_item`(`id`,`data_criacao`,`data_atualizacao`,`preco`,`quantidade`,`sku`,`fk_pedido`,`fk_produto`,`valor_total_item`) VALUES
( '1', '2022-05-15 00:00:00', '2022-05-15 00:00:00', '100.99', '2.00', '1000', '1', '1', '201.98' ),
( '2', '2022-05-15 00:00:00', '2022-05-15 00:00:00', '69.81', '5.00', '1001', '1', '2', '349.05' ),
( '3', '2022-05-18 02:13:00', '2022-05-18 02:13:00', '190.59', '1.00', '1000', '16', '1', '190.59' ),
( '4', '2022-05-18 02:15:00', '2022-05-18 02:15:00', '190.59', '1.00', '1000', '17', '1', '190.59' ),
( '5', '2022-05-18 02:16:00', '2022-05-18 02:16:00', '190.59', '1.00', '1000', '18', '1', '190.59' ),
( '6', '2022-05-18 02:18:00', '2022-05-18 02:18:00', '190.59', '1.00', '1000', '19', '1', '190.59' ),
( '7', '2022-05-18 02:27:00', '2022-05-18 02:27:00', '190.59', '2.00', '1000', '20', '1', '381.18' ),
( '8', '2022-05-18 02:29:00', '2022-05-18 02:29:00', '190.59', '2.00', '1000', '21', '1', '381.18' ),
( '9', '2022-05-18 02:31:00', '2022-05-18 02:31:00', '190.59', '2.00', '1000', '22', '1', '381.18' ),
( '10', '2022-05-18 02:32:00', '2022-05-18 02:32:00', '190.59', '2.00', '1000', '23', '1', '381.18' ),
( '11', '2022-05-18 02:33:00', '2022-05-18 02:33:00', '190.59', '2.00', '1000', '24', '1', '381.18' ),
( '12', '2022-05-18 02:34:00', '2022-05-18 02:34:00', '190.59', '2.00', '1000', '25', '1', '381.18' ),
( '13', '2022-05-18 02:34:00', '2022-05-18 02:34:00', '190.59', '2.00', '1000', '26', '1', '381.18' ),
( '14', '2022-05-18 02:34:00', '2022-05-18 02:34:00', '190.59', '2.00', '1000', '27', '1', '381.18' ),
( '15', '2022-05-18 02:34:00', '2022-05-18 02:34:00', '190.59', '2.00', '1000', '28', '1', '381.18' ),
( '16', '2022-05-18 02:35:00', '2022-05-18 02:35:00', '190.59', '2.00', '1000', '29', '1', '381.18' ),
( '17', '2022-05-18 02:35:00', '2022-05-18 02:35:00', '75.99', '3.00', '1001', '29', '2', '227.97' );
-- ---------------------------------------------------------


-- Dump data of "pedido_pagamento" -------------------------
INSERT INTO `pedido_pagamento`(`id`,`data_atualizacao`,`data_criacao`,`status_pagamento`,`valor_total_entrega`,`forma_pagamento`,`valor_total_item`,`valor_total_pedido`,`fk_pedido`,`info`) VALUES
( '1', '2022-05-15 00:00:00', '2022-05-15 00:00:00', 'P', '5.99', 'CARTAO_CREDITO', '551.03', '557.02', '1', '' ),
( '2', '2022-05-18 02:33:00', '2022-05-18 02:33:00', 'N', '15.00', 'CARTAO_CREDITO', '381.18', '396.18', '24', '{"type":"CARTAO_CREDITO","info":{"name":"","number":"","valid":"","ccv":"","installment":"1"}}' ),
( '3', '2022-05-18 02:34:00', '2022-05-18 02:34:00', 'N', '15.00', 'CARTAO_CREDITO', '381.18', '396.18', '25', '{"type":"CARTAO_CREDITO","info":{"name":"","number":"","valid":"","ccv":"","installment":"1"}}' ),
( '4', '2022-05-18 02:34:00', '2022-05-18 02:34:00', 'N', '15.00', 'CARTAO_CREDITO', '381.18', '396.18', '26', '{"type":"CARTAO_CREDITO","info":{"name":"","number":"","valid":"","ccv":"","installment":"1"}}' ),
( '5', '2022-05-18 02:34:00', '2022-05-18 02:34:00', 'N', '15.00', 'CARTAO_CREDITO', '381.18', '396.18', '27', '{"type":"CARTAO_CREDITO","info":{"name":"","number":"","valid":"","ccv":"","installment":"1"}}' ),
( '6', '2022-05-18 02:34:00', '2022-05-18 02:34:00', 'N', '15.00', 'CARTAO_CREDITO', '381.18', '396.18', '28', '{"type":"CARTAO_CREDITO","info":{"name":"","number":"","valid":"","ccv":"","installment":"1"}}' ),
( '7', '2022-05-18 02:35:00', '2022-05-18 02:35:00', 'N', '15.00', 'CARTAO_CREDITO', '609.15', '624.15', '29', '{"type":"CARTAO_CREDITO","info":{"name":"sgdsgfsgsxzgxd","number":"21321321321","valid":"10\\/02","ccv":"654","installment":"5"}}' );
-- ---------------------------------------------------------


-- Dump data of "produto" ----------------------------------
INSERT INTO `produto`(`id`,`sku`,`nome`,`descricao_prod`,`url`,`foto`,`fl_desabilitado`,`fk_categoria`) VALUES
( '1', '1000', 'Cerveja Brahma', 'Otimo produto', 'cerveja Brahma 500ml', 'produtos/01.jpg', '0', '1' ),
( '2', '1001', 'Gin', 'Bom produto', 'gin', 'produtos/02.jpg', '0', '2' ),
( '3', '1002', 'Busca Vida', 'Otimo produto 3', 'busca_vida', 'produtos/03.jpg', '0', '1' ),
( '4', '1003', 'Conhaque', 'Bom produto 4', 'conhaque', 'produtos/04.jpg', '0', '1' ),
( '5', '1004', 'Vinho Tinto', 'Bom produto 4', 'Vinto Sangue de Boi', 'produtos/04.jpg', '0', '2' ),
( '6', '1005', 'Wisky', 'Bom produto 4', 'Red Label 1L', 'produtos/04.jpg', '0', '2' ),
( '7', '1006', 'Amarula', 'Bom produto 4', 'Amarula Sympla 400ml', 'produtos/04.jpg', '0', '2' );
-- ---------------------------------------------------------


-- Dump data of "produto_categoria" ------------------------
INSERT INTO `produto_categoria`(`id`,`nome`) VALUES
( '1', 'Mais vendidos' ),
( '2', 'Promoções' ),
('3', 'Vinho');

-- ---------------------------------------------------------


-- Dump data of "produto_estoque" --------------------------
INSERT INTO `produto_estoque`(`id`,`sku`,`quantidade`,`data_criacao`,`fk_produto`) VALUES
( '1', '1000', '500.00', '2022-05-15 10:10:00', '1' ),
( '2', '1001', '1100.00', '2022-05-15 10:10:00', '2' ),
( '3', '1001', '10.00', '2022-05-16 10:10:00', '2' ),
( '4', '1000', '250.00', '2022-04-15 10:10:00', '1' );
-- ---------------------------------------------------------


-- Dump data of "produto_preco" ----------------------------
INSERT INTO `produto_preco`(`id`,`sku`,`preco`,`data_criacao`,`fk_produto`) VALUES
( '1', '1000', '100.99', '2022-05-15 10:10:00', '1' ),
( '2', '1001', '69.81', '2022-05-15 10:10:00', '2' ),
( '3', '1000', '190.59', '2022-05-11 10:10:00', '1' ),
( '4', '1001', '75.99', '2022-05-03 10:10:00', '2' ),
( '5', '1002', '120.00', '2022-05-05 00:00:00', '3' ),
( '6', '1003', '90.00', '2022-05-05 00:00:00', '4' );
-- ---------------------------------------------------------


-- CREATE INDEX "fk_cliente_endereco_cliente_idx" --------------
CREATE INDEX `fk_cliente_endereco_cliente_idx` USING BTREE ON `cliente_endereco`( `fk_cliente` );
-- -------------------------------------------------------------


-- CREATE INDEX "index2" ---------------------------------------
CREATE INDEX `index2` USING BTREE ON `pedido`( `fk_cliente` );
-- -------------------------------------------------------------


-- CREATE INDEX "index3" ---------------------------------------
CREATE INDEX `index3` USING BTREE ON `pedido`( `status_pedido` );
-- -------------------------------------------------------------


-- CREATE INDEX "fk_pedido_entrega_pedido1_idx" ----------------
CREATE INDEX `fk_pedido_entrega_pedido1_idx` USING BTREE ON `pedido_entrega`( `fk_pedido` );
-- -------------------------------------------------------------


-- CREATE INDEX "index3" ---------------------------------------
CREATE INDEX `index3` USING BTREE ON `pedido_entrega`( `fk_cliente_endereco` );
-- -------------------------------------------------------------


-- CREATE INDEX "fk_pedido_item_pedido1_idx" -------------------
CREATE INDEX `fk_pedido_item_pedido1_idx` USING BTREE ON `pedido_item`( `fk_pedido` );
-- -------------------------------------------------------------


-- CREATE INDEX "index3" ---------------------------------------
CREATE INDEX `index3` USING BTREE ON `pedido_item`( `sku` );
-- -------------------------------------------------------------


-- CREATE INDEX "index4" ---------------------------------------
CREATE INDEX `index4` USING BTREE ON `pedido_item`( `fk_produto` );
-- -------------------------------------------------------------


-- CREATE INDEX "fk_pedido_pagamento_pedido1_idx" --------------
CREATE INDEX `fk_pedido_pagamento_pedido1_idx` USING BTREE ON `pedido_pagamento`( `fk_pedido` );
-- -------------------------------------------------------------


-- CREATE INDEX "fk_produto_categoria_produto1" ----------------
CREATE INDEX `fk_produto_categoria_produto1` USING BTREE ON `produto`( `fk_categoria` );
-- -------------------------------------------------------------


-- CREATE INDEX "index2" ---------------------------------------
CREATE INDEX `index2` USING BTREE ON `produto`( `sku` );
-- -------------------------------------------------------------


-- CREATE INDEX "fk_produto_estoque_produto1_idx" --------------
CREATE INDEX `fk_produto_estoque_produto1_idx` USING BTREE ON `produto_estoque`( `fk_produto` );
-- -------------------------------------------------------------


-- CREATE INDEX "index2" ---------------------------------------
CREATE INDEX `index2` USING BTREE ON `produto_estoque`( `sku` );
-- -------------------------------------------------------------


-- CREATE INDEX "fk_produto_preco_produto1_idx" ----------------
CREATE INDEX `fk_produto_preco_produto1_idx` USING BTREE ON `produto_preco`( `fk_produto` );
-- -------------------------------------------------------------


-- CREATE INDEX "index2" ---------------------------------------
CREATE INDEX `index2` USING BTREE ON `produto_preco`( `sku` );
-- -------------------------------------------------------------


-- CREATE LINK "fk_cliente_endereco_cliente" -------------------
ALTER TABLE `cliente_endereco`
	ADD CONSTRAINT `fk_cliente_endereco_cliente` FOREIGN KEY ( `fk_cliente` )
	REFERENCES `cliente`( `id` )
	ON DELETE No Action
	ON UPDATE No Action;
-- -------------------------------------------------------------


-- CREATE LINK "fk_pedido_entrega_pedido1" ---------------------
ALTER TABLE `pedido_entrega`
	ADD CONSTRAINT `fk_pedido_entrega_pedido1` FOREIGN KEY ( `fk_pedido` )
	REFERENCES `pedido`( `id` )
	ON DELETE No Action
	ON UPDATE No Action;
-- -------------------------------------------------------------


-- CREATE LINK "fk_pedido_item_pedido1" ------------------------
ALTER TABLE `pedido_item`
	ADD CONSTRAINT `fk_pedido_item_pedido1` FOREIGN KEY ( `fk_pedido` )
	REFERENCES `pedido`( `id` )
	ON DELETE No Action
	ON UPDATE No Action;
-- -------------------------------------------------------------


-- CREATE LINK "fk_pedido_pagamento_pedido1" -------------------
ALTER TABLE `pedido_pagamento`
	ADD CONSTRAINT `fk_pedido_pagamento_pedido1` FOREIGN KEY ( `fk_pedido` )
	REFERENCES `pedido`( `id` )
	ON DELETE No Action
	ON UPDATE No Action;
-- -------------------------------------------------------------


-- CREATE LINK "fk_produto_categoria_produto1" -----------------
ALTER TABLE `produto`
	ADD CONSTRAINT `fk_produto_categoria_produto1` FOREIGN KEY ( `fk_categoria` )
	REFERENCES `produto_categoria`( `id` )
	ON DELETE No Action
	ON UPDATE No Action;
-- -------------------------------------------------------------


-- CREATE LINK "fk_produto_estoque_produto1" -------------------
ALTER TABLE `produto_estoque`
	ADD CONSTRAINT `fk_produto_estoque_produto1` FOREIGN KEY ( `fk_produto` )
	REFERENCES `produto`( `id` )
	ON DELETE No Action
	ON UPDATE No Action;
-- -------------------------------------------------------------


-- CREATE LINK "fk_produto_preco_produto1" ---------------------
ALTER TABLE `produto_preco`
	ADD CONSTRAINT `fk_produto_preco_produto1` FOREIGN KEY ( `fk_produto` )
	REFERENCES `produto`( `id` )
	ON DELETE No Action
	ON UPDATE No Action;
-- -------------------------------------------------------------


/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
-- ---------------------------------------------------------


