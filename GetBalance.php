<?php
// Include required library files.
require_once __DIR__ . '/vendor/autoload.php';

echo 'hi there';

$sandbox = true;
$api_username = 'warlox414-merchant_api1.gmail.com';
$api_password = 'Z9VFDKJA2FJQ5DZW';
$api_signature = 'ALGGHNwYi1b3f.SAFEBGIVyGMKAwAxeOTUcB8qI8ZeSPXiP02XSlsQtG';
$print_headers = true;
$log_results = true;
$log_path = '/log';

// Create PayPal object.
$PayPalConfig = array(
    'Sandbox' => $sandbox,
    'APIUsername' => $api_username,
    'APIPassword' => $api_password,
    'APISignature' => $api_signature,
    'PrintHeaders' => $print_headers,
//    'LogResults' => $log_results,
//    'LogPath' => $log_path,
);

$PayPal = new angelleye\PayPal\PayPal($PayPalConfig);

// Prepare request arrays
$GBFields = array('returnallcurrencies' => '');
$PayPalRequestData = array('GBFields'=>$GBFields);

// Pass data into class and load the response into $PayPalResult
$PayPalResult = $PayPal->GetBalance($PayPalRequestData);

// Write the contents of the response array to the screen for demo purposes.
echo '

<pre />';
print_r($PayPalResult);

?>