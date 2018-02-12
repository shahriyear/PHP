<?php
	include("header.php");
	
	$small_query=mysql_query("SELECT * FROM blog_post WHERE category={$_GET['id']} ORDER BY id DESC LIMIT 12");
?>
            <div class="row-fluid">
            	<div class="span9">
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