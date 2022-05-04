<?php
session_start();
if(isset($_POST['signin']))
{
$email=$_POST['email'];
$password=md5($_POST['password']);
$sql ="SELECT EmailID,Password FROM users WHERE EmailID=:email and Password=:password";
$query= $dbh -> prepare($sql);
$query-> bindParam(':email', $email, PDO::PARAM_STR);
$query-> bindParam(':password', $password, PDO::PARAM_STR);
$query-> execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
if($query->rowCount() > 0)
{
$_SESSION['login']=$_POST['email'];

echo "<script type='text/javascript'> document.location= 'course-list.php'; </script>";
} else{
	
	echo "<script>alert('Invalid Details');</script>";

}

}

?>

<div class="modal fade" id="myModal4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
				<div class="modal-dialog" role="document">
					<div class="modal-content modal-info">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>						
						</div>
						<div class="modal-body modal-spa">
							<div class="login-grids">
								<div class="login">
										<div class="mb-3">

											<h1>Hey Yo! SignIn here!</h1>
											</div>
									<div class="login-right">
										<form method="post">
											
	<input type="text" name="email" id="email" class="form-control mb-2" placeholder="Enter your Email"  required="">	
	<input type="password" name="password" class="form-control mb-2"  id="password" placeholder="Password" value="" required="">	
											<h4><a href="forgot-password.php">Forgot password</a></h4>
											
											<input type="submit" class="form-control mb-2 bg-info"  name="signin" value="SIGNIN">
										</form>
									</div>
									<div class="clearfix"></div>								
								</div>
								<p>By logging in you agree to our <a href="page.php?type=terms">Terms and Conditions</a> and <a href="page.php?type=privacy">Privacy Policy</a></p>
							</div>
						</div>
					</div>
				</div>
			</div>