<?php 
/**
 * This is a Opus pagecontroller.
 *
 */
// Include the essential config-file which also creates the $opus variable with its defaults.
include(__DIR__.'/config.php'); 
 
 
// Do it and store it all in variables in the Opus container.
$opus['title'] = "Hello World";
 
$opus['header'] = <<<EOD
<img class='sitelogo' src='img/opus.png' alt='Opus Logo'/>
<span class='sitetitle'>Opus webbtemplate</span>
<span class='siteslogan'>Återanvändbara moduler för webbutveckling med PHP</span>
EOD;
 
$opus['main'] = <<<EOD
<h1>Hej Världen</h1>
<p>Detta är en exempelsida som visar hur Opus ser ut och fungerar.</p>
EOD;
 
$opus['footer'] = <<<EOD
<footer><span class='sitefooter'>Copyright (c) Pelle Andersson () | <a href='https://github.com/mosbth/Anax-base'>Opus på GitHub</a> | <a href='http://validator.w3.org/unicorn/check?ucn_uri=referer&amp;ucn_task=conformance'>Unicorn</a></span></footer>
EOD;
 
 
// Finally, leave it all to the rendering phase of Opus.
include(OPUS_THEME_PATH);