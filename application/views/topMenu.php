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
                    <li class="active"><a href="<?php echo base_url('index.php/welcome')?>">Начало</a>
                        <ul class="dropdown">
                            <li><a href="<?php echo base_url('index.php/welcome/aboutUs')?>">За нас</a></li>
                            <li><a href="<?php echo base_url('index.php/services')?>">Услуги</a></li>
                            <li><a href="<?php echo base_url('index.php/news')?>">Новини</a></li>

                        </ul>
                    </li>
                    <li><a href="<?php echo base_url('index.php/services')?>">Услуги</a>
                        <ul class="dropdown">
                            <li><a href="<?php echo  base_url('index.php/services/trainings')?>">Обучения</a>

                            </li>
                            <li><a href="<?php echo  base_url('index.php/services/projects')?>">Отворени процедури</a>

                            </li>
                            <li><a href="<?php echo  base_url('index.php/services/consulting')?>">Консултантски услуги</a>

                            </li>
                            <li><a href="<?php echo  base_url('index.php/services/information')?>">Информационно обслужване</a></li>
                            <li><a href="<?php echo  base_url('index.php/services/services')?>">Услуги в полза на общините</a></li>
                            <li><a href="<?php echo  base_url('index.php/services/support')?>">Подкрепа на регионалното развитие</a></li>



                        </ul>
                    </li>
                    <li><a href="<?php echo base_url('index.php/projects')?>">Проекти</a>
                        <ul class="dropdown">
                            <li><a href="<?php echo base_url('index.php/projects/insights')?>">INSiGHTS</a>
                            </li>
                            <li><a href="<?php echo base_url('index.php/projects/stob')?>">STOB</a>
                            </li>
                            <li><a href="<?php echo base_url('index.php/projects/projectExperience')?>">Проектен опит</a>
                            </li>
                       </ul>
                    </li>
                    <li><a href="<?php echo base_url('index.php/regionalDevelopment')?>">Регионално развитие</a>
                        <ul class="dropdown">
                            <li><a href="<?php echo base_url('index.php/regionalDevelopment/regional')?>">Регионално</a>

                            </li>
                            <li><a href="<?php echo base_url('index.php/regionalDevelopment/municipal')?>">Общинско</a>

                            </li>


                        </ul>
                    </li>

                    <li><a href="<?php echo base_url('index.php/news')?>">Новини</a>

                    </li>
                    <li><a href="<?php echo base_url('index.php/ourTeam')?>">Екип</a>
                        <ul class="dropdown">
                            <li><a href="<?php echo base_url('index.php/ourTeam/velizar_petrov')?>">Велизар Петров</a></li>
                            <li><a href="<?php echo base_url('index.php/ourTeam/aleksander_tonkov')?>">Александър Тонков</a></li>
                            <li><a href="<?php echo base_url('index.php/ourTeam/mariana_hristeva')?>">Мариана Христева</a></li>
                            </li>
                            <li><a href="#">Цветана Петкова</a></li>
                            </li>
                            <li><a href="#">Жеми Петрова</a></li>
                            </li>
                            <li><a href="#">Мария Симеонова</a></li>
                            </li>
                        </ul>
                    </li>



                    <li><a href="<?php echo base_url('index.php/contactUs')?>">Контакти</a></li>
                </ul>
                <div class="appointment-area">
                    <p><a href="http://rda-bg.org/en">EN</a></p>
                </div>
            </div>
        </div>
    </div>
</header>