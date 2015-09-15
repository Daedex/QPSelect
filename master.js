function AuthenticateApp() {
 session_start();

 global $user;

 if(!isset($_SERVER['HTTP_USER_AGENT']) || !isset($_SESSION['user_id']) || $_SESSION['user_agent'] !== $_SERVER['HTTP_USER_AGENT']) {
  header("Location: quips.html/login.html"); return;
 }

 include_once('scripts/users/users.php');

 $controller = new Users();
 $user = $controller->Read($_SESSION['user_id']);

 if(!$user) {
  header("Location: quips.html/login.html"); return;
 }

 return $user;
}

$(document).ready(function(){
	var user_id = 1;
	 $.ajax({
	  url: 'components/jobs/readAll.php',
	  type: 'GET',
	  data: {user_id: user_id},
	  dataType: 'json'
	 }).done(function(data){
	 	var elements = document.getElementById("job-list-content");
		for (var i=0; i<data.length; i++) {
			var element = document.createElement("li");
			element.className = "list-group-item";
			element.innerHTML = data[i].name;
			elements.appendChild(element);
		}
	 });
})

function loadJobs(user_id){
	 $.ajax({
	  url: 'components/jobs/readAll.php',
	  type: 'GET',
	  data: {user_id: user_id},
	  dataType: 'json'
	 }).done(function(data){
	 	var elements = document.getElementById("job-list-content");
		for (var i=0; i<data.length; i++) {
			var element = document.createElement("li");
			element.className = "list-group-item";
			element.innerHTML = data[i].name;
			elements.appendChild(element);
		}
	 });
})

// open new job modal window			
function openModal(){
	$("#newJobModal").modal(); 
}

// adds new job to array of jobs
function addNewJob(){
	var jobs = [];
	jobs.push(document.getElementById("newJobName").value);
	displayJobs(jobs);
	$('#newJobModal').modal('hide');
}

// adds new job to array of jobs
function addNewJob(){
	var jobs = [];
	jobs.push(document.getElementById("newJobName").value);
	displayJobs(jobs);
	$('#newJobModal').modal('hide');
}

// adds new selection to array of selections
function addNewSelection(){
	var selections = [];
	selections.push(document.getElementById("newSelectionName").value);
	displaySelections(selections);
}

// updates <ul> with array of jobs
function displayJobs(jobs){
	var elements = document.getElementById("job-list-content");
	for (var i=0; i<jobs.length; i++) {
		var element = document.createElement("li");
		element.className = "list-group-item";
		element.innerHTML = jobs[i];
		elements.appendChild(element);
	}
}

// adds new job to array and then updates <ul> with new array
function displayJobList(){
	var jobsList = []; 
	var jobName = document.getElementById("newJob").value; 
	jobsList.push(jobName);

	var items = document.getElementById("job-list-content"); 

	for (var i = 0; i < jobsList.length; i++ ) {
        var item = document.createElement("li");
        item.className = "list-group-item";
        item.innerHTML = jobsList[i];
        items.appendChild(item);
    }
}

// make jobs list selectable 
$(function() {
  $( "#job-list-content" ).selectable({
      stop: function() {
          var result = $( "#select-result" ).empty();
          $( ".ui-selected", this ).each(function() {
             var index = $( "#job-list-content li" ).index( this );
                  result.append( " #" + ( index + 1 ) );
            });
        }
    });
});

////////////////////////////////////////////////////////////////////////////////////////////////
//VIEW - RENDERING FUNCTIONS / DOM MANIPULATIONS
////////////////////////////////////////////////////////////////////////////////////////////////



////////////////////////////////////////////////////////////////////////////////////////////////
//CONTROLLER - USER INPUTS
////////////////////////////////////////////////////////////////////////////////////////////////

//run new selection
/*document.getElementById("runSelection").onclick = runSelection;
function runSelection() {
	var airVolume = $('#airVolume').val(),
		totalSP = $('#totalSP').val(),
		voltage = $('#voltage').val(),
		unitHeight = $('#unitHeight').val(),
		unitWidth = $('#unitWidth').val();
		runCalculations(airVolume, unitHeight, unitWidth);
};

//clear all inputs
document.getElementById("clearSelection").onclick = clearSelection;
function clearSelection() {
	$('#airVolume').val(null);
	$('#totalSP').val(null);														
	$('#voltage').val(null);				
	$('#unitHeight').val(null);
	$('#unitWidth').val(null);
};
*/ 

////////////////////////////////////////////////////////////////////////////////////////////////
//MODEL - DATA AND LOGIC
////////////////////////////////////////////////////////////////////////////////////////////////

//initialize selection object
var Selection = function(airVolume, unitHeight, unitWidth) {
	this.airVolume = airVolume,
	this.unitHeight = unitHeight,
	this.unitWidth = unitWidth;	
		
	Selection.prototype.info = function() {
		var testInfo = '<p>This object\'s info goes here.</p>';
		return testInfo;
	};
};

//run selections
function runCalculations(CFM, H, W) {
	$('#viewArea').append("<p>"+(CFM/((H*W)/144))+"ft/min</p>");
};


