<?php
session_start();
error_reporting(0);
include('includes/config.php');
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Educare</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<script type="applijewelleryion/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link rel="stylesheet" href="./css/bootstrap.min.css">
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<link href="css/custom.css" rel='stylesheet' type='text/css' />
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,700,600' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
<link href="css/font-awesome.css" rel="stylesheet">

<script src="js/jquery-3.6.0.min.js"></script>
<script src="js/bootstrap.min.js"></script>

<!--animate-->
<link href="css/animate.css" rel="stylesheet" type="text/css" media="all">
<script src="js/wow.min.js"></script>
	<script>
		 new WOW().init();
	</script>
</head>
<body>
<?php include('includes/header.php');?>
<div class="">
	<div class="container text-center my-5 pk">
		<h1 class="wow zoomIn animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: zoomIn;">Courses and Schedules</h1>
	</div>
</div>
<!--- /banner ---->


<div class="rooms">
	<div class="container">

		<div class="room-bottom">
			<h3>Explore Here!</h3>


<?php $sql = "SELECT * 	FROM courses";
$query = $dbh->prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $result)
{	?>
			<div class="rom-btm text-center">
				<div class="col-md-3 room-left wow fadeInLeft animated" data-wow-delay=".5s">
					<img src="admin/courseimg/<?php echo htmlentities($result->CourseImage);?>" class="img-responsive" alt="">
				</div>
				<div class="col-md-6 room-midle wow fadeInUp animated" data-wow-delay=".5s">
					<h4>Course Name: <?php echo htmlentities($result->CourseName);?></h4>
					<h6>Course Type : <?php echo htmlentities($result->CourseType);?></h6>
					<p><b>Learning from :</b> <?php echo htmlentities($result->CoursePlatform);?></p>
					<p><b>Features</b> <?php echo htmlentities($result->CourseFeatures);?></p>
				</div>
				<div class="col-md-3 room-right wow fadeInRight animated" data-wow-delay=".5s">
					<h5>USD <?php echo htmlentities($result->CoursePrice);?></h5>
					<a  type="button" href="course-details.php?pkgid=<?php echo htmlentities($result->CourseId);?>" class="view">Details</a>
				</div>
				<div class="clearfix"></div>
			</div>

<?php }} ?>



		</div>
	</div>
</div>

<?php include('includes/footer.php');?>

<?php include('includes/signup.php');?>

<?php include('includes/signin.php');?>

<?php include('includes/write-us.php');?>
</body>
</html>
