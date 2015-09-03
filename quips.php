<!DOCTYPE html>
<html lang="en">
	<head>
		<title>QUIPS</title>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="bootstrap-3.3.5-dist/css/bootstrap.min.css">
		<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
		<link rel="stylesheet" href="style.css">
		<script src="//code.jquery.com/jquery-1.10.2.js"></script>
		<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
	</head>

	<body>
	  	<div class="container">
	  		<div class="row">
			  	<div class="col-md-12">
				  	<div class="col-md-6">
					  	<h3 style="color:#00ADF1; font-size:2em;">Q<span style="color:#9A989A;">uips</span></h3>
					 </div>
					 <div class="col-md-6">
				  		<form action="login.php" method="get" id="sign_out" class="pull-right">
				  			<div class="form-group">
								<input class="btn btn-default" type="submit" value="Sign Out" id="sign_out_button">
							</div>
						</form>	
					</div>				
			  	</div>
		  	</div>				  		  				
			<div class="row">					
				<div class="col-md-2">
					<div class="panel panel-default">
						<div class="panel-heading">
							<h1 class="panel-title">Job Manager</h1>
							<button class="btn btn-default" onclick="openModal()">New</button>
							<button class="btn btn-default" onclick="">Delete</button>
						</div>
						<!-- Modal -->								
						<div id="newJobModal" class="modal fade" style="display: none;">
							<div class="modal-dialog">
								<div class="modal-content" style="margin-top: 250px;">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal" aria-label="Close">
											<span aria-hidden="true">x</span>
										</button>
										<h4 class="modal-title">New Job</h4>
									</div>
									<div class="modal-body">
										<form method="post" action="create_job.php">
											<input id="newJobName" type="text" name="new_job" placeholder="Job Name">
											<input type="submit" value="Create Job">
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
						<div style="height:500px; overflow:auto;">

							<!--
							<p id="feedback">
								<span>You've selected:</span> <span id="select-result">none</span>.
							</p>
							-->

							<ul class="list-group" id='job-list-content'></ul> 

						<!--								
                        	<?php
                        	/*
							$db_host = 'localhost';
							$db_user = 'root';
							$db_pwd = 'Quips123'; 
							$database = "quips";

							mysql_connect($db_host, $db_user, $db_pwd) or die(mysql_error()); 
							mysql_select_db($database) or die(mysql_error());
							$job_names = "SELECT * FROM jobs"; 
							$result = mysql_query($job_names) or die(mysql_error()); 
							echo "<ul id='job-list-content'>";
							while($record = mysql_fetch_array($result))
							{
								echo "<li class='ui-widget-content' name='jobID[]'" .$record['job_id']. "'>" 
								.$record['job_name']. "</li>"; 
							}
							echo"</ul>"; 
							*/
							?>
						-->			
						</div>
					</div>
				</div>
				
				<div class="col-md-10">						
					<div class="row">								
						<div class="col-md-3">
							<div class="panel panel-default">
								<div class="panel-heading clearfix">
									<h1 class="panel-title">Selections</h1>
									<button class="btn btn-default" onclick="">New</button>
									<button class="btn btn-default" onclick="">Delete</button>
								</div>
								<div style="height:186px; overflow:auto;">
									<table class="table table-hover table-striped table-condensed">
										<tr>
											<td>AHU-1 SA</td>												
										</tr>
										<tr>
											<td>AHU-1 EA</td>
										</tr>
										<tr>
											<td>AHU-2 SA</td>
										</tr>
										<tr>
											<td>AHU-2 EA</td>
										</tr>
										<tr>
											<td>AHU-3 SA</td>
										</tr>
										<tr>
											<td>AHU-3 EA</td>
		
										</tr>
										<tr>
											<td>AHU-4 SA</td>
										</tr>
									</table>
								</div>								
							</div>
						</div>
						<div class="col-md-4">
							<form class="form-horizontal" id="selectionForm" action="select.php" method="get">
					  			<div class="form-group">
									<label class="control-label col-sm-4">Volume:</label>
									<input class="col-sm-6" id="air_vol" autocomplete="off">&nbsp;ft<sup>3</sup>/min</input>
								</div>
								<div class="form-group">
									<label class="control-label col-sm-4">Total S.P.:</label>
									<input class="col-sm-6" id="total_static_press" autocomplete="off">&nbsp;in W.C.</input>
								</div>
								<div class="form-group">
									<label class="control-label col-sm-4">Voltage:</label>
									<select class="col-sm-6" id="voltage" autocomplete="off">
										<option value=""></option>
										<option value="460">460V / 3~ / 60Hz</option>
										<option value="208">208V / 3~ / 60Hz</option>
									</select>
								</div>
								<div class="form-group">
									<label class="control-label col-sm-4">Height:</label>
									<input class="col-sm-6" id="unit_height" autocomplete="off">&nbsp;in</input>
								</div>
					  			<div class="form-group">
									<label class="control-label col-sm-4">Width:</label>
									<input class="col-sm-6" id="unit_weight" autocomplete="off">&nbsp;in</input>
								</div>								
							</form>
						</div>
						<div class="col-md-5">
							<img src="docs/fancurve2.png" class="img-rounded" alt="Fan Curve">
						</div>
					</div> <!-- row -->
					<div class="row">
						<div class="container-fluid" id="selectionArea">
							<ul class="nav nav-tabs">
								<li class="active"><a data-toggle="tab" href="#resultsTab">Results</a></li>
								<li><a data-toggle="tab" href="#outputsTab">Outputs</a></li>
							</ul>
							<div class="tab-content" style="padding-left:5px;padding-top:5px;">
								<div id="resultsTab" class="tab-pane fade in active">
									<div style="height:250px; overflow:auto;">
										<table class="table table-striped table-hover table-condensed">
											<tr>
												<th>Article No.</th>
												<th>Size (mm)</th>
												<th>Qty</th>																						
												<th>P<sub>Input</sub> (W)</th>
												<th>Motor (kW)</th>
												<th>Speed (RPM)</th>
												<th>L<sub>w(A),5</sub> (dB)</th>
												<th>L<sub>w(A),6</sub> (dB)</th>
												<th>I<sub>DP</sub> (A)</th>	
												<th>Relative Cost</th>														 													
											</tr>
											<tr>
												<td>114922</td>
												<td>355</td>
												<td>3</td> 
												<td>3314</td>
												<td>3.3</td>
												<td>3321</td>
												<td>84</td> 
												<td>91</td>
												<td>4.39</td>
												<td>1.00</td>
											</tr>
											<tr>
												<td>114722</td>
												<td>450</td>
												<td>2</td> 
												<td>3535</td>
												<td>3.3</td>
												<td>2289</td>
												<td>82</td> 
												<td>90</td>
												<td>4.69</td>
												<td>1.00</td>
											</tr>
											<tr>
												<td>114922</td>
												<td>355</td>
												<td>3</td> 
												<td>3314</td>
												<td>3.3</td>
												<td>3321</td>
												<td>84</td> 
												<td>91</td>
												<td>4.39</td>
												<td>1.00</td>
											</tr>
											<tr>
												<td>114722</td>
												<td>450</td>
												<td>2</td> 
												<td>3535</td>
												<td>3.3</td>
												<td>2289</td>
												<td>82</td> 
												<td>90</td>
												<td>4.69</td>
												<td>1.00</td>
											</tr>
											<tr>
												<td>114922</td>
												<td>355</td>
												<td>3</td> 
												<td>3314</td>
												<td>3.3</td>
												<td>3321</td>
												<td>84</td> 
												<td>91</td>
												<td>4.39</td>
												<td>1.00</td>
											</tr>
											<tr>
												<td>114722</td>
												<td>450</td>
												<td>2</td> 
												<td>3535</td>
												<td>3.3</td>
												<td>2289</td>
												<td>82</td> 
												<td>90</td>
												<td>4.69</td>
												<td>1.00</td>
											</tr>
											<tr>
												<td>114922</td>
												<td>355</td>
												<td>3</td> 
												<td>3314</td>
												<td>3.3</td>
												<td>3321</td>
												<td>84</td> 
												<td>91</td>
												<td>4.39</td>
												<td>1.00</td>
											</tr>
											<tr>
												<td>114722</td>
												<td>450</td>
												<td>2</td> 
												<td>3535</td>
												<td>3.3</td>
												<td>2289</td>
												<td>82</td> 
												<td>90</td>
												<td>4.69</td>
												<td>1.00</td>
											</tr>
											<tr>
												<td>114922</td>
												<td>355</td>
												<td>3</td> 
												<td>3314</td>
												<td>3.3</td>
												<td>3321</td>
												<td>84</td> 
												<td>91</td>
												<td>4.39</td>
												<td>1.00</td>
											</tr>
											<tr>
												<td>114722</td>
												<td>450</td>
												<td>2</td> 
												<td>3535</td>
												<td>3.3</td>
												<td>2289</td>
												<td>82</td> 
												<td>90</td>
												<td>4.69</td>
												<td>1.00</td>
											</tr>
											<tr>
												<td>114922</td>
												<td>355</td>
												<td>3</td> 
												<td>3314</td>
												<td>3.3</td>
												<td>3321</td>
												<td>84</td> 
												<td>91</td>
												<td>4.39</td>
												<td>1.00</td>
											</tr>
											<tr>
												<td>114722</td>
												<td>450</td>
												<td>2</td> 
												<td>3535</td>
												<td>3.3</td>
												<td>2289</td>
												<td>82</td> 
												<td>90</td>
												<td>4.69</td>
												<td>1.00</td>
											</tr>
										</table>
									</div>
								</div>
								<div id="outputsTab" class="tab-pane">
									<form class="form-horizontal">
										<div>
											<label>Save to Name:</label>
											<input autocomplete="off"></input>
										</div>												
										<div class="checkbox">
										    <label>
										      <input type="checkbox"> Technical Data
										    </label>
										 </div>
										 <div class="checkbox">
										    <label>
										      <input type="checkbox"> Fan Curve
										    </label>
										 </div>
										 <div class="checkbox">
										    <label>
										      <input type="checkbox"> Drawing
										    </label>
										 </div>
										<button type="submit" class="btn btn-default">Export</button>											
									</form>											
								</div>
							</div>
						</div>				
					</div> 
			</div>
		</div>

		<script type="text/javascript" src="master.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js" type="text/javascript"></script>	
  	
 	</body>
</html>