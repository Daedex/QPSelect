////////////////////////////////////////////////////////////////////////////////////////////////
//VIEW - RENDERING FUNCTIONS / DOM MANIPULATIONS
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
	    	html.push('<td class="defaultCell" data-x="'+x+'" data-y="'+y+'"></td>');	     	
	    }
	    html.push('</tr>');
	}
	$grid.empty();
	$grid.append(html.join(''));
};

//pass final calculation results to render all new information
function render(selections) {
	
	//$('td[data-x="'+x+'"][data-y="'+y+'"]').attr('class','selectedCell');

	//alert("Width: "+selections[0].unitWidth + " Height: " + selections[0].unitHeight);
};

////////////////////////////////////////////////////////////////////////////////////////////////
//CONTROLLER - USER INPUTS
////////////////////////////////////////////////////////////////////////////////////////////////

//select unit type
document.getElementById("selectUnitType").onchange = selectUnitType;
function selectUnitType() {
	var unitType = $('#selectUnitType').val();
	if(unitType == "vision") {
		return render(initAvailableSelections(visionSizes));
	}
	else if (unitType == "skyline") {
		return render(initAvailableSelections(skylineSizes));
	}
};

//enter unit width and unit height
document.getElementById("inputDimensions").onclick = inputDimensions;
function inputDimensions() {
	var unitWidth = $('#unitWidth').val(),
		unitHeight = $('#unitHeight').val();
};

//select fan spacing
document.getElementById("selectFanSpacing").onchange = selectFanSpacing;
function selectFanSpacing() {
	var fanSpacing = $('#selectFanSpacing').val();
};

//clear all inputs
document.getElementById("clearInputs").onclick = clearInputs;
function clearInputs() {
	var unitType = $('#selectUnitType').val(null),
		unitWidth = $('#unitWidth').val(null),
		unitHeight = $('#unitHeight').val(null),
		fanSpacing = $('#selectFanSpacing').val(null);
};

////////////////////////////////////////////////////////////////////////////////////////////////
//MODEL - DATA AND LOGIC
////////////////////////////////////////////////////////////////////////////////////////////////

//initialize available selections
function initAvailableSelections(availableSizes) {
	var selections = [];
	for(var i=0;i<availableSizes.length;i++) {
		selections.push(new Selection(availableSizes[i][0], availableSizes[i][1]), true);
	}
	return selections;
};

//initialize selection object
var Selection = function(unitWidth, unitHeight, isAvailable) {
	this.unitWidth = unitWidth,
	this.unitHeight = unitHeight,
	this.isAvailable = isAvailable;
		
	Selection.prototype.info = function() {
		var testInfo = '<p>This object\'s info goes here.</p>';
		return testInfo;
	};
};

////////////////////////////////////////////////////////////////////////////////////////////////
//FIDDLE CODE
////////////////////////////////////////////////////////////////////////////////////////////////
/*

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

*/