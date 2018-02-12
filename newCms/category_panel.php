<?php
$query=mysql_query("SELECT * FROM category_info");
?>

<div class="span3">
                    <ul class="nav nav-tabs nav-stacked">
                        <li><a href="index.php">Home</a></li>
                        <?php
							
							while($array=mysql_fetch_row($query))
								echo   '<li><a href="category.php?id='.$array[0].'">'.$array[1].'</a></li>'
						
						?>
                    </ul>
                </div>