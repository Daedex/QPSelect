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
	};

//create grid for current selection
function createGrid() {  
		$('#grid').empty();
		var unitWidth = $('#unitWidth').val();
		var unitHeight = $('#unitHeight').val();
		var $grid = $('#grid');
		var html = [];
		var W, H;
		for(W=24; W<=182; W+=2) {
			html.push('<tr class="line">')
			for(H=24; H<=182; H+=2) {
				if(W==unitWidth && H==unitHeight) {
					html.push('<td class="selectedSquare">'+'</td>');
				}
				else {
					html.push('<td class="square" onclick="clickSquare();">'+'</td>');
				}
			}
			html.push('</tr>');
		}
		$grid.append(html.join(''));
	};

//makes clicked square the selected square
function clickSquare() {
	$('#unitWidth').val("56");
	$('#unitHeight').val("28");
};

	/** GRID USING DIVS ** // 
	var $grid = $('#pixelGrid');
	for(i=0; i<100; i++) {

	var row = '<div>';

	for(j=0; j<100; j++) {
		row += '<div class = "square">' + '</div>';
	}

	row += '</div>';

	$grid.append(row);
	}

	document.getElementsByClassName('.square').onlick=function() {
	document.getElementsByClassName('.square').style.backgroundColor="red";
	}
	*/