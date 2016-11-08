<?php

$host="localhost"; // Host name 
$username="id75460_dealsdowntheblock"; // Mysql username 
$password="hackgsu2016"; // Mysql password 
$db_name="id75460_dealsdowntheblock"; // Database name 
$tbl_name="Business"; // Table name 

// Connect to server and select databse.
$connection = mysqli_connect("$host", "$username", "$password", "$db_name") or die("cannot connect"); 

$sql="SELECT * FROM Deals";


$result = mysqli_query($connection, $sql);
$rows = array();
while($r = mysqli_fetch_assoc($result)) {
    $rows[] = $r;
}

echo json_encode($rows);

?>