<?php
date_default_timezone_set('America/Los_Angeles'); 
class ProCodeHelper extends AppHelper {
	function calculateAge($birthday){ 
		return floor((time() - strtotime($birthday))/31556926);
	}
}
?>