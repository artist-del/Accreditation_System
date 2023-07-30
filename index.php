<?php 
    if(isset($_POST['submit'])){
        $status = $_POST['status'];

        if($status == 'faculty'){
            header('location: pages/faculty/login.php');
        }
        else{
            header('location: pages/admin/login.php');
        }
    }
?>
<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>Accreditation System</title>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="keywords" content="Slide Login Form template Responsive, Login form web template, Flat Pricing tables, Flat Drop downs Sign up Web Templates, Flat Web Templates, Login sign up Responsive web template, SmartPhone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />

	 <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>

	<!-- Custom Theme files -->
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
	<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all" />
	<!-- //Custom Theme files -->

	<!-- web font -->
	<link href="//fonts.googleapis.com/css?family=Hind:300,400,500,600,700" rel="stylesheet">
	<!-- //web font -->

</head>

<style>
    select{
        height: 50px;
        width: 100%;
        font-size: 20px;
        text-align: center;
    }
</style>
<body>

<!-- main -->
<div class="w3layouts-main"> 
	<div class="bg-layer">
		<h1>Accreditation Management System</h1>
		<div class="header-main">
			<div class="main-icon">
				<span class="fa fa-eercast"></span>
			</div>
			<div class="header-left-bottom">
				<form action="#" method="post">
					<div class="icon1">
                        <center>
                        <span class="fa fa-user"></span>
                        </center>
						
						<select name="status">
                            <option value="faculty">Faculty</option>
                            <option value="admin">Admin</option>
                        </select>
					</div>
					
					<div class="bottom">
						<button type="submit" name="submit" class="btn">Log In</button>
					</div>
					
				</form>	
			</div>
			<div class="social">
                <center>
				<ul>
					<li><a href="#" class="facebook"><span class="fa fa-facebook"></span></a></li>
					<li><a href="#" class="twitter"><span class="fa fa-twitter"></span></a></li>
					<li><a href="#" class="google"><span class="fa fa-google-plus"></span></a></li>
				</ul>
                </center>

			</div>
		</div>
		
		<!-- copyright -->
		<div class="copyright">
			<p>Copyright © RSU Cajidiocan Campus 2022</p>
		</div>
		<!-- //copyright --> 
	</div>
</div>	
<!-- //main -->

</body>
</html>