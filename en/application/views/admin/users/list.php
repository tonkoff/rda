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
                <a href="<?php echo base_url('index.php/admin/users/insert')?>" class="btn btn-large btn-success pull-right">Create new user</a>
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>Username</th>
                        <th>Email</th>
                        <th>Description</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>

                    <?php foreach($users as $user) { ?>
                        <tr>
                            <td>
                                <?php echo $user->username; ?>
                            </td>
                            <td>
                                <?php echo $user->email; ?>
                            </td>
                            <td>
                                <?php echo $user->description; ?>
                            </td>
                            <td>
                                <a href="<?php echo base_url('index.php/admin/users/update');?>?id=<?php echo $user->id;?>">Edit</a> |
                                <a href="<?php echo base_url('index.php/admin/users/delete')?>?id=<?php echo $user->id; ?>">DELETE</a>
                            </td>
                        </tr>
                    <?php } ?>

                    </tbody>
                </table>
<!--                --><?php //echo $links; ?>

            </div>
        </div>
    </div>

</div><!--/.fluid-container-->