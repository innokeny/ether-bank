-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Дек 26 2022 г., 12:08
-- Версия сервера: 8.0.30
-- Версия PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `bether`
--

-- --------------------------------------------------------

--
-- Структура таблицы `blacklist`
--

CREATE TABLE `blacklist` (
  `id` int NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(32) NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `phone_number` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `blacklist`
--

INSERT INTO `blacklist` (`id`, `email`, `password`, `full_name`, `phone_number`) VALUES
(13, 'pro100@gmail.com', '191f5682924e4900053a77bb84bf227d', 'Sahidov Ali', '89054650909'),
(14, 'qwertqaq@mail.ru', '1ad728ca65a067e1d6d6c63f1d1a57a8', 'Esenin Victor', '89911002324');

-- --------------------------------------------------------

--
-- Структура таблицы `products`
--

CREATE TABLE `products` (
  `id` int NOT NULL,
  `product_name` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `eth` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `products`
--

INSERT INTO `products` (`id`, `product_name`, `eth`) VALUES
(1, 'Debit card', 0.01),
(2, 'Insurance', 0.04),
(3, 'Pro account', 0.15),
(4, 'Access to the market', 0.06),
(5, 'Аccess to the stock exchange', 0.05),
(6, 'Bank deposit box', 2.34);

-- --------------------------------------------------------

--
-- Структура таблицы `promocode`
--

CREATE TABLE `promocode` (
  `id` int NOT NULL,
  `product_name` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `percent` varchar(32) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `promocode` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `promocode`
--

INSERT INTO `promocode` (`id`, `product_name`, `percent`, `promocode`) VALUES
(2, 'Insurance', '15', 'dd40c1d3f69694bca93e05700ef429c7'),
(3, 'Insurance', '15', '9c45da13ce38b062c639c6ef075cf149'),
(4, 'Insurance', '15', 'f25224a94bc0f050a1168e5331125499'),
(5, 'Insurance', '15', '5de268afd9a6f49669fc22a5aeda10cc'),
(6, 'Insurance', '15', 'df5882e56181aff7e82cb80552514d7f'),
(7, 'Pro account', '15', 'dc4828d5c8a2c0186a4e46bf2d8fdbf4'),
(9, 'Insurance', '15', 'df8dcd543e780538905892d6c10c9d81'),
(10, 'Pro account', '15', '80aa3bd331691101241674d8247cd0f5'),
(11, 'Bank deposit box', '20', 'b539d882ddb9ce3268d45515fedce518'),
(13, 'Bank deposit box', '10', '4cf479eb175d445ed156269217013878'),
(14, 'Debit card', '20', 'a280a7a44d04568c49eed3458133b731'),
(16, 'Аccess to the stock exchange', '20', '707e89308e76ecd8af752d42dd7383a7'),
(17, 'Access to the market', '20', 'cdd4ee73d697751233abf269adb1fdf7'),
(20, '', '10', '45fb3730ef0edb36d6bf3201a689eca9'),
(21, 'Bank deposit box', '10', '44f03eb4108c421728786d9ef32ec5f0'),
(22, 'Аccess to the stock exchange', '10', '1c9c38db50e87a897055d3f616152d25');

-- --------------------------------------------------------

--
-- Структура таблицы `transactions`
--

CREATE TABLE `transactions` (
  `id` int NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `status` varchar(32) NOT NULL,
  `order_date` date DEFAULT NULL,
  `payment` varchar(32) NOT NULL,
  `payment_date` date DEFAULT NULL,
  `customer_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `transactions`
--

INSERT INTO `transactions` (`id`, `product_name`, `status`, `order_date`, `payment`, `payment_date`, `customer_id`) VALUES
(36, 'Debit card', 'Confirmed', '2022-12-20', 'Paid', '2022-12-20', 11),
(40, 'Insurance', 'Pending', '2022-12-20', 'Not paid', NULL, 11),
(41, 'Debit card', 'Confirmed', '2022-12-26', 'Paid', '2022-12-26', 15),
(42, 'Access to the market', 'Confirmed', '2022-12-26', 'Paid', '2022-12-26', 15),
(43, 'Bank deposit box', 'Pending', '2022-12-26', 'Not paid', NULL, 15),
(44, 'Аccess to the stock exchange', 'Pending', '2022-12-26', 'Not paid', NULL, 15),
(45, 'Access to the market', 'Confirmed', '2022-12-26', 'Paid', '2022-12-26', 12),
(46, 'Pro account', 'Pending', '2022-12-26', 'Not paid', NULL, 12),
(47, 'Insurance', 'Pending', '2022-12-26', 'Paid', '2022-12-26', 12);

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int UNSIGNED NOT NULL,
  `email` varchar(100) NOT NULL,
  `pass` varchar(32) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `email`, `pass`) VALUES
(5, 'irok673@gmail.com', '58cccf877184191db633e2dce815580b'),
(7, 'test@test.ru', 'a0356706603136dd19cb1b17e60117a7'),
(13, 'rar7@tpu.ru', '4d1e2a44d05d12e2e0ea270387a577da');

-- --------------------------------------------------------

--
-- Структура таблицы `user_customer`
--

CREATE TABLE `user_customer` (
  `id` int NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(32) NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `phone_number` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `user_customer`
--

INSERT INTO `user_customer` (`id`, `email`, `password`, `full_name`, `phone_number`) VALUES
(11, 'rar7@tpu.ru', '4d1e2a44d05d12e2e0ea270387a577da', 'Rum Roman', '89833447366'),
(12, 'ma1988@list.ru', 'f86e8e1f210f1f449208087c6efc7aba', 'Maximova Arina', '89823231188'),
(15, 'iiivanov@mail.ru', 'a0356706603136dd19cb1b17e60117a7', 'Ivanov Ivan', '88005553535');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `blacklist`
--
ALTER TABLE `blacklist`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`,`product_name`) USING BTREE;

--
-- Индексы таблицы `promocode`
--
ALTER TABLE `promocode`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `customer_id` (`customer_id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD UNIQUE KEY `id` (`id`);

--
-- Индексы таблицы `user_customer`
--
ALTER TABLE `user_customer`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `products`
--
ALTER TABLE `products`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `promocode`
--
ALTER TABLE `promocode`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT для таблицы `transactions`
--
ALTER TABLE `transactions`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT для таблицы `user_customer`
--
ALTER TABLE `user_customer`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `transactions`
--
ALTER TABLE `transactions`
  ADD CONSTRAINT `transactions_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `user_customer` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
