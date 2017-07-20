<?php 

$sql_file = 'edu_portals.sql';
$replace_from = 'edu_portals.home';
$replace_to = 'edu.sitedevel.com';

ini_set('memory_limit', '-1');

$ff = file_get_contents($sql_file);
$ff = str_replace($replace_from, $replace_to, $ff);

$count = 0;

function serializereplace($matches)
{
    global $replace_to;
    global $count;
    $found = $matches[0];
    
    if (strpos($found, $replace_to) !== FALSE) {
	preg_match('/"(.*)"/', $found, $out); 
	
	$count++;
	
	return serialize($out[1]);
    } else {
	return $found;
    }
}

$ff = preg_replace_callback(
            '|s\:[0-9]*\:".*?"\;|',
            "serializereplace",
            $ff);

file_put_contents('out.sql', $ff);

echo $count. " items replaced.";

?>