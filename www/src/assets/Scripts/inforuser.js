$(document).ready(function () {
  getAllInfoUser();
});
function getAllInfoUser() {
  $.post("../../../src/Controllers/C_InfoUser.php", {
    type: 1,
  }).done(function (data, status) {
    data = JSON.parse(data);
    console.log(data);
    // console.log(status);
    if (status) {
      showAllDataUser(data);
    }
  });
}
function showAllDataUser(data) {
  let ele = $("#content").children().children();
  let res = `
                    <div class="col-sm-12 infor-userxinviec col-pageinfouserabove">
                        <div class="card-info-userxinviec">
                            <div class="body">
                                <div class="row">
                                    <div class="col-sm-12 img-userxinviec-right">
                                        <button title="Thay ảnh đại diện" id="avatarInfo" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal" style="border:none;background-color: transparent;">
                                        <span><img class="format-img-userxinviec-right" src="${
                                          data.linkava
                                        }" alt=""></span>
                                    </button>
                                    </div>
                                    <div class="col-sm-12">
                                        <h5 class="card-title format-text-bold">${
                                          data.hoten
                                        }</h5>
                                        <h6 class="card-subtitle mb-2">${
                                          data.congviec
                                        }</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 ">
                        <div class="card-basicinfo">
                            <div class="body">
                                <div class="row">
                                    <div class="col-sm-12 mgl-col-content2-right-below">
                                        <h5 class="card-title format-text-bold">Thông tin cơ bản</h5>
                                    </div>
                                    <div class="col-sm-12  mgl-col-content2-right-below format-mt-item">
                                        <span class="format-span-img-cake"><img class="format-img-cake" src="../../../../src/assets/Images/ic_cake_24px.png" alt="">${
                                          data.ngaysinh
                                        }</span>
                                        <span class="format-span-img-gender"><img class="format-img-gender" src="../../../../src/assets/Images/ic_wc_24px.png" alt="">${
                                          data.gioitinh == 1 ? "Nam" : "Nữ"
                                        }</span>
                                    </div>
                                    <div class="col-sm-12  mgl-col-content2-right-below format-mt-item">
                                        <span class="format-span-img-call"><img class="format-img-call" src="../../../../src/assets/Images/ic_call_24px.png" alt="">${
                                          data.sdt
                                        }</span>
                                        <span class="format-span-img-letter"><img class="format-img-letter" src="../../../../src/assets/Images/ic_markunread_24px.png" alt="">${
                                          data.email
                                        }</span>
                                    </div>
                                    <div class="col-sm-12  mgl-col-content2-right-below format-mt-item">
                                        <span><img class="format-img-place" src="../../../../src/assets/Images/ic_place_24px.png" alt="">${
                                          data.diachi
                                        }</span>
                                    </div>
                                    <div class="col-sm-12 mgl-col-content2-right-below col-muctieu">
                                        <h5 class="card-title format-text-bold">Mục tiêu nghề nghiệp</h5>
                                        <span><p class="p-muctieu">${
                                          data.muctieunghenghiep
                                        }</p></span>
                                    </div>
                                    <div class="col-sm-12 mgl-col-content2-right-below col-hocvan">
                                        <h5 class="card-title format-text-bold">Học vấn</h5>
                                        <span><p class="p-hocvan">${
                                          data.hocvan
                                        }</p></span>
                                    </div>
                                    <div class="col-sm-12 mgl-col-content2-right-below col-kynang">
                                        <h5 class="card-title format-text-bold">Kỹ năng</h5>
                                        <span><p class="p-kynang">${
                                          data.kinang
                                        }</p></span>
                                    </div>
                                    <div class="col-sm-12 mgl-col-content2-right-below col-kinhnghiem">
                                        <h5 class="card-title format-text-bold">Kinh nghiệm làm việc</h5>
                                        <span><p class="p-kinhnghiem">${
                                          data.kinhnghiemlamviec
                                        }</p></span>
                                    </div>
                                    <div class="col-sm-12 mgl-col-content2-right-below col-linhvuc">
                                    <h5 class="card-title format-text-bold">Lĩnh vực</h5>
                                    <span>
                                        <p class="p-linhvuc">
                                            ${data.linhvuc}
            
                                        </p>
                                    </span>
                                </div>
                                    <div class="col-sm-12 mgl-col-content2-right-below col-chitiet">
                                        <h5 class="card-title format-text-bold">Chi tiết</h5>
                                        <span><p class="p-chitiet">${
                                          data.chitiet
                                        }</p></span>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
    `;
  ele.html(res);
}
function getAllInfoUserByIdURL(id) {
  $.post("../../../src/Controllers/C_InfoUser.php", {
    type: 3,
    iduser: id,
  }).done(function (data, status) {
    data = JSON.parse(data);
    console.log(data);
    // console.log(status);
    if (status) {
      showAllDataUser(data);
    }
  });
}
// <div class="col-md-12 col-tuyenngay">
//     <a class="btn btn-dark btn-outline-light btn-tuyenngay" tabindex="-1" role="button" href="#">Tuyển ngay</a>
//     <button class="btn-luuyeu-thich" id="btn-luuyeuthich" aria-haspopup="true" aria-expanded="false">
//         <span>
//             <svg class="img-ungtuyenngay" width="50" height="40" role="img" aria-label="biểu tượng-lưu" focusable="false" viewBox="0 0 18 18">
//                 <g>
//                     <path d="M12.38,2.25A4.49,4.49,0,0,0,9,3.82,4.49,4.49,0,0,0,5.63,2.25,4.08,4.08,0,0,0,1.5,6.38c0,2.83,2.55,5.15,6.41,8.66L9,16l1.09-1C14,11.52,16.5,9.21,16.5,6.38A4.08,4.08,0,0,0,12.38,2.25ZM9.08,13.91L9,14l-0.08-.08C5.35,10.68,3,8.54,3,6.38A2.56,2.56,0,0,1,5.63,3.75,2.93,2.93,0,0,1,8.3,5.52H9.7a2.91,2.91,0,0,1,2.67-1.77A2.56,2.56,0,0,1,15,6.38C15,8.54,12.65,10.68,9.08,13.91Z"></path>
//                 </g>
//             </svg>
//         </span>
//     </button>
// </div>
