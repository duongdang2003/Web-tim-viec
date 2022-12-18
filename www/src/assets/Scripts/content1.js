function searchFilterFromUser(){
    let timkiem = $("#myInput")[0].value
    let thanhpho = $("#myInput1")[0].value
    $.post("../../../src/Controllers/C_getFilter.php", {
        type: 3,
        timkiem: timkiem,
        thanhpho: thanhpho,
      }).done(function (data, status) {
        data = JSON.parse(data);
        console.log("data3:     ",data);
        console.log(status);
        if (status) {
            show_data(data);
            if (data.length !=0)show_detail_data(data);
        }
      });
}
function searchFilterFromAdmin(){
  let timkiem = $("#myInput")[0].value
  let thanhpho = $("#myInput1")[0].value
  $.post("../../../src/Controllers/C_getFilter.php", {
      type: 6,
      timkiem: timkiem,
      thanhpho: thanhpho,
    }).done(function (data, status) {
      data = JSON.parse(data);
      console.log("data3:     ",data);
      console.log(status);
      if (status) {
          show_data(data);
          if (data.length !=0)show_detail_data(data[0]);
      }
    });
}