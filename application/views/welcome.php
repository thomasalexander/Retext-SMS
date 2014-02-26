
<?php

$number = $_POST['numbertext'].$_POST['number'];
$from = $_POST['from'];
$message = $_POST['message'];

$url = 'http://sourcesms.com/api/api-function.php';

$fields_string = null;

$fields = array();
  'from'      => $from,
  'to'      => $number,
  'message'   => $message,
  'username'    => 'tmaynar1',
  'pword'     => 'Bassnectar05',
  'hash'      => '58451372',
  'formCountry' =>  '+1',
  'sourceinfo'  => '1',
);


$fields_string = echo http_build_query($fields);

 $ch = curl_init();

 curl_setopt($ch, CURLOPT_URL, $url);
 curl_setopt($ch, CURLOPT_POST, count($fields));
 curl_setopt($ch, CURLOPT_POSTFIELDS, $fields_string);

 $result = curl_exec($ch);

 curl_close($ch);
 ?>

<html>

<head>

  <meta http-equiv="content-type" content="text/html;charset=UTF-8">

</head>

<div id="container">
	
  <h1><?php echo $pheader?></h1>
  <form action="sms.php" method="POST">
  Number:<br />
  <input type="text size="2 name"numbertext"> - <input type="text name="number>

  <br /><br />

  Sender:<br />
  <input type="text" name="from">

  <br /><br />

  Message:<br />
  <textarea name="message"></textarea>textarea>

  <br /><br />

  <input type="hidden" name="submitted" value="true">
  <input type="submit" name="submit" value="Send">
  </form>
  <p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds</p>
</div>