<?php

  //If there is not a constant called __CONFIG__ defined do not allow to load this file
  if(!defined('__CONFIG__')){
    exit('Error. You do not have a config file.');
  }

  include_once 'classes/db.php';

  $con = Database::getConnection();
 ?>
