<?php
App::import('Vendor', 'geshi/geshi');

class GeshiHelper extends AppHelper {

	/**
	 * Function to render syntax-highlighted lines of code
	 * 
	 * @param $code string the code to be rendered
	 * @param $lang the language to use the syntax highlighting for
	 * @param $options array header, start, end optional parameters
	 */
	function parse($code, $lang, $options = array()) {
		strtolower($lang);
		$geshi = new GeSHI(trim($code), $lang);
		//Set Geshi configuration settings
		if (file_exists(CONFIGS.'geshi.php')) {
			include CONFIGS.'geshi.php';
		}
		$geshi->language_data['LANG_NAME'] = $lang;
		if (isset($options['header'])) {
			$geshi->set_header_content($options['header']);
		}
		if (isset($options['start'])) {
			if (!isset($options['end'])) $options['end'] = $options['start'];			
			$lines = array();
			for($i = 0; $i <= ($options['end'] - $options['start']); $i++) {
				$lines[$i] = (String)$options['start']+$i;
			}
			$geshi->highlight_lines_extra($lines);
		}
		return $geshi->parse_code();
	}
}

