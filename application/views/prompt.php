<html>
<head>
	<meta http-equiv="content-type" content="text/html;charset=UTF-8">
	<link rel="stylesheet" href="CSS/retext.css" type="text/css" media="screen"/>
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
	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds</p>
</div>