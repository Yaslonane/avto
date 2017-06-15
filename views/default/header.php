<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo self::$title; ?></title>

    <!-- Bootstrap -->
    <link href="<?php echo TMPL; ?>css/styles.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    
    <div id="page" class="hfeed site"><!-- start page wrapper -->

    	<header id="masthead" class="site-header navbar-fixed-top">
    		<div class="header-navigation">
    			<div class="container-fluid">

    				<div class="row">

    					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".site-navigation" aria-expanded="false">
				        	<span class="sr-only">Toggle navigation</span>
				        	<span class="icon-bar"></span>
				        	<span class="icon-bar"></span>
				        	<span class="icon-bar"></span>
				        </button>

				        <div class="logo navbar-brand">
                                            <a href="#"><img src="../images/logo.png" height = "60" alt="" title="Bengkel"></a>
				        </div><!-- end logo -->

				        <nav id="primary-navigation" class="site-navigation navbar-collapse collapse" role="navigation">
				        	<div class="nav-menu">
    							<ul class="menu">
    								<li class="active"><a href="index.html">Домой</a></li>
                                    <li><a href="about.html">О нас</a></li>
    								<li class="has-child"><a href="services">Услуги</a>
										<ul class="sub-menu">
											<li><a href="service-single.html">Услуга 1</a></li>
                                            <li><a href="service-single.html">Услуга 2</a></li>
										</ul>
    								</li>
    								<li class="has-child"><a href="#">Страницы</a>
										<ul class="sub-menu">
                                            <li><a href="gallery.html">Галерея</a></li>
                                            <li><a href="search-result.html">Результаты поиска</a></li>
                                            <li><a href="elements.html">Веб элементы</a>
                                                <ul class="sub-menu">
                                                    <li><a href="#">Подменю уровня 2</a></li>
                                                    <li><a href="#">Подменю уровня 2</a>
                                                </ul>
                                            </li>
											<li><a href="404.html">404 Страница</a></li>
										</ul>
    								</li>
    								<li><a href="blog.html">Блог</a>
                                        <ul class="sub-menu">
                                            <li><a href="blog-single.html">Запись блога 1</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="testimonial.html">Рекомендации</a></li>
    								<li><a href="faq.html">FAQ</a></li>
    							</ul>
    						</div><!-- end nav-menu -->
				        </nav><!-- end #primary-navigation -->

				        <div class="appoinment-header">
				        	<a href="contact.html" class="btn btn-md btn-default">Make an Appoinment</a>
				        </div>

    				</div><!-- end row -->
    				
    			</div><!-- end container-fluid -->
    		</div><!-- end header-navigation -->
    	</header><!-- end #masthead -->

