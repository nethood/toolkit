<?php

$update_message = "";

if ($_GET['updated'])
    $update_message = "UPDATED";
    //$update_message = "";

$conf_file = './forum.conf';
$configuration = json_decode(file_get_contents($conf_file), true);

$count = (int)$configuration['no_fields'];

for ($i = 1; $i <=$count; $i++) {

if ($_GET['text'.$i])
 file_put_contents('./text'.$i.'.txt', $_GET['text'.$i]);

}

?>

<!DOCTYPE html>
<html>
<head>
<title>My Stupid Forum</title>
<meta charset=utf-8 />
<script src="./jquery.min.js"></script>
</head>
<body>


<script>
$(document).ready(function(){
setInterval(function() {
//window.parent.location.reload();
$("#debugdiv").load("./refresh.php");
}, 3000);
});

</script>


<div id="debugdiv"></div>

<?php echo $configuration['intro'];?>
<br/>
<br/>
<div id="update"><?php echo $update_message?></div>

<form method="GET">
<?php 

for ($i = 1; $i <=$count; $i++) {

    $content_file = "text".$i.".txt";
    $text = file_get_contents($content_file, true);

    if (($i-1) % $configuration['fields_per_row'] == 0)
        echo "<br/>";

    //echo '<textarea id="text'.$i.'" name="text'.$i.'" class="form-control" rows="10" cols="50">'.$text.'</textarea>';
    echo '<textarea id="text'.$i.'" name="text'.$i.'" class="form-control" rows="'.$configuration['rows'].'" cols="'.$configuration['cols'].'">'.$text.'</textarea>';
}

?>
    <br/>
    <button type="submit" class="btn btn-primary">Save</button>
</form>

<br/>
<br/>
Inspired by <a href="http://stupidforum.com">stupid forum</a> (by Miltos Manetas)

<br/>
<br/>
<a href="./admin.php">admin panel</a>



</body>
</html>
