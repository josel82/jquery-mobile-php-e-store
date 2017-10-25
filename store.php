<?php
    //Allow the config
    define('__CONFIG__', true);
    //require the config
    require_once 'includes/config.php';

    checkIfUserIsLoggedIn();
 ?>

<!DOCTYPE html>
<html>
  <head>
    <?php require_once 'includes/head.php'; ?>
  </head>
  <body>
    <!-- Store page start -->
    <div data-role="page" align="center" data-position="fixed" id="store">
    	<div data-role="header">
        <h1>E-Store</h1>
        <a href="./logout.php"
           class="ui-btn-right ui-btn ui-btn-inline ui-mini ui-corner-all ui-btn-icon-left ui-icon-power"
           data-ajax="false">Log out</a>
      </div>
    	<div role="main" class="ui-content">
        <h3>Welcome to my E-Store</h3>
        <ul data-role="listview" data-inset="false" class="product-list" data-filter="true" data-filter-placeholder="Search products...">

        </ul>
      </div>
    	<div data-role="footer" data-position="fixed">
    	  <p>Footer here</p>
    	</div>
    </div>
    <!-- Store page end -->
    <!-- Product page start -->
    <div data-role="page" align="center" data-position="fixed" id="product">
    	<div data-role="header" data-add-back-btn="true">
        <h1>E-Store</h1>
        <a href="./logout.php"
           class="ui-btn-right ui-btn ui-btn-inline ui-mini ui-corner-all ui-btn-icon-left ui-icon-power"
           data-ajax="false">Log out</a>
      </div>
    	<div role="main" class="ui-content">
        <h3>Product page</h3>

      </div>
    	<div data-role="footer" data-position="fixed">
    	  <p>Footer here</p>
    	</div>
    </div>
    <!-- Product page end -->
    <?php require_once 'includes/bottom-jsfiles.php'?>

  </body>
</html>
