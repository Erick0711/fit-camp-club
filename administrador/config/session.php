<?php  
  session_start();
  if(!isset($_SESSION['username'])){
    header("Location:./index.php");
  }else{
    // print_r($_SESSION['username']);
  }


    // session_start();
    // if(!isset($_SESSION['usuario'])){
    //     header("Location:./index.php");
    // }else{
    //   if($_SESSION['usuario']=="ok"){
    //     $nombreUsuario = $_SESSION["nombreUsuario"];
    //   }
    // }
?>
