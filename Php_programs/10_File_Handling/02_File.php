<?php

// Php open file - fopen()

// A better method to open files is with the fopen() function. This function gives you more options than the readfile() function

$myfile = fopen("dummy.txt","r") or die ("unable to open file!");
echo fread($myfile, filesize("dummy.txt"));
echo "<br><br>";

// 
echo (filesize("file.php"));
echo "<br><br>";
fclose($myfile); 

?>


<?php
$file = fopen("hello.txt","r") or die ("Unable to open file!");
// fgets() - function is used to read a single line from a file
echo(fgets($file));
echo "<br><br>";

?>

<!-- Php filesystem functions -->

<?php

// basename() - Returns the filename component of a path
$path = "/test/home.php";
// Show filename
echo basename($path) . "<br>";
// Show filename, but cut off file extension for ".php" files
echo basename($path, ".php");
echo "<br><br>";

// chgrp() - Changes the file group
chgrp("hello.txt","admin");




