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

	//unavailable selection sizes - will we need to hardcode all of them?
	//i think a couple for loops could do the trick
	//document.getElementById("x36y26").className = "selection-type-none";
	//document.getElementById("x228y130").className = "selection-type-none";
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
	alert(parseInt('x36'));
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
	var x = 60,
		y = 60;
	return [x, y];
};

//clear the current selection
function clearSelection() {
	//sets inputs to null
	$('#unitWidth').val(null);
	$('#unitHeight').val(null);
	//refresh grid to remove previous selections
	refreshGrid();
};


function getre(str, num) {
  if(str === num) return 'nice try';
  var res = [/^\D+/g,/\D+$/g,/^\D+|\D+$/g,/\D+/g,/\D.*/g, /.*\D/g,/^\D+|\D.*$/g,/.*\D(?=\d)|\D+$/g];
  for(var i = 0; i < res.length; i++)
    if(str.replace(res[i], '') === num) 
      return 'num = str.replace(/' + res[i].source + '/g, "")';
  return 'no idea';
};
function update() {
  $ = function(x) { return document.getElementById(x) };
  var re = getre($('str').value, $('num').value);
  $('re').innerHTML = 'Numex speaks: <code>' + re + '</code>';
}






/*
//selection class declaration
var Selection = function (x, y, id) {
	this.width = x;
	this.height = y;
	this.id = id;

	
	Selection.prototype.info () {
		return '<p>This is some info on this selection</p>'
	};
	
};
*/

//basic function to change color of units on click
	$(function(){
			$('.selection-type-0').click(function(){
				$(this).css('background-color', 'white'); 
			});
		});

