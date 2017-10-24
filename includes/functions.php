<?php
//Checks if the user is logged in
function checkIfUserIsLoggedIn(){
  if(isset($_SESSION['user_id'])){
    // The user is authorised
  }else{
    // The user is not authorised / redirect them
    header('Location: ./index.php'); exit;
  }
}

function checkUserType(){
  if(isset($_SESSION['user_type'])){
    if($_SESSION['user_type'] === 'admin' || $_SESSION['user_type'] === 'staff'){

    }else{
      header('Location: ./store.php'); exit;
    }
  }else{
    // The user is not authorised / redirect them
    header('Location: ./index.php'); exit;
  }
}

function forceStore(){
  if(isset($_SESSION['user_id'])){
    // The user is logged in so they don't need to be here
    header('Location: ./store.php'); exit;
  }else{
    // The user is not authorised / redirect them
  }
}


 ?>
