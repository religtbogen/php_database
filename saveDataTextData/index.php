<?php


$zeitpunkt = date('j.m.Y h:i:s');
$inhalt = "$zeitpunkt: Eine weitere Information\n";
$datei = 'beispiel.txt';
// fopen für das Öffnen der Datei
$dh = fopen($datei, 'a');
// Dateienhandler fwirte zum Beschreiben der Datei
fwrite($dh, $inhalt);
// Zum schließen der Datei
fclose($dh);

echo $dh . ' ' . $inhalt;
