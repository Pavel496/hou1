-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Май 07 2018 г., 17:43
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
(1, 10, 1, 'Павел', 'butusovpn@mail.ru', NULL, 'Сообщение');

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
(174, '2014_10_12_000000_create_users_table', 1),
(175, '2014_10_12_100000_create_password_resets_table', 1),
(176, '2018_02_12_053230_create_enquire_table', 1),
(177, '2018_02_12_053339_create_partners_table', 1),
(178, '2018_02_12_053359_create_properties_table', 1),
(179, '2018_02_12_053425_create_property_gallery_table', 1),
(180, '2018_02_12_053445_create_property_types_table', 1),
(181, '2018_02_12_053503_create_settings_table', 1),
(182, '2018_02_12_053523_create_slider_table', 1),
(183, '2018_02_12_053538_create_subscriber_table', 1),
(184, '2018_02_12_053601_create_testimonials_table', 1),
(185, '2018_02_12_053622_create_transaction_table', 1),
(186, '2018_05_02_090806_create_directions_table', 1),
(187, '2018_05_02_091949_create_readinesses_table', 1);

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
  `direction` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `range` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `readiness` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `currency` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci,
  `map_latitude` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `map_longitude` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bathrooms` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bedrooms` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `garage` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `land_area` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `build_area` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci,
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
(1, 1, 0, 'Дом, Московская область', 'dom', '1', 'Продажа', '1', '100', '1', '₽', '2700000', 'Не забудьте внести адрес объекта', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '<p><strong>Бузаево</strong>. Закрытый клубный поселок всего в 17 км от МКАД, а потому надежно защищен от шума и суеты городской жизни.Очень удобный подъезд к поселку, есть второй выезд на случай затруднения движения по Рубдево-Успенскому шоссе. Дом окружен лесным участком и имеет свой выход в лес. Архитектура дома напоминает архитектуру викторианской, изысканной Англии и создает атмосферу спокойствия и благочинности, в то время как интерьер дома выполнен по самым современным стандартам и впечатляет своей продуманностью и вниманием к деталям.</p>\n\n      <p>Планировка :</p>\n\n      <ul>\n      <li>1 этаж - холл, блок для прислуги, постирочная, гостевая спальня &nbsp;со своим сан узлом, гардеробная, библиотека с камином, каминый зал, зимний сад, столовая, просторная кухня, гостевая спальня с ванной комнатой, блок для персонала с отдельным входом, со своей кухней и с/у, постирочная, котельная.</li>\n      <li>2 этаж- хозяйская спальня с просторной ванной комнатой, две спальни, ванная. Мансарда - кабинет, детская игровая, с/у.&nbsp;</li>\n      </ul>', NULL, 'moy-dom-a1c955893ce582e9e6ccb8920ca5aef0', NULL, NULL, 0, NULL, NULL),
(2, 1, 0, 'Аренда в поселке Дивный на Новой Риге', 'arenda-v-poselke-divnyy-na-novoy-rige', '1', 'Продажа', '1', '100', '1', '₽', '300000', 'Не забудьте внести адрес объекта', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '<p>&nbsp;Ново-рижское шоссе, деревня Падиково, новый элитный поселок на ареду с развитой инфрапструктурой. В домах имеется 4 спальни, каминный зал в два света, кабинет. Современный дизайн, новая мебель.</p>', NULL, 'moy-dom-a1c955893ce582e9e6ccb8920ca5aef0', NULL, NULL, 0, NULL, NULL),
(3, 1, 0, 'Новый мини поселок в Раздорах 2!!!', 'novyy-mini-poselok-v-razdorakh', '1', 'Продажа', '1', '100', '1', '₽', '24500000', 'Не забудьте внести адрес объекта', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '<p>Рублево-Успенское шоссе, 4 км от МКАД.</p>\n\n      <p>Рядом с новой школой в Раздорах-2!!!!Новый охраняемый поселок, самое близкое расположение от Москвы!! Дом,( дуплекс) состоящий из двух равноценных половин, под отделку.</p>\n\n      <p>В каждой равноценной половине имеется 4 спальни, каминный зал, 3 сан узла. В цоколе- сауна, бильярдная. Первая очередь поселка, состоящая из двух домов( 4 половины)- полностью готова. В домах разведены коммуникации</p>\n\n      <p>Тауны в Раздорах под чистовую. 350м, участок 5 соток. 24 500 000 руб ( торг)</p>', NULL, 'moy-dom-a1c955893ce582e9e6ccb8920ca5aef0', NULL, NULL, 0, NULL, NULL),
(4, 1, 0, 'Таун в Маленькой Италии( c отделкой)', 'taun-v-malenkoy-italii-c-otdelkoy', '1', 'Продажа', '1', '100', '1', '₽', '17000000', 'Не забудьте внести адрес объекта', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '<p>Информация&nbsp;по объекту &laquo;Дуплексы в к/п &laquo;Маленькая Италия&raquo;.</p>\n\n      <p>Продаётся: Часть жилого дома 260 кв.м. на участке 3,5 сотки. Под отделку.<br />\n      Цена: 17 000 000 рублей.<br />\n      &nbsp;<br />\n      Общая информация:<br />\n      9 дуплексов, 18 блоков.<br />\n      Площадь одного Дуплекса = 520 кв.м.<br />\n      Площадь участка на котором расположен Дуплекс - 7 соток.<br />\n      Площадь одного Блока = в 3-х уровнях 260 кв.м. (включая гараж на 1 машину)<br />\n      Площадь участка на котором расположен Блок - 3,5 сотки.</p>\n\n      <p>Котельное оборудование - настенный котёл Viessmann</p>\n\n      <p>Конструктив:<br />\n      - фундаменты - буронабивные сваи, глубина залегания 3 метра, ростверк.<br />\n      - перекрытия - ж/б круглопустотные плиты.<br />\n      - стены - 500 mm (несущие - 250 mm пустотелый кирпич, 100 mm утеплитель Paroc, 20 mm воздушный зазор, облицовка - 120 mm пустотелый кирпич)<br />\n      - кровля - композитная черепица Lindab (Швеция), 200 mm утеплитель Paroc.&nbsp;<br />\n      - водосточная система - Aquasystem.<br />\n      - окна - пластиковые 2-х камерные стеклопакеты, профиль 70 mm REHAU, ламинация под дерево, запорная фурнитура Roto.<br />\n      - фасад - декоративная штукатурка TERRACO, декор &ndash; ПП, дерево.<br />\n      - цоколь - искусственный камень White Hills.</p>\n\n      <p>Коммуникации заведены в дом:<br />\n      - газ<br />\n      - вода<br />\n      - электричество 5 кВт, возможно докупить по $2000/кВт.<br />\n      - канализация<br />\n      &nbsp;</p>', NULL, 'moy-dom-a1c955893ce582e9e6ccb8920ca5aef0', NULL, NULL, 0, NULL, NULL),
(5, 1, 0, 'ОКП Жуковка, ДСК Лес', 'okp-zhukovka-dsk-les', '1', 'Продажа', '1', '100', '1', '₽', '3500000', 'Не забудьте внести адрес объекта', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '<p>Рублево-Успенское шоссе, 6 км от МКАД, ОКП Жуковка.&nbsp;&nbsp;Кирпичный современный особняк 700м, лесной участок 15 соток( собственность). Индивидуальный проект и дизайн, дорогая качественная отделка. Имеется 4 спальни со своими сан узлами и гардеробными. Три этажа. На первом этаже- студио 150м, высота потолков 4.5 м. Плавательный бассейн 10м с зоной СПА. Полноценный цокольный этаж с бильярдной, домашним кинотеатром. Система &laquo; умный дом&raquo;, центральные коммуникации. Имеется отдельно стоящий гараж на 4 машины с квартирой для персонала, зимняя беседка с барбекю. цена- 3 500 000 $</p>', NULL, 'moy-dom-a1c955893ce582e9e6ccb8920ca5aef0', NULL, NULL, 0, NULL, NULL),
(6, 1, 0, 'Жуковка, Аренда', 'zhukovka-arenda', '1', 'Продажа', '1', '100', '1', '₽', '550000', 'Не забудьте внести адрес объекта', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '<p>Рублево-Успенское шоссе, 8 км от МКАД. Элитный поселкок на берегу реки.</p>\n\n      <p>Дом 500м, участок 20 соток. Имеется 4 спальни, каминный зал, кабинет. Гараж на 2 машины с квартирой для прислуги. цена- 550 000 р в месяц</p>', NULL, 'moy-dom-a1c955893ce582e9e6ccb8920ca5aef0', NULL, NULL, 0, NULL, NULL),
(7, 1, 0, 'Особняк в Дрофе, продажа', 'osobnyak-v-drofe-prodazha', '1', 'Продажа', '1', '100', '1', '₽', '2300000', 'Не забудьте внести адрес объекта', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '<p>Рублево-Успенское шоссе, 15 км от МКАД, Уникальный поселок на 20&nbsp; домов ,Горки-1.&nbsp; В поселке находятся: детская площадка, ресторан, комплекс с залом приемов с камином, бассейном 25 м2, детским бассейном, теннисным кортом, большим тренажерным залом, раздевалками, бильярдной, баней, солярием Дом в стиле Шале 1200м, участок 30 соток( собственность). Современная,&nbsp; просторная и очень удобная планировка, большие светлые помещения.</p>\n\n      <p>&nbsp;Новая&nbsp; Цена- 2 300&nbsp;000$</p>', NULL, 'moy-dom-a1c955893ce582e9e6ccb8920ca5aef0', NULL, NULL, 0, NULL, NULL),
(8, 1, 0, 'Жуковка-3, продажа', 'zhukovka-3-prodazha', '1', 'Продажа', '1', '100', '1', '₽', '9600000', 'Не забудьте внести адрес объекта', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '<table style=\"width:292.5pt\">\n      <tbody>\n      <tr>\n      <td style=\"height:22.5pt; vertical-align:top; width:82.5pt\">\n      <p><strong>Местоположение:</strong></p>\n      </td>\n      <td style=\"height:22.5pt; width:4.5pt\">&nbsp;</td>\n      <td style=\"height:22.5pt; vertical-align:top; width:198.0pt\">\n      <p>Одинцовский район<br />\n      Рублево-Успенское ш., 9 км<br />\n      Жуковка<br />\n      &nbsp;</p>\n      </td>\n      </tr>\n      <tr>\n      <td style=\"height:7.5pt; width:82.5pt\">\n      <p>&nbsp;</p>\n      </td>\n      <td style=\"height:7.5pt; width:4.5pt\">&nbsp;</td>\n      <td style=\"height:7.5pt\">\n      <p>&nbsp;</p>\n      </td>\n      </tr>\n      <tr>\n      <td style=\"height:22.5pt; width:82.5pt\">\n      <p><strong>Продажа</strong></p>\n      </td>\n      <td style=\"height:22.5pt; width:4.5pt\">&nbsp;</td>\n      <td style=\"height:22.5pt; width:198.0pt\">\n      <p>&nbsp;&nbsp;&nbsp;<strong>$ 9 600 000</strong><br />\n      &nbsp;</p>\n      </td>\n      </tr>\n      <tr>\n      <td style=\"height:7.5pt; width:82.5pt\">\n      <p>&nbsp;</p>\n      </td>\n      <td style=\"height:7.5pt; width:4.5pt\">&nbsp;</td>\n      <td style=\"height:7.5pt\">\n      <p>&nbsp;</p>\n      </td>\n      </tr>\n      <tr>\n      <td style=\"height:22.5pt; vertical-align:top; width:82.5pt\">\n      <p><strong>Участок:</strong></p>\n      </td>\n      <td style=\"height:22.5pt; width:4.5pt\">&nbsp;</td>\n      <td style=\"height:22.5pt; vertical-align:top; width:198.0pt\">\n      <p>Площадь: <strong>33 соток </strong><br />\n      Ландшафт: Лесной<br />\n      Дополнительно: На участке отдельно расположен гараж на 3 а/м. Над гаражом 2-х комнатная квартира для персонала с кухней и с/у. В правом крыле гаража расположена котельная.</p>\n      </td>\n      </tr>\n      <tr>\n      <td style=\"height:7.5pt; width:82.5pt\">\n      <p>&nbsp;</p>\n      </td>\n      <td style=\"height:7.5pt; width:4.5pt\">&nbsp;</td>\n      <td style=\"height:7.5pt\">\n      <p>&nbsp;</p>\n      </td>\n      </tr>\n      <tr>\n      <td style=\"height:22.5pt; vertical-align:top; width:82.5pt\">\n      <p><strong>Дом:</strong></p>\n      </td>\n      <td style=\"height:22.5pt; width:4.5pt\">&nbsp;</td>\n      <td style=\"height:22.5pt; vertical-align:top; width:198.0pt\">\n      <p>Площадь: <strong>1200 кв.м.</strong><br />\n      Этажность: 2<br />\n      Число уровней: 4<br />\n      Фундамент: Монолит<br />\n      Стены: Кирпич<br />\n      Перекрытия: Монолит<br />\n      Кровля: Медь<br />\n      Внутренняя отделка: Под отделку<br />\n      Мебель: Нет<br />\n      Дополнительно: При проектировании применены интересные архитектурные решения. Дом представляет собой галерею с большой площадью остекления, где главной достопримечательностью является природа. При строительстве были использованы экологически чистые и натуральные материалы.</p>\n      </td>\n      </tr>\n      <tr>\n      <td style=\"height:7.5pt; width:82.5pt\">\n      <p>&nbsp;</p>\n      </td>\n      <td style=\"height:7.5pt; width:4.5pt\">&nbsp;</td>\n      <td style=\"height:7.5pt\">\n      <p>&nbsp;</p>\n      </td>\n      </tr>\n      <tr>\n      <td style=\"height:22.5pt; vertical-align:top; width:82.5pt\">\n      <p><strong>Планировка:</strong></p>\n      </td>\n      <td style=\"height:22.5pt; width:4.5pt\">&nbsp;</td>\n      <td style=\"height:22.5pt; vertical-align:top; width:198.0pt\">\n      <p>Цоколь: бильярдная, кинозал, винный погреб, постирочная, гладильная, технические помещения;<br />\n      1 этаж: прихожая, гардеробная, холл, кухня, столовая, каминный зал, кабинет, гостевой с/у, бассейн (16 метров), зона отдыха, сауна, с/у;<br />\n      2 этаж: спальня с с/у и гардеробной, 2 спальни с с/у, библиотека;<br />\n      Мансарда: 2 спальни с с/у и гардеробными</p>\n      </td>\n      </tr>\n      <tr>\n      <td style=\"height:7.5pt; width:82.5pt\">\n      <p>&nbsp;</p>\n      </td>\n      <td style=\"height:7.5pt; width:4.5pt\">&nbsp;</td>\n      <td style=\"height:7.5pt\">\n      <p>&nbsp;</p>\n      </td>\n      </tr>\n      <tr>\n      <td style=\"height:22.5pt; vertical-align:top; width:82.5pt\">\n      <p><strong>Коммуникации:</strong></p>\n      </td>\n      <td style=\"height:22.5pt; width:4.5pt\">&nbsp;</td>\n      <td style=\"height:22.5pt; vertical-align:top; width:198.0pt\">\n      <p>Газ: Магистральный<br />\n      Электричество: 25 кВт<br />\n      Водоснабжение: Центральное<br />\n      Канализация: Центральная</p>\n      </td>\n      </tr>\n      </tbody>\n      </table>', NULL, 'moy-dom-a1c955893ce582e9e6ccb8920ca5aef0', NULL, NULL, 0, NULL, NULL),
(9, 1, 0, 'дом в Горках-8 ( под ключ- 80%)', 'dom-v-gorkakh-8-pod-klyuch-80', '1', 'Продажа', '1', '100', '1', '₽', '100', 'Не забудьте внести адрес объекта', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '<p>В элитном поселке ГОРКИ-8 продается дом общей площадью 780 кв.м., кирпично-монолитный (стена 64см.) с возможностью перепланировки. Электричество 40кВт, газ, центральное водоснабжение, центральная канализация (3 куб./сутки) участок 30 соток.<br />\n      Цоколь: кинотеатр с камином, сауна, джакузи, SPA, с/у, тренажерный зал, раздевалка,<br />\n      2-е душевые, котельная-бойлерная, 3-и кладовые комнаты, комната для водоочистки;<br />\n      1-й этаж: прихожая, большой холл, кухня с выходом на террасу, столовая, гостиная с камином и выходом в сад и лес, игровая комната (или гостевая), с/у с душем для животных, постирочная комната с кладовой;<br />\n      2-й этаж: хозяйская спальня с большим с/у, душем и гардеробной, кабинет со вторым светом и выходом на огромный балкон, спальня с с/у и красивым видом, детская комната с балконом, общий с/у с ванной и душевой кабиной, гардеробная; гостевая комната-спальня;</p>\n\n      <p>3-й этаж: бильярдная, настольный (комнатный) теннис, Бар-гостиная, 3-и спальни.&nbsp;</p>\n\n      <p>Участок 30 соток граничит с лесом (есть возможность увеличить до 40 соток). Плодовые молодые деревья, сосны, елки, туи, цветы, кустарники, крыжовник, черешня, смородина, малина, на всем участке газон.</p>\n\n      <p>Строения на участке: Гостевой деревянный (сруб по финской технологии)<br />\n      2-х этажный дом с цоколем (полностью меблирован) общей площадью 190 кв.м.<br />\n      1-й этаж: Прихожая, кухня-столовая, с/у, Финская сауна с печкой Tulikivi, купель на 4-е человека, душевая, топочная с выходом в сад;<br />\n      2-й этаж: Большая спальня с балконом;<br />\n      Цоколь: Винный погребок в стиле старой таверны и дубовой мебелью, бойлерная с выходом в сад и постирочная комната.</p>\n\n      <p>Так же на участке кирпично-монолитный 2-х этажный гараж на 2-е машины, общей площадью 120 кв.м.&nbsp;<br />\n      На 2-м этаже 2-х комнатная квартира, прихожая, кухня, с/у. с ванной и душем.&nbsp;</p>\n\n      <p>Подъездная дорога Асфальт,<br />\n      Въездная и уличная охрана, въезд по пропускам.<br />\n      На территории своя церковь, 2-е детских площадки, магазин Перекресток,&nbsp;<br />\n      Аптека, Химчистка, кофе-бар, винный бар (часы работы - круглосуточно).<br />\n      &nbsp;</p>', NULL, 'moy-dom-a1c955893ce582e9e6ccb8920ca5aef0', NULL, NULL, 1, NULL, '2018-05-07 09:48:27');

-- --------------------------------------------------------

--
-- Структура таблицы `property_gallery`
--

CREATE TABLE `property_gallery` (
  `id` int(10) UNSIGNED NOT NULL,
  `property_id` int(11) NOT NULL,
  `image_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(1, 'Admin', 'Country House Realty', 'admin@admin.com', '$2y$10$PQ3oYIguESbmWYEXwhhwr.8ndxk1ViUlAJwCaFnL0Mc3yDOshKgWW', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, 'UueuDFTuYBn90FAdAdhSgwijaxqTItgjWLAalRG1nPtsyZQ7ZtN8TTzhHwMx', '2018-05-07 08:45:17', '2018-05-07 09:08:26');

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=188;

--
-- AUTO_INCREMENT для таблицы `partners`
--
ALTER TABLE `partners`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `properties`
--
ALTER TABLE `properties`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT для таблицы `property_gallery`
--
ALTER TABLE `property_gallery`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

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
