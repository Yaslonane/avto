<?php require_once 'header.php';?>

    	<div class="featured-slider">
    		<div class="flexslider">
    			<ul class="slides">

    				<li style="background-image: url('<?php echo TMPL; ?>images/content/slides-01.jpg')">
    					<div class="flex-caption">
    						<h2 class="animated fadeInRight">Experienced. Integrity. High Quality</h2>
    						<p class="animated fadeInLeft"><em>Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum.</em></p>
    						<div class="btn btn-md btn-line animated fadeInUp">LEARN MORE</div>
    					</div>
    				</li>

    				<li style="background-image: url('<?php echo TMPL; ?>images/content/slides-02.jpg')">
    					<div class="flex-caption">
    						<h2 class="animated fadeInRight">High Performance of Engine</h2>
    						<p class="animated fadeInLeft"><em>Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum.</em></p>
    						<div class="btn btn-md btn-line animated fadeInUp">LEARN MORE</div>
    					</div>
    				</li>

    				<li style="background-image: url('<?php echo TMPL; ?>images/content/slides-03.jpg')">
    					<div class="flex-caption">
    						<h2 class="animated fadeInRight">Serve with Heart</h2>
    						<p class="animated fadeInLeft"><em>Claritas est etiam processus dynamicus lectorum.</em></p>
    						<div class="btn btn-md btn-line animated fadeInUp">LEARN MORE</div>
    					</div>
    				</li>

                    <li style="background-image: url('<?php echo TMPL; ?>images/content/slides-04.jpg')">
    					<div class="flex-caption">
    						<h2 class="animated fadeInRight">Serve with Heart 56656</h2>
    						<p class="animated fadeInLeft"><em>Claritas est etiam processus dynamicus lectorum 756756.</em></p>
    						<div class="btn btn-md btn-line animated fadeInUp">LEARN MORE 567567</div>
    					</div>
    				</li>

    			</ul>
    		</div><!-- end flexslider -->

    		<div class="blue-box">

    			<div class="row-box">
    				<div class="title-box">
    					<h3><i class="fa fa-fw fa-clock-o"></i> График работы</h3>
    				</div>
    				<div class="content-box">
    					<?php echo $inf['work_time'];?>
    				</div><!-- end content-box -->
    			</div><!-- end row-box -->

    			<div class="row-box">
    				<div class="title-box">
    					<h3><i class="fa fa-fw fa-map-marker"></i> Адрес</h3>
    				</div>

    				<div class="content-box">
    					<?php echo $inf['adress'];?>
    					<a href="#" class="btn btn-sm btn-white">Посмотреть на карте</a>
    				</div><!-- end content-box -->
    			</div><!-- end row-box -->

    			<div class="row-box">
    				<div class="title-box">
    					<h3><i class="fa fa-fw fa-phone"></i> Телефон для связи </h3>
    				</div>
    				<div class="content-box">
    					<?php echo $inf['phones'];?>
    				</div><!-- end content-box -->
    			</div><!-- end row-box -->

    		</div><!-- end blue-box -->

    	</div><!-- end featured-slider -->

    	<div class="service-section">
            <div class="container">
                <div class="row">

                    <div class="centered-title">
                        <h3>Наши услуги</h3>
                    </div>
                    <?php foreach($serv as $srv): ?>
                        <div class="service-col">
                            <h3><?php echo $srv['name'];?></h3>
                            <p><?php echo $srv['text_mini'];?> <a href="services/<?php echo $srv['id'];?>" class="more">Подробнее</a></p>
                            <figure>
                                <?php if(!$srv['img']):?>
                                    <img src="images/content/sm-service-01.jpg" alt="">
                                <?php else:?>
                                    <img src="<?php echo $srv['img'];?>" alt="">
                                <?php endif;?>
                            </figure>
                        </div>
                    <?php endforeach; ?>
                    <!--
                    <div class="service-col">
                        <h3>Body Repair &amp; Paint</h3>
                        <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis. <a href="services.html" class="more">View Details</a></p>
                        <figure>
                            <img src="images/content/sm-service-01.jpg" alt="">
                        </figure>
                    </div>

                    <div class="service-col">
                        <h3>Routine Maintenance</h3>
                        <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis. <a href="services.html" class="more">View Details</a></p>
                        <figure>
                            <img src="images/content/sm-service-01.jpg" alt="">
                        </figure>
                    </div>

                    <div class="service-col">
                        <h3>Balancing</h3>
                        <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis. <a href="services.html" class="more">View Details</a></p>
                        <figure>
                            <img src="images/content/sm-service-01.jpg" alt="">
                        </figure>
                    </div>

                    <div class="service-col">
                        <h3>Consuetudium Lectorum</h3>
                        <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis. <a href="services.html" class="more">View Details</a></p>
                        <figure>
                            <img src="images/content/sm-service-01.jpg" alt="">
                        </figure>
                    </div>

                    <div class="service-col">
                        <h3>Quinta Decima</h3>
                        <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis. <a href="services.html" class="more">View Details</a></p>
                        <figure>
                            <img src="images/content/sm-service-01.jpg" alt="">
                        </figure>
                    </div>

                    <div class="service-col">
                        <h3>Eodem Modo</h3>
                        <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis. <a href="services.html" class="more">View Details</a></p>
                        <figure>
                            <img src="images/content/sm-service-01.jpg" alt="">
                        </figure>
                    </div>
-->
                </div><!-- end row -->
            </div><!-- end container -->
        </div><!-- end service-section -->

    	<div class="blog-section">
    		<div class="container">
    			<div class="row">

    				<div class="centered-title">
    					<h3>Latest News</h3>
    				</div><!-- blogs-title -->
                                
                                <?php foreach($blg as $bl): ?>
                                
                                    <div class="col-md-4">
                                            <figure class="blog-thumb">
                                                <?php if(!$bl['img']): ?>
                                                    <img src="images/content/blog-thumb-01.jpg" alt="">
                                                <?php else: ?>
                                                    <img src="<?php echo $bl['img']; ?>" alt="">
                                                <?php endif; ?>
                                            </figure>
                                            <div class="inner">
                                                    <div class="entry-header">
                                                                    <time class="published" datetime="2014-12-13" title="December 13, 2014 - 21:12 pm"><?php echo $bl['date']; ?></time>
                                                                    <h2 class="post-title entry-title">
                                                                            <a href="blog/<?php echo $bl['id']; ?>"><?php echo $bl['name']; ?></a>
                                                                    </h2>
                                                            </div><!-- end entry-header -->
                                                            <div class="entry-content">
                                                                    <p><?php echo $bl['text_mini']; ?></p>
                                                                    <p>
                                                                            <a href="blog/<?php echo $bl['id']; ?>" class="more">Подробнее</a>
                                                                    </p>
                                                            </div><!-- entry-content -->
                                            </div><!-- end inner -->
                                    </div><!-- end col -->

                                <?php endforeach; ?>
    				<!--<div class="col-md-4">
    					<figure class="blog-thumb">
    						<img src="images/content/blog-thumb-01.jpg" alt="">
    					</figure>
    					<div class="inner">
    						<div class="entry-header">
								<time class="published" datetime="2014-12-13" title="December 13, 2014 - 21:12 pm">December 13, 2014</time>
								<h2 class="post-title entry-title">
									<a href="#">Mazim Placerat Facer Possim Assum</a>
								</h2>
							</div><!-- end entry-header -->
							<!--<div class="entry-content">
								<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibhona euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>
								<p>
									<a href="#" class="more">Read More</a>
								</p>
							</div><!-- entry-content -->
    					<!--</div><!-- end inner -->
    				<!--</div><!-- end col -->  			
    				 
    			</div><!-- end row -->
    		</div><!-- end container -->
    	</div><!-- end blog section -->

        <div class="testimonial-section">
            <div class="container">

                <div class="centered-title">
                    <h3>What They Say About Us</h3>
                </div>

                <div id="testimonial-home" class="carousel slide">

                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#testimonial-home" data-slide-to="0" class="active"></li>
                        <li data-target="#testimonial-home" data-slide-to="1"></li>
                        <li data-target="#testimonial-home" data-slide-to="2"></li>
                    </ol>

                    <div class="carousel-inner">

                        <div class="item active">
                            <div class="col-md-6">
                                <figure class="ava">
                                    <img src="images/content/wong-01.png" alt="">
                                </figure>
                                <div class="context">
                                    <p class="who">Reza Kurniawan, <small>Co-Founder &amp; CEO</small></p>
                                    <blockquote>Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta</blockquote>
                                </div><!-- end context -->
                            </div><!-- end column -->

                            <div class="col-md-6">
                                <figure class="ava">
                                    <img src="images/content/wong-01.png" alt="">
                                </figure>
                                <div class="context">
                                    <p class="who">Julia Menorva, <small>Internet Marketer</small></p>
                                    <blockquote>Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta</blockquote>
                                </div><!-- end context -->
                            </div><!-- end column -->
                        </div><!-- end item -->

                        <div class="item">
                            <div class="col-md-6">
                                <figure class="ava">
                                    <img src="images/content/wong-01.png" alt="">
                                </figure>
                                <div class="context">
                                    <p class="who">Joko Kuntoro, <small>Engineer</small></p>
                                    <blockquote>Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta</blockquote>
                                </div><!-- end context -->
                            </div><!-- end column -->

                            <div class="col-md-6">
                                <figure class="ava">
                                    <img src="images/content/wong-01.png" alt="">
                                </figure>
                                <div class="context">
                                    <p class="who">Nina Boboba, <small>Blogger</small></p>
                                    <blockquote>Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta</blockquote>
                                </div><!-- end context -->
                            </div><!-- end column -->
                        </div><!-- end item -->

                        <div class="item">
                            <div class="col-md-6">
                                <figure class="ava">
                                    <img src="images/content/wong-01.png" alt="">
                                </figure>
                                <div class="context">
                                    <p class="who">Anne Kurnia, <small>Professional Writer</small></p>
                                    <blockquote>Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta</blockquote>
                                </div><!-- end context -->
                            </div><!-- end column -->

                            <div class="col-md-6">
                                <figure class="ava">
                                    <img src="images/content/wong-01.png" alt="">
                                </figure>
                                <div class="context">
                                    <p class="who">Hendra Susanto, <small>Senior Developer</small></p>
                                    <blockquote>Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta</blockquote>
                                </div><!-- end context -->
                            </div><!-- end column -->
                        </div><!-- end item -->

                    </div><!-- end carousel-inner -->

                </div>
            </div><!-- end container -->
        </div><!-- cd-section -->

        <div class="brand-section">
            <div class="container">
                <div class="row">

                    <div class="centered-title">
                        <h3>Brand Partner</h3>
                    </div><!-- blogs-title -->

                    <div class="col-md-12">
                        <div class="col-partner">
                            <div>
                                <img src="images/content/brand-01.png" alt="">
                            </div>
                        </div><!-- end column -->

                        <div class="col-partner">
                            <div>
                                <img src="images/content/brand-02.png" alt="">
                            </div>
                        </div><!-- end column -->
                        <div class="col-partner">
                            <div>
                                <img src="images/content/brand-03.png" alt="">
                            </div>
                        </div><!-- end column -->
                        <div class="col-partner">
                            <div>
                                <img src="images/content/brand-04.png" alt="">
                            </div>
                        </div><!-- end column -->
                        <div class="col-partner">
                            <div>
                                <img src="images/content/brand-05.png" alt="">
                            </div>
                        </div><!-- end column -->
                    </div><!-- end inner -->
                </div><!-- end row -->
            </div><!-- end container -->
        </div><!-- end brand-section -->

        <div class="faq-contact-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 faq-column">
                        
                        <div class="general-title">
                            <h3>Frequently Asked Question</h3>
                        </div><!-- end general-title -->

                        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">

                          <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingOne">
                              <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                  How duis autem in hendrerit in velit molestie consequat ?
                                </a>
                              </h4>
                            </div>
                            <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                              <div class="panel-body">
                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                              </div><!-- end panel-body -->
                            </div><!-- end .panel collapse -->
                          </div><!-- end panel -->

                          <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingTwo">
                              <h4 class="panel-title">
                                <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                  Why el illum dolore eu feugiat nulla facilisis ?
                                </a>
                              </h4>
                            </div>
                            <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                              <div class="panel-body">
                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                              </div><!-- end panel-body -->
                            </div><!-- end .panel collapse -->
                          </div><!-- end panel -->

                          <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingThree">
                              <h4 class="panel-title">
                                <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                  How duis dolore te feugait nulla facilisi ?
                                </a>
                              </h4>
                            </div>
                            <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                              <div class="panel-body">
                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                              </div><!-- end panel-body -->
                            </div><!-- end .panel collapse -->
                          </div><!-- end panel -->

                          <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingFour">
                              <h4 class="panel-title">
                                <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                  How liber tempor cum soluta nobis eleifend ?
                                </a>
                              </h4>
                            </div>
                            <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
                              <div class="panel-body">
                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                              </div><!-- end panel-body -->
                            </div><!-- end .panel collapse -->
                          </div><!-- end panel -->

                          <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingFive">
                              <h4 class="panel-title">
                                <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                  What is option congue nihil imperdiet doming id quod mazim ?
                                </a>
                              </h4>
                            </div>
                            <div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive">
                              <div class="panel-body">
                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                              </div><!-- end panel-body -->
                            </div><!-- end .panel collapse -->
                          </div><!-- end panel -->

                          <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingSix">
                              <h4 class="panel-title">
                                <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseSix" aria-expanded="true" aria-controls="collapseSix">
                                  How duis autem in hendrerit in velit molestie consequat ?
                                </a>
                              </h4>
                            </div>
                            <div id="collapseSix" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSix">
                              <div class="panel-body">
                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                              </div><!-- end panel-body -->
                            </div><!-- end .panel collapse -->
                          </div><!-- end panel -->

                        </div><!-- end panel-group -->

                    </div><!-- end column -->

                    <div class="col-md-6 contact-form-column">
                        
                        <div class="general-title">
                            <h3>Make an Appoinment</h3>
                        </div><!-- end general-title -->

                        <p><em>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat</em></p>

                        <div class="row">
                            <div class="col-md-6">
                              <input type="text" class="form-control" placeholder="Name">
                            </div><!-- /col-md-3 -->

                            <div class="col-md-6">
                              <input type="text" class="form-control" placeholder="Email">
                            </div><!-- /col-md-3 -->
                        </div><!-- end .row -->

                        <div class="row">
                            <div class="col-md-6">
                              <input type="text" class="form-control" placeholder="Mobile Phone">
                            </div><!-- /col-md-3 -->
                            
                            <div class="col-md-6">
                              <div class="input-group">
                              <input type="text" class="form-control" placeholder="Audi">
                              <div class="input-group-btn">
                                <button type="button" class="btn btn-white dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Choose <span class="caret"></span></button>
                                <ul class="dropdown-menu dropdown-menu-right" role="menu">
                                  <li><a href="#">Mercedes Benz</a></li>
                                  <li><a href="#">Audi</a></li>
                                  <li><a href="#">BMW</a></li>
                                  <li><a href="#">Toyota</a></li>
                                  <li><a href="#">Mitsubishi</a></li>
                                </ul>
                              </div><!-- /btn-group -->
                            </div><!-- /input-group -->
                            </div><!-- /col-md-3 -->
                        </div><!-- end .row -->
                        
                        <div class="row">
                            <div class="col-md-12">
                                <textarea name="" id="message" cols="30" rows="10" class="form-control" placeholder="Type your message here.."></textarea>
                            </div><!-- end column -->    
                        </div><!-- end row -->

                        <div class="row">
                            <div class="col-md-12">
                                <input type="file" class="custom-file-input">
                            </div>
                        </div><!-- end row -->

                        <div class="row">
                            <div class="col-md-12">
                                <input type="button" class="btn btn-lg btn-outline" value="Send This Message">
                            </div>
                        </div>

                    </div><!-- end column -->

                </div><!-- end row -->
            </div><!-- end container -->
        </div><!-- end faq-contact-section -->
        
<?php require_once 'footer.php';?>
       