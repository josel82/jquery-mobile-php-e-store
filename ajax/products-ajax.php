<?php
    //Allow the config
    define('__CONFIG__', true);
    //require the config
    require_once '../includes/config.php';

    if($_SERVER['REQUEST_METHOD'] == 'GET'){
      //Always return JSON
      header('Content-type: Aplication/json');
      $return = [];

      if(isset($_GET['category'])){
        $category = filter_var($_GET['category']);
        $findProducts = $con->prepare("SELECT * FROM products WHERE category = :category");
        $findProducts->bindParam(':category', $category, PDO::PARAM_STR);
      }else{
        $findProducts = $con->prepare("SELECT * FROM products");
      }

      $findProducts->execute();

      if($findProducts->rowCount() > 0){
        $products = $findProducts->fetchAll(PDO::FETCH_ASSOC);
        $return['products'] = $products;

      }else{
        //Redirect the to the registration page
        $return['error'] = "No products found";
      }
        //Make sure that the user can be added
      echo json_encode($return, JSON_PRETTY_PRINT);
      exit;

    }else{
      exit('Invalid Url');
    }

 ?>
