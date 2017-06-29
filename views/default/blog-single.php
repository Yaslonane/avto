<?php require_once 'header.php'; //подключаем header?> 

            <div class="head-title">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="page-title">BLOG PAGE</h2>
                        <div class="breadcrumbs">
                            <ul>
                                <li>Вы находитесь : </li>
                                <li>Главная</li>
                                <li>Блог</li>
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
                                                <script type="text/javascript">(function() {
  if (window.pluso)if (typeof window.pluso.start == "function") return;
  if (window.ifpluso==undefined) { window.ifpluso = 1;
    var d = document, s = d.createElement('script'), g = 'getElementsByTagName';
    s.type = 'text/javascript'; s.charset='UTF-8'; s.async = true;
    s.src = ('https:' == window.location.protocol ? 'https' : 'http')  + '://share.pluso.ru/pluso-like.js';
    var h=d[g]('body')[0];
    h.appendChild(s);
  }})();</script>
<div class="pluso" data-background="transparent" data-options="medium,round,multiline,vertical,nocounter,theme=04" data-services="vkontakte,odnoklassniki,facebook,twitter,google,moimir,email,print"></div>
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
                                            <?php if($post['category_id'] == false): ?>  Без категории
                                        <?php else:?>
                                            <?php foreach($post['category_id'] as $catList): ?>

                                                <a href="<?php echo DOMAIN; ?>/blogs/category/<?php echo $catList['id_category']; ?>"><?php echo $catList['name']; ?></a>,

                                            <?php endforeach; ?>
                                        <?php endif; ?>
                                        </span><!-- end cat-links -->
                                    </div><!-- end entry-header -->

                                    <h1 class="entry-title">
                                        <a href="#"><?php echo $post['name']; ?></a>
                                    </h1>

                                    <div class="entry-content">
                                        <?php echo $post['text_mini']; ?>
                                        <figure class="wp-caption">
                                            <?php if(!$post['img']): ?>
                                            <img src="<?php echo DOMAIN; ?>/images/content/image-49.png" alt="">
                                            <figcaption class="wp-caption-text">Image Caption : Sample Image from Shutterstock Photos</figcaption>
                                        <?php else: ?>
                                            <img src="<?php echo $post['img']; ?>" alt="">
                                            <figcaption class="wp-caption-text">Image Caption : Sample Image from Shutterstock Photos</figcaption>
                                        <?php endif; ?>
                                        </figure>
                                        <?php echo $post['text']; ?>
                                            <span>Categories : 
                                            <?php if($post['category_id'] == false): ?>  Без категории
                                            <?php else:?>
                                            <?php foreach($post['category_id'] as $catList): ?>

                                                <a href="<?php echo DOMAIN; ?>/blogs/category/<?php echo $catList['id_category']; ?>"><?php echo $catList['name']; ?></a>,

                                            <?php endforeach; ?>
                                        <?php endif; ?>
                                            </span><br/>
                                            <span>Tags : <a href="#"><em>News</em></a> , <a href="#"><em>Documentation</em></a></span>
                                        </p>
                                    </div><!-- end entry-content -->

                                </div><!-- end inner -->

                            </div><!-- end format-image hentry -->

                            <div class="author-wrapper">
                                <h2>Информация об авторе</h2>
                                <figure class="author-ava">
                                    <img src="<?php echo DOMAIN; ?>/images/content/auth-00.png" alt="">
                                </figure>
                                <div class="author-context">

                                    <div class="author-name">
                                        <a href="#">Joko Munandar</a>
                                    </div><!-- end auth-name -->

                                    <div class="author-content">
                                        <p>Hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.</p>
                                    </div>

                                </div><!-- end author-wrapper -->
                            </div><!-- end author-area -->

                            <div class="related-content">
                                <h2>Похожие записи</h2>
                                <div class="row">

                                    <div class="col-md-4">
                                        <figure>
                                            <img src="<?php echo DOMAIN; ?>/images/content/blog-thumb-01.jpg" alt="">
                                        </figure>
                                        <div class="related-title">
                                            <h3><a href="#">Claritas est etiam processus dynamicus</a></h3>
                                        </div>
                                    </div><!-- end column -->

                                    <div class="col-md-4">
                                        <figure>
                                            <img src="<?php echo DOMAIN; ?>/images/content/blog-thumb-01.jpg" alt="">
                                        </figure>
                                        <div class="related-title">
                                            <h3><a href="#">Claritas est etiam processus dynamicus</a></h3>
                                        </div>
                                    </div><!-- end column -->

                                    <div class="col-md-4">
                                        <figure>
                                            <img src="<?php echo DOMAIN; ?>/images/content/blog-thumb-01.jpg" alt="">
                                        </figure>
                                        <div class="related-title">
                                            <h3><a href="#">Claritas est etiam processus dynamicus</a></h3>
                                        </div>
                                    </div><!-- end column -->

                                </div><!-- end row -->
                            </div><!-- end related-content -->

                            
                        </div><!-- end #content -->
                        
                    </div><!-- end #primary -->

                    <div id="secondary" class="col-md-4">

                        <div id="search-2" class="widget widget_search">
                            <div class="widget-title-outer">
                                <h3 class="widget-title">Поиск</h3>
                            </div>
                            <div class="searchform">
                                <form>
                                    <input type="text" class="txt" name="s" placeholder="Что хотите найти?">
                                    <input type="submit" value="Найти" class="btn btn-sm">
                                </form>
                            </div><!-- end searchform -->
                        </div><!-- end search widget -->


                            <div class="widget widget_categories">
                                <div class="widget-title-outer">
                                    <h3 class="widget-title">Категории</h3>
                                </div>
                                <ul>
                                    <?php foreach($categoryList as $category):?>
                                    <li>
                                        <a class="pull-left" href="<?php echo DOMAIN; ?>/blogs/category/<?php echo $category['id'];?>"><?php echo $category['name'];?></a>
                                        <span class="pull-right"><?php echo $category['count'];?></span>
                                    </li>
                                    <?php endforeach; ?>
                                </ul>
                            </div><!-- end widget -->

                            <div class="widget">
                                <div class="widget-title-outer">
                                    <h3 class="widget-title">Тэги</h3>
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
                                    <h3 class="widget-title">Мы в контакте</h3>
                                </div>
                                <iframe src="//www.facebook.com/plugins/likebox.php?href=https%3A%2F%2Fwww.facebook.com%2FFacebookDevelopers&amp;colorscheme=light&amp;show_faces=true&amp;header=true&amp;stream=false&amp;show_border=true"></iframe>
                            </div><!-- end widget -->

                    </div><!-- end #secondary -->

                </div><!-- end row -->
            </div><!-- end container -->
        </div><!-- #main -->
        <!-- END CONTENT HERE -->


<?php require_once 'footer.php'; //подключаем footer?>