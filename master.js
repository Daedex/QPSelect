//initialize the grid
function initGrid() {
	var $grid = $('#grid');
	var html = [];
	var x, y, id, 
		X_MIN = 36,
		Y_MIN = 26,
		X_MAX = 228,
		Y_MAX = 130;
		
	for(y=Y_MAX; y>=Y_MIN; y-=2) {
	    html.push('<tr>')
	    for(x=X_MIN; x<=X_MAX; x+=2) {
	    	id = 'x'+x+'y'+y;
	        html.push('<td class="selection-type-0" id="'+id+'"" onclick="clickSelection(this.id);"></td>');
	        //initialize Selection objects here??
	    }
	    html.push('</tr>');
	}
	$grid.append(html.join(''));

	//unavailable selection sizes
	document.getElementById("x36y26").className = "selection-type-na";
	document.getElementById("x228y130").className = "selection-type-na";
	document.getElementById("x86y28").className = "selection-type-na";
	document.getElementById("x144y46").className = "selection-type-na";
	document.getElementById("x144y82").className = "selection-type-na";
	document.getElementById("x144y82").className = "selection-type-na";
	document.getElementById("x228y82").className = "selection-type-na";
	document.getElementById("x64y130").className = "selection-type-na";
	document.getElementById("x36y74").className = "selection-type-na";
};

//refreshes the grid
function refreshGrid() {
	//delete all contents of the table "grid"
	$('#grid').empty();
	//reinitialize the grid
	initGrid();
};

function inputSelection() {
	//retreive and define dimensions from input fields
	var x = $('#unitWidth').val();
	var y = $('#unitHeight').val();
	//create and define id string
	var id = 'x'+x+'y'+y;
	runSelection(id);
};

function clickSelection(id) {
	var id = id,
		arrayId = parseId(id);
	$('#unitWidth').val(arrayId[0]);
	$('#unitHeight').val(arrayId[1]);
	runSelection(id);
};

//run the current selection
function runSelection(id) {
	//refresh grid to remove previous selections
	refreshGrid();	
	//renames the table element's class name to indicate selected size with css
	document.getElementById(id).className = "selected";
};

function parseId(id) {
	var split1 = id.split('y',2);
		split2 = split1[0].split('x',2);
		x = split2[1],
		y = split1[1];
	return [x, y];
};

//clear the current selection
function clearSelection() {
	//emtpy the user input fields
	$('#unitWidth').val(null);
	$('#unitHeight').val(null);
	//refresh grid to remove previous selections
	refreshGrid();
};


//selection class declaration
var Selection = function (x, y, id) {
	this.x = x,
	this.y = y,
	this.id = id;
	
	Selection.prototype.info = function() {
		return '<p>This is some info on this selection</p>'
	};
	
};

//basic function to change color of units on click
	$(function(){
			$('.selection-type-0').click(function(){
				$(this).css('background-color', 'white'); 
			});
		});

