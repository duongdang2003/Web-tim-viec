$(function () {
    duyetcongviec();
    yeucautuyendung();
});
function duyetcongviec(){
    $.post("../../../src/Controllers/C_DuyetCongViec.php", {
        type: 0,
      }).done(function (data, status) {
        data = JSON.parse(data);
        console.log(data);
        console.log(status);
        if (status) {
          Data_DuyetCongViec(data);
        }
      });
}
function Data_DuyetCongViec(data){
    let table1 = $("table#DuocMoi").children("tbody");
    let table2 = $("table#daduyet").children("tbody");
    table1.html("");
    table2.html("");
    let resTable1 ="";
    let resTable2 ="";
    for (let i = 0; i < data.length; i++) {
        if (data[i]["daduyet"]==-1){
            resTable1 +=`
            <tr class="format-text">
            <td>
                <div class="d-flex align-items-center">
                    <img src="${data[i]["linkava"]}" alt="" style="width: 45px; height: 45px" class="rounded-circle" />
                </div>
            </td>
            <td>
                <p class="fw-normal mb-1">${data[i]["TenCongTy"]}</p>
            </td>
            <td class="format-td">

                <div class="format-td-baidang">
                    <a class="format-baidang" class="aa" role="button" href="../admin/pageinfoAdmin.php?idcongty=${data[i]["ID_CongTy"]}" class="btn btn-link btn-rounded">
                        Xem công ty
                    </a>
                </div>

            </td>
            <td>
                <div class="format-btn-dongy">
                    <button onclick="dongyduyet(${data[i]["ID_CongTy"]})" class="btn-dongy" aria-haspopup="true" aria-expanded="false">
                        <span>
                            <img class="format-img-done" src="../../../src/assets/Images/ic_done_24px.png" alt="">
                        </span>
                    </button>
                </div>
                <div class="format-btn-tuchoi" id="format-btn-tuchoi-id">
                    <button onclick="tuchoiduyet(${data[i]["ID_CongTy"]})" class="btn-tuchoi" id="btn-tuchoi-id" aria-haspopup="true" aria-expanded="false">
                        <span>
                            <img class="format-img-clear" src="../../../src/assets/Images/ic_clear_24px.png" alt="">
                        </span>
                    </button>
                </div>

            </td>
        </tr>
            `;
        }else if (data[i]["daduyet"]==1){
            resTable2+=`
            <tr class="format-text">
            <td>
                <div class="d-flex align-items-center">
                    <img src="${data[i]["linkava"]}" alt="" style="width: 45px; height: 45px" class="rounded-circle" />
                </div>
            </td>
            <td>
                <p class="fw-normal mb-1">${data[i]["TenCongTy"]}</p>
            </td>
            <td class="format-td">
                <div class="format-td-hoso">
                    <a class="format-hoso" role="button" href="../admin/pageinfoAdmin.php?idcongty=${data[i]["ID_CongTy"]}" class="btn btn-link  btn-rounded">
                        Xem công ty
                    </a>
                </div>
            </td>
        </tr>
            `;
        }
    }
    table1.html(resTable1);
    table2.html(resTable2);
}

function yeucautuyendung(){
    $.post("../../../src/Controllers/C_DuyetCongViec.php", {
        type: 1,
      }).done(function (data, status) {
        data = JSON.parse(data);
        console.log(data);
        console.log(status);
        if (status) {
          Data_yeucautuyendung(data);
        }
      });
}
function Data_yeucautuyendung(data){
    let table = $("table#yeucautuyendung").children("tbody");
    table.html("");
    let resTable ="";
    for (let i = 0; i < data.length; i++){
        let trangthai = "";
        if (data[i]["daduyet"]==1){
            trangthai = "<span class='format-text-dadongy'> Đã đồng ý</span>";
        } else if (data[i]["daduyet"]==0)
            trangthai = "<span class='format-text-datuchoi'> Đã từ chối</span>";
        else trangthai = "<span> Chưa phản hồi</span>";
        resTable+=`
        <tr class="format-text">
        <td>
            <div class="d-flex align-items-center">
                <img src="${data[i]["linkava"]}" alt="" style="width: 45px; height: 45px" class="rounded-circle" />
            </div>
        </td>
        <td>
            <p class="fw-normal mb-1">${data[i]["TenCongTy"]}</p>
        </td>
        <td>${data[i]["tencongviec"]}</td>
        <td class="format-td">
            <div class="format-td-hoso">
                <a class="format-hoso" role="button" href="../admin/pageinfoAdmin.php?idbaidang=${data[i]["ID_BaiDang"]}&idcongty=${data[i]["ID_CongTy"]}" class="btn btn-link  btn-rounded">
                    Xem hồ sơ
                </a>
            </div>

        </td>
        <td>
            ${trangthai}
        </td>
    </tr>
        `;
    }
    table.html(resTable);
}

function dongyduyet(id){
    $.post("../../../src/Controllers/C_DuyetCongViec.php", {
        type: 2,
        idcongty: id
      }).done(function (data, status) {
        data = JSON.parse(data);
        console.log("dong y duyet: "+data);
        if (status) {
            duyetcongviec();
        }
      });
}
function tuchoiduyet(id){
    $.post("../../../src/Controllers/C_DuyetCongViec.php", {
        type: 3,
        idcongty: id
    }).done(function (data, status) {
        data = JSON.parse(data);
        console.log("tu choi duyet: "+data);
        if (status) {
            duyetcongviec();
        }
      });
}