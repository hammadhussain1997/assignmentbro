<?php
session_start();
?><!DOCTYPE html>

<html lang="en-US">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>


    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	
	<meta name="robots" content="index, follow ">
	
    <!-- favicon -->
    <link rel="icon" type="image/webp" href="assets/img/favicon.webp">
	
	

	
	<title>Thanks - Assignment Bro</title>
	<meta name="description" content="Thank You For Signup Now Assignment Bro">
	<link rel="canonical" href="https://assignmentbro.co.uk/thanks" >
   
   <!-- Og Meta--> 
	<meta property="og:title" content="Thanks - Assignment Bro" >
	<meta property="og:description" content="Thank Yoou For Signup Now Assignment Bro" >
	<meta property="og:type" content="Website" >
	<meta property="og:url" content="https://assignmentbro.co.uk/thanks" >
	<meta property="og:image" content="assets/img/assignmentbro-logo.webp" >
	<meta name="theme-color" content="#ffffff">
	
	

	
    <!-- Bootstrap 5.1.3  CSS -->
    
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css" >
	

   <!-- Owl Carousel css -->
	<link rel="stylesheet" type="text/css" href="assets/css/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="assets/css/owl.theme.default.css">
    
	<!-- Google Font -->
	
	<link href="https://fonts.googleapis.com/css2?family=Catamaran:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
  
  <!-- Animation Css -->
  
<link href="assets/css/aos.css" rel="stylesheet">

  <!-- css -->
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
	 <link rel="stylesheet" type="text/css" href="assets/css/responsive.css">
	 
	 
	 <!-- Apple Touch Icon-->  
	<link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon" />
<link rel="apple-touch-icon" href="assets/img/apple-touch-icon.webp" />
<link rel="apple-touch-icon" sizes="57x57" href="assets/img/apple-touch-icon-57x57.webp" />
<link rel="apple-touch-icon" sizes="72x72" href="assets/img/apple-touch-icon-72x72.webp" />
<link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-touch-icon-76x76.webp" />
<link rel="apple-touch-icon" sizes="114x114" href="assets/img/apple-touch-icon-114x114.webp" />
<link rel="apple-touch-icon" sizes="120x120" href="assets/img/apple-touch-icon-120x120.webp" />
<link rel="apple-touch-icon" sizes="144x144" href="assets/img/apple-touch-icon-144x144.webp" />
<link rel="apple-touch-icon" sizes="152x152" href="assets/img/apple-touch-icon-152x152.webp" />
<link rel="apple-touch-icon" sizes="180x180" href="assets/img/apple-touch-icon-180x180.webp" />
	<!-- Apple Touch Icon-->  
	
	
	
	
	
	   <style>
        .top-bar {
 
   background:#ceecff;
    padding: 50px 0px;
        }

.thanks-section h1, .thanks-section p {
    text-align: center;
    color: #072c41;
	font-size:40px;
}


       


        .thanks-content p {
            padding-left: 25px;
            font-weight: 400;
            font-size: 15px;
        }
    </style>
	
	
	
	
	
	
	
	
	

</head>


<body class="home">

    
	
	
	
    <!--Header-->
		<?php include 'includes/header.php'; ?>
	<!--Header-->

		
		
	
		
		
        <main id="content" class="site-main">
		
		
		
    <section class="thanks-section top-bar ">
		<div class="container">
		<div class="thanks-content">
			
			<div class="col-md-12">
			
		  
                <h1 class="title">Dear    <span><?php  echo $_SESSION['superhero']; ?> </span> </h1>
							
							<br>
							<p>Thank You For Signing Up At Assignmnet Bro. Our experts Will Be Getting In Touch With You Shortly To Proceed With Your Request. <br><strong><a href="javascript:void(Tawk_API.toggle())">Chat Now</a></strong> With Our experts .</p>
                            
    
		</div>
		
		</div>	
		
		</div>
      
    </section>
		
		
		 <!--  CTA  Banner Image -->
	 <?php include 'includes/cta-banner-image.php'; ?>
	    <!--  CTA  Banner Image -->

		

	
			
			
        </main>
		
		
       <!-- Footer Section  -->
		<?php include 'includes/footer.php'; ?>
	    <!-- Footer Section  -->
			
			
	
	
	
	
       <!-- Script  -->
		<?php include 'includes/script.php'; ?>
	    <!-- Script  -->
	
	
	
	
</body>

</html>