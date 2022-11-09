-- Active: 1666027514587@@127.0.0.1@3306@webtimviec
CREATE DATABASE IF NOT EXISTS `WebTimViec` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `WebTimViec`;
create table NguoiTimViec(
	ID_user INT auto_increment NOT NULL,
	HoTen nvarchar(30) NOT NULL,
	SDT varchar(12) NOT NULL,
	email varchar(50) NOT NULL,
	MXH varchar(50) ,
	CV INT NOT NULL,
	introduce nvarchar(2000) NOT NULL,
	PRIMARY KEY (ID_user)
);
create table CongTy(
	ID_CongTy int primary key auto_increment not null,
	TenCongTy nvarchar(30) not null, 
	ViTri nvarchar(40) not null,
	SDT varchar(12) not null,
	email varchar(30) not null,
	MXH nvarchar(50) ,
	mota nvarchar(2000) not null,
	diem int default 0,
	soluongdanhgia int default 0
);
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
	mota nvarchar(1000) not null,
	loaicongviec nvarchar(20) not null,
	luong decimal(15,2) not null,
	chucvu nvarchar(40) not null,
	quyenloi nvarchar(50),
	linhvuc nvarchar(30) not null,
	yeucaukinang nvarchar(100) ,
	yeucaucapbac nvarchar(50) ,
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
