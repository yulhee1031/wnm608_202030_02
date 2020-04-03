<?php


function print_p($v) {
		echo "<pre>",print_r($v),"<pre>";
}

function getData($str) {
	return json_decode(file_get_contents($str));
}

