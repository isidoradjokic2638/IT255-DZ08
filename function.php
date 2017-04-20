<?php

include("config.php");

 
 function checkIfUserExist($username) {
global $conn;
$sql = "SELECT * FROM korisnik WHERE username=?";
$query = $conn->prepare($sql);
$query->bind_param('s',$username);
$query->execute();
$query->store_result();
if ($query->num_rows > 0) {
return true;
} else{
return false;
}
$query->close();
}

 function dodajKorisnika($username, $password, $name, $email) {
	global $conn;
if(!checkIfUserExist($username)){
$query = $conn->prepare("INSERT INTO korisnik (username,password,name,email) VALUES (?,?,?,?)");
$query->bind_param('ssss',$username,md5($password),$name,$email);
$query->execute();
$query->close();
} else{
echo "Korisnik vec postoji!";
}
}

function proveriKorisnika($username,$password) {
global $conn;
$sql = "SELECT * FROM korisnik WHERE username=? AND password=?";
$query = $conn->prepare($sql);
$query->bind_param('ss',$username,md5($password));
$query->execute();
$query->store_result();
if ($query->num_rows > 0) {
return 1;
} else{
return 0;
}
$query->close();
}


?>