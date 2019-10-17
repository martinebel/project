<?php
require 'db.php';
$stmt = $dbh->prepare("select * from users where email=:txtEmail");
$stmt->bindParam(":txtEmail", $_POST['user-name']);
$stmt->execute();
$result = $stmt->fetchAll();
foreach($result as $row){
  if($row['password']==md5($_POST['user-password']))
  {

    $_SESSION['idusuario'] = $row['user_id'];
    $_SESSION['nombreusuario'] = $row['name'];
    $_SESSION['tipousuario'] = $row['role'];
    $_SESSION['emailusuario'] = $row['email'];

    header('Location: dashboard.php');exit();
  }
  else
  {
    header('Location: index.php?e=1');exit();
  }
}

?>
