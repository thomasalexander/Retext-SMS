<html>

<head>

  <meta http-equiv="content-type" content="text/html;charset=UTF-8">

</head>

<div id="container">
	
  <h1><?php echo $pheader?></h1>

	<div id="body">
		<form name="form" action="/websms/index.php" method="POST">
 <input type="hidden" name="HTMLForm_formname" value="form">


  <table align="center" size="300" border="0" class="list">
  <tr class="r1">
    <th colspan="3" class="left">
        <label id="label_login_title" for="login_title" class="HTMLForm-label">User  Login</label>

       </th>
</tr>
  <tr>
    <td align="right" valign="top">
        <label id="label_mobile_no" for="mobile_no" class="HTMLForm-label">Mobile Number</label>
    </td>

     <td>
        <input type="text" id="mobile_no" name="mobile_no" size="20" maxlength="11" value="" onkeypress="return checkNumberOnly(event)" class="HTMLForm-text"> 
    </td>


   </tr>
   <tr> 
      <td align="right" valign="top">
        <label id="label_password" for="password" class="HTMLForm-label">Password</label>
    </td>
    <td>
        <input type="password" id="password" name="password" value="" class="HTMLForm-password" size="20">
    </td>

    </tr>

       <tr>
         <td colspan="3" align="center">
            <input type="submit" id="submit" name="submit" value="Login"  class="button_all_action">
            <input type="hidden" id="submit_login" name="submit_login" value="1">
      </td>
     </tr>
  </table>
  </form>

	<form name="form" action="javascript:get(document.getElementById('form'));" method="POST">
<input type="hidden" name="HTMLForm_formname" value="form">


<table align="center" size="450" border="0" class="list">


<tr class="r2">
    <th class="left">
        <label id="label_send_to_no" for="send_to_no" class="HTMLForm-label">To</label>
    </th>
    <td class="left">
        <textarea id="send_to_no" name="send_to_no" class="HTMLForm-textarea" onkeypress="checkValidGPNumner(document.form.send_to_no)" onchange="checkValidGPNumner(document.form.send_to_no)" onkeyup="checkValidGPNumner(document.form.send_to_no)" wrap="soft" style="width:250px;height:50px"></textarea>  

    </td>    
  </tr>

 <tr class="r1">

    <th class="left">
        <label id="label_message" for="message" class="HTMLForm-label">Message</label>
    </th>
    <td class="left">
        <textarea id="message" name="message" class="HTMLForm-textarea" onkeypress="textCounter(document.form.message,document.form.counter_message,160)" onchange="textCounter(document.form.message,document.form.counter_message,160)" onkeyup="textCounter(document.form.message,document.form.counter_message,160)" wrap="soft" style="width:250px;height:130px"></textarea>

       <input type="text" id="counter_message" name="counter_message" size="5" value="" readonly="" class="HTMLForm-text"> <label id="label_char_remain" for="char_remain" class="HTMLForm-label">Character remained</label> 
    </td>

 </tr>

     <tr class="r2">
     <td colspan="2" class="center">
        <input type="submit" id="submit" name="submit" value="Send" class="button_all_action">
        <input type="hidden" id="mid" name="mid" value="1">
        <input type="hidden" id="submit_sms" name="submit_sms" value="1">
    </td>
    </tr>
     </table>
   </form>
  <p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds</p>
</div>