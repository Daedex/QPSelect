function myAlert() {
	alert("please work");
};
/*
//selection class declaration
var Selection = function () {
	this.width = width;
	this.height = height;

};

//run the current selection
function runSelection() {
	alert("test");
};

//clear the current selection
function clearSelection() {
	$('#width').val(null);
	$('#height').val(null);
};

//initialize the grid
function initGrid() {
	alert("test");
	var $grid = $('#grid');
	var html = [];
	var x, y,
		X_MAX = 80;
		Y_MAX = 80;
	for(y=0; y<=Y_MAX; y++) {
		html.push('<tr>')
		for(x=0; x<=X_MAX; x++) {
				html.push('<td class="selection-type-0" id="x0y0" onclick="clickSquare();">'+'</td>');
			}
		}
		html.push('</tr>');
	}
	$grid.append(html.join(''));
};

//create grid for current selection
function createGrid() {  
	$('#grid').empty();
	var unitWidth = $('#unitWidth').val();
	var unitHeight = $('#unitHeight').val();
	var $grid = $('#grid');
	var html = [];
	var W, H;
	for(H=182; H>=24; H-=2) {
		html.push('<tr class="line">')
		for(W=24; W<=182; W+=2) {
			if(W==unitWidth && H==unitHeight) {
				html.push('<td class="selectedSquare">'+'</td>');
			}
			else {
				html.push('<td class="square" id="square'+W+'x'+H+'" onclick="clickSquare();">'+'</td>');
			}
		}
		html.push('</tr>');
	}
	$grid.append(html.join(''));
};