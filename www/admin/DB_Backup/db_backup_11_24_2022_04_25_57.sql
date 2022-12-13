DROP TABLE IF EXISTS Admin;

CREATE TABLE `Admin` (
  `TenDangNhap` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `matkhau` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sdt` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ID_CongTy` int NOT NULL,
  PRIMARY KEY (`TenDangNhap`,`email`),
  KEY `ID_CongTy` (`ID_CongTy`),
  CONSTRAINT `Admin_ibfk_1` FOREIGN KEY (`ID_CongTy`) REFERENCES `CongTy` (`ID_CongTy`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO Admin VALUES("facebook","123456","023648957","congty@gmail.com","4");
INSERT INTO Admin VALUES("fpt","123456","023648957","congty@gmail.com","1");
INSERT INTO Admin VALUES("google","123456","023648957","congty@gmail.com","3");
INSERT INTO Admin VALUES("vng","123456","023648957","congty@gmail.com","2");


DROP TABLE IF EXISTS Client;

CREATE TABLE `Client` (
  `TenDangNhap` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `matkhau` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sdt` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ID_user` int NOT NULL,
  PRIMARY KEY (`TenDangNhap`,`email`),
  KEY `ID_user` (`ID_user`),
  CONSTRAINT `Client_ibfk_1` FOREIGN KEY (`ID_user`) REFERENCES `NguoiTimViec` (`ID_user`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



DROP TABLE IF EXISTS CongTy;

CREATE TABLE `CongTy` (
  `ID_CongTy` int NOT NULL AUTO_INCREMENT,
  `TenCongTy` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `diachi` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `website` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `motacongty` varchar(2000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `linkava` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `linhvuc` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `thanhpho` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`ID_CongTy`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO CongTy VALUES("1","FPT","Há»“ ChÃ­ Minh","fpt.com","mo ta cong ty fpt","linkava","cong nghe thong tin","Ho Chi Minh");
INSERT INTO CongTy VALUES("2","VNG","Há»“ ChÃ­ Minh","vng.com","mo ta cong ty vng","linkava","cong nghe thong tin","Ho Chi Minh");
INSERT INTO CongTy VALUES("3","Google","America","google.com","mo ta cong ty google","linkava","cong nghe thong tin","Ho Chi Minh");
INSERT INTO CongTy VALUES("4","facebook","America","facebook.com","mo ta cong ty facebook","linkava","cong nghe thong tin","Ho Chi Minh");
INSERT INTO CongTy VALUES("5","amazon","SouthAmerica","amazon.com","mo ta cong ty","linkava","ban hang","america");
INSERT INTO CongTy VALUES("6","tencen","America","tencen.com","mo ta cong ty tencen","linkava","cong nghe thong tin","Ho Chi Minh");
INSERT INTO CongTy VALUES("7","topcv","America","topcv.com","mo ta cong ty topcv","linkava","cong nghe thong tin","Ho Chi Minh");
INSERT INTO CongTy VALUES("8","theanh28","America","theanh28.com","mo ta cong ty theanh28","linkava","cong nghe thong tin","Ho Chi Minh");
INSERT INTO CongTy VALUES("9","binance","America","binance.com","mo ta cong ty binance","linkava","cong nghe thong tin","Ho Chi Minh");
INSERT INTO CongTy VALUES("10","coccoc","America","coccoc.com","mo ta cong ty coccoc","linkava","cong nghe thong tin","Ho Chi Minh");


DROP TABLE IF EXISTS CongViecDuocMoi;

CREATE TABLE `CongViecDuocMoi` (
  `ID_user` int NOT NULL,
  `ID_CongTy` int NOT NULL,
  `daduyet` int NOT NULL,
  KEY `ID_user` (`ID_user`),
  KEY `ID_CongTy` (`ID_CongTy`),
  CONSTRAINT `CongViecDuocMoi_ibfk_1` FOREIGN KEY (`ID_user`) REFERENCES `NguoiTimViec` (`ID_user`),
  CONSTRAINT `CongViecDuocMoi_ibfk_2` FOREIGN KEY (`ID_CongTy`) REFERENCES `CongTy` (`ID_CongTy`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



DROP TABLE IF EXISTS DangViec;

CREATE TABLE `DangViec` (
  `ID_BaiDang` int NOT NULL AUTO_INCREMENT,
  `tencongviec` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `linhvuc` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `chucvu` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `luong` decimal(10,0) NOT NULL,
  `loaicongviec` int NOT NULL,
  `diachi` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sdt` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `motacongviec` varchar(2000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tagkinang` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ID_CongTy` int NOT NULL,
  PRIMARY KEY (`ID_BaiDang`),
  KEY `ID_CongTy` (`ID_CongTy`),
  CONSTRAINT `DangViec_ibfk_1` FOREIGN KEY (`ID_CongTy`) REFERENCES `CongTy` (`ID_CongTy`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



DROP TABLE IF EXISTS LuuCT;

CREATE TABLE `LuuCT` (
  `ID_user` int NOT NULL,
  `ID_CongTy` int NOT NULL,
  KEY `ID_user` (`ID_user`),
  KEY `ID_CongTy` (`ID_CongTy`),
  CONSTRAINT `LuuCT_ibfk_1` FOREIGN KEY (`ID_user`) REFERENCES `NguoiTimViec` (`ID_user`),
  CONSTRAINT `LuuCT_ibfk_2` FOREIGN KEY (`ID_CongTy`) REFERENCES `CongTy` (`ID_CongTy`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



DROP TABLE IF EXISTS LuuNTV;

CREATE TABLE `LuuNTV` (
  `ID_user` int NOT NULL,
  `ID_CongTy` int NOT NULL,
  KEY `ID_user` (`ID_user`),
  KEY `ID_CongTy` (`ID_CongTy`),
  CONSTRAINT `LuuNTV_ibfk_1` FOREIGN KEY (`ID_user`) REFERENCES `NguoiTimViec` (`ID_user`),
  CONSTRAINT `LuuNTV_ibfk_2` FOREIGN KEY (`ID_CongTy`) REFERENCES `CongTy` (`ID_CongTy`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



DROP TABLE IF EXISTS NguoiTimViec;

CREATE TABLE `NguoiTimViec` (
  `ID_user` int NOT NULL AUTO_INCREMENT,
  `hoten` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `linkava` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `congviec` varchar(12) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ngaysinh` date NOT NULL,
  `gioitinh` int NOT NULL,
  `loaicongviec` int NOT NULL,
  `linhvuc` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `thanhpho` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `diachi` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `muctieunghenghiep` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hocvan` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kinang` varchar(400) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kinhnghiemlamviec` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `chitiet` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tagkinang` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`ID_user`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



DROP TABLE IF EXISTS UngTuyen;

CREATE TABLE `UngTuyen` (
  `maungtuyen` int NOT NULL AUTO_INCREMENT,
  `daduyet` int NOT NULL,
  `ID_BaiDang` int NOT NULL,
  `ID_user` int NOT NULL,
  PRIMARY KEY (`maungtuyen`),
  KEY `ID_user` (`ID_user`),
  KEY `ID_BaiDang` (`ID_BaiDang`),
  CONSTRAINT `UngTuyen_ibfk_1` FOREIGN KEY (`ID_user`) REFERENCES `NguoiTimViec` (`ID_user`),
  CONSTRAINT `UngTuyen_ibfk_2` FOREIGN KEY (`ID_BaiDang`) REFERENCES `DangViec` (`ID_BaiDang`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



