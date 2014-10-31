Diacritics Removal for PHP
==========================

Removes diacritics from strings containing Latin-1 Supplement, Latin Extended-A, Latin Extended-B and Latin Extended Additional special characters.

Ported from JavaScript (http://jsfiddle.net/infralabs/dJX58/) and modified by customizing to PHP.

Usage
-----

	$specialCharacters = "";
	$specialCharacters .= "Latin-1 Supplement".PHP_EOL;
	$specialCharacters .= "ÀÁÂÃÄÅÆÇÈÉÊËÌÍÎÏÐÑÒÓÔÕÖ×ØÙÚÛÜÝÞßàáâãäåæçèéêëìíîïðñòóôõö÷øùúûüýþÿ".PHP_EOL;
	$specialCharacters .= "Latin Extended-A".PHP_EOL;
	$specialCharacters .= "ĀāĂăĄąĆćĈĉĊċČčĎďĐđĒēĔĕĖėĘęĚěĜĝĞğĠġĢģĤĥĦħĨĩĪīĬĭĮįİıĲĳĴĵĶķĸĹĺĻļĽľĿŀŁłŃńŅņŇňŉŊŋŌōŎŏŐőŒœŔŕŖŗŘřŚśŜŝŞşŠšŢţŤťŦŧŨũŪūŬŭŮůŰűŲųŴŵŶŷŸŹźŻżŽžſ".PHP_EOL;
	$specialCharacters .= "Latin Extended-B".PHP_EOL;
	$specialCharacters .= "ƒǺǻǼǽǾǿ".PHP_EOL;
	$specialCharacters .= "Latin Extended Additional".PHP_EOL;
	$specialCharacters .= "ẀẁẂẃẄẅỲỳ".PHP_EOL;

	print "<pre>";
	print removeDiacritics($specialCharacters).PHP_EOL;
	print "</pre>";