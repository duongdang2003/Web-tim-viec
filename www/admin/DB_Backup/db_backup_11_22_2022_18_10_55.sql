DROP TABLE IF EXISTS Admin;

CREATE TABLE `Admin` (
  `TenDangNhap` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `matkhau` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ID_CongTy` int NOT NULL,
  PRIMARY KEY (`TenDangNhap`),
  KEY `ID_CongTy` (`ID_CongTy`),
  CONSTRAINT `Admin_ibfk_1` FOREIGN KEY (`ID_CongTy`) REFERENCES `CongTy` (`ID_CongTy`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO Admin VALUES("facebook","123456","4");
INSERT INTO Admin VALUES("fpt","123456","1");
INSERT INTO Admin VALUES("google","123456","3");
INSERT INTO Admin VALUES("vng","123456","2");


DROP TABLE IF EXISTS Client;

CREATE TABLE `Client` (
  `TenDangNhap` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `matkhau` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ID_user` int NOT NULL,
  PRIMARY KEY (`TenDangNhap`),
  KEY `ID_user` (`ID_user`),
  CONSTRAINT `Client_ibfk_1` FOREIGN KEY (`ID_user`) REFERENCES `NguoiTimViec` (`ID_user`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



DROP TABLE IF EXISTS CongTy;

CREATE TABLE `CongTy` (
  `ID_CongTy` int NOT NULL AUTO_INCREMENT,
  `TenCongTy` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ViTri` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `SDT` varchar(12) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `MXH` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mota` varchar(2000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `diem` int DEFAULT '0',
  `soluongdanhgia` int DEFAULT '0',
  `linkava` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`ID_CongTy`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO CongTy VALUES("1","FPT","Há»“ ChÃ­ Minh","0877964531","fpt@gmail.com","facebook.com/fpt","ÄÃ¢y lÃ  cÃ´ng ty fpt","0","0","linkava");
INSERT INTO CongTy VALUES("2","VNG","Há»“ ChÃ­ Minh","0562953108","vng@gmail.com","facbook.com/vng","ÄÃ¢y lÃ  cÃ´ng ty VNG","0","0","linkava");
INSERT INTO CongTy VALUES("3","Google","America","0562953108","google@gmail.com","facbook.com/google","ÄÃ¢y lÃ  cÃ´ng ty google","0","0","linkava");
INSERT INTO CongTy VALUES("4","facebook","America","0562953108","facebook@gmail.com","facbook.com/facebook","ÄÃ¢y lÃ  cÃ´ng ty facebook","0","0","linkava");


DROP TABLE IF EXISTS NguoiTimViec;

CREATE TABLE `NguoiTimViec` (
  `ID_user` int NOT NULL AUTO_INCREMENT,
  `HoTen` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `SDT` varchar(12) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `MXH` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `CV` int NOT NULL,
  `introduce` varchar(2000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `linkava` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`ID_user`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



DROP TABLE IF EXISTS PhanHoi;

CREATE TABLE `PhanHoi` (
  `STT` int NOT NULL AUTO_INCREMENT,
  `ketqua` int NOT NULL DEFAULT '-1',
  `ID_TuyenDung` int NOT NULL,
  `ID_user` int NOT NULL,
  `solanapply` int NOT NULL DEFAULT '0',
  PRIMARY KEY (`STT`),
  KEY `ID_user` (`ID_user`),
  KEY `ID_TuyenDung` (`ID_TuyenDung`),
  CONSTRAINT `PhanHoi_ibfk_1` FOREIGN KEY (`ID_user`) REFERENCES `NguoiTimViec` (`ID_user`),
  CONSTRAINT `PhanHoi_ibfk_2` FOREIGN KEY (`ID_TuyenDung`) REFERENCES `TuyenDung` (`ID_TuyenDung`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



DROP TABLE IF EXISTS TuyenDung;

CREATE TABLE `TuyenDung` (
  `ID_TuyenDung` int NOT NULL AUTO_INCREMENT,
  `mota` varchar(5000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `loaicongviec` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `luong` decimal(15,2) NOT NULL,
  `chucvu` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `linhvuc` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tencongviec` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ID_CongTy` int NOT NULL,
  PRIMARY KEY (`ID_TuyenDung`),
  KEY `ID_CongTy` (`ID_CongTy`),
  CONSTRAINT `TuyenDung_ibfk_1` FOREIGN KEY (`ID_CongTy`) REFERENCES `CongTy` (`ID_CongTy`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



