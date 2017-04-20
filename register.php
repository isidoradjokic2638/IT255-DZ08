<?php

include("function.php");

    if(isset($_POST['submit'])){
         $username = $_POST['username'];
         $password = $_POST['password'];
         $name = $_POST['name'];
         $email = $_POST['email'];
             if(!empty($username) && !empty($password) && !empty($name) && !empty($email)){
          dodajKorisnika($username, $password, $name, $email);
    ?><div class = "poruka"><?php
          echo "Now, you are a member."; ?>
          </div>
          <?php
          header("Location: login.php");
          } else{
            ?><div class="poruka"><?php
           echo "You can't leave anything empty.";
}
}
?>

<link rel="stylesheet" type="text/css" href="style.css"/>
 <body>
 <div class="register">
      <h1>Register</h1>
 <form action="register.php" method="POST" id="form">
      <input type="text" name="username" placeholder="username" /><br/>
      <input type="password" name="password" placeholder="password" /><br/>
      <input type="text" name="name" placeholder="name" /><br/>
      <input type="text" name="email" placeholder="email" /><br/>
      <input type="submit" name="submit" value="Sign up"/>
 </form>
 </div>
 </body>