<?php
include 'access_logger.php';
logActivity("visited the homepage of the wiki");
echo "Wiki made with PHP <br>";
echo "Go to /article.php?article=articlename to view a article <br>";
echo "Go to /edit.php to edit a page";
?>
