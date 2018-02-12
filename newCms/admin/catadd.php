<?php
		include("header.php");
		$msg='';
		if(isset($_POST['catbtn']))
		{
			$catname=$_POST['catname'];
			$sql="INSERT INTO category_info VALUES('','{$catname}')";
			$query=mysql_query($sql);
			if($query)
				{$msg='Category Added';}
			else
				{$msg='Category Not Added';}
		}
		
?>
                <div class="span9">
                	<div class="row-fluid thumbnail">
						<h3>Add Your Catagory</h3>
                    </div>
                    <br class="clearfix" />
                    <div class="row-fluid">
                    	<?php echo $msg; ?>
                        <form class="form-horizontal" action="" method="post">
                            <div class="control-group">
                            <label class="control-label" for="inputEmail">Category</label>
                            <div class="controls">
                            <input type="text" name="catname" id="inputEmail" class="span10" placeholder="Category Name">
                            </div>
                            </div>
                            <div class="control-group">
                            <div class="controls">
                            <button type="submit" name="catbtn" class="btn">Add Catagory</button>
                            </div>
                            </div>
                        </form>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</body>
</html>