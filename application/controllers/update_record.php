<!DOCTYPE html>

<html lang ="en">

<head>
</title></title>
<style type="text/css">
label {display: block;}
	
</style>
</head>
<body>

<h2>Update Record</h2>

	<?php echo form_open('site/update');?>

	<p>
		<label for "bname">Branch Name:</label>
		<input type="text" name ="bname" id="bname">

	</p>
	<p>
		<label for "title">Content:</label>
		<input type="text" name ="content" id="content">
	</p>

	<p>
		<label for "title">Location:</label>
		<input type="text" name ="location" id="location">
	</p>

	<p>
		<label for "title">Contact:</label>
		<input type="text" name ="contact" id="contact">
	</p>

	<p>
		<input type="submit" value="Update">
	</p>

	<?php echo form_close();?>

</body>
</html>