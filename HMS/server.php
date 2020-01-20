<?php
session_start();

//initializing variables
$username="";
$email="";
$errors=array();

 //connect  to db
 $db =mysqli_connect('localhost','root','','practise')
 or die ("could not connect to database");


//register
if(isset($_POST['user_register'])){

 $username=($_POST['username']);
 $email=($_POST['email']);
 $password1=($_POST['password1']);
 $password2=($_POST['password2']);
}

//form validation
if(empty($username)){
  array_push($errors, 'username is required'); }
if(empty($password1)){
  array_push($errors, "password is required"); }
if(empty($password2)){
  array_push($errors, "password is required");}
if($password1 != password2){array_push($errors, "passwords must match each other");}

//register the user if there is no rrors
if(count($errors == 0){
  $usr_insert_query = "INSERT INTO user ('username' , 'email', 'password1') VALUES ($username,$email,$password1)";
mysqli_query($db,$usr_insert_query);
$_SESSION['username']=$username;
$_SESSION['sucess']="User sucessfully logged in";

  header("location:logindex.php");
}


//login user
if (if(isset($_POST['login_user'])){

  $username=($_post['username']);
  $password=($_POST['password1']);
  //check errors in login
   if (empty($username)){
     array_push($errors,"username is required");
   }
if(empty($password1)){
  array_push{$errors,"password is required"};
}
if(count($errors == 0 )){
  $query="SELECT * FROM user WHERE username='$username' AND password='$password1'";
  $results= mysql_query($db,$usr_insert_query);

  if(mysql_num_rows($results)){
      $_SESSION['username'] = $username;
       $_SESSION['sucess'] = "logged in sucessfully";
       header("location: logindex.php");
}
  else{
    array_push($errors,"wrrong credentials");
       }



?>
