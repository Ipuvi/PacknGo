<?php
$id=0;
$connect = mysqli_connect("localhost", "root", "", "abcv");
if ($connect->connect_error) {
    die("Connection failed: " . $connect->connect_error);
}
$number = count($_POST['name']);
$query = "SELECT id from customer_details order by id desc";
$result = mysqli_query($connect, $query);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) { 
$id=$row['id'];
}
}
$id=$id+1;
if($number > 0)
{
	for($i=0; $i<$number; $i++)
	{
		if(trim($_POST['name'][$i] != ''))
		{
			$sql = "INSERT INTO customer_details(id,userid,name,age,place,gender,date)VALUES('".mysqli_real_escape_string($connect, $id)."','".mysqli_real_escape_string($connect, $_POST["userid"][$i])."','".mysqli_real_escape_string($connect, $_POST["name"][$i])."','".mysqli_real_escape_string($connect, $_POST["age"][$i])."','".mysqli_real_escape_string($connect, $_POST["place"][$i])."','".mysqli_real_escape_string($connect, $_POST["gender"][$i])."','".mysqli_real_escape_string($connect, $_POST["date"][$i])."')";
			mysqli_query($connect, $sql);
		}
	}
	if($sql){
	echo "Data Inserted";
	}
}
else
{
	echo "Please Fill Data";
}