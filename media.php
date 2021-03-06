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
    
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
    <script type="text/javascript" src="gallery/fresco.js"></script>
    <link rel="stylesheet" type="text/css" href="gallery/fresco.css" />
    <link rel="stylesheet" type="text/css" href="gallery/style.css" />
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

<!-- Fixed navbar -->
<?php include ("includes/mainnav.php"); ?>
    
<?php perch_content('Header'); ?>    
    
<div class="container">
    <div class="row">
        <div class="col-md-12 whitespace" id="speaking" type="text" label="speaking" />
            <?php perch_content('Speaking'); ?>
        </div>
    </div>  
    <div class="row">
        <div class="col-md-12 whitespace" id="vnewspress" type="text" label="tvnewspress" />
            <?php perch_content('TV News Press'); ?>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 whitespace" id="images" type="text" label="images" />
        <div class="demonstrations center-block">

            <?php perch_content('Gallery'); ?>

            </div>
                    </div>
    </div>
</div>
    
    
    
<!-- Footer
<div class="footerbar">
    <?php include ("includes/footer.php"); ?>
</div>

</body>

</html>