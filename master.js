//run the current selection
function runSelection() {
		var airVolume = $('#airVolume').val();
		var airVolume = $('#totalStaticPressure').val();
				
		//run createGrid function 
		createGrid();
	};

//clear the current selection
function clearSelection() {
		$('#airVolume').val(null);
		$('#totalStaticPressure').val(null);
		$('#powerSupply').val(null);
		$('#unitWidth').val(null);
		$('#unitHeight').val(null);
		createGrid();
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
					html.push('<td class="square' + W + "x" + H + '" onclick="clickSquare();">'+'</td>');
				}
			}
			html.push('</tr>');
		}
		$grid.append(html.join(''));
	};

//makes clicked square the selected square
function clickSquare() {
	$('#unitWidth').val("unit width"); //need to get values from square that was clicked
	$('#unitHeight').val("unit height");
	runSelection();
};

function selectRatio() {
	//this function should handle the two selection methods for a square
	//user inputs the "Unit Width" and "Unit Height"
	//or the user clicks the square with the dimensions they want
};

function runOnePac() {

}