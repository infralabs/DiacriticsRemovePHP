<?php

header("Content-Type: text/html; charset=utf-8");

include_once("diacriticsRemove.php");

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
print "Original:".PHP_EOL;
print $specialCharacters.PHP_EOL;
print "Converted:".PHP_EOL;
print removeDiacritics($specialCharacters).PHP_EOL;
print "</pre>";

?>