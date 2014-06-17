<!DOCTYPE html>

<html lang ="en">

<head>
</title></title>
<style type="text/css">
label {display: block;}
	
</style>
</head>
<body>

	<a href="http://localhost/site/">Home</a>
	
	<h2>Create</h2>
	<?php echo form_open('site/create');?>

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
		<input type="submit" value="Submit">
	</p>

	<?php echo form_close();?>

	<hr />

	<h2>Read</h2>
	<?php if(isset($records)) :foreach($records as $row) :?>
	


	<div><?php echo "Branch Name:" ?> <?php echo $row->bname; ?></h2> </div>
	
	<div><?php echo "Details:" ?> <?php echo $row->content; ?></h2></div>
	<div><?php echo "Location:" ?> <?php echo $row->location; ?></h2></div>
	<div><?php echo "Contact:" ?> <?php echo $row->contact; ?></h2></div>
	<?php echo anchor("site/delete/$row->id","Delete"); ?> <?php echo anchor('site/get/$data->id"', 'View'); ?>
	<hr />
	<?php endforeach;?>
	
	<?php else : ?>

	<h2> No records were returned.</h2>


	<?php endif; ?>


</body>
</html>
