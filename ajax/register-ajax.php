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
      //Make sure that the user doesn't enchant_broker_dict_exists
      $findUser = $con->prepare("SELECT user_id FROM users WHERE email = LOWER(:email) LIMIT 1");
      $findUser->bindParam(':email', $email, PDO::PARAM_STR);
      $findUser->execute();

      if($findUser->rowCount() == 1){
        $return['error'] = 'User already exists.';
        $return['is_logged_in'] = false;
      }else{
        //Get Input variables
        $first_name = filter_var($_POST['first_name']);
        $last_name = filter_var($_POST['last_name']);
        $address_1 = filter_var($_POST['address_1']);
        $address_2 = filter_var($_POST['address_2']);
        $city = filter_var($_POST['city']);
        $country = filter_var($_POST['country']);
        $zip_code = filter_var($_POST['zip_code']);
        $phone = filter_var($_POST['phone']);
        $email = filter_var($_POST['email']);
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
        $creditcard = filter_var($_POST['creditcard']);
        $user_type = 'customer';

        $addUser = $con->prepare("INSERT INTO users(first_name,last_name,
                                                    address_1, address_2,
                                                    city, country, zip_code,
                                                    telephone, email,
                                                    password, creditcard,
                                                    user_type, signup_date,
                                                    last_loggedin)
                                                    VALUES(:first_name,:last_name,
                                                           :address_1, :address_2,
                                                           :city, :country, :zip_code,
                                                           :phone, LOWER(:email),
                                                           :password, :creditcard,
                                                           :user_type, NOW(),
                                                           NOW());");
        $addUser->bindParam('first_name', $first_name, PDO::PARAM_STR);
        $addUser->bindParam('last_name', $last_name, PDO::PARAM_STR);
        $addUser->bindParam('address_1', $address_1, PDO::PARAM_STR);
        $addUser->bindParam('address_2', $address_2, PDO::PARAM_STR);
        $addUser->bindParam('city', $city, PDO::PARAM_STR);
        $addUser->bindParam('country', $country, PDO::PARAM_STR);
        $addUser->bindParam('zip_code', $zip_code, PDO::PARAM_STR);
        $addUser->bindParam('phone', $phone, PDO::PARAM_STR);
        $addUser->bindParam('email', $email, PDO::PARAM_STR);
        $addUser->bindParam('password', $password, PDO::PARAM_STR);
        $addUser->bindParam('creditcard', $creditcard, PDO::PARAM_STR);
        $addUser->bindParam('user_type', $user_type, PDO::PARAM_STR);

        $addUser->execute();

        $user_id = $con->lastInsertId();
        $return['redirect'] = './login.php?message=welcome';
        
        }
      //Make sure that the user can be added

      echo json_encode($return, JSON_PRETTY_PRINT);
      exit;

    }else{
      exit('Invalid Url');
    }



 ?>
