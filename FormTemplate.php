
TEMPLATE #1

<!DOCTYPE html>
<html>
<head>
	<title>Contact Us</title>
	<link href="https://stackpath.bootstrapcdn.com/bootswatch/3.4.1/cosmo/bootstrap.min.css" rel="stylesheet" integrity="sha384-6SQbkR6/v7QGEoFg1os3KF4uJMFxP6vxm6vLCSbbwwHllJdb4FqkWMiYLtHWGGN4" crossorigin="anonymous">
</head>

<body>
	<nav class="navbar navbar-default">
		<div class="container">
			<div class="navbar-header">
				<a class="navbar-brand" href="index.php">My Website</a>
			</div>
		</div>
	</nav>

	<div class="container">	
      <form method="post" action="">
	      <div class="form-group">
		      <label>Name</label>
		      <input type="text" name="name" class="form-control" value="">
	      </div>
	      <div class="form-group">
		      <label>Email</label>
		      <input type="text" name="name" class="form-control" value="">
	      </div>
	      <div class="form-group">
		      <label>Message</label>
		      <input type="text" name="name" class="form-control" value="">
	      </div>
	      <br>
	      <button type="submit" name="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>


</body>
</html>


TEMPLATE #2

<!DOCTYPE html>
<html>
<head>
	<title>PHP Sessions</title>
</head>
<body>
      <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?> ">
      	<input type="text" name="name" placeholder="Enter Name">
      	<br>
		<input type="text" name="email" placeholder="Enter Email">
		<br>
		<input type="submit" name="submit" value="Submit">
      </form>

</body>
</html>