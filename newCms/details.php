<?php
	include("header.php");
	$lead_query=mysql_query("SELECT * FROM blog_post WHERE id={$_GET['id']} ");
	$lead_post=mysql_fetch_array($lead_query);

?>
            
            <div class="row-fluid">
            	<div class="span9">
                	<div class="row-fluid">
                    	<div class="span12 thumbnail">
                        	<h1><?php echo $lead_post['title']; ?></h1>
                            <p><?php echo $lead_post['blog_psot']; ?></p>
                        </div>
                    </div>
                    <br class="clearfix" />
                </div>
                
                <?php
					include("category_panel.php");
				?>
                
            </div>
        </div>
    </div>
</body>
</html>