<?php 
    fwrite(STDOUT, "10 count:\n"); 

    $i = 10; 
    while ( $i >= 1 ) { 
        fwrite(STDOUT, "Number ".$i."\n"); 
        sleep(1); 
        $i--; 
    }
    fwrite(STDOUT, "You're out.\n");

    fwrite(STDOUT, "Test file to read:\n"."\n".$_SERVER["argv"][1]."\n");

    $fpath = fopen($_SERVER["argv"][1], "r");
    $fileStr = fread($fpath, filesize($_SERVER["argv"][1]));
    fclose($fpath);
    fwrite(STDOUT, $fileStr."\n\n");

    class Person {
        private $name;

        public function __construct($name) {
            $this->name = $name;
        }

        public function print_my_name() { echo "Hello, my name is ".$this->name."!\n"; }
    }

    fwrite(STDOUT, "What is your name (enter below):\n");
    $userName = fread(STDIN, 80);

    $personObj = new Person($userName);
    $personObj->print_my_name();
?>