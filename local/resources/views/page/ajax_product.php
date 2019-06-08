<?php 

$servername = "localhost";
$username = "root";
$password = "";

try {
	$conn = new PDO("mysql:host=$servername;dbname=pharm", $username, $password
        //แก้ภาษาไทย
		,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'UTF8'"));
    // set the PDO error mode to exception
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //echo "Connected successfully";
}
catch(PDOException $e)
{
	echo "Connection failed: " . $e->getMessage();
   //echo "Something Error"
}

echo $_GET['q'];
// $sql = "SELECT tb_allproduct.name, tb_allproduct.code FROM tb_allproduct 
// WHERE code LIKE '%".$_GET['q']."%'
// LIMIT 10"; 
// $result = $conn->query($sql);


// $json = [];
// while($row = $result->fetch_assoc()){
// 	$json[] = ['id'=>$row['code'], 'text'=>$row['name']];
// }


echo json_encode($json);


?>