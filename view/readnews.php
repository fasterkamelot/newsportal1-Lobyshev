<?php
ob_start();
?>

<br>

<?php
ViewNews::ReadNews($n);

echo "<br>";

echo "<br>";
ViewComments::CommentsForm();

$content = ob_get_clean();
include_once 'view/layout.php';
?>