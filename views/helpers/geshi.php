<?php
App::import('Vendor', 'geshi/geshi');

class GeshiHelper extends AppHelper {

	function parse($code, $lang, $header = null) {
		$geshi = new GeSHI(trim($code), $lang);
		//Set Geshi configuration settings
		if (file_exists(CONFIGS.'geshi.php')) {
			include CONFIGS.'geshi.php';
		}
		if ($header) $geshi->set_header_content($header);
		return $geshi->parse_code();
	}

	function parse_highlight($code, $lang, $start, $end) {
		$geshi = new GeSHI(trim($code), $lang);
		//Set Geshi configuration settings
		if (file_exists(CONFIGS.'geshi.php')) {
			include CONFIGS.'geshi.php';
		}
		$lines = array();
		for($i = 0; $i <= ($end - $start); $i++) {
			$lines[$i] = (String)$start+$i;
		}
		$geshi->highlight_lines_extra($lines);
		return $geshi->parse_code();
	}
}

