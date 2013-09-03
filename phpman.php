<?php
$scriptPath = array_shift($argv);
$query = join(" ", $argv);
$query = urlencode("php {$query}");

$googleURL = "http://www.google.com/search?q={$query}&btnI";

if(strpos(PHP_OS, "Darwin") !== false) {
    
    // It's a Mac, baby!
    $command = "open '{$googleURL}'";

} elseif(strpos(PHP_OS, "Linux") !== false) {

    // It's Linux, you must be a geek!
    $command = "xdg-open {$googleURL}";

} else {
    echo "Your operating system is not yet supported!";
}

exec($command);