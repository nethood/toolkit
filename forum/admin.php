<?php

$conf_file = './forum.conf';
$configuration = json_decode(file_get_contents($conf_file), true);


if ($_GET['intro'] && $_GET['no_fields'] && $_GET['rows'] && $_GET['cols'] && $_GET['fields_per_row'])
{

$configuration['intro'] = $_GET['intro'];
$configuration['no_fields'] = $_GET['no_fields'];
$configuration['rows'] = $_GET['rows'];
$configuration['cols'] = $_GET['cols'];
$configuration['fields_per_row'] = $_GET['fields_per_row'];

file_put_contents($conf_file, json_encode($configuration));

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

<form method=GET>
Introductory text:
<br/>
<textarea id="intro" name="intro" class="form-control" rows="15" cols="80"><?php echo $configuration['intro'];?></textarea>
<br/>
<br/>
Number of text fields:
<input name="no_fields" type="number" min="3" max="12" step="3" value="<?php echo $configuration['no_fields'];?>"></input>
<br/>
<br/>
Number of rows:
<input name="rows" type="number" min="1" max="20" step="1" value="<?php echo $configuration['rows'];?>"></input>
<br/>
<br/>
Number of cols:
<input name="cols" type="number" min="20" max="100" step="10" value="<?php echo $configuration['cols'];?>"></input>
<br/>
<br/>
Fields per row:
<input name="fields_per_row" type="number" min="1" max="10" step="1" value="<?php echo $configuration['fields_per_row'];?>"></input>
<br/>
<br/>

<input type=submit value=Save></input>
</form>
<br/>



<br/>
Back to <a href="./index.php">main page</a> 

</body>
</html>
