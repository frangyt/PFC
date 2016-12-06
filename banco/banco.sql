-- MySQL dump 10.13  Distrib 5.7.15, for Linux (x86_64)
--
-- Host: localhost    Database: pfc
-- ------------------------------------------------------
-- Server version	5.7.15-0ubuntu0.16.04.1

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
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `apostas`
--

LOCK TABLES `apostas` WRITE;
/*!40000 ALTER TABLE `apostas` DISABLE KEYS */;
INSERT INTO `apostas` VALUES (1,9.00,1,2,18,NULL),(2,120.00,1,2,19,NULL),(3,5.00,1,3,18,NULL),(4,2.00,1,3,18,NULL),(5,4.00,1,3,18,NULL);
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
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `jogo`
--

LOCK TABLES `jogo` WRITE;
/*!40000 ALTER TABLE `jogo` DISABLE KEYS */;
INSERT INTO `jogo` VALUES (1,'counter-strike',1),(2,'league of legends',3);
/*!40000 ALTER TABLE `jogo` ENABLE KEYS */;
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
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `partidas`
--

LOCK TABLES `partidas` WRITE;
/*!40000 ALTER TABLE `partidas` DISABLE KEYS */;
INSERT INTO `partidas` VALUES (1,'2016-07-05 06:00:00',1),(2,'2016-07-05 07:15:00',1);
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
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `times`
--

LOCK TABLES `times` WRITE;
/*!40000 ALTER TABLE `times` DISABLE KEYS */;
INSERT INTO `times` VALUES (1,'gambit gaming','GG',1),(2,'Astralis','AST',1),(3,'team dignitas','DIG',1),(4,'counter logic gaming','CLG',1),(5,'natus vincere','NAVI',1),(6,'Flipsid3 tatics','F3',1),(7,'Ninjas in Pyjamas','NIP',1),(8,'OpTic gaming','OG',1),(9,'Virtus.pro','VP',1),(10,'team liquid','TL',1),(11,'mousesports','MS',1),(12,'team enVyUs','NV',1),(13,'SK Gaming','SK',1),(14,'Dnatic','',1),(15,'Fnatic','FNC',1),(16,'FaZe clan','FZC',1),(17,'G2 eports','G2',1);
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
INSERT INTO `times_partida` VALUES (1,2,NULL),(2,1,'s'),(3,1,'n'),(4,2,NULL);
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
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuario`
--

LOCK TABLES `usuario` WRITE;
/*!40000 ALTER TABLE `usuario` DISABLE KEYS */;
INSERT INTO `usuario` VALUES (18,'jose@mail.com','44fb38a3c1dd34b33dc5bdbe544fa6e9','josé',0.00,1),(19,'teste@mail.com','698dc19d489c4e4db73e28a713eab07b','Teste de teste',20.00,1),(20,'stre@gmail.com','3d2172418ce305c7d16d4b05597c6a59','cris',500.00,1),(21,'admin@mail.com','21232f297a57a5a743894a0e4a801fc3','admin',500.00,2);
/*!40000 ALTER TABLE `usuario` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-12-06  8:25:59
