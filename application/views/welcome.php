
<head>

  <meta http-equiv="content-type" content="text/html;charset=UTF-8">

</head>
<div id="container">
	
  <h1><?php echo $pheader?></h1>

   <form class="form" action="sms.php" method="POST">
  Number:<br />
  <input type="text" name="number">

  <br /><br />

  Sender:<br />
  <input type="text" name="from">

  <br /><br />

  Message:<br />
  <textarea name="message"></textarea>

  <br /><br />

  <input type="hidden" name="submitted" value="true">
  <input type="submit" name="submit" value="Send">
  </form>

  <p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds</p>
</div>