$(document).ready(function () {
    get_user_navbar();
})
function get_user_navbar(){
    $.post("../../../src/Controllers/C_InfoUser.php", {
        type: 0,
      }).done(function (data, status) {
        data = JSON.parse(data);
        console.log(data);
        console.log(status);
        if (status) {
          showuser(data);
          script2()
        }
      });
}
function showuser(data) {
    let ele = $("#identity_user");
    let res = `
    <a class="nav-link active format-name-user" href="${data.type == "Client"? "../../../../src/Views/user/pageinfouser.php":"../../../../src/Views/admin/pageinfoadmin.php"}">${data.hoten}</a>
    <div class="filter-dropdown-container-user">
        <button class="format-btn-user" id="btn-user" style="background-color:transparent !important;">
            <span class="containerBlockicon" style="max-height:40px;max-width:40px;margin-left:5px;margin-top:2px;"><img class="format-img-user" src="${data.linkava}" alt="avatar"></span>
        </button>
        <ul class="filter-dropdownlist-user" id="filter-btn-user">
            <li class="filter-dropdownlistItem">
                <a href="${data.type == "Client"? "../../../../src/Views/user/updateInfo.php":"../../../../src/Views/admin/updateInfo.php"}" class="filter-dropdownlistitemLink">Chỉnh sửa thông tin</a>
            </li>
            <li class="filter-dropdownlistItem format-border-top">
                <a href="${data.type == "Client"? "../../../../src/Views/user/congviecduocmoi.php":"../../../../src/Views/admin/duyetungvien.php"}" class="filter-dropdownlistitemLink">${data.type == "Client"? "Duyệt công việc":"Duyệt ứng viên"}</a>
            </li>
            <li class="filter-dropdownlistItem format-border-top">
                <a href="${data.type == "Client"? "../../../../src/Views/user/congviecdathich.php":"../../../../src/Views/admin/nguoitimviecdathich.php"}" class="filter-dropdownlistitemLink">${data.type == "Client"? "Công việc đã thích":"Người tìm việc đã thích"}</a>
            </li>
            <li class="filter-dropdownlistItem format-border-top">
                <span><i class="fa fa-sign-out" aria-hidden="true"></i></span>
                <a href="../../../../src/Controllers/C_SignOut.php" class="filter-dropdownlistitemLink format-text-dropdown ">Đăng xuất</a>
            </li>
        </ul>
    </div>
    <div class="navbar-img-notice filter-dropdown-container-user">
        <button onclick="window.location.href ='${data.type == "Client"? "../../../../src/Views/user/congviecduocmoi.php#yeucautuyendung":"../../../../src/Views/admin/duyetungvien.php#yeucautuyendung"}'" class="btn-notice" style="background-color:transparent !important;">
            <span class="containerBlockicon" style="height:40px;width:40px;">
                <img class="format-img-notice" src="../../../../src/assets/Images/ic_notifications_none_24px.png" alt="">
            </span>
        </button>

    </div>
    `;
    ele.html(res);
}