-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 06, 2024 at 10:41 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `content` text NOT NULL,
  `category` varchar(50) NOT NULL,
  `Tags` varchar(50) NOT NULL,
  `image` varchar(255) NOT NULL,
  `meta_description` varchar(100) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp(),
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `user_id`, `title`, `content`, `category`, `Tags`, `image`, `meta_description`, `created_at`, `updated_at`, `status`) VALUES
(1, 1, 'Pariatur nostrum adipisci minima.', 'Consequatur autem aut dolores sint eligendi. Itaque error id quo voluptatum qui esse alias. Est aut vel qui ipsum dignissimos ex minus.', 'Sunt est nihil a vel voluptatem.', 'Aut eum totam itaque eius sit temporibus alias. Ni', '', 'Mollitia quia ut sunt magni soluta reprehenderit a quod. Ducimus et ea omnis in nesciunt perspiciati', '1981-05-19 04:39:48', '1992-04-27 18:09:41', 'True'),
(2, 3, 'Est dicta aliquid placeat tempore.', 'Nulla minima ducimus eos error optio recusandae. Aut quos id suscipit provident alias. Iure non est et ut a. Cum assumenda adipisci cumque.', 'Quos atque nulla perspiciatis cumque officia dolor', 'Molestiae ut et dolorem autem ut quo. Animi molest', '', 'Totam omnis at vitae ratione dolorem veritatis. Qui et laborum eos aliquid libero quae laudantium. S', '2020-10-26 13:01:22', '1971-02-27 06:17:52', 'True'),
(3, 1, 'Consequuntur ullam vel nemo aut cupiditate voluptatem.', 'Facere consequatur iste ducimus fugiat doloremque nostrum qui impedit. Qui quia eius modi qui omnis consequatur cupiditate. Qui in omnis non veniam laudantium facere. Quae tempora quo vel quibusdam.', 'Autem harum veniam laborum ut.', 'Numquam eligendi adipisci sint. Quaerat eum nemo s', '', 'Neque minima modi dolores quo veritatis qui inventore. Cupiditate quam dolor optio iste porro. Delec', '2005-09-24 11:51:09', '2012-07-08 23:14:17', 'True'),
(4, 1, 'Earum explicabo quaerat autem laborum qui quidem.', 'Saepe et reiciendis mollitia dolores. Iure aut quis aut quos et minima possimus. Delectus aut saepe eum autem labore. Commodi itaque ratione molestiae eius consectetur quis corrupti.', 'Reiciendis perspiciatis laborum quis nulla aut fac', 'Officiis nulla at in ea eaque. Nam nostrum asperio', '', 'Atque in rerum doloribus nostrum qui. Quia vel ut rerum eligendi doloribus repellendus nihil. Repell', '1981-05-19 17:21:10', '1973-04-05 00:40:12', 'True'),
(5, 1, 'Sint quae quae labore debitis sit molestias tenetur.', 'Voluptates sint et sit ad eaque. Architecto similique omnis assumenda mollitia dolores provident. Dolor molestiae aut repellendus officiis. Possimus in voluptas sit maxime sunt ullam.', 'Sequi quia iste at neque nesciunt.', 'Fuga vel architecto dicta eius necessitatibus ipsa', '', 'Quo aspernatur atque et hic quasi eos. Inventore quas dolorem a ut magni omnis. Cupiditate praesenti', '1975-01-03 18:48:37', '2009-11-15 01:08:25', 'True'),
(6, 4, 'Rerum eligendi consequatur ipsum.', 'Voluptas voluptates recusandae molestias aut. Et explicabo ut odio nulla eligendi facilis. Inventore quibusdam quo possimus ab et occaecati.', 'Quam voluptas sint doloribus quos debitis.', 'Itaque non consectetur ipsa laboriosam. Et molesti', '', 'Voluptate rerum id deleniti nam commodi adipisci iusto omnis. Et sed cupiditate aspernatur libero et', '1986-04-02 01:38:43', '1971-10-04 22:46:56', 'True'),
(7, 1, 'Molestias dolor autem sed.', 'Voluptates adipisci iusto dignissimos quo saepe esse modi. Impedit porro voluptas ab vitae eos. Ipsa veritatis iusto iste nostrum. Assumenda quis vel sunt et officiis.', 'Ut aut culpa odio eligendi sint perspiciatis earum', 'Dolore aperiam quisquam et repellendus est est. Co', '', 'Sint qui quas officia officiis. Sit corrupti beatae nesciunt et. Saepe ipsam quas blanditiis ut magn', '2002-05-07 05:53:36', '2003-04-05 05:43:29', 'True'),
(8, 10, 'Et cupiditate sed repudiandae illum sapiente quas sapiente.', 'Sint consectetur rerum odio error quos. Atque placeat repellendus quae suscipit praesentium aut. Ut alias et quaerat maxime.', 'Voluptas quae et repudiandae quo qui voluptatem.', 'Ipsam sequi eveniet inventore deleniti aut nostrum', '', 'At ut qui sunt sunt et. Ea error quia sit dolor qui enim perspiciatis ipsum. Dolorem vel quasi unde ', '2007-06-23 09:00:02', '1975-06-12 14:02:51', 'True'),
(9, 10, 'Dolores vitae recusandae porro magnam.', 'Neque necessitatibus eum eligendi deserunt. Iusto dignissimos est vel vel et eum voluptatem. Necessitatibus voluptate labore cupiditate corrupti. Sit quisquam consequatur aut voluptatem deleniti.', 'Similique dolorum architecto et molestiae inventor', 'Ratione explicabo est ratione dicta sunt in aut no', '', 'Ratione enim voluptatem id vel consectetur tempore enim. Quos est quo velit quia dolores dolores off', '1997-11-09 18:30:08', '1986-02-28 21:19:35', 'True'),
(10, 15, 'Nihil modi qui odit repudiandae saepe qui non.', 'Eum culpa natus tempore molestiae error iure. Adipisci consequuntur eligendi corporis ullam excepturi. At illum repudiandae modi qui quisquam.', 'Illum dolorum qui vero voluptatem.', 'Debitis explicabo ex animi autem. Harum tempore ve', '', 'Asperiores odio perferendis quia ea. Voluptas sed impedit ipsam aliquid neque ad ut. Totam quo dolor', '1989-09-18 21:51:40', '2005-06-21 03:29:26', 'True'),
(11, 1, 'Qui autem quia quia molestiae.', 'Tempore sapiente atque aliquam omnis. Voluptatem reprehenderit sed optio laudantium nulla explicabo aliquid. Ducimus ut ad aut qui a molestiae cum et. Quia voluptas possimus qui animi nisi.', 'Dolorem quaerat et quo temporibus consequatur qui.', 'Maxime nam est id voluptas. Non dicta aut quasi mi', '', 'Dolore ut accusamus facere aut eius non temporibus. Ab ea exercitationem iure hic ducimus. Suscipit ', '2016-02-14 21:21:07', '1984-02-11 06:17:50', 'True'),
(12, 7, 'Nostrum sint sed dolores maiores animi ipsam cum.', 'Repudiandae pariatur tempora accusamus nihil rerum consequuntur. Quasi dolor consectetur similique labore tempora. Consectetur consequuntur provident earum optio ad.', 'Repudiandae voluptate molestias ut et et dignissim', 'Ad illum et culpa facilis ducimus rerum magni quib', '', 'Corrupti non occaecati beatae. Excepturi neque adipisci ut voluptate odit dolores. Autem et cum et v', '2021-03-09 18:41:54', '1971-07-09 00:28:07', 'True'),
(13, 3, 'Sint veniam rerum nobis facere aliquid blanditiis.', 'Nihil vel ducimus occaecati accusamus unde amet similique. Fuga dolores fuga et animi quos. Quia eius unde explicabo nobis corporis delectus quia occaecati.', 'Odio magnam earum perferendis saepe recusandae vol', 'Odio consequuntur sed earum hic saepe cum. Repelle', '', 'Sequi architecto aut error accusantium. Dolorem dolor eaque temporibus incidunt dignissimos ut iusto', '2015-02-01 23:21:21', '2019-10-25 12:09:30', 'True'),
(14, 3, 'Nulla voluptas quas non quibusdam illo quidem corporis.', 'Nostrum consequatur voluptatibus voluptatem ab odit delectus amet. Omnis ratione omnis animi voluptatem quia non cumque tempora. Quis ab odit explicabo omnis provident pariatur dolorum.', 'Provident qui quidem quaerat quod dolor.', 'Molestias natus possimus ducimus dolorem. Eligendi', '', 'Quod soluta quia iure asperiores dolores dignissimos. Numquam est omnis doloremque doloribus. Et vol', '2005-04-14 07:03:14', '2013-01-08 20:45:33', 'True'),
(15, 0, 'Et est voluptate quia illum.', 'In enim ratione sunt excepturi ea. Qui aliquam fugiat omnis et. Delectus officiis ut et tempore quia ad cumque. Tenetur sit qui quo eligendi.', 'Quia deserunt dolore error.', 'Praesentium suscipit et ipsa perspiciatis nobis ar', '', 'Voluptatem sint voluptate aut vitae quam alias eos asperiores. Cum sed sit praesentium labore. Quia ', '2000-07-25 22:34:22', '2010-10-25 19:03:46', 'True'),
(16, 5, 'Voluptatibus architecto repellat fuga quo aut et laborum harum.', 'Possimus enim cum quia alias. Sit ut ut nulla sed quia dolorum at. Impedit non magni quia expedita doloribus. Rerum fugit asperiores cum sunt consequatur.', 'Distinctio omnis explicabo rerum facilis quia natu', 'Nulla est in deserunt. Officiis porro eveniet nece', '', 'Iure natus voluptatem laborum quia quasi ut. Ipsum saepe enim nisi blanditiis eos consectetur sit. R', '1992-02-25 08:27:55', '1971-02-17 03:10:22', 'True'),
(17, 1, 'Iure assumenda dolore aut ut.', 'Nisi delectus maiores consequuntur nobis ut. Qui fugiat qui porro sapiente quaerat accusantium vel. Sunt et molestiae debitis repellat et cupiditate quos sed.', 'Ut qui qui nisi enim.', 'Esse consectetur quidem at quia similique minus. V', '', 'Et a et iste quas. Vel earum aut aut. Enim non vel aut impedit.', '2016-12-06 14:59:36', '1971-12-29 13:01:13', 'True'),
(18, 1, 'Alias hic qui aperiam soluta eligendi rerum expedita.', 'Beatae et eum ut autem. Et iste eos assumenda voluptas distinctio quisquam dolor necessitatibus. Voluptas nisi explicabo nobis. Dolorem aut et ullam.', 'Pariatur corporis ab sed.', 'Excepturi ab quis vero consectetur qui exercitatio', '', 'Sit nihil et ut earum laborum ut. Magnam quia non voluptatem aut id ipsum et. Quibusdam sequi dolore', '1972-09-02 11:01:40', '2003-04-23 02:49:11', 'True'),
(19, 1, 'Magni necessitatibus eveniet nihil consequatur praesentium nemo porro.', 'Laudantium et consequatur dolores animi perspiciatis. Molestiae porro nihil vitae. Eligendi rem dolor eos ipsam asperiores atque.', 'Nihil quaerat velit aut ea.', 'Quisquam quo iusto et cumque explicabo in autem. D', '', 'Ratione laboriosam a asperiores reiciendis. Libero nulla qui et sint. Distinctio harum corporis ea n', '1982-01-29 00:16:25', '2013-11-15 13:42:20', 'True'),
(20, 0, 'Laboriosam consectetur laboriosam deleniti modi.', 'Nemo sit ut aperiam assumenda et consequatur. Est ratione quo molestiae dolores. Quis maiores cupiditate aut suscipit. Nam dolore id suscipit impedit sit voluptatem saepe.', 'Laboriosam nihil ab sed amet voluptatem voluptas d', 'Rerum eveniet quisquam voluptates neque nulla aute', '', 'Esse magni expedita quasi et minus non sed alias. Et est nostrum accusamus repellat ad numquam. Volu', '2002-07-09 04:30:01', '2001-11-15 01:17:39', 'True'),
(21, 1, 'Placeat itaque consequatur voluptas sunt ut velit.', 'Impedit rem qui eveniet maxime. Recusandae exercitationem aut sit eos tempora asperiores impedit.', 'Soluta voluptatem minima ut perferendis.', 'Autem veniam neque odit quod dolorum. Ipsa qui ill', '', 'Culpa ut at quia qui praesentium autem deleniti. Rem qui laudantium similique. Perspiciatis maxime h', '1994-12-25 17:33:53', '1990-02-04 12:04:23', 'True'),
(22, 1, 'Rerum praesentium consectetur autem aliquam dicta perferendis recusandae reiciendis.', 'Consequatur quia et eos. Inventore iusto mollitia autem autem dolores sit dolores atque. Natus in incidunt omnis molestias cum. Itaque molestiae quas quas error iusto at quae.', 'Earum deserunt repellat dignissimos veritatis qui ', 'Est aut sit ut sint. Dignissimos assumenda ea vel.', '', 'Harum sed vel illum autem. Est qui velit laborum molestiae quia hic totam. Et nobis non perspiciatis', '2011-06-14 02:04:58', '2007-01-31 04:15:19', 'True'),
(23, 1, 'Illo quod accusamus occaecati veritatis.', 'Aut quasi magni reiciendis laboriosam. Asperiores sint inventore quos quo. Beatae ut tempora atque. Iusto sit sunt repellat magni beatae ipsa a quos.', 'Sed voluptates minima sed dolorum praesentium aute', 'Ut ad aut quibusdam consequatur. Sit fuga quia ad ', '', 'Voluptas quae voluptatem labore. Aliquam repellat voluptatibus ut maiores dolor quia saepe illo.', '2009-03-22 06:09:10', '2008-04-27 03:22:42', 'True'),
(24, 2, 'Vero sequi saepe sunt voluptatem voluptate praesentium.', 'Ut neque minima enim. Distinctio illo qui beatae voluptas voluptas quam consequatur fugiat. Ut ipsum earum totam consequatur ad.', 'Aperiam magnam distinctio animi aut quam.', 'Praesentium quia facilis cum illum occaecati incid', '', 'Vitae ut quaerat quo. Quidem eum aut consequatur sunt. Accusantium ab eveniet maxime dolor accusamus', '1999-10-31 18:42:10', '1976-01-02 12:38:43', 'True'),
(25, 2, 'Illum voluptate culpa sint sapiente.', 'Quod blanditiis dolorum beatae laboriosam. Dolorem laudantium totam neque porro occaecati laudantium. Non soluta non qui provident et reiciendis culpa.', 'Numquam omnis dolores occaecati doloremque.', 'Laboriosam enim repudiandae consequatur. Exercitat', '', 'Libero beatae voluptas harum modi. At corporis facere iusto voluptatem itaque omnis fuga. Quam solut', '2009-03-06 02:57:27', '1970-02-06 17:50:08', 'True'),
(26, 2, 'Omnis accusamus repellat dolor eum vero delectus.', 'Velit alias vitae et fugit. Repellendus modi ea accusamus cupiditate facilis alias consequatur. Et vitae sequi aut nobis impedit debitis accusantium.', 'Eos fuga eveniet sit accusantium dolorum enim nequ', 'Tempore quibusdam similique blanditiis est. Culpa ', '', 'Consequatur placeat quaerat maiores temporibus odio minus sequi nobis. Et enim ut asperiores hic ill', '1994-11-29 01:32:47', '2012-05-30 23:03:15', 'True'),
(27, 1, 'Earum id est omnis et et non.', 'Iure fuga ut consectetur explicabo maxime. Facere et voluptatem eum. Tempora inventore consequuntur sed.', 'Aliquam fuga aut rerum ut doloremque qui.', 'Aut ut non voluptas non est libero. Qui eaque et l', '', 'Eos sunt nihil molestias ut vel. Numquam temporibus quia ut rerum. Dolorem maxime aut repellendus de', '2013-12-26 08:45:37', '1987-04-19 23:47:49', 'True'),
(28, 1, 'The Joy of Traveling', 'Traveling is more than just visiting new places; it\'s about experiencing different cultures, meeting new people, and creating memories that last a lifetime. Whether you\'re exploring the bustling streets of Tokyo, relaxing on the serene beaches of the Maldives, or hiking through the majestic mountains of the Swiss Alps, each journey offers a unique adventure.\r\n\r\nOne of the greatest joys of traveling is the opportunity to step out of your comfort zone. It challenges you to adapt to new environments, try unfamiliar foods, and communicate in different languages. These experiences not only broaden your horizons but also help you grow as an individual.\r\n\r\nMoreover, traveling allows you to appreciate the beauty and diversity of our world. From the architectural wonders of ancient civilizations to the natural splendor of untouched landscapes, there\'s always something awe-inspiring to discover. Each destination has its own story to tell, and by traveling, you become a part of that narrative.\r\n\r\nIn addition to personal growth and cultural enrichment, traveling also fosters a sense of global community. It reminds us that despite our differences, we share a common humanity. The friendships and connections made while traveling often transcend borders and last a lifetime.\r\n\r\nSo, pack your bags, embrace the unknown, and embark on your next adventure. The world is waiting to be explored, and there\'s no better time to start than now. Happy travels! ?✈️', 'Travel', '#Travel #joy', '1730885683_03685ecb2b1c8defe00c.jpg', 'Discover the joy of traveling, exploring new cultures, and creating unforgettable memories', '2019-03-18 11:13:22', '2024-11-06 09:34:43', 'True'),
(29, 6, 'Velit et aut totam iste non quam rem.', 'Est iste voluptatibus iste voluptatem non voluptatem. In eum rerum laudantium et repellat voluptas neque. Mollitia quidem perspiciatis repellat expedita.', 'Adipisci laudantium ut officia porro.', 'Dolor sint suscipit omnis corporis. Error atque mo', '', 'Quam qui rerum facere est veritatis illum. Quia dolorem recusandae nemo soluta. Qui doloribus odio o', '1980-03-05 04:47:06', '1991-04-06 05:41:32', 'True'),
(30, 10, 'Unde aut fuga sequi nostrum quia sit.', 'Recusandae mollitia maiores eum laborum debitis corrupti incidunt. Sequi iste eum qui doloribus. Asperiores autem porro est ducimus ducimus accusantium.', 'Quia deserunt cum eum neque est est.', 'Modi voluptas repudiandae nesciunt asperiores qui ', '', 'Rem et perferendis voluptatem aliquam esse reprehenderit. Eveniet et quaerat voluptas voluptatem id.', '1972-08-05 06:59:55', '1984-12-28 08:12:54', 'True'),
(31, 4, 'Eveniet voluptatem assumenda id dolorem dolore.', 'Ratione natus sit tempora cum asperiores sint quia. Sit qui consectetur laboriosam et rerum ut et. Consequuntur sunt aut excepturi sed.', 'Velit quia aut ut.', 'Quia est dicta at architecto tempore. Est inventor', '', 'Sit soluta id ea at modi occaecati. Molestiae sit dicta aspernatur ipsum. Ipsam possimus facere dolo', '2001-09-30 04:13:01', '1973-11-02 15:07:44', 'True'),
(32, 6, 'Suscipit saepe maxime fugit ratione.', 'Odit et soluta magni voluptatibus. Dolor maxime dolores velit debitis. Architecto natus occaecati pariatur reprehenderit ab doloribus facere et. Delectus et doloribus aut ab quis necessitatibus.', 'Enim rem quos esse neque earum repudiandae.', 'Iste qui ad accusamus magnam. Corporis tempora dol', '', 'Asperiores velit iusto quaerat assumenda numquam. Facilis totam et sed. Ea et sed quod ut expedita n', '2009-04-17 00:04:05', '1999-06-12 08:01:43', 'True'),
(33, 1, 'Quis nulla iusto enim est voluptates.', 'Consectetur eveniet ut non architecto ab natus. Excepturi soluta illum officia hic voluptatem. Labore nam quis qui rerum deleniti incidunt. Assumenda eveniet non iusto.', 'Aperiam eius nesciunt id saepe delectus minus a.', 'Iusto et voluptates velit vitae ipsa eum sunt volu', '', 'Velit velit omnis laudantium soluta similique natus. Iure et est eveniet pariatur laudantium. Itaque', '1993-04-01 16:43:07', '1974-04-12 15:54:58', 'True'),
(34, 6, 'Et deleniti voluptatem necessitatibus ut hic autem eos.', 'Autem animi labore id tenetur possimus veniam et. Doloribus rerum qui accusantium natus exercitationem. Voluptatum excepturi saepe modi laudantium. Sed accusamus rerum eum dolores reiciendis.', 'Asperiores voluptatem reprehenderit labore autem m', 'Consequatur ut ut qui voluptatem fuga eligendi. Si', '', 'Officia eos delectus ex rerum ad. Ut nulla ea ab sed iure vero ut. Minima quis et rem et sit sint in', '2019-12-29 08:40:29', '2022-09-24 22:51:56', 'True'),
(35, 5, 'Voluptatibus voluptatem laudantium quo laboriosam.', 'Et ipsum ratione et non. Enim hic consectetur aut aut deleniti vero. Dolor inventore ut quae nihil vel.', 'Iste nemo voluptate qui mollitia nihil.', 'Sit dolore quia et occaecati nam iste. Nisi numqua', '', 'Dignissimos corporis accusamus rerum molestiae non veniam quis. Tempora id alias et suscipit sint co', '1990-10-17 04:55:00', '1985-02-13 22:42:57', 'True'),
(36, 3, 'Sed accusamus est ex eum delectus et eum.', 'Voluptatem modi hic molestiae eum consectetur recusandae adipisci odit. Necessitatibus eveniet consequatur voluptas deleniti libero eos rem distinctio. Quam cupiditate dolor rerum et.', 'Quasi sunt sed quo veritatis soluta.', 'Et dolorum voluptatem quis dolor. Doloribus et tem', '', 'Deleniti eligendi asperiores cum quia non similique. Officiis fuga alias asperiores nostrum nihil se', '2000-02-16 04:14:00', '2003-09-05 17:13:24', 'True'),
(37, 1, 'Iusto autem doloremque qui aut quisquam.', 'Voluptates dolorem optio nemo repellendus sit et id. Delectus atque cupiditate et eos. Dolorum sed recusandae beatae non.', 'Sint distinctio tempore id id maxime quidem.', 'Reiciendis nesciunt voluptas quod non autem. Magni', '', 'Repellat tenetur vel illum officia ipsam. Voluptatem voluptatem sapiente consequuntur et consequatur', '2000-08-16 19:09:44', '1985-06-01 02:06:18', 'True'),
(38, 6, 'Placeat temporibus et mollitia nemo similique.', 'Ea eius incidunt reiciendis rerum vero est repellendus. Inventore odit dolorum est molestiae.\nEst accusamus sunt culpa. Omnis vel et tempora dolorum. Autem unde cumque vel et eos quo.', 'Hic et earum et voluptas autem eos blanditiis.', 'Corrupti modi assumenda aperiam sunt dolorem in co', '', 'Placeat deserunt sequi earum autem. Quaerat odio enim maxime aut iste. Odit nulla quod quidem harum ', '2008-05-01 06:44:24', '2008-04-13 01:18:34', 'True'),
(39, 10, 'Enim similique omnis ad vel et.', 'Sed dolor et amet et. Labore nobis recusandae quidem quis dignissimos temporibus. Ipsam molestias est praesentium perspiciatis. Et ipsam consequuntur dolorem rerum totam qui.', 'Nihil sit quas ut possimus.', 'Et modi error ratione architecto aperiam. Quam aut', '', 'Tempore id eos alias inventore minima nulla aut. Officiis possimus dolore quam maxime enim adipisci.', '1997-07-30 09:16:50', '1982-09-18 20:21:42', 'True'),
(40, 9, 'Voluptas odio qui iste non voluptatem voluptatem labore impedit.', 'Cumque quas molestiae labore doloribus voluptatem. Minus laboriosam amet consequatur neque qui voluptatibus impedit.', 'Maiores rerum consectetur natus.', 'Ut distinctio quo cum labore magnam harum. Minima ', '', 'Vitae veniam dolorum quia sit est nihil. Animi eligendi dolore dignissimos excepturi pariatur ea aut', '1992-02-12 04:09:44', '2010-09-28 09:38:39', 'True'),
(41, 12, 'Aut doloremque fuga enim dolores.', 'Neque libero et minus quis. Ab in aspernatur numquam laudantium. Dignissimos quidem aut commodi sed enim.', 'Nemo aliquam quia culpa voluptates ab molestias.', 'Quo ullam pariatur praesentium totam. Ratione et s', '', 'Sed voluptates amet excepturi ut. Eius voluptatem libero aut nihil assumenda est explicabo eum. Prov', '2003-05-03 04:07:36', '1975-08-19 18:33:42', 'True'),
(42, 14, 'Suscipit dolorem qui veritatis consectetur asperiores.', 'Vel nesciunt numquam qui laboriosam corporis nihil qui. Non sunt beatae hic eum animi itaque. Eum quae expedita est.', 'Delectus doloremque porro facilis.', 'Et in aut amet ex et quisquam ut sequi. Labore exp', '', 'Iusto odio ea ipsam itaque. Praesentium numquam eligendi et iure eaque possimus quod. Pariatur et qu', '2011-04-28 02:02:47', '1986-12-25 04:20:16', 'True'),
(43, 0, 'Quia debitis nobis impedit eligendi est sint magni.', 'Architecto vero deserunt voluptas id. Explicabo deleniti sint modi sint nesciunt. Consequatur quos est voluptatem culpa alias. Illo reiciendis et voluptas explicabo.', 'Debitis tempora maiores necessitatibus aliquid ips', 'Distinctio autem dolores deserunt et. Exercitation', '', 'Illo corrupti eos nisi nesciunt ab. Ut consequuntur nihil sunt repellendus aut. Qui molestiae explic', '1986-06-21 00:37:03', '1992-02-08 23:10:11', 'True'),
(44, 15, 'Reprehenderit porro ut consequuntur sapiente ea voluptatibus nihil.', 'Ex quas odit blanditiis id blanditiis saepe vero. Perspiciatis quo similique est id velit qui. Odit id non asperiores aut.', 'Autem repudiandae quos provident molestiae volupta', 'Dolor cupiditate earum illo qui. Ullam nisi impedi', '', 'Ut dolores repellat dolor molestiae. Est facilis dolorem qui et assumenda quia necessitatibus. Minus', '2023-10-24 07:18:37', '1977-10-07 12:22:49', 'True'),
(45, 5, 'Velit sed sunt et magni.', 'Rerum quo dicta inventore tempora. Maxime omnis molestias velit amet provident ea. Omnis et et nesciunt rerum quo et quia.', 'Non incidunt consequuntur et qui ipsa aut.', 'Inventore magni sapiente qui eum qui tempora cum e', '', 'Inventore distinctio aspernatur necessitatibus sint cumque consequatur aliquam. Excepturi quos sed q', '2019-10-26 16:21:22', '2004-06-11 05:55:45', 'True'),
(46, 1, 'Autem non quis qui eveniet sunt fugit.', 'Tempore non fugiat aliquid id molestias. Nisi similique autem odit. Ipsam ut amet rerum.\nUt quae veritatis consequatur ut. Dolor incidunt omnis tempore iure culpa. A culpa quos mollitia.', 'Repellendus consequatur soluta nesciunt quo quas a', 'Nemo placeat non sed incidunt non nesciunt magnam ', '', 'Qui est velit maiores eos quia maxime molestias. Et qui nulla quibusdam perferendis commodi necessit', '1973-12-01 21:56:19', '2019-07-14 02:27:38', 'True'),
(47, 20, 'Voluptas voluptatem ullam fugit et similique officiis sed.', 'Dolorum incidunt qui et porro reprehenderit praesentium consequatur voluptatem. Beatae qui harum nostrum quis. Labore iusto eos et ut. Hic esse at architecto omnis impedit unde.', 'Adipisci vero consectetur quibusdam omnis eligendi', 'Est molestiae enim eos atque qui. Eos dolorem esse', '', 'Aspernatur perspiciatis quam aliquid consequatur est ab. Eum aliquam voluptatem quidem sint. Quam fa', '2017-03-22 11:31:24', '1990-03-04 21:46:54', 'True'),
(48, 10, 'Dicta quaerat cumque molestias non qui dolorem voluptates omnis.', 'Accusantium repudiandae rerum minus consequatur. Ut omnis nostrum voluptatem minus. Qui voluptas qui est fuga.', 'Odio eos cum magni.', 'Accusantium pariatur cumque aut autem dolorem pers', '', 'Minima est fuga quis non sit ab earum. Nesciunt et suscipit quia sed vitae labore illum. Harum qui a', '1992-03-02 17:34:42', '1993-08-26 04:47:30', 'True'),
(49, 7, 'Est sed voluptas delectus atque.', 'Nostrum sapiente illum aut in porro autem laboriosam dolores. Cum est aspernatur aut nemo. Dolor consequatur consequatur eum excepturi.', 'Sunt velit similique facilis blanditiis amet ipsam', 'Dolorem ut sequi doloremque cupiditate distinctio ', '', 'Vel quae dolore rerum ut sapiente itaque. Maxime accusamus saepe quis corporis fugit vel. Et odit ex', '1997-05-25 07:42:39', '1976-04-02 11:49:26', 'True'),
(50, 5, 'Quia nesciunt quis qui culpa error blanditiis cupiditate non.', 'Temporibus at nulla dolorem impedit. Deleniti molestiae quis qui et a magni. Voluptatem et consequatur tenetur quia accusamus qui sapiente ea.', 'Odit repellat enim veniam ab ut inventore.', 'Debitis molestias ea officiis autem qui. Quo dolor', '', 'Ex ea aut pariatur quam asperiores quia provident. Vitae aut error facilis. Ipsa tempore eius omnis ', '2000-10-10 21:04:08', '2006-06-17 04:27:08', 'True');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `profile_image` varchar(255) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `Active` varchar(10) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `profile_image`, `firstname`, `lastname`, `username`, `Email`, `password`, `Active`, `created_at`, `updated_at`) VALUES
(1, '1730884363_6dac6c04858d83aa376d.jpg', 'Carmela', 'Hagenes', 'Y A S I R', 'whitney77@example.net', 'dev_codeigniter4', 'True', '1992-11-23 22:30:42', '2024-11-06 09:12:43'),
(2, '', 'Robert', 'Fahey', 'schultz.geovanni', 'shaylee.hills@example.net', '406b65073f1633eef56683c1cd3acd8c13f73cb1', 'True', '1995-06-29 18:44:34', '1996-06-05 09:00:31'),
(3, '', 'Susie', 'Littel', 'carroll.stone', 'raoul.koss@example.com', '840084f7fffcb8c86e2e4c95775df2627bafb9bf', 'True', '1997-11-27 12:47:41', '1977-04-05 14:58:21'),
(4, '', 'Salvador', 'Gerlach', 'madisen54', 'fgottlieb@example.org', '94ac3cccf6129583a3585da9b23864877ef37a31', 'True', '2002-01-13 16:44:54', '1998-04-29 17:45:21'),
(5, '', 'Cole', 'O\'Hara', 'keeling.maiya', 'christiansen.xander@example.net', '8ff7b087eba658b0b659382ba2eedd63aae23db1', 'True', '2006-08-14 01:09:32', '1988-11-10 04:08:30'),
(6, '', 'Freeda', 'Berge', 'block.miguel', 'runte.saige@example.com', 'c5190a0940800db5891cd3b6e13ec60eca30975f', 'True', '1991-12-31 03:24:47', '1982-11-21 07:22:19'),
(7, '', 'Conner', 'Kuhlman', 'alvah.carter', 'halle.cormier@example.com', '62b671009c9c86c362c26781e53e54099899a301', 'True', '1977-12-24 06:31:49', '2024-09-23 18:28:13'),
(8, '', 'Vanessa', 'Treutel', 'cristal01', 'lrussel@example.org', '18512f05781f648ec69c34d23e5264255853df56', 'True', '2012-10-20 05:04:07', '1996-05-29 08:36:21'),
(9, '', 'Raul', 'Sauer', 'amclaughlin', 'justus43@example.net', '7ba06b8c0d9c32ddd34003a9a83cb63dddaa25c3', 'True', '1993-05-31 03:23:56', '2016-07-10 06:21:58'),
(10, '', 'Abigail', 'Klein', 'mitchel09', 'doug96@example.com', 'e0ec41bf9c14a7fbf3b5cca7b6e94092e13e0f7e', 'True', '1995-10-19 21:40:35', '2022-05-03 11:51:18'),
(11, '', 'Elmira', 'Olson', 'june03', 'antwon.schinner@example.com', '4407c7e58513262c875a320a5a35607b29cc7479', 'True', '1990-09-20 22:12:11', '1985-08-21 05:56:51'),
(12, '', 'Ona', 'Terry', 'erin63', 'gutkowski.sophie@example.com', 'c86b680d74b5f93bd3a56bbbc00b63dbf86ce453', 'True', '2021-02-18 06:40:27', '2005-01-27 10:55:20'),
(13, '', 'Obie', 'Wyman', 'vritchie', 'efrain07@example.net', 'c028064873d34b898b251560ac307a6ebc6985ba', 'True', '1984-07-07 09:26:56', '1978-03-24 22:32:41'),
(14, '', 'Amelia', 'Green', 'xmiller', 'tamia.dibbert@example.com', 'f9cfb261b5744ca12c6dbf04ef88c7763c78987c', 'True', '1997-02-19 10:47:12', '1990-06-23 21:16:16'),
(15, '', 'Eveline', 'Steuber', 'jazmin.mills', 'hermiston.joany@example.org', '21f77fa660a660bdfb8351a6e5508969ee87260f', 'True', '2005-11-18 03:39:12', '2017-01-15 23:04:18'),
(16, '', 'Elmira', 'Strosin', 'fadel.angelina', 'conrad65@example.net', '5e52060448b98db8760d0075985afda08efe7503', 'True', '1985-04-30 11:31:35', '2024-02-06 18:20:18'),
(17, '', 'Mona', 'Steuber', 'nernser', 'metz.vivienne@example.org', '6ed1f3140e133f32ec64219efc477a17c47bde7e', 'True', '2001-06-27 01:37:51', '1972-07-31 14:49:38'),
(18, '', 'Kiarra', 'Larson', 'daphne.fritsch', 'gabbott@example.org', 'eaaf57b798ebc34cce387d26e92725e3c5c9eb4d', 'True', '2004-05-16 07:50:21', '1979-09-24 23:01:34'),
(19, '', 'Rhea', 'Jacobi', 'logan30', 'pwilderman@example.com', '5bb3de283d43e042541b7a457adc568c2c956144', 'True', '1989-06-02 10:59:53', '1970-12-18 08:21:48'),
(20, '', 'Mariane', 'Mitchell', 'german.o\'kon', 'beer.jaden@example.org', 'd92e24a6acfc3ca3feae5dbba36b7067bcfac4b3', 'True', '1975-11-20 13:27:21', '1998-06-19 01:31:41'),
(21, '', 'Laney', 'Corkery', 'jkutch', 'terry.titus@example.com', '9d5183b87ac1a4910bff87776e78941fa6487c0c', 'True', '2016-03-06 15:04:10', '2002-12-19 13:11:32'),
(22, '', 'Brandi', 'Kemmer', 'bert23', 'xhermann@example.net', '1353db96f83cb9f46b6f0c1f7f0e4bd957b86151', 'True', '2013-08-08 13:58:52', '1980-06-05 07:48:25'),
(23, '', 'Juston', 'Kulas', 'roberts.gerald', 'ydickens@example.com', 'f2f054885ab8cbb2155941881fe3e0bf8db42df1', 'True', '1992-05-18 17:12:34', '2018-09-19 20:32:57'),
(24, '', 'Susanna', 'Johnston', 'felicity.lindgren', 'gibson.hal@example.net', '2452759d42a55d81102614f22bce2a348872bf8c', 'True', '1989-03-13 20:37:04', '1998-04-18 14:11:23'),
(25, '', 'Lia', 'Christiansen', 'giovani75', 'kulas.destinee@example.com', 'b6d42973845ef553a6cce0494803d87448c13cc3', 'True', '2010-12-22 07:28:10', '2006-10-14 14:12:15'),
(26, '', 'Petra', 'Abernathy', 'carol.dickens', 'colleen22@example.net', '8ae90a88cbf7981f72ce842d40f52c0a950a48fe', 'True', '1994-11-15 18:38:18', '1989-12-18 09:14:30'),
(27, '', 'Kamron', 'Runolfsdottir', 'schamberger.johnpaul', 'einar.mcdermott@example.net', '0ea1f16c00aa0dc7237341a2b44ca55e1b892f28', 'True', '2009-08-05 22:44:07', '1992-01-05 08:13:46'),
(28, '', 'Vesta', 'Leuschke', 'fschoen', 'silas.howell@example.com', 'ff59f71adbac93408d4f165eeb08ebdae9895da3', 'True', '1995-04-28 06:54:48', '2005-10-19 18:36:28'),
(29, '', 'Lysanne', 'Zemlak', 'kassandra69', 'george90@example.org', 'f8a66c1c20038c17a401630671abce6f759721f0', 'True', '2015-01-23 08:28:16', '1991-04-05 22:56:32'),
(30, '', 'Diana', 'Kautzer', 'willis.thompson', 'ulices04@example.com', 'cd05a3f17020a4aac293d1c9615a4ff25e02c7c1', 'True', '1977-03-24 20:10:41', '1987-08-12 05:05:19');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
