

    <!-- start: Content -->
    <div id="content" class="span10">
        <ul class="breadcrumb">
            <li>
                <i class="icon-home"></i>
                <a href="index.html">Home</a>
                <i class="icon-angle-right"></i>
            </li>
            <li><a href="#">Dashboard</a></li>
        </ul>

        <div class="row-fluid sortable">
            <div class="box span12">
                <div class="box-header">
                    <h2><i class="halflings-icon white align-justify"></i><span class="break"></span>Striped Table</h2>

                    <div class="box-icon">
                        <a href="#" class="btn-setting"><i class="halflings-icon white wrench"></i></a>
                        <a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
                        <a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
                    </div>
                </div>
                <div class="box-content">
                    <a href="<?php echo base_url('index.php/admin/news/insert')?>" class="btn btn-large btn-success pull-right">Create News</a>
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th>Title</th>
                            <th>Description</th>
                            <th>Image</th>
                            <th>Created Date</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>

                        <?php foreach ($blogResults as $blogResult) : ?>
                            <tr>
                                <td><?php echo $blogResult->name; ?></td>
                                <td><?php echo  mb_substr(strip_tags($blogResult->description),0, 150); ?></td>
                                <td><img src="<?php echo base_url('assets/images/blog/blog')?>/<?php echo $blogResult->image; ?>"
                                         style="width:50px; height:80px;" alt=""></td>
                                <td><?php echo date("d-m-Y H:i", strtotime($blogResult->created_at));?></td>
                                <td class="center">
                                    <a class="btn btn-success" href="#">
                                        <i class="halflings-icon white zoom-in"></i>
                                    </a>

                                    <a class="btn btn-info" href="<?php echo base_url('index.php/admin/news/edit')?>?id=<?php echo $blogResult->id; ?>">
                                        <i class="halflings-icon white edit"></i>
                                    </a>
                                    <a class="btn btn-danger"
                                       href="<?php echo base_url('index.php/admin/news/delete')?>?id=<?php echo $blogResult->id; ?>">
                                        <i class="halflings-icon white trash"></i>
                                    </a>
                                </td>
                            </tr>

                        <?php endforeach; ?>

                        </tbody>
                    </table>
                    <div class="pagination pagination-centered">
                    <?php echo $links; ?>
                    </div>
                </div>
            </div>
        </div>


    </div><!--/.fluid-container-->

