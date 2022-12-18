$(document).ready(function () {
  let changeTextForContent2;
  $(".filter-dropdown-container").click(function (e) {
    // console.log(e.target.classList[0])
    if (e.target.classList[0] == "filter-dropdownlistitemLink") {
      console.log(e.target.innerHTML);
      $(changeTextForContent2).text(e.target.innerHTML);
    } else {
      changeTextForContent2 = $(this).find(".filter-dropdown-lable")[0];
    }
  });
  get_filter();
});
function get_filter() {
  $.post("../../../src/Controllers/C_getFilter.php", {
    type: 1,
  }).done(function (data, status) {
    data = JSON.parse(data);
    console.log(data);
    console.log(status);
    if (status) {
      showdata(data);
    }
  });
}
function showdata(data) {
  let thanhpho = new Set();
  let luong = new Set();
  let loaicongviec = new Set();
  let linhvuc = new Set();
  for (let i = 0; i < data.length; i++) {
    thanhpho.add(data[i]["thanhpho"]);
    luong.add(data[i]["luong"]);
    loaicongviec.add(data[i]["loaicongviec"]);
    linhvuc.add(data[i]["linhvuc"]);
  }
  let elementLinhvuc = $(".filter-dropdownlist-linhvuc");
  let elementLoaicongviec = $(".filter-dropdownlist-hinhthuc");
  let elementLuong = $(".filter-dropdownlist-mucluong");
  let elementThanhpho = $(".filter-dropdownlist-diadiem");
  let htmlLinhvuc = `<input class="form-control myInputSearch" id="myInput2" type="text" autocomplete="off" placeholder="Search..">
  <li class="filter-dropdownlistItem">
    <div class="filter-dropdownlistitemLink" value="*">Tất cả</div>
  </li>`;
  let htmlLoaicongviec = `<input class="form-control myInputSearch" id="myInput4" autocomplete="off" type="text" placeholder="Search..">
  <li class="filter-dropdownlistItem">
    <div class="filter-dropdownlistitemLink" value="*">Tất cả</div>
  </li>`;
  let htmlLuong = `<input class="form-control myInputSearch" id="myInput3" autocomplete="off" type="text" placeholder="Search..">
  <li class="filter-dropdownlistItem">
    <div class="filter-dropdownlistitemLink" value="*">Tất cả</div>
  </li>`;
  let htmlThanhpho = `<input class="form-control myInputSearch" id="myInput5" autocomplete="off" type="text" placeholder="Search..">
  <li class="filter-dropdownlistItem">
    <div class="filter-dropdownlistitemLink" value="*">Tất cả</div>
  </li>`;
  for (const value of linhvuc)
    htmlLinhvuc += `<li class="filter-dropdownlistItem">
    <div class="filter-dropdownlistitemLink" value="${value}">${value}</div>
  </li>`;
  for (const value of luong)
    htmlLuong += `<li class="filter-dropdownlistItem">
  <div class="filter-dropdownlistitemLink" value="${value}">${formatter.format(
      value
    )}/tháng</div>
</li>`;
  for (const value of loaicongviec) {
    let hinhthuc = "Toàn thời gian";
    if (value == 0) hinhthuc = "Bán thời gian";
    htmlLoaicongviec += `<li class="filter-dropdownlistItem">
<div class="filter-dropdownlistitemLink" value="${value}">${hinhthuc}</div>
</li>`;
  }
  for (const value of thanhpho)
    htmlThanhpho += `<li class="filter-dropdownlistItem">
<div class="filter-dropdownlistitemLink" value="${value}">${value}</div>
</li>`;
  // elementLinhvuc.html("");
  // elementLoaicongviec.html("");
  // elementLuong.html("");
  // elementThanhpho.html("");
  elementLinhvuc.html(htmlLinhvuc);
  elementLoaicongviec.html(htmlLoaicongviec);
  elementLuong.html(htmlLuong);
  elementThanhpho.html(htmlThanhpho);
  suggestlistitemLink($("#myInput2"), $(".filter-dropdownlist-linhvuc li"));
  suggestlistitemLink($("#myInput3"), $(".filter-dropdownlist-mucluong li"));
  suggestlistitemLink($("#myInput4"), $(".filter-dropdownlist-hinhthuc li"));
  suggestlistitemLink($("#myInput5"), $(".filter-dropdownlist-diadiem li"));
}

function suggestlistitemLink(i, e) {
  i.on("keyup", function () {
    var value = $(this).val().toLowerCase();
    e.filter(function () {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1);
    });
  });
}

function btnFilter(mycallback) {
  let [linhvuc, luong, loaicongviec, thanhpho] = $(".filter-dropdown-lable");
  linhvuc =
    $(linhvuc).text().toString().trim() == "Tất cả lĩnh vực"
      ? ""
      : $(linhvuc).text().toString().trim();
  luong = $(luong).text().toString().trim();
  loaicongviec = $(loaicongviec).text().toString().trim();
  thanhpho =
    $(thanhpho).text().toString().trim() == "Tất cả địa điểm"
      ? ""
      : $(thanhpho).text().toString().trim();
  if (luong != "Mức lương") {
    if (luong == "Tất cả") luong = "";
    else luong = luong.split("$")[1].split("/tháng")[0].split(",").join("");
    // else luong = parseInt(luong.split("$")[1].split("/tháng")[0].split(",").join(""));
  } else {
    luong = -1;
  }
  linhvuc = linhvuc == "Tất cả" ? "" : linhvuc;
  thanhpho = thanhpho == "Tất cả" ? "" : thanhpho;
  if (loaicongviec == "Tất cả") loaicongviec = "";
  else if (loaicongviec == "Bán thời gian") loaicongviec = 0;
  else if (loaicongviec == "Toàn thời gian") loaicongviec = 1;
  else loaicongviec = -1;
  console.log(linhvuc);
  console.log(luong);
  console.log(loaicongviec);
  console.log(thanhpho);
  mycallback(linhvuc, luong, loaicongviec, thanhpho);
}
function getFilterFromUser(linhvuc, luong, loaicongviec, thanhpho) {
  if (linhvuc != -1 || luong != -1 || loaicongviec != -1 || thanhpho != -1) {
    $.post("../../../src/Controllers/C_getFilter.php", {
      type: 2,
      linhvuc: linhvuc,
      luong: luong,
      loaicongviec: loaicongviec,
      thanhpho: thanhpho,
    }).done(function (data, status) {
      data = JSON.parse(data);
      console.log(data);
      console.log(status);
      if (status) {
        show_data(data);
        show_detail_data(data);
      }
    });
  }
}
