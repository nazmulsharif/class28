<?php
	if(isset($_POST['submit'])){
		$fname = $_POST['fname'];
		$email = $_POST['email'];
		$pass  = $_POST['pass'];
		$passLen = strlen($pass);
		if(empty($fname)){
			$fnameError =  "Name can not be empty";
		}
		else if(empty($email)){
			$emailError =  "Email can not be empty";
		}
		else if(empty($pass)){
			$passError =  "Password can not be empty";
		}
		elseif ($passLen<=6 || $passLen>=10) {
			$passLenError = "password must be between 6 and 10 characters";
		}
		else
			$success =  "All ok";
	}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
	<link rel="stylesheet" href="">
</head>
<body>
	<div class="container">
			<form action="#" class="w-50" style="margin: 50px auto" method="post">
				<?php 
					if(!empty($success)){
						echo '<h6 class="alert alert-success text-center">'.$success.'</h6>'; 
					}

				?>
				<div class="form-group">
					<input type="text" name="fname" class="form-control"placeholder="Full Name">
					
						<?php 
							if(!empty($fnameError)){
								echo '<h6 class="alert alert-danger mt-1">'.$fnameError.'</h6>'; 
						
								
							}

						?>
						
					
				</div>
				<div class="form-group">
					<input type="email" name="email" class="form-control"placeholder="Email">
					<?php 
							if(!empty($emailError)){
								echo '<h6 class="alert alert-danger mt-1">'.$emailError.'</h6>'; 
							}

						?>
						
				</div>
				<div class="form-group">
					<input type="password" name="pass" class="form-control"placeholder="Password">
					<?php 
							if(!empty($passError)){

								echo '<h6 class="alert alert-danger mt-1">'.$passError.'</h6>'; 
							}
							if(!empty($passLenError)){

								echo '<h6 class="alert alert-danger mt-1">'.$passLenError.'</h6>'; 
							}
								

						?>
						
				</div>
				<div class="form-group">
					<input type="submit" class="btn btn-success" name="submit">
				</div>
			</form>
	</div>
	
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

</body>
</html>s