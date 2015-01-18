<?php 

//check if any of the text files has been modified and reload page if needed

$count = 3;
$modified = false;

for ($i = 1; $i <=$count; $i++) {

$content_file = "text".$i.".txt";

//echo "checking ".$content_file;

$file_modified = date ("ymdHis", filemtime($content_file));
$now_time = date("ymdHis");

if ($now_time - $file_modified < 10)
    $modified = true;
}

if ($modified)
    echo "<script>parent.window.location.replace('./index.php?updated=true');</script>";
?>
