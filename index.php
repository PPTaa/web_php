<?php
require_once('lib/print.php');
require_once('view/top.php');
?>
    <a href="create.php">create</a>
    <!-- if 문을 사용하여 분기  -->
    <?php if (isset($_GET['id'])) { ?>
    <a href="update.php?id=<?php echo $_GET['id']; ?>">update</a>
    <a href="update.php?id=<?=$_GET['id']; ?>">update</a>
    <form action="delete_process.php" method="POST">
        <input type="hidden" name='id' value="<?=$_GET['id'] ?>">
        <input type="submit" value='delete'>
    </form>
    <?php } ?>

    <h1>
        <?php 
        print_title();
    ?>
    </h1>
    <h2>
        <?php
        print_description();
    ?>
    </h2>
<?php
require('view/bottom.php')
?>