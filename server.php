<?php
function registration(){
    echo "<h1> Register Info </h1>";
  foreach($_POST as $key =>$value){
    echo $key.":".$value."<br>";
  }
}
function login(){
    echo "<h1> Login Info <h1>";
    foreach($_POST as $key =>$value){
      echo $key.":".$value."<br>";
    }
}
if($_POST['form_type']=='register'){
    registration();
}
elseif($_POST['form_type']=='login'){
    login();
}

?>