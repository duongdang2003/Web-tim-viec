function get_job() {
  $.post("../../../src/Controllers/C_getJob.php", {
    type: 0,
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
  let showjob = $("#showJob");
  showjob.html("");
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
    let expired;
    expired = new Date(data[i]["thoihan"]);
    const moment = new Date(Date.now());
    const diffDays = Math.ceil(
      Math.abs(expired - moment) / (1000 * 60 * 60 * 24)
    );
    let job = `
        <div class="col-sm-12 col-mg-content-2-left-main">
        <div class="card card-format-border-left" id="baidang${data[i]["id"]}">
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
                            <h5 class="card-title format-text-bold">${
                              data[i]["tencongviec"]
                            }</h5>
                            <h6 class="card-subtitle mb-2">${
                              data[i]["TenCongTy"]
                            }</h6>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="col-money">
                            <span><i class="fa fa-eur" aria-hidden="true"></i></span>
                            <p class="card-text p-money">${formatter.format(
                              data[i]["luong"]
                            )}/tháng</p>
                        </div>
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
                                <span class="card-text p-diadiem">Thành Phố ${
                                  data[i]["thanhpho"]
                                }</span>
                    </div>
                    <div class="col-sm-4">
                        <p class="card-text p-timeleft">Còn ${diffDays} ngày</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    `;
    showjob.append(job);
  }
}
function show_detail_data(data) {
  let detailJob = $("#col-centent2-right-scroll");
  let motacongviec="<li>Không có mô tả</li>";
  let quyenloi="<li>Không có thông tin</li>";
  let yeucaucongviec="<li>Không yêu cầu</li>";
  let yeucaubangcap = "Không có";
  let thoihan = new Date(data[0]["thoihan"]);
  thoihan = thoihan.toLocaleDateString()
  if (data[0]["motacongviec"]!=""){
    motacongviec = ""
    let listmota = data[0]["motacongviec"].split("\n");
    for (i of listmota) motacongviec += `<li>${i}</li>`;
  }
  if (data[0]["quyenloi"]!=""){
    quyenloi = ""
    let listquyenloi = data[0]["quyenloi"].split("\n");
    for (i of listquyenloi) quyenloi += `<li>${i}</li>`;
  }
  if (data[0]["yeucaucongviec"]!=""){
    yeucaucongviec = ""
    let listyeucaucongviec = data[0]["yeucaucongviec"].split("\n");
    for (i of listyeucaucongviec) yeucaucongviec += `<li>${i}</li>`;
  }
  if (data[0]["yeucaubangcap"]!=""){
    yeucaubangcap = ""
    yeucaubangcap = data[0]["yeucaubangcap"];
  }
  let show = `
    <div class="row">
    <div class="col-sm-12 col-content2-right-above">
        <div class="card-mota">
            <div class="body">
                <div class="row">
                    <div class="col-sm-12">
                        <h5 class="card-title format-text-bold">${data[0]["tencongviec"]}</h5>
                        <h6 class="card-subtitle mb-2">${data[0]["TenCongTy"]}</h6>
                    </div>

                    <div class="col-sm-12 col-money">
                        <span><i class="fa fa-eur" aria-hidden="true"></i></span>
                        <p class="card-text p-money">${formatter.format(data[0]["luong"])}/tháng</p>
                    </div>
                    <div class="col-md-12 col-lg-7 col-diadiem">
                        <span><i class="fa fa-map-marker" aria-hidden="true"></i><span>
                                <p class="card-text p-diadiem">${data[0]["thanhpho"]}</p>
                    </div>
                    <div class="col-md-12 col-lg-5 col-ungtuyenngay">
                        <a class="btn btn-dark btn-outline-light btn-ungtuyenngay" tabindex="-1" role="button" href="../../../../routes.php?ungtuyenngay=${data[0]["ID_BaiDang"]}">Ứng tuyển ngay</a>
                        <a class="btn-luuyeu-thich" id="btn-luuyeuthich" aria-haspopup="true" aria-expanded="false" href="../../../../routes.php?yeuthich=${data[0]["ID_BaiDang"]}">
                            <span>
                                <svg class="img-ungtuyenngay" width="50" height="40" role="img" aria-label="biểu tượng-lưu" focusable="false" viewBox="0 0 18 18">
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
    <div class="col-sm-12 col-motacongviecdaydu">
        <div class="card-motacongviecdaydu">
            <div class="body">
                <div class="row">
                    <div class="col-sm-12">
                        <h5 class="card-title format-text-bold">Mô tả công việc đầy đủ</h5>
                    </div>
                    <div class="col-sm-12 mgl-col-content2-right-below">
                        <h6 class="card-title format-text-bold">Mô tả công việc:</h6>
                        <ul class="ul-motacongviec">
                            ${motacongviec}
                        </ul>
                    </div>
                    <div class="col-sm-12 mgl-col-content2-right-below">
                        <h6 class="card-title format-text-bold">Chức vụ:</h6>
                        <p class="p-chucvu">${data[0]["chucvu"]}</p>
                    </div>
                    <div class="col-sm-12 mgl-col-content2-right-below">
                        <h6 class="card-title format-text-bold">Quyền lợi được hưởng:</h6>
                        <ul class="ul-quyenloiduochuong">
                            ${quyenloi}
                        </ul>
                    </div>
                    <div class="col-sm-12 mgl-col-content2-right-below">
                        <h6 class="card-title format-text-bold">Yêu cầu bằng cấp (tối thiểu):</h6>
                        <p class="p-yeucaubangcap">${yeucaubangcap}</p>
                    </div>
                    <div class="col-sm-12 mgl-col-content2-right-below">
                        <h6 class="card-title format-text-bold">Yêu cầu công việc:</h6>
                        <ul class="ul-yeucaucongviec">
                            ${yeucaucongviec}
                        </ul>
                    </div>
                    <div class="col-sm-12 mgl-col-content2-right-below">
                        <h6 class="card-title format-text-bold">Ngành nghề:</h6>
                        <p class="p-nganhnghe">${data[0]["linhvuc"]}</p>
                    </div>
                    <div class="col-sm-12 col-thongtintuyendung  mgl-col-content2-right-below">
                        <div class="col-sm-12">
                            <h5 class="card-title format-text-bold">Thông tin tuyển dụng</h5>
                        </div>
                        <div class="col-sm-12 col-img-user">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 23.564 23.564">
                                <path id="ic_person_24px" d="M15.782,15.782A5.891,5.891,0,1,0,9.891,9.891,5.889,5.889,0,0,0,15.782,15.782Zm0,2.945C11.85,18.727,4,20.7,4,24.618v2.945H27.564V24.618C27.564,20.7,19.714,18.727,15.782,18.727Z" transform="translate(-4 -4)" />
                            </svg>
                            <p class="p-tuyendung1">Tuyển dụng ${data[0]["soluongtuyendung"]} ứng viên cho vai trò này</p>
                        </div>
                        <div class="col-sm-12 col-img-time">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 27.939 27.939">
                                <path id="ic_watch_later_24px" d="M15.969,2A13.969,13.969,0,1,0,29.939,15.969,14.01,14.01,0,0,0,15.969,2Zm5.867,19.836-7.264-4.47V8.985h2.1v7.264l6.286,3.772-1.118,1.816Z" transform="translate(-2 -2)" />
                            </svg>
                            <p class="p-tuyendung2">Tuyển dụng đến hết ngày ${thoihan}</p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    `;
  detailJob.html(show);
}
function get_detail_job(id) {
  $.post("../../../src/Controllers/C_getJob.php", {
    type: 1,
    idbaidang: id,
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
  get_job();
  get_detail_job(1);
});
const formatter = new Intl.NumberFormat("en-US", {
  style: "currency",
  currency: "USD",
  maximumFractionDigits: 0,
});

// Sự kiện thay đổi các chi tiết công việc khi ấn vào
$(document).on("click", ".card-body", function (e) {
    let id = $(this).parent().attr('id');
    id = id.split('baidang')[1];
    get_detail_job(parseInt(id));
    $(".card-body").each(function (a,b) {
        $(b).attr("style","box-shadow: none;")
    })
    $(this).attr("style","box-shadow: 0 0 5px black;");
});
