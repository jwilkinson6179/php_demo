<?php 
    fwrite(STDOUT, "10 count:\n"); 

    $i = 10; 
    while ( $i >= 1 ) { 
        fwrite(STDOUT, "Number ".$i."\n"); 
        sleep(1); 
        $i--; 
    }
    fwrite(STDOUT, "You're out.\n");

    fwrite(STDOUT, "What is your name (enter below):\n");
    $userName = fread(STDIN, 80); // Read up to 80 characters or a newline
    fwrite(STDOUT, 'Hello '.$userName."!\n\n");

    fwrite(STDOUT, "Test file to read:\n"."\n".$_SERVER["argv"][1]."\n");

    $fpath = fopen($_SERVER["argv"][1], "r");
    $fileStr = fread($fpath, filesize($_SERVER["argv"][1]));
    fclose($fpath);
    fwrite(STDOUT, $fileStr."\n\n");
?>