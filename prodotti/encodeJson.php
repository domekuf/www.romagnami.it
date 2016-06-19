<?php

$to_encode='
{
	\'example\':\'nicola landi <a href="asd"> gay </a>\'
}

';

$newfile = fopen('encoded.json', "a");//r+ era a
fwrite($newfile, json_encode(htmlentities($to_encode)), 1024);
fclose($newfile);


?>