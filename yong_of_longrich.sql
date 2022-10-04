-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : jeu. 29 sep. 2022 à 05:40
-- Version du serveur : 10.4.24-MariaDB
-- Version de PHP : 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `yong_of_longrich`
--

-- --------------------------------------------------------

--
-- Structure de la table `articles`
--

CREATE TABLE `articles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nom_article` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `typeOuSerie` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_typeArticle` bigint(20) UNSIGNED NOT NULL,
  `img1_article` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img2_article` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img3_article` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img4_article` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img5_article` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `titre_article` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prix_article` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `detail_article` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `mode_utilisation` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `articles`
--

INSERT INTO `articles` (`id`, `nom_article`, `typeOuSerie`, `id_typeArticle`, `img1_article`, `img2_article`, `img3_article`, `img4_article`, `img5_article`, `titre_article`, `prix_article`, `detail_article`, `mode_utilisation`, `created_at`, `updated_at`) VALUES
(1, 'Morris', 'Kreiger', 6, 'https://via.placeholder.com/640x480.png/00ff22?text=non', 'https://via.placeholder.com/640x480.png/0099cc?text=laborum', 'https://via.placeholder.com/640x480.png/00eeee?text=fuga', 'https://via.placeholder.com/640x480.png/0044cc?text=dolorum', 'https://via.placeholder.com/640x480.png/00ffdd?text=vitae', 'Aut vel esse suscipit tempore quo. Voluptate sunt quidem accusamus numquam qui soluta. Et dolor optio mollitia rerum animi laboriosam qui.', '643', 'Beatae.', 'Ut sint vel deserunt.', '2022-09-26 23:52:19', '2022-09-26 23:52:19'),
(2, 'Alisa', 'Schowalter', 5, 'https://via.placeholder.com/640x480.png/005544?text=laudantium', 'https://via.placeholder.com/640x480.png/0022cc?text=et', 'https://via.placeholder.com/640x480.png/0044dd?text=nostrum', 'https://via.placeholder.com/640x480.png/00cc11?text=cupiditate', 'https://via.placeholder.com/640x480.png/005544?text=quia', 'Quidem vero porro error ipsum aspernatur. Excepturi enim quia non quam magni ipsa. Saepe aperiam voluptatum dolorem saepe eum soluta. Fugiat architecto et nulla aperiam enim.', '273', 'Rem adipisci.', 'Sed aut qui commodi.', '2022-09-26 23:52:19', '2022-09-26 23:52:19'),
(3, 'Garrick', 'Will', 6, 'https://via.placeholder.com/640x480.png/00dd99?text=neque', 'https://via.placeholder.com/640x480.png/0055ff?text=quia', 'https://via.placeholder.com/640x480.png/00cc11?text=minus', 'https://via.placeholder.com/640x480.png/009944?text=natus', 'https://via.placeholder.com/640x480.png/0066cc?text=corrupti', 'Fuga beatae placeat aliquam et voluptas deleniti. Voluptas ratione ipsa itaque consequatur non.', '094', 'Neque ut dicta.', 'Vero nulla id sit ipsa.', '2022-09-26 23:52:19', '2022-09-26 23:52:19'),
(4, 'Theodore', 'Gutkowski', 3, 'https://via.placeholder.com/640x480.png/00cc99?text=eaque', 'https://via.placeholder.com/640x480.png/0055ff?text=perferendis', 'https://via.placeholder.com/640x480.png/0099dd?text=est', 'https://via.placeholder.com/640x480.png/00bb77?text=qui', 'https://via.placeholder.com/640x480.png/00bb88?text=ad', 'Rerum quasi voluptatem iste ratione. Odit hic accusamus excepturi omnis eligendi. Dolor facere alias sunt similique quaerat facilis temporibus et.', '578', 'Ut quod error.', 'Vero dolores et et.', '2022-09-26 23:52:19', '2022-09-26 23:52:19'),
(5, 'Gladys', 'Graham', 6, 'https://via.placeholder.com/640x480.png/008822?text=magni', 'https://via.placeholder.com/640x480.png/0000ee?text=rerum', 'https://via.placeholder.com/640x480.png/001144?text=et', 'https://via.placeholder.com/640x480.png/002244?text=sit', 'https://via.placeholder.com/640x480.png/005588?text=laboriosam', 'Perspiciatis ea deleniti maxime architecto eius. Quibusdam facilis nobis veritatis reprehenderit vel nam veritatis. Et iusto ratione omnis nobis dolores dicta.', '842', 'Eaque sequi.', 'Amet est molestias ab.', '2022-09-26 23:52:19', '2022-09-26 23:52:19'),
(6, 'Colleen', 'Mills', 5, 'https://via.placeholder.com/640x480.png/00ffbb?text=vel', 'https://via.placeholder.com/640x480.png/00ddff?text=expedita', 'https://via.placeholder.com/640x480.png/00ddff?text=omnis', 'https://via.placeholder.com/640x480.png/00ffcc?text=voluptatum', 'https://via.placeholder.com/640x480.png/0044dd?text=delectus', 'Perferendis nulla reprehenderit omnis dolorem explicabo odit sed. Eum et maiores voluptatem et. Fugit dolorem nam et tempora eaque.', '977', 'Vitae a libero.', 'Provident in nemo a non.', '2022-09-26 23:52:19', '2022-09-26 23:52:19'),
(7, 'Kaylie', 'Friesen', 2, 'https://via.placeholder.com/640x480.png/004466?text=soluta', 'https://via.placeholder.com/640x480.png/0044ff?text=explicabo', 'https://via.placeholder.com/640x480.png/00dd11?text=itaque', 'https://via.placeholder.com/640x480.png/00cc44?text=assumenda', 'https://via.placeholder.com/640x480.png/001188?text=sit', 'Qui unde iste suscipit cum temporibus quis aperiam. Explicabo nobis excepturi eum. Aut error dicta ut odio est exercitationem. Dolorum ducimus ut illum tenetur quidem assumenda.', '553', 'Quis sint.', 'Ea nisi quia eius est.', '2022-09-26 23:52:19', '2022-09-26 23:52:19'),
(8, 'Flo', 'Thiel', 5, 'https://via.placeholder.com/640x480.png/008833?text=laboriosam', 'https://via.placeholder.com/640x480.png/003322?text=maxime', 'https://via.placeholder.com/640x480.png/0011bb?text=similique', 'https://via.placeholder.com/640x480.png/004499?text=impedit', 'https://via.placeholder.com/640x480.png/003344?text=ipsum', 'Molestias nisi neque aliquid placeat omnis aut aut. Magnam itaque accusamus minima sint ut. Necessitatibus ipsum neque ad.', '152', 'Voluptatem.', 'Qui qui qui hic.', '2022-09-26 23:52:19', '2022-09-26 23:52:19'),
(9, 'Filomena', 'Hayes', 1, 'https://via.placeholder.com/640x480.png/0044ff?text=veniam', 'https://via.placeholder.com/640x480.png/009933?text=id', 'https://via.placeholder.com/640x480.png/003377?text=voluptatem', 'https://via.placeholder.com/640x480.png/00bb33?text=tempora', 'https://via.placeholder.com/640x480.png/005566?text=exercitationem', 'Eos dolores quaerat quia odio. Rem ad impedit minus amet sint dicta omnis. Facere nesciunt dolorem consequatur provident.', '768', 'Numquam.', 'Quod aut ea ut.', '2022-09-26 23:52:19', '2022-09-26 23:52:19'),
(10, 'Charlene', 'Franecki', 3, 'https://via.placeholder.com/640x480.png/00bbcc?text=consequuntur', 'https://via.placeholder.com/640x480.png/00ff99?text=blanditiis', 'https://via.placeholder.com/640x480.png/001199?text=qui', 'https://via.placeholder.com/640x480.png/00ee44?text=iste', 'https://via.placeholder.com/640x480.png/000044?text=autem', 'Reiciendis vel quasi ut quo odit est consequatur consequatur. Vel dolor mollitia perferendis et ratione dolorem modi. Quia sit totam illum debitis magnam sed iusto.', '741', 'Iste nesciunt.', 'Qui vel sit ea dolorem.', '2022-09-26 23:52:19', '2022-09-26 23:52:19'),
(11, 'Hettie', 'Prohaska', 5, 'https://via.placeholder.com/640x480.png/003322?text=dolorem', 'https://via.placeholder.com/640x480.png/00eedd?text=nam', 'https://via.placeholder.com/640x480.png/001188?text=quae', 'https://via.placeholder.com/640x480.png/009955?text=quia', 'https://via.placeholder.com/640x480.png/003322?text=qui', 'Similique alias magnam quam fuga. Consequuntur eveniet et perspiciatis officia mollitia temporibus facilis. Aut est cumque ullam fugiat. Harum cum quia corrupti in et.', '534', 'Eius nihil.', 'Et qui sit amet ea.', '2022-09-26 23:52:20', '2022-09-26 23:52:20'),
(12, 'Zelda', 'Heller', 6, 'https://via.placeholder.com/640x480.png/00aadd?text=corporis', 'https://via.placeholder.com/640x480.png/006666?text=molestiae', 'https://via.placeholder.com/640x480.png/00dd66?text=possimus', 'https://via.placeholder.com/640x480.png/004477?text=ex', 'https://via.placeholder.com/640x480.png/005588?text=ullam', 'Aliquam id natus facere possimus numquam. Ipsum quod voluptates tempore consequatur modi optio. Ut quo saepe molestias architecto voluptatem aut dolorem nemo.', '113', 'Mollitia totam.', 'Tenetur et eius eius.', '2022-09-26 23:52:20', '2022-09-26 23:52:20'),
(13, 'Kaleigh', 'Morissette', 4, 'https://via.placeholder.com/640x480.png/00bb66?text=reprehenderit', 'https://via.placeholder.com/640x480.png/0088dd?text=corporis', 'https://via.placeholder.com/640x480.png/00bbee?text=exercitationem', 'https://via.placeholder.com/640x480.png/000099?text=doloribus', 'https://via.placeholder.com/640x480.png/000088?text=dolor', 'Quas eligendi amet accusantium omnis. Voluptatibus voluptas exercitationem laboriosam impedit sit voluptatum et. Dolor eum nulla incidunt maiores et eveniet. Ea vitae autem placeat et error.', '052', 'Aut nesciunt.', 'Aut quae nisi aut aut.', '2022-09-26 23:52:20', '2022-09-26 23:52:20'),
(14, 'Josianne', 'Hickle', 6, 'https://via.placeholder.com/640x480.png/00bbff?text=laudantium', 'https://via.placeholder.com/640x480.png/00aa88?text=eligendi', 'https://via.placeholder.com/640x480.png/00eecc?text=voluptate', 'https://via.placeholder.com/640x480.png/001133?text=placeat', 'https://via.placeholder.com/640x480.png/000066?text=et', 'Dolor soluta ut sit et. Commodi aliquid aliquid in sit nostrum quos. Qui sequi sunt eum sit et at.', '862', 'Cum ex quia.', 'In iure ducimus et.', '2022-09-26 23:52:20', '2022-09-26 23:52:20'),
(15, 'Alek', 'Kiehn', 2, 'https://via.placeholder.com/640x480.png/00cc66?text=minima', 'https://via.placeholder.com/640x480.png/007788?text=perferendis', 'https://via.placeholder.com/640x480.png/0099bb?text=ducimus', 'https://via.placeholder.com/640x480.png/00dd55?text=ea', 'https://via.placeholder.com/640x480.png/0077ee?text=ut', 'Accusamus tempore quia quo et iste. Mollitia quo ut illum enim ab. Nihil nisi qui et magni rem facere. Maxime sit fuga sequi est perferendis. Amet ipsum quos nam quia autem accusamus.', '656', 'Expedita quia.', 'Sed officiis est nihil.', '2022-09-26 23:52:20', '2022-09-26 23:52:20');

-- --------------------------------------------------------

--
-- Structure de la table `clients`
--

CREATE TABLE `clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prenom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sexe` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nmeroTel` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ville` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `communeOuQuartier` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `commandes`
--

CREATE TABLE `commandes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nmbreCommande` int(11) NOT NULL,
  `id_article` bigint(20) UNSIGNED NOT NULL,
  `id_statusCommande` bigint(20) UNSIGNED NOT NULL,
  `id_user` bigint(20) UNSIGNED NOT NULL,
  `id_client` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `numéro téléphone` int(11) NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Preocupation` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_100000_create_password_resets_table', 1),
(2, '2019_08_19_000000_create_failed_jobs_table', 1),
(3, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(4, '2022_09_19_094020_create_type_articles_table', 1),
(5, '2022_09_19_094415_create_articles_table', 1),
(6, '2022_09_19_100243_create_status_commandes_table', 1),
(7, '2022_09_19_101014_create_users_table', 1),
(8, '2022_09_26_031016_create_clients_table', 1),
(9, '2022_09_26_031017_create_commandes_table', 1),
(10, '2022_09_26_031432_create_contacts_table', 1),
(11, '2022_09_26_114054_create_roles_table', 1),
(12, '2022_10_19_100242_create_user_roles_table', 1);

-- --------------------------------------------------------

--
-- Structure de la table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nomRole` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `roles`
--

INSERT INTO `roles` (`id`, `nomRole`) VALUES
(1, 'SuperAdmin'),
(2, 'Admin');

-- --------------------------------------------------------

--
-- Structure de la table `status_commandes`
--

CREATE TABLE `status_commandes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nomStatusCommande` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `status_commandes`
--

INSERT INTO `status_commandes` (`id`, `nomStatusCommande`) VALUES
(1, 'Livrée'),
(2, 'Pas livrée');

-- --------------------------------------------------------

--
-- Structure de la table `type_articles`
--

CREATE TABLE `type_articles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nomTypeArticle` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `type_articles`
--

INSERT INTO `type_articles` (`id`, `nomTypeArticle`) VALUES
(1, 'Santé'),
(2, 'Soins et beauté'),
(3, 'Hygiéne et traitement'),
(4, 'Ordinateurs'),
(5, 'Téléphones'),
(6, 'Accessoirs');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prenom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sexe` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nmeroTel` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ville` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `communeOuQuartier` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `nom`, `prenom`, `sexe`, `nmeroTel`, `ville`, `communeOuQuartier`, `email`, `password`, `created_at`, `updated_at`) VALUES
(1, 'Judge', 'Orn', '0', '1-480-227-9124', 'Namibia', 'South Sashaville', 'hickle.lysanne@example.org', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '2022-09-26 23:52:17', '2022-09-26 23:52:17'),
(2, 'Javon', 'Fritsch', '0', '+1.972.950.7304', 'France', 'Marvinville', 'tabitha.glover@example.com', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '2022-09-26 23:52:18', '2022-09-26 23:52:18'),
(3, 'Enola', 'Parisian', '1', '442.618.3974', 'Malawi', 'North Ravenside', 'prohaska.sigrid@example.net', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '2022-09-26 23:52:18', '2022-09-26 23:52:18'),
(4, 'Gordon', 'Fahey', '0', '216.954.2259', 'Papua New Guinea', 'Lenorehaven', 'mckenna.wuckert@example.net', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '2022-09-26 23:52:18', '2022-09-26 23:52:18'),
(5, 'Jerrell', 'Bosco', '1', '(951) 932-8988', 'Luxembourg', 'South Kale', 'zmorissette@example.net', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '2022-09-26 23:52:18', '2022-09-26 23:52:18'),
(6, 'Vada', 'Fadel', '0', '(626) 331-0834', 'Italy', 'Port Brentborough', 'anita.barrows@example.com', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '2022-09-26 23:52:18', '2022-09-26 23:52:18'),
(7, 'Otha', 'Schamberger', '1', '(320) 980-1256', 'Tajikistan', 'Kelliborough', 'okeeling@example.net', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '2022-09-26 23:52:18', '2022-09-26 23:52:18'),
(8, 'Barney', 'Yost', '0', '680.903.0507', 'Spain', 'Brekketown', 'karianne.bahringer@example.net', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '2022-09-26 23:52:18', '2022-09-26 23:52:18'),
(9, 'Frieda', 'Weissnat', '1', '901.920.5562', 'Algeria', 'South Robertstad', 'dooley.elliot@example.com', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '2022-09-26 23:52:18', '2022-09-26 23:52:18'),
(10, 'Heidi', 'Ankunding', '1', '+1-435-832-4955', 'Djibouti', 'Macejkovicview', 'abelardo76@example.com', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '2022-09-26 23:52:18', '2022-09-26 23:52:18'),
(11, 'Luis', 'Fay', '1', '+1-762-224-8251', 'Mongolia', 'Hagenesland', 'emard.johnson@example.net', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '2022-09-26 23:52:18', '2022-09-26 23:52:18'),
(12, 'Filiberto', 'Doyle', '0', '+1 (623) 395-0841', 'Pitcairn Islands', 'Port Jacey', 'bernice.runolfsson@example.net', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '2022-09-26 23:52:18', '2022-09-26 23:52:18'),
(13, 'Cassidy', 'Marks', '1', '1-321-466-5383', 'Myanmar', 'East Savanah', 'renner.millie@example.org', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '2022-09-26 23:52:18', '2022-09-26 23:52:18'),
(14, 'Howard', 'Schroeder', '1', '+1-520-372-5268', 'Vanuatu', 'Port Pat', 'charlie.lang@example.net', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '2022-09-26 23:52:19', '2022-09-26 23:52:19'),
(15, 'Onie', 'Kerluke', '0', '+12673952034', 'San Marino', 'New Florencio', 'thalia.cassin@example.com', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '2022-09-26 23:52:19', '2022-09-26 23:52:19');

-- --------------------------------------------------------

--
-- Structure de la table `user_roles`
--

CREATE TABLE `user_roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_user` bigint(20) UNSIGNED NOT NULL,
  `id_role` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `user_roles`
--

INSERT INTO `user_roles` (`id`, `id_user`, `id_role`) VALUES
(1, 1, 1),
(2, 2, 2);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `articles_id_typearticle_foreign` (`id_typeArticle`);

--
-- Index pour la table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `clients_email_unique` (`email`);

--
-- Index pour la table `commandes`
--
ALTER TABLE `commandes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `commandes_id_article_foreign` (`id_article`),
  ADD KEY `commandes_id_statuscommande_foreign` (`id_statusCommande`),
  ADD KEY `commandes_id_user_foreign` (`id_user`),
  ADD KEY `commandes_id_client_foreign` (`id_client`);

--
-- Index pour la table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Index pour la table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Index pour la table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Index pour la table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `status_commandes`
--
ALTER TABLE `status_commandes`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `type_articles`
--
ALTER TABLE `type_articles`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Index pour la table `user_roles`
--
ALTER TABLE `user_roles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_roles_id_user_foreign` (`id_user`),
  ADD KEY `user_roles_id_role_foreign` (`id_role`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT pour la table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `commandes`
--
ALTER TABLE `commandes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT pour la table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `status_commandes`
--
ALTER TABLE `status_commandes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `type_articles`
--
ALTER TABLE `type_articles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT pour la table `user_roles`
--
ALTER TABLE `user_roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `articles`
--
ALTER TABLE `articles`
  ADD CONSTRAINT `articles_id_typearticle_foreign` FOREIGN KEY (`id_typeArticle`) REFERENCES `type_articles` (`id`);

--
-- Contraintes pour la table `commandes`
--
ALTER TABLE `commandes`
  ADD CONSTRAINT `commandes_id_article_foreign` FOREIGN KEY (`id_article`) REFERENCES `articles` (`id`),
  ADD CONSTRAINT `commandes_id_client_foreign` FOREIGN KEY (`id_client`) REFERENCES `clients` (`id`),
  ADD CONSTRAINT `commandes_id_statuscommande_foreign` FOREIGN KEY (`id_statusCommande`) REFERENCES `status_commandes` (`id`),
  ADD CONSTRAINT `commandes_id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`);

--
-- Contraintes pour la table `user_roles`
--
ALTER TABLE `user_roles`
  ADD CONSTRAINT `user_roles_id_role_foreign` FOREIGN KEY (`id_role`) REFERENCES `roles` (`id`),
  ADD CONSTRAINT `user_roles_id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
