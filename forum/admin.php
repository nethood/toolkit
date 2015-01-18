<?php

$update_message = "";

if ($_GET['updated'])
    $update_message = "UPDATED";

if ($_GET['text1'] && $_GET['text2'] && $_GET['text3'])
{

$text1_text = $_GET['text1'];
$text2_text = $_GET['text2'];
$text3_text = $_GET['text3'];

file_put_contents('./text1.txt', $text1_text);
file_put_contents('./text2.txt', $text2_text);
file_put_contents('./text3.txt', $text3_text);
}
else
{
$text1_text = file_get_contents('./text1.txt', true);
$text2_text = file_get_contents('./text2.txt', true);
$text3_text = file_get_contents('./text3.txt', true);
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

<div id="debugdiv"></div>

<h2>Message board</h2>

The admin page will help you customize your message board
according to your needs. 
<br/>
<br/>
You will be able to add more or less text areas, of
different sizes, add notifications, create public or private
rooms, etc.
<br/>
<br/>
Until then, you can play with the following simple version:
    <br/>
<br/>
<div id="update"><?php echo $update_message?></div>
    <br/>

<form method="GET">
<textarea id="text1" name="text1" class="form-control" rows="10"><?php echo $text1_text?></textarea>
<textarea id="text2" name="text2" class="form-control" rows="10"><?php echo $text2_text?></textarea>
<textarea id="text3" name="text3" class="form-control" rows="10"><?php echo $text3_text?></textarea>
    <br/>
    <button type="submit" class="btn btn-primary">Save</button>
</form>


<br/>
<br/>
Inspired by <a href="http://stupidforum.com">stupid forum</a> (by Miltos Manetas)

<br/>
<br/>
Back to <a href="./index.php">main page</a> 

</body>
</html>
