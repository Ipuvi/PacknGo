<?php 
include 'db.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>

 
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>
    <title>Detail Entry Form</title>

    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
	</head>
	<body  style=";background-color:#DCDCDC">
	<div class="container-fluid"style="padding-top:100px">
	<div class="row">
	<div class="col-lg-5 col-lg-offset-3">
	<div class="well well-sm" style="background-color:white;box-shadow:2px 2px 2px 2px #DCDCDC;">
	
	<center><h1><b>Entry Form</b></h1></center>
	<br>
	


<br>
<form name="basic" method="post" action="index.php">
<div class="row">
<div class="col-lg-8 col-lg-offset-2">
<select class="myselect" name="place" style="width:100%">
  <option selected="selected">Search Here</option>
<?php
	$sql = "SELECT  * FROM palces";
						 
$result = $conn->query($sql);

if ($result->num_rows > 0) {
     // output data of each row
     while($row = $result->fetch_assoc()) {
      
?>
	

        
        
  <option value="<?php echo $row['place'];  ?>"><?php echo $row['place'] ?></option>
	<?php }}
?>
      </select>
	  </div>
	  </div>
	  <script type="text/javascript">
      $(".myselect").select2();
</script>


	  <br>
	 
<div class="row">
<div class="col-lg-8 col-lg-offset-2">
<div class="input-group">
<label class="input-group-addon" style="background-color:transparent" for="quantity"><b>date</b></label>
<input type="date" name="date" class="form-control" id="number" required />
</div>
</div>
</div>
<br>
<div class="row">
<div class="col-lg-8 col-lg-offset-2">
<form>
    <p><b> Nationality : </b> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <input type="radio" name="country[]" value="indian" checked> Indian &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <input type="radio" name="country[]" value="foreigner"> Foreigner<br>  
    </p>
</form> 
</div>
</div>
<br>
<center><button class="btn btn-md btn-success" style="width:60%" name="submit" id="submit">Submit</button></center>
<br>
</form>
</div>
	</div>
	
	 <?php
if(isset($_POST['submit'])){
	?>
	
	<?php
	$date=$_POST['date'];
	$place=$_POST['place'];
	
$query="INSERT INTO basic_data (place,date) values ('$place','$date')";
echo $query;
$run =$conn->query($query);

if($run)
{
	echo '<script language="javascript">';
	echo 'alert("Registerd Sucessfully")';
	echo '</script>';
	
}
else if(!$run)
{
echo '<script language="javascript">';
	echo 'alert("Somthing Went Wrong")';
	echo '</script>';	
}
header("location:customerdata.php");
}

?>
	</body>
	</html>