<?php 

      $cookie_expire = time() + (60 * 60 * 24 * 7);
      if(isset($_POST['check']))
      { 
        echo $username;
        if(preg_match('/^[a-zA-Z0-9]+$/', $_POST['username'], )) 
          {
          $username = "admin";
          $password = "123";
          if($_POST['username'] == $username && $_POST['password'] == $password)
            {
            $_SESSION['username']=$username;
            header('location:CV_Form.php');
            setcookie("user_login", "user1", $cookie_expire);
            }
          }
        else
          {
          $err = "Try again invalid data!";
          } 
    }
      
?>

<html>
<head>
<title>Main Page</title>
</head>
<body>
<Center>
<?php 
  if(isset($err))
  { echo $err; }
  $read_more = "<Read & more about us>"; 

?>     

<form method="POST" >

Username: <input name="username" size="20" type="text" />
<br/><br/>
Password: <input name="password" size="20" type="password" />
<br/><br/>
<input name="check" type="submit" value="Login" />
<a href="https://www.armourinfosec.com/">
  <?php 
  echo htmlspecialchars($read_more);
   ?>
</a>

</form>
</center> 

</body>
</html>