<?php
$page = $_GET['page'];

$path =  "div/$page.php";

if (file_exists($path)) {
    include $path;
} else {
    echo 'Not found';
}

$page = $_GET['page'];
echo "<br>";

?>
<a href="?page=1">First page</a><br>
<a href="?page=2">Ikkinchi  saxifa</a><br>
<a href="?page=3">Третая страница site</a><br>
<a href="?page=4">Not found</a><br>
