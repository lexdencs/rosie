<?php include('perch/runtime.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Rosie Stancer Blog</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/main.css" rel="stylesheet">
    <link href="/css/button.css" rel="stylesheet">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>	<link rel="alternate" type="application/rss+xml" title="RSS" href="rss.php" />
	<?php perch_get_css(); ?>
	<link rel="stylesheet" href="blog.css" type="text/css" />
    
    <link href='https://fonts.googleapis.com/css?family=Oxygen:400,300,700' rel='stylesheet' type='text/css'>

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
<!-- Fixed navbar -->
<nav class="navbar navbar-default navbar-fixed-top navouter">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/index.php"><?php perch_content('Page Title'); ?></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="/index.php">home</a></li>
                <li><a href="blog.php">blog</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">about <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="/about.php">Rosie</a></li>
                        <li><a href="/about.php#polarh">Polar Heritage</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">projects <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="/projects.php">North Pole Solo</a></li>
                        <li><a href="/projects.php#currentprojects">Current Projects</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">training <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="/training.php">Rosie's Programme</a></li>
                        <li><a href="/training.php#trainwith">Train with Rosie</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">people <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="/people.php">Sponsors</a></li>
                        <li><a href="/people.php#charities">Charities</a></li>
                        <li><a href="/people.php#theteam">The team</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">media <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="/media.php">Speaking</a></li>
                        <li><a href="/media.php#tvnewspress">TV, news and press</a></li>
                        <li><a href="/media.php#images">Images</a></li>
                    </ul>
                </li>
                <li><a href="/contact.php">contact</a></li>
            </ul>
        </div>
        <!--/.nav-collapse -->
    </div>
</nav>
	
	<!--  change cols2-nav-right to cols2-nav-left if you want the sidebar on the left -->
    <div class="container margintopnav">
    <div class="row">
	<div class="wrapper cols2-nav-right">
	
		<div class="primary-content">
	   
		    <?php 	        
		        // defaults for all modes
		        $posts_per_page = 10;
		        $template 		= 'post_in_list.html';
		        $sort_order		= 'DESC';
		        $sort_by		= 'postDateTime';

		        // Have we displayed any posts yet?
		        $posts_displayed = false;

		        /* 
		        	perch_get() is used to get options from the URL.
					
					e.g. for the URL 
						/blog/archive.php?cat=news

					perch_get('cat') would return 'news' because cat=news.


					The code below looks for different options in the URL, and then displays different types of listings based on it.
		        */

		        
		        /* --------------------------- POSTS BY CATEGORY --------------------------- */
		        if (perch_get('cat')) {
		            echo '<h1 class="blogarchheading">Archive of: '.perch_blog_category(perch_get('cat'), true).'</h1>';

		            perch_blog_custom(array(
							'category'   => perch_get('cat'),
							'template'   => $template,
							'count'      => $posts_per_page,
							'sort'       => $sort_by,
							'sort-order' => $sort_order,
		                    ));

		            $posts_displayed = true;
		        }
		        
		        
		        /* --------------------------- POSTS BY TAG --------------------------- */
		        if (perch_get('tag')) {
		            echo '<h1 class="blogarchheading">Archive of: '.perch_blog_tag(perch_get('tag'), true).'</h1>';

		            perch_blog_custom(array(
							'tag'   	 => perch_get('tag'),
							'template'   => $template,
							'count'      => $posts_per_page,
							'sort'       => $sort_by,
							'sort-order' => $sort_order,
		                    ));

		            $posts_displayed = true;
		        }
		        
		        

		        /* --------------------------- POSTS BY DATE RANGE --------------------------- */
		        if (perch_get('year')) {
		            
					$year              = intval(perch_get('year'));
					$date_from         = $year.'-01-01 00:00:00';
					$date_to           = $year.'-12-31 23:59:59';
					$title_date_format = '%Y';
		            
		            
		            // Month and Year?
		            if (perch_get('month')) {
						$month             = intval(perch_get('month'));
						$date_from         = $year.'-'.str_pad($month, 2, '0', STR_PAD_LEFT).'-01 00:00:00';
						$date_to           = $year.'-'.str_pad($month, 2, '0', STR_PAD_LEFT).'-31 23:59:59';
						$title_date_format = '%B, %Y';
		            }

		            echo '<h1 class="blogarchheading">Archive of: '.strftime($title_date_format, strtotime($date_from)).'</h1>';

		            perch_blog_custom(array(
							'filter'     => 'postDateTime',
							'match'      => 'eqbetween',
							'value'      => $date_from.','.$date_to,
							'template'   => $template,
							'count'      => $posts_per_page,
							'sort'       => $sort_by,
							'sort-order' => $sort_order,
		                    ));

		            $posts_displayed = true;
		        }
		        
		        

		        /* --------------------------- POSTS BY AUTHOR --------------------------- */
		        if (perch_get('author')) {

		        	echo '<h1 class="blogarchheading">Posts by '.perch_blog_author(perch_get('author'), array(
		        											'template' => 'author_name.html',
		        											), true).'</h1>';


		        	perch_blog_custom(array(
							'author'   	 => perch_get('author'),
							'template'   => $template,
							'count'      => $posts_per_page,
							'sort'       => $sort_by,
							'sort-order' => $sort_order,
		                    ));

		            $posts_displayed = true;
		        }

		        
		      	/* --------------------------- DEFAULT: ALL POSTS --------------------------- */

		      	if ($posts_displayed == false) {

		      		// No other options have been used; no posts have been displayed yet.
		      		// So display all posts.
		      		 
		      		echo '<h1 class="blogarchheading">Archive</h1>';

		      		perch_blog_custom(array(
							'template'   => $template,
							'count'      => $posts_per_page,
							'sort'       => $sort_by,
							'sort-order' => $sort_order,
		                    ));

		      	}

		    ?>
            
	    </div>

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
</div>
	
	<!-- Footer
    ================================================== -->
<div class="footerbar">
    <?php include ("includes/footer.php"); ?>
</div>
    
	<?php perch_get_javascript(); ?>
</body>
</html>