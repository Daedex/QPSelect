////////////////////////////////////////////////////////////////////////////////////////////////
//VIEW - RENDERING FUNCTIONS / DOM MANIPULATIONS
////////////////////////////////////////////////////////////////////////////////////////////////



////////////////////////////////////////////////////////////////////////////////////////////////
//CONTROLLER - USER INPUTS
////////////////////////////////////////////////////////////////////////////////////////////////

//run new selection
document.getElementById("runSelection").onclick = runSelection;
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

<<<<<<< HEAD
/*//new job prompt
=======
//new job prompt
/*
>>>>>>> 399151f2c6cfaee98e5956e8986cf68be88fd260
document.getElementById("create_job").onclick = create_job;
function create_job() {
	var new_job = prompt("Please enter job name: "); 
	 $('ul').append('<li>' + new_job + '</li>');
	 $('ul').append('<hr>'); 
};
*/
<<<<<<< HEAD
document.getElementById("create_job").onclick = create_job;
function create_job(){
	var new_job = prompt("Please enter job name: ");
	document.getElementById("new_job").value = new_job; 
	document.getElementById("form").submit(); 
=======

function openModal(){
	$("#newJobModal").modal(); 
>>>>>>> 399151f2c6cfaee98e5956e8986cf68be88fd260
}
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






















////////////////////////////////////////////////////////////////////////////////////////////////
//FIDDLE CODE
////////////////////////////////////////////////////////////////////////////////////////////////
/*

// array = [{key:value},{key:value}]
function objectFindByKey(array, key, value) {
    for (var i = 0; i < array.length; i++) {
        if (array[i][key] === value) {
            return array[i];
        }
    }
    return null;
}

var array = [{'id':'73','foo':'bar'},{'id':'45','foo':'bar'}];
var result_obj = objectFindByKey(array, 'id', '45');

////////////////////////////////////////////////////////////////////////////////////////////////
//GRID CONCEPT HAS BEEN SHELVED
////////////////////////////////////////////////////////////////////////////////////////////////

//initialize the grid
function initGrid() {
	var $grid = $('#grid');
	var html = [];
	var x, y, 
		X_MIN = 36,
		Y_MIN = 26,
		X_MAX = 228,
		Y_MAX = 130;
		
	for(y=Y_MAX; y>=Y_MIN; y-=2) {
	    html.push('<tr>')
	   	for(x=X_MIN; x<=X_MAX; x+=2) {
	    	html.push('<td class="unavailableCell" data-x="'+x+'" data-y="'+y+'"></td>');	     	
	    }
	    html.push('</tr>');
	}
	$grid.empty();
	$grid.append(html.join(''));
};

//pass updated objects to render user interface
function render(selections) {
	for(i=0;i<selections.length;i++) {
		$('td[data-x="'+selections[i].unitWidth+'"][data-y="'+selections[i].unitHeight+'"]').attr('class', selections[i].cssClass);
	}	
	alert("Width: "+selections[1].unitWidth + " Height: " + selections[1].unitHeight);
};

//initialize selection objects
function initSelectionObjects() {
	var x, y,
		X_MIN = 36,
		Y_MIN = 26,
		X_MAX = 228,
		Y_MAX = 130,
		selections = [];
		
	for(y=Y_MAX; y>=Y_MIN; y-=2) {
	   	for(x=X_MIN; x<=X_MAX; x+=2) {
	    	selections.push(new Selection(x, y));	
	    }
	}
};

//initialize selection objects
function setAvailableSelections(availableSizes) {
	for(var i=0;i<selections.length;i++) {

		for(var j=0;j<availableSizes.length;j++) {

			if(selections[i].unitWidth == availableSizes[j][0] && selections[i].unitHeight == availableSizes[j][1]) {
				selections.isAvailable = true;
			}		
			else {
				selections.isAvailable = false;
			}		
		}
	}
	return selections;
};

//basic function to change color of units on click
$(function(){
		$('.selection-type-0').click(function(){
			$(this).css('background-color', 'white'); 
		});
	});

//unavailable selection sizes
document.getElementById("x36y26").className = "blackCell";
document.getElementById("x228y130").className = "blackCell";
document.getElementById("x86y28").className = "blackCell";
document.getElementById("x144y46").className = "blackCell";
document.getElementById("x144y82").className = "blackCell";
document.getElementById("x144y82").className = "blackCell";
document.getElementById("x228y82").className = "blackCell";
document.getElementById("x64y130").className = "blackCell";
document.getElementById("x36y74").className = "blackCell";

#emptyGrid {
	display: inline-block;
	border: 1px solid #00AEEF;
	width: 777px;
	height: 425px;
	padding: 0px;
	margin-top: 5px;
}

#grid {
	float: left;
	border-collapse: collapse;
    border-spacing: 0px;
    padding: 0px;
    margin: 0px;
}

.selectedCell {
	height: 5px;
    width: 5px;   
    background-color: white;
   	text-align: center;
	vertical-align: middle;
	border: 1px solid black;
}

.unavailableCell {
	height: 5px;
    width: 5px;   
    background-color: black;
   	text-align: center;
	vertical-align: middle;
	border: 1px solid black;
}

.defaultCell {
	height: 5px;
    width: 5px;   
    background-color: #939598;
   	text-align: center;
	vertical-align: middle;
	border: 1px solid black;
}

.greenCell {
	height: 5px;
    width: 5px;   
    background-color: #00FE00;
   	text-align: center;
	vertical-align: middle;
	border: 1px solid black;
}
*/



