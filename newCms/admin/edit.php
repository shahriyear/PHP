<?php
	
		include("header.php");
		if(!isset($_GET['id']) || empty($_GET['id']))
		{
			header("location: print.php");
			exit();
		}
		$error='';
		if(isset($_POST['upBtn']))
		{
			$title=$_POST['title'];
			$category=$_POST['catagory'];
			$blog=$_POST['blog_post'];
			if($title=="")
					$error="Title Is Missing";
				if($category=="")
					$error="Catagory Is Missing";
				if($blog=="")
					$error="Blog Is Missing";
			if($error=='')
			{
				$query=mysql_query("UPDATE blog_post SET title='{$title}' , category={$category} , blog_psot='{$blog}' WHERE id=".$_GET['id']);
				if($query)
					{$error="Updateted";}
				else
					{$error="Not Updateted"; }
			}
			
		}
		
		$query=mysql_query("SELECT * FROM blog_post WHERE id=".$_GET['id']);
		$con=mysql_fetch_object($query);
		
?>
                <div class="span9">
                	<div class="row-fluid thumbnail">
						<h3>Post Your Blog</h3>
                    </div>
                    <br class="clearfix" />
                    <div class="row-fluid">
                    <?php echo $error; ?>
                        <form class="form-horizontal" method="post" action="?id=<?php echo $_GET['id']; ?>"> 
                            <div class="control-group">
                            <label class="control-label" for="inputEmail">Title</label>
                            <div class="controls">
                            <input name="title" type="text" id="inputEmail" value="<?php echo $con->title; ?>" class="span10" placeholder="Title">
                            </div>
                            </div>
                            <div class="control-group">
                            <label class="control-label" for="inputPassword">Category</label>
                            <div class="controls">
                           <select name="catagory">
                           <option  value="">Select One</option>
								<?php
									$query=mysql_query("SELECT * FROM category_info");
									$select="";
									while($array=mysql_fetch_array($query))
									{
										if($array['cid']==$con->category)
										$select='selected="selected"';
										echo '<option '.$select.' value="'.$array['cid'].'">'.$array['category_name'].'</option>';
										$select='';
									}
								
								?>
                           </select>
                            </div>
                            </div>
                            <div class="control-group">
                            <label class="control-label" for="inputPassword">Blog</label>
                            <div class="controls">
                           <textarea name="blog_post" rows="3" class="span10"><?php echo $con->blog_psot; ?></textarea>
                            </div>
                            </div>
                            
                            <div class="control-group">
                            <div class="controls">
                            <button type="submit" name="upBtn" class="btn">Update</button>
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