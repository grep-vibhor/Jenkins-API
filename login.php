<?php
session_start(); // Starting Session 
$error = ''; // Variable To Store Error Message 
if (isset($_POST['submit'])) {



  $adserver = "192.168.210.24";
  $ldapconn = ldap_connect($adserver);
  if(!$ldapconn)
  {
    $error = "Connection to LDAP server failed!!";
    exit ("Connection to LDAP server failed");
  }
  $username = $_POST['username'];
  $Email = "yodlee\\" . $username;
  $password = $_POST['password'];
  $ldapbind = @ldap_bind($ldapconn,"$Email","$password");
  if($ldapbind)
  {
    $_SESSION["login_user"] = $username;
    header("location: profile.php");
    exit(); 
  }
  else
  {
    $error = "Invalid Credintials";
    $_SESSION['error'] = "Invalid Credentials";
  }

/*
  if (empty($_POST['username']) || empty($_POST['password'])) { 
    $error = "Username or Password is invalid"; 
  } 
  else{ 
    // Define $username and $password 
    $username = $_POST['username']; 
    $password = $_POST['password']; 
   

     
    if ($username == "root" && $password == "root")
    {
        $_SESSION['login_user'] = $username; // Initializing Session 
        header("location: profile.php"); // Redirecting To Profile Page 
    }
    else
    {
      $error = "Username or Password is invalid"; 
    }
} 

*/
}
?>
