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
    <script src="/js/bootstrap.min.js"></script>
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

        <?php 
            
            perch_blog_custom(array(
                'template' => 'post_in_list.html',
                )); 
            /* perch_blog_recent_posts(2); */
		    ?>

        <div class="col-md-12 whitespace">
                    
            <div class="archive">
		    <h2 class="archivehead">Archive</h2>
		    <!-- The following functions are different ways to display archives. You can use any or all of these. 
		    
		    All of these functions can take a parameter of a template to overwrite the default template, for example:
		    
		    perch_blog_categories('my_template.html');
		    
		    --> 
		    <!--  By category listing -->
		    <?php perch_blog_categories(); ?>
		    <!--  By tag -->
		    <?php perch_blog_tags(); ?>
		    <!--  By year and then month - can take parameters for two templates. The first displays the years and the second the months see the default templates for examples -->
		    <?php perch_blog_date_archive_months(); ?>
        </div>
                    
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