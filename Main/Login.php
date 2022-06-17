<?php
require_once '../DatabaseLogin.php';

$id=$_POST['id'];
$password=$_POST['password'];
$conn =  mysqli_connect($sn, $un, $pw, $dn);

$check = "SELECT * FROM Member WHERE id = '$id'";
$result = $conn ->query($check);
if($result->num_rows==1){
  $row=$result ->fetch_array(MYSQLI_ASSOC);
  if($row['pw']==$password){
    header("location:../Main/Home.html");
  }
  else{
    echo "<script>
      alert('잘못된 비밀번호 입니다.');
      history.back();
    </script>";
  }
}
if($result ->num_rows==0){
  echo"<script language='javascript' type='text/javascript'>
  alert('아이디가 존재하지 않습니다.');

  </script>";
}

$conn ->close();
 ?>
