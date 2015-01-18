<!DOCTYPE html 
     PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
     "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Poll Test</title>
<link href="poll/template/styles.css" rel="stylesheet" type="text/css" />
</head>
<body>

<?php

$path = getcwd();
//echo "path=".$path;

$question_file = $path.'/poll/poll.conf';
$question = json_decode(file_get_contents($question_file), true);



if ($_GET['ssid'] && $_GET['question'] && $_GET['answers'])
{
    $question['ssid'] = $_GET['ssid'];
    $question['question'] = $_GET['question'];
    $question['answers'] = $_GET['answers'];

    file_put_contents($question_file, json_encode($question));

    //shell_exec("sed -i \"s/\(ssid *= *\).*/\\1".$question['ssid']."/\" ".$path."/test.conf");

    //exec("sudo /etc/init.d/networking restart");

}


?> 

<form method=GET>
Your desired SSID name (up to 32 characters):
<br/>
<input name=ssid type=search size=32 value="<?php echo $question['ssid'];?>"></input>
<br/>
<br/>

Your preferred question:
<br/>
<input name=question type=search size=40 value="<?php echo $question['question']?>"></input>
<br/>
<br/>

The possible answers (delimited with ";"):
<br/>
<input name=answers type=text size=40 value="<?php echo $question['answers']?>"</input>
<br/>
<br/>
<input name=oneanswer type=checkbox></input>Allow only one answer per MAC address (not implemented through the admin interface. Need to change the config file)
<br/>
<br/>

<input type=submit value=Go!></input>
</form>
<br/>

<a href='./example.php'>go to_poll</a>
<br/>
<a href='./reset.php'>reset_poll</a>


</body>
</html>
