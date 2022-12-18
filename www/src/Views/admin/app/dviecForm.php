<div id="content" class="container-fluid bg">
    <div class="row justify-content-center">
      <div class="col-xs-12 col-sm-10 row-container my-5">
        <form  id="form" method="post" action="../../../src/Controllers/C_updateUser.php" class="needs-validation my-4" novalidate enctype="multipart/form-data">
            <input name="dviec" type="hidden">
            <h1 class="text-center">Đăng việc</h1>
            <div class="d-sm-flex  flex-sm-row mt-4">
                <div class="form-group col-sm-4">
                    <label for="namework">Tên công việc</label>
                    <input name="tencongviec" type="text" class="form-control py-3" id="namework" placeholder="Nhập tên công việc ở đây" required>
                </div>
                <div class="form-group col-sm-4">
                    <label for="bangcap">Yêu cầu bằng cấp (tối thiểu)</label>
                    <input name="yeucaubangcap" type="text" class="form-control py-3" id="bangcap" placeholder="Đại học, cấp 3, chứng chỉ,..." required>
                </div>
                <div class="form-group col-sm-4">
                    <label for="linhvuc">Lĩnh vực</label>
                    <select name="linhvuc" class="form-control" id="linhvuc">
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
                <div class="form-group col-sm-5">
                    <label for="chucvu">Chức vụ</label>
                    <input name="chucvu" type="text" class="form-control py-3" id="chucvu" placeholder="Nhập chức vụ ở đây" required>
                </div>
                <div class="form-group col-sm-4">
                    <label for="luong">Lương</label>
                    <input min="1" max="9999999999" name="luong" type="number" class="form-control py-3" id="luong" placeholder="Nhập lương($) ở đây" required>
                </div>
                <div class="form-group col-sm-3">
                    <label for="loaicv">Loại công việc</label>
                    <select name="loaicongviec" class="form-control" id="loaicv" required>
                        <option value="1">Toàn thời gian</option>
                        <option value="0">Bán thời gian</option>
                    </select>                    
                </div>
            </div>
            <div class="d-sm-flex flex-sm-row">
              <div class="form-group col-9">
                  <label for="diachi">Địa chỉ</label>
                  <input name="diachi" type="text" class="form-control py-3" id="diachi" placeholder="Nhập địa chỉ ở đây" required>
              </div>
              <div class="form-group col-3">
                  <label for="soluongtuyen">Số lượng tuyển dụng</label>
                  <input name="soluongtuyendung" type="number" class="form-control py-3" id="soluongtuyen" placeholder="1" required>
              </div>
            </div>
            <div class="d-sm-flex flex-sm-row">
                <div class="form-group col-sm-3">
                    <label for="number">Số điện thoại</label>
                    <input name="sdt" type="number" class="form-control py-3" id="number" placeholder="Nhập số điện thoại ở đây" required>
                </div>
                <div class="form-group col-sm-3">
                    <label for="duration">Thời hạn tuyển dụng</label>
                    <input name="thoihan" type="date" class="form-control py-3" id="duration" required>
                </div>
                <div class="form-group col-sm-6">
                    <label for="email">Email</label>
                    <input name="email" type="email" class="form-control py-3" id="email" placeholder="Nhập tên email ở đây" required>
                </div>
            </div>
            <div class="form-group col-12">
                <label for="comment">Mô tả công việc</label>
                <textarea name="motacongviec" class="form-control" rows="3" id="comment" placeholder="Mỗi dòng mô tả là một mục" required></textarea>
            </div>
            <div class="d-sm-flex flex-sm-row">
              <div class="form-group col-6">
                  <label for="quyenloi">Quyền lợi được hưởng</label>
                  <textarea name="quyenloi" class="form-control" rows="3" id="quyenloi" placeholder="Mỗi dòng mô tả là một mục" required></textarea>
              </div>
              <div class="col-6">
                  <label for="yeucau">Yêu cầu công việc</label>
                  <textarea name="yeucaucongviec" class="form-control" rows="3" id="yeucau" placeholder="Mỗi dòng mô tả là một mục" required></textarea>
              </div>
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
                    <div class="tag-list"></div>
                </div>
                <input id="tagkinang" type="hidden" name="tagkinang" value ="">
                <div class="offset-sm-4">
                    <button onMouseOver="this.style.background='rgb(55 55 55)'" onMouseOut="this.style.background='rgb(0 0 0)'" type="submit" class="mx-auto">CẬP NHẬT</button>
                </div>

        </div>
        </form>
      </div>
    </div>
  </div>

<!-- <form method="post" action="../../../src/Controllers/test.php" enctype="multipart/form-data">

<input type="file" name="avatar">
  <button type="submit" name="btn">submit</button>
</form> -->