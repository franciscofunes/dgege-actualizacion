-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 27-05-2021 a las 22:14:12
-- Versión del servidor: 10.4.18-MariaDB
-- Versión de PHP: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `base_primaria`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `baseprimaria2`
--

CREATE TABLE `baseprimaria2` (
  `PASS_DIRECTOR` varchar(11) NOT NULL,
  `NOMBRE_ESTABLECIMIENTO` varchar(61) CHARACTER SET utf8 DEFAULT NULL,
  `DE` int(11) DEFAULT NULL,
  `TIPO_JORNADA` varchar(9) CHARACTER SET utf8 DEFAULT NULL,
  `HORARIO` varchar(29) CHARACTER SET utf8 DEFAULT NULL,
  `SALAS_INICIAL` varchar(11) CHARACTER SET utf8 DEFAULT NULL,
  `DIRECCION` varchar(37) CHARACTER SET utf8 DEFAULT NULL,
  `TELEFONO` varchar(9) CHARACTER SET utf8 DEFAULT NULL,
  `NOMBRE_APELLIDO_DIR_TITULAR` varchar(29) CHARACTER SET utf8 DEFAULT NULL,
  `NOMBRE_APELLIDO_DIRE_ACARGO` varchar(26) CHARACTER SET utf8 DEFAULT NULL,
  `CELULAR_DIR` int(11) DEFAULT NULL,
  `Column_1er_Grado` int(11) DEFAULT NULL,
  `Column_2do_Grado` int(11) DEFAULT NULL,
  `Column_3er_Grado` int(11) DEFAULT NULL,
  `Column_4to_Grado` int(11) DEFAULT NULL,
  `Column_5to_Grado` int(11) DEFAULT NULL,
  `Column_6to_Grado` int(11) DEFAULT NULL,
  `Column_7mo_Grado` int(11) DEFAULT NULL,
  `Niv` int(11) DEFAULT NULL,
  `Acel` int(11) DEFAULT NULL,
  `TOTAL_SECCIONES` int(11) DEFAULT NULL,
  `Column_1er_Grado_1` int(11) DEFAULT NULL,
  `Column_2do_Grado_1` int(11) DEFAULT NULL,
  `Column_3er_Grado_1` int(11) DEFAULT NULL,
  `Column_4to_Grado_1` int(11) DEFAULT NULL,
  `Column_5to_Grado_1` int(11) DEFAULT NULL,
  `Column_6to_Grado_1` int(11) DEFAULT NULL,
  `Column_7mo_Grado_1` int(11) DEFAULT NULL,
  `Niv_1` int(11) DEFAULT NULL,
  `Acel_1` int(11) DEFAULT NULL,
  `Total` int(11) DEFAULT NULL,
  `MAIL_OFICIAL` varchar(24) CHARACTER SET utf8 DEFAULT NULL,
  `DIRECCION_SUPERVISI_N` varchar(23) CHARACTER SET utf8 DEFAULT NULL,
  `TELEFONO_SUPERVISION` varchar(21) CHARACTER SET utf8 DEFAULT NULL,
  `APELLIDO_NOMBRE_SUPERVISOR` varchar(22) CHARACTER SET utf8 DEFAULT NULL,
  `TELEFONO_DEL_SUPERVISOR_A` int(11) DEFAULT NULL,
  `TIENE_CASERO` varchar(2) CHARACTER SET utf8 DEFAULT NULL,
  `NOMBRE_CASERO` varchar(26) CHARACTER SET utf8 DEFAULT NULL,
  `TELEFONO_1` int(11) DEFAULT NULL,
  `ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `baseprimaria2`
--

INSERT INTO `baseprimaria2` (`PASS_DIRECTOR`, `NOMBRE_ESTABLECIMIENTO`, `DE`, `TIPO_JORNADA`, `HORARIO`, `SALAS_INICIAL`, `DIRECCION`, `TELEFONO`, `NOMBRE_APELLIDO_DIR_TITULAR`, `NOMBRE_APELLIDO_DIRE_ACARGO`, `CELULAR_DIR`, `Column_1er_Grado`, `Column_2do_Grado`, `Column_3er_Grado`, `Column_4to_Grado`, `Column_5to_Grado`, `Column_6to_Grado`, `Column_7mo_Grado`, `Niv`, `Acel`, `TOTAL_SECCIONES`, `Column_1er_Grado_1`, `Column_2do_Grado_1`, `Column_3er_Grado_1`, `Column_4to_Grado_1`, `Column_5to_Grado_1`, `Column_6to_Grado_1`, `Column_7mo_Grado_1`, `Niv_1`, `Acel_1`, `Total`, `MAIL_OFICIAL`, `DIRECCION_SUPERVISI_N`, `TELEFONO_SUPERVISION`, `APELLIDO_NOMBRE_SUPERVISOR`, `TELEFONO_DEL_SUPERVISOR_A`, `TIENE_CASERO`, `NOMBRE_CASERO`, `TELEFONO_1`, `ID`) VALUES
('E4IxRFBB', 'Esc. Primaria Nº 01 DE 07 Tomasa de la Quintana de Escalada', 7, 'COMPLETA', '8,15 a 16,20', '3, 4 Y 5', 'CORRIENTES AV. 5332', '4854-1160', 'TRUBBO Andrea', 'TRUBBO Andrea', 1565222411, 2, 2, 2, 2, 2, 2, 2, 0, 0, 14, 38, 42, 40, 37, 46, 49, 36, 0, 0, 288, 'DEP_EPC1_DE7@bue.edu.ar', 'Apolinario Figueroa 651', '4581-0299 / 4582-6212', 'Zulli, María Antonieta', 1538462475, 'SI', 'SAURO,SILVANA BEATRIZ', 1562874032, 1),
('OHG5j0wc', 'Esc. Primaria Nº 02 DE 07 Francisco Desiderio Herrera', 7, 'EXTENDIDA', '8,00 a 12,15 // 13,00 a 17,15', '4 Y 5', 'CAMARGO 725', '4854-4277', 'ONORATO Daniela', 'PARERA Laura', 1559915593, 4, 4, 3, 2, 3, 3, 3, 0, 0, 22, 32, 30, 47, 35, 49, 47, 49, 0, 0, 289, 'DEP_EPC2_DE7@bue.edu.ar', 'Apolinario Figueroa 651', '4581-0299 / 4582-6212', 'Zulli, María Antonieta', 1538462475, 'NO', 'ONORATO,DANIELA', 1564002264, 2),
('Vp7YUv8u', 'Esc. Primaria Nº 03 DE 07 Primera Junta', 7, 'EXTENDIDA', '8,00 a 12,15 // 13,00 a 17,15', '2, 3, 4 Y 5', 'CAMPICHUELO 100', '4902-1063', 'SPERA Claudia Mónica', 'SPERA Claudia Mónica', 1565470513, 5, 6, 5, 5, 5, 5, 5, 0, 0, 36, 121, 113, 125, 129, 131, 124, 116, 0, 0, 859, 'DEP_EPC3_DE7@bue.edu.ar', 'Apolinario Figueroa 651', '4581-0299 / 4582-6212', 'Zulli, María Antonieta', 1538462475, 'SI', 'ORDOÑEZ, NATALIA LILIANA', 1553440403, 3),
('H5lF9Un8', 'Esc. Primaria Nº 04 DE 07 Presidente Dr. Arturo Umberto Illia', 7, 'EXTENDIDA', '8,00 a 12,15 // 13,00 a 17,15', '2, 3, 4 Y 5', 'RIVADAVIA AV. 6065', '4632-1913', 'PIANO Nora Andrea', 'PIANO Nora Andrea', 1563521692, 4, 4, 3, 4, 4, 4, 3, 0, 0, 26, 59, 84, 74, 60, 89, 73, 65, 0, 0, 504, 'DEP_EPC4_DE7@bue.edu.ar', 'Apolinario Figueroa 651', '4581-0299 / 4582-6212', 'Zulli, María Antonieta', 1538462475, 'SI', 'AGUILAR,OSCAR ZOILO', 1564502256, 4),
('ZDW5g5cl', 'Esc. Primaria Nº 05 DE 07 Juan B. Peña', 7, 'COMPLETA', '8,15 a 16,20', '4 Y 5', 'TRELLES, MANUEL R. 948', '4581-8556', 'BARREIROS María Teresa', 'BARREIROS María Teresa', 1540782902, 2, 2, 2, 2, 2, 2, 2, 0, 0, 14, 48, 47, 51, 52, 51, 52, 45, 0, 0, 346, 'DEP_EPC5_DE7@bue.edu.ar', 'Apolinario Figueroa 651', '4581-0299 / 4582-6212', 'Zulli, María Antonieta', 1538462475, 'NO', 'BARREIROS,MARIA TERESA', 1540782902, 5),
('pUrqT3RK', 'Esc. Primaria Nº 06 DE 07 Delfín Jijena', 7, 'EXTENDIDA', '8,00 a 12,15 // 13,00 a 17,15', NULL, 'OLAYA 1565', '4854-9477', 'ISAAC Msrisa del Carmen', 'ISAAC Msrisa del Carmen', 1563598188, 2, 2, 2, 2, 2, 2, 2, 0, 0, 14, 16, 12, 17, 13, 16, 18, 12, 0, 0, 104, 'DEP_EPC6_DE7@bue.edu.ar', 'Apolinario Figueroa 651', '4581-0299 / 4582-6212', 'Zulli, María Antonieta', 1538462475, 'SI', 'LEZCANO, SILVIA RAQUEL', 1532263795, 6),
('XtgE5vOA', 'Esc. Primaria Nº 08 DE 07 Provincia de San Juan', 7, 'EXTENDIDA', '8,00 a 12,15 // 13,00 a 17,15', '2, 3, 4 Y 5', 'FIGUEROA, D. APOLINARIO, CORONEL 1077', '4582-9333', 'MOVSICHOFF Claudia Zunilda', 'MOVSICHOFF Claudia Zunilda', 1536419252, 4, 4, 4, 2, 2, 2, 2, 0, 0, 20, 60, 45, 58, 53, 57, 56, 55, 0, 0, 384, 'DEP_EPC8_DE7@bue.edu.ar', 'Apolinario Figueroa 651', '4581-0299 / 4582-6212', 'Zulli, María Antonieta', 1538462475, 'SI', 'LUNA,SERGIO FABIAN', 1531686151, 7),
('n2DX5eVx', 'Esc. Primaria Nº 09 DE 07 Japón', 7, 'COMPLETA', '8,15 a 16,20', '5', 'SANCHEZ 1858', '4581-3497', 'KATURCHI Alfredo', 'LANDI Laura Andrea', 1554879560, 1, 1, 1, 1, 1, 1, 1, 0, 0, 7, 23, 20, 22, 22, 19, 20, 22, 0, 0, 148, 'DEP_EPC9_DE7@bue.edu.ar', 'Apolinario Figueroa 651', '4581-0299 / 4582-6212', 'Zulli, María Antonieta', 1538462475, 'NO', 'VILCHES,SILVIA MARIA', 1540830839, 8),
('5ZtnMp8R', 'Esc. Primaria Nº 10 DE 07 Arq. Mario Jose Buschiazzo', 7, 'EXTENDIDA', '8,00 a 12,15 // 13,00 a 17,15', '4 Y 5', 'VALLESE, FELIPE 975', '4431-4632', 'PERRI Rosana', 'LEVY Susana Ruth', 1551179988, 2, 2, 2, 2, 2, 2, 2, 0, 0, 14, 31, 28, 32, 35, 37, 38, 32, 0, 0, 233, 'DEP_EPC10_DE7@bue.edu.ar', 'Apolinario Figueroa 651', '4581-0299 / 4582-6212', 'Zulli, María Antonieta', 1538462475, 'SI', 'GOMEZ,ABEL FABRICIO', 1538620612, 9),
('dLlx4nDQ', 'Esc. Primaria Nº 11 DE 07 Jose Ignacio Gorriti', 7, 'COMPLETA', '8,15 a 16,20', '3, 4 Y 5', 'OROÑO, NICASIO 1431', '4581-9922', 'SALTARELLI Celia (JUBILACION)', 'VILCHES Silvia María', 1540830839, 1, 1, 1, 1, 1, 1, 1, 0, 0, 7, 25, 23, 14, 21, 20, 22, 18, 0, 0, 143, 'DEP_EPC11_DE7@bue.edu.ar', 'Apolinario Figueroa 651', '4581-0299 / 4582-6212', 'Zulli, María Antonieta', 1538462475, 'NO', 'SALTARELLI,CELIA MABEL', 1531608688, 10),
('4EcbySUo', 'Esc. Primaria Nº 12 DE 07 Facundo Zuviria', 7, 'COMPLETA', '8,15 a 16,20', '3 Y 5', 'FRANKLIN 1836', '4581-2783', 'LUZZI ROSANA (JUBILACION)', 'CALVIÑO Analia Veronica', 1534293833, 2, 2, 2, 2, 2, 2, 2, 0, 0, 14, 46, 47, 48, 48, 47, 49, 42, 0, 0, 327, 'DEP_EPC12_DE7@bue.edu.ar', 'Apolinario Figueroa 651', '4581-0299 / 4582-6212', 'Zulli, María Antonieta', 1538462475, 'SI', 'RODRIGUEZ,MIRIAM SOLEDAD', 1537837170, 11),
('6i3sMJnK', 'Esc. Primaria Nº 13 DE 07 Leopoldo Marechal', 7, 'EXTENDIDA', '8,00 a 12,15 // 13,00 a 17,15', '3, 4 Y 5', 'GALICIA 1857', '4581-7386', 'ILLUZZi Verónica', 'ILLUZZi Verónica', 1550153043, 2, 2, 2, 2, 2, 2, 2, 0, 0, 14, 39, 41, 45, 37, 37, 34, 34, 0, 0, 267, 'DEP_EPC13_DE7@bue.edu.ar', 'Apolinario Figueroa 651', '4581-0299 / 4582-6212', 'Zulli, María Antonieta', 1538462475, 'SI', 'GOMEZ,VALENTIN', 1561648323, 12),
('b1qM6Agw', 'Esc. Primaria Nº 14 DE 07 Dr. Ernesto E. Padilla', 7, 'COMPLETA', '8,15 a 16,20', NULL, 'VALLESE, FELIPE 835', '4431-3630', 'MALAGRECA Silvia Marcela', 'MALAGRECA Silvia Marcela', 1540685941, 2, 2, 2, 2, 2, 2, 2, 0, 0, 14, 40, 34, 37, 31, 33, 31, 34, 0, 0, 240, 'DEP_EPC14_DE7@bue.edu.ar', 'Apolinario Figueroa 651', '4581-0299 / 4582-6212', 'Zulli, María Antonieta', 1538462475, 'SI', 'FERNANDEZ,BLANCA MARGARITA', 44318972, 13),
('gCytH2Ng', 'Esc. Primaria Nº 15 DE 07 Gral. Jose Gervasio de Artigas', 7, 'COMPLETA', '8,15 a 16,20', '5', 'LOBOS, ELEODORO, DR. 437', '4982-9706', 'LASCURAIN Norma', 'VERON Maria Rosario', 1567528199, 1, 1, 1, 1, 1, 1, 1, 0, 0, 7, 23, 25, 21, 21, 23, 18, 20, 0, 0, 151, 'DEP_EPC15_DE7@bue.edu.ar', 'Apolinario Figueroa 651', '4581-0299 / 4582-6212', 'Zulli, María Antonieta', 1538462475, 'SI', 'AGUIRRE,ROSA AURORA', 1535825635, 14),
('Q1whXHt0', 'Esc. Primaria Nº 16 DE 07 Andres Ferreyra', 7, 'COMPLETA', '8,15 a 16,20', '3, 4 Y 5', 'FIGUEROA, D. APOLINARIO, CORONEL 661', '4584-0390', 'SOLER Marcela Elena', 'SOLER Marcela Elena', 1567838567, 2, 2, 2, 2, 2, 2, 2, 0, 0, 14, 55, 55, 50, 49, 50, 53, 52, 0, 0, 364, 'DEP_EPC16_DE7@bue.edu.ar', 'Apolinario Figueroa 651', '4581-0299 / 4582-6212', 'Zulli, María Antonieta', 1538462475, 'SI', 'DE PAULIS,CORINA ESTELA', 1533362565, 15),
('N9weKvJq', 'Esc. Primaria Nº 17 DE 07 Francisco de Vitoria', 7, 'COMPLETA', '8,15 a 16,20', '3, 4 Y 5', 'ALVAREZ, JULIAN 240', '4854-0823', 'MAH Marcela Alejandra', 'MAH Marcela Alejandra', 1549162794, 2, 3, 2, 2, 3, 2, 3, 1, 0, 17, 51, 51, 44, 70, 56, 65, 47, 10, 0, 394, 'DEP_EPC17_DE7@bue.edu.ar', 'Apolinario Figueroa 651', '4581-0299 / 4582-6212', 'Zulli, María Antonieta', 1538462475, 'SI', 'PAEZ, ANGELICA LEONOR', 1558189832, 16),
('xPz5QApZ', 'Esc. Primaria Nº 18 DE 07 Comodoro Clodomiro Urtubey', 7, 'EXTENDIDA', '8,00 a 12,15 // 13,00 a 17,15', '4 Y 5', 'MAGARIÑOS CERVANTES, A. 1556', '4581-0978', 'POCZYMOK Marcela', 'RAMOS Jorge Jose', 1535231107, 2, 2, 2, 2, 2, 2, 2, 0, 0, 14, 20, 27, 24, 30, 19, 27, 26, 0, 0, 173, 'DEP_EPC18_DE7@bue.edu.ar', 'Apolinario Figueroa 651', '4581-0299 / 4582-6212', 'Zulli, María Antonieta', 1538462475, 'SI', 'VALLEJOS,MARIA ESTER', 1533534148, 17),
('FTR8iRpd', 'Esc. Primaria Nº 19 DE 07 Galicia - Plurilingüe', 7, 'COMPLETA', '8,15 a 16,20', NULL, 'VIALE, LUIS 1052', '4581-8369', 'WAINER Marcia Irina', 'CAMBIASSO Virginia Edith', 1531720027, 1, 1, 1, 1, 1, 1, 1, 0, 0, 7, 25, 24, 24, 25, 24, 21, 23, 0, 0, 166, 'DEP_EPC19_DE7@bue.edu.ar', 'Apolinario Figueroa 651', '4581-0299 / 4582-6212', 'Zulli, María Antonieta', 1538462475, 'NO', 'EGUES,RUBEN MARCOS', 1550548210, 18),
('5LG3ExkA', 'Esc. Primaria Nº 20 DE 07 Tte. Benjamin Matienzo', 7, 'EXTENDIDA', '8,00 a 12,15 // 13,00 a 17,15', '3, 4 Y 5', 'HIDALGO 635', '4902-1431', 'FILIPPONE Andrea', 'DECARLOS Maria Laura', 1526237488, 2, 2, 2, 2, 2, 2, 2, 0, 0, 14, 38, 45, 44, 40, 44, 46, 41, 0, 0, 298, 'DEP_EPC20_DE7@bue.edu.ar', 'Apolinario Figueroa 651', '4581-0299 / 4582-6212', 'Zulli, María Antonieta', 1538462475, 'SI', 'DOMINGUEZ,JUANA', 1533756346, 19),
('q7A9pqle', 'Esc. Primaria Nº 21 DE 07 Emilio Raul Olive', 7, 'EXTENDIDA', '8,00 a 12,15 // 13,00 a 17,15', '3 Y 5', 'ROJAS 1554', '4581-3727', 'COVELLI Andrea', 'COVELLI Andrea', 1557596073, 2, 2, 2, 2, 2, 2, 2, 0, 0, 14, 27, 15, 30, 25, 34, 32, 32, 0, 0, 195, 'DEP_EPC21_DE7@bue.edu.ar', 'Apolinario Figueroa 651', '4581-0299 / 4582-6212', 'Zulli, María Antonieta', 1538462475, 'SI', 'HABIB,PAULA LORENA', 1532378305, 20),
('qeQeRg4q', 'Esc. Primaria Nº 22 DE 07 Dr. Romulo S. Naon', 7, 'EXTENDIDA', '8,00 a 12,15 // 13,00 a 17,15', '4 Y 5', 'ARAOZ 234', '4854-6778', 'DURAND Evangelina', 'DURAND Evangelina', 1553248944, 2, 2, 2, 2, 2, 2, 2, 0, 0, 14, 27, 33, 27, 35, 40, 35, 38, 0, 0, 235, 'DEP_EPC22_DE7@bue.edu.ar', 'Apolinario Figueroa 651', '4581-0299 / 4582-6212', 'Zulli, María Antonieta', 1538462475, 'NO', 'MAQUEIRA,ROSA IRENE', 1530442452, 21),
('tm5haTTa', 'Esc. Primaria Nº 23 DE 07 Gral. Belgrano', 7, 'COMPLETA', '8,15 a 16,20', '4 Y 5', 'PRINGLES 263', '4981-9643', 'HOLGADO Silvia Susana', 'HOLGADO Silvia Susana', 1559604908, 2, 2, 2, 2, 2, 1, 2, 0, 0, 13, 48, 53, 50, 50, 50, 48, 48, 0, 0, 347, 'DEP_EPC23_DE7@bue.edu.ar', 'Apolinario Figueroa 651', '4581-0299 / 4582-6212', 'Zulli, María Antonieta', 1538462475, 'SI', 'MERCADO,GLADYS MARGARITA', 1536100195, 22),
('iT1bsNab', 'Esc. Primaria Nº 24 DE 07 Virgen Generala', 7, 'COMPLETA', '8,15 a 16,20', '4 Y 5', 'BIEDMA, JOSE JUAN 459', '4431-5659', 'MINUTELLA Andrea Paola', 'MINUTELLA Andrea Paola', 1550256361, 1, 1, 1, 1, 1, 1, 1, 0, 0, 7, 25, 30, 28, 28, 26, 28, 27, 0, 0, 192, 'DEP_EPC24_DE7@bue.edu.ar', 'Apolinario Figueroa 651', '4581-0299 / 4582-6212', 'Zulli, María Antonieta', 1538462475, 'NO', 'PODESTA, SILVANA', 1556548805, 23),
('V43iPAra', 'Esc. Primaria Nº 25 DE 07 República de Guatemala', 7, 'COMPLETA', '8,15 a 16,20', NULL, 'MENDEZ DE ANDES 1451', '4433-4950', 'SIMONELLI Myriam', 'SIMONELLI Myriam', 1561308563, 1, 1, 1, 1, 1, 1, 1, 0, 0, 7, 19, 22, 21, 22, 22, 27, 22, 0, 0, 155, 'DEP_EPC25_DE7@bue.edu.ar', 'Apolinario Figueroa 651', '4581-0299 / 4582-6212', 'Zulli, María Antonieta', 1538462475, 'SI', 'GOMEZ,EMMA', 1557099537, 24);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `baseprimaria2`
--
ALTER TABLE `baseprimaria2`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `baseprimaria2`
--
ALTER TABLE `baseprimaria2`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
