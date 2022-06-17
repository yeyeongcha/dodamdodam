<?php
require_once '../DatabaseLogin.php';
$conn = mysqli_connect($servername, $username, $password, $dbname);

if(!$conn){
  die("Connecton failed:" . mysqli_connect_error());
}

$sql1 = "CREATE TABLE Member(
  mi INT(11) NOT NULL AUTO_INCREMENT,
  id VARCHAR(15) NOT NULL,
  pw VARCHAR(15) NOT NULL,
  name VARCHAR(10) NOT NULL,
  birth DATE NOT NULL,
  phonenumber INT NOT NULL,
  mail VARCHAR(255),
  CONSTRAINT Member_PK PRIMARY KEY(mi)
)";

if(mysqli_query($conn, $sql1)){
  echo "Table member created successfully<br />";
}else{
  echo "Error creating table:<br />" . mysqli_error($conn);
}

$sql11 = "INSERT INTO Member (id,pw,name,birth,phonenumber)
VALUES('admin', '1111','관리자','2019-07-30', '01058230300')";

if ($conn->query($sql11) === TRUE) {
    echo "New record created successfully<br>";
} else {
    echo "Error: " . $sql11 . "<br>" . $conn->error;
}

mysqli_close($conn);
 ?>
