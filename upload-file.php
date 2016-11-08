<?php
// Include the Dropbox SDK libraries. Using Composer.
require 'vendor/autoload.php';
use Dropbox as dbx;
$accessToken = 'hkUluXyzrCAAAAAAAAAAFKFUOkW7I2cKHeIenwkY2kG3b4-JlY8qUy5FMU8cV8Th';
//To test that we've got access to the Core API, try calling getAccountInfo() which will return an Array with information about the user's linked account:
$dbxClient = new dbx\Client($accessToken, "PHP-Example/1.0");
$f = fopen("Directrices.docx", "rb");
$result = $dbxClient->uploadFile("/Directrices.docx", dbx\WriteMode::add(), $f);
fclose($f);
print_r($result);
//upload file
?>