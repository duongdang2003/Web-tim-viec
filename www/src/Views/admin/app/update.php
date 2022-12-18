<?php
// session_start();
require_once("getDataAdminNow.php");
?>
<div id="content" class="container-fluid bg">
    <div class="row justify-content-center">
        <div class="col-xs-12 col-sm-10 row-container my-5">
            <form id="form" method="post" action="../../../src/Controllers/C_updateUser.php" class="needs-validation my-4" novalidate>
                <input name="updateAdmin" type="hidden">
                <h1 class="text-center">Cập nhật thông tin doanh nghiệp</h1>
                <div class="form-group col-12">
                    <label for="name">Tên doanh nghiệp</label>
                    <input value='<? echo $data["TenCongTy"] ?>' name="TenCongTy" type="text" class="form-control py-3" id="name" placeholder="Nhập tên doanh nghiệp ở đây" required>
                </div>
                <div class="d-sm-flex flex-sm-row">
                    <div class="form-group col-sm-5">
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
                    <div class="form-group col-sm-7">
                        <label for="website">Trang web của công ty</label>
                        <input value='<? echo $data["website"] ?>' name="website" type="text" class="form-control py-3" id="website" placeholder="Nhập trang web của công ty" required>
                    </div>
                </div>
                <div class="d-sm-flex flex-sm-row">
                    <div class="form-group col-sm-6">
                        <label for="number">Số điện thoại</label>
                        <input value='<? echo $data["sdt"] ?>' name="sdt" type="number" class="form-control py-3" id="number" placeholder="Nhập số điện thoại ở đây" required>
                    </div>
                    <div class="form-group col-sm-6">
                        <label for="email">Email</label>
                        <input value='<? echo $data["email"] ?>' name="email" type="email" class="form-control py-3" id="email" placeholder="Nhập email ở đây" required>
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
                    <label for="comment">Giới thiệu doanh nghiệp</label>
                    <textarea name="motacongty" class="form-control" rows="3" id="comment" placeholder="Mô tả doanh nghiệp ở đây" required><? echo $data["motacongty"] ?></textarea>
                </div>
                <div class="form-group col-12">
                    <label for="phucloi">Phúc lợi</label>
                    <textarea name="phucloi" class="form-control" rows="3" id="phucloi" placeholder="Mô tả phúc lợi ở đây" required><? echo $data["phucloi"] ?></textarea>
                </div>
                <!-- <div class="form-group col-12 col-md-10 col-lg-5">
                    <label for="avatar">Đổi ảnh đại diện</label>
                    <input type="file" name="avatar" class="form-control" rows="3" id="avatar" placeholder="avatar" required/>
                </div> -->
                <div class="offset-4">
                    <button type="submit" class="mx-auto">Cập nhật</button>
                </div>
        </div>
        </form>
    </div>
</div>
</div>