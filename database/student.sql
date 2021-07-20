-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th7 05, 2021 lúc 03:00 AM
-- Phiên bản máy phục vụ: 10.4.19-MariaDB
-- Phiên bản PHP: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `student`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `list`
--

CREATE TABLE `list` (
  `id` int(11) NOT NULL,
  `ten` varchar(30) NOT NULL,
  `lop` varchar(15) NOT NULL,
  `dia_chi` varchar(50) NOT NULL,
  `gioi_tinh` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `list`
--

INSERT INTO `list` (`id`, `ten`, `lop`, `dia_chi`, `gioi_tinh`) VALUES
(1, 'nguyen manh the', 'AT15D', 'ha noi', 'nam'),
(2, 'ngoc anh', 'AT15B', 'tokyo', 'nu'),
(6, 'nguyen van a', 'AT15A', 'ca mau', 'nam'),
(8, 'nguyen hung', 'AT15D', 'ha noi', 'nu'),
(10, 'ho nam hi', 'AT15C', 'new york', 'nam'),
(11, 'anh nguyen the', 'AT15D', 'ha tay', 'nu'),
(12, 'nguyen manh the', 'AT15D', 'ha noi', 'nam');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `list`
--
ALTER TABLE `list`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `list`
--
ALTER TABLE `list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
