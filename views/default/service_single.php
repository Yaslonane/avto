<?php require_once 'header.php';?>

    
        <div class="head-title">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="page-title">Наши услуги</h2>
                        <div class="breadcrumbs">
                            <ul>
                                <li>You're in : </li>
                                <li>Home</li>
                                <li>Our Services</li>
                            </ul>
                        </div><!-- end breadcrumbs -->
                    </div><!-- end column -->
                </div><!-- end row -->
            </div><!-- end container -->
        </div><!-- end head-title -->

        <!-- START CONTENT HERE -->
        <div id="main">
            <div class="container">
                <div class="row">
                    <div id="primary" class="content-area">
                        <div id="content" class="site-content">
                            <div class="service-page">
                                <h1 class="entry-title">
                                    <a href="#"><?php echo $service['name']; ?></a>
                                </h1>
                                
                                    <?php if(!$service['img']): ?>
                                        
                                        <img src="../images/content/modal-lg-01.jpg" alt="Image Content Service" />
                                        
                                    <?php else: ?>
                                
                                        <img src="<?php echo $service['img']; ?>" alt="Image Content Service" />

                                    <?php endif; ?>      
                                     

                                <div class="entry-content">
                                    <?php echo $service['text']; ?>
                                </div><!-- end entry-content -->

                            </div><!-- end service page -->

                        </div><!-- end #content -->
                        
                    </div><!-- end #primary -->

                    <div id="secondary" class="col-md-4">

                            <div class="widget widget_categories">
                                <div class="widget-title-outer">
                                    <h3 class="widget-title">Service Menu</h3>
                                </div>
                                <ul>
                                    <li>
                                        <a class="pull-left" href="#">Body Repair &amp; Paint</a>
                                    </li>
                                    <li>
                                        <a class="pull-left" href="#">Routine Maintenance</a>
                                    </li>
                                    <li>
                                        <a class="pull-left" href="#">Balancing</a>
                                    </li>
                                    <li>
                                        <a class="pull-left" href="#">Consuetudium Lectorum</a>
                                    </li>
                                    <li>
                                        <a class="pull-left" href="#">Quinta Decima</a>
                                    </li>
                                    <li>
                                        <a class="pull-left" href="#">Oedem Modo</a>
                                    </li>
                                </ul>
                            </div><!-- end widget -->

                    </div><!-- end #secondary -->

                </div><!-- end row -->
            </div><!-- end container -->
        </div><!-- #main -->
        <!-- END CONTENT HERE -->

<?php require_once 'footer.php';?>
