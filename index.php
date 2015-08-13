<!DOCTYPE html>
<html lang="en">
  <head>
  	<link rel="stylesheet" type="text/css" href="reset.css">
  	<link rel="stylesheet" type="text/css" href="style.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  	<script type="text/javascript" src="master.js"></script>
  	<title>QUIPS Log In</title>
  </head> 
  <body>
  	<script src="master.js"></script>
  	<div class="container">
  		<!-- Quips logo -->
  		<div id="header"><h3>Q<span>uips</span></h3>
  		<div class="login_form_wrapper">
	  	<div id="login_header">
	  		<h3>Log In</h3>
	  	</div>

	  	<!-- Log In form -->
	    <form id="login_form" method="post" action="login.php">
	    	<div id="login_area">
	    		<table>
	    			<tr>
	    				<td>
	    					<label>User Name</label>
	    					<input name="user_name" autocomplete="off"></input>
	    				</td>
	    			</tr>
	    			<tr>
	    				<td>
	    					<label>Password</label>
	    					<input name="password" type="password" autocomplete="off"></input>
	    				</td>
	    			</tr>	    			
	    		</table>
	    	</div>
	    	<input type="submit" value="Log In">
	    </form>
  	</div>
  </body>