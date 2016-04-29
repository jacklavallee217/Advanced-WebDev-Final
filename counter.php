
<!--
	Jack Lavallee
	3/8/2016
	lab5
-->

<?php

$file = "counter.txt";

//This is the text file we keep the current vistor counter
$handle = fopen($file, 'r+') ;

//Here we open the file, and set the permissions to read plus write


/* TO DO: insert a conditional expression that will test whether the fopen
successfully opened the file. See your notes for an example. */

$data = fread($handle, 512) ;
//Get the count from the file

$count = $data + 1;
//Add the new visitor to the count

print "<div id='visitor'>You are visitor number $count.</div>";
//Prints the count on the page

fseek($handle, 0) ;
//Puts the pointer back to the beginning of the file

fwrite($handle, $count) ;
//saves the new count to the file

fclose($handle) ; //closes the file
?> 