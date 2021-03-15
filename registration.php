<?php
require_once('config.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>User Registration | PHP</title>
	
</head>
<body>

<div>
	<?php
	
	?>	
</div>

<div>
	<form action="process.php" method="post">
					<h1>Registration</h1>
					<p>Fill up the form with correct values.</p>
					<hr class="mb-3">
					<label for="id"><b>ID</b></label>
					<input class="form-control" id="id" type="text" name="id" required>

					<label for="name"><b>Name</b></label>
					<input class="form-control" id="name"  type="text" name="name" required>

					<label for="age"><b>age</b></label>
					<input class="form-control" id="age"  type="number" name="age" required>

					<label for="address"><b>Address</b></label>
					<input class="form-control" id="address"  type="text" name="address" required>

					<label for="salary"><b>Salary</b></label>
					<input class="form-control" id="salary"  type="number" name="salary" required>
					<hr class="mb-3">
					<input class="btn btn-primary" type="submit" id="register" name="create" value="Sign Up">
	
		
		
	</form>
</div>
</body>
</html>
</body>
</html>
