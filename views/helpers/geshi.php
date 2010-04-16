<?php
App::import('Vendor', 'geshi/geshi');

class GeshiHelper extends AppHelper {

	function parse($code, $lang) {
		$geshi = new GeSHI(trim($code), $lang);

		//Set Geshi configuration settings
		if (file_exists(CONFIGS.'geshi.php')) {
			include CONFIGS.'geshi.php';
		}

		return $geshi->parse_code();
	}

}

