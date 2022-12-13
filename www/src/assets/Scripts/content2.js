$(document).ready(function () {
  let changeTextForContent2;
  $(".filter-dropdown-container").click(function (e) {
    // console.log(e.target.classList[0])
    if (e.target.classList[0] == "filter-dropdownlistitemLink") {
        console.log(e.target.innerHTML)
        $(changeTextForContent2).text(e.target.innerHTML)
    } else {
      changeTextForContent2 = $(this).find(".filter-dropdown-lable")[0];
    }
  });
  get_filter();
});
function get_filter(){
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
function showdata(data){
  
}