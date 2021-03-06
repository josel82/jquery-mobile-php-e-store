<?php
    //Allow the config
    define('__CONFIG__', true);
    //require the config
    require_once 'includes/config.php';

    forceStore();
 ?>
<!DOCTYPE html>
<html>
  <head>
    <?php require_once 'includes/head.php'; ?>
  </head>
  <body>
    <div data-role="page" align="center">
    	<div data-role="header" data-position="fixed" data-add-back-btn="true">
        <h1>E-Store</h1>
      </div>
    	<div role="main" class="ui-content">
        <h2>Log in</h2>
        <form id="login-form">
            <label for="email"
                   class="ui-hidden-accessible">Email:</label>
            <input type="email"
                   data-clear-btn="false"
                   name="email"
                   value=""
                   placeholder="Email"
                   required
                   id="email">
            <label for="password"
                   class="ui-hidden-accessible">Password:</label>
            <input type="password"
                   data-clear-btn="false"
                   name="password"
                   value=""
                   autocomplete="off"
                   placeholder="Password"
                   required
                   id="password">
            <button class="ui-btn ui-corner-all">Button</button>
        </form>
      </div>
    	<div data-role="footer" data-position="fixed">
    	  <p>Footer here</p>
    	</div>
      <!-- Popup -->
      <div data-role="popup" class="ui-content popup-msg"></div>
    </div>

    <?php require_once 'includes/bottom-jsfiles.php';?>
  </body>
</html>
