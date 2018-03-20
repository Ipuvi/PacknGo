<?php

?>
<!DOCTYPE html>
<html>
<head>
	<title>QR-Code</title>
	<style>
	.button {
    background-color: #42A5F5;
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
}
</style>
<script type="text/javascript">
	function fun(){
	window.location="../test.php"; }
</script>
</head>
<body  style="background: linear-gradient(#64B5F6,#F06292);">
	<big><big><big><center><i>Please Scan it before entering...</i> </center></big></big></big>
	<center style="margin-top: 50px">

		<img src="dynamic/web/pic4.png" height="200px" width="200px">
	</center>
	<center><button class="button" onclick="fun();">Click Here</button></center>
</body>
</html>