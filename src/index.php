
<h1>Manpage</h1>
<form method="post" action="index.php">
<input name="page" />
<input type="submit" value="go" />
</form>


<?php

$page = $_GET['page'];
$path_to_manpage = "pages/" . $page;

$man_file = fopen($path_to_manpage, "r") or die("Unable to open file " . $page . "!");
echo "<pre>";
while(($data = fread($man_file, 1024))) {
    echo $data;
}
echo "</pre>";
fclose($man_file);


?>
