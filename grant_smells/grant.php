<?php

echo "\n";
echo "* * * * * * * * * * * * * * * * * * *\n";
echo "* Let's play the Grant Smells Game! *\n";
echo "* * * * * * * * * * * * * * * * * * *\n";

while(1){
	echo "\nGive me a noun: ";
	$x = readline();
	$out = "Now Grant smells like {$x}.\n";
	echo $out;
}
