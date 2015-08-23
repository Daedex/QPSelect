<!DOCTYPE html>
<html lang="en">
  <head>
  	<title>QUIPS</title>
  	<meta charset="utf-8">
  	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" type="text/css" href="bootstrap-3.3.5-dist/css/bootstrap.min.css">
  </head>

  <body>
  	<div class="container">
  		<div class="row">
		  	<div class=".col-md-12">
		  		<div class="container-fluid" id="header">
			  		<h3>Q<span>uips</span></h3>
			  		<form action="login.php" method="get" id="sign_out">
						<input type="submit" value="Sign Out" id="sign_out_button">
					</form>
				</div>
		  	</div>
	  	</div>
	  		  				
		<div class="row">
			<div class=".col-md-3">
				<div class="container-fluid" id="jobManager">
					<!-- Modal -->
					<button onclick="openModal()">New Job</button>
					<div id="newJobModal" class="modal fade" style="display: none;">
						<div class="modal-dialog">
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">x</span>
									</button>
									<h4 class="modal-title">New Job</h4>
								</div>
								<div class="modal-body">
									<p>Job Name: </p>
									<form method="post" action="create_job.php">
										<input name="new_job" placeholder="New Job" autocomplete="off">
										<input type="submit" value= "Create Job">
									</form>
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
								</div>
							</div>
							<!-- modal-content -->
						</div>
						<!-- modal-dialog -->
					</div>
					<!-- newJobModal -->

					<!-- Display current jobs list -->
					<div id="jobList">
						<form action="delete_job.php" method="get">
							<input id="del_job_btn" type="submit" action="delete_job.php" value="Delete Job">
							<?php
							$db_host = 'localhost'; 
							$db_user = 'root';
							$db_pwd = 'Quips123'; 
							$database = "quips";

							mysql_connect($db_host, $db_user, $db_pwd) or die(mysql_error()); 
							mysql_select_db($database) or die(mysql_error());

		                    //query jobs names
							$job_names = "SELECT * FROM jobs"; 
							$result = mysql_query($job_names) or die(mysql_error()); 

							echo "<table class='job_list_table'>"; 
							while($record = mysql_fetch_array($result))
							{
								echo "<tr>";
								echo "<td><input type='checkbox' name='jobID[]' id='jobID' value='" .$record['job_id']. "'>" 
								           .$record['job_name']. "</td>"; 
								echo "</tr>"; 	
							}
							echo "</table>";
							?>
						</form>
					</div>
				</div>
			</div>
			<div class=".col-md-9">
				<div class="row">
					<div class="container-fluid" id="selectionArea">						
						<form id="selectionForm" action="select.php" method="get">
							<div>
								<label>Unit Tag:</label>
								<input id="unit_tag" autocomplete="off"></input>
							</div>
				  			<div>
								<label>Air Volume:</label>
								<input id="air_vol" autocomplete="off">&nbsp;ft<sup>3</sup>/min</input>
							</div>
							<div>
								<label>Total Static Pressure:</label>
								<input id="total_static_press" autocomplete="off">&nbsp;in W.C.</input>
							</div>
							<div>
								<label>Voltage:</label>
								<select id="voltage" autocomplete="off">
									<option value=""></option>
									<option value="460">460V / 3~ / 60Hz</option>
									<option value="208">208V / 3~ / 60Hz</option>
								</select>
							</div>
							<div>
								<label>Unit Height:</label>
								<input id="unit_height" autocomplete="off">&nbsp;in</input>
							</div>
				  			<div>
								<label>Unit Width:</label>
								<input id="unit_weight" autocomplete="off">&nbsp;in</input>
							</div>
							<div>	
								<input type="submit" value="Search" id="runSelection">
								<input type="button" value="Reset" id="clearSelection">
							</div>
						</form>
					</div>
				</div>
				<div class="row">
					<div class="container-fluid" id="mainView">
						<table>
							<tr>
								<th>Unit Tag</th>
								<th>Detail 1</th> 
								<th>Detail 2</th>
							</tr>
							<tr>
								<td>AHU-1 SA</td>
								<td>14700</td> 
								<td>3.6</td>
							</tr>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>

	<script type="text/javascript" src="master.js"></script>
	<script src="https://code.jquery.com/jquery-2.1.4.min.js" type="text/javascript"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js" type="text/javascript"></script>	
  	
  </body>
</html>