

<?php if($_SESSION['login'])
{?>


<div class="top-header" >
	<div class="container">
	
			<ul class="tp-hd-lft wow fadeInLeft animated" data-wow-delay=".5s">
				<li class="hm"><a href="index.php"><i class="fa fa-home"></i></a></li>
				<li class="prnt"><a href="profile.php"> Profile</a></li>
					<li class="prnt"><a href="change-password.php">Change Password</a></li>
				<li class="prnt"><a href="mycourses.php">You Courses </a></li>
				<li class="prnt"><a href="appointment.php">Appointment</a></li>
			</ul>
			<ul class=" tp-hd-rgt wow fadeInRight animated" data-wow-delay=".5s"> 
				<li class="tol"> Your Account: </li>				
				<li class="sig"><?php echo htmlentities($_SESSION['login']);?></li> 
				<li class="sigi"><a href="logout.php" >/ Logout</a></li>
			</ul>
			<div class="clearfix"></div>

	</div>
</div><?php } else {?>
<div class="top-header ">
	<div class="container ">
		<ul class="tp-hd-lft wow fadeInLeft animated" data-wow-delay=".5s">
			<li class="hm"><a href="index.php"><i class="fa fa-home"></i></a></li>
				<li class="hm"><a href="admin/index.php">Admin Login</a></li>
		</ul>
		<ul class="tp-hd-rgt wow fadeInRight animated" data-wow-delay=".5s"> 
			<li class="tol">Toll Number : 123-4568790</li>				
			<li class="sig"><a href="#" data-toggle="modal" data-target="#myModal" >Sign Up</a></li> 
			<li class="sigi"><a href="#" data-toggle="modal" data-target="#myModal4" >/ Sign In</a></li>
        </ul>
		<div class="clearfix"></div>
	</div>
</div>
<?php }?>

<div class="header1">
	<div class="container">
	
		<div class="start text-center wow fadeInDown animated" data-wow-delay=".5s">
			<a href="index.php"> 
				<span>Start your Children Future from Here!</span>
			</a>
		</div>
	
		<div class="" data-wow-delay=".5s"> 
			<div class="edu-logo">
				<img src="/images/mine/logo.png" alt="" class="w-100">
			</div>
		</div>
		<div class="clearfix"></div>
	</div>
</div>

<header class="header position-sticky " id="menu" style="background-color: #28334B;">
	<a href="index.php" class="logo tt">Educare</a>
	<input class="menu-btn" type="checkbox" id="menu-btn" />
  	<label class="menu-icon" for="menu-btn"><span class="navicon"></span></label>
	  <ul class="menu ">
                        <li>
                            <a href="index.php" type="button" class="btn shadow  ">Home</a>
                        </li>
                        <li >
                            <a href="page.php?type=about" type="button" class="btn shadow">About</a>
                        </li>
                        <li >
                            <a href="course-list.php" type="button" class="btn shadow  ">Courses </a>
                        </li>
                        <li>
                            <a href="page.php?type=contact" type="button" class="btn shadow ">Contact Us</a>
							<?php
								if($_SESSION['login'])
{?>
						<li class="text-light" style="margin-left: 600px!important;">
							<a href="#" type="button" class="btn  " data-toggle="modal" data-target="#myModal3"> Ask us! </a>  
						</li>
							<?php } else { ?>
                        <li >
                            <a href="enquiry.php" >Appointment</a>
                        </li>
						<?php } ?>
						<div class="clearfix"></div>
                    </ul>
</header>


