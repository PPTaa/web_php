<?php
// create
file_put_contents("data/".$_POST['title'], $_POST["description"]);
// redirection 
header('Location: /index.php?id='.$_POST['title']);
?>
