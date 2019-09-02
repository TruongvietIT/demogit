-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 21, 2019 at 02:26 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.2.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `working-space`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@gmail.com', '$2y$10$DnodTevmz9cIQrzlyKal1eeaYzK2CDgoWBvNNa5kX2AQASCNVf2vS', NULL, '2019-08-09 19:16:44', '2019-08-09 19:16:44');

-- --------------------------------------------------------

--
-- Table structure for table `book_rooms`
--

CREATE TABLE `book_rooms` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_user` bigint(20) UNSIGNED NOT NULL,
  `id_room` bigint(20) UNSIGNED NOT NULL,
  `time_start` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `time_end` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `total` double NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `book_rooms`
--

INSERT INTO `book_rooms` (`id`, `id_user`, `id_room`, `time_start`, `time_end`, `total`, `status`, `created_at`, `updated_at`) VALUES
(14, 1, 1, '2019-08-17 13:02:00', '2019-08-17 15:05:00', 700000, 1, '2019-08-17 02:56:48', '2019-08-17 02:56:48'),
(16, 1, 2, '2019-08-18 01:12:00', '2019-08-18 03:12:00', 700000, 1, '2019-08-17 09:52:33', '2019-08-17 09:52:33'),
(17, 1, 2, '2019-08-21 07:00:00', '2019-08-21 08:20:00', 350000, 1, '2019-08-20 23:31:40', '2019-08-20 23:31:40');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_user` bigint(20) UNSIGNED NOT NULL,
  `id_room` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci COMMENT='comments';

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `content`, `id_user`, `id_room`, `created_at`, `updated_at`) VALUES
(3, 'dep qua', 1, 1, '2019-08-10 10:31:24', '2019-08-10 10:31:24'),
(5, 'dwdwdwd', 1, 1, '2019-08-10 20:48:31', '2019-08-10 20:48:31');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_10_012901_create_admins_table', 1),
(4, '2019_08_10_013038_create_rooms_table', 2),
(5, '2019_08_10_013216_create_book_rooms_table', 3),
(6, '2019_08_10_013322_create_comment_table', 4),
(7, '2019_08_10_013436_create_posts_table', 5),
(8, '2019_08_16_101154_create_slides_table', 6);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('truongvietbg@gmail.com', '$2y$10$OYLWx5FzKYCfPFacEA29GeIa0aoR1aglED9Lde0qqTmVSMK4OGVaW', '2019-08-10 11:51:32');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `content`, `image`, `created_at`, `updated_at`) VALUES
(1, 'CHƯƠNG TRÌNH “DISC THẤU HIỂU VÀ LÃNH ĐẠO ĐỘI NHÓM”', '<p>Đ&acirc;y l&agrave; kh&oacute;a học cơ bản Huấn luyện về ứng dụng đọc vị phong c&aacute;ch h&agrave;nh vi DISC của ch&iacute;nh bản th&acirc;n v&agrave; mọi người xung quanh, tham gia kh&oacute;a học bạn sẽ c&oacute; được ngay những b&iacute; quyết sau đ&acirc;y: Thấu hiểu bản th&acirc;n v&agrave; những người xung quanh. Thừa nhận v&agrave; tạo điều kiện ph&aacute;t huy điểm mạnh từng c&aacute; nh&acirc;n trong đội nh&oacute;m, x&acirc;y dựng đội nh&oacute;m th&agrave;nh c&ocirc;ng, l&agrave;m việc hiệu quả. Ph&aacute;t triển kỹ năng l&atilde;nh đạo ở tất cả c&aacute;c cấp độ trong tổ chức. Hiểu r&otilde; h&agrave;nh vi, giao tiếp hiệu quả v&agrave; giao việc ph&ugrave; hợp với khả năng của c&aacute;c th&agrave;nh vi&ecirc;n trong đội.</p>\r\n\r\n<p><strong>Thời gian v&agrave; địa điểm:&nbsp;</strong></p>\r\n\r\n<ul>\r\n	<li><strong>Ng&agrave;y 22/03/2019:</strong></li>\r\n</ul>\r\n\r\n<p>&ndash; Thời gian: 17h30 - 18h30.</p>\r\n\r\n<p>&ndash; Địa điểm: CoGo TNR Tower - Tầng 16, 54A Nguyễn Ch&iacute; Thanh, Đống Đa, H&agrave; Nội</p>\r\n\r\n<ul>\r\n	<li><strong>Ng&agrave;y 19/04/2019:</strong></li>\r\n</ul>\r\n\r\n<p>&ndash; Thời gian: 17h30 - 18h30.</p>\r\n\r\n<p>&ndash; Địa điểm: CoGo Viet Tower - Tầng 4, Số 01 Th&aacute;i H&agrave;, Đống Đa, H&agrave; Nội.</p>\r\n\r\n<ul>\r\n	<li><strong>Ng&agrave;y 24/05/2019:</strong></li>\r\n</ul>\r\n\r\n<p>&ndash; Thời gian: 17h30 - 18h30.</p>\r\n\r\n<p>&ndash; Địa điểm: CoGo Hồ Gươm Plaza&nbsp;- Tầng 12, Số 102 Trần Ph&uacute;, H&agrave; Đ&ocirc;ng, H&agrave; Nội</p>\r\n\r\n<ul>\r\n	<li><strong>Ng&agrave;y 21/06/2019:</strong></li>\r\n</ul>\r\n\r\n<p>&ndash; Thời gian: 17h30 - 18h30.</p>\r\n\r\n<p>&ndash; Địa điểm: CoGo Sun Ancora&nbsp;- Tầng 04, Số 03 Lương Y&ecirc;n, Hai B&agrave; Trưng, H&agrave; Nội</p>\r\n\r\n<p><strong>Sở hữu những b&iacute; quyết ngay tại buổi học</strong></p>\r\n\r\n<p>Đ&acirc;y l&agrave; kh&oacute;a học cơ bản Huấn luyện về ứng dụng đọc vị phong c&aacute;ch h&agrave;nh vi DISC của ch&iacute;nh bản th&acirc;n v&agrave; mọi người xung quanh, tham gia kh&oacute;a học bạn sẽ c&oacute; được ngay những b&iacute; quyết sau đ&acirc;y:</p>\r\n\r\n<p>&ndash; Thấu hiểu bản th&acirc;n v&agrave; những người xung quanh;</p>\r\n\r\n<p>&ndash; Nhận diện người kh&aacute;c trong chưa đầy 30s, tiếp cận theo đ&uacute;ng phong c&aacute;ch m&agrave; họ thấy thoải m&aacute;i nhất để chia sẻ;</p>\r\n\r\n<p>&ndash; Thừa nhận v&agrave; tạo điều kiện ph&aacute;t huy điểm mạnh từng c&aacute; nh&acirc;n trong đội nh&oacute;m, x&acirc;y dựng đội nh&oacute;m th&agrave;nh c&ocirc;ng, l&agrave;m việc hiệu quả;</p>\r\n\r\n<p>&ndash; Ph&aacute;t triển kỹ năng l&atilde;nh đạo ở tất cả c&aacute;c cấp độ trong tổ chức. Hiểu r&otilde; h&agrave;nh vi, giao tiếp hiệu quả v&agrave; giao việc ph&ugrave; hợp với khả năng của c&aacute;c th&agrave;nh vi&ecirc;n trong đội.</p>\r\n\r\n<p><strong>Chương tr&igrave;nh n&agrave;y c&oacute; gi&aacute; trị nhất cho những ai?</strong></p>\r\n\r\n<p>Ch&uacute;ng t&ocirc;i chắc chắn bạn sẽ kh&ocirc;ng muốn bỏ lỡ chương tr&igrave;nh n&agrave;y, nếu bạn l&agrave;&hellip;</p>\r\n\r\n<p>&ndash; Chủ doanh nghiệp,</p>\r\n\r\n<p>&ndash; Gi&aacute;m đốc nh&acirc;n sự, L&atilde;nh đạo đội nh&oacute;m,</p>\r\n\r\n<p>&ndash; Người l&agrave;m Kinh doanh, Marketing, B&aacute;n h&agrave;ng, Phục vụ kh&aacute;ch h&agrave;ng</p>\r\n\r\n<p>&ndash; Những ai mong muốn nhận diện kh&aacute;ch h&agrave;ng, gia tăng tỷ lệ th&agrave;nh c&ocirc;ng chốt kh&aacute;ch h&agrave;ng v&agrave; quản l&yacute; nh&acirc;n sự, x&acirc;y dựng đội nh&oacute;m của m&igrave;nh vững mạnh;</p>\r\n\r\n<p>&ndash; Những ai muốn ph&aacute;t triển bản th&acirc;n, x&acirc;y dựng phong c&aacute;ch c&aacute; nh&acirc;n v&agrave; điều tiết được c&aacute;c mối quan hệ trong cuộc sống v&agrave; c&ocirc;ng việc tốt hơn.</p>\r\n\r\n<p><strong>Giới thiệu về DISC</strong></p>\r\n\r\n<p>&ndash; Bạn thấy m&igrave;nh kh&ocirc;ng hiểu mọi người v&agrave; kh&ocirc;ng được thấu hiểu dẫn đến những m&acirc;u thuẫn, xung đột trong cuộc sống v&agrave; trong c&ocirc;ng việc.</p>\r\n\r\n<p>&ndash; Bạn muốn hiểu r&otilde; bản th&acirc;n v&agrave; x&acirc;y dựng phong c&aacute;ch cho m&igrave;nh?</p>\r\n\r\n<p>&ndash; Bạn đang gặp vấn đề về nh&acirc;n sự, đội nh&oacute;m, hợp t&aacute;c trong c&ocirc;ng việc?</p>\r\n\r\n<p>&ndash; Bạn muốn hướng dẫn v&agrave; c&ugrave;ng đội nh&oacute;m ph&aacute;t triển v&agrave; b&ugrave;ng nổ biệu suất c&ocirc;ng việc.</p>\r\n\r\n<p>&ndash; Bạn đ&atilde; bao giờ mất đi kh&aacute;ch h&agrave;ng chỉ v&igrave; bạn kh&ocirc;ng giao tiếp được với họ?</p>\r\n\r\n<p>&ndash; Bạn kh&ocirc;ng biết phải giao tiếp, ứng xử với từng kh&aacute;ch h&agrave;ng trong những trường hợp kh&aacute;c nhau như thế n&agrave;o?</p>\r\n\r\n<p>=&gt; DISC ch&iacute;nh l&agrave; c&ocirc;ng cụ sẽ gi&uacute;p bạn cải thiện v&agrave; giải quyết những vấn đề tr&ecirc;n.</p>\r\n\r\n<p>=&gt; DISC l&agrave; c&ocirc;ng cụ gi&uacute;p bạn nhận diện được người kh&aacute;c th&ocirc;ng qua c&aacute;c nh&oacute;m h&agrave;nh vi, t&iacute;nh c&aacute;ch của họ. Bởi v&igrave; mỗi con người ch&uacute;ng ta sẽ c&oacute; một khu&ocirc;n mẫu h&agrave;nh vi kh&aacute;c nhau v&agrave; th&ocirc;ng thường được quy v&agrave;o trong 4 nh&oacute;m D, I, S, C.</p>\r\n\r\n<p><strong>Khoản đầu tư chương tr&igrave;nh</strong></p>\r\n\r\n<p>&ndash; Chi ph&iacute; ƯU Đ&Atilde;I:<strong>&nbsp;0 VNĐ</strong>/1 v&eacute;/1 học vi&ecirc;n. QU&Agrave; TẶNG: Chỉ &aacute;p dụng cho th&agrave;nh vi&ecirc;n cộng đồng COGO - C&aacute;c c&ocirc;ng ty v&agrave; c&aacute; nh&acirc;n thu&ecirc; văn ph&ograve;ng của COGO.</p>\r\n\r\n<p>&ndash; Chi ph&iacute; kh&aacute;ch&nbsp;th&ocirc;ng thường:<strong>&nbsp;4.868.000 VNĐ</strong></p>\r\n\r\n<p><strong>Li&ecirc;n hệ</strong></p>\r\n\r\n<p>C&aacute;c Anh/Chị đăng k&yacute; tham dự chương tr&igrave;nh vui l&ograve;ng điền th&ocirc;ng tin đầy đủ v&agrave;o mẫu đ&iacute;nh k&egrave;m (trang tiếp theo), hoặc li&ecirc;n hệ để được hỗ trợ:</p>\r\n\r\n<p>- Hotline: 096.646.1956 (Ms Nh&agrave;n)</p>\r\n\r\n<p>- Mail:&nbsp;<a href=\"mailto:hanoisouth@actioncoach.vn\">hanoisouth@actioncoach.vn</a></p>\r\n\r\n<p>- Địa chỉ: C&Ocirc;NG TY TNHH HUẤN LUYỆN DOANH CHỦ, P. H04, Tầng 16, T&ograve;a nh&agrave; TNR, 54A Nguyễn Ch&iacute; Thanh, H&agrave; Nội.</p>', '1565496551.png', '2019-08-10 19:20:53', '2019-08-10 21:09:11');

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

CREATE TABLE `rooms` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `acreage` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `details` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` float NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`id`, `name`, `location`, `acreage`, `details`, `image`, `price`, `created_at`, `updated_at`) VALUES
(1, 'PHÒNG HỌP M12', 'BisHub Xã Đàn', '20m2', '<p style=\"text-align:justify\"><span style=\"font-size:17px\"><span style=\"color:#666666\"><span style=\"font-family:Roboto,Arial,Helvetica,Tahoma,sans-serif\"><span style=\"background-color:#ffffff\"><span style=\"font-size:14px\">Nằm trọn&nbsp;trong khu vực trung t&acirc;m cửa ng&otilde; h&agrave;nh ch&iacute;nh ph&iacute;a T&acirc;y Thủ đ&ocirc;, tại vị tr&iacute; số 54A đường Nguyễn Ch&iacute; Thanh &ndash; quận Đống Đa - TP. H&agrave; Nội, TNR Tower mang đến cho kh&aacute;ch h&agrave;ng một kh&ocirc;ng gian l&agrave;m việc chung ti&ecirc;u chuẩn quốc tế trong t&ograve;a nh&agrave; văn ph&ograve;ng hạng A , với c&aacute;c trang thiết bị đầy đủ tiện nghi phục vụ cho c&ocirc;ng việc của bạn . Từ đ&acirc;y bạn cũng c&oacute; thể tiếp cận nhanh ch&oacute;ng tới cơ quan h&agrave;nh ch&iacute;nh Ủy ban li&ecirc;n minh Ch&acirc;u &Acirc;u, Đại sứ qu&aacute;n Mỹ, Đại sứ qu&aacute;n Nhật bản, khu Đo&agrave;n ngoại giao Vạn Ph&uacute;c, Đ&agrave;i truyền h&igrave;nh Việt Nam v&agrave; c&aacute;c trường Đại học uy t&iacute;n.Cũng như chỉ mất 10 ph&uacute;t l&agrave; bạn c&oacute; thể tiếp cận được đường cao tốc Thăng Long - Nội B&agrave;i v&agrave; dễ d&agrave;ng ra s&acirc;n bay chỉ trong v&ograve;ng 45 ph&uacute;t. Đồng thời, chỉ trong v&ograve;ng b&aacute;n k&iacute;nh 5km, dễ d&agrave;ng li&ecirc;n kết với c&aacute;c doanh nghiệp, tập đo&agrave;n, cơ quan v&agrave; c&aacute;c&nbsp;tiện &iacute;ch kh&aacute;c, đặc biệt l&agrave; c&aacute;c ng&acirc;n h&agrave;ng, kh&aacute;ch sạn 5 sao v&agrave; c&aacute;c tổ hợp trung t&acirc;m thương mại.</span></span></span></span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:17px\"><span style=\"color:#666666\"><span style=\"font-family:Roboto,Arial,Helvetica,Tahoma,sans-serif\"><span style=\"background-color:#ffffff\"><span style=\"font-size:18px\"><span style=\"color:#0033ff\"><strong>C&aacute;c tiện &iacute;ch:</strong></span></span></span></span></span></span></p>\r\n\r\n<ul>\r\n	<li style=\"text-align:justify\"><span style=\"color:#3300cc\"><strong>Kh&ocirc;ng gian chung:</strong></span>&nbsp;Với đồ nội thất độc đ&aacute;o v&agrave; thiết kế nghệ thuật, kh&ocirc;ng gian thư gi&atilde;n của ch&uacute;ng t&ocirc;i l&agrave; tr&aacute;i tim v&agrave; linh hồn của văn ph&ograve;ng của ch&uacute;ng t&ocirc;i: ch&uacute;ng được thiết kế để khuyến kh&iacute;ch sự s&aacute;ng tạo v&agrave; năng suất.</li>\r\n	<li><span style=\"color:#3300cc\"><strong>Quản l&yacute; cộng đồng:</strong></span>&nbsp;Đội ngũ của ch&uacute;ng t&ocirc;i sẵn s&agrave;ng hỗ trợ Bạn.</li>\r\n	<li><span style=\"color:#3300cc\"><strong>Lễ t&acirc;n:</strong></span>&nbsp;Trong giờ l&agrave;m việc, nh&oacute;m của ch&uacute;ng t&ocirc;i sẵn s&agrave;ng ch&agrave;o đ&oacute;n bạn, cung cấp trợ gi&uacute;p được c&aacute; nh&acirc;n h&oacute;a v&agrave; quản l&yacute; thư của bạn.</li>\r\n	<li><span style=\"color:#3300cc\"><strong>Thời gian l&agrave;m việc:</strong></span>Bạn c&oacute; quyền truy cập t&ograve;a nh&agrave; 24h một ng&agrave;y v&agrave; 07 ng&agrave;y một tuần.</li>\r\n	<li><span style=\"color:#3300cc\"><strong>An ninh:</strong></span>&nbsp;24/7</li>\r\n	<li><span style=\"color:#3300cc\"><strong><strong><span style=\"color:#3300cc\">Dịch vụ vệ sinh:</span></strong></strong></span>Đội ngũ l&agrave;m sạch của ch&uacute;ng t&ocirc;i đảm bảo rằng kh&ocirc;ng gian c&ocirc;ng cộng, ph&ograve;ng họp v&agrave; văn ph&ograve;ng ri&ecirc;ng đều sạch sẽ v&agrave; sạch sẽ 24 giờ một ng&agrave;y..</li>\r\n	<li><span style=\"color:#3300cc\"><strong>Buồng điện thoại:</strong></span>Buồng c&aacute;ch &acirc;m&nbsp;cho ph&eacute;p bạn thực hiện cuộc điện thoại ri&ecirc;ng tư v&agrave; c&aacute;c cuộc phỏng vấn video trong y&ecirc;n b&igrave;nh.</li>\r\n	<li><span style=\"color:#3300cc\"><strong>Đồ uống miễn ph&iacute;:</strong></span>Thưởng thức cafe rang, tr&agrave;, nước detox, nước m&aacute;t v&agrave; sử dụng l&ograve; vi s&oacute;ng một c&aacute;ch thuận tiện.</li>\r\n	<li><span style=\"color:#3300cc\"><strong>Ph&ograve;ng họp:</strong></span>Kh&ocirc;ng gian ph&ograve;ng họp sang trọng với đấy đủ trang thiết bị.</li>\r\n	<li><span style=\"color:#3300cc\"><strong>Khu vực in ấn:</strong></span>M&aacute;y in đen trắng, in m&agrave;u cao cấp, m&aacute;y hủy t&agrave;i liệu v&agrave; c&aacute;c đồ d&ugrave;ng văn ph&ograve;ng kh&aacute;c.</li>\r\n	<li><span style=\"color:#3300cc\"><strong>Internet:</strong></span>Wifi v&agrave; ethernet tốc độ cao.</li>\r\n	<li><span style=\"color:#3300cc\"><strong>Hội thảo:</strong></span>C&aacute;c buổi hội thảo mang lại cho bạn những kiến thức v&agrave; trải nghiệm mới lạ.</li>\r\n	<li><span style=\"color:#3300cc\"><strong>Tiện &iacute;ch tại c&aacute;c trung t&acirc;m kh&aacute;c:</strong></span>Sử dụng miễn ph&iacute; tiện &iacute;ch c&aacute;c trung t&acirc;m trong to&agrave;n hệ thống CoGo</li>\r\n</ul>', '1565455967.jpg', 350000, '2019-08-09 18:47:02', '2019-08-10 09:52:47'),
(2, 'PHÒNG HỌP M13', 'BisHub Xã Đàn', '20m2', '<p>cece</p>', '1565456017.jpg', 350000, '2019-08-10 09:51:14', '2019-08-10 09:53:37');

-- --------------------------------------------------------

--
-- Table structure for table `slides`
--

CREATE TABLE `slides` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `links` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `slides`
--

INSERT INTO `slides` (`id`, `title`, `links`, `created_at`, `updated_at`) VALUES
(2, 'slide2', '1565971319.jpg', '2019-08-16 09:01:59', '2019-08-16 09:01:59'),
(3, 'slide1', '1566012851.jpg', '2019-08-16 20:34:11', '2019-08-16 20:34:11');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'truong quang viet', 'truongvietbg@gmail.com', NULL, '$2y$10$DmbvQBzcWtq0MBErmKQ3C.DqlvsFEjWgZTjPFNtBn1YKdyT.VMiIy', 'T1OmJobY6tBZTqJBaRp95c7Z2SyqEuUVYYvyP9QepWWvBnBtzVrGe305WSiO', '2019-08-09 19:01:11', '2019-08-13 10:15:27');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `book_rooms`
--
ALTER TABLE `book_rooms`
  ADD PRIMARY KEY (`id`),
  ADD KEY `book_rooms_id_user_foreign` (`id_user`),
  ADD KEY `book_rooms_id_room_foreign` (`id_room`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `comment_id_user_foreign` (`id_user`),
  ADD KEY `comment_id_room_foreign` (`id_room`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rooms`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slides`
--
ALTER TABLE `slides`
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
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `book_rooms`
--
ALTER TABLE `book_rooms`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `rooms`
--
ALTER TABLE `rooms`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `slides`
--
ALTER TABLE `slides`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `book_rooms`
--
ALTER TABLE `book_rooms`
  ADD CONSTRAINT `book_rooms_id_room_foreign` FOREIGN KEY (`id_room`) REFERENCES `rooms` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `book_rooms_id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comment_id_room_foreign` FOREIGN KEY (`id_room`) REFERENCES `rooms` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `comment_id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
