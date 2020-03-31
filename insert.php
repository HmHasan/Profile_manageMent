
<?php

$name = $user_name = $email = $password = $confirm_password = $file = "";

if(isset($_POST['submit']) && $_SERVER['REQUEST_METHOD']=="POST")
{
	
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
	<link rel="stylesheet" href="assets/bootstrap.min.css">
</head>
<body>
	<div class="container mt-5">
		<div class="text-center">
			<h2 class="display-4">Stay Closer With Us</h2>
			<p class="text-danger">Please Fill All Information Correctly</p>
		</div>
		<div class="row justify-content-center">
			<div class="col-md-6">
				<form action="<?php echo $_SERVER['PHP_SELF'];?>" enctype="multipart/form-data" method="post">
					<div class="form-group">
						<label for="">Name</label>
						<input type="text" class="form-control" name="name">
						<small class="form-text text-danger"></small>
					</div>
					<div class="form-group">
						<label for="">User Name</label>
						<input type="text" class="form-control" name="user_name">
						<small class="form-text text-danger"></small>
					</div>
					<div class="form-group">
						<label for="">Address</label>
						<input type="text" class="form-control" name="address">
						<small class="form-text text-danger"></small>
					</div>
					<div class="form-group">
						<label for="">Email</label>
						<input type="email" class="form-control" name="email">
						<small class="form-text text-danger"></small>
					</div>
					<div class="form-group">
						<label for="">Password</label>
						<input type="password" class="form-control" name="password">
						<small class="form-text text-danger"></small>
					</div>
					<div class="form-group">
						<label for="">Confirm Password</label>
						<input type="password" class="form-control" name="confirm_password">
						<small class="form-text text-danger"></small>
					</div>
						<lable>Gender</lable><br>
					<div class="form-check-inline">
						<label class="form-check-label"></label>
						<input type="radio" class="form-check-input" name="gender"value="male">Male
					</div>
					<div class="form-check-inline">
						<label class="form-check-label"></label>
						<input type="radio" class="form-check-input" name="gender"value="fimale">Fimale
					</div>
					<div class="form-check-inline">
						<label class="form-check-label"></label>
						<input type="radio" class="form-check-input" name="gender"value="others">others
					</div>
					<div class="form-group">
						<label for="">Photo</label><br>
						<input type="file"  name="file">
						<small class="form-text text-danger"></small>
					</div>
					<div class="form-group">
						<button type="submit" class="btn btn-success form-control" name="submit">Submit</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</body>
</html>