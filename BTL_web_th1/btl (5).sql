-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th1 10, 2020 lúc 04:08 PM
-- Phiên bản máy phục vụ: 10.4.8-MariaDB
-- Phiên bản PHP: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `btl`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `diem`
--

CREATE TABLE `diem` (
  `masv` varchar(10) NOT NULL,
  `mamon` varchar(10) NOT NULL,
  `magd` varchar(10) NOT NULL,
  `diemqt` float NOT NULL,
  `diemthi` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `diem`
--

INSERT INTO `diem` (`masv`, `mamon`, `magd`, `diemqt`, `diemthi`) VALUES
('sv1', 'M1', 'GD11', 8, 8),
('sv1', 'M2', 'GD11', 9, 9.5);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `giaidoan`
--

CREATE TABLE `giaidoan` (
  `magd` varchar(10) NOT NULL,
  `tengd` varchar(50) NOT NULL,
  `manamhoc` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `giaidoan`
--

INSERT INTO `giaidoan` (`magd`, `tengd`, `manamhoc`) VALUES
('GD11', 'Giai đoạn 1 kì 1', 'K1'),
('GD12', 'Giai đoạn 2 kì 1', 'K1'),
('GD21', 'Giai đoạn 1 kì 2', 'K2'),
('GD22', 'Giai đoạn 2 kì 2', 'K2');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `giangvien`
--

CREATE TABLE `giangvien` (
  `magv` char(10) NOT NULL,
  `tengv` varchar(50) NOT NULL,
  `ngaysinh` varchar(50) NOT NULL,
  `diachi` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `makhoa` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `giangvien`
--

INSERT INTO `giangvien` (`magv`, `tengv`, `ngaysinh`, `diachi`, `email`, `makhoa`) VALUES
('gv1', 'Vũ Văn Nam', '27-01-1975', '187 Tôn Thất Tùng', 'vuvannam@tlu.vn', 'CNTT'),
('gv2', 'Trần Mai Anh', '30-08-1981', '87 Tây Sơn', 'tranmaianh@tlu.vn', 'CNTT'),
('gv3', 'Nguyễn Mạnh Hải', '14-09-1980', '23 Chùa Bộc', 'nguyenmanhhai@tlu.vn', 'CNTT'),
('gv4', 'Đỗ Văn Hải', '14-11-1986', '110 Nguyễn Trãi', 'dovanhai@tlu.vn', 'CNTT');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khoa`
--

CREATE TABLE `khoa` (
  `makhoa` varchar(20) NOT NULL,
  `tenkhoa` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `khoa`
--

INSERT INTO `khoa` (`makhoa`, `tenkhoa`) VALUES
('CNTT', 'Công nghệ thông tin');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khoahoc`
--

CREATE TABLE `khoahoc` (
  `makhoahoc` varchar(10) NOT NULL,
  `tenkhoahoc` varchar(50) NOT NULL,
  `nambatdau` varchar(50) NOT NULL,
  `namketthuc` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `khoahoc`
--

INSERT INTO `khoahoc` (`makhoahoc`, `tenkhoahoc`, `nambatdau`, `namketthuc`) VALUES
('K58', 'Khóa 58', '2016', '2020'),
('K59', 'Khóa 59', '2017', '2021'),
('K60', 'Khóa 60', '2018', '2022'),
('K61', 'Khóa 61', '2019', '2023'),
('K99', 'Ly', 'A', 'B');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `mon`
--

CREATE TABLE `mon` (
  `mamon` varchar(10) NOT NULL,
  `tenmon` varchar(50) NOT NULL,
  `manganh` varchar(10) NOT NULL,
  `magv` char(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `mon`
--

INSERT INTO `mon` (`mamon`, `tenmon`, `manganh`, `magv`) VALUES
('M1', 'Công nghệ web', 'TH', 'gv1'),
('M2', 'Phân tích yêu cầu hệ thống thông tin', 'HT', 'gv2'),
('M3', 'Lý thuyết tính toán', 'TH', 'gv3'),
('M4', 'Phân tích yêu cầu phần mềm', 'PM', 'gv4');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `namhoc`
--

CREATE TABLE `namhoc` (
  `manamhoc` varchar(10) NOT NULL,
  `namhoc` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `namhoc`
--

INSERT INTO `namhoc` (`manamhoc`, `namhoc`) VALUES
('N1', '2019-2020'),
('N2', '2018-2019');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nganh`
--

CREATE TABLE `nganh` (
  `manganh` varchar(10) NOT NULL,
  `tennganh` varchar(50) NOT NULL,
  `makhoa` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `nganh`
--

INSERT INTO `nganh` (`manganh`, `tennganh`, `makhoa`) VALUES
('HT', 'Hệ thống thông tin', 'CNTT'),
('n1', 'hh', 'CNTT'),
('PM', 'Công nghệ phần mềm', 'CNTT'),
('TH', 'Công nghệ thông tin', 'CNTT');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sinhvien`
--

CREATE TABLE `sinhvien` (
  `masv` varchar(10) NOT NULL,
  `tensv` varchar(50) NOT NULL,
  `cmt` char(100) NOT NULL,
  `ngaysinh` varchar(50) NOT NULL,
  `diachi` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `makhoahoc` varchar(10) NOT NULL,
  `makhoa` varchar(10) NOT NULL,
  `mamon` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `sinhvien`
--

INSERT INTO `sinhvien` (`masv`, `tensv`, `cmt`, `ngaysinh`, `diachi`, `email`, `makhoahoc`, `makhoa`, `mamon`) VALUES
('SV1', 'Nguyễn Thị Thu Lý', '0000', '10-02-1999', '175 Tây Sơn', 'lyntt72@wru.vn', 'K59', 'CNTT', 'M1'),
('SV10', 'Vũ Mạnh Linh', '0001', '12-08-2000', '231 Nguyễn Tuân', 'linhvm72@wru.vn', 'K60', 'CNTT', 'M1'),
('SV11', 'Nguyễn Thành Dương', '0002', '05-11-2001', '11 Chu Văn An', 'duongnt72@wru.vn', 'K61', 'CNTT', 'M1'),
('SV12', 'Trần Thu Trang', '0003', '26-01-2001', '132 Thái Hà', 'trangtt72@wru.vn', 'K61', 'CNTT', 'M1'),
('SV13', 'Lương Ngọc Anh', '0004', '13-11-2001', '39 Huỳnh Thúc Kháng', 'anhln72@wru.vn', 'K61', 'CNTT', 'M1'),
('SV14', 'Nguyễn Anh Dũng', '0005', '10-07-2001', '120 Trần Duy Hưng', 'dungna72@wru.vn', 'K61', 'CNTT', 'M2'),
('SV15', 'Chu Thị Diễm Quỳnh', '0006', '16-01-2001', '32 Kim Mã', 'quynhctd72@wru.vn', 'K61', 'CNTT', 'M2'),
('SV16', 'Nguyễn Mạnh Luân', '0007', '12-03-1998', '84 Phạm Ngọc Thạch', 'luannm72@wru.vn', 'K58', 'CNTT', 'M2'),
('SV17', 'Bùi Cảnh Minh', '0008', '06-06-1998', '18 Tam Khương', 'minhbc72@wru.vn', 'K58', 'CNTT', 'M2'),
('SV18', 'Vũ Thị Trang', '0009', '14-10-1998', '135 Xã Đàn', 'trangvt72@wru.vn', 'K58', 'CNTT', 'M2'),
('SV19', 'Đỗ Thu Giang', '1000', '20-03-1998', '222 Đường Láng', 'giangdt72@wru.vn', 'K58', 'CNTT', 'M3'),
('SV2', 'Nguyễn Thị Ánh Tuyết', '1001', '22-10-1999', '220 Nguyễn Trãi', 'tuyetnta72@wru.vn', 'K59', 'CNTT', 'M3'),
('SV20', 'Nguyễn Thị Tuyết Mai', '1002', '23-04-1998', '12 Xã Đàn', 'maintt72@wru.vn', 'K58', 'CNTT', 'M3'),
('sv21', 'Nguyễn Thùy Dương', '00111', '10/11/2000', '120 Tây Sơn', 'adeptrai1999@gmail.com', 'K58', 'CNTT', 'M1'),
('SV3', 'Đỗ Thùy Linh', '1003', '09-09-1999', '175 Tây Sơn', 'linhdt72@wru.vn', 'K59', 'CNTT', 'M3'),
('SV4', 'Nguyễn Thị Huế', '1004', '15-04-1999', '110 Chính kinh', 'huent72@wru.vn', 'K59', 'CNTT', 'M3'),
('SV5', 'Nguyễn Thị Loan', '1005', '17-01-1999', '175 Tây Sơn', 'loannt72@wru.vn', 'K59', 'CNTT', 'M4'),
('SV6', 'Hoàng Thế Anh', '1006', '04-08-2000', '137 Tây Sơn', 'anhht72@wru.vn', 'K60', 'CNTT', 'M4'),
('SV7', 'Trần Mạnh Quang', '1007', '12-11-2000', '1284 Nguyễn Lương Bằng', 'quangtm72@wru.vn', 'K60', 'CNTT', 'M4'),
('SV8', 'Hoàng Thị Thanh Phương', '1008', '26-09-2000', '38 Chùa Bộc', 'phuonghtt72@wru.vn', 'K60', 'CNTT', 'M4'),
('SV9', 'Dương Thanh Minh', '1009', '04-08-2000', '191 Trường Chinh', 'minhdt72@wru.vn', 'K60', 'CNTT', 'M4');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `taikhoan`
--

CREATE TABLE `taikhoan` (
  `matk` int(10) NOT NULL,
  `tentk` varchar(50) NOT NULL,
  `matkhau` char(255) NOT NULL,
  `level` int(2) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `taikhoan`
--

INSERT INTO `taikhoan` (`matk`, `tentk`, `matkhau`, `level`) VALUES
(7, 'ad', '$2y$10$6KAc4fLsdGrh6AmVWmqhKOnoNpL6soaaONBGuDYgJUH5FKdWYEGcm', 1),
(13, 'gv', '$2y$10$S7ZbVWV4PYcaGqGdHK3/ueAHeZoNgA1xc5GEDMaZZFN/rYN51kTda', 0),
(14, 'admin', '$2y$10$MXNFLouUwhIimQni8Lewau42J0jJhqoFTLYbDpT2OCTh1lqXtNYqm', 1),
(17, 'qli', '$2y$10$HHyCTb9qdcs3nNQ9.o8q6ea4/TrtvBcGh2ZFagImFINzFOVUsBJIG', 2);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `diem`
--
ALTER TABLE `diem`
  ADD PRIMARY KEY (`masv`,`mamon`),
  ADD KEY `mamon` (`mamon`),
  ADD KEY `magd` (`magd`);

--
-- Chỉ mục cho bảng `giaidoan`
--
ALTER TABLE `giaidoan`
  ADD PRIMARY KEY (`magd`),
  ADD KEY `maky` (`manamhoc`);

--
-- Chỉ mục cho bảng `giangvien`
--
ALTER TABLE `giangvien`
  ADD PRIMARY KEY (`magv`),
  ADD KEY `makhoa` (`makhoa`);

--
-- Chỉ mục cho bảng `khoa`
--
ALTER TABLE `khoa`
  ADD PRIMARY KEY (`makhoa`);

--
-- Chỉ mục cho bảng `khoahoc`
--
ALTER TABLE `khoahoc`
  ADD PRIMARY KEY (`makhoahoc`);

--
-- Chỉ mục cho bảng `mon`
--
ALTER TABLE `mon`
  ADD PRIMARY KEY (`mamon`),
  ADD KEY `manganh` (`manganh`),
  ADD KEY `magv` (`magv`) USING BTREE;

--
-- Chỉ mục cho bảng `namhoc`
--
ALTER TABLE `namhoc`
  ADD PRIMARY KEY (`manamhoc`);

--
-- Chỉ mục cho bảng `nganh`
--
ALTER TABLE `nganh`
  ADD PRIMARY KEY (`manganh`);

--
-- Chỉ mục cho bảng `sinhvien`
--
ALTER TABLE `sinhvien`
  ADD PRIMARY KEY (`masv`),
  ADD KEY `makhoahoc` (`makhoahoc`),
  ADD KEY `makhoa` (`makhoa`);

--
-- Chỉ mục cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD PRIMARY KEY (`matk`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  MODIFY `matk` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `diem`
--
ALTER TABLE `diem`
  ADD CONSTRAINT `diem_ibfk_1` FOREIGN KEY (`masv`) REFERENCES `sinhvien` (`masv`),
  ADD CONSTRAINT `diem_ibfk_2` FOREIGN KEY (`mamon`) REFERENCES `mon` (`mamon`),
  ADD CONSTRAINT `diem_ibfk_3` FOREIGN KEY (`magd`) REFERENCES `giaidoan` (`magd`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
