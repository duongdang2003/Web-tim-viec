function get_user() {
  $.post("../../../src/Controllers/C_InfoUser.php", {
    type: 2,
  }).done(function (data, status) {
    data = JSON.parse(data);
    console.log(data);
    console.log(status);
    if (status) {
      show_data(data);
    }
  });
}
function show_data(data) {
  let showUser = $("#showUser");
  showUser.html("");
  for (let i = 0; i < data.length; i++) {
    let loaicongviec = "Bán thời gian";
    if (data[i]["loaicongviec"] == 1) {
      loaicongviec = "Toàn thời gian";
    }
    let tagkinang = "";
    let skills = data[i]["tagkinang"].split(",");
    for (let j = 0; j < skills.length; j++) {
      tagkinang += `<p class='card-text p-request'>${skills[j]}</p>\n`;
    }
    let job = `
          <div class="col-sm-12 col-mg-content-2-left-main">
          <div class="card card-format-border-left" id="user${data[i]["id"]}">
              <div class="card-body">
                  <div class="row">
                      <div class="col-sm-12 col-img-text">
                          <div class="col-img">
                              <span>
                                  <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="80" height="80" viewBox="0 0 84 84">
                                      <defs>
                                          <pattern id="pattern${i}" preserveAspectRatio="none" width="100%" height="100%" viewBox="0 0 229 220">
                                              <image width="200" height="160" xlink:href="${data[i]["linkava"]}" />
                                          </pattern>
                                      </defs>
                                      <rect id="" width="84" height="84" fill="url(#pattern${i})" />
                                  </svg>
                              </span>
                          </div>
                          <div class="col-text">
                              <h5 class="card-title format-text-bold">${data[i]["hoten"]}</h5>
                              <h6 class="card-subtitle mb-2">${data[i]["congviec"]}</h6>
                          </div>
                      </div>
                      <div class="col-sm-12">
                          <div class="col-time">
                              <span><img class="img-time" src="../../../src/assets/Images/time.jpg" alt=""></span>
                              <span class="card-text p-time">${loaicongviec}</span>
                          </div>
                      </div>
                      <div class="col-sm-12">
                          ${tagkinang}
                      </div>
                      <div class="col-sm-8 col-diadiem">
                          <span><i class="fa fa-map-marker" aria-hidden="true"></i><span>
                                  <span class="card-text p-diadiem">Thành Phố ${data[i]["thanhpho"]}</span>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      `;
    showUser.append(job);
  }
}
function show_detail_data(data) {
  let ele = $("#content");
  ele.html("");
  let res = `
    <div class="offset-sm-3 col-sm-6 col-content-pageinfouser">
    <div class= "row ds-row-pageinfouser">
        <div class="col-sm-12 infor-userxinviec col-pageinfouserabove">
            <div class="card-info-userxinviec">
                <div class="body">
                    <div class="row">
                        <div class="col-sm-12 img-userxinviec-right">
                            <span><img style="border-radius:100%;" class="format-img-userxinviec-right" src="${
                              data.linkava
                            }" alt=""></span>
                        </div>
                        <div class="col-sm-12">
                            <h5 class="card-title format-text-bold">${
                              data.hoten
                            }</h5>
                            <h6 class="card-subtitle mb-2">${data.congviec}</h6>
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
                              data.gioitinh == "1" ? "Nam" : "Nữ"
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
                            <span>
                                <p class="p-muctieu">${data.muctieunghenghiep}
                                </p>
                            </span>
                        </div>

                        <div class="col-sm-12 mgl-col-content2-right-below col-hocvan">
                            <h5 class="card-title format-text-bold">Học vấn</h5>
                            <span>
                                <p class="p-hocvan">${data.hocvan}
                                </p>
                            </span>
                        </div>

                        <div class="col-sm-12 mgl-col-content2-right-below col-kynang">
                            <h5 class="card-title format-text-bold">Kỹ năng</h5>
                            <span>
                                <p class="p-kynang">${data.kinang}

                                </p>
                            </span>
                        </div>
                        <div class="col-sm-12 mgl-col-content2-right-below col-kinhnghiem">
                            <h5 class="card-title format-text-bold">Kinh nghiệm làm việc</h5>
                            <span>
                                <p class="p-kinhnghiem">
                                    ${data.kinhnghiemlamviec}

                                </p>
                            </span>
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
                            <span>
                                <p class="p-chitiet">
                                    ${data.chitiet}
                                </p>
                            </span>
                        </div>
                        <div class="col-md-12 col-lg-5 col-tuyenngay">
                        <a class="btn btn-dark btn-outline-light btn-tuyenngay" tabindex="-1" role="button" href="../../../../routes.php?ungtuyenngay=${data["ID_user"]}">Tuyển ngay</a>
                        <a class="btn-luuyeu-thich" id="btn-luuyeuthich" aria-haspopup="true" aria-expanded="false" href="../../../../routes.php?yeuthich=${data["ID_user"]}">
                            <span>
                                <svg class="img-tuyenngay" width="50" height="40" role="img" aria-label="biểu tượng-lưu" focusable="false" viewBox="0 0 18 18">
                                    <g>
                                        <path d="M12.38,2.25A4.49,4.49,0,0,0,9,3.82,4.49,4.49,0,0,0,5.63,2.25,4.08,4.08,0,0,0,1.5,6.38c0,2.83,2.55,5.15,6.41,8.66L9,16l1.09-1C14,11.52,16.5,9.21,16.5,6.38A4.08,4.08,0,0,0,12.38,2.25ZM9.08,13.91L9,14l-0.08-.08C5.35,10.68,3,8.54,3,6.38A2.56,2.56,0,0,1,5.63,3.75,2.93,2.93,0,0,1,8.3,5.52H9.7a2.91,2.91,0,0,1,2.67-1.77A2.56,2.56,0,0,1,15,6.38C15,8.54,12.65,10.68,9.08,13.91Z"></path>
                                    </g>
                                </svg>
                            </span>
                        </a>
                    </div>
                    </div>
                </div>

            </div>
        </div>

    </div>
</div>
    `;
  ele.html(res);
}
function get_detail_user(id) {
  $.post("../../../src/Controllers/C_InfoUser.php", {
    type: 3,
    iduser: id,
  }).done(function (data, status) {
    data = JSON.parse(data);
    console.log(data);
    console.log(status);
    if (status) {
      show_detail_data(data);
    }
  });
}
$(function () {
  get_user();
  get_detail_user(1);
});
const formatter = new Intl.NumberFormat("en-US", {
  style: "currency",
  currency: "USD",
  maximumFractionDigits: 0,
});

// Sự kiện thay đổi các chi tiết công việc khi ấn vào
$(document).on("click", ".card-body", function (e) {
  let id = $(this).parent().attr("id");
  id = id.split("user")[1];
  get_detail_user(parseInt(id));
  $(".card-body").each(function (a, b) {
    $(b).attr("style", "box-shadow: none;");
  });
  $(this).attr("style", "box-shadow: 0 0 5px black;");
});
