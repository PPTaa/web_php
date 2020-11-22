<?php
require_once('lib/print.php');
require_once('view/top.php');
?>
    <a href="create.php">create</a>
    
    <form action="create_process.php" method="POST">
        <p><input type="text" name="title"></p>
        <p><textarea name="description" cols="30" rows="10"></textarea></p>
        <p><input type="submit"></p>
    </form>
<?php
require('view/bottom.php')
?>