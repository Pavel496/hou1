-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Май 04 2018 г., 19:32
-- Версия сервера: 5.7.20
-- Версия PHP: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `hou1`
--

-- --------------------------------------------------------

--
-- Структура таблицы `directions`
--

CREATE TABLE `directions` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `directions`
--

INSERT INTO `directions` (`id`, `name`, `slug`) VALUES
(1, 'Рублево-Успенское шоссе', 'rublevo-uspenskoe-shosse'),
(2, 'Новорижское шоссе', 'novorizhskoe-shosse'),
(3, 'Минское шоссе', 'minskoe-shosse'),
(4, 'Киевское шоссе', 'kievskoe-shosse'),
(5, 'Алтуфьевское шоссе', 'altufevskoe-shosse'),
(6, 'Боровское шоссе', 'borovskoe-shosse'),
(7, 'Волоколамское шоссе', 'volokolamskoe-shosse'),
(8, 'Дмитровское шоссе', 'dmitrovskoe-shosse'),
(9, 'Ильинское шоссе', 'ilinskoe-shosse'),
(10, 'Калужское шоссе', 'kaluzhskoe-shosse'),
(11, 'Ленинградское шоссе', 'leningradskoe-shosse'),
(12, 'Осташковское шоссе', 'ostashkovskoe-shosse'),
(13, 'Пятницкое шоссе', 'pyatnitskoe-shosse'),
(14, 'Симферопольское шоссе', 'simferopolskoe-shosse'),
(15, 'Сколковское шоссе', 'skolkovskoe-shosse'),
(16, 'Можайское шоссе', 'mozhayskoe-shosse'),
(17, 'Москва', 'moskva');

-- --------------------------------------------------------

--
-- Структура таблицы `enquire`
--

CREATE TABLE `enquire` (
  `id` int(10) UNSIGNED NOT NULL,
  `property_id` int(11) NOT NULL,
  `agent_id` int(11) NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `enquire`
--

INSERT INTO `enquire` (`id`, `property_id`, `agent_id`, `name`, `email`, `phone`, `message`) VALUES
(1, 3, 1, 'Pavel Butusov', 'butusovpn@mail.ru', NULL, 'aaaaaaaaa');

-- --------------------------------------------------------

--
-- Структура таблицы `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(146, '2014_10_12_000000_create_users_table', 1),
(147, '2014_10_12_100000_create_password_resets_table', 1),
(148, '2018_02_12_053230_create_enquire_table', 1),
(149, '2018_02_12_053339_create_partners_table', 1),
(150, '2018_02_12_053359_create_properties_table', 1),
(151, '2018_02_12_053425_create_property_gallery_table', 1),
(152, '2018_02_12_053445_create_property_types_table', 1),
(153, '2018_02_12_053503_create_settings_table', 1),
(154, '2018_02_12_053523_create_slider_table', 1),
(155, '2018_02_12_053538_create_subscriber_table', 1),
(156, '2018_02_12_053601_create_testimonials_table', 1),
(157, '2018_02_12_053622_create_transaction_table', 1),
(158, '2018_05_02_090806_create_directions_table', 1),
(159, '2018_05_02_091949_create_readinesses_table', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `partners`
--

CREATE TABLE `partners` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `partner_image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `properties`
--

CREATE TABLE `properties` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `featured_property` int(11) NOT NULL DEFAULT '0',
  `property_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `property_slug` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `property_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `property_purpose` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `direction` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `range` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `readiness` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `currency` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `map_latitude` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `map_longitude` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bathrooms` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bedrooms` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `garage` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `land_area` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `build_area` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `property_features` text COLLATE utf8mb4_unicode_ci,
  `featured_image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `floor_plan` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `video_code` text COLLATE utf8mb4_unicode_ci,
  `status` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `properties`
--

INSERT INTO `properties` (`id`, `user_id`, `featured_property`, `property_name`, `property_slug`, `property_type`, `property_purpose`, `direction`, `range`, `readiness`, `currency`, `price`, `address`, `map_latitude`, `map_longitude`, `bathrooms`, `bedrooms`, `garage`, `land_area`, `build_area`, `description`, `property_features`, `featured_image`, `floor_plan`, `video_code`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 0, 'Мой дом', 'moy-dom', '1', 'Аренда', '7', '10', '1', '€', '1,000,000', 'ааа', NULL, NULL, NULL, NULL, NULL, '30', '200', 'ааа', 'бассейн, сад, беседка', 'moy-dom-a1c955893ce582e9e6ccb8920ca5aef0', NULL, '', 1, '2018-05-02 06:35:46', '2018-05-02 16:32:16'),
(2, 1, 0, 'Еще один дом', 'eshche-odin-dom', '1', 'Продажа', '3', '15', '2', '€', '1,000,000', 'ааа', '59.39623668952764', '30.11366516400153', '2', '1', '3', '30', '200', 'ааа', 'бассейн, сад, беседка', 'moy-dom-45ce1e3d9889ddfd7440ddd185e18058', NULL, '', 1, '2018-05-02 06:36:47', '2018-05-02 16:31:49'),
(3, 1, 0, 'ббб', 'bbb', '1', 'Аренда', '1', '20', '3', '₽', '30,000,000', 'бббaaaaaaaaaaa', '59.39623668952764', '30.11366516400153', '1', '3', '1', '35', '500', 'ббб', 'бассейн, сад, беседка бассейн, беседка', 'bbb-cd2d9ff70c5361ea752e858d7bbf8437', NULL, '', 1, '2018-05-02 06:43:18', '2018-05-04 13:17:43'),
(4, 1, 1, 'вввз', 'vvvz', '1', 'Продажа', '5', '15', '4', '$', '3,500,000', 'ввва', NULL, NULL, NULL, NULL, NULL, '25', '150', 'ввво', 'бассейн, сад, беседка', 'vvv-2ac6641d58a4f7a62939ea7daced2776', NULL, '', 1, '2018-05-02 06:52:25', '2018-05-02 17:13:06'),
(5, 1, 0, 'Контрольный', 'kontrolnyy', '2', 'Продажа', '9', '17', '2', '€', '7,000,000', 'ттттттттттттттттттттттттттттт', '55.36686940583321', '38.68527561474616', NULL, NULL, NULL, '25', '350', 'ттттттттттттттттттттттттттттттттттт', 'бассейн, сад, беседка', 'kontrolnyy-f5aa7691b4059b96dbdb0439f1b43c7f', NULL, '', 1, '2018-05-03 01:27:58', '2018-05-04 03:09:23');

-- --------------------------------------------------------

--
-- Структура таблицы `property_gallery`
--

CREATE TABLE `property_gallery` (
  `id` int(10) UNSIGNED NOT NULL,
  `property_id` int(11) NOT NULL,
  `image_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `property_gallery`
--

INSERT INTO `property_gallery` (`id`, `property_id`, `image_name`) VALUES
(1, 1, 'moy-dom_3073-b.jpg'),
(2, 2, 'moy-dom_9581-b.jpg');

-- --------------------------------------------------------

--
-- Структура таблицы `property_types`
--

CREATE TABLE `property_types` (
  `id` int(10) UNSIGNED NOT NULL,
  `types` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `property_types`
--

INSERT INTO `property_types` (`id`, `types`, `slug`) VALUES
(1, 'Дом', 'house'),
(2, 'Таунхаус', 'townhouse'),
(3, 'Квартира', 'apartment'),
(4, 'Участок', 'land');

-- --------------------------------------------------------

--
-- Структура таблицы `readinesses`
--

CREATE TABLE `readinesses` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `readinesses`
--

INSERT INTO `readinesses` (`id`, `name`, `slug`) VALUES
(1, 'под ключ', 'pod_kljuch'),
(2, 'под отделку', 'pod_otdelku'),
(3, 'с мебелью', 's_mebelju'),
(4, 'без мебели', 'bez_mebeli');

-- --------------------------------------------------------

--
-- Структура таблицы `settings`
--

CREATE TABLE `settings` (
  `id` int(10) UNSIGNED NOT NULL,
  `site_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `site_email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `site_logo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `site_favicon` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `google_map_key` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `recaptcha` int(11) NOT NULL DEFAULT '0',
  `site_description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `site_keywords` text COLLATE utf8mb4_unicode_ci,
  `site_header_code` text COLLATE utf8mb4_unicode_ci,
  `site_footer_code` text COLLATE utf8mb4_unicode_ci,
  `site_copyright` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `footer_widget1_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `footer_widget1` text COLLATE utf8mb4_unicode_ci,
  `footer_widget2_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `footer_widget2` text COLLATE utf8mb4_unicode_ci,
  `footer_widget3_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `footer_widget3` text COLLATE utf8mb4_unicode_ci,
  `title_bg` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `all_properties_layout` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `map_latitude` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `map_longitude` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `home_properties_layout` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `featured_properties_layout` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sale_properties_layout` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rent_properties_layout` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pagination_limit` varchar(3) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '12',
  `addthis_share_code` text COLLATE utf8mb4_unicode_ci,
  `disqus_comment_code` text COLLATE utf8mb4_unicode_ci,
  `social_facebook` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `social_twitter` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `social_linkedin` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `social_gplus` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `about_us_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `about_us_description` text COLLATE utf8mb4_unicode_ci,
  `contact_lat` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact_long` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact_us_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact_us_email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact_us_phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact_us_address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `terms_conditions_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `terms_conditions_description` text COLLATE utf8mb4_unicode_ci,
  `privacy_policy_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `privacy_policy_description` text COLLATE utf8mb4_unicode_ci,
  `currency_sign` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `stripe_currency` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `featured_property_price` double(11,2) DEFAULT NULL,
  `bank_payment_details` text COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `settings`
--

INSERT INTO `settings` (`id`, `site_name`, `site_email`, `site_logo`, `site_favicon`, `google_map_key`, `recaptcha`, `site_description`, `site_keywords`, `site_header_code`, `site_footer_code`, `site_copyright`, `footer_widget1_title`, `footer_widget1`, `footer_widget2_title`, `footer_widget2`, `footer_widget3_title`, `footer_widget3`, `title_bg`, `all_properties_layout`, `map_latitude`, `map_longitude`, `home_properties_layout`, `featured_properties_layout`, `sale_properties_layout`, `rent_properties_layout`, `pagination_limit`, `addthis_share_code`, `disqus_comment_code`, `social_facebook`, `social_twitter`, `social_linkedin`, `social_gplus`, `about_us_title`, `about_us_description`, `contact_lat`, `contact_long`, `contact_us_title`, `contact_us_email`, `contact_us_phone`, `contact_us_address`, `terms_conditions_title`, `terms_conditions_description`, `privacy_policy_title`, `privacy_policy_description`, `currency_sign`, `stripe_currency`, `featured_property_price`, `bank_payment_details`) VALUES
(1, 'Country House Realty', 'admin@gmail.com', 'logo.png', 'favicon.png', 'AIzaSyC3m_TyDp94bKpyOxWzojZgcUXYj8DdbBc', 0, 'Country House Realty Агенство недвижимости', NULL, NULL, NULL, 'Copyright © 2018 Country House Realty. All rights reserved.', 'О нас', 'Наше агентство недвижимости предоставляет услуги по покупке, продаже, сдаче в аренду недвижимости в Москве и ближнем Подмосковье, в том числе осуществляет юридическое сопровождение сделок. Мы разрабатываем дизайн интерьеров, производим благоустройство территорий, осуществляем строительство и ремонт любой сложности.', '', '', 'Оставайтесь на связи', '<ul class=\\\"contact-info\\\">\r\n            <li><i class=\\\"fa fa-map-marker\\\"></i>Real estate script.\r\n9.5 Main Street, CA,USA</li><li class=\\\"phone\\\"><i class=\\\"fa fa-phone\\\"></i>+62-3456-78910</li>   <li><i class=\\\"fa fa-envelope\\\"></i>info@domain.com</li></ul>', NULL, 'grid', '55.80538201277453', '37.514888346679754', 'slider', 'grid', 'grid', 'grid', '12', NULL, NULL, NULL, NULL, NULL, NULL, 'О нас', '<p>Наше агентство недвижимости предоставляет услуги по покупке, продаже,</p><p>сдаче в аренду недвижимости в Москве и ближнем Подмосковье, в том числе</p><p>осуществляет юридическое сопровождение сделок. Мы разрабатываем дизайн интерьеров,</p><p>производим благоустройство территорий, осуществляем строительство и ремонт любой сложности.</p><p>Более 15-ти лет на рынке, нас рекомендуют друзьям.</p><p>Основными клиентами являются физические лица, но также оказываем услуги и юридическим лицам.</p><p>Наше кредо - грамотная работа и&nbsp; конфиденциальность, гибкость&nbsp; к внешним условиям и их изменению.</p><p>Будем рады сотрудничеству!</p>', '55.80538201277453', '37.514888346679754', 'Контакты', 'info@example.com', '+62-3456-78910', 'Real estate script. 9.5 Main Street, CA,USA', NULL, NULL, NULL, NULL, '$', 'USD', 10.00, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `slider`
--

CREATE TABLE `slider` (
  `id` int(10) UNSIGNED NOT NULL,
  `slider_title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slider_text1` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slider_text2` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `slider`
--

INSERT INTO `slider` (`id`, `slider_title`, `slider_text1`, `slider_text2`, `image_name`) VALUES
(1, 'Slider 1', 'Vacation Rental', 'in San Francisco', 'slider-1-909481380b44adce572e160b5019c2c9'),
(2, 'Slider 2', 'Luxury Apartment', 'in New York', 'slider-1-3393cfddb0e497749d7242a9c0269301'),
(3, 'Slider 3', 'Family House', 'in Miami', 'slider-3-e2377e7ba15750b6ff3819ff38f5909c');

-- --------------------------------------------------------

--
-- Структура таблицы `subscriber`
--

CREATE TABLE `subscriber` (
  `id` int(10) UNSIGNED NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ip` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `testimonials`
--

CREATE TABLE `testimonials` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `designation` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `testimonial` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `t_user_image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `transaction`
--

CREATE TABLE `transaction` (
  `id` int(10) UNSIGNED NOT NULL,
  `property_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gateway` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_amount` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `usertype` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `about` text COLLATE utf8mb4_unicode_ci,
  `facebook` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gplus` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linkedin` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_icon` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  `confirmation_code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `usertype`, `name`, `email`, `password`, `phone`, `about`, `facebook`, `twitter`, `gplus`, `linkedin`, `image_icon`, `status`, `confirmation_code`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'Country House Realty', 'admin@gmail.com', '$2y$10$MhcqRSPr56x7PO.kNeNJou9uBsbV/J3.FLWFiFbAnsEx5dEg3nMga', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, 'PPJmupXQ2b3hbdrq7yRo40paI8fCfnuzdowouaJ6rpBa0AOA8GFK6g0lsbQz', '2018-05-02 06:31:58', '2018-05-02 06:31:58');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `directions`
--
ALTER TABLE `directions`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `enquire`
--
ALTER TABLE `enquire`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `partners`
--
ALTER TABLE `partners`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Индексы таблицы `properties`
--
ALTER TABLE `properties`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `property_gallery`
--
ALTER TABLE `property_gallery`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `property_types`
--
ALTER TABLE `property_types`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `readinesses`
--
ALTER TABLE `readinesses`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `subscriber`
--
ALTER TABLE `subscriber`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `directions`
--
ALTER TABLE `directions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT для таблицы `enquire`
--
ALTER TABLE `enquire`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=160;

--
-- AUTO_INCREMENT для таблицы `partners`
--
ALTER TABLE `partners`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `properties`
--
ALTER TABLE `properties`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `property_gallery`
--
ALTER TABLE `property_gallery`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `property_types`
--
ALTER TABLE `property_types`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `readinesses`
--
ALTER TABLE `readinesses`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `subscriber`
--
ALTER TABLE `subscriber`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `transaction`
--
ALTER TABLE `transaction`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
