$(document).ready(function () {

  //submit id
  $("#submit").click(function (event) {

    event.preventDefault();
    var form = $('#AjaxBaglan')[0];
    
    // Form data file gönderimi için
    var data = new FormData(form);
    $.ajax({
        type: "POST",

        enctype: 'multipart/form-data',

        //Backend endpoint i
        url: "https://serverapptest1.herokuapp.com/api/kisiselBilgiler",

        data: data,
        processData: false,
        contentType: false,
        cache: false,
        timeout: 600000,
        success: function (data) {
          console.log(data);
        },
        error: function (e) {
          console.log(data);
          }
      });
  });

});