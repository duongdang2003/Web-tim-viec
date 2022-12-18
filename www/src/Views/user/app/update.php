<?php
// session_start();
function returnAll()
{
    require("../../connection.php");
    $id = $_SESSION["IDUser"];
    $sql = $conn->query("SELECT * FROM NguoiTimViec INNER JOIN Client 
        ON NguoiTimViec.ID_user = Client.ID_user
        WHERE NguoiTimViec.ID_user = '$id';");
    if ($sql) {
        $data = array();
        while ($r = $sql->fetch_assoc()) {
            $data[] = ["thanhpho" => $r["thanhpho"],"loaicongviec" => $r["loaicongviec"],"hoten" => $r["hoten"], "linkava" => $r["linkava"], "congviec" => $r["congviec"], "ngaysinh" => $r["ngaysinh"], "gioitinh" => $r["gioitinh"], "linhvuc" => $r["linhvuc"], "diachi" => $r["diachi"], "muctieunghenghiep" => $r["muctieunghenghiep"], "hocvan" => $r["hocvan"], "kinang" => $r["kinang"], "kinhnghiemlamviec" => $r["kinhnghiemlamviec"], "chitiet" => $r["chitiet"], "tagkinang" => $r["tagkinang"], "sdt" => $r["sdt"], "email" => $r["email"]];
        }
    } else {
        die("Can't get job from database");
    }
    return $data[0];
}
$data = returnAll();
$tagkinang = explode(",", $data["tagkinang"]);
foreach ($tagkinang as $value) $value = trim($value, "");
//init tag from db
$res="";
foreach ($tagkinang as $tag) {
    $res =$res."
    <div class='item'>
    <span class='delete-btn' onclick='deleteTag(this,\"$tag\")'>
    <i class='fa fa-times' aria-hidden='true'></i>
    </span>
    <span class='contentTag'>$tag</span>
    </div>
    ";
}
?>
<div id="content" class="container-fluid bg">
    <div class="row justify-content-center">
        <div class="col-xs-12 col-sm-10 row-container my-5">
            <form id="form" method="post" action="../../../src/Controllers/C_updateUser.php" class="needs-validation my-4" novalidate>
                <h1 class="text-center">Cập nhật thông tin người xin việc</h1>
                <div class="d-sm-flex  flex-sm-row mt-4">
                    <div class="form-group col-sm-7">
                        <label for="name">Tên người xin việc</label>
                        <input value='<? echo $data["hoten"] ?>' name="hoten" type="text" class="form-control py-3" id="name" placeholder="Nhập họ tên ở đây" required>
                    </div>
                    <div class="form-group col-sm-5">
                        <label for="namework">Công việc</label>
                        <input value='<? echo $data["congviec"] ?>' name="congviec" type="text" class="form-control py-3" id="namework" placeholder="Nhập tên công việc ở đây" required>
                    </div>

                </div>
                <div class="d-sm-flex flex-sm-row">

                    <div class="form-group col-sm-2">
                        <label for="ns">Ngày sinh</label>
                        <input value='<? echo $data["ngaysinh"] ?>' name="ngaysinh" type="date" class="form-control py-3" id="ns" placeholder="Nhập chức vụ ở đây" required>
                    </div>
                    <div class="form-group col-sm-2">
                        <label for="gt">Giới tính</label>
                        <select value="value='<? echo $data["gioitinh"] ?>'" name="gioitinh" class="form-control" id="gt" required>
                            <option value="1">Nam</option>
                            <option value="0">Nữ</option>
                        </select>
                    </div>
                    <div class="form-group col-sm-4">
                        <label for="loaicv">Loại công việc</label>
                        <select name="loaicongviec" class="form-control" id="loaicv" required>
                            <option value="1" <? if($data["loaicongviec"]==1) echo "selected"?>>Toàn thời gian</option>
                            <option value="0" <? if($data["loaicongviec"]==0) echo "selected"?>>Bán thời gian</option>
                        </select>
                    </div>
                    <div class="form-group col-sm-4">
                        <label for="linhvuc">Lĩnh vực</label>
                        <select name="linhvuc" class="form-control" id="linhvuc">
                            <option selected><? echo $data["linhvuc"] ?></option>
                            <option>Công nghệ thông tin</option>
                            <option>Viễn thông</option>
                            <option>Marketing / Truyền thông / Quảng cáo</option>
                            <option>Nhà hàng / Khách sạn</option>
                            <option>Thời trang</option>
                            <option>Internet / Online</option>
                            <option>Bất động sản</option>
                            <option>Dược phẩm / Y tế / Công nghệ sinh học</option>
                            <option>Kế toán / Kiểm toán</option>
                            <option>Kinh doanh</option>
                            <option>Giáo dục</option>
                            <option>Văn phòng</option>
                            <option>Bảo hiểm</option>
                            <option>Luật</option>
                            <option>Giải trí</option>
                            <option>Agency</option>
                            <option>Tài chính / Ngân Hàng</option>
                            <option>Khác</option>
                        </select>
                    </div>
                </div>
                <div class="d-sm-flex flex-sm-row">
                    <div class="form-group col-sm-6">
                        <label for="number">Số điện thoại</label>
                        <input value='<? echo $data["sdt"] ?>' name="sdt" type="number" class="form-control py-3" id="number" placeholder="Nhập tên số điện thoại ở đây" required>
                    </div>
                    <div class="form-group col-sm-6">
                        <label for="email">Email</label>
                        <input value='<? echo $data["email"] ?>' name="email" type="email" class="form-control py-3" id="email" placeholder="Nhập tên email ở đây" required>
                    </div>
                </div>
                <div class="d-sm-flex flex-sm-row">
                    <div class="form-group col-sm-5">
                        <label for="tp">Thành phố</label>

                        <select  name="thanhpho" class="form-control" id="tp" required>
                            <option disabled="disabled">Tỉnh / Thành phố</option>
                            <option selected><? echo $data["thanhpho"]?></option>
                        </select>
                        <input class="billing_address_1" name="" type="hidden" value="">

                    </div class="d-sm-flex flex-sm-row">
                    <div class="form-group col-sm-7">
                        <label for="diachi">Địa chỉ</label>
                        <input value='<? echo $data["diachi"] ?>' name="diachi" type="text" class="form-control py-3" id="diachi" placeholder="Nhập tên địa chỉ ở đây" required>
                    </div>
                </div>
                <div class="form-group col-12">
                    <label for="comment1">Mục tiêu nghề nghiệp</label>
                    <textarea  name="muctieunghenghiep" class="form-control" rows="3" id="comment1" placeholder="Nhập mô tả ở đây" required><? echo $data["muctieunghenghiep"] ?></textarea>
                </div>
                <div class="form-group col-12">
                    <label for="comment2">Học vấn</label>
                    <textarea  name="hocvan" class="form-control" rows="3" id="comment2" placeholder="Nhập mô tả ở đây" required><? echo $data["hocvan"] ?></textarea>
                </div>
                <div class="form-group col-12">
                    <label for="comment3">Kỹ năng</label>
                    <textarea  name="kinang" class="form-control" rows="3" id="comment3" placeholder="Nhập mô tả ở đây" required><? echo $data["kinang"] ?></textarea>
                </div>
                <div class="form-group col-12">
                    <label for="comment4">Kinh nghiệm làm việc</label>
                    <textarea  name="kinhnghiemlamviec" class="form-control" rows="3" id="comment4" placeholder="Nhập mô tả ở đây" required><? echo $data["kinhnghiemlamviec"] ?></textarea>
                </div>
                <div class="form-group col-12">
                    <label for="comment5">Chi tiết</label>
                    <textarea  name="chitiet" class="form-control" rows="3" id="comment5" placeholder="Nhập mô tả ở đây" required><? echo $data["chitiet"] ?></textarea>
                </div>

                <div class="tag-input form-group col-7">
                    <div class="input">
                        <label for="tag-ip">Thêm tag kĩ năng</label>
                        <div class="d-flex flex-row">
                            <input class="form-control mt-2" type="text" id="tag-ip" placeholder="Hãy có ít nhất 2 kĩ năng">
                            <span class="material-icons btn" value="" style="color:gray; font-size: 36px">
                                add_circle_outline
                            </span>
                        </div>

                    </div>
                    <div class="tag-list"><?echo $res?></div>
                </div>
                <input id="tagkinang" type="hidden" name="tagkinang" value ="<?echo $data["tagkinang"]?>">
                <div class="offset-sm-4">
                    <button onMouseOver="this.style.background='rgb(55 55 55)'" onMouseOut="this.style.background='rgb(0 0 0)'" type="submit" class="mx-auto">CẬP NHẬT</button>
                </div>
        </div>
        </form>
    </div>
</div>
</div>