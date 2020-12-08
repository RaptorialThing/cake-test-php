<?php 
namespace App;

require __DIR__.'/../vendor/autoload.php';

class RevertCharacters {

public static function revert(String $str) {
	$strOut = preg_replace_callback('/[a-zA-Z0-9]+/',function ($matches) {

		foreach ($matches as $match) {
			$res = strrev($match);
		}

		return $res;

	}, $str);

	return $strOut;
}

}