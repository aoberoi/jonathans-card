$request =  'http://jonathanstark.com/card/api/balances';
$session = curl_init($request);
curl_setopt($session, CURLOPT_HEADER, false);
curl_setopt($session, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($session); 
curl_close($session);

echo $response;