<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>

<body>
	<h1>Student index</h1>

	<?php
	echo $std;
	?>

	<div class="">
		<a href="<?php echo base_url(); ?>">Go To Home</a>
		<a href="<?php echo base_url('about'); ?>">About Us</a>
		<a href="<?php echo base_url('student'); ?>/detail">Student Detail</a>
	</div>
</body>

</html>