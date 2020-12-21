-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 21, 2020 at 06:57 AM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `5theway`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `hoten` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `matkhauad` varchar(50) NOT NULL,
  `quyen` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`hoten`, `email`, `matkhauad`, `quyen`) VALUES
('Luu Kim Hao', 'haovip185@gmail.com', 'd3825a5ec5f5a357ceba8ac342db8f4c', 1);

-- --------------------------------------------------------

--
-- Table structure for table `chitiethd`
--

CREATE TABLE `chitiethd` (
  `mahd` int(11) NOT NULL,
  `tensp` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `masp` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `loai` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `gia` int(11) NOT NULL,
  `ngaymua` datetime(6) NOT NULL,
  `soluong` tinyint(4) NOT NULL,
  `vanchuyen` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `thanhtoan` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `hinh` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chitiethd`
--

INSERT INTO `chitiethd` (`mahd`, `tensp`, `masp`, `loai`, `gia`, `ngaymua`, `soluong`, `vanchuyen`, `thanhtoan`, `hinh`) VALUES
(7, 'BALO ZIG-ZAG', 'BL-RK1', 'ĐEN/VÀNG', 600000, '2020-12-07 20:43:11.000000', 1, 'Giao tận nơi', 'Thanh toán khi giao hàng (COD)', 'ROCKET-ACID.jpg'),
(8, 'ÁO THUN QUỐC KHÁNH™', 'AT-LM01', 'L', 450000, '2020-12-07 20:44:08.000000', 2, 'Nhận tại cửa hàng', 'Chuyển khoản qua ngân hàng', 'ao-dang.jpg'),
(10, 'ÁO THUN ACID™', 'AT02', 'L', 500000, '2020-12-11 21:19:17.000000', 1, 'Giao tận nơi', 'Thanh toán khi giao hàng (COD)', 'AO-ACID.jpg'),
(10, 'VÍ DÀI TRADEMARK™', 'VD-TM', 'XÁM', 150000, '2020-12-11 21:19:17.000000', 1, 'Giao tận nơi', 'Thanh toán khi giao hàng (COD)', 'LONG-TM3.jpg'),
(11, 'BIG LOGO STORYBOARD™', 'PK-MB01', 'VÀNG', 90000, '2020-12-21 13:07:30.000000', 3, 'Giao tận nơi', 'Thanh toán khi giao hàng (COD)', 'MASK1.jpg'),
(11, 'ÁO KHOÁC BIGLOGO™', 'AK02', 'L', 600000, '2020-12-21 13:07:30.000000', 1, 'Giao tận nơi', 'Thanh toán khi giao hàng (COD)', 'BIGLOGO2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `chitietloai`
--

CREATE TABLE `chitietloai` (
  `tenloaichitiet` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `maloai` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chitietloai`
--

INSERT INTO `chitietloai` (`tenloaichitiet`, `maloai`) VALUES
('ÁO KHOÁC DENIM™', 'AK'),
('ÁO THUN LIMIT™', 'AT'),
('BALO TM™', 'BL'),
('BALO ZIG-ZAG™', 'BL'),
('MINI BAG CAMO™', 'BLN'),
('MINI BAG™', 'BLN'),
('MASK BIG LOGO™', 'PK-M'),
('MASK LETTER™', 'PK-M'),
('QUẦN JOGGER MINI™', 'QJ'),
('VÍ DÀI TM™', 'VD');

-- --------------------------------------------------------

--
-- Table structure for table `hoadon`
--

CREATE TABLE `hoadon` (
  `mahd` int(11) NOT NULL,
  `tenkh` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `diachi` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `sdt` int(11) NOT NULL,
  `email` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `ngaymua` datetime(6) NOT NULL,
  `tinhtrang` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hoadon`
--

INSERT INTO `hoadon` (`mahd`, `tenkh`, `diachi`, `sdt`, `email`, `ngaymua`, `tinhtrang`) VALUES
(7, 'huệ như ', '240 sư vạn hạnh phường 2 quận 10', 933714383, 'auhuenhu2015@gmail.com', '2020-12-07 20:43:11.000000', 'Hoàn thành'),
(8, 'mai huỳnh', '123 hồ thị kỷ quận 10', 912345689, 'huynhxuanmai@gmail.com', '2020-12-07 20:44:08.000000', 'Chưa hoàn thành'),
(10, 'fsdf jhdsk', 'dáhjcđsccdz dsfaf', 933714383, 'auhuenhu2015@gmail.com', '2020-12-11 21:19:17.000000', 'Chưa hoàn thành'),
(11, 'gdshhh dsf', 'sdsfsdfsd fsfgfg', 933714383, 'auhuenhu2015@gmail.com', '2020-12-21 13:07:30.000000', 'Chưa hoàn thành');

-- --------------------------------------------------------

--
-- Table structure for table `khachhang`
--

CREATE TABLE `khachhang` (
  `tenkh` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `sdt` int(11) NOT NULL,
  `diachi` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `matkhaukh` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `gtinh` varchar(5) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `khachhang`
--

INSERT INTO `khachhang` (`tenkh`, `sdt`, `diachi`, `email`, `matkhaukh`, `gtinh`) VALUES
('Âu Huệ Như', 933714383, '41/5/1 Sư Vạn Hạnh phường 3 quận 10 ', 'auhuenhu2015@gmail.com', '0cb6838b729aac48f5ed54c93f73e7d1', 'Nữ'),
('Luu Kim Hao', 936018819, '31 Phạm Hùng Q8', 'haovip185@gmail.com', 'd3825a5ec5f5a357ceba8ac342db8f4c', 'Nam'),
('Huỳnh Xuân Mai ', 908999666, 'Lý Thái Tổ Quận 10', 'huynhxuanmai@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'Nữ');

-- --------------------------------------------------------

--
-- Table structure for table `loai`
--

CREATE TABLE `loai` (
  `maloai` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `tenloai` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `loai`
--

INSERT INTO `loai` (`maloai`, `tenloai`) VALUES
('AK', 'ÁO KHOÁC™'),
('ASM', 'ÁO SƠ MI™'),
('AT', 'ÁO THUN™'),
('ATD', 'ÁO TAY DÀI™'),
('BL', 'BALO ROCKET'),
('BLN', 'BALO MINI™'),
('DLM', 'NAM™'),
('DLN', 'NỮ™'),
('PK-D', 'DÂY ĐEO™'),
('PK-M', 'MASK™'),
('PK-N', 'NÓN ™'),
('PK-V', 'VỚ ™'),
('QJ', 'QUẦN JOGGER™'),
('QJE', 'QUẦN JEAN™'),
('QK', 'QUẦN KAKI™'),
('QS', 'QUẦN SHORT™'),
('VD', 'VÍ DÀI™'),
('VN', 'VÍ NGẮN™');

-- --------------------------------------------------------

--
-- Table structure for table `sanpham`
--

CREATE TABLE `sanpham` (
  `masp` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `tensp` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `giaban` int(11) NOT NULL,
  `giagiam` float DEFAULT NULL,
  `mota` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `soluong` tinyint(4) NOT NULL,
  `hinh` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `maloai` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `dacdiem` json DEFAULT NULL,
  `masukien` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `tenloaichitiet` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `ngaynhap` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sanpham`
--

INSERT INTO `sanpham` (`masp`, `tensp`, `giaban`, `giagiam`, `mota`, `soluong`, `hinh`, `maloai`, `dacdiem`, `masukien`, `tenloaichitiet`, `ngaynhap`) VALUES
('AK01', 'ÁO KHOÁC DENIM MÀU™', 500000, NULL, 'Thương Hiệu : ✨ 5THEWAY ✨<br>\r\n\r\nChất liệu : COTTON THOÁNG MÁT, VẢI JEAN<br>\r\n\r\n\r\n\r\nTình trạng : CÒN HÀNG<br>\r\n\r\n', 10, 'DENIM-DO.jpg;DENIM-DEN.jpg;DENIM-CAM.jpg', 'AK', '{"dd": [{"name": "ĐỎ"}, {"name": "ĐEN"}, {"name": "CAM"}]}', NULL, 'ÁO KHOÁC DENIM™', '2020-12-01 01:00:00'),
('AK02', 'ÁO KHOÁC BIGLOGO™', 600000, NULL, 'Thương Hiệu :  5THEWAY <br>\r\n\r\nChất liệu : COTTON THOÁNG MÁT, NHIỀU NGĂN<br>\r\n\r\nTình trạng : CÒN HÀNG<br>', 9, 'BIGLOGO2.jpg', 'AK', '{"dd": [{"name": "M"}, {"name": "L"}]}', NULL, 'ÁO KHOÁC DENIM™', '2020-12-01 00:00:00'),
('AT-LM01', 'ÁO THUN QUỐC KHÁNH™', 450000, NULL, 'Thương Hiệu : ✨ 5THEWAY ✨<br>\r\n\r\nChất liệu : COTTON THOÁNG MÁT<br>\r\n\r\nTình trạng : CÒN HÀNG<br>', 1, 'ao-dang.jpg;ao-dang2.jpg;ao-dang3.jpg;ao-dang4.jpg', 'AT', '{"dd": [{"name": "M"}, {"name": "L"}, {"name": "XL"}, {"name": "XXL"}]}', NULL, 'ÁO THUN LIMIT™', '2020-12-01 00:00:00'),
('AT02', 'ÁO THUN ACID™', 500000, NULL, 'Thương Hiệu :  5THEWAY <br>\r\n\r\nChất liệu : COTTON THOÁNG MÁT, NHIỀU NGĂN<br>\r\n\r\nTình trạng : CÒN HÀNG<br>', 4, 'AO-ACID.jpg', 'AT', '{"dd": [{"name": "M"}, {"name": "L"}]}', NULL, 'ÁO THUN LIMIT™', '2020-12-01 00:00:00'),
('BL-RK1', 'BALO ZIG-ZAG', 600000, NULL, 'Thương Hiệu : ✨ 5THEWAY ✨<br>\r\n\r\nChất liệu : COTTON THOÁNG MÁT, NHIỀU NGĂN<br>\r\n\r\nTình trạng : CÒN HÀNG<br>', 3, 'ROCKET-ACID.jpg;ROCKET-DENVANG.jpg', 'BL', '{"dd": [{"name": "ĐEN/XANH CHUỐI"}, {"name": "ĐEN/VÀNG"}]}', NULL, 'BALO ZIG-ZAG™', '2020-12-01 00:00:00'),
('BL-RK2', 'BALO TRADEMARK™', 550000, NULL, 'Thương Hiệu : ✨ 5THEWAY ✨<br>\r\n\r\nChất liệu : COTTON THOÁNG MÁT, NHIỀU NGĂN<br>\r\n\r\nTình trạng : CÒN HÀNG<br>', 7, 'ROCKET-TM1.jpg;ROCKET-TM2.jpg;ROCKET-TM3.jpg', 'BL', '{"dd": [{"name": "TRẮNG"}, {"name": "XÁM"}, {"name": "XANH"}]}', NULL, 'BALO TM™', '2020-12-01 00:00:00'),
('BLN-CM', 'MINI BAG CAMO™', 350000, NULL, 'Thương Hiệu : ✨ 5THEWAY ✨<br>\r\n\r\nChất liệu : COTTON THOÁNG MÁT, NHỎ GỌN<br>\r\n\r\nTình trạng : CÒN HÀNG<br>', 5, 'MINI-BAG1.jpg;MINI-BAG2.jpg', 'BLN', '{"dd": [{"name": "TÍM"}, {"name": "XANH LÁ"}]}', NULL, 'MINI BAG CAMO™', '2020-12-01 00:00:00'),
('PK-MB01', 'BIG LOGO STORYBOARD™', 90000, NULL, 'Thương Hiệu : ✨ 5THEWAY ✨<br>\r\n\r\nChất liệu : VẢI THUN THOÁNG MÁT, NHỎ GỌN<br>\r\n\r\nTình trạng : CÒN HÀNG<br>', 1, 'MASK1.jpg', 'PK-M', '{"dd": [{"name": "ĐEN"}, {"name": "VÀNG"}]}', NULL, 'MASK BIG LOGO™', '2020-12-02 00:00:00'),
('QJ-MN', 'QUẦN JOGGER MINI LETTER™', 400000, NULL, 'Thương Hiệu : ✨ 5THEWAY ✨<br>\r\n\r\nChất liệu : KAKI THOÁNG MÁT, NHỎ GỌN<br>\r\n\r\nTình trạng : CÒN HÀNG<br>', 5, 'JOGGER1.jpg;JOGGER2.jpg', 'QJ', '{"dd": [{"name": "ĐEN"}, {"name": "ĐỎ"}]}', NULL, 'QUẦN JOGGER MINI™', '2020-12-01 00:00:00'),
('VD-TM', 'VÍ DÀI TRADEMARK™', 150000, NULL, 'Thương Hiệu : ✨ 5THEWAY ✨<br>\r\n\r\nChất liệu : VẢI THOÁNG MÁT, NHỎ GỌN<br>\r\n\r\nTình trạng : CÒN HÀNG<br>', 9, 'LONG-TM3.jpg;LONG-TM2.jpg;LONG-TM1.jpg;', 'VD', '{"dd": [{"name": "ĐEN"}, {"name": "TRẮNG"}, {"name": "XÁM"}]}', NULL, 'VÍ DÀI TM™', '2020-12-01 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `sukien`
--

CREATE TABLE `sukien` (
  `masukien` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `tieude` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `hinh` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `ngaydang` datetime(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sukien`
--

INSERT INTO `sukien` (`masukien`, `tieude`, `hinh`, `ngaydang`) VALUES
('20102020', 'Mừng Ngày Phụ Nữ Việt Nam', '', '2020-10-20 13:12:09.000000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `chitiethd`
--
ALTER TABLE `chitiethd`
  ADD KEY `mahd` (`mahd`);

--
-- Indexes for table `chitietloai`
--
ALTER TABLE `chitietloai`
  ADD PRIMARY KEY (`tenloaichitiet`),
  ADD KEY `maloai` (`maloai`);

--
-- Indexes for table `hoadon`
--
ALTER TABLE `hoadon`
  ADD PRIMARY KEY (`mahd`),
  ADD KEY `email` (`email`);

--
-- Indexes for table `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `loai`
--
ALTER TABLE `loai`
  ADD PRIMARY KEY (`maloai`);

--
-- Indexes for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`masp`),
  ADD KEY `maloai` (`maloai`),
  ADD KEY `masukien` (`masukien`),
  ADD KEY `tenloaichitiet` (`tenloaichitiet`);

--
-- Indexes for table `sukien`
--
ALTER TABLE `sukien`
  ADD PRIMARY KEY (`masukien`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chitiethd`
--
ALTER TABLE `chitiethd`
  MODIFY `mahd` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `hoadon`
--
ALTER TABLE `hoadon`
  MODIFY `mahd` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `chitiethd`
--
ALTER TABLE `chitiethd`
  ADD CONSTRAINT `chitiethd_ibfk_1` FOREIGN KEY (`mahd`) REFERENCES `hoadon` (`mahd`);

--
-- Constraints for table `chitietloai`
--
ALTER TABLE `chitietloai`
  ADD CONSTRAINT `chitietloai_ibfk_1` FOREIGN KEY (`maloai`) REFERENCES `loai` (`maloai`);

--
-- Constraints for table `hoadon`
--
ALTER TABLE `hoadon`
  ADD CONSTRAINT `hoadon_ibfk_1` FOREIGN KEY (`email`) REFERENCES `khachhang` (`email`);

--
-- Constraints for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `sanpham_ibfk_2` FOREIGN KEY (`masukien`) REFERENCES `sukien` (`masukien`),
  ADD CONSTRAINT `sanpham_ibfk_3` FOREIGN KEY (`tenloaichitiet`) REFERENCES `chitietloai` (`tenloaichitiet`),
  ADD CONSTRAINT `sanpham_ibfk_4` FOREIGN KEY (`maloai`) REFERENCES `loai` (`maloai`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
