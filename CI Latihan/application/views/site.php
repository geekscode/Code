<!DOCTYPE html>
<html lang="en">
	<head>

   		<meta http-equiv="Content-Type" content="text/html" charset="utf-8">
   		<meta name="viewport" content="width=device-width, initial-scale=1.0">
   		<meta name="description" content="">
   		<meta name="keywords" content="">
   		<meta name="author" content="">


   		<title>Scratch</title>
	</head>
	<body>
		<div class="container">
			<div class="row">		
				<p>My View</p>
				<?php foreach ($hasil as $row) :?>
					<h1><small><?php echo $row->title; ?></small></h1>
					<h3><?php echo $row->contents;?></h3>

				<?php endforeach; ?>
			</div>
		</div>
	</body>
</html>