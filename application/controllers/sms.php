<?php
  $number = $_POST['number'];
  $from = $_POST['from'];
  $message = $_POST['message'];

  $url = 'http://sourcesms.com/api/api-function.php';

  $fields_string = null;

  $fields = array(
    'from'        => $from,
    'to'          => $number,
    'message'     => $message,
    'username'    => 'tmaynar1',
    'pword'       => 'Bassnectar05',
    'hash'        => '58451372',
    'formCountry' => '+1',
    'sourceinfo'  => '1',
  );


  $fields_string = echo http_build_query($fields);

   $ch = curl_init();

   curl_setopt($ch, CURLOPT_URL, $url);
   curl_setopt($ch, CURLOPT_POST, count($fields));
   curl_setopt($ch, CURLOPT_POSTFIELDS, $fields_string);

   $result = curl_exec($ch);

   curl_close($ch);
  } 
 ?>
