<?php ob_start() ?>
<h2>404 ERROR</h2>
<article>
	
	<h3>What 404 ERROR is?</h3>
	<p>The page was not found at the requested URL.</p>

</article>

<?php $content = ob_get_clean(); ?>

<?php include "viewAdmin/templates/layout.php" ?>