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
    <div data-role="page" align="center" data-position="fixed">
    	<div data-role="header">
        <h1>E-Store</h1>
      </div>
    	<div role="main" class="ui-content">
        <h3>Welcome to my E-Store</h3>
      </div>
    	<div data-role="footer" data-position="fixed">
    	  <p>Footer here</p>
    	</div>
    </div>

    <?php require_once 'includes/bottom-jsfiles.php'?>
  </body>
</html>
