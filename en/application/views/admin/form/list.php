
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

                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Subject</th>
                        <th>Message</th>
                        <th>Status</th>
                        <th>Actions</th>

                    </tr>
                    </thead>
                    <tbody>

                    <?php foreach($formResults as $formResult) { ?>
                        <tr>
                            <td>
                                <?php echo $formResult->name; ?>
                            </td>
                            <td>
                                <?php echo $formResult->email; ?>
                            </td>
                            <td>
                                <?php echo $formResult->phone; ?>
                            </td>
                            <td>
                                <?php echo $formResult->subject; ?>
                            </td>
                             <td>
                                <?php echo $formResult->message;?>
                            </td>
                            <td>
                                <?php echo $formResult->status;?>
                            </td>
                            <td>
                                <a class="btn btn-info" href="<?php echo base_url('index.php/admin/form/done')?>?id=<?php echo $formResult->id?>">
                                    <i class="halflings-icon white edit"></i>
                                </a>

                                <a class="btn btn-danger"
                                   href="<?php echo base_url('index.php/admin/form/delete')?>?id=<?php echo $formResult->id?>">
                                    <i class="halflings-icon white trash"></i>
                                </a>
                            </td>

                        </tr>
                    <?php } ?>

                    </tbody>
                </table>
            </div>
        </div>
    </div><!--/.fluid-container-->
</div>

