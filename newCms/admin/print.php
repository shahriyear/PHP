<?php
	
		include("header.php");
		
?>
                <div class="span9">
                	<div class="row-fluid thumbnail">
						<h3>Post Your Blog</h3>
                    </div>
                    <br class="clearfix" />
                    <div class="row-fluid">
                            <table class="table table-bordered">
                            	<thead>
                                    <tr>
                                        <td>Serial</td>
                                        <td>Title</td>
                                        <td>Category</td>
                                        <td>Blog Desc</td>
                                        <td>Edit/Delete</td>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
									
									$query=mysql_query("SELECT * FROM blog_post ORDER BY id DESC");
									while($array=mysql_fetch_row($query))
									{
                                		echo '<tr>';
										foreach($array as $arr)
										{
                                        echo "<td>{$arr}</td>";
										}
									echo "<td><a href=\"edit.php?id=$array[0]\">Edit</a> | <a href=\"delete.php?id=$array[0]\" onclick=\"return confirm('are you sure');\">Delete</a></td>";
                                    echo '</tr>';
									}
									?>
                                </tbody>
                                <tfoot>
                                	<tr>
                                        <td>Serial</td>
                                        <td>Title</td>
                                        <td>Category</td>
                                        <td>Blog Desc</td>
                                        <td>Edit/Delete</td>
                                    </tr>
                                </tfoot>
    						</table>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</body>
</html>