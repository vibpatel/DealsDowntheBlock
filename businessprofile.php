<?php





$host="localhost";


$username="id75460_dealsdowntheblock";


$password="hackgsu2016";


$db_name="id75460_dealsdowntheblock";


$tbl_name="Business";


//connection


$connection=mysqli_connect($host,$username,$password,$db_name) or die("cannot connect");

/*
if(empty($_POST['businessname'])){


  console.log("business name is empty");


  return false;
}
if(empty($_POST['usertype'])){


  console.log("user type is empty");


  return false;


}





if(empty($_POST['businesstype'])){


  console.log("business type is empty");


  return false;


}





if(empty($_POST['address'])){


  console.log("address is empty");


  return false;


}











$businessname=$_POST['businessname'];


$usertype=$_POST['usertype'];


$businesstype=$_POST['businesstype'];


$address=$_POST['address'];

*/

$username = $_POST['user'];
$username = stripslashes($username);
$username = mysqli_real_escape_string($connection, $username);

$sql="SELECT * FROM Business";





$result=mysqli_query($connection,$sql);


$rows=array();


while($r=mysqli_fetch_assoc($result)){


  $rows[]=$r;


}


echo json_encode($rows);








 ?>