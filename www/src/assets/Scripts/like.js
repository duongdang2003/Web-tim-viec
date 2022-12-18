$(function () {
    SaveCT();
    SaveNTV();
  });
  function SaveCT() {
    $.post("../../../src/Controllers/C_like.php", {
      type: 0,
    }).done(function (data, status) {
      data = JSON.parse(data);
      console.log(data);
      console.log(status);
      if (status) {
        getData(data);
      }
    });
  }
  function getData(data) {
    let ele = $("#wrapSaveCT")
    ele.html("");
    let res = "";
    for (let i = 0; i < data.length; i++) {
        let tagkinang = "";
        let skills = data[i]["tagkinang"].split(",");
        for (let j = 0; j < skills.length; j++) {
          tagkinang += `<p class='card-text p-request'>${skills[j]}</p>\n`;
        }
        let expired = new Date(data[i]["thoihan"]);
        const moment = new Date(Date.now());
        const diffDays = Math.ceil(
          Math.abs(expired - moment) / (1000 * 60 * 60 * 24)
        );
        res+=`
        <div onclick="gotoHomepageAdmin(${data[i]["id"]},${data[i]["idcongty"]})" class="offset-sm-auto mx-auto mb-3 col-12 col-sm-10 col-md-5 cards">
        <div class="card card-format-border-left">
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-12 col-img-text">
                        <div class="col-img">
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="80" height="80" viewBox="0 0 84 84">
                                    <defs>
                                        <pattern id="pattern" preserveAspectRatio="none" width="100%" height="100%" viewBox="0 0 229 220">
                                            <image width="200" height="160" xlink:href="${data[i]["linkava"]}" />
                                        </pattern>
                                    </defs>
                                    <rect id="${data[i]["TenCongTy"]}" width="84" height="84" fill="url(#pattern)" />
                                </svg>
                            </span>
                        </div>
                        <div class="col-text">
                            <h5 class="card-title format-text-bold">${data[i]["tencongviec"]}</h5>
                            <h6 class="card-subtitle mb-2">${data[i]["TenCongTy"]}</h6>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="col-money">
                            <span><i class="fa fa-eur" aria-hidden="true"></i></span>
                            <p class="card-text p-money">${formatter.format(data[i]["luong"])}/tháng</p>
                        </div>
                        <div class="col-time">
                            <span><img class="img-time" src="../../../src/assets/Images/time.jpg" alt=""></span>
                            <span class="card-text p-time">${data[i]["loaicongviec"]=="1"?"Toàn thời gian":"Bán thời gian"}</span>
                        </div>
                    </div>

                    <div class="col-sm-12">
                    ${tagkinang}
                    </div>
                    <div class="col-sm-8 col-diadiem">
                        <span><i class="fa fa-map-marker" aria-hidden="true"></i><span>
                                <span class="card-text p-diadiem">${data[i]["thanhpho"]}</span>
                    </div>
                    <div class="col-sm-4">
                        <p class="card-text p-timeleft">Còn ${diffDays} ngày</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
        `;
        ele.html(res);
      }
  }
  function SaveNTV() {
    $.post("../../../src/Controllers/C_like.php", {
      type: 1,
    }).done(function (data, status) {
      data = JSON.parse(data);
      console.log(data);
      console.log(status);
      if (status) {
        getDataNTV(data);
      }
    });
  }
function getDataNTV(data) {
  let ele = $("#wrapSaveNTV")
  ele.html("");
  let res = "";
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
    <div onclick="gotoHomepageClient(${data[i]["ID_user"]})" class="offset-sm-auto mx-auto mb-3 col-12 col-sm-10 col-md-5 cards">
    <div class="card card-format-border-left">
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
      ele.append(job);
  }
}
  const formatter = new Intl.NumberFormat("en-US", {
    style: "currency",
    currency: "USD",
    maximumFractionDigits: 0,
  });

  function gotoHomepageAdmin(id,idcongty){
    window.location.href = `../admin/pageinfoAdmin.php?idbaidang=${id}&idcongty=${idcongty}`;
  }
  function gotoHomepageClient(id){
    window.location.href = `../user/pageinfoUser.php?id=${id}`;
  }