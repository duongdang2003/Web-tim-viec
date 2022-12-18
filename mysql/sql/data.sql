SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";
CREATE DATABASE IF NOT EXISTS `WebTimViec` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `WebTimViec`;
drop table if exists CongViecDuocMoi;
drop table if exists LuuCT;
drop table if exists LuuNTV;
drop table if exists UngTuyen;
drop table if exists DangViec;
drop table if exists Client;
drop table if exists Admin;
drop table if exists NguoiTimViec;
drop table if exists CongTy;

create table NguoiTimViec(
	ID_user INT auto_increment NOT NULL,
	hoten VARCHAR(100) not null default "",
	linkava varchar(500) not null default "",
	congviec varchar(100) NOT NULL default "",
	ngaysinh date not null default "2000-01-01",
	gioitinh int(10) not null,
	loaicongviec int(10) not null,
	linhvuc varchar(100) not null default "",
	thanhpho varchar(20) not null default "",
	diachi varchar(50) not null default "",
	muctieunghenghiep varchar(1000) not null default "",
	hocvan varchar(500) not null default "",
	kinang varchar(400) not null default "",
	kinhnghiemlamviec varchar(1000) not null default "",
	chitiet varchar(200) not null default "",
	tagkinang varchar(200) not null default "",
	daxoa int(10) not null default 0,
	PRIMARY KEY (ID_user)
) ENGINE = InnoDB DEFAULT CHARSET = utf8 COLLATE = utf8_unicode_ci;
create table CongTy(
	ID_CongTy int primary key auto_increment not null,
	TenCongTy VARCHAR(50) not null default "",
	diachi VARCHAR(40) not null default "",
	website varchar(50) not null default "",
	motacongty varchar(2000) not null default "",
	linkava varchar(500) not null default "",
	linhvuc varchar(100) not null default "",
	thanhpho varchar(50) not null default "",
	phucloi varchar(2000) not null default "",
	daxoa int(10) not null default 0
) ENGINE = InnoDB DEFAULT CHARSET = utf8 COLLATE = utf8_unicode_ci;
create table Client(
	ID_user int not null,
	TenDangNhap varchar(50) not null,
	matkhau varchar(30) not null,
	sdt varchar(11) not null,
	email varchar(100) not null,
	primary key(TenDangNhap, email),
	foreign key (ID_user) references NguoiTimViec(ID_user)
);
create table Admin(
	ID_CongTy int not null,
	TenDangNhap varchar(50) not null,
	matkhau varchar(30) not null,
	sdt varchar(11) not null,
	email varchar(100) not null,
	primary key(TenDangNhap, email),
	foreign key (ID_CongTy) references CongTy(ID_CongTy)
);
create table DangViec(
	ID_BaiDang int primary key auto_increment not null,
	ID_CongTy int not null,
	tencongviec varchar(100) not null,
	linhvuc varchar(100) not null,
	chucvu varchar(100) not null,
	luong decimal(20) not null,
	loaicongviec int(10) not null,
	diachi varchar(150) not null,
	sdt varchar(11) not null,
	email varchar(150) not null,
	motacongviec varchar(2000) not null,
	tagkinang varchar(200) not null,
	thoihan date not null default "2023-06-06",
	yeucaucongviec varchar(5000) not null default "",
	yeucaubangcap varchar(100) not null default "",
	quyenloi varchar(5000) not null default "",
	soluongtuyendung int not null default "1",
	daxoa int(10) not null default 0,
	foreign key (ID_CongTy) references CongTy(ID_CongTy)
)ENGINE = InnoDB DEFAULT CHARSET = utf8 COLLATE = utf8_unicode_ci;
create table UngTuyen(
	maungtuyen int auto_increment not null,
	daduyet int not null,
	ID_BaiDang int not null,
	ID_user INT not null,
	daxoa int(10) not null default 0,
	primary key(maungtuyen),
	foreign key (ID_user) references NguoiTimViec(ID_user),
	foreign key (ID_BaiDang) references DangViec(ID_BaiDang)
)ENGINE = InnoDB DEFAULT CHARSET = utf8 COLLATE = utf8_unicode_ci;
create table CongViecDuocMoi(
	ID_user int not null,
	ID_CongTy int not null,
	daduyet int not null,
	foreign key (ID_user) references NguoiTimViec(ID_user),
	foreign key (ID_CongTy) references CongTy(ID_CongTy)
);
create table LuuNTV(
	ID_user int not null,
	ID_CongTy int not null,
	primary key(ID_user,ID_CongTy),
	foreign key (ID_user) references NguoiTimViec(ID_user),
	foreign key (ID_CongTy) references CongTy(ID_CongTy)
);
create table LuuCT(
	ID_user int not null,
	ID_CongTy int not null,
	ID_BaiDang int not null,
	primary key(ID_user,ID_CongTy,ID_BaiDang),
	foreign key (ID_user) references NguoiTimViec(ID_user),
	foreign key (ID_CongTy) references CongTy(ID_CongTy),
	foreign key (ID_BaiDang) references DangViec(ID_BaiDang)
);
-- alter 
alter table NguoiTimViec auto_increment = 01;
alter table CongTy auto_increment = 01;
alter table UngTuyen auto_increment = 01;
alter table DangViec auto_increment = 01;
-- end alter tự động tăng mã
-- insert dữ liệu mẫu
insert into CongTy(
		TenCongTy,
		diachi,
		website,
		motacongty,
		linkava,
		linhvuc,
		thanhpho
	)
values(
		"FPT",
		"Hồ Chí Minh",
		"fpt.com",
		"mo ta cong ty fpt",
		"../../../src/assets/Images/google.png",
		"cong nghe thong tin",
		"Hồ Chí Minh"
	),
	(
		"VNG",
		"Hồ Chí Minh",
		"vng.com",
		"mo ta cong ty vng",
		"../../../src/assets/Images/google.png",
		"cong nghe thong tin",
		"Đà Nẵng"
	),
	(
		"Google",
		"America",
		"google.com",
		"mo ta cong ty google",
		"../../../src/assets/Images/google.png",
		"cong nghe thong tin",
		"Quãng Nam"
	),
	(
		"facebook",
		"America",
		"facebook.com",
		"mo ta cong ty facebook",
		"../../../src/assets/Images/google.png",
		"cong nghe thong tin",
		"Nghệ An"
	),
	(
		"amazon",
		"SouthAmerica",
		"amazon.com",
		"mo ta cong ty",
		"../../../src/assets/Images/google.png",
		"ban hang",
		"america"
	),
	(
		"tencent",
		"America",
		"tencent.com",
		"mo ta cong ty tencent",
		"../../../src/assets/Images/google.png",
		"cong nghe thong tin",
		"Hồ Chí Minh"
	),
	(
		"topcv",
		"America",
		"topcv.com",
		"mo ta cong ty topcv",
		"../../../src/assets/Images/google.png",
		"cong nghe thong tin",
		"Hồ Chí Minh"
	),
	(
		"theanh28",
		"America",
		"theanh28.com",
		"mo ta cong ty theanh28",
		"../../../src/assets/Images/google.png",
		"cong nghe thong tin",
		"Hồ Chí Minh"
	),
	(
		"binance",
		"America",
		"binance.com",
		"mo ta cong ty binance",
		"../../../src/assets/Images/google.png",
		"cong nghe thong tin",
		"Hồ Chí Minh"
	),
	(
		"coccoc",
		"America",
		"coccoc.com",
		"mo ta cong ty coccoc",
		"../../../src/assets/Images/google.png",
		"cong nghe thong tin",
		"Hồ Chí Minh"
	);
insert into Admin(ID_CongTy, TenDangNhap, matkhau, email, sdt)
values(01, 'fpt', '123456', 'congty@gmail.com', '023648957'),
	(02, 'vng', '123456', 'congty@gmail.com', '023648957'),
	(
		03,
		'google',
		'123456',
		'congty1@gmail.com',
		'023648957'
	),
	(
		04,
		'facebook',
		'123456',
		'congty2@gmail.com',
		'023648957'
	),
	(
		05,
		'amazon',
		'123456',
		'congty3@gmail.com',
		'023648957'
	),
	(
		06,
		'tencent',
		'123456',
		'congty4@gmail.com',
		'023648957'
	),
	(
		07,
		'topcv',
		'123456',
		'congty5@gmail.com',
		'023648957'
	),
	(
		08,
		'theanh28',
		'123456',
		'congty6@gmail.com',
		'023648957'
	),
	(
		09,
		'binance',
		'123456',
		'congty7@gmail.com',
		'023648957'
	),
	(
		010,
		'coccoc',
		'123456',
		'congty8@gmail.com',
		'023648957'
	);
insert into NguoiTimViec(
		hoten,
		linkava,
		congviec,
		ngaysinh,
		gioitinh,
		loaicongviec,
		linhvuc,
		thanhpho,
		diachi,
		muctieunghenghiep,
		hocvan,
		kinang,
		kinhnghiemlamviec,
		chitiet,
		tagkinang
	)
values(
		"Phạm Duy Khoa",
		"../../../src/assets/Images/18-F.png",
		"lập trình viên",
		"2003-03-13",
		1,
		1,
		"công nghệ thông tin",
		"Hồ Chí Minh",
		"Quận 7",
		"backend",
		"tốt nghiệp đại học",
		"pet: 150, toeic: 650",
		"dưới 1 năm",
		"mycv.io",
		"php,js,html"
	),
	(
		"Dương Hải Đăng",
		"../../../src/assets/Images/18-F.png",
		"lập trình viên",
		"2004-01-01",
		1,
		1,
		"công nghệ thông tin",
		"Hồ Chí Minh",
		"Quận 6",
		"frontend",
		"tốt nghiệp đại học",
		"pet: 150, toeic: 650",
		"dưới 1 năm",
		"mycv.io",
		"php,js,html"
	),
	(
		"Nguyễn Hoàng Nhật Nam",
		"../../../src/assets/Images/18-F.png",
		"lập trình viên",
		"2002-01-01",
		1,
		1,
		"công nghệ thông tin",
		"Hồ Chí Minh",
		"Quận 8",
		"blockchain",
		"tốt nghiệp đại học",
		"pet: 150, toeic: 650",
		"dưới 1 năm",
		"mycv.io",
		"php,js,html"
	),
	(
		"Trần Phúc Thịnh",
		"../../../src/assets/Images/18-F.png",
		"lập trình viên",
		"2005-01-01",
		1,
		1,
		"công nghệ thông tin",
		"Hồ Chí Minh",
		"Quận 4",
		"web developer",
		"tốt nghiệp đại học",
		"pet: 150, toeic: 650",
		"dưới 1 năm",
		"mycv.io",
		"php,js,html"
	),
	(
		"Lê Hoàng Đức",
		"../../../src/assets/Images/18-F.png",
		"lập trình viên",
		"2001-01-01",
		1,
		1,
		"công nghệ thông tin",
		"Hồ Chí Minh",
		"Quận 1",
		"lập trình nhúng",
		"tốt nghiệp đại học",
		"pet: 150, toeic: 650",
		"dưới 1 năm",
		"mycv.io",
		"php,js,html"
	);
insert into Client(
		ID_user,
		TenDangNhap,
		matkhau,
		email,
		sdt
	)
values (
		01,
		"phamduykhoa",
		"123456",
		"nguoitimviec1@gmail.com",
		"035469827"
	),
	(
		02,
		"duonghaidang",
		"123456",
		"nguoitimviec2@gmail.com",
		"035469827"
	),
	(
		03,
		"nguyenhoangnhatnam",
		"123456",
		"nguoitimviec3@gmail.com",
		"035469827"
	),
	(
		04,
		"tranphucthinh",
		"123456",
		"nguoitimviec4@gmail.com",
		"035469827"
	),
	(
		05,
		"lehoangduc",
		"123456",
		"nguoitimviec5@gmail.com",
		"035469827"
	);
insert into DangViec(
	ID_CongTy,
	tencongviec,
	linhvuc,
	chucvu,
	luong,
	loaicongviec,
	diachi,
	sdt,
	email,
	motacongviec,
	tagkinang
)
values(01,'Lập trình BackEnd','Công Nghệ Thông Tin','nhân viên',10000000,1,'quận 7 HCM','0562854976','congty@gmail.com','công việc lập trình','php,html,js,java'),
	(02,'Lập trình FrontEnd','Công Nghệ Thông Tin','nhân viên',10000000,1,'quận 7 HCM','0562854976','congty@gmail.com','công việc lập trình','php,html,js,java'),
	(03,'Lập trình BlockChain','Công Nghệ Thông Tin','nhân viên',10000000,1,'quận 7 HCM','0562854976','congty@gmail.com','công việc lập trình','php,html,js,java'),
	(01,'Lập trình nhúng','Công Nghệ Thông Tin','nhân viên',10000000,1,'quận 7 HCM','0562854976','congty@gmail.com','công việc lập trình','php,html,js,java'),
	(03,'quản lí dự án','Công Nghệ Thông Tin','nhân viên',10000000,1,'quận 7 HCM','0562854976','congty@gmail.com','công việc lập trình','php,html,js,java'),
	(04,'tester','Công Nghệ Thông Tin','nhân viên',10000000,1,'quận 7 HCM','0562854976','congty@gmail.com','công việc lập trình','php,html,js,java')
;

insert into UngTuyen(
	daduyet,
	ID_BaiDang,
	ID_user
)
values(-1,01,01),
	  (1,02,01),
	  (0,03,01);

insert into LuuNTV()
values(01,02),
	(01,03),
	(02,01),
	(03,02);

insert into LuuCT()
values(01,02,02),
	(01,03,05),
	(02,01,01),
	(03,02,02);

insert into CongViecDuocMoi
values(01,02,-1),
	(02,01,0),
	(01,03,1);