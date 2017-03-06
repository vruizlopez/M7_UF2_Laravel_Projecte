-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 06, 2017 at 12:04 PM
-- Server version: 5.7.17-0ubuntu0.16.04.1
-- PHP Version: 7.0.15-0ubuntu0.16.04.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `SuperMercado`
--

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2017_03_05_122148_create_productos_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `productos`
--

CREATE TABLE `productos` (
  `id` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `cantidad` varchar(8) COLLATE utf8_unicode_ci NOT NULL,
  `precio` varchar(8) COLLATE utf8_unicode_ci NOT NULL,
  `url` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `stock` tinyint(1) NOT NULL DEFAULT '0',
  `descripcion` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `productos`
--

INSERT INTO `productos` (`id`, `nombre`, `cantidad`, `precio`, `url`, `stock`, `descripcion`, `created_at`, `updated_at`) VALUES
(1, 'Rábanos Maresme (Antolín)', '333g', '0.86', 'https://www.ulabox.com/media/52195_xl.jpg', 0, 'Garantía de frescura: este producto se prepara el mismo día que recibes tu pedido.Origen: Maresme-España.Los rábanos son una verdura de tamaño pequeño (2 o 3 cm de diámetro) y de forma ovalada. Tienen una tonalidad rojiza en el exterior y la carne del interior es blanca.Es un alimento que destaca por su sabor ligeramente picante. Su contenido calórico es bajo debido a su alto contenido de agua. También tiene vitamina C y minerales que hacen que sean antioxidantes y que ayuden a mantener en buen estado la piel. También son beneficiosos para el aparato digestivo.Habitualmente, este producto se utiliza crudo en ensaladas.Te llevamos a casa un manojo de un mínimo de 200gr de rábanos.', '2017-03-05 18:07:15', '2017-03-05 19:27:55'),
(2, 'Ciruela Roja (Cultivar)', '500g', '1.98', 'https://www.ulabox.com/media/64341_xl.jpg', 1, 'Garantía de frescura: este producto se prepara el mismo día que recibes tu pedido.Origen: Sudáfrica Categoría: Primera.Las ciruelas frescas constituyen uno de los mejores remedios para prevenir el estreñimiento. Esta propiedad les viene otorgada por su riqueza en fibras - especialmente pectina, fructosa y el azufre. Se ha comprobado como la fructosa y el azufre presentan propiedades laxantes. Las ciruelas frescas son laxantes muy eficaces.Te llevamos a casa entre 4 y 5 unidades.', '2017-03-05 18:07:15', '2017-03-05 18:07:15'),
(3, 'Naranja de Zumo Tollupol en Malla 2Kg (Tollupol)', '2 kg', '2.00', 'https://www.ulabox.com/media/80281_l1.jpg', 0, 'Con las naranjas de zumo de Tollupol conseguirás hacer unos zumos naturales deliciosos.Entre las numerosas propiedades de la naranja, destacamos que es una ruta desintoxicante, digestiva, antiséptica intestinal, urinaria ,etc. Todas estas propiedades la convierten en una fruta recomendable en casos de enfermedades hepáticas, estreñimiento, diabetes, uremia, gota y esclerosis, ya que realiza una auténtica cura de desintoxicación y lavado interno.#ElAntiSúper pone la materia prima, ahora solo queda que vosotros pongáis las ganas y hagáis un buen zumo de naranja natural', '2017-03-05 19:37:47', '2017-03-05 19:37:47'),
(4, 'Pera Conference - 4 unidades (La Breña)', '800g', '1.75', 'https://www.ulabox.com/media/33050_xl.jpg', 0, 'Garantía de frescura: este producto se prepara el mismo día que recibes tu pedido.Origen: Nacional Calibre: 65/75mm. Categoría: Primera.La pera Conferencia contiene el 53% de las sales minerales alcalinas y el 47% de sales ácidas. Las principales vitaminas de esta fruta son: A, C, B1, B2, y PP. Por su alto contenido en hierro, el consumo de pera es bueno para la formación de glóbulos rojos y se recomienda en casos de anemia y problemas cardiovasculares. El contenido de su pulpa en pectina la convierte en muy eficaz para el aparato digestivo, ya que aligera la pesadez de estómago y ayuda a la digestión. Además, la pectina regula el tránsito intestinal y reduce el nivel de colesterol en sangre. Así mismo, la celulosa que contiene esta fruta actúa como laxante.\r\nTe llevamos a casa 4 unidades.', '2017-03-05 19:40:43', '2017-03-05 19:40:43'),
(5, 'Fresón Extra (Antolín)', '500g', '2.80', 'https://www.ulabox.com/media/57317_xl.jpg', 0, 'Garantía de frescura: este producto se prepara el mismo día que recibes tu pedido.Origen: Huelva Categoría: Extra.La fresa Candonga/Sabrina se caracteriza por presentar pocas calorías debido a su elevado contenido en agua (90%), por lo que la hace ideal en dietas de adelgazamiento. Presenta propiedades diuréticas, estimula el hígado, la vejiga y el colon, con lo que ayuda a digerir las grasas, siendo pues muy recomendable en digestiones pesadas. Su elevado contenido en vitamina C y en antocianinas, le otorga un fuerte poder antioxidante que evita el envejecimiento de las células.', '2017-03-05 19:41:51', '2017-03-05 19:41:51'),
(6, 'Kiwi Hayward Zespri - 4 unidades (Cultivar)', '500g', '2.15', 'https://www.ulabox.com/media/33034_xl.jpg', 0, 'Origen: Nueva Zelanda Calibre: 100/115gr. Categoría: Primera.Los kiwis Hayward se encuentran entre las frutas con más vitamina C, superando a naranjas y limones. La vitamina C tiene un fuerte poder antioxidante que neutraliza los radicales libres, previniendo asÌ el envejecimiento celular. Contiene vitamina E y ácidos grasos omega-3 y omega-6 que poseen propiedades fluidificantes de la sangre y mejora el esto de las arterias. Es destacable la proporción de fibra soluble, que mejora las situaciones de estreñimiento y nos ayuda a reducir el colesterol.', '2017-03-05 19:45:11', '2017-03-05 19:45:11'),
(7, 'Calçots - manojo 25 unidades (La Breña)', '25u', '4.06', 'https://www.ulabox.com/media/81613_l1.jpg', 0, 'Garantía de frescura: este producto se prepara el mismo día que recibes tu pedido.Excepcionalmente, te entregaremos este producto aunque no vivas en el Área Metropolitana de Barcelona. Sin embargo, si vives fuera del Área Metropolitana de Barcelona, este producto te provocará un retraso de un día en la entrega.El calçot es una variedad de cebolla tierna más suave y dulce originaria del campo de Tarragona y que se comen escalibados.Sus propiedades nutritivas son similares a las de la cebolla, con un amplio contenido en vitaminas y minerales. Además, se le atribuyen propiedades diuréticas, tonificantes, digestivas y afrodisíacas. Se ha comprobado que contienen algunos agentes anticancerígenos.', '2017-03-05 19:47:01', '2017-03-05 19:47:01'),
(8, 'Calabaza (Antolín)', '1.4Kg', '3.49', 'https://www.ulabox.com/media/52629_xl.jpg', 0, 'Garantía de frescura: este producto se prepara el mismo día que recibes tu pedido.Origen: Valencia- España.La calabaza es el alimento antioxidante por excelencia. Además tiene un nivel relevante de carotenos los cuales son recomendados para prevenir el cáncer y de fibra la cual previene el estreñimiento. También destaca por ser ligero, esto hace que sea un alimento indicado para dietas.Hay una amplia variedad de recetas que se pueden hacer con calabaza, desde cremas (tanto frías como calientes), tartas, hasta calabazas rebozadas.', '2017-03-05 19:48:07', '2017-03-05 19:48:07');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'victor', 'victor@gmail.com', '$2y$10$5S59MT26MtsERx0d2EzIoeVKjD4NIOoRKSMWs.K1j9JhRRrJgRt1q', NULL, '2017-03-05 18:07:48', '2017-03-05 18:07:48');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Indexes for table `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `productos`
--
ALTER TABLE `productos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
