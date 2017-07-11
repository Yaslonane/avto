<?php require_once 'header.php'; //подключаем header?> 

<div class="head-title">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="page-title">О нас</h2>
                        <div class="breadcrumbs">
                            <ul>
                                <li>Вы здесь : </li>
                                <li>Главная</li>
                                <li>О нас</li>
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
                            <div class="post format-contact hentry">

                                <div class="inner">

                                    <div class="entry-media">
                                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3952.6397770888398!2d110.4042447!3d-7.8278965!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a57225c384a85%3A0x9ed0238d9f9046a1!2sJl.+Karanglo%2C+Daerah+Istimewa+Yogyakarta!5e0!3m2!1sid!2sid!4v1427272825372" width="620" height="300"></iframe>
                                    </div><!-- end entry-media -->

                                    <h1 class="entry-title">
                                        Подробно о нас
                                    </h1>
                                    

                                    <div class="entry-content">
                                        <?php echo $inf['info_text']?>
                                    </div><!-- end entry-content -->
                                </div><!-- end inner -->

                            </div><!-- end post hentry -->

                        </div><!-- end #content -->
                        
                    </div><!-- end #primary -->

                    <div id="secondary" class="col-md-4">

                            <div class="widget">
                                <div class="widget-title-outer">
                                    <h3 class="widget-title">Адрес</h3>
                                </div>
                                <div class="widget-content">
                                    <table>
                                        <tbody>
                                            <tr>
                                                <td><strong>Находимся:</strong></td>
                                                <td> <?php echo $inf['adress']?></td>
                                            </tr>
                                            <tr>
                                                <td><strong>Телефон: </strong></td>
                                                <td> <?php echo $inf['phones']?></td>
                                            </tr>
                                            <tr>
                                                <td><strong>Email:</strong></td>
                                                <td> <a href="mailto:<?php echo $inf['email']?>"><?php echo $inf['email']?></a></td>
                                            </tr>
                                            <tr>
                                                <td><strong>Режим работы:</strong></td>
                                                <td><?php echo $inf['work_time']?></td>
                                            </tr>
                                        </tbody>
                                    </table>

                                    <br/>
                                    <br/>

                                    <!--<p><strong>BRANCH OFFICE ADDRESS</strong></p>
                                    <table>
                                        <tbody>
                                            <tr>
                                                <td><strong>Location</strong></td>
                                                <td> : Kaliurang St. No 104, Sinduharjo, <br>&nbsp;&nbsp;Ngaglik, Sleman.</td>
                                            </tr>
                                            <tr>
                                                <td><strong>Telp</strong></td>
                                                <td> : (0274) 9982732</td>
                                            </tr>
                                            <tr>
                                                <td><strong>Email</strong></td>
                                                <td> : <a href="mailto:staff@localhost.net">staff@localhost.net</a></td>
                                            </tr>
                                            <tr>
                                                <td><strong>Open Hour</strong></td>
                                                <td> : Monday ‐ Friday <br> &nbsp;&nbsp;08:00 AM ‐ 16:00 PM</td>
                                            </tr>
                                        </tbody>
                                    </table>-->
                                </div><!-- end widget-content -->
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

<?php require_once 'footer.php'; //подключаем header?> 