<?php
	require("includes/common.php");
	if (!isset($_SESSION['email'])) {
    header('location: index.php');
}

$value = $_SESSION['value'];


$ccaseid = $_SESSION['ccaseid'];





if(isset($_POST["submit"])) {
$ficaseid = $_POST['ficaseid'];
$fiseizingofficer = $_POST['fiseizingofficer'];
$fimakemodel = $_POST['fimakemodel'];
$filocationfound = $_POST['filocationfound'];
$firearms_query = "INSERT INTO FIREARMS (CASE_ID, SEIZING_OFFICER, MAKEMODEL, LOCATION_FOUND) VALUES('$ficaseid','$fiseizingofficer','$fimakemodel','$filocationfound')";
$firearms_submit = mysqli_query($con, $firearms_query) or die(mysqli_error($con));
if($firearms_submit) {
		echo "<script>if(confirm('Insertion Successful! Proceed Next -->')){document.location.href='insertknownforensics.php'};</script>";
		//header('location: insertknownforensics.php');
	}
	else {
		$message = "Couldnt insert values! Please Try again!";
		echo "<script>if(confirm('Couldnt insert values! Please Try again!')){document.location.href='insertfirearms.php'};</script>";
	}
}

$officer = "CALL `viewOfficer`()";
$run_officer = mysqli_query($con, $officer);


?> 



<!DOCTYPE html>
<html class="no-js">
    <head>
        <meta charset="utf-8">
        <title> Write Report </title>
        <meta name="description" content="">
		<!-- Mobile Specific Meta -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet'>
        
        <!-- Syntax Highlighter -->
        <link rel="stylesheet" type="text/css" href="syntax-highlighter2/styles/shCore.css" media="all">
        <link rel="stylesheet" type="text/css" href="syntax-highlighter2/styles/shThemeDefault.css" media="all">
		
		<!-- Font Awesome CSS-->
        <link rel="stylesheet" href="css2/font-awesome.min.css">
        <!-- Normalize/Reset CSS-->
		<link rel="stylesheet" href="css2/normalize.min.css">
		<!-- Main CSS-->
        <link rel="stylesheet" href="css2/main.css">
		
    </head>
	
    <body id="welcome">
    
        <aside class="left-sidebar">
            <div class="logo">
                <a href="#welcome">
                    <img style="height:40px; width:50px" src="img/logo.jpg" alt="">
                </a>
            </div>
            <nav class="left-nav">
                <ul id="nav">
                    <li><a href="#Firearms" style="text-decoration: none;"> Firearms </a></li>
                </ul>
            </nav>
        </aside>
		
		
		
		
						
		
		
		<div id="main-wrapper">
			
		    <div class="main-content">
				<div class="content-header">
		            <h1> Write Report </h1>
		        </div>
				
				<form method="POST">
					<section id="Firearms">
		            <h2 class="title"> Firearms </h2>
		            
							<div class="form-group row">
								<label class="col-sm-2 col-form-label"> Case Id </label>
								<div class="col-sm-3">
									<input type="text" class="form-control" name="ficaseid" value="<?php echo $ccaseid ?>" required="true">
								</div> 
							</div>
							<div class="form-group row">
								<label class="col-sm-2 col-form-label"> Seizing Officer Id </label>
								<div class="col-sm-3">
									<input type="text" class="form-control" name="fiseizingofficer" placeholder="" required="true">
								</div>
							</div>
							<div class="form-group row">
								<label class="col-sm-2 col-form-label"> Make - Model </label>
								<div class="col-sm-3">
									<input type="text" class="form-control" name="fimakemodel" placeholder="" required="true">
								</div>
							</div>
							<div class="form-group row">
								<label class="col-sm-2 col-form-label"> Location Found </label>
								<div class="col-sm-3">
									<input type="text" class="form-control" name="filocationfound" placeholder="" required="true">
								</div>
							</div>
							
							<div class="form-group row">
								<div class="col-sm-10">
									<button type="submit" name="submit" class="btn btn-primary btn-lg"> Proceed </button>
								</div>
							</div>
					
		        </section>      	       
		        
				</form>
		    </div>
			<div class="container-fluid">
					<div style="background-color:black; margin-top:127px" class="row">
						<div class="col-lg-12 col-md-12 col-sm-12 text-center">
							<div class="single-footer-widget">
								<h6 class="text-white"> Forensic Department | India </h6>
								<p class="text-muted footer-text">
									Copyright &copy Varun <script>document.write(new Date().getFullYear());</script> | All rights reserved 
								</p>								
							</div>
						</div>
					</div>
				</div>
			
			
		</div>
		
		
		
		<!-- Essential JavaScript Libraries
		==============================================-->
        <script type="text/javascript" src="js2/jquery-1.11.0.min.js"></script>
        <script type="text/javascript" src="js2/jquery.nav.js"></script>
        <script type="text/javascript" src="syntax-highlighter2/scripts/shCore.js"></script> 
        <script type="text/javascript" src="syntax-highlighter2/scripts/shBrushXml.js"></script> 
        <script type="text/javascript" src="syntax-highlighter2/scripts/shBrushCss.js"></script> 
        <script type="text/javascript" src="syntax-highlighter2/scripts/shBrushJScript.js"></script> 
        <script type="text/javascript" src="syntax-highlighter2/scripts/shBrushPhp.js"></script> 
        <script type="text/javascript">
            SyntaxHighlighter.all()
        </script>
        <script type="text/javascript" src="js2/custom.js"></script>
		
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" ></script>
		
    </body>
</html>
