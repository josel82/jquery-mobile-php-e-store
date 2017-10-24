<?php

  //If there is not a constant called __CONFIG__ defined do not allow to load this file
  if(!defined('__CONFIG__')){
    exit('Error. You do not have a config file.');
  }
  
  //Allow error report
  // error_reporting(-1);
  // ini_set('display_errors', 'on');

  include_once 'classes/db.php';
  include_once 'classes/filter.php';

  $con = Database::getConnection();

 ?>
