<?php
session_start();
$db=mysqli_connect('localhost','root','','practise');
$errors= array();
$fullname="";
$pass="";

//log user in from login page
if (isset($_POST['login_user']))
{
    $username= ($_POST['username']);
    $pass1= ($_POST['password']);

if(empty($username))
{
	array_push($errors, "Username is required");
}

if(empty($pass1))
{
	array_push($errors, "Password is required");
}

if (count($errors)==0){
	$password1= md5($pass1);
	$query="SELECT * FROM user WHERE username='$username' AND password='$password1'";
	$result = mysqli_query($db, $query);

	if(mysqli_num_rows($result)==1){
		$row = mysqli_fetch_assoc($result);
		$user_id = $row['ID'];

		$_SESSION["ID"] = $user_id;

		header("Location: index.php");
    }
    else{
           // array_push($errors,"wrong username/password");
            echo '<script type="text/javascript">
            window.onload = function () { alert("Username or password incorrect..!!");
            window.location.href = "login.php";
            };
            </script>';
		}
}
}

// insert details to users table
if (isset($_POST['user_register']))
{
$username= ($_POST['username']);
$email= ($_POST['email']);
$password= ($_POST['password1']);
$confirmpass= ($_POST['password2']);

//fields empty
if(empty($username))
{
array_push($errors,"Please enter username!");
}
if(empty($email))
{
array_push($errors,"Please enter e-mail!");
}
if(empty($password))
{
array_push($errors,"Please enter password!");
}
if(empty($confirmpass))
{
array_push($errors,"Please enter password!");
}
if(($password) != ($confirmpass))
{
array_push($errors,"Password is not matched!");
}

       //no errors
       if(count($errors) == 0)
       {
      // $enpass = md5($password);
       $sql="INSERT INTO user (username,email,password) VALUES ('$username','$email','$password')";
       mysqli_query($db, $sql);

       header('location:login.php');
     }
    }   


//logout
if(isset($_GET['logout'])){
session_destroy();
header('location:index.php');
}
?>
