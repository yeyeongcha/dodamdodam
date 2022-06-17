<?php
require_once '../DatabaseLogin.php';
$conn =  mysqli_connect($sn, $un, $pw, $dn);

$id = $_POST['user_id'];
$pw = $_POST['user_pw'];
$name = $_POST['user_name'];
$birth = $_POST['user_birth'];
$phonenumber = $_POST['user_ph1'].$_POST['user_ph2'].$_POST['user_ph3'];
$mail = $_POST['user_email'].$_POST['emadress'];

$check = "SELECT * FROM Member WHERE id='$id'";
$result_check = $conn->query($check);
$rows = $result_check->num_rows;

$insert = "INSERT INTO Member(id,pw,name,birth,phonenumber,mail)
VALUES('$id','$pw','$name','$birth','$phonenumber','$mail')";
$result_insert = $conn->query($insert);

if($rows >= 1){
  echo"<script language='javascript' type='text/javascript'>
  alert('아이디가 이미 존재합니다');
  history.back();
  </script>";
}

if($result_insert == TRUE){
  echo"<script language='javascript' type='text/javascript'>
  alert('회원가입이 완료 되었습니다.');
  history.back();
  </script>";
}else{
  echo"회원가입에 실패하셨습니다.";
}
 ?>
