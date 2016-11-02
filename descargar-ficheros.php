<?php
// Include the Dropbox SDK libraries. Using Composer.
require 'vendor/autoload.php';
use Dropbox as dbx;
$accessToken = 'hkUluXyzrCAAAAAAAAAADohHockfAxcD2jwVVs-6EBUFsThRKDJjfZnzzj3PQqbi';
//To test that we've got access to the Core API, try calling getAccountInfo() which will return an Array with information about the user's linked account:
$dbxClient = new dbx\Client($accessToken, "PHP-Example/1.0");
$f = fopen("downloaded-working-draft.txt", "w+b");
$fileMetadata = $dbxClient->getFile("/working-draft.txt", $f);
fclose($f);
print_r($fileMetadata);
//upload file
?>