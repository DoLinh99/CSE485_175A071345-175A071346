-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 30, 2019 lúc 03:22 PM
-- Phiên bản máy phục vụ: 10.4.10-MariaDB
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
-- Cấu trúc bảng cho bảng `congviec`
--

CREATE TABLE `congviec` (
  `magv` varchar(10) NOT NULL,
  `mamon` varchar(10) NOT NULL,
  `makhoa` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `congviec`
--

INSERT INTO `congviec` (`magv`, `mamon`, `makhoa`) VALUES
('gv1', 'M1', 'CNTT'),
('gv2', 'M2', 'CNTT'),
('gv3', 'M3', 'CNTT'),
('gv4', 'M4', 'CNTT');

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
-- Cấu trúc bảng cho bảng `dssv`
--

CREATE TABLE `dssv` (
  `masv` varchar(10) NOT NULL,
  `malop` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `dssv`
--

INSERT INTO `dssv` (`masv`, `malop`) VALUES
('sv1', 'L1'),
('sv10', 'L2'),
('sv11', 'L3'),
('sv12', 'L3'),
('sv13', 'L3'),
('sv14', 'L3'),
('sv15', 'L3'),
('sv16', 'L4'),
('sv17', 'L4'),
('sv18', 'L4'),
('sv19', 'L4'),
('sv2', 'L1'),
('sv20', 'L4'),
('sv3', 'L1'),
('sv4', 'L1'),
('sv5', 'L1'),
('sv6', 'L2'),
('sv7', 'L2'),
('sv8', 'L2'),
('sv9', 'L2');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `giaidoan`
--

CREATE TABLE `giaidoan` (
  `magd` varchar(10) NOT NULL,
  `tengd` varchar(50) NOT NULL,
  `maky` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `giaidoan`
--

INSERT INTO `giaidoan` (`magd`, `tengd`, `maky`) VALUES
('GD11', 'Giai đoạn 1 kì 1', 'K1'),
('GD12', 'Giai đoạn 2 kì 1', 'K1'),
('GD21', 'Giai đoạn 1 kì 2', 'K2'),
('GD22', 'Giai đoạn 2 kì 2', 'K2');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `giangvien`
--

CREATE TABLE `giangvien` (
  `magv` varchar(10) NOT NULL,
  `tengv` varchar(50) NOT NULL,
  `ngaysinh` varchar(50) NOT NULL,
  `diachi` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `matk` varchar(10) NOT NULL,
  `makhoa` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `giangvien`
--

INSERT INTO `giangvien` (`magv`, `tengv`, `ngaysinh`, `diachi`, `email`, `matk`, `makhoa`) VALUES
('gv1', 'Vũ Văn Nam', '27-01-1975', '187 Tôn Thất Tùng', 'vuvannam@tlu.vn', 'GV', 'CNTT'),
('gv2', 'Trần Mai Anh', '30-08-1981', '87 Tây Sơn', 'tranmaianh@tlu.vn', 'GV', 'CNTT'),
('gv3', 'Nguyễn Mạnh Hải', '14-09-1980', '23 Chùa Bộc', 'nguyenmanhhai@tlu.vn', 'GV', 'CNTT'),
('gv4', 'Đỗ Văn Hải', '14-11-1986', '110 Nguyễn Trãi', 'dovanhai@tlu.vn', 'GV', 'CNTT');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khoa`
--

CREATE TABLE `khoa` (
  `makhoa` varchar(10) NOT NULL,
  `tenkhoa` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `khoa`
--

INSERT INTO `khoa` (`makhoa`, `tenkhoa`, `email`) VALUES
('CNTT', 'Công nghệ thông tin', 'vpkcntt@tlu.edu.vn');

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
('K61', 'Khóa 61', '2019', '2023');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `ky`
--

CREATE TABLE `ky` (
  `maky` varchar(10) NOT NULL,
  `tenky` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `ky`
--

INSERT INTO `ky` (`maky`, `tenky`) VALUES
('K1', 'Kì 1'),
('K2', 'Kì 2');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `lop`
--

CREATE TABLE `lop` (
  `malop` varchar(10) NOT NULL,
  `tenlop` varchar(50) NOT NULL,
  `magv` varchar(10) NOT NULL,
  `mamon` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `lop`
--

INSERT INTO `lop` (`malop`, `tenlop`, `magv`, `mamon`) VALUES
('L1', 'Lớp học phần 1', 'gv1', 'M1'),
('L2', 'Lớp học phần 2', 'gv2', 'M2'),
('L3', 'Lớp học phần 3', 'gv3', 'M3'),
('L4', 'Lớp học phần 4', 'gv4', 'M4');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `mon`
--

CREATE TABLE `mon` (
  `mamon` varchar(10) NOT NULL,
  `tenmon` varchar(50) NOT NULL,
  `manganh` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `mon`
--

INSERT INTO `mon` (`mamon`, `tenmon`, `manganh`) VALUES
('M1', 'Công nghệ web', 'TH'),
('M2', 'Phân tích yêu cầu hệ thống thông tin', 'HT'),
('M3', 'Lý thuyết tính toán', 'TH'),
('M4', 'Phân tích yêu cầu phần mềm', 'PM');

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
('PM', 'Công nghệ phần mềm', 'CNTT'),
('TH', 'Công nghệ thông tin', 'CNTT');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sinhvien`
--

CREATE TABLE `sinhvien` (
  `masv` varchar(10) NOT NULL,
  `tensv` varchar(50) NOT NULL,
  `ngaysinh` varchar(50) NOT NULL,
  `diachi` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `makhoahoc` varchar(10) NOT NULL,
  `matk` varchar(10) NOT NULL,
  `makhoa` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `sinhvien`
--

INSERT INTO `sinhvien` (`masv`, `tensv`, `ngaysinh`, `diachi`, `email`, `makhoahoc`, `matk`, `makhoa`) VALUES
('SV1', 'Nguyễn Thị Thu Lý', '10-02-1999', '175 Tây Sơn', 'lyntt72@wru.vn', 'K59', 'SV', 'CNTT'),
('SV10', 'Vũ Mạnh Linh', '12-08-2000', '231 Nguyễn Tuân', 'linhvm72@wru.vn', 'K60', 'SV', 'CNTT'),
('SV11', 'Nguyễn Thành Dương', '05-11-2001', '11 Chu Văn An', 'duongnt72@wru.vn', 'K61', 'SV', 'CNTT'),
('SV12', 'Trần Thu Trang', '26-01-2001', '132 Thái Hà', 'trangtt72@wru.vn', 'K61', 'SV', 'CNTT'),
('SV13', 'Lương Ngọc Anh', '13-11-2001', '39 Huỳnh Thúc Kháng', 'anhln72@wru.vn', 'K61', 'SV', 'CNTT'),
('SV14', 'Nguyễn Anh Dũng', '10-07-2001', '120 Trần Duy Hưng', 'dungna72@wru.vn', 'K61', 'SV', 'CNTT'),
('SV15', 'Chu Thị Diễm Quỳnh', '16-01-2001', '32 Kim Mã', 'quynhctd72@wru.vn', 'K61', 'SV', 'CNTT'),
('SV16', 'Nguyễn Mạnh Luân', '12-03-1998', '84 Phạm Ngọc Thạch', 'luannm72@wru.vn', 'K58', 'SV', 'CNTT'),
('SV17', 'Bùi Cảnh Minh', '06-06-1998', '18 Tam Khương', 'minhbc72@wru.vn', 'K58', 'SV', 'CNTT'),
('SV18', 'Vũ Thị Trang', '14-10-1998', '135 Xã Đàn', 'trangvt72@wru.vn', 'K58', 'SV', 'CNTT'),
('SV19', 'Đỗ Thu Giang', '20-03-1998', '222 Đường Láng', 'giangdt72@wru.vn', 'K58', 'SV', 'CNTT'),
('SV2', 'Nguyễn Thị Ánh Tuyết', '22-10-1999', '220 Nguyễn Trãi', 'tuyetnta72@wru.vn', 'K59', 'SV', 'CNTT'),
('SV20', 'Nguyễn Thị Tuyết Mai', '23-04-1998', '12 Xã Đàn', 'maintt72@wru.vn', 'K58', 'SV', 'CNTT'),
('SV3', 'Đỗ Thùy Linh', '09-09-1999', '175 Tây Sơn', 'linhdt72@wru.vn', 'K59', 'SV', 'CNTT'),
('SV4', 'Nguyễn Thị Huế', '15-04-1999', '110 Chính kinh', 'huent72@wru.vn', 'K59', 'SV', 'CNTT'),
('SV5', 'Nguyễn Thị Loan', '17-01-1999', '175 Tây Sơn', 'loannt72@wru.vn', 'K59', 'SV', 'CNTT'),
('SV6', 'Hoàng Thế Anh', '04-08-2000', '137 Tây Sơn', 'anhht72@wru.vn', 'K60', 'SV', 'CNTT'),
('SV7', 'Trần Mạnh Quang', '12-11-2000', '1284 Nguyễn Lương Bằng', 'quangtm72@wru.vn', 'K60', 'SV', 'CNTT'),
('SV8', 'Hoàng Thị Thanh Phương', '26-09-2000', '38 Chùa Bộc', 'phuonghtt72@wru.vn', 'K60', 'SV', 'CNTT'),
('SV9', 'Dương Thanh Minh', '04-08-2000', '191 Trường Chinh', 'minhdt72@wru.vn', 'K60', 'SV', 'CNTT');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `taikhoan`
--

CREATE TABLE `taikhoan` (
  `matk` varchar(10) NOT NULL,
  `tentk` varchar(50) NOT NULL,
  `matkhau` varchar(50) NOT NULL,
  `quyen` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `taikhoan`
--

INSERT INTO `taikhoan` (`matk`, `tentk`, `matkhau`, `quyen`) VALUES
('GV', 'gv', '12345678', 'giang viên'),
('SV', 'sv', '12345678', 'sinh viên');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `congviec`
--
ALTER TABLE `congviec`
  ADD PRIMARY KEY (`magv`,`mamon`,`makhoa`),
  ADD KEY `makhoa` (`makhoa`),
  ADD KEY `mamon` (`mamon`);

--
-- Chỉ mục cho bảng `diem`
--
ALTER TABLE `diem`
  ADD PRIMARY KEY (`masv`,`mamon`),
  ADD KEY `mamon` (`mamon`),
  ADD KEY `magd` (`magd`);

--
-- Chỉ mục cho bảng `dssv`
--
ALTER TABLE `dssv`
  ADD PRIMARY KEY (`masv`,`malop`),
  ADD KEY `malop` (`malop`);

--
-- Chỉ mục cho bảng `giaidoan`
--
ALTER TABLE `giaidoan`
  ADD PRIMARY KEY (`magd`),
  ADD KEY `maky` (`maky`);

--
-- Chỉ mục cho bảng `giangvien`
--
ALTER TABLE `giangvien`
  ADD PRIMARY KEY (`magv`),
  ADD KEY `makhoa` (`makhoa`),
  ADD KEY `matk` (`matk`);

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
-- Chỉ mục cho bảng `ky`
--
ALTER TABLE `ky`
  ADD PRIMARY KEY (`maky`);

--
-- Chỉ mục cho bảng `lop`
--
ALTER TABLE `lop`
  ADD PRIMARY KEY (`malop`),
  ADD KEY `magv` (`magv`),
  ADD KEY `mamon` (`mamon`);

--
-- Chỉ mục cho bảng `mon`
--
ALTER TABLE `mon`
  ADD PRIMARY KEY (`mamon`),
  ADD KEY `manganh` (`manganh`);

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
  ADD KEY `matk` (`matk`),
  ADD KEY `makhoa` (`makhoa`);

--
-- Chỉ mục cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD PRIMARY KEY (`matk`);

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `congviec`
--
ALTER TABLE `congviec`
  ADD CONSTRAINT `congviec_ibfk_1` FOREIGN KEY (`magv`) REFERENCES `giangvien` (`magv`);

--
-- Các ràng buộc cho bảng `diem`
--
ALTER TABLE `diem`
  ADD CONSTRAINT `diem_ibfk_1` FOREIGN KEY (`masv`) REFERENCES `sinhvien` (`masv`),
  ADD CONSTRAINT `diem_ibfk_2` FOREIGN KEY (`mamon`) REFERENCES `mon` (`mamon`),
  ADD CONSTRAINT `diem_ibfk_3` FOREIGN KEY (`magd`) REFERENCES `giaidoan` (`magd`);

--
-- Các ràng buộc cho bảng `dssv`
--
ALTER TABLE `dssv`
  ADD CONSTRAINT `dssv_ibfk_1` FOREIGN KEY (`malop`) REFERENCES `lop` (`malop`),
  ADD CONSTRAINT `dssv_ibfk_2` FOREIGN KEY (`masv`) REFERENCES `sinhvien` (`masv`);

--
-- Các ràng buộc cho bảng `giaidoan`
--
ALTER TABLE `giaidoan`
  ADD CONSTRAINT `giaidoan_ibfk_1` FOREIGN KEY (`maky`) REFERENCES `ky` (`maky`);

--
-- Các ràng buộc cho bảng `giangvien`
--
ALTER TABLE `giangvien`
  ADD CONSTRAINT `giangvien_ibfk_1` FOREIGN KEY (`makhoa`) REFERENCES `khoa` (`makhoa`),
  ADD CONSTRAINT `giangvien_ibfk_2` FOREIGN KEY (`matk`) REFERENCES `taikhoan` (`matk`);

--
-- Các ràng buộc cho bảng `lop`
--
ALTER TABLE `lop`
  ADD CONSTRAINT `lop_ibfk_1` FOREIGN KEY (`magv`) REFERENCES `giangvien` (`magv`),
  ADD CONSTRAINT `lop_ibfk_2` FOREIGN KEY (`mamon`) REFERENCES `mon` (`mamon`);

--
-- Các ràng buộc cho bảng `mon`
--
ALTER TABLE `mon`
  ADD CONSTRAINT `mon_ibfk_1` FOREIGN KEY (`manganh`) REFERENCES `nganh` (`manganh`);

--
-- Các ràng buộc cho bảng `sinhvien`
--
ALTER TABLE `sinhvien`
  ADD CONSTRAINT `sinhvien_ibfk_1` FOREIGN KEY (`makhoahoc`) REFERENCES `khoahoc` (`makhoahoc`),
  ADD CONSTRAINT `sinhvien_ibfk_2` FOREIGN KEY (`matk`) REFERENCES `taikhoan` (`matk`),
  ADD CONSTRAINT `sinhvien_ibfk_3` FOREIGN KEY (`makhoa`) REFERENCES `khoa` (`makhoa`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
