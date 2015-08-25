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
	  		<div class="panel panel-default">
				<div class="panel-body">
			  		<div class="row">
					  	<div class="col-md-12">
					  		<div class="col-sm-2">
						  		<h3 style="color:#00ADF1; font-size:2em;">Q<span style="color:#9A989A;">uips</span></h3>
						  	</div>
						  	<div class="col-sm-offset-8 col-sm-2">
						  		<form action="login.php" method="get" id="sign_out">
						  			<div class="form-group">
										<input class="btn btn-default" type="submit" value="Sign Out" id="sign_out_button">
									</div>
								</form>
							</div>
					  	</div>
				  	</div>				  		  				
					<div class="row">					
						<div class="col-md-2">
<<<<<<< HEAD
							<div class="panel panel-default">
								<div class="panel-heading clearfix">
									<h4 class="panel-title">Job Manager</h4>
									<!-- Modal -->
									<button class="btn btn-default" onclick="openModal()">New</button>
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
=======
							<div class="panel panel-default" style="height:600px;">
								<div class="panel-heading">
									<h1 class="panel-title">Job Manager</h1>
									<button class="btn btn-default" onclick="openModal()">New</button>
									<button class="btn btn-default" onclick="">Delete</button>
								</div>
								<!-- Modal -->								
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
												<form method="post" action="">
													<input id="newJob" type="text" name="new_job" placeholder="New Job">
													<input type="button" value= "Create Job" onclick="displayJobList()">
												</form>
											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
>>>>>>> 86b2d48322730f78e2e7cfeda445417cf77ac9fc
											</div>
											<!-- modal-content -->
										</div>
										<!-- modal-dialog -->
									</div>
									<!-- newJobModal -->
									<input class="btn btn-default" id="del_job_btn" type="submit" action="delete_job.php" value="Delete">
								</div>
<<<<<<< HEAD
=======
								<!-- newJobModal -->
								
>>>>>>> 86b2d48322730f78e2e7cfeda445417cf77ac9fc
								<!-- Display current jobs list -->
								<div id="jobList">

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
<<<<<<< HEAD
							<div class="row">
								<div class="panel panel-default">
									<div class="panel-heading clearfix">
										<h4 class="panel-title pull-left">Q-PAC Selections</h4>
										<button class="btn btn-default pull-right" onclick="">Create</button>
									</div>
									<table class="table table-hover table-striped table-condensed">
										<tr>
											<th>Unit Tag</th>
											<th>CFM</th> 
											<th>TSP</th>
											<th>Voltage</th>
											<th>Width</th>
											<th>Height</th>
										</tr>
										<tr>
											<td>AHU-1 SA</td>
											<td>14700</td> 
											<td>3.2</td>
											<td>230V</td>
											<td>120in</td>
											<td>80in</td>
										</tr>
										<tr>
											<td>AHU-1 EA</td>
											<td>12700</td> 
											<td>2.6</td>
											<td>460V</td>
											<td>140in</td>
											<td>86in</td>
										</tr>
									</table>								
=======
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
											<label class="control-label col-sm-4">Pressure:</label>
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
>>>>>>> 86b2d48322730f78e2e7cfeda445417cf77ac9fc
								</div>
							</div> <!-- row -->
							<div class="row">
								<div class="container-fluid">
									<ul class="nav nav-tabs">
<<<<<<< HEAD
										<li class="active"><a data-toggle="tab" href="#inputTab">Input</a></li>
										<li><a data-toggle="tab" href="#resultsTab">Results</a></li>
										<li><a data-toggle="tab" href="#outputTab">Output</a></li>
									</ul>
									<div class="tab-content">
										<div id="inputTab" class="tab-pane fade in active">						
											<form class="form-horizontal" id="selectionForm" action="select.php" method="get">
												<div class="form-group">
													<label class="control-label col-sm-3">Unit Tag:</label>
													<input class="col-sm-2" id="unit_tag" autocomplete="off"></input>
												</div>
									  			<div class="form-group">
													<label class="control-label col-sm-3">Air Volume:</label>
													<input class="col-sm-2" id="air_vol" autocomplete="off">&nbsp;ft<sup>3</sup>/min</input>
												</div>
												<div class="form-group">
													<label class="control-label col-sm-3">Total Static Pressure:</label>
													<input class="col-sm-2" id="total_static_press" autocomplete="off">&nbsp;in W.C.</input>
												</div>
												<div class="form-group">
													<label class="control-label col-sm-3">Voltage:</label>
													<select class="col-sm-2" id="voltage" autocomplete="off">
														<option value=""></option>
														<option value="460">460V / 3~ / 60Hz</option>
														<option value="208">208V / 3~ / 60Hz</option>
													</select>
												</div>
												<div class="form-group">
													<label class="control-label col-sm-3">Unit Width:</label>
													<input class="col-sm-2" id="unit_weight" autocomplete="off">&nbsp;in</input>
												</div>
												<div class="form-group">
													<label class="control-label col-sm-3">Unit Height:</label>
													<input class="col-sm-2" id="unit_height" autocomplete="off">&nbsp;in</input>
												</div>									  			
												<div class="form-group">
													<div class="col-sm-offset-2 col-sm-10">	
														<input class="btn btn-default" type="submit" value="Search" id="runSelection">
														<input class="btn btn-default" type="button" value="Reset" id="clearSelection">
													</div>
												</div>
											</form>
										</div>
										<div id="resultsTab" class="tab-pane">
											<table class="table table-hover table-striped table-condensed">
												<tr>
													<th>Quantity</th>
													<th>Fan</th>
													<th>HP</th>
													<th>Efficiency</th>
												</tr>
												<tr>
													<td>4</td>
													<td>114918</td>
													<td>4.2</td>
													<td>1210</td>
												</tr>
												<tr>
													<td>3</td> 
													<td>114722</td>
													<td>5.3</td>
													<td>958</td>
												</tr>
											</div>
										<div id="outputTab" class="tab-pane">
											
=======
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
														<th>Speed (RPM)</th>
														<th>L<sub>w(A),5</sub> (dB)</th>
														<th>L<sub>w(A),6</sub> (dB)</th>
														<th>I<sub>DP</sub> (A)</th>													 													
													</tr>
													<tr>
														<td>114922</td>
														<td>355</td>
														<td>3</td> 
														<td>3314</td>
														<td>3321</td>
														<td>84</td> 
														<td>91</td>
														<td>4.39</td>
													</tr>
													<tr>
														<td>114722</td>
														<td>450</td>
														<td>2</td> 
														<td>3535</td>
														<td>2289</td>
														<td>82</td> 
														<td>90</td>
														<td>4.69</td>
													</tr>
													<tr>
														<td>114922</td>
														<td>355</td>
														<td>3</td> 
														<td>3314</td>
														<td>3321</td>
														<td>84</td> 
														<td>91</td>
														<td>4.39</td>
													</tr>
													<tr>
														<td>114722</td>
														<td>450</td>
														<td>2</td> 
														<td>3535</td>
														<td>2289</td>
														<td>82</td> 
														<td>90</td>
														<td>4.69</td>
													</tr>
													<tr>
														<td>114922</td>
														<td>355</td>
														<td>3</td> 
														<td>3314</td>
														<td>3321</td>
														<td>84</td> 
														<td>91</td>
														<td>4.39</td>
													</tr>
													<tr>
														<td>114722</td>
														<td>450</td>
														<td>2</td> 
														<td>3535</td>
														<td>2289</td>
														<td>82</td> 
														<td>90</td>
														<td>4.69</td>
													</tr>
													<tr>
														<td>114922</td>
														<td>355</td>
														<td>3</td> 
														<td>3314</td>
														<td>3321</td>
														<td>84</td> 
														<td>91</td>
														<td>4.39</td>
													</tr>
													<tr>
														<td>114722</td>
														<td>450</td>
														<td>2</td> 
														<td>3535</td>
														<td>2289</td>
														<td>82</td> 
														<td>90</td>
														<td>4.69</td>
													</tr>
													<tr>
														<td>114922</td>
														<td>355</td>
														<td>3</td> 
														<td>3314</td>
														<td>3321</td>
														<td>84</td> 
														<td>91</td>
														<td>4.39</td>
													</tr>
													<tr>
														<td>114722</td>
														<td>450</td>
														<td>2</td> 
														<td>3535</td>
														<td>2289</td>
														<td>82</td> 
														<td>90</td>
														<td>4.69</td>
													</tr>
													<tr>
														<td>114922</td>
														<td>355</td>
														<td>3</td> 
														<td>3314</td>
														<td>3321</td>
														<td>84</td> 
														<td>91</td>
														<td>4.39</td>
													</tr>
													<tr>
														<td>114722</td>
														<td>450</td>
														<td>2</td> 
														<td>3535</td>
														<td>2289</td>
														<td>82</td> 
														<td>90</td>
														<td>4.69</td>
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
>>>>>>> 86b2d48322730f78e2e7cfeda445417cf77ac9fc
										</div>
									</div>
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