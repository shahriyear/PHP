<?php
	include("header.php");
$lead_query=mysql_query("SELECT * FROM blog_post ORDER BY id DESC LIMIT 1");
$lead_post=mysql_fetch_array($lead_query);
$small_query=mysql_query("SELECT * FROM blog_post ORDER BY id DESC LIMIT 1,12");

?>
            <div class="row-fluid">
            	<div class="span9">
                	<div class="row-fluid">
                    	<div class="span12 thumbnail">
                        	<h1><?php echo $lead_post['title']; ?></h1>
                            <p><?php echo limit_words($lead_post['blog_psot'],100); ?><a href="details.php?id=<?php echo $lead_post['id']; ?>">.....more</a></p>
                        </div>
                    </div>
                    <br class="clearfix" />
                    <div class="row-fluid">
                    <?php while($content=mysql_fetch_array($small_query)): ?>
                    	<div class="span4 thumbnail">
                        	<h1><?php echo $content['title']; ?></h1>
                            <p><?php echo limit_words($content['blog_psot'],20); ?><a href="details.php?id=<?php echo $content['id']; ; ?>">.....more</a></p>
                        </div>
                        <?php endwhile; ?>
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