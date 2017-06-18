<?php require_once 'header.php'; //подключаем header?> 

    
        <div class="head-title">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="page-title">BLOG PAGE</h2>
                        <div class="breadcrumbs">
                            <ul>
                                <li>You're in : </li>
                                <li>Home</li>
                                <li>Blog</li>
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

                            <?php foreach($posts as $post):?>
                            
                            <div class="post format-image hentry">
                                
                                <div class="entry-format">
                                    <div class="entry-meta">
                                        <div class="entry-date">
                                            <a href="#">
                                                <time class="published" datetime="<?php echo date("M.d.Y",$post['date']); ?>" title="<?php echo Blogs::changeDate(date("j F Y - H:i",$post['date'])); ?>"><?php echo Blogs::changeDate(date("M",$post['date'])); ?><span class="date"><?php echo date("d",$post['date']); ?></span><?php echo date("Y",$post['date']); ?></time>
                                            </a>
                                        </div><!-- end entry-date -->

                                        <div class="social-shares">
                                            <i class="fa fa-fw fa-share-alt"></i>
                                            <a href="#">Share This</a>
                                            <div class="other-share">
                                                <a href="#" class="facebook">
                                                    <i class="fa fa-fw fa-facebook"></i>
                                                    <span class="icon-title">Facebook</span>
                                                </a>
                                                <a href="#" class="twitter">
                                                    <i class="fa fa-fw fa-twitter"></i>
                                                    <span class="icon-title">Twitter</span>
                                                </a>
                                                <a href="#" class="linkedin">
                                                    <i class="fa fa-fw fa-linkedin"></i>
                                                    <span class="icon-title">Linkedin</span>
                                                </a>
                                                <a href="#" class="google-plus">
                                                    <i class="fa fa-fw fa-google-plus"></i>
                                                    <span class="icon-title">Google Plus</span>
                                                </a>
                                                <a href="#" class="pinterest">
                                                    <i class="fa fa-fw fa-pinterest"></i>
                                                    <span class="icon-title">Pinterest</span>
                                                </a>
                                            </div><!-- end other-share -->   
                                        </div><!-- end social-share -->

                                    </div><!-- end entry-meta -->
                                </div><!-- end entry-format -->

                                <div class="inner">

                                    <div class="entry-header">
                                        <span class="author vcard">
                                            Posted by <a href="#"><?php echo $post['autor']; ?></a>
                                        </span><!-- end author -->
                                        <span class="cat-links">
                                        <?php $a = Blogs::getCategoryByIds($post['id']);?>
                                        <?php if($a == false): ?>  "Нет категорий": 
                                        <?php else:?>
                                            <?php foreach($a as $catList): ?>

                                                <a href="<?php echo $catList['id_category']; ?>"><?php echo $catList['name']; ?></a>,

                                            <?php endforeach; ?>
                                        <?php endif; ?>
                                        </span><!-- end cat-links -->
                                        <div class="comment-link">
                                            <i class="fa fa-fw fa-comments"></i>
                                            <a href="#">3 Comments</a>
                                        </div>
                                    </div><!-- end entry-header -->

                                    <h1 class="entry-title">
                                        <a href="./<?php echo $post['id']; ?>"><?php echo $post['name']; ?></a>
                                    </h1>

                                    <div class="entry-media">
                                        <?php if(!$post['img']): ?>
                                            <img src="../images/content/media-01.jpg" alt="">
                                        <?php else: ?>
                                            <img src="<?php echo $post['img']; ?>" alt="">
                                        <?php endif; ?>
                                    </div><!-- end entry-media -->

                                    <div class="entry-content">
                                        <p><?php echo $post['text_mini'];?></p>
                                    </div>

                                </div><!-- end inner -->


                            </div><!-- end format-aside hentry -->
                            
                            <?php endforeach;?>
                            
                            
                        </div><!-- end #content -->
                        <div class="paging-wrap">
                            <?php echo $pagination->get();?>
                            <!--<ul class="pagination pagination-sm">
                                <li class="disabled"><a href="#"><span aria-hidden="true">«</span><span class="sr-only">Previous</span></a></li>
                                <li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">4</a></li>
                                <li><a href="#">5</a></li>
                                <li><a href="#"><span aria-hidden="true">»</span><span class="sr-only">Next</span></a></li>
                            </ul>-->
                        </div><!-- end page-wrap -->
                    </div><!-- end #primary -->

                    <div id="secondary" class="col-md-4">

                        <div id="search-2" class="widget widget_search">
                            <div class="widget-title-outer">
                                <h3 class="widget-title">Search</h3>
                            </div>
                            <div class="searchform">
                                <form>
                                    <input type="text" class="txt" name="s" placeholder="Type Keywords">
                                    <input type="submit" value="search" class="btn btn-sm">
                                </form>
                            </div><!-- end searchform -->
                        </div><!-- end search widget -->

                        <div class="widget post-type-widget">
                            <div class="widget-title-outer">
                                <h3 class="widget-title">Recent Posts</h3>
                            </div>
                            <ul>
                                <li>
                                    <span class="post-category">
                                        <a href="#">Uncategorized</a>
                                    </span>
                                    <figure class="post-thumbnail">
                                        <a href="#"><img src="images/content/thumb-post-01.jpg" alt=""></a>
                                    </figure>
                                    <h2 class="post-title">
                                        <a href="#">Lorem Ipsum Dolor Sit Amet, Consetetuer Adipiscing Elit</a>
                                    </h2>
                                </li>
                                <li>
                                    <span class="post-category">
                                        <a href="#">Building</a>
                                    </span>
                                    <figure class="post-thumbnail">
                                        <a href="#"><img src="images/content/thumb-post-01.jpg" alt=""></a>
                                    </figure>
                                    <h2 class="post-title">
                                        <a href="#">Euismod Tincidunt ut Laoreet Dolore Magna Aliquam</a>
                                    </h2>
                                </li>
                                <li>
                                    <span class="post-category">
                                        <a href="#">Uncategorized</a>
                                    </span>
                                    <figure class="post-thumbnail">
                                        <a href="#"><img src="images/content/thumb-post-01.jpg" alt=""></a>
                                    </figure>
                                    <h2 class="post-title">
                                        <a href="#">Ullamcorper Suscipit Lobortis Nisl ut Aliquip Commodo Consequat</a>
                                    </h2>
                                </li>
                                <li>
                                    <span class="post-category">
                                        <a href="#">Commercial</a>
                                    </span>
                                    <figure class="post-thumbnail">
                                        <a href="#"><img src="images/content/thumb-post-01.jpg" alt=""></a>
                                    </figure>
                                    <h2 class="post-title">
                                        <a href="#">Quod Mazim Placerat Facer Possim Assum</a>
                                    </h2>
                                </li>
                                <li>
                                    <span class="post-category">
                                        <a href="#">Renovation</a>
                                    </span>
                                    <figure class="post-thumbnail">
                                        <a href="#"><img src="images/content/thumb-post-01.jpg" alt=""></a>
                                    </figure>
                                    <h2 class="post-title">
                                        <a href="#">Claritas est Etiam Processus Dynamicus</a>
                                    </h2>
                                </li>
                            </ul>
                            </div><!-- end widget -->

                            <div class="widget widget_categories">
                                <div class="widget-title-outer">
                                    <h3 class="widget-title">News Categories</h3>
                                </div>
                                <ul>
                                    <li>
                                        <a class="pull-left" href="#">Engine</a>
                                        <span class="pull-right">17</span>
                                    </li>
                                    <li>
                                        <a class="pull-left" href="#">Mechanic</a>
                                        <span class="pull-right">14</span>
                                    </li>
                                    <li>
                                        <a class="pull-left" href="#">Uncategorized</a>
                                        <span class="pull-right">10</span>
                                    </li>
                                    <li>
                                        <a class="pull-left" href="#">Reparation</a>
                                        <span class="pull-right">8</span>
                                    </li>
                                    <li>
                                        <a class="pull-left" href="#">Service</a>
                                        <span class="pull-right">6</span>
                                    </li>
                                    <li>
                                        <a class="pull-left" href="#">Tools</a>
                                        <span class="pull-right">4</span>
                                    </li>
                                </ul>
                            </div><!-- end widget -->

                            <div class="widget">
                                <div class="widget-title-outer">
                                    <h3 class="widget-title">News Tags</h3>
                                </div>
                                <div class="tagcloud">
                                    <a href="#">engine</a>
                                    <a href="#">mechanic</a>
                                    <a href="#">uncategorized</a>
                                    <a href="#">service</a>
                                    <a href="#">maintain</a>
                                    <a href="#">automobile</a>
                                    <a href="#">balancing</a>
                                    <a href="#">uncategorized</a>
                                    <a href="#">reparation</a>
                                    <a href="#">tools</a>
                                </div>
                            </div><!-- end widget -->

                            <div class="widget">
                                <div class="widget-title-outer">
                                    <h3 class="widget-title">Our Facebook Page</h3>
                                </div>
                                <iframe src="//www.facebook.com/plugins/likebox.php?href=https%3A%2F%2Fwww.facebook.com%2FFacebookDevelopers&amp;colorscheme=light&amp;show_faces=true&amp;header=true&amp;stream=false&amp;show_border=true"></iframe>
                            </div><!-- end widget -->

                    </div><!-- end #secondary -->

                </div><!-- end row -->
            </div><!-- end container -->
        </div><!-- #main -->
        <!-- END CONTENT HERE -->
<?php require_once 'footer.php'; //подключаем footer?>