<?php 

    class Model_Register{
        public function check_user($taikhoan, $email){
            require("../connection.php");
            $sql = $conn->query("SELECT * FROM Client where TenDangNhap = '".$taikhoan."' or email = '".$email."';");
            $res = mysqli_num_rows($sql);
		    return $res;
        }
        public function check_admin($taikhoan, $email){
            require("../connection.php");
            $sql = $conn->query("SELECT * FROM Admin where TenDangNhap = '".$taikhoan."' or email = '".$email."';");
            $res = mysqli_num_rows($sql);
		    return $res;
        }
        public function insert_user($data){
            require("../connection.php");
            $sql = $conn->query("INSERT INTO NguoiTimViec(hoten,linkava,congviec,ngaysinh,gioitinh,loaicongviec,linhvuc,thanhpho,diachi,muctieunghenghiep,hocvan,kinang,kinhnghiemlamviec,chitiet,tagkinang) VALUES(
                		'Name',
		                'Ava',
		                'Work',
		                '2022/01/01',
		                1,
		                1,
		                'major',
		                'City',
		                'Address',
		                'Target',
		                'Study',
		                'Skill',
		                'Experience',
		                'detail infomation',
		                'Tag Skill'
            );");
            $sql = $conn -> query("SELECT count(hoten) soluong from NguoiTimViec");
            $r = $sql->fetch_assoc();
            $count = $r['soluong'];
            $sql = $conn->prepare("INSERT INTO Client(ID_user,TenDangNhap,matkhau,sdt,email) VALUES(?,?,?,?,?);");
            $sql -> bind_param("sssss",$count,$taikhoan,$matkhau,$sdt,$email);
            $taikhoan = $data['taikhoan'];
            $matkhau = $data['matkhau'];
            $email = $data['email'];
            $sdt = $data['sdt'];
            $res = $sql -> execute();
            return $res;
        }
        public function insert_admin($data){
            require("../connection.php");
            $sql = $conn->prepare("INSERT INTO CongTy(TenCongTy,diachi,website,motacongty,linkava,linhvuc,thanhpho) VALUES(
                		?,
		                ?,
		                ?,
		                'Mô Tả Công Ty',
		                'link Avatar',
		                'Lĩnh Vực',
		                'Thành Phố'
            );");
            $sql -> bind_param("sss",$tendoanhnghiep,$diachi,$website);
            $tendoanhnghiep = $data["tendoanhnghiep"];
            $diachi = $data["diachi"];
            $website = $data["website"];
            $sql -> execute();
            $sql = $conn -> query("SELECT count(TenCongTy) soluong from CongTy");
            $r = $sql->fetch_assoc();
            $count = $r['soluong'];
            $sql = $conn->prepare("INSERT INTO Admin(ID_CongTy,TenDangNhap,matkhau,sdt,email) VALUES(?,?,?,?,?);");
            $sql -> bind_param("sssss",$count,$taikhoan,$matkhau,$sdt,$email);
            $taikhoan = $data['taikhoan'];
            $matkhau = $data['matkhau'];
            $email = $data['email'];
            $sdt = $data['sdt'];
            $res = $sql -> execute();
            return $res;
        }
    }
