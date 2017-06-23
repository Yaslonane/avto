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
                                            <?php if($post['category_id'] == false): ?>  Без категории
                                        <?php else:?>
                                            <?php foreach($post['category_id'] as $catList): ?>

                                                <a href="<?php echo DOMAIN; ?>/blogs/category/<?php echo $catList['id_category']; ?>"><?php echo $catList['name']; ?></a>,

                                            <?php endforeach; ?>
                                        <?php endif; ?>
                                        </span><!-- end cat-links -->
                                        <div class="comment-link">
                                            <i class="fa fa-fw fa-comments"></i>
                                            <a href="#">3 Comments</a>
                                        </div>
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
                                <h2>About Author</h2>
                                <figure class="author-ava">
                                    <img src="images/content/auth-00.png" alt="">
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
                                <h2>Related Content</h2>
                                <div class="row">

                                    <div class="col-md-4">
                                        <figure>
                                            <img src="images/content/blog-thumb-01.jpg" alt="">
                                        </figure>
                                        <div class="related-title">
                                            <h3><a href="#">Claritas est etiam processus dynamicus</a></h3>
                                        </div>
                                    </div><!-- end column -->

                                    <div class="col-md-4">
                                        <figure>
                                            <img src="images/content/blog-thumb-01.jpg" alt="">
                                        </figure>
                                        <div class="related-title">
                                            <h3><a href="#">Claritas est etiam processus dynamicus</a></h3>
                                        </div>
                                    </div><!-- end column -->

                                    <div class="col-md-4">
                                        <figure>
                                            <img src="images/content/blog-thumb-01.jpg" alt="">
                                        </figure>
                                        <div class="related-title">
                                            <h3><a href="#">Claritas est etiam processus dynamicus</a></h3>
                                        </div>
                                    </div><!-- end column -->

                                </div><!-- end row -->
                            </div><!-- end related-content -->

                            <div class="comment-outer">
                                <div id="comments" class="comments-area">
                                    <h2 class="comments-title">4 COMMENTS</h2>
                                    <ol class="comment-list">

                                        <li class="comment"><!-- start comment -->
                                            <div class="comment-body">

                                                <figure class="comment-author vcard">
                                                    <img src="images/content/auth-00.png" alt="">
                                                </figure><!-- end comment-author vcard -->

                                                <div class="comment-wrapper">
                                                    <div class="comment-meta">
                                                        <b class="fn">Jessica Marchetti</b>
                                                        <div class="reply">
                                                            <a href="#" class="comment-reply-link">Reply</a>
                                                        </div>
                                                    </div><!-- end comment-meta -->
                                                    <div class="comment-metadata">
                                                        <a href="#">
                                                            <time datetime="2012-09-04T18:44:25+00:00">December 23 2014 pada 6:44 pm</time>
                                                        </a>
                                                    </div>
                                                    <div class="comment-content">
                                                        <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.</p>
                                                    </div><!-- end comment-content -->
                                                </div><!-- end comment-wrapper -->

                                            </div><!-- end comment-body -->
                                        </li><!-- end li -->

                                        <li class="comment"><!-- start comment -->
                                            <div class="comment-body">

                                                <figure class="comment-author vcard">
                                                    <img src="images/content/auth-00.png" alt="">
                                                </figure><!-- end comment-author vcard -->

                                                <div class="comment-wrapper">
                                                    <div class="comment-meta">
                                                        <b class="fn">Paijo Kossim</b>
                                                        <div class="reply">
                                                            <a href="#" class="comment-reply-link">Reply</a>
                                                        </div>
                                                    </div><!-- end comment-meta -->
                                                    <div class="comment-metadata">
                                                        <a href="#">
                                                            <time datetime="2012-09-04T18:44:25+00:00">December 23 2014 pada 6:44 pm</time>
                                                        </a>
                                                    </div>
                                                    <div class="comment-content">
                                                        <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.</p>
                                                    </div><!-- end comment-content -->
                                                </div><!-- end comment-wrapper -->

                                            </div><!-- end comment-body -->

                                            <ol class="children">
                                                <li class="comment"><!-- start-children-comment -->
                                                    <div class="comment-body">

                                                        <figure class="comment-author vcard">
                                                            <img src="images/content/auth-00.png" alt="">
                                                        </figure><!-- end comment-author vcard -->

                                                        <div class="comment-wrapper">
                                                            <div class="comment-meta">
                                                                <b class="fn">Dina Makulatuwa</b>
                                                                <div class="reply">
                                                                    <a href="#" class="comment-reply-link">Reply</a>
                                                                </div>
                                                            </div><!-- end comment-meta -->
                                                            <div class="comment-metadata">
                                                                <a href="#">
                                                                    <time datetime="2012-09-04T18:44:25+00:00">December 23 2014 pada 6:44 pm</time>
                                                                </a>
                                                            </div>
                                                            <div class="comment-content">
                                                                <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.</p>
                                                            </div><!-- end comment-content -->
                                                        </div><!-- end comment-wrapper -->

                                                    </div><!-- end comment-body -->
                                                </li><!-- end comment -->
                                            </ol><!-- end children -->
                                        </li><!-- end li -->

                                        <li class="comment"><!-- start comment -->
                                            <div class="comment-body">

                                                <figure class="comment-author vcard">
                                                    <img src="images/content/auth-00.png" alt="">
                                                </figure><!-- end comment-author vcard -->

                                                <div class="comment-wrapper">
                                                    <div class="comment-meta">
                                                        <b class="fn">Johnny Kurniawan</b>
                                                        <div class="reply">
                                                            <a href="#" class="comment-reply-link">Reply</a>
                                                        </div>
                                                    </div><!-- end comment-meta -->
                                                    <div class="comment-metadata">
                                                        <a href="#">
                                                            <time datetime="2012-09-04T18:44:25+00:00">December 23 2014 pada 6:44 pm</time>
                                                        </a>
                                                    </div>
                                                    <div class="comment-content">
                                                        <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.</p>
                                                    </div><!-- end comment-content -->
                                                </div><!-- end comment-wrapper -->

                                            </div><!-- end comment-body -->
                                        </li><!-- end li -->

                                    </ol><!-- end .comment-list -->
                                </div><!-- end #comments-area -->

                                <div id="respond" class="comment-respond">
                                    <h2 id="reply-title" class="comment-reply-title">Leave a Reply</h2>
                                    <form class="comment-form">
                                        <p class="comment-notes">Your email address will not be published. All fields are required.</p>
                                        <p class="comment-form-email">
                                            <label for="author">Name</label>
                                            <span class="required">*</span>
                                            <input id="author" type="text" class="input-text" name="author">
                                        </p>
                                        <p class="comment-form-author">
                                            <label for="email">Email</label>
                                            <span class="required">*</span>
                                            <input id="email" type="text" class="input-text" name="author">
                                        </p>
                                        <p class="comment-form-url">
                                            <label for="url">Website</label>
                                            <span class="required">*</span>
                                            <input id="url" type="text" class="input-text" name="author">
                                        </p>
                                        <p class="comment-form-comment">
                                            <label for="comment">Comment</label>
                                            <textarea name="comment" id="comment" cols="45" rows="10" class="input-text"></textarea>
                                        </p>
                                        <p class="form-submit">
                                            <input class="btn btn-lg btn-default" name="submit" type="submit" id="button" value="Post Comment">
                                        </p>
                                    </form><!-- end #comment-form -->
                                </div><!-- end comment-respond -->

                            </div><!-- end comment-outer -->

                        </div><!-- end #content -->
                        
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