<?php include('perch/runtime.php');?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/main.css" rel="stylesheet">
    <link href="/css/button.css" rel="stylesheet">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <link href='https://fonts.googleapis.com/css?family=Oxygen:400,300,700' rel='stylesheet' type='text/css'>

    <title><?php perch_content('Browser Title'); ?></title>
    <link rel="icon" 
      type="image/png" 
      href="/img/rosiestancer.png">    
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

<!-- Fixed navbar -->
<?php include ("includes/mainnav.php"); ?>

    
    
        
<div class="container margintopnav">
    <div class="row">
        <div class="col-md-12 whitespace">

            <h1 class="mainhding">Get in touch</h1>
            <p class="maintxt"><?php perch_content('Preamble'); ?></p>
            <p class="maintxt"><a href="emailto:info@rosiestancer.com">info@rosiestancer.com</a></p>
            
<?php perch_content('Contact Form'); ?>
            
        </div>
    </div>
</div>
    
        <!-- Footer
    ================================================== -->
<div class="footerbar">
    <?php include ("includes/footer.php"); ?>
</div>

</body>

</html>