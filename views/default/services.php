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
                                <li>Services</li>
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
                    <div id="primary" class="content-area fullwidth">
                        <div id="content" class="site-content">

                            <div class="row service-wrapper row-flex">
                                <?php foreach($serv as $sr): ?>
                                    <div class="service-col-sq clearfix">
                                        <h2><a href="../services/<?php echo $sr['id'] ?>"><?php echo $sr['name'] ?></a></h2>
                                        <figure>
                                            <?php if(!$sr['img']): ?>
                                            <img src="../images/content/service-01.jpg" alt="">
                                            <?php else: ?>
                                                <img src="<?php echo $sr['img'] ?>" alt="">
                                            <?php endif; ?> 
                                        </figure>
                                        <p><?php echo $sr['text_mini'] ?></p>
                                        <a href="../services/<?php echo $sr['id'] ?>" class="more">Подробнее</a>
                                    </div><!-- end column -->
                                <?php endforeach; ?>
                                    
                                <!-- <div class="service-col-sq">
                                    <h2><a href="#">Routine Maintenance</a></h2>
                                    <figure>
                                        <img src="images/content/service-01.jpg" alt="">
                                    </figure>
                                    <p>Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum claritatem.</p>
                                    <a href="#" class="more">View Detail</a>
                                </div>end column -->

                                <!-- <div class="service-col-sq">
                                    <h2><a href="#">Balancing</a></h2>
                                    <figure>
                                        <img src="images/content/service-01.jpg" alt="">
                                    </figure>
                                    <p>Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum claritatem.</p>
                                    <a href="#" class="more">View Detail</a>
                                </div><!-- end column -->

                                <!-- <div class="service-col-sq">
                                    <h2><a href="#">consuetudium lectorum</a></h2>
                                    <figure>
                                        <img src="images/content/service-01.jpg" alt="">
                                    </figure>
                                    <p>Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum claritatem.</p>
                                    <a href="#" class="more">View Detail</a>
                                </div><!-- end column -->

                                <!-- <div class="service-col-sq">
                                    <h2><a href="#">Quinta Decima</a></h2>
                                    <figure>
                                        <img src="images/content/service-01.jpg" alt="">
                                    </figure>
                                    <p>Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum claritatem.</p>
                                    <a href="#" class="more">View Detail</a>
                                </div><!-- end column -->

                                <!-- <div class="service-col-sq">
                                    <h2><a href="#">Oedem Modo</a></h2>
                                    <figure>
                                        <img src="images/content/service-01.jpg" alt="">
                                    </figure>
                                    <p>Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum claritatem.</p>
                                    <a href="#" class="more">View Detail</a>
                                </div><!-- end column -->

                            </div><!-- end row -->

                        </div><!-- end #content -->
                        
                    </div><!-- end #primary -->

                </div><!-- end row -->
            </div><!-- end container -->
        </div><!-- #main -->
        <!-- END CONTENT HERE -->

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
