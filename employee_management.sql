-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 23-05-2024 a las 12:03:35
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `employee_management`
--

-- --------------------------------------------------------


--
-- Volcado de datos para la tabla `departments`
--

INSERT INTO `departments` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Amazonas', NULL, NULL),
(2, 'Antioquia', NULL, NULL),
(3, 'Arauca', NULL, NULL),
(4, 'Atlántico', NULL, NULL),
(5, 'Bolívar', NULL, NULL),
(6, 'Boyacá', NULL, NULL),
(7, 'Caldas', NULL, NULL),
(8, 'Caquetá', NULL, NULL),
(9, 'Casanare', NULL, NULL),
(10, 'Cauca', NULL, NULL),
(11, 'Cesar', NULL, NULL),
(12, 'Chocó', NULL, NULL),
(13, 'Córdoba', NULL, NULL),
(14, 'Cundinamarca', NULL, NULL),
(15, 'Guainía', NULL, NULL),
(16, 'Guaviare', NULL, NULL),
(17, 'Huila', NULL, NULL),
(18, 'La Guajira', NULL, NULL),
(19, 'Magdalena', NULL, NULL),
(20, 'Meta', NULL, NULL),
(21, 'Nariño', NULL, NULL),
(22, 'Norte de Santander', NULL, NULL),
(23, 'Putumayo', NULL, NULL),
(24, 'Quindío', NULL, NULL),
(25, 'Risaralda', NULL, NULL),
(26, 'San Andrés y Providencia', NULL, NULL),
(27, 'Santander', NULL, NULL),
(28, 'Sucre', NULL, NULL),
(29, 'Tolima', NULL, NULL),
(30, 'Valle del Cauca', NULL, NULL),
(31, 'Vaupés', NULL, NULL),
(32, 'Vichada', NULL, NULL);

-- --------------------------------------------------------



INSERT INTO `employees` (`id`, `name`, `email`, `phone`, `password`, `department_id`, `created_at`, `updated_at`) VALUES
(1, 'Jose Orjuela', 'jose@gmail.com', '3102103323', '$2y$10$Hc5kvQfLN0.3J3sY592PuOmKtJyXvbujLrvFOBCFdLpbQ.JWXvk0.', 5, '2024-05-23 11:54:19', '2024-05-23 13:39:15'),
(3, 'susana', 'susana@gmail.com', '3009826302', '$2y$10$01YEQUYg/nnTVKG.8pD.cuDTJvVDv30DPn0w3ffxAbDDFpVfbtK0a', 14, '2024-05-23 13:29:03', '2024-05-23 13:29:13'),
(4, 'Maria Tapia', 'maria@gmail.com', '3172969075', '$2y$10$fU6PoCAqNHi9LvHyoFYVHesorL2p4YxyIj7WSyd/KaHHrtlZI3mOK', 29, '2024-05-23 13:37:22', '2024-05-23 13:37:22'),
(5, 'valentina', 'valen@gmail.com', '3009826372', '$2y$10$LCBFpNZpYyQ28PSWbrG.tubHPEbxN6PneqrhPhB9HiAw7nQjVW5Ze', 14, '2024-05-23 13:55:50', '2024-05-23 13:55:50'),
(6, 'Ines', 'ines@gmail.com', '3009826298', '$2y$10$M9ZpJSSr5q0eLGRtTReFfubJOR35XpS12w7XNnX7KBrGijLYI3wLK', 6, '2024-05-23 13:57:31', '2024-05-23 13:57:31'),
(7, 'cristian', 'cris@gmail.com', '3009826398', '$2y$10$gSnSIRBcnglMZjMXNHbTjeWrKfY1j.8WLPaIWJFTMfqxtM0hniEpm', 15, '2024-05-23 14:15:40', '2024-05-23 14:15:40');

