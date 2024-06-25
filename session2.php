<?php
session_start();
session_destroy
echo "Welcome".$_SESSION['username'];
echo "<br> Your fav thing is".$_SESSION['favCat'];
echo "<br>"

?>