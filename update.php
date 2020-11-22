<?php
require_once('lib/print.php');
require_once('view/top.php');
?>
    <a href="create.php">create</a>
    <?php if (isset($_GET['id'])) { ?>
        <a href="update.php?id=<?php echo $_GET['id']; ?>">update</a>
        <a href="update.php?id=<?=$_GET['id']; ?>">update</a>
    <?php } ?>

    <form action="update_process.php" method="POST">
        <p><input type="hidden" name="old_title" value="<?= $_GET['id']; ?>"></p>
        <p><input type="text" name="title" value="<?php print_title(); ?>"></p>
        <p><textarea name="description" cols="30" rows="10"><?php print_description();?></textarea></p>
        <p><input type="submit"></p>
    </form>
<?php
require('view/bottom.php')
?>