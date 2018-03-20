<html>
	<head>
		<title>Insert Data of members</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
	</head>
	<body style="background-color:#dcdcdc">
		<div class="container-fluid">
			<br />
			<br />
			<h2 align="center">Enter Members Details</h2><br />
			<div class="form-group">
				<form name="add_name" id="add_name">
					<div class="table-responsive">
						<table class="table" id="dynamic_field">
							<tr>
							<td><input type="text" name="userid[]" placeholder="Enter your user ID" class="form-control name_list" required /></td>
								<td><input type="text" name="name[]" placeholder="Enter your Name" class="form-control name_list" required /></td>
								<td><input type="text" name="age[]" placeholder="Enter your Age" class="form-control name_list"  required/></td>
								<td><input type="text" name="place[]" placeholder="Enter Your belonging Place" class="form-control name_list"  required /></td>
								<td> 
      <select class="form-control"  name="gender[]"required>
        <option value="">Select Gender</option>
        <option value="male">Male</option>
        <option value="female">Female</option>
        <option value="other">Other</option>
      </select>
      <br></td>
	  <td><input type="date" name="date[]" placeholder="Enter Visiting Date" class="form-control name_list" required /></td>
								<td><button type="button" name="add" id="add" class="btn btn-success">Add More</button></td>
							</tr>
						</table>
						<center><input type="button" name="submit" id="submit" class="btn btn-info btn-lg" value="Submit" onclick="fun();" style="width:300px;" /></center>
					</div>
				</form>
			</div>
		</div>
	</body>
</html>

<script>
$(document).ready(function(){
	var i=1;
	$('#add').click(function(){
		i++;
		$('#dynamic_field').append('<tr id="row'+i+'"><td><input type="text" name="userid[]" placeholder="Enter your user ID" class="form-control name_list" /></td><td><input type="text" name="name[]" placeholder="Enter your Name of Person '+i+'" class="form-control name_list" /></td><td><input type="text" name="age[]" placeholder="Enter your Age" class="form-control name_list" /></td><td><input type="text" name="place[]" placeholder="Enter Your belonging Place" class="form-control name_list" /></td><td><select class="form-control"  name="gender[]"><option value="">Select Gender</option><option value="male">Male</option><option value="female">Female</option><option value="other">Other</option></select><br></td><td><input type="date" name="date[]" placeholder="Enter Visiting Date" class="form-control name_list" /></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">X</button></td></tr>');
	});
	
	$(document).on('click', '.btn_remove', function(){
		var button_id = $(this).attr("id"); 
		$('#row'+button_id+'').remove();
	});
	
	$('#submit').click(function(){		
		$.ajax({
			url:"name.php",
			method:"POST",
			data:$('#add_name').serialize(),
			success:function(data)
		
			{
				alert(data);
				$('#add_name')[0].reset();
			}
		});
	});
	
});
function fun()
{
	window.location="web/index.php";
}
</script>




