-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th5 21, 2017 lúc 04:31 PM
-- Phiên bản máy phục vụ: 10.1.22-MariaDB
-- Phiên bản PHP: 7.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `youtuvn`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `pid` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alias` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keyword` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(4) DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `categories`
--

INSERT INTO `categories` (`id`, `pid`, `title`, `alias`, `keyword`, `status`, `created_at`, `updated_at`) VALUES
(4, 0, 'Video hài', 'video-hai', 'hài', 1, '2017-05-21 08:51:36', '2017-05-21 11:21:23'),
(5, 4, 'Danh hài', 'danh-hai', 'danh hai', 1, '2017-05-21 08:52:02', '2017-05-21 08:52:02'),
(6, 5, 'Trường Giang', 'truong-giang', 'truong giang', 1, '2017-05-21 08:52:18', '2017-05-21 08:52:18'),
(7, 5, 'Trấn Thành', 'tran-thanh', 'tran thanh', 1, '2017-05-21 08:52:37', '2017-05-21 08:52:37'),
(8, 4, 'Tổng hợp', 'tong-hop', 'tong hop', 1, '2017-05-21 09:23:40', '2017-05-21 09:23:40'),
(9, 8, 'Những thèn nguy hiểm nhất hình tinh', 'nhung-then-nguy-hiem-nhat-hinh-tinh', 'Những thèn nguy hiểm nhất hình tinh', 1, '2017-05-21 11:23:30', '2017-05-21 11:23:30'),
(14, 0, 'Âm nhạc', 'am-nhac', 'am nhac', 1, '2017-05-21 11:35:21', '2017-05-21 11:35:21'),
(15, 14, 'Bảng xếp hạng', 'bang-xep-hang', 'bang xep hang am nhac', 1, '2017-05-21 11:36:13', '2017-05-21 11:36:13'),
(16, 14, 'MV ca nhạc', 'mv-ca-nhac', 'mv ca nhac', 1, '2017-05-21 11:36:37', '2017-05-21 11:36:37'),
(17, 0, 'Phim truyện', 'phim-truyen', 'phim truyen', 1, '2017-05-21 11:39:18', '2017-05-21 11:39:18'),
(18, 17, 'Phim truyền hình', 'phim-truyen-hinh', 'phim truyen hinh', 1, '2017-05-21 11:39:57', '2017-05-21 11:39:57'),
(19, 17, 'Phim Hồng Kông', 'phim-hong-kong', 'phim hong kong', 1, '2017-05-21 11:42:38', '2017-05-21 11:42:38'),
(20, 19, 'Châu Tinh Trì', 'chau-tinh-tri', 'chau tinh tri', 1, '2017-05-21 11:43:29', '2017-05-21 11:43:29'),
(21, 19, 'Chân Tử Đan', 'chan-tu-dan', 'Chân Tử Đan', 1, '2017-05-21 11:45:20', '2017-05-21 11:45:20');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2017_05_19_114000_create_table_categories', 1),
(2, '2017_05_20_204127_create_roles_table', 1),
(3, '2014_10_12_000000_create_users_table', 2),
(4, '2014_10_12_100000_create_password_resets_table', 2),
(5, '2017_05_20_121745_create_youtubes_table', 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `roles`
--

INSERT INTO `roles` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Administrator', '2017-05-20 14:14:40', '2017-05-20 14:14:40');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `rid` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `rid`, `name`, `email`, `password`, `avatar`, `phone`, `address`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 1, 'Le Duc Trung', 'lductrung113@gmail.com', '$2y$10$1FNXvDnW5dmQhXtlZMi1HueJ.VIsZDMYueaU1Rh2VyKYHPb/6DbFu', NULL, NULL, NULL, 'VDtR7NQERKJsYlP0z4qvR18eoQSLPRwDufqLiaCF64Mv4DwrgXi7n1hHeOVI', '2017-05-20 14:46:39', '2017-05-20 14:46:39');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `youtubes`
--

CREATE TABLE `youtubes` (
  `id` int(10) UNSIGNED NOT NULL,
  `cid` int(10) UNSIGNED NOT NULL,
  `pid` int(10) UNSIGNED NOT NULL,
  `uid` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alias` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `viewCount` int(11) DEFAULT '0',
  `likeCount` int(11) DEFAULT '0',
  `dislikeCount` int(11) DEFAULT '0',
  `author` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '',
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `keyword` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `youtubes`
--

INSERT INTO `youtubes` (`id`, `cid`, `pid`, `uid`, `title`, `alias`, `viewCount`, `likeCount`, `dislikeCount`, `author`, `image`, `description`, `keyword`, `status`, `created_at`, `updated_at`) VALUES
(3, 6, 5, 1, 'Hài Trường Giang - Nuôi Vợ Đẻ - Cười Bể Bụng', 'hai-truong-giang-nuoi-vo-de-cuoi-be-bung', 3196534, 2747, 980, 'Khoảnh Khắc Hài', 'https://i.ytimg.com/vi/av0bnAqfejg/hqdefault.jpg', 'Nguồn :\r\n►Đăng ký-Đông Tây Promotion Officia : http://goo.gl/8fv8bM\r\n►Đăng ký-Ơn Giời Cậu Đây Rồi : http://goo.gl/VOtyXS\r\n================\r\nHài Mới Trường Giang - Trấn Thành.\r\n================\r\n😜 Kênh tổng hợp Những Khoảnh Khắc Vui Nhộn, Câu Nói, Trích Đoạn Gây Cười Của Các Nghệ Sĩ Hài.\r\n😜 Đăng ký kênh để xem video mới nhất: https://goo.gl/v6bnkn\r\n😜 Fanpage : facebook.com/KhoanhKhacHai\r\n😜 Mọi Vấn Đề Xin Liên Hệ : TuanVuComedy@gmail.com hoặc facebook.com/KhoanhKhacHai\r\n😜 Xin Cảm Ơn, Chúc Một Ngày Tốt Lành !', 'hai moi truong giang,giong ai giong ai,tran thanh,biet tai ti hon,cuoi xuyen viet,hoai linh,mat na ngoi sao,thach thuc danh hai,', 1, '2017-03-04 10:32:51', '2017-03-04 10:32:51'),
(4, 6, 5, 1, 'Hài 2017 Chí Tài, Hoài Linh, Trường Giang, Trấn Thành - Hài Chí Tài Những Chuyện Tình Nghiệt Ngã P2', 'hai-2017-chi-tai-hoai-linh-truong-giang-tran-thanh-hai-chi-tai-nhung-chuyen-tinh-nghiet-nga-p2', 6975529, 14422, 2976, 'Nam Việt Comedy', 'https://i.ytimg.com/vi/YFrzqhzG_Qc/hqdefault.jpg', '✔ Hài 2017 Chí Tài, Hoài Linh, Trường Giang, Trấn Thành - Hài Chí Tài Những Chuyện Tình Nghiệt Ngã P2\r\n\r\nTiểu phẩm hài: Chuyện Tình 2\r\nNghệ sỹ: Chí Tài, Trấn Thành, Tiến Luật, Thu Trang, Quách Ngọc Tuyên, Hoài Lâm\r\nTác giả: Trường Giang\r\n \r\nCuộc đời của chàng nhạc sĩ là cả một cuốn tiểu thuyết không có hồi kết, khi vì cuộc sống mưu sinh mà có những thay đổi thăng trầm mà người nghệ sĩ đôi lúc không mong muốn, nhưng rồi bản thân anh cũng tìm được một nửa của cuôc đời mình, để rồi chính nhờ cái gọi là tình yêu đó mà vươn lên trong cuộc sống và thành công trong hiện tại với cái tên gọi Chí Tài. Việc mọi người hay nói chàng nghệ sĩ đa tài, nhưng bên cạnh đó, việc đa tình là điều khó tránh khỏi trước khi có một mối tình đời hạnh phúc, những mối tình nghiệt ngã với những cô nàng có những trái tim lỗi nhịp với chàng nghệ sĩ đa tài Chí Tài\r\n\r\nVới thông điệp “Tình yêu chỉ dành cho ai biết tìm kiếm và nắm giữ nó, và không đơn giản nếu như không có sự đồng điệu từ hai phía”, chắc chắn sẽ mang đến nhiều cảm xúc và dư vị trong lòng khán giả.\r\n\r\n☛ Click Subscribe đăng kí kênh để xem ngay những Tiểu Phẩm Hài Mới của Hoài Linh, Chí Tài, Trường Giang, Long Đẹp Trai. Những Tiểu Phẩm Hài Hay được cập nhật liên tục.', 'Chí Tài,Hoài Linh,Trường Giang,Trấn Thành,Những Chuyện Tình Nghiệt Ngã,Hài 2017,chi tai,hoai linh,truong giang,tran thanh,nhung chuyen tinh nghiet nga,hai 2017,hài,hai,hai chi tai,hai hoai linh,hai truong giang,hai tran thanh,', 1, '2017-03-29 03:32:35', '2017-03-29 03:32:35'),
(5, 7, 5, 1, 'Hài Trấn Thành 2017 mới nhất ft Anh Đức trong Liveshow Đàm Vĩnh Hưng cực hay', 'hai-tran-thanh-2017-moi-nhat-ft-anh-duc-trong-liveshow-dam-vinh-hung-cuc-hay', 500535, 1076, 168, 'Comedy Asia Channel', 'https://i.ytimg.com/vi/aQiZOVqw_mg/hqdefault.jpg', 'Xuất hiện trong liveshow Đàm Vĩnh Hưng ông hoàng nhạc việt danh hài Trấn Thành 2017 cùng Anh Đức đã mang đến cho khán giả tham gia liveshow những màn cười thỏa chí. Xin mời các bạn cùng đón xem và ủng hộ video này nhé!\r\n-------------------------------------------------------------------------------------\r\n© Các vấn đề bản quyền nội dung vui lòng liên hệ với chúng tôi, BQT channel sẵn sàng hợp tác và gỡ xuống các video vi phạm và đưa ra hướng giải quyết thích hợp nhất cho bên sở hữu.\r\nHãy liên hệ với chúng tôi theo Contact sau:\r\n➤ Email: Comedyasiachannel@gmail.com\r\n➤ Skype: it_ngoctung\r\n-------------------------------------------------------------------------------------\r\n★★ Hãy ủng hộ chúng tôi bằng cách nhấn vào các Link bên dưới!\r\n● Subscribe Kênh Youtube : https://goo.gl/jyHmWf\r\n● Kênh Youtube: https://goo.gl/89CrLK\r\n● Theo dõi G + : https://goo.gl/BqbcJQ\r\n● Twitter: https://goo.gl/KMDV5d\r\n● Facebook: https://goo.gl/fBWKno\r\n★★★Chúc các bạn có được những giây phút thư giản trên kênh Comedy Asia Channel.', 'hai,hai 2017,hai moi nhat,hai kich,phim hai 2017,liveshow hai,liveshow tran thanh,hai tran thanh,hai truong giang,hai hoai linh,tran thanh moi nhat,tran thanh anh duc,truong giang tran thanh,tran thanh hari won,phim hai tran thanh,truong giang,hoai linh,', 1, '2017-04-08 12:02:31', '2017-04-08 12:02:31'),
(6, 20, 19, 1, 'Phim hài Châu Tinh Trì Quyết Chiến Giang Hồ Bản đẹp Thuyết minh - Phim Hành Động Võ Thuật Hài', 'phim-hai-chau-tinh-tri-quyet-chien-giang-ho-ban-dep-thuyet-minh-phim-hanh-dong-vo-thuat-hai', 913348, 2061, 396, 'Coffee Giải Trí', 'https://i.ytimg.com/vi/xjALxlyAmsI/hqdefault.jpg', 'Tây du ký mối tình ngoại truyện 2 mới ra mắt tết 2017 ►https://goo.gl/DRJQjn\r\nChúc các bạn xem phim vui vẻ ♥\r\n♪ Mình mới làm kênh nhạc, mọi người ủng hộ nha ♥\r\nNhạc Trữ Tình Quê Hương Gây Nghiện 2017►https://goo.gl/MtqjkC', 'phim,moi,hay,hai,huoc,nhat,thuyet,minh,chau,tinh,tri,2016,2017,phim hai hay,phim vo thuat hai trung quoc,phim hai co trang trung quoc,phim co trang hai huoc,chau tinh tri,chau tinh tri 2017,phim châu tinh trì hay nhất 2017,', 1, '2017-05-10 10:40:14', '2017-05-10 10:40:14'),
(7, 9, 8, 1, 'Tin Việt Tv Mùa 2017 (P1) | Những Thằng Nguy Hiểm Nhất Hành Tinh Mùa 2017 (P1)', 'tin-viet-tv-mua-2017-p1-nhung-thang-nguy-hiem-nhat-hanh-tinh-mua-2017-p1', 1434920, 12638, 553, 'TIN VIỆT', 'https://i.ytimg.com/vi/jclvpOcG9vk/hqdefault.jpg', 'TIN VIỆT TV MÙA 2017 P1, TIN VIỆT 2017 P1\r\nNHỮNG THẰNG NGUY HIỂM NHẤT HÀNH TINH MÙA 2017 (P1)\r\nNHỮNG THẰNG NGU NHẤT THẾ GIỚI ( P1 )\r\nĐỪNG QUÊN LIKE SHARE VÀ SUBSCRIBE ĐỂ ỦNG HỘ TẠI ĐÂY !\r\nLINK : https://goo.gl/DatuDs\r\nCOMMENT ĐÓNG GÓP Ý KIẾN BÊN DƯỚI VIDEO, XIN CẢM ƠN !', 'TIN VIET TV,TIN VIỆT TV,TIN VIET 2017,TIN VIỆT 2017,NHUNG THANG NGUY HIEM NHAT HANH TINH,NHỮNG THẰNG NGUY HIỂM NHẤT HÀNH TINH,NHUNG THANG NGU NHAT THE GIOI,NHỮNG THẰNG NGU NHẤT THẾ GIỚI,tin viet mua 2017 p1,tin việt mùa 2017 p1,tin viet moi nhat,tin việt mới nhất,choi ngu,chơi ngu,video hot nhat,video hót nhất,', 1, '2017-01-05 12:00:30', '2017-01-05 12:00:30'),
(8, 18, 17, 1, 'Thề Không Gục Ngã - Tập 01 | Phim Tình Cảm Tâm Lý Việt Nam Đặc Sắc Mới Nhất 2017', 'the-khong-guc-nga-tap-01-phim-tinh-cam-tam-ly-viet-nam-dac-sac-moi-nhat-2017', 169902, 155, 40, 'HPLUS MEDIA', 'https://i.ytimg.com/vi/ZxPyqG_qFU8/hqdefault.jpg', 'Thề Không Gục Ngã - Tập 01 | Phim Tình Cảm Tâm Lý Việt Nam Đặc Sắc Mới Nhất 2017\r\n\r\n► Đăng Ký HPLUS Để Xem Thêm Các Phim Hay Nhất: http://yeah1.net/hplus\r\n► Phim Tình Cảm Việt Nam Hay &amp; Cảm Động: https://goo.gl/NX456M', 'thề không gục ngã,phim việt nam 2017,xem phim thề không gục ngã,phim tình cảm tâm lý,phim tình cảm,phim tâm lý xã hội,phim đặc sắc việt nam,phim việt nam,phim truyền hình việt nam,phim việt nam đặc sắc,phim hình sự việt nam,phim thề không gục ngã,phim tình cảm việt nam,tình cảm việt nam đặc sắc,phim tình cảm mới nhất,phim việt nam đặc sắc 2017,phim tâm lý đặc sắc 2017,phim việt 2017,phim việt nam mới 2017,phim truyền hình 2017,Thề Không Gục Ngã - Tập 01,', 1, '2016-11-12 04:00:00', '2016-11-12 04:00:00');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_title_unique` (`title`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Chỉ mục cho bảng `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_unique` (`name`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_rid_foreign` (`rid`);

--
-- Chỉ mục cho bảng `youtubes`
--
ALTER TABLE `youtubes`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `youtubes_title_unique` (`title`),
  ADD KEY `youtubes_cid_foreign` (`cid`),
  ADD KEY `youtubes_uid_foreign` (`uid`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT cho bảng `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT cho bảng `youtubes`
--
ALTER TABLE `youtubes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_rid_foreign` FOREIGN KEY (`rid`) REFERENCES `roles` (`id`);

--
-- Các ràng buộc cho bảng `youtubes`
--
ALTER TABLE `youtubes`
  ADD CONSTRAINT `youtubes_cid_foreign` FOREIGN KEY (`cid`) REFERENCES `categories` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `youtubes_uid_foreign` FOREIGN KEY (`uid`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
