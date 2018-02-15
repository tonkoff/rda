<div class="page-title-area blog-area-bg">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-md-6">
                <div class="page-title-left">
                    <h2>Новини</h2>
                </div>
            </div>
            <div class="col-sm-6 col-md-6">
                <div class="page-bredcrumbs-area text-right">
                    <ul  class="page-bredcrumbs">
                        <li><a href="<?php echo base_url('index.php')?>">Начало</a></li>
                        <li><a href="<?php echo base_url('index.php/news')?>">Новини</a></li>
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
    <div class="blog-content-area">
        <div class="container">
            <div class="row">

            <?php foreach($newsResults as $newsResult) : ?>

                <div class="col-sm-6 col-md-4" style="height: 750px;">

                    <div class="blog-content-single">
                        <div class="blog-img">
                            <img src="<?php echo base_url('assets/images/blog/blog')?>/<?php echo $newsResult->image?>" alt="" class="img-responsive">
                            <i class="fa fa-image"></i>
                        </div>
                        <div class="blog-text">
                            <ul>

                                <li><?php echo date("d-m-Y H:i", strtotime($newsResult->created_at));?></li>
                                <li>
                                    <a href="#"><?php echo $newsResult->user_name;?></a>
                                </li>
                            </ul>
                            <h2><a href="<?php echo base_url('index.php/news/single')?>?id=<?php echo $newsResult->id?>"><?php echo $newsResult->name;?></a></h2>
<!--                            <p>--><?php //echo mb_substr($newsResult->description, 0, 250);?><!--</p>-->
                            <p><?php echo  mb_substr(strip_tags($newsResult->description), 0, 250);?><?php  echo '.....' ;?></p>
                            <a href="<?php echo base_url('index.php/news/single')?>?id=<?php echo $newsResult->id?>"><i class="fa fa-long-arrow-right"></i> <span>Научете повече</span></a>
                        </div>
                    </div>
                </div>

                <?php endforeach; ?>

            </div>
        </div>


        <div class="container">
            <div class="row">
                <div class="col-md-12 expert-pagination blog-pagination text-center clearfix">
                    <nav>
                        <?php echo $links; ?>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- =========================
  END BLOG SECTION
============================== -->
