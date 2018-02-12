<?php
	include("header.php");
	
		$error='';
		if(isset($_POST['blogbtn']))
		{
			$title=$_POST['title'];
			$catagory=$_POST['catagory'];
			$blog=$_POST['blog_desc'];
				if($title=="")
					$error="Title Is Missing";
				if($catagory=="")
					$error="Catagory Is Missing";
				if($blog=="")
					$error="Blog Is Missing";
				
				if($error=="")
				{
					$query=mysql_query("INSERT INTO blog_post VALUES('','{$title}',{$catagory},'{$blog}')");
					if($query)
						{$error="Blog Posted";}
					else
						{$error="Blog Not Posted";}
				}
			}
		
?>
                <div class="span9">
                	<div class="row-fluid thumbnail">
						<h3>Post Your Blog</h3>
                    </div>
                    <br class="clearfix" />
                    <div class="row-fluid">
                    <?php echo $error; ?>
                        <form class="form-horizontal" method="post" action="">
                            <div class="control-group">
                            <label class="control-label" for="inputEmail">Title</label>
                            <div class="controls">
                            <input name="title" type="text" id="inputEmail" class="span10" placeholder="Title">
                            </div>
                            </div>
                            <div class="control-group">
                            <label class="control-label" for="inputPassword">Category</label>
                            <div class="controls">
                            <select name="catagory"> 
                            	<option value="">Select One</option>
                           		<?php
									$query=mysql_query("SELECT * FROM category_info");
									while($array=mysql_fetch_array($query))
									{
										echo '<option value="'.$array['cid'].'">'.$array['category_name'].'</option>';
									}
								
								?>
                            </select> 
                            </div>
                            </div>
                            <div class="control-group">
                            <label class="control-label" for="inputPassword">Blog</label>
                            <div class="controls">
                           <textarea name="blog_desc" rows="3" class="span10"></textarea>
                            </div>
                            </div>
                            
                            <div class="control-group">
                            <div class="controls">
                            <button type="submit" name="blogbtn" class="btn">Publish</button>
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