<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>The Internationale Newstizen</title>

    <!-- Favicon -->
    <link rel="icon" href="<?=base_url()?>assets/img/core-img/favicon.ico">

    <!-- Core Stylesheet -->
    <link rel="stylesheet" href="<?=base_url()?>assets/css/style.css">

</head>

<body>
    <!-- ##### Header Area Start ##### -->
    <header class="header-area">

        <!-- Top Header Area -->
        <div class="top-header-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="top-header-content d-flex align-items-center justify-content-between">
                            <!-- Logo -->
                            <div class="logo">
                                <a href="index.html"><h1 style="font-style: italic; color: white;font-weight: bold;">The Internationale Newstizen</h1></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Navbar Area -->
        <div class="newspaper-main-menu" id="stickyMenu">
            <div class="classy-nav-container breakpoint-off">
                <div class="container">
                    <!-- Menu -->
                    <nav class="classy-navbar justify-content-between" id="newspaperNav">

                        <!-- Logo -->
                        <div class="logo">
                            <a href="index.html"><img src="img/core-img/logo.png" alt=""></a>
                        </div>

                        <!-- Navbar Toggler -->
                        <div class="classy-navbar-toggler">
                            <span class="navbarToggler"><span></span><span></span><span></span></span>
                        </div>

                        <!-- Menu -->
                        <div class="classy-menu">

                            <!-- close btn -->
                            <div class="classycloseIcon">
                                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                            </div>

                            <!-- Nav Start -->
                            <div class="classynav">
                                <ul>
                                    <li><a href="<?=base_url()?>News/home">Home</a></li>
                                    <li><a href="<?=base_url()?>News/category/politics">Politics</a></li>
                                    <li><a href="<?=base_url()?>News/category/business">Business</a></li>
                                    <li><a href="<?=base_url()?>News/category/technology">Technology</a></li>
                                    <li><a href="<?=base_url()?>News/category/health">Health</a></li>
                                    <li><a href="<?=base_url()?>News/category/sports">Sports</a></li>
                                </ul>
                            </div>
                            <!-- Nav End -->
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>

    <!-- ##### Blog Area Start ##### -->
    <div class="blog-area section-padding-0-80">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-8">
                    <div class="blog-posts-area">

                        <?php 
                        //still learning how to loop the multidimensional array, so here's the result ..
                            foreach ($jsonIterator as $key =>$val) {
                                if(strlen($key)<=2){
                                    $idid = $key;
                                }
                                if($idid==$key){
                                if(is_array($val)) {
                        ?>
                        <!-- Single Featured Post -->
                        <div class="single-blog-post featured-post single-post">
                        <?php
                    }else{

                                    $urlToImage = $key=='urlToImage'?$val:'';
                                    if($urlToImage!=''){
                                        ?>
                                <div class="post-thumb">
                                    <a href="#"><img src="<?=$key=='urlToImage'?$val:''?>" alt=""></a>
                                </div>
                                        <?php
                                    }

                                    $title = $key=='title'?$val:'';
                                    if($title!=''){
                                        ?>
                                <div class="post-data">
                                    <a href="#" class="post-title">
                                        <h6><?=$key=='title'?$val:''?></h6>
                                    </a>
                                        <?php
                                    }

                                    $author = $key=='author'?$val:'';
                                    if($author!=''){
                                        ?>
                                    <div class="post-meta">
                                        <p class="post-author">By <a href="#"><?=$key=='author'?$val:''?></a></p>
                                        <?php
                                    }

                                    $isi = $key=='content'?$val:'';
                                    if($isi!=''){
                        ?>
                                        <p class="post-excerp"><?=$key=='content'?$val:''?></p>
                                    </div>
                                </div>
                            </div>
                        <?php
                    }
                                }
                                    }
                                }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Blog Area End ##### -->

    <!-- ##### Footer Area Start ##### -->
    <footer class="footer-area">
        <!-- Bottom Footer Area -->
        <div class="bottom-footer-area">
            <div class="container h-100">
                <div class="row h-100 align-items-center">
                    <div class="col-12">
                        <!-- Copywrite -->
                        <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- ##### Footer Area Start ##### -->

    <!-- ##### All Javascript Files ##### -->
    <!-- jQuery-2.2.4 js -->
    <script src="<?=base_url()?>/assets/js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="<?=base_url()?>/assets/js/bootstrap/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="<?=base_url()?>/assets/js/bootstrap/bootstrap.min.js"></script>
    <!-- All Plugins js -->
    <script src="<?=base_url()?>/assets/js/plugins/plugins.js"></script>
    <!-- Active js -->
    <script src="<?=base_url()?>/assets/js/active.js"></script>
</body>

</html>