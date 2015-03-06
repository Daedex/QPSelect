//initialize the grid
function initGrid() {
	var $grid = $('#grid');
	var html = [];
	var id, x, y,
		X_MAX = 182,
		Y_MAX = 182;
		
	for(y=Y_MAX; y>=24; y-=2) {
	    html.push('<tr>')
	    for(x=24; x<=X_MAX; x+=2) {
	    	id = '"'+'x'+x+'y'+y+'"';
	        html.push('<td class="selection-type-0" id='+id+'></td>');
	        //initialize Selection objects here??
	    }
	    html.push('</tr>');
	}
	$grid.append(html.join(''));

	//unavailable selection sizes - will we need to hardcode all of them?
	//i think a couple for loops could do the trick
	document.getElementById("x182y182").className = "selection-type-none";
	document.getElementById("x180y182").className = "selection-type-none";
	document.getElementById("x182y180").className = "selection-type-none";
	document.getElementById("x180y180").className = "selection-type-none";
	document.getElementById("x178y182").className = "selection-type-none";
	document.getElementById("x178y180").className = "selection-type-none";
	document.getElementById("x178y178").className = "selection-type-none";
	document.getElementById("x180y178").className = "selection-type-none";
	document.getElementById("x182y178").className = "selection-type-none";
};

//refreshes the grid
function refreshGrid() {
	//delete all contents of the table "grid"
	$('#grid').empty();
	//reinitialize the grid
	initGrid();
};

//run the current selection
function runSelection() {
	//refresh grid to remove previous selections
	refreshGrid();
	//store dimensions
	var width = $('#width').val();
	var height = $('#height').val();
	//create id string - this is redundant and will be part of the selection class
	var size = 'x'+width+'y'+height;
	//renames the table element's class name to indicate selected size with css
	document.getElementById(size).className = "selected";
};

//clear the current selection
function clearSelection() {
	//sets inputs to null
	$('#width').val(null);
	$('#height').val(null);
	//refresh grid to remove previous selections
	refreshGrid();
};


//selection class declaration
var Selection = function (x, y) {
	this.width = x;
	this.height = y;
	this.id = '"'+'x'+x+'y'+y+'"';
};
