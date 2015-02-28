//Run Selection
function runSelection() {
		var airVolume = $('#airVolume').val();
		var sectionWidth = $('#sectionWidth').val();
		var sectionHeight = $('#sectionHeight').val();

		var airVelocity = airVolume/((sectionWidth*sectionHeight)/144);
		
		$('#totalStaticPressure').val(airVelocity); 

	};