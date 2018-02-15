<script type="text/javascript" src="http://js.nicedit.com/nicEdit-latest.js"></script> <script type="text/javascript">
    //<![CDATA[
    bkLib.onDomLoaded(function() { nicEditors.allTextAreas() });
    //]]>
</script>

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


    <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
        <fieldset>
            <div class="control-group">
                <label class="control-label" for="image">Image</label>
                <div class="controls ">
                    <input type="file" class="span6" id="image" name="image" />
                </div>
            </div>
            <div class="control-group">
                <label class="control-label" for="description">Description</label>
                <div class="controls">
                    <textarea name="description" id="description" cols="30" rows="20" class="input-xlarge span6" style="width: 100%"><?php echo $newsResult[0]->description;?></textarea>
                    <p class="help-block"></p>
                </div>
            </div>
            <div class="control-group">
                <label class="control-label" for="name">Title</label>
                <div class="controls">
                    <input type="text" class="span6" id="email" name="name" value="<?php echo $newsResult[0]->name;?>" />
                    <p class="help-block"></p>
                </div>
            </div>

            <div class="form-actions">
                <input type="submit" name="submit" value="Update" />
                <button type="reset" class="btn">Cancel</button>
            </div>
        </fieldset>
    </form>


</div><!--/.fluid-container-->



