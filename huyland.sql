-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th2 06, 2021 lúc 02:05 AM
-- Phiên bản máy phục vụ: 10.4.14-MariaDB
-- Phiên bản PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `huyland`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `email` int(11) NOT NULL,
  `matkhau` int(11) NOT NULL,
  `trangthai` bit(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `dat`
--

CREATE TABLE `dat` (
  `id` int(11) NOT NULL,
  `tendat` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `hinhanh` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `thanhpho` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `diadiem` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `gia` float NOT NULL,
  `dientich` float NOT NULL,
  `mota` text COLLATE utf8_unicode_ci NOT NULL,
  `thongtin` text COLLATE utf8_unicode_ci NOT NULL,
  `nguoiban` text COLLATE utf8_unicode_ci NOT NULL,
  `sdt` varchar(12) COLLATE utf8_unicode_ci NOT NULL,
  `hot` int(11) NOT NULL,
  `thoigian` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `loai` int(11) NOT NULL,
  `idloai` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `dat`
--

INSERT INTO `dat` (`id`, `tendat`, `hinhanh`, `thanhpho`, `diadiem`, `gia`, `dientich`, `mota`, `thongtin`, `nguoiban`, `sdt`, `hot`, `thoigian`, `loai`, `idloai`) VALUES
(1, 'SỞ HỮU CĂN HỘ BCONS PLAZA DĨ AN CÓ TÀI CHÍNH 500 TRIỆU, CHỈ TỪ 1,45TỶ/CĂN 2PN 2WC. CHIẾT KHẤU 7,6%', 'dat1_1.jpg,dat1_2.jpg,dat1_3.jpg,dat1_4.jpg,dat1_5.jpg,dat1_6.jpg,dat1_7.jpg,dat1_8.jpg', 'Bình Dương', 'Đường Thống Nhất, Phường Đông Hòa, Dĩ An, Bình Dương', 2, 51.33, 'Căn hộ Bcons Plaza Dĩ An.\r\n+ Chỉ từ 1,45 tỷ/căn 2PN 2WC - với mức tài chính có 500 triệu là có thể sở hữu ngay.\r\n+ Thanh toán trước chỉ 10% ký hợp đồng.\r\n+ Tháng 3/2021 ký HĐMB 30% đến nhận nhà mới thanh toán tiếp.\r\n+ Ngân hàng hỗ trợ vay 70% - ân hạn gốc 24 tháng - lãi 18 tháng đến nhận nhà.\r\n- Ưu đãi 7.6% (40% giá trị HĐ chưa VAT).\r\n- Ưu đãi thêm cho khách hàng có tiền nhàn rỗi 11%/năm/số ngày vượt (40% giá trị HĐ chưa VAT).\r\n- Cuối 2022 giao nhà - sổ hồng vĩnh viễn, sổ riêng từng căn.', 'Tổng quan dự án.\r\nTên dự án: Bcons Plaza.\r\nVị trí: Mặt tiền đường Thống Nhất, P. Đông Hòa, thành phố Dĩ An, Bình Dương - liền kề thành phố Thủ Đức.\r\n+ Diện tích dự án: 9.520 m2 - mật độ xây dựng: 36,9%.\r\n+ Quy mô: 4 block, cao 28 tầng + 2 tầng hầm.\r\n+ Tổng số căn hộ: 1.285 căn bao gồm 1.258 căn hộ + 27 shophouse.\r\nƯu điểm vượt trội của dự án:\r\n+ Hơn 18 tiện ích nội khu phục vụ nhu cầu hàng ngày thiết yếu cho cư dân.\r\n+ Cách thành phố Thủ Đức - HCM: 1.5 km.\r\n+ Big C Dĩ An 1 km.\r\n+ Trung tâm hành chính TP. Dĩ An 2km, ga Bình Chiểu: 3 km.\r\n+ Khu du lịch Suối Tiên, khu công nghệ cao TP. HCM: 3 km.\r\n+ Trung tâm TP. HCM - Sân bay TSN 25 phút.\r\n+ Ngã ba Vũng Tàu: 10km.', 'Nguyễn Văn A - Liên hệ người quản trị để biết thêm thông tin', '123456789', 0, '2021-02-04 18:30:00', 0, 1),
(2, 'LỘC VÀNG KHI MUA TỪ CĐT, CẬP NHẬT THÔNG TIN THỊ TRƯỜNG CHUẨN NHẤT', 'dat2_1.jpg,dat2_3.jpg,dat2_3.jpg,dat2_4.jpg,dat2_5.jpg,dat2_6.jpg', 'Hồ Chí Minh', 'Đường 3/2, Phường 12, Quận 10, Hồ Chí Minh', 4.6, 61, 'Căn hộ 1PN giá 4.3 tỷ - diện tích 53 m2.\r\nCăn hộ 1PN + giá 4.6-5 tỷ, diện tích 61 m2.\r\nĐược tặng 02 năm phí quản lý.\r\nCó nhiều căn hộ ở nhiều tầng; nhiều góc; nhiều view để khách hàng lựa chọn.\r\nKH được ký hợp đồng trực tiếp (không quan chuyển nhượng), nhận người nước ngoài; dự án đang trong giai đoạn làm sổ hồng.\r\nNhà mới 100%, bàn giao nội thất cơ bản, thiết bị WC cao cấp.', 'Hado Centrosa nổi bật nhất với hệ thống tiện ích đầy đủ: Nhà hàng, siêu thị, cafe, hồ bơi, xông hơi, thư viện, gym - yoga... Đều đã đi vào hoạt động.\r\nĐặc biệt có 03 cụm hồ bơi tràn, chuẩn quốc tế; nhiều cảnh quan cây xanh và công viên vui chơi cho trẻ em.', 'Đỗ Văn Long - Liên hệ người quản trị để biết thêm chi tiết', '0984320151', 1, '2021-02-04 18:22:24', 0, 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `lienhe`
--

CREATE TABLE `lienhe` (
  `id` int(11) NOT NULL,
  `email` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `noidung` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loaidat`
--

CREATE TABLE `loaidat` (
  `id` int(11) NOT NULL,
  `tenloai` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `trangthai` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `loaidat`
--

INSERT INTO `loaidat` (`id`, `tenloai`, `trangthai`) VALUES
(1, 'chung cư', 1),
(2, 'nhà riêng', 1),
(3, 'phòng trọ', 1),
(4, 'văn phong', 1),
(5, 'kho, xưởng', 1),
(6, 'bất động sản khác', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tintuc`
--

CREATE TABLE `tintuc` (
  `id` int(11) NOT NULL,
  `hinhanh` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `ten` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `noidung` text COLLATE utf8_unicode_ci NOT NULL,
  `ngaydang` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `luotxem` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `dat`
--
ALTER TABLE `dat`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `lienhe`
--
ALTER TABLE `lienhe`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `loaidat`
--
ALTER TABLE `loaidat`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tintuc`
--
ALTER TABLE `tintuc`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `dat`
--
ALTER TABLE `dat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `lienhe`
--
ALTER TABLE `lienhe`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `loaidat`
--
ALTER TABLE `loaidat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `tintuc`
--
ALTER TABLE `tintuc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
