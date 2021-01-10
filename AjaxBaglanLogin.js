 $(document).ready(function () {

    //submit id
    $("#submitLogin").click(function (event) {
  
      event.preventDefault();
      var form = $('#AjaxBaglanLogin')[0];
      var headers = new Headers();
      // Form data file gönderimi için
      var data = new FormData(form);
      
      $.ajax({
          type: "POST",        
          enctype: 'multipart/form-data',
  
          //Backend endpoint i
          url: "https://serverapptest1.herokuapp.com/api/login",
          data: data,
          headers:{'Authorization': 'Bearer ' + data.token},
          processData: false,
          contentType: false,
          cache: false,
          timeout: 600000,
          success: function (data) {
            localStorage.setItem("token", data.token);
            console.log(data.token);
          },
          error: function (e) {
            console.log(data);
            }
        });
    });
  
  });
  