//run the current selection
function runSelection() {
		var airVolume = $('#airVolume').val();
		var airVolume = $('#totalStaticPressure').val();
		var unitWidth = $('#unitWidth').val();
		var unitHeight = $('#unitHeight').val();
		
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
		$('#selectGrid').empty();	
		var $table = $('#selectGrid');
		var html = [];
		var row, col;
		for(row=0; row<80; row++) {
			html.push('<tr class="line">')
			for(col=0; col<80; col++) {
				html.push('<td class="square">'+'</td>');
			}
			html.push('</tr>');
		}
		$table.append(html.join(''));
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