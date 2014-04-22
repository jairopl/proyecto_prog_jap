-- phpMyAdmin SQL Dump
-- version 2.10.3
-- http://www.phpmyadmin.net
-- 
-- Servidor: localhost
-- Tiempo de generación: 04-04-2014 a las 21:02:13
-- Versión del servidor: 5.0.51
-- Versión de PHP: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- 
-- Base de datos: `accesos_unad_jap`
-- 

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `propietario`
-- 

CREATE TABLE `propietario` (
  `documento` varchar(15) NOT NULL,
  `tipo_documento` varchar(2) NOT NULL,
  `nombres` varchar(30) NOT NULL,
  `apellidos` varchar(30) NOT NULL,
  `rol` tinyint(2) NOT NULL,
  `telefono` int(11) NOT NULL,
  PRIMARY KEY  (`documento`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- 
-- Volcar la base de datos para la tabla `propietario`
-- 

INSERT INTO `propietario` VALUES ('123', '', 'Jairo', 'Prieto', 127, 0);
