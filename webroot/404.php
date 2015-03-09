<?php 
/**
 * This is a Opus pagecontroller.
 *
 */
// Include the essential config-file which also creates the $opus variable with its defaults.
include(__DIR__.'/config.php'); 
 
 
// Do it and store it all in variables in the Opus container.
$opus['title'] = "404";
$opus['header'] = "";
$opus['main'] = "This is a Opus 404. Document is not here.";
$opus['footer'] = "";
 
// Send the 404 header 
header("HTTP/1.0 404 Not Found");
 
 
// Finally, leave it all to the rendering phase of Opus.
include(OPUS_THEME_PATH);