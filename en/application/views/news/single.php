 <!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- TITLE -->
    <title>RDA</title>
    <!-- FAVICON -->
    <!--    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />-->
    <!-- Bootstrap -->





    <meta property="og:url"           content="<?php echo base_url('index.php/news/single')?>?id=<?php echo $news[0]->id?>" />

    <meta property="og:title"         content="<?php echo $news[0]->name?>" />
     
    <meta property="og:image"         content="<?php echo base_url('assets/images/blog/blog')?>/<?php echo $news[0]->image?>" />
    <meta property="og:image:width" content="500" />
    <meta property="og:image:height" content="500" />

    <script language="javascript">
    function fbshareCurrentPage()
    {window.open("https://www.facebook.com/sharer/sharer.php?u="+escape(window.location.href)+"&t="+document.title, '', 
    'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');
    return false; }
</script>




    <?php echo link_tag('assets/css/bootstrap.min.css');?>
    <!--FONT AWESOME -->

    <?php echo link_tag('assets/css/font-awesome.css');?>
    <!-- MENU -->

    <?php echo link_tag('assets/css/menuzord.css');?>
    <!-- STROKE GAP ICON -->

    <?php echo link_tag('assets/css/stroke-icon.css');?>

    <?php echo link_tag('assets/css/demo.css');?>

    <?php echo link_tag('assets/css/ie7.css');?>
    <!-- Portfolio Filter -->

    <?php echo link_tag('assets/css/bootFolio.css');?>
    <!-- Popup -->

    <?php echo link_tag('assets/css/magnific-popup.css');?>
    <!-- JQUERY UI STYLE -->

    <?php echo link_tag('assets/css/jquery-ui.css');?>
    <!-- OWL CSS -->

    <?php echo link_tag('assets/css/owl.theme.default.css');?>

    <?php echo link_tag('assets/css/owl.carousel.css');?>
    <!-- RS5.0 Main Stylesheet -->

    <?php echo link_tag('assets/css/revolution/css/settings.css');?>
    <!-- RS5.0 Layers and Navigation Styles -->

    <?php echo link_tag('assets/css/revolution/css/layers.css');?>

    <?php echo link_tag('assets/css/revolution/css/navigation.css');?>
    <!-- MAIN STYLE -->

    <?php echo link_tag('assets/css/style.css');?>

    <!-- GOOGLE FONT -->
    <link href='https://fonts.googleapis.com/css?family=Raleway:400,100,200,300,500,600,700,800,900' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>

   <div id="fb-root"></div>
  <script>(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1";
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));</script>




<!-- =========================
  START PRELOADER
============================== -->
<div class="outslider_loading">
    <div class="outslider_loader"></div>
</div>

<!-- =========================
  END PRELOADER
============================== -->

<!-- =========================
  START HEADER SECTION
============================== -->
<header class="header-area navbar-fixed-top">
    <div class="container custom-header">
        <div class="row">
            <div id="menuzord" class="menuzord">

                <a href="<?php echo base_url('index.php')?>" class="menuzord-brand"><img style="width: 134px;height: 82px;" src="<?php echo base_url('assets/images/rdalogo.jpg');?>" alt=""></a>

                <ul class="menuzord-menu menuzord-menu-bg">
                    <li class="active"><a href="<?php echo base_url('index.php/welcome')?>">Home</a>
                        <ul class="dropdown">
                            <li><a href="<?php echo base_url('index.php/welcome/aboutUs')?>">About us</a></li>
                            <li><a href="<?php echo base_url('index.php/services')?>">Services</a></li>
                            <li><a href="<?php echo base_url('index.php/news')?>">News</a></li>

                        </ul>
                    </li>
                    <li><a href="<?php echo base_url('index.php/services')?>">Services</a>
                        <ul class="dropdown">
                            <li><a href="<?php echo  base_url('index.php/services/trainings')?>">Trainings</a>

                            </li>
                            <li><a href="<?php echo  base_url('index.php/services/projects')?>">Open Calls</a>

                            </li>
                            <li><a href="<?php echo  base_url('index.php/services/consulting')?>">Consulting</a>

                            </li>
                            <li><a href="<?php echo  base_url('index.php/services/information')?>">Information</a></li>
                            <li><a href="<?php echo base_url('index.php/services/support')?>">Support Regional Development</a></li>
                            <li><a href="<?php echo base_url('index.php/services/services')?>">Services to Municipalities</a></li>

                        </ul>
                    </li>
                    <li><a href="<?php echo base_url('index.php/projects')?>">Projects</a>
                        <ul class="dropdown">
                            <li><a href="<?php echo base_url('index.php/projects/insights')?>">INSiGHTS</a>
                            </li>
                            <li><a href="<?php echo base_url('index.php/projects/stob')?>">STOB</a>
                            </li>
                            <li><a href="<?php echo base_url('index.php/projects/projectExperience')?>">Project Experience</a>
                            </li>
                        </ul>
                    </li>
                    <li><a href="<?php echo base_url('index.php/regionalDevelopment')?>">Regional Development</a>
                        <ul class="dropdown">
                            <li><a href="<?php echo base_url('index.php/regionalDevelopment/regional')?>">Regional</a>

                            </li>
                            <li><a href="<?php echo base_url('index.php/regionalDevelopment/municipal')?>">Municipal</a>

                            </li>


                        </ul>
                    </li>

                    <li><a href="<?php echo base_url('index.php/news')?>">News</a>

                    </li>
                    <li><a href="<?php echo base_url('index.php/ourTeam')?>">Our team</a>
                        <ul class="dropdown">
                            <li><a href="<?php echo base_url('index.php/ourTeam/velizar_petrov')?>">Velizar Petrov</a></li>
                            <li><a href="<?php echo base_url('index.php/ourTeam/aleksander_tonkov')?>">Aleksander Tonkov</a></li>
                            <li><a href="<?php echo base_url('index.php/ourTeam/mariana_hristeva')?>">Mariana Hristeva</a></li>
                            <li><a href="#">Tsvetana Petkova</a></li>
                            <li><a href="#">Zhemi  Petrova</a></li>
                            <li><a href="#">Maria Simeonova</a></li>

                        </ul>
                    </li>



                    <li><a href="<?php echo base_url('index.php/contactUs')?>">Contacts</a></li>
                </ul>
                <div class="appointment-area">
                    <p><a href="http://rda-bg.org">BG</a></p>
                </div>
            </div>
        </div>
    </div>
</header>

<!--END TOP MENU-->





<!--START PAGE TITLE SECTION-->
<!--============================== -->-->
<div class="page-title-area blog-area-bg">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-md-6">
                <div class="page-title-left">
                    <h2 style="font-size: 30px;"><?php echo $news[0]->name?></h2>
                </div>
            </div>
            <div class="col-sm-6 col-md-6">
                <div class="page-bredcrumbs-area text-right">
                    <ul  class="page-bredcrumbs">
                        <li><a href="<?php echo base_url('index.php')?>">Home</a></li>
                        <li><a href="<?php echo base_url('index.php/news')?>">News</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- =========================
  END PAGE TITLE SECTION
============================== -->

<!-- =========================
  START BLOG SECTION
============================== -->
<section class="blog-area blog-page-area bg-type-2">
    <div class="container">
        <div class="row">
            <div class="col-md-offset-2 col-md-8">
                <div class="single-blog-content-area">
                    <div class="blog-content-single blog-content-single-no-btm-padding">
                        <div class="blog-img">
                            <img src="<?php echo base_url('assets/images/blog/blog')?>/<?php echo $news[0]->image?>" alt="" class="img-responsive">
                            <i class="fa fa-image"></i>
                        </div>
                        <div class="blog-text">
                            <ul>
<!--                                <li>--><?php //echo $news[0]->created_at?><!--</li>-->
                                <li><?php echo date("d-m-Y H:i", strtotime($news[0]->created_at));?></li>
                                <li>
                                    <a href="#"><?php echo $news[0]->user_name;?></a>

                                </li>


                            </ul>
<!--                            <h2>--><?php //echo $news[0]->name?><!--</h2>-->

                             <p><?php echo $news[0]->description?></p>

 



                            <div class="blog-social text-left">
                                <p><span>Share This Artcle : </span>
                                    <a href="javascript:fbshareCurrentPage()" target="_blank" alt="Share on Facebook"><i class="fa fa-facebook"></i></a>


<!--                                    <a href="#"><i class="fa fa-twitter"></i></a>-->
<!--                                    <a href="#"><i class="fa fa-google-plus"></i></a>-->
<!--                                    <a href="#"><i class="fa fa-pinterest"></i></a>-->
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
<!-- =========================
  END BLOG SECTION
============================== -->