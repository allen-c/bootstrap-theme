<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- styles -->
    <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <?php wp_enqueue_script("jquery"); ?>
    <?php wp_head(); ?>
</head>
  <body>

  <div class="navbar navbar-inverse navbar-fixed-top">
	
	<?php 
 	 // Fix menu overlap bug..
 	 if ( is_admin_bar_showing() ) echo '<div style="min-height: 28px;"></div>'; 
	?>
		
      <div class="container-fluid">
	<div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="<?php echo site_url(); ?>"><?php bloginfo('name'); ?></a>
        </div>
	<div class="pull-right">
		<div class="collapse navbar-collapse">
		<ul class="nav navbar-nav">
	   		<li class="dropdown">
          			<a href="#" class="dropdown-toggle" data-toggle="dropdown">Section Header<span class="caret"></span></a>
            			<ul class="dropdown-menu" role="menu">							<!-- section 1 -->
              				<li><a href="#link1">Link 1</a></li>
              				<li><a href="#link2">Link 2</a></li>
							<li><a href="#link3">Link 3</a></li>							<!-- section 2 -->
							<li class="divider"></li>
							<li><a href="#link4">Link 4</a></li>
            			</ul>
          		</li>
			
			<!-- About, Contact nav -->
			<li>
              			<?php wp_list_pages(array('title_li' => '', 'include' => '10,12')); ?>
			</li>
          	</ul>
		</div><!-- collapse -->
	</div><!-- pull-right -->
      </div>
  </div>

  <div class="container-fluid"><!-- Content div start -->