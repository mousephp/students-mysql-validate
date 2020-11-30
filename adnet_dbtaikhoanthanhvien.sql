-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1:3306
-- Thời gian đã tạo: Th9 01, 2020 lúc 06:11 AM
-- Phiên bản máy phục vụ: 5.7.31
-- Phiên bản PHP: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `adnet_dbtaikhoanthanhvien`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `taikhoanthanhvien`
--

DROP TABLE IF EXISTS `taikhoanthanhvien`;
CREATE TABLE IF NOT EXISTS `taikhoanthanhvien` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tendangnhap` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `hoten` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `sdt` text COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `diachi` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=38 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `taikhoanthanhvien`
--

INSERT INTO `taikhoanthanhvien` (`id`, `tendangnhap`, `password`, `hoten`, `sdt`, `email`, `diachi`) VALUES
(2, 'lubox', '5506b6b1de8c26ef3ee421e495f0e266', 'lữ bố', '1234567890', 'lubo@gmail.com', 'Hàn lữ bố'),
(3, 'dieuthuyen', '5506b6b1de8c26ef3ee421e495f0e266', 'Nguyễn điêu thuyền', '1234567890', 'vietpro@gmail.com', 'sài gòn'),
(5, 'votung', '7363a0d0604902af7b70b271a0b96480', 'Võ tòng', '1234567890', 'admin@gmail.com', 'Võ tòng'),
(11, 'hungnguyen123', '550e1bafe077ff0b0b67f4e32f29d751', 'hung nguyen123', '1234567', 'admin@gmail.com', 'hung'),
(6, 'taythi', '70873e8580c9900986939611618d7b1e', 'người đẹp Tây thi', '1234567890', 'taythi@gmail.com', 'Tây thi'),
(7, 'truongphi', 'a970a7e3b359f88a4732b56050822888', 'Trương Phi', '12345678', 'truongphi@gmail.com', 'Vũng tàu'),
(8, 'masieu', '70873e8580c9900986939611618d7b1e', 'Mã Siêu', '123456789', 'nguyenvanhungcd0007@gmail.com', 'Mã Siêu'),
(9, 'votong', 'e6e537d46540581aafa8d505896dee78', 'Võ tòng', '1234567', 'votong@gmail.com', 'Võ tòng'),
(10, 'dienvi', '550e1bafe077ff0b0b67f4e32f29d751', 'Điển Vi', '1234567890', 'dienvi@gmail.com', 'Điển Vi'),
(12, 'dotung123', '2a810c88e3cb947e85bbab2728102f0d', 'Nguyễn đỗ tùng', '123456', 'nguyenvanhungcd0007@gmail.com', 'Nguyễn đỗ tùng'),
(13, 'hungnguyenxxx123', 'ef20c44fb65029e42b45891f1877bd78', 'nguyen van hung1', '123456', 'phubui2702@gmail.com', 'hung'),
(30, 'hungnguyen12345678', '25d55ad283aa400af464c76d713c07ad', 'nguyen van hung', '12345678', 'cuchuoibothay@gmail.com', 'hung'),
(21, ' nguyenhung', 'e10adc3949ba59abbe56e057f20f883e', 'nguyen van hung', '234567', 'nguyenvanhungcd0007@gmail.com', 'rfvefdv'),
(15, 'ngochan', '827ccb0eea8a706c4c34a16891f84e7b', 'nguyen van hung', '12345', 'nguyenvanhungcd0007@gmail.com', 'hung'),
(16, 'hungnguyenabcdef', '550e1bafe077ff0b0b67f4e32f29d751', 'nguyen van hung', '1234567', 'phubui2702@gmail.com', 'hung'),
(26, 'hungnguyen', '550e1bafe077ff0b0b67f4e32f29d751', 'Nguyễn đỗ tùng', '12345678', 'vietpro@gmail.com', 'hung'),
(27, 'hungnguyen1919', '1f32aa4c9a1d2ea010adcf2348166a04', 'nguyen van hung', '23456789', 'admin@gmail.com', 'hung'),
(28, 'hung888', '25d55ad283aa400af464c76d713c07ad', 'Mã Siêu', '12345678', 'vietpro@gmail.com', 'hung'),
(29, 'tung181818', '25d55ad283aa400af464c76d713c07ad', 'Nguyễn đỗ tùng', '1234567', 'lubo@gmail.com', 'hung'),
(31, 'hungxxxxnguyen', '25d55ad283aa400af464c76d713c07ad', 'nguyen van hung', '12345678', 'admin@gmail.com', 'dcdc'),
(32, 'lochitham', '25d55ad283aa400af464c76d713c07ad', 'Lỗ chí thâm', '1234567890', 'admin@gmail.com', 'Hải phòng'),
(33, 'luboxxxdieuthuyen', '202cb962ac59075b964b07152d234b70', 'nguyen van hung', '1234567890', 'admin@gmail.com', 'haha'),
(34, 'taothao', '202cb962ac59075b964b07152d234b70', 'Tào tháo đuổi', '1234567890', 'admin@gmail.com', 'Tào tháo đuổi'),
(35, 'taothao123', '25d55ad283aa400af464c76d713c07ad', 'Tào tháo', '1234567890', 'taothao@gmail.com', 'Tào tháo đuổi'),
(37, 'anhba', '579646aad11fae4dd295812fb4526245', 'Anh ba', '1234567890', 'phubui2702@gmail.com', 'haha');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
