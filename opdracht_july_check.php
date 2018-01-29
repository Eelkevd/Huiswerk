<?php


	function getMonth(){
		$date = date("m");
		if ($date == "07") {
			echo "It's July, so it can get really hot.";
		} else {
			echo "It's not July, o at least we're not in the peak of heat.";
		}
	}

getMonth();

?>