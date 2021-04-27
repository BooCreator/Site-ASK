// title - заголовок, src - путь для картинки
function passbox(){
  $("#passbox input[name='pass']").val("");
  Show($('#passbox'));
  $("#passbox input[name='pass']").focus();
}

function check_password(script_path){
  let res = $.post( script_path, { pass: $("#passbox input[name='pass']").val() } )
  .done(function( data ) {
      if (data != null && typeof data !== "undefined" && data.length > 0) {
        //console.log(data);
        window.location.href = data;
	  } else {
        alert("Вы ввели неверный пароль!")
	  }
    })
  .fail(function(data) {
    $( document ).ajaxError(function( event, jqxhr, settings, thrownError ) {
      console.log("-- error: ");
      console.log(thrownError);
    });
	alert("Произошла ошибка, попробуйте войти позже!");
  })
  
}