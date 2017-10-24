<?php
    //Allow the config
    define('__CONFIG__', true);
    //require the config
    require_once 'includes/config.php';

 ?>
<!DOCTYPE html>
<html>
  <head>
    <?php require_once 'includes/head.php'; ?>
  </head>
  <body>
    <div data-role="page" align="center">
    	<div data-role="header" data-add-back-btn="true">
        <h1>E-Store</h1>
      </div>
    	<div role="main" class="ui-content">
        <h2>Register</h2>
        <form id="register-form">
            <!--Firstname block-->
            <label for="first_name"
                   class="ui-hidden-accessible">firstname:</label>
            <input type="text"
                   data-clear-btn="false"
                   name="firs_tname"
                   value=""
                   placeholder="Firstname"
                   required
                   id="Firs_tname"> <!--End Firstname block-->
            <!--Lastname block-->
            <label for="last_name"
                   class="ui-hidden-accessible">lastname:</label>
            <input type="text"
                   data-clear-btn="false"
                   name="last_name"
                   value=""
                   placeholder="Lastname"
                   required
                   id="Last_name"> <!--End Lastname block-->
            <!--Email block-->
            <label for="email"
                   class="ui-hidden-accessible">Email:</label>
            <input type="email"
                   data-clear-btn="false"
                   name="email"
                   value=""
                   placeholder="Email"
                   required
                   id="email"> <!--End Email block-->
            <!--Address 1 block-->
            <label for="address_1"
                   class="ui-hidden-accessible">Address 2:</label>
            <input type="text"
                    data-clear-btn="false"
                    name="address_1"
                    value=""
                    placeholder="Address 1"
                    required
                    id="address1_"> <!--Address 1 block-->
            <!--Address 2 block-->
            <label for="address_2"
                    class="ui-hidden-accessible">Address 2:</label>
            <input type="text"
                    data-clear-btn="false"
                    name="address_2"
                    value=""
                    placeholder="Address 2"
                    id="address_2"> <!--Address 2 block-->
            <!--City block-->
            <label for="city"
                    class="ui-hidden-accessible">City:</label>
            <input type="text"
                    data-clear-btn="false"
                    name="city"
                    value=""
                    placeholder="City"
                    required
                    id="city"> <!--City block-->
            <!--Country block-->
            <label for="country"
                    class="ui-hidden-accessible">Country:</label>
            <input type="text"
                   data-clear-btn="false"
                    name="country"
                    value=""
                    placeholder="Country"
                    required
                    id="country"> <!--Country block-->
            <!--Zip code block-->
            <label for="zip_code"
                    class="ui-hidden-accessible">Zip code:</label>
            <input type="text"
                    data-clear-btn="false"
                    name="zip_code"
                    value=""
                    placeholder="Zip code"
                    required
                    id="zip_code"> <!--Zip code block-->
            <!--Phone block-->
            <label for="phone"
                    class="ui-hidden-accessible">Phone:</label>
            <input type="tel"
                    data-clear-btn="false"
                    name="phone"
                    value=""
                    placeholder="Phone"
                    required
                    id="phone"> <!--Phone block-->
            <!--Password block-->
            <label for="password"
                   class="ui-hidden-accessible">Password:</label>
            <input type="password"
                   data-clear-btn="false"
                   name="password"
                   value=""
                   autocomplete="off"
                   placeholder="Password"
                   required
                   id="password"><!--End password block-->
            <!--Confirm Password block-->
            <label for="conf_password"
                    class="ui-hidden-accessible">Confirm Password:</label>
            <input type="password"
                    data-clear-btn="false"
                    name="conf_password"
                    value=""
                    autocomplete="off"
                    placeholder="Confirm Password"
                    required
                    id="conf_password"><!--Confirm Password block-->

            <!--Buttons-->
            <button class="ui-btn ui-corner-all">Register</button>
            <button class="ui-btn ui-corner-all">Cancel</button>
        </form>
      </div>
    	<div data-role="footer">
    	  <p>Footer here</p>
    	</div>
      <div data-role="popup" class="ui-content popup-msg"></div>
    </div>

    <?php require_once 'includes/bottom-jsfiles.php';?>
  </body>
</html>
