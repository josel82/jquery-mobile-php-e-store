<?php
    //Allow the config
    define('__CONFIG__', true);
    //require the config
    require_once '../includes/config.php';



    if($_SERVER['REQUEST_METHOD'] == 'POST'){
      //Always return JSON
      header('Content-type: Aplication/json');
      $return = [];
      //Make sure that the user doesn't enchant_broker_dict_exists

      //Make sure that the user can be added

      //Return the proper info back to JavaScript to redirect us
      $return['redirect'] = './index.php?this-was-a-redirect';

      echo json_encode($return, JSON_PRETTY_PRINT);
      exit;

    }else{
      exit('test');
    }



 ?>
