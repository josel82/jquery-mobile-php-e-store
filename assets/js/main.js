$(document).on("submit", "#login-form", function(e){
  e.preventDefault();

  let _form = $(this);
  let _error = $("#popup-msg");
  let dataObj = {
    email: $("input[type='email']", _form).val(),
    password: $("input[type='password']", _form).val()
  };
  if(dataObj.email.length < 6){
    _error.text("Please enter a valid email.")
          .addClass("warning")
          .popup("open");
    return;
  }else if(dataObj.password.length < 8){
    _error.text("Password must contain at least 8 characters")
          .addClass("warning")
          .popup("open");
    return;
  }

  $.ajax({
    type:'POST',
    url:'./ajax/register.php',
    data: dataObj,
    dataType: 'json',
    async:true
  }).done(function(data){
    if(data.redirect !== undefined){
      window.location = data.redirect;
    }
  }).fail(function(e){
    console.log(e);
  }).always(function(data){
    console.log('always');
  });


  return;
});

//Note to myself. Do some research about Lets Encrypt
