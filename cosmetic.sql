-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th7 17, 2023 lúc 08:32 AM
-- Phiên bản máy phục vụ: 10.4.28-MariaDB
-- Phiên bản PHP: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `cosmetic`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admin`
--

CREATE TABLE `admin` (
  `Username` varchar(30) NOT NULL,
  `Password` varchar(30) DEFAULT NULL,
  `Role` tinyint(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `admin`
--

INSERT INTO `admin` (`Username`, `Password`, `Role`) VALUES
('c', '123', 0),
('quyet', '1', 2),
('user2', '123', 2),
('user3', '123', 2),
('user4', '123', 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bill`
--

CREATE TABLE `bill` (
  `Id` int(11) NOT NULL,
  `IDCus` int(11) DEFAULT NULL,
  `Date` date DEFAULT NULL,
  `IdStatus` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `bill`
--

INSERT INTO `bill` (`Id`, `IDCus`, `Date`, `IdStatus`) VALUES
(117, 1, '2023-07-15', 2),
(118, 1, '2023-07-16', 1),
(119, 1, '2023-07-17', 1),
(120, 1, '2023-07-17', 1),
(121, 1, '2023-07-17', 1),
(122, 1, '2023-07-17', 1),
(123, 1, '2023-07-17', 1),
(124, 1, '2023-07-17', 1),
(125, 1, '2023-07-17', 1),
(126, 1, '2023-07-17', 1),
(127, 1, '2023-07-17', 1),
(128, 1, '2023-07-17', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `catalog`
--

CREATE TABLE `catalog` (
  `Id` int(11) NOT NULL,
  `Name` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `catalog`
--

INSERT INTO `catalog` (`Id`, `Name`) VALUES
(1, 'Perfume'),
(2, 'Serum'),
(3, 'Mask'),
(4, 'Lipstick'),
(5, 'Cleanser'),
(6, 'Moisturizer'),
(7, 'Toner'),
(8, 'Cushion'),
(9, 'Foundation');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `customer`
--

CREATE TABLE `customer` (
  `Id` int(11) NOT NULL,
  `Username` varchar(30) DEFAULT NULL,
  `Password` varchar(30) DEFAULT NULL,
  `Name` varchar(30) DEFAULT NULL,
  `Mobile` varchar(15) DEFAULT NULL,
  `Address` varchar(150) DEFAULT NULL,
  `IsActive` tinyint(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `customer`
--

INSERT INTO `customer` (`Id`, `Username`, `Password`, `Name`, `Mobile`, `Address`, `IsActive`) VALUES
(1, 'b', '123', 'B', '055695566', 'Htinh', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `detailbill`
--

CREATE TABLE `detailbill` (
  `Id` int(11) NOT NULL,
  `IdBill` int(11) DEFAULT NULL,
  `IdPro` int(11) DEFAULT NULL,
  `Name` varchar(30) DEFAULT NULL,
  `Quantity` int(11) DEFAULT NULL,
  `Price` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `detailbill`
--

INSERT INTO `detailbill` (`Id`, `IdBill`, `IdPro`, `Name`, `Quantity`, `Price`) VALUES
(170, 117, 2, 'Gucci', 2, 2400000),
(171, 118, 5, 'B5', 1, 350),
(172, 118, 150, 'Derma', 1, 260),
(173, 118, 151, 'Hyalu', 1, 360),
(174, 119, 14, 'Murad', 1, 600),
(175, 120, 3, 'Versace Eros', 1, 2500000),
(176, 121, 2, 'Gucci', 1, 2500000),
(177, 122, 2, 'Gucci', 1, 2500000),
(178, 123, 2, 'Gucci', 1, 2500000),
(179, 124, 144, 'Dior', 1, 800),
(180, 125, 3, 'Versace Eros', 1, 2500000),
(181, 126, 3, 'Versace Eros', 1, 2500000),
(182, 127, 4, 'Narciso', 1, 2000000),
(183, 128, 2, 'Gucci', 1, 2500000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product`
--

CREATE TABLE `product` (
  `Id` int(11) NOT NULL,
  `Name` varchar(30) DEFAULT NULL,
  `Image` varchar(50) DEFAULT NULL,
  `Price` float DEFAULT NULL,
  `Description` text DEFAULT NULL,
  `IdCata` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `product`
--

INSERT INTO `product` (`Id`, `Name`, `Image`, `Price`, `Description`, `IdCata`) VALUES
(1, 'Chanel', 'Chanel.jpg', 2200000, 'Chanel Coco Mademoiselle womens perfume of Myan Shop is hand-carried from the US, authentic perfume standard, lasts all day, sweet scent of flowers', 1),
(2, 'Gucci', 'Gucci.jpg', 2500000, 'Is a cool breeze of spring, full of life. Gucci Bloom is like a small flower that is slowly blooming, filling the middle of a white flower garden...', 1),
(3, 'Versace Eros', 'Versace Eros.jpg', 2500000, 'Versace Eros Parfum Mens Perfume is still Eros 100ML, but stronger, more attractive and has a better scent as an affirmation of style for men....', 1),
(4, 'Narciso', 'Narciso.jpg', 2000000, 'Young and very modern, the first product of Narciso Rodriguez - Cuban-American - when launched, became a Top hit right in the US market. With a seductive fragrance, suitable for the freshness, dynamism and modernity of todays women. The advantage of the product is the attractive scent and full of charm', 1),
(5, 'B5', 'B5.jpg', 350, 'GoodnDoc Hydra B5 Serum is a skin care serum from the Korean brand GoodnDoc, containing Pro-Vitamin B5 ingredients combined with Hyaluronic Acid, Adenosine and Niacinamide to help intensively moisturize and support the recovery of damaged skin. injury, irritation', 2),
(6, 'La Roche-Posay', 'La.jpg', 380, 'La Roche-Posay Regenerating & Restoring Serum 30ml\nHyalu B5 Serum', 2),
(7, 'Ohui', 'Ohui.jpg', 35, 'OHUI Extreme White 3D Black Mask for skin whitening 6x27g. Suitable for all skin types', 3),
(8, 'Collagen', 'Collagen.jpg', 40, 'Mediheal Collagen Impact Essential Mask EX', 3),
(9, 'Innisfree', 'Innisfree.jpg', 21, 'The mask is extracted from roses, which helps to provide moisture to the skin to make the skin smooth and silky. Especially the mask specializes in tightening the skin against the aging of the skin.', 3),
(10, 'Dior', 'Dior.jpg', 800, 'Rouge Dior Refillable Lipstick is an iconic, premium, long-wearing, nourishing lipstick', 4),
(11, '3CE', '3CE.jpg', 650, '3CE lipstick with ideal matte lipstick, no powder, no cracks and no heavy...', 4),
(12, 'Cetaphil', 'Cetaphi.jpg', 250, 'Scientifically gentle formula is dermatologist-researched for sensitive skin. Clinically proven safe and benign for sensitive skin. Not contain paraben. Does not contain oxybenzone. Do not irritate the skin. Soap-free', 5),
(13, 'Kiehls', 'Kiehls.jpg', 590, 'Foaming cleanser for oily and normal skin helps to remove dirt, excess oil and impurities stuck deep in the pores with. The texture is thin and light and creates...', 5),
(14, 'Murad', 'Murad.jpg', 600, 'Murad Hydration. Buy now · HYDRATION - Hydrating gel rich in nutrients...', 6),
(15, 'Paula', 'Paula.jpg', 780, 'Paulas Choice Niacinamide Moisturizer Regulates Oily Skin', 6),
(16, 'Clinique', 'Clinique.jpg', 830, 'Lotion Dưỡng Ẩm Clinique Dramatically Different Moisturizing Lotion+ 50ml\n', 6),
(17, 'Mamonde', 'Mamonde.jpg', 410, 'Mamonde Rose Water Toner Korean Alcohol Free', 7),
(18, 'Seimy', 'Seimy.jpg', 380, 'The product has been carefully researched and tested by leading experts in the cosmetic industry to select high-quality active ingredients suitable for Asian skin', 8),
(19, 'CChoi', 'Choi.jpg', 390, 'TCChoi Herbal DD Cushion 15g 21 - Bright tone – CChoi Green Cosmetics', 8),
(20, 'Clio', 'Clio.jpg', 600, 'Clio Veganwear Hyaluronic Serum Cushion SPF45 PA++ (Complimentary) Clio Veganwear Hyaluronic Serum Hydrating Powder', 8),
(21, 'Nars', 'Nars.jpg', 615, 'We are sure that if you ask any self-proclaimed beauty fiend to name their most coveted complexion products, chances are, NARS are high up on the list', 9),
(22, 'Mac', 'Mac.jpg', 625, 'MAC Studio Fix Fluid Foundation with SPF 15 | 63 Shades Including NC20, NC40 & NW60 | MAC Cosmetics - Official Site', 9),
(23, 'Parnell', 'Parnell.jpg', 650, 'New Zealand natural ingredients gently moisturize and soothe the skin', 7),
(137, 'Vichy', 'kda.jpg', 720, 'Vichy gives skin plump, moist for up to 48 hours based on Isotonic mechanism. With 97% ingredients made from nature, Vichy Aqualia Thermal Rehydrating Cream-Light is gentle..', 6),
(138, 'Vichy', 'v2.jpg', 250, 'Vichy gives skin plump, moist for up to 48 hours based on Isotonic mechanism. With 97% ingredients made from nature, Vichy Aqualia Thermal Rehydrating Cream-Light is gentle..', 6),
(139, 'Vichy', 'v5.jpg', 250, 'Vichy gives skin plump, moist for up to 48 hours based on Isotonic mechanism. With 97% ingredients made from nature, Vichy Aqualia Thermal Rehydrating Cream-Light is gentle..', 6),
(140, 'Vichy', 'v6.jpg', 250, 'Vichy gives skin plump, moist for up to 48 hours based on Isotonic mechanism. With 97% ingredients made from nature, Vichy Aqualia Thermal Rehydrating Cream-Light is gentle..', 6),
(142, 'Gucci', 'g2.jpg', 2500000, 'GUCCI BLOOM EDP Inspired by the white flower garden in the countryside of Italy, the scent has only one single layer of incense with ingredients: Su...', 1),
(143, 'Gucci', 'g3.jpg', 2500000, 'GUCCI BLOOM EDP Inspired by the white flower garden in the countryside of Italy, the scent has only one single layer of incense with ingredients: Su...', 1),
(144, 'Dior', 'd1.jpg', 800, 'Rouge Dior Refillable Lipstick is an iconic, premium, long-wearing, nourishing lipstick', 4),
(145, 'Dior', 'd2.jpg', 800, 'Rouge Dior Refillable Lipstick is an iconic, premium, long-wearing, nourishing lipstick', 4),
(146, 'Dior', 'd3.jpg', 800, 'Rouge Dior Refillable Lipstick is an iconic, premium, long-wearing, nourishing lipstick', 4),
(147, 'Dior', 'd6.jpg', 800, 'Rouge Dior Refillable Lipstick is an iconic, premium, long-wearing, nourishing lipstick', 4),
(148, 'Moisturizing', 'm.jpg', 30, 'MartiDerm The Originals Moisturizing Mask is an intensive moisturizing mask for dry, dehydrated skin, with ingredients Hyaluronic Acid and Coenzyme Q10, which helps to...', 3),
(149, 'DB', 'a.jpg', 625, 'Love your skin at any age with Skin Renew Ceramide Foundation; DB’s game-changing foundation infused with the ‘mortar’ of skin structure – Ceramides.,', 9),
(150, 'Derma', 'e.jpg', 260, 'The Derma Co Creamy Cleanser for Sensitive Skin - Price in India, Buy The Derma Co Creamy Cleanser for Sensitive Skin Online In India, Reviews,..', 5),
(151, 'Hyalu', 'r.jpg', 360, 'Hyalu B5 Serum is a specialized serum line of La Roche-Posay brand, with Hyaluronic Acid Duo active ingredient to help intensively moisturize, smooth skin..', 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `status`
--

CREATE TABLE `status` (
  `ID` int(11) NOT NULL,
  `Name` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `status`
--

INSERT INTO `status` (`ID`, `Name`) VALUES
(1, 'Chưa xử lý'),
(2, 'Đã xử lý');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`Username`);

--
-- Chỉ mục cho bảng `bill`
--
ALTER TABLE `bill`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `IDCus` (`IDCus`),
  ADD KEY `IdStatus` (`IdStatus`);

--
-- Chỉ mục cho bảng `catalog`
--
ALTER TABLE `catalog`
  ADD PRIMARY KEY (`Id`);

--
-- Chỉ mục cho bảng `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`Id`);

--
-- Chỉ mục cho bảng `detailbill`
--
ALTER TABLE `detailbill`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `IdBill` (`IdBill`),
  ADD KEY `IdPro` (`IdPro`);

--
-- Chỉ mục cho bảng `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `IdCata` (`IdCata`);

--
-- Chỉ mục cho bảng `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `bill`
--
ALTER TABLE `bill`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=129;

--
-- AUTO_INCREMENT cho bảng `catalog`
--
ALTER TABLE `catalog`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `customer`
--
ALTER TABLE `customer`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT cho bảng `detailbill`
--
ALTER TABLE `detailbill`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=184;

--
-- AUTO_INCREMENT cho bảng `product`
--
ALTER TABLE `product`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=152;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `bill`
--
ALTER TABLE `bill`
  ADD CONSTRAINT `bill_ibfk_1` FOREIGN KEY (`IDCus`) REFERENCES `customer` (`Id`),
  ADD CONSTRAINT `bill_ibfk_2` FOREIGN KEY (`IdStatus`) REFERENCES `status` (`ID`);

--
-- Các ràng buộc cho bảng `detailbill`
--
ALTER TABLE `detailbill`
  ADD CONSTRAINT `detailbill_ibfk_1` FOREIGN KEY (`IdBill`) REFERENCES `bill` (`Id`),
  ADD CONSTRAINT `detailbill_ibfk_2` FOREIGN KEY (`IdPro`) REFERENCES `product` (`Id`);

--
-- Các ràng buộc cho bảng `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`IdCata`) REFERENCES `catalog` (`Id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
