-- Active: 1666027514587@@127.0.0.1@3306@webtimviec
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";
CREATE DATABASE IF NOT EXISTS `WebTimViec` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE `WebTimViec`;

drop table if exists Client;
drop table if exists Admin;
drop table if exists PhanHoi;
drop table if exists TuyenDung;
drop table if exists NguoiTimViec;
drop table if exists CongTy;

create table NguoiTimViec(
	ID_user INT auto_increment NOT NULL,
	HoTen VARCHAR(30) not null,
	SDT varchar(12) NOT NULL,
	email varchar(50) NOT NULL,
	MXH varchar(50),
	CV INT NOT NULL,
	introduce VARCHAR(2000) not null,
	linkava varchar(200),
	PRIMARY KEY (ID_user)
);
create table CongTy(
	ID_CongTy int primary key auto_increment not null,
	TenCongTy VARCHAR(30) not null,
	ViTri VARCHAR(40) not null,
	SDT varchar(12) not null,
	email varchar(30) not null,
	MXH VARCHAR(50),
	mota VARCHAR(2000) not null,
	diem int default 0,
	soluongdanhgia int default 0,
	linkava varchar(200)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;;
create table Client(
	TenDangNhap varchar(50) primary key not null,
	matkhau varchar(30) not null,
	ID_user int not null,
	foreign key (ID_user) references NguoiTimViec(ID_user)
);
create table Admin(
	TenDangNhap varchar(50) primary key not null,
	matkhau varchar(30) not null,
	ID_CongTy int not null,
	foreign key (ID_CongTy) references CongTy(ID_CongTy)
);
create table TuyenDung(
	ID_TuyenDung int primary key auto_increment not null,
	mota VARCHAR(5000) not null,
	loaicongviec VARCHAR(30),
	luong Decimal(15, 2) not null,
	chucvu VARCHAR(50) not null,
	linhvuc VARCHAR(50) not null,
	tencongviec VARCHAR(50) not null,
	ID_CongTy int not null,
	foreign key (ID_CongTy) references CongTy(ID_CongTy)
);
create table PhanHoi(
	STT int primary key auto_increment not null,
	ketqua int not null default -1,
	ID_TuyenDung int not null,
	ID_user INT not null,
	solanapply int default 0 not null,
	foreign key (ID_user) references NguoiTimViec(ID_user),
	foreign key (ID_TuyenDung) references TuyenDung(ID_TuyenDung)
);
alter table NguoiTimViec auto_increment = 01;
alter table CongTy auto_increment = 01;
insert into CongTy(
		TenCongTy,
		ViTri,
		SDT,
		email,
		MXH,
		mota,
		linkava
	)
values("FPT","HCM","0877964531","fpt@gmail.com","facebook.com","Đây là công ty fpt","server/www/user/ava.png")