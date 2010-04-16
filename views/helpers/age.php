<?php
date_default_timezone_set('America/Los_Angeles'); 
class AgeHelper extends AppHelper {
	function calculateAge($birthday){ 
		return floor((time() - strtotime($birthday))/31556926);
	}
}
?>