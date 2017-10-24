<?php
    //Allow the config
    define('__CONFIG__', true);
    //require the config
    require_once '../includes/config.php';



    if($_SERVER['REQUEST_METHOD'] == 'POST'){
      //Always return JSON
      header('Content-type: Aplication/json');
      $return = [];
      $email = Filter::String($_POST['email']);
      $password = $_POST['password'];
      //Make sure that the user doesn't enchant_broker_dict_exists
      $findUser = $con->prepare("SELECT user_id, password, user_type FROM users WHERE email = LOWER(:email)  LIMIT 1");
      $findUser->bindParam(':email', $email, PDO::PARAM_STR);
      $findUser->execute();

      if($findUser->rowCount() == 1){
        $User = $findUser->fetch(PDO::FETCH_ASSOC);
        $user_id = (int) $User['user_id'];
        $hash = $User['password'];

        if(password_verify($password, $hash)){
          //sign them in
          $return['redirect'] = './store.php';
          $_SESSION['user_id'] = $user_id;
          $_SESSION['user_type'] = $user_type;
          $return['is_logged_in'] = true;
        }else{
          //User not authenticated
          $return['error'] = 'Password or email incorrect.';
          $return['is_logged_in'] = false;
        }
        //try sign them in

      }else{
        //Redirect the to the registration page
        $return['error'] = "It seems like that account doesn't exists <a href=./register.php>Create one now</a>";
      }
        //Make sure that the user can be added
      echo json_encode($return, JSON_PRETTY_PRINT);
      exit;

    }else{
      exit('Invalid Url');
    }



 ?>
