<?php 

/**
 * This file is part of the Chatomz PHP Framework package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @author 		Firman Setiawan
 * @copyright	Copyright (c) Firman Setiawan
 *
 */


// -------------------------------------------------------------------------------

## AUTOLOAD SYSTEM
## THIS FUNTION for all class system
## this is funtion system
## !important for not modified

// ---------------------------- WARNING -----------------------------------------
function warning($teks, $info=null) {
	if (!is_null($info))
		$info = ' - <i>(' . $info . ')</i>';
	echo "<b>Chatomz Berkata : </b>" . $teks . $info;
	die();
}

// -----------------------------------------------------------------------------

## AUTOLOAD BASE_URL
## THIS FUNTION for all class system
## this is funtion system
## !important for not modified

// ---------------------------- WARNING -----------------------------------------
function base_url($link= null) {
	global $Url;
	if (is_null($link)) return $Url['BASE_URL']; 
	
	return $Url['BASE_URL'] . $link;
}

// -----------------------------------------------------------------------------