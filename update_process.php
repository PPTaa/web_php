<?php
// update name
rename("data/".$_POST['old_title'], "data/".$_POST['title']);
// update content
file_put_contents('data/'.$_POST['title'], $_POST['description']);
// redirection 
header('Location: /index.php?id='.$_POST['title']);
?>
