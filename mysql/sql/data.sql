-- Active: 1666027514587@@127.0.0.1@3306@webtimviec
CREATE DATABASE IF NOT EXISTS `WebTimViec` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `WebTimViec`;

create table NguoiTimViec(
	id int primary key auto_increment not null,
	userName nvarchar(30) not null,
	loginName varchar(100) not null,
	password varchar(100) not null,
	mail varchar(50),
	soluongbaidang int
);
create table BaiTimViec(
	idbaitimviec varchar(10) primary key not null,
	ngaydang date,
	tenbaiviet nvarchar(100),
	id int not null,
	foreign key(id) references NguoiTimViec(id)
);
create table GoiyVieclam(
	nganhnghe nvarchar(50),
	kinang nvarchar(100),
	kinhnghiem nvarchar(100),
	trinhdochuyenmon nvarchar(100),
	trinhdotienganh nvarchar(20),
	hovaten nvarchar(30),
	namsinh date,
	gioitinh tinyint,
	quequan nvarchar(20),
	congviec nvarchar(30),
	mucluong decimal(15,2),
	diadiemlamviec nvarchar(50),
	lamviectainuocngoai nvarchar(20),
	aboutyou nvarchar(2000),
	mongmuon nvarchar(1000),
	id int not null,
	idbaitimviec varchar(10),
	foreign key(id) references NguoiTimViec(id),
	foreign key(idbaitimviec) references BaiTimViec(idbaitimviec)
);
create table NhaTuyenDung(
	mantd varchar(10) primary key not null,
	tenntd nvarchar(30) not null,
	soluongbaidang int
);
create table in4NTD(
	diachi nvarchar(35) not null,
	linhvuc nvarchar(30) not null,
	mantd varchar(10),
	foreign key(mantd) references NhaTuyenDung(mantd)
);
create table BaiTuyenDung(
	idbaituyendung varchar(10) primary key not null,
	ngaydang date,
	tenbai nvarchar(50),
	mantd varchar(10),
	foreign key(mantd) references NhaTuyenDung(mantd)
);
create table TimViec(
	id int not null,
	mantd varchar(10) not null,
	foreign key(id) references NguoiTimViec(id),
	foreign key(mantd) references NhaTuyenDung(mantd),
	primary key(id,mantd)
);

insert into NguoiTimViec(id,username,loginName,password,mail,soluongbaidang)
values(01,'khoa','phamduykhoa','duykhoa1303','pham.duykhoa1303@gmail.com',2),
	(02,'dang','duongdang','dang123456','Dang@gmail.com',3),
	(03,'Nam','nhatnam','nam123','Nam@gmail.com',0),
	(04,'hien','thuhien','hien777','hien@gmail.com',4);
