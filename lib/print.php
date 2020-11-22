<?php
function print_title(){
    if (isset($_GET['id'])) {
        echo htmlspecialchars($_GET['id']);
    } else {
        echo "hello world!!";
    }
}
function print_description(){
    if (isset($_GET['id'])) {
        $basename = basename("data/".$_GET['id']);
        echo htmlspecialchars(file_get_contents('data/'.$basename));
    } else {
        echo "hello world";
    }
}
function print_list(){
    $list = scandir('./data');
    $i = 0;
    while ($i < count($list)) {
        $title = htmlspecialchars($list[$i]);
        if($list[$i] != "."){
            if($list[$i] != ".."){
                echo "<li><a href=\"index.php?id=$title\">$title</a></li>\n";
            }
        }
        $i += 1;
    }
}
?>