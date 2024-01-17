<?php 

// File create/write

$myfile = fopen("newfile.txt","w") or die ("Unable to open file!");
$txt = "Rocky \n";
fwrite($myfile,$txt);
$txt = "Vaisu\n";
fwrite($myfile,$txt);
fclose($myfile);

// Append
$myfile = fopen("newfile.txt","a") or die ("Unable to open file!");
$txt = "Rocky \n";
fwrite($myfile,$txt);
$txt = "Vaisu\n";
fwrite($myfile,$txt);
fclose($myfile);

?>