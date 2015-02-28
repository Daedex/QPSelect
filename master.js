//Run Selection
function runSelection() {
		var airVolume = $('#airVolume').val();
		var sectionWidth = $('#sectionWidth').val();
		var sectionHeight = $('#sectionHeight').val();

		var airVelocity = airVolume/((sectionWidth*sectionHeight)/144);
		
		$('#totalStaticPressure').val(airVelocity); 

	};

	/*   ** GRID AS A TABLE **   
			$(document).ready(function() {
				var $table = $('#pixelgrid');
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

				//document.querySelector(".square").onclick=function(){
					// document.querySelector(".square").style.backgroundColor="red"; 
			//}
			});
		


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