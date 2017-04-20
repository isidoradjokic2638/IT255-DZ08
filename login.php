<?php

session_start();
include("function.php");


if(isset($_POST['submit'])){
   $username = $_POST['username'];
   $password = $_POST['password'];
      if(!empty($username) && !empty($password)){

            if(proveriKorisnika($username,$password)){
                   $_SESSION['username'] = $username;
            }else{
              ?><div class = "poruka"><?php
                   echo "Wrong password or username.";?></div><?php
            }
       }else{
            ?><div class = "poruka"><?php
            echo "You can't leave anything empty.";?></div><?php
       }
 }

if(isset($_SESSION['username'])){
          echo "Logovan si kao: ".$_SESSION['username'];
    }else{
?>
   <body>
   <link rel="stylesheet" type="text/css" href="style.css"/>
   <div class="login">
   <h1>Login</h1>
   <form action="login.php" method="POST" id="form">
            <input type="text" name="username" placeholder="username" /><br/>
            <input type="password" name="password" placeholder="password"/><br/>
    <input type="submit" name="submit" value="Log in"/>
</form>
</div>
</body>
<?php
}
?>

