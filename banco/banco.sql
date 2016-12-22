-- MySQL dump 10.13  Distrib 5.7.12, for Win64 (x86_64)
--
-- Host: localhost    Database: pfc
-- ------------------------------------------------------
-- Server version	5.6.17

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `apostas`
--

DROP TABLE IF EXISTS `apostas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `apostas` (
  `idapostas` int(11) NOT NULL AUTO_INCREMENT,
  `valor` decimal(15,2) NOT NULL,
  `apostas_idpartidas` int(11) NOT NULL,
  `apostas_idtimes` int(11) NOT NULL,
  `apostas_idusuario` int(11) NOT NULL,
  `resultado` decimal(15,2) DEFAULT NULL,
  PRIMARY KEY (`idapostas`),
  KEY `fk_apostas_1_idx` (`apostas_idpartidas`),
  KEY `fk_apostas_2_idx` (`apostas_idtimes`),
  KEY `fk_apostas_3_idx` (`apostas_idusuario`),
  CONSTRAINT `apostas-partidas` FOREIGN KEY (`apostas_idpartidas`) REFERENCES `partidas` (`idpartidas`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `apostas-times` FOREIGN KEY (`apostas_idtimes`) REFERENCES `times` (`idtimes`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `apostas-usuario` FOREIGN KEY (`apostas_idusuario`) REFERENCES `usuario` (`idusuario`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `apostas`
--

LOCK TABLES `apostas` WRITE;
/*!40000 ALTER TABLE `apostas` DISABLE KEYS */;
INSERT INTO `apostas` VALUES (1,9.00,1,2,18,NULL),(2,120.00,1,2,19,NULL),(3,5.00,1,3,18,NULL),(4,2.00,1,3,18,NULL),(5,4.00,1,3,18,NULL),(6,245.00,7,13,18,NULL),(7,160.00,7,17,22,NULL),(8,325.00,7,13,25,NULL),(9,90.00,7,17,26,NULL),(10,405.00,7,13,27,NULL),(11,500.00,7,17,28,NULL),(12,260.00,8,14,18,NULL),(13,200.00,8,15,22,NULL),(14,500.00,8,14,25,NULL),(15,320.00,8,15,26,NULL),(16,186.00,9,5,27,NULL),(17,340.00,12,30,28,NULL),(18,300.00,12,35,22,NULL),(19,297.00,13,4,22,NULL),(20,91.00,13,16,28,NULL),(21,127.00,14,22,22,NULL),(22,333.00,22,2,22,NULL),(23,350.00,22,30,27,NULL),(24,133.00,21,23,22,NULL),(25,277.00,21,30,27,NULL);
/*!40000 ALTER TABLE `apostas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `campeonatos`
--

DROP TABLE IF EXISTS `campeonatos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `campeonatos` (
  `idcampeonatos` int(11) NOT NULL AUTO_INCREMENT,
  `nome_campeonato` varchar(45) NOT NULL,
  `sigla_campeonato` varchar(10) NOT NULL,
  `campeonatos_idregiao` int(11) NOT NULL,
  `campeonatos_idjogo` int(11) NOT NULL,
  PRIMARY KEY (`idcampeonatos`),
  KEY `fk_campeonatos_1_idx` (`campeonatos_idjogo`),
  KEY `fk_campeonatos_2_idx` (`campeonatos_idregiao`),
  CONSTRAINT `campeonatos-jogo` FOREIGN KEY (`campeonatos_idjogo`) REFERENCES `jogo` (`idjogo`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `campeonatos-regiao` FOREIGN KEY (`campeonatos_idregiao`) REFERENCES `regiao` (`idregiao`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `campeonatos`
--

LOCK TABLES `campeonatos` WRITE;
/*!40000 ALTER TABLE `campeonatos` DISABLE KEYS */;
INSERT INTO `campeonatos` VALUES (1,'campeonato CS','CSS',6,1);
/*!40000 ALTER TABLE `campeonatos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `comentario`
--

DROP TABLE IF EXISTS `comentario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `comentario` (
  `idcomentario` int(11) NOT NULL AUTO_INCREMENT,
  `comentario_idusuario` int(11) NOT NULL,
  `comentario_idpartidas` int(11) NOT NULL,
  `texto` varchar(200) NOT NULL,
  `estado` int(1) NOT NULL,
  PRIMARY KEY (`idcomentario`),
  KEY `fk_comentario_1_idx` (`comentario_idusuario`),
  KEY `fk_comentario_2_idx` (`comentario_idpartidas`),
  CONSTRAINT `comentario-partidas` FOREIGN KEY (`comentario_idpartidas`) REFERENCES `partidas` (`idpartidas`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `comentario-usuario` FOREIGN KEY (`comentario_idusuario`) REFERENCES `usuario` (`idusuario`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `comentario`
--

LOCK TABLES `comentario` WRITE;
/*!40000 ALTER TABLE `comentario` DISABLE KEYS */;
/*!40000 ALTER TABLE `comentario` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `conquista`
--

DROP TABLE IF EXISTS `conquista`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `conquista` (
  `idconquista` int(11) NOT NULL AUTO_INCREMENT,
  `ano` int(11) NOT NULL,
  `nome` varchar(45) NOT NULL,
  PRIMARY KEY (`idconquista`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `conquista`
--

LOCK TABLES `conquista` WRITE;
/*!40000 ALTER TABLE `conquista` DISABLE KEYS */;
/*!40000 ALTER TABLE `conquista` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `denuncia`
--

DROP TABLE IF EXISTS `denuncia`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `denuncia` (
  `iddenuncia` int(11) NOT NULL AUTO_INCREMENT,
  `denuncia_idcomentario` int(11) DEFAULT NULL,
  `datadenuncia` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `denuncia_idusuario` int(11) DEFAULT NULL,
  PRIMARY KEY (`iddenuncia`),
  KEY `denuncia-comentario_idx` (`denuncia_idcomentario`),
  KEY `denuncia-usuario_idx` (`denuncia_idusuario`),
  CONSTRAINT `denuncia-comentario` FOREIGN KEY (`denuncia_idcomentario`) REFERENCES `comentario` (`idcomentario`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `denuncia-usuario` FOREIGN KEY (`denuncia_idusuario`) REFERENCES `usuario` (`idusuario`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `denuncia`
--

LOCK TABLES `denuncia` WRITE;
/*!40000 ALTER TABLE `denuncia` DISABLE KEYS */;
/*!40000 ALTER TABLE `denuncia` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `jogador`
--

DROP TABLE IF EXISTS `jogador`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `jogador` (
  `idjogador` int(11) NOT NULL AUTO_INCREMENT,
  `nome_jogador` varchar(45) DEFAULT NULL,
  `nick` varchar(45) NOT NULL,
  `jogador_idtimes` int(11) NOT NULL,
  PRIMARY KEY (`idjogador`),
  KEY `fk_jogador_1_idx` (`jogador_idtimes`),
  CONSTRAINT `jogador-times` FOREIGN KEY (`jogador_idtimes`) REFERENCES `times` (`idtimes`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `jogador`
--

LOCK TABLES `jogador` WRITE;
/*!40000 ALTER TABLE `jogador` DISABLE KEYS */;
INSERT INTO `jogador` VALUES (1,'Dauren Kystaubayev','AdreN',1),(2,'Leandro','hooch',1),(3,'Alexandre Pianaro','bodyy',17),(4,'Lincoln Lau','fnx',13);
/*!40000 ALTER TABLE `jogador` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `jogo`
--

DROP TABLE IF EXISTS `jogo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `jogo` (
  `idjogo` int(11) NOT NULL AUTO_INCREMENT,
  `jogo_descricao` varchar(45) NOT NULL,
  `jogo_idtipo_jogo` int(11) NOT NULL,
  PRIMARY KEY (`idjogo`),
  KEY `fk_jogo_1_idx` (`jogo_idtipo_jogo`),
  CONSTRAINT `jogo-tipo_jogo` FOREIGN KEY (`jogo_idtipo_jogo`) REFERENCES `tipo_jogo` (`idtipo_jogo`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `jogo`
--

LOCK TABLES `jogo` WRITE;
/*!40000 ALTER TABLE `jogo` DISABLE KEYS */;
INSERT INTO `jogo` VALUES (1,'counter-strike',1),(2,'league of legends',3),(4,'crossfire',1),(5,'smite',3),(6,'heroes of the storm',3),(7,'raibow six siege',1);
/*!40000 ALTER TABLE `jogo` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `noticias`
--

DROP TABLE IF EXISTS `noticias`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `noticias` (
  `idnoticias` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(200) NOT NULL,
  `corpo` varchar(200) NOT NULL,
  `data` date NOT NULL,
  `fonte` varchar(45) NOT NULL,
  PRIMARY KEY (`idnoticias`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `noticias`
--

LOCK TABLES `noticias` WRITE;
/*!40000 ALTER TABLE `noticias` DISABLE KEYS */;
INSERT INTO `noticias` VALUES (11,'Brasileiro Coldzera vence prêmio de melhor jogador de E-Sports do Ano no Game Awards 2016','1','2016-12-06','IGN'),(12,'adc','12','2016-04-12','IGN');
/*!40000 ALTER TABLE `noticias` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `partidas`
--

DROP TABLE IF EXISTS `partidas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `partidas` (
  `idpartidas` int(11) NOT NULL AUTO_INCREMENT,
  `data` datetime NOT NULL,
  `partidas_idcampeonatos` int(11) NOT NULL,
  PRIMARY KEY (`idpartidas`),
  KEY `fk_partidas_1_idx` (`partidas_idcampeonatos`),
  CONSTRAINT `partidas-campeonatos` FOREIGN KEY (`partidas_idcampeonatos`) REFERENCES `campeonatos` (`idcampeonatos`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `partidas`
--

LOCK TABLES `partidas` WRITE;
/*!40000 ALTER TABLE `partidas` DISABLE KEYS */;
INSERT INTO `partidas` VALUES (1,'2016-07-05 06:00:00',1),(2,'2016-07-05 07:15:00',1),(3,'2016-07-05 13:45:00',1),(4,'2016-07-05 14:45:00',1),(5,'2016-07-05 16:00:00',1),(6,'2016-07-05 17:15:00',1),(7,'2016-07-05 18:30:00',1),(8,'2016-07-05 19:45:00',1),(9,'2017-02-10 15:00:00',1),(11,'1999-06-04 14:00:00',1),(12,'2016-12-06 13:00:00',1),(13,'2016-12-07 14:00:00',1),(14,'2016-12-09 13:00:00',1),(15,'2016-07-05 13:45:00',1),(16,'2016-07-05 14:45:00',1),(17,'2016-07-05 16:00:00',1),(18,'2016-07-05 17:15:00',1),(19,'2016-07-05 18:30:00',1),(20,'2016-07-05 19:45:00',1),(21,'2016-12-21 13:00:00',1),(22,'2016-07-12 15:00:00',1);
/*!40000 ALTER TABLE `partidas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `regiao`
--

DROP TABLE IF EXISTS `regiao`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `regiao` (
  `idregiao` int(11) NOT NULL AUTO_INCREMENT,
  `regiao_descricao` varchar(45) NOT NULL,
  PRIMARY KEY (`idregiao`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `regiao`
--

LOCK TABLES `regiao` WRITE;
/*!40000 ALTER TABLE `regiao` DISABLE KEYS */;
INSERT INTO `regiao` VALUES (1,''),(2,'oceania'),(3,'europa'),(4,'europa'),(5,'europa'),(6,'américa latina');
/*!40000 ALTER TABLE `regiao` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `seguindo`
--

DROP TABLE IF EXISTS `seguindo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `seguindo` (
  `idtimes` int(11) NOT NULL,
  `idusuario` int(11) NOT NULL,
  `lida` char(1) DEFAULT NULL,
  PRIMARY KEY (`idtimes`,`idusuario`),
  KEY `seguindo-usuario_idx` (`idusuario`),
  CONSTRAINT `seguindo-times` FOREIGN KEY (`idtimes`) REFERENCES `times` (`idtimes`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `seguindo-usuario` FOREIGN KEY (`idusuario`) REFERENCES `usuario` (`idusuario`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `seguindo`
--

LOCK TABLES `seguindo` WRITE;
/*!40000 ALTER TABLE `seguindo` DISABLE KEYS */;
/*!40000 ALTER TABLE `seguindo` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `times`
--

DROP TABLE IF EXISTS `times`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `times` (
  `idtimes` int(11) NOT NULL AUTO_INCREMENT,
  `nome_time` varchar(45) NOT NULL,
  `sigla_times` varchar(10) NOT NULL,
  `times_idjogo` int(11) NOT NULL,
  PRIMARY KEY (`idtimes`),
  KEY `times-jogo_idx` (`times_idjogo`),
  CONSTRAINT `times-jogo` FOREIGN KEY (`times_idjogo`) REFERENCES `jogo` (`idjogo`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `times`
--

LOCK TABLES `times` WRITE;
/*!40000 ALTER TABLE `times` DISABLE KEYS */;
INSERT INTO `times` VALUES (1,'gambit gaming','GG',1),(2,'Astralis','AST',1),(3,'team dignitas','DIG',1),(4,'counter logic gaming','CLG',1),(5,'natus vincere','NAVI',1),(6,'Flipsid3 tatics','F3',1),(7,'Ninjas in Pyjamas','NIP',1),(8,'OpTic gaming','OG',1),(9,'Virtus.pro','VP',1),(10,'team liquid','TL',1),(11,'mousesports','MS',1),(12,'team enVyUs','NV',1),(13,'SK Gaming','SK',1),(14,'Immortals','IM',1),(15,'Fnatic','FNC',1),(16,'FaZe clan','FZC',1),(17,'G2 eports','G2',1),(18,'INTZ','ITZ',7),(19,'BBhost','BB',7),(20,'Santos Dexterity','DEX',7),(21,'Team United','TU',7),(22,'Black Dragons','BLC',7),(23,'Assault Team','AST',7),(24,'paiN Gaming','PNG',7),(25,'V3 Master','V3M',7),(26,'Team Innova TOMBOY','TI',4),(27,'INTZ','ITZ',4),(28,'g3nerationX','G3X',4),(29,'Brave e-sports','BRV',4),(30,'2Kill Gaming','2KG',4),(31,'Brave e-sports','BRV',5),(32,'RED Canids','RED',5),(33,'INTZ','ITZ',5),(34,'Operation KINO','OPK',5),(35,'CNB e-sports','CNB',5),(36,'Eternal Rally','ETR',5);
/*!40000 ALTER TABLE `times` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `times_conquista`
--

DROP TABLE IF EXISTS `times_conquista`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `times_conquista` (
  `idconquista_times` int(11) NOT NULL,
  `idtimes_conquista` int(11) NOT NULL,
  `colocacao` varchar(45) NOT NULL,
  PRIMARY KEY (`idconquista_times`,`idtimes_conquista`),
  KEY `fk_times_conquista_1_idx` (`idtimes_conquista`),
  CONSTRAINT `fk_times_conquista_1` FOREIGN KEY (`idtimes_conquista`) REFERENCES `times` (`idtimes`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_times_conquista_2` FOREIGN KEY (`idconquista_times`) REFERENCES `conquista` (`idconquista`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `times_conquista`
--

LOCK TABLES `times_conquista` WRITE;
/*!40000 ALTER TABLE `times_conquista` DISABLE KEYS */;
/*!40000 ALTER TABLE `times_conquista` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `times_partida`
--

DROP TABLE IF EXISTS `times_partida`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `times_partida` (
  `times_partidas_idtimes` int(11) NOT NULL,
  `times_partidas_idpartidas` int(11) NOT NULL,
  `ganhador` char(1) DEFAULT NULL,
  PRIMARY KEY (`times_partidas_idtimes`,`times_partidas_idpartidas`),
  KEY `fk_time_partida_1_idx` (`times_partidas_idpartidas`),
  CONSTRAINT `partida` FOREIGN KEY (`times_partidas_idpartidas`) REFERENCES `partidas` (`idpartidas`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `time` FOREIGN KEY (`times_partidas_idtimes`) REFERENCES `times` (`idtimes`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `times_partida`
--

LOCK TABLES `times_partida` WRITE;
/*!40000 ALTER TABLE `times_partida` DISABLE KEYS */;
INSERT INTO `times_partida` VALUES (1,2,'s'),(2,1,'s'),(2,11,'n'),(2,22,'n'),(3,1,'n'),(4,2,'n'),(4,13,'s'),(5,3,'s'),(5,9,'s'),(6,3,'n'),(6,9,'n'),(7,4,'s'),(8,4,'n'),(10,5,'s'),(11,6,'n'),(12,5,'n'),(13,7,'s'),(14,8,'s'),(15,8,'n'),(16,6,'s'),(16,13,'n'),(17,7,'n'),(22,14,'n'),(23,21,'n'),(30,11,'s'),(30,12,'n'),(30,14,'s'),(30,21,'s'),(30,22,'s'),(35,12,'s');
/*!40000 ALTER TABLE `times_partida` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tipo_jogo`
--

DROP TABLE IF EXISTS `tipo_jogo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tipo_jogo` (
  `idtipo_jogo` int(11) NOT NULL AUTO_INCREMENT,
  `tipojogo_descricao` varchar(45) NOT NULL,
  PRIMARY KEY (`idtipo_jogo`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tipo_jogo`
--

LOCK TABLES `tipo_jogo` WRITE;
/*!40000 ALTER TABLE `tipo_jogo` DISABLE KEYS */;
INSERT INTO `tipo_jogo` VALUES (1,'fps'),(2,'rpg'),(3,'moba');
/*!40000 ALTER TABLE `tipo_jogo` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuario`
--

DROP TABLE IF EXISTS `usuario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usuario` (
  `idusuario` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(80) NOT NULL,
  `senha` varchar(65) NOT NULL,
  `nome` varchar(60) NOT NULL,
  `dinheiros` decimal(15,2) NOT NULL,
  `tipo_usuario` int(11) NOT NULL,
  PRIMARY KEY (`idusuario`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuario`
--

LOCK TABLES `usuario` WRITE;
/*!40000 ALTER TABLE `usuario` DISABLE KEYS */;
INSERT INTO `usuario` VALUES (18,'jose@mail.com','44fb38a3c1dd34b33dc5bdbe544fa6e9','josé',777.89,1),(19,'teste@mail.com','698dc19d489c4e4db73e28a713eab07b','Teste de teste',500.00,1),(20,'stre@gmail.com','3d2172418ce305c7d16d4b05597c6a59','cris',500.00,1),(21,'admin@mail.com','21232f297a57a5a743894a0e4a801fc3','admin',500.00,2),(22,'leandro@mail.com','3f3ce8d94f88d42322e7204f702c138f','leandro',138.00,1),(23,'seila@mail.com','6e7b2ce2952496d9a8968259e8c2a3d4','seila',500.00,1),(24,'viny@mail.com','4a2525e5b3d4d8a2df9944775e50380a','vinycius',500.00,1),(25,'joao@mail.com','dccd96c256bc7dd39bae41a405f25e43','joão',842.11,1),(26,'ana@mail.com','276b6c4692e78d4799c12ada515bc3e4','ana',180.00,1),(27,'paula@mail.com','1b207465eac83b5d4b12e335faa0b53a','paula',966.00,1),(28,'maria@mail.com','263bce650e68ab4e23f28263760b9fa5','maria',69.00,1);
/*!40000 ALTER TABLE `usuario` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping events for database 'pfc'
--

--
-- Dumping routines for database 'pfc'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-12-22 12:52:30
