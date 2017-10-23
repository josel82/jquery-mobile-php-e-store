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
        <form>
            <!--Firstname block-->
            <label for="firstname"
                   class="ui-hidden-accessible">firstname:</label>
            <input type="text"
                   data-clear-btn="false"
                   name="firstname"
                   value=""
                   placeholder="Firstname"
                   required
                   id="Firstname"> <!--End Firstname block-->
            <!--Lastname block-->
            <label for="lastname"
                   class="ui-hidden-accessible">lastname:</label>
            <input type="text"
                   data-clear-btn="false"
                   name="lastname"
                   value=""
                   placeholder="Lastname"
                   required
                   id="Lastname"> <!--End Lastname block-->
            <!--Email block-->
            <label for="reg-email"
                   class="ui-hidden-accessible">Email:</label>
            <input type="email"
                   data-clear-btn="false"
                   name="reg-email"
                   value=""
                   placeholder="Email"
                   required
                   id="reg-email"> <!--End Email block-->
            <!--Address 1 block-->
            <label for="address1"
                   class="ui-hidden-accessible">Address 2:</label>
            <input type="text"
                    data-clear-btn="false"
                    name="address1"
                    value=""
                    placeholder="Address 1"
                    required
                    id="address1"> <!--Address 1 block-->
            <!--Address 2 block-->
            <label for="address2"
                    class="ui-hidden-accessible">Address 2:</label>
            <input type="text"
                    data-clear-btn="false"
                    name="address2"
                    value=""
                    placeholder="Address 2"
                    id="address2"> <!--Address 2 block-->
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
            <label for="zipcode"
                    class="ui-hidden-accessible">Zip code:</label>
            <input type="text"
                    data-clear-btn="false"
                    name="zipcode"
                    value=""
                    placeholder="Zip code"
                    required
                    id="zipcode"> <!--Zip code block-->
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
            <label for="reg-password"
                   class="ui-hidden-accessible">Password:</label>
            <input type="password"
                   data-clear-btn="false"
                   name="reg-password"
                   value=""
                   autocomplete="off"
                   placeholder="Password"
                   required
                   id="reg-password"><!--End password block-->
            <!--Confirm Password block-->
            <label for="conf-password"
                    class="ui-hidden-accessible">Confirm Password:</label>
            <input type="password"
                    data-clear-btn="false"
                    name="conf-password"
                    value=""
                    autocomplete="off"
                    placeholder="Confirm Password"
                    required
                    id="conf-password"><!--Confirm Password block-->

            <!--Buttons-->
            <button class="ui-btn ui-corner-all">Register</button>
            <button class="ui-btn ui-corner-all">Cancel</button>
        </form>
      </div>
    	<div data-role="footer">
    	  <p>Footer here</p>
    	</div>
    </div>

    <?php require_once 'includes/bottom-jsfiles.php';?>
  </body>
</html>
