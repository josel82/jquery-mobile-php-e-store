$(document).on("submit", "#register-form", function(e){ //This will run when the register form gets submitted
  e.preventDefault();

  let _form = $(this);
  let _error = $(".popup-msg");
  let dataObj = {
    first_name: $("input[name='firs_tname']", _form).val(),
    last_name: $("input[name='last_name']", _form).val(),
    address_1: $("input[name='address_1']", _form).val(),
    address_2: $("input[name='address_2']", _form).val(),
    city: $("input[name='city']", _form).val(),
    country: $("input[name='country']", _form).val(),
    zip_code: $("input[name='zip_code']", _form).val(),
    phone: $("input[name='phone']", _form).val(),
    email: $("input[name='email']", _form).val(),
    password: $("input[name='password']", _form).val(),
    conf_password: $("input[name='conf_password']", _form).val()
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
  }else if(dataObj.password !== dataObj.conf_password){
    _error.text("Passwords don't match.")
          .addClass("warning")
          .popup("open");
    return;
  }

  $.ajax({
    type:'POST',
    url:'./ajax/register-ajax.php',
    data: dataObj,
    dataType: 'json',
    async:true
  }).done(function(data){
    if(data.redirect !== undefined){
      $.mobile.changePage( data.redirect, { transition: "slide"} );
    }else if(data.error !== undefined){
      _error.text(data.error)
            .addClass("warning")
            .popup("open");
    }
  }).fail(function(e){
    console.log(e);
  }).always(function(data){
    console.log('always');
  });


  return;
})//This will run when the login form gets submitted
.on("submit", "#login-form", function(e){
  e.preventDefault();

  let _form = $(this);
  let _error = $(".popup-msg");
  let dataObj = {
    email: $("input[name='email']", _form).val(),
    password: $("input[name='password']", _form).val()
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
    url:'./ajax/login-ajax.php',
    data: dataObj,
    dataType: 'json',
    async:true
  }).done(function(data){
    if(data.redirect !== undefined){
      $.mobile.changePage( data.redirect, { transition: "slideup"} );
    }else if(data.error !== undefined){
      _error.html(data.error)
            .addClass("warning")
            .popup("open");
    }
  }).fail(function(e){
    console.log(e);
  }).always(function(data){
    console.log('always');
  });
  return;
})//This will run when store.php gets initiated. The code below populate the listView dynamically
.delegate("#store", "pageinit", function() {
    getProducts('',
    function(data){
        let products = data.products;
        $(".product-list").html('');
        $.each(products, function(i, item){
          $(".product-list").append(`
            <li>
              <a href="#product?id=${item.prod_id}">
                <img src="${item.picture}" alt="">
                <h2>${item.prod_name}</h2>
                <p>${item.prod_desc}</p>
                <small>Price: <strong>€${item.unit_price}</strong></small>
              </a>
            </li>
            `).listview("refresh");
        });
      },
      function(e){
        console.log(e);
      },
      function(data){
        console.log('always');
      });
});

function getProducts(param, success, error, always){
  $.ajax({
    type:'GET',
    url:`./ajax/products-ajax.php?${param}`,
    dataType: 'json',
    async:true
  }).done(function(data){
    success(data);
  }).fail(function(e){
    error(e);
  }).always(function(data){
    always('always');
  });
}

//Note to myself. Do some research about Lets Encrypt
