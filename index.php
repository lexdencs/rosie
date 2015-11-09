<?php include('perch/runtime.php');?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <link href="/css/bootstrap.min.css" rel="stylesheet">
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

    <!-- Custom styles for this template -->

</head>

<body>

<!-- Fixed navbar -->
<?php include ("includes/mainnav.php"); ?>

    
    
        <!-- Carousel
    ================================================== -->
         <div id="myCarousel" class="carousel slide margintopnav" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#my<a href='http://www.jqueryscript.net/tags.php?/Carousel/'>Carousel</a>" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
          <li data-target="#myCarousel" data-slide-to="3"></li>
        </ol>

            <div class="carousel-inner">
<!--
                <div class="item active"> <img src="img/slider/one.jpg" style="width:100%" data-src="holder.js/900x500/auto/#7cbf00:#fff/text: " alt="First slide">
-->
                <div class="item active"> 
                    <?php perch_content('Carousel Picture 1'); ?>
                    
                    <div class="container">
                      <div class="carousel-caption">
                      </div>
                    </div>
              </div>
                <div class="item">
              <?php perch_content('Carousel Picture 2'); ?>
                <div class="container">
                  <div class="carousel-caption">
                  </div>
                </div>
              </div>
                <div class="item">
              <?php perch_content('Carousel Picture 3'); ?>
                <div class="container">
                  <div class="carousel-caption">
                  </div>
                </div>
              </div>
            <div class="item"> <?php perch_content('Carousel Picture 4'); ?>
                <div class="container">
                  <div class="carousel-caption">
                  </div>
                </div>
              </div>
            </div>
            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
            </a>

            <a class="right carousel-control" href="#myCarousel" data-slide="next">
              <span class="glyphicon glyphicon-chevron-right"></span>
            </a>
        </div>
    
  <!-- Boxes
    ================================================== -->  
<div class="container">
    <div class="row displayboxes">
        <?php
        perch_blog_custom(array(
            'category' => array('Home'),
            'template' => 'post_in_home.html',
            'count' => '3',
        ));
        ?>
        
    </div>
</div>
    <!-- Footer
    ================================================== -->
<div class="footerbar">
    <?php include ("includes/footer.php"); ?>
</div>

</body>

</html>